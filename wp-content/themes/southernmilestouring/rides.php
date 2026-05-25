<?php 
  /*
  Template Name: Rides
  */
  get_header(); 
?>
    <div class="bg-black">
      <section class="relative h-[60vh] md:h-[80vh] overflow-hidden bg-black border-b-4 border-[#ff5a00] group">
        <div
          class="absolute inset-0 grayscale brightness-50 contrast-125 group-hover:grayscale-0 transition-all duration-1000 bg-cover bg-center bg-no-repeat"
          style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/rides.jpg');"
        ></div>
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4 max-w-5xl mx-auto uppercase tracking-tighter">
          <h1 class="text-4xl md:text-6xl lg:text-8xl font-black mb-8 leading-[0.9] tracking-tighter">
            Gear Up then!
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

      <!-- Ride Packages Section -->
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
            <div class="group bg-[#0a0a0a] p-0 rounded-none border border-white/5 transition-all duration-300 h-full cursor-pointer flex flex-col hover:border-[#ff5a00]/50">
              <div class="w-full h-56 rounded-none overflow-hidden mb-6 relative">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/rides/coorg.jpg"
                  alt="Coorg Escape"
                  class="w-full h-full object-cover transition-all duration-700 grayscale group-hover:grayscale-0 brightness-75 group-hover:brightness-100"
                  loading="lazy"
                  draggable="false"
                >
                <div class="absolute top-0 left-0 text-black text-[10px] font-black px-3 py-1 uppercase tracking-widest bg-[#ff5a00]">
                  Upcoming
                </div>
              </div>

              <div class="px-6 pb-8 flex-grow">
                <h3 class="text-xl font-black mb-3 uppercase tracking-tighter leading-tight line-clamp-2 transition-colors text-white group-hover:text-[#ff5a00]">
                  Coorg Escape Ride
                </h3>
                <div class="space-y-2 mb-6 uppercase tracking-widest text-[10px]">
                  <div class="flex items-center text-gray-400">
                    <i class="fa-solid fa-calendar text-[#ff5a00] mr-2"></i>
                    <span class="font-bold">
                      12 - 15 JUN 2026
                    </span>
                  </div>
                  <div class="flex items-center text-gray-400">
                    <i class="fa-solid fa-location-dot text-[#ff5a00] mr-2"></i>
                    <span class="font-bold">
                      850 KMS
                    </span>
                  </div>
                </div>

                <p class="text-xs text-gray-500 line-clamp-2 mb-6 font-medium lowercase">
                  explore the rugged terrains and luxury stays of coorg.
                </p>

                <div class="flex items-center justify-between pt-6 border-t border-white/10">
                  <div>
                    <span class="text-2xl font-black block tracking-tighter text-white">
                      ₹14,999
                    </span>
                    <span class="text-[9px] text-gray-500 block uppercase font-bold tracking-widest">
                      per rider
                    </span>
                  </div>
                  <button class="bg-[#ff5a00] hover:bg-white text-black px-5 py-2 rounded-none font-black text-[10px] uppercase transition-all flex items-center space-x-2">
                    <span>LEARN MORE</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                  </button>
                </div>
              </div>
            </div>

            <div class="group bg-[#0a0a0a] p-0 rounded-none border border-white/5 transition-all duration-300 h-full cursor-pointer flex flex-col hover:border-[#ff5a00]/50">
              <div class="w-full h-56 rounded-none overflow-hidden mb-6 relative">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/rides/chikmagalur.jpg"
                  alt="Chikmagalur Trails"
                  class="w-full h-full object-cover transition-all duration-700 grayscale group-hover:grayscale-0 brightness-75 group-hover:brightness-100"
                  loading="lazy"
                  draggable="false"
                >
                <div class="absolute top-0 left-0 text-black text-[10px] font-black px-3 py-1 uppercase tracking-widest bg-[#ff5a00]">
                  Upcoming
                </div>
              </div>
              <div class="px-6 pb-8 flex-grow">
                <h3 class="text-xl font-black mb-3 uppercase tracking-tighter leading-tight line-clamp-2 transition-colors text-white group-hover:text-[#ff5a00]">
                  Chikmagalur Trails
                </h3>
                <div class="space-y-2 mb-6 uppercase tracking-widest text-[10px]">
                  <div class="flex items-center text-gray-400">
                    <i class="fa-solid fa-calendar text-[#ff5a00] mr-2"></i>
                    <span class="font-bold">
                      24 - 27 JUL 2026
                    </span>
                  </div>
                  <div class="flex items-center text-gray-400">
                    <i class="fa-solid fa-location-dot text-[#ff5a00] mr-2"></i>
                    <span class="font-bold">
                      920 KMS
                    </span>
                  </div>
                </div>
                <p class="text-xs text-gray-500 line-clamp-2 mb-6 font-medium lowercase">
                  twisties, ghats, waterfalls and unforgettable mountain roads.
                </p>
                <div class="flex items-center justify-between pt-6 border-t border-white/10">
                  <div>
                    <span class="text-2xl font-black block tracking-tighter text-white">
                      ₹16,500
                    </span>
                    <span class="text-[9px] text-gray-500 block uppercase font-bold tracking-widest">
                      per rider
                    </span>
                  </div>
                  <button class="bg-[#ff5a00] hover:bg-white text-black px-5 py-2 rounded-none font-black text-[10px] uppercase transition-all flex items-center space-x-2">
                    <span>LEARN MORE</span>
                    <i class="fa-solid fa-arrow-right text-[10px]"></i>
                  </button>
                </div>
              </div>
            </div>

            <div class="group bg-[#0a0a0a] p-0 rounded-none border border-white/5 transition-all duration-300 h-full flex flex-col opacity-70 grayscale">
              <div class="w-full h-56 rounded-none overflow-hidden mb-6 relative">
                <img
                  src="<?php echo get_template_directory_uri(); ?>/assets/images/rides/ladakh.jpg"
                  alt="Ladakh Expedition"
                  class="w-full h-full object-cover brightness-50 grayscale"
                  loading="lazy"
                  draggable="false"
                >
                <div class="absolute top-0 left-0 text-black text-[10px] font-black px-3 py-1 uppercase tracking-widest bg-gray-600">
                  Tentative
                </div>
              </div>
              <div class="px-6 pb-8 flex-grow">
                <h3 class="text-xl font-black mb-3 uppercase tracking-tighter leading-tight text-gray-500">
                  Ladakh Expedition
                </h3>
                <div class="space-y-2 mb-6 uppercase tracking-widest text-[10px]">
                  <div class="flex items-center text-gray-400">
                    <i class="fa-solid fa-calendar text-gray-600 mr-2"></i>
                    <span class="font-bold">
                      TBD
                    </span>
                  </div>
                  <div class="flex items-center text-gray-400">
                    <i class="fa-solid fa-location-dot text-gray-600 mr-2"></i>
                    <span class="font-bold">
                      2500 KMS
                    </span>
                  </div>
                </div>
                <p class="text-xs text-gray-500 line-clamp-2 mb-6 font-medium lowercase">
                  details for this ride are currently being finalized.
                </p>
                <div class="flex items-center justify-between pt-6 border-t border-white/10">
                  <div>
                    <span class="text-2xl font-black block tracking-tighter text-gray-600 line-through">
                      ₹ TBD
                    </span>
                    <span class="text-[9px] text-gray-500 block uppercase font-bold tracking-widest">
                      per rider
                    </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section class="bg-black py-16">
        <div class="max-w-7xl mx-auto px-4">
          <div class="bg-white text-black p-12 md:p-24 rounded-none border-8 border-[#ff5a00] text-center relative overflow-hidden">
            
            <div class="inline-flex items-center bg-black text-[#ff5a00] px-6 py-2 rounded-none text-xs font-black mb-8 tracking-[0.3em] uppercase">
              TRUSTED BY 500+ RIDERS
            </div>

            <h2 class="text-5xl lg:text-8xl font-black mb-8 tracking-tighter leading-none uppercase">
              READY TO <br/> JOIN THE RIDE?
            </h2>

            <p class="text-sm md:text-lg font-bold text-gray-600 mb-16 max-w-2xl mx-auto tracking-widest uppercase leading-tight">
              FROM SAKLESHPUR'S 59 BENDS TO COORG'S COFFEE TRAILS—PICK YOUR ADVENTURE.
            </p>

            <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
              <a 
                href="<?php echo esc_url(home_url('/contact')); ?>" 
                class="w-full sm:w-auto bg-black text-white hover:bg-[#ff5a00] hover:text-black px-16 py-6 rounded-none text-sm font-black tracking-[0.2em] transition-all duration-300 uppercase flex items-center justify-center gap-4 group"
              >
                <span>CUSTOM RIDE</span>
              </a>
              <a 
                href="<?php echo esc_url(home_url('/team')); ?>" 
                class="w-full sm:w-auto border-2 border-black text-black hover:bg-black hover:text-white px-16 py-6 rounded-none text-sm font-black tracking-[0.2em] transition-all duration-300 uppercase"
              >
                MEET CAPTAINS
              </a>
            </div>
          </div>
        </div>
      </section>
    </div>

<?php get_footer(); ?>