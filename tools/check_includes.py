#!/usr/bin/env python3
"""Check ProseObject include targets against the store (standard library only)."""

import argparse
import collections
import pathlib
import re
import sys

INCLUDE = re.compile(rb"^([^=\n]*)=\[([^\]\n]+?)\]", re.M)


# - index of every file in the store, exact case, relative to the root
# - lowercase map to spot references that only work on case-insensitive disks
def index(root):
    files = {p.relative_to(root).as_posix() for p in root.rglob("*") if p.is_file()}
    folded = collections.defaultdict(list)
    for name in files:
        folded[name.lower()].append(name)
    return files, folded


# - every local include target in the store, with its byte span for in-place edits
# - remote targets (http, ?-prefixed) and folder links (trailing slash) are not files
def includes(root):
    for path in sorted(root.rglob("*.md")):
        if not path.is_file():
            continue
        data = path.read_bytes()
        for match in INCLUDE.finditer(data):
            target = match.group(2).decode("utf-8", "replace")
            if target.startswith(("http", "?")) or target.endswith("/"):
                continue
            yield path, match.span(2), target


# - classify each target: ok, case mismatch (one real match), ambiguous, missing
# - fix mode rewrites unambiguous case mismatches to the real path, byte-exact
def check(root, fix):
    files, folded = index(root)
    found = collections.defaultdict(list)
    edits = collections.defaultdict(list)
    for path, span, target in includes(root):
        if target in files:
            continue
        real = folded.get(target.lower(), [])
        kind = "case" if len(real) == 1 else "ambiguous" if real else "missing"
        found[kind].append(f"{path.relative_to(root)} -> {target}" + (f" (is {real[0]})" if real else ""))
        if fix and kind == "case":
            edits[path].append((span, real[0].encode()))
    for path, changes in edits.items():
        data = bytearray(path.read_bytes())
        for (start, end), new in sorted(changes, reverse=True):
            data[start:end] = new
        path.write_bytes(bytes(data))
    return found, sum(len(c) for c in edits.values())


# - CLI: reports case mismatches (non-portable) and missing targets; neither is fatal
# - the corpus is taken from upstream as-is, so both are corpus debt, not ours to fix
# - --strict fails on case mismatches, for checking a corpus we do own
# - missing targets: rendering is lazy, so many never fire
def main():
    parser = argparse.ArgumentParser(description=__doc__)
    parser.add_argument("--root", type=pathlib.Path, default=pathlib.Path("Doc"))
    parser.add_argument("--fix-case", action="store_true")
    parser.add_argument("--list-missing", action="store_true")
    parser.add_argument("--strict", action="store_true")
    args = parser.parse_args()
    found, fixed = check(args.root, args.fix_case)
    if fixed:
        print(f"Fixed {fixed} case-mismatched include target(s).")
        found["case"] = []
    for line in found["case"] + found["ambiguous"]:
        print(f"  {line}")
    if args.list_missing:
        for line in found["missing"]:
            print(f"  missing: {line}")
    print(f"case mismatches: {len(found['case'])}, ambiguous: {len(found['ambiguous'])}, "
          f"missing targets: {len(found['missing'])}"
          + ("" if args.strict else " (reported, not fatal)"))
    return 1 if args.strict and (found["case"] or found["ambiguous"]) else 0


if __name__ == "__main__":
    sys.exit(main())
