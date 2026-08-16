<?php 
  /*
  Template Name: Gallery Template
  */
  get_header();

  $page_id = get_the_ID();
  $page_post = get_post($page_id);
  $gallery_items = array();

  if ($page_post && !empty($page_post->post_content)) {
    $content = $page_post->post_content;

    // Regular Expression to find all image URLs (including i.ibb.co links) in the content area
    $pattern = '/https?:\/\/[^\s\'"<>]+\.(?:jpg|jpeg|png|webp|gif)/i';
    preg_match_all($pattern, $content, $matches);

    if (!empty($matches[0])) {
      // Remove duplicate URLs if any exist
      $unique_urls = array_unique($matches[0]);
      $id_counter = 1;

      foreach ($unique_urls as $url) {
        // Extract filename from URL (e.g. "image-841.jpg" -> "Image 841")
        $filename = pathinfo(parse_url($url, PHP_URL_PATH), PATHINFO_FILENAME);
        $clean_title = ucwords(str_replace(array('-', '_'), ' ', $filename));

        $gallery_items[] = array(
          'id'      => $id_counter,
          'title'   => esc_html($clean_title),
          'caption' => esc_html($clean_title),
          'image'   => esc_url($url)
        );
        $id_counter++;
      }
    }
  }
?>

    <div class="bg-black">
      <section class="relative w-full h-screen overflow-hidden select-none font-sans text-white flex items-center justify-center">
        <!-- HUD Control Bar -->
        <div class="absolute top-8 left-1/2 -translate-x-1/2 z-20 flex items-center gap-4 bg-zinc-900/90 backdrop-blur-md px-6 py-2.5 border border-zinc-800 text-xs font-open-sans">
          <button id="btn-prev" class="px-3 py-1 bg-black hover:bg-[#ff6600] hover:text-black font-bold uppercase transition">&lt; Prev</button>
          <button id="btn-next" class="px-3 py-1 bg-black hover:bg-[#ff6600] hover:text-black font-bold uppercase transition">Next &gt;</button>
        </div>

        <!-- HEADER & TITLE OVERLAY -->
        <div class="absolute z-20 flex flex-col items-center justify-center text-center p-8 max-w-xl pointer-events-none backdrop-blur-sm bg-black/30 rounded-2xl border border-white/5 shadow-2xl">
          <div class="flex items-center gap-2 mb-1">
            <span><i class="fas fa-images text-[#ff6600]"></i></span>
            <span class="text-xs font-open-sans uppercase tracking-widest text-[#ff6600]"><?php echo the_field('gallery_folder_name'); ?></span>
          </div>
          
          <h1 class="text-4xl md:text-6xl sm:text-5xl font-black uppercase tracking-wider text-white drop-shadow-md">
            <?php the_title(); ?>
          </h1>
          
          <p class="text-xs sm:text-sm text-white mt-2 max-w-md font-open-sans drop-shadow-md">
            Drag horizontal/vertical to rotate wheel • Scroll to zoom<br/>Click photo to view details
          </p>
        </div>

        <!-- Three.js Canvas Mount Point -->
        <div id="three-gallery-canvas" class="w-full h-full cursor-grab active:cursor-grabbing"></div>

        <!-- Lightbox Modal -->
        <div id="gallery-modal" class="fixed inset-0 z-50 bg-black/95 backdrop-blur-xl hidden flex items-center justify-center p-4 transition-opacity duration-300 opacity-0">
          <button id="modal-close" aria-label="Close modal" class="absolute top-6 right-6 text-zinc-400 hover:text-white text-4xl font-light focus:outline-none cursor-pointer">
            &times;
          </button>
          <div class="max-w-7xl max-h-[85vh] flex flex-col items-center">
            <img id="modal-img" src="" alt="" class="max-h-[90vh] object-contain rounded-lg border border-zinc-800 shadow-2xl" />
          </div>
        </div>
      </section>

      <!-- Three.js CDN -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

      <script>
        document.addEventListener('DOMContentLoaded', () => {
          const container = document.getElementById('three-gallery-canvas');
          const galleryItems = <?php echo json_encode($gallery_items, JSON_UNESCAPED_SLASHES); ?>;

          let scene, camera, renderer, wheelGroup;
          let meshes = [];
          let isDragging = false;
          let dragDistance = 0;
          let previousMousePosition = { x: 0, y: 0 };
          let targetRotationY = 0;
          let targetRotationX = 0;
          let targetZoom = 10;

          const raycaster = new THREE.Raycaster();
          const mouse = new THREE.Vector2();

          function init() {
            scene = new THREE.Scene();
            scene.fog = new THREE.FogExp2(0x09090b, 0.012);

            camera = new THREE.PerspectiveCamera(50, window.innerWidth / window.innerHeight, 0.1, 1000);
            camera.position.set(0, 0, targetZoom);

            renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
            renderer.setSize(window.innerWidth, window.innerHeight);
            renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
            container.appendChild(renderer.domElement);

            wheelGroup = new THREE.Group();
            scene.add(wheelGroup);

            const ambientLight = new THREE.AmbientLight(0xffffff, 1.5);
            scene.add(ambientLight);

            if (galleryItems && galleryItems.length > 0) {
              buildWheel(galleryItems);
            }

            setupInteractions();
            animate();

            window.addEventListener('resize', onWindowResize);
          }

          function buildWheel(items) {
            meshes.forEach(m => wheelGroup.remove(m));
            meshes = [];

            const textureLoader = new THREE.TextureLoader();
            // Allow cross-origin image loading for external ImgBB servers
            textureLoader.setCrossOrigin('anonymous');

            const count = items.length;
            
            // Calculates columns and rows based on total image count
            const itemsPerRow = Math.min(12, Math.ceil(count / 3)); 
            const radius = 16; 
            const rowHeight = 4.2; 

            items.forEach((item, index) => {
              const geometry = new THREE.PlaneGeometry(4.2, 3);
              
              const texture = textureLoader.load(item.image, (tex) => {
                tex.minFilter = THREE.LinearFilter;
                tex.magFilter = THREE.LinearFilter;
                tex.needsUpdate = true;
              });

              const material = new THREE.MeshBasicMaterial({ 
                map: texture, 
                side: THREE.DoubleSide 
              });

              const mesh = new THREE.Mesh(geometry, material);

              const col = index % itemsPerRow;
              const row = Math.floor(index / itemsPerRow);
              const angle = (col / itemsPerRow) * Math.PI * 2;

              mesh.position.x = Math.sin(angle) * radius;
              mesh.position.z = Math.cos(angle) * radius;
              
              const totalRows = Math.ceil(count / itemsPerRow);
              mesh.position.y = (row - (totalRows - 1) / 2) * rowHeight;

              mesh.rotation.y = angle;

              mesh.userData = item;
              wheelGroup.add(mesh);
              meshes.push(mesh);
            });
          }

          function setupInteractions() {
            container.addEventListener('mousedown', (e) => {
              isDragging = true;
              dragDistance = 0;
              previousMousePosition = { x: e.clientX, y: e.clientY };
            });

            window.addEventListener('mousemove', (e) => {
              const rect = renderer.domElement.getBoundingClientRect();
              mouse.x = ((e.clientX - rect.left) / rect.width) * 2 - 1;
              mouse.y = -((e.clientY - rect.top) / rect.height) * 2 + 1;

              raycaster.setFromCamera(mouse, camera);
              const intersects = raycaster.intersectObjects(meshes);

              if (intersects.length > 0) {
                document.body.style.cursor = 'pointer';
              } else {
                document.body.style.cursor = isDragging ? 'grabbing' : 'default';
              }

              if (!isDragging) return;

              const deltaX = e.clientX - previousMousePosition.x;
              const deltaY = e.clientY - previousMousePosition.y;

              dragDistance += Math.abs(deltaX) + Math.abs(deltaY);

              targetRotationY += deltaX * 0.004;
              targetRotationX += deltaY * 0.002;

              targetRotationX = Math.max(-0.6, Math.min(0.6, targetRotationX));

              previousMousePosition = { x: e.clientX, y: e.clientY };
            });

            window.addEventListener('mouseup', () => isDragging = false);

            container.addEventListener('click', (e) => {
              if (dragDistance > 8) return;

              const rect = renderer.domElement.getBoundingClientRect();
              mouse.x = ((e.clientX - rect.left) / rect.width) * 2 - 1;
              mouse.y = -((e.clientY - rect.top) / rect.height) * 2 + 1;

              raycaster.setFromCamera(mouse, camera);
              const intersects = raycaster.intersectObjects(meshes);

              if (intersects.length > 0) {
                openModal(intersects[0].object.userData);
              }
            });

            window.addEventListener('wheel', (e) => {
              targetZoom += e.deltaY * 0.015;
              targetZoom = Math.min(Math.max(targetZoom, 14), 40);
            }, { passive: true });

            document.getElementById('btn-prev').addEventListener('click', () => {
              targetRotationY += (Math.PI * 2) / 12;
            });

            document.getElementById('btn-next').addEventListener('click', () => {
              targetRotationY -= (Math.PI * 2) / 12;
            });
          }

          function openModal(data) {
            const modal = document.getElementById('gallery-modal');
            document.getElementById('modal-img').src = data.image;
            modal.classList.remove('hidden');
            setTimeout(() => modal.classList.remove('opacity-0'), 10);
          }

          document.getElementById('modal-close').addEventListener('click', () => {
            const modal = document.getElementById('gallery-modal');
            modal.classList.add('opacity-0');
            setTimeout(() => modal.classList.add('hidden'), 300);
          });

          function animate() {
            requestAnimationFrame(animate);

            wheelGroup.rotation.y += (targetRotationY - wheelGroup.rotation.y) * 0.05;
            wheelGroup.rotation.x += (targetRotationX - wheelGroup.rotation.x) * 0.05;
            camera.position.z += (targetZoom - camera.position.z) * 0.08;

            if (!isDragging) {
              targetRotationY += 0.0008;
            }

            renderer.render(scene, camera);
          }

          function onWindowResize() {
            camera.aspect = window.innerWidth / window.innerHeight;
            camera.updateProjectionMatrix();
            renderer.setSize(window.innerWidth, window.innerHeight);
          }

          init();
        });
      </script>
    </div>
  
<?php get_footer(); ?>