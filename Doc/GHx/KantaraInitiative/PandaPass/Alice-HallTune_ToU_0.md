Note1=<b>Custom part for this transaction:</b>

P1.Handle=<b>Guest</b>

P1.=[U/id/Alice]

P2.Handle=<b>Hotel</b>

P2.=[U/id/halltune_inc]

Doc.GUID=Alice-HP-12345

EffectiveDate.YMD=2015-12-23

Residence.Begin.YMDT=2015-12-24:18:00:00

Residence.End.YMDT=2015-12-25:12:00:00

Room.#=345


Note2=<b>Standard part - can be a form:</b>

Recite.secs={Recite.1.sec}<br>{Recite.2.sec} {Recite.3.sec}

Recite.1.sec={P1.Handle} is a guest at {P2.Handle} staying from {Residence.Begin.YMDT} to {Residence.End.YMDT} in room {Room.#}.

Recite.2.sec={P2.Handle} uses an electronic key system for accessing rooms and other facilities and allows guests to use their own authorization systems.

Recite.3.sec=(Some services incur additional charges.)

Roles.Sec=<b>Roles</b><br>In {this_Agreement}:<ol><li>{Role.P1.sec}<li>{Role.P2.sec}</ol>

UMA.Sections={UMA.Terminology.Sec}<li>{UMA.RSO.Sec}<li>{UMA.ASO.Sec}<li>{UMA.AuthzP.Sec}

=[GHx/KantaraInitiative/PandaPass/Form_0.md]