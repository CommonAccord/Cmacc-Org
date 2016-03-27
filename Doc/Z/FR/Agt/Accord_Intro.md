Note=Pour parameteriser le nombre de parties et d'autres personnes.

Personnes.Sec={Parties.Sec}</li><li>{Amies.Sec}
 
Parties.Liste={Parties.Liste.2}

Amies.Liste={Amies.Liste.2}

Note=le document

Model.Root={Sec}

Sec=<ul type="none" style="padding-left: 0"><li>{Personnes.Sec}</li><li>{Date.Sec}</ul>{Que.Sec}{Conviennent.sec}

Parties.Sec=<b>{Parties.Ti}</b>{Parties.xliste}

Parties.xliste=<ul type="none"><li>{Parties.Liste}</li><li>{Parties.Def.sec}</ul>

Parties.Liste.2={P1.Partie.sec}</li><li>{P2.Partie.sec}

Parties.Liste.3={P1.Partie.sec}</li><li>{P2.Partie.sec}</li><li>{P3.Partie.sec}

Parties.Liste.4={P1.Partie.sec}</li><li>{P2.Partie.sec}</li><li>{P3.Partie.sec}</li><li>{P4.Partie.sec}

Parties.Liste.5={P1.Partie.sec}</li><li>{P2.Partie.sec}</li><li>{P3.Partie.sec}</li><li>{P4.Partie.sec}</li><li>{P5.Partie.sec}

Parties.Liste.6={P1.Partie.sec}</li><li>{P2.Partie.sec}</li><li>{P3.Partie.sec}</li><li>{P4.Partie.sec}</li><li>{P5.Partie.sec}</li><li>{P6.Partie.sec}

Parties.Ti=Entre les {parties} :

Parties.Def.sec=Dénommés individuellement une « {partie} » et collectivement  les « {parties} »


Amies.xliste=<ul type="none"><li>{Amies.Liste}<li>Dénommés individuellement une « {Partie_Tierce_Identifiée} » et collectivement  les « {Parties_Tierce_Identifiées} »</ul>

Amies.Ti=Des tierces mentionnés dans cette {Accord} :

Amies.Sec=<b>{Amies.Ti}</b>{Amies.xliste}

Amies.Liste.2={Amie1.sec}</li><li>{Amie2.sec}

Amies.Liste.3={Amie1.sec}</li><li>{Amie2.sec}</li><li>{Amie3.sec}

Amies.Liste.4={Amie1.sec}</li><li>{Amie2.sec}</li><li>{Amie3.sec}</li><li>{Amie4.sec}

Amies.Liste.5={Amie1.sec}</li><li>{Amie2.sec}</li><li>{Amie3.sec}</li><li>{Amie4.sec}</li><li>{Amie5.sec}

Amies.Liste.6={Amie1.sec}</li><li>{Amie2.sec}</li><li>{Amie3.sec}</li><li>{Amie4.sec}</li><li>{Amie5.sec}</li><li>{Amie6.sec}

Amie1.sec={Amie1.N,E,A} ("{Amie1.Role}")

Amie2.sec={Amie2.N,E,A} ("{Amie2.Role}")

Amie3.sec={Amie3.N,E,A} ("{Amie3.Role}")

Amie4.sec={Amie4.N,E,A} ("{Amie4.Role}")

Amie5.sec={Amie5.N,E,A} ("{Amie5.Role}")

Amie6.sec={Amie6.N,E,A} ("{Amie6.Role}")

Date.Sec=DATE EFFECTIVE: {Effective.Date} (la « {Date_de_l'Accord} » )

Que.Sec=<b>{Que.Ti}</b><ul type="none"><li>{Que.secs}</ul>

Que.Ti=Preambule :

Conviennent.sec=il a été convenu ce qui suit :