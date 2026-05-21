<!-- FOOTER -->
<footer class="bg-black text-white border-t border-white/10 uppercase tracking-tight overflow-hidden">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 pt-16">
    <div class="grid grid-cols-1 md:grid-cols-12 gap-12 mb-16">
      <div class="md:col-span-4">
        <a href="/" class="flex items-center gap-4 mb-6 group">
          <img
            src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
            alt="Southern Miles Logo"
            class="h-16 w-auto object-contain"
          />
          <div>
            <h2 class="text-3xl font-black text-white leading-none">
              Southern Miles
            </h2>

            <p class="text-sm text-[#ff5a00] font-bold tracking-[0.25em] mt-1">
              TOURING
            </p>
          </div>
        </a>
        <p class="text-gray-400 leading-relaxed mb-8 max-w-md font-bold text-xs">
          Epic motorcycle adventures through South India's ghat roads,
          coffee estates & coastal highways.
          <br><br>
          <strong class="text-white">
            Pro captains • Luxury stays • All meals included
          </strong>
        </p>
        <div class="flex space-x-4">
          <a
            href="https://instagram.com/southernmiles.in"
            target="_blank"
            rel="noreferrer"
            class="p-3 border border-white/10 hover:border-[#ff5a00] hover:text-[#ff5a00] transition-all"
          >
            <i class="fa-brands fa-instagram text-2xl"></i>
          </a>
          <a
            href="https://youtube.com/@southernmilestouring"
            target="_blank"
            rel="noreferrer"
            class="p-3 border border-white/10 hover:border-[#ff5a00] hover:text-[#ff5a00] transition-all"
          >
            <i class="fa-brands fa-youtube text-2xl"></i>
          </a>
        </div>
      </div>

      <!-- QUICK LINKS -->
      <div class="md:col-span-4">
        <h4 class="text-xl font-black mb-8 flex items-center gap-3">
          <span class="text-[#ff5a00] text-2xl">📍</span>
          Quick Links
        </h4>
        <div class="space-y-3">
          <a
            href="<?php echo esc_url(home_url('/rides')); ?>"
            class="group flex items-center gap-4 p-3 border-b border-transparent hover:border-white/10 transition-all"
          >
            <span class="w-2 h-2 bg-[#ff5a00]"></span>
            <span class="text-gray-400 group-hover:text-white font-bold text-sm">
              Upcoming Rides
            </span>
          </a>
          <a
            href="<?php echo esc_url(home_url('/team')); ?>"
            class="group flex items-center gap-4 p-3 border-b border-transparent hover:border-white/10 transition-all"
          >
            <span class="w-2 h-2 bg-[#ff5a00]"></span>
            <span class="text-gray-400 group-hover:text-white font-bold text-sm">
              Meet Captains
            </span>
          </a>
          <a
            href="<?php echo esc_url(home_url('/contact')); ?>"
            class="group flex items-center gap-4 p-3 border-b border-transparent hover:border-white/10 transition-all"
          >
            <span class="w-2 h-2 bg-[#ff5a00]"></span>
            <span class="text-gray-400 group-hover:text-white font-bold text-sm">
              Get Custom Quote
            </span>
          </a>
        </div>
      </div>

      <!-- CONTACT -->
      <div class="md:col-span-4">
        <h4 class="text-xl font-black mb-8 flex items-center gap-3">
          <span class="text-[#ff5a00] text-2xl">☎</span>
          Book Your Adventure
        </h4>
        <div class="space-y-5">
          <div class="bg-[#111] border border-white/5 p-5 flex gap-4">
            <div class="text-[#ff5a00] text-xl">
              <i class="fa-solid fa-earth-asia"></i>
            </div>
            <div>
              <p class="font-bold text-gray-100">
                Bangalore Basecamp
              </p>
              <p class="text-[10px] text-gray-500 mt-1">
                Flagoff points across Bangalore
              </p>
            </div>
          </div>
          <a
            href="https://wa.me/919999999999"
            class="group block bg-white hover:bg-[#ff5a00] transition-all p-5"
          >
            <p class="font-black text-lg text-black group-hover:text-white">
              +91 99999 99999
            </p>
            <p class="text-[10px] text-black/60 group-hover:text-white/70 tracking-widest mt-1">
              24/7 Ride Support
            </p>
          </a>
          <a
            href="mailto:southernmilestouring@gmail.com"
            class="block border border-white/20 hover:border-[#ff5a00] hover:text-[#ff5a00] transition-all p-5"
          >
            <p class="font-bold text-lg">
              Drop us an email
            </p>
            <p class="text-[10px] text-gray-500 tracking-widest mt-1">
              Custom itineraries
            </p>
          </a>
        </div>
      </div>
    </div>

    <!-- CTA SECTION -->
    <div class="bg-[#ff5a00] px-6 py-10 md:px-12 mb-12">
      <div class="flex flex-col lg:flex-row items-center justify-between gap-8">
        <div class="text-center lg:text-left">
          <div class="flex flex-col sm:flex-row items-center gap-4 mb-4">
            <span class="text-4xl text-black">
              <i class="fa-solid fa-people-line"></i>
            </span>
            <h3 class="text-2xl md:text-3xl font-black text-black leading-tight">
              One tribe, infinite experiences
            </h3>
          </div>
          <p class="text-black/80 text-sm font-bold tracking-[0.2em]">
            Lifetime access • Pro ride captains • Exclusive events
          </p>
        </div>
        <button
          onclick="openRegisterModal()"
          class="bg-black text-white hover:bg-white hover:text-black transition-all duration-300 px-10 py-5 text-sm md:text-base font-black tracking-widest whitespace-nowrap"
        >
          JOIN US NOW
        </button>
      </div>
    </div>

    <!-- COPYRIGHT -->
    <div class="border-t border-white/10 py-8 text-center">
      <p class="text-[10px] text-gray-600 font-bold tracking-[0.25em] leading-loose">
        © 2026 SOUTHERN MILES TOURING.
        CRAFTING EPIC RIDES ACROSS SOUTH INDIA.
        ALL RIGHTS RESERVED.
      </p>
    </div>
  </div>
</footer>
<?php get_template_part('template-parts/register-modal'); ?>

<?php wp_footer(); ?>
</body>
</html>