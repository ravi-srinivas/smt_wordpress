<?php 
  /*
  Template Name: Contact Template
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
            Plan Your Route
          </h1>
          <div class="w-24 h-2 bg-[#ff5a00] mb-8"></div>
          <p class="text-sm md:text-lg font-bold tracking-[0.3em] max-w-2xl mx-auto text-gray-300 leading-relaxed">
            Drop us a message and we'll get back to you soon!
          </p>
        </div>
        <div class="absolute bottom-6 right-6 hidden md:block border border-white/20 px-4 py-2 text-[10px] font-black tracking-widest text-white/40 backdrop-blur-sm">
          SOUTHERN MILES TOURING / EST 2026
        </div>
      </section>
      
      <section class="text-white py-20 border-y border-white/10 uppercase tracking-tighter">
        <div class="max-w-7xl mx-auto px-4 space-y-20">
          <div class="text-center bg-[#0a0a0a] border border-white/10 p-12 lg:p-24 relative overflow-hidden">
            <div class="inline-flex items-center bg-[#ff5a00] text-black px-8 py-4 rounded-none text-xs font-black mb-12 tracking-[0.3em] uppercase">
              RESPONSE WITHIN 2 HOURS
            </div>
            <h1 class="text-5xl lg:text-7xl font-black text-white mb-8 tracking-tighter leading-[0.8]">
              Plan Your Adventure <br /> With Us
            </h1>
            <p class="text-sm md:text-lg font-bold text-gray-500 max-w-2xl mx-auto tracking-widest uppercase">
              READY TO CONQUER INDIA'S ROADS? <br/> OUR RIDE CAPTAINS ARE <span class="text-[#ff5a00]">STANDING BY.</span>
            </p>
          </div>

          <div class="grid lg:grid-cols-2 gap-0 border border-white/10 divide-y lg:divide-y-0 lg:divide-x divide-white/10">
            <div class="space-y-0 bg-[#0a0a0a]">
              <div class="p-10 border-b border-white/10">
                <h2 class="text-3xl font-black text-white flex items-center tracking-tighter uppercase">
                  <i class="fas fa-map-marker-alt text-[#ff5a00] mr-4"></i>
                  BASE CAMP HQ
                </h2>
              </div>
              <div class="divide-y divide-white/10">
                <div class="maps flex items-start space-x-8 p-10 group hover:bg-black transition-all">
                  <div class="flex-1">
                    <div style="width: 100%">
                      <iframe 
                        width="100%" 
                        height="450" 
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
                
                <div class="flex items-start space-x-8 p-10 group hover:bg-black transition-all">
                  <div class="w-16 h-16 bg-white text-black rounded-none flex items-center justify-center flex-shrink-0 group-hover:bg-[#ff5a00] transition-colors">
                    <i class="fa-solid fa-location-dot text-3xl"></i>
                  </div>
                  <div class="flex-1 pt-1">
                    <h4 class="text-xs font-black text-gray-500 tracking-[0.2em] mb-2 uppercase">LOCATION</h4>
                    <p class="text-2xl font-black text-white uppercase tracking-tighter">
                      BANGALORE • MULTIPLE PICKUP POINTS
                    </p>
                  </div>
                </div>
                
                <div class="flex items-start space-x-8 p-10 group hover:bg-black transition-all">
                  <div class="w-16 h-16 bg-white text-black rounded-none flex items-center justify-center flex-shrink-0 group-hover:bg-[#ff5a00] transition-colors">
                    <i class="fa-solid fa-phone text-3xl"></i>
                  </div>
                  <div class="flex-1 pt-1">
                    <h4 class="text-xs font-black text-gray-500 tracking-[0.2em] mb-2 uppercase">24/7 HELPLINE</h4>
                    <a 
                      href="tel:+919113230676" 
                      class="text-3xl font-black text-white hover:text-[#ff5a00] transition-colors tracking-tighter block"
                    >
                      +91-9113230676
                    </a>
                    <a 
                      href="tel:+919019450676" 
                      class="text-3xl font-black text-white hover:text-[#ff5a00] transition-colors tracking-tighter block"
                    >
                      +91-9019450676
                    </a>
                  </div>
                </div>
            
                <div class="flex items-start space-x-8 p-10 group hover:bg-black transition-all">
                  <div class="w-16 h-16 bg-white text-black rounded-none flex items-center justify-center flex-shrink-0 group-hover:bg-[#ff5a00] transition-colors">
                    <i class="fa-solid fa-envelope text-3xl"></i>
                  </div>
                  <div class="flex-1 pt-1">
                    <h4 class="text-xs font-black text-gray-500 tracking-[0.2em] mb-2 uppercase">EMAIL US</h4>
                    <a href="mailto:southernmilestouring@gmail.com" class="text-2xl font-black text-white hover:text-[#ff5a00] transition-colors tracking-tighter">
                      southernmilestouring@gmail.com
                    </a>
                  </div>
                </div>
              </div>
            </div>

            <div class="lg:pl-12 space-y-12">
              <div class="bg-[#0a0a0a] border border-white/10 p-10 rounded-none">
                <h3 class="text-xl font-black text-white mb-8 flex items-center uppercase tracking-tighter">
                  <i class="fa-solid fa-bolt text-[#ff5a00] mr-4"></i>
                  QUICK ACTIONS
                </h3>
                <div class="grid sm:grid-cols-2 gap-0 border border-white/10 divide-x divide-white/10">
                  <a href="<?php echo esc_url(home_url('/expeditions')); ?>" class="group flex items-center justify-center space-x-3 p-6 bg-black hover:bg-[#ff5a00] transition-all">
                    <span class="font-black text-xs tracking-[0.2em] text-white group-hover:text-black uppercase">View Expeditions</span>
                  </a>
                  <a href="<?php echo esc_url(home_url('/team')); ?>" class="group flex items-center justify-center space-x-3 p-6 bg-black hover:bg-[#ff5a00] transition-all">
                    <span class="font-black text-xs tracking-[0.2em] text-white group-hover:text-black uppercase">Meet The Team</span>
                  </a>
                </div>
              </div>

              
              <div class="bg-white text-black p-10 lg:p-16 rounded-none border-8 border-[#ff5a00] shadow-none">
                <h2 class="text-5xl font-black mb-2 tracking-tighter uppercase">Your ENQUIRY</h2>
                <p class="text-xs font-black text-gray-500 mb-12 tracking-[0.2em] uppercase">TELL US YOUR ADVENTURE DREAMS (30 SECONDS)</p>
                <?php echo do_shortcode('[contact-form-7 id="9f297ec" title="Contact Form"]'); ?>
                <div class="mt-8 text-center text-[10px] font-black text-gray-400 tracking-[0.2em] uppercase">
                  SECURE FORM • RESPONSE WITHIN 2 HOURS • NO SPAM
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <section class="bg-black py-16 border-t border-white/10">
        <div class="max-w-7xl mx-auto px-4 text-center">
          <h3 class="text-4xl lg:text-7xl font-black text-white mb-12 tracking-tighter uppercase leading-none">
            500+ TOURISTS TRUST US
          </h3>

          <div class="grid grid-cols-2 md:grid-cols-4 gap-4 md:gap-0 divide-white/10 md:divide-x border border-white/10">
            <div class="p-10 bg-[#0a0a0a] group hover:bg-black transition-all">
              <div class="text-4xl mb-4">
                <i class="fa-solid fa-motorcycle"></i>
              </div>
              <div class="text-xs font-black text-[#ff5a00] tracking-[0.3em] uppercase">
                PRO CAPTAINS
              </div>
            </div>

            <div class="p-10 bg-[#0a0a0a] group hover:bg-black transition-all">
              <div class="text-4xl mb-4">
                <i class="fa-solid fa-bed"></i>
              </div>
              <div class="text-xs font-black text-[#ff5a00] tracking-[0.3em] uppercase">
                LUXURY STAYS
              </div>
            </div>

            <div class="p-10 bg-[#0a0a0a] group hover:bg-black transition-all">
              <div class="text-4xl mb-4">
                <i class="fa-solid fa-utensils"></i>
              </div>
              <div class="text-xs font-black text-[#ff5a00] tracking-[0.3em] uppercase">
                GOURMET MEALS
              </div>
            </div>

            <div class="p-10 bg-[#0a0a0a] group hover:bg-black transition-all">
              <div class="text-4xl mb-4">
                <i class="fa-solid fa-bolt"></i>
              </div>
              <div class="text-xs font-black text-[#ff5a00] tracking-[0.3em] uppercase">
                24/7 SUPPORT
              </div>
            </div>
          </div>

          <!-- Footer Text -->
          <p class="mt-12 text-sm font-bold text-gray-500 tracking-widest uppercase">
            FROM WEEKEND WARRIORS TO CORPORATE GROUPS — YOUR PERFECT TOUR AWAITS.
          </p>
        </div>
      </section>
    </div>
  
<?php get_footer(); ?>