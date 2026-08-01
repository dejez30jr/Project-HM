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
@section('canonical', $activeCategory === 'all' ? route('portfolio') : route('portfolio', $activeCategory))

@push('styles')
    <link rel="stylesheet" href="{{ asset('css/Portfolio.css') }}">
@endpush

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
                "@id": "{{ url()->current() }}#portfolio-list",
                "name": "Portofolio {{ $label }} Hanz Management",
                "itemListElement": [
                    @foreach($images as $image)
                    {
                        "@type": "ListItem",
                        "position": {{ $loop->iteration }},
                        "item": {
                            "@type": "ImageObject",
                            "contentUrl": "{{ asset($image['path']) }}",
                            "name": "Foto portofolio {{ $label }} Hanz Management"
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
    <div class="portfolio-page max-w-7xl mx-auto px-6 py-6 md:py-12">
        <h1>
            Portofolio {{ $label }} Hanz Management
        </h1>

        <div class="filters">
            <a href="{{ route('portfolio') }}"
                class="px-6 py-2 {{ $activeCategory === 'all' ? 'bg-blue-600 text-white' : 'bg-gray-200' }} rounded-lg hover:bg-blue-600 hover:text-white transition-colors">
                All
            </a>
            <a href="{{ route('portfolio', 'entertaiment') }}"
                class="px-6 py-2 {{ $activeCategory === 'entertaiment' ? 'bg-blue-600 text-white' : 'bg-gray-200' }} rounded-lg hover:bg-blue-600 hover:text-white transition-colors">
                Entertainment
            </a>
            <a href="{{ route('portfolio', 'promotion') }}"
                class="px-6 py-2 {{ $activeCategory === 'promotion' ? 'bg-blue-600 text-white' : 'bg-gray-200' }} rounded-lg hover:bg-blue-600 hover:text-white transition-colors">
                Promotion
            </a>
            <a href="{{ route('portfolio', 'event') }}"
                class="px-6 py-2 {{ $activeCategory === 'event' ? 'bg-blue-600 text-white' : 'bg-gray-200' }} rounded-lg hover:bg-blue-600 hover:text-white transition-colors">
                Event
            </a>
            <a href="{{ route('portfolio', 'production') }}"
                class="px-6 py-2 {{ $activeCategory === 'production' ? 'bg-blue-600 text-white' : 'bg-gray-200' }} rounded-lg hover:bg-blue-600 hover:text-white transition-colors">
                Production
            </a>
        </div>

        <div class="portfolio">
            @foreach($images as $image)
            <div class="portfolio-item">
                <img src="{{ asset($image['path']) }}" alt="Foto portofolio {{ $label }} Hanz Management" class="w-full h-64 object-cover" loading="lazy" decoding="async">
            </div>
            @endforeach
        </div>
    </div>
@endsection
