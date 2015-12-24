Note1=<b>Custom part for this transaction:</b>

P1.=[U/id/Alice]

P1.Handle=<b>Guest</b>

P2.=[U/id/halltune_inc]

P2.Handle=<b>Hotel</b>

Recite.secs={Recite.1.sec}<br>{Recite.2.sec} {Recite.3.sec}

Recite.1.sec={P1.Handle} is a guest at {P2.Handle} staying from {Residence.Begin.YMDT} to {Residence.End.YMDT} in room {Room.#}.

Recite.2.sec={P2.Handle} uses an electronic key system for accessing rooms and other facilities and allows guests to use their own authorization systems.

Recite.3.sec=(Some services incur additional charges.)

Doc.GUID=Alice-HP-12345

EffectiveDate.YMD=2015-12-23

Residence.Begin.YMDT=2015-12-24:18:00:00

Residence.End.YMDT=2015-12-25:12:00:00

Room.#=345

  Note2=<b>Standard part - can be a form:</b>

Secs={Roles.Sec}<li><i>{UMA.Sections}</i><li>{Loss.Sec}<li>{Misc.Sec}

Roles.Sec=<b>Roles</b><br>In {this_Agreement}:<ol><li>{Role.P1.sec}<li>{Role.P2.sec}</ol>

UMA.Sections={UMA.Terminology.Sec}<li>{UMA.RSO.Sec}<li>{UMA.ASO.Sec}<li>{UMA.AuthzP.Sec}

Role.P1.sec={P1.Handle} has the roles of {UMA.Authorizing_Party} and {UMA.Authorization_Server_Operator}.

Role.P2.sec={P2.Handle} has the role of {UMA.Resource_Server_Operator}.

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