# Python port: problem breakdown and libraries

- Goal: a Python renderer with parity: every template renders the same document text as the legacy PHP/Perl renderer, and never errors or loops
- Principle: libraries wherever possible; custom code only where no library fits
- Only open-source libraries that are currently active and widely adopted
- Status: implemented; see the app README for how it runs

## The problem

- Input: a store of plain-text ProseObjects (about 5,200 `.md` objects, plus HTML, images, CSS)
- Request: view + document + key (e.g. Document view, SAFE demo, `r00t`)
- Output: HTML page; the document is assembled by recursive, lazy key resolution
- Semantics: follow what the corpus relies on (Perl behavior) where it differs from the written spec
  - the spec describes whole-namespace construction
  - Perl resolves one key at a time, on demand
- Acceptance: parity with the legacy renderer, measured per template by `task parity`

```mermaid
flowchart LR
  req["Request<br/>view, document, key"] --> route["Routing +<br/>parameter cleanup"]
  route --> view{"View"}
  view -->|"document views"| resolve["Resolution engine"]
  view -->|"browse / source"| browse["Listing + source tables"]
  resolve --> decorate["Decoration mode<br/>spans, plain, trace, xray"]
  decorate --> analyze["Analysis<br/>missing, open parameters"]
  analyze --> page["Page composition<br/>header, tabs, depth control"]
  browse --> page
  resolve <--> store[("Object store<br/>local, cloud, remote http")]
  browse <--> store
  page --> html["HTML response"]
```

## Functional parts

| # | Part | What it does | Legacy size |
|---|---|---|---|
| 1 | Routing | view/document/key params, defaults, path cleanup, view aliases | small |
| 2 | Object store | read objects, list folders, write saves, fetch remote includes | spread across all |
| 3 | Record parsing | line → key/value on the first `=`; inclusion lines `prefix=[target]` | a few regexes |
| 4 | Resolution engine | lazy key lookup, prefixed inheritance, placeholder expansion from the root document | ~60 lines Perl |
| 5 | Decoration modes | depth-tagged spans (Document), plain (Print), titled spans (Trace), Xray, header CSS lookup | 7 near-copies of the parser |
| 6 | Analysis | unresolved placeholders (Missing); suggested parameters with naming rules (Open parameters); visited-include table (Trace) | small |
| 7 | Page composition | header, tabs, depth-control script, missing-field highlighting, render date, "Nothing to Show" | medium, mostly static |
| 8 | Browsing | folder listing (+ intro/README), source key/value table with links, JSON-ish view | medium |
| 9 | Editing | save edited source (line endings, trim) | small |
| 10 | Static assets | CSS, images, scripts | none (web server) |
| 11 | Verification | every template renders without error; termination | test tooling |

- Seven Perl parsers share one engine → one Python engine with a decoration hook
- Views differ only in decoration and post-processing

## Library choice per part

```mermaid
flowchart TB
  subgraph web["Web + API"]
    fastapi["FastAPI<br/>routing, typed API, OpenAPI"]
    uvicorn["uvicorn<br/>ASGI server"]
    jinja["Jinja2<br/>page templates"]
    settings["pydantic-settings<br/>configuration"]
  end
  subgraph engine["Domain (custom, stdlib only)"]
    parse["Record parsing<br/>re"]
    resolve["Resolution engine<br/>re + functools cache"]
    modes["Decoration + analysis"]
  end
  subgraph storage["Storage"]
    fsspec["fsspec<br/>one file-system interface"]
    local["local files"]
    az["adlfs<br/>Azure Blob"]
    s3["s3fs<br/>S3-compatible"]
    http["http<br/>via aiohttp"]
  end
  subgraph verify["Verification"]
    pytest["pytest"]
    hyp["hypothesis<br/>termination, cycles"]
    sweep["render sweep<br/>all templates"]
    pulseN["pulse task<br/>running server"]
  end
  subgraph tooling["Tooling"]
    uv["uv<br/>lock + hashes"]
    ruff["ruff<br/>lint + format"]
  end

  fastapi --> modes --> resolve --> parse
  resolve --> fsspec
  fsspec --> local
  fsspec --> az
  fsspec --> s3
  fsspec --> http
```

| Part | Choice | Why | Custom code left |
|---|---|---|---|
| 1 Routing | FastAPI | typed params, same URLs, OpenAPI schemas reused later by the tool gateway | route table |
| 2 Store | fsspec (+ adlfs, s3fs) | one interface for local, Azure Blob, S3; covers the storage-abstraction goal | store root config |
| Remote includes | stdlib `urllib` | fetched in memory with a timeout; open fetching (no allow-list) | a few lines |
| 3 Parsing | stdlib `re` | three regexes; a parser library adds nothing | ~20 lines |
| 4 Engine | stdlib (`re`, `functools`) | no library implements ProseObject resolution; it is the domain | ~80 lines |
| 5–6 Modes | stdlib | a hook on the engine instead of seven copies | ~60 lines |
| 7–8 Pages | Jinja2 | standard templating, autoescape control (values contain intended HTML); heavily used (MarkupSafe ≈ 600M downloads a month); moderate saving: ≈ 90 template lines vs ≈ 130–160 lines of hand-built HTML; no smaller active alternative | templates |
| Forms (saves) | stdlib `urllib.parse` | parses the form body; no extra dependency | a few lines |
| Config | pydantic-settings | env-based settings: store backend, root, remote-include policy | one settings class |
| Server | uvicorn | standard ASGI server | none |
| 11 Tests | pytest, hypothesis | render sweep over every template; generated inputs for cycle/termination | test cases |
| Tooling | uv, ruff | pinned lock with hashes (project pinning rule); lint/format | config |

## Candidates checked (2026-09-22)

| Library | Latest | Released | Python | GitHub stars / last push | Verdict |
|---|---|---|---|---|---|
| FastAPI | 0.141.1 | 2026-07 | ≥3.10, 3.14 listed | 102k / 2026-09 | use |
| Starlette | 1.6.0 | 2026-08 | ≥3.10, 3.14 listed | 12.6k / 2026-09 | use (via FastAPI) |
| uvicorn | 0.53.0 | 2026-09 | ≥3.10, 3.14 listed | 11k / 2026-09 | use |
| pydantic | 2.13.5 | 2026-08 | 3.14 listed | 28.8k / 2026-09 | use (via FastAPI) |
| pydantic-settings | 2.15.0 | 2026-08 | 3.14 listed | 1.5k / 2026-09 | use |
| Jinja2 | 3.1.6 | 2025-03 | ≥3.7, no classifiers | 11.8k / 2025-06; issues active 2026-09 | use: stable, heavily used |
| fsspec | 2026.9.0 | 2026-09 | 3.14 listed | 1.4k / 2026-09 | use; core of pandas/dask/xarray I/O |
| adlfs | 2026.8.0 | 2026-08 | 3.14 listed | 0.2k / 2026-08 | use for Azure |
| s3fs | 2026.9.0 | 2026-09 | 3.14 listed | 1k / 2026-09 | use for S3-compatible / local emulators |
| aiohttp | 3.14.3 | 2026-07 | 3.14 listed | 16.6k / 2026-09 | not needed: remote includes use the standard library |
| python-multipart | 0.0.32 | 2026-06 | 3.14 listed | 0.5k / 2026-09 | not needed: forms parsed with the standard library |
| pytest | 9.1.1 | 2026-06 | 3.14 listed | 14.5k / 2026-09 | use |
| hypothesis | 6.168.0 | 2026-09 | 3.14 listed | 9k / 2026-09 | use |
| syrupy | 6.1.1 | 2026-09 | 3.14 listed | 0.9k / 2026-09 | dropped: parity is compared live against the legacy server |
| uv | 0.12.17 | 2026-09 | — | 90k / 2026-09 | use |
| ruff | 0.16.8 | 2026-09 | — | 50k / 2026-09 | use |
| httpx | 0.28.1 | 2024-12 | classifiers to 3.12 | 15.5k / 2026-03 | reject: no release in ~2 years |
| Flask | 3.1.3 | 2026-02 | ≥3.9 | 75k / 2026-09 | reject: no typed API/OpenAPI for the gateway |
| obstore | 0.11.1 | 2026-08 | ≥3.10 | 0.8k / 2026-09 | reject for now: pre-1.0, smaller adoption |
| fastapi-mcp | 0.4.0 | 2025-07 | classifiers to 3.12 | 12k / 2025-11 | reject: stale |
| mcp (official SDK) | 2.2.0 | 2026-09 | 3.14 listed | 24k / 2026-09 | later: tool gateway |
| fastmcp | 4.0.5 | 2026-09 | classifiers to 3.13 | 28k / 2026-09 | later, only if 3.14 confirmed |

## Version restrictions

- Runtime: Python 3.14 (same pinned image family as the renderer tests)
  - all chosen libraries declare 3.14, except Jinja2 / MarkupSafe (no classifiers; verify in tests)
  - fastmcp does not list 3.14 → prefer the official MCP SDK for the gateway
- FastAPI is 0.x: minor releases can break → pin exact versions via the lock
- FastAPI accepts Starlette ≥0.46; the MCP SDK on 3.14 needs Starlette ≥0.48 → lock one Starlette that satisfies both
- adlfs caps azure-core below 2.0
- fsspec, s3fs, adlfs, gcsfs release together (calendar versions) → upgrade as a set
- pydantic v2 only; no v1 compatibility layer
- Dependencies installed from the lock with hashes, inside the image build; nothing on the host

## Requirement: parity with the legacy renderer

- Every template renders the same document text as the legacy renderer, view by view
  - compared live: both servers run locally, `task parity` diffs the text of every template
  - text = everything after the navigation bar; whitespace collapsed, render date masked
  - error output counts as text: a legacy error page and a Python render are a mismatch
- Status (key `r00t`, 5,253 templates): every view in scope passes, 0 mismatches

| View | Match | Accepted deviations |
|---|---|---|
| Document | 5,097 | 156 |
| Visual | 5,097 | 156 |
| Print | 5,090 | 163 |
| Missing | 5,162 | 91 |
| Xray | 5,097 | 156 |
| Open Parameters | 5,127 | 126 |

  - measured on the upstream corpus as-is (D5); most deviations are missing includes, including the 123 references that differ only by case

  - deviations are where legacy fails (decisions D2); a render that hits a budget shows "Nothing to Show" (D3)
  - Trace is a diagnostic view, outside parity (D1)
- Per-view legacy parsers differ, and the engine follows each by mode: Print drops a trailing `!!` before the lookup; only Document and Visual treat `</test>` as "remove the placeholder"; Xray and Trace wrap values in their own spans
- Decisions behind this: [decisions.md](decisions.md)
- And the renderer never
  - raises an exception or times out
  - loops forever on cyclic includes or placeholders
  - drops the page for a bad include; a missing target is reported, rendering continues
- Corpus defects (a template pointing at a file that does not exist) are reported as corpus findings, not renderer failures
- No hardcoded host: generated links stay relative (`i.php?…`) so pages work wherever deployed

## Behaviors the renderer must handle

- 4 objects are not UTF-8 → read as bytes, pass through unchanged
- 3 files use CRLF line endings
- Cyclic includes and self-referencing placeholders → guard, emit the placeholder unresolved
- Store paths are case-sensitive on Linux and object storage
  - 123 upstream references differ from the real path only by case; they break on Linux in both renderers alike (missing include); `lint-includes` reports them before every build (decisions D5: the corpus is taken as-is)
- Missing include targets: 114 templates still reference content not in the store (older sibling repos, deleted example parties)
  - report and keep rendering; these templates must still render
  - the content itself belongs to the legal users; recovering it is not renderer work
- Include loops: at least one template loops forever in the legacy parser (misreported as a missing file); 15 templates hit a 20-second limit
- Budgets per render stop runaway templates: placeholder depth 64, include chain 32 files, lookups 100k, text 5M characters
  - past a budget the render is incomplete: the page says "Nothing to Show" (decisions D3)
  - measured on the corpus: deepest placeholder nesting 42, longest include chain 16, most lookups 48k; one runaway template is cut, nothing else
  - the include search is a loop, not recursion: Python recursion follows placeholder depth only, so the default recursion limit is enough
- `CSS.Special` is treated as a stylesheet in every view (its only use in the corpus)
- Remote includes (18 objects use `http` targets) → fetched with a timeout; failure = missing include, page still renders
- Keep the legacy semantics authors rely on: first matching line wins, prefixed inheritance, placeholders re-resolve from the root document with the accumulated prefix
  - a value found down an include chain is expanded there, then again at each file on the way back up
  - keys matched as written; only ASCII whitespace around `=` is padding (Perl's `\s` on bytes), so a non-breaking space stays text
  - `{name!!}` (in the corpus: `{!!!}`) is looked up as written and inserted without a span
  - every `{name}` occurrence is visited, repeats included
  - value spans byte-identical to Perl's (single quotes, only `'` escaped)
- Save endpoints kept: source and JSON views write through the store (line endings normalized, trimmed)

## Verification

```mermaid
flowchart LR
  store[("Template store")] --> sweep["Render sweep<br/>every template, root key,<br/>every view"]
  sweep --> classify{"Result"}
  classify -->|"rendered"| ok["pass"]
  classify -->|"exception / timeout"| fail["renderer bug: fail"]
  classify -->|"missing include target"| corpus["corpus finding:<br/>reported, not a failure"]
  prop["Generated include graphs<br/>(property tests)"] --> term{"always terminates?"}
  term -->|"yes"| ok
  term -->|"no"| fail
  pulse["HTTP pulse on the<br/>running Python server"] --> ok
```

- Render sweep over the whole store, every view: pytest
- Termination under arbitrary include graphs: hypothesis
- Running server: existing pulse task pointed at the Python service
- Parity gate: `task parity` against the legacy server running locally; exit 0 only when every template matches

## Porting order

```mermaid
flowchart LR
  s1["1. Engine +<br/>Document view<br/>(landing = Document<br/>of landing template)"] --> s2["2. Source + List<br/>browse, read, save"]
  s2 --> s3["3. Print + Missing<br/>engine variants"]
  s3 --> s4["4. Open parameters, Trace,<br/>Xray, Visual, JSON"]
```

- Each step ships when every template renders without error, and with parity, in that step's views
- Step 1: the core
  - resolution engine, depth-tagged spans, missing-field highlighting, render date
  - landing page = Document view of the configured landing template; no separate code
- Step 2: makes the site usable end to end
  - List: folders, intro pages, README
  - Source: key/value table with links; carries the save endpoint
- Step 3: small variations on the engine (plain output; list of unresolved fields)
- Step 4: analysis and alternate views, lowest use
- Not ported: explore and graph pages (unreachable from the router)

## Carry-overs from the hardcode audit

- One settings object (environment, `CMACC_` prefix) for everything deployment-specific
  - template store location (local path or object-storage URL); no working-directory assumption
  - remote-include policy and timeout
  - repo URL and branch for GitHub / Compare links, same names as the legacy app; links hidden when unset
  - landing template
- Remote includes fetched in memory; no temp files in the store, no shell commands
- Loop guard on includes and placeholders; emit the placeholder unresolved
- Missing include = reported, rest of the page renders (fixes the remaining 114 without corpus changes)
- Case-sensitive store access; no case-folding fallbacks
- Browser assets: the legacy CDN references stay as they are; no new CDN-hosted assets
- Relative links only in generated pages, so the app works under any host or subdirectory
- Image builds for any architecture, reusing the platform-from-engine build behavior
- Existing corpus checks (no legacy-host or root-relative links; exact include paths) keep running before every build, whichever renderer ships

## Size estimate

- Custom Python: roughly 300–400 lines (engine, modes, routes) plus templates
- Legacy equivalent: about 2,500 lines across PHP views and seven parser copies
