# ARCAD Santé PLUS

Refonte de l’interface institutionnelle en PHP, HTML, CSS et JavaScript
vanilla. Le point de départ est le dépôt public `ARCAD-SANTE-PLUS`,
branche `main`, commit `b5930d4`.

## Démarrage local

Copier le dossier dans un serveur local prenant en charge PHP 8.1 ou
une version plus récente, puis ouvrir `index.php`. Depuis la racine du
projet, un serveur de développement peut être lancé avec :

```bash
php -S localhost:8000
```

Ouvrir ensuite `http://localhost:8000/index.php`.

Les liens sont relatifs à chaque page. Le composant `templates/header.php`
et le composant `templates/footer.php` utilisent `$basePath` pour
fonctionner aux différents niveaux de dossiers.

## Contenu et architecture

- `data/actualites.php` : données d’actualités et liens historiques.
- `data/programmes.php` et `data/actions.php` : navigation et résumés
  des domaines d’intervention.
- `templates/action_page.php` : présentation commune des quatre actions.
- `templates/page_start.php` et `templates/page_end.php` : structure
  de page, métadonnées et composants partagés.
- `style.css` et `java.js` : interface sans dépendances front externes.
- `sections/` : pages institutionnelles, ressources, actualités,
  recrutement, contact et informations légales.

Le logo local est conservé. Les anciens visuels du prototype qui
n’étaient pas validés ne sont pas intégrés. Les emplacements gris ne
représentent pas des projets ou des bénéficiaires réels. Les médias
pourront être ajoutés après validation de leur source et de leurs droits.

## Formulaire de contact

`contact_submit.php` conserve le traitement existant : POST, jeton CSRF,
champ piège, limite par session, validation serveur et écriture JSONL
avec verrou. La page contact crée la session et affiche les messages
de retour. Les demandes sont enregistrées provisoirement dans
`storage/contact_messages.jsonl` et ne sont pas envoyées par e-mail.

Le fichier JSONL est exclu de Git. Sous Apache, `storage/.htaccess`
interdit l’accès HTTP au dossier. Sous Nginx, configurer explicitement
une règle de refus pour `/storage/`, `/data/` et `/templates/` avant
mise en ligne. Il faut également gérer les permissions du dossier,
les sauvegardes et la durée de conservation des messages.

Le SMTP reste une étape ultérieure. Ne pas remplacer le traitement
par un appel direct à `mail()`.

## Avant publication

1. Valider les textes institutionnels, les médias et les droits associés.
2. Confirmer l’hébergeur, la durée de conservation des données et les
   mentions légales des pages de confidentialité et de CGU.
3. Configurer le stockage du formulaire hors accès public sur le serveur
   retenu et vérifier ses protections par des essais réels.
4. Inventorier les anciennes URL et planifier les redirections 301
   après validation de chaque destination éditoriale.
5. Tester les pages au clavier, sur mobile et avec une connexion lente.

Les liens vers `arcadsanteplus.org` maintiennent l’accès aux articles,
aux publications et aux contenus institutionnels pendant la migration.
Le futur back-office et la livraison SMTP ne font pas partie de cette
refonte visuelle.
