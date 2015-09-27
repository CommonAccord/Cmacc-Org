Heading.Sec=<center><span style="text-transform: uppercase">THIS INSTRUMENT AND ANY SECURITIES ISSUABLE PURSUANT HERETO HAVE NOT BEEN REGISTERED UNDER THE SECURITIES ACT OF 1933, AS AMENDED (THE "{Securities_Act}"), OR UNDER THE SECURITIES LAWS OF CERTAIN STATES.  THESE SECURITIES MAY NOT BE OFFERED, SOLD OR OTHERWISE TRANSFERRED, PLEDGED OR HYPOTHECATED EXCEPT AS PERMITTED UNDER THE ACT AND APPLICABLE STATE SECURITIES LAWS PURSUANT TO AN EFFECTIVE REGISTRATION STATEMENT OR AN EXEMPTION THEREFROM.</span></center>


secs={1.Sec}<br><br>{2.Sec}<br><br>{3.Sec}<br><br>{4.Sec}<br><br>{5.Sec}<br><br>{6.Sec}

1.Sec={P2.Name.Full}

2.Sec=SAFE  (Simple Agreement for Future Equity)

3.Sec=THIS CERTIFIES THAT in exchange for the payment by {P2.Name.Full} (the "{Investor}") of {InvestmentAmount.$} (the "{Purchase_Amount}") on or about {DateOfSafe}, {P1.N,E,A} (the "{Company}"), hereby issues to {the_Investor} the right to certain shares of {the_Company}'s capital stock, subject to the terms set forth below.

4.Sec=The "{Valuation_Cap}" is {ValuationCap.$}.  

5.Sec=The "{Discount_Rate}" is {Discount.%}.

6.Sec=See {Def.Xref} for certain additional defined terms.

Model.Root={Sec}

Sec={Heading.Sec}<br><br>{secs}