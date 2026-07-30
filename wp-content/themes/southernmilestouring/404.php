<?php get_header(); ?>

<main style="padding: 100px 20px; text-align: center;">
    <h1 class="text-4xl md:text-6xl lg:text-8xl font-black mb-8 sm:mb-4 tracking-tighter leading-[0.9]">404 - Page Not Found</h1>
    <p class="text-lg md:text-xl lg:text-2xl my-12 sm:my-8">Looks like you've wandered off the trail. The page you are looking for doesn't exist.</p>
    <a href="<?php echo home_url(); ?>" class="inline-block bg-[#ff6600] border-2 border-[#ff6600] text-white hover:bg-white hover:text-[#000] px-12 py-5 rounded-none text-sm font-black tracking-[0.2em] transition-all duration-300 uppercase">Back to Home</a>
</main>

<?php get_footer(); ?>