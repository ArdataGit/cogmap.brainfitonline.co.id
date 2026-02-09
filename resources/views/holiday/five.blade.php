<section class="brain-adventure py-5 text-center" style="background-color: #fff;">
    <div class="container">
      
        <div class="line-highlight"></div>
        <!-- Judul -->
        <h2 class="fw-bold text-title mb-2" style="color: #000;">
            Selama Program, Anak Akan Menjalani<br>
            <span style="color: #000;">5 Brain Adventures selama 3 hari</span>
        </h2>
        <p class="text-muted text-subtitle mb-5">
            Perjalanan otak yang dirancang untuk memperkuat fokus, emosi, logika, dan rasa percaya diri.
        </p>

        <!-- Swiper -->
        <div class="swiper brainSwiper">
            <div class="swiper-wrapper">

                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <img src="img/holiday/section5/adventures2.png" alt="Super Memory Adventure" class="adventure-img">
                </div>

                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <img src="img/holiday/section5/adventures1.png" alt="Brain & Body Adventure" class="adventure-img">
                </div>

                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <img src="img/holiday/section5/adventures3.png" alt="IQ Coaching Adventure" class="adventure-img">
                </div>

                <!-- Slide 4 -->
                <div class="swiper-slide">
                    <img src="img/holiday/section5/adventures4.png" alt="Focus Adventure" class="adventure-img">
                </div>

                <!-- Slide 5 -->
                <div class="swiper-slide">
                    <img src="img/holiday/section5/adventures5.png" alt="Confidence Adventure" class="adventure-img">
                </div>
            </div>

            <!-- Navigasi -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

            <!-- Pagination (titik-titik bawah) -->
            <div class="swiper-pagination"></div>
        </div>

        <!-- CTA -->
        <div class="mt-5">
            <a href="https://wa.me/62811988190?text=Hi%2C%20saya%20tertarik%20untuk%20tahu%20lebih%20lanjut%20mengenai%20Holiday%20Program%20di%20BrainFit.%20Boleh%20dibantu%20penjelasannya%20lebih%20detail%3F"
				 class="btn btn-lg fw-bold cta-button-sec5 text-white px-4 py-2" 
               style="background-color:#555;border-radius:50px;">
                Konsultasi GRATIS Sekarang!
            </a>
            <p class="mt-2 cta-text-sec5 text-dark">
                Dapatkan Early Bird hingga 31 Oktober.<br>Kuota Terbatas.
            </p>
        </div>
    </div>
</section>

<!-- SwiperJS CDN -->
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- SwiperJS Init -->
<script>
    var swiper = new Swiper(".brainSwiper", {
        slidesPerView: 2,
        spaceBetween: 20,
        loop: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
            delay: 4000,
        },
        breakpoints: {
            0: { 
                slidesPerView: 1.2, 
                spaceBetween: 10 
            },
            576: { 
                slidesPerView: 2, 
                spaceBetween: 20 
            },
            768: { 
                slidesPerView: 2, 
                spaceBetween: 25 
            },
            1024: { 
                slidesPerView: 3, 
                spaceBetween: 30 
            },
        },
    });
</script>

<style>
    .brain-adventure h2 {
      	color: #0000;
        font-family: 'Titillium Web', sans-serif;
        font-size: 35pt;
    }
    .text-title{
      	color: #0000;
        font-family: 'Titillium Web', sans-serif;
        font-weight: 700;
        font-size: 20pt;
    }
    .cta-button-sec5{
      	color: #ffff;
        font-family: 'Titillium Web', sans-serif;
        font-weight: 700;
        font-size: 35pt;
    }
    .cta-text-sec5{
      	color: #0000;
        font-family: 'Titillium Web', sans-serif;
        font-weight: 600;
        font-size: 25pt;
    }
  
    .text-subtitle{
      	color: #0000;
        font-family: 'Titillium Web', sans-serif;
        font-weight: 700;
        font-size: 20pt;
    }

    .adventure-img {
        width: 100%;
        height: auto;
        object-fit: cover;
    }
  
    .line-highlight {
        width: 50px;
        height: 4px;
        background-color: #000;
        border-radius: 2px;
        margin: 0 auto 1rem;
    }
  
    .brain-adventure {
        position: relative;
    }

    .brainSwiper {
        position: relative;
        padding: 0 32px; /* beri ruang kiri-kanan agar tombol tidak menimpa gambar */
        overflow: hidden;
    }

    /* Tombol Next/Prev dengan bulatan */
    .swiper-button-next,
    .swiper-button-prev {
        width: 45px;
        height: 45px;
        background-color: rgba(205, 25, 137, 0.15);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 10;
        opacity: 0.8;
    }

    /* Icon panah */
    .swiper-button-next::after,
    .swiper-button-prev::after {
        content: '';
        display: inline-block;
        width: 14px;
        height: 14px;
        border-top: 3px solid #CD1989;
        border-right: 3px solid #CD1989;
        transform: rotate(45deg);
    }

    /* Panah kiri */
    .swiper-button-prev::after {
        transform: rotate(225deg);
    }

    /* Hover effect */
    .swiper-button-next:hover,
    .swiper-button-prev:hover {
        background-color: #CD1989;
        opacity: 1;
    }

    .swiper-button-next:hover::after,
    .swiper-button-prev:hover::after {
        border-color: #fff;
    }

    /* Posisi tombol di luar gambar (tidak menimpa) */
    .swiper-button-prev {
        left: 10px;
    }

    .swiper-button-next {
        right: 10px;
    }

    /* Pagination (titik-titik bawah) sedikit jarak dari bawah */
    .swiper-pagination {
        margin-top: 20px;
        position: relative;
    }

    .swiper-pagination-bullet {
        background: rgba(205, 25, 137, 0.5);
        opacity: 0.6;
        transition: all 0.3s ease;
    }

    .swiper-pagination-bullet-active {
        background: #CD1989;
        opacity: 1;
    }

/* Responsif Umum */
@media (max-width: 1200px) {
    .brain-adventure h2 {
        font-size: 28pt;
    }
    .text-subtitle {
        font-size: 18pt;
    }
}

@media (max-width: 992px) {
    .brainSwiper {
        padding: 0 40px;
    }
    .swiper-button-next,
    .swiper-button-prev {
        width: 40px;
        height: 40px;
    }
    .swiper-button-next::after,
    .swiper-button-prev::after {
        width: 12px;
        height: 12px;
        border-width: 2.5px;
    }
    .swiper-button-prev {
        left: 5px;
    }
    .swiper-button-next {
        right: 5px;
    }
    .brain-adventure h2 {
        font-size: 24pt;
    }
    .text-subtitle {
        font-size: 16pt;
    }
}

@media (max-width: 768px) {
    .brain-adventure h2 {
        font-size: 1.5rem; /* 24px */
        line-height: 1.3;
        padding: 0 1rem;
    }
    .text-subtitle {
        font-size: 14pt;
        padding: 0 1rem;
    }
    .cta-button-sec5 {
        font-size: 16pt;
        padding: 12px 24px;
    }
    .cta-text-sec5 {
        font-size: 12pt;
    }
    .brainSwiper {
        padding: 0 30px;
    }
    .swiper-button-next,
    .swiper-button-prev {
        width: 36px;
        height: 36px;
    }
    .swiper-button-next::after,
    .swiper-button-prev::after {
        width: 10px;
        height: 10px;
        border-width: 2px;
    }
}

@media (max-width: 576px) {
    .brainSwiper {
        padding: 0 25px;
    }
    .swiper-button-next,
    .swiper-button-prev {
        width: 32px;
        height: 32px;
    }
    .swiper-button-next::after,
    .swiper-button-prev::after {
        width: 9px;
        height: 9px;
        border-width: 1.8px;
    }
    .brain-adventure h2 {
        font-size: 1.25rem; /* 20px */
    }
    .text-subtitle {
        font-size: 13pt;
    }
    .cta-button-sec5 {
        font-size: 14pt;
        padding: 10px 20px;
    }
    .cta-text-sec5 {
        font-size: 11pt;
    }
    .line-highlight {
        width: 40px;
    }
}

@media (max-width: 480px) {
    .brainSwiper {
        padding: 0 20px;
    }
    .swiper-button-next,
    .swiper-button-prev {
        width: 28px;
        height: 28px;
    }
    .swiper-button-next::after,
    .swiper-button-prev::after {
        width: 8px;
        height: 8px;
    }
}
</style>