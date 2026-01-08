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
        padding: 40px 40px;
        border-radius: 16px;
        background-color: #ffebf5;
        display: flex;
        justify-content: center;
    }

    .ent-card {
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

    .tab-content {
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
           <a href="https://wa.me/+966920010436" target="_blank"> <div class="offer-image"><img src="{{ asset('frontend_v2/assets/Offer/md2.png') }}" alt="Offer 2"></div>
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






@endsection