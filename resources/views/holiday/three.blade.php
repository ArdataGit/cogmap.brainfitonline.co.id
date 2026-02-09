{{-- resources/views/section/three.blade.php --}}
<div class="section-three py-5" id="section3">
    <div class="container text-center">

        <!-- Judul -->
        <div class="section-header mb-4">
            <div class="line-highlight"></div>
            <h2 class="section-title">
                Apakah Anak Anda Mengalami Hal ini Saat Liburan?
            </h2>
        </div>

        <!-- Card Gambar -->
        <div class="row justify-content-center">
            <div class="col-md-3 col-6 mb-4">
                <img src="{{ asset('img/holiday/section3/Section 3_image1.png') }}" 
                     alt="Anak sulit fokus" class="issue-image">
            </div>
            <div class="col-md-3 col-6 mb-4">
                <img src="{{ asset('img/holiday/section3/Section 3_image2.png') }}" 
                     alt="Anak main game" class="issue-image">
            </div>
            <div class="col-md-3 col-6 mb-4">
                <img src="{{ asset('img/holiday/section3/Section 3_image3.png') }}" 
                     alt="Anak mudah frustrasi" class="issue-image">
            </div>
            <div class="col-md-3 col-6 mb-4">
                <img src="{{ asset('img/holiday/section3/Section 3_image4.png') }}" 
                     alt="Anak kurang interaksi" class="issue-image">
            </div>
        </div>

        <!-- Paragraf Penjelasan -->
        <div class="section-text mt-4">
            <p>
                Menjelang liburan biasanya motivasi belajar menurun dan konsentrasi makin pendek karena rutinitas berubah.<br><br>
                Sebagian besar anak melewati liburan dengan layar dan game berjam-jam.<br><br>
                Seru sesaat, tapi membuat otak kurang terstimulasi dan semangat belajar menurun saat sekolah dimulai lagi.
                Ketika akan masuk sekolah lagi, kendala anak sering mudah menyerah, marah, atau merasa tidak mampu, tetap sama.<br><br>
                Orang tua bingung bagaimana membantu mereka tetap tenang dan percaya diri menghadapi tantangan.
            </p>

            <h5 class="cta-text mt-4">
                Yuk lakukan sesuatu yang berbeda di liburan ini!
            </h5>
        </div>
    </div>
</div>

<style>
    .section-three {
        background-color: #fff;
        text-align: center;
        padding-bottom: 5rem !important;
        font-family: 'Titillium Web', sans-serif;
        color: #000;
    }

    .section-header {
        margin-bottom: 2rem;
    }

    .line-highlight {
        width: 50px;
        height: 4px;
        background-color: #000;
        border-radius: 2px;
        margin: 0 auto 1rem;
    }

    .section-title {
        font-weight: 700;
        font-size: 35pt;
        color: #000000;
        font-family: 'Titillium Web', sans-serif;
        line-height: 1.3;
    }

    .issue-image {
        width: 100%;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .issue-image:hover {
        transform: translateY(-5px);
    }

    .section-text p {
        font-size: 18pt;
        color: #000000;
        margin-bottom: 0.8rem;
        font-family: 'Titillium Web', sans-serif;
    }

    .cta-text {
        color: #CD1989;
        font-weight: 700;
        font-size: 25pt;
        font-family: 'Titillium Web', sans-serif;
    }

    /* ===== Responsive Tablet ===== */
    @media (max-width: 992px) {
        .section-title {
            font-size: 28pt;
        }

        .section-text p {
            font-size: 15pt;
            padding: 0 1rem;
        }

        .cta-text {
            font-size: 20pt;
        }
    }

    /* ===== Responsive Mobile ===== */
    @media (max-width: 768px) {
        .section-three {
            padding: 3rem 1rem !important;
        }

        .section-title {
            font-size: 20pt;
            line-height: 1.4;
            margin-bottom: 1.5rem;
        }

        .section-text p {
            font-size: 13pt;
            padding: 0 0.5rem;
        }

        .cta-text {
            font-size: 15pt;
            margin-top: 2rem;
        }

        .line-highlight {
            width: 35px;
            height: 3px;
        }
    }

    /* ===== Small Mobile (≤480px) ===== */
    @media (max-width: 480px) {
        .section-title {
            font-size: 18pt;
        }

        .section-text p {
            font-size: 12pt;
            line-height: 1.6;
        }

        .cta-text {
            font-size: 14pt;
        }
    }
</style>
