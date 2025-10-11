@extends('frontend_v2.layouts.FrontendLayout')
@section('content')

<style>
  .sectionzs {
    width: 100%;
    text-align: center;
  }

  .sectionzs img {
    max-width: 75%;
    height: auto;
    border-radius: 10px;
  }

  @media (min-width: 300px) and (max-width: 500px) {
    .sectionzs img {
      max-width: 100% !important;
    }

    .showcasez {
      padding-top: 20px !important;
    }
  }

  .medical-facility-showcase {
    background-color: unset !important;
  }
</style>

<section class="section" style="margin-top: 150px; margin-bottom: 0px;">
  <div class="team-section">
    <div class="team-container">
      <h1 class="hero-title" style="text-align: center;">
        <span class="headline-emphasis">{{ __('about.headline') }}</span>
      </h1>

      <p class="hed_des" style="text-align: center;">
        {{ __('about.description') }}
      </p>

    </div>
  </div>
</section>

<section class="section sectionz sectionzz" style="margin-top: 100px !important;">
  <div class="medical-facility-showcase showcasez" style="padding-bottom: 0px !important;">
    <div class="showcase-container">
      <div class="content-wrapper">
        <main class="main-content main-contentz">
          <div class="content-header">
            <h1 class="brand-title">
              <span class="brand-name">DRK</span>
              <span class="brand-tagline">{{ __('about.tagline') }}</span>
            </h1>
            <h2 class="main-headline">
              <span class="headline-part"></span>
            </h2>
            <p class="facility-description">
              {{ __('about.vision_desc') }}
            </p>
          </div>
          <div class="features-grid">
            <article class="feature-item">
              <div class="feature-icon">
                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="{{ __('imagealt.arrow_up') }}" />
              </div>
              <h3 class="feature-title">
                {{ __('about.feature_title') }}
              </h3>
            </article>
            <article class="feature-item">
              <div class="feature-icon">
                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="{{ __('imagealt.arrow_up') }}" />
              </div>
              <h3 class="feature-title">
                {{ __('about.feature_title2') }}
              </h3>
            </article>
            <article class="feature-item">
              <div class="feature-icon">
                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="{{ __('imagealt.arrow_up') }}" />
              </div>
              <h3 class="feature-title">
                {{ __('about.feature_title3') }}
              </h3>
            </article>
            <article class="feature-item">
              <div class="feature-icon">
                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="{{ __('imagealt.arrow_up') }}" />
              </div>
              <h3 class="feature-title">
                {{ __('about.feature_title4') }}
              </h3>
            </article>
          </div>
        </main>
        <aside class="hero-image-section">
          <div class="hero-image-container">
            <div class="hero-image" style="
              background-image: url('frontend_v2/assets/Icons/Union12.png');
              background-size: cover;
              background-position: center;
            " role="img" aria-label="{{ __('imagealt.medical_facility') }}"></div>
            <div class="experience-badge" style="right: unset;">
              <div class="badge-content">
                <div class="badge-text">
                  <span class="years-label" style="font-size: 40px;">DRK</span>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
</section>

<section class="section sectionz sectionzz" style="margin-top: 50px !important;">
  <div class="medical-facility-showcase showcasez" style="padding-bottom: 0px !important;">
    <div class="showcase-container">
      <div class="content-wrapper">
        <aside class="hero-image-section">
          <div class="hero-image-container">
            <div class="hero-image" style="
              background-image: url('/frontend_v2/assets/Icons/Union13.png');
              background-size: cover;
              background-position: center;
            " role="img" aria-label="{{ __('imagealt.medical_facility') }}"></div>
            <div class="experience-badge" style="right: unset;">
              <div class="badge-content">
                <div class="badge-text">
                  <span class="years-number">{{ __('about.year_no') }}</span>
                  <br />
                  <span class="years-label">{{ __('about.year') }}</span>
                  <br />
                  <span class="experience-label">{{ __('about.experience') }}</span>
                </div>
              </div>
            </div>
          </div>
        </aside>
        <main class="main-content main-contentz">
          <div class="content-header">
            <h1 class="brand-title">
              <span class="brand-name">DRK</span>
              <span class="brand-tagline">{{ __('about.tagline2') }}</span>
            </h1>
            <h2 class="main-headline">
              <span class="headline-part">{{ __('about.experts') }}</span>
            </h2>
            <p class="facility-description">
              {{ __('about.experts_desc') }}
            </p>
          </div>
          <div class="features-grid">
            <article class="feature-item">
              <div class="feature-icon">
                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="{{ __('imagealt.arrow_up') }}" />
              </div>
              <h3 class="feature-title">
                {{ __('about.expert_title') }}
              </h3>
            </article>
            <article class="feature-item">
              <div class="feature-icon">
                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="{{ __('imagealt.arrow_up') }}" />
              </div>
              <h3 class="feature-title">
                {{ __('about.expert_title1') }}
              </h3>
            </article>
            <article class="feature-item">
              <div class="feature-icon">
                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="{{ __('imagealt.arrow_up') }}" />
              </div>
              <h3 class="feature-title">
                {{ __('about.expert_title2') }}
              </h3>
            </article>
          </div>
        </main>
      </div>
    </div>

    <section class="awards-section">
      <div class="awards-container">
        <div class="award-item">
          <img src="{{ asset('frontend_v2/assets/Icons/award.png') }}" alt="{{ __('imagealt.award') }}" class="award-image" />
          <div class="award-text">
            <h3>{{ __('about.award_title1') }}</h3>
            <p>{{ __('about.no1') }}</p>
          </div>
        </div>
        <div class="award-item">
          <img src="{{ asset('frontend_v2/assets/Icons/award.png') }}" alt="{{ __('imagealt.award') }}" class="award-image" />
          <div class="award-text">
            <h3>{{ __('about.award_title2') }} <br />
              <p>{{ __('about.no2') }}</p>
          </div>
        </div>
        <div class="award-item">
          <img src="{{ asset('frontend_v2/assets/Icons/award.png') }}" alt="{{ __('imagealt.award') }}" class="award-image" />
          <div class="award-text">
            <h3>
              {{ __('home.award_title3_1') }} <br />
              {{ __('home.award_title3_2') }}
            </h3>
            <p>{{ __('about.no3') }}</p>
          </div>
        </div>
        <div class="award-item">
          <img src="{{ asset('frontend_v2/assets/Icons/award.png') }}" alt="{{ __('imagealt.award') }}" class="award-image" />
          <div class="award-text">
            <h3>{{ __('about.award_title4') }}</h3>
            <p>{{ __('about.no4') }}</p>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>

<section class="cta-section">
  <div class="cta-container">
    <h2 class="cta-title">{{ __('about.cta_title') }}</h2>
    <h3 class="cta-subtitle">
      {{ __('about.cta_subtitle') }}
    </h3>
    <div class="cta-actions">
      <a href="tel:+966138955555" class="cta-phone">
        <i class="fas fa-phone"></i> {{ __('about.number') }}
      </a>
      <a href="https://wa.me/966138955555" target="_blank" class="cta-whatsapp">
        <i class="fab fa-whatsapp"></i> {{ __('about.btn_book') }} </a>
    </div>
  </div>
</section>

@endsection