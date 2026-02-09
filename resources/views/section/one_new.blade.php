{{-- resources/views/section/one.blade.php --}}
<div class="section-one" style="background-color: transparent; position: relative; overflow: hidden;">
    <div class="container section-one-container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-3 col-md-2 col-3 order-1 order-lg-1"></div>
            <div class="col-lg-6 col-md-12 col-6 order-1 order-md-1">
                <img src="{{ asset('img/section1/BrainFit_Logo.png') }}" class="logo img-fluid" alt="">
            </div>
          
            <div class="col-lg-3 col-md-2 col-3 order-1 order-lg-1"></div>
            <div class="col-lg-3 col-md-2 col-3 order-3 order-lg-3 text-end align-self-center language-switcher">
                <!--<a href="{{ url()->current() }}?locale=id" style="color: #6d6e70; text-decoration: none; font-family: 'SF Pro Display', sans-serif; font-weight: 300;">ID</a> -->
                <!--<a href="{{ url()->current() }}?locale=en" style="color: #6d6e70; text-decoration: none; font-family: 'SF Pro Display', sans-serif; font-weight: 300;">EN</a> -->
            </div>
          {{-- SECTION ONE NEW --}}
            <div class="section-one-new order-2">

                <div class="container section-one-new-container text-center">

                    <!-- Highlight Line -->
                    <span class="section-one-new-line entrance-fade entrance-delay-2"></span>
                    <!-- Headline -->
                    <h1 class="section-one-new-title entrance-fade entrance-delay-1">
                        Different Child. Different Brain<br>
                        Different Needs
                    </h1>


                    <!-- CTA -->
                    <a href="#section-12"
                       class="section-one-new-btn entrance-fade entrance-delay-3">
                        Konsultasi Sekarang!
                    </a>

                    <!-- Subtitle -->
                    <p class="section-one-new-desc entrance-fade entrance-delay-4">
                        Setiap anak punya cerita. Dan setiap orang tua punya harapan yang berbeda.
                    </p>

                    <!-- Cards -->
                    <div class="row justify-content-center section-one-new-cards">

                      <!-- Block 1 -->
                      <div class="col-lg-3 col-md-4 col-10 section-one-new-block entrance-slide-up entrance-delay-2">
                          <div class="section-one-new-image-wrap">
                              <img src="{{ asset('img/section1/new/anak1.jpeg') }}" alt="">
                              <div class="section-one-new-text">
                                  <h5>Ingin membantu anak mengejar ketertinggalan</h5>
                                  <img src="{{ asset('img/section1/new/icon-quote.png') }}" class="quote-icon" alt="">
                                  <p>
                                      Dia sudah berusaha, tapi masih tertinggal di kelas.<br>
                                      Aku takut suatu hari dia menyerah berusaha.
                                  </p>
                              </div>
                          </div>
                      </div>

                      <!-- Block 2 -->
                      <div class="col-lg-3 col-md-4 col-10 section-one-new-block entrance-slide-up entrance-delay-3">
                          <div class="section-one-new-image-wrap">
                              <img src="{{ asset('img/section1/new/anak2.jpeg') }}" alt="">
                              <div class="section-one-new-text text-center">
                                  <h5>Ingin anak lebih bisa komunikasi dan berteman</h5>
                                  <img src="{{ asset('img/section1/new/icon-quote.png') }}" class="quote-icon" alt="">
                                  <p>
                                      Dia sebenarnya ingin main sama teman-teman tapi...
                                  </p>
                              </div>
                          </div>
                      </div>

                      <!-- Block 3 -->
                      <div class="col-lg-3 col-md-4 col-10 section-one-new-block entrance-slide-up entrance-delay-4">
                          <div class="section-one-new-image-wrap">
                              <img src="{{ asset('img/section1/new/anak3.jpeg') }}" alt="">
                              <div class="section-one-new-text">
                                  <h5>Ingin anak bukan hanya pintar akademik</h5>
                                  <img src="{{ asset('img/section1/new/icon-quote.png') }}" class="quote-icon" alt="">
                                  <p>
                                      Nilai sekolah sih bagus, tapi ia tidak fleksibel
                                      dalam berpikir dan sulit beradaptasi...
                                  </p>
                              </div>
                          </div>
                      </div>

                  </div>


                </div>
            </div>

        </div>
    </div>
</div>

<style>
  
      /* ============================= */
    /* IMAGE BLOCK WITH TEXT OVERLAY */
    /* ============================= */

    .section-one-new-block {
        margin-bottom: 2rem;
    }

    .section-one-new-image-wrap {
        position: relative;
        width: 100%;
        overflow: hidden;
    }

    .section-one-new-image-wrap img {
        width: 100%;
        height: auto;
        display: block;
    }

  
    .section-one-new-text {
        position: absolute;
        inset: 0;
        padding: 2rem;
        display: flex;
        flex-direction: column;
        z-index: 2; /* teks di atas */
        color: #111;
    }
    .section-one-new-text p {
        font-family: 'Titillium Web', sans-serif;
        font-weight: 600;
        font-size: 16px;
        line-height: 1.55;
        margin: 3.8rem 0 0 0; /* ruang dari quote */
        z-index: 2;
    }


    .section-one-new-block:nth-child(1) .section-one-new-text,
    .section-one-new-block:nth-child(3) .section-one-new-text {
        justify-content: flex-end;
        text-align: left;
    }

    .section-one-new-block:nth-child(2) .section-one-new-text {
        justify-content: flex-start;
        text-align: center;
    }
  
    .section-one-new-text h5 {
        font-family: 'Titillium Web', sans-serif;
        font-weight: 700;
        font-size: 22px;
        line-height: 1.35;
        margin: 0 0 1.5rem 0;
        z-index: 2;
    }




    /* Quote Icon */
     .quote-icon {
        position: absolute;
        max-width: 10px;
        opacity: 0.9;
        z-index: 1; /* di belakang teks */
        pointer-events: none;
    }

  
    .section-one-new-block:nth-child(1) .quote-icon {
        bottom: 7rem;
        left: 1.5rem;
    }
  
    .section-one-new-block:nth-child(2) .quote-icon {
        top: 5.5rem;
        left: 50%;
        transform: translateX(-50%);
    }
  
    .section-one-new-block:nth-child(3) .quote-icon {
        bottom: 7rem;
        right: 1.5rem;
    }

	.section-one-new-text p {
        font-family: 'Titillium Web', sans-serif;
        font-weight: 600;
        font-size: 16px;
      	margin: 0
    }

    @media (max-width: 768px) {
        .section-one-new-text {
            padding: 1.4rem;
        }

        .section-one-new-text h5 {
            font-size: 18px;
        }

        .section-one-new-text p {
            font-size: 14px;
            margin-top: 3rem;
        }

        .quote-icon {
            width: 90px;
        }
    }




    /* Center text for middle block */
    .section-one-new-text.text-center {
        text-align: center;
        left: 50%;
        transform: translateX(-50%);
    }

    /* Responsive */
    @media (max-width: 768px) {
        .section-one-new-text {
            padding: 1rem;
        }

        .section-one-new-text h5 {
            font-size: 16px;
        }

        .section-one-new-text p {
            font-size: 13px;
        }

        .quote-icon {
            width: 22px;
        }
    }

  
    /* ============================= */
    /* SECTION ONE NEW */
    /* ============================= */

    .section-one-new {
        position: relative;
        background-color: transparent;
        overflow: hidden;
    }

    .section-one-new-container {
        margin-top: 7rem;
    }

    /* Title */
    .section-one-new-title {
        font-family: 'Titillium Web', sans-serif;
        font-weight: 700;
        font-size: 55pt;
        color: #f7af1c;
        line-height: 1.1;
        margin: 0;
    }

    /* Line */
    .section-one-new-line {
        width: 150px;
        height: 6px;
        background-color: #f7af1c;
        display: block;
        margin: 1rem auto;
    }

    /* Button */
    .section-one-new-btn {
        display: inline-block;
        background-color: #6E6F71;
        color: #fff;
        font-family: 'Titillium Web', sans-serif;
        font-weight: 600;
        font-size: 25pt;
        padding: 0.5rem 2rem;
        margin-top: 3rem !important;
        border-radius: 999px;
        text-decoration: none;
        margin-bottom: 3.5rem !important;
    }

    /* Description */
    .section-one-new-desc {
        font-family: 'Titillium Web', sans-serif;
        font-weight: 600;
        font-size: 28pt;
        color: #000;
        margin-bottom: 3rem;
    }

    /* Cards */
    .section-one-new-cards {
        gap: 1.5rem;
    }

    .section-one-new-card-wrap {
        margin-bottom: 2rem;
    }

    .section-one-new-card {
        border-radius: 6px;
        overflow: hidden;
        height: 100%;
    }

    .section-one-new-card img {
        width: 100%;
        height: 260px;
        object-fit: cover;
    }

    .section-one-new-card-body {
        padding: 1.25rem;
        text-align: left;
    }

    .section-one-new-card-body h5 {
        font-family: 'Titillium Web', sans-serif;
        font-weight: 700;
        font-size: 20px;
        color: #000;
        margin-bottom: 0.75rem;
    }

    .section-one-new-card-body p {
        font-family: 'Titillium Web', sans-serif;
        font-weight: 600;
        font-size: 16px;
        color: #000;
        margin: 0;
    }

    /* Card Colors */
    .card-yellow {
        background-color: #F6B000;
    }

    .card-orange {
        background-color: #F29F05;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .section-one-new-title {
            font-size: 32px;
        }

        .section-one-new-desc {
            font-size: 16px;
            padding: 0 1rem;
        }

        .section-one-new-btn {
            font-size: 18px;
        }

        .section-one-new-card img {
            height: 220px;
        }
    }

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