{{-- resources/views/section/eight.blade.php --}}
<div class="section-eight position-relative" id="section8">
    <div class="container-fluid px-0 position-relative text-center">
        <!-- Background kalender -->
        <div class="calendar-bg position-relative">
            <img src="{{ asset('img/holiday/section8/kalender.png') }}" 
                 alt="Holiday Calendar" 
                 class="calendar-img img-fluid w-100">
            
            <!-- Tombol dan teks di dalam area pink -->
            <div class="calendar-content position-absolute w-100 text-center">
                <button class="btn-cta">
                    Konsultasi GRATIS & Amankan Early Bird Price!
                </button>
                <p class="calendar-note mt-3">
                    Enrollment dibuka hingga <strong>30 November 2025</strong>. 
                    Early bird berakhir di <strong>31 Oktober 2025</strong>.<br>
                    <span class="fw-bold">Kuota terbatas tiap batch!</span>
                </p>
            </div>
        </div>
    </div>
</div>

<style>
.section-eight {
    background-color: #fff;
    position: relative;
    overflow: hidden;
    font-family: 'Titillium Web', sans-serif;
}

/* === Background kalender === */
.calendar-bg {
    position: relative;
    width: 100%;
}

.calendar-img {
    width: 100%;
    height: auto;
    display: block;
}

/* === Konten tombol dan teks di dalam area pink === */
.calendar-content {
    position: absolute;
    bottom: 6%;
    left: 0;
    width: 100%;
    color: #fff;
    z-index: 2;
}

/* Tombol CTA biru */
.btn-cta {
    background-color: #0dbbe7;
    color: #fff;
    /* font-size: 35pt; */ /* ❌ terlalu besar untuk area pink */
    font-size: 24pt; /* ✅ lebih proporsional dengan lebar area pink */
    font-weight: 700;
    border: none;
    border-radius: 50px;
    padding: 0.9rem 2.5rem;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.25);
    transition: all 0.3s ease;
}

.btn-cta:hover {
    background-color: #02bce8;
    transform: translateY(-2px);
}

/* Teks bawah tombol */
.calendar-note {
    /* font-size: 25pt; */ /* ❌ terlalu besar dan keluar dari area gambar */
    font-size: 20pt; /* ✅ pas terbaca tapi tidak menutupi background */
    line-height: 1.5;
    color: #fff;
}

/* === RESPONSIVE === */
@media (max-width: 1200px) {
    .btn-cta {
        /* font-size: 26pt; */
        font-size: 18pt;
        padding: 0.8rem 2rem;
    }
    .calendar-note {
        /* font-size: 18pt; */
        font-size: 13pt;
    }
}

@media (max-width: 992px) {
    .calendar-content {
        bottom: 3%;
    }
    .btn-cta {
        /* font-size: 20pt; */
        font-size: 16pt;
        padding: 0.8rem 2rem;
    }
    .calendar-note {
        /* font-size: 15pt; */
        font-size: 12pt;
    }
}

@media (max-width: 768px) {
    .calendar-content {
        bottom: 3%;
    }
    .btn-cta {
        /* font-size: 16pt; */
        font-size: 14pt;
        width: 85%;
        padding: 0.9rem 0.5rem;
        border-radius: 40px;
    }
    .calendar-note {
        /* font-size: 13pt; */
        font-size: 11pt;
        width: 90%;
        margin: 0.8rem auto 0;
        line-height: 1.6;
    }
}

@media (max-width: 576px) {
    .calendar-content {
        bottom: 6%;
    }
    .btn-cta {
        /* font-size: 14pt; */
        font-size: 12pt;
        padding: 0.8rem 0.5rem;
        width: 90%;
    }
    .calendar-note {
        /* font-size: 11.5pt; */
        font-size: 10pt;
    }
}
</style>
