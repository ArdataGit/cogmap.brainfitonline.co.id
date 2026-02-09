{{-- resources/views/section/ten.blade.php --}}
<section class="section-ten py-5">
    <div class="container">
        <!-- Judul -->
         
    <div class="mb-3 line-highlight"></div>
        <div class="text-center mb-5">
            <h2 class="fw-bold">
                Kemampuan otak yang meningkat dari Brain Training
            </h2>
        </div>

        <div class="row align-items-center">
            <!-- Kiri: Huruf + Teks -->
            <div class="col-lg-6">
                <div class="smartest-list">
                    <div class="smartest-item d-flex align-items-center mb-3">
                        <img src="{{ asset('img/section10/S.png') }}" class="smartest-icon" alt="S">
                        <span>Speed (Kecepatan)</span>
                    </div>
                    <div class="smartest-item d-flex align-items-center mb-3">
                        <img src="{{ asset('img/section10/M.png') }}" class="smartest-icon" alt="M">
                        <span>Memory (Memori)</span>
                    </div>
                    <div class="smartest-item d-flex align-items-center mb-3">
                        <img src="{{ asset('img/section10/A.png') }}" class="smartest-icon" alt="A">
                        <span>Attention (Perhatian)</span>
                    </div>
                    <div class="smartest-item d-flex align-items-center mb-3">
                        <img src="{{ asset('img/section10/R.png') }}" class="smartest-icon" alt="R">
                        <span>Reasoning (Logika)</span>
                    </div>
                    <div class="smartest-item d-flex align-items-center mb-3">
                        <img src="{{ asset('img/section10/T.png') }}" class="smartest-icon" alt="T">
                        <span>Timing & Coordination (Waktu & Koordinasi)</span>
                    </div>
                    <div class="smartest-item d-flex align-items-center mb-3">
                        <img src="{{ asset('img/section10/E.png') }}" class="smartest-icon" alt="E">
                        <span>Emotions Management (Manajemen Emosi)</span>
                    </div>
                    <div class="smartest-item d-flex align-items-center mb-3">
                        <img src="{{ asset('img/section10/S.png') }}" class="smartest-icon" alt="S">
                        <span>Social Skills (Ski Sosialisasi)</span>
                    </div>
                    <div class="smartest-item d-flex align-items-center mb-3">
                        <img src="{{ asset('img/section10/T.png') }}" class="smartest-icon" alt="T">
                        <span>Tenacity (Kegigihan)</span>
                    </div>
                </div>
            </div>

            <!-- Kanan: Grafik -->
            <div class="col-lg-6 text-center">
                <img src="{{ asset('img/section10/Section_10_graphic.png') }}" alt="Graphic" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<style>
    
    .line-highlight {
        width: 126px;
        height: 5px;
        background-color: #000000;
        border-radius: 2px;
        margin: 0 auto;
    }
    .section-ten h2 {
        font-family: 'Titillium Web', sans-serif;
        font-size: 35pt;
        color: #222;
    }
    .smartest-item span {
        font-size: 14pt;
        margin-left: 12px;
        color: #333;
        font-family: 'Titillium Web', sans-serif;
    }
    .smartest-icon {
        width: 38px;
        height: auto;
    }
    @media (max-width: 768px) {
        .section-ten h2 {
            font-size: 20pt;
        }
        .smartest-item span {
            font-size: 12pt;
        }
        .smartest-icon {
            width: 30px;
        }
    }
</style>
