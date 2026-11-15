# Secrets inventory

- Every integration point in the Google Cloud design, and whether it needs a stored secret
- Vault: **Secret Manager** in the same project; one secret per value, Secret Accessor granted per secret to the one identity that needs it
- Changing a secret: [use-cases/cloud-admin.md](use-cases/cloud-admin.md); tooling: [todo.md](todo.md)
- Design rule: prefer Google identities (service accounts, IAM authentication, Workload Identity Federation) over stored secrets; a secret is the exception and is listed here

## Needs a stored secret

| # | Integration | Secret | Used by | Stored in | Notes |
|---|---|---|---|---|---|
| S1 | IAP custom OAuth client (outside Google accounts allowed in) | OAuth client secret | IAP itself, configured once | IAP settings (Google keeps it); copy in Secret Manager only if infrastructure code must re-apply it | created by the cloud admin in the console; not readable by the app; rotate by creating a new client secret and updating IAP |
| S2 | Cloud SQL built-in admin user (`postgres`) | database password | cloud admin: schema setup, migrations, break-glass | Secret Manager, accessor = `cmacc-cloud-admins` only | the app never uses it: the app logs in with IAM database authentication |
| S3 | Automated backup to git ([todo.md](todo.md) T7) | write credential for the templates repository: deploy key or app token | `cmacc-backup` service account | Secret Manager, accessor = `cmacc-backup` only | a git host cannot accept a Google identity, so this needs a stored key; scoped to that one repository; rotate with the secret procedure |
| S4 | Infrastructure-as-code state (Terraform, if chosen) | not a secret itself, but the state file can contain S1 and S2 | cloud admin | private bucket in the project, cloud admins only, versioned | or avoid: keep secret values out of the code and set them by hand |

## Might need a secret (decide when built)

| # | Integration | When a secret is needed | Lean choice |
|---|---|---|---|
| M1 | Save protection on `cmacc-edit` against cross-site requests (a hostile page submitting a save with the editor's IAP cookie) | only with signed anti-forgery tokens (a signing key) | check the `Origin` / `Sec-Fetch-Site` headers instead: no secret; also check how IAP sets its cookie's SameSite attribute |
| M2 | Programmatic smoke test through IAP ([todo.md](todo.md) T4) | if it uses an OAuth client secret or a service account key | a service account identity token, no key; confirm IAP on Cloud Run accepts it |
| M3 | Remote includes (`http…` targets in templates) | only if a template ever includes from a private server | today all public: no secret; private sources would need a per-host token |
| M4 | CI deploys (if deploys move off the cloud admin's laptop) | only with a service account key | Workload Identity Federation from the CI provider: no key, no secret |

## No secret by design

| Integration | How it authenticates |
|---|---|
| Cloud Run → `Doc/` bucket | service account identity (`cmacc-read`, `cmacc-edit`) |
| Cloud Run → Cloud SQL | IAM database authentication (Cloud SQL Client + Instance User); no password |
| App ← IAP (who is the user) | signed header verified with Google's public keys; nothing stored |
| IAP → Cloud Run | IAP service agent with Cloud Run Invoker |
| Admins → `gcloud` (backups, deploys) | their own Google accounts, 2-Step Verification |
| Docker → Artifact Registry | `gcloud` credential helper with the cloud admin's account |
| Group membership and app access | Google Groups and IAM; the app never queries groups |
| Budget and alert emails | Google Cloud billing and monitoring; no credentials |

## Outside this design

- The legacy public site's deploy (`.github/workflows/deploy.yml`) holds an SSH key and host in GitHub Actions secrets; unchanged by this move, retired with the legacy site
