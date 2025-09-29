<!DOCTYPE html>
<html lang="en">

<head>
 
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="{{ asset('frontend_v2/assets/logos/Logo2.png') }}" />
  <title>Dr. Khaled Al Ruhaimi Hospital – Advanced Care</title>
  <meta name="description"
    content="Get top medical, surgical & cosmetic care with trusted doctors and modern technology. Book your appointment today." />

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Noto+Kufi+Arabic:wght@100..900&family=Noto+Sans+Canadian+Aboriginal:wght@100..900&family=TikTok+Sans:opsz,wght@12..36,300..900&display=swap"
    rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet" />
  <link href="https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="{{ asset('frontend_v2/css/style.css') }}" />
  <link rel="stylesheet" href="{{ asset('frontend_v2/css/stylesub.css') }}" />
  <script defer src="{{ asset('frontend_v2/js/script.js') }}"></script>
  <script defer src="{{ asset('frontend_v2/js/scriptsub.js') }}"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
</head>

<body>
  <a href="https://wa.me/966138955555" class="whatsapp-float" target="_blank" aria-label="Chat on WhatsApp">
    <img src="{{ asset('frontend_v2/assets/logos/WhatsApp.svg.webp') }}" alt="WhatsApp Chat" width="48" height="48" />
  </a>


<style>
  .loader:before {
  content: "Dr. Khaled Al Ruhaimi Hospital..."; /* Or "Loading" */
}
</style>





  <div class="loader-screen">
    <div class="loader"></div>
  </div>


  <header class="site-header">
    <div class="header-container">
      <img src="{{ asset('frontend_v2/assets/Icons/logo.png') }}" alt="Hospital Logo" class="hospital-logo" />

      <div id="overlay" class="overlayz"></div>

      <nav class="main-nav2" id="mainNav2">
        <button id="closeButton" class="close-buttonzz">×</button>
        <div>
          <div class="language-selector respo-lag" onclick="toggleLanguage()">
            <div class="language-slider"></div>
            <span class="language-option">EN</span>
            <span class="language-option">AR</span>
          </div>


          <a href="/services.html" class="nav-link2"><span class="spanz">01. </span>Services</a>
          <a href="/blog.html" class="nav-link2"><span class="spanz">02. </span> Blog</a>
          <a href="/about.html" class="nav-link2"><span class="spanz">03. </span>About Us</a>
          <a href="/contact.html" class="nav-link2"><span class="spanz">04. </span>Contact Us</a>

          <div class="footer-line2"></div>
          <div class="footer-tail-end">
            <div>
              © 2025 Dr. Khalid Al-Ruhaimi Hospital. All rights reserved.
            </div>
          </div>
        </div>
      </nav>

      <nav class="main-navigation" role="navigation" aria-label="Main navigation">
        <a href="/services.html" class="nav-link">Services</a>
        <a href="/blog.html" class="nav-link">Blog</a>
        <a href="/about.html" class="nav-link">About Us</a>
        <a href="/contact.html" class="nav-link">Contact Us</a>
      </nav>

      <div class="header-actions">
        <div class="language-selector lnon" onclick="toggleLanguage()">
          <div class="language-slider"></div>
          <span class="language-option">EN</span>
          <span class="language-option">AR</span>
        </div>
        <a href="tel:0550655152">
          <button class="book-now-button bnon">
            <span class="book">Book Now</span>
            <img src="{{ asset('frontend_v2/assets/Icons/Arrow2.png') }}" alt="Arrow Icon" />
          </button>
        </a>
        <div class="menu-button w-nav-button" id="menuButton">
          <div class="menu-flex">
            <div class="menu">
              <div class="w-embed"></div>
            </div>
          </div>
        </div>
      </div>
    </div>




  </header>

  <section class="hero services-section" style="margin-top: 80px !important">
    <div class="hero-bg hero-bg-1"></div>
    <div class="hero-bg hero-bg-2"></div>
    <div class="overlay"></div>

    <div class="hero-content">
      <h1 class="hero-title anima" data-aos="fade-zoom-in">
        Dr. Khaled Al Ruhaimi Hospital – Advanced Care
      </h1>
      <h5 class="hed_maindes">Get top medical, surgical & cosmetic care with trusted doctors and modern technology. Book
        your appointment today.</h5>
      <div class="hero-actions">
        <div class="appointment-button-container">
          <a href="tel:0550655152">
            <button class="appointment-button">
              <span class="appointment-text">Contact US</span>
              <div class="doctor-icon-container">
                <img src="{{ asset('frontend_v2/assets/Icons/Arrow.png') }}" alt="" />
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
        <img src="{{ asset('frontend_v2/assets/Icons/istock-doc.png') }}" alt="Medical professional" class="services-image" />
        <h2 class="services-title">What We Do For You</h2>
        <div class="section-divider-vertical"></div>
      </div>

      <!-- Insurance -->
      <article class="service-card fade-in">
        <div class="service-logo-container">
          <img src="{{ asset('frontend_v2/assets/Icons/Mask.png') }}" alt="Hospital logo" />
        </div>
        <div class="service-icon-container">
          <img src="{{ asset('frontend_v2/assets/Icons/Insurance.png') }}" alt="Insurance Icon" />
        </div>
        <div class="service-info">
          <h3 class="service-category">INSURANCES</h3>
          <p class="service-description">Our Insurance Partners</p>
          <div class="learn-more-link">
            <div class="learn-more-arrow">
              <img src="{{ asset('frontend_v2/assets/Icons/arrow-down.png') }}" alt="" />
            </div>
            <span class="learn-more-text">Learn More</span>
          </div>
        </div>
      </article>

      <!-- Doctors -->
      <article class="service-card">
        <div class="service-logo-container">
          <img src="{{ asset('frontend_v2/assets/Icons/Mask.png') }}" alt="Hospital logo" />
        </div>
        <div class="service-icon-container">
          <img src="{{ asset('frontend_v2/assets/Icons/Doctors.png') }}" alt="Doctors Icon" />
        </div>
        <div class="service-info">
          <h3 class="service-category">OUR DOCTORS</h3>
          <p class="service-description">Our Distinguished Physicians</p>
          <div class="learn-more-link">
            <div class="learn-more-arrow">
              <img src="{{ asset('frontend_v2/assets/Icons/arrow-down.png') }}" alt="" />
            </div>
            <span class="learn-more-text">Learn More</span>
          </div>
        </div>
      </article>

      <!-- Specialities -->
      <article class="service-card">
        <div class="service-logo-container">
          <img src="{{ asset('frontend_v2/assets/Icons/Mask.png') }}" alt="Hospital logo" />
        </div>
        <div class="service-icon-container">
          <img src="{{ asset('frontend_v2/assets/Icons/Specialities.png') }}" alt="Specialities Icon" />
        </div>
        <div class="service-info">
          <h3 class="service-category">OUR SPECIALITIES</h3>
          <p class="service-description">Multidisciplinary Services</p>
          <div class="learn-more-link">
            <div class="learn-more-arrow">
              <img src="{{ asset('frontend_v2/assets/Icons/arrow-down.png') }}" alt="" />
            </div>
            <span class="learn-more-text">Learn More</span>
          </div>
        </div>
      </article>
    </div>

    <div class="section-divider"></div>
  </section>

  <div class="section anima" data-aos="fade-zoom-in">
    <div class="section-container">
      <!-- Left Section -->
      <div class="left-section">
        <div class="left-image">
          <img src="{{ asset('frontend_v2/assets/images/image6.jpg') }}" alt="Doctor" />
        </div>

        <div class="badge-emergency">24/7 Emergency Support</div>

        <div class="satisfied-patients">
          <div class="avatars">
            <img src="{{ asset('frontend_v2/assets/images/p1.jpg') }}" alt="Avatar 1" />
            <img src="{{ asset('frontend_v2/assets/images/p2.jpg') }}" alt="Avatar 2" />
            <img src="{{ asset('frontend_v2/assets/images/p3.jpg') }}" alt="Avatar 3" />
            <img src="{{ asset('frontend_v2/assets/images/p4.jpg') }}" alt="Avatar 4" />
          </div>
          <div class="text">
            <span class="count">150k+</span><br />
            <span class="label">Satisfied Patients</span>
          </div>
        </div>
      </div>

      <!-- Right Section -->
      <div class="right-content">
        <h2 class="main-headline">
          <span class="headline-part">Your Health is Our Priority, and Your Care is
          </span>
          <span class="headline-emphasis">Our Responsibility.</span>
        </h2>
        <div class="feature-columns">
          <div class="column">
            <div>
              <h4>Comprehensive Facilities</h4>
              <p>
                Our facilities are equipped with the latest medical devices imported from leading global companies,
                ensuring accurate diagnostics and comfort at every stage of your treatment.
              </p>
            </div>
            <div>
              <h4>Elite Experts</h4>
              <p>
                Our team includes top-level doctors, consultants, and nursing staff with international experience and
                professional standards.
              </p>
            </div>
          </div>

          <div class="vertical-divider">
            <img src="{{ asset('frontend_v2/assets/images/Heart.png') }}" alt="Heart" />
          </div>

          <div class="column">
            <div>
              <h4>Saudi Standards with Global Excellence</h4>
              <p>
                We are committed to delivering healthcare services that meet the highest international specifications
                while aligning with trusted Saudi standards.
              </p>
            </div>
            <div>
              <h4>Care Beyond Expectations</h4>
              <p>
                We pay attention to every detail of your treatment journey from consultation to follow-up—offering you a
                distinguished medical experience that reflects the best global practices.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="services-gridz">
      <div class="card light">
        <div class="card-content">
          <h3>Easily Find Trusted Doctors</h3>
          <p>Book an appointment with top specialists in just a few simple steps.</p>
        </div>
        <img src="{{ asset('frontend_v2/assets/images/ii1.png') }}" alt="Doctor" class="card-image" />
        <div class="card-button light-btn">
          <img src="{{ asset('frontend_v2/assets/Icons/Arrow3.png') }}" alt="" />
        </div>
      </div>

      <div class="card dark">
        <div class="card-content">
          <h3>Confirmed Appointments Without Delay</h3>
          <p>Your consultation is guaranteed with instant booking and quick confirmation.</p>
        </div>
        <img src="{{ asset('frontend_v2/assets/images/ii2.png') }}" alt="Confirmed Appointments" class="card-image" />
        <div class="card-button light-btn">
          <img src="{{ asset('frontend_v2/assets/Icons/Arrow4.png') }}" alt="" />
        </div>
      </div>

      <div class="card light">
        <div class="card-content">
          <h3>24/7 Medicine Delivery.</h3>
          <p>Get your essential medications delivered to your doorstep anytime, safely and securely.</p>
        </div>
        <img src="{{ asset('frontend_v2/assets/images/ii3.jpg') }}" alt="Medicine Delivery" class="card-image" />
        <div class="card-button light-btn">
          <img src="{{ asset('frontend_v2/assets/Icons/Arrow3.png') }}" alt="" />
        </div>
      </div>

      <div class="card dark">
        <div class="card-content">
          <h3>Instant Video Consultations.</h3>
          <p> Connect with your doctor in less than a minute – safe, fast, and convenient.</p>
        </div>
        <img src="{{ asset('frontend_v2/assets/images/ii4.png') }}" alt="Video Consultation" class="card-image" />
        <div class="card-button light-btn">
          <img src="{{ asset('frontend_v2/assets/Icons/Arrow4.png') }}" alt="" />
        </div>
      </div>

      <div class="card light">
        <div class="card-content">
          <h3>At-Home Sample Collection</h3>
          <p>Get your lab tests done easily and comfortably from your home.</p>
        </div>
        <img src="{{ asset('frontend_v2/assets/images/ii5.jpg') }}" alt="Lab Test" class="card-image" />
        <div class="card-button light-btn">
          <img src="{{ asset('frontend_v2/assets/Icons/Arrow3.png') }}" alt="" />
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
                <span class="brand-name">Globally</span>
                <span class="brand-tagline"> Trusted Healthcare</span>
              </h1>
              <h2 class="main-headline">
                <span class="headline-part">Dr. Khalid Al-Ruhaimi Hospital</span>
                <span class="headline-emphasis"> – World-Class Medical Care</span>
              </h2>
              <p class="facility-description">
                We believe exceptional care begins with exceptional people. That’s why we combine the latest medical
                technologies with highly skilled consultants and specialists to provide patient-centered care,
                blending clinical excellence with genuine compassion.
              </p>
            </div>
            <div class="features-grid">
              <article class="feature-item">
                <div class="feature-icon">
                  <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="" />
                </div>
                <h3 class="feature-title">
                  Internationally certified doctors and consultants
                </h3>
              </article>
              <article class="feature-item">
                <div class="feature-icon">
                  <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="" />
                </div>
                <h3 class="feature-title">Advanced medical technologies and equipment</h3>
              </article>
              <article class="feature-item">
                <div class="feature-icon">
                  <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="" />
                </div>
                <h3 class="feature-title">
                  High-quality, cost-effective care
                </h3>
              </article>
              <article class="feature-item">
                <div class="feature-icon">
                  <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="" />
                </div>
                <h3 class="feature-title">Acceptance of all major insurance providers</h3>
              </article>
            </div>
          </main>
          <aside class="hero-image-section">
            <div class="hero-image-container">
              <div class="hero-image" style="
                    background-image: url('/frontend_v2/assets/Icons/Union.png');
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

  <section class="section topz">
    <div class="team-section">
      <div class="team-container">
        <div class="team-header anima" data-aos="fade-zoom-in">
          <h2 class="section-title">Meet The Team</h2>
          <div class="header-content" style="align-items: center; gap: 2px">
            <h2 class="main-headline">
              <span class="headline-part">Meet Our Specialist Physicians @</span>
              <span class="headline-emphasis">DRK</span>
            </h2>
            <div>
              <div class="satisfied-patients" style="position: unset; box-shadow: unset">
                <div class="avatars">
                  <img src="{{ asset('frontend_v2/assets/images/ds1.png') }}" alt="Avatar 1" />
                  <img src="{{ asset('frontend_v2/assets/images/ds2.png') }}" alt="Avatar 2" />
                  <img src="{{ asset('frontend_v2/assets/images/ds3.png') }}" alt="Avatar 3" />
                  <img src="{{ asset('frontend_v2/assets/images/ds4.png') }}" alt="Avatar 4" />
                  <img src="{{ asset('frontend_v2/assets/images/ds5.png') }}" alt="Avatar 5" />
                </div>
                <div class="text">
                  <span class="count">50+</span><br />
                  <span class="label">Skilled Doctor</span>
                </div>
              </div>
            </div>
          </div>
          <p class="team-description">
            Our medical team combines over 20 years of experience with the latest advances in medical technology. The
            hospital is home to a distinguished group of internationally certified consultants and specialists,
            dedicated to addressing the root cause of illness and enhancing every patient’s health and well-being.
          </p>
        </div>

        <main class="team-content">
          <div class="doctors-grid anima" data-aos="fade-zoom-in">
            <a href="Profile.html">
              <article class="doctor-card">
                <div class="card-background"></div>
                <div class="card-watermark">DRK</div>
                <div>
                  <img src="{{ asset('frontend_v2/assets/images/d1.png') }}" alt="Dr. Khaled Al-Rahimi" class="doctor-image" />
                  <div class="doctor-info">
                    <div class="doctor-details">
                      <h3 class="doctor-name">Dr. Khaled Al-Rahimi</h3>
                      <p class="doctor-specialty">
                        Reconstructive, plastic and burn surgery
                      </p>
                    </div>
                  </div>
                </div>
              </article>
            </a>

            <article class="doctor-card">
              <div class="card-background"></div>
              <div class="card-watermark">DRK</div>
              <div>
                <img src="{{ asset('frontend_v2/assets/images/d12.png') }}" alt="Dr. Fatima Al-Badr" class="doctor-image" />
                <div class="doctor-info">
                  <div class="doctor-details">
                    <h3 class="doctor-name">Dr. Fatima Al-Badr</h3>
                    <p class="doctor-specialty">Dermatology</p>
                  </div>
                </div>
              </div>
            </article>

            <article class="doctor-card">
              <div class="card-background"></div>
              <div class="card-watermark">DRK</div>
              <div>
                <img src="{{ asset('frontend_v2/assets/images/d31.png') }}" alt="Dr. Rosa Garcia" class="doctor-image" />
                <div class="doctor-info">
                  <div class="doctor-details">
                    <h3 class="doctor-name">Dr. Rosa Garcia</h3>
                    <p class="doctor-specialty">
                      Oral and maxillofacial surgery
                    </p>
                  </div>
                </div>
              </div>
            </article>

            <article class="doctor-card">
              <div class="card-background"></div>
              <div class="card-watermark">DRK</div>
              <div>
                <img src="{{ asset('frontend_v2/assets/images/d41.png') }}" alt="Dr. Othman Ali" class="doctor-image" />
                <div class="doctor-info">
                  <div class="doctor-details">
                    <h3 class="doctor-name">Dr. Othman Ali</h3>
                    <p class="doctor-specialty">
                      Reconstructive, plastic and burn surgery
                    </p>
                  </div>
                </div>
              </div>
            </article>
          </div>

          <a href="/doctors.html" style="text-decoration: none">
            <div class="view-all-section">
              <button class="view-all-button" type="button">
                <span class="view-all-text">See Our All Doctors</span>
              </button>
              <div>
                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-linestr.png') }}" alt="" />
              </div>
            </div>
          </a>
        </main>
      </div>
    </div>
  </section>

  <section class="section sectionzz anima" data-aos="fade-zoom-in">
    <div class="departments-section">
      <div class="departments-container">
        <div class="departments-content">
          <div class="departments-header">
            <h2 class="departments-label">Our Departments</h2>
            <h2 class="main-headline">
              <span class="headline-emphasis">Our specialized</span>
              <span class="headline-part"> and diverse medical departments</span>
            </h2>

          </div>
          <a href="doctors.html">
            <div class="departments-scroll-container">
              <div class="departments-grid">
                <article class="department-card">
                  <div class="department-image-container">
                    <div class="department-image" style="background-image: url('/frontend_v2/assets/images/s1.png')" role="img"
                      aria-label="Emergency department"></div>
                    <div class="department-icon">
                      <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                    </div>
                  </div>
                  <h3 class="department-name">24/7 Emergency</h3>
                  <p class="department-description">
                    Full readiness to handle urgent cases around the clock.
                  </p>
                </article>

                <article class="department-card">
                  <div class="department-image-container">
                    <div class="department-image" style="background-image: url('/frontend_v2/assets/images/s2.png')" role="img"
                      aria-label="ENT department"></div>
                    <div class="department-icon">
                      <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                    </div>
                  </div>
                  <h3 class="department-name">ENT (Ear, Nose & Throat)</h3>
                  <p class="department-description">
                    Complete care for hearing, breathing, and voice-related conditions.
                  </p>
                </article>

                <article class="department-card">
                  <div class="department-image-container">
                    <div class="department-image" style="background-image: url('/frontend_v2/assets/images/s3.png')" role="img"
                      aria-label="Ophthalmology department"></div>
                    <div class="department-icon">
                      <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                    </div>
                  </div>
                  <h3 class="department-name">Ophthalmology</h3>
                  <p class="department-description">
                    Comprehensive diagnosis and treatment for vision and eye health.
                  </p>
                </article>

                <article class="department-card">
                  <div class="department-image-container">
                    <div class="department-image" style="background-image: url('/frontend_v2/assets/images/s4.png')" role="img"
                      aria-label="Dentistry department"></div>
                    <div class="department-icon">
                      <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                    </div>
                  </div>
                  <h3 class="department-name">Dentistry</h3>
                  <p class="department-description">
                    A healthy, beautiful smile with the latest dental treatments.
                  </p>
                </article>

                <article class="department-card">
                  <div class="department-image-container">
                    <div class="department-image" style="background-image: url('/frontend_v2/assets/images/s5.png')" role="img"
                      aria-label="Women and Childbirth department"></div>
                    <div class="department-icon">
                      <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                    </div>
                  </div>
                  <h3 class="department-name">Obstetrics & Gynecology</h3>
                  <p class="department-description">
                    Exceptional care for mother and baby throughout pregnancy and childbirth.
                  </p>
                </article>

                <article class="department-card">
                  <div class="department-image-container">
                    <div class="department-image" style="background-image: url('/frontend_v2/assets/images/s6.png')" role="img"
                      aria-label="Pediatrics department"></div>
                    <div class="department-icon">
                      <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                    </div>
                  </div>
                  <h3 class="department-name">Pediatrics</h3>
                  <p class="department-description">
                    Comprehensive healthcare for your child’s growth and well-being at every stage.
                  </p>
                </article>
                <article class="department-card">
                  <div class="department-image-container">
                    <div class="department-image" style="background-image: url('/frontend_v2/assets/images/s7.png')" role="img"
                      aria-label="Pediatrics department"></div>
                    <div class="department-icon">
                      <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                    </div>
                  </div>
                  <h3 class="department-name">Dermatology</h3>
                  <p class="department-description">
                    Advanced diagnosis and treatment for skin and hair conditions.
                  </p>
                </article>
                <article class="department-card">
                  <div class="department-image-container">
                    <div class="department-image" style="background-image: url('/frontend_v2/assets/images/s8.png')" role="img"
                      aria-label="Pediatrics department"></div>
                    <div class="department-icon">
                      <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                    </div>
                  </div>
                  <h3 class="department-name">Sleep Disorders</h3>
                  <p class="department-description">
                    Effective medical solutions for restoring healthy, restful sleep.
                  </p>
                </article>
                <article class="department-card">
                  <div class="department-image-container">
                    <div class="department-image" style="background-image: url('/frontend_v2/assets/images/s9.png')" role="img"
                      aria-label="Pediatrics department"></div>
                    <div class="department-icon">
                      <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                    </div>
                  </div>
                  <h3 class="department-name">Urology</h3>
                  <p class="department-description">
                    Specialized care for urinary and reproductive health.
                  </p>
                </article>
                <article class="department-card">
                  <div class="department-image-container">
                    <div class="department-image" style="background-image: url('/frontend_v2/assets/images/s10.png')" role="img"
                      aria-label="Pediatrics department"></div>
                    <div class="department-icon">
                      <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                    </div>
                  </div>
                  <h3 class="department-name">Rheumatology</h3>
                  <p class="department-description">
                    Accurate diagnosis and treatment for joint and bone diseases.
                  </p>
                </article>
                <article class="department-card">
                  <div class="department-image-container">
                    <div class="department-image" style="background-image: url('/frontend_v2/assets/images/s11.png')" role="img"
                      aria-label="Pediatrics department"></div>
                    <div class="department-icon">
                      <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                    </div>
                  </div>
                  <h3 class="department-name">Esotericism</h3>
                  <p class="department-description">
                    Advanced diagnostic testing for rare and complex medical
                    conditions.
                  </p>
                </article>
                <article class="department-card">
                  <div class="department-image-container">
                    <div class="department-image" style="background-image: url('/frontend_v2/assets/images/s12.png')" role="img"
                      aria-label="Pediatrics department"></div>
                    <div class="department-icon">
                      <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                    </div>
                  </div>
                  <h3 class="department-name">Intensive Care Unit (ICU)</h3>
                  <p class="department-description">
                    State-of-the-art facilities for critically ill patients.
                  </p>
                </article>
                <article class="department-card">
                  <div class="department-image-container">
                    <div class="department-image" style="background-image: url('/frontend_v2/assets/images/s13.png')" role="img"
                      aria-label="Pediatrics department"></div>
                    <div class="department-icon">
                      <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                    </div>
                  </div>
                  <h3 class="department-name">General Surgery</h3>
                  <p class="department-description">
                    A variety of surgical procedures performed with expertise and global safety standards.
                  </p>
                </article>
                <article class="department-card">
                  <div class="department-image-container">
                    <div class="department-image" style="background-image: url('/frontend_v2/assets/images/s14.png')" role="img"
                      aria-label="Pediatrics department"></div>
                    <div class="department-icon">
                      <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                    </div>
                  </div>
                  <h3 class="department-name">Oral & Dental Implant Surgery</h3>
                  <p class="department-description">
                    Precise and long-lasting solutions for missing teeth replacement.
                  </p>
                </article>
                <article class="department-card">
                  <div class="department-image-container">
                    <div class="department-image" style="background-image: url('/frontend_v2/assets/images/s15.png')" role="img"
                      aria-label="Pediatrics department"></div>
                    <div class="department-icon">
                      <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                    </div>
                  </div>
                  <h3 class="department-name">Gastrointestinal Surgery</h3>
                  <p class="department-description">
                    Comprehensive treatment for stomach, intestine, and liver conditions.
                  </p>
                </article>
                <article class="department-card">
                  <div class="department-image-container">
                    <div class="department-image" style="background-image: url('/frontend_v2/assets/images/s16.png')" role="img"
                      aria-label="Pediatrics department"></div>
                    <div class="department-icon">
                      <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                    </div>
                  </div>
                  <h3 class="department-name">
                    Oral, Maxillofacial & Hand Surgery
                  </h3>
                  <p class="department-description">
                    Advanced procedures for treating injuries and deformities with high precision.
                  </p>
                </article>
                <article class="department-card">
                  <div class="department-image-container">
                    <div class="department-image" style="background-image: url('/frontend_v2/assets/images/s18.png')" role="img"
                      aria-label="Pediatrics department"></div>
                    <div class="department-icon">
                      <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                    </div>
                  </div>
                  <h3 class="department-name">Bariatric surgery</h3>
                  <p class="department-description">
                    Effective surgical solutions to help you achieve a healthier, more active life.
                  </p>
                </article>
                <article class="department-card">
                  <div class="department-image-container">
                    <div class="department-image" style="background-image: url('/frontend_v2/assets/images/s19.png')" role="img"
                      aria-label="Pediatrics department"></div>
                    <div class="department-icon">
                      <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                    </div>
                  </div>
                  <h3 class="department-name">
                    Reconstructive, Cosmetic & Burn Surgery
                  </h3>
                  <p class="department-description">
                    Restoring form and function with precision and natural-looking results.
                  </p>
                </article>
                <article class="department-card">
                  <div class="department-image-container">
                    <div class="department-image" style="background-image: url('/frontend_v2/assets/images/s20.png')" role="img"
                      aria-label="Pediatrics department"></div>
                    <div class="department-icon">
                      <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                    </div>
                  </div>
                  <h3 class="department-name">Diabetic foot surgery</h3>
                  <p class="department-description">
                    Specialized care for the prevention and comprehensive treatment of diabetic foot complications.
                  </p>
                </article>
                <article class="department-card">
                  <div class="department-image-container">
                    <div class="department-image" style="background-image: url('/frontend_v2/assets/images/s21.png')" role="img"
                      aria-label="Pediatrics department"></div>
                    <div class="department-icon">
                      <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                    </div>
                  </div>
                  <h3 class="department-name">Rays</h3>
                  <p class="department-description">
                    Accurate imaging services like X-rays for fast and clear
                    diagnosis.
                  </p>
                </article>
                <article class="department-card">
                  <div class="department-image-container">
                    <div class="department-image" style="background-image: url('/frontend_v2/assets/images/s22.png')" role="img"
                      aria-label="Pediatrics department"></div>
                    <div class="department-icon">
                      <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                    </div>
                  </div>
                  <h3 class="department-name">Laboratory</h3>
                  <p class="department-description">
                    Comprehensive testing using the latest equipment to ensure accurate results.
                  </p>
                </article>
                <article class="department-card">
                  <div class="department-image-container">
                    <div class="department-image" style="background-image: url('/frontend_v2/assets/images/s23.png')" role="img"
                      aria-label="Pediatrics department"></div>
                    <div class="department-icon">
                      <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                    </div>
                  </div>
                  <h3 class="department-name">Anesthesiology</h3>
                  <p class="department-description">
                    Complete safety and comfort with a specialized anesthesia team.
                  </p>
                </article>
                <article class="department-card">
                  <div class="department-image-container">
                    <div class="department-image" style="background-image: url('/frontend_v2/assets/images/s24.png')" role="img"
                      aria-label="Pediatrics department"></div>
                    <div class="department-icon">
                      <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                    </div>
                  </div>
                  <h3 class="department-name">Home Healthcare</h3>
                  <p class="department-description">
                    Comprehensive medical services delivered right to your doorstep.
                  </p>
                </article>
                <article class="department-card">
                  <div class="department-image-container">
                    <div class="department-image" style="background-image: url('/frontend_v2/assets/images/s25.png')" role="img"
                      aria-label="Pediatrics department"></div>
                    <div class="department-icon">
                      <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                    </div>
                  </div>
                  <h3 class="department-name">
                    Fat Reduction & Lymphatic Massage
                  </h3>
                  <p class="department-description">
                    Modern techniques for body contouring and improving blood circulation.
                  </p>
                </article>
              </div>
            </div>
          </a>
        </div>

        <div class="appointment-ctazz appointment-ctaim">
          <div class="appointment-content">
            <div class="appointment-textz">
              <h2 class="appointment-title">Book Your Appointment Now</h2>
              <p class="appointment-description">
                Start your journey towards world-class healthcare.
                Our medical team is ready to provide personalized treatment tailored to your needs with precision and
                care.
              </p>
            </div>
            <div class="appointment-button-container">
              <a href="tel:0550655152">
                <button class="appointment-button">
                  <span class="appointment-text">Contact US</span>
                  <div class="doctor-icon-container">
                    <img src="{{ asset('frontend_v2/assets/Icons/Arrow.png') }}" alt="" />
                  </div>
                </button>
              </a>
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
          <span class="headline-part">Our Partners in </span>
          <span class="headline-emphasis">Success</span>
        </h2>

        <p>
          We take pride in collaborating with leading institutions and organizations to ensure <br>
          healthcare that meets world-class standards. Our commitment to excellence starts <br>
          with the trusted partnerships we build.

        </p>
      </div>

      <div class="partners-logos-grid">
        <img src="{{ asset('frontend_v2/assets/logos/l14.png') }}" alt="Nextcare" />
        <img src="{{ asset('frontend_v2/assets/logos/l7.png') }}" alt="STC" />
        <img src="{{ asset('frontend_v2/assets/logos/l9.png') }}" alt="Walaa" />
        <img src="{{ asset('frontend_v2/assets/logos/l10.png') }}" alt="Medgulf" />
        <img src="{{ asset('frontend_v2/assets/logos/l8.png') }}" alt="MOH" />
        <img src="{{ asset('frontend_v2/assets/logos/l13.png') }}" alt="Union" />
        <img src="{{ asset('frontend_v2/assets/logos/l11.png') }}" alt="Allianz" />
        <img src="{{ asset('frontend_v2/assets/logos/l12.png') }}" alt="SAICO" />
        <img src="{{ asset('frontend_v2/assets/logos/l3.png') }}" alt="Aramco" />

      </div>
    </div>
    <div class="partners-section" style="margin-bottom: 0px !important;">
      <div class="partners-header">
        <h2 class="main-headline">
          <span class="headline-emphasis">Insurance </span>
          <span class="headline-part">Providers</span>
        </h2>
        <p>
          We work with all major insurance companies to guarantee comprehensive <br>
          coverage and a seamless healthcare experience.
        </p>

      </div>

      <div class="partners-logos-gridzz">
        <img src="{{ asset('frontend_v2/assets/logos/l6.png') }}" alt="Qitaf" />
        <img src="{{ asset('frontend_v2/assets/logos/l5.png') }}" alt="Cancer Foundation" />
        <img src="{{ asset('frontend_v2/assets/logos/l1.png') }}" alt="IAU" />
        <img src="{{ asset('frontend_v2/assets/logos/l4.png') }}" alt="Sadara" />
        <img src="{{ asset('frontend_v2/assets/logos/l2.png') }}" alt="Alasala" />

      </div>
    </div>
  </section>

  <section class="section sectionzz">
    <div class="medical-facility-showcase">
      <div class="showcase-container" style="align-items: flex-start">
        <div class="blog-header anima" data-aos="fade-zoom-in">
          <h2 class="blog-category">Our Blogs</h2>
          <h2 class="main-headline">
            <span class="headline-part">Health</span>
            <span class="headline-emphasis">Insights & Wellness</span>
            <span class="headline-part">Tips</span>
          </h2>
          <p class="blog-description">
            Discover the latest medical articles, wellness tips, and expert insights designed <br>
            to help you make confident decisions about your health.We share the knowledge <br>
            you need to stay at your best, always.
          </p>
        </div>
        <div class="blog-grid">
          <article class="blog-card anima" data-aos="fade-zoom-in">
            <img src="{{ asset('frontend_v2/assets/images/a1.jpeg') }}" alt="Understanding Appendicitis" class="blog-image" />
            <div class="blog-content">
              <div class="blog-card-header">
                <h3 class="blog-card-title">
                  Understanding Appendicitis: Causes, Symptoms & Treatments
                </h3>
                <time class="blog-date" datetime="2025-04-15">April 15, 2025</time>
              </div>
              <div class="blog-card-body">
                <p class="blog-excerpt">
                  An overview of appendicitis, how to spot the signs early,
                  and when surgical intervention becomes necessary.
                </p>
                <a href="#" class="blog-link">
                  <span class="link-text">View Details</span>
                  <img src="{{ asset('frontend_v2/assets/Icons/smallarrow.png') }}" alt="" class="link-arrow" />
                </a>
              </div>
            </div>
          </article>

          <article class="blog-card anima" data-aos="fade-zoom-in">
            <img src="{{ asset('frontend_v2/assets/images/a2.png') }}" alt="Types of Hernia" class="blog-image" />
            <div class="blog-content">
              <div class="blog-card-header">
                <h3 class="blog-card-title">
                  What Are the Three Types of Hernia?
                </h3>
                <time class="blog-date" datetime="2025-06-10">June 10, 2025</time>
              </div>
              <div class="blog-card-body">
                <p class="blog-excerpt">
                  A brief guide explaining inguinal, umbilical, and hiatal
                  hernias—their symptoms, causes, and treatment options.
                </p>
                <a href="#" class="blog-link">
                  <span class="link-text">View Details</span>
                  <img src="{{ asset('frontend_v2/assets/Icons/smallarrow.png') }}" alt="" class="link-arrow" />
                </a>
              </div>
            </div>
          </article>

          <article class="blog-card blog-card-reverse anima" data-aos="fade-zoom-in">
            <div class="blog-content">
              <div class="blog-card-header">
                <h3 class="blog-card-title">
                  Gallbladder Stones: Key Facts You Should Know
                </h3>
                <time class="blog-date" datetime="2025-05-22">May 22, 2025</time>
              </div>
              <div class="blog-card-body">
                <p class="blog-excerpt">
                  Learn what gallstones are, common risk factors, warning
                  signs, and effective strategies for prevention and care.
                </p>
                <a href="#" class="blog-link">
                  <span class="link-text">View Details</span>
                  <img src="{{ asset('frontend_v2/assets/Icons/smallarrow.png') }}" alt="" class="link-arrow" />
                </a>
              </div>
            </div>
            <img src="{{ asset('frontend_v2/assets/images/a3.jpg') }}" alt="Gallbladder Stones" class="blog-image" />
          </article>

          <article class="blog-card blog-card-reverse anima" data-aos="fade-zoom-in">
            <div class="blog-content">
              <div class="blog-card-header">
                <h3 class="blog-card-title">Your Health, Our Priority</h3>
                <time class="blog-date" datetime="2025-03-18">18 March 2025</time>
              </div>
              <div class="blog-card-body">
                <p class="blog-excerpt">
                  Stay ahead with curated tips, medical updates, and wellness
                  guidance designed to support your everyday well-being.
                </p>
                <a href="#" class="blog-link">
                  <span class="link-text">View Details</span>
                  <img src="{{ asset('frontend_v2/assets/Icons/smallarrow.png') }}" alt="" class="link-arrow" />
                </a>
              </div>
            </div>
            <img src="{{ asset('frontend_v2/assets/images/a4.jpg') }}" alt="Health Priority" class="blog-image" />
          </article>
        </div>
      </div>
    </div>
  </section>

  <section class="section sectionz sectionzz tonbotz" style="padding: 40px 0px">
    <div class="partners-section" style="text-align: start">
      <div class="faq-container anima" data-aos="fade-zoom-in">
        <div class="faq-header">
          <div class="header-content">
            <p class="section-label">Have Questions?</p>

            <h2 class="main-headline">
              <span class="headline-part">Frequently Asked Questions </span>
              <span class="headline-emphasis">(FAQ)</span>
            </h2>

            <p class="description">
              We’re here to help and answer all your inquiries as quickly as possible.
              If you don’t find what you’re looking for, <br> <a href="https://wa.me/966138955555"
                style="font-weight: bold;color: #000;">get in touch with us now.</a>
            </p>
          </div>
          <a href="https://youtu.be/X98A7h1uX94?si=m0Rlrlk-hFv36az9">
            <video class="header-video" src="{{ asset('frontend_v2/assets/video/v1.mp4') }}" autoplay muted loop playsinline></video>
          </a>
        </div>

        <div class="faq-list">
          <article class="faq-item expanded" data-faq="1">
            <div class="faq-question">
              <h3 class="question-text">How can I book an appointment?</h3>
              <button class="toggle-button" aria-expanded="true" aria-controls="answer-1">
                <img class="close-icon" src="{{ asset('frontend_v2/assets/Icons/Vector1.png') }}" alt="" />
                <img class="plus-icon" src="{{ asset('frontend_v2/assets/Icons/Vector.png') }}" alt="" />
              </button>
            </div>
            <div class="faq-answer" id="answer-1">
              <p class="answer-text">
                You can easily book through our website, call our 24/7 helpline, or visit the hospital directly.
                Same-day appointments may be available depending on the specialty.
              </p>
            </div>
          </article>

          <article class="faq-item" data-faq="2">
            <div class="faq-question">
              <h3 class="question-text">
                What should I bring to my first visit?
              </h3>
              <button class="toggle-button" aria-expanded="false" aria-controls="answer-2">
                <img class="close-icon" src="{{ asset('frontend_v2/assets/Icons/Vector1.png') }}" alt="" />
                <img class="plus-icon" src="{{ asset('frontend_v2/assets/Icons/Vector.png') }}" alt="" />
              </button>
            </div>
            <div class="faq-answer" id="answer-2">
              <p class="answer-text">
                Please bring your ID card, health insurance card, and any previous medical reports or test results.
              </p>
            </div>
          </article>

          <article class="faq-item" data-faq="3">
            <div class="faq-question">
              <h3 class="question-text">
                Do you offer telemedicine or virtual consultations?
              </h3>
              <button class="toggle-button" aria-expanded="false" aria-controls="answer-3">
                <img class="close-icon" src="{{ asset('frontend_v2/assets/Icons/Vector1.png') }}" alt="" />
                <img class="plus-icon" src="{{ asset('frontend_v2/assets/Icons/Vector.png') }}" alt="" />
              </button>
            </div>
            <div class="faq-answer" id="answer-3">
              <p class="answer-text">
                Yes, we offer virtual consultations with our expert doctors to make healthcare accessible from anywhere.
              </p>
            </div>
          </article>

          <article class="faq-item" data-faq="4">
            <div class="faq-question">
              <h3 class="question-text">Is emergency care available?</h3>
              <button class="toggle-button" aria-expanded="false" aria-controls="answer-4">
                <img class="close-icon" src="{{ asset('frontend_v2/assets/Icons/Vector1.png') }}" alt="" />
                <img class="plus-icon" src="{{ asset('frontend_v2/assets/Icons/Vector.png') }}" alt="" />
              </button>
            </div>
            <div class="faq-answer" id="answer-4">
              <p class="answer-text">
                Absolutely. Our Emergency Department is fully equipped and operates 24/7 to serve you in any urgent
                situation.
              </p>
            </div>
          </article>

          <article class="faq-item" data-faq="5">
            <div class="faq-question">
              <h3 class="question-text">
                How can I access my lab or imaging results?
              </h3>
              <button class="toggle-button" aria-expanded="false" aria-controls="answer-5">
                <img class="close-icon" src="{{ asset('frontend_v2/assets/Icons/Vector1.png') }}" alt="" />
                <img class="plus-icon" src="{{ asset('frontend_v2/assets/Icons/Vector.png') }}" alt="" />
              </button>
            </div>
            <div class="faq-answer" id="answer-5">
              <p class="answer-text">
                Results can be collected directly from the laboratory, accessed through your online patient account, or
                provided by your treating physician.
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
            Our Testimonials
          </p>
          <h2 class="main-headline">
            <span class="headline-emphasis">Our Patient </span>
            <span class="headline-part">Stories</span>
          </h2>
          <p class="section-description">
            Every patient has a story. Hear their journeys and discover the compassionate care behind our work.
          </p>
        </div>


        <div class="testimonials-grid anima" data-aos="fade-zoom-in">
          <article class="testimonial-card">
            <div class="card-content">
              <div class="card-header">
                <div class="card-header-content">
                  <div class="quote-icon">
                    <img src="{{ asset('frontend_v2/assets/Icons/xdot1.png') }}" alt="Quote" class="quote-image" />
                  </div>
                  <div class="rating-container">
                    <span class="rating-score">5.0</span>
                    <img src="{{ asset('frontend_v2/assets/Icons/star.png') }}" alt="5 star rating" class="rating-stars" />
                  </div>
                </div>
                <blockquote class="testimonial-text">
                  "My experience with the Obstetrics & Gynecology department was beyond excellent. The medical team
                  supported me every step of the way and made me feel completely comfortable and reassured.
                  Truly grateful for their care." 😊
                </blockquote>
              </div>
              <div class="card-divider"></div>
              <div class="customer-info">
                <h3 class="customer-name"> Mrs. Sarah Al-Otaibi</h3>
                <p class="customer-location">Al-Ahsa, Saudi Arabia</p>
              </div>
            </div>
          </article>

          <article class="testimonial-card">
            <div class="card-content">
              <div class="card-header">
                <div class="card-header-content">
                  <div class="quote-icon">
                    <img src="{{ asset('frontend_v2/assets/Icons/xdot1.png') }}" alt="Quote" class="quote-image" />
                  </div>
                  <div class="rating-container">
                    <span class="rating-score">5.0</span>
                    <img src="{{ asset('frontend_v2/assets/Icons/star.png') }}" alt="5 star rating" class="rating-stars" />
                  </div>
                </div>
                <blockquote class="testimonial-text">
                  "My son needed close follow-up, and the Pediatrics team was so patient and explained everything
                  clearly.
                  I felt truly reassured and confident in their care." 👶✨
                </blockquote>
              </div>
              <div class="card-divider"></div>
              <div class="customer-info">
                <h3 class="customer-name">Mr. Mohammed Al-Ghamdi</h3>
                <p class="customer-location">Al-Fursan, Saudi Arabia</p>
              </div>
            </div>
          </article>

          <article class="testimonial-card">
            <div class="card-content">
              <div class="card-header">
                <div class="card-header-content">
                  <div class="quote-icon">
                    <img src="{{ asset('frontend_v2/assets/Icons/xdot1.png') }}" alt="Quote" class="quote-image" />
                  </div>
                  <div class="rating-container">
                    <span class="rating-score">5.0</span>
                    <img src="{{ asset('frontend_v2/assets/Icons/star.png') }}" alt="5 star rating" class="rating-stars" />
                  </div>
                </div>
                <blockquote class="testimonial-text">
                  "The Emergency Department was fast and well-organized. From the moment we walked in,
                  we felt safe and in good hands. May God reward them."
                </blockquote>
              </div>
              <div class="card-divider"></div>
              <div class="customer-info">
                <h3 class="customer-name">Mr. Abdullah Al-Shamrani</h3>
                <p class="customer-location">Al-Aziziyah, Saudi Arabia</p>
              </div>
            </div>
          </article>

          <article class="testimonial-card">
            <div class="card-content">
              <div class="card-header">
                <div class="card-header-content">
                  <div class="quote-icon">
                    <img src="{{ asset('frontend_v2/assets/Icons/xdot1.png') }}" alt="Quote" class="quote-image" />
                  </div>
                  <div class="rating-container">
                    <span class="rating-score">5.0</span>
                    <img src="{{ asset('frontend_v2/assets/Icons/star.png') }}" alt="5 star rating" class="rating-stars" />
                  </div>
                </div>
                <blockquote class="testimonial-text">
                  "I underwent bariatric surgery at the hospital, and the results changed my life for the better.
                  The team was professional and supported me throughout my recovery. Highly recommend their services."
                  👍
                </blockquote>
              </div>
              <div class="card-divider"></div>
              <div class="customer-info">
                <h3 class="customer-name">Mrs. Reem Al-Qahtani</h3>
                <p class="customer-location">Dammam, Saudi Arabia</p>
              </div>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <footer class="hospital-footer">
    <section class="about-section topz">
      <div class="about-container anima" data-aos="fade-zoom-in">
        <h1 class="about-title">
          About
          <span class="hospital-name">Dr. Khalid Al-Ruhaimi Hospital</span>
        </h1>
        <p class="hospital-credentials">
          Accredited by CBAHI | we have served over 150,000 satisfied patients | provide 24/7 emergency care.
        </p>
        <p class="hospital-description">
          At Dr. Khalid Al-Ruhaimi Hospital, we are committed to delivering world-class healthcare that combines
          advanced medical technology, expert physicians, and a compassionate, human touch.
        </p>

      </div>
    </section>

    <section class="main-footer">
      <div class="footer-background-text" aria-hidden="true">DRK</div>

      <div class="footer-content">
        <div class="hospital-info">
          <div class="logo-container">
            <div class="logo-wrapper">
              <img src="{{ asset('frontend_v2/assets/Icons/drk.png') }}" alt="Dr. Khalid Al-Ruhaimi Hospital Logo" class="hospital-logoz" />
            </div>
          </div>
          <address class="hospital-address">
            <p class="address-line">
              Dr. Khalid Al-Ruhaimi Hospital Prince Mohammed Bin Fahd Street, Al Khobar, Saudi Arabia
            </p>
            <p class="contact-phone">Phone: +966 13 895 5555</p>
            <p class="contact-email">Email: info@dralruhaimi.com</p>
          </address>
        </div>

        <nav class="footer-navigation" aria-label="Footer navigation">
          <div class="nav-column">
            <h2 class="nav-title">Quick access</h2>
            <ul class="nav-list">
              <li><a href="#" class="nav-linkz">Home</a></li>
              <li><a href="#" class="nav-linkz">About Us</a></li>
              <li><a href="#" class="nav-linkz">Doctors</a></li>
            </ul>
          </div>
          <div class="nav-column">
            <h2 class="nav-title">Services</h2>
            <ul class="nav-list">
              <li><a href="#" class="nav-linkz">Sections</a></li>
              <li><a href="#" class="nav-linkz">Branches</a></li>
              <li><a href="#" class="nav-linkz">Offers</a></li>
            </ul>
          </div>
          <div class="nav-column">
            <h2 class="nav-title">Contact Us</h2>
            <ul class="nav-list">
              <li><a href="#" class="nav-linkz">Send a Massage</a></li>
              <li><a href="#" class="nav-linkz">Book a Appointment</a></li>
              <li><a href="#" class="nav-linkz">Schedule a call</a></li>
            </ul>
          </div>
          <div class="nav-column">
            <h2 class="nav-title">Legal</h2>
            <ul class="nav-list">
              <li><a href="/privacy.html" class="nav-linkz">Privacy Policy</a></li>
              <li><a href="/privacy.html" class="nav-linkz">Terms & Conditions</a></li>
              <li><a href="/privacy.html" class="nav-linkz">Cookie Policy</a></li>
            </ul>
          </div>
        </nav>
      </div>

      <div class="footer-bottom">
        <div class="social-media" aria-label="Social media links">
          <a href="#" class="social-link" aria-label="Follow us on Instagram">
            <img src="{{ asset('frontend_v2/assets/Icons/instagram.png') }}" class="social-icon" alt="" />
          </a>
          <a href="#" class="social-link" aria-label="Follow us on Snapchat">
            <img src="{{ asset('frontend_v2/assets/Icons/snapchat.png') }}" class="social-icon" alt="" />
          </a>
          <a href="#" class="social-link" aria-label="Follow us on YouTube">
            <img src="{{ asset('frontend_v2/assets/Icons/youtube.png') }}" class="social-icon" alt="" />
          </a>
          <a href="#" class="social-link" aria-label="Follow us on TikTok">
            <img src="{{ asset('frontend_v2/assets/Icons/tiktok.png') }}" class="social-icon" alt="" />
          </a>
          <a href="#" class="social-link" aria-label="Follow us on Twitter">
            <img src="{{ asset('frontend_v2/assets/Icons/twitter.png') }}" class="social-icon" alt="" />
          </a>
        </div>

        <div class="footer-divider"></div>

        <p class="copyright" href="/privacy.html">
          © 2025 Dr. Khalid Al-Ruhaimi Hospital. All rights reserved.
        </p>
      </div>
    </section>
  </footer>



  <script>

    window.addEventListener("load", function () {
      setTimeout(function () {
        document.querySelector('.loader-screen').style.display = 'none';
        document.querySelector('.main-content').style.display = 'block';
      }, 5000);
    });
  </script>

</body>

</html>