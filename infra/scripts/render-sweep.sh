#!/usr/bin/env bash
# Render templates with the legacy Perl parser in a throwaway, offline container
# and classify each: ok | empty | missing_file | timeout. Output is TSV:
# status <TAB> template <TAB> first "Missing file" message (with OS error).
#
# Usage:
#   render-sweep.sh [-i image] [-k key] [-j jobs] [-t secs] [--changed | template ...]
#     no templates = every .md in the image; --changed = .md files changed vs HEAD
#   render-sweep.sh diff before.tsv after.tsv   # status counts + transitions
set -euo pipefail

cd "$(dirname "$0")/../.."
if [ "${1:-}" = diff ]; then
  for f in "$2" "$3"; do echo "$f: $(cut -f1 "$f" | sort | uniq -c | tr -s ' ' | tr '\n' ' ')"; done
  echo "transitions:"
  join -t$'\t' <(awk -F'\t' '{print $2"\t"$1}' "$2" | sort) <(awk -F'\t' '{print $2"\t"$1}' "$3" | sort) |
    awk -F'\t' '$2 != $3 {print "  " $2 " -> " $3 "\t" $1}'
  exit 0
fi

CONTEXT=${CMACC_CONTEXT:-orbstack}
IMAGE=$(sed -n 's/^ *image: \(cmacc-legacy@sha256:[0-9a-f]*\).*/\1/p' infra/k8s/local.yaml)
KEY=r00t JOBS=8 SECS=20 LIST=
while [ $# -gt 0 ]; do
  case $1 in
    -i) IMAGE=$2; shift 2 ;;
    -k) KEY=$2; shift 2 ;;
    -j) JOBS=$2; shift 2 ;;
    -t) SECS=$2; shift 2 ;;
    --changed) LIST=$(git diff --name-only HEAD -- 'Doc/*.md' | sed 's#^Doc/##')
               [ -n "$LIST" ] || { echo "No changed templates vs HEAD." >&2; exit 0; }; shift ;;
    *) LIST=$(printf '%s\n%s' "$LIST" "${1#Doc/}"); shift ;;
  esac
done

# Inside the container: a copy of the parser that appends the OS error to
# "Missing file" (a loop that exhausts file handles shows "Too many open files").
docker --context "$CONTEXT" run --rm -i --pull=never --network none "$IMAGE" sh -c '
  sed "s/or die \"Missing file: \$file\\\\n\";/or die \"Missing file: \$file (\$!)\\\\n\";/" \
    vendor/cmacc-app/parser.pl > /tmp/p.pl
  list=$(cat); [ -n "$list" ] || list=$(find Doc -type f -name "*.md" | sed "s#^Doc/##" | sort)
  printf "%s\n" "$list" | grep . | xargs -P "$1" -I{} sh -c '"'"'
    out=$(timeout "$1" perl /tmp/p.pl "./Doc/{}" "$2" 2>/dev/null); rc=$?
    m=$(printf %s "$out" | grep -o "Missing file: [^<]*" | head -1)
    if [ $rc -eq 124 ]; then s=timeout; elif [ -n "$m" ]; then s=missing_file
    elif [ -z "$(printf %s "$out" | tr -d "[:space:]")" ]; then s=empty; else s=ok; fi
    printf "%s\t%s\t%s\n" "$s" "{}" "$m"'"'"' _ "$2" "$3"
' _ "$JOBS" "$SECS" "$KEY" <<<"$LIST"
