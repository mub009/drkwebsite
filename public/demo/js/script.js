
 function toggleLanguage() {
      const slider = document.querySelector(".language-slider");

      // Get current path and filename
      const currentPath = window.location.pathname;

      // Define mapping between English and Arabic files
      const languageMap = {
        "/index.html": "/indexar.html",
        "/doctors.html": "/doctorsar.html",
        "/offeren.html": "/offerar.html",
        "/whowe.html": "/whowear.html",
        "/contact.html": "/contactar.html",
        "/branches.html": "/branchesar.html",

        "/indexar.html": "/index.html",
        "/doctorsar.html": "/doctors.html",
        "/offerar.html": "/offeren.html",
        "/whowear.html": "/whowe.html",
        "/contactar.html": "/contact.html",
        "/branchesar.html": "/branches.html"
      };

      // Determine target page from map
      const targetPage = languageMap[currentPath];

      if (!targetPage) {
        console.warn("No language mapping found for:", currentPath);
        return;
      }

      // Animate slider
      const isCurrentlyEnglish = currentPath.includes("/En/");
      slider.style.transform = isCurrentlyEnglish ? "translateX(50px)" : "translateX(0)";

      // Delay redirect to match animation
      setTimeout(() => {
        window.location.href = targetPage;
      }, 400);
    }




// 02

const images = [
    "/Assets/images/image1.png",
    "/Assets/images/image2.png",
    "/Assets/images/image3.jpeg",
    "/Assets/images/image4.jpg",
    "/Assets/images/image5.webp",
];

const bg1 = document.querySelector(".hero-bg-1");
const bg2 = document.querySelector(".hero-bg-2");

let currentIndex = 0;
let isBg1Active = true;

// Initialize first background
bg1.style.backgroundImage = `url('${images[0]}')`;
bg1.classList.add("show");

function changeBackground() {
    const nextIndex = (currentIndex + 1) % images.length;
    const nextImage = `url('${images[nextIndex]}')`;

    if (isBg1Active) {
        bg2.style.backgroundImage = nextImage;
        bg2.classList.add("show");
        bg1.classList.remove("show");
    } else {
        bg1.style.backgroundImage = nextImage;
        bg1.classList.add("show");
        bg2.classList.remove("show");
    }

    isBg1Active = !isBg1Active;
    currentIndex = nextIndex;
}

setInterval(changeBackground, 3000);

// 03

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

// 04

// slideshow

const scrollContainer = document.querySelector(".departments-scroll-container");

let scrollSpeed = 2;

function smoothAutoScroll() {
    scrollContainer.scrollLeft += scrollSpeed;

    if (
        scrollContainer.scrollLeft >=
        scrollContainer.scrollWidth - scrollContainer.clientWidth
    ) {
        scrollContainer.scrollLeft = 0;
    }

    requestAnimationFrame(smoothAutoScroll);
}

// Start the scroll
requestAnimationFrame(smoothAutoScroll);

let isPaused = false;

scrollContainer.addEventListener("mouseenter", () => (isPaused = true));
scrollContainer.addEventListener("mouseleave", () => (isPaused = false));

function smoothAutoScroll() {
    if (!isPaused) {
        scrollContainer.scrollLeft += scrollSpeed;
        if (
            scrollContainer.scrollLeft >=
            scrollContainer.scrollWidth - scrollContainer.clientWidth
        ) {
            scrollContainer.scrollLeft = 0;
        }
    }
    requestAnimationFrame(smoothAutoScroll);
}

// slideshow











// 05

// FAQS

document.addEventListener("DOMContentLoaded", function () {
    const faqItems = document.querySelectorAll(".faq-item");

    faqItems.forEach((item) => {
        const toggleButton = item.querySelector(".toggle-button");
        const answer = item.querySelector(".faq-answer");

        if (toggleButton && answer) {
            // Set initial ARIA attributes
            const isExpanded = item.classList.contains("expanded");
            toggleButton.setAttribute("aria-expanded", isExpanded);

            // Handle click anywhere in the item (excluding nested links or buttons)
            item.addEventListener("click", function (e) {
                // Prevent double toggle when clicking button inside item
                if (e.target.closest(".toggle-button")) {
                    e.preventDefault();
                }
                toggleFAQ(item);
            });

            // Handle keyboard navigation on the button
            toggleButton.addEventListener("keydown", function (e) {
                if (e.key === "Enter" || e.key === " ") {
                    e.preventDefault();
                    toggleFAQ(item);
                }
            });
        }
    });

    function toggleFAQ(item) {
        const toggleButton = item.querySelector(".toggle-button");
        const answer = item.querySelector(".faq-answer");
        const isCurrentlyExpanded = item.classList.contains("expanded");

        // Close all others (accordion behavior)
        faqItems.forEach((otherItem) => {
            if (otherItem !== item && otherItem.classList.contains("expanded")) {
                otherItem.classList.remove("expanded");
                const otherButton = otherItem.querySelector(".toggle-button");
                const otherAnswer = otherItem.querySelector(".faq-answer");
                if (otherButton) otherButton.setAttribute("aria-expanded", "false");
                if (otherAnswer) otherAnswer.style.maxHeight = "0";
                announceStateChange(otherItem, false);
            }
        });

        // Toggle current
        if (isCurrentlyExpanded) {
            item.classList.remove("expanded");
            toggleButton.setAttribute("aria-expanded", "false");
            answer.style.maxHeight = "0";
            announceStateChange(item, false);
        } else {
            item.classList.add("expanded");
            toggleButton.setAttribute("aria-expanded", "true");
            answer.style.maxHeight = answer.scrollHeight + "px";
            announceStateChange(item, true);

            setTimeout(() => {
                const rect = item.getBoundingClientRect();
                const isVisible = rect.top >= 0 && rect.bottom <= window.innerHeight;
                if (!isVisible) {
                    item.scrollIntoView({ behavior: "smooth", block: "nearest" });
                }
            }, 150);
        }
    }

    let resizeTimeout;
    window.addEventListener("resize", function () {
        clearTimeout(resizeTimeout);
        resizeTimeout = setTimeout(() => {
            const expandedItems = document.querySelectorAll(".faq-item.expanded");
            expandedItems.forEach((item) => {
                const answer = item.querySelector(".faq-answer");
                if (answer) {
                    answer.style.maxHeight = "none";
                    const scrollHeight = answer.scrollHeight;
                    answer.style.maxHeight = scrollHeight + "px";
                }
            });
        }, 250);
    });

    function announceStateChange(item, isExpanded) {
        const questionText = item.querySelector(".question-text");
        if (questionText) {
            const announcement = isExpanded
                ? `${questionText.textContent} expanded`
                : `${questionText.textContent} collapsed`;

            const announcer = document.createElement("div");
            announcer.setAttribute("aria-live", "polite");
            announcer.setAttribute("aria-atomic", "true");
            announcer.className = "sr-only";
            announcer.style.position = "absolute";
            announcer.style.left = "-10000px";
            announcer.style.width = "1px";
            announcer.style.height = "1px";
            announcer.style.overflow = "hidden";

            document.body.appendChild(announcer);
            announcer.textContent = announcement;

            setTimeout(() => {
                document.body.removeChild(announcer);
            }, 1000);
        }
    }
});







AOS.init({
    duration: 1000,           // Slightly faster animation
    once: false,             // Animate on every scroll (in and out)
    offset: 180,             // Start animation slightly before it's fully in viewport
    easing: 'ease-out-back', // Smoother and spring-like easing
    mirror: true,            // Animate out when scrolling up
    anchorPlacement: 'top-bottom' // More consistent triggering
});





// AOS.init({
//     duration: 1000,
//     once: true  
//   });






// input are dropdown


const optionMenus = document.querySelectorAll(".select-menu");

optionMenus.forEach(optionMenu => {
    const selectBtn = optionMenu.querySelector(".select-btn");
    const options = optionMenu.querySelectorAll(".option");
    const sBtn_text = optionMenu.querySelector(".sBtn-text");

    selectBtn.addEventListener("click", () => {
        optionMenu.classList.toggle("active");
    });

    options.forEach(option => {
        option.addEventListener("click", () => {
            let selectedOption = option.querySelector(".option-text").innerText;
            sBtn_text.innerText = selectedOption;
            optionMenu.classList.remove("active");
        });
    });
});


//   modal animation

const openBtns = document.querySelectorAll('#open-modal'); // Use class instead of ID for multiple
const modal = document.getElementById('modal-container');
const closeBtn = document.getElementById('close-modal');
const modalBox = document.getElementById('modal-box');
const form = document.getElementById('booking-form');

// Open modal on any booking button
openBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        modal.classList.remove('out');
        modal.classList.add('one');
        document.body.classList.add('modal-active');
    });
});

// Close modal when clicking outside modal box
modal.addEventListener('click', (e) => {
    if (!modalBox.contains(e.target)) {
        closeModal();
    }
});

// Close button
closeBtn.addEventListener('click', () => {
    closeModal();
});

// Form submit
form.addEventListener('submit', (e) => {
    e.preventDefault();
    alert("Form submitted!");
    closeModal();
    form.reset();
});

// Close modal logic
function closeModal() {
    modal.classList.add('out');
    document.body.classList.remove('modal-active');
    setTimeout(() => {
        modal.classList.remove('one');
        modal.classList.remove('out');
    }, 1000);
}









/* responsive nav  */

document.addEventListener('DOMContentLoaded', function () {
    const menuButton = document.getElementById('menuButton');
    const mainNav = document.getElementById('mainNav2');
    const closeButton = document.getElementById('closeButton');
    const overlay = document.getElementById('overlay');

    function openMenu() {
        mainNav.classList.add('open');
        overlay.classList.add('active');
    }

    function closeMenu() {
        mainNav.classList.remove('open');
        overlay.classList.remove('active');
    }

    menuButton.addEventListener('click', openMenu);
    closeButton.addEventListener('click', closeMenu);
    overlay.addEventListener('click', closeMenu);
});

/* responsive nav  */

document.querySelector('.dropdown-togglez').addEventListener('click', function (e) {
    e.preventDefault();
    const dropdown = this.nextElementSibling;
    dropdown.style.display = dropdown.style.display === 'block' ? 'none' : 'block';
});






















