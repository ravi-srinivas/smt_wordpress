<?php 
/**
 * The main template file
 * Fully stylized with high-contrast, edgy typography and custom grid structures.
 */
get_header(); 
?>
<div class="bg-black text-white min-h-screen uppercase tracking-tighter">
  
  <!-- Hero Header -->
  <section class="relative h-[60vh] md:h-[80vh] overflow-hidden bg-black border-b-4 border-[#ff5a00] group">
    <div
      class="absolute inset-0 grayscale brightness-50 contrast-125 group-hover:grayscale-0 transition-all duration-1000 bg-cover bg-center bg-no-repeat"
      style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>');"
    ></div>
    <div class="absolute inset-0 bg-black/40"></div>
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4 max-w-5xl mx-auto uppercase tracking-tighter">
      <h1 class="text-4xl md:text-6xl lg:text-8xl font-black mb-8 leading-[0.9] tracking-tighter">
        <?php single_post_title(); ?>
      </h1>
      <div class="w-24 h-2 bg-[#ff5a00] mb-8"></div>
      <!-- <p class="text-sm md:text-lg font-bold tracking-[0.3em] max-w-2xl mx-auto text-gray-300 leading-relaxed">
        How a bunch of passionate tourers became Southern Miles Touring!
      </p> -->
    </div>
    <div class="absolute bottom-6 right-6 hidden md:block border border-white/20 px-4 py-2 text-[10px] font-black tracking-widest text-white/40 backdrop-blur-sm">
      SOUTHERN MILES TOURING / EST 2026
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
            <div class="text-gray-400 text-lg tracking-normal normal-case mb-4 dynamic-wp-content">
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