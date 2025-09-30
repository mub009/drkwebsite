<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('frontend_v2/assets/logos/Logo2.png') }}">
    <title>404</title>
    <meta name="description" content="Oops! Page Not Found" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Kufi+Arabic:wght@100..900&family=Noto+Sans+Canadian+Aboriginal:wght@100..900&family=TikTok+Sans:opsz,wght@12..36,300..900&display=swap"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="stylesheet" href="/css/stylesub.css" />
    <script defer src="/js/script.js"></script>
    <script defer src="/js/scriptsub.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</head>

<body>




    <style>
        /* 404 Error Page Styles */
        .error-page {
            min-height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fff;
            padding: 50px 20px;
            text-align: center;
        }

        .error-container {
            max-width: 700px;
        }

        .error-title {
            font-size: 10rem;
            font-weight: 900;
            color: #980a50;
            /* hospital theme pink */
            margin: 0;
            line-height: 1;
        }

        .error-subtitle {
            font-size: 2rem;
            font-weight: 700;
            margin: 10px 0 20px;
            color: #000;
        }

        .error-message {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #444;
            margin-bottom: 30px;
        }

        .error-actions {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .error-btn {
            padding: 12px 25px;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .home-btn {
            background-color: #980a50;
            color: #fff;
        }

        .home-btn:hover {
            background-color: #75053d;
        }

        .contact-btn {
            background-color: #f8f8f8;
            border: 1px solid #980a50;
            color: #980a50;
        }

        .contact-btn:hover {
            background-color: #980a50;
            color: #fff;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .error-title {
                font-size: 6rem;
            }

            .error-subtitle {
                font-size: 1.5rem;
            }

            .error-message {
                font-size: 1rem;
            }
        }




        /* --- Privacy Policy Section Styles --- */
        .privacy-policy-section {
            background: #f8f9fa;
            /* light gray background */
            padding: 40px 20px;
            margin-bottom: 40px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
        }

        .privacy-container {
            max-width: 1000px;
            margin: 0 auto;
            color: #333;
            font-family: "Inter", sans-serif;
            line-height: 1.7;
        }

        .privacy-title {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #004a7c;
            /* hospital brand color */
            text-align: center;
        }

        .privacy-container h2 {
            font-size: 30px;
            margin-top: 25px;
            margin-bottom: 10px;
            font-weight: 800;
            color: #222;
        }

        .privacy-container p {
            margin-bottom: 15px;
        }

        .privacy-container ul {
            margin: 0 0 15px 20px;
            padding: 0;
        }

        .privacy-container ul li {
            margin-bottom: 8px;
        }

        /* --- Accordion Effect --- */
        .privacy-container h2 {
            cursor: pointer;
            position: relative;
            padding-right: 25px;
        }





        /* Hide content under each heading by default */
        .privacy-container h2+ul,
        .privacy-container h2+p {
            display: none;
            transition: all 0.3s ease;
        }

        .privacy-container h2.active+ul,
        .privacy-container h2.active+p {
            display: block;
        }
    </style>

    <header class="site-header">
        <div class="header-container">
            <img src="{{ asset('frontend_v2/assets/Icons/logo.png') }}" alt="Hospital Logo" class="hospital-logo" />




            <div id="overlay" class="overlayz"></div>

            <nav class="main-nav2" id="mainNav2">
                <button id="closeButton" class="close-buttonzz">×</button>
                <div>
                    <div class="language-selector respo-lag" onclick="toggleLanguage()">
                        <div class="language-slider"></div>
                        <span class="language-option">EN</span>
                        <span class="language-option">AR</span>
                    </div>
                    <a href="/indexen.html" class="nav-link2"> <span class="spanz">01. </span> Home</a>
                    <a href="/services.html" class="nav-link2"><span class="spanz">02. </span>Services</a>
                    <a href="/blog.html" class="nav-link2"> <span class="spanz">03. </span> Blog</a>
                    <a href="/about.html" class="nav-link2"> <span class="spanz">04. </span> About Us</a>
                    <a href="/contact.html" class="nav-link2"><span class="spanz">05. </span>Contact Us</a>


                    <div class="footer-line2"></div>
                    <div class="footer-tail-end">
                        <div> © 2025 Dr. Khalid Al-Ruhaimi Hospital. All rights reserved.</div>
                    </div>
                </div>
            </nav>


            <nav class="main-navigation" role="navigation" aria-label="Main navigation">
                <a href="/indexen.html" class="nav-link">Home</a>
                <a href="/services.html" class="nav-link">Services</a>
                <a href="/blog.html" class="nav-link">Blog</a>
                <a href="/about.html" class="nav-link">About Us</a>
                <a href="/contact.html" class="nav-link">Contact Us</a>
            </nav>

            <div class="header-actions">
                <div class="language-selector lnon" onclick="toggleLanguage()">
                    <div class="language-slider"></div>
                    <span class="language-option">EN</span>
                    <span class="language-option">AR</span>
                </div>


                <a href="tel:0550655152">
                    <button class="book-now-button bnon">
                        <span class="book">Book Now</span>
                        <img src="{{ asset('frontend_v2/assets/Icons/Arrow2.png') }}" alt="Arrow Icon" />
                    </button>
                </a>
                <div class="menu-button w-nav-button" id="menuButton">
                    <div class="menu-flex">
                        <div class="menu">
                            <div class="w-embed"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    </header>


    <!-- 404 Error Section -->
    <section class="error-page">
        <div class="error-container">
            <h1 class="error-title">404</h1>
            <h2 class="error-subtitle">Oops! Page Not Found</h2>
            <p class="error-message">
                The page you are looking for might have been removed, had its name changed,
                or is temporarily unavailable.
            </p>

            <div class="error-actions">
                <a href="/index.html" class="error-btn home-btn">Go to Homepage</a>
                <a href="/contact.html" class="error-btn contact-btn">Contact Support</a>
            </div>
        </div>
    </section>



    <footer class="hospital-footer">


        <section class="main-footer">
            <div class="footer-background-text" aria-hidden="true">DRK</div>

            <div class="footer-content">
                <div class="hospital-info">
                    <div class="logo-container">
                        <div class="logo-wrapper">
                            <img src="{{ asset('frontend_v2/assets/Icons/drk.png') }}" alt="Dr. Khalid Al-Ruhaimi Hospital Logo"
                                class="hospital-logoz" />
                        </div>
                    </div>
                    <address class="hospital-address">
                        <p class="address-line">
                            Dr. Khalid Al-Ruhaimi Hospital Prince Mohammed Bin Fahd Street, Al Khobar, Saudi Arabia
                        </p>
                        <p class="contact-phone">Phone: +966 13 895 5555</p>
                        <p class="contact-email">Email: info@dralruhaimi.com</p>
                    </address>
                </div>

                <nav class="footer-navigation" aria-label="Footer navigation">
                    <div class="nav-column">
                        <h2 class="nav-title">Quick access</h2>
                        <ul class="nav-list">
                            <li><a href="#" class="nav-linkz">Home</a></li>
                            <li><a href="#" class="nav-linkz">About Us</a></li>
                            <li><a href="#" class="nav-linkz">Doctors</a></li>
                        </ul>
                    </div>
                    <div class="nav-column">
                        <h2 class="nav-title">Services</h2>
                        <ul class="nav-list">
                            <li><a href="#" class="nav-linkz">Sections</a></li>
                            <li><a href="#" class="nav-linkz">Branches</a></li>
                            <li><a href="#" class="nav-linkz">Offers</a></li>
                        </ul>
                    </div>
                    <div class="nav-column">
                        <h2 class="nav-title">Contact Us</h2>
                        <ul class="nav-list">
                            <li><a href="#" class="nav-linkz">Send a Massage</a></li>
                            <li><a href="#" class="nav-linkz">Book a Appointment</a></li>
                            <li><a href="#" class="nav-linkz">Schedule a call</a></li>
                        </ul>
                    </div>
                    <div class="nav-column">
                        <h2 class="nav-title">Legal</h2>
                        <ul class="nav-list">
                            <li><a href="#" class="nav-linkz">Privacy Policy</a></li>
                            <li><a href="#" class="nav-linkz">Terms & Conditions</a></li>
                            <li><a href="#" class="nav-linkz">Cookie Policy</a></li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="footer-bottom">
                <div class="social-media" aria-label="Social media links">
                    <a href="#" class="social-link" aria-label="Follow us on Instagram">
                        <img src="{{ asset('frontend_v2/assets/Icons/instagram.png') }}" class="social-icon" alt="" />
                    </a>
                    <a href="#" class="social-link" aria-label="Follow us on Snapchat">
                        <img src="{{ asset('frontend_v2/assets/Icons/snapchat.png') }}" class="social-icon" alt="" />
                    </a>
                    <a href="#" class="social-link" aria-label="Follow us on YouTube">
                        <img src="{{ asset('frontend_v2/assets/Icons/youtube.png') }}" class="social-icon" alt="" />
                    </a>
                    <a href="#" class="social-link" aria-label="Follow us on TikTok">
                        <img src="{{ asset('frontend_v2/assets/Icons/tiktok.png') }}" class="social-icon" alt="" />
                    </a>
                    <a href="#" class="social-link" aria-label="Follow us on Twitter">
                        <img src="{{ asset('frontend_v2/assets/Icons/twitter.png') }}" class="social-icon" alt="" />
                    </a>
                </div>

                <div class="footer-divider"></div>

                <p class="copyright">
                    © 2025 Dr. Khalid Al-Ruhaimi Hospital. All rights reserved.
                </p>
            </div>
        </section>
    </footer>












</body>

</html>