{{-- resources/views/section/six.blade.php --}}
<div class="section-six">
    <div class="container">
        <h2 class="section-title animate-on-scroll animate-on-scroll--title">
            Apa itu CognitiveMAP?
        </h2>

        <div class="row content-row align-items-center g-4">
            <!-- Kiri -->
            <div class="col-12 col-lg-6 mb-4 mb-lg-0 left-col">
                <ul class="features-list">
                    <li class="feature-item animate-on-scroll animate-on-scroll--item">
                        <img src="{{ asset('img/section6/Icon_1.png') }}" alt="" class="feature-icon">
                        <span>Untuk usia 4 – 18 tahun</span>
                    </li>
                    <li class="feature-item animate-on-scroll animate-on-scroll--item">
                        <img src="{{ asset('img/section6/Icon_2.png') }}" alt="" class="feature-icon">
                        <span>Durasi asesmen 1,5 jam</span>
                    </li>
                    <li class="feature-item animate-on-scroll animate-on-scroll--item">
                        <img src="{{ asset('img/section6/Icon_3.png') }}" alt="" class="feature-icon">
                        <span>Laporan hasil CognitiveMAP</span>
                    </li>
                    <li class="feature-item animate-on-scroll animate-on-scroll--item">
                        <img src="{{ asset('img/section6/Icon_4.png') }}" alt="" class="feature-icon">
                        <span>Konsultasi 1-1 dengan <br/> BrainFit Consultant</span>
                    </li>
                    <li class="feature-item animate-on-scroll animate-on-scroll--item">
                        <img src="{{ asset('img/section6/Icon_5.png') }}" alt="" class="feature-icon">
                        <span>Rekomendasi program <br/> brain training yang dipersonalisasi</span>
                    </li>
                </ul>

                <a href="#section12" class="cta-button animate-on-scroll animate-on-scroll--cta">
                    Konsultasi Sekarang!
                </a>
            </div>

            <!-- Kanan -->
            <div class="col-12 col-lg-6 right-col">
                <div class="video-wrapper">
                    <div class="video-container" id="videoContainer">
                        <img src="{{ asset('img/section6/Thumbnail_youtube.png') }}" 
                             alt="Video Thumbnail" 
                             class="video-thumbnail" 
                             id="videoThumbnail">
                      	<div class="play-button-overlay">
                            Play Now <svg width="16" height="16" viewBox="0 0 16 16" fill="none">
                                <path d="M5 3L13 8L5 13V3Z" fill="#333"/>
                            </svg>
                        </div>
                        <iframe 
                            src="" 
                            data-src="https://www.youtube.com/embed/SCtqJbEb_N8?autoplay=1&controls=1&rel=0&modestbranding=1"
                            title="Apa itu CognitiveMAP?" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                            referrerpolicy="strict-origin-when-cross-origin" 
                            allowfullscreen
                            class="video-iframe"
                            id="videoIframe"
                            style="display: none;">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
  	.play-button-overlay {
        position: absolute;
        bottom: 20px;
        left: 15px;
        background-color: #d1d2d4;
        padding: 1px 16px 1px 16px;
        border-radius: 30px;
        color: #333333;
        font-size: 14px;
        font-weight: 600;
        font-family: 'Titillium Web', sans-serif;
        pointer-events: none; /* Agar tombol tidak mengganggu klik, hanya tampilan */
        transition: opacity 0.3s ease;
        display: flex;
        align-items: center;
    }

    .section-six {
        padding: 60px 0;
        background-color: #f2f2f2;
    }

    .section-title {
        text-align: center;
        font-weight: 700;
        font-family: 'Titillium Web', sans-serif;
        font-size: clamp(24pt, 5vw, 35pt); /* Fluid font size */
        color: #222;
        margin-bottom: 30px;
        line-height: 1.1;
        letter-spacing: -0.5px; /* Slight letter spacing for elegance */
    }

    .content-row {
        --bs-gutter-x: 1.5rem;
    }

    .left-col .features-list {
        list-style: none;
        padding: 0;
        margin: 0 0 1.5rem 0;
        font-family: 'Titillium Web', sans-serif;
        font-size: clamp(14pt, 3vw, 20pt); /* Fluid font size */
        color: #333;
    }

    .feature-item {
        display: flex;
        align-items: flex-start;
        margin-bottom: 1.5rem;
        line-height: 1.2;
        transition: transform 0.2s ease; /* Hover effect for beauty */
    }

    .feature-item:hover {
        transform: translateX(5px); /* Subtle slide on hover */
    }

    .feature-icon {
        width: 28px;
        margin-right: 8px;
        flex-shrink: 0;
        margin-top: 1px;
        transition: transform 0.2s ease;
    }

    .feature-item:hover .feature-icon {
        transform: scale(1.1);
    }

    .cta-button {
        display: inline-block;
        background-color: #F5AA1E;
        padding: 16px 30px;
        color: #fff;
        font-size: clamp(16pt, 4vw, 35pt); /* Fluid font size */
        font-weight: 700;
        border-radius: 40px;
        text-decoration: none;
        font-family: 'Titillium Web', sans-serif;
        transition: all 0.3s ease;
        line-height: 1;
        box-shadow: 0 4px 12px rgba(245, 170, 30, 0.3); /* Subtle shadow for depth */
    }

    .cta-button:hover {
        background-color: #e69a00;
        color: #fff;
        transform: translateY(-3px) scale(1.02); /* Enhanced hover with lift and scale */
        box-shadow: 0 6px 20px rgba(245, 170, 30, 0.4);
    }

    .right-col {
        text-align: center;
    }

    .video-wrapper {
        position: relative;
        display: inline-block;
        width: 100%;
    }

    .video-container {
        position: relative;
        width: 100%;
        max-width: 550px;
        margin: 0 auto;
        aspect-ratio: 16/9; /* Maintain video ratio */
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 8px 25px rgba(0,0,0,0.15); /* Enhanced shadow for beauty */
        transition: transform 0.3s ease;
    }

    .video-container:hover {
        transform: scale(1.02); /* Slight zoom on hover */
    }

    .video-iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border-radius: 20px;
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

    .animate-on-scroll--title.animate { transition-delay: 0.1s; }
    .animate-on-scroll--item.animate:nth-child(1) { transition-delay: 0.2s; }
    .animate-on-scroll--item.animate:nth-child(2) { transition-delay: 0.25s; }
    .animate-on-scroll--item.animate:nth-child(3) { transition-delay: 0.3s; }
    .animate-on-scroll--item.animate:nth-child(4) { transition-delay: 0.35s; }
    .animate-on-scroll--item.animate:nth-child(5) { transition-delay: 0.4s; }
    .animate-on-scroll--cta.animate { transition-delay: 0.5s; }

    /* Responsive - Compact & Beautiful */
    @media (max-width: 992px) {
        .content-row {
            --bs-gutter-x: 1rem;
            text-align: center;
        }

        .feature-item {
            justify-content: center;
            margin-bottom: 0.75rem; /* Tighter */
        }

        .feature-icon {
            margin-right: 0;
            margin-bottom: 0.25rem;
        }

        .cta-button {
            margin-top: 0.75rem;
        }

        .section-title {
            font-size: 28pt;
            margin-bottom: 20px; /* Reduced */
        }

        .features-list {
            font-size: 18pt;
            padding: 0 1rem; /* Side padding for centering */
        }
    }

    @media (max-width: 768px) {
        .section-six {
            padding: 40px 0;
        }

        .section-title {
            font-size: 22pt;
            margin-bottom: 15px; /* More compact */
        }

        .features-list {
            font-size: 14pt;
            text-align: center;
            padding: 0;
        }

        .feature-item {
            flex-direction: column;
            align-items: center;
            margin-bottom: 0.5rem; /* Very tight */
            padding: 0 0.5rem;
        }

        .feature-icon {
            margin-right: 0;
            margin-bottom: 0.25rem;
        }

        .cta-button {
            font-size: 18pt;
            padding: 12px 25px;
            margin-top: 1rem;
            display: block;
            margin-left: auto;
            margin-right: auto; /* Center on mobile */
        }

        .video-container {
            max-width: 100%;
            margin-top: 1rem;
        }

        .content-row {
            --bs-gutter-x: 0.75rem;
        }
    }

    @media (max-width: 576px) {
        .section-six {
            padding: 30px 0; /* Compact padding */
        }

        .section-title {
            font-size: 18pt;
            margin-bottom: 10px; /* Minimal */
        }

        .features-list {
            font-size: 13pt;
        }

        .feature-item {
            margin-bottom: 0.4rem; /* Ultra tight */
        }

        .cta-button {
            font-size: 16pt;
            padding: 10px 20px;
        }

        .content-row {
            --bs-gutter-x: 0.5rem;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const sectionSix = document.querySelector('.section-six');
        if (!sectionSix) return;

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

        observer.observe(sectionSix);

        // Video Thumbnail & Play Button Click
        const videoThumbnail = document.getElementById('videoThumbnail');
        const videoIframe = document.getElementById('videoIframe');
        const playButton = document.getElementById('playButton');

        function playVideo() {
            videoIframe.setAttribute('src', videoIframe.getAttribute('data-src'));
            videoIframe.style.display = 'block';
            videoThumbnail.style.display = 'none';
            if(playButton) playButton.style.display = 'none';
        }

        if (videoThumbnail) {
            videoThumbnail.addEventListener('click', playVideo);
        }

        if (playButton) {
            playButton.addEventListener('click', playVideo);
        }
    });
</script>