{{-- resources/views/section/eight.blade.php --}}
<section class="section-eight py-5">

    <!-- TEKS PARAGRAF -->
    <div class="container text-center mb-5">
        <p class="paragraph-text mb-3">
            Setelah mendapatkan hasil laporan CognitiveMAP, BrainFit akan merekomendasikan strategi <br>
            dan program brain training yang dipersonalisasi sesuai kebutuhan anak.
        </p>
        <p class="paragraph-text">
          Anak yang mengikuti program brain training mendapatkan <i><strong>training</strong></i> dan 
          <i><strong>coaching</strong></i> secara komprehensif:
        </p>
    </div>

    <!-- SHAPE TRAINING -->
    <div class="container mb-5">
        <div class="row justify-content-center g-4 g-md-3">

            <div class="col-6 col-md-2 text-center">
                <img src="{{ asset('img/section8/Physical_Training.png') }}" alt="Physical Training" class="training-img">
            </div>

            <div class="col-6 col-md-2 text-center">
                <img src="{{ asset('img/section8/Cognitive_Training.png') }}" alt="Cognitive Training" class="training-img">
            </div>

            <div class="col-6 col-md-2 text-center">
                <img src="{{ asset('img/section8/EQ_Coaching.png') }}" alt="EQ Coaching" class="training-img">
            </div>

            <div class="col-6 col-md-2 text-center">
                <img src="{{ asset('img/section8/Thinking_Coaching.png') }}" alt="Thinking Coaching" class="training-img">
            </div>

        </div>
    </div>

    <!-- GAMBAR BACKGROUND PUSH UP -->
    <div class="pushup-wrapper">
        <img src="{{ asset('img/section8/Section 9_image-02.png') }}" alt="Anak Push Up" class="img-fluid w-100">
    </div>

</section>

<style>
    .section-eight .paragraph-text {
        font-family: 'Titillium Web', sans-serif;
        font-size: 20pt;
        color: #333;
        line-height: 1.4;
        font-weight: 400;
        margin-bottom: 1rem;
    }

    .section-eight .paragraph-text strong {
        font-weight: 700;
    }

    .training-img {
        max-width: 160px;
        width: 100%;
        height: auto;
        transition: transform 0.3s ease;
        display: block;
        margin: 0 auto; /* Ensure centering within column */
    }

    .training-img:hover {
        transform: scale(1.05);
    }

    .pushup-wrapper img {
        object-fit: cover;
        width: 100%;
        height: auto;
        display: block;
    }

    /* Responsive - Compact & Fluid */
    @media (max-width: 992px) {
        .section-eight .paragraph-text {
            font-size: 18pt;
            line-height: 1.3;
        }
        
        .training-img {
            max-width: 140px;
        }
        
        .row {
            --bs-gutter-x: 1rem;
        }
    }

    @media (max-width: 768px) {
        .section-eight {
            padding: 40px 0;
        }
        
        .section-eight .paragraph-text {
            font-size: 16pt;
            line-height: 1.4;
            padding: 0 1rem;
        }
        
        .training-img {
            max-width: 130px;
        }
        
        .row {
            --bs-gutter-x: 0.75rem;
            margin-top: 1.5rem;
        }
        
        /* Ensure icons centered in smaller columns */
        .col-6.col-md-2 {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    }

    @media (max-width: 576px) {
        .section-eight {
            padding: 30px 0;
        }
        
        .section-eight .paragraph-text {
            font-size: 14pt;
            line-height: 1.4;
            padding: 0 0.5rem;
        }
        
        .training-img {
            max-width: 110px;
        }
        
        .row {
            --bs-gutter-x: 0.5rem;
        }
        
        .col-6.col-md-2 {
            padding: 0.25rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    }
</style>