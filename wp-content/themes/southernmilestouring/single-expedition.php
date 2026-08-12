<?php
/**
 * Template Name: Single Expedition Detail
 * Template Post Type: expedition
 * 
 * Fully stylized with tactical HUD typography, dynamic topographic overlays,
 * and high-contrast expedition telemetry widgets.
 */

get_header();

if (have_posts()) :
  while (have_posts()) : the_post();
    
    $current_ride_id = get_the_ID();
    $image_url       = get_the_post_thumbnail_url($current_ride_id, 'full');
    
    // Fetch custom ACF meta fields
    $start_date   = get_field('ride_start_date', $current_ride_id); 
    $end_date     = get_field('ride_end_date', $current_ride_id);
    $distance_kms = get_field('ride_distance', $current_ride_id);
    $ride_price   = get_field('ride_price', $current_ride_id);
    $ride_link    = get_field('ride_form_link', $current_ride_id);
    $ride_map_url   = get_field('ride_map_url', $current_ride_id);
    $ride_map_image = get_field('ride_map_image', $current_ride_id);
    
    // Format dates
    $display_start = $start_date ? date("M d", strtotime(str_replace('/', '-', $start_date))) : 'TBD';
    $display_end   = $end_date ? date("M d", strtotime(str_replace('/', '-', $end_date))) : 'TBD';
    $current_year  = $start_date ? date("Y", strtotime(str_replace('/', '-', $start_date))) : '';
    $display_year  = $current_year ? ', ' . $current_year : '';

    // Terrain Detection Logic
    $post_tags = get_the_tags($current_ride_id);
    $terrain_type = 'DEFAULT';
    $terrain_icon = 'fa-compass';

    if ($post_tags) {
      foreach ($post_tags as $tag) {
        $slug = strtolower($tag->slug);
        if (in_array($slug, ['mountains', 'mountain'])) {
          $terrain_type = 'MOUNTAINS';
          $terrain_icon = 'fa-[#ff6600] fa-mountain';
          break;
        } elseif (in_array($slug, ['beaches', 'coastal', 'beach'])) {
          $terrain_type = 'COASTAL';
          $terrain_icon = 'fa-[#ff6600] fa-[#ff6600] fa-water';
          break;
        } elseif (in_array($slug, ['city', 'urban'])) {
          $terrain_type = 'CITY';
          $terrain_icon = 'fa-city';
          break;
        } elseif (in_array($slug, ['desert', 'dunes'])) {
          $terrain_type = 'DESERT';
          $terrain_icon = 'fa-sun';
          break;
        } elseif (in_array($slug, ['forest', 'jungle'])) {
          $terrain_type = 'FOREST';
          $terrain_icon = 'fa-tree';
          break;
        }
      }
    }
?>

<div class="bg-black text-white min-h-screen uppercase tracking-tighter selection:bg-[#ff6600] selection:text-black">
  
  <main class="relative py-8 px-4 md:px-8 overflow-hidden min-h-screen">
    
    <!-- ================= DYNAMIC BACKGROUND TOPOGRAPHY & GRID ================= -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
      <!-- Grid Pattern Overlay -->
      <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff03_1px,transparent_1px),linear-gradient(to_bottom,#ffffff03_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>

      <!-- Topographic Contour Lines SVG Pattern -->
      <svg class="absolute inset-0 w-full h-full opacity-10 text-[#ff6600]" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
        <defs>
          <pattern id="topo-lines-expedition" width="500" height="500" patternUnits="userSpaceOnUse">
            <path d="M0,100 Q125,40 250,100 T500,100 M0,200 Q125,140 250,200 T500,200 M0,300 Q125,240 250,300 T500,300 M0,400 Q125,340 250,400 T500,400" fill="none" stroke="currentColor" stroke-width="1.5" class="animate-[pulse_8s_ease-in-out_infinite]" />
            <path d="M50,0 Q150,125 50,250 T50,500 M150,0 Q250,125 150,250 T150,500 M250,0 Q350,125 250,250 T250,500" fill="none" stroke="currentColor" stroke-width="1" stroke-dasharray="4 4" class="opacity-50" />
          </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#topo-lines-expedition)" />
      </svg>

      <!-- Sweeping Horizontal Radar / Data Lines -->
      <div class="absolute top-1/3 inset-x-0 h-[1px] bg-gradient-to-r from-transparent via-[#ff6600]/30 to-transparent animate-[stream_10s_linear_infinite]"></div>
      <div class="absolute bottom-1/4 inset-x-0 h-[1px] bg-gradient-to-r from-transparent via-white/15 to-transparent animate-[stream_14s_linear_infinite_2s]"></div>
    </div>

    <div class="relative z-10 max-w-6xl mx-auto">
      
      <!-- Back Link HUD Navigation -->
      <div class="mb-8 flex items-center justify-between border-b border-white/10 pb-4">
        <a href="javascript:history.back()" class="inline-flex items-center gap-2 text-xs text-gray-400 hover:text-[#ff6600] font-black tracking-widest transition-colors group">
          <i class="fa-solid fa-arrow-left text-[#ff6600] group-hover:-translate-x-1 transition-transform"></i>
          <span>RETURN TO EXPEDITIONS</span>
        </a>
      </div>

      <!-- ================= HERO IMAGE HERO BLOCK ================= -->
      <section class="relative mb-12 bg-black border-2 border-white/10 group shadow-2xl overflow-hidden"> 
        
        <!-- Corner Brackets -->
        <div class="absolute top-3 left-3 w-4 h-4 border-t-2 border-l-2 border-[#ff6600] z-20 pointer-events-none"></div>
        <div class="absolute top-3 right-3 w-4 h-4 border-t-2 border-r-2 border-[#ff6600] z-20 pointer-events-none"></div>
        <div class="absolute bottom-3 left-3 w-4 h-4 border-b-2 border-l-2 border-[#ff6600] z-20 pointer-events-none"></div>
        <div class="absolute bottom-3 right-3 w-4 h-4 border-b-2 border-r-2 border-[#ff6600] z-20 pointer-events-none"></div>

        <!-- Aspect Ratio Container -->
        <div class="relative w-full aspect-[16/9] bg-cover bg-center transition-transform duration-1000 group-hover:scale-105"
             style="background-image: url('<?php echo esc_url($image_url); ?>');">
          <div class="absolute inset-0 bg-gradient-to-t from-black via-black/30 to-transparent z-10"></div>
        </div>

        <!-- Floating HUD Header Overlay Details -->
        <div class="absolute bottom-4 left-4 right-4 z-20 flex flex-wrap items-center justify-between gap-4">
          <div class="inline-flex items-center gap-2 bg-black/80 border border-[#ff6600]/50 px-3 py-1 text-[10px] font-black text-[#ff6600] tracking-widest backdrop-blur-md">
            <i class="fa-solid <?php echo esc_attr($terrain_icon); ?>"></i>
            <span>TERRAIN : <?php echo esc_html($terrain_type); ?></span>
          </div>

          <!-- System Telemetry Badge -->
          <div class="inline-flex items-center gap-2 text-[10px] px-3 py-1 font-black font-open-sans tracking-widest text-gray-500">
            <span class="w-2 h-2 rounded-full bg-[#ff6600] animate-pulse"></span>
            <span>EXPEDITION ID: #<?php echo esc_html($current_ride_id); ?></span>
          </div>
        </div>
      </section>

      <div class="grid lg:grid-cols-12 gap-8 lg:gap-12">
        
        <!-- Left Column: Title & Article Content -->
        <div class="lg:col-span-8 space-y-8">
          
          <div class="border-l-4 border-[#ff6600] pl-6 py-2">
            <h1 class="text-3xl md:text-5xl lg:text-6xl font-black tracking-tighter leading-tight text-white uppercase drop-shadow-md">
              <?php the_title(); ?>
            </h1>
          </div>

          <!-- Body Content Container -->
          <article class="bg-[#0a0a0a]/90 border border-white/10 p-6 md:p-10 relative shadow-2xl backdrop-blur-md">
            <div class="entry-content text-gray-300 font-medium normal-case text-base md:text-lg tracking-normal leading-relaxed space-y-6">
              <?php the_content(); ?>
            </div>
          </article>

        </div>

        <!-- Right Column: Sticky Telemetry Sidebar -->
        <div class="lg:col-span-4">
          <div class="sticky top-8 bg-[#0a0a0a]/95 border border-white/15 p-6 md:p-8 flex flex-col space-y-8 shadow-2xl backdrop-blur-md relative overflow-hidden">
            <div>
              <span class="text-[11px] font-black tracking-[0.2em] text-[#ff6600] uppercase block mb-2 flex items-center gap-2">
                <i class="fa-solid fa-microchip"></i>
                TELEMETRY
              </span>
              <div class="h-[2px] w-full bg-gradient-to-r from-[#ff6600] via-white/20 to-transparent"></div>
            </div>

            <div class="space-y-6">              
              <!-- Dates Card -->
              <div class="flex items-start gap-4 p-3 bg-black/60 border border-white/5">
                <span class="text-[#ff6600] text-xl mt-0.5"><i class="fa-solid fa-calendar-days"></i></span>
                <div>
                  <h4 class="text-[10px] text-gray-500 tracking-widest font-black uppercase mb-1">SCHEDULED DATES</h4>
                  <?php if($display_start && $display_end): ?>
                    <p class="text-sm md:text-base font-black tracking-tight text-white">
                      <?php echo esc_html($display_start . ' - ' . $display_end . $display_year); ?>
                    </p>
                  <?php else: ?>
                    <p class="text-sm font-black tracking-tight text-white">TBD</p>
                  <?php endif; ?>
                </div>
              </div>

              <!-- Distance Card -->
              <div class="flex items-start gap-4 p-3 bg-black/60 border border-white/5">
                <span class="text-[#ff6600] text-xl mt-0.5"><i class="fa-solid fa-route"></i></span>
                <div>
                  <h4 class="text-[10px] text-gray-500 tracking-widest font-black uppercase mb-1">ESTIMATED ROUTE DISTANCE</h4>
                  <p class="text-sm md:text-base font-black tracking-tight text-white">
                    <?php echo $distance_kms ? esc_html($distance_kms) : '0'; ?> KMS
                  </p>
                </div>
              </div>

            </div>

            <div class="pt-4 border-t border-white/10 flex flex-col space-y-3">
              <div class="flex items-center justify-between">
                <span class="text-[10px] font-black tracking-widest text-[#ff6600] uppercase block">
                  <i class="fa-solid fa-map-location-dot mr-1"></i> ROUTE MAP
                </span>
              </div>

              <!-- Map Container Block -->
              <div class="relative w-full aspect-video bg-black border border-white/15 overflow-hidden group">
                
                <!-- Crosshair Accents -->
                <div class="absolute top-1 left-1 text-[8px] text-[#ff6600] font-mono pointer-events-none z-20">+</div>
                <div class="absolute top-1 right-1 text-[8px] text-[#ff6600] font-mono pointer-events-none z-20">+</div>
                <div class="absolute bottom-1 left-1 text-[8px] text-[#ff6600] font-mono pointer-events-none z-20">+</div>
                <div class="absolute bottom-1 right-1 text-[8px] text-[#ff6600] font-mono pointer-events-none z-20">+</div>

                <!-- Embedded Interactive Google Map Iframe OR Dynamic Image OR Fallback Grid -->
                <?php if($ride_map_url): ?>
                  <iframe src="<?php echo esc_url($ride_map_url); ?>" class="w-full h-full border-0 grayscale invert opacity-80 hover:opacity-100 transition-opacity" loading="lazy"></iframe>
                <?php else: ?>
                  <!-- Topographic Placeholder Visual when field isn't set -->
                  <div class="w-full h-full bg-[#050505] flex flex-col items-center justify-center p-4 text-center relative overflow-hidden">
                    <svg class="absolute inset-0 w-full h-full opacity-20 text-[#ff6600]" xmlns="http://www.w3.org/2000/svg">
                      <path d="M0 20 Q 50 5, 100 20 T 200 20 T 300 20" stroke="currentColor" fill="none" stroke-width="1"/>
                      <path d="M0 40 Q 70 15, 140 40 T 280 40" stroke="currentColor" fill="none" stroke-width="1"/>
                    </svg>
                    <i class="fa-solid fa-map text-2xl text-[#ff6600] mb-2 animate-pulse"></i>
                    <span class="text-[10px] font-mono tracking-widest text-gray-400 uppercase">TACTICAL ROUTE MAP</span>
                    <span class="text-[8px] font-mono text-gray-600 mt-1">SATELLITE SYNC READY</span>
                  </div>
                <?php endif; ?>
              </div>
            </div>

            <!-- Inclusions Checklist -->
            <div class="inclusion-list pt-6 border-t border-white/10 flex flex-col">
              <div class="mb-4">
                <span class="text-[10px] font-black tracking-widest text-gray-400 uppercase block mb-1">INCLUSIONS</span>
                <div class="h-[2px] w-12 bg-[#ff6600]"></div>
              </div>
              <?php echo get_field('ride_inclusions'); ?>
            </div>

            <!-- Exclusions Checklist -->
            <div class="exclusion-list pt-6 border-t border-white/10 flex flex-col">
              <div class="mb-4">
                <span class="text-[10px] font-black tracking-widest text-gray-400 uppercase block mb-1">EXCLUSIONS</span>
                <div class="h-[2px] w-12 bg-[#ff6600]"></div>
              </div>
              <?php echo get_field('ride_exclusions'); ?>
            </div>

            <!-- Investment Pricing Section -->
            <div class="pt-6 border-t border-white/10 flex flex-col">
              <div class="mb-2">
                <span class="text-[10px] font-black tracking-widest text-[#ff6600] uppercase block mb-1">TARIFF</span>
              </div>
              <?php if($ride_price) : ?>
              <div class="mb-1">
                <p class="text-[12px] font-medium tracking-wide text-gray-300 uppercase">Starting At</p>
              </div>
              <div class="flex items-baseline gap-2">
                <span class="text-3xl md:text-4xl font-black tracking-tighter text-white">
                  <?php echo esc_html($ride_price); ?>
                </span>
                <span class="text-[12px] text-gray-400 tracking-widest font-bold uppercase">/ PERSON <b class="text-[#ff6600]">*</b></span>
              </div>
              <?php else: ?>
              <div class="flex items-baseline gap-2">
                <span class="text-3xl font-black tracking-tighter text-white">UPCOMING</span>
              </div>
            <?php endif; ?>
            </div>

            <!-- Action Button -->
            <div class="pt-2">
              <?php if ($ride_link) : ?>
                <a href="<?php echo esc_url($ride_link); ?>" target="_blank" class="block w-full group">
                  <button class="w-full bg-[#ff6600] hover:bg-white text-black py-4 px-6 text-xs font-black tracking-[0.2em] transition-all duration-300 flex items-center justify-center gap-3 uppercase shadow-[0_0_20px_rgba(255,90,0,0.3)]">
                    <span>RESERVE YOUR SLOT</span>
                    <i class="fa-solid fa-arrow-right group-hover:translate-x-1 transition-transform"></i>
                  </button>
                </a>
              <?php else : ?>
                <div class="w-full border border-white/20 text-white/40 py-4 text-xs font-black tracking-widest text-center uppercase cursor-not-allowed select-none bg-black/40">
                  REGISTRATION OPENS SOON
                </div>
              <?php endif; ?>
            </div>

          </div>
        </div>

      </div>
    </div>
  </main>

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

  /* Dynamic Article Content Styling */
  .entry-content p { 
    margin-bottom: 1.75rem; 
    color: #d1d5db; 
    line-height: 1.8;
  }
  .entry-content h2 { 
    font-size: 1.875rem; 
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
    font-size: 1.35rem; 
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
    padding: 1.5rem; 
    font-style: italic; 
    margin: 2rem 0; 
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

<?php
  endwhile;
endif;

get_footer();

?>