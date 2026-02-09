{{-- resources/views/section/two.blade.php --}}
<div class="section-two py-5" id="section2">
    <div class="container">
        <div id="section-two-row" class="row text-center align-items-start">
            
            <!-- Item 1 -->
            <div class="col-md-3 col-6 mb-4 animate-on-scroll">
                <div style="min-height: 126px; display: flex; justify-content: center; align-items: center;">
                    <img src="{{ asset('img/section2/Logo_Promising_SME.png') }}" 
                         alt="SME" style="max-width: 120px;">
                </div>
                <h6 class="fw-bold mt-4" style="font-family: 'Titillium Web', sans-serif; font-weight: 700;">
                    {{ __('section.two.item1_title') }}
                </h6>
                <p class="small m-0" style="font-family: 'Titillium Web', sans-serif;">
                    {{ __('section.two.item1_desc') }}
                </p>
            </div>

            <!-- Item 2 -->
            <div class="col-md-3 col-6 mb-4 animate-on-scroll">
                <div style="min-height: 126px; display: flex; justify-content: center; align-items: center;">
                    <img src="{{ asset('img/section2/7_penghargaan_internasional.png') }}" 
                         alt="Penghargaan" style="max-width: 80px;">
                </div>
                <h6 class="fw-bold mt-4" style="font-family: 'Titillium Web', sans-serif; font-weight: 700;">
                    {{ __('section.two.item2_title') }}
                </h6>
                <p class="small m-0" style="font-family: 'Titillium Web', sans-serif;">
                    {{ __('section.two.item2_desc') }}
                </p>
            </div>

            <!-- Item 3 -->
            <div class="col-md-3 col-6 mb-4 animate-on-scroll">
                <div style="min-height: 126px; display: flex; justify-content: center; align-items: center;">
                    <img src="{{ asset('img/section2/15_konferensi_dunia.png') }}" 
                         alt="Konferensi" style="max-width: 80px;">
                </div>
                <h6 class="fw-bold mt-4" style="font-family: 'Titillium Web', sans-serif; font-weight: 700;">
                    {{ __('section.two.item3_title') }}
                </h6>
                <p class="small m-0" style="font-family: 'Titillium Web', sans-serif;">
                    {{ __('section.two.item3_desc') }}
                </p>
            </div>

            <!-- Item 4 -->
            <div class="col-md-3 col-6 mb-4 animate-on-scroll">
                <div style="min-height: 126px; display: flex; justify-content: center; align-items: center;">
                    <img src="{{ asset('img/section2/20_seminar.png') }}" 
                         alt="Seminar" style="max-width: 80px;">
                </div>
                <h6 class="fw-bold mt-4" style="font-family: 'Titillium Web', sans-serif; font-weight: 700;">
                    {{ __('section.two.item4_title') }}
                </h6>
                <p class="small m-0" style="font-family: 'Titillium Web', sans-serif;">
                    {{ __('section.two.item4_desc') }}
                </p>
            </div>

        </div>
    </div>
</div>

<style>
    /* Animasi Sederhana Scroll: Mulai dari opacity 0 dan translateY, fade in saat scroll */
    .animate-on-scroll {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .animate-on-scroll.animate {
        opacity: 1;
        transform: translateY(0);
    }

    /* Staggered delay untuk setiap item saat fade in (opsional, biar bertahap) */
    .animate-on-scroll:nth-child(1).animate { transition-delay: 0.1s; }
    .animate-on-scroll:nth-child(2).animate { transition-delay: 0.2s; }
    .animate-on-scroll:nth-child(3).animate { transition-delay: 0.3s; }
    .animate-on-scroll:nth-child(4).animate { transition-delay: 0.4s; }

    /* Delay terbalik untuk fade out (child 4 mulai duluan, dst) */
    .animate-on-scroll:nth-child(4):not(.animate) { transition-delay: 0.1s; }
    .animate-on-scroll:nth-child(3):not(.animate) { transition-delay: 0.2s; }
    .animate-on-scroll:nth-child(2):not(.animate) { transition-delay: 0.3s; }
    .animate-on-scroll:nth-child(1):not(.animate) { transition-delay: 0.4s; }
</style>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const elements = document.querySelectorAll('.animate-on-scroll');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
            } else {
                entry.target.classList.remove('animate'); // Opsional: hilangkan animasi saat scroll keluar
            }
        });
    }, { threshold: 0.1 }); // Trigger saat 10% elemen terlihat

    elements.forEach(el => observer.observe(el));
});
</script>