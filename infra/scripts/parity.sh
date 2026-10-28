#!/usr/bin/env bash
# Parity gate: one view's text for every template from the legacy server (8080)
# and the Python app (8081), compared in the pinned Python image. Needs both
# port-forwards ('task dev' and 'task app:dev'). Exit 0 only when every template
# matches or is an accepted deviation (docs/decisions.md).
# Views in scope: d (Document), v (Visual), p (Print); also m, x, o. Not t (Trace).
# Evidence (results.jsonl, diffs.txt) in .agent-work/parity/<timestamp>/.
# Usage: parity.sh [--view v] [--key k] [--jobs n] [template ...]
set -euo pipefail

cd "$(dirname "$0")/../.."
CONTEXT=${CMACC_CONTEXT:-orbstack}
IMAGE=$(sed -n 's/.*"image": "\([^"]*\)".*/\1/p' tests/renderer/runtime.json | head -n 1)
OUT=.agent-work/parity/$(date +%Y%m%d-%H%M%S)
mkdir -p "$OUT"

docker --context "$CONTEXT" run --rm --pull=never \
  --mount "type=bind,src=$PWD,dst=/workspace,readonly" \
  --mount "type=bind,src=$PWD/$OUT,dst=/results" \
  --workdir /workspace --env PYTHONDONTWRITEBYTECODE=1 \
  "$IMAGE" python tools/parity.py --output /results "$@" \
  && status=0 || status=$?
echo "Evidence: $OUT"
exit "$status"
