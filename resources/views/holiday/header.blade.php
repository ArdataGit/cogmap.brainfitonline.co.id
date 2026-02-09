<div class="row justify-content-center align-items-center" style="
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);padding-top: 1.5rem;
    padding-bottom: 2rem;">
            <div class="col-lg-3 col-md-2 col-3 order-1 order-lg-1"></div>
            <div class="col-lg-6 col-md-8 col-6 order-2 order-md-2">
                <img src="{{ asset('img/section1/BrainFit_Logo.png') }}" class="logo img-fluid" alt="">
            </div>
            <div class="col-lg-3 col-md-2 col-3 order-3 order-lg-3 text-end align-self-center language-switcher">
                <!--<a href="{{ url()->current() }}?locale=id" style="color: #6d6e70; text-decoration: none; font-family: 'SF Pro Display', sans-serif; font-weight: 300;">ID</a> -->
                <!--<a href="{{ url()->current() }}?locale=en" style="color: #6d6e70; text-decoration: none; font-family: 'SF Pro Display', sans-serif; font-weight: 300;">EN</a> -->
            </div>
        </div>

<style>
    .logo {
        max-width: 55%;
        display: block;
        margin: 0 auto;
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



    /* Mobile Large (max-width: 768px) */
    @media (max-width: 768px) {
        .logo {
            max-width: 70%;
        }
    }

    /* Mobile Small (max-width: 576px) */
    @media (max-width: 576px) {
        .logo {
            max-width: 80%;
        }
</style>