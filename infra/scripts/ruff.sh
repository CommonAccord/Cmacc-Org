#!/usr/bin/env bash
# Run Ruff on the Python app with the project's config (app/pyproject.toml).
# app/ is streamed into the container and only files Ruff changed are streamed back,
# so results never depend on bind-mount caching (which served stale files right after edits).
# Usage: ruff.sh [ruff args...]   default: check
#   ruff.sh check              # findings
#   ruff.sh check --fix        # apply safe fixes
#   ruff.sh format [--check]   # reformat (or just report)
set -euo pipefail

cd "$(dirname "$0")/../.."
CONTEXT=${CMACC_CONTEXT:-orbstack}
docker --context "$CONTEXT" image inspect cmacc-app:test >/dev/null 2>&1 || infra/scripts/app-image.sh test

# In the container: unpack a copy, keep a pristine copy, run Ruff (output to stderr),
# then write a tar of only the changed files to stdout for the host to unpack.
CHANGED='
import filecmp, os, sys, tarfile
out = tarfile.open(fileobj=sys.stdout.buffer, mode="w|")
for root, _, files in os.walk("."):
    for name in files:
        path = os.path.join(root, name)
        before = os.path.join("/tmp/before", path)
        if not os.path.exists(before) or not filecmp.cmp(path, before, shallow=False):
            out.add(path)
out.close()
'
COPYFILE_DISABLE=1 tar -C app --exclude __pycache__ -cf - . |
  docker --context "$CONTEXT" run -i --rm --pull=never --network none \
    --env HOME=/tmp --env RUFF_NO_CACHE=true --env CHANGED="$CHANGED" cmacc-app:test sh -c '
      mkdir -p /tmp/work /tmp/before && cd /tmp/work && tar -xf - && cp -a . /tmp/before
      ruff "$@" >&2; status=$?
      python -c "$CHANGED"
      exit $status' _ "${@:-check}" |
  tar -C app -xf -
