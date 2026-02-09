{{-- resources/views/section/eleven.blade.php --}}
<section class="section-eleven pt-5 position-relative">
    <!-- Tambahan: gambar kiri bawah yang tetap diam -->
    <div class="section-eleven-fixed-image">
        <img src="{{ asset('img/section11/Section_11_image.png') }}" alt="Ibu dan Anak">
    </div>

    <div class="container position-relative">
        <!-- Judul -->
        <div class="mb-3 line-highlight"></div>
        <div class="text-center mb-4">
            <h2 class="fw-bold section-eleven-title">
                Apa kata mereka setelah Asesmen CognitiveMAP?
            </h2>
        </div>

        <div class="row align-items-center g-4">
            <!-- Kiri: Gambar Ibu & Anak (tetap dipertahankan, biar kompatibel tapi bisa disembunyikan lewat CSS nanti) -->
            <div class="col-lg-6 text-center mb-lg-0 order-lg-1 order-2 section-eleven-image-wrapper p-0">
                <img src="{{ asset('img/section11/Section_11_image.png') }}" 
                     alt="Ibu dan Anak" 
                     class="section-eleven-image">
            </div>

            <!-- Kanan: Testimoni Carousel -->
            <div class="col-lg-6 order-lg-2 order-1">
                <div id="testimoniCarousel" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">
                        <!-- Testimoni 1 -->
                        <div class="carousel-item active mb-4">
                            <div class="quote-container position-relative">
                                <img src="{{ asset('img/section11/Icon_Section_11.png') }}" 
                                     alt="Quote" 
                                     class="section-eleven-quote-icon">
                                <p class="section-eleven-text">
                                    Saya selalu bingung dan bertanya-tanya mengenai penyebab perilaku anak saya
                                    yang susah fokus. Menurut saya dia terkadang bisa, terkadang memang susah fokus.
                                    Asesmen CognitiveMAP ini membantu saya memahami anak saya dengan sangat jelas.
                                </p>
                            </div>
                            <p class="section-eleven-author">
                                <strong>Ibu AR</strong>, usia anak 9 thn.
                            </p>
                        </div>

                        <!-- Testimoni 2 -->
                        <div class="carousel-item mb-4">
                            <div class="quote-container position-relative">
                                <img src="{{ asset('img/section11/Icon_Section_11.png') }}" 
                                     alt="Quote" 
                                     class="section-eleven-quote-icon">
                                <p class="section-eleven-text">
                                    Tadinya mengira anak kami punya masalah fokus.
                                    Sangat lega ketika tahu ternyata ia memiliki kemampuan
                                    yang bagus-bagus, termasuk stamina fokus yang baik.
                                    Saya setuju dengan hasil assesmen yang mengatakan
                                    bahwa kendala yang dialami adalah di fixed mindsetnya
                                    yang membuatnya seperti mudah menyerah kronis.
                                    Kami sekarang lebih tahu bagaimana membantunya.
                                </p>
                            </div>
                            <p class="section-eleven-author">
                                <strong>Ibu ZE</strong>, usia anak 12 thn.
                            </p>
                        </div>

                        <!-- Testimoni 3 -->
                        <div class="carousel-item mb-4">
                            <div class="quote-container position-relative">
                                <img src="{{ asset('img/section11/Icon_Section_11.png') }}" 
                                     alt="Quote" 
                                     class="section-eleven-quote-icon">
                                <p class="section-eleven-text">
                                    Saya sudah mencoba berbagai tes dan asesmen buat anak,
                                    belum pernah ada yang memberikan gambaran dan
                                    konsultasi se-detail ini. Memang benar perlu diakui
                                    bahwa BrainFit team expert di bidang otak.
                                </p>
                            </div>
                            <p class="section-eleven-author">
                                <strong>Ibu HT</strong>, usia anak 8 thn.
                            </p>
                        </div>

                        <!-- Testimoni 4 -->
                        <div class="carousel-item mb-4">
                            <div class="quote-container position-relative">
                                <img src="{{ asset('img/section11/Icon_Section_11.png') }}" 
                                     alt="Quote" 
                                     class="section-eleven-quote-icon">
                                <p class="section-eleven-text">
                                    Selama ini saya hanya tahu tes IQ. Setelah konsultasi
                                    asesmen CognitiveMAP, saya jadi paham mengenai
                                    banyak kemampuan anak saya yang lain.
                                    Konsultan BrainFit benar-benar generous dalam
                                    memberikan penjelasan dan strategi kepada kami.
                                </p>
                            </div>
                            <p class="section-eleven-author">
                                <strong>Bu BR</strong>, usia anak 10 thn.
                            </p>
                        </div>

                        <!-- Testimoni 5 -->
                        <div class="carousel-item mb-4">
                            <div class="quote-container position-relative">
                                <img src="{{ asset('img/section11/Icon_Section_11.png') }}" 
                                     alt="Quote" 
                                     class="section-eleven-quote-icon">
                                <p class="section-eleven-text">
                                    Setelah asesmen dan konsultasi hasilnya,
                                    saya menyesal tidak lebih awal mengenal BrainFit.
                                    Ternyata selama ini saya banyak salah paham dan
                                    marah kepada anak saya, setelah tahu apa yang
                                    menjadi kendalanya dalam otaknya, saya menyesal
                                    dan sekarang bertekad untuk membantunya.
                                    Thank you, BrainFit.
                                </p>
                            </div>
                            <p class="section-eleven-author">
                                <strong>Ibu AS</strong>, usia anak 7 thn.
                            </p>
                        </div>

                        <!-- Testimoni 6 -->
                        <div class="carousel-item mb-4">
                            <div class="quote-container position-relative">
                                <img src="{{ asset('img/section11/Icon_Section_11.png') }}" 
                                     alt="Quote" 
                                     class="section-eleven-quote-icon">
                                <p class="section-eleven-text">
                                    Awalnya kami direkomendasikan oleh guru di sekolah.
                                    Setelah melihat hasil dan berkonsultasi, kami seperti
                                    menemukan harapan baru bagi anak kami. Hal dan
                                    informasi yang disampaikan berdasarkan riset otak
                                    yang dijelaskan dengan begitu sederhana dan
                                    mudah dipahami.
                                </p>
                            </div>
                            <p class="section-eleven-author">
                                <strong>Ibu EL</strong>, usia anak 14 thn.
                            </p>
                        </div>
                    </div>
                  
                    <!-- Indicators -->
                    <div class="carousel-indicators carousel-indicators-bottom">
                        @for($i = 0; $i < 6; $i++)
                            <button type="button" data-bs-target="#testimoniCarousel" data-bs-slide-to="{{ $i }}" class="{{ $i == 0 ? 'active' : '' }}" aria-label="Slide {{ $i + 1 }}"></button>
                        @endfor
                    </div>

                    <!-- Tombol Next/Prev -->
                    <button class="carousel-control-prev" type="button" data-bs-target="#testimoniCarousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#testimoniCarousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
  	.section-eleven {
        position: relative;
        overflow: hidden;
    }

    .section-eleven-fixed-image {
        position: absolute;
        left: 0;
        bottom: 0;
        z-index: 1;
    }

    .section-eleven-fixed-image img {
        width: 720px;
        height: auto;
    }

    /* Sembunyikan gambar di dalam col supaya tidak dobel */
    .section-eleven-image-wrapper {
        visibility: hidden;
        height: 0;
    }

    .section-eleven .container {
        position: relative;
        z-index: 2;
    }
    .line-highlight {
        width: 126px;
        height: 5px;
        background-color: #000000;
        border-radius: 2px;
        margin: 0 auto;
    }
    .section-eleven-title {
        font-family: 'Titillium Web', sans-serif;
        font-size: clamp(24pt, 6vw, 35pt); /* Fluid size */
        margin-bottom: clamp(2rem, 5vw, 5rem); /* Fluid margin */
        color: #222;
        line-height: 1.1;
    }
    .section-eleven-image {
        width: 100%;
        height: auto;
    }
    .quote-container {
        position: relative;
        margin-bottom: 1rem;
        padding-top: 60px; /* Tambah padding atas untuk akomodasi icon tanpa cropping */
        padding-left: 120px; /* Increased untuk mencegah overlap dan bleed */
    }
    .section-eleven-quote-icon {
        position: absolute;
        left: 0;
        top: 0;
        width: clamp(40px, 8vw, 6rem); /* Fluid width */
        height: auto;
        z-index: 2;
        transition: transform 0.3s ease; /* Subtle animation */
    }
    .section-eleven-quote-icon:hover {
        transform: rotate(5deg); /* Slight tilt on hover */
    }
    .section-eleven-text {
        font-family: 'Titillium Web', sans-serif;
        font-size: clamp(14pt, 3vw, 20pt); /* Fluid size */
        line-height: 1.6;
        color: #444;
        margin-bottom: 15px;
        position: relative;
        z-index: 1;
    }
    .section-eleven-author {
        font-size: clamp(10pt, 2.5vw, 20pt); /* Fluid size */
        color: #555;
        text-align: right; /* Right align on desktop */
        font-family: 'Titillium Web', sans-serif;
        font-style: italic; /* Italic for elegance */
    }

    /* Carousel Styles */
    .carousel {
        position: relative;
    }
    .carousel-inner {
        border-radius: 8px;
        overflow: hidden; /* Kembali ke hidden untuk mencegah bleed */
      	min-height: 500px;
    }
  
  	.carousel-item {
        min-height: 500px; /* Sama dengan carousel-inner */
    }
    .carousel-control-prev,
    .carousel-control-next {
        width: 10%;
        opacity: 0.5;
        transition: opacity 0.3s ease;
    }
    .carousel-control-prev:hover,
    .carousel-control-next:hover {
        opacity: 0.8;
    }
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-size: 100%, 100%;
        background-image: none;
        width: 30px;
        height: 30px;
        border-radius: 50%;
        background-color: #f15b39; /* Warna tombol sesuai tema */
    }
    .carousel-control-prev-icon::after,
    .carousel-control-next-icon::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 12px;
        height: 12px;
        border: 2px solid white;
    }
    .carousel-control-prev-icon::after {
        border-top: none;
        border-right: none;
        transform: translate(-50%, -50%) rotate(45deg);
    }
    .carousel-control-next-icon::after {
        border-bottom: none;
        border-left: none;
        transform: translate(-50%, -50%) rotate(45deg);
    }

    /* Indicators di atas */
    .carousel-indicators-top {
        bottom: auto !important; /* Override default bottom */
        top: -40px; /* Posisi di atas carousel */
        display: flex;
        justify-content: center;
        margin: 0;
    }
    .carousel-indicators-top [data-bs-target] {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background-color: #ccc;
        border: none;
        margin: 0 5px;
        transition: background-color 0.3s ease;
    }
    .carousel-indicators-top .active {
        background-color: #F5AA1E;
    }

    /* Responsive - Improved */
    @media (max-width: 992px) {
        .section-eleven-title {
            text-align: center;
            margin-bottom: 3rem;
        }
        
        .section-eleven-text {
            padding-left: 0;
            text-align: center;
        }
        
        .section-eleven-author {
            text-align: center;
        }
        
        .section-eleven-quote-icon {
            left: 50%;
            transform: translateX(-50%) rotate(0deg); /* Center on tablet */
            top: 0;
        }

        .quote-container {
            padding-top: 50px;
            padding-left: 0;
        }
      
      	.carousel-inner {
            min-height: 450px;
        }

        .carousel-item {
            min-height: 450px;
        }

        .carousel-indicators-top {
            top: -35px;
        }

        .carousel-control-prev,
        .carousel-control-next {
            width: 15%;
        }
    }

    @media (max-width: 768px) {
     .carousel-control-prev {
      	display:none;
     }
    .carousel-control-next {
      	display:none;
     }
    .section-eleven-fixed-image {
        display: none; /* Matikan gambar fixed di mobile */
    }

    .section-eleven-image-wrapper {
        position: absolute; /* Absolute ke container */
        left: 0; /* Pojok kiri */
        bottom: 0; /* Bawah */
        visibility: visible;
        height: auto;
        z-index: 0; /* DI BELAKANG konten */
        margin: 0; /* Tidak ada margin */
    }

    .section-eleven-image {
        max-width: 200px; /* Ukuran lebih kecil untuk mobile */
        transform: translate(0, 0);
    }

    .section-eleven .container {
        position: relative; /* Biar absolute child relative ke ini */
        padding-bottom: 0; /* TIDAK ADA padding bawah */
        min-height: 400px; /* Min height agar ada ruang untuk carousel */
    }

    .col-lg-6 {
        position: relative;
        z-index: 2; /* Konten di DEPAN gambar */
    }
    
    .section-eleven {
        padding-top: 2rem;
        padding-bottom: 0; /* TIDAK ADA padding bawah */
    }
    
    .section-eleven-title {
        text-align: center;
        margin-bottom: 3rem;
    }
    
    .section-eleven-text {
        padding-left: 0;
        text-align: center;
        padding: 1rem; /* Padding untuk text */
        border-radius: 8px;
    }
    
    .section-eleven-author {
        text-align: center;
    }
    
    .section-eleven-quote-icon {
        left: 50%;
        transform: translateX(-50%) rotate(0deg);
        top: 0;
      	margin-top:1rem;
    }

    .quote-container {
        padding-top: 50px;
        padding-left: 0;
        border-radius: 8px;
        padding: 60px 1rem 1rem 1rem;
    }
      
    .carousel-inner {
        border-radius: 8px;
        overflow: hidden; /* Kembali ke hidden untuk mencegah bleed */
      	min-height: 400px;
    }
  
  	.carousel-item {
        min-height: 400px; /* Sama dengan carousel-inner */
    }

    .carousel-indicators-top {
        top: -35px;
    }

    .carousel-control-prev,
    .carousel-control-next {
        width: 15%;
    }
}

    @media (max-width: 576px) {
      	.section-eleven-image {
            max-width: 100%; /* Full width di HP kecil */
        }
        .section-eleven {
            padding-top: 1.5rem;
            padding-bottom: -1.5rem;
        }
        
        .section-eleven-title {
            margin-bottom: 1.5rem;
        }
        
        .section-eleven-text {
            font-size: clamp(11pt, 5vw, 14pt);
            padding: 0 0.5rem;
        }
        
        .section-eleven-quote-icon {
            top: 0;
            width: clamp(25px, 8vw, 30px);
          	margin-top:1rem;
        }
        
        .quote-container {
            padding-top: 40px;
            padding-left: 0;
        }
        
        .section-eleven-image {
            max-width: 280px;
        }
        
        .section-eleven-author {
            font-size: clamp(9pt, 4vw, 12pt);
        }
        
        .row {
            --bs-gutter-y: 0.75rem;
        }
      
      	.carousel-inner {
            border-radius: 8px;
            overflow: hidden; /* Kembali ke hidden untuk mencegah bleed */
            min-height: 350px;
        }

        .carousel-item {
            min-height: 350px; /* Sama dengan carousel-inner */
        }

        .carousel-indicators-top {
            top: -25px;
        }
        .carousel-indicators-top [data-bs-target] {
            width: 8px;
            height: 8px;
            margin: 0 3px;
        }
    }
</style>