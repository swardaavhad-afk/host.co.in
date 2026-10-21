document.addEventListener('DOMContentLoaded', function () {
    var header = document.getElementById('hcHeader');
    var nav = document.getElementById('hcNav');
    var burger = document.getElementById('hcBurger');
    var dropdowns = document.querySelectorAll('.hc-has-dropdown');

    function closeAllDropdowns(except) {
        dropdowns.forEach(function (item) {
            if (item !== except) {
                item.classList.remove('is-open');
                item.querySelector('.hc-menu__link').setAttribute('aria-expanded', 'false');
            }
        });
    }

    function toggleMobileMenu(open) {
        nav.classList.toggle('is-open', open);
        burger.classList.toggle('is-active', open);
        burger.setAttribute('aria-expanded', String(open));
        document.body.classList.toggle('hc-menu-open', open);
    }

    // Dropdown toggle (click on mobile, click/keyboard on desktop)
    dropdowns.forEach(function (item) {
        var btn = item.querySelector('.hc-menu__link');
        btn.addEventListener('click', function (e) {
            e.stopPropagation();
            var open = !item.classList.contains('is-open');
            closeAllDropdowns(item);
            item.classList.toggle('is-open', open);
            btn.setAttribute('aria-expanded', String(open));
        });
    });

    burger.addEventListener('click', function () {
        toggleMobileMenu(!nav.classList.contains('is-open'));
    });

    // Close dropdowns on outside click / Escape
    document.addEventListener('click', function (e) {
        if (!header.contains(e.target)) closeAllDropdowns();
    });
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape') {
            closeAllDropdowns();
            toggleMobileMenu(false);
        }
    });

    // Reset mobile state when resizing to desktop
    window.addEventListener('resize', function () {
        if (window.innerWidth > 991) toggleMobileMenu(false);
    });

    // Shadow on scroll
    function onScroll() {
        header.classList.toggle('is-scrolled', window.scrollY > 10);
    }
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
});
