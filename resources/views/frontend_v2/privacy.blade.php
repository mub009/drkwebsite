@extends('frontend_v2.layouts.FrontendLayout')
@section('content')
<style>
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



<footer class="hospital-footer" style="margin-bottom: 20px;margin-top: 120px;">
  <!-- About + Footer Content (your existing code) -->

  <section class="privacy-policy">
    <div class="privacy-container">
      <h1 class="privacy-title">Privacy Policy</h1>

      <p>
        At Dr. Khalid Al-Ruhaimi Hospital (“we,” “our,” “us”), we are committed
        to safeguarding your privacy and protecting your personal information.
        This Privacy Policy explains how we collect, use, share, and protect
        your data, as well as your rights as a user of our website and services.
      </p>

      <h3>1. Information We Collect</h3>
      <ul>
        <li><strong>Personal Information:</strong> such as your name, email address, phone number, home address, and
          insurance details when booking appointments or submitting inquiries.</li>
        <li><strong>Medical and Sensitive Information:</strong> including medical history, test results, or health
          records, which are collected strictly for medical and treatment purposes in compliance with applicable
          healthcare regulations.</li>
        <li><strong>Technical Information:</strong> such as IP address, browser type, device details, and cookies, to
          improve performance and security of our website.</li>
      </ul>

      <h3>2. How We Use Your Information</h3>
      <ul>
        <li>To process appointment bookings, inquiries, and medical requests.</li>
        <li>To communicate with you regarding appointments, results, and important updates.</li>
        <li>To enhance our website, user experience, and service quality.</li>
        <li>To comply with applicable laws, regulations, and health authority requirements in Saudi Arabia.</li>
      </ul>

      <h3>3. Sharing of Information</h3>
      <ul>
        <li>We do not sell or trade your personal data to third parties.</li>
        <li>Information may be shared with trusted third parties only where necessary, such as insurance providers,
          laboratories, or government health authorities, under strict confidentiality obligations.</li>
        <li>Technical service providers (e.g., payment gateways or booking systems) may access limited information to
          fulfill service requirements.</li>
      </ul>

      <h3>4. Data Retention and Security</h3>
      <ul>
        <li>Your data is retained only as long as required for providing services and meeting legal obligations.</li>
        <li>We use advanced security measures including SSL encryption, firewalls, anti-malware protections, and
          restricted access for authorized staff only.</li>
      </ul>

      <h3>5. Cookies and Tracking Technologies</h3>
      <ul>
        <li>Our website uses cookies to optimize performance, store session preferences, and analyze site usage.</li>
        <li>You may disable cookies via your browser settings, but this may affect the functionality of the site.</li>
      </ul>

      <h3>6. Your Rights</h3>
      <ul>
        <li>You have the right to access, update, or request deletion of your personal data, where legally applicable.
        </li>
        <li>You may object to certain processing activities (e.g., marketing communications) or request data
          portability.</li>
        <li>Requests can be submitted via the contact details provided below.</li>
      </ul>

      <h3>7. Children’s Privacy</h3>
      <p>Our services are not directed to children under the age of 18, and we do not knowingly collect information
        from them.</p>

      <h3>8. Updates to This Policy</h3>
      <p>
        We may update this Privacy Policy from time to time. The “last updated”
        date will appear at the top of this page. Continued use of the website
        following updates constitutes acceptance of the revised policy.
      </p>
    </div>
  </section>
</footer>