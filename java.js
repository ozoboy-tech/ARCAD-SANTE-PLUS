// java.js - toggles minimal pour header (presentation panel + mobile menu + dropdowns)

document.addEventListener('DOMContentLoaded', function () {
  const presentBtn = document.getElementById('present-btn');
  const homePanel = document.getElementById('home-panel');
  const hamburger = document.getElementById('hamburger');
  const mobileNav = document.getElementById('mobile-nav');

  // helper open/close panel
  function openPanel() {
    if (!homePanel || !presentBtn) return;
    homePanel.setAttribute('aria-hidden', 'false');
    presentBtn.setAttribute('aria-expanded', 'true');
    const h = homePanel.querySelector('h3');
    if (h && !h.hasAttribute('tabindex')) h.setAttribute('tabindex', '-1');
    if (h) h.focus();
    homePanel.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }
  function closePanel() {
    if (!homePanel || !presentBtn) return;
    homePanel.setAttribute('aria-hidden', 'true');
    presentBtn.setAttribute('aria-expanded', 'false');
    presentBtn.focus();
  }

  if (presentBtn) {
    presentBtn.addEventListener('click', function () {
      const isOpen = this.getAttribute('aria-expanded') === 'true';
      if (isOpen) closePanel(); else openPanel();
    });
  }

  // enhanced dropdown toggles (desktop) - accessible + focus management
document.querySelectorAll('.dropdown-toggle').forEach(btn => {
  btn.addEventListener('click', function (e) {
    e.stopPropagation();
    const isOpen = this.getAttribute('aria-expanded') === 'true';
    // close all other dropdowns
    document.querySelectorAll('.dropdown-toggle').forEach(b => {
      if (b !== this) b.setAttribute('aria-expanded', 'false');
    });
    // toggle this one
    this.setAttribute('aria-expanded', String(!isOpen));

    // if opening, focus first menuitem inside
    if (!isOpen) {
      const menu = document.getElementById(this.getAttribute('aria-controls'));
      if (menu) {
        const first = menu.querySelector('[role="menuitem"], .dropdown-link, a');
        if (first) first.focus();
      }
    }
  });

  // keyboard support: Enter/Space open, ArrowDown open+focus first
  btn.addEventListener('keydown', function (e) {
    if (e.key === 'Enter' || e.key === ' ') {
      e.preventDefault();
      this.click();
    } else if (e.key === 'ArrowDown') {
      e.preventDefault();
      if (this.getAttribute('aria-expanded') !== 'true') this.click();
      const menu = document.getElementById(this.getAttribute('aria-controls'));
      if (menu) {
        const first = menu.querySelector('[role="menuitem"], .dropdown-link, a');
        if (first) first.focus();
      }
    }
  });
});


  // close dropdowns on outside click
  document.addEventListener('click', function () {
    document.querySelectorAll('.dropdown-toggle').forEach(b => b.setAttribute('aria-expanded','false'));
  });

  // mobile menu toggle
  if (hamburger && mobileNav) {
    hamburger.addEventListener('click', function () {
      const expanded = this.getAttribute('aria-expanded') === 'true';
      this.setAttribute('aria-expanded', String(!expanded));
      mobileNav.setAttribute('aria-hidden', String(expanded));
      mobileNav.style.display = expanded ? 'none' : 'block';
    });
    // ensure hidden at load
    if (mobileNav.getAttribute('aria-hidden') === null) {
      mobileNav.setAttribute('aria-hidden','true');
      mobileNav.style.display = 'none';
    }
  }

  // mobile nested toggles
  document.querySelectorAll('.mobile-toggle').forEach(btn => {
    btn.addEventListener('click', function () {
      const next = this.nextElementSibling;
      if (!next) return;
      next.style.display = next.style.display === 'block' ? 'none' : 'block';
    });
  });

  // ESC closes panel and mobile nav
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      if (homePanel && homePanel.getAttribute('aria-hidden') === 'false') closePanel();
      if (hamburger && hamburger.getAttribute('aria-expanded') === 'true') {
        hamburger.setAttribute('aria-expanded','false');
        if (mobileNav) { mobileNav.style.display='none'; mobileNav.setAttribute('aria-hidden','true'); }
      }
      document.querySelectorAll('.dropdown-toggle').forEach(b => b.setAttribute('aria-expanded','false'));
    }
  });
});




// Modal handler (amélioré : animation d'ouverture/fermeture et focus management)
(function () {
  const modal = document.getElementById('site-modal');
  if (!modal) return;
  const overlay = modal.querySelector('.modal-overlay');
  const closeBtn = modal.querySelector('.modal-close');
  const body = modal.querySelector('.modal-body');

  function getFocusable(el) {
    return el.querySelectorAll('a[href], button:not([disabled]), textarea, input, select, [tabindex]:not([tabindex="-1"])');
  }

  let lastFocused = null;

  // Animated open
  function openModal(templateId, triggerBtn) {
    const tpl = document.getElementById(templateId);
    if (!tpl) return;
    lastFocused = triggerBtn || document.activeElement;

    // inject content
    body.innerHTML = tpl.innerHTML;

    // show modal and start animation
    modal.setAttribute('aria-hidden', 'false');
    modal.classList.remove('is-closing');
    // force reflow to ensure transition runs
    void modal.offsetWidth;
    modal.classList.add('is-open');

    // focus first meaningful item after small delay
    setTimeout(() => {
      const first = body.querySelector('h2') || body.querySelector('p') || body;
      if (first && typeof first.focus === 'function') {
        // ensure focusable
        if (!first.hasAttribute('tabindex')) first.setAttribute('tabindex', '-1');
        first.focus();
      }
    }, 160);
  }

  // Animated close
  function closeModal() {
    // start closing animation
    modal.classList.remove('is-open');
    modal.classList.add('is-closing');

    // wait for the modal-window transition to end
    const mw = modal.querySelector('.modal-window');
    if (!mw) {
      // fallback: immediate hide
      modal.setAttribute('aria-hidden', 'true');
      body.innerHTML = '';
      if (lastFocused && typeof lastFocused.focus === 'function') lastFocused.focus();
      return;
    }

    // When transition ends, fully hide and clean up
    const onEnd = function (ev) {
      // ensure it is the transform/opacity transition of modal-window
      if (ev && ev.target !== mw) return;
      modal.setAttribute('aria-hidden', 'true');
      modal.classList.remove('is-closing');
      body.innerHTML = '';
      if (lastFocused && typeof lastFocused.focus === 'function') lastFocused.focus();
      mw.removeEventListener('transitionend', onEnd);
    };
    mw.addEventListener('transitionend', onEnd);
  }

  // attach triggers
  document.querySelectorAll('.home-card-btn').forEach(btn => {
    btn.addEventListener('click', function () {
      const tplId = this.getAttribute('data-template');
      if (!tplId) return;
      openModal(tplId, this);
    });
  });

  // overlay & close
  if (overlay) overlay.addEventListener('click', closeModal);
  if (closeBtn) closeBtn.addEventListener('click', closeModal);

  // ESC to close and basic focus-trap
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && modal.getAttribute('aria-hidden') === 'false') {
      closeModal();
    }
    if (e.key === 'Tab' && modal.getAttribute('aria-hidden') === 'false') {
      const focusable = Array.from(getFocusable(modal));
      if (focusable.length === 0) {
        e.preventDefault();
        return;
      }
      const idx = focusable.indexOf(document.activeElement);
      if (e.shiftKey) {
        if (idx === 0) {
          focusable[focusable.length - 1].focus();
          e.preventDefault();
        }
      } else {
        if (idx === focusable.length - 1) {
          focusable[0].focus();
          e.preventDefault();
        }
      }
    }
  });
})();







// reveal animation for modal templates: add .revealed to modal-body and stagger children
(function () {
  const modal = document.getElementById('site-modal');
  if (!modal) return;
  const body = modal.querySelector('.modal-body');

  // when modal becomes open (aria-hidden = "false"), trigger reveal
  const obs = new MutationObserver((mutations) => {
    for (const m of mutations) {
      if (m.type === 'attributes' && m.attributeName === 'aria-hidden') {
        const isOpen = modal.getAttribute('aria-hidden') === 'false';
        if (isOpen) {
          // remove any previous state
          body.classList.remove('revealed');
          // small delay then stagger reveal
          setTimeout(() => {
            const items = Array.from(body.querySelectorAll('.reveal'));
            items.forEach((el, i) => {
              setTimeout(() => el.classList.add('visible'), i * 80);
            });
            // set container class so CSS transitions apply
            setTimeout(() => body.classList.add('revealed'), 50);
          }, 80);
        } else {
          // close: remove classes
          body.classList.remove('revealed');
          body.querySelectorAll('.reveal').forEach(el => el.classList.remove('visible'));
        }
      }
    }
  });

  obs.observe(modal, { attributes: true, attributeFilter: ['aria-hidden'] });
})();










// team bio expand/collapse inside modal (accessible)
(function () {
  // delegate only if modal exists
  const modal = document.getElementById('site-modal');
  if (!modal) return;

  // handle clicks on team-more buttons (works for dynamically injected content)
  document.addEventListener('click', function (e) {
    const btn = e.target.closest('.team-more');
    if (!btn) return;
    const targetId = btn.getAttribute('aria-controls');
    if (!targetId) return;
    const extra = document.getElementById(targetId);
    if (!extra) return;

    const isOpen = btn.getAttribute('aria-expanded') === 'true';
    if (isOpen) {
      // close
      extra.classList.remove('open');
      extra.setAttribute('aria-hidden', 'true');
      btn.setAttribute('aria-expanded', 'false');
      // optional: scroll the card into view
      btn.closest('.team-card')?.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    } else {
      // open
      extra.classList.add('open');
      extra.setAttribute('aria-hidden', 'false');
      btn.setAttribute('aria-expanded', 'true');
      // ensure smooth reveal: set max-height based on scrollHeight
      // (CSS transition handles the rest)
      // scroll to show the content
      setTimeout(() => {
        btn.closest('.team-card')?.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
      }, 120);
    }
  });
})();










// Hero reveal + lightweight counters (append at end of java.js)
(function () {
  const heroLeft = document.querySelector('.hero-left');
  if (heroLeft) {
    // reveal with small delay for smoother paint
    window.requestAnimationFrame(() => {
      setTimeout(() => heroLeft.classList.add('visible'), 80);
    });
  }

  // counter animation - simple, performant
  function animateCount(el, to, duration = 900) {
    const start = performance.now();
    const from = 0;
    to = Number(to) || 0;
    function tick(now) {
      const p = Math.min(1, (now - start) / duration);
      // easeOutQuad
      const ease = 1 - (1 - p) * (1 - p);
      const value = Math.round(from + (to - from) * ease);
      el.textContent = value.toLocaleString('fr-FR');
      if (p < 1) requestAnimationFrame(tick);
    }
    requestAnimationFrame(tick);
  }

  // trigger counters when in viewport (one-time)
  const counters = Array.from(document.querySelectorAll('.counter'));
  if (counters.length) {
    let triggered = false;
    function onScroll() {
      if (triggered) return;
      const rect = heroLeft ? heroLeft.getBoundingClientRect() : null;
      const topVisible = rect ? (rect.top < window.innerHeight && rect.bottom > 0) : true;
      if (topVisible) {
        counters.forEach(c => {
          const target = c.getAttribute('data-target') || c.textContent || '0';
          animateCount(c, parseInt(target.replace(/\s|\+/g,''), 10) || 0, 3000);
        });
        triggered = true;
        window.removeEventListener('scroll', onScroll);
      }
    }
    window.addEventListener('scroll', onScroll);
    // also try once now
    onScroll();
  }
})();
















// Partners marquee helper: set duration from data-speed and ensure seamless loop if needed
(function () {
  const marqueeWrappers = document.querySelectorAll('.partners-marquee');
  if (!marqueeWrappers.length) return;

  // If user prefers reduced motion, do nothing (CSS covers it)
  const reduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  marqueeWrappers.forEach(wrapper => {
    const track = wrapper.querySelector('.marquee-track');
    if (!track) return;

    // read speed (seconds) from data attribute
    const speedSec = Number(wrapper.getAttribute('data-speed')) || 22;
    // set CSS variable (duration)
    wrapper.style.setProperty('--marquee-duration', `${speedSec}s`);

    // If track length is small, duplicate content so the loop is smooth:
    // only duplicate if not already duplicated (check data attribute)
    if (!track.dataset.duplicated) {
      // duplicate inner nodes
      track.innerHTML += track.innerHTML;
      track.dataset.duplicated = 'true';
    }

    // Pause/resume on hover and focus for accessibility
    if (!reduced) {
      wrapper.addEventListener('mouseenter', () => {
        track.style.animationPlayState = 'paused';
      });
      wrapper.addEventListener('mouseleave', () => {
        track.style.animationPlayState = '';
      });
      // also pause when any child gets focus (keyboard nav)
      track.addEventListener('focusin', () => { track.style.animationPlayState = 'paused'; });
      track.addEventListener('focusout', () => { track.style.animationPlayState = ''; });
    } else {
      // if reduced motion, ensure animation is disabled
      track.style.animation = 'none';
    }
  });
})();








/* footer-enhance.js - reveal columns in stagger (0.5s) + modal + backToTop */
(function () {
  const root = document.documentElement;
  const footer = document.querySelector('.modern-footer') || document.querySelector('.transparent-footer');
  if (!footer) return;

  // accessibility: if user prefers reduced motion, do not animate stagger
  const reduce = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // reveal columns with 500ms stagger
  const cols = Array.from(footer.querySelectorAll('.footer-grid .f-col'));
  if (cols.length) {
    if (reduce) {
      cols.forEach(c => c.classList.add('visible'));
    } else {
      cols.forEach((col, i) => {
        setTimeout(() => col.classList.add('visible'), i * 500); // 500ms between columns
      });
    }
  }

  // back to top button
  const backToTop = footer.querySelector('.back-to-top');
  if (backToTop) {
    backToTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
  }

  // footer contact modal open/close (if present)
  const openBtn = document.getElementById('openContactModal');
  const modal = document.getElementById('footerContactModal');
  const modalClose = document.getElementById('footerModalClose');
  if (openBtn && modal) {
    openBtn.addEventListener('click', () => {
      modal.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
      setTimeout(()=> modal.querySelector('input, textarea, button')?.focus(), 120);
    });
    [modalClose, modal].forEach(el => {
      if (!el) return;
      el.addEventListener('click', (e) => {
        // clicking overlay (modal) closes only if target is overlay
        if (e.target === modal || e.target === modalClose) {
          modal.setAttribute('aria-hidden', 'true');
          document.body.style.overflow = '';
          openBtn.focus();
        }
      });
    });
    document.addEventListener('keydown', (e) => {
      if (e.key === 'Escape' && modal.getAttribute('aria-hidden') === 'false') {
        modal.setAttribute('aria-hidden', 'true');
        document.body.style.overflow = '';
        openBtn.focus();
      }
    });
  }

})();











// Actions cards: persistent active + reveal CTA + in-view entrance
(function () {
  const cards = Array.from(document.querySelectorAll('.action-card'));
  if (!cards.length) return;

  // helper: remove active from all
  function clearActive() {
    cards.forEach(c => { c.classList.remove('active'); c.classList.remove('is-hover'); });
  }

  // set active card
  function setActive(card) {
    if (!card) return;
    cards.forEach(c => {
      if (c === card) c.classList.add('active');
      else c.classList.remove('active');
      c.classList.remove('is-hover'); // clear transient hover state
    });
  }

  // transient hover class (visual micro-lift)
  cards.forEach(card => {
    // mouseenter: mark transient and setActive immediately
    card.addEventListener('mouseenter', () => {
      // set transient hover for micro-interaction
      card.classList.add('is-hover');
      // set as persistent active
      setActive(card);
    });

    // keyboard focus should also set active
    card.addEventListener('focusin', () => setActive(card));

    // touch on mobile: toggle active on first tap
    card.addEventListener('touchstart', (ev) => {
      if (!card.classList.contains('active')) {
        ev.preventDefault(); // prevent immediate navigation on small touch devices
        setActive(card);
      } // if already active, let links work
    });

    // click on card not on CTA should set active (and not follow link)
    card.addEventListener('click', (e) => {
      const target = e.target;
      if (target.closest('.card-cta')) return; // clicking CTA will navigate
      // if card clicked and was active -> do nothing (could navigate if desired)
      if (!card.classList.contains('active')) {
        e.preventDefault();
        setActive(card);
      }
    });
  });

  // click outside clears active
  document.addEventListener('click', (e) => {
    // if clicked inside a card or CTA, do nothing
    if (e.target.closest('.action-card') || e.target.closest('.card-cta')) return;
    clearActive();
  });

  // ESC clears active
  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') clearActive();
  });

  // IntersectionObserver to reveal cards into view with slight stagger
  try {
    const io = new IntersectionObserver((entries, obs) => {
      entries.forEach((entry, idx) => {
        if (entry.isIntersecting) {
          const el = entry.target;
          el.classList.add('in-view');
          // stagger via inline transitionDelay
          const index = cards.indexOf(el);
          el.style.transitionDelay = (index * 80) + 'ms';
          obs.unobserve(el);
        }
      });
    }, { threshold: 0.08 });

    cards.forEach(c => io.observe(c));
  } catch (err) {
    // no-op if IntersectionObserver not supported
    cards.forEach(c => c.classList.add('in-view'));
  }
})();
