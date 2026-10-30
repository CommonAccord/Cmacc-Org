#!/usr/bin/env bash
# Deploy the Python app and templates images (by digest) to the local cluster.
# Usage: app-deploy.sh [app-image] [templates-image]   (default: dev-<short rev>)
set -euo pipefail

cd "$(dirname "$0")/../.."
CONTEXT=${CMACC_CONTEXT:-orbstack}
REV=$(git rev-parse --short HEAD)
APP=${1:-cmacc-app:dev-$REV}
TEMPLATES=${2:-cmacc-templates:dev-$REV}
digest() { docker --context "$CONTEXT" image inspect "$1" --format '{{index .RepoDigests 0}}'; }

NODE_ARCHES=$(kubectl --context "$CONTEXT" get nodes -o jsonpath='{.items[*].status.nodeInfo.architecture}')
for image in "$APP" "$TEMPLATES"; do
  arch=$(docker --context "$CONTEXT" image inspect "$image" --format '{{.Architecture}}')
  printf '%s\n' $NODE_ARCHES | grep -qx "$arch" || { echo "$image is $arch; nodes: $NODE_ARCHES" >&2; exit 1; }
done

kubectl --context "$CONTEXT" apply -f infra/k8s/app.yaml
kubectl --context "$CONTEXT" -n cmacc-local set image deployment/cmacc-app \
  app="$(digest "$APP")" templates="$(digest "$TEMPLATES")"
kubectl --context "$CONTEXT" -n cmacc-local rollout status deployment/cmacc-app --timeout=180s
