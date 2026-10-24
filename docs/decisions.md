# Design decisions

- Decisions that shape the Python renderer and its gates, with the reason for each
- Newest last; a later decision that changes an earlier one says so
- Settled decisions only

## D1 Parity with the legacy renderer (2026-10-23)

- Decision: the Python renderer must render the same document text as the legacy PHP/Perl renderer, template by template, view by view
- Replaces: "every template renders without error, no byte parity" (the Python port's first acceptance bar)
- Why: legal users rely on the documents the legacy site produces; a renderer that differs silently changes contract text
  - found by the first comparison: Python joined words where a value starts with a non-breaking space ("Losses. If" → "Losses.If")
- How it is checked: `task parity` renders every template on both servers and compares the text after the navigation bar
  - exit 0 only when every template matches or is an accepted deviation (D2)
- Scope: the finished results, i.e. the views that show the document: Document, Visual, Print
  - also gated while they pass at no extra cost: Missing, Xray, Open Parameters (authoring aids)
  - not in scope: Trace, a diagnostic view; it lists the lookups made, with a plain-text preview of each value, and need not match legacy's (legacy repeats every lookup and inlines every value: pages of tens of MB)

## D2 Where legacy fails, Python keeps the better behavior (2026-10-23)

- Decision: parity applies to documents legacy renders; where legacy fails, Python does not copy the failure
- Accepted deviations, each recognized by `task parity` only under a strict test:
  - missing include: legacy aborts the whole page with `Missing file: …`; Python renders the rest and reports the include (response header, HTML comment)
    - accepted only when legacy's whole page is the abort and Python reports that same include
    - Missing and Open Parameters swallow the abort (legacy shows "Nothing to Show", or the form without suggestions); there the abort is confirmed on legacy's Document view for the same template
  - missing document: legacy prints `Missing file:` with its server path (`/var/www/html/Doc//…`); Python says `No such document: <path>` in every document view
    - accepted only when legacy's Document view failed on exactly the path Python names
    - both rewrite characters outside `[\w/.,_-]` in the requested path to `_`, so 5 duplicate files with a space in the name (`… 2.md`, linked from nowhere) cannot be opened by either
  - Print stylesheet: legacy Print treats `CSS.Special` as a whole `<head>` block, so a template that sets it to a stylesheet path (2 OrinKerr pleadings) shows the path as page text and loses its stylesheet; Python uses it as the stylesheet, as legacy's own Document view does
    - accepted only when legacy's text is exactly Python's stylesheet path followed by Python's text
  - Print remote include: legacy's header parser mishandles remote includes (`http…`) and Print shows its bogus `Missing file: ./Doc/https://…` above the correctly rendered document (3 templates); Python shows the document only
    - accepted only when legacy's text is that error for a remote URL followed by exactly Python's text
  - Open Parameters file content: legacy puts the file into the textarea unescaped, so the browser decodes its entities (`&nbsp;`, `&lt;li&gt;`) and Save writes them back decoded, silently changing the file; Python shows the file exactly, and Save keeps it
    - accepted only when legacy's text equals Python's with entities decoded once
- Why: a page that shows only an error, for a template whose other content exists, helps nobody; the gaps are corpus defects owned by the legal users
- Not covered: any other difference is a mismatch and fails the gate

## D3 No half-rendered pages (2026-10-23)

- Decision: a render that hits a budget (D4) shows "Nothing to Show", never the part rendered before the cut
- Applies to every document view and the landing page
- Why: a cut render is an incomplete document; serving it as if complete misleads the reader
  - legacy behaves the same way in effect: on the one runaway template its parser is killed and the page says "Nothing to Show"
- Loops cut by the loop guard are not budget cuts: legacy cuts them the same way, so those renders are complete and shown

## D4 Small budgets, no deep recursion (2026-10-23)

- Decision: the include search is a loop, not recursion; Python recursion follows placeholder nesting only
- Budgets per render, set from the corpus with headroom:

| Budget | Limit | Corpus maximum |
|---|---|---|
| Placeholder depth | 64 | 42 (NVCA 2020 charter) |
| Include chain | 32 files | 16 |
| Lookups | 100,000 | 48,482 (EU AI Act articles) |
| Trace rows listed | 50,000 | 28,320 (GDPR article list) |
| Text size | 5M characters | not reached |

- Trace output cells: plain text, cut to 1,000 characters; the largest Trace page is 6.7 MB (legacy: 46 MB) and its render peaks under 200 MB

- The default Python recursion limit is enough; nothing raises it
- Why: deep recursion only served runaway templates; legitimate depth comes from long include chains (demo → form → outline → base), which are a search, not nesting
  - measured: the deepest template needed 271 recursive levels before (32 placeholder levels × up to 11 include hops each)
- Only one template in the corpus reaches a budget (its include prefix grows forever); per D3 it shows "Nothing to Show"
- Changing a budget: rerun the corpus measurement and `task parity`

## D5 Templates taken from upstream as-is (2026-10-23)

- Decision: everything under `Doc/` comes from upstream (CommonAccord) unchanged; the renderers and tooling change nothing there
- Gates: `lint-links` and `lint-includes` report problems in `Doc/` but do not fail the build; hard-coded links in deployed code still fail
- Why: the corpus belongs to its legal users; renderer work must not change it
