<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Tambahkan di dalam <head>, sebelum Google Tag Manager -->
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Vite for app.css dan app.js (pastikan vite build sudah dijalankan: npm run dev atau npm run build) -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

        <!-- Font Awesome for WhatsApp Icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
      
      <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WBHTVNT2');</script>
        <!-- End Google Tag Manager -->
      
      	<style>
    .floating-wa {
        position: fixed;
        z-index: 99999999;
        height: 54px;
        width: 54px;
        background: #1cbf00;
        border-radius: 100%;
        cursor: pointer;
        bottom: 120px; /* Increased from 20px to avoid collision with submit button */
        right: 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        transition: transform 0.3s ease;
    }

    .floating-wa.active {
        transform: rotate(45deg);
    }

    .floating-wa i {
        color: white;
        font-size: 28px;
    }

    .content-wa {
        width: 260px;
        margin-bottom: 10px;
        display: block;
        position: fixed;
        bottom: 180px; /* Adjusted to match the new floating-wa bottom position */
        right: 20px;
        opacity: 0;
        transform: translateY(20px);
        visibility: hidden;
        transition: opacity 0.4s ease, transform 0.4s ease;
        z-index: 99999;
    }

    .content-wa-header {
        display: flex;
        align-items: center;
        gap: 10px;
        background: #1cbf00;
        padding: 10px;
        border-top-left-radius: 10px;
        color: white;
        border-top-right-radius: 10px;
    }

    .content-wa-header p {
        margin: 0;
    }

    .content-wa-header i {
        font-size: 20px;
    }

    .content-wa-main {
        background: #fff;
        border: 1px solid #1cbf00;
        padding: 16px;
        border-bottom-left-radius: 10px;
        border-bottom-right-radius: 10px;
    }

    .content-wa-main p {
        color: #222;
    }

    a.link-wa-btn {
        display: flex;
        align-items: center;
        margin-bottom: 16px;
        gap: 10px;
        border: 1px solid #ffbe00;
        padding: 10px;
        text-decoration: none;
    }

    a.link-wa-btn:hover {
        text-decoration: none;
        background: #f5f5f5;
    }

    a.link-wa-btn p {
        margin: 0;
    }

    a.link-wa-btn img {
        height: 32px;
    }

    @media (max-width: 768px) {
        .content-wa {
            width: calc(100% - 40px);
            right: 20px;
            bottom: 180px; /* Adjusted for mobile */
        }
        .floating-wa {
            bottom: 120px; /* Adjusted for mobile */
            right: 20px;
        }
    }
</style>

    </head>
    <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WBHTVNT2"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Yield content section utama -->
      
    @include('holiday.header')
    @include('holiday.one')
    <div style="background-color: #f2f2f2;">
        @include('holiday.two')
    </div>
    @include('holiday.three')
    <div style="background-color: #f2f2f2;">
        @include('holiday.four')
    </div>
    @include('holiday.five')
    @include('holiday.six')
    @include('holiday.seven')
    @include('holiday.eight')
    @include('holiday.nine')
    <div style="background-color: #f2f2f2;">
        @include('holiday.ten')
    </div>
    @include('section.footer')

    <!-- New Floating WhatsApp Component -->
    <div class="content-wa">
        <div class="content-wa-header">
            <i class="fab fa-whatsapp"></i>
            <p style="font-size:14px;">BrainFit Contact Number</p>
        </div>
        <div class="content-wa-main">
            <a href="https://wa.me/62811988190?text=Hi%2C%20saya%20tertarik%20untuk%20tahu%20lebih%20lanjut%20mengenai%20Cognitive%20Assessment%20di%20BrainFit%20Kebon%20Jeruk.%20Boleh%20dibantu%20penjelasannya%20lebih%20detail%3F" 
               class="link-wa-btn" 
               data-branch="Kebon Jeruk" 
               data-gtm-event="whatsapp_click" 
               data-gtm-branch="Kebon Jeruk"
               target="_blank" 
               rel="noopener noreferrer">
                <p>Kebon Jeruk</p>
            </a>
            <a href="https://wa.me/62811988190?text=Hi%2C%20saya%20tertarik%20untuk%20tahu%20lebih%20lanjut%20mengenai%20Cognitive%20Assessment%20di%20BrainFit%20Kelapa%20Gading.%20Boleh%20dibantu%20penjelasannya%20lebih%20detail%3F" 
               class="link-wa-btn" 
               data-branch="Kelapa Gading" 
               data-gtm-event="whatsapp_click" 
               data-gtm-branch="Kelapa Gading"
               target="_blank" 
               rel="noopener noreferrer">
                <p>Kelapa Gading</p>
            </a>
            <a href="https://wa.me/62811988190?text=Hi%2C%20saya%20tertarik%20untuk%20tahu%20lebih%20lanjut%20mengenai%20Cognitive%20Assessment%20di%20BrainFit%20PIK.%20Boleh%20dibantu%20penjelasannya%20lebih%20detail%3F" 
               class="link-wa-btn" 
               data-branch="PIK" 
               data-gtm-event="whatsapp_click" 
               data-gtm-branch="PIK"
               target="_blank" 
               rel="noopener noreferrer">
                <p>PIK</p>
            </a>
            <a href="https://wa.me/62811988190?text=Hi%2C%20saya%20tertarik%20untuk%20tahu%20lebih%20lanjut%20mengenai%20Cognitive%20Assessment%20di%20BrainFit%20BSD.%20Boleh%20dibantu%20penjelasannya%20lebih%20detail%3F" 
               class="link-wa-btn" 
               data-branch="BSD" 
               data-gtm-event="whatsapp_click" 
               data-gtm-branch="BSD"
               target="_blank" 
               rel="noopener noreferrer">
                <p>BSD</p>
            </a>
        </div>
    </div>
    <div class="floating-wa">
        <i class="fab fa-whatsapp"></i>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // WhatsApp Floating Button Logic
        var floatingWA = document.querySelector('.floating-wa');
        var contentWA = document.querySelector('.content-wa');
        var isContentVisible = false;

        function showWA() {
            contentWA.style.opacity = '1';
            contentWA.style.transform = 'translateY(0)';
            contentWA.style.visibility = 'visible';
            isContentVisible = true;
            floatingWA.classList.add('active'); // Add active class for rotation
        }

        function hideWA() {
            contentWA.style.opacity = '0';
            contentWA.style.transform = 'translateY(20px)';
            contentWA.style.visibility = 'hidden';
            isContentVisible = false;
            floatingWA.classList.remove('active'); // Remove active class
        }

        // Show on mouseenter (hover)
        floatingWA.addEventListener('mouseenter', showWA);

        // Toggle on click (for mobile compatibility)
        floatingWA.addEventListener('click', function(e) {
            e.preventDefault();
            if (isContentVisible) {
                hideWA();
            } else {
                showWA();
            }
        });

        // Hide when clicking outside
        document.addEventListener('click', function(event) {
            if (isContentVisible && !contentWA.contains(event.target) && !floatingWA.contains(event.target)) {
                hideWA();
            }
        });

        // GTM Event Tracking for WhatsApp Links
        document.querySelectorAll('.link-wa-btn').forEach(function(link) {
            link.addEventListener('click', function() {
                var branch = this.getAttribute('data-branch');
                if (window.dataLayer) {
                    window.dataLayer.push({
                        'event': 'whatsapp_click',
                        'branch': branch
                    });
                }
            });
        });

        // Intersection Observer for Scroll Animation
        const row = document.getElementById('section-two-row');
        if (!row) return;

        const children = row.querySelectorAll('.animate-on-scroll');
        let isAnimatingIn = false;
        let isAnimatingOut = false;

        const observerOptions = {
            threshold: 0.6,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting && !isAnimatingIn) {
                    isAnimatingIn = true;
                    isAnimatingOut = false;
                    children.forEach((child, index) => {
                        setTimeout(() => {
                            child.classList.add('animate');
                        }, 50 * (index + 1));
                    });
                } else if (!entry.isIntersecting && !isAnimatingOut) {
                    isAnimatingOut = true;
                    isAnimatingIn = false;
                    for (let i = children.length - 1; i >= 0; i--) {
                        setTimeout(() => {
                            children[i].classList.remove('animate');
                        }, 50 * (children.length - 1 - i + 1));
                    }
                }
            });
        }, observerOptions);

        observer.observe(row);
    });
    </script>
</body>
</html>