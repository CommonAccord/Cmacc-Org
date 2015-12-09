Head.Sec={Proponent.sec}<br><br><center><span style="text-transform: uppercase;">{Forum.Name.Full}</span></center><br><table frame="below"><tr><td width="500">{Case.Caption.Pn/v/Df}</td><td width="500"><br>Case No. {Case.#}<br>{Title}</td></tr></table>

Proponent.Alt1.sec={Pn1.Firm.Team}<br>{Pn1.Firm.N/A/T/F}<br>Attorneys for Plaintiff<br><span style="text-transform: uppercase;">{Pn1.Name.Full}</span> 

Proponent.Alt2.sec={Df1.Firm.Team}<br>{Df1.Firm.N/A/T/F}<br>Attorneys for Defendant<br><span style="text-transform: uppercase;">{Df1.Name.Full}</span> 

Proponent.=[Z/alt/2]

Proponent.SecName=Proponent

Case.Caption={Pn1.Name.Full} v. {Df1.Name.Full}

Case.Caption.Pn/v/Df={Pn1.Name,Entity}<br> <center>Plaintiff</center><br>v. <br><br>{Df1.Name,Entity}<br><center>Defendant</center>

Sign.Sec=<table><tr><td width="500">Dated: {Sign.Date.YMD}</td><td width="500">{Sign.Block}</td></tr></table>

Sign.Block.Df1.Atty.1={Df1.Name.Full}<br><br>By: <br>{Df1.Atty1.Name.Full}<br>Attorneys for Defendant<br>{Df1.Name.Full}

Sign.Block.Pf1.Atty.1={Pn1.Name.Full}<br><br>By: <br>{Pn1.Atty1.Name.Full}<br>Attorneys for Plaintiff<br>{Pn1.Name.Full}

Case.Name={Pn1.Name.Full} v. {Df1.Name.Full}

Doc={Head.Sec}<br><br>{Text.Sec}<br><br>{Sign.Sec}<br><hr>{Attach.Sec}

Model.Root={Doc}