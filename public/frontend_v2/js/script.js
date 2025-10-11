function toggleLanguage() {
    const sliders = document.querySelectorAll(".language-slider");
    const allLanguageOptions = document.querySelectorAll(".language-option");

    const currentLocale = document.documentElement.getAttribute("lang") || "ar";
    const newLocale = currentLocale === "ar" ? "en" : "ar";
    const currentDir = document.documentElement.getAttribute("dir") || "rtl";


    sliders.forEach((slider) => {
        if (currentDir === "ltr") {
            slider.style.transform =
                newLocale === "en" ? "translateX(0)" : "translateX(50px)";
        } else {
            slider.style.transform =
                newLocale === "en" ? "translateX(50px)" : "translateX(0)";
        }
        slider.style.transition = "transform 0.3s ease";
    });

    allLanguageOptions.forEach((el) => {
        const optionLang = el.textContent.trim().toLowerCase();
        el.style.color = optionLang === newLocale ? "#000" : "#fff";
    });

    const csrfToken = document.querySelector('meta[name="csrf-token"]');
    if (!csrfToken) {
        alert("Security token missing. Please refresh the page.");
        return;
    }

    fetch("/change-language", {
        method: "POST",
        headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": csrfToken.getAttribute("content"),
            Accept: "application/json",
        },
        body: JSON.stringify({ locale: newLocale }),
    })
        .then((response) => {
            if (!response.ok) {
                throw new Error(`HTTP error! status: ${response.status}`);
            }
            return response.json();
        })
        .then((data) => {
            if (data.status === "success") {
                setTimeout(() => {
                    window.location.reload();
                }, 350);
            } else {
                alert(
                    "Failed to change language: " +
                        (data.message || "Unknown error")
                );
            }
        })
        .catch((error) => {
            alert(
                "Failed to change language. Please check console for details."
            );
        });
}

// Initialize on page load
document.addEventListener("DOMContentLoaded", () => {
    const sliders = document.querySelectorAll(".language-slider");
    const allLanguageOptions = document.querySelectorAll(".language-option");
    const currentLocale = document.documentElement.getAttribute("lang") || "ar";
    const currentDir = document.documentElement.getAttribute("dir") || "rtl";
    sliders.forEach((slider) => {
        if (currentDir === "ltr") {
            slider.style.transform = 
                currentLocale === "en" ? "translateX(0)" : "translateX(50px)";
        } else {
            slider.style.transform =
                currentLocale === "en" ? "translateX(50px)" : "translateX(0)";
        }
        slider.style.transition = "transform 0.3s ease";
    });
    allLanguageOptions.forEach((el) => {
        const optionLang = el.textContent.trim().toLowerCase();
        el.style.color = optionLang === currentLocale ? "#000" : "#fff";
    });
});

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
