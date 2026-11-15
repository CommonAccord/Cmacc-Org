# Migration documents

- Change-management record of the move from the legacy PHP/Perl site to the Python app on Google Cloud
- Describes where things started and why they changed; the current design is in [app-architecture.md](../app-architecture.md) and [infra-architecture.md](../infra-architecture.md)

| Document | What it records |
|---|---|
| [plan.md](plan.md) | Order of work from local setup to go-live on Google Cloud, including the production acceptance test |
| [owner-decisions.md](owner-decisions.md) | What the project owner (CEO) must decide and do before the cloud admin can build: organization, billing, project, budget |
| [initial-python-port.md](initial-python-port.md) | First Python port: problem breakdown, library choices, parity requirement |
| [legacy-document-storage.md](legacy-document-storage.md) | How documents are stored and saved in the legacy pattern, before the move to Cloud Storage objects |
