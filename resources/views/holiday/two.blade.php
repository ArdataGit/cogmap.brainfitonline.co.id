{{-- resources/views/section/two.blade.php --}}
<div class="section-two py-5" id="section2">
    <div class="container text-center">
        
        <!-- Judul Utama -->
        <h2 class="section-two-title-top">Selamat Datang di BrainFit®</h2>
        <h3 class="section-two-title-main">
            Partner untuk Parents dalam Meningkatkan<br> Kemampuan Otak Anak!
        </h3>

        <div id="section-two-row" class="row text-center align-items-start mt-5">
            
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
    .section-two-title-top {
        font-family: 'Titillium Web', sans-serif;
        font-weight: 700;
        font-size: 35pt;
        color: #000;
        margin-bottom: 0.3rem;
    }

    .section-two-title-main {
        font-family: 'Titillium Web', sans-serif;
        font-weight: 700;
        font-size: 35pt;
        color: #000;
        line-height: 1.4;
    }

    /* Animasi Scroll */
    .animate-on-scroll {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .animate-on-scroll.animate {
        opacity: 1;
        transform: translateY(0);
    }

    /* Staggered animation */
    .animate-on-scroll:nth-child(1).animate { transition-delay: 0.1s; }
    .animate-on-scroll:nth-child(2).animate { transition-delay: 0.2s; }
    .animate-on-scroll:nth-child(3).animate { transition-delay: 0.3s; }
    .animate-on-scroll:nth-child(4).animate { transition-delay: 0.4s; }

    @media (max-width: 768px) {
        .section-two-title-top {
            font-size: 1.75rem;
        }

        .section-two-title-main {
            font-size: 1.1rem;
        }
    }
</style>
