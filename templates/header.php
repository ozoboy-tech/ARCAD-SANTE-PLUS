<?php

declare(strict_types=1);

$basePath = $basePath ?? '';
$currentPage = $currentPage ?? '';

$navigation = [
    ['home', 'Accueil', 'index.php'],
    ['organisation', 'L’organisation', 'sections/organisation.php'],
    ['actions', 'Nos actions', 'sections/Nos_actions/acceuil.php'],
    ['actualites', 'Actualités', 'sections/Actualités.php'],
    ['ressources', 'Ressources', 'sections/ressources.php'],
    ['recrutement', 'Recrutement', 'sections/Recrutement.php'],
];

?>
<a class="skip-link" href="#main">Aller au contenu</a>

<div class="utility-bar">
    <div class="container utility-bar__inner">
        <span>ARCAD Santé PLUS</span>
        <span>Bamako, Mali</span>
    </div>
</div>

<header class="site-header" id="site-header">
    <div class="container site-header__inner">
        <a class="brand" href="<?= e($basePath) ?>index.php"
           aria-label="ARCAD Santé PLUS, accueil">
            <img src="<?= e($basePath) ?>images/true_logo_Arcad.png"
                 alt="ARCAD Santé PLUS"
                 width="800" height="324">
        </a>

        <button class="menu-toggle" type="button"
                aria-controls="primary-nav" aria-expanded="false">
            <span class="menu-toggle__lines" aria-hidden="true"></span>
            <span>Menu</span>
        </button>

        <nav class="primary-nav" id="primary-nav"
             aria-label="Navigation principale">
            <ul>
                <?php foreach ($navigation as [$key, $label, $target]): ?>
                    <li>
                        <a href="<?= e($basePath . $target) ?>"
                           <?= $currentPage === $key
                               ? 'aria-current="page"'
                               : '' ?>>
                            <?= e($label) ?>
                        </a>
                    </li>
                <?php endforeach; ?>
                <li class="primary-nav__contact">
                    <a href="<?= e($basePath) ?>sections/nous_joindre.php"
                       <?= $currentPage === 'contact'
                           ? 'aria-current="page"'
                           : '' ?>>
                        Nous joindre
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>

