// header scroll

 let lastScrollTop = 0;
  const header = document.querySelector(".site-header");

  window.addEventListener("scroll", () => {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    if (scrollTop > lastScrollTop) {
      // Scrolling Down - hide header
      header.style.top = "-110px";
    } else {
      // Scrolling Up - show header
      header.style.top = "0";
    }

    lastScrollTop = scrollTop <= 0 ? 0 : scrollTop; // Avoid negative values
  });





  AOS.init({
    duration: 1000,           // Slightly faster animation
    once: false,             // Animate on every scroll (in and out)
    offset: 180,             // Start animation slightly before it's fully in viewport
    easing: 'ease-out-back', // Smoother and spring-like easing
    mirror: true,            // Animate out when scrolling up
    anchorPlacement: 'top-bottom' // More consistent triggering
});

// tab

const tabButtons = document.querySelectorAll(".tab-buttons button");
        const tabContents = document.querySelectorAll(".tab-content");

        tabButtons.forEach(button => {
            button.addEventListener("click", () => {
                // Remove active states from all buttons and contents
                tabButtons.forEach(btn => btn.classList.remove("active"));
                tabContents.forEach(content => content.classList.remove("active"));

                // Add active state to clicked button
                button.classList.add("active");

                // Scroll the clicked button into center view
                button.scrollIntoView({ behavior: "smooth", inline: "center", block: "nearest" });

                // Show the associated tab content if it exists
                const targetContent = document.getElementById(button.getAttribute("data-tab"));
                if (targetContent) {
                    targetContent.classList.add("active");
                }
            });
        });