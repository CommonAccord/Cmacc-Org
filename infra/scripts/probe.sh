#!/usr/bin/env bash
# Fetch one page from the running server; print status, size, how often each
# pattern occurs (case-insensitive ERE), and optionally follow its i.php links.
# Usage: probe.sh [-l N] <path> [pattern ...]
#   probe.sh -l 5 '/i.php?v=l&f=G/NW-NDA/' 'commonaccord\.org' 'vscode://'
set -u

BASE=${CMACC_BASE_URL:-http://127.0.0.1:${CMACC_PORT:-8080}}
BASE=${BASE%/}
LINKS=0
[ "${1:-}" = -l ] && { LINKS=$2; shift 2; }
path=$1; shift

body=$(curl -s --max-time 30 -w '\n%{http_code} %{size_download}' "$BASE$path")
status=${body##*$'\n'}; body=${body%$'\n'*}
echo "$path  HTTP ${status% *}  ${status#* } bytes"
for p in "$@"; do
  printf '  %-30s %s\n' "$p" "$(grep -ciE -- "$p" <<<"$body")"
done
if [ "$LINKS" -gt 0 ]; then
  grep -oE 'href="?i\.php\?[^" >]+' <<<"$body" | sed 's/^href="\{0,1\}//; s/&amp;/\&/g' | head -n "$LINKS" |
    while read -r href; do
      printf '  link %s  %s\n' "$(curl -s -o /dev/null --max-time 30 -w '%{http_code}' "$BASE/$href")" "$href"
    done
fi
