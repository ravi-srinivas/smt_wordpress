<?php
/**
 * Template Name: Single Expedition Detail
 * Template Post Type: expedition
 */

get_header();

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
    
    // Format dates
    $display_start = $start_date ? date("M d", strtotime(str_replace('/', '-', $start_date))) : 'TBD';
    $display_end   = $end_date ? date("M d", strtotime(str_replace('/', '-', $end_date))) : 'TBD';
    $current_year  = $start_date ? date("Y", strtotime(str_replace('/', '-', $start_date))) : '';
    $display_year  = $current_year ? ', ' . $current_year : '';

    $post_tags = get_the_tags($current_ride_id);
    $terrain_type = 'default';

    if ($post_tags) {
      foreach ($post_tags as $tag) {
        $slug = strtolower($tag->slug);
        
        if ($post_tags) {
          foreach ($post_tags as $tag) {
            $slug = strtolower($tag->slug);
            if (in_array($slug, ['mountains'])) {
              $terrain_type = 'mountains';
              break;
            } elseif (in_array($slug, ['beaches'])) {
              $terrain_type = 'coastal';
              break;
            } elseif (in_array($slug, ['city'])) {
              $terrain_type = 'city';
              break;
            } elseif (in_array($slug, ['desert'])) {
              $terrain_type = 'desert';
              break;
            } elseif (in_array($slug, ['forest'])) {
              $terrain_type = 'forest';
              break;
            }
          }
        }

        // Generate deterministic seeds based on Post ID so each page is uniquely organic
        $seed_base = ($current_ride_id > 0) ? $current_ride_id : 42;
        $seed1     = ($seed_base * 17) % 99 + 1;
        $seed2     = ($seed_base * 31) % 99 + 1;
      }
    }
?>

<main class="relative bg-[#0a0a0a] text-white min-h-screen py-8 px-4 md:px-8 overflow-hidden">
  <!-- TOPOGRAPHIC VECTOR BACKGROUND (FULL PAGE TILING) -->
  <div class="absolute inset-0 pointer-events-none z-0 opacity-20 overflow-hidden" aria-hidden="true">
    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" class="w-full h-full">
      <defs>
        <!-- SVG Turbulence Filter for organic landscape distortion -->
        <filter id="topo-warp-<?php echo $seed_base; ?>" x="-20%" y="-20%" width="140%" height="140%">
          <feTurbulence type="fractalNoise" baseFrequency="0.0035" numOctaves="3" seed="<?php echo $seed1; ?>" result="noise" />
          <feDisplacementMap in="SourceGraphic" in2="noise" scale="<?php echo ($terrain_type === 'city') ? '35' : '120'; ?>" xChannelSelector="R" yChannelSelector="G" />
        </filter>

        <!-- Smooth subtle drift animation -->
        <style>
          @keyframes driftTopo {
            0% { transform: scale(1); }
            50% { transform: scale(1.015); }
            100% { transform: scale(1); }
          }
          .topo-animated-layer {
            animation: driftTopo 20s ease-in-out infinite;
            transform-origin: center center;
          }
        </style>

        <!-- REPEATING FULL-PAGE PATTERN DEFINITION (800x800 Grid Tile) -->
        <pattern id="topo-pattern-<?php echo $seed_base; ?>" x="0" y="0" width="800" height="800" patternUnits="userSpaceOnUse">
          <g filter="url(#topo-warp-<?php echo $seed_base; ?>)" class="topo-animated-layer" stroke="#ffffff" stroke-width="1.2" fill="none" opacity="0.75">

            <?php if ($terrain_type === 'mountains') : ?>
              <!-- 1. MOUNTAINS / GHATS -->
              <path d="M 220,180 C 280,120 400,140 420,220 C 440,300 320,380 240,350 C 160,320 150,230 220,180 Z" stroke="#ff5a00" stroke-width="2" />
              <path d="M 190,150 C 290,80 430,110 460,230 C 480,330 330,410 220,380 C 120,350 110,210 190,150 Z" />
              <path d="M 160,120 C 310,50 460,80 500,240 C 520,360 350,440 200,410 C 90,370 70,180 160,120 Z" />
              <path d="M 130,90 C 330,20 490,50 540,250 C 560,390 370,470 180,440 C 60,400 40,150 130,90 Z" />
              <path d="M 100,60 C 350,-10 520,20 580,260 C 600,420 390,500 160,470 C 30,420 10,120 100,60 Z" />
              
              <path d="M 620,480 C 680,430 760,450 780,510 C 800,570 720,630 650,610 C 580,590 570,520 620,480 Z" stroke="#ff5a00" />
              <path d="M 590,450 C 690,390 790,420 820,520 C 840,600 740,660 640,640 C 550,610 530,490 590,450 Z" />
              <path d="M 560,420 C 710,350 820,390 850,530 C 870,630 760,700 620,670 C 510,630 490,460 560,420 Z" />

            <?php elseif ($terrain_type === 'coastal') : ?>
              <!-- 2. COASTAL / BEACHES -->
              <path d="M -100,80 C 250,320 450,-80 950,180 C 1150,280 1250,580 1450,480" stroke="#ff5a00" stroke-width="2" />
              <path d="M -100,120 C 250,360 450,-40 950,220 C 1150,320 1250,620 1450,520" />
              <path d="M -100,160 C 250,400 450,0 950,260 C 1150,360 1250,660 1450,560" />
              <path d="M -100,200 C 250,440 450,40 950,300 C 1150,400 1250,700 1450,600" stroke="#ff5a00" />
              <path d="M -100,240 C 250,480 450,80 950,340 C 1150,440 1250,740 1450,640" />
              <path d="M -100,280 C 250,520 450,120 950,380 C 1150,480 1250,780 1450,680" />
              <path d="M -100,320 C 250,560 450,160 950,420 C 1150,520 1250,820 1450,720" />

            <?php elseif ($terrain_type === 'city') : ?>
              <!-- 3. CITY / URBAN -->
              <path d="M 0,150 L 800,150 M 0,380 L 800,380 M 0,610 L 800,610" stroke="#ff5a00" stroke-width="2" />
              <path d="M 200,0 L 200,800 M 500,0 L 500,800 M 750,0 L 750,800" stroke="#ff5a00" stroke-width="2" />
              <path d="M 0,70 L 800,70 M 0,220 L 800,220 M 0,300 L 800,300 M 0,460 L 800,460 M 0,530 L 800,530" />
              <path d="M 80,0 L 80,800 M 310,0 L 310,800 M 400,0 L 400,800 M 620,0 L 620,800 M 680,0 L 680,800" />
              <path d="M 0,800 L 800,0" stroke="#ff5a00" stroke-width="1.5" />

            <?php elseif ($terrain_type === 'desert') : ?>
              <!-- 4. DESERT / DUNES -->
              <path d="M 0,120 C 250,280 550,40 800,220" stroke="#ff5a00" stroke-width="2" />
              <path d="M 0,165 C 250,325 550,85 800,265" />
              <path d="M 0,210 C 250,370 550,130 800,310" />
              <path d="M 0,330 C 250,520 650,190 800,430" stroke="#ff5a00" />
              <path d="M 0,375 C 250,565 650,235 800,475" />
              <path d="M 0,420 C 250,610 650,280 800,520" />
              <path d="M 0,540 C 300,720 700,380 800,620" />

            <?php elseif ($terrain_type === 'forest') : ?>
              <!-- 5. FOREST / JUNGLE -->
              <path d="M 250,200 C 290,160 360,170 380,220 C 400,270 330,310 270,300 C 220,290 220,230 250,200 Z" stroke="#ff5a00" />
              <path d="M 220,170 C 310,120 400,130 430,220 C 450,290 360,350 280,330 C 200,310 180,210 220,170 Z" />
              <path d="M 190,140 C 320,80 430,100 470,220 C 500,320 380,390 280,360 C 170,330 150,180 190,140 Z" />
              
              <path d="M 580,420 C 630,380 720,400 740,460 C 760,520 680,570 610,550 C 550,530 540,450 580,420 Z" stroke="#ff5a00" />
              <path d="M 540,380 C 620,320 740,350 780,450 C 800,540 690,610 600,580 C 500,550 480,420 540,380 Z" />
              <path d="M 500,340 C 610,260 770,300 820,440 C 850,570 710,660 580,620 C 450,580 430,390 500,340 Z" />

            <?php else : ?>
              <!-- 6. DEFAULT -->
              <circle cx="400" cy="400" r="90" stroke="#ff5a00" stroke-width="2" />
              <circle cx="400" cy="400" r="170" />
              <circle cx="400" cy="400" r="250" stroke="#ff5a00" />
              <circle cx="400" cy="400" r="330" />
              <circle cx="400" cy="400" r="410" />
              <circle cx="400" cy="400" r="490" />
              <path d="M 400,0 L 400,800 M 0,400 L 800,400" stroke="#ff5a00" stroke-width="1" opacity="0.4" stroke-dasharray="6,6" />
            <?php endif; ?>

          </g>
        </pattern>
      </defs>

      <!-- FULL SCREEN RECTANGLE FILLING 100% WIDTH AND 100% HEIGHT -->
      <rect width="100%" height="100%" fill="url(#topo-pattern-<?php echo $seed_base; ?>)" />
    </svg>
  </div>

  <div class="relative z-10 max-w-5xl mx-auto">
    <div class="mb-8">
      <a href="javascript:history.back()" class="text-xs text-gray-500 hover:text-[#ff5a00] tracking-widest font-black transition-colors uppercase flex items-center gap-2">
        <span>←</span> BACK TO EXPEDITIONS
      </a>
    </div>

    <section class="relative mb-8 bg-black border-b-4 border-[#ff5a00] group shadow-2xl"> 
      <div class="w-full bg-contain bg-center bg-no-repeat aspect-video" 
        style="background-image: url('<?php echo esc_url($image_url); ?>');">
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
        <div class="sticky top-8 bg-[#0f0f0f]/90 backdrop-blur-md border border-white/5 p-8 flex flex-col space-y-8 shadow-2xl">
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
                <li class="flex items-center uppercase"><i class="fas fa-motorcycle w-4 h-4 mr-4 text-[#ff5a00]"></i> Tour Captain</li>
                <li class="flex items-center uppercase"><i class="fas fa-bed w-4 h-4 mr-4 text-[#ff5a00]"></i> Premium Stays</li>
                <li class="flex items-center uppercase"><i class="fas fa-route w-4 h-4 mr-4 text-[#ff5a00]"></i> Curated Routes</li>
                <li class="flex items-center uppercase"><i class="fas fa-utensils w-4 h-4 mr-4 text-[#ff5a00]"></i> Breakfast & Dinner</li>
                <li class="flex items-center uppercase"><i class="fas fa-truck-pickup w-4 h-4 mr-4 text-[#ff5a00]"></i> Backup Vehicle</li>
                <li class="flex items-center uppercase"><i class="fas fa-briefcase-medical w-4 h-4 mr-4 text-[#ff5a00]"></i> Medical Kit & ERT</li>
                <li class="flex items-center uppercase"><i class="fas fa-wrench w-4 h-4 mr-4 text-[#ff5a00]"></i> On Tour Technician</li>
                <li class="flex items-center uppercase"><i class="fas fa-video w-4 h-4 mr-4 text-[#ff5a00]"></i> In-House Media</li>
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
                <span class="text-[9px] text-gray-500 tracking-widest font-bold uppercase">PER TOURER</span>
                <?php else: ?>
                <span class="text-3xl font-black tracking-tighter text-white">Upcoming</span>
                <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="pt-2">
            <?php if ($ride_link) : ?>
            <a href="<?php echo esc_url($ride_link); ?>" target="_blank" class="inline-block w-full">
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