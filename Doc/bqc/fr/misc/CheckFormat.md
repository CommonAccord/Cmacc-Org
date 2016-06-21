Model.Root={Doc}

Doc={Check.Div}<hr>{Endorse.Div}<hr>{Deposit.Div}<hr>{Present.Div}<hr>{Accept.Div}<hr>{Resolve.Div}

Check.Div=<table><tr><td><h1>{Bank1.Name.Full}</h1></td><td></td><td></td></tr><tr><td>Payez contre ce chèque non endossable {Amount.Letters}<br> à {Party2.Name.Full}<br><table><tr><td valign="top">Payable en France<br>{Bank1.Adr.1/2}</td><td valign="top">Compte <br>{Party1.Account.ID.Number.#}<br>{Party1.N/1/2}</td><td valign="top">{Check.Sign.City}</td></tr></table></td><td></td><td>€ {Amount.#}<br>{Check.Sign.YMD}<br><br>{Party1.Sign.Name.Full}</td></tr><tr><td>{Check.ID.Number.#} | {Party1.Account.ID.Number.#} | {Bank1.ID.Number.#}</td></tr></table>

Endorse.Div=<b>Endorsed by:</b><br> {Endorse.N/1/2}

Deposit.Div=<b>Deposit</b>:<br> {Deposit.Sec}

Deposit.Sec=Deposited at: {Bank2.Name.Full}, time: {Deposit.Time.YMDH} by {Deposit.By.Name.Full}

Accept.Div=<b>Acceptance</b>:<br>{Accept.Sec}

Accept.Sec=<ol><i>Provisions relating to Acceptance of the check.</i>

Resolve.Div=<b>Resolution of Any Questions or Disputes</b>:<br>{Resolve.Sec}

Resolve.Sec=<i>Provisions for rejection of the check.</i>
