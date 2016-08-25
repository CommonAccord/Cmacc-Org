Model.Root={Grant.Form}

Grant.Form={Head}<br><br>{Terms}<br><br>{Signature}

Head=<b>This Grants a Request for Use</b>

Terms=<b>Grant Date: </b>{Date.YMDT}<br><b>Request Terms:</b><ul type="none"><li><b>Researcher:</b> {Researcher.N,E,A}</li><li>{Request.Terms}</ul>

Signature=<b>Signed by:</b><br>{Alice.Sign.Block}