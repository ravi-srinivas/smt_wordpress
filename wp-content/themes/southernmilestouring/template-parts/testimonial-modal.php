<div id="testimonialModal" class="fixed inset-0 z-[60] hidden items-center justify-center bg-black/90 p-0 overflow-y-auto md:p-4 backdrop-blur-sm">
    <div class="relative bg-[#111] rounded-lg w-full max-w-2xl mx-auto p-6">
        <button id="closeTestimonialModal" class="absolute top-4 right-4 text-white hover:text-gray-300 transition-colors duration-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <?php echo do_shortcode('[sp_testimonial_form id="149"]'); ?>
    </div>
</div>
<script type="text/javascript">
    window.openTestimonialModal = function() {
        const modal = document.getElementById('testimonialModal');
        if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.classList.add('overflow-hidden');
        }
    };

    window.closeTestimonialModal = function() {
        const modal = document.getElementById('testimonialModal');
        if (modal) {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }
    };

    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('testimonialModal');
        const closeBtn = document.getElementById('closeTestimonialModal');
        const form = document.getElementById('tribeRegisterForm');
        
        // Modal Exit Wireframes
        if (closeBtn) {
            closeBtn.addEventListener('click', window.closeTestimonialModal);
        }
        window.addEventListener('click', function(e) {
            if (e.target === modal) {
                window.closeTestimonialModal();
            }
        });
    });
</script>