#!/usr/bin/env python3
"""Black-box CommonAccord document-text smoke checks (standard library only)."""

import argparse
import difflib
import hashlib
import json
import re
import sys
from datetime import datetime, timezone
from html.parser import HTMLParser
from http.client import HTTPException
from pathlib import Path
from urllib.error import HTTPError, URLError
from urllib.parse import urlencode, urlsplit, urlunsplit
from urllib.request import Request, urlopen

MAX_BYTES = 4 * 1024 * 1024
ROOT = Path(__file__).resolve().parents[1]
DEFAULT_CASE = ROOT / "tests/renderer/worldcc-nda.json"
BLOCKS = {"p", "div", "br", "hr", "li", "ol", "ul", "table", "tr", "td",
          "th", "h1", "h2", "h3", "h4", "h5", "h6", "section"}
VOID = {"area", "base", "br", "col", "embed", "hr", "img", "input", "link",
        "meta", "param", "source", "track", "wbr"}


class InvalidRender(ValueError):
    pass


class DocumentText(HTMLParser):
    # - text extractor for the legacy Document view (v=d); not a browser or CSS renderer
    # - only content after the first navigation <hr> counts
    # - script/style/head and the depth-control bar are skipped as page chrome
    def __init__(self):
        super().__init__(convert_charrefs=True)
        self.started = False
        self.skipped = []
        self.parts = []
        self.prefix = []

    # - block elements become word breaks; inline wrappers do not
    # - first <hr> marks the start of the document body
    # - skipped regions nest, so chrome inside chrome stays hidden
    def handle_starttag(self, tag, attrs):
        attrs = dict(attrs)
        if self.skipped:
            if tag not in VOID:
                self.skipped.append(tag)
            return
        if tag in {"script", "style", "head"} or "cmacc-depth-control" in attrs.get("class", "").split():
            self.skipped.append(tag)
            return
        if tag == "hr" and not self.started:
            self.started = True
            return
        if self.started and tag in BLOCKS:
            self.parts.append(" ")

    # - self-closing tags treated like an open + close pair
    def handle_startendtag(self, tag, attrs):
        self.handle_starttag(tag, attrs)
        if tag not in VOID:
            self.handle_endtag(tag)

    # - closes the innermost skipped region or adds a block break
    def handle_endtag(self, tag):
        if self.skipped:
            if tag in self.skipped:
                reverse_index = self.skipped[::-1].index(tag)
                del self.skipped[len(self.skipped) - reverse_index - 1:]
            return
        if self.started and tag in BLOCKS:
            self.parts.append(" ")

    # - text before the boundary kept apart, to confirm the navigation exists
    def handle_data(self, data):
        if not self.skipped:
            (self.parts if self.started else self.prefix).append(data)


# - fail closed: no navigation boundary, error text, or short output means invalid, never compared
# - error markers checked in text, since legacy errors arrive as HTTP 200
# - masks only the renderer metadata date; agreement dates are content
# - required phrases guard against unrelated pages that happen to be valid
def extract_text(html, case):
    parser = DocumentText()
    parser.feed(html)
    parser.close()
    if not parser.started or "Source views:" not in "".join(parser.prefix):
        raise InvalidRender("Missing legacy document-view navigation/separator")
    text = re.sub(r"\s+", " ", "".join(parser.parts)).strip()
    if re.search(r"Fatal error:|Parse error:|Missing file:|Nothing to Show|Warning:", text, re.I):
        raise InvalidRender("Renderer error message in HTTP response")
    metadata = re.escape(f"({case['document']}#{case['key']} on ")
    text, metadata_dates = re.subn(metadata + r"\d{4}-\d{2}-\d{2}\)",
                                  f"({case['document']}#{case['key']} on <render-date>)", text)
    if len(text) < case["min_characters"]:
        raise InvalidRender("Rendered document is empty or unexpectedly short")
    for phrase in case["required_text"]:
        if phrase not in text:
            raise InvalidRender(f"Required document text absent: {phrase!r}")
    return text, metadata_dates


# - base is a site root, optionally a subdirectory; the Document view URL is derived from the case
def render_url(base, case):
    parsed = urlsplit(base)
    if parsed.scheme not in {"http", "https"} or not parsed.netloc or parsed.query or parsed.fragment:
        raise ValueError("Base must be an HTTP(S) site root without query or fragment")
    path = parsed.path.rstrip("/") + "/i.php"
    return urlunsplit((parsed.scheme, parsed.netloc, path,
                      urlencode({"v": "d", "f": case["document"], "k": case["key"]}), ""))


# - single read-only GET; non-200, oversize, or undecodable responses are invalid
# - returns raw bytes plus provenance (URLs, content type, hash) for the report
def fetch(url, timeout):
    request = Request(url, headers={"User-Agent": "Cmacc-Renderer-Smoke/1.0",
                                   "Accept": "text/html", "Accept-Encoding": "identity"})
    with urlopen(request, timeout=timeout) as response:
        if response.status != 200:
            raise InvalidRender(f"Unexpected HTTP status {response.status}")
        raw = response.read(MAX_BYTES + 1)
        if len(raw) > MAX_BYTES:
            raise InvalidRender("Response exceeds 4 MiB limit")
        metadata = {"requested_url": url, "final_url": response.url,
                    "http_status": response.status,
                    "content_type": response.headers.get("Content-Type", ""),
                    "html_sha256": hashlib.sha256(raw).hexdigest()}
        return raw, response.headers.get_content_charset() or "utf-8", metadata


# - word-per-line unified diff; readable where one-line HTML diffs are not
def difference(reference, local):
    return "".join(difflib.unified_diff(
        [word + "\n" for word in reference.split()],
        [word + "\n" for word in local.split()],
        fromfile="reference.txt", tofile="local.txt", n=8))


# - one comparison run: fetch each side, extract, compare, write evidence
# - compare mode needs both sides valid; any error is exit 2, never a pass
# - smoke mode checks local only and never claims a reference match
# - empty output directory required so old evidence is never mixed in
# - exit codes: 0 match / smoke_pass, 1 mismatch, 2 error
def run(case, local_base, reference_base, output, timeout=30, fetcher=fetch):
    output = Path(output)
    output.mkdir(parents=True, exist_ok=True)
    if any(output.iterdir()):
        raise ValueError("Output directory must be empty (prevents stale results)")
    report = {"case": case["name"], "document": case["document"], "key": case["key"],
              "started_at": datetime.now(timezone.utc).isoformat(),
              "mode": "compare" if reference_base else "smoke", "results": {},
              "normalization": "legacy-v=d-boundary-v1; HTML entities; whitespace; exact render metadata date"}
    texts = {}
    sides = [("local", local_base)]
    if reference_base:
        sides.append(("reference", reference_base))
    for side, base in sides:
        url = render_url(base, case)
        result = {"requested_url": url}
        report["results"][side] = result
        try:
            raw, encoding, metadata = fetcher(url, timeout)
            result.update(metadata)
            (output / f"{side}.html").write_bytes(raw)
            if "text/html" not in metadata["content_type"].lower():
                raise InvalidRender("Expected text/html response")
            text, dates = extract_text(raw.decode(encoding, errors="strict"), case)
            (output / f"{side}.txt").write_text(text + "\n", encoding="utf-8")
            texts[side] = text
            result.update(status="valid", characters=len(text), words=len(text.split()),
                          normalized_metadata_dates=dates,
                          unresolved_fields=sorted(set(re.findall(r"\{[^{}]+\}", text))),
                          text_sha256=hashlib.sha256(text.encode()).hexdigest())
        except (URLError, HTTPError, HTTPException, OSError, ValueError, LookupError) as error:
            result.update(status="error", error=f"{type(error).__name__}: {error}")
    if any(result["status"] == "error" for result in report["results"].values()):
        report["status"], code = "error", 2
    elif reference_base:
        diff = difference(texts["reference"], texts["local"])
        (output / "diff.txt").write_text(diff, encoding="utf-8")
        equal = texts["reference"] == texts["local"]
        report["status"], code = ("match", 0) if equal else ("mismatch", 1)
    else:
        report["status"], code = "smoke_pass", 0
    report["finished_at"] = datetime.now(timezone.utc).isoformat()
    (output / "report.json").write_text(json.dumps(report, indent=2) + "\n", encoding="utf-8")
    return code, report


# - CLI entry; bad configuration exits 2 like any other unusable result
def main():
    parser = argparse.ArgumentParser(description=__doc__)
    parser.add_argument("mode", choices=["compare", "smoke"])
    parser.add_argument("--case", type=Path, default=DEFAULT_CASE)
    parser.add_argument("--local-base", default="http://host.docker.internal:8080")
    parser.add_argument("--reference-base", default="https://www.commonaccord.org")
    parser.add_argument("--output", type=Path, required=True)
    parser.add_argument("--timeout", type=float, default=30)
    args = parser.parse_args()
    try:
        if args.timeout <= 0:
            raise ValueError("Timeout must be positive")
        case = json.loads(args.case.read_text(encoding="utf-8"))
        code, report = run(case, args.local_base,
                           args.reference_base if args.mode == "compare" else None,
                           args.output, args.timeout)
    except (OSError, ValueError, KeyError) as error:
        parser.exit(2, f"Configuration error: {error}\n")
    print(json.dumps(report, indent=2))
    return code


if __name__ == "__main__":
    sys.exit(main())
