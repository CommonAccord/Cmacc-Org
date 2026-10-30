import pytest
from hypothesis import given, settings
from hypothesis import strategies as st

from cmacc.engine import Renderer, unresolved
from cmacc.pages import marks
from cmacc.store import Store


# - throwaway store from {path: text}; bytes allowed for encoding tests
def store(tmp_path, files):
    for name, text in files.items():
        target = tmp_path / name
        target.parent.mkdir(parents=True, exist_ok=True)
        target.write_bytes(text if isinstance(text, bytes) else text.encode())
    return Store(str(tmp_path))


def render(tmp_path, files, key="r00t", root="doc.md", mode="plain"):
    renderer = Renderer(store(tmp_path, files), root, mode, remote=False)
    return renderer.resolve(root, key), renderer


# - the specification's worked example: instance values win, form placeholders resolve from the host
def test_worked_example(tmp_path):
    text, _ = render(
        tmp_path,
        {
            "doc.md": (
                "Company.Name=Acme, Inc.\n"
                "Investor.Name=Andrea Ang\n"
                "Amount.$=$65,000\n"
                "=[Form/safe.md]\n"
                "r00t={Ti} {Body}\n"
            ),
            "Form/safe.md": (
                "Ti=SAFE between {Company.Name} and {Investor.Name}\n"
                "Body=Pays {Amount.$}. {MissingClause}\n"
            ),
        },
    )
    assert text == "SAFE between Acme, Inc. and Andrea Ang Pays $65,000. {MissingClause}"


# - first matching line wins; spaces around "=" allowed
def test_first_writer_wins(tmp_path):
    text, _ = render(tmp_path, {"doc.md": "r00t = {A}\nA=first\nA=second\n"})
    assert text == "first"


# - prefixed include: key prefix stripped going in, placeholders resolve under the prefix
def test_prefixed_include(tmp_path):
    text, _ = render(
        tmp_path,
        {
            "doc.md": "r00t={Buyer.Sig}\nBuyer.=[Who/acme.md]\nBuyer.Name=Acme Override\n",
            "Who/acme.md": "Sig=Signed: {Name}\nName=Acme\n",
        },
    )
    assert text == "Signed: Acme Override"


# - legacy truth rule: "0" and "" are not found, so the placeholder stays
def test_zero_and_empty_are_unresolved(tmp_path):
    text, _ = render(tmp_path, {"doc.md": "r00t=[{Z}] [{E}]\nZ=0\nE=\n"})
    assert text == "[{Z}] [{E}]"


# - missing include is recorded and the rest of the document still renders
def test_missing_include_reported_not_fatal(tmp_path):
    text, renderer = render(tmp_path, {"doc.md": "=[Gone/file.md]\nr00t=Hello {X}\n"})
    assert text == "Hello {X}"
    assert renderer.missing == ["Gone/file.md"]


# - loops in includes and placeholders terminate with the placeholder unresolved
def test_loops_terminate(tmp_path):
    text, _ = render(
        tmp_path, {"doc.md": "=[b.md]\nr00t={A}\nA={A} and {B}\n", "b.md": "=[doc.md]\nB=ok\n"}
    )
    assert text == "{A} and ok"


# - undecodable bytes and CRLF endings pass through unchanged
def test_bytes_and_crlf(tmp_path):
    text, _ = render(tmp_path, {"doc.md": b"r00t=caf\xe9 {A}\r\nA=x\r\n"})
    assert text.encode("utf-8", "surrogateescape") == b"caf\xe9 x\r\r"


# - per-view legacy parsers: only print (parser-print.pl) drops "!!" before the lookup
@pytest.mark.parametrize(("mode", "expected"), [("doc", "w"), ("print", "v"), ("plain", "w")])
def test_bang_suffix_by_mode(tmp_path, mode, expected):
    text, _ = render(tmp_path, {"doc.md": "r00t={X!!}\nX=v\nX!!=w\n"}, mode=mode)
    assert text == expected


# - only the Document view's parser (parser.pl) treats "</test>" as "remove the placeholder"
@pytest.mark.parametrize(("mode", "expected"), [("doc", "ab"), ("print", "a</test>b")])
def test_sentinel_by_mode(tmp_path, mode, expected):
    text, _ = render(tmp_path, {"doc.md": "r00t=a{S}b\nS=</test>\n"}, mode=mode)
    assert text == expected


# - deep but finite nesting renders in full at the default recursion limit
def test_deep_nesting_within_budget(tmp_path):
    lines = [f"K{i}=<{{K{i + 1}}}>" for i in range(50)] + ["K50=end", "r00t={K0}"]
    text, renderer = render(tmp_path, {"doc.md": "\n".join(lines) + "\n"})
    assert text == "<" * 50 + "end" + ">" * 50 and renderer.cut == 0


# - a long include chain is searched as a loop, up to the chain budget
def test_long_include_chain(tmp_path):
    files = {f"f{i}.md": f"=[f{i + 1}.md]\n" for i in range(40)}
    files["f31.md"] += "Deep=found\n"
    files["f33.md"] += "Deeper=found\n"
    files["f0.md"] += "r00t={Deep} {Deeper}\n"
    text, renderer = render(tmp_path, files, root="f0.md")
    assert text == "found {Deeper}" and renderer.cut == 1


# - a prefix that grows forever (P.A -> P.P.A -> ...) is cut by a budget, never a RecursionError
def test_runaway_prefix_is_cut(tmp_path):
    text, renderer = render(tmp_path, {"doc.md": "P.=[doc.md]\nA={P.A} end\nr00t={A}\n"})
    assert text.endswith("end") and renderer.cut > 0


# - document mode marks each resolved value with its key and depth, in the legacy markup
def test_doc_mode_spans(tmp_path):
    text, _ = render(tmp_path, {"doc.md": "r00t={A'}\nA'=v\n"}, mode="doc")
    assert text == (
        "<span title='A&#39;' id='A&#39;' data-depth='1' data-cmacc-title='A&#39;'"
        " class='cmacc-span'><span class='cmacc-content'>v</span></span>"
    )


# - only ASCII whitespace around "=" is padding; a non-breaking space is part of the value
def test_unicode_space_kept(tmp_path):
    text, _ = render(tmp_path, {"doc.md": "r00t=Losses.{A}\nA=\u00a0If\nB =\u2003x\n"})
    assert text == "Losses.\u00a0If"


# - the key is matched as written: "Maybe " needs "Maybe =", " Maybe" needs " Maybe="
def test_key_matched_as_written(tmp_path):
    files = {"doc.md": "r00t={Maybe }|{ Maybe}|{Maybe}\nMaybe =a\n Maybe=b\n"}
    text, _ = render(tmp_path, files)
    assert text == "a|b|a"


# - keys containing "=" match whole lines
def test_key_with_equals(tmp_path):
    text, _ = render(tmp_path, {"doc.md": "r00t={A=B}\nA=B = v\n"})
    assert text == "v"


# - {!!!}: key looked up as written ("!!!", not "!"), inserted raw even in doc mode
def test_raw_bang_key(tmp_path):
    files = {"doc.md": "r00t={P.Ref}\nP.=[p.md]\n", "p.md": "Ref=<a href='{!!!}X'>x</a>\n!!!=#\n"}
    text, _ = render(tmp_path, files, mode="doc")
    assert "href='#X'" in text and "!!!" not in text


# - helpers behind the Missing and Open-parameters views
def test_unresolved_and_suggestions():
    assert unresolved("{a} {b} {a}") == ["a", "b"]
    assert "My Term" in marks.suggest("DefT.My_Term") and str(marks.suggest("x")) == "x="


# - any include graph and placeholder pattern terminates (no infinite recursion)
@settings(max_examples=150, deadline=None, database=None)
@given(
    st.lists(
        st.tuples(st.integers(0, 4), st.integers(0, 4), st.sampled_from(["", "P."])), max_size=12
    ),
    st.lists(
        st.tuples(
            st.integers(0, 4),
            st.sampled_from(["A", "B", "P.A"]),
            st.sampled_from(["A", "B", "P.A", "x"]),
        ),
        max_size=12,
    ),
)
def test_any_graph_terminates(tmp_path_factory, includes, values):
    files = {f"f{i}.md": "" for i in range(5)}
    for src, dst, prefix in includes:
        files[f"f{src}.md"] += f"{prefix}=[f{dst}.md]\n"
    for src, key, ref in values:
        files[f"f{src}.md"] += f"{key}={{{ref}}} end\n"
    files["f0.md"] += "r00t={A} {B} {P.A}\n"
    render(tmp_path_factory.mktemp("g"), files, root="f0.md")
