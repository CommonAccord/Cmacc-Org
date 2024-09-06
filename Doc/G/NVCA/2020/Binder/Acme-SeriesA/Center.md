Doc Forms:=(Click on the left side to see the rendered doc. Right side to navigate to the doc source. To see the doc rendered with info for each Investor, go to the Investor item, below.

Note=This lays out all the document resources for an NVCA transaction and has sample deal points. Each of the documents can be rendered in its base form and in its form for particular Investors and Directors.  All this is done by "prefixing".  E.g., {Investor.1.Voting.r00t} or {Investor.2.IRA.r00t}. You can also get parts of documents, for instance {Investor.3.SPA.Purchase.Sec}.

TermSheet.=[G/NVCA/2020/TermSheet/Form/0.md]

COI.=[G/NVCA/2020/COI/Form/0.md]

Indemn.=[G/NVCA/2020/Indemn/Form/0.md]

IRA.=[G/NVCA/2020/Binder/Acme-SeriesA/Form-IRA.md]

Note=This is a variant of the Voting Agreement that has "Sale Rights" and a Board of Two Preferred Directors.  Three other versions are available, follow the link to figure out how.

Voting.=[G/NVCA/2020/Voting/Form/Variant-SaleRights-BoardTwoPref-KH-CEO-Mut.md]

CDA.=[G/NVCA/2018/CDA/Form/0.md]

MRL.=[G/NVCA/2020/MRL/Form/0.md]

SPA.=[G/NVCA/2020/SPA/Form/0.md]

ROFR.=[G/NVCA/2020/ROFR/Form/0.md]

LicenseTermSheet.=[G/NVCA/2020/Binder/Acme-SeriesA/LicenseFrom-MIT.md]

Def.=[G/NVCA/2020/Share/TermsDefined.md]

Docs Customized for each Investor:=Click on left side to see the Term Sheet, then make substitions in the browser bar, e.g. "&k={Investor.1.SPA.r00t}" (without the brackets). Click on the right side to see the details of the Investor, including their purchase amount, when they signed, their Indemnitor, etc.

Investor.1.=[G/NVCA/2020/Binder/Acme-SeriesA/Investor-StateStreet.md]

Investor.2.=[G/NVCA/2020/Binder/Acme-SeriesA/Investor-Quake.md]

Investor.3.=[G/NVCA/2020/Binder/Acme-SeriesA/Investor-NIH.md]

Other Parties:=

Company.=[G/NVCA/2020/Binder/Acme-SeriesA/Company.md]

Director.1.=[G/NVCA/2020/Binder/Acme-SeriesA/Director-Andrews.md]

Director.2.=[G/NVCA/2020/Binder/Acme-SeriesA/Director-Ang.md]

Director.3.=[G/NVCA/2020/Binder/Acme-SeriesA/Director-Altima.md]

Investors.Counsel.=[G/U/Who/samuel_hardy.md]

Investors.Counsel.US.Personality.type.a=a law firm

DraftingCounsel.=[G/U/Who/quade_and_quinn.md]

KeyHolder.Rep.=[G/U/Who/state_street_corporation.md]

Investor.Rep.=[G/U/Who/abigail_altima.md]

VC.Org.Designation={Investor.1.Party.Name.Full}

Parameters:=

IND.SubmissionDate.YMD=2024-03-31

EffectiveDate.YMD=2022-12-05

ClosingDate.YMD=2022-12-29

Closing.Time.YMDHM=12:00 noon, Eastern Time on {ClosingDate.YMD}

OfferExpires.YMD=2022-12-24

Law.=[G/U/Place/US/DE/Geo]

Cap.=[G/NVCA/2020/Binder/Acme-SeriesA/Company-Cap.md]

DisputeForum.US.StateCourt.=[G/U/Place/US/DE/New_Castle/Wilmington/Geo]

DisputeForum.US.DistrictCourt.JudicialDistrict.Name=Delaware

MRL.Investors.Names.cl=the {_Investors} {Investor.1.Party.Name.Full} and {Investor.2.Party.Name.Full}

AmountRaised.$=$500,000

AmountRaised.ConvertSAFEs.$=$200,000

AmountRaised.ForClosingAtLeast.NumberOfShares.#=300,000

Valuation.PreMoney-Diluted.$=$3,000,000

Valuation.PostMoney-Diluted.$=$3,300,000

_Series_?_Preferred_Stock={_Series_A_Preferred_Stock}

Director.Additional.Number=one

Director.VotedByCommon.Number(#)=two (2)

Director.VotedBySeriesA.Number(#)=one (1)

DefT.Series_A_Preferred_Director/s={DefT.Series_A_Preferred_Director}

Director.VotedBySeriesA.IfAtLeastOutstanding.#/%=50%

Director.VotedBySeriesA.Number.each_a_=</>

Director.VotedByCommon.Directors.number(#)=two (2) directors

Director.VotedBySeriesA.Directors.number(#)=one (1) director

Board.Size.Number=five

PreferredDirectorApproval.AtLeast.NumberOf=one

PreferredDirectorApproval.,cl=, including the approval of {PreferredDirectorApproval.AtLeast.NumberOf} Preferred Director

SeriesAApprovalRequired.IfAtLeastOutstanding.#/%=50%

SeriesAApprovalRequired.ForTotalDebtMoreThan.$=$1,000,000

PreferredDirectorApproval.ForDebt.TotalMoreThan.$=$50,000

MajorInvestor.PurchaseAtLeast.$=$50,000

FounderStockVesting.First12Months.sec=3%

FounderStockVesting.Monthly.NumberOfMonths.#=32

No-Shop.Duration.days=30 days

IRA.PreferredDirectorApproval.NumberOfDirectors.1/All={PreferredDirectorApproval.NumberOfDirectors.All}

TermSheet.Voting.DragAlong.TransferOfControl.2.sec={TermSheet.Voting.DragAlong.TransferOfControl.2.Alt1.sec}

Investors.Counsel.Fee.Max.$=$30,000

Noncompete.KeyEmployee.Duration.year=one year

DirectorAppointment.SharesAtLeast.#=2%

KeyHolder.Director.Name.Full=Klaus Koenig

Contract.Life.EndDate.YMD=2025-12-31

Adoption.EffectiveDate.YMD={ClosingDate.YMD}

Financial.Quarter.FirstAfterClosing.EndDate.YMD=2023-03-31

Conf.Life.TimePeriod.Duration=three years

FutureRound.RightIsFor.Investor/MajorInvestor=Major Investor

CompanyKnows.ListOfOfficers={Company.President.Name.Full} and {Director.2.Party.Name.Full}

Registration.OnDemand.Offering.AggregatePrice.AtLeast.$=$5,000,000

Registration.OnDemand.AtLeastShareholdersOf.%=60%

Registration.OnDemand.PeriodAfterTheClosing.Duration.3-5years=four years

Registration.OnDemand.PeriodAfterIPO.Duration.six-months=six months

Registration.OnDemand.Max.one/two=two

Registration.Piggyback.ReduceAtCompanyDiscretionToNotLessThan.%=25%

Pay2Play.Round/DownRound.cl=down round

Registration.Termination.AfterIPO.Nth-anniversary=fourth anniversary

Registration.Form-S-3.AtLeastShareholdersOf.10-30%=20%

Registration.Form-S-3.IfAtLeastAggregateOfferingPriceOf.3-5-million.$=$4,000,000

Registration.Form-S-3.MaximumFrequency.PerYear.#=two (2) per twelve (12) month period

Registration.Expense.SpecialCounsel.Fee.Max.$=$50,000

PreferredDirectorApproval.ForCorporateRelationship.AssetTotalMoreThan.$=$500,000

Competitor.DescriptionOfBusiness.cl=crispr-based genomics

Sign.YMD={ClosingDate.YMD}

Voting.DragAlong.CommonRequiredToSignIfHoldingAtLeast.%=5%


TermSheet.Charter.ConversionMandatory.OPPMultiple.sec={TermSheet.Charter.ConversionMandatory.OPPMultiple.NotRequired.sec}

TermSheet.Charter.Dividend.sec={TermSheet.Charter.Dividend.CumulativeSpecified.sec}

TermSheet.Charter.Liquidation.PayPreferred.sec={TermSheet.Charter.Liquidation.PayPreferred.NonParticipating.sec}

TermSheet.Charter.SeriesAApprovalRequired.AmendCharter.sec={TermSheet.Charter.SeriesAApprovalRequired.AmendCharter.AdverseToSeriesA.sec}

TermSheet.Charter.SeriesAApprovalRequired.Crypto.sec={TermSheet.Charter.SeriesAApprovalRequired.Crypto.IncludingInvestorDirectors.sec}

TermSheet.Charter.Redemption.After5Years.Price.cl={TermSheet.Charter.Redemption.After5Years.Price.OPPwithDividends.cl}

TermSheet.IRA.Manage-Info.Investor.Reports.FinancialStatement.sec={TermSheet.IRA.Manage-Info.Investor.Reports.FinancialStatement.Monthly.sec}

TermSheet.Lock-Up.AgreedBy.cl=provided all directors and officers of the Company and 5% stockholders agree to the same lock-up

TermSheet.IRA.Manage-Info.sec={TermSheet.IRA.Manage-Info.Investor.sec}

TermSheet.IRA.Registration.Lock-Up.sec={TermSheet.IRA.Registration.Lock-Up.ProRataWaiver.sec}

TermSheet.IRA.Springing-CFIUS.InTheEvent.sec={TermSheet.IRA.Springing-CFIUS.InTheEvent.CFIUS-Requests.sec}

TermSheet.Offer.ClosingDate.sec={TermSheet.Offer.ClosingDate.SingleClosing.sec}

TermSheet.Offer.Raise.Convert.sec={TermSheet.Offer.Raise.Convert.SAFEs.sec}

TermSheet.Voting.Board.1.sec={TermSheet.Voting.Board.1.DesignatedByLeadInvestor.sec}

TermSheet.Cap.EmployeeOptionPool.Allocated.sec={TermSheet.Cap.EmployeeOptionPool.Allocated.No.sec}

TermSheet.Cap.SeriesA.Dividend.Pay.OnLiquidation.sec={TermSheet.Cap.SeriesA.Dividend.Pay.OnLiquidation.Yes.sec}

TermSheet.Cap.SeriesA.LiquidationPreference.Plus.sec={TermSheet.Cap.SeriesA.LiquidationPreference.Plus.DeclaredDividends.sec}

COI.Stock.Preferred.Dividend.sec={COI.Stock.Preferred.Dividend.CumulativeSpecified.sec}

COI.Stock.Preferred.Liquidate.1.Sec={COI.Stock.Preferred.Liquidate.1.NonParticipating.Sec}

COI.Stock.Preferred.Liquidate.2.Sec={COI.Stock.Preferred.Liquidate.2.NonParticipating.Sec}

COI.Stock.Preferred.OptionalConversion.4.4.sec={COI.Stock.Preferred.OptionalConversion.4.4.Weighted.sec}

COI.Stock.Preferred.MandatoryConversion.sec={COI.Stock.Preferred.MandatoryConversion.Alt1.sec}

COI.Resolution.10.sec={COI.Resolution.10.Alt1.sec}

Indemnity.ProvidedBy.Bylaws/Bylaws_and_COI?=Bylaws and Certificate of Incorporation

IRA.ExistingInvestors.HoldShares.AtLeast.percent(%)=five percent (5%)

IRA._Series_?_Preferred_Stock={_Series_A_Preferred_Stock}

ExistingInvestors.HoldShares.AtLeast.percent(%)=twenty percent (20%)

Note=Used in both IRA and ROFR:

Def.Preferred_Stock.sec={Def.Preferred_Stock.SeriesAOnly.sec}

Def.Registrable_Securities.CommonFromPreferred.sec={Def.Registrable_Securities.CommonFromPreferred.Base.sec}



IRA.managing_underwriter/underwriter=underwriter

IRA.PreferredDirector.ElectedBy.Class.Yes/No={Def.PreferredDirector.ElectedBy.Class.Yes}

IRA.PreferredDirector.ElectedBy.SeriesA.Yes/No={Def.PreferredDirector.ElectedBy.SeriesA.Yes}

IRA.Register.ByCompany.Common_Stock/securities={_Common_Stock}

IRA.Company/Board_of_Directors={_Company}


SellingHolderCounsel.Fee.Max.$=$35,000


Series_?_Preferred_Stock={_Series_A_Preferred_Stock}


CodersNote=Suggested range is 5 to 15 million. I picked 7 million.

IRA.Register.ByDemand.S-1.IfOfferingPrice.Exceeds.$=seven (7) million dollars

IRA.Register.ByDemand.S-3.IfOfferingPrice.Exceeds.$=four (4) million dollars

Register.ByDemand.S-3.Holders.of-at-least-percent=ten percent (10%)

IRA.Register.ByDemand.Delay.ByCompany.days=sixty (60) days

IRA.Register.CompanyDuty.ExtendForContinuous.days=60 days



Misc.ConsentToAmend.By.KeyHolder.%=60%

Misc.ConsentToAmend.By.KeyHolder.ProvidingServices.OfCapTotal.%=10%

Misc.ConsentToAmend.By.Common.%=60%

Successor.Transferee.BecomesBigHolder.Shares.Number=100,000

Def.NotRegistrable.IfIssuedUnderClause.0/1/1and2={Def.NotRegistrable.IfIssuedUnderClause.1and2}

CodersNote=Used in both the MRL. 

DefT.Series_?_Preferred_Stock={_Series_A_Preferred_Stock}

CompanyIP.InConduct.Used/Necessary={CompanyIP.InConduct.Used}

CompanyKnows.Actual/afterInvestigation={CompanyKnows.afterInvestigation}

CompanyKnows.ttCk9.Yes/No={CompanyKnows.ttCk9.Yes}

CompanyKnows.TtCk9-no.Yes/No={CompanyKnows.TtCk9-no.Yes}

CompanyKnows.TtCk9-it.Yes/No={CompanyKnows.TtCk9-it.Yes}

CompanyKnows.9ttCk9.Yes/No={CompanyKnows.9ttCk9.Yes}

CompanyKnows.TtCk9-none.Yes/No={CompanyKnows.TtCk9-none.Yes}

CompanyKnows.9ttCk9.Yes/No={CompanyKnows.9ttCk9.Yes}

ROFR.Ti.sec={ROFR.Ti.Alt2}

ROFR.Why.sec={ROFR.Why.Alt2.sec}

ROFR.That.sec={ROFR.That.Alt2.sec}

PriorROFR.Ti.a=a Acme First Right of First Refusal Agreement

PriorROFR.EffectiveDate.YMD=2021-01-03

Investor.FallsBelowMinROFR.Shares.#=5,000

Note=The ROFR Dispute Resolution section follows the SPA. Changing here to AAA-Arbitration. or DelawareRapidArbAct. will change both.  

LawyersNote=The original section 6.16 of the SPA on Dispute Resolution (and similar provisions in other agreements) seems to be composed of three alternatives: i) litigation, ii) AAA arbitration or iii) Delaware independent arbitration.  The sections in the original are presented in a somewhat confusing way, as if one chose i) litigation and then either ii) or iii).  But that doesn't make sense. So they are presented here as three alternatives.

LawyersNote=The Indemnification Agmt has a completely different law and dispute resoluton section.  That seems odd.

CodersNote=In the alternative iii), there are some cross-references to "this Section 6.15", which are obviously erronious.  This section is 6.16.  FIXED!!!

Def.FOIA.Party.Board.Determination.??={Def.FOIA.Party.Board.Determination.Alt1}

Def.Company_Intellectual_Property.Includes.mask_works.Yes/No={Def.Company_Intellectual_Property.Includes.mask_works.Yes}

Def.IndemnificationAgt.Indemnitee.director/andPurchaserAffiliates={Def.IndemnificationAgt.Indemnitee.andPurchaserAffiliates}

Def.IRA.Parties.Purchasers/andOtherStockholders={Def.IRA.Parties.Purchasers}

DelawareRapidArbAct.Arbitrator.Who.cl=Grace Justinian

DelawareRapidArbAct.ReplacementArbitrator.Who.cl=drawn from the NVCA's membership

DelawareRapidArbAct.AppellateArbitrators.Who.cl=drawn from the NVCA's membership

ROFR.Misc.DisputeResolution.Sec={ROFR.Misc.DisputeResolution.DelawareRapidArbAct.WithAppealTo3ArbsPerArbAct.Sec}

SPA.Misc.DisputeResolution.Sec={SPA.Misc.DisputeResolution.DelawareRapidArbAct.WithAppealTo3ArbsPerArbAct.Sec}

SPA.Company.SBC/SB={SPA.Company.SBC}

SPA.Closing/ApplicableClosing.cl={_Closing}

SPA.CompanyRep.FDA-Approvals.conduct-its-business/-as-now-conducted=conduct its business as now conducted

SPA.PayBySecurities.Interest.Yes/No={SPA.PayBySecurities.Interest.Yes}

SPA.AdditionalPurchasersMustBeApproved.Yes/No={SPA.AdditionalPurchasersMustBeApproved.Yes}

SPA.AdditionalPurchasersMustBeApproved.ByPercentOfPurchasers.%=51%

AmendAgreement.Approval.ShareHolder.%=51%

SPA.CompanyRep.Comply-Instruments.Law.to_its_knowledge.Yes/No={SPA.CompanyRep.Comply-Instruments.Law.to_its_knowledge.Yes} 

SPA.Company.AuthorizationAction.taken/will_be_taken=taken

SPA.Company.DeliverTransactionAgreements.taken/will_be_taken=taken

SPA.CompanyRep.Litigation.threatened/threatened_in_writing=threatened in writing

SPA.CompanyRep.Litigation.AgainstKeyEmployee./Arising={SPA.CompanyRep.Litigation.AgainstKeyEmployee.Arising}

SPA.CompanyRep.IP.can_acquire/believes_it_can_acquire=can acquire

SPA.CompanyRep.IP.PriorInventions.Institution./or_academic={SPA.CompanyRep.IP.PriorInventions.Institution.or_academic}

SPA.CompanyRep.IP.trademarks/registered_trademarks=registered trademarks

SPA.CompanyRep.IP.copyrights/registered_copyrights=registered copyrights

SPA.CompanyRep.Agreements.NoObligationsInExcessOf.$=$100,000

SPA.CompanyRep.Agreements.DebtNotinExcessOf.Individual.$=$150,000

CompanyRep.Agreements.DebtNotinExcessOf.Aggregate.$=$500,000

SPA.CompanyRep.NoDiscussionOfSale.WithinLast.months=three months

SPA.CompanyRep.unaudited/audited={SPA.CompanyRep.audited}

SPA.CompanyRep.FinancialStatement.Unaudited.MostRecent.YMD=2022-11-30

SPA.CompanyRep.FinancialStatement.UnauditedP&L.ForMostRecent.month-period=two month

SPA.CompanyRep.FinancialStatement.NoGAAPFootnotesForUnaudited.Yes/No={SPA.CompanyRep.FinancialStatement.NoGAAPFootnotesForUnaudited.Yes}

SPA.CompanyRep.Employee-Agreements.noncomp-and-nonsolicit/nonsolicit={SPA.CompanyRep.Employee-Agreements.nonsolicit}

SPA.CompanyRep.SBA.Section.121/107={SPA.CompanyRep.SBA.Section.121}

SPA.CompanyRep.DataPrivacy.1.2.sec={SPA.CompanyRep.DataPrivacy.1.2.PoliciesAndPublicStatements.sec}

SPA.CompanyRep.DataPrivacy.1.3.sec={SPA.CompanyRep.DataPrivacy.1.3.CodesOfConductAndPaymentCardDataSecurity.sec}

SPA.CompanyRep.DataPrivacy.PI.MaterialAdverseEffect.Yes/No={SPA.CompanyRep.DataPrivacy.PI.MaterialAdverseEffect.Yes} 

SPA.CompanyRep.Transactions.2.2.3.sec={SPA.CompanyRep.Transactions.2.2.3.MaterialContract.sec}

SPA.CompanyRep.Disclosure.Limit.reasonablyAvailable.Yes/No={SPA.CompanyRep.Disclosure.Limit.reasonablyAvailable.Yes} 

SPA.CompanyRep.DataPrivacy.1.3.sec={SPA.CompanyRep.DataPrivacy.1.3.CodesOfConduct.sec}

SPA.AdditionalPurchasersMustBeApproved.Yes/No={SPA.AdditionalPurchasersMustBeApproved.Yes} 

SPA.PurchaserCond.InvestorRightsAgt.sec={SPA.PurchaserCond.InvestorRightsAgt.SignByPurchasers.sec}

SPA.PurchaserCond.Closing.Initial/orSubsequent={SPA.PurchaserCond.Closing.Initial}

SPA.PurchaserRep.ShareLegends.sec={PurchaserRep.ShareLegends.NotRegistered.sec}<br>{SPA.PurchaserRep.ShareLegends.RequiredByTransactionAgreements.sec}

Voting.DragAlong.DifferentAllocation.Notice.days=10 days

PowerOfAttorney.To.President/Other.the=the President

CodersNote=Investor/MajorInvestor is used in three places, relating to three different things.  Please review to be sure that each wants to be the same. This can be nuanced with for instance, TermSheet.Investor/Major_Investor=one thing ... and IRA.Investor/Major_Investor=another thing.

Investor/Major_Investor=Major Investor

CompanyKnows.9ttbotCk.Yes/No={CompanyKnows.9ttbotCk.Yes}

CompanyKnows.9ttbotCk.Yes=, to the best of the Company's knowledge,

CompanyKnows.9ttbotCk.No=</>

CompanyKnows.9ttCk9.Yes=, to the Company's knowledge,

CompanyKnows.9ttCk9.No=</>

CompanyKnows.Actual=actual knowledge

CompanyKnows.afterInvestigation=actual knowledge after reasonable investigation and assuming such knowledge as the individual would have as a result of the reasonable performance of his or her duties in the ordinary course

CompanyKnows.TtCk9-it.Yes=To the Company's knowledge, it

CompanyKnows.TtCk9-it.No=It

CompanyKnows.TtCk9-no.Yes=To the Company's knowledge, no

CompanyKnows.TtCk9-no.No=No

CompanyKnows.TtCk9-none.No=None

CompanyKnows.TtCk9-none.Yes=To the Company's knowledge, none

CompanyKnows.ttCk9.Yes=to the Company's knowledge,

CompanyKnows.ttCk9.No=</>


KeyHolder.Rep.Handle=Key Holder Representative

Investor.Rep.Handle=Investor Representative

Mechanics:=

r00t={TermSheet.r00t}

Common Defined Terms:=

!!!=#

Def.!!!={!!!}DefT.

Def.SecName={SecName}Def.

COI.!!!={!!!}COI.

COI.SecName=COI.

COI.Link=<a href='{SourceRoot!!}COI.r00t'>Certificate of Incorporation Link</a>

SourceRoot!!=i.php?v=d&f=G/NVCA/2020/Binder/Acme-SeriesA/Center.md&{kParty!!!}

kParty!!!=k=

Indemn.!!!={!!!}Indemn.

Indemn.SecName=Indemn.

Indemn.Link=<a href='{SourceRoot!!}Indemn.r00t'>Indemnity Agreement Link</a>

IRA.!!!={!!!}IRA.

IRA.SecName=IRA.

IRA.Link=<a href='{SourceRoot!!}IRA.r00t'>Investor's Rights Agreement Link</a>

MRL.!!!={!!!}MRL.

MRL.SecName=MRL.

MRL.Link=<a href='{SourceRoot!!}MRL.r00t'>Management Rights Letter Link</a>

CDA.!!!={!!!}CDA.

CDA.SecName=CDA.

CDA.Link=<a href='{SourceRoot!!}CDA.r00t'>Confidential Disclosure Agreement Link</a>

ROFR.!!!={!!!}ROFR.

ROFR.SecName=ROFR.

ROFR.Link=<a href='{SourceRoot!!}ROFR.r00t'>Right of First Refusal Link</a>

SPA.!!!={!!!}SPA.

SPA.SecName=SPA.

SPA.Link=<a href='{SourceRoot!!}SPA.r00t'>Share Purchase Agreement Link</a>

TermSheet.!!!={!!!}TermSheet.

TermSheet.SecName={SecName}TermSheet.

TermSheet.Link=<a href='{SourceRoot!!}TermSheet.r00t'>Term Sheet Link</a>

Voting.!!!={!!!}Voting.

Voting.V1.!!!={!!!}Voting.V1.

Voting.V2.!!!={!!!}Voting.V2.

Voting.V3.!!!={!!!}Voting.V3.

Voting.V4.!!!={!!!}Voting.V4.

Voting.SecName=Voting.

Voting.Link=<a href='{SourceRoot!!}Voting.r00t'>Voting Agreement Link</a>

VotingDrag.!!!={!!!}VotingDrag.

Investor.1.!!!={!!!}Investor.1.

Investor.1.SecName={SecName}Investor.1.

Investor.2.!!!={!!!}Investor.2.

Investor.2.SecName=Investor.2.

Investor.3.!!!={!!!}Investor.3.

Investor.3.SecName=Investor.3.

Director.1.!!!={!!!}Director.1.

Director.1.SecName={SecName}Director.1.

Director.2.!!!={!!!}Director.2.

Director.2.SecName=Director.2.

Director.3.!!!={!!!}Director.3.

Director.3.SecName=Director.3.


LicenseTermSheet.!!!={!!!}LicenseTermSheet.

LicenseTermSheet.SecName=LicenseTermSheet.


Company.Handle={_Company}

Note=A kludge?

xSignature=__________________

Doc.GUID=AcmeSeriesA:{SecName}

SecName=</>

All.r00t={TermSheet.r00t} {COI.r00t} {Indemn.r00t} {IRA.r00t} {Voting.r00t} {CDA.r00t} {MRL.r00t} {SPA.r00t} {ROFR.r00t} {LicenseTermSheet.r00t}

ScheduleOfInvestors.sec=<table border=1>{HoldingRow.sec}</table>

HoldingRow.1.sec={Investor.1.Holding.tr}

HoldingRow.2.sec={Investor.2.Holding.tr}

HoldingRow.3.sec={Investor.3.Holding.tr}

HoldingRow.=[G/Z/para/s3]

ScheduleOfKeyHolders.sec=<table border=1>{KeyHolderRow.sec}</table>

KeyHolderRow.1.sec={Investor.1.Holding.tr}

KeyHolderRow.2.sec={Investor.3.Holding.tr}

KeyHolderRow.=[G/Z/para/s2]

Holding.tr=<tr!!><td valign='top'>Investor: {Investor.#}</td><td valign='top'> {Party.US.N/E/A}</td><td valign='top'>Shares: <br><b>{Shares.#}</b></td><td valign='top'>Percent:<br> <b>{Shares.%}</b></td><td valign='top'>Investment: <br><b>{Shares.$}</b></td></tr>

_=[G/NVCA/2020/Share/Z/Def/Link.md]

DefT.=[G/NVCA/2020/Share/Z/Def/Target.md]

tr!!=tr