{{-- resources/views/section/four.blade.php --}}
<div class="section-four" id="section4">
    <div class="container-fluid px-0">
        <div class="row align-items-center g-0">

            <!-- Gambar kiri -->
            <div class="col-md-4 position-relative overflow-hidden section-four-left">
                <img src="{{ asset('img/holiday/section4/gambaranak.png') }}" 
                     alt="Holiday Program" 
                     class="img-fluid section-four-image">
            </div>

            <!-- Teks kanan -->
            <div class="col-md-8 d-flex flex-column justify-content-center p-5 position-relative section-four-text">
                <h5 class="section-four-subtitle">Join Holiday Program</h5>

                <h2 class="section-four-title">Make My Brain Sharper</h2>

                <p class="section-four-highlight">
                    Holiday Program untuk siswa kelas 2 – kelas 7.
                </p>

                <p class="section-four-desc">
                    Program 3 hari ini dirancang untuk membantu anak <br> 
                    mengenali cara otaknya berpikir, merasa, dan belajar<br> 
                    melalui 5 Brain Adventures yang mereka jalani <br>
                    seperti bermain dan berkolaborasi dengan teman.
                </p>

                <!-- Dekorasi -->
                <img src="{{ asset('img/holiday/section4/icon.png') }}" 
                     alt="Blue Curve Shape" 
                     class="section-four-decor">
            </div>

        </div>
    </div>
</div>

<style>
    /* === SECTION FOUR WRAPPER === */
    .section-four {
        background-color: #FAFAFC;
        font-family: 'Titillium Web', sans-serif;
        position: relative;
        overflow: hidden;
    }

    /* === KIRI (GAMBAR) === */
    .section-four-left {
        clip-path: polygon(0 0, 100% 0, 85% 100%, 0% 100%);
    }

    .section-four-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transform: scale(1.03);
    }

    /* === KANAN (TEKS) === */
    .section-four-text {
        background-color: #FAFAFC;
        color: #333;
        position: relative;
        z-index: 2;
    }

    .section-four-subtitle {
        color: #000;
        font-weight: 700;
        font-size: 25pt;
        margin-bottom: 0.3rem;
    }

    .section-four-title {
        color: #CD1989;
        font-weight: 700;
        font-size: 45pt;
        margin-bottom: 1.2rem;
        line-height: 1.2;
    }

    .section-four-highlight {
        color: #000;
        font-weight: 600;
        font-size: 20pt;
        margin-bottom: 0.75rem;
    }

    .section-four-desc {
        color: #000;
        font-weight: 400;
        font-size: 20pt;
        line-height: 1.6;
        max-width: 700px;
    }

    /* === DEKORASI === */
    .section-four-decor {
        position: absolute;
        bottom: 0;
        right: 0;
        width: 280px;
        height: auto;
        transform: translate(20%, 30%);
        pointer-events: none;
        user-select: none;
        z-index: 0;
    }

    /* === RESPONSIVE === */

    /* Tablet Landscape / Medium */
    @media (max-width: 992px) {
        .section-four {
            text-align: center;
        }

        .section-four-left {
            clip-path: none;
        }

        .section-four-image {
            height: auto;
        }

        .section-four-text {
            padding: 3rem 2rem;
        }

        .section-four-subtitle {
            font-size: 18pt;
        }

        .section-four-title {
            font-size: 32pt;
        }

        .section-four-highlight {
            font-size: 16pt;
        }

        .section-four-desc {
            font-size: 15pt;
        }

        .section-four-decor {
            width: 200px;
            transform: translate(10%, 20%);
        }
    }

    /* Tablet Portrait & Mobile */
    @media (max-width: 768px) {
        .section-four-text {
            padding: 2.5rem 1.5rem;
        }

        .section-four-subtitle {
            font-size: 16pt;
        }

        .section-four-title {
            font-size: 26pt;
        }

        .section-four-highlight {
            font-size: 14pt;
        }

        .section-four-desc {
            font-size: 13pt;
            line-height: 1.5;
        }

        .section-four-decor {
            width: 160px;
            transform: translate(5%, 15%);
        }
    }

    /* Mobile Small */
    @media (max-width: 576px) {
        .section-four-text {
            padding: 2rem 1.25rem;
        }

        .section-four-subtitle {
            font-size: 14pt;
        }

        .section-four-title {
            font-size: 22pt;
        }

        .section-four-highlight {
            font-size: 12pt;
        }

        .section-four-desc {
            font-size: 11.5pt;
        }

        .section-four-decor {
            width: 120px;
            transform: translate(10%, 20%);
        }
    }
</style>
