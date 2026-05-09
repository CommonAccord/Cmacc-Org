# The ProseObject Paradigm — A Formal Specification

*An implementation reference for computer scientists.*

---

## 1. Purpose and Scope

A **ProseObject** is a unit of human-readable text whose final form is produced by recursively resolving named references through a directory of plain-text "object" files. The paradigm is designed for **composable prose** — most prominently, legal and contractual text — where reuse, variation, and fine-grained version control are first-class concerns.

This document specifies the data model, file syntax, namespace construction, and rendering algorithm in sufficient detail to permit a clean-room implementation.

---

## 2. Storage Model

A ProseObject **store** is a rooted directory tree on a hierarchical filesystem (or any addressable equivalent: a Git tree, a key/value object store, etc.).

- Every leaf is a **plain UTF-8 text file** ("object file").
- Files are addressed by their path relative to the store root. The conventional, but not required, extension is `.md`.
- Subdirectories carry no semantics other than namespacing the file paths.
- The store has no global manifest, schema, or index. All structure is derived at resolution time from the files themselves.

---

## 3. File Syntax

Each object file is, semantically, an **ordered sequence of records**. A record is a single `key = value` binding. The file format is line-oriented.

### 3.1 Record Delimitation

Records are delimited by line boundaries. A record begins at a line start and ends at the next line end. For implementations: the newline conventions of the host OS (`\n`, `\r\n`) MUST both be accepted. Blank lines and lines that contain no `=` character are non-records and are skipped during parsing (they exist for human readability only).

### 3.2 Record Grammar

Informally, a record matches:

```
record   ::= key "=" value LINE-END
key      ::= [A-Za-z0-9_$.\-]*           ; may be empty
value    ::= raw-value | reference-value
```

The first `=` on the line separates key from value. Any subsequent `=` characters are part of the value.

### 3.3 The Two Value Forms

There are exactly two value forms:

**(a) Raw value.** Any sequence of UTF-8 characters up to the line terminator. Raw values may contain zero or more **placeholders** of the form `{name}`, where `name` is a non-empty sequence of characters drawn from the same alphabet as keys. Placeholders are the only in-band markup; everything else in the value is treated as opaque text and is preserved byte-for-byte through rendering.

**(b) Reference value.** A value that is a single bracketed path:

```
value-ref ::= "[" file-path "]"
```

The path is interpreted relative to the store root (not relative to the referring file). A reference value is **not** raw text; it is an inclusion directive (see §5).

### 3.4 Keys

Keys are **dotted paths** — e.g., `Investor.Sign.YMD`, `Def.Safe_Preferred_Stock.sec`. The dot is purely a naming convention adopted by authors to suggest hierarchy; the resolver treats keys as **opaque strings** for matching purposes. The empty key (`""`) is legal and is reserved for unprefixed inclusion (see §5.2).

Conventional sub-segments include `.sec` (a section's text), `.cl` (a clause), `.YMD` (an ISO date), `.$` (a money amount), and so on. These are author conventions only; the resolver attaches no meaning to them.

---

## 4. The Namespace

Resolving a file produces a **namespace**: a finite map

```
N : Key -> RawValue
```

The namespace is the **only** state the renderer consults when expanding placeholders.

### 4.1 Construction Rule

A file's namespace is built by walking its records **in source order**. For each record:

- If the record's value is **raw**, bind the key to that raw value in `N`, **provided the key is not already bound**. (Equivalently: first writer wins.)
- If the record's value is a **reference** (an inclusion), recursively build the namespace `N'` of the referenced file, then **merge** `N'` into `N` under the rules in §5.

The "first writer wins" rule is essential: it is what makes an instance file (which sets concrete values up front) able to override the defaults that arrive later via inclusions of form/template files.

> Implementer's note. Equivalently, one may build the namespace with a "last writer wins" semantics by walking records in **reverse** source order. Implementations should pick one model and document it; the example corpus assumes first-wins-in-source-order.

---

## 5. Inclusion Semantics

A record `prefix.=[path]` causes the namespace of the file at `path` to be folded into the current namespace.

### 5.1 Prefixed Inclusion

Given a record whose key is `P` (typically ending in a dot, e.g. `Investor.`) and whose value is `[path]`, every binding `k -> v` in the included namespace `N'` is contributed to `N` as:

```
P + k  ->  v
```

Concatenation is purely textual. Thus an included file's `Sign.YMD` becomes `Investor.Sign.YMD` in the host namespace. By convention, authors terminate the prefix with a `.` so that joined keys read as dotted paths.

Note that a record `Company.=[G/U/Who/acme_incorporated.md]` not only includes the file's bindings under the `Company.` prefix, but also (by §4.1) attempts to bind the bare key `Company.` itself. That binding is harmless if no placeholder ever references `{Company.}`.

### 5.2 Unprefixed Inclusion

If the key in an inclusion record is the empty string — i.e., the record reads `=[path]` — the included namespace is merged with **no prefix**. Bindings flow in under their own names. This is how a "form" or "template" file is pulled into an "instance" file.

### 5.3 Recursion, Cycles, and Caching

Inclusion is recursive: an included file may itself contain inclusion records, prefixed or unprefixed, to arbitrary depth.

A conforming implementation:

- MUST detect inclusion cycles (a file transitively including itself) and either error or treat the second visit as a no-op. The reference implementation treats cycles as a no-op so that authors can write self-referential references without breaking renders.
- SHOULD memoize per-file namespace construction within a single render pass; a file included `n` times yields the same `N'` each time.
- MUST report missing target files as a recoverable error: the inclusion contributes nothing to `N`, but rendering of the rest of the file proceeds.

---

## 6. Rendering

A **render** is initiated by supplying two arguments:

```
render(file_path, key)
```

Typically, the user clicks a key in a "Source" view of the file, which invokes `render(current_file, clicked_key)`.

### 6.1 Algorithm

```
render(file, key):
    N := build_namespace(file)         # per §4 and §5
    return expand(N, key)

expand(N, key):
    if key not in N:
        return "{" + key + "}"         # unresolved: pass through literally
    v := N[key]
    return substitute(N, v)

substitute(N, text):
    out := ""
    for each maximal segment s of text:
        if s is a placeholder "{name}":
            out += expand(N, name)
        else:
            out += s
    return out
```

Substitution is **textual and recursive**: an expanded value may itself contain `{...}` placeholders, which are expanded in turn against the **same** namespace `N`. Re-resolution against `N` (not against any local scope of the producing file) is what makes the model compositional: a form file can refer to `{Investor.Sign.YMD}` knowing only that some host namespace will, somewhere, supply that binding.

### 6.2 Unresolved Placeholders

A placeholder whose name is not bound in `N` is emitted **verbatim**, braces and all. This is intentional. It is a survivable failure mode that doubles as a debugging aid: the rendered output shows exactly which keys were missing.

### 6.3 Termination

To guarantee termination on adversarial input, an implementation MUST either:

- track an in-progress set of keys per render and treat a recursive re-entry as unresolved (emit `{name}` verbatim), or
- impose a finite maximum expansion depth and fail/truncate when exceeded.

Either choice is conformant; the in-progress-set approach matches the existing reference behavior more closely.

### 6.4 Conventional Entry Points

Authors conventionally define a key called `r00t` as the "whole document" rendering target, and keys like `Sec`, `Title`, or `r00t-html` as alternative views. The renderer attaches no special meaning to these names; they are simply the keys most often passed as the second argument to `render`.

---

## 7. Worked Micro-Example

File `Doc/G/Demo/acme.md`:

```
Company.Name=Acme, Inc.
Investor.Name=Andrea Ang
Amount.$=$65,000

=[Doc/G/Form/safe.md]

r00t={Title}\n\n{Body}
```

File `Doc/G/Form/safe.md`:

```
Title=SAFE between {Company.Name} and {Investor.Name}
Body=The Investor pays {Amount.$} to the Company on the terms below. {MissingClause}
```

`render("Doc/G/Demo/acme.md", "r00t")` yields:

```
SAFE between Acme, Inc. and Andrea Ang

The Investor pays $65,000 to the Company on the terms below. {MissingClause}
```

Note (a) the bindings supplied up-front in `acme.md` win over anything the form might have set; (b) the form's placeholders are resolved against the host namespace; (c) the unbound `{MissingClause}` is preserved literally.

---

## 8. Conformance Checklist

A minimal conforming implementation provides:

1. A line-oriented parser that splits each file into records on the first `=`.
2. Recognition of the two value forms (raw vs. `[path]` inclusion).
3. A namespace builder honoring source-order, first-writer-wins, prefix concatenation, and empty-prefix passthrough.
4. A recursive substitution engine for `{name}` placeholders with literal-passthrough for unresolved names and a termination guarantee.
5. A `render(file, key)` entry point.
6. Cycle detection on inclusion and on placeholder expansion.
7. UTF-8 input; preservation of all non-placeholder bytes in raw values.

Anything beyond the above (caching, inverse index for "where is `X` defined?", a Source view, syntax highlighting, signing, diffing, web rendering) is a quality-of-life layer over the same primitives.

---

## 9. Design Notes (Non-Normative)

- **Why first-writer-wins?** It lets concrete instance files state the small number of facts that distinguish them, then pull in a generic form whose defaults fill the rest. The instance is a thin diff against a shared template.
- **Why dotted keys with no parsing?** Treating keys as opaque strings keeps the resolver tiny and lets authors invent new conventions (e.g., `.sec`, `.cl`, `.$`, `.YMD`) without changing the engine.
- **Why preserve unresolved placeholders?** Drafts are routinely incomplete. A renderer that emits `{Investor.Sign.YMD}` in place of a missing date is more useful than one that fails the whole render or silently elides.
- **Why filesystem paths?** The store is an ordinary directory of ordinary text files. Git, diff, grep, code review, and IDEs all work without adaptation.
