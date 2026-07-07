<?php get_header(); ?>
  <div class="overflow-hidden">
    <section class="relative bg-black text-white overflow-hidden flex items-center min-h-[80vh] uppercase">
      <video
        autoPlay
        loop
        muted
        playsInline
        class="absolute inset-0 w-full h-full object-cover"
      >
        <source src="<?php echo get_template_directory_uri(); ?>/assets/bg-video.mp4" type="video/mp4" />
        Your browser does not support the video tag.
      </video>
      <div class="absolute inset-0 bg-black/60">
      <div class="relative max-w-7xl mx-auto px-4 lg:py-20 md:py-16 sm:py-8 text-center">
        <div class="inline-flex items-center bg-black border-2 border-[#ff5a00] text-[#ff5a00] px-6 py-2 rounded-none text-sm font-black sm:mb-10 mb-12 tracking-widest">
          <i class="fa-solid fa-users"></i>&nbsp;
          India's Premium Touring Experiences Built By Experts
        </div>
        <h1 class="text-4xl md:text-6xl lg:text-8xl font-black mb-8 sm:mb-4 tracking-tighter leading-[0.9]">
          Feel the <span class="text-white">Southern Mile</span>
        </h1>
        <p class="text-sm md:text-lg lg:text-xl sm:mb-6 mb-12 max-w-3xl mx-auto leading-loose font-bold tracking-wide">
          Guided touring Expeditions across India on motorcyles, cars and MPV's where every expedition is crafted to perfection.<br /><br />
          <span class="text-[#ff5a00]">Luxury stays • Pro captains • Support Crew • In-house Media</span>
        </p>
        <div class="flex flex-col md:flex-row gap-4 justify-center items-center max-w-2xl mx-auto">
          <a href="<?php echo esc_url(home_url('/expeditions')); ?>" class="bg-[#ff5a00] border-2 border-[#ff5a00] hover:bg-white hover:text-black hover:border-white px-12 py-5 rounded-none text-lg font-black transition-all duration-300 w-full md:w-auto flex items-center justify-center space-x-3">
            <span>Book Now</span>
            <i class="fa-solid fa-arrow-right"></i>
          </a>
          <a href="<?php echo esc_url(home_url('about')); ?>" class="bg-transparent border-2 border-white hover:bg-white hover:text-black px-12 py-5 rounded-none text-lg font-black transition-all duration-300 w-full md:w-auto">
            Watch Our Story
          </a>
        </div>
      </div>
    </section>

    <section class="py-12 md:py-20 bg-black text-white border-y border-white/10 uppercase tracking-tighter">
      <div class="max-w-7xl mx-auto px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 border-t border-l border-white/10">
          <!-- Item -->
          <div class="group p-6 md:p-10 bg-black hover:bg-[#111] transition-all text-center border-b border-r border-white/10">
            <div class="w-12 h-12 mx-auto mb-4 flex items-center justify-center text-[#ff5a00]">
              <i class="fa-solid fa-users text-4xl md:text-5xl"></i>
            </div>
            <div class="text-xl md:text-2xl font-black text-white mb-2 md:mb-3 leading-none">
              Experienced Captains
            </div>
            <div class="text-[10px] font-bold text-gray-500 tracking-[0.15em]">
              Over 5 years of touring expertise
            </div>
          </div>

          <!-- Item -->
          <div class="group p-6 md:p-10 bg-black hover:bg-[#111] transition-all text-center border-b border-r border-white/10 lg:border-b-0">
            <div class="w-12 h-12 mx-auto mb-4 flex items-center justify-center text-[#ff5a00]">
              <i class="fa-solid fa-briefcase-medical text-[#ff5a00] text-4xl md:text-5xl mb-3"></i>
            </div>
            <div class="text-xl md:text-2xl font-black text-white mb-2 md:mb-3 leading-none">
              Medical Support
            </div>
            <div class="text-[10px] font-bold text-gray-500 tracking-[0.15em]">
              On-Tour ERT assistance
            </div>
          </div>

          <!-- Item -->
          <div class="group p-6 md:p-10 bg-black hover:bg-[#111] transition-all text-center border-b border-r border-white/10 lg:border-b-0">
            <div class="w-12 h-12 mx-auto mb-4 flex items-center justify-center text-[#ff5a00]">
              <i class="fa-solid fa-camera text-[#ff5a00] text-4xl md:text-5xl mb-3"></i>
            </div>
            <div class="text-xl md:text-2xl font-black text-white mb-2 md:mb-3 leading-none">
              Media Support
            </div>
            <div class="text-[10px] font-bold text-gray-500 tracking-[0.15em]">
              Documented by Professionals
            </div>
          </div>

          <!-- Item -->
          <div class="group p-6 md:p-10 bg-black hover:bg-[#111] transition-all text-center border-b border-r border-white/10 lg:border-b-0">
            <div class="w-12 h-12 mx-auto mb-4 flex items-center justify-center text-[#ff5a00]">
              <i class="fa-solid fa-bed text-[#ff5a00] text-4xl md:text-5xl mb-3"></i>
            </div>
            <div class="text-xl md:text-2xl font-black text-white mb-2 md:mb-3 leading-none">
              Luxury Stays
            </div>
            <div class="text-[10px] font-bold text-gray-500 tracking-[0.15em]">
              Handpicked accommodations
            </div>
          </div>

          <!-- Item -->
          <div class="group p-6 md:p-10 bg-black hover:bg-[#111] transition-all text-center border-b lg:border-b-0 border-white/10">
            <div class="w-12 h-12 mx-auto mb-4 flex items-center justify-center text-[#ff5a00]">
              <i class="fa-solid fa-screwdriver-wrench text-[#ff5a00] text-4xl md:text-5xl mb-3"></i>
            </div>
            <div class="text-xl md:text-2xl font-black text-white mb-2 md:mb-3 leading-none">
              Mechanical Support
            </div>
            <div class="text-[10px] font-bold text-gray-500 tracking-[0.15em]">
              On-Tour assistance
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Upcoming Adventures Section -->
    <section class="py-20 bg-[#1a1a1a] border-b border-black text-white uppercase">
      <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
          <h2 class="text-4xl md:text-5xl font-black tracking-tighter mb-4">
            Upcoming Adventures
          </h2>
          <p class="text-sm md:text-base text-gray-400 font-bold max-w-2xl mx-auto tracking-[0.2em] leading-loose">
            Thrilling expeditions with luxury stays.<br/> All itineraries planned like clockwork.
          </p>
          <div class="w-12 h-1 bg-[#ff5a00] mx-auto mt-6"></div>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-10">
          <?php 
            $today_ymd = date('Ymd'); 
            $args = array(
              'post_type'      => 'expedition', 
              'posts_per_page' => 3,
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
                  
                  $price_string  = esc_html($ride_price);
                  $badge_text    = 'OPENS SOON';

                  // Active state layout classes for the first card
                  $card_border_class  = 'border-[#ff5a00]';
                  $image_filter_class = 'grayscale-0 brightness-100';
                  $title_color_class  = 'text-[#ff5a00]';
                  $is_tentative       = false;
                } else {
                  // Fallback values for all subsequent cards
                  $date_string   = 'TBD';
                  $price_string  = '';
                  $badge_text    = 'UPCOMING';

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
                  <?php if($price_string != ''): ?>
                  <span class="block text-2xl font-black tracking-tighter">
                    <?php echo $price_string; ?>
                  </span>
                  <span class="text-[9px] text-gray-500 tracking-widest">
                    PER TOURER
                  </span>
                  <?php else: ?>
                  <span class="block text-2xl font-black tracking-tighter">
                    <?php echo $price_string; ?>
                  </span>
                  <?php endif; ?>
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
    
    <!-- <section class="py-20 bg-[#111] text-white uppercase tracking-tighter border-t border-white/5">
      <div class="max-w-7xl mx-auto px-4">
        <div class="text-center">
          <h2 class="text-5xl lg:text-7xl font-black text-white mb-4 tracking-tighter">
            SHARE YOUR ADVENTURE
          </h2>
          <p class="text-sm md:text-base text-gray-500 font-bold max-w-3xl mx-auto mb-10 tracking-widest">
            REAL TESTIMONIALS • REAL ADVENTURES • REAL PEOPLE
          </p>
          <button 
            onclick="openTestimonialModal()"
            class="bg-[#ff5a00] hover:bg-white text-black px-12 py-5 rounded-none text-lg font-black transition-all duration-300 flex items-center gap-3 mx-auto"
          >
            <span>SHARE YOUR STORY</span>
          </button>
          <div class="testimonial-list w-auto mx-auto mt-12">
            <?php 
              echo do_shortcode('[sp_testimonial id="150"]'); 
            ?>
          </div>
        </div>
      </div>
    </section> -->
    
    <section class="py-20 bg-black text-white border-y border-white/10 uppercase">
      <div class="max-w-7xl mx-auto px-4">
        <div class="text-center mb-16">
          
          <h3 class="text-4xl lg:text-5xl font-black text-white mb-6 tracking-tighter">
            FOLLOW OUR ADVENTURES
          </h3>

          <a href="https://instagram.com/<?php echo get_field('instagram', get_the_ID()); ?>" target="_blank" class="inline-flex items-center space-x-3 bg-transparent border-2 border-[#ff5a00] text-[#ff5a00] hover:bg-[#ff5a00] hover:text-black px-8 py-4 rounded-none text-sm font-black transition-all group tracking-widest">
            <span>
              <i class="fa-brands fa-instagram"></i>
              <?php echo get_field('instagram', get_the_ID()); ?>
            </span>
          </a>

        </div>
      </div>
    </section>

    <section class="py-24 bg-[#ff5a00] text-black uppercase">
      <div class="max-w-5xl mx-auto px-4 text-center">
        <div class="inline-flex items-center bg-black text-white px-8 py-3 rounded-none text-sm font-black mb-12 tracking-widest">
          SPOTS FILLING FAST
        </div>
        
        <h2 class="text-5xl lg:text-8xl font-black mb-8 tracking-tighter leading-[0.85]">
          YOUR ADVENTURE <br/> AWAITS
        </h2>
        
        <p class="text-sm md:text-lg font-bold mb-16 max-w-2xl mx-auto leading-loose tracking-wide opacity-80">
          JOIN SOUTH INDIA'S MOST TRUSTED TOURING COMMUNITY. <br/> FROM FIRST-TIMERS TO HARDCORE TOURERS.
        </p>
        
        <div class="flex flex-col md:flex-row gap-4 justify-center">
          <a href="<?php echo esc_url(home_url('/expeditions')); ?>" class="bg-black text-white hover:bg-white hover:text-black px-16 py-6 rounded-none text-xl font-black transition-all duration-300 w-full md:w-auto flex items-center justify-center gap-4">
            <span>VIEW ALL EXPEDITIONS</span>
          </a>
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="border-4 border-black hover:bg-black hover:text-white px-16 py-6 rounded-none text-xl font-black transition-all duration-300 w-full md:w-auto">
            GET CUSTOM QUOTE
          </a>
        </div>

      </div>
    </section>
  </div>
<?php get_footer(); ?>