const images = [
    "/frontend_v2/assets/images/image1.png",
    "/frontend_v2/assets/images/image2.png",
    "/frontend_v2/assets/images/image3.jpeg",
    "/frontend_v2/assets/images/image4.jpg",
    "/frontend_v2/assets/images/image5.webp",
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
