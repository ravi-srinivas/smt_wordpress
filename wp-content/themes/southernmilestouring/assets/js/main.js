document.addEventListener('DOMContentLoaded', function () {
    const toggle = document.getElementById('mobileMenuButton');
    const menu = document.getElementById('mobileMenu');
    const menuIcon = document.getElementById('menuIcon');
    const closeIcon = document.getElementById('closeIcon');
    
    if (toggle && menu) {
        toggle.addEventListener('click', function () {
            menu.classList.toggle('hidden');
            menu.classList.toggle('active');
            menuIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
        });
    }
});

window.addEventListener('DOMContentLoaded', () => {
  // Check if a hash exists in the URL
  if (window.location.hash) {
    const targetElement = document.querySelector(window.location.hash);
    if (targetElement) {
      // Safely scroll to the element after a tiny layout timeout
      setTimeout(() => {
        targetElement.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }, 100);
    }
  }
});

// window.addEventListener('load', function() {
//     const sliderExists = document.querySelector('.tribe-slider');
//     if (sliderExists && typeof Swiper !== 'undefined') {
//         new Swiper('.tribe-slider', {
//             loop: true,
//             autoplay: {
//                 delay: 2500,
//                 disableOnInteraction: false,
//             },
//             speed: 900,
//             slidesPerView: 1,
//             spaceBetween: 0,
//             observer: true,
//             observeParents: true,
//             resizeObserver: true
//         });
//     }
// });