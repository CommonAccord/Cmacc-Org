Model.Root={Doc}

Doc={Check.Sec}<hr>{Endorse.Sec}<hr>{Deposit.Sec}<hr>{Present.Sec}<hr>{Accept.Sec}

Check.Sec=<table><tr><td><h1>{Bank1.Name.Full}</h1></td><td></td><td></td></tr><tr><td>Payez contre ce chèque non endossable {Amount.Letters}<br> à {Party2.Name.Full}<br><table><tr><td valign="top">Payable en France<br>{Bank1.Addr.1/2}</td><td valign="top">Compte <br>{Party1.Account.ID.Number.#}<br>{Party1.N/1/2}</td><td valign="top">{Check.Sign.City}</td></tr></table></td><td></td><td>€ {Amount.#}<br>{Check.Sign.YMD}<br><br>{Party1.Sign.Name.Full}</td></tr><tr><td>{Check.ID.Number.#} | {Party1.Account.ID.Number.#} | {Bank1.ID.Number.#}</td></tr></table>