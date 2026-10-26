import sys
import tempfile
import threading
import unittest
from http.server import BaseHTTPRequestHandler, ThreadingHTTPServer
from pathlib import Path
from urllib.error import URLError

sys.path.insert(0, str(Path(__file__).resolve().parents[2] / "tools"))
import renderer_compare as compare

CASE = {"name": "synthetic", "document": "G/Test.md", "key": "r00t",
        "min_characters": 5, "required_text": ["Agreement"]}


# - minimal legacy Document view: navigation, <hr> boundary, then content
def page(content, navigation="Source views: Source"):
    return f"<head><title>ignore</title></head><body>{navigation}<hr>{content}</body>"


# - fake fetcher result shaped like a real 200 text/html response
def response(content):
    return content.encode(), "utf-8", {"content_type": "text/html", "http_status": 200}


class ExtractionTests(unittest.TestCase):
    # - extracted document text only; metadata-date count dropped
    def text(self, html):
        return compare.extract_text(html, CASE)[0]

    # - page chrome excluded; entities normalized
    def test_ignores_navigation_scripts_styles_and_depth_control(self):
        html = page('<div class="cmacc-depth-control"><span>Show depth</span></div>'
                    '<script>wrong text</script><style>wrong text</style>'
                    '<p>Agreement <span>Alpha</span>&nbsp;&amp; Beta.</p>')
        self.assertEqual(self.text(html), "Agreement Alpha & Beta.")

    # - inline spans are presentation, not word breaks
    def test_inline_wrappers_do_not_split_words(self):
        self.assertEqual(self.text(page("Agreement con<span>fi</span>dential")),
                         "Agreement confidential")

    # - block elements separate words; non-ASCII text survives
    def test_block_boundaries_and_unicode(self):
        self.assertEqual(self.text(page("<p>Agreement €10</p><p>café</p>")),
                         "Agreement €10 café")

    # - renderer date masked; agreement date of the same form kept
    def test_metadata_date_only(self):
        text, dates = compare.extract_text(page(
            "Agreement dated 2026-09-22 (G/Test.md#r00t on 2026-09-22)"), CASE)
        self.assertIn("dated 2026-09-22", text)
        self.assertIn("on <render-date>", text)
        self.assertEqual(dates, 1)

    # - unfilled {fields} are content to compare, not noise
    def test_unresolved_parameters_are_preserved(self):
        self.assertIn("{Party.Name}", self.text(page("Agreement {Party.Name}")))

    # - pages without the Document view structure rejected
    def test_boundary_required(self):
        for html in ("Agreement without chrome", page("Agreement", "Login")):
            with self.subTest(html=html), self.assertRaises(compare.InvalidRender):
                self.text(html)

    # - legacy error text and empty bodies invalid despite HTTP 200
    def test_error_and_empty_pages_never_pass(self):
        for content in ("", "Agreement Missing file: x", "Agreement Fatal error: x", "Nothing to Show"):
            with self.subTest(content=content), self.assertRaises(compare.InvalidRender):
                self.text(page(content))

    # - valid-looking but unrelated document rejected
    def test_document_marker_required(self):
        with self.assertRaises(compare.InvalidRender):
            self.text(page("An unrelated long enough document"))


class ComparisonTests(unittest.TestCase):
    # - full run against a fake fetcher in a throwaway output dir
    # - returns exit code, report, and written evidence files
    def run_case(self, fetcher, reference="https://reference.example"):
        with tempfile.TemporaryDirectory() as directory:
            code, report = compare.run(CASE, "http://local.example", reference,
                                       directory, fetcher=fetcher)
            files = {p.name: p.read_text() for p in Path(directory).iterdir()}
        return code, report, files

    # - different markup, same text: match with empty diff
    def test_equivalent_markup_matches(self):
        def fetcher(url, timeout):
            text = "Agreement <span>€10</span>" if "local" in url else "<p>Agreement €10</p>"
            return response(page(text))
        code, report, files = self.run_case(fetcher)
        self.assertEqual((code, report["status"]), (0, "match"))
        self.assertEqual(files["diff.txt"], "")

    # - a meaningful change (amount) is a mismatch and shows in the diff
    def test_amount_change_reports_diff(self):
        def fetcher(url, timeout):
            return response(page("Agreement €11" if "local" in url else "Agreement €10"))
        code, report, files = self.run_case(fetcher)
        self.assertEqual((code, report["status"]), (1, "mismatch"))
        self.assertIn("-€10", files["diff.txt"])
        self.assertIn("+€11", files["diff.txt"])

    # - unreachable reference: error, no diff, cause recorded
    def test_reference_outage_is_error_not_pass(self):
        def fetcher(url, timeout):
            if "reference" in url:
                raise URLError("Connection refused")
            return response(page("Agreement valid"))
        code, report, files = self.run_case(fetcher)
        self.assertEqual((code, report["status"]), (2, "error"))
        self.assertEqual(report["results"]["local"]["status"], "valid")
        self.assertNotIn("diff.txt", files)
        self.assertIn("Connection refused", files["report.json"])

    # - matching failures are still failures
    def test_two_identical_error_pages_are_not_a_match(self):
        code, report, _ = self.run_case(lambda *_: response(page("Nothing to Show")))
        self.assertEqual((code, report["status"]), (2, "error"))

    # - truncated transfer reported as an error, not a crash
    def test_interrupted_http_body_produces_error_report(self):
        from http.client import IncompleteRead

        def fetcher(*args):
            raise IncompleteRead(b"partial", 100)

        code, report, files = self.run_case(fetcher)
        self.assertEqual((code, report["status"]), (2, "error"))
        self.assertIn("IncompleteRead", files["report.json"])

    # - local-only run passes as smoke, with no reference result
    def test_smoke_does_not_claim_reference_match(self):
        code, report, _ = self.run_case(lambda *_: response(page("Agreement valid")), None)
        self.assertEqual((code, report["status"]), (0, "smoke_pass"))
        self.assertNotIn("reference", report["results"])

    # - reused output directory refused
    def test_stale_output_is_rejected(self):
        with tempfile.TemporaryDirectory() as directory:
            Path(directory, "diff.txt").write_text("old")
            with self.assertRaises(ValueError):
                compare.run(CASE, "http://local", None, directory)

    # - site subdirectory kept; document and key passed through intact
    def test_url_preserves_document_and_key(self):
        from urllib.parse import parse_qs, urlsplit
        url = compare.render_url("https://example.org/site/", CASE)
        self.assertEqual(urlsplit(url).path, "/site/i.php")
        self.assertEqual(parse_qs(urlsplit(url).query),
                         {"v": ["d"], "f": [CASE["document"]], "k": ["r00t"]})

    # - real socket path: decoding and provenance fields from a local server
    def test_real_http_fetch_records_response(self):
        class Handler(BaseHTTPRequestHandler):
            # - serves one fixed Document view page
            def do_GET(self):
                self.send_response(200)
                self.send_header("Content-Type", "text/html; charset=utf-8")
                self.end_headers()
                self.wfile.write(page("Agreement café").encode())

            # - silences request logging in test output
            def log_message(self, *args):
                pass

        server = ThreadingHTTPServer(("127.0.0.1", 0), Handler)
        thread = threading.Thread(target=server.serve_forever, daemon=True)
        thread.start()
        try:
            raw, encoding, metadata = compare.fetch(f"http://127.0.0.1:{server.server_port}/", 2)
            self.assertIn("café", raw.decode(encoding))
            self.assertEqual(metadata["http_status"], 200)
            self.assertEqual(len(metadata["html_sha256"]), 64)
        finally:
            server.shutdown()
            server.server_close()
            thread.join()


if __name__ == "__main__":
    unittest.main()
