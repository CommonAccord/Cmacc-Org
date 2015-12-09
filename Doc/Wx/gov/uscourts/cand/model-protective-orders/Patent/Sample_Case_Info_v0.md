=[core/form/litigation/plead/protective_order/CAND_Protect_Order_Library]

Plead.Proponent.Sec={Plead.Proponent.Df}

Plead.Title=STIPULATED PROTECTIVE ORDER

ProsecutionBar.SubjectMatter=Patent {654.#}, {654.Title}

Plead.Sign.Block=IT IS SO STIPULATED, THROUGH COUNSEL OF RECORD.<br><br><br><br><br>DATED: {Plead.Pn1.Sign.Date} _____________________________________<br><br>{Pn1.Firm.Team}<br><br>Attorneys for Plaintiff<br><br><br><br><br>DATED: {Plead.Df1.Sign.Date}  _____________________________________<br><br>{Df1.Firm.Team}<br><br>Attorneys for Defendant<br><br><br><br><br>PURSUANT TO STIPULATION, IT IS SO ORDERED.<br><br>DATED: {Plead.Jg1.Sign.Date}  _____________________________________<br><br>{Jg1.Name.Full}<br><br>United States District/Magistrate Judge

#Patent=<b>'654 Patent</b>
ThePatent.#=7,321,654
ThePatent.Title=Simple Method for Automating Litigation
ThePatent.Filing.Date=April 2, 2010
<b>The Case</b>=-
Case.Forum.Name.Full=United States District Court for the Northern District of California
Case.#=<b>C10 0012</b>
Case.Complaint.File.MDY=July 5, 2012
Case.Court.Jurisd.Abbrev=N.D. Cal.
Jg1.Name.Full=Hon. Meagan Majeured

<b>Plaintiff</b>=-

Pn1=AIII

Pn1.Name.Full=Advanced Integrated Improvements, Inc.
Pn1.EntityType.a=a {Pn1.EntityType}
Pn1.EntityType=Delaware Corporation

<b>Df1</b>=-
Df1=SaS
Df1.Name.Full=Slow and Steady, Incorporated
Df1.EntityType.a=a {Df1.EntityType}
Df1.EntityType=California Corporation

<b>P1's Law Firm</b>=-
Pn1.Firm.Team={Pn1.Atty.1.N,Bar/Email}<br>{Pn1.Atty.2.N,Bar/Email}
Pn1.Atty.1.Name.Full=Charles S. Goodly
Pn1.Atty.1.N,Bar/Email={Pn1.Atty.1.Name.Full} (State Bar No. 12345)<br>csg@delois.com
Pn1.Atty.2.N,Bar/Email=Chandler Gento (State Bar No. 23456)<br>cg@delois.com
Pn1.Firm.N/Addr/Tel/Fax=Delois & Sendar<br>2222 El Camino Real<br>Mountain View, CA 94040<br>Telephone: 650.444.1000<br>Fascimile:  +1.650.444.1001
Pn1.Firm.Name=Delois & Sendar
Pn1.Firm.Addr.1,2=2222 El Camino Real, Mountain View, CA 94040

Default_Field={RFP.Proponent}


<b>P1's Law Firm</b>=-
Df1.Firm.Team={Df1.Atty.1.N,Bar/Email}<br>{Df1.Atty.2.N,Bar/Email}
Df1.Atty.1.Name.Full=Albert Alemagne
Df1.Atty.1.N,Bar/Email={Df1.Atty.1.Name.Full} (State Bar No. 98765)<br>aa@avermore.com
Df1.Atty.2.N,Bar/Email=Elizabeth Eleno (State Bar No. 87654)<br>ee@avermore.com
Df1.Firm.N/A/T/F={Df1.Firm.Name}<br>{Df1.Firm.Addr.1}<br>{Df1.Firm.Addr.2}<br>Telephone: 650.543.2000<br>Fascimile:  +1.650.543.2001
Df1.Firm.Name=Avermore Partners
Df1.Firm.Addr.1=3333 University Avenue
Df1.Firm.Addr.2=Palo Alto, CA 94301
Df1.Firm.Addr.1,2={Df1.Firm.Addr.1}, {Df1.Firm.Addr.2}

<b>General Elements</b>=To be transferred to boilerplate.
Pn1.Name,Entity={Pn1.Name.Full}, {Pn1.EntityType.a}
Df1.Name,Entity={Df1.Name.Full}, {Df1.EntityType.a}