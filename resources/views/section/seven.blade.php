{{-- resources/views/section/seven.blade.php --}}
<section class="section-seven position-relative">
    <!-- Background -->
    <div class="background-girl"></div>

    <div class="container text-center py-4">
        <!-- Judul -->
        <h2 class="section-title">
            We build <br >
            the best learning brain<br>
            with <span class="five-t">5T</span> Smart<br class="">
            Study System
        </h2>

        <!-- Custom Tight Row for Icons -->
        <div class="tight-icons-row mt-3">
            <div class="tight-icon-item">
                <img src="{{ asset('img/section7/Test.png') }}" alt="Test" class="icon-seven mb-1">
            </div>
            <div class="tight-icon-item">
                <img src="{{ asset('img/section7/Tailor.png') }}" alt="Tailor" class="icon-seven mb-1">
            </div>
            <div class="tight-icon-item">
                <img src="{{ asset('img/section7/Train.png') }}" alt="Train" class="icon-seven mb-1">
            </div>
            <div class="tight-icon-item">
                <img src="{{ asset('img/section7/Teach.png') }}" alt="Teach" class="icon-seven mb-1">
            </div>
            <div class="tight-icon-item">
                <img src="{{ asset('img/section7/Track.png') }}" alt="Track" class="icon-seven mb-1">
            </div>
        </div>
    </div>
</section>

<style>
.section-seven {
    position: relative;
    width: 100%;
    overflow: hidden;
}

.background-girl {
    background-image: url('{{ asset('img/section7/Section_9_girl_image.png') }}');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: absolute;
    inset: 0;
    z-index: -1;
    opacity: 1;
}

.section-seven .section-title {
    color: #fff;
    font-size: 50pt;
    font-weight: 700;
    margin-bottom: 1rem;
    text-align: left;
    line-height: 1.1;
}

.five-t {
    font-size: 65pt; /* Fluid size for 5T, scales with viewport */
    font-weight: 900; /* Bolder for emphasis */
    display: inline-block;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3); /* Shadow for depth */
}

.icon-seven {
    width: 110px;
    height: auto;
    transition: transform 0.3s ease;
    display: block;
    margin: 0 auto;
}

.icon-seven:hover {
    transform: scale(1.05);
}

/* Custom Tight Row */
.tight-icons-row {
    display: flex;
    flex-wrap: wrap;
    justify-content: flex-start; /* Left-aligned */
    gap: 0.25rem;
    width: 100%;
    padding: 0 1rem;
}

.tight-icon-item {
    flex: 0 0 auto;
    text-align: left;
    width: 20%;
    max-width: 120px;
    padding: 0.25rem;
}

/* Responsive - More Compact */
@media (max-width: 992px) {
    .section-title {
        text-align: center; /* Center on tablet for better fit */
        margin-bottom: 0.75rem;
    }
    
    .tight-icon-item {
        width: 25%;
        max-width: 80px;
    }
    
    .icon-seven {
        width: 75px;
    }
    
    .tight-icons-row {
        gap: 0.5rem;
        padding: 0 0.5rem;
    }
}

@media (max-width: 768px) {
    .section-seven {
        padding: 30px 0;
    }
    
    .section-seven .section-title {
        font-size: clamp(20px, 8vw, 24px);
        margin-bottom: 0.5rem;
        text-align: left;
    }
    
    .five-t {
        font-size: clamp(30pt, 12vw, 40pt); /* Smaller on mobile */
    }
    
    .tight-icon-item {
        width: 33.33%;
        max-width: 70px;
    }
    
    .icon-seven {
        width: 65px;
    }
    
    .tight-icons-row {
        gap: 0.25rem;
        padding: 0 0.25rem;
    }
}

@media (max-width: 576px) {
    .section-seven {
        padding: 20px 0;
    }
    
    .section-title {
        font-size: clamp(18px, 7vw, 20px);
        margin-bottom: 0.25rem;
    }
    
    .five-t {
        font-size: clamp(25pt, 10vw, 30pt);
    }
    
    .tight-icon-item {
        width: 50%;
        max-width: 60px;
    }
    
    .icon-seven {
        width: 55px;
    }
    
    .tight-icons-row {
        gap: 0.1rem;
        padding: 0;
    }
    
    .tight-icon-item {
        padding: 0.1rem;
    }
}
</style>