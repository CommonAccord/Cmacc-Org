Model.Root={EscrowAGT.Doc.Body}

EscrowAGT.Doc.Body={AGT.Prologue} {AGT._Secs} {AGT.Signature}

AGT.Prologue =<p><strong>ESCROW AGREEMENT</strong></p><p>{Intro.ThisAgreement}</p><p>{Intro.OtherPersons}</p><p>{Intro.Whereas}<br> {Intro.NowTherefore}</p>

Intro.ThisAgreement=This escrow agreement ("Escrow Agreement") is made and entered into on {Escrow.Effective.YMD} by and among:<ul><li>{Purchaser.N,E,A}, ("Purchaser"),</li><li>{Escrow.N,E,A}, ("Escrow Agent"),</li><li>{Seller.N,E,A} ("Seller"),</li></ul>as of {Escrow.Sign.YMD}.

Intro.OtherPersons=Additional persons referenced in this Agreement are:<ul><li>{Shipper.N,E,A} ("Shipper"); and</li><li>{Arbitrator.N,E,A} ("Arbitrator").</li></ul>

Intro.Whereas=<ul><li>{Intro.Whereas.TheAgreement};</li><li> {Intro.Whereas.TheDeposit};</li><li>{Intro.Whereas.AppointAgent};</li><li>{Intro.Whereas.AgentAccepts}; and</li><li>{Intro.Whereas.Arbitrator}.</li></ul>

Intro.Whereas.TheAgreement=WHEREAS, the Purchaser and the Seller have entered into a purchase agreement ("Purchase Agreement") for the sale to the Purchaser of {Product.Description} (the "Products") owned by the Seller in exchange for {Price.$} (the "Purchase Price") (altogether, the "Transaction")

Intro.Whereas.TheDeposit=WHEREAS, pursuant to said Purchase Agreement, the Purchaser has agreed to deposit the Purchase Price into an Escrow Account ("the Escrow Account")

Intro.Whereas.AppointAgent=WHEREAS, the Purchaser and the Seller have agreed to use the Escrow Agent to hold the Purchase Price and act as Escrow Agent

Intro.Whereas.AgentAccepts=WHEREAS, the Escrow Agent has agreed to act in such capacity upon the terms and conditions contained herein

Intro.Whereas.Arbitrator=WHEREAS, the Seller, Purchaser and Escrow Agent agree to use {Arbitrator.N,E,A} (the "Arbitrator") to resolve any disputes among them regarding the meaning of this Agreement or the performance of this Agreement, including any "Claim" as defined below

AGT._Secs =<ol><li>{Deposit._Sec}</li><li>{Pickup._Sec}</li><li>{Release._Sec}</li><li>{Cancellation._Sec}</li><li>{Claim._Sec}</li><li>{RelianceByEscrow._Sec}</li><li>{IndemnEscrow._Sec}</li><li>{AgentSubmitDispute._Sec}</li><li>{AgentFee._Sec}</li><li>{ArbitratorFee._Sec}</li><li>{Successor._Sec}</li><li>{AgentLimitLiab._Sec}</li><li>{Arbitration._Sec}</li><li>{Law._Sec}</li><li>{Notice._Sec}</li><li>{TechTrumps._Sec}</li></ol>


Intro.NowTherefore=NOW, THEREFORE, in consideration of the mutual premises and conditions contained herein, the Purchaser, the Seller and the Escrow Agent do hereby agree as follows:

Deposit._Sec=<u>Deposit of Funds</u>. The Purchaser has delivered funds equal to the Purchase Price to the Escrow Agent and the Escrow Agent acknowledges receipt of the Purchase Price.

Pickup._Sec=<u>Pickup</u>. The Seller promises to deliver the Products to the Shipper on or before {Pickup.Time.Max}.

Release._Sec=<u>Release of Payment</u>. The Escrow Agent shall release the Purchase Price to the Seller not less than {Delivery-Claim.Delay} and nor more than {Delivery-Payment.TimeSpan} after notification from the Shipper that it has delivered the Products to the Purchaser.

Cancellation._Sec=<u>Cancellation</u>. If the Seller fails to deliver the Products to the Shipper by {Pickup.Time.Max}, the Purchaser shall have the option to cancel the Transaction ("Cancellation") at any time after {Pickup.Time.Max} and before the Shipper notifies the Escrow Agent that Shipper has received the Products from Seller. If there is a Cancellation, the Escrow Agent shall return the Purchase Price to the Purchaser and the Purchaser shall have no other obligation to the Seller.

Claim._Sec=<u>Claim</u>. If the Purchaser notifies the Escrow Agent of a claim of defect in the Product (a "Claim") not later than {Delivery-Claim.Delay} after notification by the Shipper of delivery to the Purchaser, then the Escrow Agent shall not release the Purchase Price to the Seller while the Claim is being handled. The Escrow Agent shall notify the Seller, the Purchaser, and the Arbitrator of the existence of the Claim.

RelianceByEscrow._Sec=<u>Reliance by Escrow Agent</u>. The Escrow Agent may act in reliance upon any writing, instrument, or signature that the Escrow Agent, in good faith, believes to be genuine; and may assume any person purporting to give any notice, writing, advice, or instructions in connection with any provision herein has been duly authorized to do so.

IndemnEscrow._Sec=<u>Indemnification of Escrow Agent</u>. The Purchaser and the Seller agree to indemnify and hold harmless the Escrow Agent from any and all claims, liabilities, losses, expenses, actions, suits, or proceedings at law or in equity, or any other expense, fees, or charges of any character or nature whatever that it may incur by reason of acting as the Escrow Agent under this Escrow Agreement except for the Escrow Agent&rsquo;s gross negligence, bad faith or willful misconduct. The Escrow Agent shall not be required to institute or maintain any litigation unless indemnified to its satisfaction for its counsel fees, costs, disbursements and all other expenses and liabilities that it may be subjected to in connection with the aforesaid action.

AgentSubmitDispute._Sec=<u>Submission of Dispute by Escrow Agent</u>. If the Seller and the Purchaser disagree about the interpretation of this Escrow Agreement, about the rights and obligations of the parties, or the propriety of any action contemplated by the Escrow Agent hereunder, the Escrow Agent may submit such dispute to the Arbitrator. The Escrow Agent shall be indemnified for any costs, including reasonable attorney fees in connection with the aforesaid action.

AgentFee._Sec=<u>Fee for Escrow Agent</u>. For its services, the Escrow Agent shall receive {Escrow.Fee.$}.

ArbitratorFee._Sec=<u>Fee for Arbitrator</u>. In the event that the Arbitrator is notified of a Claim or otherwise informed of a dispute, the Arbitrator shall receive {ARB.Fee.$}.

Successor._Sec=<u>Successors</u>. The rights created by this Escrow Agreement shall inure to the benefit of, and the obligations created hereby shall be binding upon the successors and assigns of the Escrow Agent and all parties to this Escrow Agreement.

AgentLimitLiab._Sec=<u>Limit on Liability of Escrow Agent</u>. The Escrow Agent shall not be obligated to take any action that is not specifically set forth herein. In the event of a disagreement or dispute concerning the validity or interpretation of any condition of this Escrow Agreement, the dispute shall be resolved by the Arbitrator. In such event, the Escrow Agent shall be relieved of any other and further liability under this Escrow Agreement.

Arbitration._Sec=<u>Arbitration</u>. PLEASE READ THE FOLLOWING PARAGRAPH CAREFULLY BECAUSE IT REQUIRES THE PARTIES TO ARBITRATE DISPUTES AND LIMITS THE MANNER IN WHICH THE PARTIES CAN SEEK RELIEF.<br>The parties agree to arbitrate any dispute arising from these Terms or relating to the Site, except that the parties are not required to arbitrate any dispute in which either party seeks equitable or other relief for the alleged unlawful use of copyrights, trademarks, trade names, logos, trade secrets or patents. ARBITRATION PREVENTS THE PARTIES FROM SUING IN COURT OR FROM HAVING A JURY TRIAL.  The parties agree that the parties will notify each other of any dispute within thirty (30) days of when it arises, that the parties will attempt informal resolution prior to any demand for arbitration, that any arbitration will occur in {ARB.Seat.City} and that arbitration will be conducted confidentially by a single arbitrator in accordance with the rules of {ARB.Org}.  The parties also agree that the state or federal courts in {ARB.Court.County,State} have exclusive jurisdiction over any appeals of an arbitration award and over any suit between the parties not subject to arbitration. In any arbitration, the parties will not seek discovery from each other, and the arbitrator shall not allow parties to engage in discovery; rather, each party shall disclose the evidence supporting their positions at some mutually agreeable time and date prior to the final hearing. Other than class procedures and remedies discussed below, the arbitrator has the authority to grant any remedy that would otherwise be available in court. Neither party will participate in a class action or class-wide arbitration for any claims covered by these Terms. The parties also agree not to participate in claims brought in an private attorney general or representative capacity, or consolidated claims involving another person, if the other party is a party to the proceeding. If the prohibition against class actions and other claims brought on behalf of third parties contained above is found to be unenforceable, then that language shall be deemed to have been dropped from the Terms and the remaining obligations relating to arbitration shall continue in full force and effect.

Law._Sec=<u>Governing Law</u><br> This Escrow Agreement shall be construed and enforced in accordance with the laws of {ARB.State} without reference to its internal choice of law rules.

Notice._Sec=<u>Notices</u>.<br> All notices under this Agreement shall be delivered by electronic message using the "blockchain" technology through which this Agreement was entered.

TechTrumps._Sec=<u>Construction to Conform to Technical Implementation</u><br> The provisions of this Agreement are intended to express in legal language ("Text") the functioning of the software code that performs the transaction. Each party represents that it has access to the source code ("Code") and has made such inspection and analysis as it deems appropriate. In the event of any ambiguity in the text or conflict between the text and operation of the Code, the Code will be the definitive version.

AGT.Signature={Signature.InWitness}<br> {AGT.Signature.Block}

Signature.InWitness=IN WITNESS WHEREOF, the undersigned being all the parties to this Escrow Agreement have hereunto set their hands.<br> &#8194;

AGT.Signature.Block=SELLER:<br> {Seller.Sign.Block}</u><br> PURCHASER:<br> {Purchaser.Sign.Block}</u><br> ESCROW AGENT:<br> {Escrow.Sign.Block}</u><br> ARBITRATOR:<br> {Arbitrator.Sign.Block}


Seller.Handle=Seller
Purchaser.Handle=Purchaser
Escrow.Handle=Escrow Agent
Arbitrator.Handle=Arbitrator
Law.Of={Arbitrator.Law.Of}</li>
								      