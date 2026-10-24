#!/usr/bin/env bash
# Apply the local Kubernetes manifest and wait for the rollout. The manifest pins
# an image digest with imagePullPolicy: Never, so that exact image must already be
# in OrbStack's image store (run 'task build'). CMACC_IMAGE deploys a different
# local image for testing without editing the manifest; re-running without it
# restores the pinned digest.
set -euo pipefail

cd "$(dirname "$0")/../.."
CONTEXT=${CMACC_CONTEXT:-orbstack}
MANIFEST=infra/k8s/local.yaml
NS=cmacc-local
PINNED=$(sed -n 's/^ *image: \(cmacc-legacy@sha256:[0-9a-f]*\).*/\1/p' "$MANIFEST")
IMAGE=${CMACC_IMAGE:-$PINNED}

if ! docker --context "$CONTEXT" image inspect "$IMAGE" >/dev/null 2>&1; then
  echo "Image $IMAGE is not in the $CONTEXT image store. Run 'task build' first." >&2
  exit 1
fi
REF=$(docker --context "$CONTEXT" image inspect "$IMAGE" --format '{{index .RepoDigests 0}}')
# The image must match a node's architecture (the manifest does not pin one).
IMAGE_ARCH=$(docker --context "$CONTEXT" image inspect "$IMAGE" --format '{{.Architecture}}')
NODE_ARCHES=$(kubectl --context "$CONTEXT" get nodes -o jsonpath='{.items[*].status.nodeInfo.architecture}')
if ! printf '%s\n' $NODE_ARCHES | grep -qx "$IMAGE_ARCH"; then
  echo "Image is $IMAGE_ARCH but cluster nodes are: $NODE_ARCHES. Rebuild with CMACC_PLATFORM=linux/<arch>." >&2
  exit 1
fi
DIGEST=${REF#*@}

kubectl --context "$CONTEXT" apply -f "$MANIFEST"
# apply alone does not undo an earlier override, so always set the image.
# Deploy by digest: a rebuilt tag would otherwise leave the old Pod running.
[ "$IMAGE" = "$PINNED" ] || echo "Overriding pinned image with $IMAGE → $REF (not recorded in $MANIFEST)"
kubectl --context "$CONTEXT" -n "$NS" set image deployment/cmacc-legacy web="$REF"
kubectl --context "$CONTEXT" -n "$NS" rollout status deployment/cmacc-legacy --timeout=120s

running=$(kubectl --context "$CONTEXT" -n "$NS" get pods -l app=cmacc-legacy \
  --field-selector=status.phase=Running \
  -o jsonpath='{range .items[*]}{.metadata.name} {.status.containerStatuses[0].imageID}{"\n"}{end}')
echo "$running"
echo "$running" | grep -q "$DIGEST" || {
  echo "Running Pod does not report image $DIGEST" >&2
  exit 1
}
echo "Deployed $IMAGE."

# A Service port-forward stays attached to the Pod it started with; renew ours.
pid=$(cat "${CMACC_WORK:-$PWD/.agent-work/tmp}/port-forward/cmacc-legacy.pid" 2>/dev/null || true)
if [ -n "$pid" ] && kill -0 "$pid" 2>/dev/null; then
  infra/scripts/port-forward.sh start
else
  echo "Run 'task port-forward' to reach it."
fi
