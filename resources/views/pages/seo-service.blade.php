@extends('layouts.app')

@section('title', $service['meta_title'])
@section('description', $service['meta_desc'])
@section('canonical', canonical_url($service['slug']))
@section('og_title', $service['meta_title'])
@section('og_description', $service['meta_desc'])
@section('og_image', asset($service['image']))

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
                    { "@type": "ListItem", "position": 2, "name": "Layanan", "item": "{{ route('services') }}" },
                    { "@type": "ListItem", "position": 3, "name": "{{ $service['h1'] }}", "item": "{{ url('/'.$service['slug']) }}" }
                ]
            },
            {
                "@type": "Service",
                "@id": "{{ canonical_url() }}#service",
                "name": "{{ $service['h1'] }}",
                "description": "{{ $service['meta_desc'] }}",
                "url": "{{ url('/'.$service['slug']) }}",
                "image": "{{ asset($service['image']) }}",
                "areaServed": "Indonesia",
                "provider": { "@id": "{{ url('/') }}#organization" }
            }
        ]
    }
    </script>
@endsection

@section('content')
    <main class="bg-transparent text-[#0B0E1E]">
        <div class="w-full px-6 pt-10 md:pt-16 pb-16 md:pb-20">

            <nav aria-label="Breadcrumb" class="text-sm text-gray-500 mb-10">
                <ol class="flex flex-wrap items-center gap-x-2 gap-y-1">
                    <li><a href="{{ url('/') }}" class="hover:underline">Beranda</a></li>
                    <li><span aria-hidden="true">/</span></li>
                    <li><a href="{{ route('services') }}" class="hover:underline">Layanan</a></li>
                    <li><span aria-hidden="true">/</span></li>
                    <li aria-current="page" class="text-[#4F46E5] font-medium">{{ $service['slug'] === 'manpower-event' ? 'Manpower Event' : ($service['slug'] === 'jasa-usher' ? 'Jasa Usher' : ($service['slug'] === 'jasa-talent' ? 'Jasa Talent' : ($service['slug'] === 'jasa-spb' ? 'Jasa SPB' : ($service['slug'] === 'jasa-spg' ? 'Jasa SPG' : ucfirst(str_replace('-', ' ', $service['slug'])))))) }}</li>
                </ol>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16 items-center mb-16">
                <div class="rounded-[30px] overflow-hidden shadow-lg">
                    <img src="{{ asset($service['image']) }}"
                        class="w-full h-72 sm:h-80 object-cover"
                        alt="{{ $service['h1'] }}"
                        loading="eager" fetchpriority="high" decoding="async" />
                </div>
                <div>
                    <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-[#1a1a1a] leading-tight mb-6">
                        {{ $service['h1'] }}
                    </h1>
                    <p class="text-base sm:text-lg text-gray-600 leading-relaxed mb-8">
                        {{ $service['intro'] }}
                    </p>
                    <a href="https://wa.me/6282110040066" target="_blank" rel="noopener"
                        class="inline-flex items-center gap-2 bg-[#4F46E5] text-white rounded-full px-7 py-3.5 text-sm sm:text-base font-semibold hover:bg-indigo-600 transition-colors">
                        {{ $service['cta'] }} via WhatsApp
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 lg:gap-14 mb-16">
                <div class="lg:col-span-2">
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-[#1a1a1a] leading-tight mb-6">
                        Tentang Layanan {{ ucfirst($service['slug']) }}
                    </h2>
                    <p class="text-gray-600 leading-relaxed mb-8">
                        {{ $service['body'] }}
                    </p>

                    <h2 class="text-2xl sm:text-3xl font-extrabold text-[#1a1a1a] leading-tight mb-8">
                        Apa yang Kami Sediakan
                    </h2>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-6">
                        @foreach($service['features'] as $feature)
                        <li class="flex items-start gap-3 bg-white shadow-sm rounded-2xl p-5">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-[#7ed6fb] text-[#0d8ddb] flex items-center justify-center text-sm font-bold">✓</span>
                            <span class="text-gray-700 leading-relaxed text-sm md:text-base">{{ $feature }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <aside class="bg-white shadow-md rounded-[20px] p-6 md:p-8 h-fit lg:sticky lg:top-24">
                    <h2 class="font-bold text-lg md:text-xl text-[#1a1a1a] mb-6">Layanan Terkait</h2>
                    <ul class="space-y-3">
                        @foreach($related as $rel)
                        <li>
                            <a href="{{ url('/'.$rel['slug']) }}"
                                class="flex items-center justify-between group rounded-xl p-3 hover:bg-gray-100 transition-colors">
                                <span class="font-medium text-gray-700 group-hover:text-[#4F46E5]">{{ $rel['h1'] }}</span>
                                <svg class="w-4 h-4 text-gray-400 group-hover:text-[#4F46E5]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <div class="mt-7 pt-6 border-t border-gray-100">
                        <h3 class="font-bold text-md text-[#1a1a1a] mb-4">Jasa SPG per Kota</h3>
                        <ul class="space-y-2">
                            @foreach($cities as $city)
                            <li>
                                <a href="{{ url('/'.$city['slug']) }}"
                                    class="text-sm text-gray-600 hover:text-[#4F46E5] transition-colors">
                                    Jasa SPG {{ $city['city'] }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </main>
@endsection
