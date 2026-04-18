# YCombinator-SAFE / 2026

A refactored ProseObject (Cmacc) expression of the YCombinator SAFE Notes.  This is the 2026 cut — built on top of (and structurally continuous with) the 2020 cut at `/Doc/G/YCombinator-SAFE-2020/`, but with the inconsistencies flagged in that set's README fixed and with a cleaner inheritance chain across jurisdictions.

## What's here

```
/Form/
  Base/v2-0.md                         <- jurisdiction-neutral skeleton
  Cap-NoDiscount/v2-0.md               <- US Cap (no discount)
  Discount-NoCap/v2-0.md               <- US Discount (no cap)
  MFN-Only/v2-0.md                     <- US MFN
  Cap-NoDiscount-Canada/v2-0.md        <- Cap, for Canadian companies
  Cap-NoDiscount-Singapore/v2-0.md     <- Cap, for Singapore companies
  Cap-NoDiscount-CaymanIslands/v2-0.md <- Cap, for Cayman companies
  Z/
    Def-Target.md                      <- anchor targets for defined terms
    Def-Link.md                        <- hyperlink renderings of defined terms
    US-Tweaks.md                       <- US jurisdictional overlay
    Canadian-Tweaks.md                 <- Canadian overlay (extends US)
    Singapore-Tweaks.md                <- Singapore overlay (extends Canadian)
    CaymanIslands-Tweaks.md            <- Cayman overlay (extends Singapore)
/Sideletter/
  US/v2-0.md                           <- US Pro Rata Side Letter
  Canada/v2-0.md                       <- Canadian Pro Rata Side Letter
  Singapore/v2-0.md                    <- Singapore Pro Rata Side Letter
  CaymanIslands/v2-0.md                <- Cayman Pro Rata Side Letter
/Demo/
  Acme-*.md                            <- one example deal per form
  Acme-All-SAFEs.md                    <- six-deal summary row
  README.md
```

## How it's put together

Every form ultimately resolves to the same Base document (`/Form/Base/v2-0.md`).  The Base carries the full skeleton of intro → events → definitions → reps → miscellaneous → signature block.  Variant forms (Cap, Discount, MFN) override a handful of slots: the conversion target clause, the Def.sec list, and the `Intro.DealTerm.sec` line.  Jurisdictional overlays in `/Form/Z/` handle everything that varies by where the Company is incorporated: legend, "Stock" vs "Shares" vocabulary, reorgani{s/z}ation spelling, choice of law, Securities-Act references, investor accreditation, and so on.

The jurisdictional overlays form a chain: **US ← Canadian ← Singapore ← Cayman**.  Each level only restates what differs from the previous level.  When the Cayman overlay reverts to the US legend (instead of stacking a Cayman legend on top), that reversion is the only thing the Cayman file has to say about legends; everything else — Shares vocabulary, s-not-z, etc. — is inherited transitively.

## 2020 → 2026 changes

The 2020 README inventoried several small bugs and stylistic drift; those are all closed out in 2026.  The structural changes are a bit broader.

### Substantive fixes

- **"valid and binding obligation"** in the Investor Rep (§4(a) in the Base) now reads "a valid and binding obligation" — the 2020 form omitted the article.
- **"laws of Singapore"** — the 2020 Singapore form had "laws of the Singapore" in the choice-of-law clause.  Fixed.
- **"Cayman Islands"** — 2020 had "Caymen" in a couple of places (file path, Note.Title, default `Law.State`).  Fixed.
- **Post-Money Valuation Cap and Discount Rate are defined terms.**  In 2020 both were used inside quotation marks in the Amendment mechanics but never actually defined.  2026 defines each in the Base (pointing at the Intro) so the quoted uses hyperlink to a real anchor.
- **`Rep.Company.AllPower.Binding` tightened** — an Oxford comma added inside the enumeration ("bankruptcy, insolvency, or other laws") and a few similar list normalisations elsewhere.  The form now uses the Oxford comma consistently.
- **MFN mechanics use the defined terms.**  The 2020 MFN Section 1 referred to "a valuation cap and/or discount" as loose prose; 2026 uses the defined `Post-Money Valuation Cap` and `Discount Rate` linked back to their definitions.

### Structural / "cleverness" improvements

- **Jurisdictional overlay chain.**  In 2020 the Cayman Cap form included the Canadian Cap form directly, which pulled in Canadian-specific reps and Dollars clauses that Cayman didn't want, and then the Cayman form had to unpick them.  2026 factors the jurisdictional logic into dedicated `/Form/Z/*-Tweaks.md` overlays that extend each other (US → Canada → Singapore → Cayman), and the Cap forms simply pick up Base + the relevant overlay.  Each overlay owns only its own diff.
- **Intro deal-term slot.**  Every variant used to inject its deal-term sentence ("The Post-Money Valuation Cap is…", "The Discount Rate is…", or blank for MFN) by overriding `Intro.7.sec`.  2026 gives this a named slot (`Intro.DealTerm.sec`) so its role is visible in the Base rather than discoverable only by reading a variant.
- **Unified Def catalog.**  All definitions are enumerated in the Base as `Def.<Term>.sec` slots; each variant assembles its own `Def.sec` list by picking which entries to include.  In 2020 this pattern was already emergent but the Base's `Def.sec` was implicit; in 2026 it's explicit and variants only list the terms they use.
- **Cross-references are anchor-based.**  2020 used numeric fallback anchors for some references (e.g. `<a href='#Rep.Company.Sec'>4</a>` in MFN).  2026 uses the canonical anchor names throughout so references survive reorderings.
- **`Unissued_Option_Pool` hyperlinked.**  2020 forgot to include it in the defined-term link table, so the term rendered as raw text in some places.  Fixed in both `Def-Link.md` and the Base's inline override.
- **`Standard_Preferred.the/a` standardised** — in 2020 this flag was set inconsistently across Cap vs Discount vs Canadian Cap.  2026 sets it once in US-Tweaks and leaves it alone.
- **`Subsequent_Convertible_Securities` is in the Base.**  2020 put it in the Def list only for the MFN variant.  In 2026 it lives in the Base with every other definition; the MFN variant just includes it in its `Def.sec` list.
- **Side letters inherit cleanly.**  The Canadian side letter overrides what it needs and extends US; Singapore extends Canadian; Cayman extends the Cayman overlay and Canadian side letter.  The 2020 Singapore side letter carried a small defect ("shares of Capital Shares") that was a carryover artifact; in 2026 the Singapore overlay rewrites `shares_of/of` to plain "of" so the phrase reads as "majority of Capital Shares" and is correct.

### Conventions

- Every version bump carries a version filename (`v2-0.md`).  Amendments that don't break compatibility can ship as `v2-1.md`, `v2-2.md`, etc. without removing `v2-0.md` — demos pinned to v2-0 continue to render against the old Base.
- `CodersNote`, `LawyersNote`, `BusinessNote`, and plain `Note` are used in the source files to annotate decisions for the three audiences; they render as comments and are easy to grep.

## Caveats

These are not drafted by YCombinator and carry no endorsement from them or from the law firms who originated the forms.  They are a faithful refactor of the public YC Post-Money SAFE forms into Cmacc ProseObject form, intended for study, comparison, and as a template for further jurisdictional or deal-structure extensions.  Do not sign one without counsel.

Pull requests, corrections, and blessings (or polite banishment) from YCombinator or its counsel are all welcome.
