#!/usr/bin/env bash
# Render every Mermaid block in the given Markdown files with a pinned
# mermaid-cli image; report ok/FAIL per block and keep PNGs for inspection.
# Usage: check-diagrams.sh [file.md ...]   (default: tracked docs with diagrams)
# PNGs go to $CMACC_DIAGRAM_OUT (default .agent-work/tmp/diagrams, git-ignored).
set -u

cd "$(dirname "$0")/../.."
CONTEXT=${CMACC_CONTEXT:-orbstack}
IMAGE=minlag/mermaid-cli:11.4.2@sha256:99c983b3ab4e14033f2880bc1b9de17e5090b4515dabd63fe9cf8c0ae6130956
# In-progress files live in the repo's git-ignored workspace, never $TMPDIR or /tmp.
WORK=${CMACC_WORK:-$PWD/.agent-work/tmp}
OUT=${CMACC_DIAGRAM_OUT:-$WORK/diagrams}

if [ $# -eq 0 ]; then
  set -- $(git ls-files '*.md' ':!:Doc/**' | xargs grep -l '^```mermaid' 2>/dev/null)
fi
rm -rf "$OUT" && mkdir -p "$OUT" && chmod 777 "$OUT"

# Split each file's mermaid blocks into <name>-<n>.mmd.
for f in "$@"; do
  awk -v out="$OUT" -v name="$(echo "$f" | tr '/.' '__')" '
    /^```mermaid/ { n++; file = sprintf("%s/%s-%d.mmd", out, name, n); inblock = 1; next }
    /^```/ && inblock { inblock = 0; close(file); next }
    inblock { print > file }' "$f"
done

# Render in the container from a streamed copy (bind mounts can serve stale files
# right after edits); results come back as a tar of PNGs and one status line per block.
failed=0
while IFS=$'\t' read -r status name detail; do
  if [ "$status" = ok ]; then echo "  ok    $name"; else echo "  FAIL  $name: $detail"; failed=$((failed + 1)); fi
done < <(COPYFILE_DISABLE=1 tar -C "$OUT" -cf - . |
  docker --context "$CONTEXT" run -i --rm --network none --entrypoint sh "$IMAGE" -c '
    mkdir -p /tmp/d && cd /tmp/d && tar -xf - >/dev/null 2>&1
    for m in *.mmd; do
      [ -e "$m" ] || continue
      b=${m%.mmd}
      if /home/mermaidcli/node_modules/.bin/mmdc -p /puppeteer-config.json -i "$m" -o "$b.png" -q -w 1400 >/dev/null 2>"$b.err"; then
        printf "ok\t%s\t\n" "$b" >&2
      else
        printf "fail\t%s\t%s\n" "$b" "$(grep -m1 -E "Error|error" "$b.err")" >&2
      fi
    done
    tar -cf - *.png 2>/dev/null' 2>&1 1> >(tar -C "$OUT" -xf - 2>/dev/null) )
echo "PNGs: $OUT"
[ "$failed" -eq 0 ]
