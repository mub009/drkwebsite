@extends('frontend_v2.layouts.FrontendLayout')
@section('content')
    <section class="branches" id="branches">
      <div class="container">
        <div class="section-head">
          <div><p class="section-kicker"><span class="ar">مواقعنا</span><span class="en">OUR LOCATIONS</span></p><h2><span class="ar">فروعنا</span><span class="en">Our branches</span></h2><p><span class="ar">اختر الفرع المناسب، ثم افتح موقعه على الخريطة أو انتقل إلى صفحة تفاصيل الفرع.</span><span class="en">Choose a branch, open its map, or visit its existing branch details page.</span></p></div>
        </div>
        <div class="filters" role="group" aria-label="تصفية الفروع">
          <button class="filter-button active" data-filter="all" aria-pressed="true"><span class="ar">كل الفروع</span><span class="en">All branches</span></button>
          <button class="filter-button" data-filter="dammam" aria-pressed="false"><span class="ar">الدمام</span><span class="en">Dammam</span></button>
          <button class="filter-button" data-filter="khobar" aria-pressed="false"><span class="ar">الخبر</span><span class="en">Al Khobar</span></button>
          <button class="filter-button" data-filter="ahsa" aria-pressed="false"><span class="ar">الأحساء</span><span class="en">Al Ahsa</span></button>
          <button class="filter-button" data-filter="riyadh" aria-pressed="false"><span class="ar">الرياض</span><span class="en">Riyadh</span></button>
        </div>
        <div class="branch-grid" id="branchGrid">
          <article class="branch-card" data-city="dammam">
            <div class="card-top"><span class="branch-number">BRANCH 01</span><span class="pin-badge"><svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M19 10c0 5-7 11-7 11S5 15 5 10a7 7 0 1 1 14 0Z" stroke="currentColor" stroke-width="1.7"/><circle cx="12" cy="10" r="2.2" stroke="currentColor" stroke-width="1.7"/></svg></span></div>
            <h3><span class="ar">مستشفى د. خالد الرحيمي</span><span class="en">Dr. Khalid Alruhaimi Hospital</span></h3>
            <p class="branch-location"><span class="ar">الدمام</span><span class="en">Dammam</span></p>
            <p class="branch-desc"><span class="ar">مستشفى متكامل يعمل على مدار الساعة مع خدمات التنويم والجراحة والطوارئ.</span><span class="en">A full-service hospital with inpatient, surgery, and emergency services available around the clock.</span></p>
            <div class="branch-meta"><svg class="icon sm" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.7"/><path d="M12 7v5l3 2" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg><span><span class="ar">مفتوح 24 ساعة</span><span class="en">Open 24 hours</span></span></div>
            <div class="card-actions"><a class="small-link map" href="https://maps.app.goo.gl/UmEhmnbEFADFbEnw9" target="_blank" rel="noopener"><span class="ar">الاتجاهات</span><span class="en">Directions</span><svg class="icon sm" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M14 4h6v6M20 4l-9 9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><path d="M18 13v5a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg></a><a class="small-link details" href="https://www.dralruhaimi.com/branch_location/13"><span class="ar">تفاصيل الفرع</span><span class="en">Branch details</span></a></div>
          </article>
          <article class="branch-card" data-city="dammam">
            <div class="card-top"><span class="branch-number">BRANCH 02</span><span class="pin-badge"><svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M19 10c0 5-7 11-7 11S5 15 5 10a7 7 0 1 1 14 0Z" stroke="currentColor" stroke-width="1.7"/><circle cx="12" cy="10" r="2.2" stroke="currentColor" stroke-width="1.7"/></svg></span></div>
            <h3><span class="ar">مجمع د. خالد الرحيمي الطبي – الفرسان</span><span class="en">Al Fursan Medical Complex</span></h3>
            <p class="branch-location"><span class="ar">حي الفرسان · الدمام</span><span class="en">Al Fursan · Dammam</span></p>
            <p class="branch-desc"><span class="ar">مجمع طبي متكامل يضم خدمات التشخيص والاستشارات التخصصية.</span><span class="en">An integrated medical complex offering diagnostic services and specialist consultations.</span></p>
            <div class="branch-meta"><svg class="icon sm" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.7"/><path d="M12 7v5l3 2" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg><span><span class="ar">9:00 صباحًا – 11:00 مساءً</span><span class="en">9:00 AM – 11:00 PM</span></span></div>
            <div class="card-actions"><a class="small-link map" href="https://maps.app.goo.gl/kyaTLQfZhAZBBZAw6" target="_blank" rel="noopener"><span class="ar">الاتجاهات</span><span class="en">Directions</span><svg class="icon sm" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M14 4h6v6M20 4l-9 9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><path d="M18 13v5a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg></a><a class="small-link details" href="https://www.dralruhaimi.com/branch_location/14"><span class="ar">تفاصيل الفرع</span><span class="en">Branch details</span></a></div>
          </article>
          <article class="branch-card" data-city="khobar">
            <div class="card-top"><span class="branch-number">BRANCH 03</span><span class="pin-badge"><svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M19 10c0 5-7 11-7 11S5 15 5 10a7 7 0 1 1 14 0Z" stroke="currentColor" stroke-width="1.7"/><circle cx="12" cy="10" r="2.2" stroke="currentColor" stroke-width="1.7"/></svg></span></div>
            <h3><span class="ar">مجمع د. خالد الرحيمي الطبي – العزيزية</span><span class="en">Al Aziziyah Medical Complex</span></h3>
            <p class="branch-location"><span class="ar">العزيزية · الخبر</span><span class="en">Al Aziziyah · Al Khobar</span></p>
            <p class="branch-desc"><span class="ar">خدمات عامة وتخصصية مع رعاية شاملة وتشخيص متكامل.</span><span class="en">General and specialist services, comprehensive care, and integrated diagnostics.</span></p>
            <div class="branch-meta"><svg class="icon sm" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.7"/><path d="M12 7v5l3 2" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg><span><span class="ar">9:00 صباحًا – 11:00 مساءً</span><span class="en">9:00 AM – 11:00 PM</span></span></div>
            <div class="card-actions"><a class="small-link map" href="https://maps.app.goo.gl/Tn1q36mtuBZrPqBNA" target="_blank" rel="noopener"><span class="ar">الاتجاهات</span><span class="en">Directions</span><svg class="icon sm" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M14 4h6v6M20 4l-9 9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><path d="M18 13v5a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg></a><a class="small-link details" href="https://www.dralruhaimi.com/branch_location/15"><span class="ar">تفاصيل الفرع</span><span class="en">Branch details</span></a></div>
          </article>
          <article class="branch-card" data-city="khobar">
            <div class="card-top"><span class="branch-number">BRANCH 04</span><span class="pin-badge"><svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M19 10c0 5-7 11-7 11S5 15 5 10a7 7 0 1 1 14 0Z" stroke="currentColor" stroke-width="1.7"/><circle cx="12" cy="10" r="2.2" stroke="currentColor" stroke-width="1.7"/></svg></span></div>
            <h3><span class="ar">مجمع د. خالد الرحيمي الطبي – شارع البيبسي</span><span class="en">Pepsi Street Medical Complex</span></h3>
            <p class="branch-location"><span class="ar">شارع البيبسي · الخبر</span><span class="en">Pepsi Street · Al Khobar</span></p>
            <p class="branch-desc"><span class="ar">فرع مجهز بأجهزة تشخيص حديثة وفريق طبي متخصص.</span><span class="en">A branch equipped with modern diagnostic technology and a specialist medical team.</span></p>
            <div class="branch-meta"><svg class="icon sm" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.7"/><path d="M12 7v5l3 2" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg><span><span class="ar">9:00 صباحًا – 11:00 مساءً</span><span class="en">9:00 AM – 11:00 PM</span></span></div>
            <div class="card-actions"><a class="small-link map" href="https://maps.app.goo.gl/HdWz6dGk3g4fpgbt6" target="_blank" rel="noopener"><span class="ar">الاتجاهات</span><span class="en">Directions</span><svg class="icon sm" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M14 4h6v6M20 4l-9 9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><path d="M18 13v5a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg></a><a class="small-link details" href="https://www.dralruhaimi.com/branch_location/17"><span class="ar">تفاصيل الفرع</span><span class="en">Branch details</span></a></div>
          </article>
          <article class="branch-card" data-city="ahsa">
            <div class="card-top"><span class="branch-number">BRANCH 05</span><span class="pin-badge"><svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M19 10c0 5-7 11-7 11S5 15 5 10a7 7 0 1 1 14 0Z" stroke="currentColor" stroke-width="1.7"/><circle cx="12" cy="10" r="2.2" stroke="currentColor" stroke-width="1.7"/></svg></span></div>
            <h3><span class="ar">مجمع د. خالد الرحيمي الطبي – الأحساء</span><span class="en">Al Ahsa Medical Complex</span></h3>
            <p class="branch-location"><span class="ar">حي الفتح · الأحساء</span><span class="en">Al Fath · Al Ahsa</span></p>
            <p class="branch-desc"><span class="ar">خدمات عيادات خارجية وتشخيص متقدمة في منطقة الأحساء.</span><span class="en">Outpatient clinic services and advanced diagnostics in Al Ahsa.</span></p>
            <div class="branch-meta"><svg class="icon sm" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.7"/><path d="M12 7v5l3 2" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg><span><span class="ar">9:00 صباحًا – 11:00 مساءً</span><span class="en">9:00 AM – 11:00 PM</span></span></div>
            <div class="card-actions"><a class="small-link map" href="https://maps.app.goo.gl/YmvK83EXgKMcY43v9" target="_blank" rel="noopener"><span class="ar">الاتجاهات</span><span class="en">Directions</span><svg class="icon sm" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M14 4h6v6M20 4l-9 9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><path d="M18 13v5a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg></a><a class="small-link details" href="https://www.dralruhaimi.com/branch_location/16"><span class="ar">تفاصيل الفرع</span><span class="en">Branch details</span></a></div>
          </article>
          <article class="branch-card" data-city="khobar">
            <div class="card-top"><span class="branch-number">BRANCH 06</span><span class="pin-badge"><svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M19 10c0 5-7 11-7 11S5 15 5 10a7 7 0 1 1 14 0Z" stroke="currentColor" stroke-width="1.7"/><circle cx="12" cy="10" r="2.2" stroke="currentColor" stroke-width="1.7"/></svg></span></div>
            <h3><span class="ar">مجمع د. خالد الرحيمي الطبي – حي العليا</span><span class="en">Al Olaya Medical Complex</span></h3>
            <p class="branch-location"><span class="ar">حي العليا · الخبر</span><span class="en">Al Olaya · Al Khobar</span></p>
            <p class="branch-desc"><span class="ar">رعاية تخصصية مع التركيز على راحة المريض والتقنيات الحديثة.</span><span class="en">Specialist care focused on patient comfort and modern technology.</span></p>
            <div class="branch-meta"><svg class="icon sm" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.7"/><path d="M12 7v5l3 2" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg><span><span class="ar">9:00 صباحًا – 11:00 مساءً</span><span class="en">9:00 AM – 11:00 PM</span></span></div>
            <div class="card-actions"><a class="small-link map" href="https://maps.app.goo.gl/wBrgsji62MzwmT4i6" target="_blank" rel="noopener"><span class="ar">الاتجاهات</span><span class="en">Directions</span><svg class="icon sm" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M14 4h6v6M20 4l-9 9" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/><path d="M18 13v5a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/></svg></a><a class="small-link details" href="https://www.dralruhaimi.com/branch_location/18"><span class="ar">تفاصيل الفرع</span><span class="en">Branch details</span></a></div>
          </article>
          <article class="branch-card" data-city="riyadh">
            <div class="card-top"><span class="branch-number">BRANCH 07</span><span class="pin-badge"><svg class="icon" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M19 10c0 5-7 11-7 11S5 15 5 10a7 7 0 1 1 14 0Z" stroke="currentColor" stroke-width="1.7"/><circle cx="12" cy="10" r="2.2" stroke="currentColor" stroke-width="1.7"/></svg></span></div>
            <h3><span class="ar">فرع مستشفى د. خالد الرحيمي – الرياض</span><span class="en">Dr. Khalid Alruhaimi Hospital – Riyadh</span></h3>
            <p class="branch-location"><span class="ar">حي قرطبة · الرياض</span><span class="en">Qurtubah · Riyadh</span></p>
            <p class="branch-desc"><span class="ar">تواصل مع فريقنا للحصول على موقع الفرع وتفاصيل الزيارة.</span><span class="en">Contact our team for the branch location and visit details.</span></p>
            <div class="branch-meta"><svg class="icon sm" viewBox="0 0 24 24" fill="none" aria-hidden="true"><circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="1.7"/><path d="M12 7v5l3 2" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg><span><span class="ar">اتصل لتأكيد ساعات العمل</span><span class="en">Call to confirm opening hours</span></span></div>
            <div class="card-actions"><a class="small-link map" href="tel:+966920010436"><span class="ar">اتصل لمعرفة الموقع</span><span class="en">Call for directions</span><svg class="icon sm" viewBox="0 0 24 24" fill="none" aria-hidden="true"><path d="M7 3h3l2 5-2.2 1.7a15 15 0 0 0 4.5 4.5L16 12l5 2v3c0 1.1-.9 2-2 2C10.2 19 5 13.8 5 7c0-2.2.8-4 2-4Z" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/></svg></a></div>
          </article>
          <p class="empty-state" id="emptyState"><span class="ar">لا توجد فروع في هذه المنطقة.</span><span class="en">No branches in this area.</span></p>
        </div>
      </div>
    </section>

@endsection

@push('scripts')
<script src="{{ asset('frontend_v2/js/contactus.js') }}" defer></script>
@endpush
