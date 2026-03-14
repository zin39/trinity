/* ============================================
   Karissa Subedi Career Consultancy Services
   Main JS v2.0
   ============================================ */

(function () {
    'use strict';

    // ── Sticky Navbar ──────────────────────────────
    var navbar = document.querySelector('.site-navbar');
    if (navbar) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 20) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
    }

    // ── Mobile Menu Toggle ─────────────────────────
    var toggleBtn = document.querySelector('.navbar-toggle-btn');
    var mobileNav = document.querySelector('.mobile-nav');
    if (toggleBtn && mobileNav) {
        toggleBtn.addEventListener('click', function () {
            mobileNav.classList.toggle('open');
        });
    }

    // ── Fade-in on Scroll ──────────────────────────
    var fadeElements = document.querySelectorAll('.fade-in-section');
    if (fadeElements.length > 0 && 'IntersectionObserver' in window) {
        var observer = new IntersectionObserver(function (entries) {
            entries.forEach(function (entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('is-visible');
                    observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.12 });

        fadeElements.forEach(function (el) {
            observer.observe(el);
        });
    } else {
        // Fallback: show all immediately
        fadeElements.forEach(function (el) {
            el.classList.add('is-visible');
        });
    }

})();
