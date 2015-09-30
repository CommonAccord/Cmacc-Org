Model.Root={NDA.Sections}

=[Wx/com/be-bound/MOU/Sec/BB_Blocks.md]

Company={P1.Nom}

Co.Description={P1.Description}

Co.Rep.Name={P1.Dirigeant.Nom}

Co.Rep.Title={P1.Dirigeant.Titre}  

Co.FullAddress={P1.Adresse.1,3}  

Partner={P2.Nom}

Partner.Description={P2.Description}

Partner.Rep.Name={P2.Rep1.Nom}

Partner.Rep.Title={P2.Rep1.Titre}

MutualNDA={MutualNDA.Intro}{NDA.Sections}{Sign.Block}

NonMutualNDA={NonMutualNDA.Intro}{NDA.Sections}{Sign.Block}

MutualNDA.Intro=<P ALIGN=CENTER><b>Mutual Confidentiality and Non-Disclosure Agreement</B></U></P><br><P>This Confidentiality and Non-Disclosure Agreement is entered hereto between <P><B>{Company}</B>, {Co.Description}, represented by its {Co.Rep.Title}, <B>{Co.Rep.Name}</B></P><BR>And: <P><B>{Partner}</B>, {Partner.Description}</P> (With all subsidiaries, parents, affiliates, officers, directors, and employees and/or related companies where it has direct or indirect participation),  </P><P>Represented by {Partner.Rep.Name}</P><br><P>In order to prepare a possible collaboration, integrate other party technology or give access to other party technology, certain confidential information, technical details and know-how belonging to one party may be disclosed to the other party.</P><P><B>Both parties are alternately, the "Disclosing Party" and the "Receiving Party"</B></P><br><P>In consideration of the disclosure of Confidential Information and undertakings of confidentiality in respect such Confidential Information, the Parties mutually agree as follows:</P>

NonMutualNDA.Intro=<P ALIGN=CENTER><b>Non-Mutual Confidentiality and Non-Disclosure Agreement</B></U></P><br><P>This Confidentiality and Non-Disclosure Agreement is entered hereto between <P><B>{Company}</B>, {Co.Description} (Hereinafter referred to as "<B>the Disclosing Party</B>"), represented by its {Co.Rep.Title}, <B>{Co.Rep.Name}</B></P><BR>And: <P><B>{Partner}</B>, {Partner.Description}</P> (With all subsidiaries, parents, affiliates, officers, directors, and employees and/or related companies where it has direct or indirect participation, hereinafter referred to as "<B>the Receiving Party</B>")</P><P>Represented by {Partner.Rep.Name}</P><br><P>In order to prepare a possible collaboration, integrate other party technology or give access to other party technology, certain confidential information, technical details and know-how belonging to one party may be disclosed to the other party.</P><br><P>In consideration of the disclosure of Confidential Information and undertakings of confidentiality in respect such Confidential Information, the Parties mutually agree as follows:

NDA.Sections=<ol><li>{ConfidentialInformation.Sec}<li>{Parties.Sec}<li>{Confidentiality.Sec}<li>{Protection.Sec}<li>{Handling.Sec}<li>{Exceptions.Sec}<li>{Assignment.Sec}<li>{Obligations.Sec}<li>{Remedies.Sec}<li>{ThirdParties.Sec}<li>{Duration.Sec}<li>{GoverningLawArbitration.Sec}</ol>

ConfidentialInformation.Sec=<b>Confidential Information</b><br> The term "Confidential Information" shall mean any proprietary, planning, financial, marketing, technical, source code, login, passwords, process, any information or data howsoever recorded, preserved or disclosed, relating to the Project and/or to either Party's business or affairs, including without limitation, product samples, data, know-how, trade secrets, formulae, inventions, techniques, processes, operations, customer lists and details, financial information, sales and marketing plans, forecasts, analyses, compilations, reports, interpretations, surveys, patents, patent applications, copyrights, designs, design right applications, configurations, experiments, memoranda, valuations, business plans, budgets and summaries, photographs, drawings, specifications, software programs and samples, trade marks (both registered and unregistered), domain registrations and intended domain registrations or any documents derived from the foregoing, whoever prepares them, and also information or data disclosed by inspection of or visit to any property owned, used or occupied by any Party hereto and any other material bearing or incorporating any information of either Party disclosed or to be disclosed, which is identified as being of a confidential nature or ought to be regarded as such, whether in Writing orally or by any other means to one Party by the other Party directly or indirectly, whether before, on or after the date of this Agreement. <ol type="a"><li>Disclosed Information means such Information of the Disclosing Party that is disclosed     to the Receiving Party under the terms of this Agreement.<li>Writing means any communication effected by document, telex, cable, fax, email, text message, web page or any other forms of written material transmitted electronically.</ol>

Parties.Sec=<b>Parties</b><br> The term "Disclosing Party" shall mean the Party, which is disclosing Confidential Information, and the "Receiving Party" shall mean the Party to which the Confidential Information is disclosed.  The term "Parties" shall refer to all Parties to this Agreement and the term "Party" shall refer to one of the Parties.</P><P>A party who is not a party to this Agreement shall have no right to enforce any term of this Agreement. Any other Party than the one designated in this Agreement will have no access to confidential information exchanged during the designated period

Confidentiality.Sec=<b>Confidentiality</b><br> Except as specifically permitted by the terms of this Agreement, the "Receiving Party" agrees not to disclose to any persons or entity for a period of two (2) years from the date of receipt of Confidential Information, any Confidential Information obtained by it from or disclosed to it by the Disclosing Party.

Protection.=[Wx/com/be-bound/NDA/Sec/NDA_Protection.md]

Handling.=[Wx/com/be-bound/NDA/Sec/NDA_Handling.md]

Exceptions.Sec=<b>Exceptions</b><br> The "Receiving Party" may disclose Confidential Information to the extent it is required to be disclosed pursuant to the binding order of a government agency or a competent court or arbitrator, or the rules and procedures of a relevant recognized investment exchange, so long as the Receiving Party, insofar as it is legally able to do so, provides the Disclosing Party with notice of such requirement prior to any such disclosure and co-operates fully with the Disclosing Party's reasonable instructions (at the Disclosing Party's expense) in resisting any such requirement.<ol type="a"><li>All Confidential Information exchanged between the Parties is considered loaned for use solely in connection with the Purpose. The original and all copies of Confidential Information or any part thereof shall be returned by the Receiving Party to the Disclosing Party as soon as reasonably practicable following receipt of a written request therefore from the Disclosing Party except that (i) the Receiving Party may, upon written notice to the Disclosing Party, retain a single complete copy of the Confidential Information in the exclusive possession of its attorney or general counsel's office solely for use in connection with the defense of an dispute or enforcement of any right against the Disclosing Party arising from this Agreement; and (ii) the professional advisers of the Receiving Party may retain a single complete copy for the maintenance of proper professional records.<li>No representation or warranty is made or implied with respect to any Confidential Information provided by the Disclosing Party regarding, but not limited to, its accuracy, legality or completeness.  This Agreement shall not be construed as granting or conferring any rights, by license or otherwise, in any Confidential Information disclosed under this Agreement.</ol>

Assignment.Sec=<b>Assignment</b><br> Neither Party will assign this Agreement or otherwise part with Confidential Information received from the other Party except to a member for the time being of such Party's group of companies or except as otherwise permitted by this Agreement.

Obligations.Sec=<b>Obligations</b><br> The release of Confidential Information disclosed under this Agreement shall not obligate either of the Parties to provide any additional or updated Confidential Information. In addition, neither the release of Confidential Information nor any other fact or circumstance in connection with this Agreement will in any way obligate either Party to proceed further with the Purpose or any other further agreement with the other Party.

Remedies.Sec=<b>Remedies</b><br> In the event of a breach of any of the foregoing provisions the Receiving Party agrees that the harm suffered by the injured Party would be compensated by monetary damages of the lesser of actual assessed damages and 100 000 (one Hundred thousand) Euros for every breach and, accordingly, that the injured party shall, in addition to other available legal remedies, be entitled to an injunction against such breach.

ThirdParties.Sec=<b>Third Parties</b><br> A party who is not a party to this Agreement shall have no right to enforce any term of this Agreement. Any other Party than the one designated in this Agreement will have no access to confidential information exchanged during the designated period. 

Duration.Sec=<b>Duration</b><br>This Non Disclosure Agreement will be in effect for one (1) year from the date of its execution, unless extended, amended or terminated by mutual agreement of the parties. Either party may terminate this agreement early by sending written notice to the other party.  In case the Parties sign a Business Agreement within one (1) year from the start of this Agreement, this Agreement will be automatically renewed for another period of three (1) year and so on without any other notice. However, the limitations of the disclosure and use of Proprietary Information survive expiration or termination and binding upon Recipient for a period of three (3) years after the End Date. Within thirty (30) business days after termination of this agreement, upon Owner's request, Recipient shall return to Owner all tangible items relating to Proprietary information, including all written material, software, photographs, models, compounds, compositions, and all copies.  

GoverningLawArbitration.Sec=<b>Governing law and Arbitration Clause</b><br>This Agreement shall be construed under and in accordance with the laws of France. Any dispute arising in connection with this Agreement shall be finally resolved by arbitration under the auspices of the INTERNATIONAL CHAMBER OF ARBITRATION OF PARIS (6, avenue Pierre 1er de Serbie, 75116 PARIS phone: 01.42.36.99.65, fax: 01.42. 36.99.58), in accordance with the Rules that the parties declare to know and accept.

Sign.Block=<P><B>Signed in </B></P><P><B>Date: </B></P><P>Initials on each page for approval</P>{Signature.Block}