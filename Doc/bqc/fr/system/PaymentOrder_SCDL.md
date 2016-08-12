Ti=High-level (and low accuracy) list of functions 

1.Ti=On filling the Payment Order  (Check)

1.1.sec=Validate that the Payment Amount is Available in the Account

1.2.sec=Validate that P2 Exists and Not Under Restriction, No Duplicate Check in the Pipeline

1.3.sec=Stage for Signature - Notify Signer 

1.=[Z/ol/s3] 

2.Ti=On Signing Payment Order  (Check)

2.1.sec=Validate Signature of P1.Signer

2.2.sec=Send Authenticated Copy of Signed Check to B2

2.3.sec=Put a Reserve on the Account, Set a Timer for Estimated Time Before Check is Presented

2.=[Z/ol/s3] 

3.Ti=On Receipt By B2 of Payment Order

3.1.sec=Validate P2 Exists and No Restriction

3.2.sec=Notify P2 of Arrival of Check, Set Timer for a Reminder

3.=[Z/ol/s2] 

4.Ti=Upon P2 signature

4.sec=Stage for Deposit - Notify P2 Deposit Agent if Exists.

4.=[Z/ol/Base] 

5.Ti=Upon Deposit

5.1.sec=Create Provisional Credit to Balance in P2 Account

5.2.sec=Present Payment Order to B1 

5.=[Z/ol/s2] 

6.Ti=Upon Presentment

6.1.sec=Transfer Funds from the provisional charge on P1 Account to the B1 Account

6.2.sec=Transfer Funds from B1 Account to B2 Account - convert Provisional Credit to actual funds

6.3.sec=Send notice of Acceptance to B2

6.4.sec=Transfer Funds from B2 Account to P2 Account

6.5.sec=Complete the copy of all elements to the accounts of P1 and P2.

6.=[Z/ol/s5]

=[Z/ol/6] 


