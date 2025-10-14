@extends('frontend_v2.layouts.FrontendLayout')
@section('content')

<style>
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



<section class="hero services-section " style="margin-top: 80px !important;">
    <div class="hero-bg hero-bg-1"></div>
    <div class="hero-bg hero-bg-2"></div>
    <div class="overlay"></div>

    <div class="hero-content">
        <h1 class="hero-title anima" data-aos="fade-zoom-in">
            {{ __('home.hero_title') }}
        </h1>

        <h5 class="hed_maindes">
            {{ __('home.hero_subtitle') }}
        </h5>


        <div class="hero-actions">
            <div class="appointment-button-container">
                <a href="tel:0550655152">
                    <button class="appointment-button">
                        <span class="appointment-text">{{ __('home.appointment') }}</span>
                        <div class="doctor-icon-container">
                            <img src="{{ asset('frontend_v2/assets/Icons/Arrow.png') }}" alt="{{ __('imagealt.arrow') }}" />
                        </div>
                    </button>
                </a>
            </div>


        </div>
    </div>
</section>

<section class="services-section services-section">
    <div class="services-grid">
        <div class="services-header fade-in">
            <img src="{{ asset('frontend_v2/assets/Icons/istock-doc.png') }}" alt="{{ __('imagealt.doctor') }}" class="services-image" />
            <h2 class="services-title">{{ __('home.service_title') }}</h2>
            <div class="section-divider-vertical"></div>
        </div>

        <!-- Insurance -->
        <article class="service-card fade-in">
            <div class="service-logo-container">
                <img src="{{ asset('frontend_v2/assets/Icons/Mask.png') }}" alt="{{ __('imagealt.logo') }}" />
            </div>
            <div class="service-icon-container">
                <img src="{{ asset('frontend_v2/assets/Icons/Insurance.png') }}" alt="{{ __('imagealt.insurance') }}" />
            </div>
            <div class="service-info">
                <h3 class="service-category">{{ __('home.insurance') }}</h3>
                <p class="service-description">{{ __('home.insurance_desc') }}</p>
                <div class="learn-more-link">
                    <div class="learn-more-arrow">
                        <img src="{{ asset('frontend_v2/assets/Icons/arrow-down.png') }}" alt="{{ __('imagealt.arrow') }}" />
                    </div>
                    <span class="learn-more-text">{{ __('home.learn_more') }}</span>
                </div>
            </div>
        </article>

        <!-- Doctors -->
        <article class="service-card">
            <div class="service-logo-container">
                <img src="{{ asset('frontend_v2/assets/Icons/Mask.png') }}" alt="{{ __('imagealt.logo') }}" />
            </div>
            <div class="service-icon-container">
                <img src="{{ asset('frontend_v2/assets/Icons/Doctors.png') }}" alt="{{ __('imagealt.doctor_icon') }}" />
            </div>
            <div class="service-info">
                <h3 class="service-category">{{ __('home.our_doctors') }}</h3>
                <p class="service-description">{{ __('home.our_doctors_desc') }}</p>
                <div class="learn-more-link">
                    <div class="learn-more-arrow">
                        <img src="{{ asset('frontend_v2/assets/Icons/arrow-down.png') }}" alt="{{ __('imagealt.arrow') }}" />
                    </div>
                    <span class="learn-more-text">{{ __('home.learn_more') }}</span>
                </div>
            </div>
        </article>

        <!-- Specialities -->
        <article class="service-card">
            <div class="service-logo-container">
                <img src="{{ asset('frontend_v2/assets/Icons/Mask.png') }}" alt="{{ __('imagealt.logo') }}" />
            </div>
            <div class="service-icon-container">
                <img src="{{ asset('frontend_v2/assets/Icons/Specialities.png') }}" alt="{{ __('imagealt.specialities') }}" />
            </div>
            <div class="service-info">
                <h3 class="service-category">{{ __('home.our_specialities') }}</h3>
                <p class="service-description">{{ __('home.our_specialities_desc') }}</p>
                <div class="learn-more-link">
                    <div class="learn-more-arrow">
                        <img src="{{ asset('frontend_v2/assets/Icons/arrow-down.png') }}" alt="{{ __('imagealt.arrow') }}" />
                    </div>
                    <span class="learn-more-text">{{ __('home.learn_more') }}</span>
                </div>
            </div>
        </article>
    </div>

    <div class="section-divider"></div>
</section>


<div class="section  anima" data-aos="fade-zoom-in">
    <div class="section-container">
        <!-- Left Section -->
        <div class="left-section">
            <div class="left-image">
                <img src="{{ asset('frontend_v2/assets/images/image6.jpg') }}" alt="{{ __('imagealt.doctor') }}" />
            </div>

            <div class="badge-emergency" style="left: 90px !important;">{{ __('home.emergency') }}</div>

            <div class="satisfied-patients">
                <div class="{{ app()->getLocale() == 'ar' ? 'avatarsz' : 'avatars' }}">
                    <img src="{{ asset('frontend_v2/assets/images/p1.jpg') }}" alt="{{ __('imagealt.avatar') }}" />
                    <img src="{{ asset('frontend_v2/assets/images/p2.jpg') }}" alt="{{ __('imagealt.avatar') }}" />
                    <img src="{{ asset('frontend_v2/assets/images/p3.jpg') }}" alt="{{ __('imagealt.avatar') }}" />
                    <img src="{{ asset('frontend_v2/assets/images/p4.jpg') }}" alt="{{ __('imagealt.avatar') }}" />
                </div>
                <div class="text">
                    <span class="count">{{ __('home.count') }}</span><br />
                    <span class="label">{{ __('home.label') }}</span>
                </div>
            </div>
        </div>

        <!-- Right Section -->
        <div class="right-content">
            <h2 class="main-headline">
                <span class="headline-part">{{ __('home.emergency_right') }}</span>
                <span class="headline-emphasis">{{ __('home.emergency_right_emp') }}</span>
            </h2>
            <div class="feature-columns">
                <div class="column">
                    <div>
                        <h4>{{ __('home.feature1') }}</h4>
                        <p>
                            {{ __('home.feature1_desc') }}
                        </p>
                    </div>
                    <div>
                        <h4>{{ __('home.feature2') }}</h4>
                        <p>
                            {{ __('home.feature2_desc') }}
                        </p>
                    </div>
                </div>

                <div class="vertical-divider">
                    <img src="{{ asset('frontend_v2/assets/images/Heart.png') }}" alt="{{ __('imagealt.heart') }}" />
                </div>

                <div class="column">
                    <div>
                        <h4>{{ __('home.feature3') }}</h4>
                        <p>
                            {{ __('home.feature3_desc') }}
                        </p>
                    </div>
                    <div>
                        <h4>{{ __('home.feature4') }}</h4>
                        <p>
                            {{ __('home.feature4_desc') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="services-gridz">
        <div class="card light">
            <div class="card-content">
                <h3>{{ __('home.card1') }}</h3>
                <p>{{ __('home.card1_desc') }}</p>
            </div>
            <img src="{{ asset('frontend_v2/assets/images/ii1.png') }}" alt="{{ __('imagealt.doctor') }}" class="card-image" />
            <div class="card-button light-btn">
                <img src="{{ asset('frontend_v2/assets/Icons/Arrow3.png') }}" alt="{{ __('imagealt.arrow') }}" />
            </div>
        </div>

        <div class="card dark">
            <div class="card-content">
                <h3>{{ __('home.card2') }}</h3>
                <p>{{ __('home.card2_desc') }}</p>
            </div>
            <img src="{{ asset('frontend_v2/assets/images/ii2.png') }}" alt="{{ __('imagealt.confirmed_appointment') }}" class="card-image" />
            <div class="card-button light-btn">
                <img src="{{ asset('frontend_v2/assets/Icons/Arrow4.png') }}" alt="{{ __('imagealt.arrow') }}" />
            </div>
        </div>

        <div class="card light">
            <div class="card-content">
                <h3>{{ __('home.card3') }}</h3>
                <p>{{ __('home.card3_desc') }}</p>
            </div>
            <img src="{{ asset('frontend_v2/assets/images/ii3.jpg') }}" alt="{{ __('imagealt.medication_delivery') }}" class="card-image" />
            <div class="card-button light-btn">
                <img src="{{ asset('frontend_v2/assets/Icons/Arrow3.png') }}" alt="{{ __('imagealt.arrow') }}" />
            </div>
        </div>

        <div class="card dark">
            <div class="card-content">
                <h3>{{ __('home.card4') }}</h3>
                <p>{{ __('home.card4_desc') }}</p>
            </div>
            <img src="{{ asset('frontend_v2/assets/images/ii4.png') }}" alt="{{ __('imagealt.video_consultation') }}" class="card-image" />
            <div class="card-button light-btn">
                <img src="{{ asset('frontend_v2/assets/Icons/Arrow4.png') }}" alt="{{ __('imagealt.arrow') }}" />
            </div>
        </div>

        <div class="card light">
            <div class="card-content">
                <h3>{{ __('home.card5') }}</h3>
                <p>{{ __('home.card5_desc') }}</p>
            </div>
            <img src="{{ asset('frontend_v2/assets/images/ii5.jpg') }}" alt="{{ __('imagealt.lab_test') }}" class="card-image" />
            <div class="card-button light-btn">
                <img src=" {{ asset('frontend_v2/assets/Icons/Arrow3.png') }}" alt="{{ __('imagealt.arrow') }}" />
            </div>
        </div>
    </div>

</div>


<section class="section sectionz sectionzz anima" data-aos="fade-zoom-in">
    <div class="medical-facility-showcase showcasez">
        <div class="showcase-container">
            <div class="content-wrapper">
                <main class="main-content main-contentz">
                    <div class="content-header">
                        <h1 class="brand-title">
                            <span class="brand-name">{{ __('home.brand_name') }}</span>
                            <span class="brand-tagline">{{ __('home.brand_tagline') }}</span>
                        </h1>
                        <h2 class="main-headline">
                            <span class="headline-part">{{ __('home.headline') }}</span>
                            <span class="headline-emphasis">{{ __('home.headline_emp') }}</span>
                        </h2>
                        <p class="facility-description">
                            {{ __('home.description') }}
                        </p>
                    </div>
                    <div class="features-grid">
                        <article class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="{{ __('imagealt.arrow_up') }}" />
                            </div>
                            <h3 class="feature-title">
                                {{ __('home.feature_title1') }}
                            </h3>
                        </article>
                        <article class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="{{ __('imagealt.arrow_up') }}" />
                            </div>
                            <h3 class="feature-title">{{ __('home.feature_title2') }}</h3>
                        </article>
                        <article class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="{{ __('imagealt.arrow_up') }}" />
                            </div>
                            <h3 class="feature-title">
                                {{ __('home.feature_title3') }}
                            </h3>
                        </article>
                        <article class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="{{ __('imagealt.arrow_up') }}" />
                            </div>
                            <h3 class="feature-title">{{ __('home.feature_title4') }}</h3>
                        </article>
                    </div>
                </main>
                <aside class="hero-image-section">
                    <div class="hero-image-container">
                        <div class="hero-image" style="
                  background-image: url('frontend_v2/assets/Icons/Union.png');
                  background-size: cover;
                  background-position: center;
                " role="img" aria-label="{{ __('imagealt.medical_facility') }}"></div>
                        <div class="experience-badge" style="right: unset;">
                            <div class="badge-content">
                                <div class="badge-text">
                                    <span class="years-number">{{ __('home.year_no') }}</span>
                                    <br />
                                    <span class="years-label">{{ __('home.year') }}</span>
                                    <br />
                                    <span class="experience-label">{{ __('home.experience') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
        <section class="awards-section">
            <div class="awards-container">
                <div class="award-item">
                    <img src="{{ asset('frontend_v2/assets/Icons/award.png') }}" alt="{{ __('imagealt.award') }}" class="award-image" />
                    <div class="award-text">
                        <h3>{{ __('home.award_title1') }}</h3>
                        <p>{{ __('home.no1') }}</p>
                    </div>
                </div>
                <div class="award-item">
                    <img src="{{ asset('frontend_v2/assets/Icons/award.png') }}" alt="{{ __('imagealt.award') }}" class="award-image" />
                    <div class="award-text">
                        <h3>{{ __('home.award_title2') }}</h3>
                        <p>{{ __('home.no2') }}</p>
                    </div>
                </div>
                <div class="award-item">
                    <img src="{{ asset('frontend_v2/assets/Icons/award.png') }}" alt="{{ __('imagealt.award') }}" class="award-image" />
                    <div class="award-text">
                        <h3>
                            {{ __('home.award_title3_1') }} <br />
                            {{ __('home.award_title3_2') }}
                        </h3>
                        <p class="">{{ __('home.no3') }}</p>
                    </div>
                </div>
                <div class="award-item">
                    <img src="{{ asset('frontend_v2/assets/Icons/award.png') }}" alt="{{ __('imagealt.award') }}" class="award-image" />
                    <div class="award-text">
                        <h3>{{ __('home.award_title4') }}</h3>
                        <p>{{ __('home.no4') }}</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<section class="section topz  anima" data-aos="fade-zoom-in">
    <div class="team-section">
        <div class="team-container">
            <div class="team-header">
                <h2 class="section-title">{{ __('home.team_card_title') }}</h2>
                <div class="header-content" style="align-items: center; gap: 2px">
                    <h2 class="main-headline">
                        <span class="headline-part">{{ __('home.team_card_head') }}</span>
                        <span class="headline-emphasis">DRK</span>
                    </h2>

                    <div>
                        <div class="satisfied-patients" style="position: unset; box-shadow: unset">
                            <div class="{{ app()->getLocale() == 'ar' ? 'avatarsz' : 'avatars' }}">
                                <img src="{{ asset('frontend_v2/assets/images/ds1.png') }}" alt="{{ __('imagealt.photo') }}" />
                                <img src="{{ asset('frontend_v2/assets/images/ds2.png') }}" alt="{{ __('imagealt.photo') }}" />
                                <img src="{{ asset('frontend_v2/assets/images/ds3.png') }}" alt="{{ __('imagealt.photo') }}" />
                                <img src="{{ asset('frontend_v2/assets/images/ds4.png') }}" alt="{{ __('imagealt.photo') }}" />
                                <img src="{{ asset('frontend_v2/assets/images/ds5.png') }}" alt="{{ __('imagealt.photo') }}" />
                            </div>
                            <div class="text">
                                <span class="count">+50</span><br />
                                <span class="label">{{ __('home.team_card_label') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="team-description">
                    {{ __('home.team_card_desc') }}
                </p>

            </div>

            <main class="team-content">
                <div class="doctors-grid">
                    @foreach ($doctors as $item)
                    <article class="doctor-card">
                        <div class="card-background"></div>
                        <div class="card-watermark"></div>
                        <div>
                            <img src="{{asset('images').'/'.$item->image}}" alt="{{ $item->name_ar }}" class="doctor-image" />
                            <div class="doctor-info">
                                <div class="doctor-details">
                                    <h3 class="doctor-name">{{ app()->getLocale() === 'ar' ? $item->name_ar : $item->name_en }}</h3>
                                    <p class="doctor-specialty">{{ app()->getLocale() === 'ar' ? $item->department_ar : $item->department_en }}</p>
                                </div>
                            </div>
                        </div>
                    </article>
                    @endforeach
                </div>
                <a href="{{ route('services') }}" style="text-decoration: none;">
                    <div class="view-all-section">
                        <button class="view-all-button" type="button">
                            <span class="view-all-text">{{ __('home.team_card_btn') }}</span>
                        </button>
                        <div>
                            <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-linestr.png') }}" alt="{{ __('imagealt.arrow') }}" />
                        </div>
                    </div>
                </a>
            </main>
        </div>
    </div>
</section>

<section class="section sectionzz  anima" data-aos="fade-zoom-in">
    <div class="departments-section">
        <div class="departments-container">
            <div class="departments-content">
                <div class="departments-header" @if(app()->getLocale() === 'ar') style="left: 0 !important; right: 60px !important;" @endif>
                    <h2 class="departments-label">{{ __('home.department_title') }}</h2>
                    <h2 class="main-headline">
                        <span class="headline-emphasis">{{ __('home.department_subtitle') }}</span>
                        <span class="headline-part">{{ __('home.department_subtitle1') }}</span>
                    </h2>

                </div>
                <a href="{{ route('services') }}">
                    <div class="departments-scroll-container">
                        <div class="departments-grid">
                            @foreach($department as $row)
                            <article class="department-card">
                                <div class="department-image-container">
                                    <img class="department-image"
                                        src="{{ asset('images').'/'.$row->image}}" alt="{{ app()->getLocale() === 'ar' ? $row->department_ar : $row->department_en }}"></img>
                                    <div class="department-icon">
                                        <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="{{ __('imagealt.arrow') }}" />
                                    </div>
                                </div>
                                <h3 class="department-name">{{ app()->getLocale() === 'ar' ? $row->department_ar : $row->department_en }}</h3>
                                <p class="department-description">
                                    {{ \Illuminate\Support\Str::limit(strip_tags(html_entity_decode($row->department_details)), 40) }}
                                </p>
                            </article>
                            @endforeach
                        </div>
                    </div>
                </a>
                <div class="appointment-cta">
                    <div class="appointment-content">
                        <div class="appointment-textz">
                            <h2 class="appointment-title">{{ __('home.appointment_title') }}</h2>
                            <p class="appointment-description">
                                {{ __('home.appointment_description') }}
                            </p>

                        </div>
                        <div class="appointment-button-container">
                            <a href="tel:0550655152">
                                <button class="appointment-buttonz">
                                    <span class="appointment-textb">{{ __('home.appointment_btn') }}</span>
                                    <div class="doctor-icon-container"><img src="{{ asset('frontend_v2/assets/Icons/Arrow.png') }}" alt="{{ __('imagealt.arrow') }}" />
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="section topz anima" data-aos="fade-zoom-in">
    <div class="partners-section">
        <div class="partners-header">
            <h2 class="main-headline">
                <span class="headline-part">{{ __('home.partners_head') }}</span>
                <span class="headline-emphasis">{{ __('home.partners_head_emp') }}</span>
            </h2>

            <p>
                {{ __('home.partners_head_desc') }} <br>
                {{ __('home.partners_head_desc1') }} <br>
                {{ __('home.partners_head_desc2') }}
            </p>

        </div>

        <div class="partners-logos-grid">
            @foreach ($partner as $item)
            <img src="{{asset('images').'/'.$item->image}}" alt="{{ app()->getLocale() === 'ar' ? $item->partner_ar : $item->partner_en }}" />
            @endforeach

        </div>
    </div>
    <div class="partners-section" style="margin-bottom: 0px !important;">
        <div class="partners-header">
            <h2 class="main-headline">
                <span class="headline-emphasis">{{ __('home.insurance_head') }}</span>
                <span class="headline-part">{{ __('home.insurance_head_emp') }}</span>
            </h2>
            <p>
                {{ __('home.insurance_head_desc') }}<br>
                {{ __('home.insurance_head_desc1') }}
            </p>


        </div>

        <div class="partners-logos-gridzz">
            @foreach ($insurance as $item)
            <img src="{{asset('images').'/'.$item->image}}" alt="{{ app()->getLocale() === 'ar' ? $item->insurance_ar : $item->insurance_en }}" />
            @endforeach
        </div>
    </div>
</section>

<section id="blog" class="section sectionzz">
    <div class="medical-facility-showcase">
        <div class="showcase-container" style="align-items: flex-start">
            <div class="blog-header  anima" data-aos="fade-zoom-in">
                <h2 class="blog-category">{{ __('home.blog_section') }}</h2>
                <h2 class="main-headline">
                    <span class="headline-part">{{ __('home.blog_section_head') }}</span>
                    <span class="headline-emphasis">{{ __('home.blog_section_head1') }}</span>
                    <span class="headline-part">{{ __('home.blog_section_head2') }}</span>
                </h2>
                <p class="blog-description">
                    {{ __('home.blog_section_desc') }} <br>
                    {{ __('home.blog_section_desc1') }} <br>
                    {{ __('home.blog_section_desc2') }}
                </p>

            </div>



            <div class="blog-grid  anima" data-aos="fade-zoom-in">
                @foreach ($article as $item)
                <article class="blog-card  {{ count($article) === 1 ? 'single-blog' : '' }}">
                    <img src="{{asset('images').'/'.$item->image}}" alt="{{ app()->getLocale() === 'ar' ? $item->title_ar : $item->title_en }}" class="blog-image" />
                    <div class="blog-content">
                        <div class="blog-card-header">
                            <h3 class="blog-card-title">
                                {{ app()->getLocale() === 'ar' ? $item->title_ar : $item->title_en }}
                            </h3>
                            @php
                            $date = $item->created_at->locale(app()->getLocale())->translatedFormat('d F Y');
                            if (app()->getLocale() === 'ar') {
                            $western = ['0','1','2','3','4','5','6','7','8','9'];
                            $eastern = ['٠','١','٢','٣','٤','٥','٦','٧','٨','٩'];
                            $date = str_replace($western, $eastern, $date);
                            }
                            @endphp
                            <time class="blog-date" datetime="{{ $item->created_at->format('Y-m-d') }}">
                                {{ $date }}
                            </time>
                        </div>
                        <div class="blog-card-body">
                            <p class="blog-excerpt">
                                @if (app()->getLocale() == 'ar')
                                {{ \Illuminate\Support\Str::limit(strip_tags(html_entity_decode($item->article_ar)), 60) }}
                                @else
                                {{ \Illuminate\Support\Str::limit(strip_tags(html_entity_decode($item->article_en)), 60) }}
                                @endif
                            </p>
                            <a href="{{route('articleDetails', ['surl' => $item->slug])}}" class="blog-link">
                                <span class="link-text">{{ __('home.blog_btn') }}</span>
                                <img src="{{ asset('frontend_v2/assets/Icons/smallarrow.png') }}" alt="{{ __('imagealt.arrow') }}" class="link-arrow" />
                            </a>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="section sectionz sectionzz tonbotz" style="padding: 40px 0px">
    <div class="partners-section" style="text-align: start">
        <div class="faq-container anima" data-aos="fade-zoom-in">
            <div class="faq-header">
                <div class="header-content">
                    <p class="section-label">{{ __('home.faq_title') }}</p>

                    <h2 class="main-headline">
                        <span class="headline-part">{{ __('home.faq_frequent') }}</span>
                        <span class="headline-emphasis">(FAQ)</span>
                    </h2>

                    <p class="description">
                        {{ __('home.faq_desc') }} <br>
                        <a href="https://wa.me/966138955555" style="font-weight: bold;color: #000;">
                            {{ __('home.faq_desc1') }}
                        </a>
                    </p>
                </div>
                <a href="https://youtu.be/X98A7h1uX94?si=m0Rlrlk-hFv36az9">
                    <video class="header-video" src="{{ asset('frontend_v2/assets/video/v1.mp4') }}" autoplay muted loop playsinline></video>
                </a>
            </div>

            <div class="faq-list">
                <article class="faq-item expanded" data-faq="1">
                    <div class="faq-question">
                        <h3 class="question-text">{{ __('home.faq_q1') }}</h3>
                        <button class="toggle-button" aria-expanded="true" aria-controls="answer-1">
                            <img class="close-icon" src="{{ asset('frontend_v2/assets/Icons/Vector1.png') }}" alt="{{ __('imagealt.close') }}" />
                            <img class="plus-icon" src="{{ asset('frontend_v2/assets/Icons/Vector.png') }}" alt="{{ __('imagealt.add') }}" />
                        </button>
                    </div>
                    <div class="faq-answer" id="answer-1">
                        <p class="answer-text">
                            {{ __('home.faq_a1') }}
                        </p>
                    </div>
                </article>

                <article class="faq-item" data-faq="2">
                    <div class="faq-question">
                        <h3 class="question-text">{{ __('home.faq_q2') }}</h3>
                        <button class="toggle-button" aria-expanded="false" aria-controls="answer-2">
                            <img class="close-icon" src="{{ asset('frontend_v2/assets/Icons/Vector1.png') }}" alt="{{ __('imagealt.close') }}" />
                            <img class="plus-icon" src="{{ asset('frontend_v2/assets/Icons/Vector.png') }}" alt="{{ __('imagealt.add') }}" />
                        </button>
                    </div>
                    <div class="faq-answer" id="answer-2">
                        <p class="answer-text">
                            {{ __('home.faq_a2') }}
                        </p>
                    </div>
                </article>

                <article class="faq-item" data-faq="3">
                    <div class="faq-question">
                        <h3 class="question-text">{{ __('home.faq_q3') }}</h3>
                        <button class="toggle-button" aria-expanded="false" aria-controls="answer-3">
                            <img class="close-icon" src="{{ asset('frontend_v2/assets/Icons/Vector1.png') }}" alt="{{ __('imagealt.close') }}" />
                            <img class="plus-icon" src="{{ asset('frontend_v2/assets/Icons/Vector.png') }}" alt="{{ __('imagealt.add') }}" />
                        </button>
                    </div>
                    <div class="faq-answer" id="answer-3">
                        <p class="answer-text">
                            {{ __('home.faq_a3') }}
                        </p>
                    </div>
                </article>

                <article class="faq-item" data-faq="4">
                    <div class="faq-question">
                        <h3 class="question-text">{{ __('home.faq_q4') }}</h3>
                        <button class="toggle-button" aria-expanded="false" aria-controls="answer-4">
                            <img class="close-icon" src="{{ asset('frontend_v2/assets/Icons/Vector1.png') }}" alt="{{ __('imagealt.close') }}" />
                            <img class="plus-icon" src="{{ asset('frontend_v2/assets/Icons/Vector.png') }}" alt="{{ __('imagealt.add') }}" />
                        </button>
                    </div>
                    <div class="faq-answer" id="answer-4">
                        <p class="answer-text">
                            {{ __('home.faq_a4') }}
                        </p>
                    </div>
                </article>

                <article class="faq-item" data-faq="5">
                    <div class="faq-question">
                        <h3 class="question-text">{{ __('home.faq_q5') }}</h3>
                        <button class="toggle-button" aria-expanded="false" aria-controls="answer-5">
                            <img class="close-icon" src="{{ asset('frontend_v2/assets/Icons/Vector1.png') }}" alt="{{ __('imagealt.close') }}" />
                            <img class="plus-icon" src="{{ asset('frontend_v2/assets/Icons/Vector.png') }}" alt="{{ __('imagealt.add') }}" />
                        </button>
                    </div>
                    <div class="faq-answer" id="answer-5">
                        <p class="answer-text">
                            {{ __('home.faq_a5') }}
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>



<section class="section sectionzz">
    <div class="medical-facility-showcase">
        <div class="testimonials-container">
            <div class="testimonials-header anima" data-aos="fade-zoom-in">
                <p class="section-label" style="margin-bottom: 25px">
                    {{ __('home.testimonial_title') }}
                </p>
                <h2 class="main-headline">
                    <span class="headline-emphasis">{{ __('home.testimonial_head') }}</span>
                    <span class="headline-part">{{ __('home.testimonial_head_emp') }}</span>
                </h2>
                <p class="section-description">
                    {{ __('home.testimonial_desc') }}
                </p>
            </div>

            <div class="testimonials-grid anima" data-aos="fade-zoom-in">
                <article class="testimonial-card">
                    <div class="card-content">
                        <div class="card-header">
                            <div class="card-header-content">
                                <div class="quote-icon">
                                    <img src="{{ asset('frontend_v2/assets/Icons/xdot1.png') }}" alt="{{ __('imagealt.quote') }}" class="quote-image" />
                                </div>
                                <div class="rating-container">
                                    <span class="rating-score">5.0</span>
                                    <img src="{{ asset('frontend_v2/assets/Icons/star.png') }}" alt="{{ __('imagealt.star') }}" class="rating-stars" />
                                </div>
                            </div>
                            <blockquote class="testimonial-text">
                                {{ __('home.testimonial_quote') }}
                            </blockquote>
                        </div>
                        <div class="card-divider"></div>
                        <div class="customer-info">
                            <h3 class="customer-name">{{ __('home.testimonial_customer') }}</h3>
                            <p class="customer-location">{{ __('home.testimonial_customer_loc') }}</p>
                        </div>
                    </div>
                </article>

                <article class="testimonial-card">
                    <div class="card-content">
                        <div class="card-header">
                            <div class="card-header-content">
                                <div class="quote-icon">
                                    <img src="{{ asset('frontend_v2/assets/Icons/xdot1.png') }}" alt="{{ __('imagealt.quote') }}" class="quote-image" />
                                </div>
                                <div class="rating-container">
                                    <span class="rating-score">5.0</span>
                                    <img src="{{ asset('frontend_v2/assets/Icons/star.png') }}" alt="{{ __('imagealt.star') }}" class="rating-stars" />
                                </div>
                            </div>
                            <blockquote class="testimonial-text">
                                {{ __('home.testimonial_quote1') }}
                            </blockquote>
                        </div>
                        <div class="card-divider"></div>
                        <div class="customer-info">
                            <h3 class="customer-name">{{ __('home.testimonial_customer1') }}</h3>
                            <p class="customer-location">{{ __('home.testimonial_customer_loc1') }}</p>
                        </div>
                    </div>
                </article>

                <article class="testimonial-card">
                    <div class="card-content">
                        <div class="card-header">
                            <div class="card-header-content">
                                <div class="quote-icon">
                                    <img src="{{ asset('frontend_v2/assets/Icons/xdot1.png') }}" alt="{{ __('imagealt.quote') }}" class="quote-image" />
                                </div>
                                <div class="rating-container">
                                    <span class="rating-score">5.0</span>
                                    <img src="{{ asset('frontend_v2/assets/Icons/star.png') }}" alt="{{ __('imagealt.star') }}" class="rating-stars" />
                                </div>
                            </div>
                            <blockquote class="testimonial-text">
                                {{ __('home.testimonial_quote2') }}
                            </blockquote>
                        </div>
                        <div class="card-divider"></div>
                        <div class="customer-info">
                            <h3 class="customer-name">{{ __('home.testimonial_customer2') }}</h3>
                            <p class="customer-location">{{ __('home.testimonial_customer_loc2') }}</p>
                        </div>
                    </div>
                </article>

                <article class="testimonial-card">
                    <div class="card-content">
                        <div class="card-header">
                            <div class="card-header-content">
                                <div class="quote-icon">
                                    <img src="{{ asset('frontend_v2/assets/Icons/xdot1.png') }}" alt="{{ __('imagealt.quote') }}" class="quote-image" />
                                </div>
                                <div class="rating-container">
                                    <span class="rating-score">5.0</span>
                                    <img src="{{ asset('frontend_v2/assets/Icons/star.png') }}" alt="{{ __('imagealt.star') }}" class="rating-stars" />
                                </div>
                            </div>
                            <blockquote class="testimonial-text">
                                {{ __('home.testimonial_quote3') }}
                            </blockquote>
                        </div>
                        <div class="card-divider"></div>
                        <div class="customer-info">
                            <h3 class="customer-name">{{ __('home.testimonial_customer3') }}</h3>
                            <p class="customer-location">{{ __('home.testimonial_customer_loc3') }}</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script src="{{ asset('frontend_v2/js/homeScript.js') }}" defer></script>
@endpush