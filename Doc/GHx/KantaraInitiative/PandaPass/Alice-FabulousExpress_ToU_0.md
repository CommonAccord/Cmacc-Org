P3.=[U/id/fabulous_express_inc]

P3.Handle=<b>Delivery Company</b>

P3.Sign.=[U/id/barclay_c_berdan]

P3.Sign.Title=Customer Relations Manager

Intro.Parties.List={Intro.Parties.List.1,3}

End.Sign.List={End.Sign.List.1,3}

Note1=<b>Custom part for this transaction:</b>

P1.=[U/id/Alice]

P1.Handle=<b>Guest</b>

P2.=[U/id/halltune_inc]

P2.Handle=<b>Hotel</b>

Recite.secs={Recite.4.sec}<br>{Recite.1.sec}<br>{Recite.2.sec}<br>{Recite.5.sec}

Recite.4.sec="{P2.Handle}" means the hotel operated by {P2.Name.Full} situated at {P2.Addr.1,2}.

Recite.5.sec={P1.Handle} wishes to authorize {P3.Handle} to make a delivery directly to {P1.Handle}'s room at any time between {Access.Begin.YMDT} and {Access.End.YMDT}.  


Doc.GUID=Alice-FE-23456

EffectiveDate.YMD=2015-12-24

Access.Begin.YMDT=2015-12-25:08:00:00

Access.End.YMDT=2015-12-25:10:00:00

Roles.Sec=<b>Roles</b><br>In {this_Agreement}:<ol><li>{Role.P1.sec}<li>{Role.P3.sec}</ol>

Role.P3.sec={P3.Handle} has the role of {UMA.Requesting_Party}

UMA.Sections={UMA.Terminology.Sec}<li>{UMA.RqP.Sec}<li>{UMA.ASO.Sec}<li>{UMA.AuthzP.Sec}

Doc.Title=Delivery Agreement

=[Z/Agt/Agt_v01.md]

UMA.=[GH/KantaraInitiative/UMA-Text/0.md]

Misc.=[Wx/com/cooleygo/US/Consult/Sec/Misc_v01.md]

Misc.The_Consultant=A party

Misc.the_Consultant=a party

Misc.the_Client=the other party

Misc.5.sec={Misc.NDA.Entire.Alt1.sec}

Loss.Sec=<b>Loss or Compromise</b><br>{Notice.sec}

Note=Adrian - There are bilateral contracts between the operators of the lock (RSO) Alice as the AS operator (ASO), and Bob as responsible for the key (RqP)  These contracts must all include a provision for 
...

Notice.sec=Each party agrees to give notice to the other parties of the contract if the lock, AS, or key are lost or otherwise compromised.  

=[GHx/KantaraInitiative/PandaPass/Alice-HallTune_ToU_0.md]