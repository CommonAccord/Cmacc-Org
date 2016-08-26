Model.Root={Head}<br><br>{Parties}<br>{Terms}<br><br>{Signature}<hr><hr>{ListOfGrants}

Head=<b>This is a Consent</b>

Parties=<b>Parties</b><br><ol><li>{Alice.N,E,A}</li><li>{ResearcherA.N,E,A}</li></ol>

Terms=<b>Date: </b>{Date.YMDT}<br><b>Data: </b>{Data.cl}<br><b>Use:</b> {Use.cl}<br><b>Conditions:</b>  {Condition.sec}

Signature=<b>Signed by:</b><br>{Alice.Sign.Block}<br>{ResearcherA.Sign.Block}

Alice.Handle=Patient

ResearcherA.Handle=Researcher

ListOfGrants=<font color="grey">{Request.Form}</span>