<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="{{ asset('frontend_v2/assets/logos/Logo2.png') }}">
  <title>عن مستشفى الدكتور خالد الرهيمي – الرعاية الطبية المتقدمة</title>
  <meta name="description"
    content="تعرّف على رسالة مستشفى الدكتور خالد الرهيمي، وأطبائنا الخبراء، ورعايتنا الطبية المتقدمة. اكتشف لماذا يثق بنا المرضى واحجز زيارتك اليوم." />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Kufi+Arabic:wght@100..900&family=Noto+Sans+Canadian+Aboriginal:wght@100..900&family=TikTok+Sans:opsz,wght@12..36,300..900&display=swap"
    rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet" />
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="/css/style.css" />
  <link rel="stylesheet" href="/css/stylesub.css" />
  <script defer src="/js/script.js"></script>
  <script defer src="/js/scriptsub.js"> </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Tajawal&display=swap" rel="stylesheet">
</head>

<body>
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
  <a href="https://wa.me/966138955555" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
    <img src="{{ asset('frontend_v2/assets/logos/WhatsApp.svg.webp') }}" alt="WhatsApp Chat" width="48" height="48">
  </a>





  <header class="site-header">
    <div class="header-container">
      <img src="{{ asset('frontend_v2/assets/Icons/logo.png') }}" alt="شعار المستشفى" class="hospital-logo" />

      <div id="overlay" class="overlayz"></div>

      <nav class="main-nav2" id="mainNav2" dir="rtl">
        <button id="closeButton" class="close-buttonzz close-buttonzzl">×</button>
        <div>
          <div class="language-selector respo-lag" onclick="toggleLanguage()">
            <div class="language-slider"></div>
            <span class="language-option">EN</span>
            <span class="language-option">AR</span>
          </div>

          <a href="/index.html" class="nav-link2"> <span class="spanz">01. </span> الرئيسية</a>
          <a href="/servicesar.html" class="nav-link2"><span class="spanz">02. </span> الخدمات</a>
          <a href="/blogar.html" class="nav-link2"> <span class="spanz">03. </span> المدونة</a>
          <a href="/aboutar.html" class="nav-link2"> <span class="spanz">04. </span>معلومات عنا</a>
          <a href="/contactar.html" class="nav-link2"><span class="spanz">05. </span> اتصل بنا</a>


          <div class="footer-line2"></div>
          <div class="footer-tail-end">
            <div>© ٢٠٢٥ مستشفى الدكتور خالد الرحيمي. جميع الحقوق محفوظة.</div>
          </div>
        </div>
      </nav>

      <nav class="main-navigation" role="navigation" aria-label="التنقل الرئيسي" dir="rtl">
        <a href="/index.html" class="nav-link">الرئيسية</a>
        <a href="/servicesar.html" class="nav-link">الخدمات</a>
        <a href="/blogar.html" class="nav-link">المدونة</a>
        <a href="/aboutar.html" class="nav-link">معلومات عنا</a>
        <a href="/contactar.html" class="nav-link">اتصل بنا</a>
      </nav>



      <div class="header-actions">
        <div class="language-selector lnon" onclick="toggleLanguage()">
          <div class="language-slider"></div>
          <span class="language-option">EN</span>
          <span class="language-option">AR</span>
        </div>


        <a href="tel:0550655152">
          <button class="book-now-button bnon" dir="rtl">
            <span class="book">احجز الآن</span>
            <img src="{{ asset('frontend_v2/assets/Icons/Arrow2.png') }}" alt="سهم" />
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
                  <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="" />
                </div>
                <h3 class="feature-title">
                  السلامة الطبية أولاً: نلتزم بالمعايير الدولية لضمان سلامة كل مريض.
                </h3>
              </article>
              <article class="feature-item">
                <div class="feature-icon">
                  <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="" />
                </div>
                <h3 class="feature-title">
                  الجمال الطبيعي: نركز على تحقيق نتائج طبيعية ومتوازنة.
                </h3>
              </article>
              <article class="feature-item">
                <div class="feature-icon">
                  <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="" />
                </div>
                <h3 class="feature-title">
                  الخبرة والاحترافية: يجمع فريقنا الطبي بين سنوات المعرفة والخبرة العملية.
                </h3>
              </article>
              <article class="feature-item">
                <div class="feature-icon">
                  <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="" />
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
                  <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="" />
                </div>
                <h3 class="feature-title">
                  الجراحة التجميلية: تجميل الأنف، شد الوجه، ونحت الجسم.
                </h3>
              </article>
              <article class="feature-item">
                <div class="feature-icon">
                  <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="" />
                </div>
                <h3 class="feature-title">
                  الحقن التجميلية: البوتوكس، الفيلرز، وعلاجات PRP.
                </h3>
              </article>
              <article class="feature-item">
                <div class="feature-icon">
                  <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="" />
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



  







</body>

</html>