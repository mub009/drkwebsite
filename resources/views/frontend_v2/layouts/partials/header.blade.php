<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="/Assets/logos/Logo2.png">
    <title>مستشفى د. خالد الرحيّمي – رعاية متقدمة</title>
    <meta name="description"
        content="احصل على أفضل رعاية طبية وجراحية وتجميلية مع نخبة من الأطباء الموثوقين وأحدث التقنيات في مستشفى د. خالد الرحيّمي. احجز موعدك اليوم." />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Kufi+Arabic:wght@100..900&family=Noto+Sans+Canadian+Aboriginal:wght@100..900&family=TikTok+Sans:opsz,wght@12..36,300..900&display=swap"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('frontend_v2/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend_v2/css/stylesub.css') }}" />
    <script defer src="{{ asset('frontend_v2/js/script.js') }}"></script>
    <script defer src="{{ asset('frontend_v2/js/scriptsub.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">


</head>

<body>
    <style>
        body {
            font-family: 'Tajawal', sans-serif;
        }

        /* .loader:before {
            content: "مستشفى الدكتور خالد الرحيمي...";
        } */

        @media (min-width: 300px) and (max-width: 750px) {
            .appointment-cta {
                width: unset;
                padding: 15px;
                left: unset;
                top: unset;
                height: auto;
                margin: 0px 15px;
                bottom: -170px;
            }

            .departments-container {
                width: 100%;
                max-width: 1666px;
                height: 800px;
                position: relative;
            }
        }

        .hospital-logoz {
            width: 100%;
            height: auto;
            margin-right: unset !important;
            margin-left: 40px;
        }

        .close-buttonzzl {
            position: absolute;
            top: 20px;
            right: unset !important;
            left: 20px !important;
            background: none;
            border: none;
            font-size: 41px;
            cursor: pointer;
            color: #000;
        }

        .nav-link2:hover {
            color: #980a50;
            border-right: 5px solid #980a50 !important;
            border-left: unset;
        }

        .dropdown-contentz a:hover {
            border-right: 5px solid #980a50;
            border-left: unset;
        }

        .service-logo-container {
            right: unset !important;
            left: 10px !important;
        }
    </style>

    <a href="https://wa.me/966138955555" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
        <img src="{{ asset('frontend_v2/assets/logos/WhatsApp.svg.webp') }}" alt="WhatsApp Chat" width="48" height="48">
    </a>

    <!-- <div class="loader-screen">
        <div class="loader"></div>
    </div> -->

    <header class="site-header">
        <div class="header-container">
            <img src="{{ asset('frontend_v2/assets/Icons/logo.png') }}" alt="شعار المستشفى" class="hospital-logo" />
            <div id="overlay" class="overlayz"></div>
            <nav class="main-nav2" id="mainNav2" dir="rtl">
                <button id="closeButton" class="close-buttonzz close-buttonzzl">×</button>
                <div>
                    <div class="language-selector respo-lag" onclick="toggleLanguage()">
                        <div class="language-slider"></div>
                        <span class="language-option">EN</span>
                        <span class="language-option">AR</span>
                    </div>
                    <a href="{{ route('services') }}" class="nav-link2"><span class="spanz">٠١. </span>الخدمات</a>
                    <a href="{{ route('blog') }}" class="nav-link2"><span class="spanz">٠٢. </span>المدونة</a>
                    <a href="{{ route('about') }}" class="nav-link2"><span class="spanz">٠٣. </span>معلومات عنا</a>
                    <a href="{{ route('contact_us') }}" class="nav-link2"><span class="spanz">٠٤. </span>اتصل بنا</a>
                    <div class="footer-line2"></div>
                    <div class="footer-tail-end">
                        <div>© ٢٠٢٥ مستشفى الدكتور خالد الرحيمي. جميع الحقوق محفوظة.</div>
                    </div>
                </div>
            </nav>
            <nav class="main-navigation" role="navigation" aria-label="التنقل الرئيسي" dir="rtl">
                <a href="{{ route('services') }}" class="nav-link">الخدمات</a>
                <a href="{{ route('blog') }}" class="nav-link">المدونة</a>
                <a href="{{ route('about') }}" class="nav-link">معلومات عنا</a>
                <a href="{{ route('contact_us') }}" class="nav-link">اتصل بنا</a>
            </nav>
            <div class="header-actions">
                <div class="language-selector lnon" onclick="toggleLanguage()">
                    <div class="language-slider"></div>
                    <span class="language-option">EN</span>
                    <span class="language-option">AR</span>
                </div>
                <a href="tel:0550655152">
                    <button class="book-now-button bnon" dir="rtl">
                        <span class="book">احجز الآن</span>
                        <img src="{{ asset('frontend_v2/assets/Icons/Arrow2.png') }}" alt="سهم" />
                    </button>
                </a>
                <div class="menu-button w-nav-button" id="menuButton" style="margin-left: 12px;">
                    <div class="menu-flex">
                        <div class="menu">
                            <div class="w-embed"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>