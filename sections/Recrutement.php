<?php

declare(strict_types=1);

$basePath = '../';
$currentPage = 'recrutement';
$pageTitle = 'Recrutement';
$pageDescription = 'Espace recrutement d’ARCAD Santé PLUS '
    . 'et consultation des annonces archivées.';

$archiveUrl = 'https://arcadsanteplus.org/index.php/actualites/'
    . '224-recrutement-infirmier-superviseur-base-a-kayes';

require __DIR__ . '/../templates/page_start.php';

?>
<main id="main">
    <section class="page-hero">
        <div class="container page-hero__inner">
            <p class="eyebrow">Nous rejoindre</p>
            <h1>Recrutement</h1>
            <p class="lead">
                Les offres seront publiées ici lorsque leur statut,
                leurs dates et les modalités de candidature auront
                été confirmés par ARCAD Santé PLUS.
            </p>
        </div>
    </section>

    <section class="section-space">
        <div class="container detail-layout">
            <div class="detail-copy">
                <h2>Offres en cours</h2>
                <p>
                    Aucune offre en cours n’a encore été validée pour
                    cette nouvelle interface. Consultez les actualités
                    pour les communications officielles.
                </p>
                <a class="text-link" href="Actualités.php">
                    Consulter les actualités
                </a>

                <div class="archive-note">
                    <h3>Une annonce dans les archives</h3>
                    <p>
                        Un recrutement d’infirmier superviseur basé à
                        Kayes a été publié le 10 avril 2026. Cette
                        archive ne constitue pas une offre ouverte.
                    </p>
                    <a href="<?= e($archiveUrl) ?>">
                        Consulter l’annonce historique
                    </a>
                </div>
            </div>
            <aside class="aside-panel">
                <h2>Candidatures</h2>
                <p>
                    Les modalités propres à chaque poste seront
                    indiquées dans son annonce officielle.
                </p>
                <p>
                    Le formulaire de contact du site n’est pas un
                    formulaire de candidature.
                </p>
            </aside>
        </div>
    </section>
</main>
<?php require __DIR__ . '/../templates/page_end.php'; ?>
