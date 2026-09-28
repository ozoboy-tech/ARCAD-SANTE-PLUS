document.documentElement.classList.add('has-js');

document.addEventListener('DOMContentLoaded', () => {
    const button = document.querySelector('.menu-toggle');
    const navigation = document.querySelector('.primary-nav');

    if (!button || !navigation) {
        return;
    }

    function closeMenu(restoreFocus = false) {
        navigation.classList.remove('is-open');
        button.setAttribute('aria-expanded', 'false');

        if (restoreFocus) {
            button.focus();
        }
    }

    button.addEventListener('click', () => {
        const isOpen = navigation.classList.toggle('is-open');
        button.setAttribute('aria-expanded', String(isOpen));
    });

    document.addEventListener('keydown', (event) => {
        if (event.key === 'Escape' && navigation.classList.contains('is-open')) {
            closeMenu(true);
        }
    });

    document.addEventListener('click', (event) => {
        if (!navigation.contains(event.target)
            && !button.contains(event.target)) {
            closeMenu();
        }
    });

    navigation.querySelectorAll('a').forEach((link) => {
        link.addEventListener('click', () => closeMenu());
    });
});

