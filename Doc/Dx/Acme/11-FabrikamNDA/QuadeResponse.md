#Note from AcmeGC:=

#Note=Quade-Quinn input sheet.  Please do your work here.  The link to QuadeRequest has the assignment and resources.  

#Note=QuadeRequest [Dx/Acme/11-FabrikamNDA/QuadeRequest.md]

#Note=Quade Basic form of Confidentiality Exceptions:

Relate.Conf.Except.=[G/Agt-NDA-CmA/Sec/Relate/Conf/Except/0.md]



#Quade Response:=

#Quade Comment on Exceptions=We think that in the circumstances it is too easy for Fabrikam to improperly exploit the "Made" and "Found" exceptions to Confidentiality.  We therefore propose to use the WasPublic, BecomesPublic and Had exceptions instead of your full set.

Relate.Conf.Except.Item.xlist=<ol>{Relate.Conf.Except.Item.WP-BP-Had.li}</ol>

#Quade Comment on Had=We suggest this minor change to the "Had" exception - using "before" instead of "at the time." Simpler, more natural language, clearer. 

Relate.Conf.Except.Item.Had.cl=was in {_Receiving_Party}'s possession free of any obligation of confidence before it was disclosed to {_Receiving_Party}

#Quade Comment on Notices.  We think the fax notice provision is inappropriate. {Personal.li};{Overnight.li};{Fax.li}; or {Mail.li} Instead, we suggest:

Relate.Notice.=[G/Agt-NDA-CmA/Sec/Relate/Notice/0.md]

Relate.Notice.Olist=<ol>{Relate.Notice.Personal.li};{Relate.Notice.Overnight.li}; or {Relate.Notice.Mail.li}</ol>

ShowMe1={Relate.Conf.Except.Sec}  <br> {Relate.Notice.Sec}