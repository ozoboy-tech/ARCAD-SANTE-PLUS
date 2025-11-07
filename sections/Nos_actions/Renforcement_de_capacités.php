<?php
// Renforcement_de_capacités.php
$current_page = 'renforcement';
?>
<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Renforcement de capacités — Arcad Santé Plus</title>
  <meta name="description" content="Renforcement de capacités — formations, coaching et outils pour améliorer les compétences des équipes locales. Arcad Santé Plus.">
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
 /* ===== Hero / Page header - modern & light ===== */
.page-hero {
  padding:42px 0 28px;
  background: linear-gradient(180deg, #ffffff 0%, #f3f8ff 100%);
}

/* container split */
.hero-inner {
  display:flex;
  gap:28px;
  align-items:center;
  justify-content:space-between;
}

/* left column */
.hero-left {
  flex:1;
  max-width:60%;
  transform: translateY(6px);
  opacity: 0;
  transition: transform 520ms cubic-bezier(.2,.9,.2,1), opacity 520ms ease;
}

/* when revealed */
.hero-left.in-view {
  transform: translateY(0);
  opacity: 1;
}

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

.page-title {
  font-size:34px;
  margin:6px 0 10px;
  color:var(--brand-900);
  line-height:1.05;
}

.page-sub {
  color:var(--muted);
  margin:0 0 18px;
  font-size:15px;
}

/* short bullets */
.hero-list {
  list-style:none;
  margin:0 0 20px;
  padding:0;
  display:flex;
  flex-direction:column;
  gap:8px;
  color:var(--text);
  max-width:640px;
}
.hero-list li {
  font-size:14px;
  color:var(--text);
  background: rgba(6,10,20,0.02);
  padding:8px 12px;
  border-radius:10px;
  display:flex;
  gap:10px;
  align-items:center;
}

/* CTAs */
.hero-ctas { display:flex; gap:12px; align-items:center; flex-wrap:wrap; margin-top:4px; }
.btn-cta-primary {
  --btn-bg: linear-gradient(90deg, var(--brand-700), var(--brand-700));
  padding:12px 18px;
  border-radius:12px;
  background:var(--btn-bg);
  color:#fff;
  font-weight:800;
  box-shadow: 0 14px 36px rgba(11,61,145,0.08);
  transform-origin:center;
  transition: transform 180ms ease, box-shadow 180ms ease;
}
.btn-cta-primary:hover { transform: translateY(-4px); box-shadow:0 26px 60px rgba(11,61,145,0.10); }
.btn-ghost {
  padding:10px 16px;
  border-radius:10px;
  border:1px solid rgba(26,96,196,0.12);
  color:var(--brand-700);
  background:transparent;
  font-weight:700;
}

/* right column (image) */
.hero-right { flex:1; max-width:36%; text-align:right; display:flex; justify-content:flex-end; align-items:center; }
.hero-media {
  width:100%;
  max-width:420px;
  border-radius:14px;
  overflow:hidden;
  position:relative;
  transform: translateZ(0);
  will-change: transform;
  transition: transform 420ms cubic-bezier(.2,.9,.2,1);
}
.hero-image {
  display:block;
  width:100%;
  height:auto;
  object-fit:cover;
  border-radius:12px;
  transform-origin:center;
  transition: transform 420ms ease;
  display:block;
  backface-visibility:hidden;
}

/* soft decorative overlay */
.hero-overlay {
  position:absolute;
  inset:0;
  background: linear-gradient(180deg, rgba(11,61,145,0.06), rgba(46,166,106,0.02));
  mix-blend-mode:soft-light;
  pointer-events:none;
  opacity:0.45;
}

/* small responsive */
@media (max-width:991px) {
  .hero-inner { flex-direction:column-reverse; text-align:center; }
  .hero-left { max-width:100%; }
  .hero-right { max-width:100%; margin-bottom:12px; }
  .hero-media { max-width:92%; }
  .hero-list { align-items:center; }
  .page-title { font-size:28px; }
}

/* reduced-motion fallback */
@media (prefers-reduced-motion: reduce) {
  .hero-left, .hero-media, .hero-image { transition: none !important; transform:none !important; }
}


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
        <a href="../../index.php" class="brand-logo" aria-label="Arcad Santé Plus — Accueil">Arcad <span style="color:var(--brand-700)">Santé</span> Plus</a>
      </div>

      <nav class="main-nav" role="navigation" aria-label="Navigation principale">
        <ul class="nav-list">
          <li class="nav-item"><a href="../../index.php">Accueil</a></li>
          <li class="nav-item"><a href="../Actualités.php">Actualités</a></li>
          <li class="nav-item"><a href="acceuil.php">Nos actions</a></li>
          <li class="nav-item"><a href="../Médiathèque/Photothèque.php">Médiathèque</a></li>
          <li class="nav-item"><a href="../nous_joindre.php">Nous joindre</a></li>
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
        <li><a href="../../index.php">Accueil</a></li>
        <li><a href="acceuil.php">Nos actions</a></li>
        <li><a href="../Médiathèque/Photothèque.php">Médiathèque</a></li>
        <li><a href="./nous_joindre.php">Nous joindre</a></li>
      </ul>
    </div>
  </header>

  <!-- MAIN -->
  <main id="main" role="main">
  <section class="page-hero">
  <div class="container hero-inner">
    <div class="hero-left">
      <div class="hero-pretitle">Programme phare</div>
      <h1 class="page-title">Renforcement de capacités</h1>
      <p class="page-sub">Formations, coaching et outils concrets pour améliorer les compétences des équipes locales et la qualité des soins.</p>

      <ul class="hero-list" aria-hidden="false">
        <li><strong>Formations pratiques</strong> — ateliers et simulations cliniques</li>
        <li><strong>Coaching terrain</strong> — mentoring et supervision</li>
        <li><strong>Outils & protocoles</strong> — guides, checklists et supports</li>
      </ul>

      <div class="hero-ctas">
        <a class="btn btn-cta-primary" href="../nous_joindre.php" aria-label="Demander une formation">Demander une formation</a>
        <a class="btn btn-ghost" href="../../index.php" aria-label="Retour à l'accueil">Retour à l'accueil</a>
      </div>
    </div>

    <div class="hero-right" aria-hidden="false">
      <div class="hero-media" id="heroMedia">
        <img src="images/hero-reinforcement.jpg" alt="Formation sur le terrain" class="hero-image" />
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
            <h2>Qu'est-ce que le renforcement de capacités ?</h2>
            <p class="lead-par">Le renforcement de capacités regroupe des activités de formation, de coaching et de mise à disposition d'outils qui visent à améliorer les compétences individuelles et organisationnelles des acteurs de santé. L'objectif est durable : renforcer la qualité des services et assurer l'autonomie des équipes locales.</p>

            <div class="section-block">
              <h3>Approche</h3>
              <p>Notre approche combine formations pratiques (ateliers, formations continues), coaching sur le terrain, supervision clinique et fourniture d'outils (protocoles, guides et supports pédagogiques). Nous adaptons les modules selon le contexte local et les besoins identifiés.</p>
            </div>

            <div class="section-block">
              <h3>Exemples d'activités</h3>
              <ul>
                <li>Ateliers de prise en charge d'urgences et premiers soins</li>
                <li>Formation en santé maternelle et néonatale</li>
                <li>Renforcement des capacités en gestion des stocks et logistique</li>
                <li>Coaching des équipes pour l'amélioration continue de la qualité</li>
              </ul>
            </div>

            <div class="section-block">
              <h3>Résultats attendus</h3>
              <p>Augmentation de la qualité des services, meilleure rétention du personnel, adoption de bonnes pratiques et amélioration des indicateurs de santé.</p>
            </div>

            <div class="section-block">
              <h3>Programme type (exemple)</h3>
              <div class="accordion" id="programAccordion">
                <div class="acc-item">
                  <div class="acc-head">Module 1 — Diagnostic & besoins locaux <span aria-hidden="true">+</span></div>
                  <div class="acc-body">Évaluation rapide des capacités existantes, cartographie des besoins, construction d'un plan de formation adapté.</div>
                </div>
                <div class="acc-item">
                  <div class="acc-head">Module 2 — Formation pratique (3 jours) <span aria-hidden="true">+</span></div>
                  <div class="acc-body">Ateliers pratiques, jeux de rôle et sessions cliniques supervisées.</div>
                </div>
                <div class="acc-item">
                  <div class="acc-head">Module 3 — Coaching et supervision (3 mois) <span aria-hidden="true">+</span></div>
                  <div class="acc-body">Visites sur le terrain, mentoring et suivi des indicateurs.</div>
                </div>
              </div>
            </div>

            <div class="section-block">
              <h3>Contact / demande</h3>
              <p>Pour solliciter une intervention ou obtenir le détail des modules, cliquez sur <a class="btn btn-primary" href="#contact" aria-label="Demander une formation">Demander une formation</a> ou envoyez-nous un message via le formulaire de contact en bas de page.</p>
            </div>
          </div>
        </main>

        <!-- SIDEBAR -->
        <aside class="sidebar">
          <div class="card">
            <div class="side-title">Résumé rapide</div>
            <p class="muted mu">Durée type : 1 journée à 3 mois (selon le besoin). Public : agents de santé, bénévoles, managers locaux.</p>

            <div class="side-title">Modules clés</div>
            <ul class="quick-links">
              <li><a href="#programAccordion">Diagnostic & besoins</a></li>
              <li><a href="#programAccordion">Formation pratique</a></li>
              <li><a href="#programAccordion">Coaching & supervision</a></li>
            </ul>

            <div style="height:12px"></div>

            <div class="sticky-cta">
              <a class="btn btn-primary" href="#contact">Demander une formation</a>
              <a class="btn btn-secondary" href="/sections/Nos_actions/renforcement.php">Voir projets</a>
            </div>
          </div>

          <div style="height:18px"></div>

          <div class="card">
            <div class="side-title">Documents</div>
            <ul class="quick-links">
              <li><a href="#">Guide de formation (PDF)</a></li>
              <li><a href="#">Templates & checklists</a></li>
            </ul>
          </div>
        </aside>
      </div>
    </section>
  </main>

  <!-- FOOTER (light version of modern footer) -->
  <footer class="site-footer" role="contentinfo">
    <div class="footer-inner">
      <div class="footer-brand">
        <div style="font-weight:800;font-size:18px">Arcad <span style="color:var(--brand-700)">Santé</span> Plus</div>
        <div class="muted">Organisation engagée pour l'accès équitable aux soins et le renforcement des capacités locales.</div>
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

  // Simple in-view reveal for cards
  (function(){
    const observerOptions = { root: null, threshold: 0.08 };
    const io = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('in-view');
          obs.unobserve(entry.target);
        }
      });
    }, observerOptions);
    document.querySelectorAll('.main-card, .sub-card, .card').forEach(el=> io.observe(el));
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
            // focus for accessibility
            target.setAttribute('tabindex','-1');
            target.focus();
          }
        }
      });
    });
  })();

  // HERO: reveal texte + micro-parallax image (lightweight)
(function () {
  const heroLeft = document.querySelector('.hero-left');
  const heroMedia = document.getElementById('heroMedia');
  let raf = null;

  // reveal hero-left when in viewport
  try {
    const io = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          heroLeft.classList.add('in-view');
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    if (heroLeft) io.observe(heroLeft);
  } catch (e) {
    // fallback: show immediately
    if (heroLeft) heroLeft.classList.add('in-view');
  }

  // micro-parallax only for pointer devices and when user allows motion
  const supportsReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const isTouch = ('ontouchstart' in window) || navigator.maxTouchPoints > 0;

  if (heroMedia && !supportsReducedMotion && !isTouch) {
    const img = heroMedia.querySelector('.hero-image');

    function onPointerMove(e) {
      const rect = heroMedia.getBoundingClientRect();
      const cx = rect.left + rect.width / 2;
      const cy = rect.top + rect.height / 2;
      const dx = (e.clientX - cx) / rect.width; // -0.5 .. 0.5
      const dy = (e.clientY - cy) / rect.height;
      // small rotation / translate
      const tx = dx * 8; // px
      const ty = dy * 8; // px
      const rY = dx * 4; // deg
      const rX = -dy * 4; // deg

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
  }
})();

  </script>
</body>
</html>
