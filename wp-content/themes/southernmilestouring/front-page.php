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
      <div class="banner-text-wrapper relative max-w-7xl my-4 sm:my-10 md:my-12 lg:my-3 px-4 mx-auto md:py-16 sm:py-6 text-center">
        <div class="inline-flex items-center bg-black border-2 border-[#ff6600] text-[#ff6600] px-6 py-2 rounded-none text-xs sm:text-sm md:text-sm lg:text-sm font-black sm:mb-10 mb-6 sm:mb-10 md:mb-12 lg:mb-12 tracking-widest">
          <i class="fa-solid fa-users"></i>&nbsp;
          India's Premium Touring Experiences Built By Experts
        </div>
        <h1 class="text-4xl md:text-6xl lg:text-8xl font-black mb-6 sm:mb-4 tracking-tighter leading-[0.9]">
          Feel the <span class="text-white">Southern Mile</span>
        </h1>
        <p class="text-sm md:text-lg lg:text-xl sm:mb-6 mb-6 max-w-3xl mx-auto leading-loose font-bold tracking-wide">
          Guided touring Expeditions across India on motorcyles, cars and MPV's where every expedition is crafted to perfection.
          <span class="inline-block mt-6 text-xs text-[#ff6600]">Luxury stays • Pro captains • Support Crew • In-house Media</span>
        </p>
        <div class="flex flex-col md:flex-row gap-4 justify-center items-center max-w-xl md:max-w-2xl sm:max-w-2xl lg:max-w-2xl mx-auto">
          <a href="<?php echo esc_url(home_url('/expeditions')); ?>" class="bg-[#ff6600] border-2 border-[#ff6600] hover:bg-white hover:text-black hover:border-white px-12 py-5 rounded-none text-sm sm:text-md md:text-lg lg:text-lg font-black transition-all duration-300 w-full md:w-auto flex items-center justify-center space-x-3">
            <span>Book Now</span>
            <i class="fa-solid fa-arrow-right"></i>
          </a>
          <a href="<?php echo esc_url(home_url('about')); ?>" class="bg-transparent border-2 border-white hover:bg-white hover:text-black px-12 py-5 rounded-none text-sm sm:text-md md:text-lg lg:text-lg font-black transition-all duration-300 w-full md:w-auto">
            Watch Our Story
          </a>
        </div>
      </div>
    </section>

    <section class="py-16 md:py-24 bg-black text-white border-y border-white/10 uppercase tracking-tighter overflow-hidden">
      <div class="max-w-7xl mx-auto px-4">
        <!-- Main interactive grid system -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 border-t border-l border-white/10">
          
          <!-- Item 1: Experienced Captains -->
          <div class="group relative p-8 md:p-12 bg-black transition-all duration-300 ease-out text-center border-b border-r border-white/10 cursor-default select-none overflow-hidden">
            <!-- Ambient Backlight Hover Effect -->
            <div class="absolute inset-0 bg-gradient-to-b from-[#ff6600]/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
            
            <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center text-[#ff6600] transform transition-transform duration-300 group-hover:scale-110 group-hover:-translate-y-1">
              <i class="fa-solid fa-users text-4xl md:text-5xl"></i>
            </div>
            <div class="text-xl md:text-2xl font-black text-white mb-2 md:mb-3 leading-none transition-colors duration-200 group-hover:text-[#ff6600]">
              Experienced Captains
            </div>
            <div class="text-[10px] font-bold text-gray-500 tracking-[0.15em] transition-colors duration-200 group-hover:text-gray-400">
              Over 5 years of touring expertise
            </div>
            
            <!-- Active Spotlight Line Indicator -->
            <div class="absolute bottom-0 left-0 w-0 h-[2px] bg-[#ff6600] transition-all duration-300 ease-out group-hover:w-full"></div>
          </div>

          <!-- Item 2: Medical Support -->
          <div class="group relative p-8 md:p-12 bg-black transition-all duration-300 ease-out text-center border-b border-r border-white/10 cursor-default select-none overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-b from-[#ff6600]/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
            
            <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center text-[#ff6600] transform transition-transform duration-300 group-hover:scale-110 group-hover:-translate-y-1">
              <i class="fa-solid fa-briefcase-medical text-4xl md:text-5xl"></i>
            </div>
            <div class="text-xl md:text-2xl font-black text-white mb-2 md:mb-3 leading-none transition-colors duration-200 group-hover:text-[#ff6600]">
              Medical Support
            </div>
            <div class="text-[10px] font-bold text-gray-500 tracking-[0.15em] transition-colors duration-200 group-hover:text-gray-400">
              On-Tour ERT assistance
            </div>
            <div class="absolute bottom-0 left-0 w-0 h-[2px] bg-[#ff6600] transition-all duration-300 ease-out group-hover:w-full"></div>
          </div>

          <!-- Item 3: Media Support -->
          <div class="group relative p-8 md:p-12 bg-black transition-all duration-300 ease-out text-center border-b border-r border-white/10 cursor-default select-none overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-b from-[#ff6600]/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
            
            <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center text-[#ff6600] transform transition-transform duration-300 group-hover:scale-110 group-hover:-translate-y-1">
              <i class="fa-solid fa-camera text-4xl md:text-5xl"></i>
            </div>
            <div class="text-xl md:text-2xl font-black text-white mb-2 md:mb-3 leading-none transition-colors duration-200 group-hover:text-[#ff6600]">
              Media Support
            </div>
            <div class="text-[10px] font-bold text-gray-500 tracking-[0.15em] transition-colors duration-200 group-hover:text-gray-400">
              Documented by Professionals
            </div>
            <div class="absolute bottom-0 left-0 w-0 h-[2px] bg-[#ff6600] transition-all duration-300 ease-out group-hover:w-full"></div>
          </div>

          <!-- Item 4: Luxury Stays -->
          <div class="group relative p-8 md:p-12 bg-black transition-all duration-300 ease-out text-center border-b border-r border-white/10 cursor-default select-none overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-b from-[#ff6600]/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
            
            <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center text-[#ff6600] transform transition-transform duration-300 group-hover:scale-110 group-hover:-translate-y-1">
              <i class="fa-solid fa-bed text-4xl md:text-5xl"></i>
            </div>
            <div class="text-xl md:text-2xl font-black text-white mb-2 md:mb-3 leading-none transition-colors duration-200 group-hover:text-[#ff6600]">
              Luxury Stays
            </div>
            <div class="text-[10px] font-bold text-gray-500 tracking-[0.15em] transition-colors duration-200 group-hover:text-gray-400">
              Handpicked accommodations
            </div>
            <div class="absolute bottom-0 left-0 w-0 h-[2px] bg-[#ff6600] transition-all duration-300 ease-out group-hover:w-full"></div>
          </div>

          <!-- Item 5: Mechanical Support -->
          <div class="group relative p-8 md:p-12 bg-black transition-all duration-300 ease-out text-center border-b border-r border-white/10 sm:border-r-0 lg:border-r border-white/10 cursor-default select-none overflow-hidden">
            <div class="absolute inset-0 bg-gradient-to-b from-[#ff6600]/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none"></div>
            
            <div class="w-16 h-16 mx-auto mb-6 flex items-center justify-center text-[#ff6600] transform transition-transform duration-300 group-hover:scale-110 group-hover:-translate-y-1">
              <i class="fa-solid fa-screwdriver-wrench text-4xl md:text-5xl"></i>
            </div>
            <div class="text-xl md:text-2xl font-black text-white mb-2 md:mb-3 leading-none transition-colors duration-200 group-hover:text-[#ff6600]">
              Mechanical Support
            </div>
            <div class="text-[10px] font-bold text-gray-500 tracking-[0.15em] transition-colors duration-200 group-hover:text-gray-400">
              On-Tour assistance
            </div>
            <div class="absolute bottom-0 left-0 w-0 h-[2px] bg-[#ff6600] transition-all duration-300 ease-out group-hover:w-full"></div>
          </div>

        </div>
      </div>
    </section>

    <!-- Upcoming Adventures Section -->
    <section class="py-16 bg-[#1a1a1a] border-b border-black text-white uppercase overflow-hidden relative select-none">
      <div class="absolute inset-0 pointer-events-none overflow-hidden">  
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff03_1px,transparent_1px),linear-gradient(to_bottom,#ffffff03_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>
        <div class="absolute inset-x-0 h-[2px] bg-gradient-to-r from-transparent via-[#ff6600]/30 to-transparent animate-[radar_8s_ease-in-out_infinite]"></div>

        <svg class="absolute inset-0 w-full h-full opacity-10 text-[#ff6600]" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
          <defs>
            <pattern id="topo-lines" width="400" height="400" patternUnits="userSpaceOnUse">
              <path d="M0,100 Q100,50 200,100 T400,100 M0,200 Q100,150 200,200 T400,200 M0,300 Q100,250 200,300 T400,300" fill="none" stroke="currentColor" stroke-width="1.5" class="animate-[pulse_6s_ease-in-out_infinite]" />
            </pattern>
          </defs>
          <rect width="100%" height="100%" fill="url(#topo-lines)" />
        </svg>

        <div class="absolute top-1/4 left-10 flex items-center gap-2 opacity-20 animate-[bounce_4s_infinite]">
          <span class="w-3 h-3 rounded-full border-2 border-[#ff6600] bg-black"></span>
          <span class="text-[9px] font-open-sans tracking-widest text-[#ff6600]">WAYPOINT 01 // NORTHERN LOOP</span>
        </div>

        <div class="absolute bottom-10 right-12 flex items-center gap-2 opacity-20 animate-[bounce_5s_infinite_1s]">
          <span class="w-3 h-3 rounded-full border-2 border-[#ff6600] bg-black"></span>
          <span class="text-[9px] font-open-sans tracking-widest text-[#ff6600]">WAYPOINT 02 // SOUTHERN LOOP</span>
        </div>

      </div>

      <!-- MAIN SECTION CONTENT -->
      <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center mb-16 group/header">
          <h2 class="text-4xl md:text-6xl font-black tracking-tighter mb-4">
            Upcoming Adventures
          </h2>
          <p class="text-sm md:text-base text-gray-400 font-bold max-w-2xl mx-auto tracking-[0.2em] leading-loose">
            Thrilling expeditions with luxury stays.<br/> All itineraries planned like clockwork.
          </p>
          <div class="w-12 h-1 bg-[#ff6600] mx-auto mt-6 transition-all duration-300 group-hover/header:w-28"></div>
        </div>

        <!-- Main Dynamic Loop Grid Mapping -->
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

                  $card_border_class  = 'border-[#ff6600] bg-[#0d0d0d] shadow-[0_10px_30px_rgba(255,90,0,0.15)]';
                  $image_filter_class = 'grayscale-0 brightness-100 scale-100 group-hover:scale-105';
                  $title_color_class  = 'text-[#ff6600]';
                  $is_tentative       = false;
                } else {
                  $date_string   = 'TBD';
                  $price_string  = '';
                  $badge_text    = 'UPCOMING';

                  $card_border_class  = 'border-white/10 hover:border-[#ff6600]/50 hover:bg-[#0d0d0d]';
                  $image_filter_class = 'grayscale brightness-75 group-hover:grayscale-0 group-hover:brightness-100 scale-100 group-hover:scale-105';
                  $title_color_class  = 'group-hover:text-[#ff6600]';
                  $is_tentative       = true;
                }
          ?>
          
          <!-- Individual Expedition Card -->
          <div class="group bg-[#0a0a0a] border <?php echo $card_border_class; ?> transform transition-all duration-300 ease-out hover:-translate-y-2 flex flex-col overflow-hidden relative">
            <div class="relative h-60 overflow-hidden">
              <?php if (!empty($image_url)) : ?>
              <img
                src="<?php echo esc_url($image_url); ?>"
                alt="<?php echo esc_attr(get_the_title($current_ride_id)); ?>"
                class="w-full h-full object-cover object-top transition-all duration-700 ease-out <?php echo $image_filter_class; ?>"
              />
              <?php endif; ?>
              <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-transparent to-black/80 pointer-events-none"></div>

              <div class="absolute top-0 left-0 bg-[#ff6600] text-black text-[10px] font-black px-4 py-1.5 tracking-widest shadow-md">
                <?php echo esc_html($badge_text); ?>
              </div>
            </div>

            <!-- Content Area -->
            <div class="p-6 md:p-8 flex flex-col flex-grow relative z-10 bg-[#0a0a0a]">
              <h3 class="text-xl font-black tracking-tighter leading-tight mb-4 transition-colors duration-200 <?php echo $title_color_class; ?>">
                <?php echo esc_html(get_the_title($current_ride_id)); ?>
              </h3>

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
              
              <p class="text-xs text-gray-400 lowercase mb-8 line-clamp-3 leading-relaxed group-hover:text-gray-300 transition-colors duration-300">
                <?php echo esc_html(get_the_excerpt($current_ride_id)); ?>
              </p>

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

    <!-- CSS Keyframes for Sweep Radar Line -->
    <style>
      @keyframes radar {
        0% { top: 0%; opacity: 0; }
        50% { opacity: 1; }
        100% { top: 100%; opacity: 0; }
      }
    </style>
    
    <!-- <section class="py-16 bg-[#111] text-white uppercase tracking-tighter border-t border-white/5">
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
            class="bg-[#ff6600] hover:bg-white text-black px-12 py-5 rounded-none text-lg font-black transition-all duration-300 flex items-center gap-3 mx-auto"
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
    
    <section class="py-16 bg-black text-white border-y border-white/10 uppercase relative overflow-hidden select-none">
      <div class="absolute inset-0 pointer-events-none overflow-hidden">
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff03_1px,transparent_1px),linear-gradient(to_bottom,#ffffff03_1px,transparent_1px)] bg-[size:3rem_3rem]"></div>
        
        <div class="absolute top-1/3 inset-x-0 h-[1px] bg-gradient-to-r from-transparent via-[#ff6600]/40 to-transparent animate-[stream_6s_linear_infinite]"></div>
        <div class="absolute bottom-1/3 inset-x-0 h-[1px] bg-gradient-to-r from-transparent via-white/20 to-transparent animate-[stream_10s_linear_infinite_2s]"></div>

        <div class="absolute top-12 left-10 hidden md:flex items-center gap-2 opacity-30">
          <span class="w-2 h-2 rounded-full bg-[#ff6600] animate-ping"></span>
          <span class="text-[9px] font-open-sans tracking-widest text-[#ff6600]">SOUTHERN MILE // SOCIAL PLAYGROUND</span>
        </div>

        <div class="absolute bottom-12 right-10 hidden md:flex items-center gap-2 opacity-30">
          <span class="w-2 h-2 rounded-full bg-white animate-ping"></span>
          <span class="text-[9px] font-open-sans tracking-widest text-zinc-400">COMMUNITY DISPATCH // ACTIVE</span>
        </div>

      </div>

      <!-- MAIN SECTION CONTENT -->
      <div class="max-w-7xl mx-auto px-4 relative z-10">
        <div class="text-center">
          
          <!-- Main Heading -->
          <h3 class="text-4xl lg:text-6xl font-black text-white mb-8 tracking-tighter transition-transform duration-300 hover:scale-[1.01]">
            FOLLOW OUR ADVENTURES
          </h3>

          <div class="flex flex-wrap items-center justify-center gap-4 mb-12">
            
            <!-- Instagram Link -->
            <a href="https://instagram.com/<?php echo get_field('instagram', get_the_ID()); ?>" target="_blank" class="group inline-flex items-center bg-[#0a0a0a] border-2 border-[#ff6600] text-[#ff6600] hover:bg-[#ff6600] hover:text-black px-5 py-3 rounded-none text-lg font-black transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-[0_0_20px_rgba(255,90,0,0.4)] tracking-widest">
              <span class="flex items-center justify-center text-xl">
                <i class="fa-brands fa-instagram"></i>
              </span>
              <span class="max-w-0 overflow-hidden transition-all duration-300 ease-in-out group-hover:max-w-xs group-hover:ml-3 text-xs uppercase font-black tracking-widest whitespace-nowrap">
                INSTAGRAM
              </span>
            </a>
            
            <!-- Facebook Link -->
            <a href="https://facebook.com/<?php echo get_field('facebook', get_the_ID()); ?>" target="_blank" class="group inline-flex items-center bg-[#0a0a0a] border-2 border-[#ff6600] text-[#ff6600] hover:bg-[#ff6600] hover:text-black px-5 py-3 rounded-none text-lg font-black transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-[0_0_20px_rgba(255,90,0,0.4)] tracking-widest">
              <span class="flex items-center justify-center text-xl">
                <i class="fa-brands fa-facebook"></i>
              </span>
              <span class="max-w-0 overflow-hidden transition-all duration-300 ease-in-out group-hover:max-w-xs group-hover:ml-3 text-xs uppercase font-black tracking-widest whitespace-nowrap">
                FACEBOOK
              </span>
            </a>
            
            <!-- Threads Link -->
            <a href="https://www.threads.com/@<?php echo get_field('threads', get_the_ID()); ?>?hl=en" target="_blank" class="group inline-flex items-center bg-[#0a0a0a] border-2 border-[#ff6600] text-[#ff6600] hover:bg-[#ff6600] hover:text-black px-5 py-3 rounded-none text-lg font-black transition-all duration-300 transform hover:-translate-y-1 shadow-lg hover:shadow-[0_0_20px_rgba(255,90,0,0.4)] tracking-widest">
              <span class="flex items-center justify-center text-xl">
                <i class="fa-brands fa-threads"></i>
              </span>
              <span class="max-w-0 overflow-hidden transition-all duration-300 ease-in-out group-hover:max-w-xs group-hover:ml-3 text-xs uppercase font-black tracking-widest whitespace-nowrap">
                THREADS
              </span>
            </a>

          </div>

          <!-- Enhanced Feed Gallery Outer Frame -->
          <div class="relative instagram-posts p-3 bg-[#0a0a0a] border border-white/10 transition-all duration-500 hover:border-[#ff6600]/40 shadow-2xl">
            
            <!-- Frame Tag Header -->
            <div class="flex items-center justify-between px-3 py-2 border-b border-white/10 mb-3 text-[10px] text-zinc-400 tracking-widest">
              <span class="flex items-center gap-2">
                <span class="w-2 h-2 rounded-full bg-[#ff6600] animate-pulse"></span>
                LIVE COMMUNITY FEED
              </span>
              <span>SYNCED WITH INSTAGRAM</span>
            </div>

            <!-- Shortcode Embed -->
            <?php echo do_shortcode('[insta-gallery id="0"]'); ?>

          </div>

        </div>
      </div>
    </section>

    <!-- Keyframe Animation for Background Stream Waves -->
    <style>
      @keyframes stream {
        0% { transform: translateX(-100%); opacity: 0; }
        50% { opacity: 1; }
        100% { transform: translateX(100%); opacity: 0; }
      }
    </style>

    <section class="py-16 bg-[#ff6600] text-black uppercase relative overflow-hidden group/section select-none">
      <!-- BACKGROUND ANIMATION CONTAINER -->
      <div class="absolute inset-0 pointer-events-none overflow-hidden">
        
        <!-- 1. Grid Pattern Overlay -->
        <div class="absolute inset-0 bg-[linear-gradient(to_right,#00000008_1px,transparent_1px),linear-gradient(to_bottom,#00000008_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>

        <!-- 2. Animated Radar Tracking Line -->
        <div class="absolute inset-x-0 h-1 bg-black/10 animate-[radar_6s_ease-in-out_infinite]"></div>

        <!-- 3. Touring Vehicle Vector Animations -->
        <!-- Bike Silhouette Track (Top Layer) -->
        <div class="absolute top-1/4 -left-32 opacity-15 animate-[drive_12s_linear_infinite] flex items-center gap-2">
          <i class="fa-solid fa-motorcycle text-6xl text-black"></i>
          <div class="w-24 h-[2px] bg-gradient-to-l from-black/40 to-transparent"></div>
        </div>

        <!-- SUV / Expedition Car Track (Middle Layer) -->
        <div class="absolute top-1/2 -right-32 opacity-10 animate-[driveReverse_16s_linear_infinite_2s] flex items-center gap-2">
          <div class="w-32 h-[2px] bg-gradient-to-r from-black/40 to-transparent"></div>
          <i class="fa-solid fa-car-side text-7xl text-black"></i>
        </div>

        <!-- MPV / Support Vehicle Track (Bottom Layer) -->
        <div class="absolute bottom-1/4 -left-32 opacity-10 animate-[drive_20s_linear_infinite_5s] flex items-center gap-2">
          <i class="fa-solid fa-van-shuttle text-6xl text-black"></i>
          <div class="w-40 h-[2px] bg-gradient-to-l from-black/40 to-transparent"></div>
        </div>

        <!-- Animated Topography / Route Elevation Lines -->
        <svg class="absolute bottom-0 left-0 right-0 w-full opacity-10 text-black h-32" viewBox="0 0 1440 320" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0,192L48,176C96,160,192,128,288,138.7C384,149,480,203,576,213.3C672,224,768,192,864,165.3C960,139,1056,117,1152,128C1248,139,1344,181,1392,202.7L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z" fill="currentColor" class="animate-[pulse_4s_ease-in-out_infinite]"></path>
        </svg>
      </div>

      <!-- CONTENT CONTAINER -->
      <div class="max-w-5xl mx-auto px-4 text-center relative z-10">
        <!-- Pulse badge to catch emphasis -->
        <div class="inline-flex items-center gap-2 bg-black text-white px-8 py-3.5 rounded-none text-sm font-black mb-12 tracking-widest transition-all duration-300 transform select-none shadow-xl">
          <span class="w-2 h-2 rounded-full bg-[#ff6600] animate-pulse"></span>
          <span>SPOTS FILLING FAST</span>
        </div>
        
        <!-- Ultra bold high-impact headline -->
        <h2 class="text-6xl md:text-8xl font-black mb-8 tracking-tighter leading-[0.85] transition-all duration-500 ease-out select-none">
          YOUR ADVENTURE <br/> AWAITS
        </h2>
        
        <p class="text-sm md:text-lg font-bold mb-16 max-w-2xl mx-auto leading-loose tracking-wide text-black/80 transition-opacity duration-300 group-hover/section:text-black">
          JOIN SOUTH INDIA'S MOST TRUSTED TOURING COMMUNITY. <br/> FROM FIRST-TIMERS TO HARDCORE TOURERS.
        </p>
        
        <!-- Action Triggers Grid Block Layout -->
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
          
          <!-- Primary Action: View All -->
          <a href="<?php echo esc_url(home_url('/expeditions')); ?>" class="group/btn bg-black text-white hover:bg-white hover:text-black border-4 border-black px-12 py-5 rounded-none text-xl font-black transition-all duration-300 w-full sm:w-auto flex items-center justify-center gap-4 transform active:scale-[0.98] shadow-2xl">
            <span>VIEW ALL EXPEDITIONS</span>
            <span class="transform transition-transform duration-300 group-hover/btn:translate-x-1.5">→</span>
          </a>
          
          <!-- Secondary Action: Custom Quote -->
          <a href="<?php echo esc_url(home_url('/contact')); ?>" class="group/btn border-4 border-black hover:bg-black hover:text-white px-12 py-5 rounded-none text-xl font-black transition-all duration-300 w-full sm:w-auto flex items-center justify-center transform active:scale-[0.98]">
            <span>GET CUSTOM QUOTE</span>
          </a>

        </div>
      </div>
    </section>

    <!-- CUSTOM CSS KEYFRAMES (Add to your global CSS or Tailwind stylesheet) -->
    <style>
      @keyframes drive {
        0% { transform: translateX(0); }
        100% { transform: translateX(calc(100vw + 300px)); }
      }
      @keyframes driveReverse {
        0% { transform: translateX(0); }
        100% { transform: translateX(calc(-100vw - 300px)); }
      }
      @keyframes radar {
        0% { top: 0%; opacity: 0; }
        50% { opacity: 1; }
        100% { top: 100%; opacity: 0; }
      }
    </style>
  </div>
<?php get_footer(); ?>