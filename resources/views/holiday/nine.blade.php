{{-- resources/views/section/nine.blade.php --}}
<div class="section-nine py-5" id="section9">
    <div class="container text-center">

        <div class="line-highlight" style="background-color: #00000;"></div>
        <h2 class="section-nine-title mb-3">
            Apa kata mereka tentang aktivitas di BrainFit?
        </h2>

        <!-- Carousel -->
        <div id="testimonialCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="6000">
            <div class="carousel-inner">

                @for ($i = 1; $i <= 6; $i++)
                    <div class="carousel-item {{ $i == 1 ? 'active' : '' }}">
                        <img src="{{ asset('img/holiday/section9/' . $i .'E'. '.png') }}" 
                             class="mx-auto testimonial-img d-block w-auto" 
                             alt="Testimoni {{ $i }}">
                    </div>
                @endfor

            </div>

            <!-- Panah navigasi -->
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon custom-arrow" aria-hidden="true"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon custom-arrow" aria-hidden="true"></span>
            </button>

            <!-- Indikator (bulatan di bawah) -->
            <div class="carousel-indicators position-relative mt-4">
                @for ($i = 0; $i < 6; $i++)
                    <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="{{ $i }}" 
                            class="{{ $i == 0 ? 'active' : '' }}" 
                            aria-current="{{ $i == 0 ? 'true' : 'false' }}"></button>
                @endfor
            </div>
        </div>
    </div>
</div>

<style>
.section-nine {
    background-color: #f7f7f7;
    font-family: 'Titillium Web', sans-serif;
}

.section-nine-title {
    font-weight: 700;
    font-size: 26pt;
    color: #2c2c2c;
    position: relative;
    margin-bottom: 1.5rem !important;
}

/* Pastikan container carousel menyesuaikan gambar */
#testimonialCarousel {
    display: inline-block;
    width: auto;
    height: auto;
}

/* Gambar otomatis menentukan tinggi carousel */
.testimonial-img {
        max-width: 63%;
    height: auto;
    margin-top: 0.5rem;
}

/* Panah navigasi */
.carousel-control-prev,
.carousel-control-next {
    width: 5%;
}

.carousel-control-prev-icon,
.carousel-control-next-icon {
    background-color: #ddd;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    background-size: 60%;
}

.carousel-control-prev-icon {
    background-image: url("data:image/svg+xml,%3Csvg fill='%23000' viewBox='0 0 16 16'%3E%3Cpath d='M11 1L3 8l8 7'/%3E%3C/svg%3E");
}

.carousel-control-next-icon {
    background-image: url("data:image/svg+xml,%3Csvg fill='%23000' viewBox='0 0 16 16'%3E%3Cpath d='M5 1l8 7-8 7'/%3E%3C/svg%3E");
}

/* Indikator */
.carousel-indicators [data-bs-target] {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    background-color: #aaa;
    opacity: 0.5;
}

.carousel-indicators .active {
    background-color: #0dbbe7;
    opacity: 1;
}

/* Responsive */
@media (max-width: 768px) {
    .section-nine-title {
        font-size: 20pt;
        margin-bottom: 1rem !important;
    }
    .testimonial-img {
        max-width: 90%;
    }
}
</style>
