Model.Root={Form}

Form={Head}<br><br>{Parties}<br>{Terms}<br><br>{Signature}

Head=<b>This is a Request for Consent to Use</b>

Parties=<b>Parties</b><br><ol><li>{Alice.N,E,A}</li><li>{ResearcherA.N,E,A}</li><li>{Researcher.N,E,A}</li></ol>

Terms=<b>Date: </b>{Researcher.Sign.YMD}<br><b>Data: </b>{Data.cl}<br><b>Use:</b> {Use.cl}<br><b>Confirmation of Conditions:</b>  {Condition.sec}<br>

Signature=<b>Signed by:</b><br>{Researcher.Sign.Block}

Researcher.Handle=Requesting Researcher