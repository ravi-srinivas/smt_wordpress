<?php 
/**
 * The template for displaying all single posts
 * Fully stylized with high-contrast, edgy tactical HUD typography and custom structures.
 */
get_header(); 
?>

<div class="bg-black text-white min-h-screen uppercase tracking-tighter selection:bg-[#ff6600] selection:text-black">
  <?php while ( have_posts() ) : the_post(); ?>
    
    <!-- ================= HERO HEADER ================= -->
    <header class="relative h-[55vh] md:h-[70vh] overflow-hidden bg-black border-b-4 border-[#ff6600] group select-none">
      
      <!-- Post Thumbnail Image -->
      <div class="absolute inset-0 grayscale brightness-50 contrast-125 group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000 bg-cover bg-center bg-no-repeat">
        <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail('full', ['class' => 'w-full h-full object-cover']); ?>
        <?php else : ?>
          <div class="w-full h-full bg-[#0a0a0a] flex items-center justify-center text-gray-800">
            <i class="fa-solid fa-motorcycle text-8xl"></i>
          </div>
        <?php endif; ?>
      </div>

      <!-- Vignette & Grid HUD Overlays -->
      <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-black/70 z-10"></div>
      <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:4rem_4rem] z-10"></div>

      <!-- Radar Sweep Line Effect -->
      <div class="absolute inset-x-0 h-[2px] bg-gradient-to-r from-transparent via-[#ff6600]/40 to-transparent animate-[radar_6s_ease-in-out_infinite] pointer-events-none z-10"></div>

      <!-- Hero Header Floating Badge -->
      <div class="relative z-20 flex flex-col items-center justify-end h-full text-center text-white px-4 pb-12 max-w-5xl mx-auto uppercase tracking-tighter">
        <div class="inline-flex items-center gap-2 bg-black/80 border border-[#ff6600]/40 text-[#ff6600] px-4 py-1.5 rounded-none text-[10px] md:text-xs font-black tracking-widest shadow-2xl backdrop-blur-sm">
          <i class="fa-solid fa-satellite text-xs animate-pulse"></i>
          <span>TRANSMISSION DECODED // BLOG #<?php echo get_the_ID(); ?></span>
        </div>
      </div>

      <!-- Corner Tactical HUD Details -->
      <div class="absolute bottom-6 right-6 hidden md:flex items-center gap-3 border border-white/20 px-4 py-2 text-[10px] font-mono tracking-widest text-white/50 backdrop-blur-md bg-black/40 z-20">
        <span class="w-2 h-2 rounded-full bg-[#ff6600] animate-pulse"></span>
        <span>SOUTHERN MILES TOURING / EST 2026</span>
      </div>

    </header>

    <section id="main" class="relative py-12 md:py-20 text-white border-y border-white/10 tracking-tighter overflow-hidden select-none">
      
      <!-- DYNAMIC BACKGROUND ANIMATION CONTAINER -->
      <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <!-- 1. Tactical Grid Pattern Overlay -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff03_1px,transparent_1px),linear-gradient(to_bottom,#ffffff03_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>

        <!-- 2. Dynamic Topography Lines SVG -->
        <svg class="absolute inset-0 w-full h-full opacity-10 text-[#ff6600]" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
          <defs>
            <pattern id="topo-lines-single" width="400" height="400" patternUnits="userSpaceOnUse">
              <path d="M0,100 Q100,50 200,100 T400,100 M0,200 Q100,150 200,200 T400,200 M0,300 Q100,250 200,300 T400,300" fill="none" stroke="currentColor" stroke-width="1.5" class="animate-[pulse_6s_ease-in-out_infinite]" />
            </pattern>
          </defs>
          <rect width="100%" height="100%" fill="url(#topo-lines-single)" />
        </svg>

        <!-- 3. Sweeping Data Stream Overlay Lines -->
        <div class="absolute top-1/4 inset-x-0 h-[1px] bg-gradient-to-r from-transparent via-[#ff6600]/30 to-transparent animate-[stream_8s_linear_infinite]"></div>
        <div class="absolute bottom-1/3 inset-x-0 h-[1px] bg-gradient-to-r from-transparent via-white/20 to-transparent animate-[stream_12s_linear_infinite_3s]"></div>
      </div>
      
      <!-- MAIN CONTENT AREA  -->
      <div class="max-w-7xl mx-auto px-4 relative z-10">
        
        <!-- Post Title & Meta Header Block -->
        <div class="text-center bg-[#0a0a0a] border border-white/10 p-8 md:p-14 mb-12 relative overflow-hidden shadow-2xl backdrop-blur-md">
          
          <!-- Corner Brackets -->
          <div class="absolute -top-3 -left-3 w-6 h-6 border-t-2 border-l-2 border-[#ff6600] pointer-events-none"></div>
          <div class="absolute -top-3 -right-3 w-6 h-6 border-t-2 border-r-2 border-[#ff6600] pointer-events-none"></div>
          <div class="absolute -bottom-3 -left-3 w-6 h-6 border-b-2 border-l-2 border-[#ff6600] pointer-events-none"></div>
          <div class="absolute -bottom-3 -right-3 w-6 h-6 border-b-2 border-r-2 border-[#ff6600] pointer-events-none"></div>

          <!-- Category Pill Tag -->
          <div class="mb-6">
            <span class="bg-[#ff6600] text-black font-black text-xs px-4 py-1.5 uppercase tracking-widest shadow-[0_0_15px_rgba(255,90,0,0.4)]">
              <?php the_category(', '); ?>
            </span>
          </div>

          <!-- Article Title -->
          <h1 class="text-3xl md:text-5xl lg:text-7xl font-black leading-tight mb-8 tracking-tighter uppercase drop-shadow-lg">
            <?php the_title(); ?>
          </h1>

          <div class="w-20 h-1 bg-[#ff6600] mx-auto mb-8 shadow-[0_0_15px_#ff6600]"></div>

          <!-- Meta Readout Bar -->
          <div class="flex flex-wrap items-center justify-center gap-4 md:gap-8 text-xs md:text-sm font-bold tracking-widest text-gray-400 border-t border-b border-white/10 py-4 px-6 bg-black/60">
            <span class="flex items-center gap-2"><i class="fa-solid fa-calendar-days text-[#ff6600]"></i> DATE: <?php echo get_the_date(); ?></span>
            <span class="text-white/20">•</span>
            <span class="flex items-center gap-2 text-white"><i class="fa-solid fa-user-ninja text-[#ff6600]"></i> AUTHOR: <?php the_author(); ?></span>
          </div>

        </div>

        <!-- Two-Column Main Content Split Grid -->
        <div class="grid lg:grid-cols-12 gap-8 lg:gap-12">
          
          <!-- Article Content Body -->
          <article class="lg:col-span-8 border border-white/10 bg-[#0a0a0a]/90 p-6 md:p-12 lg:p-14 relative shadow-2xl backdrop-blur-md">
            
            <div class="entry-content text-gray-300 font-medium normal-case text-base md:text-lg tracking-normal leading-relaxed space-y-6">
              <?php the_content(); ?>
            </div>

            <!-- Route Tags Block -->
            <?php if( has_tag() ) : ?>
              <div class="mt-12 pt-8 border-t border-white/10 uppercase tracking-widest text-xs font-black flex flex-wrap gap-3 items-center">
                <span class="text-[#ff6600] flex items-center gap-2"><i class="fa-solid fa-tags"></i> ROUTE TAGS:</span>
                <?php the_tags('<span class="bg-black text-gray-300 border border-white/15 px-3 py-1.5 hover:border-[#ff6600] hover:text-[#ff6600] transition-colors">', '</span><span class="bg-black text-gray-300 border border-white/15 px-3 py-1.5 hover:border-[#ff6600] hover:text-[#ff6600] transition-colors">', '</span>'); ?>
              </div>
            <?php endif; ?>

          </article>

          <!-- Sidebar Actions & Share Panel -->
          <aside class="lg:col-span-4 space-y-8 uppercase">
            
            <!-- Navigation Action Card -->
            <div class="border border-white/10 p-8 bg-[#0a0a0a]/90 text-center shadow-xl backdrop-blur-md relative group hover:border-[#ff6600]/40 transition-colors">
              <h4 class="text-xs font-black tracking-[0.2em] text-gray-400 mb-6 flex items-center justify-center gap-2">
                <i class="fa-solid fa-compass text-[#ff6600]"></i>
                BLOG ACTIONS
              </h4>
              <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="w-full inline-flex items-center justify-center gap-2 bg-transparent border-2 border-[#ff6600] text-[#ff6600] hover:bg-[#ff6600] hover:text-black font-black text-xs py-4 px-6 tracking-widest transition-all duration-300 shadow-[0_0_15px_rgba(255,90,0,0.2)]">
                <i class="fa-solid fa-chevron-left text-xs"></i>
                <span>BACK TO ALL BLOGS</span>
              </a>
            </div>

            <!-- Share Log Card -->
            <div class="border border-white/10 p-8 bg-[#0a0a0a]/90 text-center shadow-xl backdrop-blur-md relative group hover:border-[#ff6600]/40 transition-colors">
              <h4 class="text-xs font-black tracking-[0.2em] text-gray-400 mb-6 flex items-center justify-center gap-2">
                <i class="fa-solid fa-share-nodes text-[#ff6600]"></i>
                SHARE THIS LOG
              </h4>
              <div class="flex justify-center gap-4 text-xl">
                <a href="https://facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noopener noreferrer" class="w-12 h-12 border border-white/10 bg-black flex items-center justify-center text-gray-400 hover:text-[#ff6600] hover:border-[#ff6600] hover:scale-110 transition-all shadow-md">
                  <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" rel="noopener noreferrer" class="w-12 h-12 border border-white/10 bg-black flex items-center justify-center text-gray-400 hover:text-[#ff6600] hover:border-[#ff6600] hover:scale-110 transition-all shadow-md">
                  <i class="fa-brands fa-x-twitter"></i>
                </a>
                <a href="https://api.whatsapp.com/send?text=<?php echo urlencode(get_the_title() . ' ' . get_permalink()); ?>" target="_blank" rel="noopener noreferrer" class="w-12 h-12 border border-white/10 bg-black flex items-center justify-center text-gray-400 hover:text-[#ff6600] hover:border-[#ff6600] hover:scale-110 transition-all shadow-md">
                  <i class="fa-brands fa-whatsapp"></i>
                </a>
              </div>
            </div>

            <!-- Expedition CTA Banner -->
            <div class="border border-white/10 p-8 bg-black text-center relative overflow-hidden group">
              <div class="absolute inset-0 bg-gradient-to-b from-[#ff6600]/10 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
              <h4 class="text-xl font-black text-white mb-2 tracking-tighter">READY TO RIDE?</h4>
              <p class="text-xs font-bold text-gray-400 mb-6 tracking-widest">JOIN OUR NEXT GUIDED EXPEDITION ACROSS INDIA.</p>
              <a href="<?php echo esc_url(home_url('/expeditions')); ?>" class="inline-block w-full bg-[#ff6600] text-black font-black text-xs py-3.5 tracking-[0.2em] hover:bg-white transition-colors">
                VIEW EXPEDITIONS
              </a>
            </div>

          </aside>

        </div>

      </div>

    </section>
  <?php endwhile; ?>
</div>

<!-- KEYFRAME ANIMATIONS & ENTRY CONTENT TYPOGRAPHY STYLES -->
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

  /* Dynamic Article Formatting Styles */
  .entry-content p { 
    margin-bottom: 1.75rem; 
    color: #d1d5db; 
    line-height: 1.8;
  }
  .entry-content h2 { 
    font-size: 2rem; 
    font-weight: 900; 
    text-transform: uppercase; 
    letter-spacing: -0.025em; 
    color: #ffffff; 
    margin-top: 2.5rem; 
    margin-bottom: 1.25rem; 
    border-left: 4px solid #ff6600; 
    padding-left: 1rem; 
  }
  .entry-content h3 { 
    font-size: 1.5rem; 
    font-weight: 900;
    text-transform: uppercase;
    letter-spacing: -0.025em;
    color: #ff6600; 
    margin-top: 2rem;
    margin-bottom: 1rem;
  }
  .entry-content blockquote { 
    background: #000000; 
    border-left: 4px solid #ff6600; 
    border-right: 1px solid rgba(255,255,255,0.1);
    padding: 1.75rem; 
    font-style: italic; 
    margin: 2.5rem 0; 
    color: #9ca3af; 
  }
  .entry-content a { 
    color: #ff6600; 
    border-bottom: 1px dashed #ff6600; 
    transition: all 0.2s ease; 
  }
  .entry-content a:hover { 
    color: #ffffff; 
    border-color: #ffffff; 
  }
  .entry-content img { 
    border: 1px solid rgba(255,255,255,0.1); 
    margin: 2.5rem auto; 
    width: 100%; 
    height: auto; 
    box-shadow: 0 10px 30px rgba(0,0,0,0.8);
  }
</style>

<?php get_footer(); ?>