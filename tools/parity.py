#!/usr/bin/env python3
"""Corpus-wide parity: one view's text for every template, legacy vs Python (standard library only)."""

import argparse
import collections
import concurrent.futures
import difflib
import json
import re
import sys
from html import unescape
from pathlib import Path
from urllib.parse import urlencode

import renderer_compare
from renderer_compare import DocumentText, fetch

# legacy Trace pages run to tens of MiB (no memo: every lookup is listed)
renderer_compare.MAX_BYTES = 64 * 1024 * 1024
DIFF_WORDS = 3_000
DIFF_TEMPLATES = 200
ROOT = Path(__file__).resolve().parents[1]
DATE = re.compile(r" on \d{4}-\d{2}-\d{2}\)")
STAMP = re.compile(r"\(\d{4}/\d{2}/\d{2}:\d+ :")  # Open Parameters header: date and epoch
# accepted deviations (docs/decisions.md), where legacy fails:
# - legacy aborts the page at a missing include; Python renders the rest and reports the
#   include in an HTML comment
# - the requested document does not exist: legacy prints "Missing file:" with its server path;
#   Python says "No such document:" with the same (rewritten) path
# - legacy Print shows a CSS.Special stylesheet path as page text (it expects a whole <head>);
#   Python uses it as the stylesheet, as the Document view does
# - legacy Print shows its header parser's bogus "Missing file:" for a remote include
#   (./Doc/https://…) above the document; Python shows the document only
# - legacy Open Parameters puts the file in the textarea unescaped, so the browser decodes
#   its entities (and Save writes them back decoded); Python shows the file as it is
# (Print repeats the abort: the header parser dies on the same include)
LEGACY_MISSING = re.compile(r"Missing file: \./Doc/(\S+)(?: Missing file: \./Doc/\1)*")
LEGACY_ROOT_MISSING = re.compile(r"Missing file: \S*/Doc//(\S+)")
LEGACY_REMOTE_HEADER = re.compile(r"Missing file: \./Doc/https?://\S+ ")
PYTHON_STYLESHEET = re.compile(r"<link href='([^']+)' rel='stylesheet' />")
PYTHON_MISSING = re.compile(r"<!-- missing include: (.+?) -->")
NO_SUCH_DOCUMENT = re.compile(r"No such document: (.+)")
MESSAGE_PAGE = re.compile(r"<h3>(.*?)</h3>", re.S)
FORM = re.compile(r"<form[^>]*>(.*?)<textarea[^>]*>(.*?)</textarea>(.*?)</form>", re.S)
SUGGESTIONS = re.compile(r"(?<=\[file-reference\]\)\):).*?(?=//=Prior existing parameters:)")


# views without a navigation bar: the whole body is the document
NO_NAVIGATION = {"p"}
# views whose legacy parser swallows the missing-include abort (Missing: "Nothing to Show";
# Open Parameters: no suggestions), so the abort is confirmed on the legacy Document view
SILENT_ABORT = {"m", "o"}


# - the text inside markup, as DocumentText reads it (started: no navigation boundary needed)
def markup_text(html, started):
    parser = DocumentText()
    parser.started = started
    parser.feed(html)
    parser.close()
    return parser


# - document text after the navigation <hr>, whitespace collapsed, render date masked
# - Open Parameters: the form, its textarea read as the browser shows it (tags are text)
# - a message page (e.g. "No such document") is its message
# - error pages are output too: parity means the same text, errors included
def page_text(html, view):
    form = FORM.search(html) if view == "o" else None
    if form:
        before, after = ("".join(markup_text(part, True).parts) for part in (form[1], form[3]))
        text = f"{before} {unescape(form[2])} {after}"
    else:
        parser = markup_text(html, view in NO_NAVIGATION)
        message = MESSAGE_PAGE.search(html)
        if not parser.started and not message:
            raise ValueError("no navigation separator")
        text = "".join(parser.parts) if parser.started else message[1]
    text = re.sub(r"\s+", " ", text).strip()
    return STAMP.sub("(<date>:<epoch> :", DATE.sub(" on <date>)", text))


# - one side: (text, html, None) or (None, None, error); unfetchable or unreadable is an error
def side(base, template, key, view, timeout):
    url = f"{base}/i.php?" + urlencode({"v": view, "f": template, "k": key})
    try:
        raw, charset, _ = fetch(url, timeout)
        html = raw.decode(charset, "replace")
        return page_text(html, view), html, None
    except Exception as exc:  # classified per template, never fatal to the sweep
        return None, None, f"{type(exc).__name__}: {exc}"


# - legacy Document view text, for confirming an abort the current view does not show
def legacy_document(template, args):
    text, _, error = side(args.legacy, template, args.key, "d", args.timeout)
    return "" if error else text


# - the shape of a silently aborted legacy page: Missing says "Nothing to Show"; Open
#   Parameters is the same form as Python's without the suggestions
def silent_abort(legacy, python, view):
    if view == "m":
        return legacy == "Nothing to Show"
    return SUGGESTIONS.sub("", legacy) == SUGGESTIONS.sub("", python)


# - accepted deviations (see the list above), each under a strict test:
#   - missing include: legacy's abort names an include Python reports (for SILENT_ABORT views,
#     the abort is read from the legacy Document view)
#   - missing document: Python's "No such document" path is the one legacy's Document view
#     failed to open
#   - Print stylesheet: legacy text is exactly Python's stylesheet path, then Python's text
#   - Print remote include: legacy text is its header parser's bogus abort on a remote URL,
#     then exactly Python's text
#   - Open Parameters file: legacy text is Python's with entities decoded once (legacy puts
#     the file in the textarea unescaped, so the browser decodes it)
#   - render cut by a budget (D3): Python says "Nothing to Show" where legacy's own Document
#     view says the same (its parser was killed); Missing and Open Parameters hide that
def accepted_deviation(template, legacy, python, python_html, args):
    remote = LEGACY_REMOTE_HEADER.match(legacy) if args.view in NO_NAVIGATION else None
    if remote:  # the header parser's bogus abort comes first; judge the rest on its own
        legacy = legacy[remote.end() :]
        if legacy == python:
            return True
    reported = PYTHON_MISSING.findall(python_html)
    if args.view in SILENT_ABORT and reported and silent_abort(legacy, python, args.view):
        legacy = legacy_document(template, args)
    match = LEGACY_MISSING.fullmatch(legacy)
    if match:
        return match.group(1) in reported
    missing = NO_SUCH_DOCUMENT.fullmatch(python)
    if missing:
        match = LEGACY_ROOT_MISSING.fullmatch(legacy_document(template, args))
        return bool(match) and match.group(1) == missing.group(1)
    if python == "Nothing to Show" and args.view in SILENT_ABORT:
        return legacy_document(template, args) == "Nothing to Show"
    if args.view == "o":
        return legacy == re.sub(r"\s+", " ", unescape(python)).strip()
    stylesheet = PYTHON_STYLESHEET.search(python_html)
    return args.view in NO_NAVIGATION and bool(stylesheet) and legacy == f"{stylesheet[1]} {python}"


# - match: same text; deviation: an accepted difference (docs/decisions.md)
# - mismatch: both read, text differs; error: either side unreadable
def compare(template, args):
    legacy, _, legacy_error = side(args.legacy, template, args.key, args.view, args.timeout)
    python, python_html, python_error = side(args.python, template, args.key, args.view, args.timeout)
    if legacy_error or python_error:
        status = "error"
    elif legacy == python:
        status = "match"
    else:
        accepted = accepted_deviation(template, legacy, python, python_html, args)
        status = "deviation" if accepted else "mismatch"
    return {"template": template, "status": status, "legacy": legacy, "python": python,
            "legacy_error": legacy_error, "python_error": python_error}


# - word-per-line diff, legacy first; readable where one-line HTML diffs are not
# - first DIFF_WORDS words per side: difflib is quadratic, and Trace pages run to millions
def word_diff(row):
    return "".join(difflib.unified_diff(
        [w + "\n" for w in row["legacy"].split()[:DIFF_WORDS]],
        [w + "\n" for w in row["python"].split()[:DIFF_WORDS]],
        fromfile=f"legacy/{row['template']}", tofile=f"python/{row['template']}", n=3))


def templates(store, only):
    if only:
        return only
    return sorted(p.relative_to(store).as_posix() for p in store.rglob("*.md") if p.is_file())


# - exit 0 only when every template matches or is an accepted deviation
# - evidence in --output (results.jsonl, diffs.txt)
def main():
    parser = argparse.ArgumentParser(description=__doc__)
    parser.add_argument("--legacy", default="http://host.docker.internal:8080")
    parser.add_argument("--python", default="http://host.docker.internal:8081")
    parser.add_argument("--store", type=Path, default=ROOT / "Doc")
    parser.add_argument("--view", default="d")
    parser.add_argument("--key", default="r00t")
    parser.add_argument("--jobs", type=int, default=16)
    parser.add_argument("--timeout", type=float, default=60)
    parser.add_argument("--output", type=Path, required=True)
    parser.add_argument("templates", nargs="*")
    args = parser.parse_args()

    names = templates(args.store, args.templates)
    with concurrent.futures.ThreadPoolExecutor(args.jobs) as pool:
        rows = list(pool.map(lambda t: compare(t, args), names))

    args.output.mkdir(parents=True, exist_ok=True)
    (args.output / "results.jsonl").write_text("".join(json.dumps(r) + "\n" for r in rows))
    mismatches = [r for r in rows if r["status"] == "mismatch"][:DIFF_TEMPLATES]
    (args.output / "diffs.txt").write_text("".join(word_diff(r) for r in mismatches))
    counts = collections.Counter(r["status"] for r in rows)
    print(f"view={args.view} key={args.key} templates={len(rows)} "
          + " ".join(f"{s}={counts[s]}" for s in ("match", "deviation", "mismatch", "error")))
    for row in rows:
        if row["status"] in ("mismatch", "error"):
            print(f"  {row['status']:8} {row['template']}"
                  + (f"  ({row['legacy_error'] or row['python_error']})" if row["status"] == "error" else ""))
    return 0 if counts["match"] + counts["deviation"] == len(rows) else 1


if __name__ == "__main__":
    sys.exit(main())
