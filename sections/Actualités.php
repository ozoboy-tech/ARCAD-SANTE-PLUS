<?php

declare(strict_types=1);

$basePath = '../';
$currentPage = 'actualites';
$pageTitle = 'Actualités';
$pageDescription = 'Actualités et publications récentes '
    . 'd’ARCAD Santé PLUS.';

$actualites = require __DIR__ . '/../data/actualites.php';

require __DIR__ . '/../templates/page_start.php';

?>
<main id="main">
    <section class="page-hero">
        <div class="container page-hero__inner">
            <p class="eyebrow">Vie de l’organisation</p>
            <h1>Actualités</h1>
            <p class="lead">
                Activités, événements et publications d’ARCAD Santé PLUS.
                Les articles détaillés restent accessibles sur le site
                historique pendant la migration.
            </p>
        </div>
    </section>

    <section class="section-space" aria-labelledby="news-list-title">
        <div class="container">
            <div class="section-heading">
                <h2 id="news-list-title">Dernières publications</h2>
            </div>

            <div class="news-grid">
                <?php foreach ($actualites as $index => $item): ?>
                    <article class="news-card<?= $index === 0
                        ? ' news-card--featured'
                        : '' ?>">
                        <div class="news-card__meta">
                            <span><?= e($item['categorie']) ?></span>
                            <time datetime="<?= e($item['date']) ?>">
                                <?= e($item['date_label']) ?>
                            </time>
                        </div>
                        <h3><?= e($item['titre']) ?></h3>
                        <p><?= e($item['resume']) ?></p>
                        <a href="<?= e($item['url']) ?>">
                            Lire sur le site historique
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>

            <div class="archive-note">
                <p>
                    <strong>Archives :</strong> les publications antérieures
                    sont conservées sur le site historique.
                    <a href="https://www.arcadsanteplus.org/index.php/actualites">
                        Consulter toutes les actualités
                    </a>.
                </p>
            </div>
        </div>
    </section>
</main>
<?php require __DIR__ . '/../templates/page_end.php'; ?>

