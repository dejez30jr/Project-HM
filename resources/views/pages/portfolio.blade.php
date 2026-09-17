@extends('layouts.app')

@php
    $labels = [
        'all' => 'Portofolio',
        'entertaiment' => 'Entertainment',
        'promotion' => 'Promotion',
        'event' => 'Event',
        'production' => 'Production',
    ];

    $label = $labels[$activeCategory] ?? 'Portofolio';

    $meta = [
        'all' => [
            'title' => 'Portofolio Proyek | Hanz Management',
            'description' => 'Lihat portofolio proyek Hanz Management: SPG, SPB, event organizer, dekorasi dan produksi event untuk berbagai brand di Indonesia.',
        ],
        'entertaiment' => [
            'title' => 'Portofolio Entertainment | Hanz Management',
            'description' => 'Portofolio hiburan dan entertainment Hanz Management: host, MC, talent panggung dan hiburan acara untuk brand ternama di Indonesia.',
        ],
        'promotion' => [
            'title' => 'Portofolio Promosi & Brand Activation | Hanz Management',
            'description' => 'Portofolio kegiatan promosi dan brand activation Hanz Management: SPG, SPB, roadshow dan booth promotion untuk berbagai brand.',
        ],
        'event' => [
            'title' => 'Portofolio Event & Dekorasi | Hanz Management',
            'description' => 'Portofolio event dan dekorasi Hanz Management: event organizer, dekorasi panggung dan produksi acara di Indonesia.',
        ],
        'production' => [
            'title' => 'Portofolio Produksi & Branding | Hanz Management',
            'description' => 'Portofolio produksi dan branding Hanz Management: produksi booth, brand activation dan kebutuhan produksi event.',
        ],
    ];

    $meta = $meta[$activeCategory] ?? $meta['all'];
@endphp

@section('title', $meta['title'])
@section('description', $meta['description'])
@section('canonical', canonical_url($activeCategory === 'all' ? 'portfolio' : 'portfolio/' . $activeCategory))

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "{{ canonical_url() }}#breadcrumb",
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
                        "name": "Portofolio",
                        "item": "{{ route('portfolio') }}"
                    }@if($activeCategory !== 'all'),
                    {
                        "@type": "ListItem",
                        "position": 3,
                        "name": "{{ $label }}",
                        "item": "{{ route('portfolio', $activeCategory) }}"
                    }@endif
                ]
            },
            {
                "@type": "ItemList",
                "@id": "{{ canonical_url() }}#portfolio-list",
                "name": "Portofolio {{ $label }} Hanz Management",
                "itemListElement": [
                    @foreach($images as $image)
                    {
                        "@type": "ListItem",
                        "position": {{ $loop->iteration }},
                        "item": {
                            "@type": "ImageObject",
                            "contentUrl": "{{ asset($image['path']) }}",
                            "name": "Foto portofolio {{ $labels[$image['category']] ?? 'Hanz Management' }} Hanz Management"
                        }
                    }@if(!$loop->last),@endif
                    @endforeach
                ]
            }
        ]
    }
    </script>
@endsection

@section('content')
    <main class="bg-transparent text-[#0B0E1E]">
        <div class="w-full pt-10 md:pt-16 pb-16 md:pb-20">
            <nav aria-label="Breadcrumb" class="text-sm text-gray-500 mb-10">
                <ol class="flex flex-wrap items-center gap-x-2 gap-y-1">
                    <li><a href="{{ url('/') }}" class="hover:underline">Beranda</a></li>
                    <li><span aria-hidden="true">/</span></li>
                    @if($activeCategory === 'all')
                        <li aria-current="page" class="text-[#4F46E5] font-medium">Portofolio</li>
                    @else
                        <li><a href="{{ route('portfolio') }}" class="hover:underline">Portofolio</a></li>
                        <li><span aria-hidden="true">/</span></li>
                        <li aria-current="page" class="text-[#4F46E5] font-medium">{{ $label }}</li>
                    @endif
                </ol>
            </nav>

            <header class="max-w-2xl mb-10">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-[#1a1a1a] leading-tight mb-5">
                    Portofolio {{ $label }}
                </h1>
                <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                    {{ $meta['description'] }}
                </p>
            </header>

            <div class="flex flex-wrap gap-3 mb-12" role="group" aria-label="Filter kategori portofolio">
                <a href="{{ route('portfolio') }}"
                    class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-semibold rounded-full border transition-all duration-300 {{ $activeCategory === 'all' ? 'bg-[#4F46E5] border-[#4F46E5] text-white shadow-lg shadow-indigo-200' : 'bg-white border-gray-200 text-gray-600 hover:border-[#4F46E5] hover:text-[#4F46E5]' }}">
                    Semua
                    <span class="text-xs px-2 py-0.5 rounded-full {{ $activeCategory === 'all' ? 'bg-white/20 text-white' : 'bg-gray-100 text-gray-500' }}">{{ $totalImages }}</span>
                </a>
                <a href="{{ route('portfolio', 'entertaiment') }}"
                    class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-semibold rounded-full border transition-all duration-300 {{ $activeCategory === 'entertaiment' ? 'bg-[#4F46E5] border-[#4F46E5] text-white shadow-lg shadow-indigo-200' : 'bg-white border-gray-200 text-gray-600 hover:border-[#4F46E5] hover:text-[#4F46E5]' }}">
                    Entertainment
                    <span class="text-xs px-2 py-0.5 rounded-full {{ $activeCategory === 'entertaiment' ? 'bg-white/20 text-white' : 'bg-gray-100 text-gray-500' }}">{{ $categoryCounts->get('entertaiment', 0) }}</span>
                </a>
                <a href="{{ route('portfolio', 'promotion') }}"
                    class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-semibold rounded-full border transition-all duration-300 {{ $activeCategory === 'promotion' ? 'bg-[#4F46E5] border-[#4F46E5] text-white shadow-lg shadow-indigo-200' : 'bg-white border-gray-200 text-gray-600 hover:border-[#4F46E5] hover:text-[#4F46E5]' }}">
                    Promotion
                    <span class="text-xs px-2 py-0.5 rounded-full {{ $activeCategory === 'promotion' ? 'bg-white/20 text-white' : 'bg-gray-100 text-gray-500' }}">{{ $categoryCounts->get('promotion', 0) }}</span>
                </a>
                <a href="{{ route('portfolio', 'event') }}"
                    class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-semibold rounded-full border transition-all duration-300 {{ $activeCategory === 'event' ? 'bg-[#4F46E5] border-[#4F46E5] text-white shadow-lg shadow-indigo-200' : 'bg-white border-gray-200 text-gray-600 hover:border-[#4F46E5] hover:text-[#4F46E5]' }}">
                    Event
                    <span class="text-xs px-2 py-0.5 rounded-full {{ $activeCategory === 'event' ? 'bg-white/20 text-white' : 'bg-gray-100 text-gray-500' }}">{{ $categoryCounts->get('event', 0) }}</span>
                </a>
                <a href="{{ route('portfolio', 'production') }}"
                    class="inline-flex items-center gap-2 px-5 py-2.5 text-sm font-semibold rounded-full border transition-all duration-300 {{ $activeCategory === 'production' ? 'bg-[#4F46E5] border-[#4F46E5] text-white shadow-lg shadow-indigo-200' : 'bg-white border-gray-200 text-gray-600 hover:border-[#4F46E5] hover:text-[#4F46E5]' }}">
                    Production
                    <span class="text-xs px-2 py-0.5 rounded-full {{ $activeCategory === 'production' ? 'bg-white/20 text-white' : 'bg-gray-100 text-gray-500' }}">{{ $categoryCounts->get('production', 0) }}</span>
                </a>
            </div>

            @if($images->isEmpty())
                <div class="bg-white shadow-md rounded-[20px] p-12 text-center">
                    <p class="text-gray-500">Belum ada proyek pada kategori ini.</p>
                    <a href="{{ route('portfolio') }}" class="mt-4 inline-flex items-center justify-center bg-[#4F46E5] text-white text-sm font-semibold px-6 py-3 rounded-full hover:bg-indigo-600 transition-colors">
                        Lihat Semua Portofolio
                    </a>
                </div>
            @else
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                    @foreach($images as $image)
                    <article class="group bg-white shadow-md rounded-[20px] overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                        <div class="aspect-[4/3] w-full overflow-hidden bg-gray-100">
                            <img src="{{ asset($image['path']) }}"
                                alt="Foto portofolio {{ $labels[$image['category']] ?? 'Hanz Management' }} Hanz Management"
                                class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                                loading="lazy" decoding="async" />
                        </div>
                        <div class="flex items-center justify-between px-5 py-4">
                            <span class="inline-flex items-center gap-2 text-xs font-bold uppercase tracking-wider text-[#4F46E5]">
                                <span class="w-1.5 h-1.5 rounded-full bg-[#4F46E5]"></span>
                                {{ $labels[$image['category']] ?? 'Proyek' }}
                            </span>
                            <span class="text-xs font-semibold text-gray-400">{{ str_pad($loop->iteration, 2, '0', STR_PAD_LEFT) }}</span>
                        </div>
                    </article>
                    @endforeach
                </div>
            @endif
        </div>
    </main>
@endsection