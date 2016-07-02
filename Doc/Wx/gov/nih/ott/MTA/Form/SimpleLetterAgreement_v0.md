Source=<a href="http://www.ott.nih.gov/sites/default/files/documents/pdfs/slaform.pdf">NIH Form (pdf)</a>

Model.Root={DocBody}

DocBody={Heading}{Intro}{Sections}{Signature}

Heading=<center><b>{Agt.Title}</b></center>

Agt.Title=Simple Letter Agreement for the Transfer of Materials

Intro=In response to RECIPIENT's request for the MATERIAL <font color="magenta">{Material.Description}</font> the PROVIDER asks that the RECIPIENT and the RECIPIENT SCIENTIST agree to the following before the RECIPIENT receives the MATERIAL: 
Sections=<ol><li>{1.sec}</li><li>{2.sec}</li><li>{3.sec}</li><li>{4.sec}</li><li>{5.sec}</li><li>{6.sec}</li><li>{7.sec}</li><li>{8.sec}</li></ol>

1.sec=The above MATERIAL is the property of the PROVIDER and is made available as a service to the research community. 

2.sec=THIS MATERIAL IS NOT FOR USE IN HUMAN SUBJECTS. 

3.sec=The MATERIAL will be used for teaching or not-for-profit research purposes only. 

4.sec=The MATERIAL will not be further distributed to others without the PROVIDER's written consent. The RECIPIENT shall refer any request for the MATERIAL to the PROVIDER. To the extent supplies are available, the PROVIDER or the PROVIDER SCIENTIST agree to make the MATERIAL available, under a separate Simple Letter Agreement to other scientists for teaching or not-for-profit research purposes only.

5.sec=The RECIPIENT agrees to acknowledge the source of the MATERIAL in any publications reporting use of it.
 
6.sec={6.1.sec}  {6.2.sec}  {6.3.sec}

6.1.sec=Any MATERIAL delivered pursuant to this Agreement is understood to be experimental in nature and may have hazardous properties.

6.2.sec=THE PROVIDER MAKES NO REPRESENTATIONS AND EXTENDS NO WARRANTIES OF ANY KIND, EITHER EXPRESSED OR IMPLIED. THERE ARE NO EXPRESS OR IMPLIED WARRANTIES OF MERCHANTABILITY OR FITNESS FOR A PARTICULAR PURPOSE, OR THAT THE USE OF THE MATERIAL WILL NOT INFRINGE ANY PATENT, COPYRIGHT, TRADEMARK, OR OTHER PROPRIETARY RIGHTS. 

6.3.sec=Unless prohibited by law, Recipient assumes all liability for claims for damages against it by third parties which may arise from the use, storage or disposal of the Material except that, to the extent permitted by law, the Provider shall be liable to the Recipient when the damage is caused by the gross negligence or willful misconduct of the Provider.

7.sec=The RECIPIENT agrees to use the MATERIAL in compliance with all applicable statutes and regulations. 

8.sec=The MATERIAL is provided at no cost, or with an optional transmittal fee solely to reimburse the PROVIDER for its preparation and distribution costs. If a fee is requested, the amount will be indicated here: <font color="magenta">{Fee.$}</font> 

Signature={Sign.Intro}<br>{P1.Sign.Block}<br>{P1.Officer.Certify}<br><br>{P2.Sign.Block}<br>{P2.Scientist.Certify}

Sign.Intro=The PROVIDER, RECIPIENT and RECIPIENT SCIENTIST must sign both copies of this letter and return one signed copy to the PROVIDER. The PROVIDER will then send the MATERIAL. 

P1.Sign.Block=<span style="text-transform: uppercase">{P1.Handle}</span> INFORMATION and AUTHORIZED SIGNATURE <br>{P1.Handle} Scientist: {P1.Scientist.Name.Full}</font> <br>{P1.Handle} Organization:  <font color="magenta">{P1.Name.Full}</font> <br>Address: <font color="magenta">{P1.Adr.1,2}</font> <br>Name of Authorized Official: <font color="magenta">{P1.Officer.Name.Full}</font> <br>Title of Authorized Official: <font color="magenta">{P1.Officer.Title}</font> 

P1.Handle=Provider

P1.Officer.Certify=Certification of Authorized Official: This Simple Letter Agreement <font color="magenta">{has/has not}</font> been modified.<br><font color="magenta">{P1.Officer.xSignature}</font><br> Signature of Authorized Official<br><font color="magenta">{P1.Sign.YMD}</font><br> Date 

P2.Handle=Recipient
P2.Sign.Block=<span style="text-transform: uppercase">{P2.Handle}</span> INFORMATION and AUTHORIZED SIGNATURE <br>{P2.Handle} Scientist: <font color="magenta">{P2.Scientist.Name.Full}</font> <br>{P2.Handle} Organization:  <font color="magenta">{P2.Name.Full}</font> <br>Address: <font color="magenta">{P2.Adr.1,2}</font> <br>Name of Authorized Official: <font color="magenta">{P2.Officer.Name.Full}</font> <br>Title of Authorized Official: <font color="magenta">{P2.Officer.Title}</font> 

P2.Scientist.Certify=Certification of Recipient Scientist: I have read and understood the conditions outlined in this Agreement and I agree to abide by them in the receipt and use of the MATERIAL. <br><font color="magenta">{P2.Scientist.xSignature}</font> <br>Date<br><font color="magenta">{P2.Scientist.Sign.YMD}</font>
