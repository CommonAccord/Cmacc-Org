Note=Base for form agreements.

P1.Handle=<b>Guest</b>

P2.Handle=<b>Hotel</b>

P3.Handle=<b>Delivery Company</b>

Recite.1.sec={P1.Handle} is a guest at {P2.Handle} staying from {Residence.Begin.YMDT} to {Residence.End.YMDT} in room {Room.#}.

Recite.2.sec={P2.Handle} uses an electronic key system for accessing rooms and other facilities and allows guests to use their own authorization systems.

Recite.3.sec=(Some services incur additional charges.)

Recite.4.sec="{P2.Handle}" means the hotel operated by {P2.Name.Full} situated at {P2.Adr.1,2}.

Recite.5.sec={P1.Handle} wishes to authorize {P3.Handle} to make a delivery directly to {P1.Handle}'s room at any time between {Access.Begin.YMDT} and {Access.End.YMDT}.  

Recite.6.sec={P1.Handle} means {P1.Name.Full} of {P1.Adr.1,2}.

Recite.7.sec={P3.Handle} wishes to obtain authorization from {P2.Handle} to make a delivery directly to {P1.Handle}'s room.  

Secs={Roles.Sec}<li>{UMA.Terminology.Sec}<li><b>UMA Obligations</b><ol><li><i>{UMA.Obligations}</i></ol><li>{Loss.Sec}<li>{Misc.Sec}

Role.P1.sec={P1.Handle} has the roles of {UMA.Authorizing_Party} and {UMA.Authorization_Server_Operator}.

Role.P2.sec={P2.Handle} has the role of {UMA.Resource_Server_Operator}.

Role.P3.sec={P3.Handle} has the role of {UMA.Requesting_Party}


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
