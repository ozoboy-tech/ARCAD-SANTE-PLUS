<?php

$current_page = 'actualites';

/*
 * Depuis /sections/ il faut remonter d'un niveau
 * pour accéder à index.php, images/, style.css, etc.
 */
$basePath = '../';


/*
 * Actualités affichées sur la page.
 *
 * Pour l'instant elles sont définies ici.
 * Plus tard, ce tableau sera remplacé par les données
 * provenant du futur back-office / de la base de données.
 */
$actualites = [

    [
        'categorie' => 'Opportunités',
        'date' => '2026-05-21',
        'date_label' => '21 mai 2026',

        'titre' => 'Avis de manifestation d’intérêt N°01/ARCAD/2026',

        'resume' => 'ARCAD Santé PLUS publie un avis de manifestation d’intérêt dans le cadre de ses activités et programmes soutenus par le Fonds mondial.',

        'url' => 'https://www.arcadsanteplus.org/index.php/actualites'
    ],

    [
        'categorie' => 'Appel à propositions',
        'date' => '2026-05-21',
        'date_label' => '21 mai 2026',

        'titre' => 'Avis de Demande de Propositions Ouverte',

        'resume' => 'ARCAD Santé PLUS recherche un prestataire pour la mise en scène et la performance d’une pièce théâtrale dans le cadre de ses activités.',

        'url' => 'https://www.arcadsanteplus.org/index.php/actualites/230-avis-de-demande-de-propositions-ouverte-10'
    ],

    [
        'categorie' => 'Organisation',
        'date' => '2026-05-12',
        'date_label' => '12 mai 2026',

        'titre' => 'Avis de Demande de Propositions Ouverte',

        'resume' => 'Un cabinet ou expert indépendant est recherché pour la réalisation d’un audit organisationnel approfondi d’ARCAD Santé PLUS.',

        'url' => 'https://www.arcadsanteplus.org/index.php/actualites/229-avis-de-demande-de-propositions-ouverte-9'
    ],

    [
        'categorie' => 'Événement',
        'date' => '2026-05-04',
        'date_label' => '4 mai 2026',

        'titre' => 'ARCAD Santé PLUS à la 13ᵉ Conférence AFRAVIH 2026',

        'resume' => 'ARCAD Santé PLUS participe à la 13ᵉ Conférence AFRAVIH à Lausanne et réaffirme son engagement en faveur de la santé communautaire.',

        'url' => 'https://www.arcadsanteplus.org/index.php/actualites/228-arcad-sante-plus-a-la-13-conference-afravih-2026-un-engagement-renforce-pour-la-sante-communautaire'
    ]

];

?>

<!doctype html>

<html lang="fr">

<head>

    <meta charset="utf-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1"
    >

    <title>
        Actualités | ARCAD Santé PLUS
    </title>

    <meta
        name="description"
        content="Retrouvez les dernières actualités, activités, événements, recrutements et appels à propositions d'ARCAD Santé PLUS."
    >

    <link
        rel="stylesheet"
        href="../style.css"
    >

</head>


<body>


<?php

require __DIR__ . '/../templates/header.php';

?>


<main
    id="main"
    class="news-page"
>


    <!-- =====================================================
         HERO
    ====================================================== -->

    <section class="news-hero">

        <div class="container news-hero__inner">

            <div class="news-hero__content">

                <span class="news-eyebrow">
                    Actualités & publications
                </span>

                <h1 class="news-hero__title">
                    Suivre les actions
                    <span>d’ARCAD Santé PLUS.</span>
                </h1>

                <p class="news-hero__description">

                    Découvrez les activités de terrain, les événements,
                    les opportunités, les appels à candidatures et
                    les dernières informations de l’organisation.

                </p>

            </div>


            <div
                class="news-hero__decoration"
                aria-hidden="true"
            >

                <div class="news-hero__circle news-hero__circle--one"></div>

                <div class="news-hero__circle news-hero__circle--two"></div>

                <div class="news-hero__mark">

                    <span>ARCAD</span>

                    <strong>
                        2026
                    </strong>

                </div>

            </div>

        </div>

    </section>



    <!-- =====================================================
         ACTUALITÉ À LA UNE
    ====================================================== -->

    <section class="news-featured-section">

        <div class="container">


            <div class="news-section-heading">

                <div>

                    <span class="news-section-kicker">
                        À la une
                    </span>

                    <h2>
                        Dernière actualité
                    </h2>

                </div>

            </div>



            <article class="news-featured">


                <!-- Visuel -->

                <div
                    class="news-featured__visual"
                    aria-hidden="true"
                >

                    <div class="news-featured__visual-content">

                        <svg
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <path
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10
                                10-4.48 10-10S17.52 2 12 2zm1
                                17.93c-2.83.48-5.51-1.41-5.99-4.24
                                -.07-.39-.08-.79-.05-1.18L11
                                18.55v1.38zm4.9-2.54c-.33-1.03-1.28
                                -1.74-2.36-1.74h-1.25v-3.13c0-.69
                                -.56-1.25-1.25-1.25H8.67V8.75h2.5
                                c.69 0 1.25-.56 1.25-1.25V5h1.25
                                c1.38 0 2.5-1.12 2.5-2.5v-.05
                                C19.65 3.99 22 7.65 22 12c0
                                2.08-.64 4.01-1.73 5.61l-2.37-.22z"
                            />
                        </svg>

                        <span>
                            Santé communautaire
                        </span>

                    </div>

                </div>



                <!-- Contenu -->

                <div class="news-featured__content">


                    <div class="news-meta">

                        <span class="news-category">
                            Formation
                        </span>

                        <time datetime="2026-06-03">
                            3 juin 2026
                        </time>

                    </div>


                    <h2 class="news-featured__title">

                        Compétences techniques et communicationnelles :
                        ARCAD Santé PLUS renforce la capacité des
                        animateurs communautaires

                    </h2>


                    <p class="news-featured__text">

                        ARCAD Santé PLUS organise un atelier
                        d’orientation destiné aux animateurs du
                        Renforcement du Système de Santé communautaire,
                        autour de l’utilisation des kits de projection,
                        des contenus vidéo et des stratégies de
                        mobilisation communautaire.

                    </p>


                    <a
                        class="news-read-more"
                        href="https://www.arcadsanteplus.org/index.php/actualites/232-competences-techniques-et-communicationnelles-arcad-sante-plus-renforce-la-capacite-des-animateurs-communautaires"
                        target="_blank"
                        rel="noopener noreferrer"
                    >

                        Lire l’actualité

                        <span aria-hidden="true">
                            →
                        </span>

                    </a>


                </div>


            </article>

        </div>

    </section>



    <!-- =====================================================
         LISTE DES ACTUALITÉS
    ====================================================== -->

    <section class="news-list-section">

        <div class="container">


            <div class="news-section-heading">

                <div>

                    <span class="news-section-kicker">
                        À découvrir
                    </span>

                    <h2>
                        Dernières publications
                    </h2>

                </div>


                <p>

                    Activités, opportunités, événements et informations
                    institutionnelles.

                </p>

            </div>



            <div class="news-grid">


                <?php foreach ($actualites as $actualite): ?>


                    <article class="news-card">


                        <div class="news-card__top">

                            <span class="news-category">

                                <?= htmlspecialchars(
                                    $actualite['categorie'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>

                            </span>


                            <time
                                datetime="<?= htmlspecialchars(
                                    $actualite['date'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>"
                            >

                                <?= htmlspecialchars(
                                    $actualite['date_label'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>

                            </time>

                        </div>



                        <div class="news-card__content">


                            <h3>

                                <?= htmlspecialchars(
                                    $actualite['titre'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>

                            </h3>


                            <p>

                                <?= htmlspecialchars(
                                    $actualite['resume'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>

                            </p>


                        </div>



                        <div class="news-card__footer">

                            <a
                                href="<?= htmlspecialchars(
                                    $actualite['url'],
                                    ENT_QUOTES,
                                    'UTF-8'
                                ) ?>"
                                target="_blank"
                                rel="noopener noreferrer"
                            >

                                Lire la suite

                                <span aria-hidden="true">
                                    →
                                </span>

                            </a>

                        </div>


                    </article>


                <?php endforeach; ?>


            </div>

        </div>

    </section>



    <!-- =====================================================
         ARCHIVES
    ====================================================== -->

    <section class="news-archive-section">

        <div class="container">

            <div class="news-archive-box">


                <div>

                    <span class="news-section-kicker">
                        Archives
                    </span>

                    <h2>
                        Retrouvez toutes les publications d’ARCAD.
                    </h2>

                    <p>

                        Pendant la migration du nouveau site,
                        les anciennes publications restent accessibles
                        depuis la plateforme actuelle.

                    </p>

                </div>


                <a
                    href="https://www.arcadsanteplus.org/index.php/actualites"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="news-archive-button"
                >

                    Voir toutes les archives

                    <span aria-hidden="true">
                        →
                    </span>

                </a>


            </div>

        </div>

    </section>


</main>



<?php
require __DIR__ . '/../templates/footer.php';
?>



<script src="../java.js"></script>


</body>

</html>