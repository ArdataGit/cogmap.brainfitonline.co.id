<div class="section-six" id="section6">
    <div class="row g-0 align-items-stretch"> <!-- gunakan align-items-stretch biar sejajar tinggi -->

        <!-- Kolom kiri (teks) -->
        <div class="col-lg-8 col-md-7 section-six-text px-md-5 p-4">
            <h2 class="section-six-title">
                Manfaat yang Kami Harapkan <br> Anak Bawa Pulang
            </h2>
            <p class="section-six-subtitle">
                Bukan hanya liburan, tapi perubahan kecil dari diri dalam diri mereka.
            </p>

            <ul class="section-six-list">
                <li>Semangat belajar yang tumbuh dari rasa penasaran</li>
                <li>Kepercayaan diri untuk mengingat, mencoba, dan bertanya</li>
                <li>Pengalaman berteman dan bekerja sama tanpa takut salah</li>
                <li>Mulai mengenal cara otak mereka belajar dan berpikir</li>
                <li>Punya mindset: “Aku bisa berkembang, asal aku coba”</li>
                <li>Memahami apa yang mereka rasakan – bukan hanya meledak atau diam</li>
                <li>Belajar menenangkan hati saat emosi datang</li>
            </ul>
        </div>

        <!-- Kolom kanan (gambar penuh kanan layar) -->
        <div class="col-lg-4 col-md-5 section-six-image-wrapper position-relative overflow-hidden">
            <img src="{{ asset('img/holiday/section6/manfaa.jpg') }}" 
                 alt="Holiday Program" 
                 class="img-fluid section-six-image">
        </div>
    </div>
</div>

<style>
/* === WRAPPER === */
.section-six {
    background-color: #f2f2f2;
    font-family: 'Titillium Web', sans-serif;
    overflow: hidden;
}

/* === KANAN (GAMBAR) === */
.section-six-image-wrapper {
    clip-path: polygon(0 0, 100% 0, 100% 100%, 22% 100%);
    display: flex;
    align-items: stretch;
}

.section-six-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transform: scale(1.03);
}

/* === KIRI (TEKS) === */
.section-six-text {
    background-color: #f2f2f2;
    color: #333;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.section-six-title {
    color: #000;
    font-weight: 700;
    font-family: 'Titillium Web', sans-serif;
    font-size: 35pt;
    margin-bottom: 0.75rem;
    line-height: 1.3;
}

.section-six-subtitle {
    color: #000;
    font-family: 'Titillium Web', sans-serif;
    font-size: 20pt;
    margin-bottom: 1.5rem;
}

.section-six-list {
    list-style: none;
    padding-left: 0;
    margin: 0;
}

.section-six-list li {
    position: relative;
    font-family: 'Titillium Web', sans-serif;
    padding-left: 1.6rem;
    margin-bottom: 0.6rem;
    font-size: 20pt;
    color: #000;
    line-height: 1.5;
}

.section-six-list li::before {
    content: "●";
    color: #CD1989;
    position: absolute;
    left: 0;
    top: 0;
    font-size: 16pt;
    line-height: 1;
}

/* === RESPONSIVE === */
@media (max-width: 992px) {
    .section-six-image-wrapper {
        clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
    }

    .section-six-title {
        font-size: 26pt;
    }

    .section-six-subtitle {
        font-size: 16pt;
    }

    .section-six-list li {
        font-size: 14pt;
    }
}

@media (max-width: 768px) {
    .section-six {
        text-align: center;
    }

    .section-six-image-wrapper {
        clip-path: none;
        height: 300px;
    }

    .section-six-text {
        padding: 2rem 1.5rem;
    }
}
</style>
