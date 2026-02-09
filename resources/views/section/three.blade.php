{{-- resources/views/section/three.blade.php --}}
<div class="section-three py-5">
    <div class="container">
        <div class="row">

            <!-- KIRI: Judul & Deskripsi -->
            <div class="col-lg-12 mb-4">
                <div class="mb-3 line-highlight-yellow"></div>
                <h2 class="fw-bold title-yellow animate-on-scroll animate-on-scroll--title">
                    {!! __('section.three.title') !!}
                </h2>
                <p class="mt-3 description-text animate-on-scroll animate-on-scroll--description" >
                    {!! __('section.three.description') !!}
                </p>
            </div>

            <!-- KANAN: Grid 10 Anak -->
            <div class="col-lg-12">
                <div class="row g-3">
                    @foreach(__('section.three.children') as $child)
                    <div class="col-6 col-md-3">
                        <div class="child-card {{ $loop->even ? 'grey-bg' : 'yellow-bg' }} animate-on-scroll animate-on-scroll--card">
                            <div class="card-content">
                                <p class="child-text mb-0">{!! $child['text'] !!}</p>
                                <img src="{{ asset('img/section3/' . $child['image']) }}" alt="{{ $child['alt'] }}" {{ $child['style'] ?? '' }}>
                            </div>
                        </div>
                    </div>
                    @endforeach

                    <div class="col-12 col-md-6">
                        <p class="challenge-text animate-on-scroll animate-on-scroll--challenge">{!! __('section.three.challenge_question') !!}</p>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>

<style>
  .challenge-text {
  	font-size: 25pt;
  }
.description-text {
    font-size: 25pt;
    font-family: 'Titillium Web', sans-serif;
}
.section-three .title-yellow {
    color: #fab01a; /* kuning mustard */
    font-weight: 700;
    font-family: 'Titillium Web', sans-serif !important; 
    font-size: 45pt;
}

.line-highlight-yellow {
    width: 80px;
    height: 5px;
    background-color: #fab01a;
    border-radius: 2px;
}

/* Card dasar - Use flex for better content distribution */
.child-card {
    border-radius: 18px;
    text-align: center;
    overflow: hidden;
    height: 266px; /* Fixed height but flex internal */
    width: 267px; /* Fixed width */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
    position: relative;
    display: flex;
    flex-direction: column;
    justify-content: space-between; /* Distribute text and image evenly */
}

.card-content {
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.child-card::before {
    content: "";
    position: absolute;
    inset: 0;
    border-radius: 18px;
    background: inherit; /* ikut warna card */
    z-index: 0;
}

.child-card::after {
    content: "";
    position: absolute;
    top: -34%;
    left: -20%;
    width: 140%;
    height: 70%;
    background: rgba(255, 255, 255, 0.3);
    transform: rotate(-22deg);
    border-radius: 30px;
    z-index: 1;
}

.child-card img,
.child-text {
    position: relative;
    z-index: 2;
}

.child-card img {
    width: 100%;
    border-radius: 12px;
    flex-grow: 1; /* Image grows to fill available space */
    object-fit: cover; /* Ensure image fills without distortion */
    max-height: 100%; /* Limit image height to prevent overflow */
}

.child-text {
    margin-top: 8px;
    font-family: 'Titillium Web', sans-serif;
    font-size: 15pt;
    font-weight: 600;
    flex-shrink: 0; /* Prevent text from shrinking */
    padding: 0 4px; /* Slight padding for better fit */
}

/* Abu-abu dengan gradasi */
.grey-bg {
    background: linear-gradient(145deg, #f0f0f0, #d9d9d9);
}

/* Kuning mengkilap */
.yellow-bg {
    background: linear-gradient(145deg, #fab01a, #f0a800);
    color: #fff;
}

    /* Animasi Sederhana Scroll: Mulai dari opacity 0 dan translateY, fade in saat scroll */
    .animate-on-scroll {
        opacity: 0;
        transform: translateY(30px);
        transition: opacity 0.6s ease-out, transform 0.6s ease-out;
    }

    .animate-on-scroll.animate {
        opacity: 1;
        transform: translateY(0);
    }

    /* Staggered delay untuk title dan description */
    .animate-on-scroll--title.animate { transition-delay: 0.1s; }
    .animate-on-scroll--description.animate { transition-delay: 0.2s; }
    .animate-on-scroll--challenge.animate { transition-delay: 0.8s; }

    /* Staggered delay untuk cards (10 cards, delay bertahap) */
    .animate-on-scroll--card:nth-child(1).animate { transition-delay: 0.3s; }
    .animate-on-scroll--card:nth-child(2).animate { transition-delay: 0.35s; }
    .animate-on-scroll--card:nth-child(3).animate { transition-delay: 0.4s; }
    .animate-on-scroll--card:nth-child(4).animate { transition-delay: 0.45s; }
    .animate-on-scroll--card:nth-child(5).animate { transition-delay: 0.5s; }
    .animate-on-scroll--card:nth-child(6).animate { transition-delay: 0.55s; }
    .animate-on-scroll--card:nth-child(7).animate { transition-delay: 0.6s; }
    .animate-on-scroll--card:nth-child(8).animate { transition-delay: 0.65s; }
    .animate-on-scroll--card:nth-child(9).animate { transition-delay: 0.7s; }
    .animate-on-scroll--card:nth-child(10).animate { transition-delay: 0.75s; }

    /* Responsive Fonts dan Layouts */
    @media (max-width: 768px) {
        .title-yellow {
            font-size: 2.5rem !important; /* Scale down from 45pt */
            line-height: 1.2;
        }

        .description-text {
            font-size: 1.25rem; /* Smaller on mobile */
            padding: 0 1rem;
        }

        .challenge-text {
            font-size: 1.25rem;
            padding: 0 1rem;
            font-family: 'Titillium Web', sans-serif;
        }

        .child-text {
            font-size: 0.75rem;
        }

        .child-card {
            height: 220px; /* Reduced height on mobile */
            width: 100%; /* Full width to fit col-6 */
        }

        .child-card img {	
        max-height: 100%;
        }

        .line-highlight-yellow {
            width: 60px;
        }
        
        .row.g-3 {
            --bs-gutter-x: 0.75rem; /* Tighter gutters on mobile */
        }
    }

    @media (max-width: 576px) {
        .title-yellow {
            font-size: 2rem !important;
        }

        .description-text,
        .challenge-text {
            font-size: 0.875rem;
            font-family: 'Titillium Web', sans-serif;
        }

        .child-card {
            height: 200px; /* Even smaller on small mobile */
            width: 100%;
        }


        .child-text {
            font-size: 0.7rem;
            margin-top: 4px; /* Tighter margin */
            padding: 0 2px;
        }

        .row.g-3 {
            --bs-gutter-x: 0.5rem;
        }
    }

    @media (min-width: 992px) {
        .title-yellow {
            font-size: 3.5rem !important; /* Closer to 45pt on desktop */
        }

        .description-text {
            font-size: 25pt; /* 24pt */
        }

        .challenge-text {
            font-size: 25pt; /* 32pt */
            font-family: 'Titillium Web', sans-serif;
            padding-top: 1rem;
        }

        .child-text {
            font-size: 1rem; /* 16pt */
        }
    }
</style>

<script>
    // JS Sederhana untuk Trigger Animasi Saat Scroll (Intersection Observer) - Untuk Section Three
    document.addEventListener('DOMContentLoaded', function() {
        const sectionThree = document.querySelector('.section-three');
        if (!sectionThree) return;

        const observerOptions = {
            threshold: 0.1, // Trigger saat 10% elemen visible
            rootMargin: '0px 0px -50px 0px' // Mulai animasi sedikit sebelum fully in view
        };

        const observer = new IntersectionObserver(function(entries) {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const elements = entry.target.querySelectorAll('.animate-on-scroll');
                    elements.forEach((el, index) => {
                        setTimeout(() => {
                            el.classList.add('animate');
                        }, 50 * index); // Stagger kecil untuk smooth
                    });
                    observer.unobserve(entry.target); // Stop observe setelah animasi
                }
            });
        }, observerOptions);

        // Observe the entire section or individual elements
        observer.observe(sectionThree);
    });
</script>