# YCombinator SAFE - 2026 Demo Set

Six example SAFEs, one per form: three US flavors (Cap, Discount, MFN) and three jurisdictional Caps (Canada, Singapore, Cayman Islands).  Each US deal composes just the SAFE itself; the three non-US deals additionally staple on a jurisdiction-appropriate Pro Rata Side Letter and render the pair side-by-side via the `r00t` two-column layout.

All six share a single source of truth — `/Form/Base/v2-0.md` — plus a jurisdictional overlay in `/Form/Z/`.  Deal-specific inputs (parties, dates, amounts, caps, law, signatures) are the only content in each demo file.  The rest is inheritance.

The `Acme-All-SAFEs.md` file shows all six deals' deal-points rendered as a single summary table — useful when you want a ledger view of a portfolio of SAFEs without opening every instrument.

## What changed vs the 2020 demo set

- Dates moved from 2021 to 2026.
- File names and references all point at the 2026 tree.
- The previously misspelled "Caymen" demo filename is now "CaymanIslands" across the set.

## Extending the set

The intended extension points are:

- New jurisdictions — add a `/Form/Z/<Place>-Tweaks.md` that extends the nearest sibling overlay, plus a matching `/Form/<Variant>-<Place>/v2-0.md` that includes the Base plus the overlay.
- New deal-types (e.g. a Cap + Discount combined form) — add a `/Form/Cap-Discount/v2-0.md` that sets both `Intro.DealTerm.sec` and the relevant conversion-target clauses, and extends the Base.
- New parties / places — the Acme, Andrea Ang, Barbara O'Reilly, etc. roles are parameterised through `/G/U/Who/` and `/G/U/Place/`; pull in any user catalog the same way.

Pull requests welcome.  Happy to work with YCombinator, the lawyers who originated these, or anyone using these in practice.
