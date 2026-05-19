document.addEventListener('DOMContentLoaded', function () {

    // MOBILE MENU

    const toggle = document.getElementById('mobileMenuToggle');
    const menu = document.getElementById('mobileMenu');

    if (toggle && menu) {

        toggle.addEventListener('click', function () {

            menu.classList.toggle('active');

        });

    }

    new Swiper('.tribeSlider', {
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
        speed: 900,
        slidesPerView: 1,
        spaceBetween: 0,
    });
});