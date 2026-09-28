<?php

declare(strict_types=1);

$actions = require __DIR__ . '/../data/actions.php';
$programmes = require __DIR__ . '/../data/programmes.php';
$action = $actions[$actionKey];

$basePath = '../../';
$currentPage = 'actions';
$pageTitle = $action['titre'];
$pageDescription = $action['intro'];

require __DIR__ . '/page_start.php';

?>
<main id="main">
    <section class="page-hero">
        <div class="container page-hero__inner">
            <nav class="breadcrumb" aria-label="Fil d’Ariane">
                <a href="<?= e($basePath) ?>index.php">Accueil</a>
                <span aria-hidden="true">/</span>
                <a href="<?= e($basePath) ?>sections/Nos_actions/acceuil.php">
                    Nos actions
                </a>
            </nav>
            <p class="eyebrow"><?= e($action['rubrique']) ?></p>
            <h1><?= e($action['titre']) ?></h1>
            <p class="lead"><?= e($action['intro']) ?></p>
        </div>
    </section>

    <section class="section-space">
        <div class="container detail-layout">
            <div class="detail-copy">
                <h2>En bref</h2>
                <ul>
                    <?php foreach ($action['points'] as $point): ?>
                        <li><?= e($point) ?></li>
                    <?php endforeach; ?>
                </ul>

                <?php if (isset($action['source_url'])): ?>
                    <div class="archive-note">
                        <p>
                            Les informations détaillées restent
                            accessibles sur le site historique pendant
                            la migration éditoriale.
                        </p>
                        <a href="<?= e($action['source_url']) ?>">
                            <?= e($action['source_label']) ?>
                        </a>
                        <?php if (isset($action['second_url'])): ?>
                            <p>
                                <a href="<?= e($action['second_url']) ?>">
                                    <?= e($action['second_label']) ?>
                                </a>
                            </p>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>

            <aside class="aside-panel">
                <h2>Une question sur cette action ?</h2>
                <p>
                    Contactez ARCAD Santé PLUS pour obtenir une
                    information institutionnelle à jour.
                </p>
                <a href="<?= e($basePath) ?>sections/nous_joindre.php">
                    Coordonnées et formulaire
                </a>
            </aside>
        </div>
    </section>

    <section class="section-space section-space--tight"
             aria-labelledby="other-actions-title">
        <div class="container">
            <div class="section-heading">
                <h2 id="other-actions-title">Autres actions</h2>
            </div>
            <div class="program-grid">
                <?php foreach ($programmes as $programme): ?>
                    <?php if ($programme['key'] === $actionKey): ?>
                        <?php continue; ?>
                    <?php endif; ?>
                    <article class="program-card">
                        <span class="program-card__number">
                            <?= e($programme['numero']) ?>
                        </span>
                        <div>
                            <h3><?= e($programme['titre']) ?></h3>
                            <p><?= e($programme['resume']) ?></p>
                        </div>
                        <a href="<?= e($basePath . $programme['url']) ?>">
                            Découvrir cette action
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</main>
<?php require __DIR__ . '/page_end.php'; ?>
