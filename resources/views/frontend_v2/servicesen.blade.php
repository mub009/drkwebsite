@extends('frontend_v2.layouts.FrontendLayout')
@section('content')

<style>
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

    @media (min-width: 300px) and (max-width: 500px) {
        .section {
            margin-top: 120px !important;
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



<section class="section" style=" margin-top: 150px;">
    <div class="team-section">
        <div class="team-container">
            <div class="team-header anima" data-aos="fade-zoom-in">
                <h1 class="hero-title" style="text-align: center;">
                    <span class="headline-emphasis">Medical & Cosmetic Services – Al Ruhaimi Hospital</span>
                </h1>

                <p class="hed_des" style="margin-bottom: 20px;">
                    Discover advanced medical, surgical & cosmetic services tailored to your needs. Choose your
                    specialty and book your visit now.
                </p>
                <div class="header-content" style="align-items: center; gap: 2px;margin-top: 80px;">
                    <h4 class="main-headline">
                        <span class="headline-part">Meet Our Experts @</span>
                        <span class="headline-emphasis">DRK</span>
                    </h4>
                    <div>
                        <div class="satisfied-patients" style="position: unset; box-shadow: unset">
                            <div class="avatarsz">
                                <img src="{{ asset('/frontend_v2/assets/images/ds1.png') }}" alt="Avatar 1" />
                                <img src="{{ asset('/frontend_v2/assets/images/ds2.png') }}" alt="Avatar 2" />
                                <img src="{{ asset('/frontend_v2/assets/images/ds3.png') }}" alt="Avatar 3" />
                                <img src="{{ asset('/frontend_v2/assets/images/ds4.png') }}" alt="Avatar 4" />
                                <img src="{{ asset('/frontend_v2/assets/images/ds5.png') }}" alt="Avatar 5" />
                            </div>
                            <div class="text">
                                <span class="count">50+</span><br />
                                <span class="label">Skilled Doctor</span>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="team-description">
                    At Dr. Khalid Al-Ruhaimi Hospital, we are committed to providing a full range of medical,
                    surgical, and cosmetic services, designed to deliver comprehensive care according to the highest
                    standards of quality, safety, and privacy.
                    Choose the specialty that suits your needs and explore our doctors’ expertise along with the
                    latest advanced medical technologies.
                </p>

            </div>




            <div class="tabs">


                <div class="tab-container">
                    <div class="tab-buttons">
                        <button class="active" data-tab="all-doctors">All Doctors</button>
                        @foreach ($department as $dept)
                        <button data-tab="tab-{{ $dept->id }}">
                            {{ $dept->department_en }}
                        </button>
                        @endforeach
                    </div>
                </div>





                <!-- Tab Content -->
                <div id="all-doctors" class="tab-content active">
                    <div class="card-dr">

                        @foreach ($doctors as $doctor)
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{asset('images').'/'.$doctor->image}}" alt="{{ $doctor->name_ar }}" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">{{ $doctor->name_en }}</h3>
                                        <p class="doctor-specialty">{{ $doctor->department_name }}</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach

                    </div>
                </div>

                @foreach ($department as $dept)
                <div id="tab-{{ $dept->id }}" class="tab-content">
                    <div class="card-dr">
                        @foreach ($doctors->where('dept_id', $dept->id) as $doctor)
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('images').'/'.$doctor->image }}" alt="{{ $doctor->name_ar }}" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">{{ $doctor->name_en }}</h3>
                                        <p class="doctor-specialty">
                                            {{ $doctor->department_name }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        @endforeach

                        @if ($doctors->where('dept_id', $dept->id)->count() == 0)
                        <p class="text-center">لا يوجد أطباء في هذا القسم حالياً</p>
                        @endif
                    </div>
                    <section id="section-{{ $dept->id }}" class="section topz">
                        <div class="ent-department">
                            <div class="ent-card">
                                <div class="ent-header">
                                    <h2>{{ $dept->department_en }}</h2>
                                    <p>
                                        {{!! $dept->department_details !!}}
                                    </p>

                                    <section class="department-gallery">
                                        <div class="gallery-grid">
                                            <div class="gallery-img img1">
                                                <img src="{{ asset('images').'/'.$dept->image }}"
                                                    alt="{{ $dept->department_ar }}">
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <div class="ent-body">
                                    <h3>الخدمات المقدمة</h3>
                                    <ul class="ent-services">
                                        <p>{!! $dept->content_ar !!}</p>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
                @endforeach
            </div>

        </div>

    </div>
    </div>
</section>

<section class="cta-section">
    <div class="cta-container">
        <h2 class="cta-title">Contact Us</h2>
        <h3 class="cta-subtitle">
            Don’t wait any longer, your health and beauty are in safe hands.
        </h3>

        <div class="cta-actions">
            <a href="tel:+966138955555" class="cta-phone">
                <i class="fas fa-phone"></i> +966 13 895 5555
            </a>

            <a href="https://wa.me/966138955555" target="_blank" class="cta-whatsapp">
                <i class="fab fa-whatsapp"></i> Book Your Consultation Now
            </a>
        </div>
    </div>
</section>
@endsection