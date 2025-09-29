
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

        document.addEventListener("DOMContentLoaded", function () {
            const images2 = [
                "/Assets/images/D111.jpg",
                "/Assets/images/D1 (2).jpg",
                "/Assets/images/D1(11).jpg",
                "/Assets/images/D1 (3).jpg",
                "/Assets/images/D1(12).png",
            ];

            const bg3 = document.querySelector(".hero-bg-3");
            const bg4 = document.querySelector(".hero-bg-4");

            if (!bg3 || !bg4) {
                console.error("One or both background elements not found!");
                return;
            }

            let currentIndex2 = 0;
            let isBg3Active = true;

            bg3.style.backgroundImage = `url('${images2[0]}')`;
            bg3.classList.add("show");

            function changeBackground2() {
                const nextIndex = (currentIndex2 + 1) % images2.length;
                const nextImage = `url('${images2[nextIndex]}')`;

                if (isBg3Active) {
                    bg4.style.backgroundImage = nextImage;
                    bg4.classList.add("show");
                    bg3.classList.remove("show");
                } else {
                    bg3.style.backgroundImage = nextImage;
                    bg3.classList.add("show");
                    bg4.classList.remove("show");
                }

                isBg3Active = !isBg3Active;
                currentIndex2 = nextIndex;
            }

            setInterval(changeBackground2, 3000);
        });








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





       




        function toggleLanguage() {
            const slider = document.querySelector(".language-slider");

            const path = window.location.pathname;
            let targetPath = "";

            // Language detection and mapping
            if (path.includes("/main/En/")) {
                // English to Arabic mapping
                targetPath = path
                    .replace("/main/En/", "/main/Ar/")
                    .replace("indexen.html", "indexar.html")
                    .replace("offeren.html", "offerar.html");

                // Animate to Arabic
                slider.style.transform = "translateX(50px)";
            } else if (path.includes("/main/Ar/")) {
                // Arabic to English mapping
                targetPath = path
                    .replace("/main/Ar/", "/main/En/")
                    .replace("indexar.html", "indexen.html")
                    .replace("offerar.html", "offeren.html");

                // Animate to English
                slider.style.transform = "translateX(0)";
            } else {
                // Default fallback (e.g., from root)
                targetPath = "/main/Ar/indexar.html";
                slider.style.transform = "translateX(50px)";
            }

            // Delay to match animation
            setTimeout(() => {
                window.location.href = targetPath;
            }, 400);
        }




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