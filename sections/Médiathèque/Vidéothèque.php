<?php

declare(strict_types=1);

$basePath = '../../';
$currentPage = 'ressources';
$pageTitle = 'Vidéothèque';
$pageDescription = 'Vidéothèque d’ARCAD Santé PLUS '
    . 'en cours de constitution.';

require __DIR__ . '/../../templates/page_start.php';

?>
<main id="main">
    <section class="page-hero">
        <div class="container page-hero__inner">
            <nav class="breadcrumb" aria-label="Fil d’Ariane">
                <a href="../ressources.php">Ressources</a>
                <span aria-hidden="true">/</span>
                <span>Vidéothèque</span>
            </nav>
            <p class="eyebrow">Médiathèque</p>
            <h1>Vidéothèque</h1>
            <p class="lead">
                Les vidéos institutionnelles seront ajoutées ici avec
                leurs informations de diffusion et une alternative
                textuelle adaptée.
            </p>
        </div>
    </section>

    <section class="section-space">
        <div class="container detail-layout">
            <div class="detail-copy">
                <h2>Contenus en préparation</h2>
                <p>
                    La sélection des vidéos publiques et la validation
                    de leurs droits de diffusion sont nécessaires avant
                    leur intégration à la nouvelle interface.
                </p>
            </div>
            <aside class="aside-panel">
                <h2>Retrouver les ressources</h2>
                <p>
                    Consultez également les publications et l’espace
                    dédié aux photographies.
                </p>
                <a href="../ressources.php">Toutes les ressources</a>
            </aside>
        </div>
    </section>
</main>
<?php require __DIR__ . '/../../templates/page_end.php'; ?>
