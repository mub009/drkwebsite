@extends('frontend_v2.layouts.FrontendLayout')
@section('content')

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
              <img src="{{ asset('frontend_v2/assets/Icons/Arrow.png') }}" alt="Arrow" />
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
            <img src="{{ asset('frontend_v2/assets/Icons/arrow-down.png') }}" alt="Arrow Down" />
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
            <img src="{{ asset('frontend_v2/assets/Icons/arrow-down.png') }}" alt="Arrow Down" />
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
            <img src="{{ asset('frontend_v2/assets/Icons/arrow-down.png') }}" alt="Arrow Down" />
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
        <img src="{{ asset('frontend_v2/assets/Icons/Arrow3.png') }}" alt="Arrow" />
      </div>
    </div>

    <div class="card dark">
      <div class="card-content">
        <h3>Confirmed Appointments Without Delay</h3>
        <p>Your consultation is guaranteed with instant booking and quick confirmation.</p>
      </div>
      <img src="{{ asset('frontend_v2/assets/images/ii2.png') }}" alt="Confirmed Appointments" class="card-image" />
      <div class="card-button light-btn">
        <img src="{{ asset('frontend_v2/assets/Icons/Arrow4.png') }}" alt="Arrow" />
      </div>
    </div>

    <div class="card light">
      <div class="card-content">
        <h3>24/7 Medicine Delivery.</h3>
        <p>Get your essential medications delivered to your doorstep anytime, safely and securely.</p>
      </div>
      <img src="{{ asset('frontend_v2/assets/images/ii3.jpg') }}" alt="Medicine Delivery" class="card-image" />
      <div class="card-button light-btn">
        <img src="{{ asset('frontend_v2/assets/Icons/Arrow3.png') }}" alt="Arrow" />
      </div>
    </div>

    <div class="card dark">
      <div class="card-content">
        <h3>Instant Video Consultations.</h3>
        <p> Connect with your doctor in less than a minute – safe, fast, and convenient.</p>
      </div>
      <img src="{{ asset('frontend_v2/assets/images/ii4.png') }}" alt="Video Consultation" class="card-image" />
      <div class="card-button light-btn">
        <img src="{{ asset('frontend_v2/assets/Icons/Arrow4.png') }}" alt="Arrow" />
      </div>
    </div>

    <div class="card light">
      <div class="card-content">
        <h3>At-Home Sample Collection</h3>
        <p>Get your lab tests done easily and comfortably from your home.</p>
      </div>
      <img src="{{ asset('frontend_v2/assets/images/ii5.jpg') }}" alt="Lab Test" class="card-image" />
      <div class="card-button light-btn">
        <img src="{{ asset('frontend_v2/assets/Icons/Arrow3.png') }}" alt="Arrow" />
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
                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="Arrow Up Icon" />
              </div>
              <h3 class="feature-title">
                Internationally certified doctors and consultants
              </h3>
            </article>
            <article class="feature-item">
              <div class="feature-icon">
                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="Arrow Up Icon" />
              </div>
              <h3 class="feature-title">Advanced medical technologies and equipment</h3>
            </article>
            <article class="feature-item">
              <div class="feature-icon">
                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="Arrow Up Icon" />
              </div>
              <h3 class="feature-title">
                High-quality, cost-effective care
              </h3>
            </article>
            <article class="feature-item">
              <div class="feature-icon">
                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="Arrow Up Icon" />
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
          @foreach ($doctors as $item)
          <article class="doctor-card">
            <div class="card-background"></div>
            <div class="card-watermark">DRK</div>
            <div>
              <img src="{{asset('images').'/'.$item->image}}" alt="دنيا _ اخصائية الجلدية و التجميل. الليزر " class="doctor-image" />
              <div class="doctor-info">
                <div class="doctor-details">
                  <h3 class="doctor-name">{{ $item->name_ar }}</h3>
                  <p class="doctor-specialty">{{ $item->department_name }}</p>
                </div>
              </div>
            </div>
          </article>
          @endforeach
        </div>

        <a href="{{ route('services') }}" style="text-decoration: none">
          <div class="view-all-section">
            <button class="view-all-button" type="button">
              <span class="view-all-text">See Our All Doctors</span>
            </button>
            <div>
              <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-linestr.png') }}" alt="Arrow Up Icon" />
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
        <a href="{{ route('services') }}">
          <div class="departments-scroll-container">
            <div class="departments-grid">
              @foreach($department as $row)
              <article class="department-card">
                <div class="department-image-container">
                  <div class="department-image" style="style="background-image: url('{{ asset("images/".$row->image) }}')"></div>
                  <div class="department-icon">
                    <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="Mainarrow" />
                  </div>
                </div>
                <h3 class="department-name">{{$row->department_en}}</h3>
                <p class="department-description">
                  {{ \Illuminate\Support\Str::limit(strip_tags(html_entity_decode($row->department_details)), 40) }}
                </p>
              </article>
              @endforeach
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
                  <img src="{{ asset('frontend_v2/assets/Icons/Arrow.png') }}" alt="Arrow" />
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
      @foreach ($partner as $item)
      <img src="{{asset('images').'/'.$item->image}}" alt="{{$item->partner_en}}" />
      @endforeach

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
      @foreach ($insurance as $item)
      <img src="{{asset('images').'/'.$item->image}}" alt="{{$item->insurance_en}}" />
      @endforeach

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
        @foreach ($article as $item)
        <article class="blog-card anima" data-aos="fade-zoom-in">
          <img src="{{asset('images').'/'.$item->image}}" alt="{{$item->title_en}}" class="blog-image" />
          <div class="blog-content">
            <div class="blog-card-header">
              <h3 class="blog-card-title">
                {{$item->title_en}}
              </h3>
              <time class="blog-date" datetime="{{ $item->created_at->format('Y-m-d') }}">
                {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}
              </time>
            </div>
            <div class="blog-card-body">
              <p class="blog-excerpt">
                {{ \Illuminate\Support\Str::limit(strip_tags(html_entity_decode($item->article_en)), 60) }}
              </p>
              <a href="#" class="blog-link">
                <span class="link-text">View Details</span>
                <img src="{{ asset('frontend_v2/assets/Icons/smallarrow.png') }}" alt="" class="link-arrow" />
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
              <img class="close-icon" src="{{ asset('frontend_v2/assets/Icons/Vector1.png') }}" alt="Vector 1" />
              <img class="plus-icon" src="{{ asset('frontend_v2/assets/Icons/Vector.png') }}" alt="Vector 2" />
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
              <img class="close-icon" src="{{ asset('frontend_v2/assets/Icons/Vector1.png') }}" alt="vector 1" />
              <img class="plus-icon" src="{{ asset('frontend_v2/assets/Icons/Vector.png') }}" alt="vector 2" />
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
              <img class="close-icon" src="{{ asset('frontend_v2/assets/Icons/Vector1.png') }}" alt="vector 1" />
              <img class="plus-icon" src="{{ asset('frontend_v2/assets/Icons/Vector.png') }}" alt="vector 2" />
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
              <img class="close-icon" src="{{ asset('frontend_v2/assets/Icons/Vector1.png') }}" alt="vector 1" />
              <img class="plus-icon" src="{{ asset('frontend_v2/assets/Icons/Vector.png') }}" alt="vector 2" />
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
              <img class="close-icon" src="{{ asset('frontend_v2/assets/Icons/Vector1.png') }}" alt="vector 1" />
              <img class="plus-icon" src="{{ asset('frontend_v2/assets/Icons/Vector.png') }}" alt="vector 2" />
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


@endsection

@section('scripts')
<script src="{{ asset('frontend_v2/js/homeScript.js') }}"></script>
@endsection