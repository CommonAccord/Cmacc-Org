#!/usr/bin/env bash
# Build the Python app images from the repo root: runtime (cmacc-app), test
# stage (cmacc-app:test), and the corpus-only templates image (cmacc-templates).
# Usage: app-image.sh [app|test|templates|all]   (default: all)
set -euo pipefail

cd "$(dirname "$0")/../.."
CONTEXT=${CMACC_CONTEXT:-orbstack}
REV=$(git rev-parse --short HEAD)
b() { docker --context "$CONTEXT" buildx build -q --provenance=false --load "$@" . >/dev/null; }

case ${1:-all} in
  app|all) b -f app/Dockerfile --target app -t "cmacc-app:dev-$REV" && echo "built cmacc-app:dev-$REV" >&2 ;;&
  test|all) b -f app/Dockerfile --target test -t cmacc-app:test && echo "built cmacc-app:test" >&2 ;;&
  templates|all) b -f infra/templates.Dockerfile -t "cmacc-templates:dev-$REV" && echo "built cmacc-templates:dev-$REV" >&2 ;;
esac
