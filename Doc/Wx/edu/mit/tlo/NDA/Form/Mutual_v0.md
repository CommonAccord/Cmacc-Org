From=http://web.mit.edu/tlo/www/misc/forms.html.

=[Z/Agt/Agt.md]

=[Wx/edu/mit/tlo/NDA/Sec/Phrases_v0.md]

<b>Parameters</b>=These fit the agreement to Mutual (as opposed to InBound or OutBound).

Doc.Title=Mutual Non-Disclosure Agreement

Conf.Protect.Period.Years=three years

Purpose.Roles={DP.each} disclosing confidential information to {RP.theOther}

Therefore.Roles={DP.each} making confidential information available to {RP.theOther}

Conf.Roles={DP.Defined} to {RP.Defined}

Contact.Roles._cl=disclosing or receiving confidential information for these parties

DP.Each=Each party 

Export.Consent._cl=the written consent of {RP.theOther}. In the case of {P1.Handle}, the written consent must be executed by {P1.Handle}'s Export Control Officer

<b>Text</b>=

Prologue.ThisAgreement={MIT.Prologue.ThisAgreement._Sen}

MIT.Prologue.ThisAgreement._Sen={MIT.Prologue.ThisAgreement._Cl}, in anticipation of {Purpose._cl}.

MIT.Prologue.ThisAgreement._Cl=This Agreement is made effective as of {AGT.Effective.YMD} (the "Effective Date") between {P2.N,E,A} ("{P2.Defined}"), and {P1.N,E,A} ("{P1.Defined}")

Purpose._cl={Purpose.Roles} for the purpose of evaluating technology licensing opportunities {relating to} {Deal.#} (the "Purpose")

Prologue.Recital={Contact._Sen}

Contact._Sen=The primary contact(s) for {Contact.Roles._cl} are as follows: <table><tr><td>{P2.Contact.Block}</td><td width="100"></td><td>{P1.Contact.Block}</td></tr></table>

P1.Contact.Block=For {P1.Handle}:<br><br>{P1.Contact1.N/A/T/E/F}<br><br>{P1.Contact2.N/A/T/E/F}

P2.Contact.Block=For {P2.Handle}:<br><br>{P2.Contact1.N/A/T/E/F}<br><br>{P2.Contact2.N/A/T/E/F}

Prologue.NowTherefore=In consideration of {Therefore.Roles}, the parties hereby agree as follows:

Secs={Conf._Sec}</li><li>{Use._Sec}</li><li>{Care._Sec}</li><li>{Compelled._Sec}</li><li>{Disclaim.Warranty._Sec}</li><li>{Term._Sec}</li><li>{Remedy.Conf.Return._Sec}</li><li>{Notice._Sec}</li><li>{Misc._Sec}

Conf._Sec=<u>{Conf.Title}</u>. {Conf._sec}

Conf._Sec.Xnum=1

Conf.Title=Confidential Information

Conf._sec={Conf.Defined._Cl} that {Conf.Impart.List}.   {Conf.Except._Sen}   {CC.Students._Sen}

Conf.Defined._Cl=When used in this Agreement, the term "Confidential Information" means confidential and proprietary information disclosed by {Conf.Roles}

Conf.Impart.List=(i) {Conf.Impart.Marked}, (ii) {Conf.Impart.SubjectMatter}; or (iii) {Conf.Impart.LiveConfirmed}

Conf.Impart.Marked=prior to disclosure, is marked with a legend indicating its confidential status

Conf.Impart.SubjectMatter=is disclosed by {P1.Handle} and is or relates to unpublished research, invention disclosures{q} or unpublished patent applications

Conf.Impart.LiveConfirmed=is disclosed orally or visually, if {DP.the} identifies such information as confidential at the time of disclosure and, within 30 days of such disclosure, delivers to {RP.the}'s primary contact for receipt of Confidential Information a notice summarizing the confidential information disclosed

Conf.Except._Sen=Notwithstanding the foregoing, in no event is information Confidential Information if {Conf.Except.List}.

Conf.Except.List=it (a) {Conf.Except.Had}; (b) {Conf.Except.Public}; (c) {Conf.Except.Finds}; or (d) {Conf.Except.Makes}

Conf.Except.Had=was in {RP.the}'s possession before receipt from {DP.the}

Conf.Except.Public=is or becomes a matter of public knowledge through no fault of {RP.the}

Conf.Except.Finds=is received by {RP.the}, without restriction as to further disclosure, from a third party having an apparent bona fide right to disclose the information to {RP.the}

<b>NoteX</b>=There is a slight difference here -- In mutual it says "to disclose the information <b>to the Receiving Party</b>."  In In-Bound it says to disclose the information."  I figured it was an unwanted difference and kept the more complete form.  

Conf.Except.Makes=is independently developed by {RP.the} without use of {DP.the}'s Confidential Information

CC.Students._Sen=For purposes of this Agreement, {P1.Handle} students are not third parties vis-a-vis {P1.Handle}. 

Use._Sec=<u>{Use.Title}</u>. {Use._sec}

Use.Title=Limitations on Use

Use._sec={Conf.Use._Sen} {Limit.NoLicense._Sen}

Conf.Use._Sen={RP.The} shall use {DP.the}'s Confidential Information solely for the Purpose.

Limit.NoLicense._Sen=Disclosure by {DP.the} of its Confidential Information does not constitute a grant to {RP.the} of any right or license to {DP.the}'s Confidential Information, except as set forth herein.

Care._Sec=<u>{Care.Title}</u>.  {Care._sec}

Care.Title=Care of Confidential Information

Care._sec={Care.Reasonable._Cl}, except that {CC.NeedToKnow_Warned._cl}.

Care.Reasonable._Cl={RP.The} shall exert reasonable efforts to maintain {DP.the}'s Confidential Information in confidence

CC.NeedToKnow_Warned._cl={RP.the} may disclose or permit disclosure of any of {DP.the}'s Confidential Information to {CC.Persons} who need to know such Confidential Information to fulfill the Purpose and who have been advised of and have agreed to maintain the confidential nature of the Confidential Information

CC.Persons=its directors (in the case of {P1.Handle}, members), officers, employees, consultants, advisors and, in the case of {P1.Handle}, students,

Compelled._Sec=<u>{Compelled.Title}</u>. {Compelled._sec}

Compelled.Title=Required Disclosures

Compelled._sec={Compelled.Respond._Cl}, as long as {Compelled.Cond._cl}.

Compelled.Respond._Cl=Nothing in this Agreement shall be construed to prevent {RP.a} from disclosing Confidential Information pursuant to an order of a court or other governmental authority of competent jurisdiction

Compelled.Cond._cl={Compelled.Cond.Note-Coop}

<b>Compelled - Choices</b>=In Mutual and InBound there are two conditions, in OutBound there are three.

Compelled.Cond.Note-Coop={RP.the} {Compelled.Cond.Notice} and {Compelled.Cond.Cooperate}

Compelled.Cond.Note-Coop-Min={RP.the} (a) {Compelled.Cond.Notice}, (b) {Compelled.Cond.Cooperate}, and (c) {Compelled.Cond.Minimize}

Compelled.Cond.Notice=promptly notifies {DP.the} of its intention to disclose

Compelled.Cond.Cooperate=provides reasonable cooperation to {DP.the} in any efforts to contest or limit the scope of such order or subpoena

Compelled.Cond.Minimize=furnishes only that portion of the Confidential Information which {RP.the} is legally required to disclose

Disclaim.Warranty._Sec=<u>{Disclaim.Warranty.Title}</u>. {Disclaim.Warranty._sec}

Disclaim.Warranty.Title=No Warranty

Disclaim.Warranty._sec=All Confidential Information is provided "as is."  {DP.NeitherMakes} any warranties, expressed or implied, regarding its Confidential Information's accuracy, completeness, suitability{q} or performance.

Term._Sec=<u>{Term.Title}</u>. {Term._sec}

Term.Title=Term of Agreement

Term._sec=The term of this Agreement shall commence on the Effective Date and terminate on the earliest of {Term.Stop.List}. {RP.A}'s obligations with respect to use and non-disclosure of {DP.the}'s Confidential Information shall survive for a period of {Conf.Protect.Period}.

Conf.Protect.Period={Conf.Protect.Period.Years} following receipt of the information

Term.Stop.List=(a) {Term.Stop.Done}, (b) {Term.Stop.TimeCertain}{q} or (c) {Term.Stop.Notice}

Term.Stop.Done=conclusion of the Purpose

Term.Stop.TimeCertain=three years from the date of this Agreement

Term.Stop.Notice=the date on which a party provides notice of termination of this Agreement to the other

Remedy.Conf.Return._Sec=<u>{Remedy.Title}</u>. {Remedy._sec}

Remedy.Title=Return or Destruction of Confidential Information

Remedy._sec=Following termination of this Agreement, {RP.the} shall, at the direction of {DP.the}, either destroy or return to {DP.the} all documents, materials, and other tangible manifestations of {DP.the}'s Confidential Information and shall destroy any electronic or digital manifestations of {DP.the}'s Confidential Information, except that {RP.the} may retain one copy of the Confidential Information solely for the purpose of monitoring its obligations under this Agreement.

Notice._Sec=<u>{Notice.Title}</u>. {Notice._sec}

Notice.Title=Notices

Notice._sec=Any notices to be given under this Agreement{Notice.Except._clqq} shall be in writing and addressed to the parties as shown below. Notices shall be delivered by certified or registered first class mail (air mail if not domestic) or by commercial courier service and shall be deemed to have been given or made as of the date received.<table><tr><td>For {P1.Handle}:</td><td>For {P2.Handle}:</td></tr><tr><td>{P1.Notice.Block}</td><td>{P2.Notice.Block}</td></tr></table>

Notice.Except._clqq=, {Notice.Except._cl},

Notice.Except._cl=other than those contemplated by Section {Conf._Sec.Xnum}

Misc._Sec=<u>{Misc.Title}</u>. <ol><li>{Export._Sec}</li><li>{CREATE._Sec}</li><li>{Disclaim.Agency._Sec}</li><li>{Misc.Entire._Sec}</li><li>{Misc.Assign._Sec}</li><li>{Misc.Sever._Sec}</li><li>{Misc.Waive._Sec}</li><li>{Misc.Law._Sec}</li><li>{Misc.Counterpart._Sec}</li></ol>

Misc.Title=Miscellaneous Provisions

Export._Sec=<u>{Export.Title}</u>. {Export._sec}

Export.Title=Export Control

Export._sec={DP.Each} covenants and warrants that it will not disclose to {RP.other} any information that contains information, technology or data identified on any U.S. export control list, including the Commerce Control List at 15 CFR 774 and the U.S. Munitions List at 22 CFR 121, unless and until it obtains {Export.Consent._cl}.

CREATE._Sec=<u>{CREATE.Title}</u>. {CREATE._sec}

CREATE.Title=CREATE Act

CREATE._sec=For the purposes of the Cooperative Research and Technology Enhancement Act of 2004, the parties agree that this Agreement is not considered a joint research agreement.

Disclaim.Agency._Sec=<u>{Disclaim.Agency.Title}</u>. {Disclaim.Agency._sec}

Disclaim.Agency.Title=No Agency or Future Commitment

Disclaim.Agency._sec=The parties do not intend that any agency, partnership, joint venture{q} or exclusive relationship is created between the parties by this Agreement, and each party is free to pursue relationships and opportunities with others similar to those contemplated by this Agreement. Nothing in this Agreement shall be construed as obligating the parties to enter into any subsequent agreement or relationship.

Misc.Entire._Sec=<u>{Misc.Entire.Title}</u>.  {Misc.Entire._sec}

Misc.Entire.Title=Entire Agreement/Amendment

Misc.Entire._sec=This Agreement contains the entire understanding of the parties with respect to the subject matter hereof. This Agreement may be amended or modified only by a written instrument signed by an authorized representative of each party.

Misc.Assign._Sec=<u>{Misc.Assign.Title}</u>.  {Misc.Assign._sec}

Misc.Assign.Title=Assignment

Misc.Assign._sec=This Agreement may not be assigned by either party without the other party's prior written consent.

Misc.Sever._Sec=<u>{Misc.Sever.Title}</u>. {Misc.Sever._sec}

Misc.Sever.Title=Severability

Misc.Sever._sec=The provisions of this Agreement are severable. In the event any provision of this Agreement is determined to be invalid or unenforceable, such invalidity or unenforceability shall not affect the validity or enforceability of the remaining provisions hereof and the provision shall be reformed to be enforceable and reflect as closely as possible the intent of the original provision.

Misc.Waive._Sec=<u>{Misc.Waive.Title}</u>. {Misc.Waive._sec} 

Misc.Waive.Title=Waiver

Misc.Waive._sec=Any waiver of compliance with the terms of this Agreement must be in writing, and any waiver in one instance shall not be deemed a waiver in any future instance.

Misc.Law._Sec=<u>{Misc.Law.Title}</u>. {Misc.Law._sec}

Misc.Law.Title=Governing Law

Misc.Law._sec=The interpretation and validity of this Agreement and the rights of the parties shall be governed by the laws of {State.Of}.

Misc.Counterpart._Sec=<u>{Misc.Counterpart.Title}</u>. {Misc.Counterpart._sec}

Misc.Counterpart.Title=Counterparts

Misc.Counterpart._sec=This Agreement may be executed in two or more counterparts, each of which will be deemed to be an original, but all of which together constitute one and the same instrument.

Signature.Intro=Executed as of the Effective Date:

P2.-=Company

P2.Defined={P2.Handle}

P1.Defined={P1.Handle}

DP.Neither=Neither party

DP.NeitherMakes={DP.Neither} makes

DP.Each=Each party 

DP.each=each party

DP.Defined=one party ("Disclosing Party")

<b>Unneeded inconsistency</b="the other party" vs "the other"

RP.theOther=the other party

RP.other=the other

RP.Defined=the other ("Receiving Party")

parties=parties

party=party

relating to=relating to