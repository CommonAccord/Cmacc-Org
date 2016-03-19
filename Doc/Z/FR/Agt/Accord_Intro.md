Note=Pour parameteriser le nombre de parties et d'autres personnes.

Personnes.Sec={Parties.Sec}</li><li>{Amies.Sec}
 
Parties.Liste={Parties.Liste.2}

Amies.Liste={Amies.Liste.2}

Note=le document

Model.Root={Sec}

Sec=<ul type="none" style="padding-left: 0"><li>{Personnes.Sec}</li><li>{Date.Sec}</ul>{Que.Sec}{Conviennent.sec}

Parties.Sec=<b>{Parties.Ti}</b>{Parties.xliste}

Parties.xliste=<ul type="none"><li>{Parties.Liste}</li><li>{Parties.Def.sec}</ul>

Parties.Liste.2={P1.sec}</li><li>{P2.sec}

Parties.Liste.3={P1.sec}</li><li>{P2.sec}</li><li>{P3.sec}

Parties.Liste.4={P1.sec}</li><li>{P2.sec}</li><li>{P3.sec}</li><li>{P4.sec}

Parties.Liste.5={P1.sec}</li><li>{P2.sec}</li><li>{P3.sec}</li><li>{P4.sec}</li><li>{P5.sec}

Parties.Liste.6={P1.sec}</li><li>{P2.sec}</li><li>{P3.sec}</li><li>{P4.sec}</li><li>{P5.sec}</li><li>{P6.sec}

P1.1.sec={P1.Nom}

P1.2.sec={P1.FormeJuridique} au capital de {P1.CapitalEnLettres}

P1.3.sec=Immatriculée au RCS de {P1.RCS.Adresse.Ville} sous le numéro {P1.RCS.#}

P1.4.sec=Dont le siège social est situé {P1.Siège.Adresse.1,2}

P1.5.sec=Représentée par {P1.Sign.M/Mme-Nom} en qualité de {P1.Sign.Titre}, dûment habilité aux fins des présentes,

P1.6.sec=<div align="right">ci-après dénommé(e) la « {P1.Handle} »,</div>

P1.=[Z/paras/s6]


P2.1.sec={P2.Nom}

P2.2.sec={P2.FormeJuridique} au capital de {P2.CapitalEnLettres}

P2.3.sec=Immatriculée au RCS de {P2.RCS.Adresse.Ville} sous le numéro {P2.RCS.#}

P2.4.sec=Dont le siège social est situé {P2.Siège.Adresse.1,2}

P2.5.sec=Représentée par {P2.Sign.M/Mme-Nom} en qualité de {P2.Sign.Titre}, dûment habilité aux fins des présentes,

P2.6.sec=<div align="right">ci-après dénommé(e) la « {P2.Handle} »,</div>

P2.=[Z/paras/s6]

Note=for an individual: 

P2i.1.sec={P2.Nom}

P2i.2.sec=une personne physique

P2i.3.sec=Dont l'adresse est {P2.Adresse.1,2}

P2i.4.sec=<div align="right">ci-après dénommé(e) la « {P2.Handle} »,</div>

P2i.=[Z/paras/s4]



P3.1.sec={P3.Nom}

P3.2.sec={P3.FormeJuridique} au capital de {P3.CapitalEnLettres}

P3.3.sec=Immatriculée au RCS de {P3.RCS.Adresse.Ville} sous le numéro {P3.RCS.#}

P3.4.sec=Dont le siège social est situé {P3.Siège.Adresse.1,2}

P3.5.sec=Représentée par {P3.Sign.M/Mme-Nom} en qualité de {P3.Sign.Titre}, dûment habilité aux fins des présentes,

P3.6.sec=<div align="right">ci-après dénommé(e) la « {P3.Handle} »,</div>

P3.=[Z/paras/s6]


P4.1.sec={P4.Nom}

P4.2.sec={P4.FormeJuridique} au capital de {P4.CapitalEnLettres}

P4.3.sec=Immatriculée au RCS de {P4.RCS.Adresse.Ville} sous le numéro {P4.RCS.#}

P4.4.sec=Dont le siège social est situé {P4.Siège.Adresse.1,2}

P4.5.sec=Représentée par {P4.Sign.M/Mme-Nom} en qualité de {P4.Sign.Titre}, dûment habilité aux fins des présentes,

P4.6.sec=<div align="right">ci-après dénommé(e) la « {P4.Handle} »,</div>

P4.=[Z/paras/s6]


P5.1.sec={P5.Nom}

P5.2.sec={P5.FormeJuridique} au capital de {P5.CapitalEnLettres}

P5.3.sec=Immatriculée au RCS de {P5.RCS.Adresse.Ville} sous le numéro {P5.RCS.#}

P5.4.sec=Dont le siège social est situé {P5.Siège.Adresse.1,2}

P5.5.sec=Représentée par {P5.Sign.M/Mme-Nom} en qualité de {P5.Sign.Titre}, dûment habilité aux fins des présentes,

P5.6.sec=<div align="right">ci-après dénommé(e) la « {P5.Handle} »,</div>

P5.=[Z/paras/s6]



P6.1.sec={P6.Nom}

P6.2.sec={P6.FormeJuridique} au capital de {P6.CapitalEnLettres}

P6.3.sec=Immatriculée au RCS de {P6.RCS.Adresse.Ville} sous le numéro {P6.RCS.#}

P6.4.sec=Dont le siège social est situé {P6.Siège.Adresse.1,2}

P6.5.sec=Représentée par {P6.Sign.M/Mme-Nom} en qualité de {P6.Sign.Titre}, dûment habilité aux fins des présentes,

P6.6.sec=<div align="right">ci-après dénommé(e) la « {P6.Handle} »,</div>

P6.=[Z/paras/s6]

Parties.Ti=Entre les {parties} :

Parties.Def.sec=Dénommés individuellement une « {partie} » et collectivement  les « {parties} »



Amies.xliste=<ul type="none"><li>{Amies.Liste}<li>Dénommés individuellement une « {Partie_Tierce_Identifiée} » et collectivement  les « {Parties_Tierce_Identifiées} »</ul>

Amies.Ti=Des tierces mentionnés dans cette {Accord}:

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

Que.Sec=<ul type="none"><li>{Que.secs}</ul>

Conviennent.sec=il a été convenu ce qui suit :
