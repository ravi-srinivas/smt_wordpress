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