<?php

declare(strict_types=1);

$basePath = '../';
$pageTitle = 'Conditions générales d’utilisation';
$pageDescription = 'Conditions d’utilisation du site '
    . 'ARCAD Santé PLUS.';

require __DIR__ . '/../templates/page_start.php';

?>
<main id="main">
    <section class="page-hero">
        <div class="container page-hero__inner">
            <p class="eyebrow">Informations légales</p>
            <h1>Conditions générales d’utilisation</h1>
            <p class="lead">
                Informations relatives à la consultation et à
                l’utilisation du site ARCAD Santé PLUS.
            </p>
        </div>
    </section>

    <section class="section-space">
        <div class="container detail-layout">
            <div class="detail-copy">
                <h2>Éditeur</h2>
                <p>
                    ARCAD Santé PLUS, N’Tomikorobougou, face à l’INFSS,
                    Immeuble Tapa N’Diaye, Bamako, Mali.
                    Contact :
                    <a href="mailto:arcadsanteplus@arcadsanteplus.org">
                        arcadsanteplus@arcadsanteplus.org
                    </a>.
                </p>

                <h2>Objet du site</h2>
                <p>
                    Le site présente l’organisation, ses domaines
                    d’intervention, ses actualités et ses ressources.
                    Certaines archives sont accessibles au moyen de
                    liens vers le site institutionnel historique.
                </p>

                <h2>Utilisation des contenus</h2>
                <p>
                    Les textes, marques, photographies et autres éléments
                    présents sur le site sont réservés à leurs ayants
                    droit respectifs. Contactez ARCAD Santé PLUS avant
                    toute réutilisation de contenu ou de visuel.
                </p>

                <h2>Informations et liens</h2>
                <p>
                    Les contenus sont mis à jour au fil de la migration.
                    Une annonce archivée ne vaut pas annonce encore
                    ouverte. Vérifiez les informations pratiques
                    directement auprès de l’organisation.
                </p>
                <p>
                    Les liens externes ouvrent des pages dont le contenu
                    peut évoluer indépendamment de cette interface.
                </p>

                <h2>Formulaire</h2>
                <p>
                    Le formulaire sert aux demandes institutionnelles
                    générales. Ne l’utilisez pas pour transmettre des
                    données médicales, des documents d’identité ou
                    une candidature non sollicitée. Consultez aussi
                    la <a href="politique_confidentialite.php">
                        politique de confidentialité</a>.
                </p>

                <div class="archive-note">
                    <strong>À valider avant mise en ligne :</strong>
                    les mentions relatives à l’hébergement et aux
                    droits sur les contenus doivent être confirmées
                    par ARCAD Santé PLUS.
                </div>
            </div>

            <aside class="aside-panel">
                <h2>Une question ?</h2>
                <p>Adressez votre demande à l’organisation.</p>
                <a href="nous_joindre.php">Nous joindre</a>
            </aside>
        </div>
    </section>
</main>
<?php require __DIR__ . '/../templates/page_end.php'; ?>
