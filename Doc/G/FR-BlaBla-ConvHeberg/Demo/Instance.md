# Convention d'Hébergement — Instance spécifique à compléter pour chaque bénéficiaire
# Ce fichier instancie la convention en liant le Form au paramétrage BlaBla
# et aux données propres à la bénéficiaire accueillie.

# ── Héritage ────────────────────────────────────────────────────────────────
# Le Form et les paramètres BlaBla sont importés par référence de fichier.
# Dans un déploiement Cmacc, on utiliserait :
#JGH - removed leading "# " and prefixes. Now it renders well.

=[G/FR-BlaBla-ConvHeberg/Form/0.md]
=[G/FR-BlaBla-ConvHeberg/Asso/BlaBla.md]

# ── Paramètres de la bénéficiaire (à compléter à chaque admission) ─────────

Benef.Nom=___________________________________________________

Benef.Prenom=_________________________________________________

Benef.DateNaissance=_________________________________________

Benef.AdrPrecedente=________________________________________

# Accord grammatical (la / La selon position dans la phrase)
Benef._la=la bénéficiaire

Benef._La=La bénéficiaire

# Tableau des occupants autorisés (à renseigner à l'admission)
Benef.Occupants.Tab=<table border="1"><tr><th>Prénom</th><th>Nom</th><th>Date de naissance</th><th>Liens familiaux</th></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr><tr><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td><td>&nbsp;</td></tr></table>

# ── Paramètres du séjour ────────────────────────────────────────────────────

Sejour.DateEntree=________________________

# ── Paramètres financiers ───────────────────────────────────────────────────

Caution.Pct=15

# ── Paramètres de la convention ────────────────────────────────────────────

Objet.conditions=conditions d'accueil

Objet.regles=règles de fonctionnement

Signature.Date=________________________

# ── Paramètres hérités de l'association (reproduits ici pour référence) ────
# Ces valeurs sont normalement résolues via BlaBla.md ; elles sont listées
# ci-dessous en lecture seule pour faciliter la vérification humaine.

# Asso.name=BlaBla (Agir contre les violences faites aux femmes)
# Asso._l=l'association BlaBla
# Asso.statut=Déclarée loi 1901
# Asso.adr=1, place de la Brigade Carnot, 33590 Saint-Vivien-de-Médoc
# Asso.Rep.name=Concepcion Cimbron
# Asso.Rep.titre=Présidente
# Asso.Tel=06 70 72 30 51
# Referentes.sec=Nadège (06 07 05 77 83), Alice (06 44 18 20 65)
# Signature.Lieu=Saint-Vivien-de-Médoc
