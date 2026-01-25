<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Hanz Management | Agency SPG & Manpower</title>
    <link
      rel="stylesheet"
      type="text/css"
      href="https://cdn.jsdelivr.net/npm/@phosphor-icons/web@2.1.1/src/regular/style.css"
  />
    <script src="https://cdn.tailwindcss.com">
    </script>
    <link rel="icon" href="{{ asset('images/HM.webp') }}" type="image/png">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="{{ asset('css/Beranda.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.0/css/all.min.css" integrity="sha512-DxV+EoADOkOygM4IR9yXP8Sb2qwgidEmeqAEmDKIOfPRQZOWbXCzLC6vjbZyy0vPisbH2SyW27+ddLVCN+OMzQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&amp;display=swap" rel="stylesheet" />
    
     <!-- seo -->
      <meta name="description" 
      content="Hanz Management adalah agency SPG & penyedia manpower berbasis di Bogor. Menyediakan jasa SDM terlatih, event organizer, dekorasi event, dan layanan promosi di seluruh Indonesia.">
      <meta name="keywords" 
      content="agency spg, jasa manpower, event organizer Bogor, dekorasi event, penyedia SDM, agency Bogor, Hanz Management, jasa promosi Indonesia">
      <meta name="author" content="Hanz Management">
      <meta name="robots" content="index, follow">
      <meta property="og:title" content="Hanz Management – Agency SPG & Manpower Profesional Bogor & Indonesia">
      <meta property="og:description" 
      content="Agency SPG & manpower berbasis di Bogor dengan layanan SDM, event organizer, dekorasi & produksi event di seluruh Indonesia.">
       <meta property="og:type" content="website">
       <meta property="og:url" content="https://www.hanzmanagement.com">
       <meta property="og:image" content="{{ asset('images/HM.webp') }}">
    
    <style>
        *{
            scroll-behavior: smooth;
        }
         body {
            font-family: "Inter", sans-serif;
        }
        .clip-angled {
            clip-path: polygon(0 0, 100% 0, 100% 100%, 15% 100%, 0 50%);
        }
    </style>
</head>
<body>
    <!-- navbar -->
    <nav>
    <header class="max-w-7xl mx-auto px-7 py-6 flex items-center justify-between sticky top-0 bg-[#F9FAFB] z-50">
    <div class="flex items-center space-x-2">
        <div class="w-[150px] md:w-[200px]">
        <img src="{{ asset('images/hm-logoweb.jpg') }}" alt="" class="w-full">
        </div>
    </div>
        <!-- Hamburger button for mobile -->
        <button aria-expanded="false" aria-label="Toggle menu" class="md:hidden relative w-8 h-8 focus:outline-none"
            id="menu-btn">
            <span class="block absolute h-0.5 w-6 bg-black rounded left-1 top-2 transition-transform duration-300">
            </span>
            <span class="block absolute h-0.5 w-4 bg-black rounded right-1 top-4.5 transition-opacity duration-300">
            </span>
            <span class="block absolute h-0.5 w-6 bg-black rounded left-1 top-6 transition-transform duration-300">
            </span>
        </button>
        <nav class="hidden md:flex items-center space-x-6 text-md font-normal" id="menu">
            <a class="hover:underline whitespace-nowrap" href="/">
                Home
            </a>
            <a class="hover:underline whitespace-nowrap" href="/#about">
                Tentang Kami
            </a>
            <div class="relative group">
                <button aria-expanded="false" aria-haspopup="true"
                    class="flex items-center space-x-1 hover:underline focus:outline-none whitespace-nowrap">
                    <span>
                        <a href="/#service">
                            Layanan
                        </a>
                    </span>
                </button>
            </div>
            <a class="hover:underline whitespace-nowrap" href="/#portfolio">
                Proyek Kami
            </a>
            <a class="hover:underline whitespace-nowrap" href="#">
                Kontak
            </a>
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
                    Home
                </a>
            </li>
            <li>
                <a class="block hover:underline" href="/#about">
                    Tentang Kami
                </a>
            </li>
            <li>
                <a class="block hover:underline" href="/#service">
                Layanan 
                </a>
            </li>
            <li>
                <a class="block hover:underline" href="/#portfolio">
                  Proyek Kami
                </a>
            </li>
            <li>
                <a class="block hover:underline" href="#">
                    Kontak
                </a>
            </li>
        </ul>
    </nav>


    <!-- Main content -->
     <div class="content sm:px-10">
         <!-- This is where the content will be injected -->
        @yield('content')
     </div>

<!-- Footer -->
<footer class="sm-auto bg-[#4F46E5] text-white rounded-t-3xl mx-auto px-6 sm:px-10 md:px-16 py-10">
   <div class="flex flex-col md:flex-row md:justify-between md:items-start gap-10 md:gap-0">
    <div class="md:max-w-xs flex-shrink-0">
     <div class="flex items-center gap-3 mb-4">
      <img alt="Scappa logo with three curved lines in blue square" class="w-[100px] h-8" height="32" src="{{ asset('images/hm-logo.jpg') }}" width="100"/>
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
        <a class="text-white" href="#">
         Blog
        </a>
       </li>
       <li>
        <a class="text-white" href="#">
         Help Center
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
      <i class="fab fa-linkedin-in text-sm">
      </i>
     </a>
     <a aria-label="Facebook" class="text-gray-500 hover:text-gray-700" href="#">
      <i class="fab fa-facebook-f text-sm">
      </i>
     </a>
     <a aria-label="Instagram" class="text-gray-500 hover:text-gray-700" href="#">
      <i class="fab fa-instagram text-sm">
      </i>
     </a>
    </div>
   </div>
</footer>

<!-- cta wa -->
 <a href="https://wa.me/6282110040066" target="_blank"
   class="fixed bottom-4 right-2 z-50 text-white px-4 rounded-full flex items-center gap-2 transition duration-300">
  <img src="{{ asset('images/cta.png') }}" class="w-[160px] sm:w-[200px]" alt="">
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
</body>
</html>