<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="{{ asset('frontend_v2/assets/logos/Logo2.png') }}">
    <title>
        @if(isset($article->meta_title))
        {{ $article->meta_title }}
        @else
        {{ __('header.title') }}
        @endif
    </title>
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-ZBSXQC03RG"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-ZBSXQC03RG');
</script>
    <meta name="description" content="{{ isset($article) && isset($article->meta_description) ? $article->meta_description : __('header.description') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Kufi+Arabic:wght@100..900&family=Noto+Sans+Canadian+Aboriginal:wght@100..900&family=TikTok+Sans:opsz,wght@12..36,300..900&display=swap"
        rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('frontend_v2/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend_v2/css/stylesub.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" rel="stylesheet">
    <script defer src="{{ asset('frontend_v2/js/script.js') }}"></script>
    <script defer src="{{ asset('frontend_v2/js/scriptsub.js') }}"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</head>

<body>
    <style>
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
            /* right: unset !important;
            left: 20px !important; */
            background: none;
            border: none;
            font-size: 41px;
            cursor: pointer;
            color: #000;
        }

        /* English (LTR) */
        html[dir="ltr"] .close-buttonzzl {
            right: 20px !important;
            left: unset !important;
        }

        /* Arabic (RTL) */
        html[dir="rtl"] .close-buttonzzl {
            right: unset !important;
            left: 20px !important;
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

    <!-- <a href="https://wa.me/+966920010436" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
        <img src="{{ asset('frontend_v2/assets/logos/WhatsApp.svg.webp') }}" alt="WhatsApp Chat" width="48" height="48">
    </a> -->

    <div class="social-float">
        <!-- WhatsApp -->
        <a href="https://wa.me/+966920010436" target="_blank" aria-label="Chat on WhatsApp">
            <img src="{{ asset('frontend_v2/assets/logos/WhatsApp11.svg.jpg') }}" alt="WhatsApp">
        </a>

        <!-- Phone -->
        <a href="tel:+966920010436" aria-label="Call Us">
            <img src="{{ asset('frontend_v2/assets/logos/Telephone.png') }}" alt="Phone">
        </a>

        <!-- Instagram -->
        <a href="https://www.instagram.com/dr.kalruhaimi?igsh=MWdzaDBlNXZwNHV2OA==" target="_blank" aria-label="Instagram">
            <img src="{{ asset('frontend_v2/assets/logos/insta.png') }}" alt="Instagram">
        </a>

        <!-- TikTok -->
        <a href="https://www.tiktok.com/@drkhalidalruhaimi?lang=ar" target="_blank" aria-label="TikTok">
            <img src="{{ asset('frontend_v2/assets/logos/ticktok.png') }}" alt="TikTok">
        </a>
    </div>


    <!-- <div class="loader-screen">
        <div class="loader"></div>
    </div> -->

    <header class="site-header">
        <div class="header-container">
            <a href="{{ Route('home') }}">
                <img src="{{ asset('frontend_v2/assets/Icons/logo.png') }}" alt="{{ __('imagealt.logo') }}" class="hospital-logo" />
            </a>
            <div id="overlay" class="overlayz"></div>
            <nav class="main-nav2" id="mainNav2">
                <button id="closeButton" class="close-buttonzz close-buttonzzl">×</button>
                <div>
                    <div class="language-selector respo-lag" onclick="toggleLanguage()">
                        <div class="language-slider"></div>
                        <span class="language-option" data-language="en">EN</span>
                        <span class="language-option" data-language="ar">AR</span>
                    </div>
                    <a href="{{ route('home') }}" class="nav-link2"><span class="spanz">{{ __('header.nav_no1') }} </span>{{ __('header.nav_home') }}</a>
                    <a href="{{ route('services') }}" class="nav-link2"><span class="spanz">{{ __('header.nav_no2') }} </span>{{ __('header.nav_services') }}</a>
                    <a href="{{ route('blog') }}" class="nav-link2"><span class="spanz">{{ __('header.nav_no3') }} </span>{{ __('header.nav_blog') }}</a>
                    <a href="{{ route('about') }}" class="nav-link2"><span class="spanz">{{ __('header.nav_no4') }} </span>{{ __('header.nav_about') }}</a>
                    <a href="{{ route('contact_us') }}" class="nav-link2"><span class="spanz">{{ __('header.nav_no5') }} </span>{{ __('header.nav_contact') }}</a>
                    <a href="{{ route('offerFrontEnd') }}" class="nav-link2"><span class="spanz">{{ __('header.nav_no6') }} </span>{{ __('header.nav_offer') }}</a>
                    <div class="footer-line2"></div>
                    <div class="footer-tail-end">
                        <div>{{ __('header.footer_tail') }}</div>
                    </div>
                </div>
            </nav>
            <nav class="main-navigation" role="navigation" aria-label="{{ __('header.main_navigation') }}">
                <a href="{{ route('home') }}" class="nav-link">{{ __('header.nav_home') }}</a>
                <a href="{{ route('services') }}" class="nav-link">{{ __('header.nav_services') }}</a>
                <a href="{{ route('blog') }}" class="nav-link">{{ __('header.nav_blog') }}</a>
                <a href="{{ route('about') }}" class="nav-link">{{ __('header.nav_about') }}</a>
                <a href="{{ route('contact_us') }}" class="nav-link">{{ __('header.nav_contact') }}</a>
                <a href="{{ route('offerFrontEnd') }}" class="nav-link">{{ __('header.nav_offer') }}</a>
            </nav>
            <div class="header-actions">
                <div class="language-selector lnon" onclick="toggleLanguage()">
                    <div class="language-slider"></div>
                    <span class="language-option" data-language="en">EN</span>
                    <span class="language-option" data-language="ar">AR</span>
                </div>
                <a href="tel:+966920010436">
                    <button class="book-now-button bnon">
                        <span class="book">{{ __('header.book_now') }}</span>
                        <img src="{{ asset('frontend_v2/assets/Icons/Arrow2.png') }}" alt="{{ __('imagealt.arrow') }}" />
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