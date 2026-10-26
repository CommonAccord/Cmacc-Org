#!/usr/bin/env bash
# Check host tools needed to build, deploy, and test the legacy image.
# Prints an install or fix command for each problem; changes nothing.
# PHP and Perl are intentionally absent: they run only inside containers.
set -u

cd "$(dirname "$0")/../.."
LOCK=infra/runtime-lock.json
CONTEXT=${CMACC_CONTEXT:-orbstack}

missing=0
warnings=0
fixes=()

ok()   { printf '  ok    %-22s %s\n' "$1" "$2"; }
bad()  { printf '  MISS  %-22s %s\n' "$1" "$2"; missing=$((missing + 1)); fixes+=("$3"); }
warn() { printf '  warn  %-22s %s\n' "$1" "$2"; warnings=$((warnings + 1)); }

# Read "key": "value" from the lock file without requiring jq.
baseline() { sed -n "s/.*\"$1\": \"\([^\"]*\)\".*/\1/p" "$LOCK" | head -n 1; }

# Compare an installed version with the tested baseline; drift is a warning only.
check_version() {
  local name=$1 have=$2 want
  want=$(baseline "$name")
  if [ -n "$want" ] && [ "${have#v}" != "${want%% *}" ]; then
    warn "$name version" "have $have, tested baseline $want"
  fi
}

have() { command -v "$1" >/dev/null 2>&1; }

echo "Host tools"
if have brew; then ok brew "$(brew --version | head -n 1)"
else bad brew "Homebrew (used by the install commands below)" \
  '/bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)"'
fi
if have git; then ok git "$(git --version)"; else bad git "not found" "xcode-select --install"; fi
if have curl; then ok curl "$(curl --version | head -n 1 | cut -d' ' -f1-2)"; else bad curl "not found" "brew install curl"; fi
if have task; then ok task "$(task --version 2>/dev/null)"; else bad task "go-task not found" "brew install go-task"; fi

if have orbctl; then
  orb_version=$(orbctl version 2>/dev/null | sed -n 's/^Version: //p')
  ok orbstack "$orb_version"
  check_version orbstack "${orb_version%% *}"
else
  bad orbstack "OrbStack not found (provides docker, buildx, and Kubernetes)" "brew install --cask orbstack"
fi

if have docker; then
  ok docker "$(docker --version)"
  if docker buildx version >/dev/null 2>&1; then
    buildx_version=$(docker buildx version | awk '{print $2}')
    ok buildx "$buildx_version"
    check_version buildx "${buildx_version#v}"
  else
    bad buildx "docker buildx plugin not found" "brew reinstall --cask orbstack"
  fi
else
  bad docker "docker CLI not found" "brew install --cask orbstack"
fi

if have kubectl; then
  kubectl_version=$(kubectl version --client 2>/dev/null | sed -n 's/^Client Version: //p')
  ok kubectl "$kubectl_version"
  check_version kubectl "$kubectl_version"
else
  bad kubectl "not found" "brew install kubectl"
fi

echo
echo "Runtime (context: $CONTEXT)"
if have orbctl; then
  status=$(orbctl status 2>/dev/null)
  if [ "$status" = "Running" ]; then ok "orbstack running" "$status"
  else bad "orbstack running" "${status:-unknown}" "orbctl start"
  fi
fi

if have docker; then
  if ! docker context inspect "$CONTEXT" >/dev/null 2>&1; then
    bad "docker context" "context '$CONTEXT' not found" "open -a OrbStack   # OrbStack creates the 'orbstack' context"
  elif server=$(docker --context "$CONTEXT" info --format '{{.ServerVersion}}' 2>/dev/null); then
    ok "docker engine" "$server"
    check_version docker "$server"
    base=$(sed -n 's/^FROM \([^ ]*\).*/\1/p' Dockerfile | head -n 1)
    if docker --context "$CONTEXT" image inspect "$base" >/dev/null 2>&1; then
      ok "base image cached" "${base%%@*}"
    else
      warn "base image cached" "not cached; build will pull it: docker --context $CONTEXT pull $base"
    fi
  else
    bad "docker engine" "cannot reach the '$CONTEXT' engine" "orbctl start"
  fi
fi

if have kubectl; then
  if ! kubectl config get-contexts "$CONTEXT" >/dev/null 2>&1; then
    bad "kube context" "context '$CONTEXT' not found" "orbctl start k8s"
  elif nodes=$(kubectl --context "$CONTEXT" get nodes --no-headers \
      -o custom-columns=NAME:.metadata.name,ARCH:.status.nodeInfo.architecture,VER:.status.nodeInfo.kubeletVersion 2>/dev/null) \
      && [ -n "$nodes" ]; then
    ok kubernetes "$(echo "$nodes" | head -n 1 | tr -s ' ')"
    check_version kubernetes "$(echo "$nodes" | awk 'NR==1 {print $3}')"
    engine_arch=$(docker --context "$CONTEXT" info --format '{{.Architecture}}' 2>/dev/null | sed 's/aarch64/arm64/;s/x86_64/amd64/')
    echo "$nodes" | awk '{print $2}' | grep -qx "$engine_arch" \
      || warn "node architecture" "no node matches the build architecture ($engine_arch); set CMACC_PLATFORM"
  else
    bad kubernetes "cluster not reachable" "orbctl config set k8s.enable true && orbctl start k8s"
  fi
fi

echo
if [ "$missing" -eq 0 ]; then
  echo "All required tools are present ($warnings warning(s))."
  exit 0
fi

echo "$missing problem(s) found. Run these commands, then re-run 'task doctor':"
echo
printf '%s\n' "${fixes[@]}" | awk '!seen[$0]++ { print "  " $0 }'
exit 1
