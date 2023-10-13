// Scroll to top arrow
document.addEventListener('DOMContentLoaded', function () {
    const scrollToTop = document.getElementById('scrollToTop');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 200) {
            scrollToTop.classList.add('show');
        } else {
            scrollToTop.classList.remove('show');
        }
    });

    scrollToTop.addEventListener('click', function (e) {
        e.preventDefault();
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
});

// Sticky Nav for case studies
window.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    const stickyNav = document.querySelector('#sticky-nav');
    const headerBottom = header.getBoundingClientRect().bottom;

    if (headerBottom <= 0) {
        stickyNav.style.display = 'block';
    } else {
        stickyNav.style.display = 'none';
    }
});

