<?php 
/**
 * The main template file
 * Fully stylized with high-contrast, edgy tactical HUD typography and custom structures.
 */
get_header(); 
?>
<div class="bg-black text-white min-h-screen uppercase tracking-tighter selection:bg-[#ff6600] selection:text-black">
  
  <!-- ================= HERO SECTION ================= -->
  <section class="relative h-[60vh] md:h-[80vh] overflow-hidden bg-black border-b-4 border-[#ff6600] group select-none">
    
    <!-- Background Hero Image -->
    <div
      class="absolute inset-0 grayscale brightness-50 contrast-125 group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000 bg-cover bg-center bg-no-repeat"
      style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>');"
    ></div>

    <!-- Vignette & Grid HUD Overlays -->
    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-black/70"></div>
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>

    <!-- Radar Sweep Line Effect -->
    <div class="absolute inset-x-0 h-[2px] bg-gradient-to-r from-transparent via-[#ff6600]/40 to-transparent animate-[radar_6s_ease-in-out_infinite] pointer-events-none"></div>

    <!-- Hero Content Block -->
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4 max-w-5xl mx-auto uppercase tracking-tighter">
      
      <!-- Top Pill Badge -->
      <div class="inline-flex items-center gap-2 bg-black/80 border border-[#ff6600]/40 text-[#ff6600] px-4 py-1.5 rounded-none text-[10px] md:text-xs font-black tracking-widest mb-6 shadow-2xl backdrop-blur-sm">
        <i class="fa-solid fa-compass text-xs animate-spin-slow"></i>
        <span>SOUTHERN MILES // INFORMATION</span>
      </div>

      <h1 class="text-4xl md:text-6xl lg:text-8xl font-black mb-8 leading-[0.9] tracking-tighter drop-shadow-2xl">
        <?php single_post_title(); ?>
      </h1>
      
      <div class="w-24 h-2 bg-[#ff6600] mb-8 group-hover:w-40 transition-all duration-500 shadow-[0_0_15px_#ff6600]"></div>

    </div>

    <!-- Corner Tactical HUD Details -->
    <div class="absolute bottom-6 right-6 hidden md:flex items-center gap-3 border border-white/20 px-4 py-2 text-[10px] font-mono tracking-widest text-white/50 backdrop-blur-md bg-black/40">
      <span class="w-2 h-2 rounded-full bg-[#ff6600] animate-pulse"></span>
      <span>SOUTHERN MILES TOURING / EST 2026</span>
    </div>

  </section>

  <!-- ================= MAIN CONTENT AREA ================= -->
  <section id="main" class="relative py-12 md:py-16 text-white border-y border-white/10 tracking-tighter overflow-hidden select-none">
    
    <!-- DYNAMIC BACKGROUND ANIMATION CONTAINER -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
      <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff03_1px,transparent_1px),linear-gradient(to_bottom,#ffffff03_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>

      <svg class="absolute inset-0 w-full h-full opacity-10 text-[#ff6600]" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
        <defs>
          <pattern id="topo-lines-index" width="400" height="400" patternUnits="userSpaceOnUse">
            <path d="M0,100 Q100,50 200,100 T400,100 M0,200 Q100,150 200,200 T400,200 M0,300 Q100,250 200,300 T400,300" fill="none" stroke="currentColor" stroke-width="1.5" class="animate-[pulse_6s_ease-in-out_infinite]" />
          </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#topo-lines-index)" />
      </svg>

      <div class="absolute top-1/4 inset-x-0 h-[1px] bg-gradient-to-r from-transparent via-[#ff6600]/30 to-transparent animate-[stream_8s_linear_infinite]"></div>
      <div class="absolute bottom-1/3 inset-x-0 h-[1px] bg-gradient-to-r from-transparent via-white/20 to-transparent animate-[stream_12s_linear_infinite_3s]"></div>
    </div>

    <!-- MAIN LOOP CONTENT -->
    <?php if ( have_posts() ) : ?>
    <div class="max-w-7xl mx-auto px-4 relative z-10">  
      <div class="border border-white/10 bg-[#0a0a0a] group hover:border-[#ff6600]/50 transition-colors duration-300 shadow-2xl backdrop-blur-md">
        
        <!-- HUD Bracket Accents -->
        <div class="absolute -top-3 -left-3 w-6 h-6 border-t-2 border-l-2 border-[#ff6600] pointer-events-none"></div>
        <div class="absolute -top-3 -right-3 w-6 h-6 border-t-2 border-r-2 border-[#ff6600] pointer-events-none"></div>
        <div class="absolute -bottom-3 -left-3 w-6 h-6 border-b-2 border-l-2 border-[#ff6600] pointer-events-none"></div>
        <div class="absolute -bottom-3 -right-3 w-6 h-6 border-b-2 border-r-2 border-[#ff6600] pointer-events-none"></div>

        <?php while ( have_posts() ) : the_post(); ?>
          <article class="border border-white/10 bg-black/80 group flex flex-col justify-between hover:border-[#ff6600]/30 transition-colors duration-300 relative">
            <div class="p-6 md:p-12 lg:p-16 flex flex-col justify-center">
              <div class="text-gray-300 text-lg tracking-normal normal-case mb-4 leading-relaxed dynamic-wp-content">
                <?php the_content(); ?>
              </div>
            </div>
          </article>
        <?php endwhile; ?>
      </div>
    </div>
    <?php endif; ?>

  </section>
</div>

<!-- KEYFRAME ANIMATIONS & CONTENT TYPOGRAPHY STYLES -->
<style>
  @keyframes radar {
    0% { top: 0%; opacity: 0; }
    50% { opacity: 1; }
    100% { top: 100%; opacity: 0; }
  }
  @keyframes stream {
    0% { transform: translateX(-100%); opacity: 0; }
    50% { opacity: 1; }
    100% { transform: translateX(100%); opacity: 0; }
  }
  .animate-spin-slow {
    animation: spin 12s linear infinite;
  }
  @keyframes spin {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
  }

  /* Dynamic WordPress Content Formatting Helpers */
  .dynamic-wp-content a {
    color: #ff6600;
    text-decoration: underline;
    transition: color 0.2s ease;
  }
  .dynamic-wp-content a:hover {
    color: #ffffff;
  }
  .dynamic-wp-content h1, 
  .dynamic-wp-content h2, 
  .dynamic-wp-content h3, 
  .dynamic-wp-content h4 {
    color: #ffffff;
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: -0.025em;
    margin-top: 1.5rem;
    margin-bottom: 1rem;
  }
</style>

<?php get_footer(); ?>