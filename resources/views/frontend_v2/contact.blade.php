@extends('frontend_v2.layouts.FrontendLayout')
@section('content')

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

    input,
    textarea {
        padding: 14px 14px;
        border: unset !important;
        border-radius: 6px;
        font-weight: 600;
        font-size: 14px;
        background-color: #9690a214;
    }

    textarea {
        resize: vertical;
        min-height: 150px;
    }





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

@endsection