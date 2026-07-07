<?php 
  /*
  Template Name: Team Template
  */
  get_header(); 
?>
    <div class="bg-black">
      <section class="relative h-[60vh] md:h-[80vh] overflow-hidden bg-black border-b-4 border-[#ff5a00] group">
        <div
          class="absolute inset-0 grayscale brightness-50 contrast-125 group-hover:grayscale-0 transition-all duration-1000 bg-cover bg-center bg-no-repeat"
          style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>');"
        ></div>
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4 max-w-5xl mx-auto uppercase tracking-tighter">
          <h1 class="text-4xl md:text-6xl lg:text-8xl font-black mb-8 leading-[0.9] tracking-tighter">
            The Avengers!
          </h1>
          <div class="w-24 h-2 bg-[#ff5a00] mb-8"></div>
          <p class="text-sm md:text-lg font-bold tracking-[0.3em] max-w-2xl mx-auto text-gray-300 leading-relaxed">
            Meet the incredible super-heroes behind Southern Miles Touring.
          </p>
        </div>
        <div class="absolute bottom-6 right-6 hidden md:block border border-white/20 px-4 py-2 text-[10px] font-black tracking-widest text-white/40 backdrop-blur-sm">
          SOUTHERN MILES TOURING / EST 2026
        </div>

      </section>

      <section class="text-white py-16 border-y border-white/10 uppercase tracking-tighter">
        <div class="max-w-7xl mx-auto px-4">
          <?php
            $args = array(
              'post_type'      => 'teams', // Replace with your post type slug
              'posts_per_page' => -1,
              'orderby'        => 'menu_order',
              'order'          => 'ASC',
            );

            $team_query = new WP_Query($args);
            if ($team_query->have_posts()) : 
              $total_posts = $team_query->post_count;
              $count = 0;
          ?>
          <div class="grid md:grid-cols-2 gap-8">
            <?php 
              while ($team_query->have_posts()) : $team_query->the_post(); 
                $count++;
                
                // Fetch your custom fields (Advanced Custom Fields)
                $role          = get_post_meta(get_the_ID(), 'team_ride_role', true);
                $rides_led     = get_post_meta(get_the_ID(), 'team_rides_led', true);
                $whatsapp_url  = get_post_meta(get_the_ID(), 'team_whatsapp', true);
                $instagram_url = get_post_meta(get_the_ID(), 'team_instagram', true);
                $youtube_url   = get_post_meta(get_the_ID(), 'team_youtube', true);
                
                // Logic: Check if it's the very last post AND the grand total is an odd number
                $is_last_item = ($count === $total_posts);
                $is_total_odd = ($total_posts % 2 !== 0);
                
                // Dynamically inject centering utilities only on the odd-numbered final item
                $center_classes = ($is_last_item && $is_total_odd) 
                  ? 'md:col-span-2 md:mx-auto md:w-full md:max-w-[calc(50%-1rem)]' 
                  : '';
            ?>
            <div class="group bg-[#111] border border-white/10 rounded-none overflow-hidden hover:border-[#ff5a00] transition-colors duration-500 <?php echo esc_attr($center_classes); ?>">
              <div class="grid lg:grid-cols-2 h-full">
                <div class="relative overflow-hidden aspect-square lg:aspect-auto">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('large', array(
                    'class' => 'w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 opacity-80 group-hover:opacity-100',
                    'loading' => 'lazy'
                    )); ?>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/placeholder.png" alt="<?php the_title_attribute(); ?>" class="w-full h-full object-cover grayscale">
                <?php endif; ?>
                  <?php if (!empty($rides_led)) : ?>
                  <div class="absolute top-0 left-0 bg-[#ff5a00] text-black px-4 py-2 text-xs font-black tracking-widest uppercase">
                    <?php echo esc_html($rides_led); ?>+ RIDES LED
                  </div>
                  <?php endif; ?>
                </div>
                <!-- Content Block -->
                <div class="p-8 flex flex-col justify-between">
                  <div>
                    <?php if (!empty($role)) : ?>
                    <div class="text-xs font-black text-[#ff5a00] tracking-[0.2em] mb-2 uppercase">
                      <?php echo esc_html($role); ?>
                    </div>
                    <?php endif; ?>
                    <h3 class="text-3xl font-black text-white mb-4 tracking-tighter uppercase">
                      <?php the_title(); ?>
                    </h3>
                    <p class="text-gray-500 text-sm font-bold tracking-tight leading-relaxed mb-8 uppercase">
                      <?php echo esc_html(get_the_excerpt()); ?>
                    </p>
                  </div>
                  
                  <!-- Social Links -->
                  <div class="flex items-center space-x-2">
                    <?php if (!empty($whatsapp_url)) : ?>
                    <a href="https://wa.me/91<?php echo $whatsapp_url; ?>" target="_blank" rel="noopener" class="p-3 bg-black border border-white/10 text-white hover:bg-[#ff5a00] hover:text-black transition-all duration-300">
                      <i class="fa-brands fa-whatsapp text-lg"></i>
                    </a>
                    <?php endif; ?>
                    
                    <?php if (!empty($instagram_url)) : ?>
                    <a href="https://instagram.com/<?php echo $instagram_url; ?>" target="_blank" rel="noopener" class="p-3 bg-black border border-white/10 text-white hover:bg-[#ff5a00] hover:text-black transition-all duration-300">
                      <i class="fa-brands fa-instagram text-lg"></i>
                    </a>
                    <?php endif; ?>
                    
                    <?php if (!empty($youtube_url)) : ?>
                    <a href="https://youtube.com/@<?php echo $youtube_url; ?>" target="_blank" rel="noopener" class="p-3 bg-black border border-white/10 text-white hover:bg-[#ff5a00] hover:text-black transition-all duration-300">
                      <i class="fa-brands fa-youtube text-lg"></i>
                    </a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
            <?php 
              endwhile; 
              wp_reset_postdata();
            ?>
          </div>
          <?php 
            endif; 
          ?>

          <div class="text-center mt-24 px-4">
            <div class="bg-white text-black p-16 md:p-24 rounded-none border-8 border-[#ff5a00] relative overflow-hidden">
              <div class="absolute inset-0 opacity-5 pointer-events-none bg-[url('https://www.transparenttextures.com')]"></div>
              <div class="relative z-10">
                <h2 class="text-5xl md:text-7xl font-black mb-6 tracking-tighter uppercase leading-none">
                  EXPLORED WITH <br/> THE BEST?
                </h2>
                <p class="text-sm md:text-lg font-bold text-gray-600 mb-12 max-w-2xl mx-auto tracking-widest uppercase">
                  Join our tribe of passionate tourers and let's create unforgettable memories together on the open road!
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                  <a 
                    href="<?php echo home_url('/expeditions'); ?>" 
                    class="bg-black text-white hover:bg-[#ff5a00] hover:text-black px-12 py-6 rounded-none text-sm font-black tracking-[0.2em] transition-all duration-300 uppercase border-2 border-black"
                  >
                    VIEW UPCOMING EXPEDITIONS
                  </a>
                  <a 
                    href="<?php echo home_url('/contact'); ?>" 
                    class="bg-transparent border-2 border-black text-black hover:bg-black hover:text-white px-12 py-6 rounded-none text-sm font-black tracking-[0.2em] transition-all duration-300 uppercase"
                  >
                    CUSTOM GROUP EXPEDITION
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

<?php get_footer(); ?>