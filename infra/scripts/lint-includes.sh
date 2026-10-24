#!/usr/bin/env bash
# Report include targets that only resolve on a case-insensitive filesystem, and
# missing targets. Not fatal (corpus is upstream's); pass --strict to fail on case
# mismatches. Runs in the pinned Python image, so the host needs only Docker.
set -euo pipefail

exec "$(dirname "$0")/pyrun.sh" tools/check_includes.py "$@"
