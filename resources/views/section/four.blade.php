<div class="section-four py-5 position-relative">
    <div class="container text-center">
    <div class="mt-1 mb-3 line-highlight"></div>
    <!-- Dekorasi kiri -->
    <img src="{{ asset('img/section4/Simbol1.png') }}"
         alt="{{ __('section.four.decor_left_alt') }}" class="decor-left">
        <!-- Judul -->
        <h3 class="fw-bold title-four animate-on-scroll" style="font-family: 'Titillium Web', sans-serif; font-weight: 700; font-size: 35pt; margin-bottom: 4rem;">
            {!! __('section.four.title') !!}
        </h3>
        <!-- Paragraf -->
        <p class="mt-9 paragraph-four animate-on-scroll" style="max-width: 735px; margin: 0 auto; text-align: center;font-family: 'Titillium Web', sans-serif; font-size: 20pt;">
            {!! __('section.four.description') !!}
        </p>
        <!-- Grafik Tengah -->
        <div class="mt-4 position-relative d-flex flex-column align-items-center">
            <img src="{{ asset('img/section4/Learning-Gap-Graphic-01.png') }}"
                 alt="{{ __('section.four.graphic_alt') }}" class="img-fluid animate-on-scroll">
            <!-- Button di pojok kanan bawah -->
            <a href="#section12" class="btn cta-button-3 animate-on-scroll animate-on-scroll--cta mt-3 mt-md-0">
                Konsultasi Sekarang!
            </a>
        </div>
    <!-- Dekorasi kanan -->
    <img src="{{ asset('img/section4/Simbol2.png') }}"
         alt="{{ __('section.four.decor_right_alt') }}" class="decor-right">
    </div>
</div>
<style>
.section-four {
    overflow: hidden;
}
      .cta-button-3 {
        display: inline-block;
        background-color: #F5AA1E;
        padding: 16px 30px;
        color: #fff;
        font-size: clamp(4pt, 4vw, 25pt); /* Fluid font size */
        font-weight: 700;
        border-radius: 40px;
        text-decoration: none;
        font-family: 'Titillium Web', sans-serif;
        transition: all 0.3s ease;
        line-height: 1;
        box-shadow: 0 4px 12px rgba(245, 170, 30, 0.3); /* Subtle shadow for depth */
    }
      .cta-button-3:hover {
        background-color: #e69a00;
        color: #fff;
        transform: translateY(-3px) scale(1.02); /* Enhanced hover with lift and scale */
        box-shadow: 0 6px 20px rgba(245, 170, 30, 0.4);
    }
.line-highlight {
    width: 126px;
    height: 5px;
    background-color: #000000;
    border-radius: 2px;
    margin: 0 auto;
}
/* Dekorasi posisi kiri */
.decor-left {
    position: absolute;
    left: -199px;
    top: 39%;
    transform: translateY(-50%);
    max-width: 23rem;
    opacity: 0.9;
}
/* Dekorasi posisi kanan */
.decor-right {
    position: absolute;
    right: -196px;
    top: 68%;
    transform: translateY(-50%);
    max-width: 22rem;
    opacity: 0.9;
}
/* Animasi Sederhana Scroll untuk Section Four */
.animate-on-scroll {
    opacity: 0;
    transform: translateY(30px);
    transition: opacity 0.6s ease-out, transform 0.6s ease-out;
}
.animate-on-scroll.animate {
    opacity: 1;
    transform: translateY(0);
}
/* Staggered delay */
.title-four.animate { transition-delay: 0.1s; }
.paragraph-four.animate { transition-delay: 0.2s; }
.animate-on-scroll:nth-child(3).animate { transition-delay: 0.3s; } /* Graphic */
/* Responsive untuk tablet & HP */
@media (max-width: 768px) {
    .decor-left, .decor-right {
        max-width: 110px;
        opacity: 0.5;
    }
  
    .title-four {
        font-size: 2rem !important;
    }
  
    .paragraph-four {
        font-size: 1.125rem !important;
    }

    .cta-button-3 {
        position: static !important;
        padding: 12px 24px;
        font-size: clamp(12px, 5vw, 18px);
        margin-top: 1rem;
    }
}
@media (max-width: 576px) {
    .title-four {
        font-size: 1.75rem !important;
        margin-bottom: 2rem;
       text-align: left;
       margin-right:2rem
    }
  
    .paragraph-four {
        font-size: 1rem !important;
        padding: 0 1rem;
    }

    .cta-button-3 {
        width: 100%;
        max-width: 300px;
        padding: 10px 20px;
        font-size: 14px;
    }
}
@media (min-width: 992px) {
    .title-four {
        font-size: 2.5rem !important;
    }
  
    .paragraph-four {
        font-size: 1.25rem !important;
    }

    .cta-button-3 {
        position: absolute;
        bottom: 0;
        right: 0;
        margin: 0.5rem;
    }
}
</style>
<script>
    // JS Sederhana untuk Trigger Animasi Saat Scroll (Intersection Observer) - Untuk Section Four
    document.addEventListener('DOMContentLoaded', function() {
        const sectionFour = document.querySelector('.section-four');
        if (!sectionFour) return;
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
                        }, 100 * index); // Stagger untuk title, para, graphic
                    });
                    observer.unobserve(entry.target);
                }
            });
        }, observerOptions);
        observer.observe(sectionFour);
    });
</script>