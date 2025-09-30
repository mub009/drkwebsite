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
      /* box-shadow: 0 0 10px rgba(0,0,0,0.1); */
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

  <section class="section " style="margin-top: 150px;margin-bottom: 0px;">
    <div class="team-section">
      <div class="team-container">
        <div class="team-header ">

          <h1 class="hero-title" style="text-align: center;">
            <span class="headline-emphasis">About Dr. Khaled Al Ruhaimi Hospital</span>
          </h1>

          <p class="hed_des">
            Learn about our mission, expert doctors & advanced medical care. Discover why patients trust us and book
            your visit today.
          </p>
        </div>


      </div>
    </div>
  </section>


  <section class="section sectionz sectionzz ">
    <div class="medical-facility-showcase showcasez" style="padding-bottom: 0px !important;padding-top: 80px;">
      <div class="showcase-container">
        <div class="content-wrapper">
          <main class="main-content main-contentz">
            <div class="content-header">
              <h1 class="brand-title">
                <span class="brand-name">DRK</span>
                <span class="brand-tagline">: A Legacy Of Vision</span>
              </h1>
              <h2 class="main-headline">
                <span class="headline-part">Our Vision</span>

              </h2>
              <p class="facility-description">
                To be the leading choice in Saudi Arabia for cosmetic and plastic surgery, delivering comprehensive
                services that balance both medical excellence and aesthetic care.
              </p>
            </div>
            <div class="features-grid">
              <article class="feature-item">
                <div class="feature-icon">
                  <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="" />
                </div>
                <h3 class="feature-title">
                  Medical Safety First: We adhere to international standards to ensure the safety of every patient.
                </h3>
              </article>
              <article class="feature-item">
                <div class="feature-icon">
                  <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="" />
                </div>
                <h3 class="feature-title">Natural Beauty: Our focus is on achieving natural, balanced results.</h3>
              </article>
              <article class="feature-item">
                <div class="feature-icon">
                  <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="" />
                </div>
                <h3 class="feature-title">
                  Expertise & Professionalism: Our medical team combines years of knowledge with hands-on experience.
                </h3>
              </article>
              <article class="feature-item">
                <div class="feature-icon">
                  <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="" />
                </div>
                <h3 class="feature-title">Privacy & Comfort: We provide a secure, discreet environment that respects our
                  clients’ confidentiality.</h3>
              </article>
            </div>
          </main>
          <aside class="hero-image-section">
            <div class="hero-image-container">
              <div class="hero-image" style="
                    background-image: url('/frontend_v2/assets/Icons/Union12.png');
                    background-size: cover;
                    background-position: center;
                  " role="img" aria-label="Medical facility interior"></div>
              <div class="experience-badge">
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
  <section class="section sectionz sectionzz " style="margin-top: 50px !important;">
    <div class="medical-facility-showcase showcasez" style="padding-bottom: 0px !important;">
      <div class="showcase-container">
        <div class="content-wrapper">

          <aside class="hero-image-section">
            <div class="hero-image-container">
              <div class="hero-image" style="
                    background-image: url('/frontend_v2/assets/Icons/Union13.png');
                    background-size: cover;
                    background-position: center;
                  " role="img" aria-label="Medical facility interior"></div>
              <div class="experience-badge">
                <div class="badge-content">
                  <div class="badge-text">
                    <span class="years-number">20+</span>
                    <br />
                    <span class="years-label">YEARS OF</span>
                    <br />
                    <span class="experience-label">EXPERIENCE</span>
                  </div>
                </div>
              </div>
            </div>
          </aside>
          <main class="main-content main-contentz">
            <div class="content-header">
              <h1 class="brand-title">
                <span class="brand-name">DRK</span>
                <span class="brand-tagline">: A Legacy Of Experts</span>
              </h1>
              <h2 class="main-headline">
                <span class="headline-part">Our Experts</span>

              </h2>
              <p class="facility-description">
                Our hospital brings together a distinguished team of doctors and surgeons specialized in various
                aesthetic fields, including:
              </p>
            </div>
            <div class="features-grid">
              <article class="feature-item">
                <div class="feature-icon">
                  <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="" />
                </div>
                <h3 class="feature-title">
                  Cosmetic Surgery: Rhinoplasty, facelifts, and body contouring.
                </h3>
              </article>
              <article class="feature-item">
                <div class="feature-icon">
                  <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="" />
                </div>
                <h3 class="feature-title">Aesthetic Injections: Botox, fillers, and PRP.</h3>
              </article>
              <article class="feature-item">
                <div class="feature-icon">
                  <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="" />
                </div>
                <h3 class="feature-title">
                  Skin & Hair Care: Laser treatments, brightening and cleansing sessions, and advanced hair loss
                  solutions.
                </h3>
              </article>

            </div>
          </main>

        </div>

      </div>
      <section class="awards-section">
        <div class="awards-container">
          <div class="award-item">
            <img src="{{ asset('frontend_v2/assets/Icons/award.png') }}" alt="Award Icon" class="award-image" />
            <div class="award-text">
              <h3>Radi’s references</h3>
              <p>1,300,000 +</p>
            </div>
          </div>
          <div class="award-item">
            <img src="{{ asset('frontend_v2/assets/Icons/award.png') }}" alt="Award Icon" class="award-image" />
            <div class="award-text">
              <h3>Doctor at your service</h3>
              <p>60 +</p>
            </div>
          </div>
          <div class="award-item">
            <img src="{{ asset('frontend_v2/assets/Icons/award.png') }}" alt="Award Icon" class="award-image" />
            <div class="award-text">
              <h3>
                Branches in the Kingdom <br />
                of Saudi Arabia
              </h3>
              <p>8</p>
            </div>
          </div>
          <div class="award-item">
            <img src="{{ asset('frontend_v2/assets/Icons/award.png') }}" alt="Award Icon" class="award-image" />
            <div class="award-text">
              <h3>Years of experience</h3>
              <p>20 +</p>
            </div>
          </div>
        </div>
      </section>
    </div>
  </section>

  <section class="cta-section">
    <div class="cta-container">
      <h2 class="cta-title">Contact Us</h2>
      <h3 class="cta-subtitle">
        Have a question about one of these articles or want to know which service is right for you?

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