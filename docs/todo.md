# To do: tooling for the Google Cloud deployment

- Tools to build before and after the move, with what is already known about each
- Design: [infra-architecture.md](infra-architecture.md), [user-management.md](user-management.md), [app-architecture.md](app-architecture.md); secrets: [secrets.md](secrets.md)
- Walkthroughs that use them: [use-cases/](use-cases/README.md)

## Tooling

### T1 Infrastructure definition

- **What**: one repeatable definition of the project's resources, written in **Terraform** and kept in this repository (e.g. `infra/gcp/`)
- **Why Terraform** (recommended over a `gcloud` script)
  - the usual way to manage Google Cloud: Google maintains the provider, and it covers every resource here (Cloud Run with IAP, bucket, Cloud SQL, Artifact Registry, IAM, Secret Manager, Scheduler)
  - `terraform plan` shows what would change before anything changes, and finds drift (changes made by hand in the console)
  - the definition is reviewed like code: changes go through pull requests
  - free; state kept in a small versioned bucket in the project (free tier)
  - a `gcloud` script creates resources but cannot show differences or correct drift; it grows into a fragile copy of Terraform
- **Steps**: written and reviewed by the cloud admin; `terraform plan` reviewed before every `terraform apply`; see [migration/plan.md](migration/plan.md) phase 2
- **Kept out of Terraform** (manual, in T10): Cloud Identity organization and groups, IAP OAuth consent screen and custom client (Google's API for these is deprecated), secret values ([secrets.md](secrets.md) S4)
- **Known**
  - APIs: Cloud Run, Cloud Storage, Cloud SQL Admin, Artifact Registry, Secret Manager, IAP
  - service accounts `cmacc-read`, `cmacc-edit`; never the default Compute Engine account
  - bucket: free-tier US region, Standard class, uniform access, public access prevention, versioning, lifecycle rule for old versions
  - Cloud SQL: `db-f1-micro`, no HA, smallest disk, automated backups, `cloudsql.iam_authentication` on, IAM users for `cmacc-edit`
  - Artifact Registry repository `cmacc` with a cleanup policy keeping the last few images
  - Cloud Run services `cmacc-read` (`CMACC_SAVES=false`) and `cmacc-edit` (saves on): IAP on, request-based billing, 1 vCPU, 512 MiB, concurrency 10, min 0, max 2, timeout 60 s, startup probe (C15, C17)
  - bucket lifecycle: keep the newest 20 earlier versions, delete earlier versions older than 365 days (C12)
  - alerts: backup job failure or no success in 2 days; 5xx on either service (C18)
  - region `us-central1` (C19)
  - IAM bindings exactly as the table in [user-management.md](user-management.md); IAP service agent gets Run Invoker
  - budget: not in Terraform; set by hand by the project owner (C22)
- **Run by**: cloud admin; budget part by the project owner

### T2 One-time template load

- **What**: copy `Doc/` from a checkout of the templates repository into the empty bucket at cutover; afterwards the bucket is the source of truth
- **Known**
  - `gcloud storage rsync --recursive <templates-checkout>/Doc gs://<bucket>/Doc`, and the same for `File/` (C11)
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
- **Decided**: local build with the pinned toolchain (emulated amd64); run by hand; CI later with Workload Identity Federation ([secrets.md](secrets.md) M4) (C20, C21)

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
- **Decided** (C23): daily at 03:00 UTC; branch `cloud-backup`, never merged; commit messages carry counts only, so the job needs no database access

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
- **Decided** (C24): the legacy container and parity gate stay until the legacy public site is retired

### T9 Secret helper

- **What**: small wrapper for the secret change in [use-cases/cloud-admin.md](use-cases/cloud-admin.md): add version from a file, pin the service to it, disable the old one
- **Known**: pins version numbers, never `latest`; destroys old versions to stay under 6 active
- **Open**: only worth building once a secret exists ([secrets.md](secrets.md))

### T10 Identity setup checklist

- **What**: the manual, one-time steps in Google's web consoles, written as a checklist
- **Known**: Cloud Identity Free organization and domain; two super admins; groups and their owners; external members allowed; 2-Step Verification enforced; IAP OAuth consent screen and custom client ([secrets.md](secrets.md) S1)
  - test accounts, one per role, for the production acceptance test ([migration/plan.md](migration/plan.md) phase 7)
- **Run by**: project owner and cloud admin

### T11 Templates repository split

- **What**: move `Doc/` and `File/` (C11) out of this repository into its own templates repository
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

## Specification choices

- Questions that needed only a behavior or implementation decision, not a business one
- **All accepted as recommended (2026-11-14)**; each answer now lives in the design document named in the last column, and is kept here as the record
- Business decisions (domain, project name, billing, which templates repository, the public site's future, budget amounts) stay open in their documents

### App behavior

| # | Question | Recommendation | Lands in |
|---|---|---|---|
| C1 | Setting that turns saves off on the read service | `CMACC_SAVES=false`: Save button hidden, any request with `submit` answered 403 with a short message, nothing written | app-architecture |
| C2 | Two editors save the same template at once | optimistic locking: the form carries the object's generation; the write uses Cloud Storage's `if-generation-match`; a stale save is refused with "changed since you opened it, reload" instead of silently overwriting | app-architecture, edit-template use case |
| C3 | Save records in Cloud SQL: what is stored | one table: id, template path, editor email, time (UTC), new object generation, previous generation, size; nothing else in the database for now | app-architecture |
| C4 | IAP header missing or invalid | in the cloud: saves refused (no identity, no save); views still served, since IAP already admitted the request. Locally: a dev setting supplies a fixed test identity | app-architecture |
| C5 | Cross-site save protection | accept a save only when `Origin` (or `Sec-Fetch-Site: same-origin`) shows the form came from the edit service itself; no secret needed ([secrets.md](secrets.md) M1) | app-architecture |
| C6 | Read cache | per instance, in memory, bounded (e.g. 64 MB, least recently used); entries expire after 60 seconds; a save refreshes the saving instance's entry at once; folder listings cached the same way | app-architecture |
| C7 | Cloud Storage errors during a render (timeout, 429, 5xx) | `gcsfs` retries; if a read still fails, the page reports the template as unavailable (like a missing include), never a half page and never a stack trace | app-architecture |
| C8 | GitHub and Compare links in the tab bar | hidden on the cloud deployment (`CMACC_REPO_URL` empty): git is a backup there, not the live source, so its copy may be behind | app-architecture |
| C9 | Edit-form note ("your changes are temporary") | replace with: saves are kept, earlier versions can be restored by a user admin | app-architecture |
| C10 | Creating and deleting templates | not supported, as in legacy; new templates arrive by a user admin uploading with `gcloud`; revisit if editors ask | user-management |

### Storage and security

| # | Question | Recommendation | Lands in |
|---|---|---|---|
| C11 | `File/` (supporting files, about 1 MB) | objects in the same bucket under `File/`, moved to the templates repository with `Doc/`; icons and images stay baked into the app image | app-architecture, T2, T11 |
| C12 | Old object versions | lifecycle rule: keep the newest 20 earlier versions of each template, and delete earlier versions older than 365 days | infra-architecture, T1 |
| C13 | Remote includes from the cloud | keep fetching public `http(s)` URLs, but refuse private, loopback and link-local addresses (including the metadata server), follow no redirects to them, and keep the timeout; editors can add such includes, so the server must not reach internal addresses | app-architecture |
| C14 | User admins reading save records | no database access; save events are also written to the logs (C16), which user admins can read | user-management |

### Operations

| # | Question | Recommendation | Lands in |
|---|---|---|---|
| C15 | Cloud Run sizing | 1 vCPU, 512 MiB (render peaks stay under 200 MB, [decisions.md](decisions.md) D4), concurrency 10, max 2 instances, min 0, request timeout 60 s | infra-architecture, T1 |
| C16 | Log format | one JSON line per request to stdout (Cloud Logging reads it): path, view, status, render time; saves add editor email and generations | app-architecture |
| C17 | Health check | Cloud Run startup probe on a small page that renders without reading the bucket; no liveness probe needed | app-architecture, T1 |
| C18 | Alerts | backup job failed or no success in 2 days; read or edit service 5xx above a few per hour; budget thresholds (amounts are the owner's) | infra-architecture, T1 |
| C19 | Region | `us-central1` (free-tier region; Cloud Run, Cloud SQL and Scheduler all available) unless users' location argues for `us-east1` | infra-architecture |
| C20 | Image builds | local `docker buildx` with the pinned toolchain, as the repository does today; Cloud Build only if builds move to CI | T3 |
| C21 | Deploys | manual by the cloud admin (`task cloud:deploy`); CI later with Workload Identity Federation | T3, user-management |
| C22 | Budget resource | set by hand by the owner in the console, not in Terraform, so the cloud admin's Terraform needs no billing role | T1 |
| C23 | Backup job details (T7) | daily at 03:00 UTC, branch `cloud-backup`, never merged; commit messages carry counts only (no database access for the job) | T7 |
| C24 | Legacy container and parity gate | keep until the legacy public site is retired; they are the reference for the renderer | T8 |
| C25 | Sign-out | a "Sign out" link to IAP's sign-out URL (`?gcp-iap-mode=CLEAR_LOGIN_COOKIE`) in the header | app-architecture |

## App changes the tooling depends on

- `gcsfs` added to the pinned dependencies, so `CMACC_STORE=gs://…` works
- `CMACC_SAVES=false`: no Save button, saves answered 403 (C1)
- verify the IAP signed header; no valid identity, no save; dev setting for a fixed test identity (C4)
- accept saves only from the edit service's own pages (`Origin` / `Sec-Fetch-Site`) (C5)
- write with `if-generation-match`; refuse a stale save with "changed since you opened it, reload" (C2)
- save record in Cloud SQL per save: path, editor, time, generations, size (Python connector, IAM authentication) (C3)
- per-instance read cache: about 64 MB LRU, 60-second expiry, refreshed on save, listings included (C6)
- storage read failures reported like a missing include (C7)
- remote includes: refuse private, loopback, link-local addresses, also after redirects (C13)
- one JSON log line per request; saves with editor and generations (C16)
- startup-probe page that does not read the bucket (C17)
- "Sign out" link to IAP's sign-out URL (C25)
- edit form note: "Saves are kept. Earlier versions can be restored by a user admin." (C9)
- `File/` served from the bucket (C11)
