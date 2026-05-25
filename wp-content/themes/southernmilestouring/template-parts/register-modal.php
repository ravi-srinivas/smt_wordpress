<?php
/**
 * Template Part: Tribe Registration Modal
 * Theme: Southern Miles Touring
 * Description: A comprehensive registration form modal for new tribe members, capturing essential details and ensuring a seamless onboarding experience.
 */
?>
<div 
    id="registerModal" 
    class="fixed inset-0 z-[60] hidden items-center justify-center bg-black/90 p-0 overflow-y-auto md:p-4 backdrop-blur-sm"
>
    <div class="relative bg-black rounded-none w-full max-w-4xl max-h-[90vh] overflow-y-auto border border-white/20 shadow-2xl">
        <div class="sticky top-0 z-10 bg-[#ff5a00] text-black py-6 px-12 flex items-center justify-between border-b-2 border-black">
            <h3 class="text-2xl md:text-3xl font-black uppercase tracking-tighter">
                JOIN THE TRIBE
            </h3>
            <button 
                id="closeRegisterModal" 
                class="p-2 hover:bg-black hover:text-white transition-colors focus:outline-none"
                aria-label="Close Modal"
            >
                <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <div id="modalFormContainer" class="p-8 md:p-12">
            <form id="tribeRegisterForm" class="space-y-10" autocomplete="off">
                
                <!-- Full Name & Blood Group Row -->
                <div class="grid md:grid-cols-2 gap-10">
                    <div>
                        <label class="flex text-xs font-black text-[#ff5a00] mb-3 items-center tracking-[0.2em] uppercase">
                            <i class="fas fa-user mr-2"></i>
                            FULL NAME *
                        </label>
                        <input
                            type="text"
                            name="name"
                            required
                            placeholder="JOHN RIDER"
                            class="w-full bg-black border-b-2 border-white/20 focus:border-[#ff5a00] text-white text-xl font-bold py-4 transition-all outline-none rounded-none placeholder:text-gray-800 uppercase tracking-tighter"
                        />
                    </div>
                    <div>
                        <label class="flex text-xs font-black text-[#ff5a00] mb-3 items-center tracking-[0.2em] uppercase">
                            <i class="fas fa-tint mr-2"></i>
                            BLOOD GROUP *
                        </label>
                        <select
                            name="blood_group"
                            required
                            class="w-full bg-black border-b-2 border-white/20 focus:border-[#ff5a00] text-white text-xl font-bold py-4 transition-all outline-none rounded-none appearance-none cursor-pointer uppercase tracking-tighter"
                        >
                            <option value="" class="text-gray-500">SELECT GROUP</option>
                            <option value="A+" class="bg-black text-white">A+</option>
                            <option value="A-" class="bg-black text-white">A-</option>
                            <option value="B+" class="bg-black text-white">B+</option>
                            <option value="B-" class="bg-black text-white">B-</option>
                            <option value="AB+" class="bg-black text-white">AB+</option>
                            <option value="AB-" class="bg-black text-white">AB-</option>
                            <option value="O+" class="bg-black text-white">O+</option>
                            <option value="O-" class="bg-black text-white">O-</option>
                        </select>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-10">
                    <div>
                        <label class="flex text-xs font-black text-[#ff5a00] mb-3 items-center tracking-[0.2em] uppercase">
                            <i class="fab fa-whatsapp mr-2"></i>
                            WHATSAPP NUMBER *
                        </label>
                        <input
                            type="tel"
                            name="phone"
                            required
                            placeholder="9876543210"
                            class="w-full bg-black border-b-2 border-white/20 focus:border-[#ff5a00] text-white text-xl font-bold py-4 transition-all outline-none rounded-none placeholder:text-gray-800 tracking-tighter"
                        />
                    </div>
                    <div>
                        <label class="flex text-xs font-black text-[#ff5a00] mb-3 items-center tracking-[0.2em] uppercase">
                            <i class="fas fa-envelope mr-2"></i>
                            EMAIL *
                        </label>
                        <input
                            type="email"
                            name="email"
                            required
                            placeholder="RIDER@EMAIL.COM"
                            class="w-full bg-black border-b-2 border-white/20 focus:border-[#ff5a00] text-white text-xl font-bold py-4 transition-all outline-none rounded-none placeholder:text-gray-800 uppercase tracking-tighter"
                        />
                    </div>
                </div>
                <div class="grid md:grid-cols-2 gap-10">
                    <div>
                        <label class="flex text-xs font-black text-[#ff5a00] mb-3 items-center tracking-[0.2em] uppercase">
                            <i class="fas fa-phone-alt mr-2"></i>
                            EMERGENCY CONTACT *
                        </label>
                        <input
                            type="tel"
                            name="emergency_number"
                            required
                            placeholder="FAMILY/FRIEND NUMBER"
                            class="w-full bg-black border-b-2 border-white/20 focus:border-[#ff5a00] text-white text-xl font-bold py-4 transition-all outline-none rounded-none placeholder:text-gray-800 tracking-tighter"
                        />
                    </div>
                    <div>
                        <label class="flex text-xs font-black text-[#ff5a00] mb-3 items-center tracking-[0.2em] uppercase">
                            <i class="fas fa-map-marker-alt mr-2"></i>
                            ADDRESS *
                        </label>
                        <input
                            type="text"
                            name="address"
                            required
                            placeholder="AREA YOU LIVE IN?"
                            class="w-full bg-black border-b-2 border-white/20 focus:border-[#ff5a00] text-white text-xl font-bold py-4 transition-all outline-none rounded-none placeholder:text-gray-800 uppercase tracking-tighter"
                        />
                    </div>
                </div>
                <div class="p-8 bg-[#0a0a0a] border border-white/10 rounded-none">
                    <h4 class="text-sm font-black text-white mb-6 flex items-center tracking-widest uppercase">
                        <i class="fas fa-camera mr-3 text-[#ff5a00]"></i>
                        RIDER'S MUGSHOT
                    </h4>
                    <div class="border-2 border-dashed border-white/10 hover:border-[#ff5a00] transition-colors p-4 relative flex items-center justify-center min-h-[120px] bg-black">
                        <input 
                            type="file" 
                            name="mugshot" 
                            id="mugshotInput"
                            accept="image/*"
                            class="absolute inset-0 opacity-0 w-full h-full cursor-pointer z-10"
                        />
                        <div id="mugshotPlaceholder" class="text-center text-sm font-bold text-gray-500 tracking-wider uppercase pointer-events-none">
                            Click or Drag to Upload Picture (Max 5MB)
                        </div>
                    </div>
                </div>
                <div class="p-8 bg-[#0a0a0a] border border-white/10 rounded-none">
                    <h4 class="text-sm font-black text-white mb-6 flex items-center tracking-widest uppercase">
                        <i class="fa-solid fa-clipboard-user mr-3 text-[#ff5a00]"></i>
                        VEHICLE SPECIFICATIONS
                    </h4>
                    <div class="grid md:grid-cols-3 gap-0 border border-white/10 md:divide-x divide-y md:divide-y-0 divide-white/10">
                        <input type="text" name="vehicle_no" placeholder="KA01AA0007" class="p-5 bg-black text-white focus:bg-[#111] outline-none text-sm font-bold uppercase tracking-widest placeholder:text-gray-800" />
                        <input type="text" name="vehicle_model" placeholder="RE BULLET 350" class="p-5 bg-black text-white focus:bg-[#111] outline-none text-sm font-bold uppercase tracking-widest placeholder:text-gray-800" />
                        <input type="text" name="driving_license" placeholder="DL NUMBER" class="p-5 bg-black text-white focus:bg-[#111] outline-none text-sm font-bold uppercase tracking-widest placeholder:text-gray-800" />
                    </div>
                </div>
                <div class="p-8 bg-[#0a0a0a] border border-white/10 rounded-none">
                    <label class="flex text-sm font-black text-white mb-6 items-center tracking-widest uppercase">
                        <i class="fas fa-share-alt mr-3 text-[#ff5a00]"></i>
                        SOCIAL MANIFEST
                    </label>
                    
                    <!-- Appended Rows Output Container -->
                    <div id="socialLinksWrapper" class="space-y-2 mb-8"></div>

                    <!-- Tools Input Line -->
                    <div class="grid grid-cols-1 md:grid-cols-4 gap-2">
                        <input id="linkPlatform" type="text" placeholder="PLATFORM" class="bg-black border border-white/10 p-4 text-xs font-black text-white outline-none focus:border-[#ff5a00] uppercase tracking-widest md:col-span-1" />
                        <input id="linkUrl" type="url" placeholder="URL LINK" class="bg-black border border-white/10 p-4 text-xs font-black text-white outline-none focus:border-[#ff5a00] uppercase tracking-widest md:col-span-2" />
                        <button id="addSocialLinkBtn" type="button" class="bg-white text-black hover:bg-[#ff5a00] font-black text-xs tracking-widest uppercase transition-all flex items-center justify-center p-4">
                            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/></svg>
                            ADD LINK
                        </button>
                    </div>
                </div>
                <div class="p-10 bg-white text-black rounded-none border-8 border-[#ff5a00] text-center relative overflow-hidden">
                    <div>
                        <h4 class="text-2xl font-black mb-2 tracking-tighter uppercase flex items-center justify-center">
                            <i class="fa-solid fa-indian-rupee-sign mr-3"></i>
                            PAYMENT REQUIRED
                        </h4>
                        <p class="text-[10px] font-black text-gray-500 tracking-[0.3em] uppercase mb-8">
                            ANNUAL MEMBERSHIP FEE • ₹1000 ONLY
                        </p>
                        <div class="relative group mb-8 inline-block">
                            <div class="absolute -inset-2 border-2 border-dashed border-black/10 group-hover:border-[#ff5a00] transition-colors duration-500"></div>
                            <img 
                                src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/images/payment-qr.jpeg'); ?>" 
                                alt="Southern Miles Touring QR"
                                class="w-48 h-48 mx-auto rounded-none grayscale group-hover:grayscale-0 transition-all duration-700 object-cover"
                            />
                        </div>
                        <p class="text-[10px] font-black text-gray-400 tracking-widest uppercase mb-8">
                            SCAN VIA UPI / GPAY / PHONEPE
                        </p>
                        <button
                            id="downloadQrBtn"
                            type="button"
                            class="w-full bg-black text-white hover:bg-[#ff5a00] hover:text-black px-8 py-4 rounded-none text-xs font-black tracking-[0.2em] transition-all duration-300 uppercase flex items-center justify-center gap-3"
                        >
                            <i class="fas fa-download mr-2"></i>
                            DOWNLOAD QR-CODE
                        </button>
                    </div>
                </div>
                <div class="pt-10 border-t border-white/10">
                    <p class="text-[16px] text-center font-medium text-gray-400 tracking-widest mb-8">
                        Join the Southern Miles tribe today and unlock priority access to upcoming expeditions and redeem your membership fee instantly with ₹1000 off on every booking.
                    </p>
                    <button 
                        id="submitTribeBtn"
                        type="submit" 
                        class="w-full bg-[#ff5a00] text-black py-8 px-12 rounded-none text-2xl font-black tracking-tighter hover:bg-white transition-all duration-300 flex items-center justify-center gap-3 uppercase focus:outline-none"
                    >
                        JOIN THE TRIBE
                    </button>
                    <p class="text-center text-[10px] font-black text-gray-600 mt-6 tracking-widest uppercase">
                        VALID FOREVER • SECURE PROTOCOL • SOUTHERN MILE TOURING
                    </p>
                </div>
            </form>
        </div>

        <!-- Success Block Markup Container -->
        <div id="modalSuccessContainer" class="p-16 text-center space-y-10 bg-black hidden">
            <div class="w-24 h-24 bg-[#ff5a00] text-black rounded-none flex items-center justify-center mx-auto transition-transform hover:rotate-12">
                <i class="fas fa-check text-2xl"></i>
            </div>
            <div>
                <h3 class="text-4xl md:text-5xl font-black text-white mb-4 tracking-tighter uppercase leading-none">
                    REGISTRATION <br/> COMPLETE
                </h3>
                <p class="text-xs font-black text-gray-500 tracking-[0.2em] uppercase max-w-sm mx-auto">
                    WELCOME TO THE CREW. SYNC YOUR DEVICE WITH THE WHATSAPP COMMS CHANNEL BELOW.
                </p>
            </div>
            <a
                id="whatsappSuccessLink"
                href="https://whatsapp.com"
                target="_blank"
                rel="noopener noreferrer"
                class="flex w-full bg-white text-black hover:bg-[#25D366] hover:text-white py-6 px-8 rounded-none font-black text-sm tracking-[0.2em] transition-all duration-300 items-center justify-center mx-auto space-x-3 max-w-md uppercase"
            >
                <i class="fab fa-whatsapp text-2xl"></i>
                <span>OPEN WHATSAPP GROUP</span>
            </a>
        </div>
    </div>
</div>

<script type="text/javascript">
    window.openRegisterModal = function() {
        const modal = document.getElementById('registerModal');
        if (modal) {
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.classList.add('overflow-hidden');
        }
    };

    window.closeRegisterModalWindow = function() {
        const modal = document.getElementById('registerModal');
        if (modal) {
            modal.classList.remove('flex');
            modal.classList.add('hidden');
            document.body.classList.remove('overflow-hidden');
        }
    };

    document.addEventListener('DOMContentLoaded', function() {
        const modal = document.getElementById('registerModal');
        const closeBtn = document.getElementById('closeRegisterModal');
        const form = document.getElementById('tribeRegisterForm');
        
        // Modal Exit Wireframes
        if (closeBtn) {
            closeBtn.addEventListener('click', window.closeRegisterModalWindow);
        }
        window.addEventListener('click', function(e) {
            if (e.target === modal) {
                window.closeRegisterModalWindow();
            }
        });

        // Mugshot File Label Dynamic Text Update Handler
        const mugshotInput = document.getElementById('mugshotInput');
        const mugshotPlaceholder = document.getElementById('mugshotPlaceholder');
        if (mugshotInput && mugshotPlaceholder) {
            mugshotInput.addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    mugshotPlaceholder.textContent = "SELECTED: " + this.files[0].name.toUpperCase();
                    mugshotPlaceholder.classList.remove('text-gray-500');
                    mugshotPlaceholder.classList.add('text-[#ff5a00]');
                }
            });
        }

        // Social Links Multi-Manifest List Array Handler Logic
        const addSocialLinkBtn = document.getElementById('addSocialLinkBtn');
        const socialLinksWrapper = document.getElementById('socialLinksWrapper');
        const platformInput = document.getElementById('linkPlatform');
        const urlInput = document.getElementById('linkUrl');

        if (addSocialLinkBtn && socialLinksWrapper && platformInput && urlInput) {
            addSocialLinkBtn.addEventListener('click', function() {
                const platformValue = platformInput.value.trim().toUpperCase();
                const urlValue = urlInput.value.trim();

                if (!platformValue || !urlValue) return;

                // Create Item Container Element
                const row = document.createElement('div');
                row.className = "flex items-center justify-between p-4 bg-black border border-white/5 group hover:border-[#ff5a00] transition-all";
                
                row.innerHTML = `
                    <div class="flex items-center space-x-4 min-w-0">
                        <span class="text-[10px] font-black text-[#ff5a00] tracking-widest uppercase whitespace-nowrap">
                            ${platformValue}
                        </span>
                        <span class="text-xs text-gray-500 font-bold truncate max-w-[200px] md:max-w-md">
                            ${urlValue}
                        </span>
                        <!-- Hidden Inputs to pass these arrays natively on standard POST runs -->
                        <input type="hidden" name="social_platforms[]" value="${platformValue}" />
                        <input type="hidden" name="social_urls[]" value="${urlValue}" />
                    </div>
                    <button type="button" class="text-gray-600 hover:text-red-500 transition-colors remove-social-row-btn">
                        <i class="fas fa-times"></i>
                    </button>
                `;

                // Add delete listener to row instance button
                row.querySelector('.remove-social-row-btn').addEventListener('click', function() {
                    row.remove();
                });

                socialLinksWrapper.appendChild(row);

                // Clear input strings values
                platformInput.value = '';
                urlInput.value = '';
            });
        }

        // Direct Download QR Mechanics
        const downloadQrBtn = document.getElementById('downloadQrBtn');
        if (downloadQrBtn) {
            downloadQrBtn.addEventListener('click', function() {
                const imgAsset = this.closest('div').querySelector('img');
                if(imgAsset) {
                    const downloadLink = document.createElement('a');
                    downloadLink.href = imgAsset.src;
                    downloadLink.download = 'qr-code.png';
                    document.body.appendChild(downloadLink);
                    downloadLink.click();
                    document.body.removeChild(downloadLink);
                }
            });
        }
    });
</script>