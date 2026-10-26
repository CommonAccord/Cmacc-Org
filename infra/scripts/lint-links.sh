#!/usr/bin/env bash
# Fail if deployed code hardcodes the legacy public host or links to the site
# root (/i.php). Rendered pages must use relative links so they work wherever the
# app is deployed, including under a subdirectory.
# Scans the same paths the image packages (see .dockerignore).
# Hits in the corpus (Doc/) are reported, not fatal: templates are taken from
# upstream as-is, so their links are corpus debt, not ours to fix.
set -u

cd "$(dirname "$0")/../.."
# Any subdomain, with a scheme, or scheme-less with a path (www.x.org/i.php).
PATTERN='https?://([a-z0-9-]+\.)*commonaccord\.org|([a-z0-9-]+\.)*commonaccord\.org/|(href|src)=["'"'"']?/i\.php'
PATHS=(Doc File image png vendor i.php index.php .htaccess)

ALLOW=infra/lint-links.allow
hits=$(grep -rnIiE "$PATTERN" "${PATHS[@]}" 2>/dev/null)
# Drop reviewed exceptions (fixed strings, comments ignored).
if [ -n "$hits" ] && [ -f "$ALLOW" ]; then
  hits=$(printf '%s\n' "$hits" | grep -vF -f <(grep -v '^#' "$ALLOW" | grep -v '^$') || true)
fi
if [ -z "$hits" ]; then
  echo "No legacy-host or root-relative links in deployed content."
  exit 0
fi

corpus=$(printf '%s\n' "$hits" | grep '^Doc/' || true)
code=$(printf '%s\n' "$hits" | grep -v '^Doc/' || true)
if [ -n "$corpus" ]; then
  count=$(printf '%s\n' "$corpus" | wc -l | tr -d ' ')
  echo "$count non-portable link(s) in the corpus (reported, not fatal):"
  printf '%s\n' "$corpus" | cut -c1-200 | sed 's/^/  /'
fi
[ -z "$code" ] && exit 0

count=$(printf '%s\n' "$code" | wc -l | tr -d ' ')
echo "$count non-portable link(s) in deployed code; use relative links (e.g. i.php?v=...) instead:"
printf '%s\n' "$code" | cut -c1-200 | sed 's/^/  /'
exit 1
