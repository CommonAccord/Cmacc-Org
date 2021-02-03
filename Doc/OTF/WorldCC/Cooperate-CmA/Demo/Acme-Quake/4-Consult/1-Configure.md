//=Acme and Quake decide that Quake will do some consulting for Acme.  They already have a relationship page from their Cooperation Agreement.

=[OTF/WorldCC/Cooperate-CmA/Demo/Acme-Quake/1-Connect.md]

//=They click on "Opens" and complete the form.

Why.sec={_P1} wishes to engage {_P2} to provide data security audits.

EffectiveDate.YMD=2017-05-25

AgtLife.End.YMD=2017-12-31

AgtLife.Renew.TimeSpan=three-month periods

Conf.Life.End.YMD=2020-12-31

AgtLife.NonRenew.Notice.TimeSpan=one-month

AgtStop.ByP1WithoutCause.TimeSpan=one-month

AgtStop.ByP2WithoutCause.TimeSpan=three-months

BreachCure.TimeSpan=fifteen days

//=The NDA was mutual, but now the confidentiality engagement is one-way, protecting Acme's information.

Conf.Intro.=[OTF/WorldCC/Cooperate-CmA/Sec/Relate/Conf/Intro/-P1-to-P2/0.md]

//=We select a variation on Force Majeure.

Limit.ForceMajeure.=[OTF/WorldCC/Cooperate-CmA/Sec/Relate/Limit/ForceMajeure/-Mitigate/-LowCost/0.md]

//=In the "Entire Agreement" section, the parties reference their two existing agreements and specify the impact of this Consulting Agreement on those agreements.

Entire.Past.sec=The {_parties} terminate their {NDA.Doc.Ti} dated {NDA.EffectiveDate.YMD}, and replace it with the terms of this {Doc.Ti}, including the terms of {Conf.Xref}.  The {Cooperate.Doc.Ti} dated {Cooperate.EffectiveDate.YMD} continues and is not replaced.  In the event of any conflict, the terms of this {Doc.Ti} have priority over the terms of the {Cooperate.Doc.Ti}.

Cooperate.=[OTF/WorldCC/Cooperate-CmA/Demo/Acme-Quake/2-Cooperate.md]

NDA.=[OTF/WorldCC/Cooperate-CmA/Demo/Acme-Quake/3-NDA.md]   

//=They reference the Consulting Agreement form.

=[OTF/WorldCC/Cooperate-CmA/Form/-Consult/0.md]