<?php 
/**
 * The main template file
 * Fully stylized with high-contrast, edgy typography and custom grid structures.
 */
get_header(); 
?>
<div class="bg-black text-white min-h-screen uppercase tracking-tighter">
  
  <!-- Hero Header -->
  <section class="relative h-[40vh] md:h-[50vh] overflow-hidden bg-black border-b-4 border-[#ff5a00] flex items-center justify-center">
    <div class="absolute inset-0 bg-[radial-gradient(#222_1px,transparent_1px)] [background-size:16px_16px] opacity-30"></div>
    <div class="relative z-10 text-center px-4 max-w-5xl mx-auto">
      <h1 class="text-5xl md:text-7xl lg:text-8xl font-black mb-4 leading-none tracking-tighter">
        <?php single_post_title(); ?>
      </h1>
      <div class="w-24 h-2 bg-[#ff5a00] mx-auto mb-6"></div>
      <!-- <p class="text-xs md:text-sm font-bold tracking-[0.3em] text-gray-400">
        STORIES, ROUTES, AND GEAR KNOWLEDGE FROM THE ROAD
      </p> -->
    </div>
  </section>

  <!-- Main Content Area -->
  <main class="max-w-7xl mx-auto px-4 py-16">
  <?php 
    if ( have_posts() ) : 
  ?>
    <div class="mb-16 border border-white/10 bg-[#111] group hover:border-[#ff5a00]/50 transition-colors duration-300">
      <?php 
        while ( have_posts() ) : the_post();
      ?>
        <article class="border border-white/10 bg-black group flex flex-col justify-between hover:border-[#ff5a00]/30 transition-colors duration-300">
          <div class="p-6 md:p-12 flex flex-col justify-center">
            <div class="text-gray-400 text-xs font-bold tracking-normal normal-case mb-4 line-clamp-4 dynamic-wp-content">
              <?php the_content(); ?>
            </div>
          </div>
        </article>
      <?php endwhile; ?>
    </div>
  <?php endif; ?>
  </main>
</div>

<?php get_footer(); ?>