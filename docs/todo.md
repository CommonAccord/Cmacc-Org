# To do: tooling for the Google Cloud deployment

- Tools to build before and after the move, with what is already known about each
- Design: [infra-architecture.md](infra-architecture.md), [user-management.md](user-management.md), [app-architecture.md](app-architecture.md); secrets: [secrets.md](secrets.md)
- Walkthroughs that use them: [use-cases/](use-cases/README.md)

## Tooling

### T1 Infrastructure definition

- **What**: one repeatable definition of the project's resources (Terraform, or a `gcloud` script kept in the repository)
- **Known**
  - APIs: Cloud Run, Cloud Storage, Cloud SQL Admin, Artifact Registry, Secret Manager, IAP
  - service accounts `cmacc-read`, `cmacc-edit`; never the default Compute Engine account
  - bucket: free-tier US region, Standard class, uniform access, public access prevention, versioning, lifecycle rule for old versions
  - Cloud SQL: `db-f1-micro`, no HA, smallest disk, automated backups, `cloudsql.iam_authentication` on, IAM users for `cmacc-edit`
  - Artifact Registry repository `cmacc` with a cleanup policy keeping the last few images
  - Cloud Run services `cmacc-read` (saves off) and `cmacc-edit` (saves on): IAP on, min instances 0, small max, request-based billing
  - IAM bindings exactly as the table in [user-management.md](user-management.md); IAP service agent gets Run Invoker
  - budget and alerts: applied by the project owner (billing account roles)
- **Run by**: cloud admin; budget part by the project owner
- **Open**: Terraform or script; where its state lives ([secrets.md](secrets.md) S4); groups and Cloud Identity settings stay manual (T10)

### T2 One-time template load

- **What**: copy `Doc/` from a checkout of the templates repository into the empty bucket at cutover; afterwards the bucket is the source of truth
- **Known**
  - `gcloud storage rsync --recursive <templates-checkout>/Doc gs://<bucket>/Doc`
  - refuses to run if the bucket already holds objects: it must never overwrite live templates
  - checks the result: object count and checksums match the checkout; records the templates repository commit that was loaded
- **Run by**: cloud admin, once
- **Depends on**: T11

### T3 Deploy task

- **What**: `task cloud:deploy`: build and deploy the app from `master`, as in [use-cases/cloud-admin.md](use-cases/cloud-admin.md)
- **Known**
  - refuses a dirty checkout or a branch other than `master`
  - builds `app/Dockerfile` for `linux/amd64`, pushes to Artifact Registry, takes the digest
  - deploys the same digest to `cmacc-read` and `cmacc-edit`; each keeps its own settings
  - never touches the bucket: changes the app only
  - prints the previous revisions for rollback; runs T4 afterwards
- **Run by**: cloud admin
- **Open**: local build (emulated amd64) or Cloud Build; later CI with Workload Identity Federation ([secrets.md](secrets.md) M4)

### T4 Cloud smoke test

- **What**: `task cloud:pulse`: the existing pulse checks, run against the deployed services through IAP
- **Known**: landing page, a folder listing, and a few contracts render without legacy error text; read service rejects saves
- **Run by**: cloud admin, after every deploy
- **Open**: how a script authenticates through IAP on Cloud Run (a service account identity token, no key, is the aim; [secrets.md](secrets.md) M2)

### T5 Backup script

- **What**: one command that copies the bucket's `Doc/` into a dated local folder, as in [use-cases/user-admin.md](use-cases/user-admin.md)
- **Known**
  - `gcloud storage rsync --recursive gs://<bucket>/Doc <folder>/Doc`
  - verifies: object count in the bucket = file count locally
  - works without a repository checkout (user admins may not have one): a standalone script, also exposed as `task backup`
- **Run by**: user admin or cloud admin
- **Replaced by**: T7 for routine backups; stays for ad hoc copies

### T6 Restore helper

- **What**: put back one template or a whole tree, from a local backup or from an earlier object version
- **Known**: lists versions (`gcloud storage ls --all-versions`); restores with `gcloud storage cp`; asks for confirmation before overwriting live objects; restoring makes a new version, so it can itself be undone
- **Run by**: user admin or cloud admin

### T7 Automated backup to git

- **What**: a scheduled job that copies the bucket's `Doc/` into the templates repository and pushes a commit when anything changed; replaces hand-run backups (T5) as the routine
- **Why git, and why it may be redundant**
  - the bucket already keeps every version of every object (object versioning), inside Google Cloud
  - git adds a second copy outside Google Cloud, with readable history and diffs, in the same repository local tests use (T8)
  - that overlaps with versioning; it is kept for now, and revisited once the bucket has run for a while
- **Known**

  | Part | Choice |
  |---|---|
  | Runs as | Cloud Run job `cmacc-backup`, same project and region |
  | Trigger | Cloud Scheduler, daily (and on demand: `gcloud run jobs execute cmacc-backup`) |
  | Identity | service account `cmacc-backup`: Storage Object Viewer on the bucket, Secret Accessor on the git credential only |
  | Git credential | write access to the templates repository only (deploy key or app token), in Secret Manager ([secrets.md](secrets.md) S3) |
  | Target | a dedicated branch (e.g. `cloud-backup`) of the templates repository, so it never collides with human commits |

  1. clone the target branch (shallow) into the job's scratch disk
  2. mirror `gs://<bucket>/Doc` into the working tree's `Doc/`: new and changed objects copied, deleted objects removed
  3. no changes: stop, no empty commit
  4. commit as a named bot identity (no personal email), message with the time and counts of added, changed, removed templates
  5. push; on any failure the job exits non-zero
  6. a Cloud Monitoring alert emails the cloud admins when a run fails or no run succeeds for two days
- **Cost**: within free tiers (Cloud Run jobs share the Cloud Run allowance; Cloud Scheduler allows a few free jobs per billing account); the corpus is about 40 MB
- **Restore**: from git, any commit of the backup branch is a full tree for T6
- **Run by**: the job; cloud admin sets it up (T1) and watches the alerts
- **Open**
  - schedule (daily, or after every save)
  - which branch, and whether it is ever merged to the templates repository's main branch
  - whether commit messages list who saved what since the last run (needs read access to the save records in Cloud SQL)

### T8 Local development with `Doc/` in the templates repository

- **What**: today's local tools read `Doc/` from this checkout; they need to read it from a checkout of the templates repository
- **Known**: affected: `lint-links`, `lint-includes`, `sweep`, `parity`, `app:sweep`, the templates image (`infra/templates.Dockerfile`), and the legacy image (`Dockerfile` bakes `Doc/`)
  - checkout script: `task templates:checkout`
    - clones `<templates-repo>` into a local folder (default: sibling `../<templates-repo>`), or updates it if present
    - checks out a pinned commit recorded in this repository (e.g. `infra/templates.lock`), so local tests are repeatable; `-- --latest` moves the pin to the newest commit and updates the lock file
    - `-- --branch cloud-backup` checks out the latest backup from T7, to test against live content
    - refuses to touch a checkout with local changes
  - one setting (e.g. `CMACC_DOC`) pointing at the checkout's `Doc/`; `task doctor` reports when it is missing and prints the checkout command
  - image builds take the templates checkout as a second build context instead of copying from this repository
  - also usable: a backup folder from T5
- **Open**: whether the legacy container and parity gate are still needed after the move

### T9 Secret helper

- **What**: small wrapper for the secret change in [use-cases/cloud-admin.md](use-cases/cloud-admin.md): add version from a file, pin the service to it, disable the old one
- **Known**: pins version numbers, never `latest`; destroys old versions to stay under 6 active
- **Open**: only worth building once a secret exists ([secrets.md](secrets.md))

### T10 Identity setup checklist

- **What**: the manual, one-time steps in Google's web consoles, written as a checklist
- **Known**: Cloud Identity Free organization and domain; two super admins; groups and their owners; external members allowed; 2-Step Verification enforced; IAP OAuth consent screen and custom client ([secrets.md](secrets.md) S1)
- **Run by**: project owner and cloud admin

### T11 Templates repository split

- **What**: move `Doc/` out of this repository into its own templates repository
- **Known**
  - history kept: the new repository is made from this one's `Doc/` history (e.g. `git subtree split` or `git filter-repo`), not a fresh copy
  - then `Doc/` is removed here, in the same change as T8, so the local tools keep working
  - the corpus checks (`lint-links`, `lint-includes` for `Doc/`) can move to the templates repository and run there
  - repository changes are made by the operator (scripts, not run by agents)
- **Run by**: cloud admin with the repository owners
- **Open**
  - which repository: a new one, or upstream CommonAccord's (the corpus is upstream's, [decisions.md](decisions.md) D5)
  - the public site deploys `Doc/` from this repository's `master` (`.github/workflows/deploy.yml`); it needs the templates from the new repository, or stays on this repository until retired

### T12 Local object store

- **What**: a service running locally that stands in for Cloud Storage, so the app's `gs://` path, saves, and the backup and restore tools can be tested without Google Cloud
- **Known**
  - fake-gcs-server (open source Cloud Storage emulator) in a container on OrbStack, image pinned by digest
  - started by a task (e.g. `task store:up`), seeded from the templates checkout (T8) into a bucket with the same name and layout as the cloud one
  - the app runs unchanged with `CMACC_STORE=gs://<bucket>/Doc` and `STORAGE_EMULATOR_HOST` pointing at the emulator: `gcsfs` uses that variable as its endpoint
  - `gcsfs`'s own test suite runs against fake-gcs-server, so the combination is used in practice
  - local only: listens on the OrbStack network or `127.0.0.1`, no authentication, data thrown away on restart
  - `task app:dev` gains a mode that deploys the app against the emulator instead of a Pod volume
- **To confirm**
  - object versioning: fake-gcs-server has some support (generations); check it behaves enough like Cloud Storage for T6 restores
  - whether `gcloud storage` can target the emulator (endpoint override), so T5, T6 and T7 can be tested end to end
- **Run by**: developers and the cloud admin, locally

## App changes the tooling depends on

- `gcsfs` added to the pinned dependencies, so `CMACC_STORE=gs://…` works
- setting to switch saves off (read service): no Save button, saves rejected
- verify the IAP signed header; record the editor's email with each save in Cloud SQL (Python connector, IAM authentication)
- per-instance read cache, refreshed on save; expiry time decided
- save protection against cross-site requests ([secrets.md](secrets.md) M1)
- edit form text: drop "your changes are temporary", which stops being true
