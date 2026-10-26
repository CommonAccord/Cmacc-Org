#!/usr/bin/env bash
# Run Python in the pinned test image with the repository mounted read-only.
# Usage: pyrun.sh <python args...>   e.g. pyrun.sh tools/check_includes.py
# CMACC_PYRUN_WRITE=Doc mounts that one path writable (e.g. for --fix-case).
set -euo pipefail

cd "$(dirname "$0")/../.."
CONTEXT=${CMACC_CONTEXT:-orbstack}
IMAGE=$(sed -n 's/.*"image": "\([^"]*\)".*/\1/p' tests/renderer/runtime.json | head -n 1)
mounts=(--mount "type=bind,src=$PWD,dst=/workspace,readonly")
if [ -n "${CMACC_PYRUN_WRITE:-}" ]; then
  mounts+=(--mount "type=bind,src=$PWD/$CMACC_PYRUN_WRITE,dst=/workspace/$CMACC_PYRUN_WRITE" --user "$(id -u):$(id -g)")
fi

docker --context "$CONTEXT" run --rm --pull=never --network none "${mounts[@]}" \
  --workdir /workspace --env PYTHONDONTWRITEBYTECODE=1 "$IMAGE" python "$@"
