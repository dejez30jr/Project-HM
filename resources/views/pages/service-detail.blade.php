@extends('layouts.app')

@section('title')
    Layanan {{ $service['name'] }} | Hanz Management
@endsection
@section('description', $service['short'])
@section('canonical', route('services.show', $service['slug']))
@section('og_title')
    Layanan {{ $service['name'] }} | Hanz Management
@endsection
@section('og_description', $service['short'])
@section('og_image', asset($service['image']))

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "{{ url()->current() }}#breadcrumb",
                "itemListElement": [
                    {
                        "@type": "ListItem",
                        "position": 1,
                        "name": "Beranda",
                        "item": "{{ url('/') }}"
                    },
                    {
                        "@type": "ListItem",
                        "position": 2,
                        "name": "Layanan Kami",
                        "item": "{{ route('services') }}"
                    },
                    {
                        "@type": "ListItem",
                        "position": 3,
                        "name": "{{ $service['name'] }}",
                        "item": "{{ route('services.show', $service['slug']) }}"
                    }
                ]
            },
            {
                "@type": "Service",
                "@id": "{{ url()->current() }}#service",
                "name": "Layanan {{ $service['name'] }}",
                "alternateName": "{{ $service['short'] }}",
                "description": "{{ $service['desc'] }}",
                "url": "{{ route('services.show', $service['slug']) }}",
                "image": "{{ asset($service['image']) }}",
                "areaServed": "Indonesia",
                "provider": {
                    "@id": "{{ url('/') }}#organization"
                }
            }
        ]
    }
    </script>
@endsection

@section('content')
    <main class="bg-transparent text-[#0B0E1E]">
        <div class="w-full pt-10 md:pt-16 pb-16 md:pb-20">
            <nav aria-label="Breadcrumb" class="text-sm text-gray-500 mb-12">
                <ol class="flex flex-wrap items-center gap-x-2 gap-y-1">
                    <li><a href="{{ url('/') }}" class="hover:underline">Beranda</a></li>
                    <li><span aria-hidden="true">/</span></li>
                    <li><a href="{{ route('services') }}" class="hover:underline">Layanan Kami</a></li>
                    <li><span aria-hidden="true">/</span></li>
                    <li aria-current="page" class="text-[#4F46E5] font-medium">{{ $service['name'] }}</li>
                </ol>
            </nav>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 md:gap-12 xl:gap-20 items-center mb-20 md:mb-24">
                <div class="rounded-[30px] overflow-hidden shadow-lg">
                    <img src="{{ asset($service['image']) }}"
                        class="w-full h-72 sm:h-80 md:h-[420px] object-cover"
                        alt="Layanan {{ $service['name'] }} Hanz Management"
                        loading="eager" fetchpriority="high" decoding="async" />
                </div>
                <div>
                    <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-[#1a1a1a] leading-tight mb-6">
                        {{ $service['heading'] }}
                    </h1>
                    <p class="text-base sm:text-lg text-gray-600 leading-relaxed mb-10">
                        {{ $service['desc'] }}
                    </p>
                    <a href="https://wa.me/6282110040066" target="_blank" rel="noopener"
                        class="inline-flex items-center w-[fit-content] gap-2 bg-[#4F46E5] text-white rounded-full px-7 py-3.5 text-sm sm:text-base font-semibold hover:bg-indigo-600 transition-colors">
                        Pesan Layanan via WhatsApp
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 md:gap-10 lg:gap-14 mb-20 md:mb-24">
                <div class="lg:col-span-2">
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-[#1a1a1a] leading-tight mb-10">
                        Apa yang Kami Tawarkan
                    </h2>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-6 lg:gap-8">
                        @foreach($service['features'] as $feature)
                        <li class="flex items-start gap-3 bg-white shadow-sm rounded-2xl p-5 md:p-6">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-[#7ed6fb] text-[#0d8ddb] flex items-center justify-center text-sm md:text-base font-bold">✓</span>
                            <span class="text-gray-700 leading-relaxed text-sm md:text-base">{{ $feature }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <aside class="bg-white shadow-md rounded-[20px] p-6 md:p-8 h-fit lg:sticky lg:top-24">
                    <h2 class="font-bold text-lg md:text-xl text-[#1a1a1a] mb-6">Layanan Lainnya</h2>
                    <ul class="space-y-3">
                        @foreach($others as $other)
                        <li>
                            <a href="{{ route('services.show', $other['slug']) }}"
                                class="flex items-center justify-between group rounded-xl p-3 hover:bg-gray-100 transition-colors">
                                <span class="font-medium text-gray-700 group-hover:text-[#4F46E5]">{{ $other['name'] }}</span>
                                <svg class="w-4 h-4 text-gray-400 group-hover:text-[#4F46E5]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <a href="{{ route('services') }}"
                        class="mt-7 block text-center bg-[#4F46E5] text-white rounded-full py-3 text-sm font-semibold hover:bg-indigo-600 transition-colors">
                        Semua Layanan
                    </a>
                </aside>
            </div>

            <div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-[#1a1a1a] leading-tight mb-10">
                    Portofolio {{ $service['name'] }}
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-6 lg:gap-8">
                    @foreach($service['portfolios'] as $portfolio)
                    <div class="rounded-[20px] overflow-hidden shadow-md">
                        <img src="{{ asset($portfolio) }}" loading="lazy" decoding="async"
                            class="w-full h-52 sm:h-56 md:h-64 object-cover hover:scale-105 transition-transform duration-500"
                            alt="Portofolio {{ $service['name'] }} Hanz Management" />
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
