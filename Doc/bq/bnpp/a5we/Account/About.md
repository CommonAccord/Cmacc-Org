Ti=Accounts

0.sec=This is a stub.

1.sec=Presume that there will be a folder for each "account" - reflecting bank accounts.  In each folder there will be a log of transactions.  Each transaction will be one or more Event (Journal?, Log?) files.

2.sec=Some transactions will be complex, and use the variety of materials available on the bq chain.  Many transactions will be very simple - a payment or simple purchase for instance.

3.sec=Access management requires that we also keep a log of access requests and responses.  The line between an access request and a "transaction" is soft.  Some transactions are on the border - such as sharing info under an NDA.  Some transactions are mixed -- involving access and payment - such as access to a music or video work for a period of time.

4.0.sec=Perhaps all transactions can be thought of as expansions of:  

4.1.sec={Event.Record}

4.=[Z/para/s1] 

=[Z/ol/s4]

Event.Record=<h2>Event:</h2>{GUID.Div} {Parties.Div} {Time.Div} {Event.Div} {Validation.Div}

GUID.Div=<h3>Guid: {GUID.#}</h3>

Parties.Div=<h3>Parties</h3><ol><li>{Parties.Sec}</ol>

Time.Div=<h3>Time</h3>{Time.Sec}

Event.Div=<h3>Event</h3>{Event.Sec}

Validation.Div=<h3>Validation</h3>{P1.Sign.Block}{P2.Sign.Block}

Event.Sec=<h4>Access to Video</h4> {Agt.AccessVideo.Sec}

Validation.Sec=<h4>Signature by the Parties</h4><ol><li>{P1.Sign.Block}<li>{P2.Sign.Block}</ol>