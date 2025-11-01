<?php
// public/index.php
// Page unique (index) qui contient le header, le contenu principal et le footer.
// $current_page peut être réglé pour marquer l'onglet actif (ex: 'home', 'actualites', ...)
$current_page = 'home'; // adapte si tu fais des routes simples plus tard
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Arcad Santé Plus</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <a class="skip-link" href="#main">Aller au contenu</a>

  <!-- HEADER -->
  <header class="site-header" role="banner" id="site-header">
    <div class="container header-inner">
      <div class="brand">
        <a href="/" aria-label="Arcad Santé Plus - Accueil">
          <!-- Remplace logo.svg par ton logo réel -->
          <img src="/assets/images/logo.svg" alt="Arcad Santé Plus" class="brand-logo" />
        </a>
      </div>

      <nav class="main-nav" role="navigation" aria-label="Navigation principale">
        <ul class="nav-list">
          <li class="nav-item nav-has">
            <a href="/" class="<?= $current_page==='home' ? 'active' : '' ?>">Accueil</a>
            <ul class="sub-list">
              <li><a href="#mot-president">Mot du président</a></li>
              <li><a href="#gouvernance">Gouvernance</a></li>
              <li><a href="#qui-sommes-nous">Qui sommes-nous</a></li>
              <li><a href="#notre-equipe">Notre équipe</a></li>
            </ul>
          </li>

          <li class="nav-item"><a href="#actualites">Actualités</a></li>

          <li class="nav-item nav-has">
            <button class="dropdown-toggle" aria-expanded="false">Nos Actions ▾</button>
            <ul class="sub-list">
              <li class="has-sub">
                <button class="sub-toggle" aria-expanded="false">Préventions et soins ▸</button>
                <ul class="sub-sub-list">
                  <li><a href="#sites-services">Nos sites et nos services</a></li>
                </ul>
              </li>
              <li><a href="#renforcement">Renforcement de capacités</a></li>
              <li><a href="#recherche">Recherche opérationnelle</a></li>
              <li><a href="#plaidoyer">Plaidoyer</a></li>
            </ul>
          </li>

          <li class="nav-item"><a href="#recrutement">Recrutement</a></li>

          <li class="nav-item nav-has">
            <button class="dropdown-toggle" aria-expanded="false">Médiathèque ▾</button>
            <ul class="sub-list">
              <li><a href="#phototheque">Photothèque</a></li>
              <li><a href="#videotheque">Vidéothèque</a></li>
            </ul>
          </li>

          <li class="nav-item"><a href="#contact">Nous joindre</a></li>
        </ul>
      </nav>

      <div class="header-actions">
        <a class="btn btn-primary" href="#don">Faire un don</a>

        <button id="hamburger" class="hamburger" aria-label="Menu" aria-expanded="false" aria-controls="mobile-nav">
          <span class="hamburger-box"><span class="hamburger-inner"></span></span>
        </button>
      </div>
    </div>

    <!-- Mobile nav -->
    <div id="mobile-nav" class="mobile-nav" aria-hidden="true">
      <ul class="mobile-list">
        <li><a href="/">Accueil</a></li>
        <li><a href="#actualites">Actualités</a></li>

        <li>
          <button class="mobile-toggle">Nos Actions ▾</button>
          <ul class="mobile-sub">
            <li>
              <button class="mobile-toggle-sub">Préventions et soins ▸</button>
              <ul class="mobile-sub-sub">
                <li><a href="#sites-services">Nos sites et nos services</a></li>
              </ul>
            </li>
            <li><a href="#renforcement">Renforcement de capacités</a></li>
            <li><a href="#recherche">Recherche opérationnelle</a></li>
            <li><a href="#plaidoyer">Plaidoyer</a></li>
          </ul>
        </li>

        <li><a href="#recrutement">Recrutement</a></li>

        <li>
          <button class="mobile-toggle">Médiathèque ▾</button>
          <ul class="mobile-sub">
            <li><a href="#phototheque">Photothèque</a></li>
            <li><a href="#videotheque">Vidéothèque</a></li>
          </ul>
        </li>

        <li><a href="#contact">Nous joindre</a></li>
        <li class="mobile-donate"><a class="btn btn-primary" href="#don">Faire un don</a></li>
      </ul>
    </div>
  </header>

  <!-- MAIN -->
  <main id="main" role="main">
    <!-- HERO -->
    <section class="hero">
      <div class="container hero-inner">
        <div class="hero-left">
          <h1>Arcad Santé Plus</h1>
          <p class="lead">Notre mission : améliorer l'accès aux soins et renforcer les capacités locales.</p>
          <div class="hero-ctas">
            <a class="btn btn-primary" href="#don">Faire un don</a>
            <a class="btn btn-secondary" href="#contact">Nous joindre</a>
          </div>

          <div class="kpis">
            <div class="kpi"><strong>+10 000</strong><span>bénéficiaires</span></div>
            <div class="kpi"><strong>15</strong><span>projets</span></div>
            <div class="kpi"><strong>20</strong><span>partenaires</span></div>
          </div>
        </div>

        <div class="hero-right">
          <!-- image / illustration -->
          <img src="/assets/images/hero-placeholder.jpg" alt="Equipe Arcad Santé Plus" />
        </div>
      </div>
    </section>

    <!-- Exemples de sections demandées (placeholders) -->
    <section id="mot-president" class="section container">
      <h2>Mot du président</h2>
      <p>Texte du mot du président à insérer...</p>
    </section>

    <section id="gouvernance" class="section container">
      <h2>Gouvernance</h2>
      <p>Structure, organigramme et rôles...</p>
    </section>

    <section id="nos-actions" class="section container">
      <h2>Nos Actions</h2>
      <p>Résumé des actions — liens vers les sous-rubriques.</p>
    </section>

    <section id="actualites" class="section container">
      <h2>Actualités</h2>
      <p>Liste des actualités (sera alimentée plus tard).</p>
    </section>

    <section id="mediatheque" class="section container">
      <h2>Médiathèque</h2>
      <p>Photothèque & vidéothèque.</p>
    </section>

    <section id="contact" class="section container">
      <h2>Nous joindre</h2>
      <p>Coordonnées, formulaire de contact, hotline.</p>
    </section>
  </main>

  <!-- FOOTER -->
  <footer class="site-footer">
    <div class="container footer-inner">
      <div class="footer-left">
        <p>&copy; <?= date('Y') ?> Arcad Santé Plus — Tous droits réservés</p>
      </div>

      <div class="footer-partners">
        <h4>Nos partenaires</h4>
        <div class="partners-logos">
          <!-- placer les logos partenaires dans /assets/images/partners/ -->
          <img src="/assets/images/partners/partner1.svg" alt="Partenaire 1" />
          <img src="/assets/images/partners/partner2.svg" alt="Partenaire 2" />
          <img src="/assets/images/partners/partner3.svg" alt="Partenaire 3" />
        </div>
      </div>
    </div>
  </footer>

  <!-- Inline JS minimal pour le header (mobile + dropdown) -->
  <script>
  (function () {
    const hamburger = document.getElementById('hamburger');
    const mobileNav = document.getElementById('mobile-nav');

    if (hamburger && mobileNav) {
      hamburger.addEventListener('click', function () {
        const expanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', String(!expanded));
        mobileNav.setAttribute('aria-hidden', String(expanded));
        mobileNav.style.display = expanded ? 'none' : 'block';
      });
    }

    // mobile toggles
    document.querySelectorAll('.mobile-toggle').forEach(btn => {
      btn.addEventListener('click', function () {
        const next = this.nextElementSibling;
        if (!next) return;
        next.style.display = next.style.display === 'block' ? 'none' : 'block';
      });
    });
    document.querySelectorAll('.mobile-toggle-sub').forEach(btn => {
      btn.addEventListener('click', function () {
        const next = this.nextElementSibling;
        if (!next) return;
        next.style.display = next.style.display === 'block' ? 'none' : 'block';
      });
    });

    // desktop dropdown toggles (button-based for accessibility)
    document.querySelectorAll('.dropdown-toggle, .sub-toggle').forEach(btn => {
      btn.addEventListener('click', function (e) {
        e.stopPropagation();
        const expanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', String(!expanded));
        // close others
        document.querySelectorAll('.dropdown-toggle, .sub-toggle').forEach(x => {
          if (x !== this) x.setAttribute('aria-expanded', 'false');
        });
      });
    });
    document.addEventListener('click', () => {
      document.querySelectorAll('.dropdown-toggle, .sub-toggle').forEach(x => x.setAttribute('aria-expanded','false'));
    });

    // close mobile menu on resize
    window.addEventListener('resize', function () {
      if (window.innerWidth >= 992 && mobileNav) {
        mobileNav.style.display = 'none';
        hamburger.setAttribute('aria-expanded', 'false');
      }
    });
  })();
  </script>
</body>
</html>
