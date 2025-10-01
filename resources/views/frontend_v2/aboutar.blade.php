@extends('frontend_v2.layouts.FrontendLayout')
@section('content')

<style>
  body {
    font-family: 'Tajawal', sans-serif;
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

  .showcasez {
    padding-top: 20px !important;
  }

  .sectionzs {
    width: 100%;
    text-align: center;
  }

  .sectionzs img {
    max-width: 75%;
    height: auto;
    border-radius: 10px;
    /* box-shadow: 0 0 10px rgba(0,0,0,0.1); */
  }

  @media (min-width: 300px) and (max-width: 500px) {
    .sectionzs img {
      max-width: 100% !important;
    }
  }

  .medical-facility-showcase {
    background-color: unset !important;
  }
</style>

<section class="section" style="margin-top: 150px; margin-bottom: 0px;" dir="rtl">
  <div class="team-section">
    <div class="team-container">
      <h1 class="hero-title" style="text-align: center; direction: rtl;">
        <span class="headline-emphasis">عن مستشفى الدكتور خالد الرهيمي</span>
      </h1>

      <p class="hed_des" style="direction: rtl; text-align: center;">
        تعرّف على رسالتنا، وأطبائنا الخبراء، ورعايتنا الطبية المتقدمة. اكتشف لماذا يثق بنا المرضى واحجز زيارتك اليوم.
      </p>

    </div>
  </div>
</section>

<section class="section sectionz sectionzz" style="margin-top: 100px !important;" dir="rtl">
  <div class="medical-facility-showcase showcasez" style="padding-bottom: 0px !important;">
    <div class="showcase-container">
      <div class="content-wrapper">
        <main class="main-content main-contentz">
          <div class="content-header">
            <h1 class="brand-title">
              <span class="brand-name">DRK</span>
              <span class="brand-tagline">: إرث من الرؤية</span>
            </h1>
            <h2 class="main-headline">
              <span class="headline-part">رؤيتنا</span>
            </h2>
            <p class="facility-description">
              أن نكون الخيار الرائد في المملكة العربية السعودية لجراحة التجميل والجراحة التجميلية، مع تقديم خدمات
              شاملة تجمع بين التميز الطبي والعناية الجمالية.
            </p>
          </div>
          <div class="features-grid">
            <article class="feature-item">
              <div class="feature-icon">
                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="رمز السهم لأعلى" />
              </div>
              <h3 class="feature-title">
                السلامة الطبية أولاً: نلتزم بالمعايير الدولية لضمان سلامة كل مريض.
              </h3>
            </article>
            <article class="feature-item">
              <div class="feature-icon">
                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="رمز السهم لأعلى" />
              </div>
              <h3 class="feature-title">
                الجمال الطبيعي: نركز على تحقيق نتائج طبيعية ومتوازنة.
              </h3>
            </article>
            <article class="feature-item">
              <div class="feature-icon">
                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="رمز السهم لأعلى" />
              </div>
              <h3 class="feature-title">
                الخبرة والاحترافية: يجمع فريقنا الطبي بين سنوات المعرفة والخبرة العملية.
              </h3>
            </article>
            <article class="feature-item">
              <div class="feature-icon">
                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="رمز السهم لأعلى" />
              </div>
              <h3 class="feature-title">
                الخصوصية والراحة: نوفر بيئة آمنة وسرية تحترم خصوصية عملائنا.
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
            " role="img" aria-label="المنشأة الطبية"></div>
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

<section class="section sectionz sectionzz" style="margin-top: 50px !important;" dir="rtl">
  <div class="medical-facility-showcase showcasez" style="padding-bottom: 0px !important;">
    <div class="showcase-container">
      <div class="content-wrapper">
        <aside class="hero-image-section">
          <div class="hero-image-container">
            <div class="hero-image" style="
              background-image: url('/frontend_v2/assets/Icons/Union13.png');
              background-size: cover;
              background-position: center;
            " role="img" aria-label="المنشأة الطبية"></div>
            <div class="experience-badge" style="right: unset;">
              <div class="badge-content">
                <div class="badge-text">
                  <span class="years-number">20+</span>
                  <br />
                  <span class="years-label">سنة من</span>
                  <br />
                  <span class="experience-label">الخبرة</span>
                </div>
              </div>
            </div>
          </div>
        </aside>
        <main class="main-content main-contentz">
          <div class="content-header">
            <h1 class="brand-title">
              <span class="brand-name">DRK</span>
              <span class="brand-tagline">: إرث الخبراء</span>
            </h1>
            <h2 class="main-headline">
              <span class="headline-part">خبراؤنا</span>
            </h2>
            <p class="facility-description">
              يجمع مستشفانا فريقًا متميزًا من الأطباء والجراحين المتخصصين في مجالات التجميل المختلفة، بما في ذلك:
            </p>
          </div>
          <div class="features-grid">
            <article class="feature-item">
              <div class="feature-icon">
                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="رمز السهم لأعلى" />
              </div>
              <h3 class="feature-title">
                الجراحة التجميلية: تجميل الأنف، شد الوجه، ونحت الجسم.
              </h3>
            </article>
            <article class="feature-item">
              <div class="feature-icon">
                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="رمز السهم لأعلى" />
              </div>
              <h3 class="feature-title">
                الحقن التجميلية: البوتوكس، الفيلرز، وعلاجات PRP.
              </h3>
            </article>
            <article class="feature-item">
              <div class="feature-icon">
                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="رمز السهم لأعلى" />
              </div>
              <h3 class="feature-title">
                العناية بالبشرة والشعر: علاجات الليزر، جلسات التفتيح والتنظيف، وحلول متقدمة لعلاج تساقط الشعر.
              </h3>
            </article>
          </div>
        </main>
      </div>
    </div>

    <section class="awards-section" dir="rtl">
      <div class="awards-container">
        <div class="award-item">
          <img src="{{ asset('frontend_v2/assets/Icons/award.png') }}" alt="رمز الجائزة" class="award-image" />
          <div class="award-text">
            <h3>مراجع رادي</h3>
            <p>1,300,000 +</p>
          </div>
        </div>
        <div class="award-item">
          <img src="{{ asset('frontend_v2/assets/Icons/award.png') }}" alt="رمز الجائزة" class="award-image" />
          <div class="award-text">
            <h3>أطباء في خدمتك</h3>
            <p>60 +</p>
          </div>
        </div>
        <div class="award-item">
          <img src="{{ asset('frontend_v2/assets/Icons/award.png') }}" alt="رمز الجائزة" class="award-image" />
          <div class="award-text">
            <h3>فروع في المملكة العربية السعودية</h3>
            <p>8</p>
          </div>
        </div>
        <div class="award-item">
          <img src="{{ asset('frontend_v2/assets/Icons/award.png') }}" alt="رمز الجائزة" class="award-image" />
          <div class="award-text">
            <h3>سنوات الخبرة</h3>
            <p>20 +</p>
          </div>
        </div>
      </div>
    </section>
  </div>
</section>

<section class="cta-section" dir="rtl">
  <div class="cta-container">
    <h2 class="cta-title">اتصل بنا</h2>
    <h3 class="cta-subtitle">
      هل لديك سؤال حول إحدى هذه المقالات أو تريد معرفة الخدمة الأنسب لك؟
    </h3>
    <div class="cta-actions">
      <a href="tel:+966138955555" class="cta-phone">
        <i class="fas fa-phone"></i> +966 13 895 5555
      </a>
      <a href="https://wa.me/966138955555" target="_blank" class="cta-whatsapp">
        <i class="fab fa-whatsapp"></i> احجز استشارتك الآن
      </a>
    </div>
  </div>
</section>

@endsection