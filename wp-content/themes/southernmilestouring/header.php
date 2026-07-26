<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php 
    // Automatically retrieve the designated front page ID
    $front_page_id = get_option('page_on_front');
?>
<nav class="bg-black/90 backdrop-blur-md text-white sticky top-0 z-50 border-b border-white/10 uppercase tracking-tight">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-20 md:h-28">
            <a href="<?php echo home_url(); ?>" class="group flex items-center gap-3 flex-shrink-0">
                <img 
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                    alt="Southern Miles Logo"
                    class="h-12 w-auto md:h-20 object-contain"
                >
                <div class="flex flex-col justify-center">
                    <h1 class="sm md:text-xl font-black text-[#ff5a00] leading-none tracking-normal">
                        Southern Miles
                    </h1>

                    <p class="text-[9px] md:text-xs text-gray-400 font-semibold tracking-[0.2em] leading-none">
                        TOURING
                    </p>
                </div>
            </a>
            <!-- DESKTOP NAVIGATION -->
            <div class="hidden lg:flex items-center gap-8">
                <div class="header-menu">
                    <?php
                        wp_nav_menu(array(
                            'menu' => 'Header',
                            'container' => false,
                            'menu_class' => 'flex items-center gap-8 text-lg font-semibold',
                            'fallback_cb' => false
                        ));
                    ?>
                </div>
                <a 
                    href="https://forms.gle/48NFJY4QibC5UZ9X9"
                    target="_blank"
                    class="bg-[#ff5a00] hover:bg-white hover:text-black text-white px-8 py-3 font-bold text-lg transition-all duration-300"
                >
                    JOIN TRIBE
                </a>
                <div class="relative group flex items-center">
                    <!-- Trigger Button -->
                    <button 
                        type="button"
                        class="flex items-center gap-2 bg-white/5 hover:bg-[#ff5a00] border border-white/10 hover:border-[#ff5a00] text-white px-4 py-2 rounded-full text-sm font-semibold transition-all duration-300 shadow-sm"
                    >
                        <!-- Pulsing Indicator -->
                        <span class="relative flex h-2 w-2">
                            <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-[#ff5a00] group-hover:bg-white opacity-75"></span>
                            <span class="relative inline-flex rounded-full h-2 w-2 bg-[#ff5a00] group-hover:bg-white"></span>
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                            <path d="M18 16.08c-.76 0-1.44.3-1.96.77L8.91 12.7c.05-.23.09-.46.09-.7s-.04-.47-.09-.7l7.05-4.11c.54.5 1.25.81 2.04.81 1.66 0 3-1.34 3-3s-1.34-3-3-3-3 1.34-3 3c0 .24.04.47.09.7L8.04 9.81C7.5 9.31 6.79 9 6 9c-1.66 0-3 1.34-3 3s1.34 3 3 3c.79 0 1.5-.31 2.04-.81l7.12 4.16c-.05.21-.08.43-.08.65 0 1.61 1.31 2.92 2.92 2.92s2.92-1.31 2.92-2.92c0-1.61-1.31-2.92-2.92-2.92z"/>
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div class="absolute right-0 top-full hidden group-hover:flex group-focus-within:flex flex-row items-center gap-4 bg-black/90 backdrop-blur-md p-3 rounded-lg border border-white/10 shadow-xl transition-all duration-200 z-50">
                        <!-- Instagram -->
                        <a href="https://instagram.com/<?php echo get_field('instagram', $front_page_id); ?>" target="_blank" class="hover:text-[#ff5a00] transition-colors">
                            <i class="fa-brands fa-instagram text-2xl"></i>
                        </a>
                        <!-- YouTube -->
                        <a href="https://youtube.com/@<?php echo get_field('youtube', $front_page_id); ?>" target="_blank" class="hover:text-[#ff5a00] transition-colors">
                            <i class="fa-brands fa-youtube text-2xl"></i>
                        </a>
                        <!-- Facebook -->
                        <a href="https://facebook.com/<?php echo get_field('facebook', $front_page_id); ?>" target="_blank" class="hover:text-[#ff5a00] transition-colors">
                            <i class="fa-brands fa-facebook text-2xl"></i>
                        </a>
                        <!-- Threads -->
                        <a href="https://www.threads.com/@<?php echo get_field('threads', $front_page_id); ?>?hl=en" target="_blank" class="hover:text-[#ff5a00] transition-colors">
                            <i class="fa-brands fa-threads text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- MOBILE RIGHT -->
            <div class="flex items-center gap-1 md:gap-3 lg:hidden">
                <a
                    href="https://forms.gle/48NFJY4QibC5UZ9X9"
                    target="_blank"
                    class="bg-[#ff5a00] text-white px-3 py-2.5 text-[10px] md:text-xs font-bold hover:bg-white hover:text-black transition-all whitespace-nowrap tracking-normal"
                >
                    BE A MEMBER
                </a>
                <!-- MOBILE TOGGLE -->
                <button
                    id="mobileMenuButton"
                    class="text-white p-2 flex items-center justify-center"
                >
                    <svg id="menuIcon" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>

                    <svg id="closeIcon" xmlns="http://www.w3.org/2000/svg" class="w-7 h-7 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- MOBILE MENU -->
        <div
            id="mobileMenu"
            class="hidden lg:hidden border-t border-white/10 pb-6 pt-4"
        >
            <div class="mobile-header-menu">
                <?php
                    wp_nav_menu(array(
                        'menu' => 'Header',
                        'container' => false,
                        'menu_class' => 'space-y-2',
                        'fallback_cb' => false
                    ));
                ?>
            </div>
            <div class="px-2 flex items-center gap-2 pt-5 border-t border-white/10 mt-5">
                <p class="text-xs text-gray-400 font-semibold tracking-[0.2em] px-2">
                    SOCIALS :
                </p>
                <a
                    href="https://instagram.com/<?php echo get_field('instagram', $front_page_id); ?>"
                    target="_blank"
                    class="flex-1 flex justify-center p-3 hover:text-[#ff5a00] transition-colors"
                >
                    <i class="fa-brands fa-instagram text-2xl"></i>
                </a>
                <a
                    href="https://youtube.com/@<?php echo get_field('youtube', $front_page_id); ?>"
                    target="_blank"
                    class="flex-1 flex justify-center p-3 hover:text-[#ff5a00] transition-colors"
                >
                    <i class="fa-brands fa-youtube text-2xl"></i>
                </a>
                <a
                    href="https://facebook.com/<?php echo get_field('facebook', $front_page_id); ?>"
                    target="_blank"
                    class="flex-1 flex justify-center p-3 hover:text-[#ff5a00] transition-colors"
                >
                    <i class="fa-brands fa-facebook text-2xl"></i>
                </a>
                <a
                    href="https://www.threads.com/@<?php echo get_field('threads', $front_page_id); ?>?hl=en"
                    target="_blank"
                    class="flex-1 flex justify-center p-3 hover:text-[#ff5a00] transition-colors"
                >
                    <i class="fa-brands fa-threads text-2xl"></i>
                </a>
            </div>
        </div>
    </div>
</nav>
