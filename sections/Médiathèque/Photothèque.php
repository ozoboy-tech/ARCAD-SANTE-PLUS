<?php

declare(strict_types=1);

$basePath = '../../';
$currentPage = 'ressources';
$pageTitle = 'Photothèque';
$pageDescription = 'Photothèque d’ARCAD Santé PLUS '
    . 'en cours de constitution.';

require __DIR__ . '/../../templates/page_start.php';

?>
<main id="main">
    <section class="page-hero">
        <div class="container page-hero__inner">
            <nav class="breadcrumb" aria-label="Fil d’Ariane">
                <a href="../ressources.php">Ressources</a>
                <span aria-hidden="true">/</span>
                <span>Photothèque</span>
            </nav>
            <p class="eyebrow">Médiathèque</p>
            <h1>Photothèque</h1>
            <p class="lead">
                Les photographies institutionnelles seront présentées
                ici après vérification de leur provenance, de leur
                légende et des droits de diffusion.
            </p>
        </div>
    </section>

    <section class="section-space">
        <div class="container">
            <div class="section-heading">
                <h2>Un fonds à documenter</h2>
            </div>
            <div class="media-grid" aria-hidden="true">
                <div class="media-slot"><span>Photographie à venir</span></div>
                <div class="media-slot"><span>Photographie à venir</span></div>
                <div class="media-slot"><span>Photographie à venir</span></div>
            </div>
            <div class="archive-note">
                <p>
                    L’équipe ajoutera des images réelles et leurs
                    descriptions accessibles au fil de la migration.
                </p>
            </div>
        </div>
    </section>
</main>
<?php require __DIR__ . '/../../templates/page_end.php'; ?>
