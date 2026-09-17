@extends('layouts.app')

@section('title')
    Layanan {{ $service['name'] }} | Hanz Management
@endsection
@section('description', $service['short'])
@section('canonical', canonical_url('services/' . $service['slug']))
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
                "@id": "{{ canonical_url() }}#service",
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
                    <li><a href="{{ url('/') }}" class="hover:underline">{{ __('Beranda') }}</a></li>
                    <li><span aria-hidden="true">/</span></li>
                    <li><a href="{{ route('services') }}" class="hover:underline">{{ __('Layanan Kami') }}</a></li>
                    <li><span aria-hidden="true">/</span></li>
                    <li aria-current="page" class="text-[#4F46E5] font-medium">{{ __($service['name']) }}</li>
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
                        {{ __($service['heading']) }}
                    </h1>
                    <p class="text-base sm:text-lg text-gray-600 leading-relaxed mb-10">
                        {{ __($service['desc']) }}
                    </p>
                    <a href="https://wa.me/6282110040066" target="_blank" rel="noopener"
                        class="inline-flex items-center w-[fit-content] gap-2 bg-[#4F46E5] text-white rounded-full px-7 py-3.5 text-sm sm:text-base font-semibold hover:bg-indigo-600 transition-colors">
                        {{ __('Pesan Layanan via WhatsApp') }}
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 md:gap-10 lg:gap-14 mb-20 md:mb-24">
                <div class="lg:col-span-2">
                    <h2 class="text-2xl sm:text-3xl font-extrabold text-[#1a1a1a] leading-tight mb-10">
                        {{ __('Apa yang Kami Tawarkan') }}
                    </h2>
                    <ul class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-6 lg:gap-8">
                        @foreach($service['features'] as $feature)
                        <li class="flex items-start gap-3 bg-white shadow-sm rounded-2xl p-5 md:p-6">
                            <span class="flex-shrink-0 w-8 h-8 rounded-full bg-[#7ed6fb] text-[#0d8ddb] flex items-center justify-center text-sm md:text-base font-bold">✓</span>
                            <span class="text-gray-700 leading-relaxed text-sm md:text-base">{{ __($feature) }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>

                <aside class="bg-white shadow-md rounded-[20px] p-6 md:p-8 h-fit lg:sticky lg:top-24">
                    <h2 class="font-bold text-lg md:text-xl text-[#1a1a1a] mb-6">{{ __('Layanan Lainnya') }}</h2>
                    <ul class="space-y-3">
                        @foreach($others as $other)
                        <li>
                            <a href="{{ route('services.show', $other['slug']) }}"
                                class="flex items-center justify-between group rounded-xl p-3 hover:bg-gray-100 transition-colors">
                                <span class="font-medium text-gray-700 group-hover:text-[#4F46E5]">{{ __($other['name']) }}</span>
                                <svg class="w-4 h-4 text-gray-400 group-hover:text-[#4F46E5]" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                    <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                    <a href="{{ route('services') }}"
                        class="mt-7 block text-center bg-[#4F46E5] text-white rounded-full py-3 text-sm font-semibold hover:bg-indigo-600 transition-colors">
                        {{ __('Semua Layanan') }}
                    </a>
                </aside>
            </div>

            <div>
                <h2 class="text-2xl sm:text-3xl font-extrabold text-[#1a1a1a] leading-tight mb-10">
                    {{ __('Portofolio') }} {{ $service['name'] }}
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 md:gap-6 lg:gap-8">
                    @foreach($service['portfolios'] as $portfolio)
                    <button type="button" onclick="openPortfolio({{ $loop->index }})"
                        class="group relative w-full text-left rounded-[20px] overflow-hidden shadow-md cursor-pointer"
                        style="cursor:zoom-in" aria-label="{{ __('Klik untuk memperbesar foto portofolio') }}">
                        <img src="{{ asset($portfolio) }}" loading="lazy" decoding="async"
                            class="w-full h-52 sm:h-56 md:h-64 object-cover group-hover:scale-105 transition-transform duration-500"
                            alt="Portofolio {{ $service['name'] }} Hanz Management" />
                        <span
                            class="absolute bottom-4 right-4 w-8 h-8 rounded-full bg-[#4F46E5] text-white flex items-center justify-center pointer-events-none">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24" aria-hidden="true"><circle cx="11" cy="11" r="8"/><line x1="21" y1="21" x2="16.65" y2="16.65"/><line x1="11" y1="8" x2="11" y2="14"/><line x1="8" y1="11" x2="14" y2="11"/></svg>
                        </span>
                    </button>
                    @endforeach
                </div>

                <div id="galleryModal" class="fixed inset-0 z-50 hidden items-center justify-center bg-black bg-opacity-50 p-4" role="dialog" aria-modal="true" aria-label="{{ __('Galeri foto portofolio') }}">
                    <button type="button" id="galleryClose"
                        class="absolute top-4 right-4 w-10 h-10 rounded-full bg-white/20 text-white flex items-center justify-center hover:scale-110 transition-transform"
                        aria-label="{{ __('Tutup') }}">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                    </button>
                    <div class="flex items-center justify-center gap-3 md:gap-6 w-full">
                        <button type="button" id="galleryPrev"
                            class="shrink-0 w-10 h-10 rounded-full bg-white/20 text-white flex items-center justify-center hover:scale-110 transition-transform"
                            aria-label="{{ __('Foto sebelumnya') }}">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="m15 18-6-6 6-6"/></svg>
                        </button>
                        <div class="rounded-2xl overflow-hidden shadow-lg bg-black flex items-center justify-center">
                            <img id="galleryImg" src="" alt="{{ __('Foto portofolio diperbesar') }}" style="max-height:85vh;max-width:100%;object-fit:contain;" />
                        </div>
                        <button type="button" id="galleryNext"
                            class="shrink-0 w-10 h-10 rounded-full bg-white/20 text-white flex items-center justify-center hover:scale-110 transition-transform"
                            aria-label="{{ __('Foto berikutnya') }}">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24"><path d="m9 5 7 7-7 7"/></svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

@push('scripts')
    <script>
        (function () {
            const images = [
                @foreach($service['portfolios'] as $portfolio)
                { src: "{{ asset($portfolio) }}", alt: "Portofolio {{ $service['name'] }} Hanz Management" },
                @endforeach
            ];
            const modal = document.getElementById('galleryModal');
            const img = document.getElementById('galleryImg');
            const prevBtn = document.getElementById('galleryPrev');
            const nextBtn = document.getElementById('galleryNext');
            const closeBtn = document.getElementById('galleryClose');
            let index = 0;

            function render() {
                if (!images.length) return;
                img.src = images[index].src;
                img.alt = images[index].alt;
            }

            function openModal(i) {
                if (!images.length) return;
                index = i;
                render();
                modal.classList.remove('hidden');
                modal.classList.add('flex');
                document.body.style.overflow = 'hidden';
            }

            function closeModal() {
                modal.classList.add('hidden');
                modal.classList.remove('flex');
                document.body.style.overflow = '';
            }

            function next() {
                index = (index + 1) % images.length;
                render();
            }

            function prev() {
                index = (index - 1 + images.length) % images.length;
                render();
            }

            window.openPortfolio = openModal;

            if (closeBtn) closeBtn.addEventListener('click', closeModal);
            if (prevBtn) prevBtn.addEventListener('click', prev);
            if (nextBtn) nextBtn.addEventListener('click', next);
            if (modal) {
                modal.addEventListener('click', function (e) {
                    if (e.target === modal) closeModal();
                });
            }
            document.addEventListener('keydown', function (e) {
                if (!modal || modal.classList.contains('hidden')) return;
                if (e.key === 'Escape') closeModal();
                if (e.key === 'ArrowRight') next();
                if (e.key === 'ArrowLeft') prev();
            });
        })();
    </script>
@endpush
