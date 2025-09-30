@extends('frontend_v2.layouts.FrontendLayout')
@section('content')

<style>
  body {
    font-family: 'Tajawal', sans-serif;
  }

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
    right: unset !important;
    left: 20px !important;
    background: none;
    border: none;
    font-size: 41px;
    cursor: pointer;
    color: #000;
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

<footer class="hospital-footer" style="margin-bottom: 20px; margin-top: 120px;" dir="rtl">
  <!-- محتوى الفوتر -->

  <section class="privacy-policy">
    <div class="privacy-container">
      <h1 class="privacy-title">سياسة الخصوصية</h1>

      <p>
        في مستشفى د. خالد الرحيمي ("نحن"، "لنا"، "خاصتنا")، نلتزم بحماية خصوصيتك
        وصون معلوماتك الشخصية. توضح سياسة الخصوصية هذه كيفية جمعنا واستخدامنا
        ومشاركتنا وحماية بياناتك، بالإضافة إلى حقوقك كمستخدم لموقعنا وخدماتنا.
      </p>

      <h3>1. المعلومات التي نجمعها</h3>
      <ul>
        <li><strong>المعلومات الشخصية:</strong> مثل الاسم، عنوان البريد الإلكتروني، رقم الهاتف، عنوان المنزل، وتفاصيل
          التأمين عند حجز المواعيد أو إرسال الاستفسارات.</li>
        <li><strong>المعلومات الطبية والحساسة:</strong> بما في ذلك التاريخ الطبي، نتائج الفحوصات أو السجلات الصحية،
          والتي يتم جمعها حصريًا لأغراض العلاج والامتثال للوائح الرعاية الصحية المعمول بها.</li>
        <li><strong>المعلومات التقنية:</strong> مثل عنوان IP، نوع المتصفح، تفاصيل الجهاز، وملفات تعريف الارتباط، بهدف
          تحسين أداء وأمان الموقع.</li>
      </ul>

      <h3>2. كيفية استخدامنا لمعلوماتك</h3>
      <ul>
        <li>معالجة حجوزات المواعيد والاستفسارات والطلبات الطبية.</li>
        <li>التواصل معك بخصوص المواعيد والنتائج والتحديثات الهامة.</li>
        <li>تحسين موقعنا وتجربة المستخدم وجودة الخدمات.</li>
        <li>الامتثال للقوانين واللوائح والمتطلبات الصحية في المملكة العربية السعودية.</li>
      </ul>

      <h3>3. مشاركة المعلومات</h3>
      <ul>
        <li>لا نقوم ببيع أو تبادل بياناتك الشخصية مع أطراف ثالثة.</li>
        <li>قد تتم مشاركة المعلومات مع أطراف موثوقة عند الضرورة، مثل شركات التأمين أو المختبرات أو الجهات الصحية
          الحكومية، وذلك بموجب التزامات صارمة بالسرية.</li>
        <li>قد يحصل مزودو الخدمات التقنية (مثل بوابات الدفع أو أنظمة الحجز) على معلومات محدودة لتلبية متطلبات الخدمة.
        </li>
      </ul>

      <h3>4. الاحتفاظ بالبيانات والأمان</h3>
      <ul>
        <li>يتم الاحتفاظ ببياناتك فقط للمدة اللازمة لتقديم الخدمات والوفاء بالالتزامات القانونية.</li>
        <li>نستخدم تدابير أمان متقدمة مثل تشفير SSL، جدران الحماية، الحماية من البرمجيات الخبيثة، وتقييد الوصول
          للموظفين المصرح لهم فقط.</li>
      </ul>

      <h3>5. ملفات تعريف الارتباط وتقنيات التتبع</h3>
      <ul>
        <li>يستخدم موقعنا ملفات تعريف الارتباط لتحسين الأداء وتخزين تفضيلات الجلسة وتحليل استخدام الموقع.</li>
        <li>يمكنك تعطيل ملفات تعريف الارتباط عبر إعدادات المتصفح، ولكن قد يؤثر ذلك على وظائف الموقع.</li>
      </ul>

      <h3>6. حقوقك</h3>
      <ul>
        <li>لديك الحق في الوصول إلى بياناتك الشخصية أو تحديثها أو طلب حذفها، حيثما كان ذلك مسموحًا قانونيًا.</li>
        <li>يمكنك الاعتراض على بعض أنشطة المعالجة (مثل الاتصالات التسويقية) أو طلب نقل البيانات.</li>
        <li>يمكن تقديم الطلبات عبر بيانات الاتصال الموضحة أدناه.</li>
      </ul>

      <h3>7. خصوصية الأطفال</h3>
      <p>
        خدماتنا غير موجهة للأطفال دون سن 18 عامًا، ولا نقوم بجمع معلومات عنهم عن قصد.
      </p>

      <h3>8. تحديثات على هذه السياسة</h3>
      <p>
        قد نقوم بتحديث سياسة الخصوصية هذه من حين لآخر. سيظهر تاريخ "آخر تحديث"
        في أعلى هذه الصفحة. استمرارك في استخدام الموقع بعد التحديثات يعتبر موافقة على السياسة المعدلة.
      </p>
    </div>
  </section>
</footer>

@endsection