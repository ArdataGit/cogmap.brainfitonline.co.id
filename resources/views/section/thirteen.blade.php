{{-- resources/views/section/faq.blade.php --}}
<section id="faq" class="py-12">
    <div class="container mx-auto px-4 max-w-4xl ">
        <div class="text-center mb-8">
            <div class="mb-3 line-highlight"></div>
            <h2 class="text-3xl md:text-4xl font-semibold text-gray-800 mb-0" style="font-family: 'Titillium Web', sans-serif; font-weight: 600; font-size: 35pt;">
                FAQ
            </h2>
        </div>

        <div class="accordion mb-2" id="faqAccordion">
            {{-- Q1 --}}
            <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="faqHeading1">
                    <button class="paragraph-size accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse1" aria-expanded="false" aria-controls="faqCollapse1" style="font-family: 'Titillium Web', sans-serif; font-weight: 500; ">
                        <span class="paragraph-size faq-number">1.</span>
                        <span class="paragraph-size">Apa itu CognitiveMAP Assessment?</span>
                    </button>
                </h2>
                <div id="faqCollapse1" class="accordion-collapse collapse" aria-labelledby="faqHeading1" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p class="paragraph-size text-gray-700 text-sm leading-relaxed" style="font-family: 'Titillium Web', sans-serif; font-weight: 400; ">
                            CognitiveMAP adalah asesmen berbasis neuroscience yang memetakan kekuatan & kelemahan belajar anak. Hasilnya dipakai untuk merancang program personal brain training.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Q2 --}}
            <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="faqHeading2">
                    <button class="paragraph-size accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse2" aria-expanded="false" aria-controls="faqCollapse2" style="font-family: 'Titillium Web', sans-serif; font-weight: 500; ">
                        <span class="paragraph-size faq-number">2.</span>
                      	<span class="paragraph-size">Usia berapa anak bisa ikut CognitiveMAP?</span>
                    </button>
                </h2>
                <div id="faqCollapse2" class="accordion-collapse collapse" aria-labelledby="faqHeading2" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p class="paragraph-size text-gray-700 text-sm leading-relaxed" style="font-family: 'Titillium Web', sans-serif; font-weight: 400; ">
                            Asesmen ini bisa dilakukan untuk anak usia 4–18 tahun. Mayoritas Parents melakukan asesmen saat anak masuk usia sekolah (7–12 tahun), ketika tantangan belajar mulai terasa lebih nyata.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Q3 --}}
            <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="faqHeading3">
                    <button class="paragraph-size accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse3" aria-expanded="false" aria-controls="faqCollapse3" style="font-family: 'Titillium Web', sans-serif; font-weight: 500; ">
                        <span class="paragraph-size faq-number">3.</span>
                      	<span class="paragraph-size">Kenapa CognitiveMAP penting untuk anak saya?</span>
                    </button>
                </h2>
                <div id="faqCollapse3" class="accordion-collapse collapse" aria-labelledby="faqHeading3" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p class="paragraph-size text-gray-700 text-sm leading-relaxed" style="font-family: 'Titillium Web', sans-serif; font-weight: 400;">
                            Banyak anak bisa membaca tapi sulit memahami, atau cepat lupa saat ulangan. CognitiveMAP membantu mendeteksi learning gap – area otak yang perlu diperkuat agar anak lebih fokus, percaya diri, dan siap menghadapi pelajaran sekolah.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Q4 --}}
            <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="faqHeading4">
                    <button class="paragraph-size accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse4" aria-expanded="false" aria-controls="faqCollapse4" style="font-family: 'Titillium Web', sans-serif; font-weight: 500; ">
                        <span class="paragraph-size faq-number">4.</span>
                        <span class="paragraph-size">Apakah CognitiveMAP berbeda dengan tes IQ biasa?</span>
                    </button>
                </h2>
                <div id="faqCollapse4" class="accordion-collapse collapse" aria-labelledby="faqHeading4" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p class="paragraph-size text-gray-700 text-sm leading-relaxed" style="font-family: 'Titillium Web', sans-serif; font-weight: 400;">
                            Ya, sangat berbeda. Tes IQ hanya mengukur satu aspek kecerdasan. CognitiveMAP jauh lebih lengkap karena menilai berbagai keterampilan otak seperti konsentrasi, daya tangkap, memori, logika, hingga pengaturan emosi.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Q5 --}}
            <div class="accordion-item mb-2">
                <h2 class="accordion-header" id="faqHeading5">
                    <button class="paragraph-size accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse5" aria-expanded="false" aria-controls="faqCollapse5" style="font-family: 'Titillium Web', sans-serif; font-weight: 500; ">
                        <span class="paragraph-size faq-number">5.</span>
                        <span class="paragraph-size">Apa saja yang saya dapatkan setelah anak saya mengikuti asesmen?</span>
                    </button>
                </h2>
                <div id="faqCollapse5" class="accordion-collapse collapse" aria-labelledby="faqHeading5" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p class="paragraph-size text-gray-700 text-sm leading-relaxed mb-2" style="font-family: 'Titillium Web', sans-serif; font-weight: 400;">Parents akan menerima:</p>
                        <ul class="paragraph-size list-disc list-inside text-gray-700 space-y-1 ml-4" style="font-family: 'Titillium Web', sans-serif; font-weight: 400;">
                            <li>Laporan lengkap profil belajar anak (Visual, Memori, Fokus, Emosi, Auditori)</li>
                            <li>Konsultasi 1-on-1 dengan BrainFit Consultant</li>
                            <li>Rekomendasi program brain training yang dipersonalisasi sesuai kebutuhan anak</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Q6 --}}
            <div class="accordion-item mb-2 ">
                <h2 class="accordion-header" id="faqHeading6">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faqCollapse6" aria-expanded="false" aria-controls="faqCollapse6" style="font-family: 'Titillium Web', sans-serif; font-weight: 500; ">
                        <span class="faq-number paragraph-size">6.</span>
                        <span class="paragraph-size">Apakah hasil program bisa langsung terlihat?</span>
                    </button>
                </h2>
                <div id="faqCollapse6" class="accordion-collapse collapse" aria-labelledby="faqHeading6" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        <p class="paragraph-size text-gray-700 text-sm leading-relaxed" style="font-family: 'Titillium Web', sans-serif; font-weight: 400; ">
                            Hasil bervariasi tiap anak, tapi umumnya Parents melaporkan peningkatan fokus, kecepatan belajar, dan kepercayaan diri setelah beberapa bulan.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
  	#faq {
  		padding-top: 4rem; 
      	padding-bottom:4rem;
  	}
  
  	.paragraph-size {
  		font-size:20pt;
  	}
  
    .line-highlight {
        width: 126px;
        height: 5px;
        background-color: #000000;
        border-radius: 2px;
        margin: 0 auto 2rem auto;
    }

    .accordion-item {
        border: none;
        margin-bottom: 0.5rem;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        border-radius: 12px;
        overflow: hidden;
        background-color:  #d0d2d3; /* Light gray as in image */
    }

    .accordion-button {
        background-color: transparent;
        border: none;
        padding: 1rem 1.5rem;
        font-size: clamp(14px, 2.5vw, 16px);
        font-weight: 500;
        color: #333;
        text-align: left;
        transition: all 0.3s ease;
        position: relative;
        font-family: 'Instrument Sans', sans-serif; /*Instrument Sans*/
    }

    .accordion-button:not(.collapsed) {
        background-color: #e9ecef; /* Slightly darker when open */
        color: #000;
    }

    .accordion-button:focus {
        box-shadow: none;
        border: none;
    }

    .faq-number {
        font-weight: 600;
        margin-right: 0.5rem;
        font-family: 'Titillium Web', sans-serif;
    }

    .faq-icon {
        position: absolute;
        right: 1.5rem;
        top: 50%;
        transform: translateY(-50%);
        font-size: 1.2rem;
        font-weight: bold;
        transition: transform 0.3s ease;
    }

    .accordion-button:not(.collapsed) .faq-icon {
        transform: translateY(-50%) rotate(45deg); /* + to x when open */
    }

    .accordion-body {
        padding: 1rem 1.5rem;
        background-color: #fff;
        color: #555;
        font-size: clamp(13px, 2vw, 15px);
        line-height: 1.6;
        font-family: 'Titillium Web', sans-serif;
        font-weight: 400;
    }

    .accordion-body ul {
        margin-left: 1.5rem;
        list-style-type: disc;
    }

    .accordion-body li {
        margin-bottom: 0.25rem;
        font-family: 'Titillium Web', sans-serif;
        font-weight: 400;
    }

    /* Responsive */
    @media (max-width: 768px) {
      	.paragraph-size {
            font-size:16pt;
        }
      	#faq {
            padding-top: 2rem; 
            padding-bottom:2rem;
        }
        .accordion-button {
            padding: 0.75rem 1rem;
            font-size: clamp(12px, 3vw, 14px);
        }

        .accordion-body {
            padding: 0.75rem 1rem;
            font-size: clamp(12px, 2.5vw, 14px);
        }

        .faq-icon {
            right: 1rem;
            font-size: 1rem;
        }

        .line-highlight {
            width: 100px; /* Smaller on mobile */
        }
    }

    @media (max-width: 576px) {
      	.paragraph-size {
            font-size:14pt;
        }
        .accordion-button {
            padding: 0.5rem 0.75rem;
        }

        .accordion-body {
            padding: 0.5rem 0.75rem;
        }

        .faq-number {
            margin-right: 0.25rem;
        }
    }
</style>