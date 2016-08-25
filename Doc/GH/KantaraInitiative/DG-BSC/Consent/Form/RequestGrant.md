Model.Root={Form}

Form={Head}<br><br>{Terms}<br><br>{Signature}

Head=<b>This Grants a Request for Use</b>

Terms=<b>Date: </b>{Date.YMDT}<br><b>Grantor:</b> {Alice.Name.Full}<br><b>Grantee:</b> {Researcher.N,E,A}<br><b>Data: </b>{Data.cl}<br><b>Use:</b> {Use.cl}

Signature=<b>Signed by:</b><br>{Alice.Sign.Block}