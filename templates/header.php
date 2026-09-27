<?php
/*
 * Header commun ARCAD Santé Plus
 *
 * $basePath permet au même header de fonctionner
 * depuis n'importe quel niveau du site.
 *
 * Accueil : ''
 * /sections/ : '../'
 * /sections/Nos_actions/ : '../../'
 */

$basePath = $basePath ?? '';
?>

<a class="skip-link" href="#main">Aller au contenu</a>

<header class="site-header" role="banner" id="site-header">

  <div class="container header-inner">

    <!-- Logo -->
    <div class="brand">

      <a
        class="brand-link"
        href="<?= $basePath ?>index.php"
        title="Arcad Santé Plus — Accueil"
      >
        <img
          src="<?= $basePath ?>images/true_logo_Arcad-removebg-preview.png"
          alt="Arcad Santé Plus"
          class="brand-logo"
        >
      </a>

      <button
        id="present-btn"
        class="present-btn"
        aria-controls="home-panel"
        aria-expanded="false"
        type="button"
      >
        Présentation
      </button>

    </div>


    <!-- Navigation desktop -->
    <nav
      class="main-nav"
      role="navigation"
      aria-label="Navigation principale"
    >

      <ul class="nav-list">

        <li class="nav-item">
          <a
            class="nav-link"
            href="<?= $basePath ?>sections/Actualités.php"
          >
            Actualités
          </a>
        </li>


        <!-- Nos Actions -->
        <li class="nav-item nav-dropdown">

          <button
            class="dropdown-toggle"
            aria-expanded="false"
            aria-controls="menu-nos-actions"
            aria-haspopup="true"
            type="button"
          >
            Nos Actions

            <span class="caret" aria-hidden="true">
              ▾
            </span>
          </button>


          <ul
            id="menu-nos-actions"
            class="dropdown-menu"
            role="menu"
            aria-label="Nos Actions"
          >

            <li role="none">
              <a
                role="menuitem"
                class="dropdown-link"
                href="<?= $basePath ?>sections/Nos_actions/nos_sites_et_services.php"
              >
                Nos sites et nos services
              </a>
            </li>

            <li role="none">
              <a
                role="menuitem"
                class="dropdown-link"
                href="<?= $basePath ?>sections/Nos_actions/Renforcement_de_capacités.php"
              >
                Renforcement de capacités
              </a>
            </li>

            <li role="none">
              <a
                role="menuitem"
                class="dropdown-link"
                href="<?= $basePath ?>sections/Nos_actions/Recherche_opérationnelle.php"
              >
                Recherche opérationnelle
              </a>
            </li>

            <li role="none">
              <a
                role="menuitem"
                class="dropdown-link"
                href="<?= $basePath ?>sections/Nos_actions/Plaidoyer.php"
              >
                Plaidoyer
              </a>
            </li>

          </ul>

        </li>


        <!-- Recrutement -->
        <li class="nav-item">
          <a
            class="nav-link"
            href="<?= $basePath ?>sections/Recrutement.php"
          >
            Recrutement
          </a>
        </li>


        <!-- Médiathèque -->
        <li class="nav-item nav-dropdown">

          <button
            class="dropdown-toggle"
            aria-expanded="false"
            aria-controls="menu-mediatheque"
            aria-haspopup="true"
            type="button"
          >
            Médiathèque

            <span class="caret" aria-hidden="true">
              ▾
            </span>
          </button>


          <ul
            id="menu-mediatheque"
            class="dropdown-menu"
            role="menu"
            aria-label="Médiathèque"
          >

            <li role="none">
              <a
                role="menuitem"
                class="dropdown-link"
                href="<?= $basePath ?>sections/Médiathèque/Photothèque.php"
              >
                Photothèque
              </a>
            </li>

            <li role="none">
              <a
                role="menuitem"
                class="dropdown-link"
                href="<?= $basePath ?>sections/Médiathèque/Vidéothèque.php"
              >
                Vidéothèque
              </a>
            </li>

          </ul>

        </li>


        <!-- Contact -->
        <li class="nav-item">
          <a
            class="nav-link"
            href="<?= $basePath ?>sections/nous_joindre.php"
          >
            Nous joindre
          </a>
        </li>

      </ul>

    </nav>


    <!-- Actions header -->
    <div class="header-actions">

      <a
        class="btn btn-donate"
        href="mailto:arcadsanteplus@arcadsanteplus.org?subject=Je%20souhaite%20faire%20un%20don"
        aria-label="Contacter Arcad Santé Plus pour faire un don"
      >

        Faire un don

        <svg
          class="donate-icon"
          viewBox="0 0 24 24"
          fill="currentColor"
          aria-hidden="true"
        >
          <path
            clip-rule="evenodd"
            fill-rule="evenodd"
            d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z"
          >
          </path>
        </svg>

      </a>


      <!-- Hamburger mobile -->
      <button
        id="hamburger"
        class="hamburger"
        aria-label="Ouvrir le menu"
        aria-expanded="false"
        aria-controls="mobile-nav"
        type="button"
      >

        <span class="hamburger-bar"></span>
        <span class="hamburger-bar"></span>
        <span class="hamburger-bar"></span>

      </button>

    </div>

  </div>


  <!-- Navigation mobile -->
  <div
    id="mobile-nav"
    class="mobile-nav"
    aria-hidden="true"
  >

    <ul class="mobile-list">

      <li>
        <a href="<?= $basePath ?>index.php">
          Accueil
        </a>
      </li>

      <li>
        <a href="<?= $basePath ?>sections/Actualités.php">
          Actualités
        </a>
      </li>


      <li>

        <button
          class="mobile-toggle"
          aria-expanded="false"
          type="button"
        >
          Nos Actions ▾
        </button>

        <ul class="mobile-sub">

          <li>
            <a href="<?= $basePath ?>sections/Nos_actions/nos_sites_et_services.php">
              Nos sites et nos services
            </a>
          </li>

          <li>
            <a href="<?= $basePath ?>sections/Nos_actions/Renforcement_de_capacités.php">
              Renforcement de capacités
            </a>
          </li>

          <li>
            <a href="<?= $basePath ?>sections/Nos_actions/Recherche_opérationnelle.php">
              Recherche opérationnelle
            </a>
          </li>

          <li>
            <a href="<?= $basePath ?>sections/Nos_actions/Plaidoyer.php">
              Plaidoyer
            </a>
          </li>

        </ul>

      </li>


      <li>
        <a href="<?= $basePath ?>sections/Recrutement.php">
          Recrutement
        </a>
      </li>


      <li>

        <button
          class="mobile-toggle"
          aria-expanded="false"
          type="button"
        >
          Médiathèque ▾
        </button>

        <ul class="mobile-sub">

          <li>
            <a href="<?= $basePath ?>sections/Médiathèque/Photothèque.php">
              Photothèque
            </a>
          </li>

          <li>
            <a href="<?= $basePath ?>sections/Médiathèque/Vidéothèque.php">
              Vidéothèque
            </a>
          </li>

        </ul>

      </li>


      <li>
        <a href="<?= $basePath ?>sections/nous_joindre.php">
          Nous joindre
        </a>
      </li>


      <li class="mobile-donate">

        <a
          class="btn btn-primary"
          href="mailto:arcadsanteplus@arcadsanteplus.org?subject=Je%20souhaite%20faire%20un%20don"
        >
          Faire un don
        </a>

      </li>

    </ul>

  </div>

</header>