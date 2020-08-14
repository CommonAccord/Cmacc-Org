#Note=Quade-Quinn input sheet

Work_Request=Please review the exceptions to confidentiality and provide us with a modified section if needed.  Please also give a quick reread of the entire agreement, our standard.

Matter_ID=543234

Work_Request_Type=Contract Review

#Note=This is a link to in-house counsel's draft v01. Go there and click "Document" to see the whole agreement:

=[Dx/Acme/11-FabrikamNDA/AcmeGC_v01.md]

#Note=This references (includes) the exceptions to confidentiality subsection that we'd like you to review. When you click on "Document" here you'll get only the exceptions.

Model.Root={Relate.Conf.Except.Sec}

#Note=If you think we need to make changes, remove the leading "#" and write what you think is needed:

#Relate.Conf.Except.1.xlist=<ol><li>{Quade complete this ????}</li></ol>



#Note=The library of our standard exceptions to confidentiality for your reference.  If you use some of these, you can include them as {Quade.Except.*} where "*" is the name of the snippet in the following:

Quade.Except.=[G/Agt-NDA-CmA/Sec/Relate/Conf/Except/Item/0.md]


#Note=Our profile of you, which we'll also use for routing and billing.

P1.Counsel.=[G/U/Who/quade_and_quinn.md]

GeneralInstructions=Please respond in one the following ways: 1) Copy this whole page into an email, edit and send it to AcmeGC, we'll handle updating the repo. ii) Go to Github, open your account, then edit this page at github.com/CommonAccord/cmacc-org/Doc/Dx/Acme/11-FabrikamNDA/QuadeQuinn.md and do a pull-request. iii) host your own version (we'll help you with that.)


