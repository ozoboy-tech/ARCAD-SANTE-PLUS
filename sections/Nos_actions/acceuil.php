<?php

declare(strict_types=1);

$basePath = '../../';
$currentPage = 'actions';
$pageTitle = 'Nos actions';
$pageDescription = 'Sites et services, renforcement de capacités, '
    . 'recherche opérationnelle et plaidoyer.';

$programmes = require __DIR__ . '/../../data/programmes.php';

require __DIR__ . '/../../templates/page_start.php';

?>
<main id="main">
    <section class="page-hero">
        <div class="container page-hero__inner">
            <p class="eyebrow">Programmes et interventions</p>
            <h1>Nos actions</h1>
            <p class="lead">
                Prévention et soins, appui technique, recherche
                communautaire et plaidoyer.
            </p>
        </div>
    </section>

    <section class="section-space" aria-labelledby="programs-title">
        <div class="container">
            <div class="section-heading">
                <h2 id="programs-title">Quatre domaines d’action</h2>
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
                        <a href="<?= e($basePath . $programme['url']) ?>">
                            Découvrir cette action
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section-space section-space--tight">
        <div class="container quiet-panel">
            <h2>Contenus historiques</h2>
            <p>
                Les dossiers et descriptions détaillés de l’ancien site
                seront intégrés progressivement, en conservant les liens
                vers leurs versions publiques pendant la transition.
            </p>
        </div>
    </section>
</main>
<?php require __DIR__ . '/../../templates/page_end.php'; ?>

