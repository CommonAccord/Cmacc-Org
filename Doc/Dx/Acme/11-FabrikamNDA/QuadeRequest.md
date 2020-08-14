#Note=Acme GC Quade-Quinn input sheet

Work_Request=Please review the exceptions to confidentiality and provide us with a modified section if needed.  Please also give a quick reread of the entire agreement, our standard.

GeneralInstructions=Please respond in the related "QuadeResponse.md" page.  Please respond in one the following methods (increasing challenge and goodness): <ol type=i><li>Copy the complete section into an email, edit it and send to GC, we'll use our tech to unpack it into source format.<li>Copy the part that needs changing from the text referenced below as Quade.Except.=G/Agt-NDA-CmA/Sec/Relate/Conf/Except/Item/0.md] and send it by email.<li>Go to Github, open your account, then edit your response page at https://github.com/CommonAccord/FabrikamNDA/blob/master/QuadeResponse.md. Do your work there and make a pull-request on the /master/ branch (happy to answer questions).<li>Host your own version (we'll eagerly help you with that).  If you do an install, you'll be able to see your work in context immediately.</ol>

Matter_ID=543234

Work_Request_Type=Contract Review - SALI "T"

#Here are some resources for Quade's work.

#Note=This is a link to in-house counsel's draft v01. Go there and click "Document" to see the whole agreement:

=[Dx/Acme/11-FabrikamNDA/AcmeGC_v01.md]

#Note=This references (includes) the exceptions to confidentiality subsection that we'd like you to review. When you click on "Document" in this QuadeRequest page you'll get only the exceptions.

Model.Root={Relate.Conf.Except.Sec}

#Note=The library of our standard exceptions to confidentiality for your reference.  If you use some of these, you can include them as {Quade.Except.*} where "*" is the name of the snippet in the following:

Quade.Except.=[G/Agt-NDA-CmA/Sec/Relate/Conf/Except/Item/0.md]


#Note=If you think we need to make changes, please go to [Dx/Acme/11-FabrikamNDA/QuadeResponse.md] and write what you think is needed.


#Note=Our profile of you, which we'll also use for routing and billing.

P1.Counsel.=[G/U/Who/quade_and_quinn.md]