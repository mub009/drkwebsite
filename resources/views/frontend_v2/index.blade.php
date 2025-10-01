@extends('frontend_v2.layouts.FrontendLayout')
@section('content')
<section class="hero services-section " style="margin-top: 80px !important;">
    <div class="hero-bg hero-bg-1"></div>
    <div class="hero-bg hero-bg-2"></div>
    <div class="overlay"></div>

    <div class="hero-content">
        <h1 class="hero-title anima" data-aos="fade-zoom-in">
            مستشفى د. خالد الرحيّمي – رعاية متقدمة
        </h1>

        <h5 class="hed_maindes">
            احصل على أفضل رعاية طبية وجراحية وتجميلية مع نخبة من الأطباء الموثوقين وأحدث التقنيات. احجز موعدك اليوم.
        </h5>


        <div class="hero-actions">
            <div class="appointment-button-container">
                <a href="tel:0550655152">
                    <button class="appointment-button" dir="rtl">
                        <span class="appointment-text">اتصل بنا</span>
                        <div class="doctor-icon-container">
                            <img src="{{ asset('frontend_v2/assets/Icons/Arrow.png') }}" alt="سهم" />
                        </div>
                    </button>
                </a>
            </div>


        </div>
    </div>
</section>

<section class="services-section services-section" dir="rtl">
    <div class="services-grid">
        <div class="services-header fade-in">
            <img src="{{ asset('frontend_v2/assets/Icons/istock-doc.png') }}" alt="طبيب" class="services-image" />
            <h2 class="services-title">ماذا نقدم لك</h2>
            <div class="section-divider-vertical"></div>
        </div>

        <!-- Insurance -->
        <article class="service-card fade-in">
            <div class="service-logo-container">
                <img src="{{ asset('frontend_v2/assets/Icons/Mask.png') }}" alt="شعار المستشفى" />
            </div>
            <div class="service-icon-container">
                <img src="{{ asset('frontend_v2/assets/Icons/Insurance.png') }}" alt="أيقونة التأمين" />
            </div>
            <div class="service-info">
                <h3 class="service-category">شركات التأمين</h3>
                <p class="service-description">شركاؤنا في التأمين</p>
                <div class="learn-more-link">
                    <div class="learn-more-arrow">
                        <img src="{{ asset('frontend_v2/assets/Icons/arrow-down.png') }}" alt="سهم" />
                    </div>
                    <span class="learn-more-text">اعرف المزيد</span>
                </div>
            </div>
        </article>

        <!-- Doctors -->
        <article class="service-card">
            <div class="service-logo-container">
                <img src="{{ asset('frontend_v2/assets/Icons/Mask.png') }}" alt="شعار المستشفى" />
            </div>
            <div class="service-icon-container">
                <img src="{{ asset('frontend_v2/assets/Icons/Doctors.png') }}" alt="أيقونة الأطباء" />
            </div>
            <div class="service-info">
                <h3 class="service-category">أطباؤنا</h3>
                <p class="service-description">أطباؤنا المتميزون</p>
                <div class="learn-more-link">
                    <div class="learn-more-arrow">
                        <img src="{{ asset('frontend_v2/assets/Icons/arrow-down.png') }}" alt="سهم" />
                    </div>
                    <span class="learn-more-text">اعرف المزيد</span>
                </div>
            </div>
        </article>

        <!-- Specialities -->
        <article class="service-card">
            <div class="service-logo-container">
                <img src="{{ asset('frontend_v2/assets/Icons/Mask.png') }}" alt="شعار المستشفى" />
            </div>
            <div class="service-icon-container">
                <img src="{{ asset('frontend_v2/assets/Icons/Specialities.png') }}" alt="أيقونة التخصصات" />
            </div>
            <div class="service-info">
                <h3 class="service-category">تخصصاتنا</h3>
                <p class="service-description">خدمات متعددة التخصصات</p>
                <div class="learn-more-link">
                    <div class="learn-more-arrow">
                        <img src="{{ asset('frontend_v2/assets/Icons/arrow-down.png') }}" alt="سهم" />
                    </div>
                    <span class="learn-more-text">اعرف المزيد</span>
                </div>
            </div>
        </article>
    </div>

    <div class="section-divider"></div>
</section>


<div class="section  anima" data-aos="fade-zoom-in" dir="rtl" lang="ar">
    <div class="section-container">
        <!-- القسم الأيسر -->
        <div class="left-section">
            <div class="left-image">
                <img src="{{ asset('frontend_v2/assets/images/image6.jpg') }}" alt="طبيب" />
            </div>

            <div class="badge-emergency" style="left: 90px !important;">دعم طارئ على مدار الساعة</div>

            <div class="satisfied-patients">
                <div class="avatarsz">
                    <img src="{{ asset('frontend_v2/assets/images/p1.jpg') }}" alt="مريض 1" />
                    <img src="{{ asset('frontend_v2/assets/images/p2.jpg') }}" alt="مريض 2" />
                    <img src="{{ asset('frontend_v2/assets/images/p3.jpg') }}" alt="مريض 3" />
                    <img src="{{ asset('frontend_v2/assets/images/p4.jpg') }}" alt="مريض 4" />
                </div>
                <div class="text">
                    <span class="count">+150 ألف</span><br />
                    <span class="label">مرضى راضون</span>
                </div>
            </div>
        </div>

        <!-- القسم الأيمن -->
        <div class="right-content" dir="rtl">
            <h2 class="main-headline">
                <span class="headline-part">صحتك هي أولويتنا، ورعايتك</span>
                <span class="headline-emphasis">مسؤوليتنا.</span>
            </h2>
            <div class="feature-columns">
                <div class="column">
                    <div>
                        <h4>مرافق شاملة</h4>
                        <p>
                            مرافقنا مجهزة بأحدث الأجهزة الطبية المستوردة من الشركات العالمية الرائدة،
                            مما يضمن تشخيصًا دقيقًا وراحة في كل مرحلة من مراحل علاجك.
                        </p>
                    </div>
                    <div>
                        <h4>خبراء نخبة</h4>
                        <p>
                            يضم فريقنا نخبة من الأطباء والاستشاريين وهيئة التمريض ذوي الخبرة الدولية
                            والمعايير المهنية العالية.
                        </p>
                    </div>
                </div>

                <div class="vertical-divider">
                    <img src="{{ asset('frontend_v2/assets/images/Heart.png') }}" alt="قلب" />
                </div>

                <div class="column">
                    <div>
                        <h4>معايير سعودية بتميز عالمي</h4>
                        <p>
                            نحن ملتزمون بتقديم خدمات رعاية صحية وفق أعلى المواصفات الدولية
                            مع الالتزام بالمعايير السعودية الموثوقة.
                        </p>
                    </div>
                    <div>
                        <h4>رعاية تتجاوز التوقعات</h4>
                        <p>
                            نهتم بكل تفاصيل رحلتك العلاجية من الاستشارة إلى المتابعة—
                            لنقدم لك تجربة طبية مميزة تعكس أفضل الممارسات العالمية.
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="services-gridz" dir="rtl">
        <div class="card light">
            <div class="card-content">
                <h3>ابحث بسهولة عن الأطباء الموثوقين</h3>
                <p>احجز موعدًا مع أفضل الأخصائيين في خطوات بسيطة وسهلة.</p>
            </div>
            <img src="{{ asset('frontend_v2/assets/images/ii1.png') }}" alt="طبيب" class="card-image" />
            <div class="card-button light-btn">
                <img src="{{ asset('frontend_v2/assets/Icons/Arrow3.png') }}" alt="" />
            </div>
        </div>

        <div class="card dark">
            <div class="card-content">
                <h3>مواعيد مؤكدة بدون تأخير</h3>
                <p>استشارتك مضمونة مع الحجز الفوري والتأكيد السريع.</p>
            </div>
            <img src="{{ asset('frontend_v2/assets/images/ii2.png') }}" alt="مواعيد مؤكدة" class="card-image" />
            <div class="card-button light-btn">
                <img src="{{ asset('frontend_v2/assets/Icons/Arrow4.png') }}" alt="" />
            </div>
        </div>

        <div class="card light">
            <div class="card-content">
                <h3>توصيل الأدوية على مدار الساعة</h3>
                <p>احصل على أدويتك الأساسية إلى باب منزلك في أي وقت بأمان وراحة.</p>
            </div>
            <img src="{{ asset('frontend_v2/assets/images/ii3.jpg') }}" alt="توصيل الأدوية" class="card-image" />
            <div class="card-button light-btn">
                <img src="{{ asset('frontend_v2/assets/Icons/Arrow3.png') }}" alt="" />
            </div>
        </div>

        <div class="card dark">
            <div class="card-content">
                <h3>استشارات فيديو فورية</h3>
                <p>تواصل مع طبيبك في أقل من دقيقة – آمن وسريع ومريح.</p>
            </div>
            <img src="{{ asset('frontend_v2/assets/images/ii4.png') }}" alt="استشارة فيديو" class="card-image" />
            <div class="card-button light-btn">
                <img src="{{ asset('frontend_v2/assets/Icons/Arrow4.png') }}" alt="" />
            </div>
        </div>

        <div class="card light">
            <div class="card-content">
                <h3>جمع العينات من المنزل</h3>
                <p>قم بإجراء فحوصاتك المخبرية بسهولة وراحة من منزلك.</p>
            </div>
            <img src="{{ asset('frontend_v2/assets/images/ii5.jpg') }}" alt="فحص مخبري" class="card-image" />
            <div class="card-button light-btn">
                <img src=" {{ asset('frontend_v2/assets/Icons/Arrow3.png') }}" alt="" />
            </div>
        </div>
    </div>

</div>


<section class="section sectionz sectionzz anima" data-aos="fade-zoom-in" dir="rtl" lang="ar">
    <div class="medical-facility-showcase showcasez">
        <div class="showcase-container">
            <div class="content-wrapper">
                <main class="main-content main-contentz">
                    <div class="content-header">
                        <h1 class="brand-title">
                            <span class="brand-name">عالمياً</span>
                            <span class="brand-tagline"> رعاية صحية موثوقة</span>
                        </h1>
                        <h2 class="main-headline">
                            <span class="headline-part">مستشفى د. خالد الرحيّمي</span>
                            <span class="headline-emphasis"> – رعاية طبية بمستوى عالمي</span>
                        </h2>
                        <p class="facility-description">
                            نحن نؤمن أن الرعاية الاستثنائية تبدأ بأشخاص استثنائيين. لهذا السبب نجمع بين أحدث
                            التقنيات الطبية مع الاستشاريين والأطباء المتخصصين لتقديم رعاية تتمحور حول المريض،
                            تجمع بين التميز الطبي والرحمة الحقيقية.
                        </p>
                    </div>
                    <div class="features-grid">
                        <article class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="" />
                            </div>
                            <h3 class="feature-title">
                                أطباء واستشاريون معتمدون دولياً
                            </h3>
                        </article>
                        <article class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="" />
                            </div>
                            <h3 class="feature-title">أحدث التقنيات والمعدات الطبية</h3>
                        </article>
                        <article class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="" />
                            </div>
                            <h3 class="feature-title">
                                رعاية عالية الجودة وفعّالة من حيث التكلفة
                            </h3>
                        </article>
                        <article class="feature-item">
                            <div class="feature-icon">
                                <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-line.png') }}" alt="" />
                            </div>
                            <h3 class="feature-title">قبول جميع شركات التأمين الكبرى</h3>
                        </article>
                    </div>
                </main>
                <aside class="hero-image-section">
                    <div class="hero-image-container">
                        <div class="hero-image" style="
                  background-image: url('frontend_v2/assets/Icons/Union.png');
                  background-size: cover;
                  background-position: center;
                " role="img" aria-label="داخل المنشأة الطبية"></div>
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
            </div>
        </div>
        <section class="awards-section">
            <div class="awards-container">
                <div class="award-item">
                    <img src="{{ asset('frontend_v2/assets/Icons/award.png') }}" alt="أيقونة جائزة" class="award-image" />
                    <div class="award-text">
                        <h3>مراجع راضي</h3>
                        <p>1,300,000 +</p>
                    </div>
                </div>
                <div class="award-item">
                    <img src="{{ asset('frontend_v2/assets/Icons/award.png') }}" alt="أيقونة جائزة" class="award-image" />
                    <div class="award-text">
                        <h3>طبيب في خدمتك</h3>
                        <p>60 +</p>
                    </div>
                </div>
                <div class="award-item">
                    <img src="{{ asset('frontend_v2/assets/Icons/award.png') }}" alt="أيقونة جائزة" class="award-image" />
                    <div class="award-text">
                        <h3>
                            فروع في المملكة <br />
                            العربية السعودية
                        </h3>
                        <p>8</p>
                    </div>
                </div>
                <div class="award-item">
                    <img src="{{ asset('frontend_v2/assets/Icons/award.png') }}" alt="أيقونة جائزة" class="award-image" />
                    <div class="award-text">
                        <h3>سنوات من الخبرة</h3>
                        <p>20 +</p>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

<section class="section topz  anima" data-aos="fade-zoom-in">
    <div class="team-section">
        <div class="team-container">
            <div class="team-header">
                <h2 class="section-title">تعرف على الفريق</h2>
                <div class="header-content" style="align-items: center; gap: 2px">
                    <h2 class="main-headline" dir="rtl">
                        <span class="headline-part">تعرف على أطبائنا المتخصصين في</span>
                        <span class="headline-emphasis">DRK</span>
                    </h2>

                    <div>
                        <div class="satisfied-patients" style="position: unset; box-shadow: unset">
                            <div class="avatarsz">
                                <img src="{{ asset('frontend_v2/assets/images/ds1.png') }}" alt="الصورة 1" />
                                <img src="{{ asset('frontend_v2/assets/images/ds2.png') }}" alt="الصورة 2" />
                                <img src="{{ asset('frontend_v2/assets/images/ds3.png') }}" alt="الصورة 3" />
                                <img src="{{ asset('frontend_v2/assets/images/ds4.png') }}" alt="الصورة 4" />
                                <img src="{{ asset('frontend_v2/assets/images/ds5.png') }}" alt="الصورة 5" />
                            </div>
                            <div class="text">
                                <span class="count">+50</span><br />
                                <span class="label">طبيب ماهر</span>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="team-description" dir="rtl">
                    يجمع فريقنا الطبي بين أكثر من 20 عامًا من الخبرة وأحدث التطورات في التكنولوجيا الطبية.
                    يضم المستشفى مجموعة متميزة من الاستشاريين والأخصائيين المعتمدين دوليًا،
                    المكرسين لمعالجة السبب الجذري للأمراض وتعزيز صحة ورفاهية كل مريض.
                </p>

            </div>

            <main class="team-content">
                <div class="doctors-grid">
                    @foreach ($doctors as $item)
                    <article class="doctor-card">
                        <div class="card-background"></div>
                        <div class="card-watermark"></div>
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
                <a href="{{ route('services') }}" style="text-decoration: none;">
                    <div class="view-all-section">
                        <button class="view-all-button" type="button">
                            <span class="view-all-text">عرض جميع الأطباء</span>
                        </button>
                        <div>
                            <img src="{{ asset('frontend_v2/assets/Icons/arrow-up-linestr.png') }}" alt="سهم" />
                        </div>
                    </div>
                </a>
            </main>
        </div>
    </div>
</section>

<section class="section sectionzz  anima" data-aos="fade-zoom-in" dir="rtl" lang="ar">
    <div class="departments-section">
        <div class="departments-container">
            <div class="departments-content">
                <div class="departments-header" style="left: 0 !important; right: 60px !important;">
                    <h2 class="departments-label" dir="rtl">أقسامنا</h2>
                    <h2 class="main-headline" dir="rtl">
                        <span class="headline-emphasis">أقسامنا الطبية المتخصصة</span>
                        <span class="headline-part"> والمتنوعة</span>
                    </h2>

                </div>
                <a href="{{ route('services') }}">
                    <div class="departments-scroll-container">
                        <div class="departments-grid">
                            @foreach($department as $row)
                            <article class="department-card">
                                <div class="department-image-container">
                                    <img class="department-image"
                                        src="{{ asset('images').'/'.$row->image}}" alt="{{$row->department_ar}}"></img>
                                    <div class="department-icon">
                                        <img src="{{ asset('frontend_v2/assets/Icons/Mainarrow.png') }}" alt="" />
                                    </div>
                                </div>
                                <h3 class="department-name">{{$row->department_ar}}</h3>
                                <p class="department-description">
                                    {{ \Illuminate\Support\Str::limit(strip_tags(html_entity_decode($row->department_details)), 40) }}
                                </p>
                            </article>
                            @endforeach
                        </div>
                    </div>
                </a>
                <div class="appointment-cta">
                    <div class="appointment-content">
                        <div class="appointment-textz">
                            <h2 class="appointment-title">احجز موعدك الآن</h2>
                            <p class="appointment-description">
                                ابدأ رحلتك نحو رعاية صحية عالمية المستوى.
                                فريقنا الطبي جاهز لتقديم علاج شخصي يناسب احتياجاتك بدقة واهتمام.
                            </p>

                        </div>
                        <div class="appointment-button-container">
                            <a href="tel:0550655152">
                                <button class="appointment-buttonz">
                                    <span class="appointment-textb">احجز موعدًا</span>
                                    <div class="doctor-icon-container"><img src="{{ asset('frontend_v2/assets/Icons/Arrow.png') }}" alt="" />
                                    </div>
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="section topz anima" data-aos="fade-zoom-in" dir="rtl">
    <div class="partners-section">
        <div class="partners-header">
            <h2 class="main-headline" dir="rtl">
                <span class="headline-part">شركاؤنا في</span>
                <span class="headline-emphasis">النجاح</span>
            </h2>

            <p dir="rtl">
                نحن نفخر بالتعاون مع المؤسسات والمنظمات الرائدة لضمان <br>
                رعاية صحية ترتقي إلى المعايير العالمية. التزامنا بالتميز يبدأ <br>
                من خلال الشراكات الموثوقة التي نبنيها.
            </p>

        </div>

        <div class="partners-logos-grid">
            @foreach ($partner as $item)
            <img src="{{asset('images').'/'.$item->image}}" alt="{{$item->partner_ar}}" />
            @endforeach

        </div>
    </div>
    <div class="partners-section" style="margin-bottom: 0px !important;">
        <div class="partners-header">
            <h2 class="main-headline" dir="rtl">
                <span class="headline-emphasis">شركات</span>
                <span class="headline-part">التأمين</span>
            </h2>
            <p dir="rtl">
                نحن نتعاون مع جميع شركات التأمين الكبرى لضمان تغطية شاملة<br>
                وتجربة رعاية صحية سلسة.
            </p>


        </div>

        <div class="partners-logos-gridzz">
            @foreach ($insurance as $item)
            <img src="{{asset('images').'/'.$item->image}}" alt="{{$item->insurance_ar}}" />
            @endforeach
        </div>
    </div>
</section>

<section class="section sectionzz" dir="rtl">
    <div class="medical-facility-showcase">
        <div class="showcase-container" style="align-items: flex-start">
            <div class="blog-header  anima" data-aos="fade-zoom-in">
                <h2 class="blog-category">مدونتنا</h2>
                <h2 class="main-headline">
                    <span class="headline-part">نصائح</span>
                    <span class="headline-emphasis">الصحة والعافية</span>
                    <span class="headline-part">الطبية</span>
                </h2>
                <p class="blog-description" dir="rtl">
                    اكتشف أحدث المقالات الطبية، ونصائح العافية، ورؤى الخبراء المصممة <br>
                    لمساعدتك على اتخاذ قرارات واثقة بشأن صحتك. نحن نشاركك المعرفة <br>
                    التي تحتاجها لتظل في أفضل حال دائمًا.
                </p>

            </div>

            <div class="blog-grid  anima" data-aos="fade-zoom-in">

                @foreach ($article as $item)
                <article class="blog-card">
                    <img src="{{asset('images').'/'.$item->image}}" alt="{{$item->title_ar}}" class="blog-image" />
                    <div class="blog-content">
                        <div class="blog-card-header">
                            <h3 class="blog-card-title">
                                {{$item->title_ar}}
                            </h3>
                            <time class="blog-date" datetime="{{ $item->created_at->format('Y-m-d') }}">
                                {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('d F Y') }}
                            </time>
                        </div>
                        <div class="blog-card-body">
                            <p class="blog-excerpt">
                                {{ \Illuminate\Support\Str::limit(strip_tags(html_entity_decode($item->article_ar)), 60) }}
                            </p>
                            <a href="{{route('articleDetails', ['surl' => $item->slug])}}" class="blog-link">
                                <span class="link-text">عرض التفاصيل</span>
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

<section class="section sectionz sectionzz tonbotz" style="padding: 40px 0px" dir="rtl">
    <div class="partners-section" style="text-align: start">
        <div class="faq-container anima" data-aos="fade-zoom-in">
            <div class="faq-header">
                <div class="header-content">
                    <p class="section-label">هل لديك أسئلة؟</p>

                    <h2 class="main-headline">
                        <span class="headline-part">الأسئلة الشائعة</span>
                        <span class="headline-emphasis">(FAQ)</span>
                    </h2>

                    <p class="description">
                        نحن هنا لمساعدتك والإجابة على جميع استفساراتك بأسرع وقت ممكن.
                        إذا لم تجد ما تبحث عنه، <br>
                        <a href="https://wa.me/966138955555" style="font-weight: bold;color: #000;">
                            تواصل معنا الآن
                        </a>
                    </p>
                </div>
                <a href="https://youtu.be/X98A7h1uX94?si=m0Rlrlk-hFv36az9">
                    <video class="header-video" src="{{ asset('frontend_v2/assets/video/v1.mp4') }}" autoplay muted loop playsinline></video>
                </a>
            </div>

            <div class="faq-list">
                <article class="faq-item expanded" data-faq="1">
                    <div class="faq-question">
                        <h3 class="question-text">كيف يمكنني حجز موعد؟</h3>
                        <button class="toggle-button" aria-expanded="true" aria-controls="answer-1">
                            <img class="close-icon" src="{{ asset('frontend_v2/assets/Icons/Vector1.png') }}" alt="" />
                            <img class="plus-icon" src="{{ asset('frontend_v2/assets/Icons/Vector.png') }}" alt="" />
                        </button>
                    </div>
                    <div class="faq-answer" id="answer-1">
                        <p class="answer-text">
                            يمكنك الحجز بسهولة عبر موقعنا الإلكتروني، الاتصال بخط المساعدة المتاح على مدار الساعة،
                            أو زيارة المستشفى مباشرة.
                            قد تتوفر المواعيد في نفس اليوم حسب التخصص.
                        </p>
                    </div>
                </article>

                <article class="faq-item" data-faq="2">
                    <div class="faq-question">
                        <h3 class="question-text">ماذا يجب أن أحضر في زيارتي الأولى؟</h3>
                        <button class="toggle-button" aria-expanded="false" aria-controls="answer-2">
                            <img class="close-icon" src="{{ asset('frontend_v2/assets/Icons/Vector1.png') }}" alt="" />
                            <img class="plus-icon" src="{{ asset('frontend_v2/assets/Icons/Vector.png') }}" alt="" />
                        </button>
                    </div>
                    <div class="faq-answer" id="answer-2">
                        <p class="answer-text">
                            يرجى إحضار بطاقة الهوية، بطاقة التأمين الصحي، وأي تقارير أو نتائج فحوصات طبية سابقة.
                        </p>
                    </div>
                </article>

                <article class="faq-item" data-faq="3">
                    <div class="faq-question">
                        <h3 class="question-text">هل تقدمون الاستشارات الطبية عن بعد أو الافتراضية؟</h3>
                        <button class="toggle-button" aria-expanded="false" aria-controls="answer-3">
                            <img class="close-icon" src="{{ asset('frontend_v2/assets/Icons/Vector1.png') }}" alt="" />
                            <img class="plus-icon" src="{{ asset('frontend_v2/assets/Icons/Vector.png') }}" alt="" />
                        </button>
                    </div>
                    <div class="faq-answer" id="answer-3">
                        <p class="answer-text">
                            نعم، نقدم استشارات افتراضية مع أطبائنا الخبراء لتسهيل الوصول إلى الرعاية الصحية من أي
                            مكان.
                        </p>
                    </div>
                </article>

                <article class="faq-item" data-faq="4">
                    <div class="faq-question">
                        <h3 class="question-text">هل تتوفر خدمات الطوارئ؟</h3>
                        <button class="toggle-button" aria-expanded="false" aria-controls="answer-4">
                            <img class="close-icon" src="{{ asset('frontend_v2/assets/Icons/Vector1.png') }}" alt="" />
                            <img class="plus-icon" src="{{ asset('frontend_v2/assets/Icons/Vector.png') }}" alt="" />
                        </button>
                    </div>
                    <div class="faq-answer" id="answer-4">
                        <p class="answer-text">
                            بالتأكيد. قسم الطوارئ لدينا مجهز بالكامل ويعمل على مدار الساعة لخدمتك في أي حالة طارئة.
                        </p>
                    </div>
                </article>

                <article class="faq-item" data-faq="5">
                    <div class="faq-question">
                        <h3 class="question-text">كيف يمكنني الوصول إلى نتائج المختبر أو الأشعة؟</h3>
                        <button class="toggle-button" aria-expanded="false" aria-controls="answer-5">
                            <img class="close-icon" src="{{ asset('frontend_v2/assets/Icons/Vector1.png') }}" alt="" />
                            <img class="plus-icon" src="{{ asset('frontend_v2/assets/Icons/Vector.png') }}" alt="" />
                        </button>
                    </div>
                    <div class="faq-answer" id="answer-5">
                        <p class="answer-text">
                            يمكن الحصول على النتائج مباشرة من المختبر، أو الوصول إليها عبر حسابك الإلكتروني للمرضى،
                            أو تقديمها لك من قبل الطبيب المعالج.
                        </p>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>



<section class="section sectionzz" dir="rtl">
    <div class="medical-facility-showcase">
        <div class="testimonials-container">
            <div class="testimonials-header anima" data-aos="fade-zoom-in">
                <p class="section-label" style="margin-bottom: 25px">
                    آراء المرضى
                </p>
                <h2 class="main-headline">
                    <span class="headline-emphasis">قصص </span>
                    <span class="headline-part">مرضانا</span>
                </h2>
                <p class="section-description">
                    لكل مريض قصة. استمعوا إلى رحلاتهم واكتشفوا الرعاية الرحيمة وراء عملنا.
                </p>
            </div>

            <div class="testimonials-grid anima" data-aos="fade-zoom-in">
                <article class="testimonial-card">
                    <div class="card-content">
                        <div class="card-header">
                            <div class="card-header-content">
                                <div class="quote-icon">
                                    <img src="{{ asset('frontend_v2/assets/Icons/xdot1.png') }}" alt="اقتباس" class="quote-image" />
                                </div>
                                <div class="rating-container">
                                    <span class="rating-score">5.0</span>
                                    <img src="{{ asset('frontend_v2/assets/Icons/star.png') }}" alt="تقييم 5 نجوم" class="rating-stars" />
                                </div>
                            </div>
                            <blockquote class="testimonial-text">
                                "تجربتي مع قسم النساء والتوليد كانت ممتازة للغاية. دعم الفريق الطبي لي في كل خطوة
                                وجعلني أشعر بالراحة والطمأنينة التامة. ممتنة جدًا لرعايتهم." 😊
                            </blockquote>
                        </div>
                        <div class="card-divider"></div>
                        <div class="customer-info">
                            <h3 class="customer-name">السيدة سارة العتيبي</h3>
                            <p class="customer-location">الأحساء، المملكة العربية السعودية</p>
                        </div>
                    </div>
                </article>

                <article class="testimonial-card">
                    <div class="card-content">
                        <div class="card-header">
                            <div class="card-header-content">
                                <div class="quote-icon">
                                    <img src="{{ asset('frontend_v2/assets/Icons/xdot1.png') }}" alt="اقتباس" class="quote-image" />
                                </div>
                                <div class="rating-container">
                                    <span class="rating-score">5.0</span>
                                    <img src="{{ asset('frontend_v2/assets/Icons/star.png') }}" alt="تقييم 5 نجوم" class="rating-stars" />
                                </div>
                            </div>
                            <blockquote class="testimonial-text">
                                "كان ابني بحاجة إلى متابعة دقيقة، وكان فريق الأطفال صبورًا جدًا وشرح كل شيء بوضوح.
                                شعرت بالاطمئنان والثقة في رعايتهم." 👶✨
                            </blockquote>
                        </div>
                        <div class="card-divider"></div>
                        <div class="customer-info">
                            <h3 class="customer-name">السيد محمد الغامدي</h3>
                            <p class="customer-location">الفُرسان، المملكة العربية السعودية</p>
                        </div>
                    </div>
                </article>

                <article class="testimonial-card">
                    <div class="card-content">
                        <div class="card-header">
                            <div class="card-header-content">
                                <div class="quote-icon">
                                    <img src="{{ asset('frontend_v2/assets/Icons/xdot1.png') }}" alt="اقتباس" class="quote-image" />
                                </div>
                                <div class="rating-container">
                                    <span class="rating-score">5.0</span>
                                    <img src="{{ asset('frontend_v2/assets/Icons/star.png') }}" alt="تقييم 5 نجوم" class="rating-stars" />
                                </div>
                            </div>
                            <blockquote class="testimonial-text">
                                "كان قسم الطوارئ سريعًا ومنظمًا بشكل جيد. منذ لحظة دخولنا، شعرنا بالأمان وفي أيدٍ
                                أمينة. جزاهم الله خيرًا."
                            </blockquote>
                        </div>
                        <div class="card-divider"></div>
                        <div class="customer-info">
                            <h3 class="customer-name">السيد عبدالله الشمراني</h3>
                            <p class="customer-location">العزيزية، المملكة العربية السعودية</p>
                        </div>
                    </div>
                </article>

                <article class="testimonial-card">
                    <div class="card-content">
                        <div class="card-header">
                            <div class="card-header-content">
                                <div class="quote-icon">
                                    <img src="{{ asset('frontend_v2/assets/Icons/xdot1.png') }}" alt="اقتباس" class="quote-image" />
                                </div>
                                <div class="rating-container">
                                    <span class="rating-score">5.0</span>
                                    <img src="{{ asset('frontend_v2/assets/Icons/star.png') }}" alt="تقييم 5 نجوم" class="rating-stars" />
                                </div>
                            </div>
                            <blockquote class="testimonial-text">
                                "أجريت عملية جراحية لتخفيف الوزن في المستشفى، وكانت النتائج مذهلة وغيرت حياتي
                                للأفضل. كان الفريق محترفًا ودعمني طوال فترة التعافي. أنصح بشدة بخدماتهم." 👍
                            </blockquote>
                        </div>
                        <div class="card-divider"></div>
                        <div class="customer-info">
                            <h3 class="customer-name">السيدة ريم القحطاني</h3>
                            <p class="customer-location">الدمام، المملكة العربية السعودية</p>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>

@endsection

@push('scripts')
<script src="{{ asset('frontend_v2/js/homeScript.js') }}" defer></script>
@endpush