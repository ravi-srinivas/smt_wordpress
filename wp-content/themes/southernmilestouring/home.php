<?php 
/**
 * Template Name: Blogs
 */
get_header(); 
?>
<div class="bg-black text-white min-h-screen uppercase tracking-tighter selection:bg-[#ff6600] selection:text-black">
  
  <!-- ================= HERO SECTION ================= -->
  <section class="relative h-[60vh] md:h-[80vh] overflow-hidden bg-black border-b-4 border-[#ff6600] flex items-center justify-center select-none">
    
    <!-- Background Hero Image -->
    <div
      class="absolute inset-0 grayscale brightness-50 contrast-125 group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000 bg-cover bg-center bg-no-repeat"
      style="background-image: url('<?php echo get_the_post_thumbnail_url(get_queried_object_id(),'full'); ?>');"
    ></div>

    <!-- Vignette & Grid HUD Overlays -->
    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/50 to-black/80 z-10"></div>
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>

    <!-- Background Radial Grid Pattern -->
    <div class="absolute inset-0 bg-[radial-gradient(#ff6600_1px,transparent_1px)] [background-size:24px_24px] opacity-10"></div>

    <!-- Hero Content Block -->
    <div class="relative z-20 text-center px-4 max-w-5xl mx-auto uppercase tracking-tighter">
      
      <!-- Top Pill Badge -->
      <div class="inline-flex items-center gap-2 bg-black/80 border border-[#ff6600]/40 text-[#ff6600] px-4 py-1.5 rounded-none text-[10px] md:text-xs font-black tracking-widest mb-6 shadow-2xl backdrop-blur-sm">
        <i class="fa-solid fa-compass text-xs animate-spin-slow"></i>
        <span>EXPEDITION LOGS // ARCHIVES</span>
      </div>

      <h1 class="text-5xl md:text-7xl lg:text-8xl font-black mb-4 leading-none tracking-tighter drop-shadow-2xl">
        OUR MEMORY LANE
      </h1>

      <div class="w-24 h-2 bg-[#ff6600] mx-auto mb-6 shadow-[0_0_15px_#ff6600]"></div>

      <p class="text-xs md:text-sm font-bold tracking-[0.3em] text-gray-300 max-w-2xl mx-auto">
        STORIES, ROUTES, AND GEAR KNOWLEDGE FROM THE ROAD
      </p>

    </div>

    <!-- Corner Tactical HUD Details -->
    <div class="absolute bottom-6 right-6 hidden md:flex items-center gap-3 border border-white/20 px-4 py-2 text-[10px] font-mono tracking-widest text-white/50 backdrop-blur-md bg-black/40 z-20">
      <span class="w-2 h-2 rounded-full bg-[#ff6600] animate-pulse"></span>
      <span>SOUTHERN MILES TOURING / EST 2026</span>
    </div>

  </section>

  <!-- ================= MAIN CONTENT AREA ================= -->
  <section id="main" class="relative py-12 md:py-16 text-white border-y border-white/10 tracking-tighter overflow-hidden select-none">
    
    <!-- DYNAMIC BACKGROUND ANIMATION CONTAINER -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
      <!-- 1. Tactical Grid Pattern Overlay -->
      <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff03_1px,transparent_1px),linear-gradient(to_bottom,#ffffff03_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>

      <!-- 2. Dynamic Topography Lines SVG -->
      <svg class="absolute inset-0 w-full h-full opacity-10 text-[#ff6600]" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
        <defs>
          <pattern id="topo-lines-blogs" width="400" height="400" patternUnits="userSpaceOnUse">
            <path d="M0,100 Q100,50 200,100 T400,100 M0,200 Q100,150 200,200 T400,200 M0,300 Q100,250 200,300 T400,300" fill="none" stroke="currentColor" stroke-width="1.5" class="animate-[pulse_6s_ease-in-out_infinite]" />
          </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#topo-lines-blogs)" />
      </svg>

      <!-- 3. Sweeping Data Stream Overlay Lines -->
      <div class="absolute top-1/4 inset-x-0 h-[1px] bg-gradient-to-r from-transparent via-[#ff6600]/30 to-transparent animate-[stream_8s_linear_infinite]"></div>
      <div class="absolute bottom-1/3 inset-x-0 h-[1px] bg-gradient-to-r from-transparent via-white/20 to-transparent animate-[stream_12s_linear_infinite_3s]"></div>
    </div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
      <?php 
      // Custom query to fetch posts safely without using the default global loop
      $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
      $blog_args = array(
          'post_type'      => 'post',
          'posts_per_page' => 10,
          'paged'          => $paged
      );
      $blog_query = new WP_Query( $blog_args );

      if ( $blog_query->have_posts() ) : 
      ?>
        
        <!-- Featured Post (First Post) -->
        <?php 
          $count = 0; 
          while ( $blog_query->have_posts() ) : $blog_query->the_post(); $count++;
          if ( $count == 1 ) :
        ?>
          <article class="border border-white/10 bg-[#0a0a0a] group hover:border-[#ff6600]/50 transition-colors duration-300 relative shadow-2xl backdrop-blur-md">
            
            <!-- Corner Brackets -->
            <div class="absolute -top-3 -left-3 w-6 h-6 border-t-2 border-l-2 border-[#ff6600] pointer-events-none z-20"></div>
            <div class="absolute -top-3 -right-3 w-6 h-6 border-t-2 border-r-2 border-[#ff6600] pointer-events-none z-20"></div>
            <div class="absolute -bottom-3 -left-3 w-6 h-6 border-b-2 border-l-2 border-[#ff6600] pointer-events-none z-20"></div>
            <div class="absolute -bottom-3 -right-3 w-6 h-6 border-b-2 border-r-2 border-[#ff6600] pointer-events-none z-20"></div>

            <div class="grid md:grid-cols-2 gap-0">
              
              <!-- Thumbnail Side -->
              <div class="relative h-[300px] md:h-full min-h-[350px] overflow-hidden bg-black">
                <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover grayscale contrast-125 group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700']); ?>
                <?php else : ?>
                  <div class="w-full h-full bg-[#111] flex items-center justify-center text-gray-600">
                    <i class="fa-solid fa-motorcycle text-6xl"></i>
                  </div>
                <?php endif; ?>
                <span class="absolute top-4 left-4 bg-[#ff6600] text-black font-black text-xs px-3 py-1 shadow-lg tracking-widest z-10">
                  FEATURED EXPEDITION
                </span>
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent md:hidden"></div>
              </div>

              <!-- Details Side -->
              <div class="p-8 md:p-12 lg:p-16 flex flex-col justify-center bg-black/60 backdrop-blur-md">
                <div class="flex items-center gap-4 text-xs font-bold text-gray-500 mb-4 tracking-widest">
                  <span><?php echo get_the_date(); ?></span>
                  <span>•</span>
                  <span class="text-[#ff6600]">BY <?php the_author(); ?></span>
                </div>
                
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-black leading-tight mb-4 group-hover:text-[#ff6600] transition-colors tracking-tighter">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                
                <p class="text-gray-400 text-sm font-medium tracking-tight normal-case mb-6 line-clamp-3 leading-relaxed">
                  <?php echo wp_strip_all_tags( get_the_excerpt() ); ?>
                </p>
                
                <div>
                  <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-3 border-b-2 border-[#ff6600] font-black text-xs md:text-sm pb-1.5 hover:text-[#ff6600] hover:border-white transition-all tracking-widest">
                    <span>READ FULL LOG</span>
                    <i class="fa-solid fa-arrow-right text-xs text-[#ff6600]"></i>
                  </a>
                </div>
              </div>

            </div>
          </article>
        <?php continue; endif; endwhile; $blog_query->rewind_posts(); ?>

        <!-- Standard Post Grid -->
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
          <?php 
            $grid_count = 0;
            while ( $blog_query->have_posts() ) : $blog_query->the_post(); $grid_count++;
            if ( $grid_count == 1 ) continue; // Skip featured post
          ?>
            <article class="border border-white/10 bg-[#0a0a0a]/90 backdrop-blur-md group flex flex-col justify-between hover:border-[#ff6600]/40 transition-all duration-300 shadow-xl">
              <div>
                <!-- Image Container -->
                <div class="relative h-64 overflow-hidden bg-black border-b border-white/10">
                  <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-full object-cover grayscale contrast-125 group-hover:grayscale-0 group-hover:scale-105 transition-all duration-700']); ?>
                  <?php else : ?>
                    <div class="w-full h-full bg-[#111] flex items-center justify-center text-gray-700">
                      <i class="fa-solid fa-map-pin text-4xl"></i>
                    </div>
                  <?php endif; ?>
                  
                  <div class="absolute bottom-2 left-2 bg-black/80 px-2 py-1 text-[9px] font-mono text-gray-400 border border-white/10">
                    LOG #<?php echo get_the_ID(); ?>
                  </div>
                </div>
                
                <!-- Content Block -->
                <div class="p-6">
                  <div class="text-[10px] font-bold text-gray-500 mb-2 tracking-widest flex items-center gap-2">
                    <span><?php echo get_the_date(); ?></span>
                    <span>|</span>
                    <span class="text-[#ff6600]">IN <?php the_category(', '); ?></span>
                  </div>

                  <h3 class="text-2xl font-black mb-4 group-hover:text-[#ff6600] transition-colors line-clamp-2 tracking-tighter">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h3>

                  <p class="text-gray-400 text-xs font-medium tracking-normal normal-case mb-4 line-clamp-3 leading-relaxed">
                    <?php echo wp_strip_all_tags( get_the_excerpt() ); ?>
                  </p>
                </div>
              </div>

              <!-- Card Footer Action -->
              <div class="p-6 pt-0 border-t border-white/5 mt-auto">
                <a href="<?php the_permalink(); ?>" class="text-xs font-black tracking-widest text-[#ff6600] flex items-center justify-between group-hover:translate-x-1 transition-transform pt-4">
                  <span>READ LOG</span>
                  <i class="fa-solid fa-chevron-right text-[10px]"></i>
                </a>
              </div>
            </article>
          <?php endwhile; ?>
        </div>

        <!-- Core Native Pagination Links -->
        <div class="mt-16 pt-8 border-t border-white/10 flex justify-center font-black tracking-widest text-sm relative z-20">
          <?php
            echo paginate_links( array(
              'prev_text' => '<i class="fa-solid fa-arrow-left mr-2"></i> PREV',
              'next_text' => 'NEXT <i class="fa-solid fa-arrow-right ml-2"></i>',
              'type'      => 'list',
              'class'     => 'wp-pagination'
            ) );
          ?>
        </div>

      <?php 
      else : 
        echo '<div class="text-center py-16 border border-white/10 bg-[#0a0a0a]"><h2 class="text-2xl font-black text-gray-400 tracking-widest">NO TRANSMISSIONS OR LOGS FOUND</h2></div>';
      endif; 
      wp_reset_postdata(); // Restores original main loop context
      ?>
    </div>

  </section>
</div>

<!-- KEYFRAME ANIMATIONS & PAGINATION HUD STYLES -->
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

  /* Dynamic WP Pagination Styling */
  .wp-pagination ul { 
    display: flex; 
    gap: 0.5rem; 
    align-items: center; 
  }
  .wp-pagination .page-numbers { 
    padding: 0.75rem 1.25rem; 
    border: 1px solid rgba(255,255,255,0.15); 
    background-color: #0a0a0a; 
    color: #ffffff;
    transition: all 0.2s ease;
  }
  .wp-pagination .page-numbers.current { 
    background-color: #ff6600; 
    color: #000000; 
    border-color: #ff6600; 
    font-weight: 900;
    box-shadow: 0 0 15px rgba(255,90,0,0.4);
  }
  .wp-pagination .page-numbers:hover:not(.current) { 
    border-color: #ff6600; 
    color: #ff6600; 
    background-color: #000000;
  }
</style>

<?php get_footer(); ?>