
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
