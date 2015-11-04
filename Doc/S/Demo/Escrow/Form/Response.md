Model.Root={Response.Doc.Body}

Response.Doc.Body=<p>&#8194;</p><p>Seller's Response to Notice of Claim:</p><p>&#8194;</p><p>To: {Purchaser.N,A} &#8194;"Purchaser"</p><p>From: {Seller.N,A} "Seller"</p>	<p>CC: {Escrow.N,A} "Escrow Agent"</p><p>Date: {Response.YMD}</p><p>Claim Date: {Claim.YMD}</p><p>Re: Claim</p><p> {Purchaser.Dear}:</p><p>Thank you for your Notice of Claim.  {Seller.I/We} greatly regret that you had a problem with our shipment of {Product.Description}  </p><p>Thank you also for your offer to settle this matter by: {Purchaser.Remedy.Description}  <p>{Accept/Reject}</p><p></p><p>{Seller.Sign.Block}</p>
	        
Accept={Seller.I/We} are pleased to inform you that {Seller.I/we} have accepted your proposal.

Reject={Seller.I/We} would like to propose that instead of your offer, {Seller.I/we} will {Seller.Counterproposal}        