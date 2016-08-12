Note=SCDL is the set of "functions" e.g. "code" or "controllers" available.
 
SCDL.=[bqc/fr/system/PaymentOrder_SCDL.md]

Model.Root={Doc}

Doc={Check.Div}<hr>{Parties.Div}<hr>{Endorse.Div}<hr>{Deposit.Div}<hr>{Present.Div}<hr>{Accept.Div}<hr>{Resolve.Div}<hr><hr><b>Available Functions (SCDL):</b><br>{SCDL.Sec}

Check.Div=<table><tr><td><h1>{B1.Name.Full}</h1></td><td></td><td></td></tr><tr><td>Payez contre ce chèque non endossable {Amount.Letters}<br> à {P2.Name.Full}<br><table><tr><td valign="top">Payable en France<br>{B1.Adr.1/2}</td><td valign="top">Compte <br>{P1.Account.ID.Number.#}<br>{P1.N/1/2}</td><td valign="top">{Check.Sign.City}</td></tr></table></td><td></td><td>€ {Amount.#}<br>{Check.Sign.YMD}<br><br>{P1.Signer.Name.Full}</td></tr><tr><td>{Check.ID.Number.#} | {P1.Account.ID.Number.#} | {B1.ID.Number.#}</td></tr></table>

Parties.Div=<b>Parties:</b><br><table><td><b>B1:</b>{B1.N/1/2}</td><td><b>B2:</b>{B2.N/1/2}</td></tr><tr><td><b>P1:</b>{P1.N/1/2}</td><td><b>P2:</b>{P2.N/1/2}</td></tr><tr><td><b>P1 Signer:</b>{P1.Signer.N/1/2}</td><td><b>P2 Signer (Endorser):</b>{P2.Signer.N/1/2}</td></table>


Endorse.Div=<b>Endorsed by:</b><br> {P2.Signer.N/1/2}

Deposit.Div=<b>Deposit</b>:<br> {Deposit.Sec}

Deposit.Sec=Deposited at: {B2.Name.Full}, time: {P2.Submit.Time.YMDH} by <table><tr><td>{P2.Submitter.N/1/2}</td></tr></table>

Present.Div=<b>Presentment</b>: {Present.Sec}

Present.Sec=Presented by: {B2.Name.Full} to {B1.Name.Full} at {Present.Time.YMDH}.

Accept.Div=<b>Acceptance</b>:<br>{Accept.Sec}

Accept.Sec=<b>Accepted</b> <i>Provisions relating to Acceptance of the check, either {Accept.Yes} or {Accept.Reject}.</i>

Accept.Yes={B1.Name.Full} notifies {B2.Name.Full} of acceptance as of {Accept.Time.YMDH}

Accept.Reject=<b>Acceptance Denied - Rejected</b> {B1.Name.Full} notifies {B2.Name.Full} of rejection, as of {Accept.Time.YMDH}.

Resolve.Div=<b>Resolution of Any Questions or Disputes</b>:<br>{Resolve.Sec}

Resolve.Sec=<i>Provisions for rejection of the check.</i>