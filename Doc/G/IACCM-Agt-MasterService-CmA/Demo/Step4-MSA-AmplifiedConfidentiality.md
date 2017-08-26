/=To demonstrate the flexibility of Prose Objects, we now override the Confidentiality Section of the original agreement and patch in a form that is our favorite (originally from CooleyGo but substantially modified).  This is a complex override, because the MSA defines "Confidential Information" in the text of the confidentiality provision, instead of as part of the list of the defined terms.  The override will be much simpler when we move the definition of Confidential Information.  

/=We override Confidentiality:

Conf.=[G/Agt-NDA-CmA/Sec/Relate/Conf/0.md]

_P1={_Customer}

_P2={_Provider}

Def.Confidential_Information.=[G/Agt-NDA-CmA/Sec/Def/Confidential_Information/0.md]

Conf.xlist=<ol>{Conf.Engage.LI}{Conf.Life.LI}{Conf.Except.LI}<li><b>Definition of Confidential Information</b><br>{Def.Confidential_Information.sec}</ol>

=[G/IACCM-Agt-MasterService-CmA/Demo/Step3-MSA-FullText.md]