Note=These are the terms of the Note.  The Note is instantiated in all of the four forms of the SAFE - Cap, Discount, Cap_Discount and MFN. 

Amount.$=$50,000

Funded.YMD=September 27, 2015

ValuationCap.$=$2,000,000

Discount.%=8%

Company.=[G/U/id/acme_incorporated.md]

Company.xSignature=xA-Altima-95M3ncQz9r

Company.Sign.YMD=September 28, 2015

Investor.=[G/U/id/andrea_ang.md]

Investor.xSignature=xA-Ang-w4lDIn925u

Investor.Sign.YMD=September 27, 2015

Law.=[G/U/at/US/CA/Geo]




Model.Root=<b>Investment Note</b><br><table><tr><td>Company:</td><td>{Company.Name.Full}</td></tr><tr><td>Amount of the Note:</td><td>{Amount.$}</td></tr><tr><td>Date Funded:  </td><td>{Funded.YMD}</td></tr><tr><td>Agreed Valuation:  </td><td>{ValuationCap.$}</td></tr><tr><td>Discount Rate:  </td><td>{Discount.%}</td></tr><tr><td>Applicable Law:  </td><td>{Law.State}</td></tr><tr><td>Signatures:</td></tr><tr><td valign="top">{Company.Name.Full}:<ul type=none><li>{Company.Signer.Name.Full}<li>{Company.Sign.YMD}</ul></td><td valign="top">{Investor.Name.Full}:<ul type=none><li>{Company.Sign.YMD}</ul></td></tr></table>
