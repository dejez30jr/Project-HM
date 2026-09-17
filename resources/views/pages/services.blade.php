@extends('layouts.app')

@section('title')
    {{ __('Layanan Kami') }} | Hanz Management
@endsection
@section('description', 'Layanan Hanz Management: entertainment, promosi (SPG & brand activation), event organizer, serta produksi & branding. Penyedia SDM dan jasa event terbaik untuk brand di seluruh Indonesia.')
@section('canonical', canonical_url('services'))

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
                    }
                ]
            },
            {
                "@type": "ItemList",
                "@id": "{{ canonical_url() }}#service-list",
                "name": "Layanan Hanz Management",
                "itemListElement": [
                    @foreach($services as $service)
                    {
                        "@type": "ListItem",
                        "position": {{ $loop->iteration }},
                        "item": {
                            "@type": "Service",
                            "name": "{{ $service['name'] }}",
                            "description": "{{ $service['short'] }}",
                            "url": "{{ route('services.show', $service['slug']) }}",
                            "provider": {
                                "@type": "Organization",
                                "name": "Hanz Management",
                                "url": "{{ url('/') }}"
                            }
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
                    <li><a href="{{ url('/') }}" class="hover:underline">{{ __('Beranda') }}</a></li>
                    <li><span aria-hidden="true">/</span></li>
                    <li aria-current="page" class="text-[#4F46E5] font-medium">{{ __('Layanan Kami') }}</li>
                </ol>
            </nav>

            <header class="max-w-2xl mb-14">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-[#1a1a1a] leading-tight mb-5">
                    {{ __('Layanan Kami') }}
                </h1>
                <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                    {{ __('Hanz Management menyediakan berbagai layanan strategic marketing untuk kebutuhan SDM dan event perusahaan Anda. Pilih layanan di bawah ini untuk melihat detail lengkapnya.') }}
                </p>
            </header>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 md:gap-8 lg:gap-10">
                @foreach($services as $service)
                <a href="{{ route('services.show', $service['slug']) }}"
                    class="group flex flex-col bg-white shadow-md rounded-[20px] overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="h-44 sm:h-48 md:h-52 w-full overflow-hidden">
                        <img src="{{ asset($service['image']) }}"
                            alt="Layanan {{ $service['name'] }} Hanz Management"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            loading="lazy" decoding="async" />
                    </div>
                    <div class="flex flex-col flex-1 p-6">
                        <h2 class="font-bold text-lg sm:text-xl text-center leading-snug text-[#1a1a1a]">
                            {{ __($service['name']) }}
                        </h2>
                        <p class="text-sm text-gray-500 text-center mt-3 leading-relaxed flex-1">
                            {{ __($service['short']) }}
                        </p>
                        <span class="mt-6 inline-flex items-center justify-center w-full bg-[#4F46E5] text-white text-sm font-semibold py-3 rounded-full group-hover:bg-indigo-600 transition-colors">
                            {{ __('Lihat Detail') }}
                        </span>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </main>
@endsection
