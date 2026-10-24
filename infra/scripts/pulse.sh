#!/usr/bin/env bash
# Quick liveness check of a running local server. Legacy parser errors can come
# back as HTTP 200, so each response body is also scanned for error markers.
# This is a pulse, not a compatibility suite (see infra/README.md acceptance checks).
set -u

BASE=${CMACC_BASE_URL:-http://127.0.0.1:${CMACC_PORT:-8080}}
BASE=${BASE%/}
MARKERS='Fatal error|Parse error|Uncaught|Missing file|Nothing to Show'
DOC='v=d&k=r00t&f='

# path|description
CHECKS="
/|landing page
/i.php?v=l&f=G/|document catalog
/Doc/G/Z/CSS/Doc.css|static stylesheet
/i.php?${DOC}G/Bonterms/Mutual-NDA/Form/v1-0.md|Bonterms NDA render
/i.php?${DOC}G/YCombinator-SAFE/2026/Demo/Acme-Ang-Cap-NoDiscount.md|SAFE render
"

# In-progress files live in the repo's git-ignored workspace, never $TMPDIR or /tmp.
WORK=${CMACC_WORK:-$(cd "$(dirname "$0")/../.." && pwd)/.agent-work/tmp}
mkdir -p "$WORK/pulse"
body=$(mktemp "$WORK/pulse/body.XXXXXX")
err=$(mktemp "$WORK/pulse/err.XXXXXX")
trap 'rm -f "$body" "$err"' EXIT

echo "Pulse: $BASE"
failed=0
while IFS='|' read -r path label; do
  [ -n "$path" ] || continue
  result=$(curl -sS -o "$body" --max-time 20 -w '%{http_code} %{size_download} %{time_total}' "$BASE$path" 2>"$err")
  code=${result%% *}
  if [ "$code" = 000 ]; then
    printf '  FAIL  %-22s no response: %s\n' "$label" "$(sed 's/^curl: ([0-9]*) //' "$err" | head -n 1)"
    failed=$((failed + 1))
    continue
  fi
  read -r _ size secs <<<"$result"
  found=$(grep -o -E "$MARKERS" "$body" | sort -u | paste -sd, -)
  if [ "$code" != 200 ]; then
    printf '  FAIL  %-22s HTTP %s  %s\n' "$label" "$code" "$path"
    failed=$((failed + 1))
  elif [ "$size" -eq 0 ] || [ -n "$found" ]; then
    printf '  FAIL  %-22s HTTP 200 but %s  %s\n' "$label" "${found:-empty body}" "$path"
    failed=$((failed + 1))
  else
    printf '  ok    %-22s %7s bytes %6ss\n' "$label" "$size" "$secs"
  fi
done <<<"$CHECKS"

if [ "$failed" -eq 0 ]; then
  echo "Server is up."
  exit 0
fi

cat <<MSG
$failed check(s) failed. If nothing responded, confirm the Pod and port-forward:
  kubectl --context orbstack -n cmacc-local get pods
  kubectl --context orbstack -n cmacc-local port-forward --address 127.0.0.1 service/cmacc-legacy 8080:80
  kubectl --context orbstack -n cmacc-local logs deployment/cmacc-legacy
MSG
exit 1
