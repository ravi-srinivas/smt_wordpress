<?php 
/**
 * Template Name: Blogs
 */
get_header(); 
?>
<div class="bg-black text-white min-h-screen uppercase tracking-tighter">
  
  <!-- Hero Header -->
  <section class="relative h-[40vh] md:h-[50vh] overflow-hidden bg-black border-b-4 border-[#ff5a00] flex items-center justify-center">
    <div class="absolute inset-0 bg-[radial-gradient(#222_1px,transparent_1px)] [background-size:16px_16px] opacity-30"></div>
    <div class="relative z-10 text-center px-4 max-w-5xl mx-auto">
      <h1 class="text-5xl md:text-7xl lg:text-8xl font-black mb-4 leading-none tracking-tighter">
        OUR MEMORY LANE
      </h1>
      <div class="w-24 h-2 bg-[#ff5a00] mx-auto mb-6"></div>
      <p class="text-xs md:text-sm font-bold tracking-[0.3em] text-gray-400">
        STORIES, ROUTES, AND GEAR KNOWLEDGE FROM THE ROAD
      </p>
    </div>
  </section>

  <!-- Main Content Area -->
  <main class="max-w-7xl mx-auto px-4 py-16">
    
    <?php 
    // Custom query to fetch posts safely without using the default global loop
    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    $blog_args = array(
        'post_type'      => 'post',
        'posts_per_page' => 10,
        'paged'          => $paged
    );
    $blog_query = new WP_Query( $blog_args );

    if ( $blog_query->have_posts() ) : 
    ?>
      
      <!-- Featured Post (First Post) -->
      <?php 
        $count = 0; 
        while ( $blog_query->have_posts() ) : $blog_query->the_post(); $count++;
        if ( $count == 1 ) :
      ?>
        <article class="mb-16 border border-white/10 bg-[#111] group hover:border-[#ff5a00]/50 transition-colors duration-300">
          <div class="grid md:grid-cols-2 gap-0">
            <div class="relative h-[300px] md:h-full min-h-[350px] overflow-hidden">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('large', ['class' => 'w-full h-full object-cover grayscale contrast-125 group-hover:grayscale-0 transition-all duration-700']); ?>
              <?php else : ?>
                <div class="w-full h-full bg-[#222] flex items-center justify-center text-gray-600"><i class="fa-solid fa-motorcycle text-6xl"></i></div>
              <?php endif; ?>
              <span class="absolute top-4 left-4 bg-[#ff5a00] text-black font-black text-xs px-3 py-1">FEATURED EXPEDITION</span>
            </div>
            <div class="p-8 md:p-12 flex flex-col justify-center">
              <div class="flex items-center gap-4 text-xs font-bold text-gray-500 mb-4 tracking-widest">
                <span><?php echo get_the_date(); ?></span>
                <span>•</span>
                <span>BY <?php the_author(); ?></span>
              </div>
              <h2 class="text-3xl md:text-5xl font-black leading-tight mb-4 group-hover:text-[#ff5a00] transition-colors">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
              </h2>
              <p class="text-gray-400 text-sm font-bold tracking-tight normal-case mb-6 line-clamp-3">
                <?php echo wp_strip_all_tags( get_the_excerpt() ); ?>
              </p>
              <div>
                <a href="<?php the_permalink(); ?>" class="inline-flex items-center gap-2 border-b-2 border-[#ff5a00] font-black text-sm pb-1 hover:text-[#ff5a00] transition-colors">
                  READ FULL BLOG <i class="fa-solid fa-arrow-right text-xs"></i>
                </a>
              </div>
            </div>
          </div>
        </article>
      <?php continue; endif; endwhile; $blog_query->rewind_posts(); ?>

      <!-- Standard Post Grid -->
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <?php 
          $grid_count = 0;
          while ( $blog_query->have_posts() ) : $blog_query->the_post(); $grid_count++;
          if ( $grid_count == 1 ) continue; // Skip featured post
        ?>
          <article class="border border-white/10 bg-black group flex flex-col justify-between hover:border-[#ff5a00]/30 transition-colors duration-300">
            <div>
              <div class="relative h-64 overflow-hidden bg-[#111]">
                <?php if ( has_post_thumbnail() ) : ?>
                  <?php the_post_thumbnail('medium_large', ['class' => 'w-full h-full object-cover grayscale contrast-125 group-hover:grayscale-0 transition-all duration-700']); ?>
                <?php else : ?>
                  <div class="w-full h-full bg-[#222] flex items-center justify-center text-gray-700"><i class="fa-solid fa-map-pin text-4xl"></i></div>
                <?php endif; ?>
              </div>
              
              <div class="p-6">
                <div class="text-[10px] font-bold text-gray-500 mb-2 tracking-widest">
                  <?php echo get_the_date(); ?> &nbsp;|&nbsp; IN <?php the_category(', '); ?>
                </div>
                <h3 class="text-2xl font-black mb-4 group-hover:text-[#ff5a00] transition-colors line-clamp-2">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h3>
                <p class="text-gray-400 text-xs font-bold tracking-normal normal-case mb-4 line-clamp-3">
                  <?php echo wp_strip_all_tags( get_the_excerpt() ); ?>
                </p>
              </div>
            </div>

            <div class="p-6 pt-0">
              <a href="<?php the_permalink(); ?>" class="text-xs font-black tracking-widest text-[#ff5a00] flex items-center gap-1 group-hover:gap-3 transition-all">
                READ LOG <i class="fa-solid fa-chevron-right text-[10px]"></i>
              </a>
            </div>
          </article>
        <?php endwhile; ?>
      </div>

      <!-- Core Native Pagination Links -->
      <div class="mt-16 pt-8 border-t border-white/10 flex justify-center font-black tracking-widest text-sm">
        <?php
          echo paginate_links( array(
            'prev_text' => '<i class="fa-solid fa-arrow-left mr-2"></i> PREV',
            'next_text' => 'NEXT <i class="fa-solid fa-arrow-right ml-2"></i>',
            'type'      => 'list',
            'class'     => 'wp-pagination'
          ) );
        ?>
      </div>
    <?php 
    else : 
      echo '<div class="text-center py-20 border border-white/10"><h2 class="text-2xl font-black">NO LOGS FOUND</h2></div>';
    endif; 
    wp_reset_postdata(); // Restores original main loop context
    ?>

  </main>
</div>

<style>
  .wp-pagination ul { display: flex; gap: 1rem; align-items: center; }
  .wp-pagination .page-numbers { padding: 0.5rem 1rem; border: 1px solid rgba(255,255,255,0.1); background-color: black; }
  .wp-pagination .page-numbers.current { background-color: #ff5a00; color: black; border-color: #ff5a00; }
  .wp-pagination .page-numbers:hover:not(.current) { border-color: #ff5a00; color: #ff5a00; }
</style>

<?php get_footer(); ?>
