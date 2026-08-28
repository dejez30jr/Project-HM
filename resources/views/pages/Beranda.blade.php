@extends('layouts.app')

@section('title', 'Hanz Management | Jasa SPG, Event Organizer & Manpower Terbaik di Indonesia')
@section('description', 'Hanz Management adalah agency SPG & penyedia manpower di Bogor. Jasa SPG, SPB, event organizer, dekorasi, produksi event dan layanan promosi di seluruh Indonesia. Hubungi kami untuk kebutuhan SDM event Anda.')
@section('canonical', url('/'))

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.4/dist/aos.css">
@endpush

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "ProfessionalService",
                "@id": "{{ url('/') }}#organization",
                "name": "Hanz Management",
                "url": "{{ url('/') }}",
                "logo": "{{ asset('images/HM.avif') }}",
                "image": "{{ asset('images/img-hero.webp') }}",
                "description": "Agency SPG & penyedia manpower di Bogor, Indonesia. Jasa SPG, SPB, event organizer, dekorasi dan produksi event di seluruh Indonesia.",
                "telephone": "+6282110040066",
                "priceRange": "Rp",
                "address": {
                    "@type": "PostalAddress",
                    "addressLocality": "Bogor",
                    "addressRegion": "Jawa Barat",
                    "addressCountry": "ID"
                },
                "areaServed": "Indonesia",
                "sameAs": [
                    "https://www.instagram.com/hanzmanagement_/",
                    "https://www.tiktok.com/@hanzmanagement"
                ]
            },
            {
                "@type": "WebSite",
                "@id": "{{ url('/') }}#website",
                "url": "{{ url('/') }}",
                "name": "Hanz Management",
                "inLanguage": "id-ID",
                "publisher": {
                    "@id": "{{ url('/') }}#organization"
                }
            },
            {
                "@type": "FAQPage",
                "@id": "{{ url('/') }}#faq",
                "mainEntity": [
                    {
                        "@type": "Question",
                        "name": "Apa layanan yang disediakan Hanz Management?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Kami menyediakan SPG, SPB, usher, model, dokumentasi serta support produksi event dan dekorasi."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Brands apa saja yang bekerja sama dengan Hanz Management?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Gojek, Grab, Sari roti, Dana, Gopay, Omela, Mie sedap dan chocodrink."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Bagaimana cara memesan SPG untuk event saya?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Kirim brief (tanggal, lokasi, durasi, jumlah talent, tugas) via form kontak, email, atau WA. Kami akan kirim penawaran dan konfirmasi ketersediaan."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Berapa biaya atau rate untuk SPG per event?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Rate bergantung pada durasi, lokasi, jumlah talent, dan kebutuhan khusus. Kami akan mengirimkan penawaran setelah menerima brief lengkap."
                        }
                    },
                    {
                        "@type": "Question",
                        "name": "Apakah talent diberi training sebelum event?",
                        "acceptedAnswer": {
                            "@type": "Answer",
                            "text": "Ya, talent akan mendapatkan briefing atau training singkat sesuai kebutuhan brand atau tugas acara."
                        }
                    }
                ]
            }
        ]
    }
    </script>
@endsection

@section('content')
    <main class="bg-transparent text-[#0B0E1E]">
  <!-- Hero Section -->
<section class="w-full">
<div class="lg:grid flex flex-col-reverse lg:grid-cols-2 gap-6 lg:gap-24 items-center">
<!-- Left Column: Content -->
<div class="flex flex-col gap-6 items-start">
<h1 class="text-[2rem] md:text-[3.5rem] leading-[2.5rem] md:leading-[4.70rem] font-extrabold tracking-tight lg:max-w-md"">
                    Agency Spg &amp; <br class="hidden md:block"/>Event Organizer <br class="hidden md:block"/>Terbaik di <br class="hidden md:block"/>Indonesia
                </h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl">
                    kami hadir untuk memenuhi kebutuhan perusahaan anda baik dari segi Jasa Penyedia Manpower, pengadaan barang, produksi property event. decoration, baik untuk promosi maupun entertainment.
                </p>
<a class="inline-flex items-center gap-2 bg-primary text-on-primary font-label-md text-label-md px-8 py-4 rounded-full hover:bg-on-primary-fixed-variant transition-all duration-300 shadow-md hover:shadow-lg mt-4 active:scale-95" href="#about">
                    Lihat Selengkapnya
</a>
</div>
<!-- Right Column: Image Grid -->
<div class="relative sm:h-[600px] w-full rounded-3xl py-2 sm:py-4">
<div class="grid grid-cols-2 sm:grid-cols-12 sm:grid-rows-6 gap-4 h-full">

    <!-- Main Image -->
    <div class=" md:flex hidden
        col-span-2
        sm:col-span-5 sm:row-span-6
        h-72 sm:h-auto
        relative rounded-2xl overflow-hidden
        shadow-[0_10px_15px_-3px_rgba(15,23,42,0.05)]
        hover:-translate-y-1 transition-transform duration-300
    ">
<!-- Floating Social Icons -->
<div class="absolute top-4 right-4 flex flex-col gap-2">

    <!-- Instagram -->
    <a
        href="https://www.instagram.com/hanzmanagement_/"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="Instagram Hanz Management"
        class="w-10 h-10 bg-[#E1306C] rounded-lg flex items-center justify-center text-white shadow-md hover:scale-110 transition-transform"
    >
        <svg
            class="w-5 h-5"
            viewBox="0 0 24 24"
            fill="none"
            stroke="currentColor"
            stroke-width="2"
            stroke-linecap="round"
            stroke-linejoin="round"
        >
            <rect x="3" y="3" width="18" height="18" rx="5" />
            <circle cx="12" cy="12" r="4" />
            <circle cx="17.5" cy="6.5" r="1" fill="currentColor" stroke="none" />
        </svg>
    </a>

    <!-- TikTok -->
    <a
        href="https://www.tiktok.com/@hanzmanagement"
        target="_blank"
        rel="noopener noreferrer"
        aria-label="TikTok Hanz Management"
        class="w-10 h-10 bg-black rounded-lg flex items-center justify-center text-white shadow-md hover:scale-110 transition-transform"
    >
        <svg
            class="w-5 h-5"
            viewBox="0 0 24 24"
            fill="currentColor"
            aria-hidden="true"
        >
            <path d="M19.59 6.69a4.83 4.83 0 0 1-3.77-4.15h-3.39v13.73a2.91 2.91 0 1 1-2-2.77V10a6.32 6.32 0 1 0 5.39 6.27V9.32a8.16 8.16 0 0 0 3.77.92V6.69Z"/>
        </svg>
    </a>

</div>
        <img
            class="w-full h-full object-cover"
            src="{{ asset('images/hero-content.png') }}"
        />
    </div>

    <!-- Top Right Image -->
    <div class="
        col-span-1
        sm:col-span-7 sm:row-span-3
        h-48 sm:h-auto
        rounded-2xl overflow-hidden
        shadow-[0_10px_15px_-3px_rgba(15,23,42,0.05)]
        hover:-translate-y-1 transition-transform duration-300
    ">
        <img
            class="w-full h-full object-cover"
            src="{{ asset('images/img-hero(2).avif') }}"
        />
    </div>

    <!-- Middle Right Image -->
    <div class="
        col-span-1
        sm:col-span-3 sm:row-span-3
        h-48 sm:h-auto
        rounded-2xl overflow-hidden
        shadow-[0_10px_15px_-3px_rgba(15,23,42,0.05)]
        hover:-translate-y-1 transition-transform duration-300
    ">
        <img
            class="w-full h-full object-cover"
            src="{{ asset('images/img-hero.webp') }}"
        />
    </div>

    <!-- Bottom Right Image -->
    <div class="
        col-span-2
        sm:col-span-4 sm:row-span-3
        h-48 sm:h-auto
        rounded-2xl overflow-hidden
        shadow-[0_10px_15px_-3px_rgba(15,23,42,0.05)]
        hover:-translate-y-1 transition-transform duration-300
    ">
        <img
            class="w-full h-full object-cover"
            src="{{ asset('images/img-hero(1).avif') }}"
        />
    </div>

</div>
</div>
</div>
</section>

  <!-- ===== section detail ==== -->
  <section data-aos="fade-up" class="w-full mt-12">
    <div
        class="bg-[#4F46E5] text-white rounded-tr-[40px] rounded-bl-[40px] py-12 px-4 grid grid-cols-4 gap-6">
        
        <div class="text-center">
            <p class="text-2xl sm:text-4xl font-semibold leading-tight">
                20+
            </p>
            <p class="text-xs mt-1">
                Project
            </p>
        </div>

        <div class="text-center">
            <p class="text-2xl sm:text-4xl font-semibold leading-tight">
                27+
            </p>
            <p class="text-xs mt-1">
                Happy Client
            </p>
        </div>

        <div class="text-center">
            <p class="text-2xl sm:text-4xl font-semibold leading-tight">
                4+
            </p>
            <p class="text-xs mt-1">
               Hard Workers
            </p>
        </div>

        <div class="text-center">
            <p class="text-2xl sm:text-4xl font-semibold leading-tight">
                24+
            </p>
            <p class="text-xs mt-1">
                of Support
            </p>
        </div>
    </div>
    </section>

    <!-- ====== about section ========= -->
    <section data-aos="fade-up" class="w-full grid grid-cols-1 lg:grid-cols-2 gap-[45px] py-6 mt-6 md:py-12" id="about">
      <img src="{{asset('images/about.png')}}" alt="Hanz Management" loading="lazy" width="948" height="733">
    <div class="mt-2 md:mt-0">
     <h1 class="text-2xl sm:text-3xl font-extrabold mb-2 leading-tight">
      Tentang Kami
     </h1>
     <p class="md:text-lg text-gray-600 mb-6 leading-relaxed">
       Hanz Management merupakan perusahaan penyedia jasa agency yang menyediakan banyak SDM terlatih yang berkompetensi dan mempunyai dedikasi penuh, yang berbasis di Kota bogor dan memiliki sumber daya yang tersebar di seluruh kota di Indonesia, kami hadir untuk memenuhi kebutuhan perusahaan anda baik dari segi Jasa Penyedia Manpower, pengadaan barang, produksi property event. decoration, dll baik untuk promosi maupun entertainment.
     </p>
     <a class="inline-flex items-center bg-blue-600 text-white px-6 py-3 rounded-full text-sm font-medium hover:bg-blue-700 transition" href="#">
      Kontak Kami
      <svg class="w-3.5 h-3.5 ml-2" viewBox="0 0 512 512" fill="currentColor" aria-hidden="true" focusable="false"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg>
      </a>
    </div>
    </section>

    <!-- =======  Why chose me detail ========== -->
    <section data-aos="fade-up" class="w-full py-6 md:py-12">
    <div class="flex flex-col md:flex-row md:flex-wrap md:gap-x-20 gap-y-10">
      <div class="flex-wrap flex gap-4 justify-between w-full">
      <h2 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-[#1a1a1a] md:w-1/3 leading-tight">
        Kenapa anda Memilih kami?
      </h2>
      <div class="md:max-w-[500px] text-gray-600">
      <p>kami mengutamakan kualitas, kepercayaan, dan kepuasan Anda di setiap layanan yang kami berikan.</p>
      </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-10 gap-y-10">
        <!-- Item 1 -->
        <div class="flex space-x-4 shadow-md p-4">
          <div class="flex-shrink-0 w-12 h-12 rounded-full bg-[#7ed6fb] flex items-center justify-center">
            <span class="text-[#0d8ddb] text-lg font-bold">1</span>
          </div>
          <div>
            <h3 class="sm:text-2xl font-bold text-sm leading-snug text-[#1a1a1a]">
              Sumber Daya Manusia yang Berkualitas dan Teruji
            </h3>
            <p class="text-xs leading-relaxed text-[#1a1a1a] mt-1 font-sans">
              Sumber daya manusia berkualitas adalah kunci kemajuan; teruji melalui kompetensi, etika, dan pengalaman.
          </div>
        </div>

        <!-- Item 2 -->
        <div class="flex space-x-4  shadow-md p-4">
          <div class="flex-shrink-0 w-12 h-12 rounded-full bg-[#7ed6fb] flex items-center justify-center">
            <span class="text-[#0d8ddb] text-lg font-bold">2</span>
          </div>
          <div>
            <h3 class="sm:text-2xl font-bold leading-snug text-[#1a1a1a]">
              Internal Team yang sudah Expert dengan Bidangnya
            </h3>
            <p class="text-xs leading-relaxed text-[#1a1a1a] mt-1 font-sans">
            Tim internal yang expert menjamin efisiensi, kualitas kerja tinggi, dan solusi tepat sasaran.
            </p>
          </div>
        </div>

        <!-- Item 3 -->
        <div class="flex space-x-4  shadow-md p-4">
          <div class="flex-shrink-0 w-12 h-12 rounded-full bg-[#7ed6fb] flex items-center justify-center">
             <span class="text-[#0d8ddb] text-lg font-bold">3</span>
          </div>
          <div>
            <h3 class="sm:text-2xl font-bold text-sm leading-snug text-[#1a1a1a]">
              Area Coverage skala Nasional di Kota Kota Besar di Indonesia
            </h3>
            <p class="text-xs leading-relaxed text-[#1a1a1a] mt-1 font-sans">
             Area coverage nasional menjangkau kota-kota besar Indonesia, memastikan layanan luas dan optimal.
            </p>
          </div>
        </div>

        <!-- Item 4 -->
        <div class="flex space-x-4  shadow-md p-4">
          <div class="flex-shrink-0 w-12 h-12 rounded-full bg-[#7ed6fb] flex items-center justify-center">
                <span class="text-[#0d8ddb] text-lg font-bold">4</span>
          </div>
          <div>
            <h3 class="sm:text-2xl font-bold text-sm leading-snug text-[#1a1a1a]">
              Memiliki Resource Team hampir disetiap Kota Kota Besar
            </h3>
            <p class="text-xs leading-relaxed text-[#1a1a1a] mt-1 font-sans">
              Resource team tersedia di hampir semua kota besar, siap mendukung kebutuhan secara cepat.
            </p>
          </div>
        </div>

        <!-- Item 5 -->
        <div class="flex space-x-4  shadow-md p-4">
          <div class="flex-shrink-0 w-12 h-12 rounded-full bg-[#7ed6fb] flex items-center justify-center">
               <span class="text-[#0d8ddb] text-lg font-bold">5</span>
          </div>
          <div>
            <h3 class="sm:text-2xl font-bold text-sm leading-snug text-[#1a1a1a]">
             Structure Internal Team yang bisa Support Hampir setiap Activity yang berjalan
            </h3>
            <p class="text-xs leading-relaxed text-[#1a1a1a] mt-1 font-sans">
             Struktur tim internal mendukung hampir semua aktivitas, memastikan kelancaran dan efisiensi kerja.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ==== end ===== -->

   <!-- ====== our service ======= -->
  <section data-aos="fade-up" class="w-full py-6 md:py-12" id="service">
  <div class="max-w-3xl">
    <h2 class="text-3xl mb-5 sm:text-3xl md:text-4xl font-extrabold text-[#1a1a1a] md:w-1/3 leading-tight">
      Layanan Kami
    </h2>
  </div>
   <!-- banner -->
   <div class="relative rounded-[30px] overflow-hidden h-40 sm:h-48 md:h-56">
    <img alt="Tim Hanz Management sedang bekerja di kantor" class="w-full h-full object-cover" src="{{ asset('images/img-hero.webp') }}"/>
    <div class="absolute inset-0 bg-gradient-to-r from-black/40 to-black/30 rounded-lg">
    </div>
    <div class="absolute flex w-full justify-between flex-wrap p-4 bottom-4 right-0 text-white text-[15px] sm:text-[22px] md:text-[24px] font-normal leading-snug">
     Kami menyediakan berbagai layanan
     <br/>
     Strategic Marketing
    <div class="mt-4">
    <a href="{{ route('services') }}"
        class="inline-flex p-2 px-4 items-center gap-2 bg-[#4F46E5] text-white rounded-full md:px-8 px-1 md:py-3 py-2 md:text-lg text-[10px] font-semibold hover:bg-indigo-600 transition-colors">
        Lihat Semua Layanan
        <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path>
        </svg>
    </a>
    </div>
    </div>
   </div>
  <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
    
    <!-- Card 1 -->
    <a href="{{ route('services.show', 'entertainment') }}"
        class="group bg-white shadow-md hover:bg-gray-200 rounded-[20px] pb-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
      <div class="flex justify-center mb-4 bg-white rounded-[20px] overflow-hidden">
        <div class="flex h-[170px]  md:h-[200px] w-full items-center justify-center overflow-hidden">
          <img src="{{ asset('images/hiburan3.webp') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" alt="Layanan Entertainment Hanz Management">
        </div>
      </div>
      <h2 class="font-bold text-sm sm:text-xl md:text-2xl text-center leading-snug text-[#1a1a1a] group-hover:text-[#4F46E5]">
        Entertainment
      </h2>
    </a>

    <!-- Card 2 -->
    <a href="{{ route('services.show', 'promotion') }}"
        class="group bg-white shadow-md hover:bg-gray-200 rounded-[20px] pb-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
      <div class="flex justify-center mb-4 bg-white rounded-[20px] overflow-hidden">
        <div class="flex h-[170px] md:h-[200px] w-full items-center justify-center overflow-hidden">
          <img src="{{ asset('images/service1.webp') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" alt="Layanan Promotion Hanz Management">
        </div>
      </div>
      <h3 class="font-bold text-sm sm:text-xl md:text-2xl text-center leading-snug text-[#1a1a1a] group-hover:text-[#4F46E5]">
        Promotion
      </h3>
    </a>

    <!-- Card 3 -->
    <a href="{{ route('services.show', 'event') }}"
        class="group bg-white shadow-md hover:bg-gray-200 rounded-[20px] pb-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
      <div class="flex justify-center mb-4 bg-white rounded-[20px] overflow-hidden">
        <div class="flex h-[170px] md:h-[200px] w-full items-center justify-center overflow-hidden">
          <img src="{{ asset('images/img-hero(1).avif') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" alt="Layanan Event Hanz Management">
        </div>
      </div>
      <h3 class="font-bold text-sm sm:text-xl md:text-2xl text-center leading-snug text-[#1a1a1a] group-hover:text-[#4F46E5]">
        Event
      </h3>
    </a>

    <!-- Card 4 -->
    <a href="{{ route('services.show', 'production-branding') }}"
        class="group bg-white shadow-md hover:bg-gray-200 rounded-[20px] pb-4 transition-all duration-300 hover:-translate-y-1 hover:shadow-xl">
      <div class="flex justify-center mb-4 bg-white rounded-[20px] overflow-hidden">
        <div class="flex h-[170px] md:h-[200px] w-full items-center justify-center overflow-hidden">
          <img src="{{ asset('images/service4.webp') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" loading="lazy" alt="Layanan Production & Branding Hanz Management">
        </div>
      </div>
      <h3 class="font-bold text-sm sm:text-xl md:text-2xl text-center leading-snug text-[#1a1a1a] group-hover:text-[#4F46E5]">
         Production & Branding
      </h3>
    </a>
  </div>
  </section>

 <!-- ======= FAQ ======= -->
  <section data-aos="fade-up" class="w-full py-6 md:py-12" id="faq" >
    <h2 class="text-3xl sm:text-3xl md:text-4xl font-extrabold text-[#1a1a1a] md:w-1/3 leading-tight">Pertanyaan Umum (FAQ)</h2>
    <p class="text-gray-600 mb-8 mt-6">
      Butuh bantuan? Berikut jawaban cepat untuk pertanyaan yang sering diajukan tentang layanan SPG & event kami.
    </p>

    @php
        $faqs = [
            [
                'id' => 'faq1',
                'question' => 'Apa layanan yang disediakan Hanz Management?',
                'answer' => 'Kami menyediakan SPG, SPB, usher, model, dokumentasi serta support produksi event dan dekorasi.',
            ],
            [
                'id' => 'faq2',
                'question' => 'Brands apa saja yang bekerja sama dengan Hanz Management?',
                'answer' => 'Gojek, Grab, Sari roti, Dana, Gopay, Omela, Mie sedap dan chocodrink <a href="#client" class="text-blue-500">View all brands</a>',
            ],
            [
                'id' => 'faq3',
                'question' => 'Bagaimana cara memesan SPG untuk event saya?',
                'answer' => 'Kirim brief (tanggal, lokasi, durasi, jumlah talent, tugas) via form kontak, email, atau WA. Kami akan kirim penawaran dan konfirmasi ketersediaan.',
            ],
            [
                'id' => 'faq4',
                'question' => 'Berapa biaya / rate untuk SPG per event?',
                'answer' => 'Rate bergantung pada durasi, lokasi, jumlah talent, dan kebutuhan khusus. Kami akan mengirimkan penawaran setelah menerima brief lengkap.',
            ],
            [
                'id' => 'faq5',
                'question' => 'Apakah talent diberi training sebelum event?',
                'answer' => 'Ya — talent akan mendapatkan briefing/training singkat sesuai kebutuhan brand atau tugas acara.',
            ],
        ];
    @endphp

    <div class="space-y-3" id="accordion">
        @foreach ($faqs as $faq)
            <div class="border-b border-gray-300 overflow-hidden">
                <button class="w-full flex items-center justify-between py-5 text-left"
                        aria-expanded="false"
                        aria-controls="{{ $faq['id'] }}"
                        id="{{ $faq['id'] }}btn"
                        onclick="toggleFaq('{{ $faq['id'] }}')">
                    <span class="font-medium">{{ $faq['question'] }}</span>
                    <svg class="w-5 h-5 transform transition-transform" xmlns="http://www.w3.org/2000/svg" fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                    </svg>
                </button>
                <div id="{{ $faq['id'] }}" class="px-4 pb-4 hidden" role="region" aria-labelledby="{{ $faq['id'] }}btn">
                    <p class="text-gray-700">{!! $faq['answer'] !!}</p>
                </div>
            </div>
        @endforeach
    </div>
  </section>

  <!-- ======= portfolio ======= -->
  <section data-aos="fade-up" id="portfolio" class="w-full py-6 md:py-12">
  <div class="flex justify-between py-6"> 
    <a href="/portfolio" 
       class="inline-block px-4 py-2 md:px-6 md:py-4 bg-blue-600 text-white text-sm rounded-3xl font-semibold hover:bg-blue-700 transition">
    Semua
    </a>
      <div class="flex items-center gap-2">
           <svg class="w-4 h-4 inline-block" viewBox="0 0 512 512" fill="currentColor" aria-hidden="true" focusable="false"><path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 288 480 288c17.7 0 32-14.3 32-32s-14.3-32-32-32l-370.7 0 73.4-73.4c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-128 128z"/></svg><div class="w-[60px] md:w-[200px] bg-gray-400 h-[1px]"></div>
          <p class="text-sm">Proyek Kami</p>
      </div>
  </div>
  <div class="flex justify-end text-right mb-8 w-full">
  <h2 class="text-3xl sm:text-3xl md:text-4xl font-extrabold text-[#1a1a1a] md:w-1/3 leading-tight">
    Proyek Kreatif Kami Bersama Brand
  </h2>
  </div>

  <!-- Grid 4 Card -->
  <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
    <!-- Card 1 -->
    <div class="bg-white shadow-lg rounded-3xl overflow-hidden">
      <img src="{{ asset('images/hiburan3.webp') }}" alt="Agency Spg & Event Organizer" class="w-full object-cover">
   <div class="flex-wrap flex justify-between items-center p-4 text-base sm:text-lg text-slate-800 font-semibold">
        Fashion Hotel
        <div class="rounded-3xl text-sm p-2 px-4 bg-blue-300">
        <a class="truncate" href="{{ route('portfolio', 'entertaiment') }}">
              Lihat Hasil
        </a>
        </div>
      </div>
    </div>

    <div class="bg-white shadow-md rounded-3xl overflow-hidden">
      <img src="{{ asset('images/promosi7.jpeg') }}" alt="Agency Spg & Event Organizer" class="w-full object-cover">
      <div class="flex-wrap flex justify-between items-center p-4 text-base sm:text-lg text-slate-800 font-semibold">
        <h3>Gojek</h3>
        <div class="rounded-3xl text-sm p-2 px-4 bg-blue-300">
          <a class="truncate" href="{{ route('portfolio', 'event') }}">
              Lihat Hasil
          </a>
        </div>
      </div>
    </div>

    <div class="bg-white shadow-md rounded-3xl overflow-hidden">
      <img src="{{ asset('images/event3.webp') }}" alt="Agency Spg & Event Organizer" class="w-full object-cover">
      <div class="flex-wrap flex justify-between items-center p-4 text-base sm:text-lg text-slate-800 font-semibold">
        <h3>Omela</h3>
        <div class="rounded-3xl text-sm p-2 px-4 bg-blue-300">
          <a class="truncate" href="{{ route('portfolio', 'promotion') }}">
              Lihat Hasil
          </a>
        </div>
      </div>
    </div>
    
    <div class="bg-white shadow-md rounded-3xl overflow-hidden">
      <img src="{{ asset('images/produk1.webp') }}" alt="Agency Spg & Event Organizer" class="w-full object-cover">
      <div class="flex-wrap flex justify-between items-center p-4 text-base sm:text-lg text-slate-800 font-semibold">
        <h3>OT Group</h3>
        <div class="rounded-3xl text-sm p-2 px-4 bg-blue-300">
          <a class="truncate" href="{{ route('portfolio', 'production') }}">
              Lihat Hasil
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
   
  <!-- ======= our client ======== -->
    <div data-aos="fade-up" class="w-full py-6 md:py-12 text-center overflow-hidden" id="client">
    <p class="text-black text-lg mb-6">Dipercaya oleh tim di</p>
    <div class="slider">
      @php
        $brandLogos = [
            'https://ratu.ai/wp-content/uploads/2024/09/grab.jpg',
            'https://tse1.mm.bing.net/th/id/OIP.InPCN4SgN-_FCPP7CmJ1cwHaDx?r=0&rs=1&pid=ImgDetMain&o=7&rm=3',
            'https://th.bing.com/th/id/R.8b064eda27c883d0915122eb15e5e044?rik=3ExdE00xpqw61Q&riu=http%3a%2f%2fwww.kakavisual.co.id%2fwp-content%2fuploads%2f2014%2f08%2flogo-sari-roti.jpg&ehk=N8xLTXoVZnf0PEE1SWAlXWoyTGO2wyu57iTyc2ycias%3d&risl=&pid=ImgRaw&r=0',
            'https://tse1.mm.bing.net/th/id/OIP.ifqjiNpHvqWBHVxwYPNHugHaEK?r=0&rs=1&pid=ImgDetMain&o=7&rm=3',
            'https://wingscorp.com/wp-content/uploads/2020/11/Logo-ChocoDrink.png',
            'https://www.omela.com/assets/img/logo-omela-2024.png',
            'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEipDxgrt0EQBRjp50rSbK9pm5_IErU9OA7XeWIzbauaFeNzSLBPqk3dEZykkqb3uyPHaUJD9sQLhQMk80g4SMEAYeHln-Wxf3cIPpaBj27tGZOKKA1JEC8dcXeYNsTpOh5ACCaohb5hMkO_WhcHoD1ij3Ak-QefIHXGytR4KIEQF3msDynvUhgXUsCEig/w1200-h630-p-k-no-nu/g20-indonesia-01.jpg',
            'https://seekvectors.com/files/download/KT&G.png',
        ];
      @endphp
        <div class="slider-track">
        <div class="slide">
          <img src="https://ratu.ai/wp-content/uploads/2024/09/grab.jpg" alt="Logo mitra Hanz Management" loading="lazy" decoding="async" draggable="false" />
        </div>
        <div class="slide">
          <img src="https://tse1.mm.bing.net/th/id/OIP.InPCN4SgN-_FCPP7CmJ1cwHaDx?r=0&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Logo mitra Hanz Management" loading="lazy" decoding="async" draggable="false" />
        </div>
        <div class="slide">
          <img src="https://th.bing.com/th/id/R.8b064eda27c883d0915122eb15e5e044?rik=3ExdE00xpqw61Q&riu=http%3a%2f%2fwww.kakavisual.co.id%2fwp-content%2fuploads%2f2014%2f08%2flogo-sari-roti.jpg&ehk=N8xLTXoVZnf0PEE1SWAlXWoyTGO2wyu57iTyc2ycias%3d&risl=&pid=ImgRaw&r=0" alt="Logo mitra Hanz Management" loading="lazy" decoding="async" draggable="false" />
        </div>
        <div class="slide">
          <img src="https://tse1.mm.bing.net/th/id/OIP.ifqjiNpHvqWBHVxwYPNHugHaEK?r=0&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Logo mitra Hanz Management" loading="lazy" decoding="async" draggable="false" />
        </div>
        <div class="slide">
          <img src="https://wingscorp.com/wp-content/uploads/2020/11/Logo-ChocoDrink.png" alt="Logo mitra Hanz Management" loading="lazy" decoding="async" draggable="false" />
        </div>
        <div class="slide">
          <img src="https://www.omela.com/assets/img/logo-omela-2024.png" alt="Logo mitra Hanz Management" loading="lazy" decoding="async" draggable="false" />
        </div>
        <div class="slide">
          <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEipDxgrt0EQBRjp50rSbK9pm5_IErU9OA7XeWIzbauaFeNzSLBPqk3dEZykkqb3uyPHaUJD9sQLhQMk80g4SMEAYeHln-Wxf3cIPpaBj27tGZOKKA1JEC8dcXeYNsTpOh5ACCaohb5hMkO_WhcHoD1ij3Ak-QefIHXGytR4KIEQF3msDynvUhgXUsCEig/w1200-h630-p-k-no-nu/g20-indonesia-01.jpg" alt="Logo mitra Hanz Management" loading="lazy" decoding="async" draggable="false" />
        </div>
        <div class="slide">
          <img src="https://seekvectors.com/files/download/KT&G.png" alt="Logo mitra Hanz Management" loading="lazy" decoding="async" draggable="false" />
        </div>
        <div class="slide">
          <img src="https://ratu.ai/wp-content/uploads/2024/09/grab.jpg" alt="Logo mitra Hanz Management" loading="lazy" decoding="async" draggable="false" />
        </div>
        <div class="slide">
          <img src="https://tse1.mm.bing.net/th/id/OIP.InPCN4SgN-_FCPP7CmJ1cwHaDx?r=0&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Logo mitra Hanz Management" loading="lazy" decoding="async" draggable="false" />
        </div>
        <div class="slide">
          <img src="https://th.bing.com/th/id/R.8b064eda27c883d0915122eb15e5e044?rik=3ExdE00xpqw61Q&riu=http%3a%2f%2fwww.kakavisual.co.id%2fwp-content%2fuploads%2f2014%2f08%2flogo-sari-roti.jpg&ehk=N8xLTXoVZnf0PEE1SWAlXWoyTGO2wyu57iTyc2ycias%3d&risl=&pid=ImgRaw&r=0" alt="Logo mitra Hanz Management" loading="lazy" decoding="async" draggable="false" />
        </div>
        <div class="slide">
          <img src="https://tse1.mm.bing.net/th/id/OIP.ifqjiNpHvqWBHVxwYPNHugHaEK?r=0&rs=1&pid=ImgDetMain&o=7&rm=3" alt="Logo mitra Hanz Management" loading="lazy" decoding="async" draggable="false" />
        </div>
        <div class="slide">
          <img src="https://wingscorp.com/wp-content/uploads/2020/11/Logo-ChocoDrink.png" alt="Logo mitra Hanz Management" loading="lazy" decoding="async" draggable="false" />
        </div>
        <div class="slide">
          <img src="https://www.omela.com/assets/img/logo-omela-2024.png" alt="Logo mitra Hanz Management" loading="lazy" decoding="async" draggable="false" />
        </div>
        <div class="slide">
          <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEipDxgrt0EQBRjp50rSbK9pm5_IErU9OA7XeWIzbauaFeNzSLBPqk3dEZykkqb3uyPHaUJD9sQLhQMk80g4SMEAYeHln-Wxf3cIPpaBj27tGZOKKA1JEC8dcXeYNsTpOh5ACCaohb5hMkO_WhcHoD1ij3Ak-QefIHXGytR4KIEQF3msDynvUhgXUsCEig/w1200-h630-p-k-no-nu/g20-indonesia-01.jpg" alt="Logo mitra Hanz Management" loading="lazy" decoding="async" draggable="false" />
        </div>
        <div class="slide">
          <img src="https://seekvectors.com/files/download/KT&G.png" alt="Logo mitra Hanz Management" loading="lazy" decoding="async" draggable="false" />
        </div>
      </div>
    </div>
  </div>
  </main>
@endsection

@push('scripts')
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-out',
            once: true
        });
    </script>
    <script>
        function toggleFaq(id) {
            const panel = document.getElementById(id);
            const btn = document.getElementById(id + 'btn') || document.querySelector('[aria-controls="' + id + '"]');
            const expanded = btn.getAttribute('aria-expanded') === 'true';

            // Tutup semua panel
            document.querySelectorAll('#accordion [role="region"]').forEach(r => {
                if (r.id !== id) {
                    r.classList.add('hidden');
                    const b = document.querySelector('[aria-controls="' + r.id + '"]');
                    if (b) {
                        b.setAttribute('aria-expanded', 'false');
                        b.querySelector('svg').classList.remove('rotate-180');
                    }
                }
            });

            if (expanded) {
                panel.classList.add('hidden');
                btn.setAttribute('aria-expanded', 'false');
                btn.querySelector('svg').classList.remove('rotate-180');
            } else {
                panel.classList.remove('hidden');
                btn.setAttribute('aria-expanded', 'true');
                btn.querySelector('svg').classList.add('rotate-180');
            }
        }
    </script>
@endpush