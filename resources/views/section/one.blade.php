{{-- resources/views/section/one.blade.php --}}
<div class="section-one" style="background-color: transparent; position: relative; overflow: hidden;">
    <div class="container section-one-container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-3 col-md-2 col-3 order-1 order-lg-1"></div>
            <div class="col-lg-6 col-md-8 col-6 order-2 order-md-2">
                <img src="{{ asset('img/section1/BrainFit_Logo.png') }}" class="logo img-fluid" alt="">
            </div>
            <div class="col-lg-3 col-md-2 col-3 order-3 order-lg-3 text-end align-self-center language-switcher">
                <!--<a href="{{ url()->current() }}?locale=id" style="color: #6d6e70; text-decoration: none; font-family: 'SF Pro Display', sans-serif; font-weight: 300;">ID</a> -->
                <!--<a href="{{ url()->current() }}?locale=en" style="color: #6d6e70; text-decoration: none; font-family: 'SF Pro Display', sans-serif; font-weight: 300;">EN</a> -->
            </div>
        </div>
        <div class="row section-one-container1 justify-content-center">
            <div class="col-12 mt-md-3 mt-sm-2">
              
                <div class="line-highlight" style="background-color: #cd158a;"></div>
                <h1 class="h1-title entrance-fade text-center mb-0">
                    {{ __('section.one.title1') }}
                </h1>
                <h1 class="h1-title entrance-fade entrance-delay-1 text-center mb-4">
                    {{ __('section.one.title2') }}
                </h1>
                
                <div class="mt-4">
                    <h4 class="h4-subtitle entrance-slide-up entrance-delay-2 text-center">
                        {!! __('section.one.subtitle') !!}
                    </h4>
                </div>
               <!-- <div class="text-center mt-3">
                    <a href="#section12" class="btn btn-secondary px-4 py-2 entrance-fade entrance-delay-3"
                        style="background-color: #6c6c6c; border-radius: 50px; font-family: 'Titillium Web', sans-serif; font-weight: 700; ">
                        {{ __('section.one.button') }}
                    </a>
                </div> -->

                <div class="image-section1 mt-4">
                    <!-- Elemen dekoratif (belakang) -->
                    <img src="{{ asset('img/section1/Simbol_2.png') }}" alt="shape kiri" class="shape shape-left entrance-slide-up entrance-delay-4 img-fluid">
                    <img src="{{ asset('img/section1/Simbol_1.png') }}" alt="shape kanan" class="shape shape-right entrance-slide-up entrance-delay-4 img-fluid">

                    <!-- Gambar tablet (belakang anak-anak) -->
                    <img src="{{ asset('img/section1/tabs.png') }}" alt="tabs" class="tabs entrance-fade entrance-delay-5 img-fluid">

                    <!-- Anak-anak (depan) -->
                    <img src="{{ asset('img/section1/Section_1_img_1.png') }}" alt="anak kiri" class="kid kid-left entrance-slide-up entrance-delay-5 img-fluid">
                    <img src="{{ asset('img/section1/Section_1_img_3.png') }}" alt="anak kanan" class="kid kid-right entrance-slide-up entrance-delay-5 img-fluid">
                    <img src="{{ asset('img/section1/Section_1_img_2.png') }}" alt="anak tengah" class="kid kid-center entrance-slide-up entrance-delay-5 img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .section-one-container {
        padding-top: 4rem;
    }
    
    .section-one-container1 {
        margin-top: 1rem !important;
    }

    .logo {
        max-width: 55%;
        display: block;
        margin: 0 auto;
    }

    .language-switcher {
        font-family: 'SF Pro Display', sans-serif;
        font-weight: 300;
        color: #6d6e70;
        font-size: 0.875rem;
    }

    .line-highlight {
        width: 150px;
        height: 6px;
        background-color: #cd158a;
        border-radius: 1px;
        margin: 0 auto;
        display: block;
    }

    .h1-title {
        font-family: 'Titillium Web', sans-serif;
        font-weight: 700;
        color: #cd158a;
        margin: 0;
        line-height: 1.1;
    }

    .h4-subtitle {
        font-family: 'Titillium Web', sans-serif;
        font-weight: 600;
        color: inherit;
        line-height: 1.4;
    }

    .image-section1 {
        position: relative;
        width: 100%;
        max-width: 1200px;
        margin: 0 auto;
        padding-top: 31px;
    }

    /* Dekorasi pink */
    .shape {
        position: absolute;
        z-index: 1;
    }

    .shape-left {
        left: 71px;
        bottom: 0;
        width: 26rem;
    }

    .shape-right {
        right: 128px;
        top: 28px;
        width: 22rem;
    }

    /* Gambar tablet */
    .tabs {
        position: relative;
        width: 100%;
        max-width: 1100px;
        display: block;
        margin: 0 auto;
        z-index: 2;
    }

    /* Anak-anak */
    .kid {
        position: absolute;
        z-index: 3;
    }

    /* Posisi masing-masing anak */
    .kid-left {
        left: 21%;
        bottom: -20px;
        width: 310px;
    }

    .kid-center {
        left: 33%;
        transform: translateX(-52%);
        bottom: -20px;
        width: 25rem;
    }

    .kid-right {
        right: 23%;
        bottom: -20px;
        width: 310px;
    }

    /* Animasi Entrance Simpel */
    /* Fade In */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .entrance-fade {
        animation: fadeIn 0.8s ease-out forwards;
        opacity: 0;
    }

    /* Slide Up */
    @keyframes slideUp {
        from {
            opacity: 0;
            transform: translateY(50px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .entrance-slide-up {
        animation: slideUp 1s ease-out forwards;
        opacity: 0;
    }

    /* Delay Classes untuk Staggered Effect */
    .entrance-delay-1 { animation-delay: 0.3s; }
    .entrance-delay-2 { animation-delay: 0.6s; }
    .entrance-delay-3 { animation-delay: 0.9s; }
    .entrance-delay-4 { animation-delay: 1.2s; }
    .entrance-delay-5 { animation-delay: 1.5s; }
    .entrance-delay-6 { animation-delay: 1.8s; }

    /* Desktop/Large Screens */
    @media (min-width: 1200px) {
        .h1-title {
            font-size: 45pt
        }
        .h4-subtitle {
            font-size: 25pt
        }
        .btn {
            font-size: 25pt;
        }
    }

    /* Tablet (max-width: 992px) */
    @media (max-width: 992px) {
        .section-one-container {
            padding-top: 2rem;
        }
        .section-one-container1 {
            margin-top: 1rem !important;
        }
        .h1-title {
            font-size: 2.75rem; /* Scale down */
        }
        .h4-subtitle {
            font-size: 1.25rem;
        }
        .btn {
            font-size: 1.25rem;
            padding: 0.75rem 2rem;
        }
        .tabs {
            max-width: 700px;
        }
        .kid {
            width: 200px;
        }
        .kid-left {
            left: 15%;
            bottom: -10px;
        }
        .kid-center {
            width: 17rem;
            bottom: -10px;
        }
        .kid-right {
            right: 15%;
            bottom: -10px;
        }
        .shape-left {
            left: 20px;
            width: 16rem;
            bottom: 0;
        }
        .shape-right {
            right: 20px;
            width: 14rem;
            top: 10px;
        }
        .language-switcher {
            text-align: center !important;
            margin-top: 1rem;
        }
    }

    /* Mobile Large (max-width: 768px) */
    @media (max-width: 768px) {
        .section-one-container {
            padding-top: 1.5rem;
        }
        .section-one-container1 {
            margin-top: 1rem !important;
        }
        .h1-title {
            font-size: 2.25rem;
            line-height: 1.15;
        }
        .h4-subtitle {
            font-size: 1.25rem;
            padding: 0 1rem;
        }
        .btn {
            font-size: 1.125rem;
            padding: 0.625rem 1.5rem;
            
            margin: 0 auto;
        }
        .line-highlight {
            width: 120px;
        }
        .tabs {
            max-width: 500px;
        }
        .kid {
            width: 150px;
        }
        .kid-left {
            left: 10%;
            bottom: -5px;
        }
        .kid-center {
            width: 14rem;
            bottom: -5px;
        }
        .kid-right {
            right: 10%;
            bottom: -5px;
        }
        .shape-left {
            left: 0;
            width: 12rem;
            bottom: -10px;
        }
        .shape-right {
            right: 0;
            width: 11rem;
            top: 0;
        }
        .language-switcher {
            font-size: 0.75rem;
        }
        .logo {
            max-width: 70%;
        }
    }

    /* Mobile Small (max-width: 576px) */
    @media (max-width: 576px) {
        .section-one-container {
            padding-top: 1rem;
        }
        .section-one-container1 {
            margin-top: 1rem;
        }
        .h1-title {
            font-size: 1.875rem;
        }
        .h4-subtitle {
            font-size: 0.875rem;
            padding: 0 0.5rem;
        }
        .btn {
            font-size: 1rem;
            padding: 0.5rem 1.25rem;
        }
        .line-highlight {
            width: 100px;
        }
        .tabs {
            max-width: 405px;
        }
        .kid {
            width: 120px;
        }
        .kid-left {
            left: 13%;
            bottom: -5px;
        }
        .kid-center {
            width: 11rem;
            bottom: -5px;
        }
        .kid-right {
            right: 13%;
            bottom: -5px;
        }
        .shape-left {
            left: -20px;
            width: 10rem;
            bottom: -20px;
        }
        .shape-right {
            right: -2px;
            width: 10rem;
            top: 30px;
        }
        .logo {
            max-width: 80%;
        }
        .image-section1 {
            padding-top: 20px;
        }
    }

    /* Extra Small Screens */
    @media (max-width: 480px) {
        .h1-title {
            font-size: 1.625rem;
        }
        .kid-left, .kid-right {
            width: 100px;
        }
        .kid-center {
            width: 9rem;
        }
    }
</style>