Note=This step shows Acme, which is a member of the community agreement, extending the agreement into its own Affiliates.  The Affiliates sign this Agreement with Acme Inc. as Lead Party.  The Miscellaneous section "Entire Agreement" clause references the community agreement as the "parent" of the current one.  This could also be chained if, for instance, Acme had a group of companies in one country or a group of contracting parties that it wished to include, while maintaining a hierarchy of legal relationships and customizations. 

Doc.GUID=Acme-001

Sign.YMD=2018-05-06

P1.=[G/U/id/acme_incorporated.md]

_P1=<a href="#P1.Handle" class="definedterm">Acme</a>

Parent.=[G/Intra-Group-Data-Transfer-Agt/Demo/Step2_Acme_HHS_as_Initial_Members.md]

Law.cl=state and federal laws of the State of California, USA

Misc.EntireAgreement.sec=This {_Agreement} represents the entire understanding between the {_Parties} in relation to its subject matter and supersedes all agreements and representations made by the {_Parties}, whether oral or written in relation to its subject matter.  The {_Parties} acknowledge that the {_Lead_Entity} is a party to a {Parent.Doc.Ti} among the {_Lead_Entity} and other entities dated {Parent.EffectiveDate.YMD}.  This {_Agreement} will be interpreted to be consistent with that {Parent.Doc.Ti}.

Sub1.P2.=[G/U/id/acme_ie.md]

Sub2.P2.=[G/U/id/acme_sarl.md]

Sub1.P2.Handle=Acme Eire

Sub2.P2.Handle=Acme France

Group.InitialMembers.sec=<ol><li>{Sub1.P2.US.Contract.Among.Sec}<li>{Sub2.P2.US.Contract.Among.Sec}</ol>

Annex.ParticipationAgreement.Doc=<ol><li>{Sub1.Doc}<li>{Sub2.Doc}</ol>

=[G/Intra-Group-Data-Transfer-Agt/Form/0.md]
