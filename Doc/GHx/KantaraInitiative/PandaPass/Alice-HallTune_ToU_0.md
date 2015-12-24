Note1=<b>Custom part for this transaction:</b>

P1.=[U/id/Alice]

P1.Handle=<b>Guest</b>

P2.=[U/id/halltune_inc]

P2.Handle=<b>Hotel</b>

Recite.secs={P1.Handle} is a guest at {P2.Handle} staying from {Residence.Begin.YMDT} to {Residence.End.YMDT} in room {Room.#}.<br>{P2.Handle} uses an electronic key system for accessing rooms and other facilities and allows guests to use their own authorization systems. (Some services offered incur additional charges.)

Doc.GUID=Alice-HP-12345

EffectiveDate.YMD=2015-12-23

Residence.Begin.YMDT=2015-12-24:18:00:00

Residence.End.YMDT=2015-12-25:12:00:00

Room.#=345

  
Note2=<b>Standard part - can be a form:</b>


Secs={Definitions.Sec}<li>{UMA.RSO.Sec}<li>{UMA.ASO.Sec}<li>{UMA.AuthzP.Sec}<li>{Loss.Sec}<li>{Misc.Sec}

Definitions.Sec=<b>Definitions</b><br>In {this_Agreement}:<ol><li>{Def.AuthzP.sec}<li>{Def.ASO.sec}<li>{Def.RSO.sec}</ol>

Def.AuthzP.sec={UMA.Authorizing_Party} means {P1.Handle}.

Def.ASO.sec={UMA.Authorization_Server_Operator} means {P1.Handle}.

Def.RSO.sec={UMA.Resource_Server_Operator} means {P2.Handle}.

Doc.Title=Key Agreement

=[Z/Agt/Agt_v01.md]

UMA.=[GH/KantaraInitiative/UMA-Text/0.md]

Misc.=[Wx/com/cooleygo/US/Consult/Sec/Misc_v01.md]

Misc.The_Consultant=A party

Misc.the_Consultant=a party

Misc.the_Client=the other party

Misc.5.sec={Misc.NDA.Entire.Alt1.sec}

Loss.Sec=<b>Loss or Compromise</b><br>{Notice.sec}

Note=Adrian - There are bilateral contracts between the operators of the lock (RSO) Alice as the AS operator (ASO), and Bob as responsible for the key (RqP)  These contracts must all include a provision for 

Notice.sec=Each party agrees to give notice to the other parties of the contract if the lock, AS, or key are lost or otherwise compromised.