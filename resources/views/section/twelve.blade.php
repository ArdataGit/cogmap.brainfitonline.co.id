<section class="section-twelve py-5" id="section12">
    <div class="container">
        <!-- Judul -->
        <div class="text-center mb-4">
            <div class="section-twelve-divider mx-auto"></div>
            <h2 class="fw-bold section-twelve-title mt-2">
                Ingin info lebih lanjut? Isi data berikut, kami akan menghubungi Anda
            </h2>
        </div>
        <div class="row align-items-center g-4">
            <!-- Form (first on mobile) -->
            <div class="col-lg-7 col-12 order-lg-2 order-1 position-relative">
              <!-- <p class="section-twelve-info mb-3">
                    Ingin info lengkap? Isi data berikut untuk jadwalkan sesi dan dapatkan:
                </p> -->
                <!-- List benefit -->
                <div class="section-twelve-benefit-list mb-4">
                    <div class="benefit-item"><span class="items">Konsultasi gratis</span></div>
                    <div class="benefit-item"><span class="items">Info lengkap Asesmen CognitiveMAP</span></div>
                    <div class="benefit-item"><span class="items">Info Program Brain Training</span></div>
                </div>
                <!-- Lingkaran Gratis -->
                <div class="gratis-circle">GRATIS
                    <!-- Gambar zoom.png di kiri atas -->
                    <img src="{{ asset('img/section12/zoom.png') }}" alt="Zoom" class="zoom-image">
                </div>
                @if(session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <!-- Form -->
               <div class="form-wrapper-right-space">
                <form id="information-session-form">
                @csrf
                <div class="mb-3">
<input
    type="text"
    name="nama_orang_tua"
    class="form-control"
    placeholder="Nama Orang Tua"
    required
    oninput="this.value = this.value.replace(/[^A-Za-z\s]/g, '')"
>
                </div>
                <div class="mb-3">
                    <input type="number" name="nomor_whatsapp" class="form-control" placeholder="Nomor WhatsApp" required>
                </div>
                <div class="mb-3">
                    <input type="email" name="email" class="form-control" placeholder="E-mail" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="nama_anak" class="form-control" placeholder="Nama Anak" required>
                </div>
                <div class="mb-3">
                    <input type="text" name="usia_anak" class="form-control" placeholder="Usia Anak" required>
                </div>
                <div class="mb-3">
                    <select name="area" class="form-control" required>
                        <option value="" selected hidden>Area Terdekat</option>
                        <option>BrainFit Kelapa Gading</option>
                        <option>Brainfit Kebon Jeruk</option>
                        <option>Brainfit Pantai Indah Kapuk</option>
                        <option>BrainFit BSD</option>
                    </select>
                </div>
                <div class="text-end">
                    <button type="submit" class="btn section-twelve-submit">Kirim</button>
                </div>
            </form>
            </div>
            <!-- Tempat pesan -->
            <div id="form-message" class="mt-3"></div>
            </div>
            <!-- Gambar anak (second on mobile) -->
            <div class="col-lg-5 col-12 order-lg-1 order-2 text-center">
                <img src="{{ asset('img/section12/Section-12-image-13.png') }}"
                     alt="Anak"
                     class="section-twelve-image">
            </div>
        </div>
        <!-- Footer note -->
        <div class="section-twelve-footer text-center">
          Dapatkan <strong>Diskon</strong> untuk CogMAP Assessment setah sesi informasi!
        </div>
    </div>
</section>
<style>
   .form-wrapper-right-space {
        padding-right: clamp(6rem, 8vw, 8rem);
    }
    .section-twelve-benefit-list .benefit-item .items {
        background: #D0D2D3;
    }
    .section-twelve-title {
        font-family: 'Titillium Web', sans-serif;
        font-size: clamp(20pt, 5vw, 30pt); /* Fluid for responsive */
        color: #222;
        font-weight: 700;
        margin-bottom: clamp(1rem, 3vw, 3rem);
        line-height: 1.1;
    }
    .section-twelve-divider {
        width: clamp(40px, 8vw, 60px);
        height: 3px;
        background: #222;
    }
    .section-twelve-info {
        font-family: 'Titillium Web', sans-serif;
        font-size: clamp(14pt, 3vw, 20pt);
        color: #444;
        line-height: 1.4;
        text-align: left; /* Left align on desktop */
       padding-right: clamp(12rem, 14vw, 14rem);
    }
    .section-twelve-benefit-list {
        display: flex;
        flex-direction: row;
        gap: clamp(0.25rem, 1vw, 0.5rem);
        flex-wrap: wrap;
        justify-content: flex-start; /* Left on desktop */
        margin-bottom: clamp(1rem, 3vw, 1.5rem);
       padding-right: clamp(6rem, 8vw, 8rem);
    }
    .section-twelve-benefit-list .benefit-item {
        padding: clamp(6px, 1.5vw, 8px) clamp(12px, 3vw, 14px);
        border-radius: 4px;
        font-size: clamp(12pt, 2.5vw, 20pt);
        font-family: 'Titillium Web', sans-serif;
        background: #D0D2D3;
        min-width: fit-content;
        text-align: center;
    }
    .section-twelve-image {
        max-width: 360px;
        width: 100%;
        height: auto;
        top: clamp(2rem, 3vw, 5.4rem);
        position: relative;
        z-index: -1;
        display: block;
        margin: 0 auto; /* Center on mobile */
    }
    .gratis-circle {
        position: absolute;
        right: clamp(-60px, -10vw, -88px);
        top: clamp(40px, 10vw, 60px);
        background: #CC198A;
        transform: translateX(-50%) rotate(0deg);
        color: #fff;
        font-weight: bold;
        font-size: clamp(14pt, 4vw, 25pt);
        border-radius: 50%;
        width: clamp(80px, 20vw, 140px);
        height: clamp(80px, 20vw, 140px);
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Titillium Web', sans-serif;
        box-shadow: 0 4px 12px rgba(204, 25, 138, 0.3);
        transition: transform 0.3s ease;
    }
    /* Style untuk gambar zoom.png */
    .zoom-image {
        position: absolute;
        top: -50%;
        left: -48%;
        width: 75%;
        height: auto;
        z-index: 1;
    }
    .form-control {
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: clamp(8px, 2vw, 10px) clamp(12px, 3vw, 14px);
        font-size: clamp(10pt, 2.5vw, 12pt);
        font-family: 'Titillium Web', sans-serif;
        margin-bottom: clamp(0.5rem, 2vw, 0.75rem); /* Fluid mb */
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .form-control:focus {
        border-color: #cd158a;
        box-shadow: 0 0 0 0.2rem rgba(205, 21, 138, 0.25);
    }
    .section-twelve-submit {
        background: #555;
        color: #fff;
        font-size: clamp(10pt, 2.5vw, 12pt);
        padding: clamp(4px, 1.5vw, 6px) clamp(15px, 4vw, 20px);
        border-radius: 4px;
        border: none;
        font-family: 'Titillium Web', sans-serif;
        transition: all 0.3s ease;
        font-weight: 600;
        width: auto; /* Auto on desktop, full on mobile */
    }
    .section-twelve-submit:hover {
        background: #444;
        transform: translateY(-1px);
    }
    .section-twelve-footer {
        background: #CC198A;
        color: white;
        font-size: clamp(14pt, 3.5vw, 25pt);
        padding: clamp(8px, 2vw, 14px);
        border-radius: 50px;
        font-family: 'Titillium Web', sans-serif;
        font-weight: 600;
        line-height: 1.3;
        max-width: 69rem;
        margin: 0 auto;
    }
    /* Responsive - Compact & Fluid */
    @media (max-width: 992px) {
       .form-wrapper-right-space {
            padding-right: clamp(3rem, 5vw, 5rem);
        }
        .section-twelve-title {
            margin-bottom: 2rem;
            text-align: center;
        }
      
        .section-twelve-info {
            font-size: 18pt;
            text-align: center;
           padding-right: clamp(9rem, 11vw, 11rem);
        }
      
        .section-twelve-benefit-list {
            justify-content: center;
            gap: 0.75rem;
            flex-wrap: wrap;
           padding-right: clamp(3rem, 5vw, 5rem);
        }
      
        .benefit-item {
            font-size: 18pt;
        }
      
        .gratis-circle {
            right: -40px;
            top: 120px;
        }
      
        .row {
            --bs-gutter-x: 1rem;
        }
      
        .form-control {
            margin-bottom: 0.75rem;
        }
      
        .text-end {
            text-align: center !important;
        }
        /* Responsif untuk zoom-image pada tablet besar */
        .zoom-image {
            top: 20%;
            left: 30%;
            width: 13%;
        }
    }
    @media (max-width: 768px) {
       .form-wrapper-right-space {
            padding-right: 0;
        }
    
        .section-twelve {
            padding: 40px 0;
        }
      
        .section-twelve-title {
            font-size: 20pt;
            margin-bottom: 1.5rem;
            text-align: center;
        }
      
        .section-twelve-info {
            font-size: 18pt;
            line-height: 1.4;
            padding: 0 1rem;
            text-align: center;
           padding-right: 0;
        }
    
       .section-twelve-image {
            max-width: 250px; /* Kecilkan gambar untuk tablet */
        }
      
        .section-twelve-benefit-list {
            flex-direction: column;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1rem;
           padding-right: 0;
        }
      
        .benefit-item {
            font-size: 16pt;
            width: 100%;
            text-align: center;
            max-width: 250px;
        }
      
        .gratis-circle {
            position: static; /* Stack on mobile */
            margin: 1rem auto 1.5rem;
            right: auto;
            top: auto;
            transform: none;
            z-index: auto;
        }
      
        .row {
            --bs-gutter-x: 0.75rem;
            margin-top: 1.5rem;
        }
      
        .form-control {
            margin-bottom: 0.75rem;
            padding: 10px 12px;
            font-size: 14pt;
        }
      
        .section-twelve-submit {
            width: 100%;
            font-size: 14pt;
            padding: 12px 20px;
            margin-top: 0.5rem;
        }
      
        .section-twelve-footer {
            font-size: 16pt;
            padding: 10px 15px;
            margin-top: 3rem;
        }
      
        .text-end {
            text-align: center !important;
        }
        /* Responsif untuk zoom-image pada tablet */
        .zoom-image {
            top: 20%;
            left: 30%;
            width: 13%;
        }
    }
    @media (max-width: 576px) {
        .section-twelve {
            padding: 30px 0;
        }
      
        .section-twelve-title {
            font-size: 18pt;
            margin-bottom: 1rem;
        }
      
        .section-twelve-info {
            font-size: 14pt;
            padding: 0 0.5rem;
            text-align: center;
        }
    
       .section-twelve-image {
            max-width: 200px; /* Kecilkan gambar untuk tablet */
        }
      
        .section-twelve-benefit-list {
            gap: 0.25rem;
        }
      
        .benefit-item {
            font-size: 14pt;
            padding: 6px 10px;
            margin-bottom: 0.25rem;
        }
      
        .gratis-circle {
            width: 80px;
            height: 80px;
            font-size: 14pt;
            margin: 0.5rem auto 1rem;
        }
      
        .row {
            --bs-gutter-x: 0.5rem;
        }
      
        .form-control {
            margin-bottom: 0.5rem;
            padding: 8px 10px;
            font-size: 12pt;
        }
      
        .section-twelve-submit {
            padding: 8px 15px;
            font-size: 12pt;
        }
      
        .section-twelve-footer {
            font-size: 14pt;
            padding: 8px 12px;
            margin-top: 1.5rem;
        }
        /* Responsif untuk zoom-image pada mobile */
        .zoom-image {
            top: 20%;
            left: 30%;
            width: 13%;
        }
    }
</style>
<script>
document.getElementById('information-session-form').addEventListener('submit', function(e) {
    e.preventDefault();
    let form = e.target;
    let formData = new FormData(form);
    let messageBox = document.getElementById('form-message');
    fetch("{{ route('send.information.session') }}", {
        method: 'POST',
        headers: {
            'X-CSRF-TOKEN': "{{ csrf_token() }}",
        },
        body: formData
    })
    .then(async (response) => {
        let data = await response.json();
        if (response.ok) {
            if (data.redirect) {
                window.location.href = data.redirect;
            } else {
                messageBox.innerHTML = `<div class="alert alert-success">${data.message}</div>`;
                form.reset();
            }
        } else {
            messageBox.innerHTML = `<div class="alert alert-danger">${data.message}</div>`;
        }
    })
    .catch((error) => {
        messageBox.innerHTML = `<div class="alert alert-danger">Terjadi kesalahan. Coba lagi.</div>`;
        console.error(error);
    });
});
</script>