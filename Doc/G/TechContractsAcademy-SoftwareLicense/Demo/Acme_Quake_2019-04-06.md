Note=This demonstration uses the Tech Contracts Academy form of Software License (next link).  It references the Vendor, the Customer and the Escrow Agent for the software escrow.  It then lists the deal points.  For some of the deal points, it references a template for the "Merlin Product," instead of repeating each of those deal points here.  It also references California as providing the governing law and San Francisco as the forum for dispute resolution.  (Referencing the objects for California and San Francisco improves the computability of the contract.  The machine can accurately conclude that this contract is subject to California law and SF forum because the document references the objects for those places, using standard referents (Law. and Dispute.).  When hosted in a graph database, a query for all contracts subject to California law or SF forum can easily find this contract by looking for backlinks from the objects for California and San Francisco.

Note=To see the full agreement, click on "Document" in the menu above.      

Note=Here is the form of agreement:

=[G/TechContractsAcademy-SoftwareLicense/Form/0.md]

Note=Here are the parties:

Vendor.=[G/U/id/acme_incorporated.md]

Customer.=[G/U/id/quake_incorporated.md]

Note=and the Escrow Agent:

SoftwareEscrow.Agent.=[G/U/id/state_street_corporation.md]

Note=Now for the particulars:

Doc.GUID=Acme-Quake-2019-04-06

EffectiveDate.YMD=April 2, 2019

ConcurrentUsers.Max.#=20

DownloadAvailableNotLaterThan.Days=5 business days

Documentation.NumberOfCopies.#=5

Acceptance.MaxPeriodForResponse.Days=20 business days

RedeliverWithIn.Days=10 business days

LicenseFee.$=$5,000

LicenseFee.PaymentDueBeforeTerm.Days=5 days

MaintenanceFee.$=$1,000

LicenseFee.Increase.Max.CPI-Plus.%=5%

LicenseFee.Increase.PriorNotice.Days=60 days

ConfInfo.ConfirmInWriting.Period=15 days

ConfInfo.Life.Period=3 years

LimitVendorLiability.Max.$=$30,000

Milestone.1.$=$7,000

Milestone.2.$=$7,000

Milestone.3.$=$11,000

Note=Some of the particulars come from a template:  (ToDo: it would be better to restate the parameter names to permit prefixing.)

=[G/TechContractsAcademy-SoftwareLicense/Demo/Acme_StandardParamenters_MerlinProduct.md]

Note=Confidentiality is Mutual.

ConfInfo.Def.Direction.sec={ConfInfo.Def.Direction.Mutual.sec}

Law.=[G/U/at/US/CA/Geo]

Dispute.=[G/U/at/US/CA/San_Francisco/San_Francisco/Geo]

RateSchedule.Name=Acme Software Rate Schedule

RateSchedule.Xref=