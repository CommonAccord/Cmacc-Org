Model.Root=<b>This is the series of five documents:</b> <ol><li><b>Conflict Check</b><br>{Conflict.Sec}<li><b>RFP</b><br>{RFP.Sec}<li><b>Pricing</b><br>{Pricing.Sec}<li> <b>Counsel Questionnaire</b><br>{Counsel.Questionnaire.Sec}<li> <b>Guidelines</b><br>{Guidelines.Sec}</ol>

#Note=Links to persons involved

Company.Contact.=[G/U/Who/andrea_ang.md]

Company.=[G/U/Who/acme_incorporated.md]

Client.=[G/U/Who/acme_ie.md]

Counterparty.=[G/U/Who/fabrikam_incorporated.md]

Counsel.=[G/CLOC/Demo/Acme-QuadeCounsel.md]

#Note=Links to the document forms:

Conflict.=[G/CLOC/Matter-Project/Long-Form/Nov2019/Conflict-Check/0.md]

RFP.=[G/CLOC/Matter-Project/Long-Form/Nov2019/RFP/0.md]

Pricing.=[G/CLOC/Matter-Project/Long-Form/Nov2019/Pricing/0.md]

Counsel.Questionnaire.=[G/CLOC/Matter-Project/Long-Form/Nov2019/CounselQuestionnaire/0.md]

Guidelines.=[G/CLOC/OutsideCounselGuidelines/Form/0.md]  

Matter.Description.Title=Outsourcing Agreement

Matter.Description.Short.a/an=an {Matter.Description.Title} for logistics

Counsel.Response.Deadline.YMD=2020-08-31


#Note=Data for RFP:

Matter.WorkDescription.Short.cl=Draft and negotiate {Matter.Description.Short.a/an}

Matter.WorkDescription.Long.sec=To draft and negotiate to completion {Matter.Description.Short.a/an}, beginning with a model form and deal points negotiated by our business team, including due diligence. 

Matter.SupportingDocuments.sec=<ol><li>Acme-Fabrikam Heads of Agreement on Outsourcing Agreement<li>Fabrikam schedule of costs</ol>

Matter.Objectives.sec=To achieve a balanced agreement that reduces Acme IE's risks but provides a base for a long-term relationship.

RFP.below/attached={RFP.below}

#Note=Data for Pricing:

Pricing.Model.sec={Pricing.Model.Fixed.sec}

Pricing.Table.Description.Fixed.sec={Matter.WorkDescription.Long.sec}  With expectation of a two-month engagement to completion, with 200 aggregate hours of work.


#Note=Data for Guidelines:

Invoice.Frequency.cl={calendar/fiscal} month

Invoice.Delay.DiscountPerMonth.%=5%

Invoice.Pay.Currency.Schedule.Xref=Appendix Z

Invoice.Submit.Deadline.cl=the last day of the {calendar/fiscal} month

calendar/fiscal=calendar

AccrualReport.LatePenalty.$=$10,000

AccrualReport.LatePenalty.Rachet.$=$2,000

Invoice.Deminimus.Threshhold.$=$500

Guidelines.EffectiveDate.YMD=2020-08-24

Invoice.Payment.Within.days=30 days

Invoice.SoftwarePlatform.Name=Billings-R-We-App

Vendor.CourtReporting.Name.Full=Accurrrus Reporters

Vendor.TranslationServices.Name.Full=Ubersetzt Traducteurs Limited

#Note=Selecting Alternative A for the Dispute Resolution provisions.  (This can be recast with semantic labels.)
Guidelines.Appendix.Dispute.sec={Guidelines.Appendix.Dispute.AltA.sec}

Arbitration.Institution.cl=JAMS of Northern California

Arbitration.Seat=Santa Clara County, California

ApplicableLaw.the=the State of California

Court.Venue.cl=federal district court in and for the Northern District of California or the Superior Court of Santa Clara County, California

#Note=The texts to be rendered.

