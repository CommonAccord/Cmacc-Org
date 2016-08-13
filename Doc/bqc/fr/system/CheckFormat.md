Note=SCDL is the set of "functions" e.g. "code" or "controllers" available.
 
SCDL.=[bqc/fr/system/PaymentOrder_SCDL.md]

Model.Root={Doc}

Doc={Check.Div}<hr>{Parties.Div}<hr>{Write.Div}<hr>{Sign.Div}<hr>{Endorse.Div}<hr>{Deposit.Div}<hr>{Present.Div}<hr>{Accept.Div}<hr>{Resolve.Div}<hr><hr><b>Available Functions (SCDL):</b><br>{SCDL.Sec}

Check.Div=<table><tr><td><h1>{B1.Name.Full}</h1></td><td></td><td></td></tr><tr><td>Payez contre ce chèque non endossable {Amount.Letters}<br> à {P2.Name.Full}<br><table><tr><td valign="top">Payable en France<br>{B1.Adr.1/2}</td><td valign="top">Compte <br>{P1.Account.ID.Number.#}<br>{P1.N/1/2}</td><td valign="top">{Sign.City}</td></tr></table></td><td></td><td>€ {Amount.#}<br>{Sign.YMD}<br><br>{P1.Signer.Name.Full}</td></tr><tr><td>{Check.ID.Number.#} | {P1.Account.ID.Number.#} | {B1.ID.Number.#}</td></tr></table>

Parties.Div=<b>Parties:</b><br><table><td><b>B1:</b>{B1.N/1/2}</td><td><b>B2:</b>{B2.N/1/2}</td></tr><tr><td><b>P1:</b>{P1.N/1/2}</td><td><b>P2:</b>{P2.N/1/2}</td></tr><tr><td><b>P1 Signer:</b>{P1.Signer.N/1/2}</td><td><b>P2 Signer (Endorser):</b>{P2.Signer.N/1/2}</td></table>

Resolve.Div=<b>Resolution of Any Questions or Disputes</b>:<br>{Resolve.Sec}

Resolve.Sec=<i>Provisions for rejection of the check.</i>