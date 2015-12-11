Head.Sec={Proponent.sec}<br><br><center><span style="text-transform: uppercase;">{Forum.Name.Full}</span></center><br><table frame="below"><tr><td width="500">{Case.Caption.Plaintiff/v/Defendant}</td><td width="500"><br>Case No. {Case.#}<br>{Title}</td></tr></table>

Proponent.Alt1.sec={Plaintiff1.Firm.Team}<br>{Plaintiff1.Firm.Name/Address/Telephone/Fax}<br>Attorneys for Plaintiff<br><span style="text-transform: uppercase;">{Plaintiff1.Name.Full}</span> 

Proponent.Alt2.sec={Defendant1.Firm.Team}<br>{Defendant1.Firm.Name/Address/Telephone/Fax}<br>Attorneys for Defendant<br><span style="text-transform: uppercase;">{Defendant1.Name.Full}</span> 

Proponent.=[Z/Alt/2]

Proponent.SecName=Proponent

Case.Caption={Plaintiff1.Name.Full} v. {Defendant1.Name.Full}

Case.Caption.Plaintiff/v/Defendant={Plaintiff1.Name,Entity}<br> <center>Plaintiff</center><br>v. <br><br>{Defendant1.Name,Entity}<br><center>Defendant</center>

Sign.Sec=<table><tr><td width="500">Dated: {Sign.Date.YMD}</td><td width="500">{Sign.Block}</td></tr></table>

Sign.Block.Defendant1.Atty.1={Defendant1.Name.Full}<br><br>By: <br>{Defendant1.Atty1.Name.Full}<br>Attorneys for Defendant<br>{Defendant1.Name.Full}

Sign.Block.Pf1.Atty.1={Plaintiff1.Name.Full}<br><br>By: <br>{Plaintiff1.Atty1.Name.Full}<br>Attorneys for Plaintiff<br>{Plaintiff1.Name.Full}

Case.Name={Plaintiff1.Name.Full} v. {Defendant1.Name.Full}

Doc={Head.Sec}<br><br>{Text.Sec}<br><br>{Sign.Sec}<br><hr>{Attach.Sec}

Model.Root={Doc}