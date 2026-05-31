<?php 
  /*
  Template Name: Expeditions Template
  */
  get_header(); 
?>
    <div class="bg-black">
      <section class="relative h-[60vh] md:h-[80vh] overflow-hidden bg-black border-b-4 border-[#ff5a00] group">
        <div
          class="absolute inset-0 grayscale brightness-50 contrast-125 group-hover:grayscale-0 transition-all duration-1000 bg-cover bg-center bg-no-repeat"
          style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/expeditions.jpg');"
        ></div>
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4 max-w-5xl mx-auto uppercase tracking-tighter">
          <h1 class="text-4xl md:text-6xl lg:text-8xl font-black mb-8 leading-[0.9] tracking-tighter">
            Your Next Escape
          </h1>
          <div class="w-24 h-2 bg-[#ff5a00] mb-8"></div>
          <p class="text-sm md:text-lg font-bold tracking-[0.3em] max-w-2xl mx-auto text-gray-300 leading-relaxed">
            Explore our diverse expedition packages designed for every adventurer!
          </p>
        </div>
        <div class="absolute bottom-6 right-6 hidden md:block border border-white/20 px-4 py-2 text-[10px] font-black tracking-widest text-white/40 backdrop-blur-sm">
          SOUTHERN MILES TOURING / EST 2026
        </div>
      </section>

      <section class="text-white py-16 border-y border-white/10 uppercase tracking-tighter">
        <div class="text-center relative overflow-hidden">
          <div class="inline-flex items-center bg-[#ff5a00] text-black px-6 py-2 rounded-none text-xs font-black mb-8 tracking-[0.3em]">
            SOUTHERN MILES • GUIDED BY PASSION
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
            <p class="text-sm text-[#ff5a00] font-bold tracking-widest uppercase">
              Adventure, Wilderness, and Premium Hospitality. Blended perfectly.
            </p>
          </div>
          
          <div class="grid grid-cols-2 md:grid-cols-4 gap-0 mt-20 border border-white/10 divide-x divide-y md:divide-y-0 divide-white/10">             <!-- Item 1 -->
            <div class="group p-10 bg-black hover:bg-[#111] transition-all text-center">
              <i class="fa-solid fa-route text-5xl text-[#ff5a00] mx-auto mb-6 transition-transform group-hover:scale-110 inline-block"></i>
              <div class="text-4xl font-black text-white mb-1 tracking-tighter leading-none">
                50+
              </div>
              <div class="text-[10px] font-black text-gray-500 tracking-[0.2em]">
                LEGENDARY ROUTES
              </div>
            </div>

            <div class="group p-10 bg-black hover:bg-[#111] transition-all text-center">
              <i class="fa-solid fa-bed text-5xl text-[#ff5a00] mx-auto mb-6 transition-transform group-hover:scale-110 inline-block"></i>
              <div class="text-4xl font-black text-white mb-1 tracking-tighter leading-none">
                25+
              </div>
              <div class="text-[10px] font-black text-gray-500 tracking-[0.2em]">
                LUXURY STAYS
              </div>
            </div>

            <div class="group p-10 bg-black hover:bg-[#111] transition-all text-center">
              <i class="fa-solid fa-utensils text-5xl text-[#ff5a00] mx-auto mb-6 transition-transform group-hover:scale-110 inline-block"></i>
              <div class="text-4xl font-black text-white mb-1 tracking-tighter leading-none">
                100+
              </div>
              <div class="text-[10px] font-black text-gray-500 tracking-[0.2em]">
                GOURMET MEALS
              </div>
            </div>

            <div class="group p-10 bg-black hover:bg-[#111] transition-all text-center">
              <i class="fa-solid fa-hand-fist text-5xl text-[#ff5a00] mx-auto mb-6 transition-transform group-hover:scale-110 inline-block"></i>
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

      <!-- Expeditions Packages Section -->
      <section class="py-20 bg-[#111] text-white uppercase">
        <div class="max-w-7xl mx-auto px-4">
          <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-black text-white mb-4 tracking-tighter">
              EXPEDITION PACKAGES
            </h2>
            <p class="text-sm md:text-base text-gray-400 font-bold max-w-2xl mx-auto tracking-[0.2em] leading-loose">
              TWO/FOUR WHEELER PACKAGES TAILORED FOR MODERN ADVENTURES. ENDURANCE, SKILL, AND PRECISION PLANNING.
            </p>
            <div class="w-12 h-1 bg-[#ff5a00] mx-auto mt-6"></div>
          </div>

          <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
            <?php 
              $today_ymd = date('Ymd'); 
              $args = array(
                'post_type'      => 'expedition', 
                'posts_per_page' => -1,
                'orderby'        => array(
                  'start_date_clause' => 'ASC',
                )
              );
              $upcoming_rides = new WP_Query($args);
              
              // Initialize a counter to track the first item
              $ride_counter = 0;
              if ($upcoming_rides->have_posts()) :
                while ($upcoming_rides->have_posts()) : $upcoming_rides->the_post(); 
                  $ride_counter++; // Increment counter on every loop iteration
                  
                  // Setup local scoped variables to protect data from theme loop conflicts
                  $current_ride_id = get_the_ID();
                  $image_url       = get_the_post_thumbnail_url($current_ride_id, 'full');
                  
                  // Fetch custom meta directly from the specific ID
                  $start_date   = get_field('ride_start_date', $current_ride_id); 
                  $end_date     = get_field('ride_end_date', $current_ride_id);
                  $distance_kms = get_field('ride_distance', $current_ride_id);
                  $ride_price   = get_field('ride_price', $current_ride_id);
                  
                  // Only show real dates and prices for the first upcoming ride (counter == 1)
                  if ($ride_counter === 1) {
                    $display_start = $start_date ? date("M d", strtotime(str_replace('/', '-', $start_date))) : 'TBD';
                    $display_end   = $end_date ? date("M d", strtotime(str_replace('/', '-', $end_date))) : 'TBD';
                    $current_year  = $start_date ? date("Y", strtotime(str_replace('/', '-', $start_date))) : '';
                    $display_year  = $current_year ? ', ' . $current_year : '';
                    $date_string   = $display_start . ' to ' . $display_end . $display_year;
                    
                    $price_string  = $ride_price ? esc_html($ride_price) : 'TBD';
                    $badge_text    = 'UPCOMING';

                    // Active state layout classes for the first card
                    $card_border_class  = 'border-[#ff5a00]';
                    $image_filter_class = 'grayscale-0 brightness-100';
                    $title_color_class  = 'text-[#ff5a00]';
                    $is_tentative       = false;
                  } else {
                    // Fallback values for all subsequent cards
                    $date_string   = 'TBD';
                    $price_string  = 'TBD';
                    $badge_text    = 'TENTATIVE';

                    // Default standard layout classes for the remaining cards
                    $card_border_class  = 'border-white/5 hover:border-[#ff5a00]/50';
                    $image_filter_class = 'grayscale brightness-75 group-hover:grayscale-0 group-hover:brightness-100';
                    $title_color_class  = 'group-hover:text-[#ff5a00]';
                    $is_tentative       = true;
                  }
            ?>
            <div class="group bg-[#0a0a0a] border <?php echo $card_border_class; ?> transition-all duration-300 flex flex-col overflow-hidden">
              <div class="relative h-56 overflow-hidden">
                <?php if (!empty($image_url)) : ?>
                <img
                  src="<?php echo esc_url($image_url); ?>"
                  alt="<?php echo esc_attr(get_the_title($current_ride_id)); ?>"
                  class="w-full h-full object-cover object-top grayscale brightness-75 group-hover:grayscale-0 group-hover:brightness-100 transition-all duration-700"
                />
                <?php endif; ?>
                <div class="absolute top-0 left-0 bg-[#ff5a00] text-black text-[10px] font-black px-3 py-1 tracking-widest">
                  <?php echo esc_html($badge_text); ?>
                </div>
              </div>
              <div class="p-6 flex flex-col flex-grow">
                <h3 class="text-xl font-black tracking-tighter leading-tight mb-4 group-hover:text-[#ff5a00] transition-colors">
                  <?php echo esc_html(get_the_title($current_ride_id)); ?>
                </h3>
                <div class="space-y-3 mb-6 text-[10px] tracking-widest text-gray-400 font-bold">
                  <div class="flex items-center gap-2">
                    <span class="text-[#ff5a00]"><i class="fas fa-calendar-alt"></i></span>
                    <span>
                      <?php echo esc_html($date_string); ?>
                    </span>
                  </div>
                  <div class="flex items-center gap-2">
                    <span class="text-[#ff5a00]"><i class="fas fa-map-marker-alt"></i></span>
                    <span><?php echo $distance_kms ? esc_html($distance_kms) : '0'; ?> KMS</span>
                  </div>
                </div>
                <p class="text-xs text-gray-500 lowercase mb-8">
                  <?php echo esc_html(get_the_excerpt($current_ride_id)); ?>
                </p>
                <div class="mt-auto pt-6 border-t border-white/10 flex items-center justify-between">
                  <div>
                    <span class="block text-2xl font-black tracking-tighter">
                      <?php echo $price_string; ?>
                    </span>
                    <span class="text-[9px] text-gray-500 tracking-widest">
                      PER RIDER
                    </span>
                  </div>
                  <?php if (!$is_tentative) : ?>
                  <a href="<?php echo esc_url(get_permalink($current_ride_id)); ?>" class="inline-block">
                    <button class="bg-[#ff5a00] hover:bg-white text-black px-5 py-2 text-[10px] font-black tracking-widest transition-all flex items-center gap-2">
                      <span>LEARN MORE</span>
                      <span>→</span>
                    </button>
                  </a>
                  <?php else : ?>
                  <div class="border border-white/20 text-white/40 px-5 py-2 text-[10px] font-black tracking-widest uppercase cursor-default select-none">
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
      
      <section class="bg-black py-16">
        <div class="max-w-7xl mx-auto px-4">
          <div class="bg-white text-black p-12 md:p-24 rounded-none border-8 border-[#ff5a00] text-center relative overflow-hidden">
            <div class="inline-flex items-center bg-black text-[#ff5a00] px-6 py-2 rounded-none text-xs font-black mb-8 tracking-[0.3em] uppercase">
              CURATED EXPERIENCES FOR EVERY GROUP
            </div>
            <h2 class="text-5xl lg:text-8xl font-black mb-8 tracking-tighter leading-none uppercase">
              CHOOSE YOUR <br/> KIND OF ESCAPE
            </h2>
            <p class="text-sm md:text-lg font-bold text-gray-600 mb-16 max-w-4xl mx-auto tracking-widest uppercase leading-tight">
              MOTORCYCLE EXPEDITIONS, SCENIC ROAD TRIPS, CORPORATE GETAWAYS, FAMILY ESCAPES, KITTY PARTY RETREATS, STAYCATIONS & WORKATIONS — ALL CRAFTED FOR MEMORABLE EXPERIENCES.
            </p>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-16 text-left">
              <div class="border-4 border-black p-8 hover:bg-black hover:text-white transition-all duration-300">
                <h3 class="text-2xl font-black uppercase mb-4">Motorcycle Tours</h3>
                <p class="text-sm font-bold tracking-wide uppercase leading-relaxed">
                  Epic rides through winding roads, mountain trails, coastlines, and hidden destinations.
                </p>
              </div>
              <div class="border-4 border-black p-8 hover:bg-black hover:text-white transition-all duration-300">
                <h3 class="text-2xl font-black uppercase mb-4">Luxury Road Trips</h3>
                <p class="text-sm font-bold tracking-wide uppercase leading-relaxed">
                  Premium car & MPV journeys designed for comfort, exploration, and unforgettable drives.
                </p>
              </div>
              <div class="border-4 border-black p-8 hover:bg-black hover:text-white transition-all duration-300">
                <h3 class="text-2xl font-black uppercase mb-4">Corporate Retreats</h3>
                <p class="text-sm font-bold tracking-wide uppercase leading-relaxed">
                  Team outings, offsites, and curated experiences built to recharge and reconnect.
                </p>
              </div>
              <div class="border-4 border-black p-8 hover:bg-black hover:text-white transition-all duration-300">
                <h3 class="text-2xl font-black uppercase mb-4">Family Escapes</h3>
                <p class="text-sm font-bold tracking-wide uppercase leading-relaxed">
                  Relaxed journeys with handpicked stays, scenic routes, and experiences for all ages.
                </p>
              </div>
              <div class="border-4 border-black p-8 hover:bg-black hover:text-white transition-all duration-300">
                <h3 class="text-2xl font-black uppercase mb-4">Kitty & Group Trips</h3>
                <p class="text-sm font-bold tracking-wide uppercase leading-relaxed">
                  Fun-filled getaways crafted for friends, social groups, celebrations, and reunions.
                </p>
              </div>
              <div class="border-4 border-black p-8 hover:bg-black hover:text-white transition-all duration-300">
                <h3 class="text-2xl font-black uppercase mb-4">Staycations & Workations</h3>
                <p class="text-sm font-bold tracking-wide uppercase leading-relaxed">
                  Balance productivity and relaxation with serene stays and thoughtfully planned escapes.
                </p>
              </div>
            </div>
            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
              <a 
                href="<?php echo esc_url(home_url('/contact')); ?>" target="_blank" 
                class="w-full sm:w-auto bg-black text-white hover:bg-[#ff5a00] hover:text-black px-16 py-6 rounded-none text-sm font-black tracking-[0.2em] transition-all duration-300 uppercase flex items-center justify-center gap-4 group"
              >
                <span>PLAN YOUR EXPERIENCE NOW</span>
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>

<?php get_footer(); ?>