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

add_shortcode('tooltip', 'acf_tooltip_shortcode');
function acf_tooltip_shortcode($atts, $content = null) {
    $atts = shortcode_atts(array(
        'text' => ''
    ), $atts, 'tooltip');

    return '<span class="acf-tooltip" data-tooltip="' . esc_attr($atts['text']) . '">' . do_shortcode($content) . '</span>';
}

/**
 * Southern Miles Touring - Upcoming Expedition Popup Modal
 * Synced with single-expedition.php field names and date handling.
 */
function southern_miles_expedition_popup() {
    if ( is_admin() ) return;

    // ACF date picker standard default format is YYYYMMDD (20261025)
    // If your field saves as YYYY-MM-DD, change to date('Y-m-d')
    $today = date( 'Ymd' );

    $args = array(
        'post_type'      => 'expedition',
        'posts_per_page' => 1,
        'post_status'    => 'publish',
        'meta_key'       => 'ride_is_featured',
        'orderby'        => 'meta_value',
        'order'          => 'ASC',
        'meta_query' => array(
            array(
                'key'     => 'ride_is_featured',
                'value'   => '1',
                'compare' => '=',
            ),
        ),
    );

    $expedition_query = new WP_Query( $args );

    // Fallback: If no future rides exist, grab the single most recently published ride
    if ( ! $expedition_query->have_posts() ) {
        $expedition_query = new WP_Query( array(
            'post_type'      => 'expedition',
            'posts_per_page' => 1,
            'post_status'    => 'publish',
            'orderby'        => 'date',
            'order'          => 'DESC',
        ) );
    }

    if ( $expedition_query->have_posts() ) :
        while ( $expedition_query->have_posts() ) : $expedition_query->the_post();
            $current_ride_id = get_the_ID();
            $title           = get_the_title();
            $permalink       = get_permalink();
            $excerpt         = get_the_excerpt();
            $image_url       = get_the_post_thumbnail_url( $current_ride_id, 'full' );

            // Fetch custom ACF meta fields (matching single-expedition.php)
            $start_date   = get_field( 'ride_start_date', $current_ride_id ); 
            $end_date     = get_field( 'ride_end_date', $current_ride_id );
            $distance_kms = get_field( 'ride_distance', $current_ride_id );
            $ride_price   = get_field( 'ride_price', $current_ride_id );
            $ride_link    = get_field( 'ride_form_link', $current_ride_id );

            // Format dates (matching single-expedition.php)
            $display_start = $start_date ? date( "M d", strtotime( str_replace( '/', '-', $start_date ) ) ) : '';
            $display_end   = $end_date ? date( "M d", strtotime( str_replace( '/', '-', $end_date ) ) ) : '';
            $current_year  = $start_date ? date( "Y", strtotime( str_replace( '/', '-', $start_date ) ) ) : '';
            $display_year  = $current_year ? ', ' . $current_year : '';

            // Terrain Detection Logic (matching single-expedition.php)
            $post_tags    = get_the_tags( $current_ride_id );
            $terrain_type = 'DEFAULT';
            $terrain_icon = 'fa-compass';

            if ( $post_tags ) {
                foreach ( $post_tags as $tag ) {
                    $slug = strtolower( $tag->slug );
                    if ( in_array( $slug, array( 'mountains', 'mountain' ) ) ) {
                        $terrain_type = 'MOUNTAINS';
                        $terrain_icon = 'fa-mountain';
                        break;
                    } elseif ( in_array( $slug, array( 'beaches', 'coastal', 'beach' ) ) ) {
                        $terrain_type = 'COASTAL';
                        $terrain_icon = 'fa-water';
                        break;
                    } elseif ( in_array( $slug, array( 'city', 'urban' ) ) ) {
                        $terrain_type = 'CITY';
                        $terrain_icon = 'fa-city';
                        break;
                    } elseif ( in_array( $slug, array( 'desert', 'dunes' ) ) ) {
                        $terrain_type = 'DESERT';
                        $terrain_icon = 'fa-sun';
                        break;
                    } elseif ( in_array( $slug, array( 'forest', 'jungle' ) ) ) {
                        $terrain_type = 'FOREST';
                        $terrain_icon = 'fa-tree';
                        break;
                    }
                }
            }
            ?>

            <!-- ================= EXPEDITION POPUP MODAL ================= -->
            <div id="sm-expedition-modal" 
                 class="fixed inset-0 z-[9999] hidden items-center justify-center p-4 bg-black/90 backdrop-blur-md transition-opacity duration-300 opacity-0 select-none selection:bg-[#ff6600] selection:text-black font-sans uppercase tracking-tighter" 
                 style="display:none;" 
                 aria-modal="true" 
                 role="dialog">
                
                <div id="sm-modal-card" class="relative w-full max-w-2xl bg-black border-2 border-[#ff6600] text-white p-6 md:p-8 shadow-[0_0_50px_rgba(255,102,0,0.25)] transition-all transform scale-95 duration-300">
                    
                    <!-- Tactical Corner Accents -->
                    <div class="absolute top-2 left-2 w-3 h-3 border-t-2 border-l-2 border-[#ff6600] pointer-events-none z-20"></div>
                    <div class="absolute top-2 right-2 w-3 h-3 border-t-2 border-r-2 border-[#ff6600] pointer-events-none z-20"></div>
                    <div class="absolute bottom-2 left-2 w-3 h-3 border-b-2 border-l-2 border-[#ff6600] pointer-events-none z-20"></div>
                    <div class="absolute bottom-2 right-2 w-3 h-3 border-b-2 border-r-2 border-[#ff6600] pointer-events-none z-20"></div>

                    <!-- Close Button -->
                    <button id="sm-modal-close" 
                            class="absolute top-4 right-4 z-30 flex h-10 w-10 items-center justify-center bg-black border border-white/20 text-white hover:bg-[#ff6600] hover:text-black hover:border-[#ff6600] transition-all duration-300 font-black text-xl"
                            aria-label="Close Modal">
                        &times;
                    </button>

                    <!-- Featured Image Block -->
                    <?php if ( $image_url ) : ?>
                        <div class="relative h-56 md:h-64 w-full overflow-hidden mb-6 border border-white/10 group">
                            <img src="<?php echo esc_url( $image_url ); ?>" 
                                 alt="<?php echo esc_attr( $title ); ?>" 
                                 class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
                            
                            <div class="absolute inset-0 bg-gradient-to-t from-black via-black/30 to-transparent"></div>
                            
                            <!-- Terrain Top Badge -->
                            <div class="absolute top-3 left-3 flex items-center gap-2 bg-black/90 border border-[#ff6600]/50 text-[#ff6600] px-3 py-1 text-[10px] font-black tracking-widest backdrop-blur-md">
                                <i class="fa-solid <?php echo esc_attr( $terrain_icon ); ?>"></i>
                                <span>TERRAIN: <?php echo esc_html( $terrain_type ); ?></span>
                            </div>

                            <!-- Bottom Telemetry HUD Overlay -->
                            <div class="absolute bottom-3 left-3 right-3 flex flex-wrap items-center justify-between gap-2 text-[10px] font-bold tracking-widest text-gray-300 bg-black/80 border border-white/10 px-3 py-1.5 backdrop-blur-sm">
                                <?php if ( $display_start && $display_end ) : ?>
                                    <span class="flex items-center gap-1.5 text-white">
                                        <i class="fa-solid fa-calendar-days text-[#ff6600]"></i> 
                                        <?php echo esc_html( $display_start . ' - ' . $display_end . $display_year ); ?>
                                    </span>
                                <?php endif; ?>

                                <?php if ( $distance_kms ) : ?>
                                    <span class="flex items-center gap-1.5 text-[#ff6600]">
                                        <i class="fa-solid fa-route"></i> 
                                        <?php echo esc_html( $distance_kms ); ?> KMS
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    <?php endif; ?>

                    <!-- Content Header & Title -->
                    <div class="space-y-4">
                        <h3 class="text-xl md:text-3xl font-black text-center text-white tracking-tighter leading-none uppercase">
                            <?php echo esc_html( $title ); ?>
                        </h3>
                    </div>

                    <!-- Pricing Display -->
                    <div class="mt-6 text-center">
                        <div>
                            <span class="text-[10px] font-black tracking-widest text-[#ff6600] block">TARIFF</span>
                            <?php if ( $ride_price ) : ?>
                                <div class="">
                                    <span class="text-xl md:text-2xl font-black text-white"><?php echo esc_html( $ride_price ); ?></span>
                                    <span class="text-[10px] text-gray-400 font-bold tracking-widest">/ PERSON <b class="text-[#ff6600]">*</b></span>
                                </div>
                            <?php else : ?>
                                <span class="text-xl font-black text-white">UPCOMING</span>
                            <?php endif; ?>
                        </div>
                    </div>

                    <!-- Call to Action Buttons -->
                    <div class="mt-6 flex flex-col sm:flex-row gap-4">
                        <a id="sm-modal-more-info" href="<?php echo esc_url( $permalink ); ?>" 
                           class="flex-1 inline-flex justify-center items-center gap-2 bg-[#ff6600] text-black hover:bg-white hover:text-black px-6 py-4 rounded-none text-xs md:text-sm font-black tracking-[0.2em] transition-all duration-300 uppercase shadow-[0_0_20px_rgba(255,102,0,0.3)]">
                            <i class="fa-solid fa-route text-sm"></i>
                            <span>MORE INFO</span>
                        </a>
                        <button id="sm-modal-dismiss" 
                                class="inline-flex justify-center items-center bg-transparent border border-white/20 text-gray-300 hover:border-[#ff6600] hover:text-[#ff6600] px-6 py-4 rounded-none text-xs md:text-sm font-black tracking-[0.2em] transition-all duration-300 uppercase">
                            DISMISS
                        </button>
                    </div>

                    <!-- Footer -->
                    <div class="mt-6 pt-3 border-t border-white/10 flex items-center justify-between text-[9px] font-bold tracking-widest text-white/40 uppercase">
                        <span>SOUTHERN MILES TOURING</span>
                        <span>WAYPOINT // READY FOR TAKEOFF</span>
                    </div>

                </div>
            </div>

            <!-- Modal Trigger JavaScript -->
            <script>
            document.addEventListener("DOMContentLoaded", function () {
                const modal = document.getElementById("sm-expedition-modal");
                const card = document.getElementById("sm-modal-card");
                const closeBtn = document.getElementById("sm-modal-close");
                const dismissBtn = document.getElementById("sm-modal-dismiss");
                const moreInfoBtn = document.getElementById("sm-modal-more-info");

                if (!modal) return;

                const hasSeenModal = localStorage.getItem("sm_expedition_popup_seen");

                if (!hasSeenModal) {
                    setTimeout(() => {
                        modal.style.display = "flex";
                        requestAnimationFrame(() => {
                            modal.classList.remove("opacity-0");
                            modal.classList.add("opacity-100");
                            card.classList.remove("scale-95");
                            card.classList.add("scale-100");
                        });
                    }, 1000);
                }

                function closeModal() {
                    modal.classList.remove("opacity-100");
                    modal.classList.add("opacity-0");
                    card.classList.remove("scale-100");
                    card.classList.add("scale-95");

                    setTimeout(() => { modal.style.display = "none"; }, 300);
                    localStorage.setItem("sm_expedition_popup_seen", "true");
                }

                function moreInfoClick() {
                    localStorage.setItem("sm_expedition_popup_seen", "true");
                }

                if (closeBtn) closeBtn.addEventListener("click", closeModal);
                if (dismissBtn) dismissBtn.addEventListener("click", closeModal);
                if (moreInfoBtn) moreInfoBtn.addEventListener("click", moreInfoClick);
                modal.addEventListener("click", function (e) {
                    if (e.target === modal) closeModal();
                });

                document.addEventListener("keydown", function (e) {
                    if (e.key === "Escape" && modal.style.display === "flex") {
                        closeModal();
                    }
                });
            });
            </script>

            <?php
        endwhile;
        wp_reset_postdata();
    endif;
}
add_action( 'wp_footer', 'southern_miles_expedition_popup' );

?>