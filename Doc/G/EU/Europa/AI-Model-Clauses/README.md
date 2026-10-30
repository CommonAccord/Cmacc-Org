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