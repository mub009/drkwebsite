@extends('frontend_v2.layouts.FrontendLayout')
@section('content')
<style>
    @media (min-width: 300px) and (max-width: 500px) {
        .sectionii {
            margin-top: 120px !important;
        }
    }

    .card-background {
        background: unset !important;
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

    /* 
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
            background: unset !important;
            box-shadow: unset !important;
            padding: unset !important;
            ;
        }

        .ent-department {
            padding: 40px 10px !important;
        }

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
            text-align: center;
        }
    } */

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
        padding: 40px 40px;
        border-radius: 16px;
        background-color: #ffebf5;
        display: flex;
        justify-content: center;
    }

    /* .ent-card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        padding: 40px;
        width: 100%;
        display: flex;
        justify-content: space-around;
        gap: 40px;
        align-items: start;
        align-items: center;
    } */

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
                    <span class="headline-emphasis">{{ __('offer.title') }}</span>
                </h1>

                <p class="hed_des">
                    {{ __('home.exploreDescrL') }}
                </p>


            </div>
        </div>
    </div>
</section>






<section class="section topz anima aos-init aos-animate" data-aos="fade-zoom-in">
    <div class="team-section">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="section-title" style="text-align: center;margin-top:45px;">{{ __('home.specialHealthOffersL') }}</h2>
                <div class="header-content d-flex justify-content-center" style="align-items: center; gap: 2px">
                    <h2 class="main-headline" style="margin-bottom: 20px;">
                        <span class="headline-emphasis">{{ __('home.exclusiveMedicalOffersL') }}</span>
                        <span class="headline-emphasis">{{ __('home.acrossOurSpecializedDeptL') }}</span>
                    </h2>
                </div>
                <!-- <p class="hed_des" style="padding-right: 200px;
    padding-left: 200px;
    margin-bottom: 29px;">{{ __('home.exploreDescrL') }}</p> -->
            </div>






        </div>
    </div>
    </div>
    </div>
</section>

<div class="offer-grid of1">
    <a href="https://wa.me/+966920010436" target="_blank">
        <div class="offer-image"><img src="{{ asset('frontend_v2/assets/Offer/md1.png') }}" alt="Offer 1"></div>
    </a>
    <a href="https://wa.me/+966920010436" target="_blank">
        <div class="offer-image"><img src="{{ asset('frontend_v2/assets/Offer/md2.png') }}" alt="Offer 2"></div>
    </a>
    <a href="https://wa.me/+966920010436" target="_blank">
        <div class="offer-image"><img src="{{ asset('frontend_v2/assets/Offer/md3.png') }}" alt="Offer 3"></div>
    </a>
    <a href="https://wa.me/+966920010436" target="_blank">
        <div class="offer-image"><img src="{{ asset('frontend_v2/assets/Offer/md4.png') }}" alt="Offer 4"></div>
    </a>
    <a href="https://wa.me/+966920010436" target="_blank">
        <div class="offer-image"><img src="{{ asset('frontend_v2/assets/Offer/md5.png') }}" alt="Offer 5"></div>
    </a>
    <a href="https://wa.me/+966920010436" target="_blank">
        <div class="offer-image"><img src="{{ asset('frontend_v2/assets/Offer/md6.png') }}" alt="Offer 6"></div>
    </a>

    <a href="https://wa.me/+966920010436" target="_blank">
        <div class="offer-image"><img src="{{ asset('frontend_v2/assets/Offer/md7.png') }}" alt="Offer 7"></div>
    </a>
    <a href="https://wa.me/+966920010436" target="_blank">
        <div class="offer-image"><img src="{{ asset('frontend_v2/assets/Offer/md8.png') }}" alt="Offer 8"></div>
    </a>
    <a href="https://wa.me/+966920010436" target="_blank">
        <div class="offer-image"><img src="{{ asset('frontend_v2/assets/Offer/md9.png') }}" alt="Offer 9"></div>
    </a>
    <a href="https://wa.me/+966920010436" target="_blank">
        <div class="offer-image"><img src="{{ asset('frontend_v2/assets/Offer/md10.png') }}" alt="Offer 10"></div>
    </a>
    <a href="https://wa.me/+966920010436" target="_blank">
        <div class="offer-image"><img src="{{ asset('frontend_v2/assets/Offer/md11.png') }}" alt="Offer 11"></div>
    </a>
    <a href="https://wa.me/+966920010436" target="_blank">
        <div class="offer-image"><img src="{{ asset('frontend_v2/assets/Offer/md12.png') }}" alt="Offer 12"></div>
    </a>
    <a href="https://wa.me/+966920010436" target="_blank">
        <div class="offer-image"><img src="{{ asset('frontend_v2/assets/Offer/md13.png') }}" alt="Offer 13"></div>
    </a>
    <!-- <div class="offer-image"><img src="/Assets/Offer/" alt="Offer 6"></div> -->

</div>


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
                                                <div class="option" data-value="الدمام - حي الريان">الدمام - حي الريان</div>
                                                <div class="option" data-value="الدمام - حي الفرسان">الدمام - حي الفرسان</div>
                                                <div class="option" data-value="الخبر - حي العليا">الخبر - حي العليا</div>
                                                <div class="option" data-value="الخبر - حي العزيزية">الخبر - حي العزيزية</div>
                                                <div class="option" data-value="الخبر - شارع البيبسي">الخبر - شارع البيبسي</div>
                                                <div class="option" data-value="الاحساء - حي الفتح">الاحساء - حي الفتح</div>
                                                <div class="option" data-value="الرياض - حي قرطبة">الرياض - حي قرطبة</div>
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