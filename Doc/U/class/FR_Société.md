Model.Root=<ol><li>{Champs.Base}<li>FormeJuridique : {FormeJuridique}<li>Capital : {Capital}<li>RCS.Adresse.Ville: {RCS.Adresse.Ville}<li>RCS.# : {RCS.#}<li>Dirigeant1.Nom : {Dirigeant1.Nom}<li>Dirigeant1.Titre : {Dirigeant1.Titre}<li>{Partie.sec}</ol>

Partie.=[Z/FR/Agt/Partie_Morale_Bloc.md]

Sign.Bloc=<table><tr><td><b>{Nom}</b></td></tr><tr><td>par : {Dirigeant1.xSignature}<br><br>{Dirigeant1.Nom}, son {Dirigeant1.Titre}</td></tr><tr><td>Date : {Sign.Date}</td></tr></table>
  
Name.Full={Nom} {Entity}

Entity={FormeJuridique}

Siège.Adresse.1,2={Adresse.1} {Adresse.2}

Adresse.1={Adresse.Rue}

Adresse.Rue={Adresse.Rue.#} {Adresse.Rue.Nom}

Addr.City={Adresse.Ville}

Addr.1={Adresse.1}

Addr.2={Adresse.2}

Addr.1,2={Addr.1}, {Addr.2}

Addr.Zip={Adresse.CP}

Addr.City={Adresse.Ville}

Addr.Nation={Adresse.3}

=[U/class/FR_ID.md]