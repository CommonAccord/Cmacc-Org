/=This shows a number of possible variations on the organization of a Master Services Agreement.  Each of these can be used with a Demo document to create a complete MSA (a bit of work to do yet, but soon).

/=The names of each of the sections are of course also a matter of choice.  I have made some choices, but any other choices can be made.  The names can be long or short, can use nearly any character, can even have internal spaces.  But these are what makes good (not best) sense to me.

/=Read through to see how we break it up into red (hot, changing, business) terms and blue (cold, stable, lawyerly).

/=When you click "Document" or "xEdit" you will get the 5th variation:

Model.Root={7.sec}
 
/=Here is the original:

1.sec=<ol><li>{Interprete.Sec}<li>{AgtLife.Sec}<li>{AnnexPriority.Sec}<li>{SupplierObligation.Sec}<li>{CustomerObligation.Sec}<li>{Ownership.Sec}<li>{IP.Sec}<li>{Employ.Sec}<li>{Charge.Sec}<li>{Limit.Liability.Sec}<li>{AgtStop.Sec}<li>{AgtAfter.Sec}<li>{NonSolicitation.Sec}<li>{Conf.Sec}<li>{EntireAgreement.Sec}<li>{Limit.No3PartyRight.Sec}<li>{Limit.ForceMajeure.Sec}<li>{Amend.Sec}<li>{Waive.Sec}<li>{Sever.Sec}<li>{Assign.Sec}<li>{Limit.NoPowerToBindOther.Sec}<li>{Notice.Sec}<li>{Counterpart.Sec}<li>{ADR.Sec}<li>{GoverningLaw.Sec}<li>{DisputeForum.Sec}</ol>

/=Here we have grouped the "Miscellaneous" terms into a Section:

2.sec=<ol><li>{Interprete.Sec}<li>{AgtLife.Sec}<li>{SupplierObligation.Sec}<li>{CustomerObligation.Sec}<li>{Ownership.Sec}<li>{IP.Sec}<li>{Employ.Sec}<li>{Charge.Sec}<li>{Limit.Liability.Sec}<li>{AgtStop.Sec}<li>{AgtAfter.Sec}<li>{NonSolicitation.Sec}<li>{Conf.Sec}<li>{Limit.No3PartyRight.Sec}<li>{Limit.ForceMajeure.Sec}<li>{Limit.NoPowerToBindOther.Sec}<li>{Notice.Sec}<li>{ADR.Sec}<li>{GoverningLaw.Sec}<li>{DisputeForum.Sec}<li>{Misc.Sec}</ol>

Interprete.Sec=<b>Interpretation</b><ol><li>{Def.Sec}<li>{Construe.Sec}</ol>

/=The notion of "Miscellaneous" is soft-shouldered - it could include Notices, GoverningLaw and even Disputes.  This is just a suggestion, oriented towards document mechanics.
 
Misc.Sec=<b>Miscellaneous</b><ol><li>{AnnexPriority.Sec}<li>{EntireAgreement.Sec}<li>{Amend.Sec}<li>{Waive.Sec}<li>{Sever.Sec}<li>{Assign.Sec}<li>{Counterpart.Sec}</ol>

/=Here we extract the "Limitations" - various provisions that say what the agreement doesn't do or the parties shouldn't.

2.sec=<ol><li>{Interprete.Sec}<li>{AgtLife.Sec}<li>{SupplierObligation.Sec}<li>{CustomerObligation.Sec}<li>{Ownership.Sec}<li>{IP.Sec}<li>{Employ.Sec}<li>{Charge.Sec}<li>{AgtStop.Sec}<li>{AgtAfter.Sec}<li>{Conf.Sec}<li>{Notice.Sec}<li>{ADR.Sec}<li>{GoverningLaw.Sec}<li>{DisputeForum.Sec}<li>{Limit.Sec}<li>{Misc.Sec}</ol>

Limit.Sec=<b>Limitations</b><ol><li>{Limit.Liability.Sec}<li>{NonSolicitation.Sec}<li>{Limit.No3PartyRight.Sec}<li>{Limit.ForceMajeure.Sec}<li>{Limit.NoPowerToBindOther.Sec}</ol>

/=Here the term and termination provisions:

3.sec=<ol><li>{Interprete.Sec}<li>{SupplierObligation.Sec}<li>{CustomerObligation.Sec}<li>{Ownership.Sec}<li>{IP.Sec}<li>{Employ.Sec}<li>{Charge.Sec}<li>{Conf.Sec}<li>{Notice.Sec}<li>{ADR.Sec}<li>{GoverningLaw.Sec}<li>{DisputeForum.Sec}<li>{Life.Sec}<li>{Limit.Sec}<li>{Misc.Sec}</ol>
Life.Sec=<b>Term and Termination</b><ol><li>{AgtLife.Sec}<li>{AgtStop.Sec}<li>{AgtAfter.Sec}</ol>

/=Here dispute and legal related:
4.sec=<ol><li>{Interprete.Sec}<li>{SupplierObligation.Sec}<li>{CustomerObligation.Sec}<li>{Ownership.Sec}<li>{IP.Sec}<li>{Employ.Sec}<li>{Charge.Sec}<li>{Conf.Sec}<li>{Dispute.Sec}<li>{Life.Sec}<li>{Limit.Sec}<li>{Misc.Sec}</ol>

Dispute.Sec=<b>Governing Law, Notices, Disputes</b><ol><li>{Notice.Sec}<li>{ADR.Sec}<li>{GoverningLaw.Sec}<li>{DisputeForum.Sec}</ol>

/=here the ownership and allocation, IP, Confidentiality:
/=The result is a pretty business-oriented set of front sections with lawyerly back sections.  Something like Isabelle's "red terms" and "blue terms."

5.sec=<ol><li>{Interprete.Sec}<li>{SupplierObligation.Sec}<li>{CustomerObligation.Sec}<li>{Charge.Sec}<li>{Own.Sec}<li>{Dispute.Sec}<li>{Life.Sec}<li>{Limit.Sec}<li>{Misc.Sec}</ol>

Own.Sec=<b>Ownership and Allocation of Intellectual Property; Confidentiality</b><ol><li>{Ownership.Sec}<li>{IP.Sec}<li>{Employ.Sec}<li>{Conf.Sec}</ol>

/=We can move "Interpretation" to the back.  This is controversial, but consistent with a notion of foreground changes, background is stable.

6.sec=<ol><li>{SupplierObligation.Sec}<li>{CustomerObligation.Sec}<li>{Charge.Sec}<li>{Own.Sec}<li>{Dispute.Sec}<li>{Life.Sec}<li>{Limit.Sec}<li>{Misc.Sec}<li>{Interprete.Sec}</ol>

/=And we can put "variables" in the front.  Functionally, these are exactly like defined terms, but they are the kinds that change a lot:  Prices, Dates, Places, Specific arrangements.   The truly "red" points. 

7.sec=<ol><li>{Variable.Sec}<li>{SupplierObligation.Sec}<li>{CustomerObligation.Sec}<li>{Charge.Sec}<li>{Own.Sec}<li>{Dispute.Sec}<li>{Life.Sec}<li>{Limit.Sec}<li>{Misc.Sec}<li>{Interprete.Sec}</ol>