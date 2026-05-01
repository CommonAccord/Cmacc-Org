# FR-BlaBla-ConvHeberg — Convention d'Hébergement en format CommonAccord (Cmacc)

## Structure du dépôt

```
FR-BlaBla-ConvHeberg/
├── README.md                  ← Ce fichier
├── Form/
│   └── 0.md                   ← FORM : texte paramétré réutilisable (le "template")
├── Asso/
│   └── BlaBla.md                ← PARAMÈTRES ASSO : données fixes de l'association
└── Demo/
    └── Instance.md            ← INSTANCE : données propres à une bénéficiaire donnée
```

## Principe CommonAccord (Cmacc)

CommonAccord repose sur un modèle de **prototype inheritance** (héritage par prototype) :

- **Form/0.md** contient le texte de la convention avec des variables entre accolades `{Variable}`.
- **Asso/BlaBla.md** définit les valeurs stables de l'association (nom, adresse, représentante…).
- **Demo/Instance.md** contient les données spécifiques à chaque admission (bénéficiaire, date d'entrée…).

Le moteur Cmacc résout les variables en remontant la chaîne d'héritage : Instance → Asso → Form.

## Conventions de nommage des clés

| Préfixe       | Usage                                        |
|---------------|----------------------------------------------|
| `Asso.*`      | Données de l'association                     |
| `Benef.*`     | Données de la bénéficiaire                   |
| `Sejour.*`    | Dates et modalités du séjour                 |
| `Caution.*`   | Paramètres financiers                        |
| `Signature.*` | Lieu et date de signature                    |
| `Referentes.*`| Contacts des référentes                      |
| `N.Ti`        | Titre de la section N                        |
| `N.sec`       | Contenu principal de la section N            |
| `N.M.sec`     | Sous-section M de la section N               |
| `N.M.secs`    | Agrégat des sous-sections de N.M             |

## Utilisation

### Pour créer une nouvelle convention

1. Copier `Demo/Instance.md` en `Demo/Benef-NOM-PRENOM-AAAA-MM-JJ.md`.
2. Renseigner toutes les valeurs `Benef.*` et `Sejour.*`.
3. Rendre la convention via le moteur Cmacc (ex. : `https://commonaccord.org/i.php?v=doc&f=…`).

### Pour modifier le texte type

Éditer uniquement `Form/0.md`. Toutes les instances héritent automatiquement des modifications.

### Pour mettre à jour les données BlaBla

Éditer `Asso/BlaBla.md`. Toutes les conventions passées et futures reflèteront la mise à jour.

## Variables obligatoires à renseigner par instance

| Clé                      | Description                                 |
|--------------------------|---------------------------------------------|
| `Benef.Nom`              | Nom de famille de la bénéficiaire           |
| `Benef.Prenom`           | Prénom de la bénéficiaire                   |
| `Benef.DateNaissance`    | Date de naissance                           |
| `Benef.AdrPrecedente`    | Adresse précédente                          |
| `Benef.Occupants.Tab`    | Tableau HTML des occupants autorisés        |
| `Sejour.DateEntree`      | Date d'entrée dans le logement              |
| `Signature.Date`         | Date de signature de la convention          |

## Licence

Ces documents sont mis à disposition sous licence **CC0 1.0 Universal** (domaine public),
conformément à la pratique CommonAccord.
