<?php get_header(); ?>

<div class="bg-black bg-black/40 text-white min-h-screen uppercase tracking-tighter">
  <?php while ( have_posts() ) : the_post(); ?>
    <header class="relative h-[50vh] md:h-[65vh] overflow-hidden bg-black border-b-4 border-[#ff5a00]">
      <div class="absolute inset-0 bg-cover bg-center bg-no-repeat">
        <?php if ( has_post_thumbnail() ) : ?>
          <?php the_post_thumbnail('full', ['class' => 'w-full h-full object-none']); ?>
        <?php endif; ?>
      </div>
    </header>
    <main class="max-w-7xl mx-auto px-4 py-8">
      <div class="text-center">
        <div class="mb-4">
          <span class="bg-[#ff5a00] text-black font-black text-xs px-3 py-1">
            <?php the_category(', '); ?>
          </span>
        </div>
        <h1 class="text-2xl md:text-4xl lg:text-6xl font-black leading-tight mb-6 tracking-tighter">
          <?php the_title(); ?>
        </h1>
        <div class="flex items-center justify-center gap-6 text-xs md:text-sm font-bold tracking-widest text-gray-400 border-t border-b border-white/10 py-3 px-6">
          <span>DATE: <?php echo get_the_date(); ?></span>
          <span>•</span>
          <span>AUTHOR: <?php the_author(); ?></span>
        </div>
      </div>
      <div class="grid lg:grid-cols-12 gap-12 mt-8">
        <article class="lg:col-span-8 border border-white/10 bg-[#0a0a0a] p-6 md:p-12">
          <div class="entry-content text-gray-300 font-bold normal-case text-base md:text-lg tracking-normal leading-relaxed space-y-6">
            <?php the_content(); ?>
          </div>
          <?php if( has_tag() ) : ?>
            <div class="mt-12 pt-6 border-t border-white/10 uppercase tracking-widest text-xs font-black flex flex-wrap gap-2 items-center">
              <span class="text-gray-500"><i class="fa-solid fa-tags"></i> ROUTE TAGS:</span>
              <?php the_tags('<span class="bg-[#111] text-gray-300 border border-white/10 px-3 py-1 hover:border-[#ff5a00] transition-colors">', '</span><span class="bg-[#111] text-gray-300 border border-white/10 px-3 py-1 hover:border-[#ff5a00] transition-colors">', '</span>'); ?>
            </div>
          <?php endif; ?>
        </article>
        <aside class="lg:col-span-4 space-y-8 uppercase">
          <div class="border border-white/10 p-6 bg-black text-center">
            <h4 class="text-sm font-black tracking-widest text-gray-500 mb-4">FINISH READING?</h4>
            <a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="w-full inline-block bg-transparent border-2 border-[#ff5a00] text-[#ff5a00] hover:bg-[#ff5a00] hover:text-black font-black text-xs py-3 tracking-widest transition-all duration-300">
              <i class="fa-solid fa-chevron-left mr-1"></i> BACK TO BLOG LOGS
            </a>
          </div>
          <div class="border border-white/10 p-6 bg-[#0a0a0a] text-center">
            <h4 class="text-xs font-black tracking-widest text-gray-400 mb-4">SHARE THIS LOG</h4>
            <div class="flex justify-center gap-4 text-xl">
              <a href="https://facebook.com<?php the_permalink(); ?>" target="_blank" class="w-12 h-12 border border-white/10 flex items-center justify-center text-gray-400 hover:text-[#ff5a00] hover:border-[#ff5a00] transition-colors"><i class="fa-brands fa-facebook-f"></i></a>
              <a href="https://twitter.com<?php the_permalink(); ?>&text=<?php the_title(); ?>" target="_blank" class="w-12 h-12 border border-white/10 flex items-center justify-center text-gray-400 hover:text-[#ff5a00] hover:border-[#ff5a00] transition-colors"><i class="fa-brands fa-x-twitter"></i></a>
              <a href="https://whatsapp.com<?php the_title(); ?>%20<?php the_permalink(); ?>" target="_blank" class="w-12 h-12 border border-white/10 flex items-center justify-center text-gray-400 hover:text-[#ff5a00] hover:border-[#ff5a00] transition-colors"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
          </div>
        </aside>
      </div>
    </main>
  <?php endwhile; ?>
</div>

<style>
  .entry-content p { margin-bottom: 1.5rem; color: #d1d5db; }
  .entry-content h2, .entry-content h3 { font-size: 1.875rem; font-weight: 900; text-transform: uppercase; letter-spacing: -0.05em; color: white; margin-top: 2rem; margin-bottom: 1rem; border-left: 4px solid #ff5a00; padding-left: 1rem; }
  .entry-content h3 { font-size: 1.5rem; border-left: none; padding-left: 0; color: #ff5a00; }
  .entry-content blockquote { background: #111; border-left: 4px solid #ff5a00; padding: 1.5rem; font-style: italic; margin: 2rem 0; color: #9ca3af; }
  .entry-content a { color: #ff5a00; border-bottom: 1px solid #ff5a00; transition: all 0.2s; }
  .entry-content a:hover { color: white; border-color: white; }
  .entry-content img { border: 1px solid rgba(255,255,255,0.1); margin: 2rem auto; width: 100%; height: auto; }
</style>

<?php get_footer(); ?>
