@extends('layouts.app')

@section('title', 'Hanz Management | Jasa SPG, Event Organizer & Manpower Terbaik di Indonesia')
@section('description', 'Hanz Management adalah agency SPG & penyedia manpower di Bogor. Jasa SPG, SPB, event organizer, dekorasi, produksi event dan layanan promosi di seluruh Indonesia. Hubungi kami untuk kebutuhan SDM event Anda.')
@section('canonical', url('/'))

@push('styles')
    <link rel="preload" as="image" href="{{ asset('images/mobile.webp') }}" fetchpriority="high">
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
    <main class="bg-[#F9FAFB] text-[#0B0E1E]">
        <!-- ====== herosection ======= -->
    <section class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-10 md:w-auto md:gap-20 mt-2 md:mt-10">
    <!-- Kolom gambar -->
    <div class="order-1 md:order-1 lg:order-2 grid grid-cols-2 grid-rows-2 gap-2 md:gap-4 sm:grid-cols-3 sm:grid-rows-2">
        <div class="sm:rounded-br-[30px] relative rounded-lg overflow-hidden sm:col-span-1 sm:row-span-2">
            <img alt="Modern office building exterior with large windows and gray facade"
                class="w-full h-full object-cover" height="350"
                src="{{ asset('images/mobile.webp') }}"
                width="400" loading="eager" fetchpriority="high" />
              <div aria-hidden="true" class="absolute flex-col top-2 right-3 rounded-md">
              <div class="bg-red-500 p-2 mb-[5px]">
               <a href="https://www.instagram.com/hanzmanagement_/?igsh=MXVhMGxhdnFkdmVxMw%3D%3D#" class="mb-[10px]">
                         <svg class="w-[25px] h-[25px] text-white" viewBox="0 0 448 512" fill="currentColor" aria-hidden="true" focusable="false"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
               </a>
              </div>
              <div class="bg-black p-2 text-white">
                 <a href="https://www.tiktok.com/@hanzmanagement?_t=ZS-8zToKwFMvwW&_r=1">
                          <svg class="w-[25px] h-[25px] text-white" viewBox="0 0 448 512" fill="currentColor" aria-hidden="true" focusable="false"><path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/></svg>
                 </a>
              </div>
            </div>
            <div class="absolute bottom-1 left-1 sm:bottom-2 sm:left-2 bg-white rounded-lg px-2 py-2 flex items-center space-x-2 shadow-md max-w-max">
                <div class="text-xs font-semibold">
                    <p class="leading-none text-[10px]">Content terupdate</p>
                </div>
            </div>
        </div>
        <div class="relative rounded-lg overflow-hidden sm:col-span-1 sm:row-span-1">
            <img alt="Hanz Management | Agency Spg & Event Organizer"
                class="w-full h-full object-cover" height="170" loading="lazy"
                src="{{ asset('images/img-hero(2).avif') }}"
                width="400" />
        </div>
        <div class="relative sm:rounded-br-lg overflow-hidden sm:col-span-1 sm:row-span-1">
            <img alt="Hanz Management | Agency Spg & Event Organizer"
                class="w-full h-full object-cover rounded-[10px] sm:rounded-tr-[40px]" height="350" loading="lazy"
                src="{{ asset('images/img-hero.webp') }}" width="400" />
        </div>
       <div
            class="rounded-lg sm:h-[250px] flex flex-col justify-between text-sm font-semibold sm:col-span-2 sm:rounded-tr-[40px] sm:rounded-bl-none rounded-bl-[40px]">
            <div class="flex overflow-hidden h-[100%] rounded-[10px] sm:rounded-tl-[40px]">
                <img src="{{ asset('images/img-hero(1).avif') }}" class="w-full object-cover object-[center_10%]"
                    width="700" height="100%" alt="Hanz Management | Agency Spg & Event Organizer" loading="lazy" />
            </div>
        </div>
    </div>

    <!-- Kolom teks -->
    <div class="order-2 md:order-2 lg:order-1 flex flex-col space-y-6 w-full">
        <h1 class="text-[2rem] md:text-[3.5rem] leading-[2.5rem] md:leading-[4.70rem] font-extrabold tracking-tight lg:max-w-md">
            Agency Spg & Event Organizer Terbaik di Indonesia
        </h1>
        <p class="text-[#6B7280] text-base max-w-md leading-relaxed">
           kami hadir untuk memenuhi kebutuhan perusahaan anda baik dari segi Jasa Penyedia Manpower, pengadaan barang, produksi property event. decoration, baik untuk promosi maupun entertainment.
        </p>
        <div class="flex flex-wrap gap-4">
            <a href="#about" class="inline-flex items-center gap-2 bg-[#4F46E5] text-white rounded-full px-6 py-3 text-sm font-semibold hover:bg-indigo-600 min-w-[140px]">
                Lihat Selengkapnya
                <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>
            </a>
        </div>
    </div>
    </section>
  
  <!-- ===== section detail ==== -->
  <section class="max-w-7xl mx-auto px-6 mt-12">
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
    <section class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-2 gap-[45px] py-6 mt-6 md:py-12" id="about">
      <img src="{{asset('images/about.webp')}}" alt="Hanz Management" loading="lazy" width="948" height="733">
    <div class="mt-2 md:mt-0">
     <h1 class="text-2xl sm:text-3xl font-extrabold mb-2 leading-tight">
      Tentang Kami
     </h1>
     <p class="text-xs sm:text-lg text-[#1a1a1a] mb-6 leading-relaxed">
       Hanz Management merupakan perusahaan penyedia jasa agency yang menyediakan banyak SDM terlatih yang berkompetensi dan mempunyai dedikasi penuh, yang berbasis di Kota bogor dan memiliki sumber daya yang tersebar di seluruh kota di Indonesia, kami hadir untuk memenuhi kebutuhan perusahaan anda baik dari segi Jasa Penyedia Manpower, pengadaan barang, produksi property event. decoration, dll baik untuk promosi maupun entertainment.
     </p>
     <a class="inline-flex items-center bg-blue-600 text-white px-6 py-3 rounded-full text-sm font-medium hover:bg-blue-700 transition" href="#">
      Kontak Kami
      <svg class="w-3.5 h-3.5 ml-2" viewBox="0 0 512 512" fill="currentColor" aria-hidden="true" focusable="false"><path d="M502.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-128-128c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l370.7 0-73.4 73.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l128-128z"/></svg>
      </a>
    </div>
    </section>

    <!-- =======  Why chose me detail ========== -->
    <section class="max-w-7xl mx-auto px-6 py-6 md:py-12">
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
  <section class="max-w-7xl mx-auto px-6 py-6 md:py-12" id="service">
  <div class="max-w-3xl">
    <h2 class="text-3xl mb-5 sm:text-3xl md:text-4xl font-extrabold text-[#1a1a1a] md:w-1/3 leading-tight">
      Layanan Kami
    </h2>
  </div>
   <!-- banner -->
   <div class="relative rounded-[30px] overflow-hidden h-40 sm:h-48 md:h-56">
    <img alt="Tim Hanz Management sedang bekerja di kantor" class="w-full h-full object-cover" src="{{ asset('images/img-hero.webp') }}"/>
    <div class="absolute inset-0 bg-gradient-to-r from-black/40 to-black/10 rounded-lg">
    </div>
    <div class="absolute left-6 bottom-4 text-white max-w-lg text-[15px] sm:text-[22px] md:text-[24px] font-normal leading-snug">
     Kami menyediakan berbagai layanan
     <br/>
     Strategic Marketing
    </div>
   </div>
  <div class="grid grid-cols-2 md:grid-cols-2 lg:grid-cols-4 gap-6 mt-8">
    
    <!-- Card 1 -->
    <div class="bg-white shadow-md hover:bg-gray-200 rounded-[20px] pb-4">
      <div class="flex justify-center mb-4 bg-white rounded-[20px] overflow-hidden">
        <div class="flex h-[170px]  md:h-[200px] w-full items-center justify-center">
          <img src="{{ asset('images/hiburan3.webp') }}" class="w-full h-full object-cover" loading="lazy" alt="Hanz management | Agency spg & Event Organizer">
        </div>
      </div>
      <h2 class="font-bold text-lg sm:text-xl md:text-2xl text-center leading-snug text-[#1a1a1a]">
        Entertainment
      </h2>
    </div>

    <!-- Card 2 -->
    <div class="bg-white shadow-md hover:bg-gray-200 rounded-[20px] pb-4">
      <div class="flex justify-center mb-4 bg-white rounded-[20px] overflow-hidden">
        <div class="flex h-[170px] md:h-[200px] w-full items-center justify-center">
          <img src="{{ asset('images/service1.webp') }}" class="w-full h-full object-cover" loading="lazy" alt="Hanz management | Agency spg & Event Organizer">
        </div>
      </div>
      <h3 class="font-bold text-lg sm:text-xl md:text-2xl text-center leading-snug text-[#1a1a1a]">
        Promotion
      </h3>
    </div>

    <!-- Card 3 -->
    <div class="bg-white shadow-md hover:bg-gray-200 rounded-[20px] pb-4">
      <div class="flex justify-center mb-4 bg-white rounded-[20px] overflow-hidden">
        <div class="flex h-[170px] md:h-[200px] w-full items-center justify-center">
          <img src="{{ asset('images/img-hero(1).avif') }}" class="w-full h-full object-cover" loading="lazy" alt="Hanz management | Agency spg & Event Organizer">
        </div>
      </div>
      <h3 class="font-bold text-lg sm:text-xl md:text-2xl text-center leading-snug text-[#1a1a1a]">
        Event
      </h3>
    </div>

    <!-- Card 4 -->
    <div class="bg-white shadow-md hover:bg-gray-200 rounded-[20px] pb-4">
      <div class="flex justify-center mb-4 bg-white rounded-[20px] overflow-hidden">
        <div class="flex h-[170px] md:h-[200px] w-full items-center justify-center">
          <img src="{{ asset('images/service4.webp') }}" class="w-full h-full object-cover" loading="lazy" alt="Hanz management | Agency spg & Event Organizer">
        </div>
      </div>
      <h3 class="font-bold text-lg sm:text-xl md:text-2xl text-center leading-snug text-[#1a1a1a]">
         production & branding
      </h3>
    </div>
  </div>
  </section>

 <!-- ======= FAQ ======= -->
  <section class="max-w-7xl mx-auto px-6 py-6 md:py-12" id="faq" >
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
  <section id="portfolio" class="max-w-7xl mx-auto px-6 py-6 md:py-12">
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
    <div class="max-w-7xl mx-auto px-6 py-6 md:py-12 text-center overflow-hidden" id="client">
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