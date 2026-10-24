#!/usr/bin/env bash
# Build the legacy image with the pinned flags from infra/README.md, then run
# quick in-container checks. Build steps have networking disabled.
set -euo pipefail

cd "$(dirname "$0")/../.."
LOCK=infra/runtime-lock.json
CONTEXT=${CMACC_CONTEXT:-orbstack}
# Default: the engine's own architecture. CMACC_PLATFORM overrides, e.g.
# linux/amd64 or linux/amd64,linux/arm64 (multi-arch needs emulation to verify).
ENGINE_ARCH=$(docker --context "$CONTEXT" info --format '{{.Architecture}}')
case $ENGINE_ARCH in
  aarch64|arm64) DEFAULT_PLATFORM=linux/arm64 ;;
  x86_64|amd64) DEFAULT_PLATFORM=linux/amd64 ;;
  *) echo "Unsupported engine architecture: $ENGINE_ARCH (set CMACC_PLATFORM)" >&2; exit 1 ;;
esac
PLATFORM=${CMACC_PLATFORM:-$DEFAULT_PLATFORM}
EPOCH=${SOURCE_DATE_EPOCH:-$(sed -n 's/.*"source_date_epoch": \([0-9]*\).*/\1/p' "$LOCK")}
TAG=${CMACC_IMAGE_TAG:-cmacc-legacy:dev-$(git rev-parse --short HEAD)}
LOCKED=$(sed -n '/"application_image"/,/}/s/.*"reference": "\([^"]*\)".*/\1/p' "$LOCK")

echo "Building $TAG ($PLATFORM, SOURCE_DATE_EPOCH=$EPOCH) on context $CONTEXT"
docker --context "$CONTEXT" buildx build \
  --platform "$PLATFORM" --network=none --provenance=false --load \
  --build-arg SOURCE_DATE_EPOCH="$EPOCH" \
  --tag "$TAG" .

DIGEST=$(docker --context "$CONTEXT" image inspect "$TAG" --format '{{index .RepoDigests 0}}')
echo
echo "Built: $DIGEST"

echo "Verifying Apache configuration and packaged source checksums"
docker --context "$CONTEXT" run --rm --pull=never --network none "$DIGEST" apache2-foreground -t
docker --context "$CONTEXT" run --rm --pull=never --network none "$DIGEST" \
  sha256sum -c --quiet /usr/local/share/cmacc/source.sha256

echo
if [ "$DIGEST" = "$LOCKED" ]; then
  echo "Digest matches $LOCK and infra/k8s/local.yaml."
else
  cat <<MSG
Digest differs from the locked image:
  locked: $LOCKED
  built:  $DIGEST
This is expected when packaged inputs changed. Inspect and validate the image
before updating $LOCK and infra/k8s/local.yaml (see infra/README.md).
MSG
fi
