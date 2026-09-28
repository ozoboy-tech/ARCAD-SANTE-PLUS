<?php

declare(strict_types=1);

$basePath = '../';
$currentPage = 'ressources';
$pageTitle = 'Publications';
$pageDescription = 'Accès aux publications et aux archives '
    . 'documentaires d’ARCAD Santé PLUS.';
$archiveUrl = 'https://arcadsanteplus.org/index.php/publications';

require __DIR__ . '/../templates/page_start.php';

?>
<main id="main">
    <section class="page-hero">
        <div class="container page-hero__inner">
            <nav class="breadcrumb" aria-label="Fil d’Ariane">
                <a href="ressources.php">Ressources</a>
                <span aria-hidden="true">/</span>
                <span>Publications</span>
            </nav>
            <p class="eyebrow">Documents</p>
            <h1>Publications</h1>
            <p class="lead">
                Consultez les documents déjà publiés par ARCAD Santé PLUS.
                Le catalogue sera intégré ici après vérification des
                fichiers, des titres et des droits de diffusion.
            </p>
        </div>
    </section>

    <section class="section-space">
        <div class="container detail-layout">
            <div class="detail-copy">
                <h2>Archives documentaires</h2>
                <p>
                    Les publications restent disponibles sur le site
                    institutionnel historique durant cette transition.
                    Aucun document n’est annoncé comme téléchargeable ici
                    avant sa vérification éditoriale.
                </p>
                <a class="button" href="<?= e($archiveUrl) ?>">
                    Consulter les publications historiques
                </a>
            </div>
            <aside class="aside-panel">
                <h2>Besoin d’un document ?</h2>
                <p>
                    Pour demander une publication ou signaler un lien
                    indisponible, contactez l’équipe.
                </p>
                <a href="nous_joindre.php">Nous joindre</a>
            </aside>
        </div>
    </section>
</main>
<?php require __DIR__ . '/../templates/page_end.php'; ?>
