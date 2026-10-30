import datetime
import mimetypes
import posixpath
import re
import time
from dataclasses import dataclass
from functools import lru_cache
from urllib.parse import parse_qs

from fastapi import FastAPI, Request
from fastapi.responses import Response
from fastapi.staticfiles import StaticFiles
from markupsafe import Markup

from .engine import PLACEHOLDER, Renderer, unresolved
from .pages import marks, pages
from .settings import Settings
from .store import Store

VIEWS = {
    "d": "doc",
    "v": "visual",
    "c": "visual",
    "p": "print",
    "m": "missing",
    "o": "openedit",
    "t": "trace",
    "x": "xray",
    "s": "source",
    "j": "json",
    "l": "list",
}
UNKNOWN_VIEW = "That is not a valid 'view'. Try 'v=s' or 'v=l' etc."
DOC_VIEWS = {
    "doc": ("doc", "Doc.css", True, True),
    "visual": ("doc", "Visual.css", True, False),
    "print": ("print", "Print.css", False, False),
    "missing": ("plain", "Doc.css", True, False),
    "trace": ("trace", "Doc.css", True, False),
    "xray": ("xray", "Doc.css", True, False),
    "openedit": ("plain", "Doc.css", True, False),
}
# views that load the corpus's Numbering.js ("2.3." outline numbering), as legacy doc/print do
NUMBERED_VIEWS = {"doc", "print"}
# views whose legacy parser (parser.pl) always appends a blank line, so the page never says
# "Nothing to Show": an empty render is an empty page
ALWAYS_SHOWN_VIEWS = {"doc", "visual"}
TRACE_PREVIEW = 1_000

settings = Settings()
store = Store(settings.store)
# marks.html: <span class='missing'>{ … }</span>
BRACE_OPEN, BRACE_CLOSE = (
    str(marks.brace_open()),
    str(marks.brace_close()),
)
app = FastAPI(title="CommonAccord", docs_url=None, redoc_url=None)
for route, folder in [
    ("/File", settings.files),
    ("/png", f"{settings.static}/png"),
    ("/image", f"{settings.static}/image"),
    ("/vendor/png", f"{settings.static}/vendor/png"),
]:
    app.mount(route, StaticFiles(directory=folder, check_dir=False))


# - repo links (GitHub, Compare) only when a repo is configured; Compare only for GitHub repos
@lru_cache
def repo():
    slug = re.match(r"^https://github\.com/([^/]+/[^/]+?)/?$", settings.repo_url)
    docs = f"{settings.repo_url}/blob/{settings.repo_branch}/Doc/" if settings.repo_url else ""
    return {"docs": docs, "slug": slug.group(1) if slug else ""}


# - one render; head stylesheet from the document's CSS.Special key when it sets one
#   (print mode: the rules of the legacy header parser, parser-head.pl)
def render(path, key, mode):
    renderer = Renderer(store, path, mode, settings.remote_includes, settings.remote_timeout)
    text = renderer.resolve(path, key) or ""
    css = Renderer(store, path, "print", settings.remote_includes, settings.remote_timeout).resolve(
        path, "CSS.Special"
    )
    return text, renderer, css


# - HTML response; undecodable corpus bytes pass through
# - missing includes reported in a header, not in the page
def html(text, missing=()):
    headers = {"X-Cmacc-Missing-Includes": str(len(missing))}
    return Response(
        text.encode("utf-8", "surrogateescape"),
        media_type="text/html; charset=utf-8",
        headers=headers,
    )


# - document-style views: one engine pass, view-specific marking and post-processing
# - DOC_VIEWS per view: engine mode, default stylesheet, tabs shown, depth control shown
def document_view(req):
    view, path, key, context = req.view, req.path, req.key, req.context
    if not store.isfile(path):
        return no_such_document(req)
    mode, default_css, tabs, depth = DOC_VIEWS[view]
    text, renderer, css = render(path, key, mode)
    if view == "openedit" and not renderer.cut:
        # suggestion lines via marks.suggest
        return html(
            pages.get_template("openedit.html").render(
                context,
                names=unresolved(text),
                existing=store.read(path),
                stamp=f"{datetime.date.today():%Y/%m/%d}:{int(time.time())}",  # legacy date:epoch
                missing=renderer.missing,
            ),
            renderer.missing,
        )
    if view == "missing":
        # "name=<br><br>" per unresolved field
        text = pages.get_template("missing.html").render(names=unresolved(text))
    elif view == "trace":
        # <table> of includes visited
        text = pages.get_template("trace.html").render(visits=trace_rows(renderer.visits))
    text = text.replace("{Render.Metadata}", f"({path}#{key} on {datetime.date.today():%Y-%m-%d})")
    if view == "print":
        text = text.replace("(Curly-)", "{").replace("(-Curly)", "}")
    else:
        # highlight every unresolved {field}
        text = text.replace("{", BRACE_OPEN).replace("}", BRACE_CLOSE)
    # <head> stylesheet, tab bar, depth control, body
    page = pages.get_template("document.html").render(
        context,
        css=css or f"Doc/G/Z/CSS/{default_css}",
        tabs=tabs,
        depth=depth,
        numbering=view in NUMBERED_VIEWS,
        max_depth=renderer.max_depth,
        body=page_body(view, text, renderer),
        missing=renderer.missing,
    )
    return html(page, renderer.missing)


# - Trace rows, most recent first; each value as plain text, cut to TRACE_PREVIEW characters
# - the full nested HTML of every lookup made pages of tens of MB (Trace is a diagnostic
#   view, outside parity: docs/decisions.md D1)
# - tags are stripped from the start of the value only (stripping whole values took seconds)
def trace_rows(visits):
    for prefix, key, target, value in reversed(visits):
        value = value or ""
        text = Markup(value[: TRACE_PREVIEW * 10]).striptags()
        if len(value) > TRACE_PREVIEW * 10 or len(text) > TRACE_PREVIEW:
            text = f"{text[:TRACE_PREVIEW]}… (value is {len(value):,} characters of HTML)"
        yield prefix, key, target, text


# - page body, or None for "Nothing to Show"
# - a render that hit a budget is incomplete: never a half-rendered page (docs/decisions.md)
# - views on the legacy parser.pl show even an empty render
def page_body(view, text, renderer):
    if renderer.cut or not (view in ALWAYS_SHOWN_VIEWS or len(text.strip()) > 1):
        return None
    return Markup(text)


# - source lines as data for source.html: what kind of key and value each line has
# - value kinds: remote / folder / include links, or text whose {placeholders} become links
# - parts alternate text and placeholder names (re.split with a capture group)
def source_rows(text):
    rows = []
    for line in text.split("\n"):
        key, _, rest = line.partition("=")
        value, _, comment = rest.partition("///")
        if not (key or value):
            continue
        link = (
            (re.search(r"\[(http.+?)\]", value) and "remote")
            or (re.search(r"\[(.+?)/\]", value) and "folder")
            or (re.match(r"\[(.+?)\]", value) and "include")
            or "text"
        )
        target = re.search(r"\[(.+?)/?\]", value)[1] if link != "text" else None
        key_kind = (
            "plain"
            if re.search(r"\s", key) or key.endswith(":")
            else "expand"
            if key.endswith(".")
            else "term"
        )
        # source.html: key_kind -> key cell <a>; link -> value cell <a>; parts -> placeholder <a>
        rows.append(
            {
                "key": key,
                "key_kind": key_kind,
                "value": Markup(value),
                "link": link,
                "target": target,
                "parts": PLACEHOLDER.split(value),
                "comment": Markup(comment),
            }
        )
    return rows


# - JSON-ish view as data: include edges, then key/values split into text and placeholder names
def json_parts(text):
    edges, data = [], []
    for line in text.split("\n"):
        key, eq, value = line.partition("=")
        if m := re.search(r"\[(.+?)\]", value):
            edges.append((key, m[1]))  # json.html: "edges" list, target linked
        elif eq:
            data.append((key, PLACEHOLDER.split(value)))  # json.html: "data" list, names in <b>
    return edges, data


# - folder listing: intro page, subfolders, files, README paragraphs; repo link when configured
def list_view(folder, context):
    folder = folder if folder.endswith("/") or not folder else folder + "/"
    intro = next(
        (
            store.read(folder + n)
            for n in ("listintro.html", "list.html")
            if store.isfile(folder + n)
        ),
        None,
    )
    entries = [
        (n, d)
        for n, d in store.listdir(folder)
        if not (n.startswith(".") or (not d and n in ("list.html", "listintro.html")))
    ]
    readme = store.read(folder + "README.md") if store.isfile(folder + "README.md") else ""
    # list.html joins with <br>
    paragraphs = [Markup(p) for p in re.split(r"\n\r\n\r|\n\n|\r\r", readme)] if readme else []
    parent = posixpath.dirname(folder.rstrip("/"))
    # breadcrumb, intro, entry links, README
    return html(
        pages.get_template("list.html").render(
            context,
            folder=folder,
            parent=parent,
            name=posixpath.basename(folder.rstrip("/")),
            intro=Markup(intro) if intro else None,
            entries=entries,
            readme=paragraphs,
        )
    )


# - legacy save: overwrite an existing object with normalized line endings, trimmed
def save(path, content):
    try:
        store.write(path, content.replace("\r\n", "\n").strip())
        return None
    except FileNotFoundError:
        return f"ERROR: File {path} does not exists."


# - one request, cleaned: view aliases expanded, file path limited to safe characters
# - keys shorter than two characters mean r00t (legacy rule)
# - context is shared by every page template
@dataclass
class Req:
    view: str
    path: str
    key: str
    params: dict
    context: dict


# - query string plus, for POST, the form body; the last value wins for repeated names
async def read_params(request):
    params = {k: v[-1] for k, v in parse_qs(request.url.query, keep_blank_values=True).items()}
    if request.method == "POST":
        body = (await request.body()).decode("utf-8", "surrogateescape")
        params |= {k: v[-1] for k, v in parse_qs(body, keep_blank_values=True).items()}
    return params


# - parameters -> Req (see Req for the cleaning rules)
def make_req(params):
    view = params.get("v", "landing")
    path = re.sub(r"[^\w/.,_-]", "_", params.get("f", "")).replace("..", "")
    key = params.get("k", "")
    key = key if len(key) >= 2 else "r00t"
    context = {
        "path": path,
        "key": key,
        "name": posixpath.basename(path),
        "folder": posixpath.dirname(path),
        "repo": repo(),
    }
    return Req(VIEWS.get(view, view), path, key, params, context)


# - landing page: the configured landing template, rendered bare (no tab bar)
def landing_view(req):
    text, renderer, _ = render(settings.landing, req.key, "doc")
    complete = len(text) > 1 and not renderer.cut  # no half-rendered page (docs/decisions.md)
    return html(text if complete else "Nothing to Show", renderer.missing)


# - the requested document does not exist: an <h3> message, never an empty or broken page
#   (legacy prints "Missing file:" with its server path; docs/decisions.md)
def no_such_document(req):
    page = pages.get_template("message.html")
    return html(page.render(req.context, message=f"No such document: {req.path}"))


# - folder listing, from the request's path
def listing_view(req):
    return list_view(req.path, req.context)


# - Source and JSON-ish views: save first when submitted, then show the file
# - unknown view names fall back to the Source table with a notice, like the legacy app
def file_view(req):
    submitted = "submit" in req.params and req.view in ("source", "json")
    error = save(req.path, req.params.get("newcontent", "")) if submitted else None
    if not store.isfile(req.path):
        return no_such_document(req)
    text = store.read(req.path)
    if req.view == "json":
        edges, data = json_parts(text)
        # edges + data lists
        page = pages.get_template("json.html")
        return html(page.render(req.context, edges=edges, data=data, error=error))
    notice = None if req.view == "source" else UNKNOWN_VIEW
    # key = value table
    page = pages.get_template("source.html")
    return html(page.render(req.context, rows=source_rows(text), error=error, notice=notice))


HANDLERS = {"landing": landing_view, "list": listing_view} | dict.fromkeys(DOC_VIEWS, document_view)


# - single entry point, same URLs as the legacy app: i.php?v=<view>&f=<file>&k=<key>
# - the view picks the handler; anything unlisted is shown as a file
@app.api_route("/", methods=["GET", "POST"])
@app.api_route("/i.php", methods=["GET", "POST"])
@app.api_route("/index.php", methods=["GET", "POST"])
async def dispatch(request: Request):
    req = make_req(await read_params(request))
    return HANDLERS.get(req.view, file_view)(req)


# - corpus files (stylesheets, images) by their Doc/ path, served from the template store
@app.get("/Doc/{rel:path}")
def corpus_file(rel: str):
    if not store.isfile(rel):
        return Response(status_code=404)
    data = store.read(rel).encode("utf-8", "surrogateescape")
    return Response(data, media_type=mimetypes.guess_type(rel)[0] or "application/octet-stream")
