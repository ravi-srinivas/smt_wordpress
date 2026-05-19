<?php
function southern_miles_assets() {
    // CSS
    wp_enqueue_style(
        'google-fonts',
        'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap',
        array(),
        null
    );
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css'
    );
    wp_enqueue_style(
        'font-awesome-css',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css',
        array(),
        null
    );
    wp_enqueue_style(
        'main-style',
        get_stylesheet_uri(),
        array(),
        '1.0'
    );

    // JavaScript
    wp_enqueue_script(
        'tailwind-js',
        'https://cdn.tailwindcss.com',
        array(),
        null,
        false
    );
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        null,
        true
    );
    wp_enqueue_script(
        'main-js',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        null,
        true
    );
}
add_action('wp_enqueue_scripts', 'southern_miles_assets');

?>
