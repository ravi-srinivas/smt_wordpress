<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav class="bg-black/90 backdrop-blur-md text-white sticky top-0 z-50 border-b border-white/10 uppercase tracking-tight">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center py-4">
            <a href="<?php echo home_url(); ?>" class="group flex items-center gap-3 flex-shrink-0">
                <img 
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
                    alt="Southern Miles Logo"
                    class="h-20 md:h-24 w-auto object-contain"
                >
                <div>
                    <h1 class="text-md md:text-2xl font-black text-[#ff5a00] leading-none">
                        Southern Miles
                    </h1>

                    <p class="text-[10px] md:text-sm text-gray-400 font-semibold tracking-[0.2em] mt-1">
                        TOURING
                    </p>
                </div>
            </a>
            <!-- DESKTOP NAVIGATION -->
            <div class="hidden lg:flex items-center gap-10">
                <div class="header-menu">
                    <?php
                        wp_nav_menu(array(
                            'menu' => 'Header',
                            'container' => false,
                            'menu_class' => 'flex items-center gap-10 text-lg font-semibold',
                            'fallback_cb' => false
                        ));
                    ?>
                </div>
                <div class="flex items-center gap-5">
                    <a 
                        href="https://instagram.com/<?php echo get_field('instagram'); ?>"
                        target="_blank"
                        class="hover:text-[#ff5a00] transition-colors duration-300"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                            <path d="M7.75 2C4.574 2 2 4.574 2 7.75v8.5C2 19.426 4.574 22 7.75 22h8.5C19.426 22 22 19.426 22 16.25v-8.5C22 4.574 19.426 2 16.25 2h-8.5zm0 2h8.5A3.75 3.75 0 0 1 20 7.75v8.5A3.75 3.75 0 0 1 16.25 20h-8.5A3.75 3.75 0 0 1 4 16.25v-8.5A3.75 3.75 0 0 1 7.75 4zm8.75 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zM12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 2a3 3 0 1 1 0 6 3 3 0 0 1 0-6z"/>
                        </svg>
                    </a>
                    <a 
                        href="https://youtube.com/@<?php echo get_field('youtube'); ?>"
                        target="_blank"
                        class="hover:text-[#ff5a00] transition-colors duration-300"
                    >
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                            <path d="M23.498 6.186a2.978 2.978 0 0 0-2.094-2.108C19.555 3.5 12 3.5 12 3.5s-7.555 0-9.404.578A2.978 2.978 0 0 0 .502 6.186C0 8.063 0 12 0 12s0 3.937.502 5.814a2.978 2.978 0 0 0 2.094 2.108C4.445 20.5 12 20.5 12 20.5s7.555 0 9.404-.578a2.978 2.978 0 0 0 2.094-2.108C24 15.937 24 12 24 12s0-3.937-.502-5.814zM9.75 15.568V8.432L15.818 12 9.75 15.568z"/>
                        </svg>
                    </a>
                </div>
                <button 
                    onclick="openRegisterModal()"
                    class="bg-[#ff5a00] hover:bg-white hover:text-black text-white px-8 py-3 font-bold text-lg transition-all duration-300"
                >
                    JOIN US NOW
                </button>
            </div>

            <!-- MOBILE RIGHT -->
            <div class="flex items-center gap-3 lg:hidden">
                <button
                    onclick="openRegisterModal()"
                    class="bg-[#ff5a00] text-white px-3 py-2 text-xs font-bold hover:bg-white hover:text-black transition-all"
                >
                    JOIN NOW
                </button>
                <!-- MOBILE TOGGLE -->
                <button
                    id="mobileMenuButton"
                    class="text-white p-2"
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
                    href="https://instagram.com/<?php echo get_field('instagram'); ?>"
                    target="_blank"
                    class="flex-1 flex justify-center p-3 hover:text-[#ff5a00] transition-colors"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                        <path d="M7.75 2C4.574 2 2 4.574 2 7.75v8.5C2 19.426 4.574 22 7.75 22h8.5C19.426 22 22 19.426 22 16.25v-8.5C22 4.574 19.426 2 16.25 2h-8.5zm0 2h8.5A3.75 3.75 0 0 1 20 7.75v8.5A3.75 3.75 0 0 1 16.25 20h-8.5A3.75 3.75 0 0 1 4 16.25v-8.5A3.75 3.75 0 0 1 7.75 4zm8.75 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zM12 7a5 5 0 1 0 0 10 5 5 0 0 0 0-10zm0 2a3 3 0 1 1 0 6 3 3 0 0 1 0-6z"/>
                    </svg>
                </a>
                <a
                    href="https://youtube.com/@<?php echo get_field('youtube'); ?>"
                    target="_blank"
                    class="flex-1 flex justify-center p-3 hover:text-[#ff5a00] transition-colors"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 fill-current" viewBox="0 0 24 24">
                        <path d="M23.498 6.186a2.978 2.978 0 0 0-2.094-2.108C19.555 3.5 12 3.5 12 3.5s-7.555 0-9.404.578A2.978 2.978 0 0 0 .502 6.186C0 8.063 0 12 0 12s0 3.937.502 5.814a2.978 2.978 0 0 0 2.094 2.108C4.445 20.5 12 20.5 12 20.5s7.555 0 9.404-.578a2.978 2.978 0 0 0 2.094-2.108C24 15.937 24 12 24 12s0-3.937-.502-5.814zM9.75 15.568V8.432L15.818 12 9.75 15.568z"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</nav>
