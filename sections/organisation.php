<?php

declare(strict_types=1);

$basePath = '../';
$currentPage = 'organisation';
$pageTitle = 'L’organisation';
$pageDescription = 'Présentation de l’approche, de la mission '
    . 'et de la gouvernance d’ARCAD Santé PLUS.';

require __DIR__ . '/../templates/page_start.php';

?>
<main id="main">
    <section class="page-hero">
        <div class="container page-hero__inner">
            <p class="eyebrow">L’organisation</p>
            <h1>ARCAD Santé PLUS</h1>
            <p class="lead">
                Association pour la Résilience des Communautés pour
                l’Accès au Développement et à la Santé.
            </p>
        </div>
    </section>

    <section class="section-space">
        <div class="container detail-layout">
            <div class="detail-copy">
                <h2>Une approche communautaire</h2>
                <p>
                    ARCAD Santé PLUS associe les premiers concernés à la
                    conception et à la mise en œuvre de ses interventions.
                    Sa mission concerne l’accès équitable à la santé et
                    au développement au Mali.
                </p>
                <p>
                    Les activités présentées sur le site historique
                    couvrent la prévention, les soins, l’appui technique,
                    la recherche et le plaidoyer.
                </p>
            </div>

            <aside class="aside-panel">
                <h2>Retrouver les contenus officiels</h2>
                <p>
                    Pendant la migration, les pages institutionnelles
                    détaillées restent disponibles sur le site historique.
                </p>
                <a href="https://arcadsanteplus.org/index.php/arcad-sante-plus/qui-sommes-nous">
                    Qui sommes-nous ?
                </a>
                <a href="https://arcadsanteplus.org/index.php/arcad-sante-plus/gouvernance">
                    Gouvernance
                </a>
                <a href="https://arcadsanteplus.org/index.php/arcad-sante-plus/notre-equipe">
                    Notre équipe
                </a>
            </aside>
        </div>
    </section>

    <section class="section-space section-space--tight">
        <div class="container callout">
            <div>
                <h2>Découvrir les actions</h2>
                <p>Sites, services et autres domaines d’intervention.</p>
            </div>
            <a class="button button--light"
               href="Nos_actions/acceuil.php">Nos actions</a>
        </div>
    </section>
</main>
<?php require __DIR__ . '/../templates/page_end.php'; ?>

