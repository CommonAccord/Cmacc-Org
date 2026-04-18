Note=Cayman Islands overlay.  Builds on Singapore-Tweaks (for Ordinary / Preference Shares and s-not-z), but reverts to the US-only legend, uses the Cayman "exempted company" phrasing, adjusts the register-of-members reference, and sets Cayman law.

Legend.Home.sec={Legend.US.sec}<br>

Event.Equity.1.Into.ConversionTarget.cl=(subject to the Company's obligation to update its register of members accordingly) into {Event.Equity.1.ConversionTarget.cl}

corporation_duly_organized=an exempted company duly incorporated

Note=Because Cayman extends Singapore, CompanyIncorporation.cl would inherit "Singapore" from the Singapore overlay; override it for Cayman companies.

CompanyIncorporation.cl=the Cayman Islands

Rep.Company.AllPower.NoViolation.1.sec=(i) its current memorandum and articles of association,

Note=Revert the investor accreditation reps to the US Base (Rule 501 Reg D) — Singapore's SFA-based version was inherited from the Singapore overlay but does not belong on a Cayman SAFE.

Rep.Investor.Accredited.1.sec=The {_Investor} is an accredited investor as such term is defined in Rule 501 of Regulation D under the {_Securities_Act}, and acknowledges and agrees that if not an accredited investor at the time of an {_Equity_Financing}, the {_Company} may void {_this_Safe} and return the {_Purchase_Amount}.

Rep.Investor.Accredited.2.sec=The {_Investor} has been advised that {_this_Safe} and the underlying securities have not been registered under the {_Securities_Act}, or any {state_securities_laws}, and, therefore, cannot be resold unless they are registered under the {_Securities_Act} and {applicable_state_securities_laws} or unless an exemption from such registration requirements is available.

Note=The Cayman 2020 form kept a pair of idiosyncratic phrases about securities laws not tied to states; preserving them here.

state_securities_laws=other applicable securities laws

applicable_state_securities_laws=applicable securities laws

Misc.Law.sec=The parties agree that {_this_Safe} (and all the rights and obligations hereunder) shall be governed by, and construed and enforced in accordance with, the laws of {Law.State.the}.  Each party hereby submits to the non-exclusive jurisdiction of the Courts of {Forum.State.the}.

Law.State.the=the {Law.State}

Forum.State.the=the {Law.State}

Law.State=Cayman Islands

Note=2020 → 2026 fix: corrected spelling "Cayman Islands" (2020 had "Caymen" in places).

=[G/YCombinator-SAFE/2026/Form/Z/Singapore-Tweaks.md]
