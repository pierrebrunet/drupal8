
# Workflow

- Les CSS sont compilées avec le préprocesseur `SASS`.
- De base, aucun framework n'est utilisé.
- Un controle de code automatique est appliqué (via stylelint). Les règles
  utilisées sont définie dans `.stylelintrc`.


# Conventions de codage

Tableau récaptitulatif :
https://docs.google.com/spreadsheets/d/1T-_NBi1UsvojCWUjcETeurcPOKk6698IEXIdj7zgCeo/edit#gid=1204112438


# SASS

## Architecture

Les mixins/functions/variables sont déclarées dans des fichiers distincts du
code du projet, afin de pouvoir générer, si nécessaire, plusieurs feuilles de
style utilisant les mêmes mixins sans inclures du code inutilisé.


scss/
|
|- abstract/                             # Mixins / fonctions / variables.
|   |- base                              # Mixins génériques.
|   |
|   |- project                           # Mixins du projet.
|   |   |- forms                         # Champs de formulaires.
|   |   |- _mix-blocks.scss                  # Blocs.
|   |   |- _mix-contrib.scss                 # Contenu contribué (WYSIWYG).
|   |   |- _mix-headings.scss                # Titres
|   |   |- _mix-buttons.scss                 # Boutons.
|   |   |- _mix-lists.scss                   # Listes.
|   |   |- _mix-tables.scss                  # Tableaux.
|   |
|   |- variables                         # Variables du projet.
|       |- _breakpoints.scss             # Variables de mise en page.
|       |- _colors                       # Définitions des couleurs.
|       |- _fonts                        # Définitions des polices.
|       |- _sprites                      # Images sprites (généré automatiquement)
|
|- common/
|   |- base                              # Mise en page, formulaires, boutons, liens...
|   |- components/                       # Composants réutilisables (modales / pager...)
|   |- helpers/                          # Classes générique pour l'alignement, l'affichage...
|   |- nav/                              # Header, footer, menu, breadcrumbs...
|   |- reset/                            # Box sizing, images.
|
|- features/                             # Fonctionnalité spécifique (pour Drupal, on créer un sous-dossier par type de contenu).
|
|- home/                                 # Page spécifique (page d'accueil ici, d'autres dossiers peuvent être ajoutés)
|
|
|- common.scss              # Styles communs à toutes les pages.
|- home.scss                # Styles spécifiques à la page d'accueil.
|- features.scss            # Styles des autres pages ou blocs.
|- print.scss               # Impression.
__


***


## Méthodologie

`BEM` (http://getbem.com/naming/) est utilisé pour une maintenabilité facilitée.


***


## Outils

### `Normalize.css`

`Normalize.css` est intégré via un plugin postCSS (qui réduit la taille du
code en fonction des navigateurs cibles)


### Grilles

Aucune grille par défaut n'est définie. Les `flexbox`, `grid` ou `float` sont
utilisés.


