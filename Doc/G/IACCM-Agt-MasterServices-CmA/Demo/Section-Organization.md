/=This shows a number of alternative outlines for a Master Services Agreement.  Each of these can be used with a Demo document to create a complete MSA (a bit of work to do yet, but soon).

/=The names of each of the sections are of course also a matter of choice.  I have made some choices, but any other choices can be made.  The names can be long or short, can use nearly any character, can even have internal spaces.  But these are what makes good (not best) sense to me.

/=Read through to see how we break it up into red (hot, changing, business) terms and blue (cold, stable, lawyerly).

/=When you click "Document" or "xEdit" you will get the 3rd variation.  It has grouped many sections as subsections, has a "variables" section up front and has moved the rest of the definitions to the back of the agrement.

Model.Root={Alt3.sec}

//=We include the text of the agreement in each configuration.  This is a reference to the text library, where Sections are broken up and each given a name. 

=[G/IACCM-Agt-MasterServices-CmA/Form/MSA/0.md]

/=Here is the original:

Alt1.sec=<ol><li>{Interprete.Sec}<li>{AgtLife.Sec}<li>{SoW.Sec}<li>{EmployOnExit.Sec}<li>{SupplierObligation.Sec}<li>{CustomerObligation.Sec}<li>{NoticeOfCustomerDefault.Sec}<li>{ChangeOrder.Sec}<li>{Charge.Sec}<li>{Audit.Sec}<li>{IPR.Sec}<li>{Insure.Sec}<li>{LawAndPolicy.Sec}<li>{DataProtect.Sec}<li>{Conf.Sec}<li>{Liability.Sec}<li>{AgtStop.Sec}<li>{AgtAfter.Sec}<li>{Injunction.Sec}<li>{ForceMajeure.Sec}<li>{Assign.Sec}<li>{Amend.Sec}<li>{Waive.Sec}<li>{BackgroundLaw.Sec}<li>{Sever.Sec}<li>{Entire.Sec}<li>{AnnexPriority.Sec}<li>{NoPowerToBindOtherParty.Sec}<li>{No3PartyRight.Sec}<li>{Notice.Sec}<li>{Counterpart.Sec}<li>{ADR.Sec}<li>{GoverningLaw.Sec}<li>{Tribunal.Sec}</ol>

Interprete.Sec=<span class="sec-ti">Interpretation</span><ol><li>{Def.Sec}<li>{Construe.Sec}</ol>

/=We will change them into more nested sections according to conventional headings.  Each of the new grouped sections has a name such as "Remedy.Sec":

IP.Ti=Intellectual Property; Confidentiality

IP.sec=<ol><li>{IPR.Sec}<li>{Conf.Sec}</ol>

IP.=[G/Z/ol/Base]

Comply.Ti=Compliance with Law

Comply.sec=<ol><li>{LawAndPolicy.Sec}<li>{DataProtect.Sec}</ol>

Comply.=[G/Z/ol/Base]

Limit.Ti=Limitations

Limit.sec=<ol><li>{ForceMajeure.Sec}<li>{NoPowerToBindOtherParty.Sec}<li>{No3PartyRight.Sec}</ol>

Limit.=[G/Z/ol/Base]

Remedy.Ti=Remedies

Remedy.sec=<ol><li>{Audit.Sec}<li>{Insure.Sec}<li>{Liability.Sec}<li>{Injunction.Sec}<li>{BackgroundLaw.Sec}<li>{NoticeOfCustomerDefault.Sec}</ol>

Remedy.=[G/Z/ol/Base]

Dispute.Ti=Dispute Resolution and Applicable Law

Dispute.sec=<ol><li>{Notice.Sec}<li>{ADR.Sec}<li>{GoverningLaw.Sec}<li>{Tribunal.Sec}</ol>

Dispute.=[G/Z/ol/Base]

Life.Ti=Term and Termination

Life.sec=<ol><li>{AgtLife.Sec}<li>{AgtStop.Sec}<li>{AgtAfter.Sec}<li>{EmployOnExit.Sec}</ol>

Life.=[G/Z/ol/Base]

Misc.Ti=Miscellaneous

Misc.sec=<ol><li>{Assign.Sec}<li>{Amend.Sec}<li>{Waive.Sec}<li>{Sever.Sec}<li>{Entire.Sec}<li>{AnnexPriority.Sec}<li>{Counterpart.Sec}</ol> 

Misc.=[G/Z/ol/Base]

/=And now we restate the top-level outline to include these sections with subsections. 

Alt2.sec=<ol><li>{Interprete.Sec}<li>{SoW.Sec}<li>{SupplierObligation.Sec}<li>{CustomerObligation.Sec}<li>{ChangeOrder.Sec}<li>{Charge.Sec}<li>{IP.Sec}<li>{Comply.Sec}<li>{Limit.Sec}<li>{Remedy.Sec}<li>{Dispute.Sec}<li>{Life.Sec}<li>{Misc.Sec}</ol>

/=A third alternative is the same as Alt2, except that now the agreement begins with a section of "Variables" - which are meant to be the key business points, such as dates, prices, rates and places.  The "Interprete" section, which is definitions and construction rules that mostly change rarely, is now moved to the end of the outline.

Alt3.sec=<ol><li>{Variable.Sec}<li>{SoW.Sec}<li>{SupplierObligation.Sec}<li>{CustomerObligation.Sec}<li>{ChangeOrder.Sec}<li>{Charge.Sec}<li>{IP.Sec}<li>{Comply.Sec}<li>{Limit.Sec}<li>{Remedy.Sec}<li>{Dispute.Sec}<li>{Life.Sec}<li>{Misc.Sec}<li>{Interprete.Sec}</ol>

/=This is a blank for the variable section, along with some cross-references. 

Variable.Sec=<span class="sec-ti">Variables</span><br>{Variable.0.sec}<ol><li>{Variable.secs}</ol>

Variable.0.sec=The following terms shall be treated as defined terms in accordance with {Def.Xref}. 

SoW.Xnum=<a href="#SoW.Sec">2</a>

SupplierObligation.Xnum=<a href="#SupplierObligation.Sec">3</a>

CustomerObligation.Xnum=<a href="#CustomerObligation.Sec">4</a>

ChangeOrder.Xnum=<a href="#ChangeOrder.Sec">5</a>

Charge.Xnum=<a href="#Charge.Sec">6</a>

IP.Xnum=<a href="#IP.Sec">7</a>

Comply.Xnum=<a href="#Comply.Sec">8</a>

Limit.Xnum=<a href="#Limit.Sec">9</a>

Remedy.Xnum=<a href="#Remedy.Sec">10</a>

Dispute.Xnum=<a href="#Dispute.Sec">11</a>

Life.Xnum=<a href="#Life.Sec">12</a>

Misc.Xnum=<a href="#Misc.Sec">13</a>

Interprete.Xnum=<a href="#Interprete.Sec">14</a>

/=Subsections

IPR.Xnum={IP.Xnum}.<a href="#IPR.Sec">1</a>

Conf.Xnum={IP.Xnum}.<a href="#Conf.Sec">2</a>

LawAndPolicy.Xnum={Comply.Xnum}.<a href="#LawAndPolicy.Sec">1</a>

DataProtect.Xnum={Comply.Xnum}.<a href="#DataProtect.Sec"></a>

ForceMajeure.Xnum={Limit.Xnum}.<a href="#ForceMajeure.Sec">1</a>

NoPowerToBindOtherParty.Xnum={Limit.Xnum}.<a href="NoPowerToBindOtherParty#.Sec">2</a>

No3PartyRight.Xnum={Limit.Xnum}.<a href="No3PartyRight#.Sec">3</a>

Audit.Xnum={Remedy.Xnum}.<a href="#Audit.Sec">1</a>

Insure.Xnum={Remedy.Xnum}.<a href="#Insure.Sec">2</a>

Liability.Xnum={Remedy.Xnum}.<a href="#Liability.Sec">3</a>

Injunction.Xnum={Remedy.Xnum}.<a href="#Injunction.Sec">4</a>

BackgroundLaw.Xnum={Remedy.Xnum}.<a href="#BackgroundLaw.Sec">5</a>

NoticeOfCustomerDefault.Xnum={Remedy.Xnum}.<a href="#NoticeOfCustomerDefault.Sec">6</a>

Notice.Xnum={Dispute.Xnum}.<a href="#Notice.Sec">1</a>

ADR.Xnum={Dispute.Xnum}.<a href="#ADR.Sec">2</a>

GoverningLaw.Xnum={Dispute.Xnum}.<a href="#GoverningLaw.Sec">3</a>

Tribunal.Xnum={Dispute.Xnum}.<a href="#Tribunal.Sec">4</a>

AgtLife.Xnum={Life.Xnum}.<a href="#AgtLife.Sec">1</a>

AgtStop.Xnum={Life.Xnum}.<a href="#AgtStop.Sec">2</a>

AgtAfter.Xnum={Life.Xnum}.<a href="#AgtAfter.Sec">3</a>

EmployOnExit.Xnum={Life.Xnum}.<a href="#EmployOnExit.Sec">4</a>

Assign.Xnum={Misc.Xnum}.<a href="#Assign.Sec">1</a>

Amend.Sec={Misc.Xnum}.<a href="#Amend.Sec">2</a>

Waive.Xnum={Misc.Xnum}.<a href="#Waive.Sec">3</a>

Sever.Xnum={Misc.Xnum}.<a href="#Sever.Sec">4</a>

Entire.Xnum={Misc.Xnum}.<a href="#Entire.Sec">5</a>

AnnexPriority.Xnum={Misc.Xnum}.<a href="#AnnexPriority.Sec">6</a>

Counterpart.Xnum={Misc.Xnum}.<a href="#Counterpart.Sec">7</a>

Def.Xnum={Interprete.Xnum}.<a href="#Def.Sec">1</a>

Construe.Xnum={Interprete.Xnum}.<a href="#Construe.Sec">2</a>
