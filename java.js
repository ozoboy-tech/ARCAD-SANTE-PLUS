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