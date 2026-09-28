<?php

declare(strict_types=1);

http_response_code(404);

$basePath = '';
$pageTitle = 'Page introuvable';
$pageDescription = 'Cette page n’existe pas sur le nouveau site '
    . 'ARCAD Santé PLUS.';

require __DIR__ . '/templates/page_start.php';

?>
<main id="main">
    <section class="page-hero">
        <div class="container page-hero__inner">
            <p class="eyebrow">Erreur 404</p>
            <h1>Page introuvable</h1>
            <p class="lead">
                L’adresse demandée ne correspond à aucune page de
                cette version du site.
            </p>
            <div class="page-hero__actions">
                <a class="button" href="index.php">Retour à l’accueil</a>
                <a class="button button--outline"
                   href="sections/nous_joindre.php">Nous joindre</a>
            </div>
        </div>
    </section>
</main>
<?php require __DIR__ . '/templates/page_end.php'; ?>
