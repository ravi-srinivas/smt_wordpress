<?php 
  /*
  Template Name: Our Team
  */
  get_header(); 
?>
    <div class="bg-black">
      <section class="relative h-[60vh] md:h-[80vh] overflow-hidden bg-black border-b-4 border-[#ff5a00] group">
        <div
          class="absolute inset-0 grayscale brightness-50 contrast-125 group-hover:grayscale-0 transition-all duration-1000 bg-cover bg-center bg-no-repeat"
          style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/team.jpg');"
        ></div>
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 flex flex-col items-center justify-center h-full text-center text-white px-4 max-w-5xl mx-auto uppercase tracking-tighter">
          <h1 class="text-4xl md:text-6xl lg:text-8xl font-black mb-8 leading-[0.9] tracking-tighter">
            Avengers!
          </h1>
          <div class="w-24 h-2 bg-[#ff5a00] mb-8"></div>
          <p class="text-sm md:text-lg font-bold tracking-[0.3em] max-w-2xl mx-auto text-gray-300 leading-relaxed">
            South India's best riders who live for the road
          </p>
        </div>
        <div class="absolute bottom-6 right-6 hidden md:block border border-white/20 px-4 py-2 text-[10px] font-black tracking-widest text-white/40 backdrop-blur-sm">
          SOUTHERN MILES TOURING / EST 2026
        </div>

      </section>

      <section class="text-white py-16 border-y border-white/10 uppercase tracking-tighter">
        <div class="max-w-7xl mx-auto px-4">
          
          <div class="text-center mb-24 border border-white/10 p-12 lg:p-20 bg-[#0a0a0a]">
            <h1 class="text-5xl lg:text-7xl font-black text-white mb-8 tracking-tighter leading-none">
              OUR CORE TEAM
            </h1>
            <p class="text-sm md:text-base text-gray-500 font-bold max-w-3xl mx-auto mb-16 tracking-[0.2em]">
              SEASONED LOCALS • GHAT SPECIALISTS • ROAD EXPERTS
            </p>            
            <!-- Stats Section -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-0 border border-white/10 divide-y md:divide-y-0 md:divide-x divide-white/10">
              <div class="py-10 bg-black text-center">
                <i class="fa-regular fa-thumbs-up text-5xl text-[#ff5a00] mx-auto mb-4"></i>
                <div class="text-5xl font-black text-white mb-1">
                  10+
                </div>
                <div class="text-xs font-bold text-gray-500 tracking-widest">
                  COMBINED RIDES
                </div>
              </div>
              <div class="py-10 bg-black text-center">
                <i class="fa-solid fa-award text-5xl text-[#ff5a00] mx-auto mb-4"></i>
                <div class="text-5xl font-black text-white mb-1">
                  15+
                </div>
                <div class="text-xs font-bold text-gray-500 tracking-widest">
                  YEARS EXPERIENCE
                </div>
              </div>
              <div class="py-10 bg-black text-center">
                <i class="fa-solid fa-clock text-5xl text-[#ff5a00] mx-auto mb-4"></i>
                <div class="text-5xl font-black text-white mb-1">
                  24/7
                </div>
                <div class="text-xs font-bold text-gray-500 tracking-widest">
                  ROADSIDE SUPPORT
                </div>
              </div>
            </div>
          </div>
          
          <div class="grid md:grid-cols-2 gap-8">
            <div class="group bg-[#111] border border-white/10 rounded-none overflow-hidden hover:border-[#ff5a00] transition-colors duration-500">
              <div class="grid lg:grid-cols-2 h-full">
                <div class="relative overflow-hidden aspect-square lg:aspect-auto">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/tarit.jpg"
                    alt="Rider Name"
                    class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 opacity-80 group-hover:opacity-100"
                    loading="lazy"
                  >
                  <div class="absolute top-0 left-0 bg-[#ff5a00] text-black px-4 py-2 text-xs font-black tracking-widest">
                    125+ Rides RIDES LED
                  </div>
                </div>
                <!-- Content -->
                <div class="p-8 flex flex-col justify-between">
                  <div>
                    <div class="text-xs font-black text-[#ff5a00] tracking-[0.2em] mb-2">
                      Ride Sweep
                    </div>
                    <h3 class="text-3xl font-black text-white mb-4 tracking-tighter uppercase">
                      Tarit Ananth
                    </h3>
                    <p class="text-gray-500 text-sm font-bold tracking-tight leading-relaxed mb-8 uppercase">
                      Tarit is your safety net. With 5+ years riding Karnataka's ghat sections, he knows every breakdown point and chai stall. Former racer turned ride sweeper who brings up the rear so you never get left behind.
                    </p>
                  </div>
                  <div class="flex items-center space-x-2">
                    <a
                      href="https://wa.me/919113230676"
                      target="_blank"
                      class="p-3 bg-black border border-white/10 text-white hover:bg-[#ff5a00] hover:text-black transition-all duration-300"
                    >
                      <i class="fa-brands fa-whatsapp text-lg"></i>
                    </a>
                    <a
                      href="https://instagram.com/taaaritt"
                      target="_blank"
                      class="p-3 bg-black border border-white/10 text-white hover:bg-[#ff5a00] hover:text-black transition-all duration-300"
                    >
                      <i class="fa-brands fa-instagram text-lg"></i>
                    </a>
                    <a
                      href="https://youtube.com/@taritananth"
                      target="_blank"
                      class="p-3 bg-black border border-white/10 text-white hover:bg-[#ff5a00] hover:text-black transition-all duration-300"
                    >
                      <i class="fa-brands fa-youtube text-lg"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="group bg-[#111] border border-white/10 rounded-none overflow-hidden hover:border-[#ff5a00] transition-colors duration-500">
              <div class="grid lg:grid-cols-2 h-full">
                <div class="relative overflow-hidden aspect-square lg:aspect-auto">
                  <img
                    src="<?php echo get_template_directory_uri(); ?>/assets/images/ravi.jpg"
                    alt="Rider Name"
                    class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-700 opacity-80 group-hover:opacity-100"
                    loading="lazy"
                  >
                  <div class="absolute top-0 left-0 bg-[#ff5a00] text-black px-4 py-2 text-xs font-black tracking-widest">
                    180+ Rides RIDES LED
                  </div>
                </div>
                <!-- Content -->
                <div class="p-8 flex flex-col justify-between">
                  <div>
                    <div class="text-xs font-black text-[#ff5a00] tracking-[0.2em] mb-2">
                      Ride Lead
                    </div>
                    <h3 class="text-3xl font-black text-white mb-4 tracking-tighter uppercase">
                      Ravi Srinivas
                    </h3>
                    <p class="text-gray-500 text-sm font-bold tracking-tight leading-relaxed mb-8 uppercase">
                      Ravi sets the pace. 7 years of leading group rides through mist-covered hills and coastal twisties. Ex-army rider with impeccable timing—knows exactly when to push and when to ease off.
                    </p>
                  </div>
                  <div class="flex items-center space-x-2">
                    <a
                      href="https://wa.me/919019450676"
                      target="_blank"
                      class="p-3 bg-black border border-white/10 text-white hover:bg-[#ff5a00] hover:text-black transition-all duration-300"
                    >
                      <i class="fa-brands fa-whatsapp text-lg"></i>
                    </a>
                    <a
                      href="https://instagram.com/im.ravzyy"
                      target="_blank"
                      class="p-3 bg-black border border-white/10 text-white hover:bg-[#ff5a00] hover:text-black transition-all duration-300"
                    >
                      <i class="fa-brands fa-instagram text-lg"></i>
                    </a>
                    <a
                      href="https://youtube.com/@im.ravzyy"
                      target="_blank"
                      class="p-3 bg-black border border-white/10 text-white hover:bg-[#ff5a00] hover:text-black transition-all duration-300"
                    >
                      <i class="fa-brands fa-youtube text-lg"></i>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="text-center mt-24 px-4">
            <div class="bg-white text-black p-16 md:p-24 rounded-none border-8 border-[#ff5a00] relative overflow-hidden">
              <div class="absolute inset-0 opacity-5 pointer-events-none bg-[url('https://www.transparenttextures.com')]"></div>
              <div class="relative z-10">
                <h2 class="text-5xl md:text-7xl font-black mb-6 tracking-tighter uppercase leading-none">
                  RIDDEN WITH <br/> THE BEST?
                </h2>
                <p class="text-sm md:text-lg font-bold text-gray-600 mb-12 max-w-2xl mx-auto tracking-widest uppercase">
                  OUR CAPTAINS HAVE GUIDED RIDERS FROM STARTUPS TO CEOs THROUGH KARNATAKA'S TOUGHEST TERRAIN.
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                  <a 
                    href="<?php echo home_url('/rides'); ?>" 
                    class="bg-black text-white hover:bg-[#ff5a00] hover:text-black px-12 py-6 rounded-none text-sm font-black tracking-[0.2em] transition-all duration-300 uppercase border-2 border-black"
                  >
                    VIEW UPCOMING RIDES
                  </a>
                  <a 
                    href="<?php echo home_url('/contact'); ?>" 
                    class="bg-transparent border-2 border-black text-black hover:bg-black hover:text-white px-12 py-6 rounded-none text-sm font-black tracking-[0.2em] transition-all duration-300 uppercase"
                  >
                    CUSTOM GROUP RIDE
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>

<?php get_footer(); ?>