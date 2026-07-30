<?php get_header(); ?>

<main style="padding: 100px 20px; text-align: center;">
    <h1 class="text-4xl md:text-6xl lg:text-8xl font-black mb-8 sm:mb-4 tracking-tighter leading-[0.9]">404 - Page Not Found</h1>
    <p class="text-lg md:text-xl lg:text-2xl mb-8 sm:mb-4">Looks like you've wandered off the trail. The page you are looking for doesn't exist.</p>
    <a href="<?php echo home_url(); ?>" class="inline-block mt-5 px-5 py-2 bg-black text-white no-underline hover:bg-gray-800">Back to Home</a>
</main>

<?php get_footer(); ?>