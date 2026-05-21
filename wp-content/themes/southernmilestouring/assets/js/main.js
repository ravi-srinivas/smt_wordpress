document.addEventListener('DOMContentLoaded', function () {
    // Mobile menu toggle
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