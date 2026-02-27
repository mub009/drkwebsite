@extends('frontend_v2.layouts.FrontendLayout')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" rel="stylesheet">

<style>
    .contact-info-card {
        background: #fff;
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
        max-width: 450px;
    }

    .contact-title {
        font-size: 26px;
        font-weight: 700;
        color: #32031a;
        margin-bottom: 20px;
        border-left: 5px solid #980a50;
        padding-left: 12px;
    }

    html[lang="ar"] .contact-title {
        border-left: none;
        border-right: 5px solid #980a50;
        padding-left: 0;
        padding-right: 12px;
    }

    .contact-list {
        list-style: none;
        padding: 0;
        margin: 0 0 25px;
    }

    .contact-list li {
        font-size: 16px;
        color: #333;
        margin-bottom: 15px;
        display: flex;
        align-items: center;
        gap: 10px;
    }

    .contact-list i {
        color: #980a50;
        font-size: 18px;
        min-width: 20px;
    }

    .contact-list a {
        color: #980a50;
        text-decoration: none;
        font-weight: 500;
    }

    .contact-list a:hover {
        text-decoration: underline;
    }

    .whatsapp-btn {
        display: inline-block;
        background: #25D366;
        color: #fff !important;
        padding: 6px 14px;
        border-radius: 8px;
        font-size: 18px;
        font-weight: 600;
        transition: background 0.3s ease;
    }

    .whatsapp-btn:hover {
        background: #1ebe5b;
    }

    .hours-title {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 10px;
        color: #32031a;
    }

    .working-hours {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .working-hours li {
        font-size: 15px;
        color: #444;
        margin-bottom: 8px;
    }

    @media (min-width: 300px) and (max-width: 500px) {
        .appointment-ctazz {
            width: unset !important;
            padding: 20px !important;
        }

        .containerz {
            padding: 10px !important;
            width: unset !important;
        }

        .section {
            zoom: 90%;
        }
    }

    .appointment-ctazz {
        margin: 100px 0px;
        display: flex;
        width: calc(100% - 272px);
        padding: 15px;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 10px;
        border-radius: 30px;
        background: linear-gradient(180deg, #980a50 13.35%, #32031a 120.78%);
        position: unset !important;
        height: unset !important;
    }

    .containerz {
        padding: 40px;
        width: 80%;
    }

    .form-map-wrapper {
        display: flex;
        gap: 40px;
        flex-wrap: wrap;
        /* padding: 0px 30px; */
    }

    .contact-form {
        flex: 1;
        min-width: 320px;
        max-width: 650px;
    }

    .contact-form h2 {
        margin-bottom: 50px;
        font-size: 24px;
        text-align: center;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    .form-rowz {
        display: flex;
        gap: 20px;
        flex-wrap: wrap;
    }

    .form-group {
        flex: 1;
        display: flex;
        flex-direction: column;
    }

    .form-group label {
        margin-bottom: 5px;
        font-weight: bold;
        font-size: 14px;
    }

    .form-group span {
        color: red;
    }

    /* input,
    textarea {
        padding: 14px 14px;
        border: unset !important;
        border-radius: 6px;
        font-weight: 600;
        font-size: 14px;
        background-color: #9690a214;
    } */

    /* textarea {
        resize: vertical;
        min-height: 150px;
    } */





    .contact-info {
        margin-top: 30px;
    }

    .location,
    .contact-detail {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin-top: 20px;
    }

    .location h4 {
        color: #d10029;
        margin-bottom: 3px;
    }

    .location i,
    .contact-detail i {
        font-size: 18px;
        color: #d10029;
        margin-top: 3px;
    }

    .map {
        flex: 1;
        min-width: 350px;
        height: 500px;
        border-radius: 8px;
        overflow: hidden;
    }
</style>
<style>
    @media (max-width: 1650px) {
        .enq-sub {
            margin-top: 50px !important;
        }
    }

    @media (max-width: 600px) {
        .d-zom {
            zoom: 85% !important;
        }

        .h-cot {
            height: 750px !important;
            margin-bottom: 0px !important;
        }

        .h-cotz {
            width: 90%;
        }
    }

    .custom-select {
        position: relative;
        width: 100%;
        font-size: 14px;
    }

    .select-trigger {
        background: #ffffff;
        border: 1px solid #ced4da;
        border-radius: 12px;
        padding: 14px 16px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .select-trigger:hover {
        border-color: #980a50;
    }

    .select-trigger span {
        color: #444;
    }

    .arrow {
        width: 8px;
        height: 8px;
        border-right: 2px solid #555;
        border-bottom: 2px solid #555;
        transform: rotate(45deg);
        transition: transform 0.3s ease;
    }

    .custom-select.open .arrow {
        transform: rotate(-135deg);
    }

    /* Dropdown card */
    .select-options {
        position: absolute;
        top: calc(100% + 8px);
        left: 0;
        width: 100%;
        background: #ffffff;
        border-radius: 14px;
        box-shadow: 0 12px 30px rgba(0, 0, 0, 0.12);
        overflow: hidden;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.3s ease;
        z-index: 99;
    }

    .custom-select.open .select-options {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    /* Options */
    .option {
        padding: 14px 18px;
        cursor: pointer;
        transition: background 0.2s ease;
    }

    .option:hover {
        background: #f7f7f7;
    }

    .option.active {
        background: #ffebf5;
        font-weight: 600;
        color: #980a50;
    }



    /* Two-column form rows */
    .form-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 16px;
        margin-bottom: 18px;
    }

    /* Remove double spacing */
    .form-row .form-group {
        margin-bottom: 0;
    }

    /* Mobile responsive */
    @media (max-width: 600px) {
        .form-row {
            grid-template-columns: 1fr;
        }
    }

    /* =========================
   FORM CARD
========================= */
    .enquiry-card {
        width: 60%;
        /* max-width: 420px; */
        padding: 35px;
        background: #ffffff;
        border-radius: 20px;
        box-shadow: 0 18px 40px rgba(152, 10, 80, 0.15);
    }

    /* =========================
   FORM GROUP
========================= */
    .enquiry-form .form-group {
        margin-bottom: 22px;
        position: relative;
    }

    /* =========================
   LABEL
========================= */
    .enquiry-form label {
        font-size: 15px;
        font-weight: 600;
        color: #000000;
        margin-bottom: 6px;
        display: block;
    }

    /* =========================
   INPUT & SELECT
========================= */
    .enquiry-form input,
    .enquiry-form select {
        width: 100%;
        padding: 14px 16px;
        border-radius: 14px;
        border: 1px solid #ddd;
        font-size: 14px;
        background: #ffffff;
        transition: all 0.3s ease;
    }

    .enquiry-form input::placeholder {
        color: #aaa;
    }

    .enquiry-form input:focus,
    .enquiry-form select:focus {
        border-color: #980a50;
        box-shadow: 0 0 0 3px rgba(152, 10, 80, 0.15);
        outline: none;
    }

    /* =========================
   SELECT ARROW FIX
========================= */
    .enquiry-form select {
        appearance: none;
        background-image: url("data:image/svg+xml,%3Csvg fill='%23980a50' viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7 10l5 5 5-5'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: right 14px center;
        background-size: 18px;
    }

    /* =========================
   BUTTON
========================= */
    .submit-btn {
        width: 100%;
        padding: 15px;
        background: linear-gradient(135deg, #980a50, #c2185b);
        color: #ffffff;
        font-size: 16px;
        font-weight: 600;
        border: none;
        border-radius: 16px;
        cursor: pointer;
        margin-top: 15px;
        transition: all 0.3s ease;
    }

    .submit-btn:hover {
        transform: translateY(-3px);
        box-shadow: 0 12px 28px rgba(152, 10, 80, 0.35);
    }

    /* =========================
   MOBILE
========================= */
    @media (max-width: 768px) {
        .enquiry-card {
            padding: 25px;
            border-radius: 16px;
        }
    }


    .bg-layer {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        opacity: 0;
        transition: opacity 1s ease-in-out;
    }

    .bg-layer.show {
        opacity: 1;
        z-index: 0;
    }

    .hero-actions {
        width: unset !important;
    }

    .sub-maintez {
        font-size: 25px;
        color: #ffffff;
        margin-bottom: 50px;
    }

    .hero-content {
        gap: 20px !important;
    }


    .offer-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 20px;
        padding: 50px 200px;
        z-index: 1000;
    }

    .offer-image {
        background-color: transparent;
        /* transparent background */
        padding: 10px;
        text-align: center;
        border-radius: 8px;
        transition: transform 0.3s ease;
    }

    .offer-image img {
        width: 100%;
        height: auto;
        object-fit: contain;
        background: transparent;
        border-radius: 40px;
        box-shadow: 1px 1px 4px 0px rgba(0, 0, 0, 0.25);
    }

    .offer-image:hover {
        transform: scale(1.05);
    }

    .of2 {
        display: none;
    }

    @media (min-width: 890px) and (max-width: 1550px) {

        .offer-grid {
            display: grid;
            padding: 50px 130px !important;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)) !important;
        }
    }

    /* @media (min-width: 300px) and (max-width: 500px) {
            .section {
                margin-top: 120px !important;
            }
        } */

    @media (min-width: 300px) and (max-width: 700px) {


        .offer-grid {
            display: grid;
            padding: 20px !important;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)) !important;
        }

        .hero-title {
            font-size: 12vw;
            padding: unset;
        }
    }

    .overlay {
        background-color: rgba(0, 0, 0, 0.5) !important;
    }

    .topz {
        margin-top: 80px !important;
    }

    @media (min-width: 300px) and (max-width: 700px) {

        .enquiry-card {
            width: 100%;
            padding: 15px;
            background: #ffffff;
        }

        .ent-header {
            text-align: center;
            margin-top: 20px;
        }
    }

    @media (min-width: 300px) and (max-width: 1100px) {

        .doctor-card,
        .tab-container {
            zoom: 70%;
        }

        .ent-header {
            width: 100% !important;
        }

        .ent-card {
            flex-direction: column;
        }

        .ent-card {
            /* background: unset !important; */
            /* box-shadow: unset !important; */
            padding: 10px !important;

        }

        /* .ent-department {
                padding: 40px 10px !important;
            } */

        .ent-header p {
            font-size: 16px !important;
        }

        .ent-header h2 {
            font-size: 25px !important;
        }

        .ent-body h3 {
            font-size: 20px !important;
        }

        .ent-services li {
            font-size: 15px !important;
        }

        .hero-title {
            font-size: 13vw !important;
        }

        .main-headline {
            font-size: 25px !important;
        }
    }

    .topz {
        margin-top: 0px !important;
    }

    .department-gallery {
        padding: 20px 0px;
        display: flex;
        justify-content: center;
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: auto auto;
        gap: 8px;
        width: 100%;
    }

    .gallery-img {
        overflow: hidden;
        border-radius: 20px;
        height: 200px;
    }

    .gallery-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        border-radius: 20px;
    }


    .img3 {
        grid-column: span 2;
    }

    .ent-department {
        /* padding: 40px 40px; */
        border-radius: 16px;
        background-color: #ffebf5;
        display: flex;
        justify-content: center;
    }

    .ent-card {
        /* background: #fff; */
        border-radius: 16px;
        /* box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08); */
        padding: 40px;
        width: 100%;
        display: flex;
        justify-content: space-around;
        gap: 40px;
        align-items: start;
        align-items: center;
    }

    .ent-header {
        width: 60%;
    }

    .ent-header h2 {
        font-size: 35px;
        font-weight: 700;
        color: #980a50;
        margin-bottom: 15px;
    }

    .ent-header p {
        font-size: 20px;
        line-height: 1.6;
        color: #000000;
        font-weight: 400;
    }

    .ent-body h3 {
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 20px;
        color: #980a50;
    }

    .ent-services {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .ent-services li {
        padding-left: 25px;
        position: relative;
        margin-bottom: 12px;
        font-size: 18px;
        color: #000000;
        font-weight: 500;
    }

    .ent-services li::before {
        content: "✔";
        position: absolute;
        left: 0;
        color: #980a50;
        font-size: 16px;
    }

    .tab-container {
        width: 100%;
        padding-bottom: 50px;
    }

    .tab-buttons {
        display: flex;
        flex-wrap: nowrap;
        gap: 12px;
        overflow-x: auto;
        scroll-behavior: smooth;
        -webkit-overflow-scrolling: touch;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }

    /* Optional: Style scrollbar for Chrome/Safari */
    .tab-buttons::-webkit-scrollbar {
        height: 8px;
    }

    .tab-buttons::-webkit-scrollbar-thumb {
        background: #ffebf5;
        border-radius: 4px;
    }

    .tab-buttons::-webkit-scrollbar-track {
        background: #ffebf5;
    }


    .tab-buttons {
        scrollbar-width: thin;
        scrollbar-color: #980a50 #eee;
    }



    .tab-buttons button {
        white-space: nowrap;
        padding: 10px 16px;
        font-weight: 600;
        font-size: 14px;
        border: 1px solid #ddd;
        border-radius: 50px;
        background-color: #f8f8f8;
        color: #000000;
        cursor: pointer;
        transition: all 0.3s ease;
        flex-shrink: 0;
    }

    .tab-buttons button.active,
    .tab-buttons button:hover {
        background-color: #980a50;
        color: #fff;
        border-color: #980a50;
    }


    .card-dr {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin-bottom: 50px !important;
    }

    .tabs {
        width: 100%;
        margin: auto;

    }



    /* .tab-content {
            opacity: 0;
            transform: translateX(50px);
            transition: all 0.5s ease;
            height: 0;
            overflow: hidden;
            pointer-events: none;
        }

        .tab-content.active {
            opacity: 1;
            transform: translateX(0);
            height: auto;
            pointer-events: auto;
        } */

    @media (max-width: 1650px) {
        .slider-wrap {
            width: 100%;
            padding-bottom: 30px !important;
            padding-top: 0px !important;
        }

        .slider-track {
            gap: 1px !important;
        }
    }

    @media (max-width: 1650px) {
        .slider-wrap {
            width: 100%;
            top: 400px;
            padding-bottom: 100px !important;
            padding-top: 100px !important;
        }

    }

    @media (max-width: 700px) {
        .slider-wrap {
            width: 100%;
            padding-bottom: 30px !important;
            padding-top: 0px !important;
            top: 350px !important;
        }

    }

    /* Wrapper */
    .slider-wrap {
        top: 300px;
        width: 100%;
        padding-bottom: 100px;
        padding-top: 100px;
        overflow: hidden;
        position: relative;
    }






    /* Slider Track */
    .slider-track {
        display: flex;
        align-items: center;
        text-align: center;
        gap: 1px;
        animation: scroll 25s linear infinite;
        width: max-content;
    }

    .slider-wrap:hover .slider-track {
        animation-play-state: paused;
    }

    /* Card */
    .slider-card {
        width: 350px;
        /* height: 340px; */
        /* border-radius: 20px; */
        overflow: hidden;
        /* background: #111; */
        flex-shrink: 0;
        /* box-shadow: 0 6px 18px rgba(0,0,0,0.3); */
        transition: transform 0.4s ease;
    }

    .slider-card:hover {
        transform: translateY(-10px) scale(1.50);
    }

    /* Image */
    .slider-card img {
        width: 70%;
        /* height: 100%; */
        object-fit: cover;
        border-radius: 20px;
    }

    /* Animation */
    @keyframes scroll {
        from {
            transform: translateX(0);
        }

        to {
            transform: translateX(-50%);
        }
    }

    .blog-card.single-blog {
        width: 50%;
    }

    .blog-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
        gap: 50px 25px;
    }

    .pagination {
        display: flex;
        justify-content: center;
        margin: 40px 0;
        gap: 10px;
        font-family: 'Inter', sans-serif;
    }

    .pagination a {
        padding: 10px 18px;
        border-radius: 50px;
        /* pill shape */
        /* background: #f5f8fa; */
        color: #2d2d2d;
        text-decoration: none;
        font-size: 15px;
        font-weight: 500;
        border: 1px solid #e2e8f0;
        transition: all 0.3s ease;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    }

    .pagination a:hover {
        background: #980a50;
        /* hospital brand blue */
        color: #fff;
        border-color: #980a50;
        transform: translateY(-2px);
        box-shadow: 0 4px 10px rgba(0, 119, 182, 0.3);
    }

    .pagination .active {
        background: #980a50;
        color: #fff;
        font-weight: 600;
        border-color: #980a50;
        box-shadow: 0 4px 10px rgba(0, 119, 182, 0.3);
    }

    .pagination .prev,
    .pagination .next {
        font-size: 14px;
        padding: 10px 16px;
    }
</style>

<section class="section" style="margin-top: 150px; margin-bottom: 0px;">
    <div class="team-section">
        <div class="team-container">
            <div class="team-header">

                <h1 class="hero-title" style="text-align: center;">
                    <span class="headline-emphasis">{{ __('contact.headline') }}</span>
                </h1>

                <p class="hed_des">
                    {{ __('contact.description') }}
                </p>

            </div>
        </div>
    </div>
</section>

<section class="section" style="margin-top: 50px !important;">
    <div class="containerz">
        <div class="form-map-wrapper">

            <div class="contact-info-card">
                <h2 class="contact-title">{{ __('contact.head') }}</h2>

                <ul class="contact-list">
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <h3 class="feature-title">{{ __('contact.location') }}</h3>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <h3 class="feature-title">{{ __('contact.number') }}</h3>
                    </li>
                    <li>
                        <i class="fab fa-whatsapp"></i>
                        <a href="https://wa.me/+966920010436" target="_blank" class="whatsapp-btn">{{ __('contact.whatsapp') }}</a>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <a class="feature-title" href="mailto:info@dralruhaimi.com">info@dralruhaimi.com</a>
                    </li>
                    <li>
                        <i class="fas fa-globe"></i>
                        <a class="feature-title" href="http://www.dralruhaimi.com"
                            target="_blank">www.dralruhaimi.com</a>
                    </li>
                </ul>

                <h3 class="feature-title" style="margin-bottom: 20px;">{{ __('contact.working_hours') }}</h3>
                <ul class="hours-title">
                    <li>{!! __('contact.working_hours1') !!}</li>
                    <li>{!! __('contact.working_hours2') !!}</li>
                </ul>
            </div>

            <div class="map">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3573.7141096080436!2d50.0938793760821!3d26.40042248191714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e49fd4b984d4503%3A0x88f817f79380dc2f!2z2YXYs9iq2LTZgdmJINivLiDYrtin2YTYryDYp9mE2LHYrdmK2YXZig!5e0!3m2!1sen!2sin!4v1753662822402!5m2!1sen!2sin"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>

        </div>
    </div>
</section>

<section class="section topz anima" data-aos="fade-zoom-in">


    <div class="medical-facility-showcase enq-sub" style="margin-bottom: 80px;">
        <div id="Rays" class="tab-content">
            <section id="rays" class="section" style="margin-bottom: 0px;">
                <div class="ent-department">
                    <div class="ent-card" style="padding: 0px !important;">
                        <div class="ent-header">
                            <h2>{{ __('home.enquiryBook') }}</h2>
                            <p>
                                {{ __('home.enquiryBookP') }}
                            </p>

                        </div>




                        <div class="ent-body enquiry-card">
                            <form action="{{route('enquirySubmit')}}" id="enquiryForm" method="POST" class="enquiry-form">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group">
                                        <label>{{ __('home.enquiryNameL') }}</label>
                                        <input type="text" name="name" placeholder="{{ __('home.enquiryNamePH') }}" required>
                                    </div>

                                    <div class="form-group">
                                        <label>{{ __('home.enquiryPhoneL') }}</label>
                                        <input type="tel" name="phone" placeholder="{{ __('home.enquiryPhonePH') }}" required style="text-align: end;">
                                    </div>
                                </div>

                                <div class="form-row">
                                    <div class="form-group">
                                        <label>{{ __('home.hospitalBranchL') }}</label>

                                        <div class="custom-select" id="branchSelect">
                                            <div class="select-trigger">
                                                <span>{{ __('home.hospitalBranchSL') }}</span>
                                                <i class="arrow"></i>
                                            </div>

                                            <div class="select-options">
                                                <div class="option" data-value="الدمام - حي الريان">{{ __('contact.branch1') }}</div>
                                                <div class="option" data-value="الدمام - حي الفرسان">{{ __('contact.branch2') }}</div>
                                                <div class="option" data-value="الخبر - حي العليا">{{ __('contact.branch3') }}</div>
                                                <div class="option" data-value="الخبر - حي العزيزية">{{ __('contact.branch4') }}</div>
                                                <div class="option" data-value="الخبر - شارع البيبسي">{{ __('contact.branch5') }}</div>
                                                <div class="option" data-value="الاحساء - حي الفتح">{{ __('contact.branch6') }}</div>
                                                <div class="option" data-value="الرياض - حي قرطبة">{{ __('contact.branch7') }}</div>
                                            </div>

                                        </div>

                                        <!-- Hidden input to submit value -->
                                        <input type="hidden" name="branch" id="branchInput" required>
                                    </div>


                                    <div class="form-group">
                                        <label>{{ __('home.emailAddressL') }}</label>
                                        <input type="email" name="email" placeholder="{{ __('home.emailAddressPH') }}" required>
                                    </div>
                                </div>

                                <button type="submit" id="submitEnquiry" class="submit-btn">
                                    {{ __('home.submitEnquiryL') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</section>


<div id="bookingSuccess" class="drk-success-modal" style="display:none;">
    <div class="drk-success-box">
        <div class="drk-icon">
            <i class="ti ti-check"></i>
        </div>
        <h4>Enquiry Submitted</h4>
        <p id="successMessage"></p>
        <button class="drk-close-btn" onclick="hideSuccess()">Okay</button>
    </div>
</div>

<style>
    /* Overlay */
    .drk-success-modal {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, 0.55);
        display: none;
        align-items: center;
        justify-content: center;
        z-index: 9999;
    }

    /* Modal Box */
    .drk-success-box {
        background: #ffffff;
        max-width: 420px;
        width: 90%;
        padding: 32px 26px;
        border-radius: 18px;
        text-align: center;
        box-shadow: 0 15px 40px rgba(0, 0, 0, 0.25);
        animation: scaleFade 0.4s ease;
    }

    /* Icon */
    .drk-icon {
        width: 72px;
        height: 72px;
        margin: 0 auto 18px;
        background: linear-gradient(135deg, #980a50, #c2185b);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .drk-icon i {
        font-size: 36px;
        color: #fff;
    }

    /* Title */
    .drk-success-box h4 {
        font-size: 20px;
        font-weight: 600;
        margin-bottom: 10px;
        color: #c2185b;
    }

    /* Text */
    .drk-success-box p {
        font-size: 14.5px;
        line-height: 1.6;
        color: #4b5563;
        margin-bottom: 22px;
    }

    /* Button */
    .drk-close-btn {
        border: none;
        padding: 10px 28px;
        border-radius: 30px;
        background: #c2185b;
        color: #fff;
        font-size: 14px;
        cursor: pointer;
        transition: 0.3s ease;
    }

    .drk-close-btn:hover {
        background: #c2185b;
    }

    /* Animation */
    @keyframes scaleFade {
        from {
            opacity: 0;
            transform: scale(0.9);
        }

        to {
            opacity: 1;
            transform: scale(1);
        }
    }
</style>





@endsection

@push('scripts')
<script src="{{ asset('frontend_v2/js/contactus.js') }}" defer></script>
@endpush