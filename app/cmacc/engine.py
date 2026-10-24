import re
from http.client import HTTPException
from urllib.request import urlopen

from markupsafe import Markup

from .pages import marks

# Perl's \s on undecoded bytes: ASCII whitespace only (a non-breaking space is text, not padding)
WS = " \t\n\r\f\v"
PLACEHOLDER = re.compile(r"\{([^}]+)\}")
INCLUDE = re.compile(r"^([^=]*)=\[(.+?)\]")
ASSIGN = re.compile(r"^([^=]*?)[ \t\n\r\f\v]*=")
VALUE = re.compile(r"[ \t\n\r\f\v]*=[ \t\n\r\f\v]*(.*)")
SENTINEL = re.compile(r"^[ \t\n\r\f\v]*</test>[ \t\n\r\f\v]*$")
# Budgets, with headroom over the corpus (deepest placeholder nesting 42, longest include
# chain 16, most lookups 48k). Only runaway templates reach them. Recursion follows
# placeholder nesting only, so the default Python recursion limit is enough.
MAX_DEPTH = 64
MAX_CHAIN = 32
MAX_STEPS = 100_000
MAX_CHARS = 5_000_000
MAX_VISITS = 50_000  # Trace rows; corpus maximum 28k
MARKED_MODES = {"doc", "trace", "xray"}


# - legacy truth rule: "" and "0" count as not found
# - so the search continues and the placeholder stays
def found(value):
    return value is not None and value not in ("", "0")


# - one object file: its lines, "key=" lines bucketed by key, and its include lines, in order
class Record:
    def __init__(self, text):
        self.lines, self.buckets, self.includes = text.split("\n"), {}, []
        for line in self.lines:
            match = ASSIGN.match(line)
            if match:
                self.buckets.setdefault(match.group(1), []).append(line)
            match = INCLUDE.match(line)
            if match:
                self.includes.append(match.groups())

    # - legacy rule: the first line matching ^key\s*=\s*(.*)$ wins, even when its value is empty
    # - the key is matched as written, so "Maybe " needs the line "Maybe =", not "Maybe="
    # - keys containing "=" are not bucketed; every line is scanned
    def value(self, key):
        lines = self.lines if "=" in key else self.buckets.get(key.rstrip(WS), ())
        for line in lines:
            match = line.startswith(key) and VALUE.match(line, len(key))
            if match:
                return match.group(1)
        return None


# - one file on the include chain being searched for a key
# - content: the value found for the key (its own line, or what an include returned)
# - memo and cuts: the memo slot to fill, (file, key, prefix, depth), and the cut count
#   when the search entered it
class Frame:
    def __init__(self, record, memo, cuts):
        self.memo, self.cuts = memo, cuts
        self.token = memo[:3]
        self.key, self.prefix = memo[1], memo[2]
        self.content = record.value(self.key)
        self.done = self.content is not None  # own line wins, even when empty
        self.includes = iter(record.includes)
        self.part = self.child = None

    # - next include whose prefix starts the key: (prefix, file, key with the prefix stripped)
    # - legacy rule: a remainder of "" or "0" (or spanning lines) falls back to the whole key
    def next_hop(self):
        for part, child in self.includes:
            if self.key.startswith(part):
                rest = self.key[len(part) :] if part else ""
                self.part, self.child = part, child
                return part, child, rest if found(rest) and "\n" not in rest else self.key
        return None


# - one render pass over a root document, following the legacy parser's lookup rules
# - adds what the legacy parser lacked: a loop guard, and missing includes reported instead of fatal
# - mode = the legacy parser whose rules apply, and how resolved values are marked:
#   doc (parser.pl: depth spans), print (parser-print.pl, parser-head.pl), plain
#   (parser-missing.pl, parser-openedit.pl), trace (parser-trace.pl), xray (parser-xray.pl)
class Renderer:
    def __init__(self, store, root, mode="doc", remote=True, timeout=20):
        self.store, self.root, self.mode = store, root, mode
        self.remote, self.timeout = remote, timeout
        self.files, self.missing, self.visits, self.active = {}, [], [], set()
        self.memo = {}
        self.steps = self.cut = self.loops = self.max_depth = 0

    # - parsed object by store path or URL, read once per render
    # - None (and recorded as missing) when unavailable
    def record(self, target):
        if target not in self.files:
            try:
                self.files[target] = Record(
                    self.fetch(target) if target.startswith("http") else self.store.read(target)
                )
            except (OSError, ValueError, HTTPException):
                self.files[target] = None
                self.missing.append(target)
        return self.files[target]

    # - remote include read into memory with a timeout; no temp files, no shell
    def fetch(self, url):
        if not self.remote:
            raise OSError("remote includes disabled")
        with urlopen(url, timeout=self.timeout) as response:
            return response.read().decode("utf-8", "surrogateescape")

    # - expanded value of key in target, or None
    # - the file's own line wins; otherwise the first include whose prefix starts the key,
    #   depth-first; the prefix is stripped from the key going in and accumulated coming out
    # - legacy rule: a value found down the chain is expanded where found, then again at
    #   each file on the way back up, with that file's prefix
    # - a loop over an explicit chain, not recursion: Python recursion follows only
    #   placeholders (expand -> resolve), one level per placeholder depth
    def resolve(self, target, key, prefix="", depth=0):
        entered = self.enter(target, key, prefix, depth, 0)
        if not isinstance(entered, Frame):
            return entered
        chain = [entered]
        while True:
            frame = chain[-1]
            if not frame.done and self.descend(chain, frame, depth):
                continue
            value = self.leave(chain.pop(), depth)
            if not chain:
                return value
            self.deliver(chain[-1], value)

    # - follow the frame's next matching include: push it, or hand back its immediate result
    # - False when the frame has no includes left to try
    def descend(self, chain, frame, depth):
        hop = frame.next_hop()
        if not hop:
            return False
        part, child, rest = hop
        entered = self.enter(child, rest, frame.prefix + part, depth, len(chain))
        if isinstance(entered, Frame):
            chain.append(entered)
        else:
            self.deliver(frame, entered)
        return True

    # - a Frame to search, or the result when there is nothing to search
    # - results are memoized as in the legacy parser, except any that depended on a cut
    # - re-entering the same (file, key, prefix) means a loop: treated as unresolved
    # - budgets stop runaway templates (loops that grow the prefix, exponential fan-out):
    #   placeholder depth, include chain length, total lookups per render
    # - anything past a budget stays unresolved and is counted
    def enter(self, target, key, prefix, depth, chain):
        memo = (target, key, prefix, depth)
        if memo in self.memo:
            return self.memo[memo]
        record, token = self.record(target), (target, key, prefix)
        if record is None or token in self.active:
            self.loops += record is not None
            return None
        self.steps += 1
        if depth > MAX_DEPTH or chain >= MAX_CHAIN or self.steps > MAX_STEPS:
            self.cut += 1
            return None
        self.active.add(token)
        return Frame(record, memo, self.cut + self.loops)

    # - an include's result handed back to the file that followed it; a found value ends its search
    def deliver(self, frame, value):
        # only the Trace view lists visits; past the budget the trace is incomplete: a cut
        if self.mode == "trace":
            if len(self.visits) < MAX_VISITS:
                self.visits.append((frame.prefix + frame.part, frame.key, frame.child, value))
            else:
                self.cut += 1
        if found(value):
            frame.content, frame.done = value, True

    # - finished file: its value expanded with its prefix (still active meanwhile), then memoized
    def leave(self, frame, depth):
        content = frame.content
        result = self.expand(content, frame.prefix, depth) if found(content) else None
        self.active.discard(frame.token)
        if self.cut + self.loops == frame.cuts:
            self.memo[frame.memo] = result
        return result

    # - each {name} resolves from the root document as prefix + name
    # - unresolved names stay as written
    # - legacy rule: every occurrence found up front is visited, repeats included, each one
    #   substituting into the text as it stands (a value may have reintroduced the name)
    # - print mode (parser-print.pl): a trailing "!!" is dropped before the lookup
    def expand(self, content, prefix, depth):
        for name in PLACEHOLDER.findall(content):
            key = prefix + name
            lookup = key[:-2] if self.mode == "print" and key.endswith("!!") else key
            value = self.resolve(self.root, lookup, "", depth + 1)
            if not found(value):
                continue
            value = self.insert(key, value, depth + 1)
            if len(content) + len(value) > MAX_CHARS:
                self.cut += 1
                continue
            content = content.replace("{" + name + "}", value)  # value is already wrapped by mark()
        return content

    # - the text a resolved value becomes, by the legacy parser behind the mode
    # - doc only (parser.pl): a "</test>" value removes the placeholder, and a key ending in
    #   "!!" (e.g. {!!!}) goes in without a span; the other parsers insert both as they are
    def insert(self, key, value, depth):
        if self.mode == "doc" and SENTINEL.match(value):
            return ""
        if self.mode == "doc" and key.endswith("!!"):
            return value
        return self.mark(key, value, depth)

    # - how a resolved value appears: the marks.html macro named after the mode
    # - plain and print modes: the value as is
    # - also records the deepest level reached (the Document view builds its depth buttons from it)
    def mark(self, key, value, depth):
        self.max_depth = max(self.max_depth, depth)
        # marks.html: doc / trace / xray span macros
        macro = getattr(marks, self.mode, None) if self.mode in MARKED_MODES else None
        return str(macro(key, Markup(value), depth)) if macro else value


# - unresolved placeholders in output order, each once
def unresolved(text):
    return list(dict.fromkeys(PLACEHOLDER.findall(text)))
