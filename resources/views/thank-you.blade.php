{{-- resources/views/thank-you.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terima Kasih - BrainFit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Titillium Web', sans-serif;
            background-color: #f8f9fa;
            color: #222;
        }
        .thank-you-container {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 2rem 1rem;
        }
        .thank-you-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            padding: 3rem;
            text-align: center;
            max-width: 500px;
            width: 100%;
        }
        .thank-you-icon {
            font-size: 4rem;
            color: #CC198A;
            margin-bottom: 1rem;
        }
        .thank-you-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #222;
            margin-bottom: 1rem;
        }
        .thank-you-message {
            font-size: 1.2rem;
            color: #444;
            margin-bottom: 2rem;
            line-height: 1.5;
        }
        .btn-home {
            background: #CC198A;
            color: white;
            padding: 0.75rem 2rem;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: background 0.3s ease;
        }
        .btn-home:hover {
            background: #a8156f;
            color: white;
        }
        @media (max-width: 768px) {
            .thank-you-card {
                padding: 2rem 1.5rem;
            }
            .thank-you-title {
                font-size: 2rem;
            }
            .thank-you-message {
                font-size: 1rem;
            }
        }
    </style>
      <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-WBHTVNT2');</script>
    <!-- End Google Tag Manager -->

</head>
<body>
    <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WBHTVNT2"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

    <div class="thank-you-container">
        <div class="thank-you-card">
            <div class="thank-you-icon">✅</div>
            <h1 class="thank-you-title">Terima Kasih!</h1>
            <p class="thank-you-message">
                Data Anda telah berhasil dikirim. Tim BrainFit akan segera menghubungi Anda melalui WhatsApp untuk menjadwalkan sesi informasi.
            </p>
            <a href="https://wa.me/62811988190?text=Halo%2C%20saya%20sudah%20isi%20data%2C%20apakah%20bisa%20info%20lebih%20lanjut%3F" class="btn-home">
                Chat with us
            </a>

        </div>
    </div>
</body>
</html>