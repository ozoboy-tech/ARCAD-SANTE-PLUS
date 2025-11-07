<?php
// nos_sites_et_services.php
$current_page = 'sites_services';
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Nos sites & nos services — Arcad Santé Plus</title>
  <meta name="description" content="Centres de santé, cliniques mobiles et services de proximité d'Arcad Santé Plus — prévention, consultations, maternité, pharmacie, et actions communautaires.">
  <style>
  /* ===== Variables ===== */
  :root{
    --brand-900: #0B3D91;
    --brand-700: #1A60C4;
    --accent: #2EA66A;
    --text: #0F1724;
    --muted: #6B7280;
    --bg: #f7fbff;
    --container-w: 1200px;
    --radius: 12px;
    --gap: 16px;
  }

  /* ===== Base ===== */
  *{box-sizing:border-box}
  html,body{height:100%}
  body{margin:0;font-family:Inter, system-ui, -apple-system, "Segoe UI", Roboto, Arial;color:var(--text);background:var(--bg);-webkit-font-smoothing:antialiased;line-height:1.45}
  a{color:inherit;text-decoration:none}
  .container{max-width:var(--container-w);margin:0 auto;padding:0 20px}

  .skip-link{position:absolute;left:-999px}
  .skip-link:focus{left:12px;top:12px;padding:8px 12px;background:var(--brand-700);color:#fff;border-radius:8px;z-index:9999}

  /* Header */
  .site-header{width:100%;position:sticky;top:0;z-index:1000;background:linear-gradient(180deg,rgba(255,255,255,0.9),rgba(255,255,255,0.7));backdrop-filter:blur(6px);border-bottom:1px solid rgba(15,23,36,0.06)}
  .header-inner{display:flex;align-items:center;justify-content:space-between;gap:16px;padding:12px 20px}
  .brand{display:flex;align-items:center;gap:12px}
  .brand-logo{height:46px;width:auto;display:block;font-weight:900;color:var(--brand-900);text-decoration:none}
  .present-btn{background:transparent;border:1px solid rgba(15,23,36,0.06);padding:8px 12px;border-radius:8px;font-weight:700;color:var(--brand-700);cursor:pointer}
  .main-nav{display:none}
  .nav-list{list-style:none;margin:0;padding:0;display:flex;gap:18px;align-items:center}
  .nav-item a,.dropdown-toggle{color:var(--text);text-decoration:none;font-weight:600;padding:8px 6px;background:none;border:0;cursor:pointer}
  .header-actions{display:flex;align-items:center;gap:12px}

  .btn { padding:8px 14px;border-radius:10px;text-decoration:none;font-weight:800; display:inline-flex; align-items:center; gap:8px; }
  .btn-primary { background:var(--brand-700); color:#fff; border:0; }
  .btn-secondary { background:transparent; color:var(--brand-700); border:1px solid rgba(26,96,196,0.12); }

  .hamburger{display:inline-flex;flex-direction:column;gap:4px;border:0;background:transparent;padding:8px;cursor:pointer}
  .hamburger-bar{display:block;width:20px;height:2px;background:var(--text);border-radius:2px}

  /* Mobile nav */
  .mobile-nav{display:none;background:#fff;border-top:1px solid rgba(0,0,0,0.06);position:absolute;left:0;top:100%;width:100%;z-index:900}
  .mobile-list{list-style:none;margin:0;padding:12px}

  /* Page hero */
  .page-hero{padding:42px 0 28px;background:linear-gradient(180deg,#fff,#f3f8ff)}
  .hero-inner{display:flex;gap:28px;align-items:center;justify-content:space-between}
  .hero-left{flex:1;max-width:60%;transform:translateY(6px);opacity:0;transition:transform 520ms cubic-bezier(.2,.9,.2,1),opacity 520ms ease}
  .hero-left.in-view{transform:none;opacity:1}
  .hero-pretitle{display:inline-block;padding:6px 10px;background:linear-gradient(90deg, rgba(26,96,196,0.10), rgba(46,166,106,0.04));color:var(--brand-700);border-radius:999px;font-weight:700;font-size:13px;margin-bottom:10px}
  .page-title{font-size:34px;margin:6px 0 10px;color:var(--brand-900)}
  .page-sub{color:var(--muted);margin:0 0 18px}

  .hero-ctas{display:flex;gap:12px;flex-wrap:wrap}

  .hero-right{flex:1;max-width:36%;text-align:right}
  .hero-media{width:100%;max-width:420px;border-radius:12px;overflow:hidden;position:relative}
  .hero-image{display:block;width:100%;height:auto;border-radius:10px}

  /* Content layout */
  .content{padding:18px 0 60px}
  .content-grid{display:grid;grid-template-columns:1fr 360px;gap:28px;align-items:start}
  .card{background:#fff;border-radius:12px;padding:18px;border:1px solid rgba(6,10,20,0.04);box-shadow:0 10px 30px rgba(6,10,20,0.03)}

  .section-block{margin-bottom:18px}
  .section-block h3{margin:0 0 10px;color:var(--brand-900)}
  .section-block p{margin:0;color:var(--text)}

  /* Sites list */
  .sites-list{display:flex;flex-direction:column;gap:12px;margin-top:12px}
  .site-item{display:flex;gap:12px;align-items:flex-start;padding:12px;border-radius:10px;border:1px solid rgba(6,10,20,0.04);background:#fff;box-shadow:0 8px 22px rgba(6,10,20,0.03)}
  .site-meta{flex:1}
  .site-title{font-weight:800;color:var(--brand-900);margin-bottom:6px}
  .site-addr{font-size:14px;color:var(--muted);margin-bottom:8px}
  .site-tags{display:flex;gap:8px;flex-wrap:wrap}
  .site-tag{background:rgba(6,10,20,0.03);padding:6px 8px;border-radius:999px;font-size:13px}

  /* Services grid */
  .services-grid{display:grid;grid-template-columns:repeat(2,1fr);gap:12px;margin-top:12px}
  .service-card{padding:12px;border-radius:10px;background:linear-gradient(180deg,#fff,#fbfdff);border:1px solid rgba(6,10,20,0.04);box-shadow:0 8px 22px rgba(6,10,20,0.03)}
  .service-card h4{margin:0 0 6px;font-size:16px;color:var(--brand-900)}
  .service-card p{margin:0;color:var(--muted);font-size:14px}

  /* Map placeholder */
  .map-placeholder{height:220px;border-radius:10px;background:linear-gradient(180deg,#eaf3ff,#fff);display:flex;align-items:center;justify-content:center;color:var(--muted);border:1px dashed rgba(26,96,196,0.12)}

  /* sidebar */
  .sidebar .side-title{font-weight:800;margin-bottom:10px}
  .quick-links{display:flex;flex-direction:column;gap:8px}
  .quick-links a{padding:8px 10px;border-radius:8px;background:rgba(6,10,20,0.02);display:inline-block}

  .sticky-cta{position:sticky;top:80px;display:flex;flex-direction:column;gap:10px}

  /* responsive */
  @media(min-width:1200px){ .content-grid{grid-template-columns:1fr 360px} }
  @media(max-width:991px){
    .hero-inner{flex-direction:column-reverse;text-align:center}
    .hero-right{order:-1}
    .content-grid{grid-template-columns:1fr}
    .services-grid{grid-template-columns:1fr}
  }
  @media(prefers-reduced-motion:reduce){ *{transition:none!important} }
  </style>
</head>
<body>
  <a class="skip-link" href="#main">Aller au contenu</a>

  <!-- HEADER -->
  <header class="site-header" role="banner" id="site-header">
    <div class="container header-inner">
      <div class="brand">
        <a href="index.php" class="brand-logo" aria-label="Arcad Santé Plus — Accueil">Arcad <span style="color:var(--brand-700)">Santé</span> Plus</a>
        <button class="present-btn" id="presentBtn" aria-controls="home-panel" aria-expanded="false">Présentation</button>
      </div>

      <nav class="main-nav" role="navigation" aria-label="Navigation principale">
        <ul class="nav-list">
          <li class="nav-item"><a href="index.php">Accueil</a></li>
          <li class="nav-item"><a href="index.php#nos-actions">Nos actions</a></li>
          <li class="nav-item"><a href="index.php#mediatheque">Médiathèque</a></li>
          <li class="nav-item"><a href="index.php#contact">Nous joindre</a></li>
        </ul>
      </nav>

      <div class="header-actions">
        <a class="btn btn-primary" href="index.php#don">Faire un don</a>
        <button id="hamburger" class="hamburger" aria-label="Ouvrir le menu" aria-expanded="false">
          <span class="hamburger-bar"></span>
          <span class="hamburger-bar"></span>
          <span class="hamburger-bar"></span>
        </button>
      </div>
    </div>

    <!-- Mobile nav -->
    <div id="mobile-nav" class="mobile-nav" aria-hidden="true">
      <ul class="mobile-list">
        <li><a href="index.php">Accueil</a></li>
        <li><a href="index.php#nos-actions">Nos actions</a></li>
        <li><a href="index.php#mediatheque">Médiathèque</a></li>
        <li><a href="index.php#contact">Nous joindre</a></li>
      </ul>
    </div>
  </header>

  <!-- MAIN -->
  <main id="main" role="main">
    <section class="page-hero">
      <div class="container hero-inner">
        <div class="hero-left">
          <div class="hero-pretitle">Prévention & prise en charge</div>
          <h1 class="page-title">Nos sites & nos services</h1>
          <p class="page-sub">Centres de santé, cliniques mobiles et points de services de proximité — nous offrons des soins complets et des actions de prévention adaptées aux communautés.</p>

          <div class="hero-ctas">
            <a class="btn btn-cta-primary" href="../nous_joindre.php">Contacter un site</a>
            <a class="btn btn-ghost" href="../../index.php">Retour à l'accueil</a>
          </div>
        </div>

        <div class="hero-right">
          <div class="hero-media">
            <img src="images/hero-sites.jpg" alt="Equipes soignantes sur le terrain" class="hero-image">
          </div>
        </div>
      </div>
    </section>

    <section class="content container" aria-labelledby="sites-title">
      <div class="content-grid">
        <!-- MAIN -->
        <main>
          <div class="card" id="sites">
            <h2 id="sites-title">Nos sites</h2>
            <p class="lead-par">Arcad Santé Plus opère via une combinaison de centres fixes, cliniques mobiles et points de services communautaires pour garantir l'accès aux soins essentiels.</p>

            <div class="sites-list" role="list">
              <div class="site-item" role="listitem">
                <div class="site-meta">
                  <div class="site-title">Centre de Santé N'Tomikorobougou</div>
                  <div class="site-addr">N'Tomikorobougou — Immeuble Tapa N'Diaye (Quartier INFSS)</div>
                  <div class="site-tags">
                    <span class="site-tag">Consultations générales</span>
                    <span class="site-tag">Maternité</span>
                    <span class="site-tag">Vaccination</span>
                  </div>
                  <p class="mu muted">Service ouvert : Lun-Ven 08:00–16:30 — Tél : 20 23 72 59</p>
                </div>
              </div>

              <div class="site-item" role="listitem">
                <div class="site-meta">
                  <div class="site-title">Clinique Mobile Sikasso</div>
                  <div class="site-addr">Circuit villages — Région Sikasso</div>
                  <div class="site-tags">
                    <span class="site-tag">Consultations itinérantes</span>
                    <span class="site-tag">Dépistage</span>
                    <span class="site-tag">Santé communautaire</span>
                  </div>
                  <p class="mu muted">Visites programmées : tournées mensuelles selon calendrier local.</p>
                </div>
              </div>

              <div class="site-item" role="listitem">
                <div class="site-meta">
                  <div class="site-title">Point de Service Kati</div>
                  <div class="site-addr">Kati — Centre communautaire Nord</div>
                  <div class="site-tags">
                    <span class="site-tag">Soins de base</span>
                    <span class="site-tag">Approvisionnement en médicaments</span>
                  </div>
                  <p class="mu muted">Service d'orientation et dispensation de médicaments essentiels.</p>
                </div>
              </div>

              <div class="site-item" role="listitem">
                <div class="site-meta">
                  <div class="site-title">Centre de Santé Mopti</div>
                  <div class="site-addr">Mopti — Avenue Principale</div>
                  <div class="site-tags">
                    <span class="site-tag">Urgences légères</span>
                    <span class="site-tag">Référence</span>
                    <span class="site-tag">Formation local</span>
                  </div>
                  <p class="mu muted">Partenaire pour la prise en charge et la référence vers structures spécialisées.</p>
                </div>
              </div>
            </div>

            <div style="height:12px"></div>
            <div class="map-placeholder" aria-hidden="true">Carte interactive (à intégrer) — emplacement des sites</div>
          </div>

          <div class="card" style="margin-top:18px" id="services">
            <h2>Nos services</h2>
            <p class="lead-par">Nos services sont conçus pour couvrir la prévention, la prise en charge médicale, le suivi des patients et le renforcement communautaire.</p>

            <div class="services-grid" role="list">
              <div class="service-card" role="listitem">
                <h4>Consultations générales</h4>
                <p>Consultations médicales de premier recours pour enfants et adultes, gestion des pathologies courantes et orientation.</p>
              </div>

              <div class="service-card" role="listitem">
                <h4>Santé maternelle & infantile</h4>
                <p>Suivi prénatal, accouchements assistés, vaccinations pédiatriques et conseils nutritionnels.</p>
              </div>

              <div class="service-card" role="listitem">
                <h4>Vaccinations & prévention</h4>
                <p>Campagnes de vaccination, dépistage et actions de prévention (sensibilisation, hygiène).</p>
              </div>

              <div class="service-card" role="listitem">
                <h4>Cliniques mobiles</h4>
                <p>Unités mobiles pour atteindre les zones éloignées : consultations, dépistage et distribution de médicaments.</p>
              </div>

              <div class="service-card" role="listitem">
                <h4>Pharmacie & approvisionnement</h4>
                <p>Dispensation de médicaments essentiels, gestion des stocks et distribution ciblée lors de campagnes.</p>
              </div>

              <div class="service-card" role="listitem">
                <h4>Référence & coordination</h4>
                <p>Orientation vers structures spécialisées et coordination avec partenaires pour cas complexes.</p>
              </div>
            </div>

            <div class="section-block" style="margin-top:14px">
              <h3>Comment accéder aux services ?</h3>
              <p>Les usagers peuvent se rendre directement dans nos centres, consulter le calendrier des cliniques mobiles ou contacter notre hotline pour orientation et rendez-vous.</p>
            </div>

            <div class="section-block">
              <h3>Qualité & sécurité</h3>
              <p>Nous appliquons des protocoles nationaux, assurons la formation continue du personnel et maintenons des standards de sécurité et d'hygiène stricts.</p>
            </div>

          </div>
        </main>

        <!-- SIDEBAR -->
        <aside class="sidebar">
          <div class="card">
            <div class="side-title">Contact rapide</div>
            <p class="muted mu">Tél: <a href="tel:+22320237259">20 23 72 59</a><br>Email: <a href="mailto:arcadsanteplus@arcadsanteplus.org">arcadsanteplus@arcadsanteplus.org</a></p>
            <div class="sticky-cta">
              <a class="btn btn-primary" href="../nous_joindre.php" aria-label="Demander un rendez-vous">Demander un rendez-vous</a>
              <a class="btn btn-secondary" href="#sites" aria-label="Voir les sites">Voir les sites</a>
            </div>
          </div>

          <div style="height:18px"></div>

          <div class="card">
            <div class="side-title">Horaires généraux</div>
            <p class="muted">Lundi - Vendredi : 08:00 – 16:30<br>Cliniques mobiles : selon planning districtal</p>
          </div>
        </aside>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <footer class="site-footer" role="contentinfo">
    <div class="container footer-inner" style="display:flex;justify-content:space-between;align-items:center;gap:12px">
      <div style="font-weight:800">Arcad <span style="color:var(--brand-700)">Santé</span> Plus</div>
      <div style="color:var(--muted)">&copy; <?= date('Y') ?> Arcad Santé Plus — Tous droits réservés</div>
    </div>
  </footer>

  <!-- JS -->
  <script>
  // mobile menu toggle
  (function(){
    const hamburger = document.getElementById('hamburger');
    const mobileNav = document.getElementById('mobile-nav');
    if (hamburger && mobileNav) {
      hamburger.addEventListener('click', function () {
        const expanded = this.getAttribute('aria-expanded') === 'true';
        this.setAttribute('aria-expanded', String(!expanded));
        mobileNav.setAttribute('aria-hidden', String(expanded));
        mobileNav.style.display = expanded ? 'none' : 'block';
      });
      window.addEventListener('resize', function(){
        if (window.innerWidth >= 992 && mobileNav) {
          mobileNav.style.display = 'none';
          hamburger.setAttribute('aria-expanded', 'false');
        }
      });
    }
  })();

  // reveal hero & cards
  (function(){
    const heroLeft = document.querySelector('.hero-left');
    try {
      const io = new IntersectionObserver((entries, obs) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('in-view');
            obs.unobserve(entry.target);
          }
        });
      }, { threshold: 0.12 });
      if (heroLeft) io.observe(heroLeft);
      document.querySelectorAll('.card').forEach(el => io.observe(el));
    } catch (e) {
      if (heroLeft) heroLeft.classList.add('in-view');
      document.querySelectorAll('.card').forEach(el => el.classList.add('in-view'));
    }
  })();

  // smooth internal anchors
  (function(){
    document.querySelectorAll('a[href^="#"]').forEach(a=>{
      a.addEventListener('click', function(e){
        const href = this.getAttribute('href');
        if (href.length > 1) {
          const target = document.querySelector(href);
          if (target) {
            e.preventDefault();
            target.scrollIntoView({behavior:'smooth', block:'start'});
            target.setAttribute('tabindex','-1');
            target.focus();
          }
        }
      });
    });
  })();
  </script>
</body>
</html>
