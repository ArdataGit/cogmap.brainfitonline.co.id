{{-- resources/views/section/one.blade.php --}}
                
<div class="section-one">
    <div class="container text-center">
      	<div class="line-highlight" style="background-color: #CD1989;"></div>
        <h2 class="title-top">3 Hari, 5 Brain Adventures!</h2>
        <h2 class="title-main">Liburan yang Bikin Anak Punya “Super Brain”!</h2>

        <p class="subtitle">
            Program yang dirancang untuk memberi anak ruang bertumbuh<br>
            melalui pengalaman belajar memahami diri, mengelola emosi,<br>
            dan percaya pada kemampuannya sendiri.
        </p>

        <a href="https://wa.me/62811988190?text=Hi%2C%20saya%20tertarik%20untuk%20tahu%20lebih%20lanjut%20mengenai%20Cognitive%20Assessment%20.%20Boleh%20dibantu%20penjelasannya%20lebih%20detail%3F" class="btn-cta">Konsultasi GRATIS Sekarang!</a>

        <p class="note">Dapatkan Early Bird hingga 31 Oktober.<br>Kuota Terbatas</p>

        <div class="image-wrapper">
            <img src="{{ asset('img/holiday/section1/superbrain.jpg') }}" alt="Super Brain" class="main-image">
        </div>
    </div>
</div>

<style>
    .section-one {
        padding-top: 4rem ;
        position: relative;
        text-align: center;
    }

    .title-top {
        color: #CD1989;
        font-family: 'Titillium Web', sans-serif;
        font-weight: 700;
        font-size: 45pt;
        margin-bottom: 0.5rem;
    }

  
    .line-highlight {
        width: 150px;
        height: 6px;
        background-color: #CD1989;
        border-radius: 1px;
        margin: 0 auto;
        display: block;
    }
  
    .title-main {
        color: #CD1989;
        font-family: 'Titillium Web', sans-serif;
        font-weight: 700;
        font-size: 45pt;
        margin-bottom: 1.5rem;
    }

    .subtitle {
        color: #000000;
        font-family: 'Titillium Web', sans-serif;
        font-weight: 600;
        font-size: 25pt;
        line-height: 1.6;
        margin-bottom: 2rem;
    }

    .btn-cta {
        display: inline-block;
        background-color: #595a5c;
        color: #fff;
        padding: 0.75rem 2rem;
        border-radius: 50px;
        font-weight: 700;
        font-family: 'Titillium Web', sans-serif;
        text-decoration: none;
        transition: background-color 0.3s ease;
        font-size: 35pt;
    }

    .btn-cta:hover {
        background-color: #4f4f4f;
    }

    .note {
        margin-top: 1rem;
        color: #000000;
        font-family: 'Titillium Web', sans-serif;
        font-size: 25pt;
        font-weight: 600;
        line-height: 1.4;
    }

    ..image-wrapper {
        margin-top: 3rem;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .main-image {
        width: 100%;
        max-width: 700px; /* Perbesar ukuran maksimal */
        height: auto;
        display: block;
        margin: 0 auto;
    }

    /* Responsive Tablet */
    @media (max-width: 992px) {
        .main-image {
            max-width: 500px;
        }
        .title-top,
        .title-main {
            font-size: 2rem;
        }

        .subtitle {
            font-size: 1rem;
        }

        .line-highlight {
            width: 120px;
        }
        .btn-cta {
            font-size: 1rem;
            padding: 0.6rem 1.5rem;
        }

        .main-image {
            max-width: 320px;
        }
    }

    /* Responsive Mobile */
    @media (max-width: 576px) {
        .main-image {
            max-width: 320px;
        }
        .section-one {
            padding-top: 2.5rem ;
        }

        .title-top,
        .title-main {
            font-size: 1.5rem;
            line-height: 1.2;
        }

        .subtitle {
            font-size: 0.95rem;
        }
      
        .line-highlight {
            width: 100px;
        }

        .btn-cta {
            font-size: 0.95rem;
            padding: 0.6rem 1.25rem;
        }

        .note {
            font-size: 0.875rem;
        }

        .main-image {
            max-width: 260px;
        }
    }
</style>
