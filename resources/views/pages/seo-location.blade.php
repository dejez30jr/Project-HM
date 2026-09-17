@extends('layouts.app')

@section('title', $location['meta_title'])
@section('description', $location['meta_desc'])
@section('canonical', canonical_url($location['slug']))
@section('og_title', $location['meta_title'])
@section('og_description', $location['meta_desc'])
@section('og_image', asset('images/service1.webp'))

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "{{ canonical_url() }}#breadcrumb",
                "itemListElement": [
                    { "@type": "ListItem", "position": 1, "name": "Beranda", "item": "{{ url('/') }}" },
                    { "@type": "ListItem", "position": 2, "name": "Jasa SPG", "item": "{{ url('/'.'jasa-spg') }}" },
                    { "@type": "ListItem", "position": 3, "name": "Jasa SPG {{ $location['city'] }}", "item": "{{ url('/'.$location['slug']) }}" }
                ]
            },
            {
                "@type": "Service",
                "@id": "{{ canonical_url() }}#service",
                "name": "Jasa SPG {{ $location['city'] }}",
                "description": "{{ $location['meta_desc'] }}",
                "url": "{{ url('/'.$location['slug']) }}",
                "areaServed": {
                    "@type": "City",
                    "name": "{{ $location['city'] }}"
                },
                "provider": { "@id": "{{ url('/') }}#organization" }
            }
        ]
    }
    </script>
@endsection

@section('content')
    <main class="bg-transparent text-[#0B0E1E]">
        <div class="max-w-7xl mx-auto w-full px-6 pt-10 md:pt-16 pb-16 md:pb-20">

            <nav aria-label="Breadcrumb" class="text-sm text-gray-500 mb-10">
                <ol class="flex flex-wrap items-center gap-x-2 gap-y-1">
                    <li><a href="{{ url('/') }}" class="hover:underline">Beranda</a></li>
                    <li><span aria-hidden="true">/</span></li>
                    <li><a href="{{ url('/'.'jasa-spg') }}" class="hover:underline">Jasa SPG</a></li>
                    <li><span aria-hidden="true">/</span></li>
                    <li aria-current="page" class="text-[#4F46E5] font-medium">Jasa SPG {{ $location['city'] }}</li>
                </ol>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center mb-16">
                <div class="rounded-[30px] overflow-hidden shadow-lg">
                    <img src="{{ asset('images/service1.webp') }}"
                        class="w-full h-72 sm:h-80 object-cover"
                        alt="Jasa SPG {{ $location['city'] }} Hanz Management"
                        loading="eager" fetchpriority="high" decoding="async" />
                </div>
                <div>
                    <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-[#1a1a1a] leading-tight mb-6">
                        Jasa SPG {{ $location['city'] }}
                    </h1>
                    <p class="text-base sm:text-lg text-gray-600 leading-relaxed mb-8">
                        {{ $location['intro'] }}
                    </p>
                    <a href="https://wa.me/6282110040066" target="_blank" rel="noopener"
                        class="inline-flex items-center gap-2 bg-[#4F46E5] text-white rounded-full px-7 py-3.5 text-sm sm:text-base font-semibold hover:bg-indigo-600 transition-colors">
                        Pesan SPG {{ $location['city'] }} via WhatsApp
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 lg:gap-14 mb-16">
                <div class="lg:col-span-2">
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-[#1a1a1a] leading-tight mb-6">
                        Layanan SPG di {{ $location['city'] }}
                    </h2>
                    <p class="text-gray-600 leading-relaxed mb-8">
                        {{ $location['intro'] }} Dengan resource team yang tersebar dan manajemen yang cepat tanggap, kami memastikan talent SPG hadir tepat waktu dan siap bertugas di lokasi Anda di {{ $location['city'] }}.
                    </p>

                    <h2 class="text-2xl sm:text-3xl font-extrabold text-[#1a1a1a] leading-tight mb-6">
                        Area Layanan di {{ $location['city'] }}
                    </h2>
                    <p class="text-gray-600 leading-relaxed mb-8">
                        {{ $location['area'] }}
                    </p>

                    <h2 class="text-2xl sm:text-3xl font-extrabold text-[#1a1a1a] leading-tight mb-6">
                        Jenis Kegiatan Promosi yang Kami Dukung
                    </h2>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <li class="flex items-start gap-3 bg-white shadow-sm rounded-2xl p-5">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-[#7ed6fb] text-[#0d8ddb] flex items-center justify-center text-sm font-bold">✓</span>
                            <span class="text-gray-700 leading-relaxed text-sm">Booth promotion di mall dan pusat perbelanjaan</span>
                        </li>
                        <li class="flex items-start gap-3 bg-white shadow-sm rounded-2xl p-5">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-[#7ed6fb] text-[#0d8ddb] flex items-center justify-center text-sm font-bold">✓</span>
                            <span class="text-gray-700 leading-relaxed text-sm">Roadshow dan sampling produk</span>
                        </li>
                        <li class="flex items-start gap-3 bg-white shadow-sm rounded-2xl p-5">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-[#7ed6fb] text-[#0d8ddb] flex items-center justify-center text-sm font-bold">✓</span>
                            <span class="text-gray-700 leading-relaxed text-sm">Event launching dan grand opening</span>
                        </li>
                        <li class="flex items-start gap-3 bg-white shadow-sm rounded-2xl p-5">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-[#7ed6fb] text-[#0d8ddb] flex items-center justify-center text-sm font-bold">✓</span>
                            <span class="text-gray-700 leading-relaxed text-sm">Direct selling di retail dan toko</span>
                        </li>
                    </ul>
                </div>

                <aside class="bg-white shadow-md rounded-[20px] p-6 md:p-8 h-fit lg:sticky lg:top-24">
                    <h2 class="font-bold text-lg md:text-xl text-[#1a1a1a] mb-4">Jasa SPG Lainnya</h2>
                    <p class="text-sm text-gray-500 mb-4">Kami juga melayani jasa SPG di kota-kota besar lainnya di Indonesia.</p>
                    <ul class="space-y-2">
                        @foreach($cities as $other)
                            @if($other['slug'] !== $location['slug'])
                            <li>
                                <a href="{{ url('/'.$other['slug']) }}"
                                    class="text-sm text-gray-600 hover:text-[#4F46E5] transition-colors">
                                    Jasa SPG {{ $other['city'] }}
                                </a>
                            </li>
                            @endif
                        @endforeach
                    </ul>
                    <div class="mt-6 pt-6 border-t border-gray-100">
                        <h3 class="font-bold text-md text-[#1a1a1a] mb-4">Layanan SPG Lainnya</h3>
                        <ul class="space-y-2">
                            <li><a href="{{ url('/'.'jasa-spb') }}" class="text-sm text-gray-600 hover:text-[#4F46E5] transition-colors">Jasa SPB</a></li>
                            <li><a href="{{ url('/'.'jasa-usher') }}" class="text-sm text-gray-600 hover:text-[#4F46E5] transition-colors">Jasa Usher</a></li>
                            <li><a href="{{ url('/'.'manpower-event') }}" class="text-sm text-gray-600 hover:text-[#4F46E5] transition-colors">Manpower Event</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </main>
@endsection
