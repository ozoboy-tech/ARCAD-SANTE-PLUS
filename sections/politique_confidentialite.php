<?php

declare(strict_types=1);

$basePath = '../';
$pageTitle = 'Politique de confidentialité';
$pageDescription = 'Informations sur les données traitées '
    . 'par le site ARCAD Santé PLUS.';

require __DIR__ . '/../templates/page_start.php';

?>
<main id="main">
    <section class="page-hero">
        <div class="container page-hero__inner">
            <p class="eyebrow">Informations légales</p>
            <h1>Politique de confidentialité</h1>
            <p class="lead">
                Cette page décrit le fonctionnement actuel du site
                et de son formulaire de contact.
            </p>
        </div>
    </section>

    <section class="section-space">
        <div class="container detail-layout">
            <div class="detail-copy">
                <h2>Responsable du site</h2>
                <p>
                    ARCAD Santé PLUS, N’Tomikorobougou, face à l’INFSS,
                    Immeuble Tapa N’Diaye, Bamako, Mali.
                    Pour toute question sur vos données, écrivez à
                    <a href="mailto:arcadsanteplus@arcadsanteplus.org">
                        arcadsanteplus@arcadsanteplus.org
                    </a>.
                </p>

                <h2>Données envoyées par le formulaire</h2>
                <p>
                    Le formulaire recueille votre nom, votre adresse
                    e-mail, le sujet et le texte du message. Ces données
                    servent à recevoir et traiter votre demande.
                    Le serveur enregistre également la date et l’heure
                    de réception du message.
                </p>
                <p>
                    À ce stade, les messages sont stockés dans un fichier
                    JSONL sur le serveur du site. Le formulaire ne
                    déclenche pas d’envoi par e-mail. N’y communiquez
                    aucune information médicale ou autre donnée sensible.
                </p>

                <h2>Session et services tiers</h2>
                <p>
                    Une session technique peut être utilisée pour
                    protéger le formulaire contre les soumissions
                    non autorisées et limiter les envois répétés.
                    Le code fourni n’intègre ni outil de mesure
                    d’audience ni balise publicitaire externe.
                </p>
                <p>
                    Le serveur d’hébergement peut conserver ses propres
                    journaux techniques. Leurs modalités de conservation
                    dépendront de la configuration retenue pour la mise
                    en ligne.
                </p>

                <h2>Demandes relatives à vos données</h2>
                <p>
                    Pour demander l’accès, la rectification ou la
                    suppression des informations que vous avez transmises,
                    contactez ARCAD Santé PLUS à l’adresse ci-dessus.
                    Indiquez suffisamment d’éléments pour identifier
                    le message concerné, sans envoyer de donnée médicale.
                </p>

                <div class="archive-note">
                    <strong>Avant mise en ligne :</strong>
                    la durée de conservation, les destinataires internes,
                    l’hébergeur et la procédure de réponse aux demandes
                    doivent être confirmés par ARCAD Santé PLUS.
                </div>
            </div>

            <aside class="aside-panel">
                <h2>Nous contacter</h2>
                <p>Pour une question sur cette page ou vos données :</p>
                <a href="nous_joindre.php">Coordonnées complètes</a>
                <a href="mailto:arcadsanteplus@arcadsanteplus.org">
                    Envoyer un e-mail
                </a>
            </aside>
        </div>
    </section>
</main>
<?php require __DIR__ . '/../templates/page_end.php'; ?>
