<?php
/**
 * Template Name: Single Expedition Detail
 * Template Post Type: expedition
 */

get_header();

// Setup loop
if (have_posts()) :
  while (have_posts()) : the_post();
    
    $current_ride_id = get_the_ID();
    $image_url       = get_the_post_thumbnail_url($current_ride_id, 'full');
    
    // Fetch custom ACF meta fields
    $start_date   = get_field('ride_start_date', $current_ride_id); 
    $end_date     = get_field('ride_end_date', $current_ride_id);
    $distance_kms = get_field('ride_distance', $current_ride_id);
    $ride_price   = get_field('ride_price', $current_ride_id);
    $ride_link    = get_field('ride_form_link', $current_ride_id); 
    
    // Format dates cleanly
    $display_start = $start_date ? date("M d", strtotime(str_replace('/', '-', $start_date))) : 'TBD';
    $display_end   = $end_date ? date("M d", strtotime(str_replace('/', '-', $end_date))) : 'TBD';
    $current_year  = $start_date ? date("Y", strtotime(str_replace('/', '-', $start_date))) : '';
    $display_year  = $current_year ? ', ' . $current_year : '';
?>

<main class="bg-[#0a0a0a] text-white min-h-screen py-8 px-4 md:px-8">
  <div class="max-w-5xl mx-auto">
    
    <!-- Breadcrumb / Back Link -->
    <div class="mb-8">
      <a href="javascript:history.back()" class="text-xs text-gray-500 hover:text-[#ff5a00] tracking-widest font-black transition-colors uppercase flex items-center gap-2">
        <span>←</span> BACK TO EXPEDITIONS
      </a>
    </div>

    <section class="relative mb-8 bg-black border-b-4 border-[#ff5a00] group"> 
      <div class="w-full bg-contain bg-center bg-no-repeat aspect-video" 
        style="background-image: url('<?php echo get_the_post_thumbnail_url($current_ride_id, 'full'); ?>');">
      </div> 
    </section>

    <div class="grid lg:grid-cols-3 gap-12">
      <div class="lg:col-span-2 space-y-8">
        <h1 class="text-4xl md:text-5xl font-black tracking-tighter leading-tight text-white uppercase">
          <?php the_title(); ?>
        </h1>
        <div class="prose prose-invert max-w-none text-gray-400 text-sm leading-relaxed space-y-4">
          <?php the_content(); ?>
        </div>
      </div>

      <div class="lg:col-span-1">
        <div class="sticky top-8 bg-[#0f0f0f] border border-white/5 p-8 flex flex-col space-y-8">
          <div>
            <span class="text-[10px] font-black tracking-widest text-[#ff5a00] uppercase block mb-1">EXPEDITION DETAILS</span>
            <div class="h-[2px] w-12 bg-[#ff5a00]"></div>
          </div>
          <div class="space-y-6">
            <div class="flex items-start gap-4">
              <span class="text-[#ff5a00] text-lg mt-1"><i class="fas fa-calendar-alt"></i></span>
              <div>
                <h4 class="text-[10px] text-gray-500 tracking-widest font-black uppercase mb-1">DATES</h4>
                <?php if($display_start && $display_end): ?>
                <p class="text-sm font-bold tracking-tight text-white">
                  <?php echo esc_html($display_start . ' to ' . $display_end . $display_year); ?>
                </p>
                <?php else: ?>
                <p class="text-sm font-bold tracking-tight text-white">
                  <?php echo "TBD"; ?>
                </p>
                <?php endif; ?>
              </div>
            </div>
            <div class="flex items-start gap-4">
              <span class="text-[#ff5a00] text-lg mt-1"><i class="fas fa-map-marker-alt"></i></span>
              <div>
                <h4 class="text-[10px] text-gray-500 tracking-widest font-black uppercase mb-1">TOTAL DISTANCE</h4>
                <p class="text-sm font-bold tracking-tight text-white">
                  <?php echo $distance_kms ? esc_html($distance_kms) : '0'; ?> KMS
                </p>
              </div>
            </div>
          </div>
          <div class="space-y-6">
            <div class="pt-6 border-t border-white/10 flex flex-col">
              <div class="mb-6">
                <span class="text-[10px] font-black tracking-widest text-[#ff5a00] uppercase block mb-1">WHAT'S INCLUDED</span>
                <div class="h-[2px] w-12 bg-[#ff5a00]"></div>
              </div>
              <ul class="space-y-4 text-xs font-bold tracking-widest text-gray-400">
                <li class="flex items-center uppercase">
                  <i class="fas fa-motorcycle w-4 h-4 mr-4 text-[#ff5a00]"></i> 
                  Tour Captain
                </li>
                <li class="flex items-center uppercase">
                  <i class="fas fa-bed w-4 h-4 mr-4 text-[#ff5a00]"></i> 
                  Premium Stays
                </li>
                <li class="flex items-center uppercase">
                  <i class="fas fa-route w-4 h-4 mr-4 text-[#ff5a00]"></i> 
                  Curated Routes
                </li>
                <li class="flex items-center uppercase">
                  <i class="fas fa-utensils w-4 h-4 mr-4 text-[#ff5a00]"></i> 
                  Breakfast & Dinner
                </li>
                <li class="flex items-center uppercase">
                  <i class="fas fa-truck-pickup w-4 h-4 mr-4 text-[#ff5a00]"></i> 
                  Backup Vehicle
                </li>
                <li class="flex items-center uppercase">
                  <i class="fas fa-briefcase-medical w-4 h-4 mr-4 text-[#ff5a00]"></i> 
                  Medical Kit & ERT
                </li>
                <li class="flex items-center uppercase">
                  <i class="fas fa-wrench w-4 h-4 mr-4 text-[#ff5a00]"></i> 
                  On Tour Technician
                </li>
                <li class="flex items-center uppercase">
                  <i class="fas fa-video w-4 h-4 mr-4 text-[#ff5a00]"></i> 
                  In-House Media
                </li>
              </ul>
            </div>
          </div>
          <div class="space-y-6">
            <div class="pt-6 border-t border-white/10 flex flex-col">
              <div class="mb-6">
                <span class="text-[10px] font-black tracking-widest text-[#ff5a00] uppercase block mb-1">INVESTMENT</span>
                <div class="h-[2px] w-12 bg-[#ff5a00]"></div>
              </div>
              <div class="flex items-baseline gap-2">
                <?php if($ride_price) : ?>
                <span class="text-3xl font-black tracking-tighter text-white">
                  <?php echo esc_html($ride_price); ?>
                </span>
                <span class="text-[9px] text-gray-500 tracking-widest font-bold uppercase">
                  PER TOURER
                </span>
                <?php else: ?>
                <span class="text-3xl font-black tracking-tighter text-white">
                  <?php echo 'Upcoming'; ?>
                </span>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="pt-2">
            <?php if ($ride_link) : ?>
            <a href="<?php echo esc_url($ride_link); ?>" target="_blank" class="inline-block">
              <button class="w-full bg-[#ff5a00] hover:bg-white text-black py-4 text-xs font-black tracking-widest transition-all flex items-center justify-center gap-2 uppercase">
                <span>BOOK THIS EXPEDITION</span>
                <span>→</span>
              </button>
            </a>
            <?php else : ?>
            <div class="w-full border border-white/20 text-white/40 py-4 text-xs font-black tracking-widest text-center uppercase cursor-not-allowed select-none">
              OPENS SOON
            </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
  endwhile;
endif;

get_footer();
