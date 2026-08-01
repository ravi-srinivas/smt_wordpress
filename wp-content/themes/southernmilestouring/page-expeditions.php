<?php 
  /*
  Template Name: Expeditions Template
  */
  get_header(); 
?>
<div class="bg-black text-white selection:bg-[#ff6600] selection:text-black">

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

    <!-- Hero Content Block -->
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4 max-w-5xl mx-auto uppercase tracking-tighter">
      
      <!-- Top Pill Badge -->
      <div class="inline-flex items-center gap-2 bg-black/80 border border-[#ff6600]/40 text-[#ff6600] px-4 py-1.5 rounded-none text-[10px] md:text-xs font-black tracking-widest mb-6 shadow-2xl backdrop-blur-sm">
        <i class="fa-solid fa-compass text-xs animate-spin-slow"></i>
        <span>EXPEDITIONS & ESCAPES</span>
      </div>

      <h1 class="text-4xl md:text-6xl lg:text-8xl font-black mb-8 leading-[0.9] tracking-tighter drop-shadow-2xl">
        YOUR NEXT ESCAPE
      </h1>
      
      <div class="w-24 h-2 bg-[#ff6600] mb-8 group-hover:w-40 transition-all duration-500 shadow-[0_0_15px_#ff6600]"></div>
      
      <p class="text-sm md:text-lg font-bold tracking-[0.3em] max-w-2xl mx-auto text-gray-300 leading-relaxed drop-shadow">
        Explore our diverse expedition packages designed for every adventurer!
      </p>

    </div>

    <!-- Corner Tactical HUD Details -->
    <div class="absolute bottom-6 right-6 hidden md:flex items-center gap-3 border border-white/20 px-4 py-2 text-[10px] font-open-sans tracking-widest text-white/50 backdrop-blur-md bg-black/40">
      <span class="w-2 h-2 rounded-full bg-[#ff6600] animate-pulse"></span>
      <span>SOUTHERN MILES TOURING / EST 2026</span>
    </div>

  </section>

  <section class="relative py-16 text-white border-y border-white/10 uppercase tracking-tighter overflow-hidden select-none">
    
    <!-- DYNAMIC BACKGROUND ANIMATION CONTAINER -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
      <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff03_1px,transparent_1px),linear-gradient(to_bottom,#ffffff03_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>

      <svg class="absolute inset-0 w-full h-full opacity-10 text-[#ff6600]" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
        <defs>
          <pattern id="topo-lines-expedition" width="400" height="400" patternUnits="userSpaceOnUse">
            <path d="M0,100 Q100,50 200,100 T400,100 M0,200 Q100,150 200,200 T400,200 M0,300 Q100,250 200,300 T400,300" fill="none" stroke="currentColor" stroke-width="1.5" class="animate-[pulse_6s_ease-in-out_infinite]" />
          </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#topo-lines-expedition)" />
      </svg>

      <div class="absolute top-1/3 inset-x-0 h-[1px] bg-gradient-to-r from-transparent via-[#ff6600]/30 to-transparent animate-[stream_8s_linear_infinite]"></div>
      <div class="absolute bottom-1/4 inset-x-0 h-[1px] bg-gradient-to-r from-transparent via-white/20 to-transparent animate-[stream_12s_linear_infinite_3s]"></div>

      <div class="absolute top-12 left-10 hidden md:flex items-center gap-2 opacity-25 animate-[bounce_5s_infinite]">
        <span class="w-3 h-3 rounded-full border-2 border-[#ff6600] bg-black"></span>
        <span class="text-[9px] font-open-sans tracking-widest text-[#ff6600]">EXPEDITION HQ // BANGALORE</span>
      </div>
    </div>

    <!-- MAIN CONTENT -->
    <div class="relative z-10 text-center max-w-7xl mx-auto px-4">
      <div class="inline-flex items-center gap-2 bg-[#ff6600] text-black px-6 py-2 rounded-none text-xs font-black mb-8 tracking-[0.3em] shadow-[0_0_15px_rgba(255,90,0,0.3)]">
        <i class="fa-solid fa-flag text-xs"></i>
        <span>SOUTHERN MILES • GUIDED BY PASSION</span>
      </div>
      
      <h1 class="text-5xl lg:text-7xl font-black text-white mb-8 tracking-tighter leading-[0.8] drop-shadow-none">
        WHAT WE OFFER?
      </h1>

      <div class="max-w-4xl mx-auto my-12 text-center border-t border-white/10 pt-12">
        <h2 class="text-xl font-black text-white tracking-[0.3em] mb-6">
          THE EXPEDITION EXPERIENCE
        </h2>
        <p class="text-md text-gray-400 font-medium leading-relaxed tracking-wide mb-6 normal-case">
          Southern Miles Touring is a premium adventure touring company offering end-to-end curated touring experiences for motorcycle enthusiasts, car enthusiasts, families, and travel communities across India. Founded by passionate and experienced tourers, we specialize in guided motorcycle and car expeditions, while also offering custom-quoted MPV and group touring packages for families, riding clubs, and automotive communities. From expert tour captains, backup support, medical and mechanic assistance, to professional media coverage and handpicked luxury stays, every detail is seamlessly managed so you can focus purely on the journey. Blending adventure, nature, wilderness, and premium hospitality, Southern Miles Touring delivers experiences that are immersive, effortless, and truly unforgettable. 
        </p>
        <p class="text-sm text-[#ff6600] font-bold tracking-widest uppercase">
          Adventure, Wilderness, and Premium Hospitality. Blended perfectly.
        </p>
      </div>
      
      <!-- Core Metric Counters Grid -->
      <div class="grid grid-cols-2 md:grid-cols-4 gap-0 mt-16 border border-white/10 divide-x divide-y md:divide-y-0 divide-white/10 bg-black/60 backdrop-blur-md shadow-2xl">
        
        <!-- Item 1 -->
        <div class="group p-10 bg-black/80 hover:bg-[#0f0f0f] transition-all text-center">
          <i class="fa-solid fa-route text-5xl text-[#ff6600] mx-auto mb-6 transition-transform group-hover:scale-110 inline-block"></i>
          <div class="text-4xl font-black text-white mb-1 tracking-tighter leading-none">
            50+
          </div>
          <div class="text-[10px] font-black text-gray-500 tracking-[0.2em]">
            LEGENDARY ROUTES
          </div>
        </div>

        <!-- Item 2 -->
        <div class="group p-10 bg-black/80 hover:bg-[#0f0f0f] transition-all text-center">
          <i class="fa-solid fa-bed text-5xl text-[#ff6600] mx-auto mb-6 transition-transform group-hover:scale-110 inline-block"></i>
          <div class="text-4xl font-black text-white mb-1 tracking-tighter leading-none">
            25+
          </div>
          <div class="text-[10px] font-black text-gray-500 tracking-[0.2em]">
            LUXURY STAYS
          </div>
        </div>

        <!-- Item 3 -->
        <div class="group p-10 bg-black/80 hover:bg-[#0f0f0f] transition-all text-center">
          <i class="fa-solid fa-utensils text-5xl text-[#ff6600] mx-auto mb-6 transition-transform group-hover:scale-110 inline-block"></i>
          <div class="text-4xl font-black text-white mb-1 tracking-tighter leading-none">
            100+
          </div>
          <div class="text-[10px] font-black text-gray-500 tracking-[0.2em]">
            GOURMET MEALS
          </div>
        </div>

        <!-- Item 4 -->
        <div class="group p-10 bg-black/80 hover:bg-[#0f0f0f] transition-all text-center">
          <i class="fa-solid fa-hand-fist text-5xl text-[#ff6600] mx-auto mb-6 transition-transform group-hover:scale-110 inline-block"></i>
          <div class="text-4xl font-black text-white mb-1 tracking-tighter leading-none">
            24/7
          </div>
          <div class="text-[10px] font-black text-gray-500 tracking-[0.2em]">
            ROAD SUPPORT
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ================= EXPEDITION PACKAGES SECTION ================= -->
  <section class="relative py-16 bg-[#0a0a0a] text-white uppercase border-b border-white/10 select-none">
    
    <!-- Background Grid Texture -->
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff03_1px,transparent_1px),linear-gradient(to_bottom,#ffffff03_1px,transparent_1px)] bg-[size:4rem_4rem] pointer-events-none"></div>

    <div class="max-w-7xl mx-auto px-4 relative z-10">
      
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-5xl font-black text-white mb-4 tracking-tighter">
          EXPEDITION PACKAGES
        </h2>
        <p class="text-sm md:text-base text-gray-400 font-bold max-w-2xl mx-auto tracking-[0.2em] leading-loose">
          TWO/FOUR WHEELER PACKAGES TAILORED FOR MODERN ADVENTURES. ENDURANCE, SKILL, AND PRECISION PLANNING.
        </p>
        <div class="w-12 h-1 bg-[#ff6600] mx-auto mt-6 shadow-[0_0_10px_#ff6600]"></div>
      </div>

      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
        <?php 
          $today_ymd = date('Ymd'); 
          $args = array(
            'post_type'      => 'expedition', 
            'posts_per_page' => -1,
            'orderby'        => array(
              'start_date_clause' => 'ASC',
            ),
            'meta_query'     => array(
              'relation' => 'AND',
              'end_date_clause' => array(
                'relation' => 'OR',
                array(
                  'key'     => 'ride_end_date',
                  'value'   => $today_ymd,
                  'compare' => '>=',
                  'type'    => 'NUMERIC',
                ),
                array(
                  'key'     => 'ride_end_date',
                  'compare' => 'NOT EXISTS', 
                ),
              ),
              'start_date_clause' => array(
                'relation' => 'OR',
                array(
                  'key'     => 'ride_start_date',
                  'compare' => 'EXISTS', 
                ),
                array( 
                  'key'     => 'ride_start_date',
                  'compare' => 'NOT EXISTS',
                ),
              ),
            ),
          );
          $upcoming_rides = new WP_Query($args);
          
          $ride_counter = 0;
          if ($upcoming_rides->have_posts()) :
            while ($upcoming_rides->have_posts()) : $upcoming_rides->the_post(); 
              $ride_counter++; 
              
              $current_ride_id = get_the_ID();
              $image_url       = get_the_post_thumbnail_url($current_ride_id, 'full');
              
              $start_date   = get_field('ride_start_date', $current_ride_id); 
              $end_date     = get_field('ride_end_date', $current_ride_id);
              $distance_kms = get_field('ride_distance', $current_ride_id);
              $ride_price   = get_field('ride_price', $current_ride_id);
              
              if ($ride_counter === 1) {
                $display_start = $start_date ? date("M d", strtotime(str_replace('/', '-', $start_date))) : 'TBD';
                $display_end   = $end_date ? date("M d", strtotime(str_replace('/', '-', $end_date))) : 'TBD';
                $current_year  = $start_date ? date("Y", strtotime(str_replace('/', '-', $start_date))) : '';
                $display_year  = $current_year ? ', ' . $current_year : '';
                $date_string   = $display_start . ' to ' . $display_end . $display_year;
                
                $price_string  = esc_html($ride_price);
                $badge_text    = 'OPENS SOON';

                $card_border_class  = 'border-[#ff6600] bg-[#0d0d0d] shadow-[0_0_20px_rgba(255,90,0,0.15)]';
                $image_filter_class = 'grayscale-0 brightness-100 scale-100 group-hover:scale-105';
                $title_color_class  = 'text-[#ff6600]';
                $is_tentative       = false;
              } else {
                $date_string   = 'TBD';
                $price_string  = '';
                $badge_text    = 'UPCOMING';

                $card_border_class  = 'border-white/10 hover:border-[#ff6600]/40 hover:bg-[#0d0d0d]';
                $image_filter_class = 'grayscale brightness-75 group-hover:grayscale-0 group-hover:brightness-100 scale-100 group-hover:scale-105';
                $title_color_class  = 'group-hover:text-[#ff6600]';
                $is_tentative       = true;
              }
        ?>
        
        <!-- Individual Package Card -->
        <div class="group bg-[#0a0a0a] border <?php echo $card_border_class; ?> transform transition-all duration-300 ease-out hover:-translate-y-1 flex flex-col overflow-hidden shadow-xl">
          
          <!-- Media Container with Zoom Effect -->
          <div class="relative h-56 overflow-hidden">
            <?php if (!empty($image_url)) : ?>
            <img
              src="<?php echo esc_url($image_url); ?>"
              alt="<?php echo esc_attr(get_the_title($current_ride_id)); ?>"
              class="w-full h-full object-cover object-top transition-all duration-700 ease-out <?php echo $image_filter_class; ?>"
            />
            <?php endif; ?>
            
            <!-- Vignette top overlay for crisp badge readability -->
            <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-transparent to-transparent pointer-events-none"></div>
            
            <div class="absolute top-0 left-0 bg-[#ff6600] text-black text-[10px] font-black px-4 py-1.5 tracking-widest shadow-md">
              <?php echo esc_html($badge_text); ?>
            </div>
          </div>

          <!-- Content Area -->
          <div class="p-6 md:p-8 flex flex-col flex-grow relative">
            <h3 class="text-xl font-black tracking-tighter leading-tight mb-4 transition-colors duration-200 <?php echo $title_color_class; ?>">
              <?php echo esc_html(get_the_title($current_ride_id)); ?>
            </h3>
            
            <!-- Route Specifications Metadata Block -->
            <div class="space-y-3 mb-6 text-[10px] tracking-widest text-gray-400 font-bold">
              <div class="flex items-center gap-3 transition-colors group-hover:text-gray-300">
                <span class="text-[#ff6600] w-4 text-center"><i class="fas fa-calendar-alt text-xs"></i></span>
                <span>
                  <?php echo esc_html($date_string); ?>
                </span>
              </div>
              <div class="flex items-center gap-3 transition-colors group-hover:text-gray-300">
                <span class="text-[#ff6600] w-4 text-center"><i class="fas fa-map-marker-alt text-xs"></i></span>
                <span><?php echo $distance_kms ? esc_html($distance_kms) : '0'; ?> KMS</span>
              </div>
            </div>
            
            <p class="text-xs text-gray-500 lowercase mb-8 line-clamp-3 leading-relaxed group-hover:text-gray-400 transition-colors duration-300">
              <?php echo esc_html(get_the_excerpt($current_ride_id)); ?>
            </p>

            <!-- Pricing & Actions Row -->
            <div class="mt-auto pt-6 border-t border-white/10 flex items-center justify-between">
              <div class="transition-transform duration-300 group-hover:translate-x-0.5">
                <?php if($price_string != ''): ?>
                <span class="block text-2xl font-black tracking-tighter text-white">
                  <?php echo $price_string; ?>
                </span>
                <span class="text-[9px] text-gray-500 tracking-widest font-bold">
                  PER TOURER
                </span>
                <?php else: ?>
                <span class="block text-2xl font-black tracking-tighter text-white">
                  <?php echo $price_string; ?>
                </span>
                <?php endif; ?>
              </div>

              <?php if (!$is_tentative) : ?>
              <a href="<?php echo esc_url(get_permalink($current_ride_id)); ?>" class="inline-block group/btn">
                <button class="bg-[#ff6600] hover:bg-white text-black px-5 py-2.5 text-[10px] font-black tracking-widest transition-all duration-300 flex items-center gap-2 transform active:scale-95 shadow-md">
                  <span>LEARN MORE</span>
                  <span class="transform transition-transform duration-300 group-hover/btn:translate-x-1">→</span>
                </button>
              </a>
              <?php else : ?>
              <div class="border border-white/10 text-white/40 group-hover:border-white/20 group-hover:text-white/60 px-5 py-2.5 text-[10px] font-black tracking-widest uppercase cursor-default select-none transition-all duration-300">
                STAY TUNED
              </div>
              <?php endif; ?>
            </div>
          </div>

        </div>
        <?php
            endwhile;
          wp_reset_postdata();
          endif;
        ?>
      </div>
    </div>
  </section>
  
  <!-- ================= CHOOSE YOUR KIND OF ESCAPE ================= -->
  <section class="bg-black py-16 md:py-24 select-none">
    <div class="max-w-7xl mx-auto px-4">
      
      <!-- Callout Box Container -->
      <div class="bg-white text-black p-8 md:p-16 rounded-none border-4 md:border-8 border-[#ff6600] text-center relative overflow-hidden shadow-[0_0_50px_rgba(255,90,0,0.2)]">
        
        <!-- Diagonal Pattern Overlay Texture -->
        <div class="absolute inset-0 bg-[linear-gradient(45deg,#00000008_25%,transparent_25%,transparent_50%,#00000008_50%,#00000008_75%,transparent_75%,transparent)] bg-[size:1rem_1rem] pointer-events-none"></div>

        <div class="relative z-10 max-w-5xl mx-auto">
          <div class="inline-flex items-center gap-2 bg-black text-[#ff6600] px-6 py-2 rounded-none text-xs font-black mb-8 tracking-[0.3em] uppercase shadow-lg">
            <i class="fa-solid fa-layer-group text-xs"></i>
            <span>CURATED EXPERIENCES FOR EVERY GROUP</span>
          </div>

          <h2 class="text-4xl md:text-7xl lg:text-8xl font-black mb-8 tracking-tighter leading-none uppercase">
            CHOOSE YOUR <br/> KIND OF ESCAPE
          </h2>

          <p class="text-xs md:text-base font-bold text-gray-700 mb-16 max-w-4xl mx-auto tracking-widest uppercase leading-relaxed">
            MOTORCYCLE EXPEDITIONS, SCENIC ROAD TRIPS, CORPORATE GETAWAYS, FAMILY ESCAPES, KITTY PARTY RETREATS, STAYCATIONS & WORKATIONS — ALL CRAFTED FOR MEMORABLE EXPERIENCES.
          </p>

          <!-- Interactive Escape Grid -->
          <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16 text-left">
            
            <div class="border-4 border-black p-8 bg-white hover:bg-black hover:text-white transition-all duration-300 group">
              <h3 class="text-2xl font-black uppercase mb-4 group-hover:text-[#ff6600] transition-colors">Motorcycle Tours</h3>
              <p class="text-sm font-bold tracking-wide uppercase leading-relaxed text-gray-800 group-hover:text-gray-300 transition-colors">
                Epic rides through winding roads, mountain trails, coastlines, and hidden destinations.
              </p>
            </div>

            <div class="border-4 border-black p-8 bg-white hover:bg-black hover:text-white transition-all duration-300 group">
              <h3 class="text-2xl font-black uppercase mb-4 group-hover:text-[#ff6600] transition-colors">Luxury Road Trips</h3>
              <p class="text-sm font-bold tracking-wide uppercase leading-relaxed text-gray-800 group-hover:text-gray-300 transition-colors">
                Premium car & MPV journeys designed for comfort, exploration, and unforgettable drives.
              </p>
            </div>

            <div class="border-4 border-black p-8 bg-white hover:bg-black hover:text-white transition-all duration-300 group">
              <h3 class="text-2xl font-black uppercase mb-4 group-hover:text-[#ff6600] transition-colors">Corporate Retreats</h3>
              <p class="text-sm font-bold tracking-wide uppercase leading-relaxed text-gray-800 group-hover:text-gray-300 transition-colors">
                Team outings, offsites, and curated experiences built to recharge and reconnect.
              </p>
            </div>

            <div class="border-4 border-black p-8 bg-white hover:bg-black hover:text-white transition-all duration-300 group">
              <h3 class="text-2xl font-black uppercase mb-4 group-hover:text-[#ff6600] transition-colors">Family Escapes</h3>
              <p class="text-sm font-bold tracking-wide uppercase leading-relaxed text-gray-800 group-hover:text-gray-300 transition-colors">
                Relaxed journeys with handpicked stays, scenic routes, and experiences for all ages.
              </p>
            </div>

            <div class="border-4 border-black p-8 bg-white hover:bg-black hover:text-white transition-all duration-300 group">
              <h3 class="text-2xl font-black uppercase mb-4 group-hover:text-[#ff6600] transition-colors">Kitty & Group Trips</h3>
              <p class="text-sm font-bold tracking-wide uppercase leading-relaxed text-gray-800 group-hover:text-gray-300 transition-colors">
                Fun-filled getaways crafted for friends, social groups, celebrations, and reunions.
              </p>
            </div>

            <div class="border-4 border-black p-8 bg-white hover:bg-black hover:text-white transition-all duration-300 group">
              <h3 class="text-2xl font-black uppercase mb-4 group-hover:text-[#ff6600] transition-colors">Staycations & Workations</h3>
              <p class="text-sm font-bold tracking-wide uppercase leading-relaxed text-gray-800 group-hover:text-gray-300 transition-colors">
                Balance productivity and relaxation with serene stays and thoughtfully planned escapes.
              </p>
            </div>

          </div>

          <!-- Bottom Button Action -->
          <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a 
              href="<?php echo esc_url(home_url('/contact')); ?>" 
              class="w-full sm:w-auto bg-black text-white hover:bg-[#ff6600] hover:text-black px-12 md:px-16 py-6 rounded-none text-sm md:text-base font-black tracking-[0.2em] transition-all duration-300 uppercase flex items-center justify-center gap-4 group shadow-2xl"
            >
              <span>PLAN YOUR EXPERIENCE NOW</span>
              <i class="fa-solid fa-arrow-right transform group-hover:translate-x-2 transition-transform duration-300"></i>
            </a>
          </div>

        </div>
      </div>

    </div>
  </section>

</div>

<!-- KEYFRAME ANIMATIONS FOR THE HUD & DATA STREAMS -->
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
</style>

<?php get_footer(); ?>