# Renderer comparison prototype

- Black-box: compares document text from two running renderers
- Does not implement or change the CommonAccord parser
- Prototype case: WorldCC NDA design form, Document view, key `r00t`

## How a comparison works

```mermaid
flowchart LR
  case["Case<br/>document, key,<br/>required phrases, min length"]
  local["Local renderer"]
  ref["Reference renderer<br/>public site"]
  case --> fetchL["GET Document view"]
  case --> fetchR["GET Document view"]
  local --> fetchL
  ref --> fetchR
  fetchL --> exL["Extract document text<br/>validate"]
  fetchR --> exR["Extract document text<br/>validate"]
  exL --> cmp{"both valid?"}
  exR --> cmp
  cmp -->|"no"| err["error<br/>exit 2"]
  cmp -->|"yes"| eq{"text equal?"}
  eq -->|"yes"| match["match<br/>exit 0"]
  eq -->|"no"| mis["mismatch + word diff<br/>exit 1"]
```

- **compare**: both sides; any unusable side is an error, never a pass
- **smoke**: local side only; `smoke_pass` never claims a reference match
- Evidence per run: raw HTML, normalized text, JSON report, word diff (when both valid)
- Report: URLs, retrieval times, content hashes, masked-date counts, unresolved fields

| Exit | Meaning |
|---|---|
| `0` | `match`, or local-only `smoke_pass` |
| `1` | both valid, normalized text differs |
| `2` | endpoint down, HTTP/decoding/renderer error, invalid document, bad config |

## Comparison contract

- Document text = everything after the Document view's navigation separator
- Excluded: navigation, head, scripts, styles, depth-control bar
- Kept: case, punctuation, amounts, dates, order, unresolved `{fields}`
- Normalized: HTML entities, whitespace
- Masked: only the renderer's own "on YYYY-MM-DD" metadata date; agreement dates kept
- Rejected even with HTTP 200:
  - missing navigation/separator
  - known renderer error text
  - too short, or missing required phrases
- Not measured: CSS layout, list numbering, JavaScript state, link targets
- Unfilled fields: reported and compared, not failures by themselves
- Mismatch ≠ parser regression; the corpus may differ too

## Reference discovery

- Organization homepage → document catalog on the public site
- Renders are live `i.php?v=d&f=<document>&k=<key>` requests, not exported files
- Search-indexed WorldCC NDA render identified the prototype document
- Leading slash in `f` redundant; the case uses the canonical path
- 2026-09-22: public site refused HTTP and HTTPS
  - case holds discovery provenance only, **no captured baseline**
  - search snippets and local output never used as reference
  - first successful live compare captures the real reference response

Links: [homepage](https://commonaccord.wordpress.com/) ·
[catalog](https://www.commonaccord.org/i.php?v=l&f=G/) ·
[WorldCC NDA render](https://www.commonaccord.org/i.php?f=%2FG%2FWorldCC%2FNDA-Design%2FForm%2F0.md&k=r00t&v=d)

## Reference deployment (inferred)

- No access to the public host; picture inferred from repository history
- Evidence for Heroku:
  - project README: "deployed via Heroku"
  - Heroku commits 2015 → 2025-04 (memory limits, "won't render", pruning)
  - no process or dependency manifest → fits PHP buildpack defaults (Apache, repo root)
- Later hosts in history: A2Hosting / cPanel (2025-10), DigitalOcean over SSH (2026-05)
- Any of these may serve the public site; comparison depends only on the HTTP interface
- Dashed = assumed, not observed

```mermaid
flowchart LR
  gh["GitHub<br/>master branch"]
  client["Browser or<br/>comparison tool"]
  remote[("Remote documents<br/>http(s)")]

  subgraph heroku["Heroku (inferred)"]
    router["Heroku router<br/>public site"]
    subgraph dyno["web dyno (PHP buildpack + Perl)"]
      apache["Apache + PHP<br/>front controller"]
      helpers["View dispatch<br/>by view parameter"]
      views["View scripts<br/>doc, print, missing, trace, xray..."]
      parser["Perl parsers<br/>document + key"]
      fs[("Corpus on the dyno's<br/>ephemeral filesystem")]
    end
  end

  gh -->|"deploy on push"| router
  client -.->|"GET Document view"| router
  router -.-> apache --> helpers --> views
  views -->|"shell call"| parser
  parser -->|"read documents, follow inheritance"| fs
  parser -.->|"fetch to temp file, removed after"| remote
  helpers -->|"source / JSON view saves"| fs
  parser -->|"HTML on stdout"| views

  classDef inferred stroke-dasharray: 5 5
  class heroku,router,dyno,fs inferred
```

- Perl does all document assembly
- PHP: pick a view, call a parser with document + key, wrap its output in the page

```mermaid
sequenceDiagram
  participant V as Document view (PHP)
  participant P as Perl parsers
  participant F as Corpus
  participant R as Remote URL

  V->>P: header parser (CSS, title)
  V->>P: main parser (document, key)
  P->>F: find "key = value" in the document
  alt key not in this document
    P->>F: follow prefix=[other document] inheritance, recurse
    opt target is a URL
      P->>R: fetch to temp file
    end
  end
  loop each {field} in value
    P->>F: resolve prefix + field from the original document
    Note over P: wrap resolved value in a span, or<br/>leave {field} for the Missing view
  end
  P-->>V: HTML fragment, or "Missing file: ..."
  P->>F: remove temp files
```

- Parser errors come back inside HTTP 200 pages → contract rejects error text, not status codes

## Run with the pinned container

- Python + libraries pinned by image digest; no pip dependencies
- Legacy app image unchanged
- Needs OrbStack + the local app's port-forward
- Each run needs an empty output directory; new run name keeps old evidence
- Outputs go in the ignored agent-work area, never the corpus
- Base URLs: site roots (optionally a subdirectory), not `i.php` URLs
- From OrbStack, `host.docker.internal` reaches the macOS forward; a cluster Service URL also works

```bash
CMACC_TEST_IMAGE=python:3.14.7-slim-bookworm@sha256:82bc3c539b8813ada9d68c63b40158fa002f7f33de9bf3312a3dfdc0620dff56
mkdir -p .agent-work/renderer-smoke
docker --context orbstack run --rm \
  --mount "type=bind,src=$PWD,dst=/workspace,readonly" \
  --mount "type=bind,src=$PWD/.agent-work/renderer-smoke,dst=/results" \
  --workdir /workspace --env PYTHONDONTWRITEBYTECODE=1 \
  "$CMACC_TEST_IMAGE" python tools/renderer_compare.py compare \
  --local-base http://host.docker.internal:8080 \
  --reference-base https://www.commonaccord.org \
  --output /results/comparison-001
# local only: replace "compare" with "smoke", new output dir
# options: --case <json>  --timeout <seconds>
```

## Test the comparison tool

- Synthetic unit tests, offline:
  - markup normalization, meaningful amount changes
  - missing boundaries, HTTP-200 error pages, reference outages
  - metadata dates, placeholders, real-socket fetch
- Not evidence of equivalence with the public site
- Tool sends read-only GETs only: no edit routes, no forms, no snapshot updates, no Git

```bash
docker --context orbstack run --rm --network none \
  --mount "type=bind,src=$PWD,dst=/workspace,readonly" \
  --workdir /workspace --env PYTHONDONTWRITEBYTECODE=1 \
  "$CMACC_TEST_IMAGE" python -m unittest discover -s tests/renderer -v
```
