<?php
// Recherche_operationnelle.php
$current_page = 'recherche';
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Recherche opérationnelle — Arcad Santé Plus</title>
  <meta name="description" content="Recherche opérationnelle — études, évaluations et production de preuves pour optimiser les actions d'Arcad Santé Plus.">
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

  /* Skip link */
  .skip-link{position:absolute;left:-999px;top:auto;width:1px;height:1px;overflow:hidden}
  .skip-link:focus{left:12px;top:12px;width:auto;height:auto;padding:8px 12px;background:var(--brand-700);color:#fff;border-radius:8px;z-index:9999}

  /* ===== Header ===== */
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

  /* ===== Hero / Page header ===== */
  .page-hero {
    padding:42px 0 28px;
    background: linear-gradient(180deg, #ffffff 0%, #f3f8ff 100%);
  }
  .hero-inner {
    display:flex;
    gap:28px;
    align-items:center;
    justify-content:space-between;
  }
  .hero-left {
    flex:1;
    max-width:60%;
    transform: translateY(6px);
    opacity: 0;
    transition: transform 520ms cubic-bezier(.2,.9,.2,1), opacity 520ms ease;
  }
  .hero-left.in-view { transform: translateY(0); opacity:1; }

  .hero-pretitle {
    display:inline-block;
    padding:6px 10px;
    background: linear-gradient(90deg, rgba(26,96,196,0.10), rgba(46,166,106,0.04));
    color:var(--brand-700);
    border-radius:999px;
    font-weight:700;
    font-size:13px;
    margin-bottom:10px;
  }

  .page-title { font-size:34px; margin:6px 0 10px; color:var(--brand-900); line-height:1.05; }
  .page-sub { color:var(--muted); margin:0 0 18px; font-size:15px; }

  .hero-list { list-style:none; margin:0 0 20px; padding:0; display:flex; flex-direction:column; gap:8px; color:var(--text); max-width:640px; }
  .hero-list li { font-size:14px; color:var(--text); background: rgba(6,10,20,0.02); padding:8px 12px; border-radius:10px; display:flex; gap:10px; align-items:center; }

  .hero-ctas { display:flex; gap:12px; align-items:center; flex-wrap:wrap; margin-top:4px; }
  .btn-cta-primary { padding:12px 18px; border-radius:12px; background:linear-gradient(90deg, var(--brand-700), var(--brand-700)); color:#fff; font-weight:800; box-shadow: 0 14px 36px rgba(11,61,145,0.08); transition: transform 180ms ease, box-shadow 180ms ease; }
  .btn-cta-primary:hover { transform: translateY(-4px); box-shadow:0 26px 60px rgba(11,61,145,0.1); }
  .btn-ghost { padding:10px 16px; border-radius:10px; border:1px solid rgba(26,96,196,0.12); color:var(--brand-700); background:transparent; font-weight:700; }

  .hero-right { flex:1; max-width:36%; text-align:right; display:flex; justify-content:flex-end; align-items:center; }
  .hero-media { width:100%; max-width:420px; border-radius:14px; overflow:hidden; position:relative; transform: translateZ(0); will-change: transform; transition: transform 420ms cubic-bezier(.2,.9,.2,1); }
  .hero-image { display:block; width:100%; height:auto; object-fit:cover; border-radius:12px; transform-origin:center; transition: transform 420ms ease; backface-visibility:hidden; }
  .hero-overlay { position:absolute; inset:0; background: linear-gradient(180deg, rgba(11,61,145,0.06), rgba(46,166,106,0.02)); mix-blend-mode:soft-light; pointer-events:none; opacity:0.45; }

  /* ===== Content layout ===== */
  .content{padding:18px 0 60px}
  .content-grid{display:grid;grid-template-columns: 1fr 360px;gap:28px;align-items:start}
  .card{background:#fff;border-radius:12px;padding:18px;border:1px solid rgba(6,10,20,0.04);box-shadow:0 10px 30px rgba(6,10,20,0.03)}

  /* main article */
  .article h2{margin-top:0}
  .lead-par { color:var(--muted); margin-bottom:14px; }

  /* sections */
  .section-block{margin-bottom:18px}
  .section-block h3{margin:0 0 10px;color:var(--brand-900)}
  .section-block p{margin:0;color:var(--text)}

  /* methods list */
  .methods { display:flex; gap:12px; flex-wrap:wrap; margin-top:12px; }
  .method-item { background:#fff; border-radius:10px; padding:12px 14px; box-shadow:0 8px 22px rgba(6,10,20,0.03); border:1px solid rgba(6,10,20,0.04); min-width:160px; }

  /* accordion */
  .accordion { margin-top:10px; display:flex; flex-direction:column; gap:10px; }
  .acc-item { border-radius:10px; overflow:hidden; border:1px solid rgba(6,10,20,0.04); background:#fff; }
  .acc-head { display:flex; justify-content:space-between; align-items:center; gap:12px; padding:12px 14px; cursor:pointer; font-weight:700; }
  .acc-body { padding:12px 14px; color:var(--muted); display:none; }
  .acc-item.open .acc-body { display:block; }
  .acc-item.open .acc-head { background: linear-gradient(90deg, rgba(26,96,196,0.06), rgba(46,166,106,0.02)); }

  /* sidebar */
  .sidebar .side-title{font-weight:800;margin-bottom:10px}
  .quick-links{display:flex;flex-direction:column;gap:8px}
  .quick-links a{padding:8px 10px;border-radius:8px;background:rgba(6,10,20,0.02);display:inline-block}

  /* CTA sticky bar */
  .sticky-cta { position: sticky; top:80px; display:flex; gap:8px; flex-direction:column; align-items:flex-end; }

  /* Footer styles (light version of your modern footer) */
  .site-footer { background:#fff;border-top:1px solid rgba(0,0,0,0.06); padding:28px 0 40px; margin-top:40px }
  .footer-inner { max-width:var(--container-w); margin:0 auto; padding:0 20px; display:flex; justify-content:space-between; gap:12px; align-items:center; flex-wrap:wrap }
  .footer-brand { display:flex;flex-direction:column; gap:8px }
  .footer-bottom { width:100%; display:flex; justify-content:space-between; gap:12px; align-items:center; margin-top:16px; color:var(--muted) }

  /* small utilities */
  .mu { margin-bottom:10px }
  .muted { color:var(--muted) }

  /* responsive */
  @media(min-width: 992px){
    .main-nav{display:block}
    .hamburger{display:none}
    .mobile-nav{display:none !important}
  }
  @media(max-width:991px){
    .hero-inner{flex-direction:column; text-align:center}
    .hero-right{order:-1;text-align:center}
    .content-grid{grid-template-columns:1fr; gap:18px}
    .sticky-cta{position:static; align-items:center}
  }

  /* small polish */
  .btn-primary { transition: transform .18s ease, box-shadow .18s ease; }
  .btn-primary:hover { transform: translateY(-3px); box-shadow:0 18px 40px rgba(11,61,145,0.08) }
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
          <li class="nav-item"><a href="index.php#actualites">Actualités</a></li>
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
          <div class="hero-pretitle">Recherche & Évidence</div>
          <h1 class="page-title">Recherche opérationnelle</h1>
          <p class="page-sub">Études, évaluations et production de preuves pour améliorer l'efficacité et l'impact de nos interventions sur le terrain.</p>

          <ul class="hero-list" aria-hidden="false">
            <li><strong>Collecte de données</strong> — enquêtes, évaluations et suivis</li>
            <li><strong>Analyse & rapport</strong> — transformation des données en recommandations</li>
            <li><strong>Diffusion</strong> — partage des résultats avec partenaires et décideurs</li>
          </ul>

          <div class="hero-ctas">
            <a class="btn btn-cta-primary" href="../nous_joindre.php" aria-label="Solliciter une étude">Solliciter une étude</a>
            <a class="btn btn-ghost" href="../../index.php" aria-label="Retour à l'accueil">Retour à l'accueil</a>
          </div>
        </div>

        <div class="hero-right" aria-hidden="false">
          <div class="hero-media" id="heroMedia">
            <img src="images/hero-research.jpg" alt="Collecte de données sur le terrain" class="hero-image" />
            <div class="hero-overlay" aria-hidden="true"></div>
          </div>
        </div>
      </div>
    </section>

    <section class="content container">
      <div class="content-grid">
        <!-- MAIN ARTICLE -->
        <main class="article">
          <div class="card">
            <h2>Qu'est-ce que la recherche opérationnelle ?</h2>
            <p class="lead-par">La recherche opérationnelle vise à produire des preuves pratiques pour améliorer la mise en œuvre des programmes de santé. Elle combine méthodes quantitatives et qualitatives pour répondre à des questions concrètes sur l'efficacité, l'efficience et l'acceptabilité des interventions.</p>

            <div class="section-block">
              <h3>Objectifs</h3>
              <p>Générer des recommandations opérationnelles pour optimiser la conception des projets, informer les décideurs et améliorer la prise en charge des populations.</p>
            </div>

            <div class="section-block">
              <h3>Méthodes courantes</h3>
              <div class="methods">
                <div class="method-item">Enquêtes ménages</div>
                <div class="method-item">Enquêtes de satisfaction</div>
                <div class="method-item">Études qualitatives (FGD, interviews)</div>
                <div class="method-item">Analyses statistiques et géospatiales</div>
              </div>
            </div>

            <div class="section-block">
              <h3>Exemples d'études</h3>
              <ul>
                <li>Évaluation d'une campagne de vaccination : couverture, obstacles et recommandations</li>
                <li>Analyse des parcours patients pour réduire les délais d'accès aux soins</li>
                <li>Étude d'acceptabilité d'un service de télémédecine en zones rurales</li>
              </ul>
            </div>

            <div class="section-block">
              <h3>Processus type (exemple)</h3>
              <div class="accordion" id="researchAccordion">
                <div class="acc-item">
                  <div class="acc-head">1 — Formulation de la question et design <span aria-hidden="true">+</span></div>
                  <div class="acc-body">Définir la question opérationnelle, le design méthodologique et les indicateurs pertinents.</div>
                </div>
                <div class="acc-item">
                  <div class="acc-head">2 — Collecte & contrôle qualité <span aria-hidden="true">+</span></div>
                  <div class="acc-body">Collecte sur le terrain ou via bases existantes, suivi qualité et nettoyage des données.</div>
                </div>
                <div class="acc-item">
                  <div class="acc-head">3 — Analyse & recommandations <span aria-hidden="true">+</span></div>
                  <div class="acc-body">Analyses descriptives, modélisations si nécessaire, et formulation de recommandations pratiques.</div>
                </div>
                <div class="acc-item">
                  <div class="acc-head">4 — Diffusion & appui à l'appropriation <span aria-hidden="true">+</span></div>
                  <div class="acc-body">Production de rapports, policy briefs, ateliers de restitution et coaching des partenaires.</div>
                </div>
              </div>
            </div>

            <div class="section-block">
              <h3>Résultats attendus</h3>
              <p>Amélioration des processus opérationnels, adaptation des interventions au contexte local, et prise de décision fondée sur des preuves.</p>
            </div>

            <div class="section-block">
              <h3>Demande d'étude / collaboration</h3>
              <p>Pour solliciter une étude, obtenir un devis ou co-concevoir une recherche, utilisez le bouton <a class="btn btn-primary" href="#contact" aria-label="Solliciter une étude">Solliciter une étude</a> ou contactez-nous via le formulaire de la page contact.</p>
            </div>
          </div>
        </main>

        <!-- SIDEBAR -->
        <aside class="sidebar">
          <div class="card">
            <div class="side-title">Résumé rapide</div>
            <p class="muted mu">Durée typique : 2–6 mois selon l'ampleur. Equipe : chercheurs, data analysts, enquêteurs terrain.</p>

            <div class="side-title">Livrables</div>
            <ul class="quick-links">
              <li><a href="#">Rapport final</a></li>
              <li><a href="#">Policy brief</a></li>
              <li><a href="#">Dataset (sur demande)</a></li>
            </ul>

            <div style="height:12px"></div>

            <div class="sticky-cta">
              <a class="btn btn-primary" href="#contact">Solliciter une étude</a>
              <a class="btn btn-secondary" href="/sections/Nos_actions/recherche.php">Voir projets</a>
            </div>
          </div>

          <div style="height:18px"></div>

          <div class="card">
            <div class="side-title">Ressources</div>
            <ul class="quick-links">
              <li><a href="#">Publications & rapports</a></li>
              <li><a href="#">Méthodologies</a></li>
            </ul>
          </div>
        </aside>
      </div>
    </section>
  </main>

  <!-- FOOTER -->
  <footer class="site-footer" role="contentinfo">
    <div class="footer-inner">
      <div class="footer-brand">
        <div style="font-weight:800;font-size:18px">Arcad <span style="color:var(--brand-700)">Santé</span> Plus</div>
        <div class="muted">Organisation engagée pour l'accès équitable aux soins et la production de connaissances actionnables.</div>
      </div>

      <div style="display:flex;gap:12px;align-items:center">
        <div class="muted">&copy; <?= date('Y') ?> Arcad Santé Plus</div>
      </div>
    </div>
  </footer>

  <!-- Inline JS -->
  <script>
  // header: mobile menu toggle
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
      // hide on resize up
      window.addEventListener('resize', function(){
        if (window.innerWidth >= 992) {
          mobileNav.style.display = 'none';
          hamburger.setAttribute('aria-expanded', 'false');
        }
      });
    }
  })();

  // accordion
  (function(){
    const accHeads = document.querySelectorAll('.acc-head');
    accHeads.forEach(head => {
      head.addEventListener('click', function(){
        const item = head.parentElement;
        const open = item.classList.contains('open');
        // close others
        document.querySelectorAll('.acc-item.open').forEach(i=> i.classList.remove('open'));
        if (!open) item.classList.add('open');
      });
      // keyboard support
      head.setAttribute('tabindex','0');
      head.addEventListener('keydown', function(e){
        if (e.key === 'Enter' || e.key === ' ') { e.preventDefault(); head.click(); }
      });
    });
  })();

  // Simple in-view reveal for hero and cards
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

  // micro-parallax for hero image (desktop non-touch, respects reduced motion)
  (function () {
    const heroMedia = document.getElementById('heroMedia');
    if (!heroMedia) return;
    const supportsReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const isTouch = ('ontouchstart' in window) || navigator.maxTouchPoints > 0;
    if (supportsReducedMotion || isTouch) return;
    const img = heroMedia.querySelector('.hero-image');
    let raf = null;
    function onPointerMove(e) {
      const rect = heroMedia.getBoundingClientRect();
      const cx = rect.left + rect.width / 2;
      const cy = rect.top + rect.height / 2;
      const dx = (e.clientX - cx) / rect.width;
      const dy = (e.clientY - cy) / rect.height;
      const tx = dx * 8;
      const ty = dy * 8;
      const rY = dx * 4;
      const rX = -dy * 4;
      if (raf) cancelAnimationFrame(raf);
      raf = requestAnimationFrame(() => {
        heroMedia.style.transform = `translate3d(${tx}px, ${ty}px, 0) rotateX(${rX}deg) rotateY(${rY}deg)`;
        img.style.transform = `scale(1.03) translate3d(${tx * 0.2}px, ${ty * 0.2}px, 0)`;
      });
    }
    function onPointerLeave() {
      if (raf) cancelAnimationFrame(raf);
      raf = requestAnimationFrame(() => {
        heroMedia.style.transform = '';
        img.style.transform = '';
      });
    }
    heroMedia.addEventListener('pointermove', onPointerMove);
    heroMedia.addEventListener('pointerleave', onPointerLeave);
  })();

  // small smooth scroll for internal anchor links
  (function(){
    document.querySelectorAll('a[href^="#"]').forEach(a=>{
      a.addEventListener('click', function(e){
        const hash = this.getAttribute('href');
        if (hash.length > 1) {
          const target = document.querySelector(hash);
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
