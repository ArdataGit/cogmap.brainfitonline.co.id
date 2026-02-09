{{-- resources/views/section/five.blade.php --}}
<div class="section-five my-9">
     <!-- Dekorasi Global -->
    <img src="{{ asset('img/section5/Simbol-1.png') }}" class="simbol-global simbol-global-1" alt="Simbol 1">
    <img src="{{ asset('img/section5/Simbol-2.png') }}" class="simbol-global simbol-global-2" alt="Simbol 2">
    
    <div class="container">
        <div class="row">

            <!-- JUDUL -->
             
        <div class="mb-3 line-highlight"></div> 
            <div class="col-lg-12 mb-4 text-center">
                <h2 class="fw-bold title-black animate-on-scroll animate-on-scroll--title">
                    Cari tahu kekuatan dan kelemahan otak belajar anak
                </h2>
                <p class="mt-3 description-text animate-on-scroll animate-on-scroll--description">
                    Deteksi di manakah terjadinya <span class="highlight-text">‘learning gap’</span> 
                    dan temukan skil yang masih perlu dikembangkan. <br/>
                    Temukan akar masalah yang sebenarnya melemahkan fokus dan motivasi belajarnya.
                </p>
            </div>

            <!-- GRID GAMBAR (Skills saja) -->
            <div class="col-lg-12">
                <div class="row g-4 g-md-3 position-relative">
                    <!-- Kiri - 3 Skills -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="mb-4 animate-on-scroll animate-on-scroll--card">
                            <img src="{{ asset('img/section5/Visual-brain.png') }}" alt="Visual Brain Skills" class="img-fluid skill-img">
                        </div>
                        <div class="mb-4 animate-on-scroll animate-on-scroll--card">
                            <img src="{{ asset('img/section5/Motor-skills.png') }}" alt="Motor Skills" class="img-fluid skill-img">
                        </div>
                        <div class="mb-4 animate-on-scroll animate-on-scroll--card">
                            <img src="{{ asset('img/section5/Attention&Speed-Skills.png') }}" alt="Attention & Speed Skills" class="img-fluid skill-img">
                        </div>
                    </div>

                    <!-- Kanan - 2 Skills -->
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="mb-4 animate-on-scroll animate-on-scroll--card">
                            <img src="{{ asset('img/section5/Auditory-brain.png') }}" alt="Auditory Brain Skills" class="img-fluid skill-img">
                        </div>
                        <div class="mb-4 animate-on-scroll animate-on-scroll--card">
                            <img src="{{ asset('img/section5/EQ.png') }}" alt="EQ Skills" class="img-fluid skill-img">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Row untuk Legend dan Gambar Anak (Side by Side) -->
            <div class="col-lg-12 mt-4">
                <div class="row g-4 g-md-3">
                    <!-- Legend di kiri -->
                    <div class="col-lg-6 col-md-6 col-12 order-1">
                        <div class="legend-section animate-on-scroll animate-on-scroll--legend">
                            <div class="legend-group mb-3">
                                <p class="legend-title">
                                    Skil yang perlu ditingkatkan, penyebab kendala motivasi belajar
                                </p>
                                <div class="legend-items">
                                    <div class="legend-item">
                                        <img src="{{ asset('img/section5/Lemah-icon.png') }}" class="legend-icon" alt="Lemah">
                                        <span class="legend-text">Lemah</span>
                                    </div>
                                    <div class="legend-item">
                                    <img src="{{ asset('img/section5/Rata-rata-bawah-icon.png') }}"class="legend-icon" alt="Rata-rata bawah">
                                        <span class="legend-text">Rata-rata bawah</span>
                                    </div>
                                </div>
                            </div>

                            <div class="legend-group">
                                <p class="legend-title">
                                    Skil yang kuat dan diandalkan oleh anak dalam proses belajarnya
                                </p>
                                <div class="legend-items">
                                    <div class="legend-item">
                                        <img src="{{ asset('img/section5/rata-rata-atas-icon.png') }}" class="legend-icon" alt="Rata-rata atas">

                                        <span class="legend-text">Rata-rata atas</span>
                                    </div>
                                    <div class="legend-item">
                                        <img src="{{ asset('img/section5/kuat-icon.png') }}" class="legend-icon" alt="Kuat">

                                        <span class="legend-text">Kuat</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Gambar Anak di kanan -->
                    <div class="col-lg-6 col-md-6 col-12 order-2 text-center">
                        <div class="position-relative animate-on-scroll animate-on-scroll--card">
                            <img src="{{ asset('img/section5/Section-5_boy-image-02.png') }}" alt="Anak" class="img-fluid boy-img">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<style>
    
    .line-highlight {
        width: 126px;
        height: 5px;
        background-color: #000000;
        border-radius: 2px;
        margin: 0 auto;
    }
    .section-five {
        position: relative;
        padding: 100px;
        padding-bottom: 0px;
        overflow: hidden; /* Mencegah overflow dari simbol */
    }
    .section-five .title-black {
        color: #222;
        font-weight: 700;
        font-family: 'Titillium Web', sans-serif !important; 
        font-size: 35pt;
    }

    .section-five .highlight-text {
        font-weight: 600;
    }

    .section-five .description-text {
        font-size: 20pt;
        font-family: 'Titillium Web', sans-serif;
        color: #555;
    }

    .legend-section {
        font-family: 'Titillium Web', sans-serif;
        color: #333;
        font-size: 15pt;
    }

    .legend-group {
        margin-bottom: 1.5rem;
    }

    .legend-title {
        font-size: 14px;
        font-weight: 500;
        margin-bottom: 0.3rem;
        font-family: 'Titillium Web', sans-serif;
        font-size: 15pt;
    }

    .legend-items {
        display: flex;
        gap: 2.5rem;
        flex-wrap: wrap;
    }

    .legend-item {
        display: flex;
        align-items: center;
        gap: 8px;
    }

    .legend-color {
        display: inline-block;
        width: 35px;
        height: 12px;
        border-radius: 20px;
    }

    .skill-img {
        position: relative;
        z-index: 2; /* Lebih tinggi dari simbol */
    }

    .skill-img, .boy-img {
        border-radius: 12px;
        width: 100%;
        z-index: 2; /* Pastikan gambar skill dan boy di depan simbol */
        position: relative;
    }

    .boy-img {
      	margin-top: -20rem;
      	margin-right: 15rem;
      	padding-right: 3rem;
        max-width: 150%;
      	width: 125%;
        height: auto;
    }

   .simbol {
        position: absolute;
        z-index: 0; /* Letakkan di belakang */
    }
    /* Dekorasi Global Section */
    .simbol-global {
        position: absolute;
        z-index: 0; /* Di belakang semua konten */
        opacity: 0.9;
        pointer-events: none; /* Supaya tidak ganggu klik */
    }

    .simbol-global-1 {
        top: 197px;
        right: -211px;
        width: 31rem;
    }

    .simbol-global-2 {
        bottom: 430px;
        left: -155px;
        width: 19rem;
    }

    /* Pastikan konten di atas dekorasi */
    .section-five *:not(.simbol-global) {
        position: relative;
        z-index: 2;
    }


    .legend-wrapper {
        font-family: 'Titillium Web', sans-serif;
        font-size: 14pt;
        color: #444;
    }
    .legend-icon {
        width: 28px;
        height: auto;
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

    /* Delay */
    .animate-on-scroll--title.animate { transition-delay: 0.1s; }
    .animate-on-scroll--description.animate { transition-delay: 0.2s; }
    .animate-on-scroll--card.animate { transition-delay: 0.3s; }
    .animate-on-scroll--legend.animate { transition-delay: 0.4s; }

    /* Responsive */
    @media (max-width: 992px) {
        .section-five {
            padding: 60px 20px;
            padding-bottom: 0px;
        }
        .legend-items {
            gap: 1.5rem;
            justify-content: center;
        }
        .legend-title {
            text-align: center;
            font-size: 14pt;
        }
        /* Skills side by side on tablet */
        .row.g-4 {
            --bs-gutter-x: 1.5rem;
        }
      	.boy-img {
            margin-top: 0rem;
            margin-right: 0rem;
            padding-right: 0rem;
            max-width: 100%;
            width: 100%;
            height: auto;
        }
    }

    @media (max-width: 768px) {
        .section-five .title-black { font-size: 2rem !important; line-height: 1.2; }
        .section-five .description-text { font-size: 1rem; line-height: 1.4; }
        .legend-section { font-size: 13pt; }
        .legend-wrapper { font-size: 0.875rem; }
        .legend-items {
            gap: 1rem;
            flex-direction: column;
            align-items: center;
        }
      	.boy-img {
            max-width: 100%;
            height: auto;
        }
        .legend-title {
            font-size: 13pt;
            text-align: center;
        }
           .simbol-global-1,
            .simbol-global-2 {
                width: 12rem;
                opacity: 0.4;
            }

            .simbol-global-1 {
                top: -30px;
                right: -60px;
            }

            .simbol-global-2 {
                bottom: -30px;
                left: -50px;
            }
        .row.g-4 {
            --bs-gutter-x: 1rem;
        }
        /* Legend dan boy side by side on mobile */
        .row > [class*="col-"] {
            padding: 0.5rem;
        }
    }

    @media (max-width: 576px) {
        .section-five {
            padding: 40px 15px;
            padding-bottom: 0px;
        }
        .section-five .title-black { font-size: 1.75rem !important; }
        .section-five .description-text { font-size: 0.875rem; }
        .legend-section { font-size: 12pt; }
        .legend-wrapper { font-size: 0.75rem; }
        .legend-items {
            gap: 0.75rem;
        }
        .legend-title {
            font-size: 12pt;
        }
        .simbol-global-1 { width: 10rem; }
        .simbol-global-2 { width: 8rem; }
        .row.g-4 {
            --bs-gutter-x: 0.75rem;
        }
        /* On very small screens, legend and boy stack if needed, but col-6 tries side by side */
        .col-12 {
            flex: 0 0 100%;
            max-width: 100%;
        }
    }
</style>

<script>
    // Intersection Observer untuk animasi Section Five
    document.addEventListener('DOMContentLoaded', function() {
        const sectionFive = document.querySelector('.section-five');
        if (!sectionFive) return;

        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const elements = entry.target.querySelectorAll('.animate-on-scroll');
                    elements.forEach((el, index) => {
                        setTimeout(() => {
                            el.classList.add('animate');
                        }, 100 * index);
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);

        observer.observe(sectionFive);
    });
</script>