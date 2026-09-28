<?php

declare(strict_types=1);

$basePath = '../';
$currentPage = 'ressources';
$pageTitle = 'Ressources';
$pageDescription = 'Publications, photographies et vidéos '
    . 'd’ARCAD Santé PLUS.';

require __DIR__ . '/../templates/page_start.php';

?>
<main id="main">
    <section class="page-hero">
        <div class="container page-hero__inner">
            <p class="eyebrow">À consulter</p>
            <h1>Ressources</h1>
            <p class="lead">
                Retrouvez les publications et les espaces médias
                d’ARCAD Santé PLUS. Les archives restent accessibles
                sur le site historique pendant leur migration.
            </p>
        </div>
    </section>

    <section class="section-space" aria-labelledby="resources-list-title">
        <div class="container">
            <div class="section-heading">
                <h2 id="resources-list-title">Explorer les ressources</h2>
            </div>
            <div class="media-grid">
                <article class="program-card">
                    <span class="program-card__number">01 / Documents</span>
                    <div>
                        <h3>Publications</h3>
                        <p>Études, rapports et documents publics.</p>
                    </div>
                    <a href="Publications.php">Voir les publications</a>
                </article>
                <article class="program-card">
                    <span class="program-card__number">02 / Images</span>
                    <div>
                        <h3>Photothèque</h3>
                        <p>Un espace pour les photographies validées.</p>
                    </div>
                    <a href="Médiathèque/Photothèque.php">
                        Voir la photothèque
                    </a>
                </article>
                <article class="program-card">
                    <span class="program-card__number">03 / Films</span>
                    <div>
                        <h3>Vidéothèque</h3>
                        <p>Un espace pour les vidéos institutionnelles.</p>
                    </div>
                    <a href="Médiathèque/Vidéothèque.php">
                        Voir la vidéothèque
                    </a>
                </article>
            </div>
        </div>
    </section>
</main>
<?php require __DIR__ . '/../templates/page_end.php'; ?>
