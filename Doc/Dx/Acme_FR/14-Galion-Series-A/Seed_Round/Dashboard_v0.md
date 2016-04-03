Company.PreMoney.Value.$=500,000 Euros

Investor.All.Investment.Amount=Seventy Thousand Euros

MajorInvestorThreshold.$=20,000 Euros

Investor.Attorney.Reimburse.$=10,000 Euros

Company.Cap.Option.Unallocated.%=20%

For Investment Agreement=:

Company.Cap.Plan.Name=Acme Employee Stock Option Plan

PricePerShare.$=Two Euros

Company.Cap.Common.Outstanding.PreMoney.#=200,000


Company.Cap.Option.Reserve.#=50,000

Company.Cap.Option.Outstanding.#="0"

Company.Cap.Option.Unallocated.#=50,000

Investor.1.=[U/id/geraldine_graber]

Investor.1.Handle=Graber

Investor.1.Investment.Amount=50,000 Euros

Investor.1.Investment.NumberOfShares=25,000

Investor.1.Investment.IndebtednessCancelled=15,000 Euros

Investor.1.Investment.CashPayment=35,000 Euros

Investor.2.=[U/id/solomon_shirley]

Investor.2.Handle=Shirley

Investor.2.Investment.Amount=20,000 Euros

Investor.2.Investment.NumberOfShares=10,000

Investor.2.Investment.IndebtednessCancelled=5,000 Euros

Investor.2.Investment.CashPayment=15,000 Euros

Attys=</i>

Investor.1.Attorney.=[U/id/quade_and_quinn]

Investor.2.Attorney.=[U/id/quade_and_quinn]

Company.Director.Common.#={Founder.1.Name.Full}

Company.Director.Seed.#={Seed.Investor.1.Name.Full}

Company.Director.Mutual.#=Edouard Eventail

KeyHolder.Vest.Begin=January 1, 2018

Company.Register.State=France 

Document Mechanics=-

Investor-N.Row={Investor.1.Row}{Investor.2.Row}

Investor.Sign.Block=<table><tr><td>{Investor.1.Sign.Block}</td><td>{Investor.2.Sign.Block}</td></tr></table>