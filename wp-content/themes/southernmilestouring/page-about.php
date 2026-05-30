<?php 
  /*
  Template Name: About Template
  */
  get_header(); 
?>
    <div class="bg-black">
      <section class="relative h-[60vh] md:h-[80vh] overflow-hidden bg-black border-b-4 border-[#ff5a00] group">
        <div
          class="absolute inset-0 grayscale brightness-50 contrast-125 group-hover:grayscale-0 transition-all duration-1000 bg-cover bg-center bg-no-repeat"
          style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/about.jpg');"
        ></div>
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4 max-w-5xl mx-auto uppercase tracking-tighter">
          <h1 class="text-4xl md:text-6xl lg:text-8xl font-black mb-8 leading-[0.9] tracking-tighter">
            Know Us!
          </h1>
          <div class="w-24 h-2 bg-[#ff5a00] mb-8"></div>
          <p class="text-sm md:text-lg font-bold tracking-[0.3em] max-w-2xl mx-auto text-gray-300 leading-relaxed">
            How a bunch of passionate riders became Southern Miles Touring!
          </p>
        </div>
        <div class="absolute bottom-6 right-6 hidden md:block border border-white/20 px-4 py-2 text-[10px] font-black tracking-widest text-white/40 backdrop-blur-sm">
          SOUTHERN MILES TOURING / EST 2026
        </div>
      </section>
      
      <section id="main" class="py-2 text-white border-y border-white/10 tracking-tighter">
        <div class="max-w-7xl mx-auto px-4 py-16">
          <div class="text-center mb-6">
            <h2 class="text-5xl md:text-7xl font-black text-white mb-8 tracking-tighter leading-none">
              THE JOURNEY BEGINS
            </h2>
            <p class="text-md text-gray-400 max-w-4xl mx-auto leading-relaxed font-bold tracking-tight">
              Founded in 2026 by a group of passionate and experienced tourers, Southern Miles Touring is a premium adventure touring company built for those who seek exploration without compromise. Specializing in motorcycle tours, car expeditions, and MPV touring experiences, Southern Miles curates unforgettable journeys designed for travelers who want to focus purely on the road while every other detail is taken care of.
            </p>
            <div class="mt-12 inline-flex items-center bg-[#ff5a00] text-black px-8 py-4 rounded-none text-xl font-black mb-8">
              <i class="fa-solid fa-award"></i>&nbsp;
              500+ TOURERS SERVED | 50+ EPIC ROUTES
            </div>
          </div>

          <!-- Mission Grid -->
          <div class="grid lg:grid-cols-3 gap-0 border border-white/10 divide-x divide-white/10">
            <div class="p-12 bg-black hover:bg-[#111] transition-all group border-b lg:border-b-0 border-white/10">
              <i class="fa-solid fa-map-location text-5xl text-[#ff5a00] mb-8 transition-transform group-hover:scale-110 inline-block"></i>
              <h3 class="text-3xl font-black text-white mb-6 tracking-tighter">
                EPIC ROUTES
              </h3>
              <p class="text-gray-500 text-sm font-bold tracking-wide leading-relaxed uppercase">
                Experience the landscapes shaped by culture, cuisine, heritage, and adventure where every road tells a different story and every stop feels authentic.
              </p>
            </div>

            <div class="p-12 bg-black hover:bg-[#111] transition-all group border-b lg:border-b-0 border-white/10">
              <i class="fa-solid fa-users text-5xl text-[#ff5a00] mb-8 transition-transform group-hover:scale-110 inline-block"></i>
              <h3 class="text-3xl font-black text-white mb-6 tracking-tighter">
                PRO SUPPORT
              </h3>
              <p class="text-gray-500 text-sm font-bold tracking-wide leading-relaxed uppercase">
                Every expedition is backed by professional support, dependable assistance, premium accommodations, and regional dining experiences designed for effortless touring.
              </p>
            </div>

            <div class="p-12 bg-black hover:bg-[#111] transition-all group border-b lg:border-b-0 border-white/10">
              <i class="fa-solid fa-video text-5xl text-[#ff5a00] mb-8 transition-transform group-hover:scale-110 inline-block"></i>
              <h3 class="text-3xl font-black text-white mb-6 tracking-tighter">
                MEDIA CREW
              </h3>
              <p class="text-gray-500 text-sm font-bold tracking-wide leading-relaxed uppercase">
                Travel freely and stay present in every moment while our professional creators turn your journey into lasting memories through stunning visuals and storytelling.
              </p>
            </div>
          </div>

          <div class="max-w-7xl mx-auto py-16 border-t border-white/10 mt-16">
            <div class="grid md:grid-cols-2 gap-16 items-center">
              <!-- Left Content -->
              <div class="space-y-8">
                <p class="text-xl text-gray-300 leading-tight font-bold mb-12 tracking-tighter">
                  What sets Southern Miles Touring apart is our commitment to offering not just a ride, but a complete lifestyle experience. Every stay is handpicked to balance luxury with the raw beauty of the wild, creating moments and memories that can only be experienced with us. With a strong focus on safety, hospitality, and premium touring standards, Southern Miles Touring stands among India's emerging leaders in end-to-end adventure touring experiences.
                </p>
                <div class="grid grid-cols-2 border border-white/10 divide-x divide-white/10">
                  <div class="p-8 text-center bg-[#111]">
                    <div class="text-5xl font-black text-[#ff5a00] mb-1">50+</div>
                    <div class="text-xs font-bold text-gray-500 tracking-[0.2em]">
                      TOUR EXPERIENCES
                    </div>
                  </div>
                  <div class="p-8 text-center bg-[#111]">
                    <div class="text-5xl font-black text-[#ff5a00] mb-1">500+</div>
                    <div class="text-xs font-bold text-gray-500 tracking-[0.2em]">
                      HAPPY TOURERS
                    </div>
                  </div>
                </div>
              </div>

              <!-- Right Slider -->
              <div class="swiper tribeSlider h-[500px] overflow-hidden">
                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tribe/tribe1.jpg"
                        class="w-full h-full object-cover"
                        alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tribe/tribe2.jpg"
                        class="w-full h-full object-cover"
                        alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tribe/tribe3.jpg"
                        class="w-full h-full object-cover"
                        alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tribe/tribe4.jpg"
                        class="w-full h-full object-cover"
                        alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tribe/tribe5.jpg"
                        class="w-full h-full object-cover"
                        alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tribe/tribe6.jpg"
                        class="w-full h-full object-cover"
                        alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tribe/tribe7.jpg"
                        class="w-full h-full object-cover"
                        alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tribe/tribe8.jpg"
                        class="w-full h-full object-cover"
                        alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tribe/tribe9.jpg"
                        class="w-full h-full object-cover"
                        alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tribe/tribe10.jpg"
                        class="w-full h-full object-cover"
                        alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tribe/tribe11.jpg"
                        class="w-full h-full object-cover"
                        alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tribe/tribe12.jpg"
                        class="w-full h-full object-cover"
                        alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tribe/tribe13.jpg"
                        class="w-full h-full object-cover"
                        alt="">
                  </div>
                  <div class="swiper-slide">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/tribe/tribe14.jpg"
                        class="w-full h-full object-cover"
                        alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Timeline 
          <div class="max-w-4xl mx-auto mb-16 border-t border-white/10 pt-16">
            <h3 class="text-5xl font-black text-white text-center mb-20 tracking-tighter uppercase">
              OUR RIDING LEGACY
            </h3>
            <div class="space-y-0 border-l border-white/10 ml-4 md:ml-0">
              <div class="flex items-center space-x-8 group mb-16 relative">
                <div class="w-20 h-20 bg-[#ff5a00] text-black rounded-none flex items-center justify-center font-black text-2xl flex-shrink-0 z-10">
                  '22
                </div>
                <div class="border-b border-white/5 pb-6 w-full">
                  <h4 class="text-2xl font-black text-white mb-2 tracking-tight uppercase">
                    FIRST GROUP RIDE
                  </h4>
                  <p class="text-lg text-gray-500 font-bold tracking-tight">
                    12 bikes, Sakleshpur Ghat. The addiction to organized group rides began.
                  </p>
                </div>
              </div>
              <div class="flex items-center space-x-8 group mb-16 relative">
                <div class="w-20 h-20 bg-[#ff5a00] text-black rounded-none flex items-center justify-center font-black text-2xl flex-shrink-0 z-10">
                  '24
                </div>
                <div class="border-b border-white/5 pb-6 w-full">
                  <h4 class="text-2xl font-black text-white mb-2 tracking-tight uppercase">
                    COORG MULTI-DAY DEBUT
                  </h4>
                  <p class="text-lg text-gray-500 font-bold tracking-tight">
                    First 3-day tour with stays. Riders demanded more. We delivered.
                  </p>
                </div>
              </div>
              <div class="flex items-center space-x-8 group mb-16 relative">
                <div class="w-20 h-20 bg-[#ff5a00] text-black rounded-none flex items-center justify-center font-black text-2xl flex-shrink-0 z-10">
                  '26
                </div>
                <div class="border-b border-white/5 pb-6 w-full">
                  <h4 class="text-2xl font-black text-white mb-2 tracking-tight uppercase">
                    COMPANY LAUNCH
                  </h4>
                  <p class="text-lg text-gray-500 font-bold tracking-tight">
                    Southern Mile Touring is born. Full-time rides, professional support, epic memories guaranteed.
                  </p>
                </div>
              </div>
            </div>
          </div> -->

          <div class="bg-white text-black py-16 md:py-24 rounded-none text-center mb-16 border-8 border-[#ff5a00]">
            <div class="max-w-3xl mx-auto px-4">
              <h2 class="text-4xl md:text-6xl font-black mb-4 tracking-tighter uppercase">
                Enough about us!
              </h2>
              <p class="text-md md:text-xl font-bold text-gray-600 mb-10 uppercase tracking-wide max-w-3xl mx-auto">
                The real stories begin on the road. Pick your next ride and let's make memories worth talking about.
              </p>
              <a href="/rides" class="bg-black text-white hover:bg-[#ff5a00] hover:text-black px-12 py-6 rounded-none text-xl md:text-2xl font-black transition-all duration-300 inline-flex items-center space-x-4 uppercase tracking-tighter group w-full sm:w-auto justify-center">
                <span>START YOUR ADVENTURE</span>
                <svg xmlns="http://w3.org" class="w-6 h-6 transform group-hover:translate-x-2 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
              </a>
            </div>
          </div>

          <div class="text-center pt-16 border-t border-white/10">
            <h3 class="text-5xl font-black text-white mb-8 tracking-tighter uppercase">
              WANT TO KNOW MORE?
            </h3>
            <p class="text-lg text-gray-500 font-bold mb-12 max-w-2xl mx-auto tracking-tight uppercase">
              Explore our blogs, meet the captains, or get a custom quote for your group expedition.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
              <a href="<?php echo esc_url(home_url('blog')); ?>" class="bg-[#ff5a00] text-white hover:bg-white hover:text-[#ff5a00] px-12 py-5 rounded-none text-sm font-black tracking-[0.2em] transition-all duration-300 uppercase">
                READ OUR BLOG
              </a>
              <a href="<?php echo esc_url(home_url('team')); ?>" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-black px-12 py-5 rounded-none text-sm font-black tracking-[0.2em] transition-all duration-300 uppercase">
                MEET THE CAPTAINS
              </a>
              <a href="<?php echo esc_url(home_url('contact')); ?>" class="bg-[#ff5a00] border-2 border-[#ff5a00] text-black hover:bg-transparent hover:text-[#ff5a00] px-12 py-5 rounded-none text-sm font-black tracking-[0.2em] transition-all duration-300 uppercase">
                CONTACT US
              </a>
            </div>
          </div>
        </div>
        <script type="text/javascript">
          new Swiper('.tribeSlider', {
            loop: true,
            autoplay: {
              delay: 2500,
              disableOnInteraction: false,
            },
            speed: 900,
            slidesPerView: 1,
            spaceBetween: 0,
          });
        </script>
      </section>
    </div>
  
<?php get_footer(); ?>