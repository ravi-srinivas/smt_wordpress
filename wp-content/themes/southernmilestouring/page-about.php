<?php 
  /*
  Template Name: About Template
  */
  get_header(); 
?>
<div class="bg-black text-white selection:bg-[#ff5a00] selection:text-black">

  <!-- ================= HERO SECTION ================= -->
  <section class="relative h-[60vh] md:h-[80vh] overflow-hidden bg-black border-b-4 border-[#ff5a00] group select-none">
    
    <!-- Background Hero Image -->
    <div
      class="absolute inset-0 grayscale brightness-50 contrast-125 group-hover:grayscale-0 group-hover:scale-105 transition-all duration-1000 bg-cover bg-center bg-no-repeat"
      style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>');"
    ></div>

    <!-- Vignette & HUD Overlays -->
    <div class="absolute inset-0 bg-gradient-to-t from-black via-black/40 to-black/70"></div>
    <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff05_1px,transparent_1px),linear-gradient(to_bottom,#ffffff05_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>

    <!-- Radar Sweep Line Effect -->
    <div class="absolute inset-x-0 h-[2px] bg-gradient-to-r from-transparent via-[#ff5a00]/40 to-transparent animate-[radar_6s_ease-in-out_infinite] pointer-events-none"></div>

    <!-- Hero Content Block -->
    <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4 max-w-5xl mx-auto uppercase tracking-tighter">
      
      <!-- Top Pill Badge -->
      <div class="inline-flex items-center gap-2 bg-black/80 border border-[#ff5a00]/40 text-[#ff5a00] px-4 py-1.5 rounded-none text-[10px] md:text-xs font-black tracking-widest mb-6 shadow-2xl backdrop-blur-sm">
        <i class="fa-solid fa-compass text-xs animate-spin-slow"></i>
        <span>THE SOUTHERN MILES STORY</span>
      </div>

      <h1 class="text-4xl md:text-6xl lg:text-8xl font-black mb-8 leading-[0.9] tracking-tighter drop-shadow-2xl">
        KNOW US!
      </h1>
      
      <div class="w-24 h-2 bg-[#ff5a00] mb-8 group-hover:w-40 transition-all duration-500 shadow-[0_0_15px_#ff5a00]"></div>
      
      <p class="text-xs md:text-base font-bold tracking-[0.25em] max-w-2xl mx-auto text-gray-300 leading-relaxed drop-shadow">
        How a bunch of passionate tourers became Southern Miles Touring!
      </p>

    </div>

    <!-- Corner Tactical HUD Details -->
    <div class="absolute bottom-6 right-6 hidden md:flex items-center gap-3 border border-white/20 px-4 py-2 text-[10px] font-mono tracking-widest text-white/50 backdrop-blur-md bg-black/40">
      <span class="w-2 h-2 rounded-full bg-[#ff5a00] animate-pulse"></span>
      <span>SOUTHERN MILES TOURING / EST 2026</span>
    </div>

  </section>

  <section id="main" class="relative py-12 md:py-24 text-white border-y border-white/10 tracking-tighter overflow-hidden select-none">
    
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
      <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff03_1px,transparent_1px),linear-gradient(to_bottom,#ffffff03_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>

      <svg class="absolute inset-0 w-full h-full opacity-10 text-[#ff5a00]" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
        <defs>
          <pattern id="topo-lines-about" width="400" height="400" patternUnits="userSpaceOnUse">
            <path d="M0,100 Q100,50 200,100 T400,100 M0,200 Q100,150 200,200 T400,200 M0,300 Q100,250 200,300 T400,300" fill="none" stroke="currentColor" stroke-width="1.5" class="animate-[pulse_6s_ease-in-out_infinite]" />
          </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#topo-lines-about)" />
      </svg>

      <div class="absolute top-1/4 inset-x-0 h-[1px] bg-gradient-to-r from-transparent via-[#ff5a00]/30 to-transparent animate-[stream_8s_linear_infinite]"></div>
      <div class="absolute bottom-1/4 inset-x-0 h-[1px] bg-gradient-to-r from-transparent via-white/20 to-transparent animate-[stream_12s_linear_infinite_3s]"></div>

      <div class="absolute top-1/3 left-10 hidden md:flex items-center gap-2 opacity-25 animate-[bounce_5s_infinite]">
        <span class="w-3 h-3 rounded-full border-2 border-[#ff5a00] bg-black"></span>
        <span class="text-[9px] font-mono tracking-widest text-[#ff5a00]">EXPEDITION HQ // BANGALORE</span>
      </div>

      <div class="absolute bottom-1/3 right-10 hidden md:flex items-center gap-2 opacity-25 animate-[bounce_6s_infinite_1s]">
        <span class="w-3 h-3 rounded-full border-2 border-white bg-black"></span>
        <span class="text-[9px] font-mono tracking-widest text-gray-400">WAYPOINT // ALL-TERRAIN ROUTE</span>
      </div>

    </div>

    <!-- MAIN WRAPPER -->
    <div class="max-w-7xl mx-auto px-4 relative z-10">
      
      <div class="text-center mb-16">
        <h2 class="text-4xl md:text-7xl font-black text-white mb-8 tracking-tighter leading-none uppercase drop-shadow-lg">
          THE JOURNEY BEGINS
        </h2>
        <p class="text-base md:text-lg text-gray-400 max-w-4xl mx-auto leading-relaxed font-bold tracking-tight">
          Founded in 2026 by a group of passionate and experienced tourers, Southern Miles Touring is a premium adventure touring company built for those who seek exploration without compromise. Specializing in motorcycle tours, car expeditions, and MPV touring experiences, Southern Miles curates unforgettable journeys designed for travelers who want to focus purely on the road while every other detail is taken care of.
        </p>
        <div class="mt-10 inline-flex items-center gap-3 bg-[#ff5a00] text-black px-8 py-4 rounded-none text-lg md:text-xl font-black tracking-wider shadow-[0_0_25px_rgba(255,90,0,0.3)] transform hover:scale-105 transition-all">
          <i class="fa-solid fa-award text-xl"></i>
          <span>500+ TOURERS SERVED | 50+ EPIC ROUTES</span>
        </div>
      </div>

      <!-- Core Features Grid -->
      <div class="grid lg:grid-cols-3 gap-0 border border-white/10 divide-y lg:divide-y-0 lg:divide-x divide-white/10 bg-black/60 backdrop-blur-md shadow-2xl">
        
        <div class="p-8 md:p-12 bg-black/70 hover:bg-[#0f0f0f] transition-all duration-300 group">
          <i class="fa-solid fa-map-location text-5xl text-[#ff5a00] mb-8 transition-transform group-hover:scale-110 group-hover:rotate-3 inline-block"></i>
          <h3 class="text-2xl md:text-3xl font-black text-white mb-6 tracking-tighter uppercase group-hover:text-[#ff5a00] transition-colors">
            EPIC ROUTES
          </h3>
          <p class="text-gray-400 text-sm font-bold tracking-wide leading-relaxed uppercase">
            Experience the landscapes shaped by culture, cuisine, heritage, and adventure where every road tells a different story and every stop feels authentic.
          </p>
        </div>

        <div class="p-8 md:p-12 bg-black/70 hover:bg-[#0f0f0f] transition-all duration-300 group">
          <i class="fa-solid fa-users text-5xl text-[#ff5a00] mb-8 transition-transform group-hover:scale-110 group-hover:rotate-3 inline-block"></i>
          <h3 class="text-2xl md:text-3xl font-black text-white mb-6 tracking-tighter uppercase group-hover:text-[#ff5a00] transition-colors">
            PRO SUPPORT
          </h3>
          <p class="text-gray-400 text-sm font-bold tracking-wide leading-relaxed uppercase">
            Every expedition is backed by professional support, dependable assistance, premium accommodations, and regional dining experiences designed for effortless touring.
          </p>
        </div>

        <div class="p-8 md:p-12 bg-black/70 hover:bg-[#0f0f0f] transition-all duration-300 group">
          <i class="fa-solid fa-video text-5xl text-[#ff5a00] mb-8 transition-transform group-hover:scale-110 group-hover:rotate-3 inline-block"></i>
          <h3 class="text-2xl md:text-3xl font-black text-white mb-6 tracking-tighter uppercase group-hover:text-[#ff5a00] transition-colors">
            MEDIA CREW
          </h3>
          <p class="text-gray-400 text-sm font-bold tracking-wide leading-relaxed uppercase">
            Travel freely and stay present in every moment while our professional creators turn your journey into lasting memories through stunning visuals and storytelling.
          </p>
        </div>

      </div>

      <!-- Stats & Swiper Gallery Split Block -->
      <div class="max-w-7xl mx-auto py-16 border-t border-white/10 mt-16">
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-16 items-center">

          <!-- Left Description & Counter Stats -->
          <div class="space-y-8">
            <p class="text-lg md:text-xl text-gray-300 leading-relaxed font-bold tracking-tight">
              What sets Southern Miles Touring apart is our commitment to offering not just a vacation, but a complete lifestyle experience. Every stay is handpicked to balance luxury with the raw beauty of the wild, creating moments and memories that can only be experienced with us. With a strong focus on safety, hospitality, and premium touring standards, Southern Miles Touring stands among India's emerging leaders in end-to-end adventure touring experiences.
            </p>
            
            <div class="grid grid-cols-2 border border-white/10 divide-x divide-white/10 bg-[#0a0a0a]">
              <div class="p-6 md:p-8 text-center hover:bg-[#111] transition-colors">
                <div class="text-4xl md:text-6xl font-black text-[#ff5a00] mb-1 tracking-tighter">50+</div>
                <div class="text-[10px] md:text-xs font-bold text-gray-500 tracking-[0.2em] uppercase">
                  TOUR EXPERIENCES
                </div>
              </div>
              <div class="p-6 md:p-8 text-center hover:bg-[#111] transition-colors">
                <div class="text-4xl md:text-6xl font-black text-[#ff5a00] mb-1 tracking-tighter">500+</div>
                <div class="text-[10px] md:text-xs font-bold text-gray-500 tracking-[0.2em] uppercase">
                  HAPPY TOURERS
                </div>
              </div>
            </div>
          </div>
          
          <!-- Right Swiper Tribe Gallery -->
          <div class="relative border border-white/10 p-2 bg-[#0a0a0a] shadow-2xl group">
            <div class="swiper tribe-slider h-[380px] md:h-[480px] w-full overflow-hidden relative">
              <div class="swiper-wrapper">
                <?php for ($i = 1; $i <= 14; $i++): ?>
                  <div class="swiper-slide h-full w-full">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/tribe/tribe<?php echo $i; ?>.jpg"
                        class="w-full h-full object-cover block transition-transform duration-700 group-hover:scale-105"
                        alt="Tribe Image <?php echo $i; ?>">
                  </div>
                <?php endfor; ?>
              </div>
            </div>
            <!-- Overlay Corner Badge for Swiper -->
            <div class="absolute top-4 left-4 z-20 bg-black/80 border border-[#ff5a00]/40 text-[#ff5a00] px-3 py-1 text-[9px] font-open-sans tracking-widest uppercase backdrop-blur-sm">
              THE TRIBE IN ACTION
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
                FIRST GROUP TOUR
              </h4>
              <p class="text-lg text-gray-500 font-bold tracking-tight">
                12 bikes, Sakleshpur Ghat. The addiction to organized group tours began.
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
                First 3-day tour with stays. Tourers demanded more. We delivered.
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
                Southern Mile Touring is born. Full-time tourers, professional support, epic memories guaranteed.
              </p>
            </div>
          </div>
        </div>
      </div> -->

      <!-- Enough About Us -->
      <div class="relative bg-white text-black py-16 md:py-20 rounded-none text-center my-16 border-4 md:border-8 border-[#ff5a00] shadow-[0_0_40px_rgba(255,90,0,0.2)] overflow-hidden">
        
        <div class="absolute inset-0 bg-[linear-gradient(45deg,#00000008_25%,transparent_25%,transparent_50%,#00000008_50%,#00000008_75%,transparent_75%,transparent)] bg-[size:1rem_1rem] pointer-events-none"></div>

        <div class="max-w-3xl mx-auto px-4 relative z-10">
          <h2 class="text-4xl md:text-6xl font-black mb-4 tracking-tighter uppercase leading-none">
            Enough about us!
          </h2>
          <p class="text-sm md:text-lg font-bold text-gray-700 mb-8 uppercase tracking-wide max-w-2xl mx-auto">
            The real stories begin on the road. Pick your next tour<br class="hidden sm:inline"/> and let's make memories worth talking about.
          </p>
          <a href="<?php echo esc_url(home_url('/expeditions')); ?>" class="bg-black text-white hover:bg-[#ff5a00] hover:text-black px-8 md:px-12 py-5 rounded-none text-lg md:text-xl font-black transition-all duration-300 inline-flex items-center space-x-4 uppercase tracking-tighter group w-full sm:w-auto justify-center shadow-xl">
            <span>START YOUR ADVENTURE</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transform group-hover:translate-x-2 transition-transform duration-300" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="3">
              <path stroke-linecap="round" stroke-linejoin="round" d="M14 5l7 7m0 0l-7 7m7-7H3" />
            </svg>
          </a>
        </div>
      </div>

      <!-- Bottom Next-Steps Navigation -->
      <div class="text-center pt-12 border-t border-white/10">
        <h3 class="text-3xl md:text-5xl font-black text-white mb-6 tracking-tighter uppercase">
          WANT TO KNOW MORE?
        </h3>
        <p class="text-sm md:text-base text-gray-400 font-bold mb-10 max-w-2xl mx-auto tracking-widest uppercase">
          Explore our blogs, meet the captains, or get a custom quote for your group expedition.
        </p>
        
        <div class="flex flex-col sm:flex-row gap-4 md:gap-6 justify-center max-w-3xl mx-auto">
          <a href="<?php echo esc_url(home_url('blog')); ?>" class="bg-[#ff5a00] text-black hover:bg-white hover:text-black px-8 py-4 rounded-none text-xs md:text-sm font-black tracking-[0.2em] transition-all duration-300 uppercase shadow-lg">
            READ OUR BLOG
          </a>
          <a href="<?php echo esc_url(home_url('team')); ?>" class="bg-transparent border-2 border-white text-white hover:bg-white hover:text-black px-8 py-4 rounded-none text-xs md:text-sm font-black tracking-[0.2em] transition-all duration-300 uppercase shadow-lg">
            MEET THE CAPTAINS
          </a>
          <a href="<?php echo esc_url(home_url('contact')); ?>" class="bg-transparent border-2 border-[#ff5a00] text-[#ff5a00] hover:bg-[#ff5a00] hover:text-black px-8 py-4 rounded-none text-xs md:text-sm font-black tracking-[0.2em] transition-all duration-300 uppercase shadow-lg">
            CONTACT US
          </a>
        </div>
      </div>

    </div>
  </section>
</div>

<!-- KEYFRAME ANIMATIONS FOR THE BACKGROUND HUD & DATA STREAMS -->
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