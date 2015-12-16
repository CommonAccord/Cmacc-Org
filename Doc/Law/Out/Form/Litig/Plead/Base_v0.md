Proponent.=[Law/Out/Form/Litig/Plead/Proponent/_v0.md]

Case.Caption.Short={Plaintiff1.Party.Name.Full} v. {Defendant1.Party.Name.Full}

Case.Caption.Full={Plaintiff1.Party.Name,Entity}<br> <center>Plaintiff</center><br>v.<br><br>{Defendant1.Party.Name,Entity}<br><center>Defendant</center>

Sign.Sec=<table><tr><td width="500">Dated: {Sign.YMD}</td><td width="500">{Sign.Block.sec}</td></tr></table>

Sign.Block.=[Law/Out/Form/Litig/Plead/Sign/_v0.md]

Sign.Block.SecName=Sign.Block

Case.Name={Plaintiff1.Name.Full} v. {Defendant1.Name.Full}

Head.Sec={Head.North}<br><table frame="below"><tr><td width="500">{Head.West}</td><td>{Head.East}</td></tr></table>{Head.South}

Head.North=<center><span style="text-transform: uppercase;">{Forum.Name.Full}</span></center>

Head.West={Proponent.sec}<br><br>{Case.Caption.Full}

Head.East=Case No. {Case.#}<br>{Title}

Head.South=</i>

Doc={Head.Sec}<br><br>{Text.Sec}<br><br>{Sign.Sec}<br><hr>{Attach.Sec}

Model.Root={Doc}