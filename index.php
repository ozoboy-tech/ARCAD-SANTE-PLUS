<?php
// index.php - page unique minimaliste
$current_page = 'home';
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
  
<?php
$basePath = '';
require __DIR__ . '/templates/header.php';
?>

  <!-- MAIN -->
  <main id="main" role="main">
  <section class="hero">
  <div class="container hero-inner">
  <div class="hero-left">
  <h1>Arcad Santé Plus <span class="kicker">— Santé communautaire & inclusion</span></h1>

  <p class="lead">Améliorer l'accès aux soins et renforcer les capacités locales.</p>

  <p class="hero-sub">
    Nous travaillons avec les communautés pour offrir des services de prévention, diagnostic et accompagnement psychosocial.
    Actions terrain, renforcement des capacités et plaidoyer : une approche intégrée au service des populations vulnérables.
  </p>

  <!-- features: petites tuiles alignées -->
  <div class="hero-features" aria-hidden="false">
    <div class="feat">
    <div class="action-ic" aria-hidden="true">
          <img src="images/icon/préventions.svg" alt="description"style="width: 40px; height: 40px; object-fit: contain;" />
          </div>
      <div class="feat-text"><strong>Prévention</strong><span>Campagnes ciblées</span></div>
    </div>

    <div class="feat">
    <div class="action-ic" aria-hidden="true">
          <img src="images/icon/dépistage.svg" alt="description"style="width: 40px; height: 40px; object-fit: contain;" />
          </div>
      <div class="feat-text"><strong>Dépistage</strong><span>Accès simplifié</span></div>
    </div>

    <div class="feat">
    <div class="action-ic" aria-hidden="true">
          <img src="images/icon/accompagner.png" alt="description"style="width: 40px; height: 40px; object-fit: contain;" />
          </div>
      <div class="feat-text"><strong>Accompagnement</strong><span>Soins & psychosocial</span></div>
    </div>
  </div>

  <!-- CTA -->
  <div class="hero-ctas">
  <a class="btn btn-donate" href="mailto:arcadsanteplus@arcadsanteplus.org?subject=Je%20souhaite%20faire%20un%20don" aria-label="Contacter ARCAD Santé PLUS pour faire un don">
  Faire un don
  <svg class="donate-icon" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
    <path clip-rule="evenodd" fill-rule="evenodd"
      d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z">
    </path>
  </svg>
</a>  
  </div>

  <!-- trust row: counters + partners -->
  <div class="hero-trust">
    <div class="kpi" aria-hidden="false">
      <div class="kpi-value"><span class="counter" data-target="10000">0</span>+</div>
      <div class="kpi-label">Bénéficiaires</div>
    </div>

    <div class="kpi">
      <div class="kpi-value"><span class="counter" data-target="15">0</span></div>
      <div class="kpi-label">Projets</div>
    </div>

    <div class="kpi">
      <div class="kpi-value"><span class="counter" data-target="20">0</span></div>
      <div class="kpi-label">Partenaires</div>
    </div>
  </div>
</div>


    <div class="hero-right">
      <img src="images/Gemini_Generated_Image_tq7feutq7feutq7f.png" alt="Equipe Arcad Santé Plus" class="hero-image">
    </div>
  </div>

  <!-- HOME PANEL : boutons flottants (remplacent les 4 articles) -->
  <div id="home-panel" class="home-panel container" aria-hidden="true">
    <div class="home-grid home-buttons">
      <!-- boutons flottants — chacun référence un template via data-template -->
      <button type="button" class="home-card-btn" data-template="template-mot-president" aria-controls="site-modal" aria-expanded="false">
        Mot du président
      </button>

      <button type="button" class="home-card-btn" data-template="template-gouvernance" aria-controls="site-modal" aria-expanded="false">
        Gouvernance
      </button>

      <button type="button" class="home-card-btn" data-template="template-qui" aria-controls="site-modal" aria-expanded="false">
        Qui sommes-nous
      </button>

      <button type="button" class="home-card-btn" data-template="template-equipe" aria-controls="site-modal" aria-expanded="false">
        Notre équipe
      </button>
    </div>

    <!-- Hidden templates (contenu complet des modales) -->
    <div id="template-mot-president" class="modal-template" hidden>
  <div class="modal-hero">
    <!-- optional photo : place images/president.jpg si tu veux -->
    <img src="images/president.jpg" alt="Dr. Oumar DOGONI" class="president-photo" onerror="this.style.display='none'">

    <div class="modal-hero-text">
      <h2 id="site-modal-title">Mot du président</h2>

      <p class="lead-pres">Chères camarades – chères lecteurs et lectrices,</p>

      <p>
        Nos ambitions pour l’année 2022 dans le cadre de la riposte au VIH au Mali se sont construites sur la nécessité d'améliorer notre efficacité afin d'offrir des services de qualité aux personnes les plus touchées par la tuberculose, le VIH et la pandémie de COVID-19.
      </p>

      <p>
        En tant que principal récipiendaire communautaire, nous avons adapté nos actions au contexte pour renforcer les organisations communautaires, promouvoir des services différenciés et développer la recherche communautaire — leviers essentiels pour améliorer la prise en charge et la prévention.
      </p>

      <p>
        En 2022, <strong>8 015 personnes ont été dépistées</strong> dans nos structures, dont <strong>862 nouveaux cas mis sous ARV</strong> et <strong>2 578 personnes avec une charge virale indétectable</strong>. Ces chiffres illustrent l'impact de notre travail collectif sur le terrain.
      </p>

      <p>
        Nous remercions nos partenaires (OMS, ONUSIDA, Fonds Mondial, Coalition Plus, PEPFAR, Sidaction et autres) pour leur soutien continu. Merci également à toute l'équipe pour son engagement quotidien.
      </p>

      <div class="president-signature">
        <div class="president-name">Dr. Oumar DOGONI</div>
        <div class="president-role">Président d'ARCAD SANTE PLUS</div>
      </div>
    </div>
  </div>

  <!-- petits "stats" mis en avant -->
  <div class="modal-stats">
    <div class="stat">
      <div class="stat-value">8 015</div>
      <div class="stat-label">Dépistés (2022)</div>
    </div>
    <div class="stat">
      <div class="stat-value">862</div>
      <div class="stat-label">Nouveaux sous ARV</div>
    </div>
    <div class="stat">
      <div class="stat-value">2 578</div>
      <div class="stat-label">Charge virale indétectable</div>
    </div>
  </div>
</div>


    <div id="template-gouvernance" class="modal-template" hidden>
      <h2>Gouvernance</h2>
      <p>
      Structure associative régie par la loi 04-038 AN/RM du 05 aout 2004 relative aux associations, ARCAD SANTE PLUS est reconnue d’utilité publique par le décret N°2016-0270/P-RM du 29 avril 2016.

Comme toute organisation non gouvernementale moderne, ARCAD SANTE PLUS s’appuie sur une gouvernance à trois entités :

- Une Assemblée Générale (AG) : Organe suprême

- Un Conseil d’Administration (CA) : Organe de décision

- Une Direction : Organe d’Exécution

L’Assemblée générale se réunit une fois par an et le Conseil d’administration tous les trimestres.

La direction exécutive rend compte annuellement à l’Assemblée générale et périodiquement lors de tous les conseils d’administration. Le président du Conseil d’administration est très impliqué dans les activités de la direction exécutive.
      </p>
    </div>

    <div id="template-qui" class="modal-template" hidden>
  <div class="who-hero">
    <img src="images/arcad-building.jpg" alt="ARCAD Santé Plus - activité" class="who-photo" onerror="this.style.display='none'">
    <div class="who-head">
      <h2>Qui sommes-nous</h2>
      <p class="who-lead">Créée en 1994, ARCAD Santé Plus est une organisation malienne engagée dans la lutte contre le VIH et la promotion de la santé sexuelle et reproductive en Afrique de l'Ouest.</p>
    </div>
  </div>

  <div class="who-content">
    <section class="who-section reveal">
      <h3>Notre histoire</h3>
      <p>
        Fondée en 1994 par un collectif de professionnels de santé, ARCAD Santé Plus a développé une expertise de prise en charge et d'accompagnement des personnes vivant avec le VIH. Au fil des années, l'association a élargi ses activités pour mieux répondre aux besoins des populations clés et vulnérables.
      </p>
    </section>

    <section class="who-section reveal">
      <h3>Notre mission</h3>
      <p>
        Promouvoir l'accès aux services de prévention, de dépistage, et de soins, en mettant l'accent sur l'approche communautaire, la réduction des inégalités et le renforcement des capacités locales.
      </p>
      <ul class="who-list">
        <li>Prévention & dépistage</li>
        <li>Prise en charge médicale et psychosociale</li>
        <li>Renforcement des capacités des acteurs communautaires</li>
        <li>Recherche opérationnelle et plaidoyer</li>
      </ul>
    </section>

    <section class="who-section reveal">
      <h3>Nos bénéficiaires</h3>
      <p>
        ARCAD Santé Plus travaille auprès de personnes vivant avec le VIH, des populations clés (dont travailleurs·ses du sexe, hommes ayant des rapports sexuels avec des hommes, jeunes vulnérables), et des communautés affectées par les maladies transmissibles.
      </p>
    </section>

    <section class="who-section reveal">
      <h3>Nos actions principales</h3>
      <p>
        L'association développe des services différenciés (clinique, dépistage, accompagnement), des campagnes de prévention, des formations et des projets de recherche communautaire pour améliorer la qualité et l'accessibilité des soins.
      </p>
    </section>

    <section class="who-section reveal who-impact">
      <h3>Impact & chiffres (exemple)</h3>
      <div class="who-stats">
        <div class="who-stat"><div class="value">+8 000</div><div class="label">personnes dépistées / an</div></div>
        <div class="who-stat"><div class="value">>2 000</div><div class="label">suivis dans nos structures</div></div>
        <div class="who-stat"><div class="value">Partenariats</div><div class="label">ONG internationales, bailleurs</div></div>
      </div>
    </section>

    <section class="who-section reveal who-cta">
      <h3>Nous rejoindre / nous soutenir</h3>
      <p>
        Pour collaborer, soutenir nos actions ou en savoir plus sur nos programmes, consultez la section <a href="#contact">Nous joindre</a> ou écrivez à <a href="mailto:contact@arcadsanteplus.org">contact@arcadsanteplus.org</a>.
      </p>
    </section>
  </div>
</div>


<div id="template-equipe" class="modal-template" hidden>
  <h2>Notre équipe</h2>

  <p class="team-intro reveal">
    Notre équipe réunit professionnel·le·s de santé, chargé·e·s de projet, personnel administratif et bénévoles. 
    Ensemble, nous mettons en œuvre des actions de prévention, de prise en charge et de renforcement des capacités.
  </p>

  <!-- GRID des membres -->
  <div class="team-grid reveal">
    <!-- Membre 1 -->
    <article class="team-card">
      <img src="images/team/chef-projet.jpg" alt="Mme A. NOM - Chef de projet" class="team-photo" onerror="this.style.display='none'">
      <div class="team-info">
        <div class="team-name">Mme A. NOM</div>
        <div class="team-role">Chef de projet</div>
        <p class="team-bio">Coordonne les projets, supervise les équipes terrain et assure les rapports aux partenaires.</p>

        <!-- texte long caché, revealed par "En savoir plus" -->
        <div id="bio-1" class="extra-bio" aria-hidden="true">
          <p>
            Biographie complète : formation, expérience (ex. 10 ans dans la santé communautaire),
            missions précédentes, langues parlées et coordonnées utiles (si autorisées).
          </p>
        </div>

        <button class="team-more" aria-expanded="false" aria-controls="bio-1">En savoir plus</button>
      </div>
    </article>

    <!-- Membre 2 -->
    <article class="team-card">
      <img src="images/team/medecin.jpg" alt="Dr B. NOM - Coordinateur médical" class="team-photo" onerror="this.style.display='none'">
      <div class="team-info">
        <div class="team-name">Dr B. NOM</div>
        <div class="team-role">Coordinateur médical</div>
        <p class="team-bio">Responsable clinique, protocoles de prise en charge et qualité des soins.</p>

        <div id="bio-2" class="extra-bio" aria-hidden="true">
          <p>Biographie complète du Dr B. : diplômes, spécialisations, publications et responsabilités.</p>
        </div>

        <button class="team-more" aria-expanded="false" aria-controls="bio-2">En savoir plus</button>
      </div>
    </article>

    <!-- Membre 3 -->
    <article class="team-card">
      <img src="images/team/animateur.jpg" alt="M. C. NOM - Chargé sensibilisation" class="team-photo" onerror="this.style.display='none'">
      <div class="team-info">
        <div class="team-name">M. C. NOM</div>
        <div class="team-role">Chargé sensibilisation</div>
        <p class="team-bio">Anime les campagnes communautaires et les formations locales.</p>

        <div id="bio-3" class="extra-bio" aria-hidden="true">
          <p>Expérience terrain, méthodes pédagogiques utilisées et partenariats locaux.</p>
        </div>

        <button class="team-more" aria-expanded="false" aria-controls="bio-3">En savoir plus</button>
      </div>
    </article>

    <!-- Membre 4 -->
    <article class="team-card">
      <img src="images/team/admin.jpg" alt="Mme D. NOM - Responsable administratif" class="team-photo" onerror="this.style.display='none'">
      <div class="team-info">
        <div class="team-name">Mme D. NOM</div>
        <div class="team-role">Responsable administratif</div>
        <p class="team-bio">Gère la comptabilité, les ressources humaines et le support logistique.</p>

        <div id="bio-4" class="extra-bio" aria-hidden="true">
          <p>Détails sur parcours administratif, certifications et responsabilités.</p>
        </div>

        <button class="team-more" aria-expanded="false" aria-controls="bio-4">En savoir plus</button>
      </div>
    </article>
  </div>

  <!-- Option: lien vers page équipe complète -->
  <div class="team-footer reveal">
    <p>Pour la liste complète et les contacts officiels, consultez la page <a href="/index.php/arcad-sante-plus/notre-equipe">Notre équipe</a> ou contactez <a href="mailto:contact@arcadsanteplus.org">contact@arcadsanteplus.org</a>.</p>
  </div>
</div>

  </div>
</section>

<!-- GLOBAL MODAL (1 seule réutilisable) -->
<div id="site-modal" class="modal" aria-hidden="true" role="dialog" aria-modal="true" aria-labelledby="site-modal-title">
  <div class="modal-overlay" data-close="true"></div>
  <div class="modal-window" role="document">
    <button class="modal-close" aria-label="Fermer la fenêtre">✕</button>
    <div class="modal-body" tabindex="-1">
      <!-- Le JS injecte ici le contenu depuis les templates -->
    </div>
  </div>
</div>


    <!-- placeholders sections -->
     <!-- PARTENAIRES / logos défilants (placer sous .hero-ctas et avant #nos-actions) -->
<section class="partners" aria-label="Nos partenaires">
  <div class="container partners-wrap">
    <div class="partners-marquee" data-speed="22" aria-hidden="false">
      <div class="marquee-track" role="list">
        <!-- Remplace les src ci-dessous par les chemins réels de tes logos -->
        <div class="partner" role="listitem"><img src="images/part/coalition_international_sida.webp" alt="coalition_international_sida"></div>
        <div class="partner" role="listitem"><img src="images/part/AFD (Agence française de developpement).webp" alt="AFD (Agence française de developpement)"></div>
        <div class="partner" role="listitem"><img src="images/part/AIDES.webp" alt="AIDES"></div>
        <div class="partner" role="listitem"><img src="images/part/HCNLS.png" alt="HCNLS"></div>
        <div class="partner" role="listitem"><img src="images/part/Le fond mondial.webp" alt="Le fond mondial"></div>
        <div class="partner" role="listitem"><img src="images/part/l'initiative sida tuberculose paludisme .webp" alt="l'initiative sida tuberculose paludisme"></div>
        <div class="partner" role="listitem"><img src="images/part/Ministere de la santé comité sectorielle de lute contre le sida.png" alt="Ministere de la santé comité sectorielle de lute contre le sida"></div>
        <div class="partner" role="listitem"><img src="images/part/ONUSIDA.png" alt="ONUSIDA"></div>
        <div class="partner" role="listitem"><img src="images/part/PNUD.webp" alt="PNUD"></div>
        <div class="partner" role="listitem"><img src="images/part/republique du mali.webp" alt="republique du mali"></div>
        <div class="partner" role="listitem"><img src="images/part/Sidaction.webp" alt="Sidaction"></div>
        <div class="partner" role="listitem"><img src="images/part/Unicef.webp" alt="Unicef"></div>
        <div class="partner" role="listitem"><img src="images/part/USAID.webp" alt="HUSAID"></div>

        <!-- DUPLIQUÉ POUR BOUCLE SANS COUTURE (le JS peut dupliquer si tu préfères) -->
        <div class="partner" role="listitem"><img src="images/part/coalition_international_sida.webp" alt="coalition_international_sida"></div>
        <div class="partner" role="listitem"><img src="images/part/AFD (Agence française de developpement).webp" alt="AFD (Agence française de developpement)"></div>
        <div class="partner" role="listitem"><img src="images/part/AIDES.webp" alt="AIDES"></div>
        <div class="partner" role="listitem"><img src="images/part/HCNLS.png" alt="HCNLS"></div>
        <div class="partner" role="listitem"><img src="images/part/Le fond mondial.webp" alt="Le fond mondial"></div>
        <div class="partner" role="listitem"><img src="images/part/l'initiative sida tuberculose paludisme .webp" alt="l'initiative sida tuberculose paludisme"></div>
        <div class="partner" role="listitem"><img src="images/part/Ministere de la santé comité sectorielle de lute contre le sida.png" alt="Ministere de la santé comité sectorielle de lute contre le sida"></div>
        <div class="partner" role="listitem"><img src="images/part/ONUSIDA.png" alt="ONUSIDA"></div>
        <div class="partner" role="listitem"><img src="images/part/PNUD.webp" alt="PNUD"></div>
        <div class="partner" role="listitem"><img src="images/part/republique du mali.webp" alt="republique du mali"></div>
        <div class="partner" role="listitem"><img src="images/part/Sidaction.webp" alt="Sidaction"></div>
        <div class="partner" role="listitem"><img src="images/part/Unicef.webp" alt="Unicef"></div>
        <div class="partner" role="listitem"><img src="images/part/USAID.webp" alt="HUSAID"></div>
      </div>
    </div>
  </div>
</section>










<section id="nos-actions" class="section container actions-section" aria-labelledby="nos-actions-title">
  <header class="actions-header">
    <h2 id="nos-actions-title">Nos Actions</h2>
    <p class="actions-lead">
      ARCAD Santé Plus coordonne des interventions structurées et axées sur l'impact.
      La rubrique principale <strong>Prévention & soins</strong> regroupe nos actions terrain — se déclinant en sous-rubriques opérationnelles présentées ci-dessous.
    </p>
  </header>

  <div class="actions-main">
    <!-- Carte principale (rubrique) -->
    <article class="main-card action-card" role="article" aria-labelledby="act-prevention-main">
      <div class="main-card-inner">
        <div class="action-ic" aria-hidden="true">
        <img src="images/icon/soins.svg" alt="description"style="width: 40px; height: 40px; object-fit: contain;" />
        </div>

        <div class="action-body">
          <h3 id="act-prevention-main">Prévention & soins</h3>
          <p class="action-desc">
            Campagnes de prévention, dépistage, prise en charge et services essentiels (soins primaires, maternité, vaccinations).
            Cette rubrique englobe nos implantations locales — <strong>Nos sites et nos services</strong> — ainsi que les actions de renforcement, recherche et plaidoyer nécessaires pour la durabilité.
          </p>
        </div>
      </div>

      <div class="main-card-cta">
        <a class="card-cta btn btn-primary" href="/sections/Nos_actions/prevention.php" aria-label="En savoir plus sur Prévention & soins">En savoir plus</a>
      </div>
    </article>

    <!-- Sous-rubriques : grille de cards -->
    <div class="sub-grid" role="list" aria-label="Sous-rubriques Prévention & soins">
      <!-- Sub 1 -->
        <article class="action-card sub-card" role="listitem" aria-labelledby="sub-sites" tabindex="0" data-topic="sites-services">
          <div class="action-ic" aria-hidden="true">
          <img src="images/icon/sites_services.svg" alt="description"style="width: 40px; height: 40px; object-fit: contain;" />
          </div>
          <div class="action-body">
            <h4 id="sub-sites">Nos sites & nos services</h4>
            <p class="action-desc">Centres de santé, cliniques mobiles et points de services locaux — accès aux soins de proximité.</p>
          </div>
          <div class="card-cta-wrap">
            <a class="card-cta btn btn-primary" href="sections/Nos_actions/nos_sites_et_services.php" aria-label="En savoir plus sur Nos sites et nos services">En savoir plus</a>
          </div>
        </article>

      <!-- Sub 2 -->
      <article class="action-card sub-card" role="listitem" aria-labelledby="sub-renforcement" tabindex="0" data-topic="renforcement">
        <div class="action-ic" aria-hidden="true">
        <img src="images/icon/renforcements.svg" alt="description"style="width: 40px; height: 40px; object-fit: contain;" />
        </div>
        <div class="action-body">
          <h4 id="sub-renforcement">Renforcement de capacités</h4>
          <p class="action-desc">Formations, coaching et outils pour améliorer les compétences des équipes locales et la qualité des soins.</p>
        </div>
        <div class="card-cta-wrap">
          <a class="card-cta btn btn-primary" href="sections/Nos_actions/Renforcement_de_capacités.php" aria-label="En savoir plus sur Renforcement de capacités">En savoir plus</a>
        </div>
      </article>

      <!-- Sub 3 -->
      <article class="action-card sub-card" role="listitem" aria-labelledby="sub-recherche" tabindex="0" data-topic="recherche">
        <div class="action-ic" aria-hidden="true">
        <img src="images/icon/recherche.svg" alt="description"style="width: 40px; height: 40px; object-fit: contain;" />
        </div>
        <div class="action-body">
          <h4 id="sub-recherche">Recherche opérationnelle</h4>
          <p class="action-desc">Études, évaluation d'interventions et production de preuves pour optimiser nos programmes.</p>
        </div>
        <div class="card-cta-wrap">
          <a class="card-cta btn btn-primary" href="sections/Nos_actions/Recherche_opérationnelle.php" aria-label="En savoir plus sur Recherche opérationnelle">En savoir plus</a>
        </div>
      </article>

      <!-- Sub 4 -->
      <article class="action-card sub-card" role="listitem" aria-labelledby="sub-plaidoyer" tabindex="0" data-topic="plaidoyer">
        <div class="action-ic" aria-hidden="true">
        <img src="images/icon/plaidoyer.svg" alt="description"style="width: 40px; height: 40px; object-fit: contain;" />
        </div>
        <div class="action-body">
          <h4 id="sub-plaidoyer">Plaidoyer</h4>
          <p class="action-desc">Mobilisation, partenariats et plaidoyer pour influencer les politiques et sécuriser le financement des actions.</p>
        </div>
        <div class="card-cta-wrap">
          <a class="card-cta btn btn-primary" href="sections/Nos_actions/Plaidoyer.php" aria-label="En savoir plus sur Plaidoyer">En savoir plus</a>
        </div>
      </article>
    </div>
  </div>

  <div class="actions-footer">
    <p class="actions-note">Pour chaque sous-rubrique, consultez la page dédiée pour les projets, résultats et documents associés.</p>
    <a class="btn btn-secondary action-more" href="/sections/Nos_actions/acceuil.php" aria-label="En savoir plus sur nos actions">En savoir plus</a>
  </div>
</section>

    <section id="actualites" class="section container"><h2>Actualités</h2></section>
    <section id="mediatheque" class="section container"><h2>Médiathèque</h2></section>
  </main>

  <?php
require __DIR__ . '/templates/footer.php';
?>
<script src="java.js"></script>
</body>
</html>
