/* Navigation Interactions
* Toggle the mobile icon to show and hide the main navigation
* Toggle the dropdown button to show and hide the dropdown content
*/
document.addEventListener('DOMContentLoaded', () => {
   const mobileToggler = document.querySelector('.navbar-toggler');
   const navigation = document.querySelector(mobileToggler.getAttribute('data-target'));

   mobileToggler.addEventListener('click', () => navigation.classList.toggle('collapse'));

//    dropdownToggle.forEach((dropdown) => {
//        dropdown.addEventListener('click', (toggler) => {
//            let dropdownElement = dropdown.parentElement;
//            dropdownElement.classList.toggle('collapse');
//        })
//    })
});

// /* 
//    * Ensure that the DOM is loaded before running
//    * the functions inside
// */
// document.addEventListener('DOMContentLoaded', () => {
//    reportWindowSize();
//    window.onresize = reportWindowSize;
// });
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

// contact form

document.addEventListener('DOMContentLoaded', function() {
    const contactForm = document.getElementById('contact-form');
    const confirmationMessage = document.getElementById('confirmation-message');

    contactForm.addEventListener('submit', function(event) {
        event.preventDefault();
        confirmationMessage.innerHTML = ''; // Clear previous messages

        const formData = new FormData(contactForm);
        const xhr = new XMLHttpRequest();

        xhr.open('POST', 'process.php', true);

        xhr.onload = function() {
            if (xhr.status === 200) {
                confirmationMessage.textContent = 'Message sent successfully.';
                contactForm.reset(); // Clear the form
            } else {
                confirmationMessage.textContent = 'There was an error. Please try again later.';
            }
        };

        xhr.send(formData);
    });
});