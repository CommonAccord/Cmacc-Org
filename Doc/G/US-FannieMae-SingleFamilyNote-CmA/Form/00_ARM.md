=[G/US-FannieMae-SingleFamilyNote-CmA/Form/00_FixedRate.md]

<b>Parameters for One Year</b>=-

X_Year=1 Year

xth_month=12th month

x_year=one year

x_months=12 months

<b>Other Text</b>=-

Note.Title=ADJUSTABLE RATE NOTE

Note.Legend=({X_Year} Treasury Index -- Rate Caps)<br>THIS NOTE CONTAINS PROVISIONS ALLOWING FOR CHANGES IN MY INTEREST RATE AND MY MONTHLY PAYMENT.  THIS NOTE LIMITS THE AMOUNT MY INTEREST RATE CAN CHANGE AT ANY ONE TIME AND THE MAXIMUM RATE I MUST PAY.

Interest.2.tx=The interest rate I will pay will change in accordance with Section 4 of this Note.  The interest rate required by this Section 2 and Section 4 of this Note is the rate I will pay both before and after any default described in Section {7(B)} of this Note.

Pay.Month.Day=first

PayVary.Sec={Pay.Sec}</li><li>{Variable.Sec}

Pay.Sec=<u>{Pay.Title}</u><ol><li>{Pay.A.Sec}</li><li>{Pay.B.Sec}</li><li>{Pay.C.Sec}</li></ol>

Pay.B.Title=Amount of Initial Monthly Payments

Pay.B.1.tx=Each of my initial monthly payments will be in the amount of U.S. {Pay.Month.$}.  This amount may change.

Pay.C.Sec=<u>{Pay.C.Title}</u><br>{Pay.C.1.tx}

Pay.C.Title=Monthly Payment Changes

Pay.C.1.tx=Changes in my monthly payment will reflect changes in the unpaid principal of my loan and in the interest rate that I must pay.  The Note Holder will determine my new interest rate and the changed amount of my monthly payment in accordance with Section 4 of this Note.


Prepay.2.2.tx=If I make a partial Prepayment, there will be no changes in the dates of my monthly payment unless the Note Holder agrees in writing to those changes.  My partial Prepayment may reduce the amount of my monthly payments after the first Change Date following my partial Prepayment.  However, any reduction due to my partial Prepayment may be offset by an interest rate increase.


Secure.A.tx={00.Secure.A.tx}</li><li>{5-2.Secure.A.1.tx}

5-2.Secure.A.1.tx=Lender also shall not exercise this option if:  (a) Borrower causes to be submitted to Lender information required by Lender to evaluate the intended transferee as if a new loan were being made to the transferee; and (b) Lender reasonably determines that Lender's security will not be impaired by the loan assumption and that the risk of a breach of any covenant or agreement in this Security Instrument is acceptable to Lender.<br>To the extent permitted by Applicable Law, Lender may charge a reasonable fee as a condition to Lender's consent to the loan assumption.  Lender may also require the transferee to sign an assumption agreement that is acceptable to Lender and that obligates the transferee to keep all the promises and agreements made in the Note and in this Security Instrument.  Borrower will continue to be obligated under the Note and this Security Instrument unless Lender releases Borrower in writing.

Variable.Sec=<u>INTEREST RATE AND MONTHLY PAYMENT CHANGES</u><ol><li><u>Change Dates</u><br>The interest rate I will pay may change on the first day of {Variable.Begin.Month}, and on that day every {xth_month} thereafter.  Each date on which my interest rate could change is called a "Change Date."</li><li><u>The Index</u><br>Beginning with the first Change Date, my interest rate will be based on an Index.  The "Index" is the weekly average yield on United States Treasury securities adjusted to a constant maturity of {x_year}, as made available by the Federal Reserve Board. The most recent Index figure available as of the date 45 days before each Change Date is called the "Current Index."<br>If the Index is no longer available, the Note Holder will choose a new index which is based upon comparable information.  The Note Holder will give me notice of this choice.</li><li><u>Calculation of Changes</u><br>	Before each Change Date, the Note Holder will calculate my new interest rate by adding {Variable.Margin.per%} to the Current Index.  The Note Holder will then round the result of this addition to the nearest one-eighth of one percentage point (0.125%).  Subject to the limits stated in Section {4(D)} below, this rounded amount will be my new interest rate until the next Change Date.<br>The Note Holder will then determine the amount of the monthly payment that would be sufficient to repay the unpaid principal that I am expected to owe at the Change Date in full on the Maturity Date at my new interest rate in substantially equal payments.  The result of this calculation will be the new amount of my monthly payment.</li><li><u>Limits on Interest Rate Changes</u><br>The interest rate I am required to pay at the first Change Date will not be greater than {Variable.Cap.%} or less than {Variable.Floor.%}.  Thereafter, my interest rate will never be increased or decreased on any single Change Date by more than {Variable.Annual.Max.per%} from the rate of interest I have been paying for the preceding {x_months}.  My interest rate will never be greater than {Variable.Cap.2.%}.</li><li><u>Effective Date of Changes</u><br>My new interest rate will become effective on each Change Date.  I will pay the amount of my new monthly payment beginning on the first monthly payment date after the Change Date until the amount of my monthly payment changes again.</li><li><u>Notice of Changes</u><br>The Note Holder will deliver or mail to me a notice of any changes in my interest rate and the amount of my monthly payment before the effective date of any change.  The notice will include information required by law to be given to me and also the title and telephone number of a person who will answer any question I may have regarding the notice.</li></ol>

4(D)=4.4

7(B)=7.2

<b>Note</b>=In the section on Uniform Secured Note, there is a textual variation between the fixed and the adjustable rate notes.

exercises this option=exercises the option to require immediate payment in full

<b>5-1 / 5-2</b>=-

Variable.Annual.Max.per%=<b>Variable.Annual.Max.per% Select:</b><ol><li><b>5-1.Variable.Annual.Max.per%</b> {5-1.Variable.Annual.Max.per%}</li><li><b>5-2.Variable.Annual.Max.per%</b> {5-2.Variable.Annual.Max.per%}</li></ol>

5-1.Variable.Annual.Max.per%=one percentage point (1.0%)

<b>5-2</b>=-

5-2.Variable.Annual.Max.per%=two percentage points (2.0%)
