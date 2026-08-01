<?php 
  /*
  Template Name: Contact Template
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
        <i class="fa-solid fa-headset text-xs animate-pulse"></i>
        <span>24/7 HELPLINE</span>
      </div>

      <h1 class="text-4xl md:text-6xl lg:text-8xl font-black mb-8 leading-[0.9] tracking-tighter drop-shadow-2xl">
        PLAN YOUR ROUTE
      </h1>
      
      <div class="w-24 h-2 bg-[#ff6600] mb-8 group-hover:w-40 transition-all duration-500 shadow-[0_0_15px_#ff6600]"></div>
      
      <p class="text-sm md:text-lg font-bold tracking-[0.3em] max-w-2xl mx-auto text-gray-300 leading-relaxed drop-shadow">
        Drop us a message and we'll get back to you soon!
      </p>

    </div>

    <!-- Corner Tactical HUD Details -->
    <div class="absolute bottom-6 right-6 hidden md:flex items-center gap-3 border border-white/20 px-4 py-2 text-[10px] font-open-sans tracking-widest text-white/50 backdrop-blur-md bg-black/40">
      <span class="w-2 h-2 rounded-full bg-[#ff6600] animate-pulse"></span>
      <span>SOUTHERN MILES TOURING / EST 2026</span>
    </div>

  </section>

  <!-- ================= MAIN CONTENT SECTION ================= -->
  <section class="relative text-white py-16 border-y border-white/10 uppercase tracking-tighter overflow-hidden select-none">
    
    <!-- DYNAMIC BACKGROUND ANIMATION CONTAINER -->
    <div class="absolute inset-0 pointer-events-none overflow-hidden">
      <!-- 1. Tactical Grid Pattern Overlay -->
      <div class="absolute inset-0 bg-[linear-gradient(to_right,#ffffff03_1px,transparent_1px),linear-gradient(to_bottom,#ffffff03_1px,transparent_1px)] bg-[size:4rem_4rem]"></div>

      <!-- 2. Dynamic Topography Lines SVG -->
      <svg class="absolute inset-0 w-full h-full opacity-10 text-[#ff6600]" xmlns="http://www.w3.org/2000/svg" width="100%" height="100%">
        <defs>
          <pattern id="topo-lines-contact" width="400" height="400" patternUnits="userSpaceOnUse">
            <path d="M0,100 Q100,50 200,100 T400,100 M0,200 Q100,150 200,200 T400,200 M0,300 Q100,250 200,300 T400,300" fill="none" stroke="currentColor" stroke-width="1.5" class="animate-[pulse_6s_ease-in-out_infinite]" />
          </pattern>
        </defs>
        <rect width="100%" height="100%" fill="url(#topo-lines-contact)" />
      </svg>

      <!-- 3. Sweeping Data Stream Overlay Lines -->
      <div class="absolute top-1/4 inset-x-0 h-[1px] bg-gradient-to-r from-transparent via-[#ff6600]/30 to-transparent animate-[stream_8s_linear_infinite]"></div>
      <div class="absolute bottom-1/3 inset-x-0 h-[1px] bg-gradient-to-r from-transparent via-white/20 to-transparent animate-[stream_12s_linear_infinite_3s]"></div>
    </div>

    <!-- MAIN SECTION CONTENT -->
    <div class="max-w-7xl mx-auto px-4 space-y-20 relative z-10">
      
      <!-- Top Response Banner Block -->
      <div class="text-center bg-[#0a0a0a] border border-white/10 p-12 lg:p-20 relative overflow-hidden shadow-2xl backdrop-blur-md">
        <div class="absolute -top-12 -left-12 w-24 h-24 border-t-2 border-l-2 border-[#ff6600]/40 pointer-events-none"></div>
        <div class="absolute -bottom-12 -right-12 w-24 h-24 border-b-2 border-r-2 border-[#ff6600]/40 pointer-events-none"></div>

        <div class="inline-flex items-center gap-2 bg-[#ff6600] text-black px-8 py-3 rounded-none text-xs font-black mb-10 tracking-[0.3em] uppercase shadow-[0_0_20px_rgba(255,90,0,0.4)]">
          <i class="fa-solid fa-clock text-xs"></i>
          <span>RESPONSE WITHIN 2 HOURS</span>
        </div>
        
        <h1 class="text-5xl lg:text-7xl font-black text-white mb-8 tracking-tighter leading-[0.8]">
          PLAN YOUR ADVENTURE <br /> WITH US
        </h1>
        
        <p class="text-sm md:text-lg font-bold text-gray-400 max-w-2xl mx-auto tracking-widest uppercase">
          READY TO CONQUER INDIA'S ROADS? <br/> OUR RIDE CAPTAINS ARE <span class="text-[#ff6600] font-black">STANDING BY.</span>
        </p>
      </div>

      <!-- Main Two-Column Contact Split Grid -->
      <div class="grid lg:grid-cols-2 gap-0 border border-white/10 divide-y lg:divide-y-0 lg:divide-x divide-white/10 shadow-2xl bg-black/60 backdrop-blur-md">
        
        <!-- Left Side: Base Camp Details & Map -->
        <div class="space-y-0 bg-[#0a0a0a]">
          
          <div class="p-10 border-b border-white/10 flex items-center justify-between">
            <h2 class="text-3xl font-black text-white flex items-center tracking-tighter uppercase">
              <i class="fas fa-map-marker-alt text-[#ff6600] mr-4 animate-bounce"></i>
              BASE CAMP HQ
            </h2>
            <span class="text-[10px] font-open-sans text-[#ff6600] border border-[#ff6600]/30 px-3 py-1">HQ ONLINE</span>
          </div>

          <div class="divide-y divide-white/10">
            
            <!-- Map Section -->
            <div class="maps flex items-start space-x-8 group hover:bg-black transition-all">
              <div class="flex-1 relative border border-white/20 p-1 bg-black">
                <div style="width: 100%">
                  <iframe 
                    width="100%" 
                    height="620" 
                    frameborder="0" 
                    scrolling="no" 
                    marginheight="0" 
                    marginwidth="0" 
                    style="border:0" 
                    allowfullscreen="" 
                    src="https://www.google.com/maps/embed/v1/place?key=AIzaSyBVizdQeh3udy11xDc5Ao2YStR2gLc-rfc&amp;q=Bangalore&amp;maptype=roadmap&amp;zoom=11">
                  </iframe>
                </div>
              </div>
            </div>
            
            <!-- Location -->
            <div class="flex items-start space-x-8 p-10 group hover:bg-black transition-all">
              <div class="w-16 h-16 bg-white text-black rounded-none flex items-center justify-center flex-shrink-0 group-hover:bg-[#ff6600] transition-colors shadow-lg">
                <i class="fa-solid fa-location-dot text-3xl"></i>
              </div>
              <div class="flex-1 pt-1">
                <h4 class="text-xs font-black text-gray-500 tracking-[0.2em] mb-2 uppercase">LOCATION</h4>
                <p class="text-xl font-black text-white uppercase tracking-tighter">
                  BANGALORE • MULTIPLE PICKUP POINTS
                </p>
              </div>
            </div>
            
            <!-- Phone Helpline -->
            <div class="flex items-start space-x-8 p-10 group hover:bg-black transition-all">
              <div class="w-16 h-16 bg-white text-black rounded-none flex items-center justify-center flex-shrink-0 group-hover:bg-[#ff6600] transition-colors shadow-lg">
                <i class="fa-solid fa-phone text-3xl"></i>
              </div>
              <div class="flex-1 pt-1">
                <h4 class="text-xs font-black text-gray-500 tracking-[0.2em] mb-2 uppercase">24/7 HELPLINE</h4>
                <a 
                  href="tel:+919113230676" 
                  class="text-2xl font-black text-white hover:text-[#ff6600] transition-colors tracking-tighter block"
                >
                  +91-9113230676
                </a>
                <a 
                  href="tel:+919019450676" 
                  class="text-2xl font-black text-white hover:text-[#ff6600] transition-colors tracking-tighter block mt-1"
                >
                  +91-9019450676
                </a>
              </div>
            </div>
        
            <!-- Email -->
            <div class="flex items-start space-x-8 p-10 group hover:bg-black transition-all">
              <div class="w-16 h-16 bg-white text-black rounded-none flex items-center justify-center flex-shrink-0 group-hover:bg-[#ff6600] transition-colors shadow-lg">
                <i class="fa-solid fa-envelope text-3xl"></i>
              </div>
              <div class="flex-1 pt-1">
                <h4 class="text-xs font-black text-gray-500 tracking-[0.2em] mb-2 uppercase">EMAIL US</h4>
                <a href="mailto:southernmilestouring@gmail.com" class="text-xl md:text-xl font-black text-white hover:text-[#ff6600] transition-colors tracking-tighter break-all">
                  southernmilestouring@gmail.com
                </a>
              </div>
            </div>

          </div>
        </div>

        <!-- Right Side: Quick Actions & Form -->
        <div class="lg:pl-12 space-y-12 p-6 md:p-10">
          
          <!-- Quick Action Buttons Block -->
          <div class="bg-[#0a0a0a] border border-white/10 p-8 rounded-none">
            <h3 class="text-xl font-black text-white mb-8 flex items-center uppercase tracking-tighter">
              <i class="fa-solid fa-bolt text-[#ff6600] mr-4"></i>
              QUICK ACTIONS
            </h3>
            <div class="grid sm:grid-cols-2 gap-0 border border-white/10 divide-x divide-white/10">
              <a href="<?php echo esc_url(home_url('/expeditions')); ?>" class="group flex items-center justify-center space-x-3 p-6 bg-black hover:bg-[#ff6600] transition-all">
                <span class="font-black text-xs tracking-[0.2em] text-white group-hover:text-black uppercase">View Expeditions</span>
              </a>
              <a href="<?php echo esc_url(home_url('/about#team')); ?>" class="group flex items-center justify-center space-x-3 p-6 bg-black hover:bg-[#ff6600] transition-all">
                <span class="font-black text-xs tracking-[0.2em] text-white group-hover:text-black uppercase">Meet The Team</span>
              </a>
            </div>
          </div>

          <!-- Form Callout Container -->
          <div class="bg-white text-black p-8 md:p-14 rounded-none border-4 md:border-8 border-[#ff6600] relative overflow-hidden shadow-[0_0_40px_rgba(255,90,0,0.15)]">
            
            <!-- Diagonal Caution Texture Overlay -->
            <div class="absolute inset-0 bg-[linear-gradient(45deg,#00000008_25%,transparent_25%,transparent_50%,#00000008_50%,#00000008_75%,transparent_75%,transparent)] bg-[size:1rem_1rem] pointer-events-none"></div>

            <div class="relative z-10">
              <h2 class="text-4xl md:text-5xl font-black mb-2 tracking-tighter uppercase">YOUR ENQUIRY</h2>
              <p class="text-xs font-black text-gray-500 mb-10 tracking-[0.2em] uppercase">TELL US YOUR ADVENTURE DREAMS (30 SECONDS)</p>
              
              <!-- Contact Form 7 Shortcode -->
              <?php echo do_shortcode('[contact-form-7 id="9f297ec" title="Contact Form"]'); ?>
              
              <div class="mt-8 text-center text-[10px] font-black text-gray-400 tracking-[0.2em] uppercase border-t border-gray-200 pt-6">
                SECURE FORM • RESPONSE WITHIN 2 HOURS • NO SPAM
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>
  </section>

  <!-- ================= TRUST STATS SECTION ================= -->
  <section class="bg-black py-16 border-t border-white/10 select-none">
    <div class="max-w-7xl mx-auto px-4 text-center">
      
      <h3 class="text-4xl lg:text-7xl font-black text-white mb-12 tracking-tighter uppercase leading-none">
        500+ TOURISTS TRUST US
      </h3>

      <div class="grid grid-cols-2 md:grid-cols-4 gap-0 border border-white/10 divide-x divide-y md:divide-y-0 divide-white/10 bg-[#0a0a0a] shadow-2xl">
        
        <div class="p-10 group hover:bg-black transition-all text-center">
          <div class="text-4xl mb-4 text-[#ff6600] group-hover:scale-110 transition-transform inline-block">
            <i class="fa-solid fa-motorcycle"></i>
          </div>
          <div class="text-xs font-black text-white tracking-[0.3em] uppercase">
            PRO CAPTAINS
          </div>
        </div>

        <div class="p-10 group hover:bg-black transition-all text-center">
          <div class="text-4xl mb-4 text-[#ff6600] group-hover:scale-110 transition-transform inline-block">
            <i class="fa-solid fa-bed"></i>
          </div>
          <div class="text-xs font-black text-white tracking-[0.3em] uppercase">
            LUXURY STAYS
          </div>
        </div>

        <div class="p-10 group hover:bg-black transition-all text-center">
          <div class="text-4xl mb-4 text-[#ff6600] group-hover:scale-110 transition-transform inline-block">
            <i class="fa-solid fa-utensils"></i>
          </div>
          <div class="text-xs font-black text-white tracking-[0.3em] uppercase">
            GOURMET MEALS
          </div>
        </div>

        <div class="p-10 group hover:bg-black transition-all text-center">
          <div class="text-4xl mb-4 text-[#ff6600] group-hover:scale-110 transition-transform inline-block">
            <i class="fa-solid fa-bolt"></i>
          </div>
          <div class="text-xs font-black text-white tracking-[0.3em] uppercase">
            24/7 SUPPORT
          </div>
        </div>

      </div>

      <!-- Footer Callout Text -->
      <p class="mt-12 text-sm font-bold text-gray-500 tracking-widest uppercase">
        FROM WEEKEND WARRIORS TO CORPORATE GROUPS — YOUR PERFECT TOUR AWAITS.
      </p>

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
</style>

<?php get_footer(); ?>