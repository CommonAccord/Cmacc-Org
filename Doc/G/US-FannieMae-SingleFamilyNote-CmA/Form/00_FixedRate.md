Model.Root={Note.Body}{Attach.Body}

Note.Body={Note.Prologue}<br>{Note.Secs}

Attach.Body=<b></b>

Note.Prologue=<center><b>{Note.Title}</b></center>{Note.Legend}<br><table><tr><td><b>{Note.Date}</b><br>[Date]</td><td><b>{Note.Sign.Place}</b><br>[City] [State]</td></tr><tr><td><b>{Home.Address}</b><br>[Property Address]</td></tr></table>

Note.Title=NOTE

Note.Legend={blank}

Promise.Title=BORROWER'S PROMISE TO PAY

Promise.tx=In return for a loan that I have received, I promise to pay U.S. {Loan.Principal.D$} (this amount is called "Principal"), plus interest, to the order of the Lender.  The Lender is {Lender.Identity.Full}.  I will make all payments under this Note in the form of cash, check or money order.<br>I understand that the Lender may transfer this Note.  The Lender or anyone who takes this Note by transfer and who is entitled to receive payments under this Note is called the "Note Holder."

Interest.Title=INTEREST

Interest.Sec={Interest.1.tx}<br>{Interest.2.tx}

Interest.1.tx=Interest will be charged on unpaid principal until the full amount of Principal has been paid.  I will pay interest at a yearly rate of {Loan.Interest.Rate.%}.

Interest.2.tx=The interest rate required by this Section {2} is the rate I will pay both before and after any default described in Section {6(B)} of this Note.

Pay.Title=PAYMENTS

Pay.A.Title=Time and Place of Payments

Pay.A.1.tx=I will pay principal and interest by making a payment every month.

Pay.A.2.tx=I will make my monthly payment on the {Pay.Month.Day} day of each month beginning on {Pay.Month.Start}.  I will make these payments every month until I have paid all of the principal and interest and any other charges described below that I may owe under this Note.  Each monthly payment will be applied as of its scheduled due date and will be applied to interest before Principal. If, on {Pay.Month.Last}, I still owe amounts under this Note, I will pay those amounts in full on that date, which is called the "Maturity Date."

Pay.A.3.tx=I will make my monthly payments at {Pay.Month.Place} or at a different place if required by the Note Holder.

Pay.B.Title=Amount of Monthly Payments

Pay.B.1.tx=My monthly payment will be in the amount of U.S. {Pay.Month.$}.

Prepay.Title=BORROWER'S RIGHT TO PREPAY

Prepay.1.tx=I have the right to make payments of Principal at any time before they are due.  A payment of Principal only is known as a "Prepayment."  When I make a Prepayment, I will tell the Note Holder in writing that I am doing so.  I may not designate a payment as a Prepayment if I have not made all the monthly payments due under the Note.

Prepay.2.tx={Prepay.2.1.tx} {Prepay.2.2.tx}

Prepay.2.1.tx=I may make a full Prepayment or partial Prepayments without paying a Prepayment charge.  The Note Holder will use my Prepayments to reduce the amount of Principal that I owe under this Note.  However, the Note Holder may apply my Prepayment to the accrued and unpaid interest on the Prepayment amount, before applying my Prepayment to reduce the Principal amount of the Note. 

Prepay.2.2.tx=If I make a partial Prepayment, there will be no changes in the due date or in the amount of my monthly payment unless the Note Holder agrees in writing to those changes.

Usury.Title=LOAN CHARGES

Usury.1.tx=If a law, which applies to this loan and which sets maximum loan charges, is finally interpreted so that the interest or other loan charges collected or to be collected in connection with this loan exceed the permitted limits, then:  (a) any such loan charge shall be reduced by the amount necessary to reduce the charge to the permitted limit; and (b) any sums already collected from me which exceeded permitted limits will be refunded to me. 

Usury.2.tx=The Note Holder may choose to make this refund by reducing the Principal I owe under this Note or by making a direct payment to me.  If a refund reduces Principal, the reduction will be treated as a partial Prepayment.

Default.Title=BORROWER'S FAILURE TO PAY AS REQUIRED

Default.A.Title=Late Charge for Overdue Payments

Default.A.tx=If the Note Holder has not received the full amount of any monthly payment by the end of {Late.After.Days} calendar days after the date it is due, I will pay a late charge to the Note Holder.  The amount of the charge will be {Late.Charge.%} of my overdue payment of principal and interest.  I will pay this late charge promptly but only once on each late payment.

Default.B.Title=Default

Default.B.tx=If I do not pay the full amount of each monthly payment on the date it is due, I will be in default.

Default.C.Title=Notice of Default

Default.C.tx=If I am in default, the Note Holder may send me a written notice telling me that if I do not pay the overdue amount by a certain date, the Note Holder may require me to pay immediately the full amount of Principal which has not been paid and all the interest that I owe on that amount.  That date must be at least 30 days after the date on which the notice is mailed to me or delivered by other means.

Default.D.Title=No Waiver By Note Holder

Default.D.tx=Even if, at a time when I am in default, the Note Holder does not require me to pay immediately in full as described above, the Note Holder will still have the right to do so if I am in default at a later time.

Default.E.Title=Payment of Note Holder's Costs and Expenses

Default.E.tx=If the Note Holder has required me to pay immediately in full as described above, the Note Holder will have the right to be paid back by me for all of its costs and expenses in enforcing this Note to the extent not prohibited by applicable law.  Those expenses include, for example, reasonable attorneys' fees.

Notice.Title=GIVING OF NOTICES 

Notice.1.tx=Unless applicable law requires a different method, any notice that must be given to me under this Note will be given by delivering it or by mailing it by first class mail to me at the Property Address above or at a different address if I give the Note Holder a notice of my different address. 

Notice.2.tx=Any notice that must be given to the Note Holder under this Note will be given by delivering it or by mailing it by first class mail to the Note Holder at the address stated in Section 3(A) above or at a different address if I am given a notice of that different address.

Joint.Title=OBLIGATIONS OF PERSONS UNDER THIS NOTE

Joint.1.tx=If more than one person signs this Note, each person is fully and personally obligated to keep all of the promises made in this Note, including the promise to pay the full amount owed.  Any person who is a guarantor, surety or endorser of this Note is also obligated to do these things.  Any person who takes over these obligations, including the obligations of a guarantor, surety or endorser of this Note, is also obligated to keep all of the promises made in this Note.  The Note Holder may enforce its rights under this Note against each person individually or against all of us together.  This means that any one of us may be required to pay all of the amounts owed under this Note.

Waive.Title=WAIVERS

00.Waive.1.tx=I and any other person who has obligations under this Note waive the rights of Presentment and Notice of Dishonor. 

Waive.2.tx="Presentment" means the right to require the Note Holder to demand payment of amounts due.  

Waive.3.tx="Notice of Dishonor" means the right to require the Note Holder to give notice to other persons that amounts due have not been paid.

Secure.Title=UNIFORM SECURED NOTE

Secure.1.tx=This Note is a uniform instrument with limited variations in some jurisdictions.  In addition to the protections given to the Note Holder under this Note, a Mortgage, Deed of Trust, or Security Deed (the "Security Instrument"), dated the same date as this Note, protects the Note Holder from possible losses which might result if I do not keep the promises which I make in this Note.  That Security Instrument describes how and under what conditions I may be required to make immediate payment in full of all amounts I owe under this Note.  Some of those conditions are described as follows:

00.Secure.A.tx=If all or any part of the Property or any Interest in the Property is sold or transferred (or if Borrower is not a natural person and a beneficial interest in Borrower is sold or transferred) without Lender's prior written consent, Lender may require immediate payment in full of all sums secured by this Security Instrument. However, this option shall not be exercised by Lender if such exercise is prohibited by Applicable Law.

Secure.B.tx=If Lender {exercises this option}, Lender shall give Borrower notice of acceleration.  The notice shall provide a period of not less than 30 days from the date the notice is given in accordance with Section {15} within which Borrower must pay all sums secured by this Security Instrument.  If Borrower fails to pay these sums prior to the expiration of this period, Lender may invoke any remedies permitted by this Security Instrument without further notice or demand on Borrower.

exercises this option=exercises this option

<b>Cross-References</b>=

2=2

3(A)=3.1

6(B)=6.2

15=15

Secure.A.tx={00.Secure.A.tx}

Note.Secs=<ol><li>{Promise.Sec}</li><li>{Interest.Sec}</li><li>{PayVary.Sec}</li><li>{Prepay.Sec}</li><li>{Usury.Sec}</li><li>{Default.Sec}</li><li>{Notice.Sec}</li><li>{Joint.Sec}</li><li>{Waive.Sec}</li><li>{Secure.Sec}</li>{Add.li}</ol>


Add.li=</i>

Promise.Sec=<u>{Promise.Title}</u><br>{Promise.tx}

Interest.Sec=<u>{Interest.Title}</u><br>{Interest.1.tx} {Interest.2.tx}

PayVary.Sec={Pay.Sec}

Pay.Sec=<u>{Pay.Title}</u><ol><li>{Pay.A.Sec}</li><li>{Pay.B.Sec}</li></ol>

Pay.A.Sec=<u>{Pay.A.Title}</u><br>{Pay.A.1.tx} {Pay.A.2.tx} {Pay.A.3.tx}

Pay.B.Sec=<u>{Pay.B.Title}</u><br>{Pay.B.1.tx}


Prepay.Sec=<u>{Prepay.Title}</u><br>{Prepay.1.tx} {Prepay.2.tx}

Usury.Sec=<u>{Usury.Title}</u><br>{Usury.1.tx} {Usury.2.tx}

Default.Sec=<u>{Default.Title}</u><ol><li>{Default.A.Sec}</li><li>{Default.B.Sec}</li><li>{Default.C.Sec}</li><li>{Default.D.Sec}</li><li>{Default.E.Sec}</li></ol>

Default.A.Sec=<u>{Default.A.Title}</u><br>{Default.A.tx}

Default.B.Sec=<u>{Default.B.Title}</u><br>{Default.B.tx}

Default.C.Sec=<u>{Default.C.Title}</u><br>{Default.C.tx}

Default.D.Sec=<u>{Default.D.Title}</u><br>{Default.D.tx}

Default.E.Sec=<u>{Default.E.Title}</u><br>{Default.E.tx}

Notice.Sec=<u>{Notice.Title}</u><br>{Notice.1.tx}<br>{Notice.2.tx}

Joint.Sec=<u>{Joint.Title}</u><br>{Joint.1.tx}

Waive.Sec=<u>{Waive.Title}</u><br>{Waive.1.tx} {Waive.2.tx} {Waive.3.tx}

00.Secure.Sec=<u>{Secure.Title}</u>  {Secure.1.tx}<ul><li>{Secure.A.tx}</li><li>{Secure.B.tx}</li></ul>

<b>Handles for state-specific provisions</br>=-

Waive.1.tx={00.Waive.1.tx}

Secure.Sec={00.Secure.Sec}

Secure.Sec={00.Secure.Sec}

<b>Pre-populating default choice</b>=-

Pay.Month.Place={Lender.Identity.Full}


blank=</i>