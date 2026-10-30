The High-Risk and Light versions of the EU's AI Model Clauses are represented as ProseObjects in this repository.  They capture the official February 2025 English texts in a structured format suitable for rendering and comparison.  The Light version builds on the High-Risk version and overrides only the differing parts. The keys used in the ProseObjects also provide a rough vocabulary for the ideas of the clauses.  For instance <a href="i.php?v=d&f=G/EU/Europa/AI-Model-Clauses/High-Risk.md&k=Oblig.Quality.Sec">Oblig.Quality.Sec</a> links to the section on quality obligations in the High-Risk version.


<b>I asked Claude to make a ProseObject version of the EU's AI Model Clauses, which are extracted from the official February 2025 English texts, in .docx format.  First are comments from the first round. Then I asked it to restructure the files according to the NVCA key naming conventions. Then add Defined Terms hyperlinks.</b>

Claude's Notes on the AI Model Clauses:

I'll find the ProseObject format spec and the two clause texts, then build both.

Let me write the base High-Risk object, built from the official text.

Now the Light object, which includes High-Risk and overrides only what differs.

Both render back to the official text. Checking Light's renumbered articles and cross-references:

I've built both as prose objects from the official February 2025 English texts. **High-Risk.md** is the base, with 282 keys. **Light.md** has 70 overrides plus 13 notes, and ends with `=[EU/MCC-AI/High-Risk.md]` to pull in everything else.

I assumed the CommonAccord form: `key=value` lines, `{key}` substitution, an `=[path]` include where local keys win, and `Model.Root` as the rendered document. Adjust the include path to your repository layout. The `Note.*` keys hold the explanatory comments, since I didn't want to rely on a comment syntax.

**Checking.** I rendered both objects with a small resolver and compared every paragraph against the text extracted from the two EU Word files. Both match. The only exceptions are layout: the cover-page text boxes, one sentence the Word file splits across two paragraphs (which I joined), and the Article 3 drafting note, which the source puts on the same line as the heading.

**How Light draws from High-Risk.**
- **Renumbering is automatic.** Each article's number is a variable (`Risk.N`, `Explain.N` and so on), and paragraph numbers and cross-references are built from it. Light just sets `FRIA.N=10`, `Explain.N=11`, `RightsPO.N=12` through `Indem.N=15`, and references like "article 11.1" and "article 13.2" follow.
- **Deletions are by composition.** Light redefines `Model.Root`, `Sec.B.List` and `Acc.Sec` to leave out the quality management system, conformity assessment, AI register, audit and costs articles, and the Article 15 proviso. The High-Risk keys are still inherited but never rendered. Light's Section C is High-Risk's Section D with `Sec.D.Letter=C`.
- **Optional status is a switch.** High-Risk sets `FRIA.Head={Opt} {FRIA.Ti}` and Light sets `FRIA.Head={FRIA.Ti}`, so the fundamental rights impact assessment and the first two explanation paragraphs become mandatory in Light.
- **Reuse across articles.** Light's new "Compliance" article reuses High-Risk's corrective-actions text (`{Corr.Text}`) as its paragraph 9.3.
- **Real additions.** The only substantial new text in Light is the instructions-for-use list added to the Transparency article (6.2–6.3).

**Fidelity choices.** I kept the source's typos: High-Risk's "Publication Organisation", which Light corrects; Light's "MCC-AI-High-Light" in its title and opening definition; and two cross-references that look off by one ("article 2.7" and "point 2.5"). About half of Light's overrides are only commas or "pre-determined" versus "predetermined". The one normalization is that `<optional>` and `<Optional>` are both written as `{Opt}`.

I read the Word files by opening them in your Claude app's browser, since this workspace can't reach the EU site. Nothing was saved to your computer.


<b>I asked Claude to use the key naming convenstions based on the NVCA form:</b>

Claude's Comments:

I'll study the CommonAccord conventions in that NVCA form and restructure both files to match.

The form leans on the shared G/Z formatting files, so I'll read those too.

I have the conventions now. I'll rebuild both files in that style, keeping all clause text in the two files and using only the shared G/Z layout files.

Now the Light form, which includes the High-Risk form and overrides only what differs:

Light renders four stray `..sec..` placeholders, so a key is falling through to a G/Z default. Finding it:

Light's layout include for the Transparency and Accuracy articles also supplies G/Z's default `1.sec`, and it outranks the High-Risk text. I'll set those two lists explicitly in Light instead:

Now the reverse check, listing which official paragraphs don't appear in the rendering:

The browser pane closed overnight, so I'll reopen it, re-extract the official text, and keep a copy this time.

I've rewritten both files to follow the NVCA form's conventions, and all the clause text is still in just the two files. The High-Risk form has 319 keys. The Light form has 82 keys and ends with `=[G/EU-MCC-AI/2025/High-Risk/Form/0.md]`. Neither includes anything except the shared G/Z layout files. They follow the Form/0.md path layout:

- `G/EU-MCC-AI/2025/High-Risk/Form/0.md`
- `G/EU-MCC-AI/2025/Light/Form/0.md`

**What changed to match the conventions:**
- **Section names:** sections and articles now have meaningful prefixes, for example `Req.Risk`, `Oblig.Explain`, `DataRights.PublicOrg` and `Annex.TechDoc`.
- **Section structure:** each section has `.Ti`, `.sec` or numbered `.1.sec`, `.2.sec`, with intro text in `.0.sec` and nested items like `.2.1.sec`. Each takes its layout from a G/Z include such as `Req.Risk.2.=[G/Z/ol-a/s4]`, placed after the keys, as in the NVCA form.
- **Definitions** are `Def.Intended_Purpose.sec` and so on, collected in an explicit `Def.Article.xlist`.
- **Numbering and cross-references:** lists now generate the numbers. Cross-references go through `.Xnum` helpers at the bottom, after `CodersNote=HELPERS:`, with `!!!=#`. Light re-letters High-Risk's Section D as C on its own, and only overrides the six `.Xnum` helpers whose article numbers change.
- **Optional provisions** are marked with an `Optional:` line. Clauses that are optional in High-Risk but mandatory in Light use the `Yes/No` switch, for example `Oblig.FRIA.Optional.Yes/No={Oblig.FRIA.Optional.No}` in Light.
- **Comments** are now `Note=`, `ProofersNote=` and `CodersNote=` keys. The ProofersNotes record the source typos I kept.

**One behaviour to know about.** A layout include placed in Light, such as `Req.Transparency.=[G/Z/ol/s4]`, also brings in G/Z's default numbered paragraphs. Those defaults outrank the High-Risk text, because High-Risk is included last. So for Transparency and Accuracy, Light spells out `secs` directly instead, and there's a CodersNote explaining why.

**Checking.** I rendered both forms against the real Cmacc-Org G/Z files, using my own approximation of the CommonAccord resolver. Every paragraph of both official Word files appears in the output, apart from:
- the cover-page text boxes;
- the "Section A –" style prefixes, which the lettered list now generates;
- one sentence the source splits across two paragraphs;
- the Article 3 note, which the source runs into the heading.

Please render both on your CommonAccord site to confirm the include order resolves the same way there.

I left defined terms as plain text. If you want the NVCA `{DefT.…}` and `{_…}` term links, they'd need their own key lists. I can add those inside these two files rather than as separate Z/Def files.


<b>Claude did not make defined terms into hyperlinks. I asked it to do so, so that every defined term in the text points to its corresponding definition.</b>

Comments by Claude:

I'll check how the NVCA form uses the two link styles before wiring them in.

Now I'll re-render both forms and check them against the official text, and confirm every link has a target that exists:

Both forms now have the defined-term links, still in just the two files. When rendered, the text is exactly the same as before; the terms are now links. That gives 347 links in High-Risk and 298 in Light, and every one points to a definition that exists.

**How it's set up:**
- **Definitions:** each of the 11 definitions in Article 1 now starts with a target, such as `Def.Intended_Purpose.sec={DefT.Intended_Purpose}: the use for which…`. The combined definition gets two targets: `{DefT.Supplier_Data_Sets} and {DefT.Third-Party_Data_Sets}:`.
- **Uses:** every capitalised use is a link: `{_Supplier}`, `{_AI_System}` and so on. Plurals keep the term plus an "s", like `{_AI_System}s` and `{_Supplier}s`.
- **The clauses' own name** is linked the same way: `{_MCC}` displays `{MCC.Name}` and points to `DefT.MCC`. So in Light it reads "MCC-AI-Light" and still links to Light's definition.
- **Key list:** the `DefT.X={_X}` and `_X=<a href='{!!!}DefT.X' class='definedterm'>…</a>` keys sit at the end of the High-Risk form. They do what the NVCA's Target.md and Link.md includes do. Light inherits them and needs no extra keys, because its overridden definitions use the same targets.
- **Variant wording:** "Substantially Modified" and High-Risk's unhyphenated "Third Party Data Sets" are linked to their definitions, but keep the source wording.

**Left as plain text:**
- **Titles**, as in the NVCA form.
- **Lowercase forms** like "AI system" and "intended purpose". These are mostly in Light's added instructions-for-use list.
- **Source typos and irregular forms:** "Publication Organisation Data Sets", "Third-Party Data sets", "Third-Party Sets", and Light's "MCC-AI-High-Light".
- **"Public Organisation"**, because neither text defines it.

One difference from the NVCA form: it links uses only now and then (about five `{_…}` against 38 `{DefT.…}`). I linked every exact use, because that's what makes the links useful. If you'd prefer the NVCA's lighter approach, I can keep the `{DefT.…}` targets and limit the `{_…}` links to first uses.