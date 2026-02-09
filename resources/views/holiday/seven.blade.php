<div class="section-seven position-relative" id="section7">
        <!-- Shape abu-abu besar -->
        <img src="{{ asset('img/holiday/section7/greyround.png') }}" 
             alt="shape gray" 
             class="shape-gray">

        <!-- BONUS shape -->
        <img src="{{ asset('img/holiday/section7/bonus.png') }}" 
             alt="bonus" 
             class="bonus-shape">
    <div class="container-fluid px-0 position-relative overflow-hidden">



        <div class="row align-items-center g-0 position-relative">
            <!-- Kiri: Teks -->
            <div class="col-lg-12 col-md-7 section-seven-text py-md-5 ps-5 py-4 position-relative z-3">
                <h2 class="section-seven-title mb-3">
                    <span class="orange-box mb-3">Attention and</span><br>
                    <span class="orange-box">Memory Screening Test</span>
                </h2>

                <p class="section-seven-subtitle mt-3">
                    Sebagai bagian dari <strong>Make My Brain Sharper Holiday Program</strong>,<br>
                    kami menawarkan bonus spesial:
                </p>

                <ul class="section-seven-list mt-3">
                    <li>Skrining/Asesmen gratis <em>Attention & Memory Skills</em></li>
                    <li>Konsultasi hasil laporan skrining dengan orang tua</li>
                </ul>
            </div>
        </div>

    </div>
        <!-- Gambar orang di kanan bawah -->
        <img src="{{ asset('img/holiday/section7/parentkid.png') }}" 
             alt="Holiday Program" 
             class="section-seven-photo">
</div>

<style>
.section-seven {
    background: #14B8FF;
    color: #fff;
    font-family: 'Titillium Web', sans-serif;
    position: relative;
    overflow: hidden;
  	min-height: 46rem !important;

}

/* === TEKS === */
.section-seven-text {
    z-index: 3;
}

.section-seven-title {
    font-weight: 700;
    font-size: 45pt;
}

.orange-box {
    background-color: #f15b39;
    color: #fff;
    padding: 0.3rem 1rem;
    border-radius: 3px;
    display: inline-block;
}

.section-seven-subtitle {
    font-size: 25pt;
    line-height: 1.5;
    color: #fff;
}

.section-seven-list {
    list-style: none;
    padding-left: 0;
    margin-top: 1rem;
}

.section-seven-list li {
    position: relative;
    padding-left: 2.4rem;
    font-size: 20pt;
    margin-bottom: 0.9rem;
    line-height: 1.5;
}

/* Bullet custom */
.section-seven-list li::before {
    content: "";
    position: absolute;
    left: 0;
    top: 0.35rem;
    width: 1.2rem;
    height: 1.2rem;
    background: url('{{ asset('img/holiday/section7/redround.png') }}') no-repeat center center;
    background-size: contain;
}

/* === FOTO ORANG (kanan bawah) === */
.section-seven-photo {
    position: absolute;
    bottom: 0;
    right: 0px;
    width: 56%;
    /* max-width: 600px; */
    z-index: 2;
}

/* === SHAPES === */
.shape-gray {
    position: absolute;
    top: -34px;
    left: 16px;
    width: 45%;
    opacity: 1.3;
    z-index: 1;
}

.circle-red {
    position: absolute;
    bottom: 25%;
    left: 48%;
    width: 80px;
    z-index: 1;
}

.bonus-shape {
position: absolute;
    top: 7%;
    right: 28%;
    width: 170px;
    z-index: 3;
}

/* === RESPONSIVE === */
@media (max-width: 1200px) {
    .section-seven-title {
        font-size: 34pt;
    }
    .section-seven-subtitle {
        font-size: 18pt;
    }
    .section-seven-list li {
        font-size: 16pt;
    }
    .bonus-shape {
        width: 140px;
        top: 8%;
        right: 20%;
    }
    .shape-gray {
        width: 55%;
        top: -20px;
        left: 10px;
    }
    .section-seven-photo {
        width: 60%;
        right: -2%;
    }
}

@media (max-width: 992px) {
    .section-seven {
        min-height: 38rem !important;
        text-align: left;
        padding-bottom: 5rem;
    }

    .section-seven-title {
        font-size: 28pt;
    }

    .section-seven-subtitle {
        font-size: 16pt;
    }

    .section-seven-list li {
        font-size: 14pt;
        padding-left: 2rem;
    }

    .shape-gray {
        width: 65%;
        top: -10px;
        left: 5%;
        opacity: 0.8;
    }

    .bonus-shape {
        width: 120px;
        top: 10%;
        right: 15%;
    }

    .section-seven-photo {
        width: 70%;
        right: -5%;
        bottom: 0;
    }
}

@media (max-width: 768px) {
    .section-seven {
        min-height: auto !important;
        text-align: center;
        padding: 3rem 1.5rem 2rem;
    }

    .section-seven-text {
        padding: 0 1rem;
    }

    .section-seven-title {
        font-size: 22pt;
        line-height: 1.2;
    }

    .section-seven-subtitle {
        font-size: 14pt;
        line-height: 1.4;
    }

    .section-seven-list li {
        font-size: 13pt;
        padding-left: 1.8rem;
    }

    .section-seven-list li::before {
        width: 1rem;
        height: 1rem;
        top: 0.4rem;
    }

    .shape-gray {
        width: 90%;
        left: 5%;
        top: 0;
        opacity: 0.7;
    }

    .bonus-shape {
        width: 90px;
        top: 5%;
        right: 5%;
    }

    .section-seven-photo {
        position: relative;
        width: 90%;
        margin: 2rem auto 0;
        right: 0;
        bottom: 0;
        display: block;
    }
}

@media (max-width: 576px) {
    .section-seven-title {
        font-size: 18pt;
    }

    .section-seven-subtitle {
        font-size: 12pt;
    }

    .section-seven-list li {
        font-size: 12pt;
    }

    .shape-gray {
        width: 100%;
        top: 0;
        left: 0;
        opacity: 0.6;
    }

    .bonus-shape {
        width: 70px;
        top: 4%;
        right: 4%;
    }

    .section-seven-photo {
        width: 100%;
        margin-top: 2rem;
    }
}

</style>
