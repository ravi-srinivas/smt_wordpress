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
        array('swiper-js'), 
        '1.0',
        true
    );
}
add_action('wp_enqueue_scripts', 'southern_miles_assets');

// Add Global Options Page
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Global Settings',
        'menu_title'    => 'Global Settings',
        'menu_slug'     => 'custom-global-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
}
function hide_acf_options_menu_link() {
    remove_menu_page('custom-global-settings');
}
add_action('admin_menu', 'hide_acf_options_menu_link', 999);

// Comments
add_action('init', function () {
    // Close comments on the front-end for posts, pages, and attachments
    $post_types = get_post_types();
    foreach ($post_types as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on existing posts globally in the database filters
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments from showing up if templates still query them
add_filter('comments_array', '__return_empty_array', 10, 2);

// 2. Remove the "Comments" page from the Admin Sidebar Menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// 3. Remove comments links and dropdowns from the top Admin Bar
add_action('wp_before_admin_bar_render', function () {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
});

// 4. Redirect any direct URL attempts to access the comments admin page
add_action('admin_init', function () {
    global $pagenow;
    if ($pagenow === 'edit-comments.php') {
        wp_redirect(admin_url());
        exit;
    }
});

?>
