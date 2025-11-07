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