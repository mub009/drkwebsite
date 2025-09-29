function toggleLanguage() {
    const slider = document.querySelector(".language-slider");

    // Get current path and filename
    const currentPath = window.location.pathname;

    // Define mapping between English and Arabic files
    const languageMap = {
        "/index.html": "/indexen.html",
        "/services.html": "/servicesar.html",
        "/about.html": "/aboutar.html",
        "/contact.html": "/contactar.html",
        "/blog.html": "/blogar.html",

        "/indexen.html": "/index.html",
        "/servicesar.html": "/services.html",
        "/aboutar.html": "/about.html",
        "/contactar.html": "/contact.html",
        "/blogar.html": "/blog.html",
    };

    // Determine target page from map
    const targetPage = languageMap[currentPath];

    if (!targetPage) {
        console.warn("No language mapping found for:", currentPath);
        return;
    }

    // Animate slider
    const isCurrentlyEnglish = currentPath.includes("/En/");
    slider.style.transform = isCurrentlyEnglish
        ? "translateX(50px)"
        : "translateX(0)";

    // Delay redirect to match animation
    setTimeout(() => {
        window.location.href = targetPage;
    }, 400);
}

// script.js
const faders = document.querySelectorAll(".fade-in");

const appearOptions = {
    threshold: 0.1,
    rootMargin: "0px 0px -100px 0px",
};

const appearOnScroll = new IntersectionObserver(function (entries, observer) {
    entries.forEach((entry) => {
        if (!entry.isIntersecting) return;
        entry.target.classList.add("appear");
        observer.unobserve(entry.target);
    });
}, appearOptions);

faders.forEach((fader) => {
    appearOnScroll.observe(fader);
});

/* responsive nav  */

document.addEventListener("DOMContentLoaded", function () {
    const menuButton = document.getElementById("menuButton");
    const mainNav = document.getElementById("mainNav2");
    const closeButton = document.getElementById("closeButton");
    const overlay = document.getElementById("overlay");

    function openMenu() {
        mainNav.classList.add("open");
        overlay.classList.add("active");
    }

    function closeMenu() {
        mainNav.classList.remove("open");
        overlay.classList.remove("active");
    }

    menuButton.addEventListener("click", openMenu);
    closeButton.addEventListener("click", closeMenu);
    overlay.addEventListener("click", closeMenu);
});

/* responsive nav  */

// document
//     .querySelector(".dropdown-togglez")
//     .addEventListener("click", function (e) {
//         e.preventDefault();
//         const dropdown = this.nextElementSibling;
//         dropdown.style.display =
//             dropdown.style.display === "block" ? "none" : "block";
//     });
