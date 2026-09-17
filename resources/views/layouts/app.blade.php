<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#4F46E5">

    <title>@yield('title', 'Hanz Management | Jasa SPG, Event Organizer & Manpower Terbaik di Indonesia')</title>
    <meta name="description" content="@yield('description', 'Hanz Management adalah agency SPG & penyedia manpower di Bogor, Indonesia. Jasa SPG, SPB, event organizer, dekorasi, produksi event dan layanan promosi untuk seluruh Indonesia.')">
    <meta name="keywords" content="jasa SPG, agency SPG, manpower, event organizer Bogor, jasa event organizer, dekorasi event, penyedia SDM, SPG Bogor, Hanz Management">
    <meta name="author" content="Hanz Management">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="@yield('canonical', canonical_url())">

    <meta name="geo.region" content="ID-JB">
    <meta name="geo.placename" content="Bogor">
    <meta name="geo.position" content="-6.595038;106.816666">
    <meta name="ICBM" content="-6.595038, 106.816666">

    <!-- Open Graph -->
    <meta property="og:site_name" content="Hanz Management">
    <meta property="og:locale" content="id_ID">
    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('og_title', 'Hanz Management | Jasa SPG, Event Organizer & Manpower Terbaik di Indonesia')">
    <meta property="og:description" content="@yield('og_description', 'Agency SPG & penyedia manpower di Bogor, Indonesia. Jasa SPG, event organizer, dekorasi & produksi event untuk seluruh Indonesia.')">
    <meta property="og:url" content="@yield('canonical', canonical_url())">
    <meta property="og:image" content="@yield('og_image', asset('images/img-hero.webp'))">
    <meta property="og:image:alt" content="Hanz Management | Agency SPG & Event Organizer">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="@yield('og_title', 'Hanz Management | Jasa SPG, Event Organizer & Manpower Terbaik di Indonesia')">
    <meta name="twitter:description" content="@yield('og_description', 'Agency SPG & penyedia manpower di Bogor, Indonesia. Jasa SPG, event organizer, dekorasi & produksi event untuk seluruh Indonesia.')">
    <meta name="twitter:image" content="@yield('og_image', asset('images/img-hero.webp'))">

    <!-- Structured data -->
    @yield('schema')

    <link rel="icon" href="{{ asset('images/HM.avif') }}" type="image/avif">

    <!-- Preconnect untuk performa -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Tailwind via Vite (dev hot reload / build) -->
    @vite(['resources/css/tailwind.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/Beranda.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="preload" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet"></noscript>

    @stack('styles')
</head>
<body>
    <!-- navbar -->
    <nav>
    <header class="w-full mx-auto px-6 lg:px-12 py-4 flex items-center justify-between sticky top-0 bg-white z-50">
    <div class="flex items-center space-x-2">
        <div class="w-[150px]">
        <img src="{{ asset('images/hm-logo.webp') }}" alt="Logo hanzmanagement" loading="eager" fetchpriority="high" class="w-full">
        </div>
    </div>
        <!-- Hamburger button for mobile -->
        <button aria-expanded="false" aria-label="Toggle menu" class="lg:hidden relative w-8 h-8 focus:outline-none"
            id="menu-btn">
            <span class="block absolute h-0.5 w-6 bg-black rounded left-1 top-2 transition-transform duration-300">
            </span>
            <span class="block absolute h-0.5 w-4 bg-black rounded right-1 top-4.5 transition-opacity duration-300">
            </span>
            <span class="block absolute h-0.5 w-6 bg-black rounded left-1 top-6 transition-transform duration-300">
            </span>
        </button>
        <nav class="hidden lg:flex items-center space-x-6 text-md font-normal" id="menu">
            <a class="hover:underline whitespace-nowrap" href="/">
                {{ __('Home') }}
            </a>
            <a class="hover:underline whitespace-nowrap" href="/#about">
                {{ __('Tentang Kami') }}
            </a>
            <div class="relative group">
                <button aria-expanded="false" aria-haspopup="true"
                    class="flex items-center space-x-1 hover:underline focus:outline-none whitespace-nowrap">
                    <span>
                        <a href="{{ route('services') }}">
                            {{ __('Layanan') }}
                        </a>
                    </span>
                </button>
            </div>
            <a class="hover:underline whitespace-nowrap" href="/#portfolio">
                {{ __('Project Kami') }}
            </a>
            <a class="hover:underline whitespace-nowrap" href="{{ route('blog') }}">
                Blog
            </a>
            <a class="hover:underline whitespace-nowrap" href="#">
                {{ __('Kontak') }}
            </a>
            <span
                class="flex items-center gap-1 ms-2 ps-3 border-s-2 border-gray-200 text-sm font-medium whitespace-nowrap"
                role="group" aria-label="Pilih bahasa">
                <a href="{{ route('locale.switch', 'id') }}"
                    class="px-2 py-1 rounded-md transition-colors {{ app()->getLocale() === 'id' ? 'bg-[#4F46E5] text-white' : 'text-gray-500 hover:bg-gray-100 hover:text-[#4F46E5]' }}"
                    aria-label="Bahasa Indonesia">ID</a>
                <a href="{{ route('locale.switch', 'en') }}"
                    class="px-2 py-1 rounded-md transition-colors {{ app()->getLocale() === 'en' ? 'bg-[#4F46E5] text-white' : 'text-gray-500 hover:bg-gray-100 hover:text-[#4F46E5]' }}"
                    aria-label="English">EN</a>
            </span>
        </nav>
    </header>
    <!-- Mobile menu -->
    <div aria-hidden="true" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden" id="mobile-menu">
    </div>
    <nav aria-label="Mobile Navigation"
        class="fixed top-0 left-0 bottom-0 w-64 bg-white z-50 transform -translate-x-full transition-transform duration-300 ease-in-out"
        id="mobile-nav">
        <div class="flex items-center justify-between px-6 py-6 border-b border-gray-200">
            <div class="flex items-center space-x-2">
                <span class="font-semibold text-xl select-none">
                    Hanz 
                    <br>
                    Management
                </span>
            </div>
            <button aria-label="Close menu" class="text-gray-700 hover:text-black focus:outline-none"
                id="mobile-menu-close">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewbox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>
            </button>
        </div>
        <ul class="px-6 py-4 space-y-4 text-base font-normal">
            <li>
                <a class="block hover:underline" href="/#">
                    {{ __('Home') }}
                </a>
            </li>
            <li>
                <a class="block hover:underline" href="/#about">
                    {{ __('Tentang Kami') }}
                </a>
            </li>
            <li>
                <a class="block hover:underline" href="{{ route('services') }}">
                {{ __('Layanan') }} 
                </a>
            </li>
            <li>
                <a class="block hover:underline" href="/#portfolio">
                  {{ __('Project Kami') }}
                </a>
            </li>
            <li>
                <a class="block hover:underline" href="{{ route('blog') }}">
                  Blog
                </a>
            </li>
            <li>
                <a class="block hover:underline" href="#">
                    {{ __('Kontak') }}
                </a>
            </li>
        </ul>
        <div class="px-6 pb-6 pt-2 border-t border-gray-200">
            <span class="flex items-center gap-1 text-sm font-medium" role="group" aria-label="Pilih bahasa">
                <a href="{{ route('locale.switch', 'id') }}"
                    class="px-2 py-1 rounded-md transition-colors {{ app()->getLocale() === 'id' ? 'bg-[#4F46E5] text-white' : 'text-gray-500' }}"
                    aria-label="Bahasa Indonesia">ID</a>
                <a href="{{ route('locale.switch', 'en') }}"
                    class="px-2 py-1 rounded-md transition-colors {{ app()->getLocale() === 'en' ? 'bg-[#4F46E5] text-white' : 'text-gray-500' }}"
                    aria-label="English">EN</a>
            </span>
        </div>
    </nav>


    <!-- Main content -->
     <div class="content lg:px-12 px-6">
         <!-- This is where the content will be injected -->
        @yield('content')
     </div>

<!-- Footer -->
<footer class="sm-auto bg-[#4F46E5] text-white rounded-t-3xl mx-auto px-6 sm:px-10 md:px-16 py-10">
   <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-10 md:gap-0">
    <div class="md:max-w-xs flex-shrink-0">
     <div class="flex items-center gap-3 mb-4">
      <img alt="Scappa logo with three curved lines in blue square" class="w-[100px] h-8" height="32" src="{{ asset('images/hm-logo.webp') }}" width="100"/>
      <span class="font-semibold text-lg leading-6">
       Hanz Management
      </span>
     </div>
     <p class="text-sm leading-6 max-w-[280px]">
        Hanz Management is a leading provider of innovative solutions, dedicated to helping businesses thrive in the digital age. Our mission is to empower organizations with cutting-edge technology and exceptional service.
     </p>
    </div>
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-x-16 gap-y-6 text-sm leading-6 text-gray-600">
     <div>
      <h3 class="font-semibold text-white mb-3">
       Pages
      </h3>
      <ul class="space-y-2">
       <li>
        <a class="text-white" href="#">
         What We Do
        </a>
       </li>
       <li>
        <a class="text-white" href="#">
         Pricing
        </a>
       </li>
       <li>
        <a class="text-white" href="#">
         How It Works
        </a>
       </li>
       <li>
        <a class="text-white" href="#">
         Affiliates
        </a>
       </li>
       <li>
        <a class="text-white" href="#">
         Partners
        </a>
       </li>
      </ul>
     </div>
     <div>
      <h3 class="font-semibold text-white mb-3">
       Company
      </h3>
      <ul class="space-y-2">
       <li>
        <a class="text-white" href="#">
         About
        </a>
       </li>
       <li>
        <a class="text-white" href="#">
         Mission and Values
        </a>
       </li>
       <li>
        <a class="text-white" href="#">
         Social Media
        </a>
       </li>
       <li>
        <a class="text-white" href="#">
         FAQ
        </a>
       </li>
      </ul>
     </div>
     <div>
      <h3 class="font-semibold text-white mb-3">
       Developers
      </h3>
      <ul class="space-y-2">
       <li>
        <a class="text-white" href="#">
         API Documentation
        </a>
       </li>
       <li>
        <a class="text-white" href="#">
         Developers Tools
        </a>
       </li>
      </ul>
     </div>
     <div>
      <h3 class="font-semibold text-white mb-3">
       Resources
      </h3>
      <ul class="space-y-2">
       <li>
        <a class="text-white" href="#">
         Careers
        </a>
       </li>
       <li>
        <a class="text-white" href="#">
         Contact Us
        </a>
       </li>
        <li>
         <a class="text-white" href="{{ route('blog') }}">
          Blog
         </a>
        </li>
        <li>
         <a class="text-white" href="https://wa.me/6282110040066" target="_blank" rel="noopener">
          Contact Us
         </a>
        </li>
      </ul>
     </div>
    </div>
   </div>
   <hr class="border-t border-gray-200 mt-10"/>
   <div class="mt-6 flex flex-col sm:flex-row text-white justify-between items-center text-xs text-black/80">
    <p>
     Copyright © 2024 hanz management. All rights reserved.
    </p>
    <div class="flex space-x-4 mt-4 sm:mt-0">
      <a aria-label="LinkedIn" class="text-gray-500 hover:text-gray-700" href="#">
       <svg class="w-3.5 h-3.5" viewBox="0 0 448 512" fill="currentColor" aria-hidden="true" focusable="false"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"/></svg>
      </a>
      <a aria-label="Facebook" class="text-gray-500 hover:text-gray-700" href="#">
       <svg class="w-3.5 h-3.5" viewBox="0 0 320 512" fill="currentColor" aria-hidden="true" focusable="false"><path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/></svg>
      </a>
      <a aria-label="Instagram" class="text-gray-500 hover:text-gray-700" href="#">
       <svg class="w-3.5 h-3.5" viewBox="0 0 448 512" fill="currentColor" aria-hidden="true" focusable="false"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/></svg>
      </a>
    </div>
   </div>
</footer>

<!-- cta wa -->
 <a href="https://wa.me/6282110040066" target="_blank"
   class="fixed bottom-4 right-2 z-50 text-white px-4 rounded-full flex items-center gap-2 transition duration-300">
  <img src="{{ asset('images/cta.webp') }}" class="w-[160px] sm:w-[200px]" alt="hanzmanagement wa" loading="lazy" fetchpriority="low">
</a>


<script>
     const menuBtn = document.getElementById("menu-btn");
        const menu = document.getElementById("menu");
        const menuButtons = document.getElementById("menu-buttons");
        const mobileMenu = document.getElementById("mobile-menu");
        const mobileNav = document.getElementById("mobile-nav");
        const mobileMenuClose = document.getElementById("mobile-menu-close");

        // Toggle mobile menu open/close
        menuBtn.addEventListener("click", () => {
            const expanded = menuBtn.getAttribute("aria-expanded") === "true" || false;
            menuBtn.setAttribute("aria-expanded", !expanded);
            if (mobileNav.classList.contains("-translate-x-full")) {
                mobileNav.classList.remove("-translate-x-full");
                mobileMenu.classList.remove("hidden");
                mobileMenu.setAttribute("aria-hidden", "false");
            } else {
                mobileNav.classList.add("-translate-x-full");
                mobileMenu.classList.add("hidden");
                mobileMenu.setAttribute("aria-hidden", "true");
            }
        });

        // Close mobile menu on overlay click
        mobileMenu.addEventListener("click", () => {
            mobileNav.classList.add("-translate-x-full");
            mobileMenu.classList.add("hidden");
            mobileMenu.setAttribute("aria-hidden", "true");
            menuBtn.setAttribute("aria-expanded", false);
        });

        // Close mobile menu on close button click
        mobileMenuClose.addEventListener("click", () => {
            mobileNav.classList.add("-translate-x-full");
            mobileMenu.classList.add("hidden");
            mobileMenu.setAttribute("aria-hidden", "true");
            menuBtn.setAttribute("aria-expanded", false);
        });

// Pastikan elemen ada sebelum akses
const mobileSubmenuBtn = document.getElementById("mobile-submenu-btn");
const mobileSubmenu = document.getElementById("mobile-submenu");

if (mobileSubmenuBtn && mobileSubmenu) {
    mobileSubmenuBtn.addEventListener("click", () => {
        const expanded =
            mobileSubmenuBtn.getAttribute("aria-expanded") === "true" || false;
        mobileSubmenuBtn.setAttribute("aria-expanded", !expanded);
        if (mobileSubmenu.classList.contains("hidden")) {
            mobileSubmenu.classList.remove("hidden");
            const svg = mobileSubmenuBtn.querySelector("svg");
            if (svg) svg.classList.add("rotate-180");
        } else {
            mobileSubmenu.classList.add("hidden");
            const svg = mobileSubmenuBtn.querySelector("svg");
            if (svg) svg.classList.remove("rotate-180");
        }
    });
}
</script>

@stack('scripts')
</body>
</html>