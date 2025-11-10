/**
 * Header scroll effects
 */
(function() {
    'use strict';
    
    const header = document.querySelector('header');
    if (!header) return;
    
    let lastScrollTop = 0;
    
    function handleScroll() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 50) { // Threshold for adding scrolled class
            header.classList.add('is-sticky');
        } else {
            header.classList.remove('is-sticky');
        }
        
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    }
    
    // Use requestAnimationFrame for better performance
    let ticking = false;
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                handleScroll();
                ticking = false;
            });
            ticking = true;
        }
    }, { passive: true });
})();
