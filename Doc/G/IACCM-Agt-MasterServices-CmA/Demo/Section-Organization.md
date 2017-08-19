/=This shows a number of possible variations on the organization of a Master Services Agreement.  Each of these can be used with a Demo document to create a complete MSA (a bit of work to do yet, but soon).

/=The names of each of the sections are of course also a matter of choice.  I have made some choices, but any other choices can be made.  The names can be long or short, can use nearly any character, can even have internal spaces.  But these are what makes good (not best) sense to me.

/=Read through to see how we break it up into red (hot, changing, business) terms and blue (cold, stable, lawyerly).

/=When you click "Document" or "xEdit" you will get the 8th variation:

Model.Root={Alt10.sec}
 
/=Here is the original:

Alt1.sec=<ol><li>{Interprete.Sec}<li>{AgtLife.Sec}<li>{SoW.Sec}<li>{EmployOnExit.Sec}<li>{SupplierObligation.Sec}<li>{CustomerObligation.Sec}<li>{NoticeOfCustomerDefault.Sec}<li>{ChangeOfControl.Sec}<li>{Charge.Sec}<li>{Audit.Sec}<li>{IPR.Sec}<li>{Insure.Sec}<li>{ComplyWithLawAndPolicy.Sec}<li>{DataProtect.Sec}<li>{Conf.Sec}<li>{Limit.Liability.Sec}<li>{AgtStop.Sec}<li>{AgtAfter.Sec}<li>{Injunction.Sec}<li>{Limit.ForceMajeure.Sec}<li>{Assign.Sec}<li>{Amend.Sec}<li>{Waive.Sec}<li>{BackgroundLaw.Sec}<li>{Sever.Sec}<li>{EntireAgreement.Sec}<li>{AnnexPriority.Sec}<li>{Limit.NoAgency.Sec}<li>{Limit.No3PartyRight.Sec}<li>{Notice.Sec}<li>{Counterpart.Sec}<li>{ADR.Sec}<li>{GoverningLaw.Sec}<li>{DisputeForum.Sec}</ol>

Interprete.Sec=<b>Interpretation</b><ol><li>{Def.Sec}<li>{Construe.Sec}</ol>

/=Here we have grouped the "Miscellaneous" terms into a Section:

Alt2.sec=<ol><li>{Interprete.Sec}<li>{AgtLife.Sec}<li>{SoW.Sec}<li>{EmployOnExit.Sec}<li>{SupplierObligation.Sec}<li>{CustomerObligation.Sec}<li>{NoticeOfCustomerDefault.Sec}<li>{ChangeOfControl.Sec}<li>{Charge.Sec}<li>{Audit.Sec}<li>{IPR.Sec}<li>{Insure.Sec}<li>{ComplyWithLawAndPolicy.Sec}<li>{DataProtect.Sec}<li>{Conf.Sec}<li>{Limit.Liability.Sec}<li>{AgtStop.Sec}<li>{AgtAfter.Sec}<li>{Injunction.Sec}<li>{Limit.ForceMajeure.Sec}<li>{Limit.NoAgency.Sec}<li>{Limit.No3PartyRight.Sec}<li>{Notice.Sec}<li>{Counterpart.Sec}<li>{ADR.Sec}<li>{GoverningLaw.Sec}<li>{DisputeForum.Sec}<li>{Misc.Sec}</ol>


/=The notion of "Miscellaneous" is soft-shouldered - it could include Notices, GoverningLaw and even Disputes.  This is just a suggestion, oriented towards document mechanics.
 
Misc.Sec=<b>Miscellaneous</b><ol><li>{Assign.Sec}<li>{Amend.Sec}<li>{Waive.Sec}<li>{BackgroundLaw.Sec}<li>{Sever.Sec}<li>{EntireAgreement.Sec}<li>{AnnexPriority.Sec}<li>{Counterpart.Sec}</ol>

/=Here we extract the "Limitations" - various provisions that say what the agreement doesn't do or the parties shouldn't.

Alt3.sec=<ol><li>{Interprete.Sec}<li>{AgtLife.Sec}<li>{SoW.Sec}<li>{EmployOnExit.Sec}<li>{SupplierObligation.Sec}<li>{CustomerObligation.Sec}<li>{NoticeOfCustomerDefault.Sec}<li>{ChangeOfControl.Sec}<li>{Charge.Sec}<li>{Audit.Sec}<li>{IPR.Sec}<li>{Insure.Sec}<li>{Comply.Sec}<li>{DataProtect.Sec}<li>{Conf.Sec}<li>{AgtStop.Sec}<li>{AgtAfter.Sec}<li>{Injunction.Sec}<li>{Notice.Sec}<li>{ADR.Sec}<li>{GoverningLaw.Sec}<li>{DisputeForum.Sec}<li>{Limit.Sec}<li>{Misc.Sec}</ol>

Limit.Sec=<b>Limitations</b><ol><li>{Limit.Liability.Sec}<li>{Limit.ForceMajeure.Sec}<li>{Limit.NoAgency.Sec}<li>{Limit.No3PartyRight.Sec}</ol>

/=Here the term and termination provisions, relating to the "Life" of the Agreement:

Alt4.sec=<ol><li>{Interprete.Sec}<li>{SoW.Sec}<li>{SupplierObligation.Sec}<li>{CustomerObligation.Sec}<li>{NoticeOfCustomerDefault.Sec}<li>{ChangeOfControl.Sec}<li>{Charge.Sec}<li>{Audit.Sec}<li>{IPR.Sec}<li>{Insure.Sec}<li>{ComplyWithLawAndPolicy.Sec}<li>{DataProtect.Sec}<li>{Conf.Sec}<li>{Injunction.Sec}<li>{Notice.Sec}<li>{ADR.Sec}<li>{GoverningLaw.Sec}<li>{DisputeForum.Sec}<li>{Life.Sec}<li>{Limit.Sec}<li>{Misc.Sec}</ol>

Life.Sec=<b>Term and Termination</b><ol><li>{AgtLife.Sec}<li>{AgtStop.Sec}<li>{AgtAfter.Sec}<li>{EmployOnExit.Sec}</ol>

/=Here dispute and legal related:

Alt5.sec=<ol><li>{Interprete.Sec}<li>{SoW.Sec}<li>{SupplierObligation.Sec}<li>{CustomerObligation.Sec}<li>{NoticeOfCustomerDefault.Sec}<li>{ChangeOfControl.Sec}<li>{Charge.Sec}<li>{Audit.Sec}<li>{IPR.Sec}<li>{Insure.Sec}<li>{ComplyWithLawAndPolicy.Sec}<li>{DataProtect.Sec}<li>{Conf.Sec}<li>{Dispute.Sec}<li>{Life.Sec}<li>{Limit.Sec}<li>{Misc.Sec}</ol>

Dispute.Sec=<b>Governing Law, Notices, Disputes</b><ol><li>{NoticeOfCustomerDefault.Sec}<li>{Injunction.Sec}<li>{Notice.Sec}<li>{ADR.Sec}<li>{GoverningLaw.Sec}<li>{DisputeForum.Sec}</ol>

/=here the ownership and allocation, IP, Confidentiality:

Alt6.sec=<ol><li>{Interprete.Sec}<li>{SoW.Sec}<li>{SupplierObligation.Sec}<li>{CustomerObligation.Sec}<li>{ChangeOfControl.Sec}<li>{Charge.Sec}<li>{Audit.Sec}<li>{Insure.Sec}<li>{ComplyWithLawAndPolicy.Sec}<li>{DataProtect.Sec}<li>{Own.Sec}<li>{Dispute.Sec}<li>{Life.Sec}<li>{Limit.Sec}<li>{Misc.Sec}</ol>

Own.Sec=<b>Ownership and Allocation of Intellectual Property; Confidentiality</b><ol><li>{IPR.Sec}<li>{Conf.Sec}</ol>

/=Breaking out the Remedies:

Alt7.sec=<ol><li>{Interprete.Sec}<li>{SoW.Sec}<li>{SupplierObligation.Sec}<li>{CustomerObligation.Sec}<li>{Charge.Sec}<li>{ComplyWithLawAndPolicy.Sec}<li>{DataProtect.Sec}<li>{Remedy.Sec}<li>{Own.Sec}<li>{Dispute.Sec}<li>{Life.Sec}<li>{Limit.Sec}<li>{Misc.Sec}</ol>

Remedy.Sec=<b>Remedies</b><ol><li>{ChangeOfControl.Sec}<li>{Audit.Sec}<li>{Insure.Sec}</ol>

/=Breaking out the provisions that call for compliance:

Alt8.sec=<ol><li>{Interprete.Sec}<li>{SoW.Sec}<li>{SupplierObligation.Sec}<li>{CustomerObligation.Sec}<li>{Charge.Sec}<li>{Comply.Sec}<li>{Remedy.Sec}<li>{Own.Sec}<li>{Dispute.Sec}<li>{Life.Sec}<li>{Limit.Sec}<li>{Misc.Sec}</ol>

Comply.Sec=<b>Compliance with Laws and Policies</b><ol><li>{ComplyWithLawAndPolicy.Sec}<li>{DataProtect.Sec}</ol>

/=We can move "Interpretation" to the back.  This is controversial, but consistent with a notion of foreground changes, background is stable.

Alt9.sec=<ol><li>{SoW.Sec}<li>{SupplierObligation.Sec}<li>{CustomerObligation.Sec}<li>{Charge.Sec}<li>{Comply.Sec}<li>{Remedy.Sec}<li>{Own.Sec}<li>{Dispute.Sec}<li>{Life.Sec}<li>{Limit.Sec}<li>{Misc.Sec}<li>{Interprete.Sec}</ol>

/=And we can put "variables" in the front.  This is "innovative," but becoming fairly widely practiced.  Legally, variables are exactly like defined terms, but they are the kinds that change a lot:  Prices, Dates, Places, Specific arrangements.   The truly "red" points.

Alt10.sec=<ol><li>{Variable.Sec}<li>{SoW.Sec}<li>{SupplierObligation.Sec}<li>{CustomerObligation.Sec}<li>{Charge.Sec}<li>{Comply.Sec}<li>{Remedy.Sec}<li>{Own.Sec}<li>{Dispute.Sec}<li>{Life.Sec}<li>{Limit.Sec}<li>{Misc.Sec}<li>{Interprete.Sec}</ol>