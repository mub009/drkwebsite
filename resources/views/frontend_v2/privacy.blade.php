@extends('frontend_v2.layouts.FrontendLayout')
@section('content')

<style>
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

<footer class="hospital-footer" style="margin-bottom: 20px; margin-top: 120px;">
  <!-- محتوى الفوتر -->

  <section class="privacy-policy">
    <div class="privacy-container">
      <h1 class="privacy-title">{{ __('privacy.title') }}</h1>

      <p>
        {{ __('privacy.description')}}
      </p>

      <h3>{{ __('privacy.1') }}</h3>
      <ul>
        <li>{!! __('privacy.1_1') !!}</li>
        <li>{!! __('privacy.1_2') !!}</li>
        <li>{!! __('privacy.1_3') !!}</li>
      </ul>

      <h3>{{ __('privacy.2') }}</h3>
      <ul>
        <li>{{ __('privacy.2_1') }}</li>
        <li>{{ __('privacy.2_2') }}</li>
        <li>{{ __('privacy.2_3') }}</li>
        <li>{{ __('privacy.2_4') }}</li>
      </ul>

      <h3>{{ __('privacy.3') }}</h3>
      <ul>
        <li>{{ __('privacy.3_1') }}</li>
        <li>{{ __('privacy.3_2') }}</li>
        <li>{{ __('privacy.3_3') }}</li>
      </ul>

      <h3>{{ __('privacy.4') }}</h3>
      <ul>
        <li>{{ __('privacy.4_1') }}</li>
        <li>{{ __('privacy.4_2') }}</li>
      </ul>

      <h3>{{ __('privacy.5') }}</h3>
      <ul>
        <li>{{ __('privacy.5_1') }}</li>
        <li>{{ __('privacy.5_2') }}</li>
      </ul>

      <h3>{{ __('privacy.6') }}</h3>
      <ul>
        <li>{{ __('privacy.6_1') }}</li>
        <li>{{ __('privacy.6_2') }}</li>
        <li>{{ __('privacy.6_3') }}</li>
      </ul>

      <h3>{{ __('privacy.7') }}</h3>
      <p>
        {{ __('privacy.7_1') }}
      </p>

      <h3>{{ __('privacy.8') }}</h3>
      <p>
        {{ __('privacy.8_1') }}
      </p>
    </div>
  </section>
</footer>

@endsection