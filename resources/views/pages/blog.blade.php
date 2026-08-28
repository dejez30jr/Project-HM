@extends('layouts.app')

@section('title', 'Blog & Artikel | Hanz Management')
@section('description', 'Baca artikel dan panduan tentang jasa SPG, manpower event, brand activation, dan event organizer dari Hanz Management untuk membantu promosi brand Anda.')
@section('canonical', route('blog'))

@section('schema')
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@graph": [
            {
                "@type": "BreadcrumbList",
                "@id": "{{ url()->current() }}#breadcrumb",
                "itemListElement": [
                    { "@type": "ListItem", "position": 1, "name": "Beranda", "item": "{{ url('/') }}" },
                    { "@type": "ListItem", "position": 2, "name": "Blog", "item": "{{ route('blog') }}" }
                ]
            },
            {
                "@type": "Blog",
                "@id": "{{ url()->current() }}#blog",
                "name": "Blog Hanz Management",
                "url": "{{ route('blog') }}",
                "blogPost": [
                    @foreach($posts as $post)
                    {
                        "@type": "BlogPosting",
                        "headline": "{{ $post['title'] }}",
                        "url": "{{ route('blog.show', $post['slug']) }}",
                        "datePublished": "{{ date('Y-m-d') }}"
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
                    <li aria-current="page" class="text-[#4F46E5] font-medium">Blog</li>
                </ol>
            </nav>

            <header class="max-w-3xl mb-14">
                <h1 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-[#1a1a1a] leading-tight mb-5">
                    Blog & Artikel
                </h1>
                <p class="text-base sm:text-lg text-gray-600 leading-relaxed">
                    Panduan dan wawasan seputar jasa SPG, manpower event, brand activation, dan event organizer untuk membantu Anda memaksimalkan promosi brand.
                </p>
            </header>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
                @foreach($posts as $post)
                <a href="{{ route('blog.show', $post['slug']) }}"
                    class="group flex flex-col bg-white shadow-md rounded-[20px] overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300">
                    <div class="h-40 w-full bg-[#4F46E5] flex items-center justify-center">
                        <span class="text-white text-4xl font-extrabold">{{ strtoupper(substr($post['title'], 0, 1)) }}</span>
                    </div>
                    <div class="flex flex-col flex-1 p-6">
                        <h2 class="font-bold text-lg text-[#1a1a1a] leading-snug group-hover:text-[#4F46E5] transition-colors">
                            {{ $post['title'] }}
                        </h2>
                        <p class="text-sm text-gray-500 mt-3 leading-relaxed flex-1">
                            {{ $post['excerpt'] }}
                        </p>
                        <span class="mt-5 inline-flex items-center gap-1 text-sm font-semibold text-[#4F46E5]">
                            Baca Selengkapnya
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" aria-hidden="true">
                                <path d="M9 5l7 7-7 7" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </main>
@endsection
