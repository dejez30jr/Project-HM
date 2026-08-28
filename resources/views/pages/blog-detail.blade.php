@extends('layouts.app')

@section('title', $post['title'] . ' | Hanz Management')
@section('description', $post['meta_desc'])
@section('canonical', route('blog.show', $post['slug']))
@section('og_title', $post['title'] . ' | Hanz Management')
@section('og_description', $post['meta_desc'])
@section('og_image', asset('images/img-hero.webp'))

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
                    { "@type": "ListItem", "position": 2, "name": "Blog", "item": "{{ route('blog') }}" },
                    { "@type": "ListItem", "position": 3, "name": "{{ $post['title'] }}", "item": "{{ route('blog.show', $post['slug']) }}" }
                ]
            },
            {
                "@type": "BlogPosting",
                "@id": "{{ url()->current() }}#post",
                "headline": "{{ $post['title'] }}",
                "description": "{{ $post['meta_desc'] }}",
                "datePublished": "{{ date('Y-m-d') }}",
                "dateModified": "{{ date('Y-m-d') }}",
                "mainEntityOfPage": "{{ route('blog.show', $post['slug']) }}",
                "publisher": { "@id": "{{ url('/') }}#organization" },
                "author": { "@type": "Organization", "name": "Hanz Management" }
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
                    <li><a href="{{ route('blog') }}" class="hover:underline">Blog</a></li>
                    <li><span aria-hidden="true">/</span></li>
                    <li aria-current="page" class="text-[#4F46E5] font-medium text-xs sm:text-sm truncate">{{ $post['title'] }}</li>
                </ol>
            </nav>

            <article class="mb-8">
                <h1 class="text-2xl sm:text-3xl md:text-4xl font-extrabold text-[#1a1a1a] leading-tight mb-6">
                    {{ $post['title'] }}
                </h1>
                <p class="text-sm text-gray-500 mb-10">
                    Dipublikasikan oleh Hanz Management
                </p>

                <div class="prose max-w-none space-y-6">
                    @foreach($post['body'] as $paragraph)
                    <p class="text-gray-700 leading-relaxed">
                        {{ $paragraph }}
                    </p>
                    @endforeach
                </div>

                <div class="mt-12 bg-[#4F46E5] text-white rounded-[20px] p-6 md:p-8">
                    <h2 class="text-xl md:text-2xl font-bold mb-3">Butuh Bantuan Jasa SPG atau Manpower Event?</h2>
                    <p class="text-white/90 leading-relaxed mb-6">
                        Hubungi Hanz Management untuk kebutuhan SPG, manpower event, dan jasa event organizer di seluruh Indonesia. Tim kami siap membantu.
                    </p>
                    <a href="https://wa.me/6282110040066" target="_blank" rel="noopener"
                        class="inline-flex items-center gap-2 bg-white text-[#4F46E5] rounded-full px-6 py-3 text-sm font-semibold hover:bg-indigo-50 transition-colors">
                        Konsultasi via WhatsApp
                    </a>
                </div>
            </article>

            @if($related->isNotEmpty())
            <div class="mt-16">
                <h2 class="text-2xl sm:text-3xl font-extrabold text-[#1a1a1a] leading-tight mb-8">
                    Artikel Lainnya
                </h2>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-6">
                    @foreach($related as $rel)
                    <a href="{{ route('blog.show', $rel['slug']) }}"
                        class="group bg-white shadow-md rounded-[20px] overflow-hidden hover:shadow-xl hover:-translate-y-1 transition-all duration-300 p-5">
                        <div class="h-28 w-full bg-[#7ed6fb]/30 rounded-xl flex items-center justify-center mb-4">
                            <span class="text-[#0d8ddb] text-3xl font-extrabold">{{ strtoupper(substr($rel['title'], 0, 1)) }}</span>
                        </div>
                        <h3 class="font-bold text-sm text-[#1a1a1a] leading-snug group-hover:text-[#4F46E5] transition-colors">
                            {{ $rel['title'] }}
                        </h3>
                    </a>
                    @endforeach
                </div>
            </div>
            @endif
        </div>
    </main>
@endsection
