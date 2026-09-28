<?php

declare(strict_types=1);

$basePath = '';
$currentPage = 'home';
$pageTitle = 'Accueil';
$pageDescription = 'Découvrez les actions, actualités et services '
    . 'd’ARCAD Santé PLUS au Mali.';

$programmes = require __DIR__ . '/data/programmes.php';
$actualites = require __DIR__ . '/data/actualites.php';

require __DIR__ . '/templates/page_start.php';

?>
<main id="main">
    <section class="home-hero" aria-labelledby="home-title">
        <div class="container home-hero__grid">
            <div>
                <p class="eyebrow">Santé communautaire au Mali</p>
                <h1 id="home-title">
                    Prévention.<br>
                    Dépistage.<br>
                    <span>Accompagnement.</span>
                </h1>
                <p class="home-hero__summary">
                    Nous travaillons avec les communautés pour offrir
                    des services de prévention, de dépistage et
                    d’accompagnement.
                </p>
                <div class="hero-actions">
                    <a class="button"
                       href="sections/Nos_actions/nos_sites_et_services.php">
                        Nos sites et services
                    </a>
                    <a class="button button--outline"
                       href="sections/nous_joindre.php">
                        Nous joindre
                    </a>
                </div>
            </div>

            <div class="hero-media" role="img"
                 aria-label="Emplacement réservé à une photographie réelle validée par ARCAD">
                <span class="hero-media__caption">
                    Photographie de terrain à valider par ARCAD
                </span>
                <span class="hero-media__label">ARCAD Santé PLUS</span>
            </div>
        </div>
    </section>

    <nav class="quick-links" aria-label="Accès rapides">
        <a href="sections/Nos_actions/nos_sites_et_services.php">
            <span>01</span><strong>Sites et services</strong>
        </a>
        <a href="sections/Actualités.php">
            <span>02</span><strong>Actualités</strong>
        </a>
        <a href="sections/Publications.php">
            <span>03</span><strong>Publications</strong>
        </a>
        <a href="sections/nous_joindre.php">
            <span>04</span><strong>Nous joindre</strong>
        </a>
    </nav>

    <section class="section-space" aria-labelledby="actions-title">
        <div class="container">
            <div class="section-heading">
                <h2 id="actions-title">Nos actions</h2>
                <a href="sections/Nos_actions/acceuil.php">
                    Voir toutes les actions
                </a>
            </div>

            <div class="program-grid">
                <?php foreach ($programmes as $programme): ?>
                    <article class="program-card">
                        <span class="program-card__number">
                            <?= e($programme['numero']) ?>
                        </span>
                        <div>
                            <h3><?= e($programme['titre']) ?></h3>
                            <p><?= e($programme['resume']) ?></p>
                        </div>
                        <a href="<?= e($programme['url']) ?>">
                            Découvrir cette action
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section-space section-space--tight"
             aria-labelledby="news-title">
        <div class="container">
            <div class="section-heading">
                <h2 id="news-title">Actualités</h2>
                <a href="sections/Actualités.php">Toutes les actualités</a>
            </div>

            <div class="news-grid">
                <?php foreach (array_slice($actualites, 0, 3) as $index => $item): ?>
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
        </div>
    </section>

    <section class="section-space" aria-labelledby="resources-title">
        <div class="container">
            <div class="section-heading">
                <h2 id="resources-title">Explorer ARCAD</h2>
            </div>
            <div class="feature-split">
                <div>
                    <p class="eyebrow">Organisation</p>
                    <h2>L’approche communautaire</h2>
                    <p>
                        Découvrez l’histoire, la mission et la gouvernance
                        d’ARCAD Santé PLUS.
                    </p>
                    <a class="text-link" href="sections/organisation.php">
                        Découvrir l’organisation
                    </a>
                </div>
                <div>
                    <p class="eyebrow">Ressources</p>
                    <h2>Publications et médias</h2>
                    <p>
                        Accédez aux publications disponibles et aux espaces
                        dédiés aux photographies et vidéos.
                    </p>
                    <a class="text-link" href="sections/ressources.php">
                        Explorer les ressources
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="callout-band"
             aria-labelledby="contact-callout-title">
        <div class="container callout">
            <div>
                <h2 id="contact-callout-title">Nous joindre</h2>
                <p>Direction générale, N’Tomikorobougou, Bamako.</p>
            </div>
            <a class="button button--light"
               href="sections/nous_joindre.php">
                Coordonnées et formulaire
            </a>
        </div>
    </section>
</main>
<?php require __DIR__ . '/templates/page_end.php'; ?>
