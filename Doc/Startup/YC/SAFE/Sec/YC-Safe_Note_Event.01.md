Ti=Events

1.Ti={Equity_Financing}

1.1.Sec=If there is an {Equity_Financing} before the expiration or termination of {this_instrument}, {the_Company} will automatically issue to {the_Investor} a number of shares of {Safe_Preferred_Stock} equal to the {Purchase_Amount} divided by either: (1) the {Safe_Price} or (2) the {Discount_Price}, whichever calculation results in a greater number of shares of {Safe_Preferred_Stock}.


1.2.Sec=In connection with the issuance of {Safe_Preferred_Stock} by {the_Company} to {the_Investor} pursuant to this {Event.Xref}: 

1.2.1.Sec={The_Investor} will execute and deliver to {the_Company} all transaction documents related to the {Equity_Financing}; provided, that such documents are the same documents to be entered into with the purchasers of {Standard_Preferred_Stock}, with appropriate variations for the {Safe_Preferred_Stock} if applicable, and provided further, that such documents have customary exceptions to any drag-along applicable to {the_Investor}, including, without limitation, limited representations and warranties and limited liability and indemnification obligations on the part of {the_Investor}; and

1.2.2.Sec={The_Investor} and {the_Company} will execute a {Pro_Rata_Rights_Agreement}, unless {the_Investor} is already included in such rights in the transaction documents related to the {Equity_Financing}.

1.2.=[Z/ol/2]

1.=[Z/ol/2]

2.Ti={Liquidity_Event}

2.1.Sec=If there is a {Liquidity_Event} before the expiration or termination of {this_instrument}, {the_Investor} will, at its option, either (i) receive a cash payment equal to the {Purchase_Amount} (subject to the following paragraph) or (ii) automatically receive from {the_Company} a number of shares of {Common_Stock} equal to the {Purchase_Amount} divided by the {Liquidity_Price}, if {the_Investor} fails to select the cash option. 

2.2.Sec=In connection with {Event.Liquidity.1.Xref}, the {Purchase_Amount} will be due and payable by {the_Company} to {the_Investor} immediately prior to, or concurrent with, the consummation of the {Liquidity_Event}. If there are not enough funds to pay {the_Investor} and holders of other {Safes} (collectively, the "{Cash-Out_Investors}") in full, then all of {the_Company}'s available funds will be distributed with equal priority and pro rata among the {Cash-Out_Investors} in proportion to their {Purchase_Amounts}, and the {Cash-Out_Investors} will automatically receive the number of shares of {Common_Stock} equal to the remaining unpaid {Purchase_Amount} divided by the {Liquidity_Price}.  In connection with a {Change_of_Control} intended to qualify as a tax-free reorganization, {the_Company} may reduce, pro rata, the {Purchase_Amounts} payable to the {Cash-Out_Investors} by the amount determined by its board of directors in good faith to be advisable for such {Change_of_Control} to qualify as a tax-free reorganization for U.S. federal income tax purposes, and in such case, the {Cash-Out_Investors} will automatically receive the number of shares of {Common_Stock} equal to the remaining unpaid {Purchase_Amount} divided by the {Liquidity_Price}.

2.=[01/Agt/Bit/Secs/02]

3.Ti={Dissolution_Event}

3.sec=If there is a {Dissolution_Event} before {this_instrument} expires or terminates, {the_Company} will pay an amount equal to the {Purchase_Amount}, due and payable to {the_Investor} immediately prior to, or concurrent with, the consummation of the {Dissolution_Event}. The {Purchase_Amount} will be paid prior and in preference to any {Distribution} of any of the assets of {the_Company} to holders of outstanding {Capital_Stock} by reason of their ownership thereof. If immediately prior to the consummation of the {Dissolution_Event}, the assets of {the_Company} legally available for distribution to {the_Investor} and all holders of all other {Safes} (the "{Dissolving_Investors}"), as determined in good faith by {the_Company}'s board of directors, are insufficient to permit the payment to the {Dissolving_Investors} of their respective {Purchase_Amounts}, then the entire assets of {the_Company} legally available for distribution will be distributed with equal priority and pro rata among the {Dissolving_Investors} in proportion to the {Purchase_Amounts} they would otherwise be entitled to receive pursuant to this {Event.Dissolution.Xref}.

4.Ti=Termination

4.sec={This_instrument} will expire and terminate (without relieving {the_Company} of any obligations arising from a prior breach of or non-compliance with {this_instrument}) upon either (i) the issuance of stock to {the_Investor} pursuant to {Event.Equity.Xref} or {Event.Liquidity.2.Xref}; or (ii) the payment, or setting aside for payment, of amounts due {the_Investor} pursuant to {Event.Liquidity.1.Xref} or {Event.Dissolution.Xref}.

=[Z/ol/4]

Event.Equity.Xref={Event.Xref}.1

Event.Liquidity.Xref={Event.Xref}.2

Event.Liquidity.1.Xref={Event.Xref}.2.1

Event.Liquidity.2.Xref={Event.Xref}.2.2

Event.Dissolution.Xref={Event.Xref}.3
