Proponent.=[Law/Out/Form/Litig/Plead/Proponent/_v0.md]

Case.Caption.Short={Case.Plaintiff1.Party.Name.Full} v. {Case.Defendant1.Party.Name.Full}

Case.Caption.Full={Case.Plaintiff1.Party.Name,Entity}<br> <center>Plaintiff</center><br>v.<br><br>{Case.Defendant1.Party.Name,Entity}<br><center>Defendant</center>

Sign.Sec=<table><tr><td width="500">Dated: {Sign.YMD}</td><td width="500">{Sign.Block.sec}</td></tr></table>

Sign.Block.=[Law/Out/Form/Litig/Plead/Sign/_v0.md]

Sign.Block.SecName=Sign.Block

Case.Name={Case.Plaintiff1.Name.Full} v. {Case.Defendant1.Name.Full}

Header.Sec={Header.North}<br><table frame="below"><tr><td width="500">{Header.West}</td><td>{Header.East}</td></tr></table>{Header.South}

Header.North=<center><span style="text-transform: uppercase;">{Case.Forum.Name.Full}</span></center>

Header.West={Proponent.sec}<br><br>{Case.Caption.Full}

Header.East=Case No. {Case.#}<br>{Case.Title}<br>{Pleading.Title.Long}

Header.South=</i>

Doc={Header.Sec}<br><br>{Text.Sec}<br><br>{Sign.Sec}<br><hr>{Attach.Sec}

Model.Root={Doc}