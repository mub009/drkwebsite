@extends('frontend_v2.layouts.FrontendLayout')
@section('content')

<style>
    body {
        font-family: 'Tajawal', sans-serif;
    }

    @media (min-width: 300px) and (max-width: 500px) {
        .sectionii {
            margin-top: 120px !important;
        }
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

    .bg-layer {
        position: absolute;
        inset: 0;
        background-size: cover;
        background-position: center;
        opacity: 0;
        transition: opacity 1s ease-in-out;
    }

    .bg-layer.show {
        opacity: 1;
        z-index: 0;
    }

    .hero-actions {
        width: unset !important;
    }

    .sub-maintez {
        font-size: 25px;
        color: #ffffff;
        margin-bottom: 50px;
    }

    .hero-content {
        gap: 20px !important;
    }


    .offer-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        gap: 20px;
        padding: 50px 200px;
        z-index: 1000;
    }

    .offer-image {
        background-color: transparent;
        /* transparent background */
        padding: 10px;
        text-align: center;
        border-radius: 8px;
        transition: transform 0.3s ease;
    }

    .offer-image img {
        width: 100%;
        height: auto;
        object-fit: contain;
        background: transparent;
        border-radius: 40px;
        box-shadow: 1px 1px 4px 0px rgba(0, 0, 0, 0.25);
    }

    .offer-image:hover {
        transform: scale(1.05);
    }

    .of2 {
        display: none;
    }

    @media (min-width: 890px) and (max-width: 1550px) {

        .offer-grid {
            display: grid;
            padding: 50px 130px !important;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)) !important;
        }
    }

    @media (min-width: 300px) and (max-width: 700px) {


        .offer-grid {
            display: grid;
            padding: 20px !important;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)) !important;
        }

        .hero-title {
            font-size: 12vw;
            padding: unset;
        }
    }

    .overlay {
        background-color: rgba(0, 0, 0, 0.5) !important;
    }

    .topz {
        margin-top: 80px !important;
    }


    @media (min-width: 300px) and (max-width: 1100px) {

        .doctor-card,
        .tab-container {
            zoom: 70%;
        }

        .ent-header {
            width: 100% !important;
        }

        .ent-card {
            flex-direction: column;
        }

        .ent-card {
            background: unset !important;
            box-shadow: unset !important;
            padding: unset !important;
            ;
        }

        .ent-department {
            padding: 40px 10px !important;
        }

        .ent-header p {
            font-size: 16px !important;
        }

        .ent-header h2 {
            font-size: 25px !important;
        }

        .ent-body h3 {
            font-size: 20px !important;
        }

        .ent-services li {
            font-size: 15px !important;
        }

        .hero-title {
            font-size: 13vw !important;
        }

        .main-headline {
            font-size: 25px !important;
        }
    }

    .topz {
        margin-top: 0px !important;
    }

    .department-gallery {
        padding: 20px 0px;
        display: flex;
        justify-content: center;
    }

    .gallery-grid {
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: auto auto;
        gap: 8px;
        width: 100%;
    }

    .gallery-img {
        overflow: hidden;
        border-radius: 20px;
        height: 200px;
    }

    .gallery-img img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
        border-radius: 20px;
    }


    .img3 {
        grid-column: span 2;
    }

    .ent-department {
        padding: 40px 40px;
        border-radius: 16px;
        background-color: #ffebf5;
        display: flex;
        justify-content: center;
    }

    .ent-card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        padding: 40px;
        width: 100%;
        display: flex;
        justify-content: space-around;
        gap: 40px;
        align-items: start;
        align-items: center;
    }

    .ent-header {
        width: 60%;
    }

    .ent-header h2 {
        font-size: 35px;
        font-weight: 700;
        color: #980a50;
        margin-bottom: 15px;
    }

    .ent-header p {
        font-size: 20px;
        line-height: 1.6;
        color: #000000;
        font-weight: 400;
    }

    .ent-body h3 {
        font-size: 22px;
        font-weight: 700;
        margin-bottom: 20px;
        color: #980a50;
    }

    .ent-services {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .ent-services li {
        padding-left: 25px;
        position: relative;
        margin-bottom: 12px;
        font-size: 18px;
        color: #000000;
        font-weight: 500;
    }

    .ent-services li::before {
        content: "✔";
        position: absolute;
        left: 0;
        color: #980a50;
        font-size: 16px;
    }

    .tab-container {
        width: 100%;
        padding-bottom: 50px;
    }

    .tab-buttons {
        display: flex;
        flex-wrap: nowrap;
        gap: 12px;
        overflow-x: auto;
        scroll-behavior: smooth;
        -webkit-overflow-scrolling: touch;
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        padding: 30px;
    }

    .tab-buttons::-webkit-scrollbar {
        height: 8px;
    }

    .tab-buttons::-webkit-scrollbar-thumb {
        background: #ffebf5;
        border-radius: 4px;
    }

    .tab-buttons::-webkit-scrollbar-track {
        background: #ffebf5;
    }

    .tab-buttons {
        scrollbar-width: thin;
        scrollbar-color: #980a50 #eee;
    }

    .tab-buttons button {
        white-space: nowrap;
        padding: 10px 16px;
        font-weight: 600;
        font-size: 14px;
        border: 1px solid #ddd;
        border-radius: 50px;
        background-color: #f8f8f8;
        color: #000000;
        cursor: pointer;
        transition: all 0.3s ease;
        flex-shrink: 0;
    }

    .tab-buttons button.active,
    .tab-buttons button:hover {
        background-color: #980a50;
        color: #fff;
        border-color: #980a50;
    }

    .card-dr {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        gap: 20px;
        margin-bottom: 50px !important;
    }

    .tabs {
        width: 100%;
        margin: auto;

    }

    .tab-content {
        opacity: 0;
        transform: translateX(50px);
        transition: all 0.5s ease;
        height: 0;
        overflow: hidden;
        pointer-events: none;
    }

    .tab-content.active {
        opacity: 1;
        transform: translateX(0);
        height: auto;
        pointer-events: auto;
    }
</style>

<section class="section sectionii" style=" margin-top: 150px;">
    <div class="team-section">
        <div class="team-container">
            <div class="team-header anima" data-aos="fade-zoom-in" dir="rtl">
                <h1 class="hero-title" style="text-align: center;">
                    <span class="headline-emphasis">الخدمات الطبية والتجميلية – مستشفى الرحيـمي</span>
                </h1>

                <p class="hed_des" style="margin-bottom: 20px;">
                    اكتشف أحدث الخدمات الطبية والجراحية والتجميلية المصممة خصيصاً لتلبية احتياجاتك. اختر التخصص
                    واحجز موعدك الآن.
                </p>


                <div class="header-content" style="align-items: center; gap: 2px;margin-top: 80px;">
                    <h2 class="main-headline">
                        <span class="headline-part">تعرف على خبرائنا في</span>
                        <span class="headline-emphasis">DRK</span>
                    </h2>
                    <div>
                        <div class="satisfied-patients" style="position: unset; box-shadow: unset">
                            <div class="avatarsz">
                                <img src="{{ asset('/frontend_v2/assets/images/ds1.png') }}" alt="الصورة 1" />
                                <img src="{{ asset('/frontend_v2/assets/images/ds2.png') }}" alt="الصورة 2" />
                                <img src="{{ asset('/frontend_v2/assets/images/ds3.png') }}" alt="الصورة 3" />
                                <img src="{{ asset('/frontend_v2/assets/images/ds4.png') }}" alt="الصورة 4" />
                                <img src="{{ asset('/frontend_v2/assets/images/ds5.png') }}" alt="الصورة 5" />
                            </div>
                            <div class="text">
                                <span class="count">+50</span><br />
                                <span class="label">طبيب ماهر</span>
                            </div>
                        </div>
                    </div>
                </div>
                <p class="team-description" dir="rtl">
                    في مستشفى د. خالد الروهيمي، نحن ملتزمون بتقديم مجموعة كاملة من الخدمات الطبية والجراحية
                    والتجميلية، مصممة لتوفير رعاية شاملة وفق أعلى معايير الجودة والسلامة والخصوصية.
                    اختر التخصص الذي يناسب احتياجاتك واستكشف خبرة أطبائنا جنبًا إلى جنب مع أحدث التقنيات الطبية
                    المتقدمة.
                </p>

            </div>





            <div class="tabs">
                <!-- Tab Buttons -->

                <div class="tab-container">
                    <div class="tab-buttons">
                        <button class="active" data-tab="all-doctors">جميع الأطباء</button>
                        <button data-tab="plastic-burn">جراحة التجميل والترميم</button>
                        <button data-tab="oral-maxillofacial">جراحة الفم والفك والوجه</button>
                        <button data-tab="dermatology">الأمراض الجلدية والإجراءات التجميلية</button>
                        <button data-tab="general-surgery">الجراحة العامة</button>
                        <button data-tab="women-childbirth">أمراض النساء والتوليد</button>
                        <button data-tab="pediatrics">طب الأطفال</button>
                        <button data-tab="eyes">طب العيون</button>
                        <button data-tab="digestive-surgery">جراحة الجهاز الهضمي</button>
                        <button data-tab="sleep-disorders">طب النوم</button>
                        <button data-tab="rheumatism">الروماتيزم ورعاية المفاصل</button>
                        <button data-tab="dentistry">طب الأسنان وجراحة الفم والفك</button>
                        <button data-tab="urology">جراحة المسالك البولية</button>
                        <button data-tab="ent">الأذن والأنف والحنجرة</button>
                        <button data-tab="Rays">الأشعة والتصوير الطبي</button>
                        <button data-tab="bariatric-surgery">جراحة السمنة</button>
                        <button data-tab="esotericism">الطب الباطني</button>
                        <button data-tab="icu">العناية المركزة</button>
                        <button data-tab="dental-surgery">جراحة الأسنان</button>
                        <button data-tab="anesthesia">التخدير</button>
                        <button data-tab="home-care">الرعاية المنزلية</button>
                        <button data-tab="emergency">الطوارئ 24/7</button>
                        <button data-tab="laboratory">المختبر والتشخيص</button>
                    </div>
                </div>







                <!-- Tab Content -->
                <div id="all-doctors" class="tab-content active">
                    <div class="card-dr">

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d1.png') }}" alt="الدكتور خالد الرحيمي" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور خالد الرحيمي</h3>
                                        <p class="doctor-specialty">جراحة التجميل والحروق والترميم</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d2.png') }}" alt="الدكتور أحمد الكفافي" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور أحمد الكفافي</h3>
                                        <p class="doctor-specialty">جراحة التجميل والحروق والترميم</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d3.png') }}" alt="الدكتور محمد سوار" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور محمد سوار</h3>
                                        <p class="doctor-specialty">جراحة التجميل والحروق والترميم</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/ds3.png') }}" alt="الدكتور أحمد الأصلاوي"
                                    class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور أحمد الأصلاوي</h3>
                                        <p class="doctor-specialty">جراحة التجميل والحروق والترميم</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d5.png') }}" alt="الدكتورة يسرا بوهليقة" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة يسرا بوهليقة</h3>
                                        <p class="doctor-specialty">جراحة التجميل والحروق والترميم</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d6.png') }}" alt="الدكتورة سوسن المرزوق" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة سوسن المرزوق</h3>
                                        <p class="doctor-specialty">جراحة التجميل والحروق والترميم</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d7.png') }}" alt="الدكتور مصلح الشراري" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور مصلح الشراري</h3>
                                        <p class="doctor-specialty">جراحة التجميل والحروق والترميم</p>
                                    </div>
                                </div>
                            </div>
                        </article>


                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d8.png') }}" alt="الدكتور محمود فيصل" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور محمود فيصل</h3>
                                        <p class="doctor-specialty">جراحة التجميل والحروق والترميم</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d9.png') }}" alt="الدكتورة داليا شاهين" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة داليا شاهين</h3>
                                        <p class="doctor-specialty">جراحة التجميل والحروق والترميم</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d41.png') }}" alt="الدكتور عثمان علي" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور عثمان علي</h3>
                                        <p class="doctor-specialty">جراحة التجميل والحروق والترميم</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- الأمراض الجلدية -->

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d11.png') }}" alt="الدكتورة شيماء عبد المجيد"
                                    class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة شيماء عبد المجيد</h3>
                                        <p class="doctor-specialty">الأمراض الجلدية</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d12.png') }}" alt="الدكتورة فاطمة البدر" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة فاطمة البدر</h3>
                                        <p class="doctor-specialty">الأمراض الجلدية</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d13.png') }}" alt="الدكتورة دنيا" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة دنيا</h3>
                                        <p class="doctor-specialty">الأمراض الجلدية</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d14.png') }}" alt="الدكتورة ندى الزهراني"
                                    class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة ندى الزهراني</h3>
                                        <p class="doctor-specialty">الأمراض الجلدية</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d15.png') }}" alt="الدكتورة زهراء" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة زهراء</h3>
                                        <p class="doctor-specialty">الأمراض الجلدية</p>
                                    </div>
                                </div>
                            </div>
                        </article>


                        <!-- الأمراض الجلدية -->
                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/ds2.png') }}" alt="الدكتورة جيهان" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة جيهان</h3>
                                        <p class="doctor-specialty">الأمراض الجلدية</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d17.png') }}" alt="الدكتورة إيمان حامد" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة إيمان حامد</h3>
                                        <p class="doctor-specialty">الأمراض الجلدية</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- جراحة الفم والوجه والفكين -->
                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d18.png') }}" alt="الدكتور محمد درويش" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور محمد درويش</h3>
                                        <p class="doctor-specialty">جراحة الفم والوجه والفكين</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d31.png') }}" alt="الدكتورة روزا غارسيا" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة روزا غارسيا</h3>
                                        <p class="doctor-specialty">جراحة الفم والوجه والفكين</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d20.png') }}" alt="الدكتورة أريج البوعينين"
                                    class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة أريج البوعينين</h3>
                                        <p class="doctor-specialty">جراحة الفم والوجه والفكين</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d21.png') }}" alt="الدكتورة مها السهيمي" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة مها السهيمي</h3>
                                        <p class="doctor-specialty">جراحة الفم والوجه والفكين</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d22.png') }}" alt="الدكتورة مهجة" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة مهجة</h3>
                                        <p class="doctor-specialty">جراحة الفم والوجه والفكين</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d23.png') }}" alt="الدكتورة عبير المخلافي"
                                    class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة عبير المخلافي</h3>
                                        <p class="doctor-specialty">جراحة الفم والوجه والفكين</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d24.png') }}" alt="الدكتور نبيل الصعدمي" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور نبيل الصعدمي</h3>
                                        <p class="doctor-specialty">جراحة الفم والوجه والفكين</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d25.png') }}" alt="الدكتورة وفاء الصليحي"
                                    class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة وفاء الصليحي</h3>
                                        <p class="doctor-specialty">جراحة الفم والوجه والفكين</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d26.png') }}" alt="الدكتور محمد الفرحان" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور محمد الفرحان</h3>
                                        <p class="doctor-specialty">جراحة الفم والوجه والفكين</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/ds4.png') }}" alt="الدكتور علي البندر" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور علي البندر</h3>
                                        <p class="doctor-specialty">جراحة الفم والوجه والفكين</p>
                                    </div>
                                </div>
                            </div>
                        </article>


                        <!-- المسالك البولية -->
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d28.png') }}" alt="الدكتور عادل الديل" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور عادل الديل</h3>
                                        <p class="doctor-specialty">المسالك البولية</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- اضطرابات النوم -->
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/ds5.png') }}" alt="الدكتور أحمد الرحيمي" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور أحمد الرحيمي</h3>
                                        <p class="doctor-specialty">اضطرابات النوم</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- جراحة الجهاز الهضمي -->
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d30.png') }}" alt="الدكتور ياسر عبد الهادي"
                                    class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور ياسر عبد الهادي</h3>
                                        <p class="doctor-specialty">جراحة الجهاز الهضمي</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- العيون -->
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d311.png') }}" alt="الدكتورة إيمان جلال" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة إيمان جلال</h3>
                                        <p class="doctor-specialty">العيون</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- طب الأطفال -->
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d32.png') }}" alt="الدكتورة سارة يوسف" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة سارة يوسف</h3>
                                        <p class="doctor-specialty">طب الأطفال</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- الروماتيزم -->
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d33.png') }}" alt="الدكتورة فايزة الجشي" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة فايزة الجشي</h3>
                                        <p class="doctor-specialty">الروماتيزم</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- طب الأسنان -->
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d34.png') }}" alt="الدكتور فؤاد كاشغري" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور فؤاد كاشغري</h3>
                                        <p class="doctor-specialty">طب الأسنان</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- النساء والولادة -->
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d35.png') }}" alt="الدكتورة ميرفت أحمد" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة ميرفت أحمد</h3>
                                        <p class="doctor-specialty">النساء والولادة</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d36.png') }}" alt="الدكتورة علياء الشمري"
                                    class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة علياء الشمري</h3>
                                        <p class="doctor-specialty">النساء والولادة</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- الجراحة العامة -->
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d37.png') }}" alt="الدكتور أنور" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور أنور</h3>
                                        <p class="doctor-specialty">الجراحة العامة</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d38.png') }}" alt="الدكتور إبراهيم حزازي"
                                    class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور إبراهيم حزازي</h3>
                                        <p class="doctor-specialty">الجراحة العامة</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d39.png') }}" alt="الدكتور مختار" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور مختار</h3>
                                        <p class="doctor-specialty">الجراحة العامة</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                    </div>
                </div>




                <div id="sleep-disorders" class="tab-content">
                    <div class="card-dr">
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/ds5.png') }}" alt="د. أحمد الرحيمي" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">د. أحمد الرحيمي</h3>
                                        <p class="doctor-specialty">
                                            اضطرابات النوم
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <section id="sleep-disorders" class="section topz">
                        <div class="ent-department">
                            <div class="ent-card">
                                <div class="ent-header">
                                    <h2>اضطرابات النوم</h2>
                                    <p>
                                        <strong>تشير الدراسات إلى أن 6 من كل 10 أشخاص يعانون من اضطرابات
                                            النوم</strong>، لذلك أنشأنا قسماً متخصصاً تحت إشراف استشاري الصدر
                                        واضطرابات النوم الدكتور أحمد الرحيمي.
                                    </p>

                                    <section class="department-gallery">
                                        <div class="gallery-grid">
                                            <div class="gallery-img img1">
                                                <img src="{{ asset('/frontend_v2/assets/sections/s1.jpg') }}" alt="مراقبة النوم">
                                            </div>
                                            <div class="gallery-img img2">
                                                <img src="{{ asset('/frontend_v2/assets/sections/s2.jpg') }}" alt="أخصائي النوم">
                                            </div>
                                            <div class="gallery-img img3">
                                                <img src="{{ asset('/frontend_v2/assets/sections/s3.jpg') }}" alt="استشارة اضطرابات النوم">
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <div class="ent-body">
                                    <h3>الخدمات المقدمة</h3>
                                    <ul class="ent-services">
                                        <li>انقطاع النفس الانسدادي أثناء النوم</li>
                                        <li>الأرق والنوم القهري</li>
                                        <li>اضطرابات إيقاع الساعة البيولوجية</li>
                                        <li>نوبات الذعر الليلي</li>
                                        <li>متلازمة تململ الساقين</li>
                                        <li>صرير الأسنان أثناء النوم</li>
                                        <li>المشي أثناء النوم</li>
                                        <li>التبول الليلي</li>
                                        <li>الكوابيس ونوبات الرعب الليلي</li>
                                        <li>اضطراب نوم حركة العين السريعة (REM)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div id="rheumatism" class="tab-content">
                    <div class="card-dr">
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d33.png') }}" alt="د. فايزة الجشي" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">د. فايزة الجشي</h3>
                                        <p class="doctor-specialty">
                                            أمراض الروماتيزم
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <section id="rheumatism" class="section topz">
                        <div class="ent-department">
                            <div class="ent-card">
                                <div class="ent-header">
                                    <h2>الروماتيزم</h2>
                                    <p>
                                        <strong>يتمتع أخصائيو الروماتيزم في مستشفى الدكتور خالد الرحيمي</strong>
                                        بخبرة واسعة في تشخيص وعلاج جميع مشكلات الأنسجة الضامة، مما يمكّنهم من تقديم
                                        أفضل رعاية صحية ممكنة للمرضى في بيئة مريحة باستخدام أحدث التقنيات الطبية.
                                    </p>
                                    <section class="department-gallery">
                                        <div class="gallery-grid">
                                            <div class="gallery-img img1">
                                                <img src="{{ asset('/frontend_v2/assets/sections/r1.jpg') }}" alt="رعاية الروماتيزم 1">
                                            </div>
                                            <div class="gallery-img img2">
                                                <img src="{{ asset('/frontend_v2/assets/sections/r2.jpg') }}" alt="رعاية الروماتيزم 2">
                                            </div>
                                            <div class="gallery-img img3">
                                                <img src="{{ asset('/frontend_v2/assets/sections/r3.jpg') }}" alt="رعاية الروماتيزم 3">
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <div class="ent-body">
                                    <h3>بعض الخدمات التي يقدمها قسم الروماتيزم</h3>
                                    <ul class="ent-services">
                                        <li>علاج التهاب المفاصل الروماتويدي</li>
                                        <li>الذئبة الحمامية الجهازية</li>
                                        <li>علاج التصلب الجهازي</li>
                                        <li>علاج الالتهاب العضلي/الجلدي</li>
                                        <li>علاج التهاب الأوعية الدموية</li>
                                        <li>علاج هشاشة العظام</li>
                                        <li>علاج النقرس والنقرس الكاذب</li>
                                        <li>علاج خشونة المفاصل</li>
                                        <li>علاج أمراض أخرى تؤثر على الأنسجة الضامة</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <div id="eyes" class="tab-content">
                    <div class="card-dr">
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d311.png') }}" alt="د. إيمان جلال" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">د. إيمان جلال</h3>
                                        <p class="doctor-specialty">العيون</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <section id="eye-care" class="section topz">
                        <div class="ent-department">
                            <div class="ent-card">
                                <div class="ent-header">
                                    <h2>قسم العيون</h2>
                                    <p>
                                        يتمتع مستشفى الدكتور خالد الرحيمي بخبرة واسعة في رعاية العيون، ويضم فريقًا
                                        من أطباء العيون المؤهلين.
                                        تم تصميم المركز لراحة المرضى وتحسين فعالية العلاج، ويقدم استشارات وخدمات
                                        شاملة لجميع المرضى.
                                    </p>
                                    <section class="department-gallery">
                                        <div class="gallery-grid">
                                            <div class="gallery-img img1">
                                                <img src="{{ asset('/frontend_v2/assets/sections/e1.jpg') }}" alt="رعاية العيون 1">
                                            </div>
                                            <div class="gallery-img img2">
                                                <img src="{{ asset('/frontend_v2/assets/sections/e2.jpg') }}" alt="رعاية العيون 2">
                                            </div>
                                            <div class="gallery-img img3">
                                                <img src="{{ asset('/frontend_v2/assets/sections/e3.jpg') }}" alt="رعاية العيون 3">
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <div class="ent-body">
                                    <h3>الخدمات المقدمة</h3>
                                    <ul class="ent-services">
                                        <li>فحوصات شاملة للعين</li>
                                        <li>علاج جفاف العين والالتهابات</li>
                                        <li>تقييم وإجراء عمليات المياه البيضاء</li>
                                        <li>فحص وإدارة مرض الجلوكوما</li>
                                        <li>استشارات لتصحيح البصر (مثل الليزك)</li>
                                        <li>علاج اعتلال الشبكية السكري</li>
                                        <li>رعاية عيون الأطفال</li>
                                        <li>خدمات الشبكية والقرنية</li>
                                        <li>علاج إصابات العين والصدمات</li>
                                        <li>استشارات لحساسية العين والالتهابات</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div id="oral-maxillofacial" class="tab-content">
                    <div class="card-dr">
                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d18.png') }}" alt="الدكتور محمد درويش" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور محمد درويش</h3>
                                        <p class="doctor-specialty">جراحة الفم والوجه والفكين</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d31.png') }}" alt="الدكتورة روزا غارسيا" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة روزا غارسيا</h3>
                                        <p class="doctor-specialty">جراحة الفم والوجه والفكين</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d20.png') }}" alt="الدكتورة أريج البوعينين"
                                    class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة أريج البوعينين</h3>
                                        <p class="doctor-specialty">جراحة الفم والوجه والفكين</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d21.png') }}" alt="الدكتورة مها السهيمي" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة مها السهيمي</h3>
                                        <p class="doctor-specialty">جراحة الفم والوجه والفكين</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d22.png') }}" alt="الدكتورة مهجة" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة مهجة</h3>
                                        <p class="doctor-specialty">جراحة الفم والوجه والفكين</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d23.png') }}" alt="الدكتورة عبير المخلافي"
                                    class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة عبير المخلافي</h3>
                                        <p class="doctor-specialty">جراحة الفم والوجه والفكين</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d24.png') }}" alt="الدكتور نبيل الصعدمي" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور نبيل الصعدمي</h3>
                                        <p class="doctor-specialty">جراحة الفم والوجه والفكين</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d25.png') }}" alt="الدكتورة وفاء الصليحي"
                                    class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة وفاء الصليحي</h3>
                                        <p class="doctor-specialty">جراحة الفم والوجه والفكين</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d26.png') }}" alt="الدكتور محمد الفرحان" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور محمد الفرحان</h3>
                                        <p class="doctor-specialty">جراحة الفم والوجه والفكين</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/ds4.png') }}" alt="الدكتور علي البندر" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور علي البندر</h3>
                                        <p class="doctor-specialty">جراحة الفم والوجه والفكين</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <section class="section topz">
                        <div class="ent-department">
                            <div class="ent-card">
                                <div class="ent-header">
                                    <h2>جراحة الفم والوجه والفكين</h2>
                                    <p>
                                        جراحة الفم والوجه والفكين هي فرع من طب الأسنان يركز على تشخيص وعلاج الأمراض
                                        والتشوهات والإصابات التي تصيب أنسجة الفم والفكين والهياكل الوجهية.
                                        تشمل هذه التخصصات الجوانب الوظيفية والتجميلية، وتتنوع الإجراءات من البسيطة
                                        إلى المعقدة.
                                    </p>
                                    <section class="department-gallery">
                                        <div class="gallery-grid">
                                            <div class="gallery-img img1">
                                                <img src="{{ asset('/frontend_v2/assets/sections/o1.jpg') }}" alt="جراحة الفكين 1">
                                            </div>
                                            <div class="gallery-img img2">
                                                <img src="{{ asset('/frontend_v2/assets/sections/o2.jpg') }}" alt="جراحة الفكين 2">
                                            </div>
                                            <div class="gallery-img img3">
                                                <img src="{{ asset('/frontend_v2/assets/sections/o3.jpg') }}" alt="جراحة الفكين 3">
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <div class="ent-body">
                                    <h3>خدمات العيادة</h3>
                                    <ul class="ent-services">
                                        <li>زراعة السيليكون التجميلية للوجه وزوايا الفك</li>
                                        <li>تشوهات الوجه والفكين</li>
                                        <li>تصغير الشفاه</li>
                                        <li>علاج الابتسامة اللثوية</li>
                                        <li>تصحيح الأذن البارزة</li>
                                        <li>جراحة تجميل الجفون والحواجب</li>
                                        <li>علاج توقف التنفس أثناء النوم الناتج عن تراجع الفك</li>
                                        <li>الجراحات التجميلية للوجه</li>
                                        <li>جراحات الفكين والذقن</li>
                                        <li>شفط دهون الخدين والرقبة</li>
                                        <li>تشخيص وعلاج آلام الوجه</li>
                                        <li>شد الوجه الجزئي والكامل</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div id="women-childbirth" class="tab-content">
                    <div class="card-dr">
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d35.png') }}" alt="د. ميرفت أحمد" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">د. ميرفت أحمد</h3>
                                        <p class="doctor-specialty">النساء والولادة</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d36.png') }}" alt="د. عالية الشمري" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">د. عالية الشمري</h3>
                                        <p class="doctor-specialty">النساء والولادة</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>

                    <section class="section topz">
                        <div class="ent-department">
                            <div class="ent-card">
                                <div class="ent-header">
                                    <h2>قسم النساء والولادة</h2>
                                    <p>
                                        يضم مستشفى الدكتور خالد الرحيمي قسمًا مخصصًا للنساء والولادة، يقدم مجموعة
                                        شاملة من العلاجات الطبية والجراحية والتجميلية.
                                        يتميز القسم بطاقم طبي ذو خبرة ويستخدم أحدث التقنيات العلمية والتكنولوجية.
                                    </p>
                                    <section class="department-gallery">
                                        <div class="gallery-grid">
                                            <div class="gallery-img img1">
                                                <img src="{{ asset('/frontend_v2/assets/sections/w1.jpg') }}" alt="صورة الولادة 1">
                                            </div>
                                            <div class="gallery-img img2">
                                                <img src="{{ asset('/frontend_v2/assets/sections/w2.jpg') }}" alt="صورة أمراض النساء 2">
                                            </div>
                                            <div class="gallery-img img3">
                                                <img src="{{ asset('/frontend_v2/assets/sections/w3.jpg') }}" alt="صحة المرأة 3">
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <div class="ent-body">
                                    <h3>بعض الخدمات التي يقدمها قسم النساء والتوليد</h3>
                                    <ul class="ent-services">
                                        <li>متابعة الحمل والولادة</li>
                                        <li>تقديم خدمات التوليد</li>
                                        <li>علاج اضطرابات الدورة الشهرية</li>
                                        <li>إجراء الفحوصات الوقائية النسائية</li>
                                        <li>علاج مشاكل الجهاز التناسلي</li>
                                        <li>تنظيم الأسرة ووسائل منع الحمل</li>
                                        <li>الجراحات التجميلية للمنطقة النسائية</li>
                                        <li>علاج مشاكل الخصوبة</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <div id="pediatrics" class="tab-content" dir="rtl">
                    <div class="card-dr">
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d32.png') }}" alt="د. سارة يوسف" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">د. سارة يوسف</h3>
                                        <p class="doctor-specialty">طب الأطفال</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <section class="section topz">
                        <div class="ent-department">
                            <div class="ent-card">
                                <div class="ent-header">
                                    <h2>طب الأطفال</h2>
                                    <p>
                                        يوفر قسم طب الأطفال في مستشفى الدكتور خالد الراحيمي رعاية متميزة تستند إلى
                                        نهج متعدد التخصصات، بهدف الحفاظ على الصحة الجسدية للأطفال طوال مراحل نموهم.
                                        تشمل خدمات القسم: الفحص الشامل لحديثي الولادة، متابعة النمو والتطور،
                                        الفحوصات الدورية قبل المدرسة، والتطعيمات المنتظمة للأطفال وفق جدول التطعيمات
                                        السعودي.
                                    </p>
                                    <section class="department-gallery">
                                        <div class="gallery-grid">
                                            <div class="gallery-img img1">
                                                <img src="{{ asset('/frontend_v2/assets/sections/p1.jpg') }}" alt="رعاية الطفل 1">
                                            </div>
                                            <div class="gallery-img img2">
                                                <img src="{{ asset('/frontend_v2/assets/sections/p2.jpg') }}" alt="طب الأطفال">
                                            </div>
                                            <div class="gallery-img img3">
                                                <img src="{{ asset('/frontend_v2/assets/sections/p3.jpg') }}" alt="صورة التطعيم">
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="ent-body">
                                    <h3>بعض الخدمات التي يقدمها قسم الأطفال</h3>
                                    <ul class="ent-services">
                                        <li>علاج أمراض الجهاز التنفسي</li>
                                        <li>علاج الالتهابات المعدية المعوية</li>
                                        <li>علاج الإمساك</li>
                                        <li>علاج فقر الدم ونقص الفيتامينات</li>
                                        <li>علاج التهابات المسالك البولية</li>
                                        <li>تقديم الفحوصات الشاملة للطفل</li>
                                        <li>قياس نسبة الأكسجين في الدم ومعدل ضربات القلب</li>
                                        <li>متابعة نمو الطفل حديث الولادة: الوزن، الطول، محيط الرأس</li>
                                        <li>علاج الربو وأمراض الرئة</li>
                                        <li>تشخيص ومتابعة وعلاج الأطفال المصابين بالسكري من النوع الأول</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div id="digestive-surgery" class="tab-content" dir="rtl">
                    <div class="card-dr">
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d30.png') }}" alt="د. ياسر عبد الهادي" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">د. ياسر عبد الهادي</h3>
                                        <p class="doctor-specialty">جراحة الجهاز الهضمي</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <section class="section topz">
                        <div class="ent-department">
                            <div class="ent-card">
                                <div class="ent-header">
                                    <h2>جراحة الجهاز الهضمي</h2>
                                    <p>
                                        يوفر مستشفى الدكتور خالد الراحيمي قسماً متخصصاً في جراحة الجهاز الهضمي، يقدم
                                        مجموعة شاملة من الخدمات التشخيصية والعلاجية من خلال فريق من الأطباء ذوي
                                        الخبرة العالية.
                                        يهدف القسم إلى رعاية المرضى الذين يعانون من اضطرابات الجهاز الهضمي،
                                        والبنكرياس، والكبد، مع التركيز على توفير حلول متعددة التخصصات.
                                    </p>
                                    <section class="department-gallery">
                                        <div class="gallery-grid">
                                            <div class="gallery-img img1">
                                                <img src="{{ asset('/frontend_v2/assets/sections/d1.jpg') }}" alt="جراحة الجهاز الهضمي">
                                            </div>
                                            <div class="gallery-img img2">
                                                <img src="{{ asset('/frontend_v2/assets/sections/d2.jpg') }}" alt="أدوات الجراحة">
                                            </div>
                                            <div class="gallery-img img3">
                                                <img src="{{ asset('/frontend_v2/assets/sections/d3.jpg') }}" alt="استشارة طبية">
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="ent-body">
                                    <h3>الخدمات المقدمة</h3>
                                    <ul class="ent-services">
                                        <li>العلاج الجراحي لاضطرابات الجهاز الهضمي</li>
                                        <li>جراحات البنكرياس والكبد</li>
                                        <li>الإجراءات التشخيصية بالمنظار</li>
                                        <li>العمليات الجراحية طفيفة التوغل للجهاز الهضمي</li>
                                        <li>تخطيط علاجي متعدد التخصصات</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div id="plastic-burn" class="tab-content" dir="rtl">
                    <div class="card-dr">
                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d1.png') }}" alt="الدكتور خالد الرحيمي" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور خالد الرحيمي</h3>
                                        <p class="doctor-specialty">جراحة التجميل والحروق والترميم</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d2.png') }}" alt="الدكتور أحمد الكفافي" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور أحمد الكفافي</h3>
                                        <p class="doctor-specialty">جراحة التجميل والحروق والترميم</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d3.png') }}" alt="الدكتور محمد سوار" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور محمد سوار</h3>
                                        <p class="doctor-specialty">جراحة التجميل والحروق والترميم</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/ds3.png') }}" alt="الدكتور أحمد الأصلاوي"
                                    class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور أحمد الأصلاوي</h3>
                                        <p class="doctor-specialty">جراحة التجميل والحروق والترميم</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d5.png') }}" alt="الدكتورة يسرا بوهليقة" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة يسرا بوهليقة</h3>
                                        <p class="doctor-specialty">جراحة التجميل والحروق والترميم</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d6.png') }}" alt="الدكتورة سوسن المرزوق" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة سوسن المرزوق</h3>
                                        <p class="doctor-specialty">جراحة التجميل والحروق والترميم</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d7.png') }}" alt="الدكتور مصلح الشراري" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور مصلح الشراري</h3>
                                        <p class="doctor-specialty">جراحة التجميل والحروق والترميم</p>
                                    </div>
                                </div>
                            </div>
                        </article>


                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d8.png') }}" alt="الدكتور محمود فيصل" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور محمود فيصل</h3>
                                        <p class="doctor-specialty">جراحة التجميل والحروق والترميم</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d9.png') }}" alt="الدكتورة داليا شاهين" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتورة داليا شاهين</h3>
                                        <p class="doctor-specialty">جراحة التجميل والحروق والترميم</p>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="doctor-card" dir="rtl">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d41.png') }}" alt="الدكتور عثمان علي" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">الدكتور عثمان علي</h3>
                                        <p class="doctor-specialty">جراحة التجميل والحروق والترميم</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <section class="section topz">
                        <div class="ent-department">
                            <div class="ent-card">
                                <div class="ent-header">
                                    <h2>جراحة التجميل والترميم والحروق</h2>
                                    <p>
                                        يتميز مستشفى الدكتور خالد الراحيمي بخبرة متميزة في جراحات التجميل والترميم،
                                        مع مواكبة أحدث التقنيات العلمية في هذا المجال.
                                        تقدم العيادة بيئة ودية ومريحة لتلبية احتياجات كل مريض على حدة.
                                        يتلقى المرضى علاجهم على أيدي أفضل جراحي التجميل باستخدام أحدث الأساليب
                                        العلمية، حيث نؤمن بضرورة الاستماع لاحتياجاتكم وتقديم خبرتنا الكاملة.
                                        نقدم استشارات شاملة حول خيارات العلاج لمساعدتكم في اتخاذ القرار الأنسب.
                                        وتُقدم جميع هذه الخدمات في بيئة آمنة وسرية.
                                    </p>
                                    <section class="department-gallery">
                                        <div class="gallery-grid">
                                            <div class="gallery-img img1">
                                                <img src="{{ asset('/frontend_v2/assets/sections/pl1.jpg') }}" alt="إجراءات التجميل">
                                            </div>
                                            <div class="gallery-img img2">
                                                <img src="{{ asset('/frontend_v2/assets/sections/pl2.jpg') }}" alt="استشارة ترميمية">
                                            </div>
                                            <div class="gallery-img img3">
                                                <img src="{{ asset('/frontend_v2/assets/sections/pl3.jpg') }}" alt="علاج الحروق">
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <div class="ent-body">
                                    <h3>الخدمات المقدمة</h3>
                                    <ul class="ent-services">
                                        <li>جراحات تجميل بعد عمليات السمنة</li>
                                        <li>نحت الجسم (رفع علوي وسفلي للجسم، شد الذراعين، شد الفخذين)</li>
                                        <li>جراحات الثدي (تصغير، تكبير، رفع)</li>
                                        <li>شد منطقة البطن</li>
                                        <li>تجميل الأنف</li>
                                        <li>شد الوجه</li>
                                        <li>تجميل الجفون</li>
                                        <li>تصحيح بروز الأذن (أوتوبلاستي)</li>
                                        <li>شفط الدهون بتقنية الفيزر لنحت الجسم</li>
                                        <li>حقن الدهون والخلايا الجذعية لتحسين مظهر الوجه والثدي والأرداف</li>
                                        <li>تدخلات غير جراحية</li>

                                        <li>إعادة بناء الثدي باستخدام أنسجة ذاتية أو زرعات</li>
                                        <li>جراحات ترميمية مجهرية</li>
                                        <li>تصحيح العيوب الخلقية (مثل الشفة الأرنبية، التشوهات الوعائية، الوحمات)
                                        </li>
                                        <li>جراحات الجلد (الشامات، التصبغات، أورام الجلد، الندوب)</li>
                                        <li>علاج التورمات الجلدية (الورم الشحمي، الكيس الدهني، الكيس الزليلي)</li>

                                        <li>علاج الحروق (حتى 20% من مساحة سطح الجسم)</li>
                                        <li>علاج التليفات والانكماشات الجلدية الناتجة عن الحروق</li>
                                        <li>إزالة آثار الحروق باستخدام تقنية البالون</li>
                                        <li>تدخلات غير جراحية لتحسين جودة الندوب القديمة</li>

                                        <li>تثبيت كسور عظام اليد</li>
                                        <li>جراحات إصابات الأوتار (بسيطة أو مع زراعة الأوتار)</li>
                                        <li>علاج متلازمات الأعصاب الطرفية</li>
                                        <li>جراحات ترميم الأوعية والأعصاب الطرفية باستخدام الميكروسكوب</li>
                                        <li>علاج التشوهات الخلقية في اليد</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div id="general-surgery" class="tab-content" dir="rtl">
                    <div class="card-dr">
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d37.png') }}" alt="د. أنور" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">د. أنور</h3>
                                        <p class="doctor-specialty">الجراحة العامة</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d38.png') }}" alt="د. إبراهيم حجازي" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">د. إبراهيم حجازي</h3>
                                        <p class="doctor-specialty">الجراحة العامة</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d39.png') }}" alt="د. مختار" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">د. مختار</h3>
                                        <p class="doctor-specialty">الجراحة العامة</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <section class="section topz">
                        <div class="ent-department">
                            <div class="ent-card">
                                <div class="ent-header">
                                    <h2>الجراحة العامة</h2>
                                    <p>
                                        يقدم قسم الجراحة باقة شاملة من الإجراءات الجراحية، ويستخدم أحدث التقنيات
                                        المتقدمة في الجراحة التقليدية والمناظير.
                                        من خلال الدمج بين المهارات الجراحية العالية والتكنولوجيا المتطورة
                                        والاستشارات السريعة، نسعى لتحقيق أفضل نتائج علاجية لمرضانا.
                                    </p>
                                    <section class="department-gallery">
                                        <div class="gallery-grid">
                                            <div class="gallery-img img1"><img src="{{ asset('/frontend_v2/assets/sections/g1.jpg') }}"
                                                    alt="معدات جراحية"></div>
                                            <div class="gallery-img img2"><img src="{{ asset('/frontend_v2/assets/sections/g2.jpg') }}"
                                                    alt="غرفة العمليات"></div>
                                            <div class="gallery-img img3"><img src="{{ asset('/frontend_v2/assets/sections/g3.jpg') }}"
                                                    alt="جراح أثناء العمل"></div>
                                        </div>
                                    </section>
                                </div>
                                <div class="ent-body">
                                    <h3>بعض الخدمات التي يقدمها قسم الجراحة العامة:</h3>
                                    <ul class="ent-services">
                                        <li>استئصال الزائدة الدودية</li>
                                        <li>إصلاح الفتق</li>
                                        <li>جراحة إزالة المرارة</li>
                                        <li>استئصال جزء من القولون</li>
                                        <li>جراحات الأمعاء والقولون</li>
                                        <li>استئصال الغدة الدرقية</li>
                                        <li>علاج البواسير، والناسور، والتشققات</li>
                                        <li>جراحات الثدي</li>
                                    </ul>
                                    <p><strong>تُجرى معظم العمليات البطنية باستخدام تقنيات شديدة التطور مثل الجراحة
                                            بالمنظار.</strong></p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div id="urology" class="tab-content" dir="rtl">
                    <div class="card-dr">
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d28.png') }}" alt="د. عادل الدايل" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">د. عادل الدايل</h3>
                                        <p class="doctor-specialty">المسالك البولية</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <section class="section topz">
                        <div class="ent-department">
                            <div class="ent-card">
                                <div class="ent-header">
                                    <h2>قسم المسالك البولية</h2>
                                    <p>
                                        يدرك فريقنا الطبي التحديات النفسية التي قد تمنع المرضى من التعبير عن مخاوفهم
                                        الصحية أو من طلب العلاج المناسب.
                                        لذلك يتميز القسم بخبرة وحساسية عالية للتعامل مع هذا الجانب، مما يعزز من
                                        طمأنينة المرضى ويسرّع من تشخيص الأمراض.
                                        يضم القسم كادرًا متميزًا في تخصصات المسالك البولية الدقيقة ويستخدم
                                        استراتيجيات علاج مبتكرة.
                                    </p>
                                    <section class="department-gallery">
                                        <div class="gallery-grid">
                                            <div class="gallery-img img1"><img src="{{ asset('/frontend_v2/assets/sections/u1.jpg') }}"
                                                    alt="استشارة بولية"></div>
                                            <div class="gallery-img img2"><img src="{{ asset('/frontend_v2/assets/sections/u2.jpeg') }}"
                                                    alt="معدات طبية"></div>
                                            <div class="gallery-img img3"><img src="{{ asset('/frontend_v2/assets/sections/u3.webp') }}"
                                                    alt="طبيب بولية أثناء العمل"></div>
                                        </div>
                                    </section>
                                </div>
                                <div class="ent-body">
                                    <h3>الخدمات المقدمة</h3>
                                    <ul class="ent-services">
                                        <li>علاج سرعة القذف</li>
                                        <li>علاج العقم</li>
                                        <li>علاج التهاب البروستاتا واحتقانها</li>
                                        <li>علاج التهابات المسالك البولية</li>
                                        <li>علاج حصى المسالك البولية</li>
                                        <li>علاج أورام المسالك البولية</li>
                                        <li>علاج تضخم البروستاتا</li>
                                        <li>علاج احتباس البول</li>
                                        <li>تقييم وعلاج الاضطرابات الجنسية</li>
                                        <li>تقييم وعلاج تضيق الإحليل</li>
                                        <li>عمليات ترقيع الإحليل</li>
                                        <li>تصحيح انحناء القضيب</li>
                                        <li>علاج مرض بيروني</li>
                                        <li>اختبارات ديناميكية البول</li>
                                        <li>علاج التبول الليلي</li>
                                        <li>العلاج بالتغذية العصبية لعدم التحكم في البول</li>
                                        <li>علاج سلس البول بتحفيز عضلات الحوض</li>
                                        <li>علاج السلس بالحقن داخل الإحليل</li>
                                        <li>علاج السلس الجراحي بتقنية التعليق</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div id="dermatology" class="tab-content" dir="rtl">
                    <div class="card-dr">
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d11.png') }}" alt="د. شيماء عبد المجيد" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">د. شيماء عبد المجيد</h3>
                                        <p class="doctor-specialty">الأمراض الجلدية</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d12.png') }}" alt="د. فاطمة البدر" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">د. فاطمة البدر</h3>
                                        <p class="doctor-specialty">الأمراض الجلدية</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d13.png') }}" alt="د. دنيا" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">د. دنيا</h3>
                                        <p class="doctor-specialty">الأمراض الجلدية</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d14.png') }}" alt="د. ندى الزهراني" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">د. ندى الزهراني</h3>
                                        <p class="doctor-specialty">الأمراض الجلدية</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d15.png') }}" alt="د. زهراء" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">د. زهراء</h3>
                                        <p class="doctor-specialty">الأمراض الجلدية</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/ds2.png') }}" alt="د. جيهان" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">د. جيهان</h3>
                                        <p class="doctor-specialty">الأمراض الجلدية</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d17.png') }}" alt="د. إيمان حامد" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">د. إيمان حامد</h3>
                                        <p class="doctor-specialty">الأمراض الجلدية</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <section class="section topz">
                        <div class="ent-department">
                            <div class="ent-card">
                                <div class="ent-header">
                                    <h2>قسم الأمراض الجلدية</h2>
                                    <p>
                                        يتميز هذا القسم بخبرة استثنائية في الطب الجلدي واستخدام أحدث التقنيات
                                        العلمية، مما يجعله بيئة مثالية لتلبية احتياجات العلاج بأمان وكفاءة.
                                    </p>
                                    <section class="department-gallery">
                                        <div class="gallery-grid">
                                            <div class="gallery-img img1"><img src="{{ asset('/frontend_v2/assets/sections/m1.jpg') }}"
                                                    alt="استشارة جلدية"></div>
                                            <div class="gallery-img img2"><img src="{{ asset('/frontend_v2/assets/sections/m2.jpg') }}"
                                                    alt="علاج الأمراض الجلدية"></div>
                                            <div class="gallery-img img3"><img src="{{ asset('/frontend_v2/assets/sections/m3.jpg') }}"
                                                    alt="عيادة الجلدية"></div>
                                        </div>
                                    </section>
                                </div>
                                <div class="ent-body">
                                    <h3>الخدمات المقدمة في العيادة:</h3>
                                    <ul class="ent-services">
                                        <li>علاج الحروق والالتهابات الجلدية</li>
                                        <li>علاج التشوهات الجلدية</li>
                                        <li>علاج الأكزيما</li>
                                        <li>علاج الصدفية</li>
                                        <li>علاج الندوب والعلامات الجلدية</li>
                                        <li>علاج مشاكل تساقط الشعر الوراثي</li>
                                        <li>علاجات حب الشباب</li>
                                        <li>علاج الالتهابات الجلدية</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <div id="dentistry" class="tab-content">
                    <div class="card-dr">
                        <article class="doctor-card">
                            <div class="card-background"></div>
                            <div class="card-watermark">DRK</div>
                            <div>
                                <img src="{{ asset('/frontend_v2/assets/images/d34.png') }}" alt="د. خالد الرحيمي" class="doctor-image" />
                                <div class="doctor-info">
                                    <div class="doctor-details">
                                        <h3 class="doctor-name">د. فؤاد كشغري</h3>
                                        <p class="doctor-specialty">طب الأسنان</p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <section class="section topz">
                        <div class="ent-department">
                            <div class="ent-card">
                                <div class="ent-header">
                                    <h2>طب الأسنان</h2>
                                    <p>
                                        في عيادة الأسنان لدينا، نركز على تعزيز الرعاية الوقائية من خلال تشجيع المرضى
                                        على الفحوصات المنتظمة والالتزام بعادات النظافة الفموية، مما يسهم في صحة
                                        الأسنان واللثة. كما نتميز بخبرتنا في تجميل الأسنان ونسعى لرسم الابتسامة على
                                        وجوه مرضانا وتقديم أعلى مستوى من الرعاية الصحية.
                                    </p>
                                    <section class="department-gallery">
                                        <div class="gallery-grid">
                                            <div class="gallery-img img1"><img src="{{ asset('/frontend_v2/assets/sections/a1.jpg') }}"
                                                    alt="استشارة أسنان"></div>
                                            <div class="gallery-img img2"><img src="{{ asset('/frontend_v2/assets/sections/a2.jpg') }}"
                                                    alt="علاج أسنان"></div>
                                            <div class="gallery-img img3"><img src="{{ asset('/frontend_v2/assets/sections/a3.jpg') }}"
                                                    alt="طبيب أسنان أثناء العمل"></div>
                                        </div>
                                    </section>
                                </div>
                                <div class="ent-body">
                                    <h3>خدمات القسم:</h3>
                                    <ul class="ent-services">
                                        <li>علاجات الأسنان</li>
                                        <li>علاج العصب والجذور</li>
                                        <li>ترميم وإصلاح الأسنان</li>
                                        <li>خلع الأسنان</li>
                                        <li>تقويم الأسنان</li>
                                        <li>تجميل الأسنان</li>
                                        <li>علاج أمراض اللثة</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <div id="ent" class="tab-content">
                    <section class="section topz">
                        <div class="ent-department">
                            <div class="ent-card">
                                <div class="ent-header">
                                    <h2>الأنف والأذن والحنجرة</h2>
                                    <p>
                                        <strong>قسم الأنف والأذن والحنجرة</strong> يقدم رعاية متميزة للمرضى من جميع
                                        الأعمار. يضم القسم أجهزة حديثة وكادر طبي محترف عالي الكفاءة.
                                    </p>
                                    <section class="department-gallery">
                                        <div class="gallery-grid">
                                            <div class="gallery-img img1"><img src="{{ asset('/frontend_v2/assets/sections/ent1.jpg') }}"
                                                    alt="رسم الجسم التجميلي"></div>
                                            <div class="gallery-img img2"><img src="{{ asset('/frontend_v2/assets/sections/ent2.jpg') }}"
                                                    alt="جراح تجميلي"></div>
                                            <div class="gallery-img img3"><img src="{{ asset('/frontend_v2/assets/sections/ent3.jpg') }}"
                                                    alt="تجميل الوجه"></div>
                                        </div>
                                    </section>
                                </div>
                                <div class="ent-body">
                                    <h3>الخدمات المقدمة:</h3>
                                    <ul class="ent-services">
                                        <li>علاج مشاكل الأنف والجيوب الأنفية</li>
                                        <li>علاج مشاكل الأذن</li>
                                        <li>علاج مشاكل الحلق والأحبال الصوتية</li>
                                        <li>علاج مشاكل البلعوم</li>
                                        <li>علاج اضطرابات النوم والشخير</li>
                                        <li>علاج الدوخة والدوار</li>
                                        <li>عمليات تجميل الأنف</li>
                                        <li>علاج أمراض الحساسية</li>
                                        <li>اختبارات السمع والتوازن</li>
                                        <li>مناظير الأنف والأذن والحنجرة</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <div id="Rays" class="tab-content">
                    <section id="rays" class="section topz">
                        <div class="ent-department">
                            <div class="ent-card">
                                <div class="ent-header">
                                    <h2>قسم الأشعة</h2>
                                    <p>
                                        يلتزم قسم التصوير الطبي والأشعة في مستشفى الدكتور خالد الرحيمي بتقديم خدمات
                                        عالية الجودة للمرضى باستخدام أحدث التقنيات والخيارات العلاجية المبتكرة. يضم
                                        القسم نخبة من أطباء الأشعة ذوي الخبرة الواسعة، إلى جانب أحدث الأجهزة
                                        المتوفرة في العيادات الخارجية، بهدف توفير أفضل تجربة ممكنة ونتائج فعالة
                                        للمرضى.
                                    </p>
                                    <section class="department-gallery">
                                        <div class="gallery-grid">
                                            <div class="gallery-img img1"><img src="{{ asset('/frontend_v2/assets/sections/x1.jpg') }}"
                                                    alt="معدات الأشعة"></div>
                                            <div class="gallery-img img2"><img src="{{ asset('/frontend_v2/assets/sections/x2.jpg') }}"
                                                    alt="غرفة التصوير"></div>
                                            <div class="gallery-img img3"><img src="{{ asset('/frontend_v2/assets/sections/x3.jpg') }}"
                                                    alt="اختصاصي الأشعة أثناء العمل"></div>
                                        </div>
                                    </section>
                                </div>
                                <div class="ent-body">
                                    <h3>الخدمات المقدمة:</h3>
                                    <ul class="ent-services">
                                        <li>الأشعة السينية والتصوير الرقمي (بما في ذلك التنظير الفلوري)</li>
                                        <li>الموجات فوق الصوتية والدوبلر الملون (بما يشمل تصوير الجنين، والأوعية،
                                            والأعضاء الصغيرة، وتقنية الإيلاستوجرافي)</li>
                                        <li>التصوير المقطعي المحوسب (CT) بما في ذلك تصوير الأوعية وإجراءات التوجيه
                                        </li>
                                        <li>الرنين المغناطيسي (MRI) باستخدام بروتوكولات متقدمة وتصوير وظيفي</li>
                                        <li>تصوير الثدي، قياس كثافة العظام (DEXA)، والتصوير المقطعي بالإصدار
                                            البوزيتروني (PET‑CT)</li>
                                        <li>الأشعة التدخلية: خزعات موجهة بالصور، تصريف السوائل، TACE، الانصمام،
                                            التوسيع، تركيب الدعامات، إذابة الجلطات</li>
                                        <li>خدمات التصوير للأطفال، والطوارئ، والأورام، والقلب، والجهاز العصبي</li>
                                        <li>نظام أرشفة الصور والاتصالات (PACS) ونظام معلومات الأشعة (RIS)</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <div id="bariatric-surgery" class="tab-content">
                    <section class="section topz">
                        <div class="ent-department">
                            <div class="ent-card">
                                <div class="ent-header">
                                    <h2>جراحة السمنة</h2>
                                    <p>
                                        نفخر بكوننا الوجهة المثالية لإجراء عمليات جراحة السمنة، وذلك بفضل توفر نخبة
                                        من أفضل الاستشاريين والأخصائيين المؤهلين في هذا المجال.
                                    </p>
                                    <section class="department-gallery">
                                        <div class="gallery-grid">
                                            <div class="gallery-img img1">
                                                <img src="{{ asset('/frontend_v2/assets/sections/b1.jpg') }}" alt="استشارة جراحة السمنة">
                                            </div>
                                            <div class="gallery-img img2">
                                                <img src="{{ asset('/frontend_v2/assets/sections/b2.jpg') }}" alt="غرفة العمليات">
                                            </div>
                                            <div class="gallery-img img3">
                                                <img src="{{ asset('/frontend_v2/assets/sections/b3.jpg') }}" alt="متابعة ما بعد الجراحة">
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <div class="ent-body">
                                    <h3>بعض الخدمات التي يقدمها قسم جراحة السمنة:</h3>
                                    <ul class="ent-services">
                                        <li>تكميم المعدة بالمنظار</li>
                                        <li>تحويل المسار الكلاسيكي (RYGB) بالمنظار</li>
                                        <li>تحويل المسار المصغر بالمنظار</li>
                                        <li>علاج البالون المعدي</li>
                                        <li>إزالة الحلقة المعدية وجراحة تعديل التكميم</li>
                                        <li>العمليات التصحيحية أو الإعادية للسمنة</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <div id="esotericism" class="tab-content">
                    <section id="internal-medicine" class="section topz">
                        <div class="ent-department">
                            <div class="ent-card">
                                <div class="ent-header">
                                    <h2>الباطنية</h2>
                                    <p>
                                        يحرص مستشفى الدكتور خالد الرحيمي على أن يحظى مرضاه برحلة علاجية متكاملة،
                                        وذلك بفضل التعاون المستمر بين أطباء الباطنية لتقديم رعاية صحية شاملة وذات
                                        جودة عالية بما يحقق رضا المرضى.
                                    </p>
                                    <section class="department-gallery">
                                        <div class="gallery-grid">
                                            <div class="gallery-img img1">
                                                <img src="{{ asset('/frontend_v2/assets/sections/i1.jpg') }}" alt="استشارة طبية">
                                            </div>
                                            <div class="gallery-img img2">
                                                <img src="{{ asset('/frontend_v2/assets/sections/i2.jpg') }}" alt="عيادة الطب الباطني">
                                            </div>
                                            <div class="gallery-img img3">
                                                <img src="{{ asset('/frontend_v2/assets/sections/i3.jpg') }}" alt="رعاية متعددة التخصصات">
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <div class="ent-body">
                                    <h3>بعض الخدمات التي يقدمها قسم الباطنية:</h3>
                                    <ul class="ent-services">
                                        <li>تشخيص وعلاج أمراض الجهاز الهضمي</li>
                                        <li>علاج أمراض القلب والأوعية الدموية</li>
                                        <li>متابعة وعلاج مرض السكري</li>
                                        <li>علاج أمراض الجهاز التنفسي</li>
                                        <li>تشخيص وعلاج اضطرابات الدم</li>
                                        <li>إدارة الأمراض المعدية</li>
                                        <li>إجراء الفحوصات الصحية الوقائية</li>
                                        <li>علاج اضطرابات الغدد الصماء</li>
                                        <li>علاج أمراض الجهاز العصبي</li>
                                        <li>إدارة الأمراض المزمنة</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <div id="icu" class="tab-content">
                    <section class="section topz">
                        <div class="ent-department">
                            <div class="ent-card">
                                <div class="ent-header">
                                    <h2>العناية المركزة</h2>
                                    <p>
                                        يحتوي مستشفى الدكتور خالد الرحيمي على وحدة عناية مركزة متطورة، مجهزة للتعامل
                                        مع مختلف الحالات الحرجة. وتقع الوحدة بالقرب من الأقسام ذات الصلة، ويقدم
                                        أطباء العناية الحرجة أفضل مستويات الرعاية باستخدام أحدث التقنيات، بما في ذلك
                                        أنظمة متقدمة لمراقبة المرضى وضمان بيئة آمنة.
                                    </p>
                                    <section class="department-gallery">
                                        <div class="gallery-grid">
                                            <div class="gallery-img img1">
                                                <img src="{{ asset('/frontend_v2/assets/sections/icu1.jpg') }}"
                                                    alt="غرفة مراقبة العناية المركزة">
                                            </div>
                                            <div class="gallery-img img2">
                                                <img src="{{ asset('/frontend_v2/assets/sections/icu2.jpg') }}" alt="إعدادات العناية المركزة">
                                            </div>
                                            <div class="gallery-img img3">
                                                <img src="{{ asset('/frontend_v2/assets/sections/icu3.jpg') }}" alt="فريق الرعاية الحرجة">
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <div class="ent-body">
                                    <h3>الخدمات المقدمة:</h3>
                                    <ul class="ent-services">
                                        <li>مراقبة مستمرة للعلامات الحيوية ووظائف الأعضاء</li>
                                        <li>التنفس الصناعي (التدخلي وغير التدخلي)، وتسكين الألم</li>
                                        <li>دعم الدورة الدموية والقلب (مضخات التسريب، أجهزة ECMO...)</li>
                                        <li>دعم الكلى: غسيل الكلى والعلاج المستمر لاستبدال الكلى (CRRT)</li>
                                        <li>إدارة التغذية المعوية والوريدية</li>
                                        <li>تصوير وتشخيص محمول: أشعة بجانب السرير، أشعة صوتية، تحاليل غازات الدم
                                        </li>
                                        <li>إجراءات طبية: إدخال أنبوب التنفس، قسطرة مركزية/شريانية، تنظير القصبات
                                        </li>
                                        <li>إدارة حالات تعفن الدم، فشل الأعضاء المتعدد، الإصابات الحرجة، الطوارئ
                                            العصبية</li>
                                        <li>رعاية متعددة التخصصات: أطباء العناية المركزة، ممرضون، صيادلة، أخصائيو
                                            تنفس، تغذية وتأهيل</li>
                                        <li>دعم الأسرة: تحديثات دورية، دعم نفسي وخدمات استشارية</li>
                                        <li>ضوابط صارمة لمكافحة العدوى وتحسين الجودة</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <div id="dental-surgery" class="tab-content">
                    <section class="section topz">
                        <div class="ent-department">
                            <div class="ent-card">
                                <div class="ent-header">
                                    <h2>جراحة وزراعة الأسنان</h2>
                                    <p>
                                        نقوم بجراحة الأسنان وخلع الأسنان الجراحي وزراعة الأسنان باستخدام أحدث
                                        التقنيات، من خلال فريق من الاستشاريين المتخصصين في جراحة الأسنان وخلع ضرس
                                        العقل تحت التخدير العام أو الموضعي.
                                    </p>
                                    <section class="department-gallery">
                                        <div class="gallery-grid">
                                            <div class="gallery-img img1">
                                                <img src="{{ asset('/frontend_v2/assets/sections/d1.jpg') }}" alt="استشارة جراحة الأسنان">
                                            </div>
                                            <div class="gallery-img img2">
                                                <img src="{{ asset('/frontend_v2/assets/sections/d2.jpg') }}" alt="زرع الأسنان">
                                            </div>
                                            <div class="gallery-img img3">
                                                <img src="{{ asset('/frontend_v2/assets/sections/d3.jpg') }}" alt="تحميل فوري لزراعة الأسنان">
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <div class="ent-body">
                                    <h3>خدمات العيادة:</h3>
                                    <ul class="ent-services">
                                        <li>زراعة الأسنان (سن واحد، متعددة، الفم الكامل بما في ذلك All-on-4)</li>
                                        <li>العلاجات الجراحية للأسنان</li>
                                        <li>جراحة ضرس العقل (خلع معقد تحت التخدير)</li>
                                        <li>علاجات أمراض اللثة واللثة المتقدمة</li>
                                        <li>إجراءات رفع الجيوب الأنفية</li>
                                        <li>زراعة العظام وتكبير الحافة العظمية</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <div id="anesthesia" class="tab-content">
                    <section id="anesthesia" class="section topz">
                        <div class="ent-department">
                            <div class="ent-card">
                                <div class="ent-header">
                                    <h2>قسم التخدير</h2>
                                    <p>
                                        نحن في مستشفى الدكتور خالد الرحيمي ملتزمون تمامًا بتقديم أعلى مستويات
                                        الرعاية التخديرية لمرضانا. يقدم استشاريو وأخصائيو التخدير لدينا خدمات متميزة
                                        في مختلف الإجراءات التي تتطلب التخدير. نلتزم بأعلى معايير الجودة والسلامة
                                        ونتبع خطة دقيقة للتخدير وإدارة الألم بعد العمليات، لضمان تعافي المرضى في
                                        بيئة آمنة وصحية.
                                    </p>
                                    <section class="department-gallery">
                                        <div class="gallery-grid">
                                            <div class="gallery-img img1">
                                                <img src="{{ asset('/frontend_v2/assets/sections/an1.jpg') }}" alt="مراقبة التخدير">
                                            </div>
                                            <div class="gallery-img img2">
                                                <img src="{{ asset('/frontend_v2/assets/sections/an2.jpg') }}" alt="طبيب التخدير أثناء العمل">
                                            </div>
                                            <div class="gallery-img img3">
                                                <img src="{{ asset('/frontend_v2/assets/sections/an3.jpg') }}" alt="رعاية المريض أثناء التخدير">
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <div class="ent-body">
                                    <h3>الخدمات المقدمة:</h3>
                                    <ul class="ent-services">
                                        <li>تقييم التخدير قبل العملية</li>
                                        <li>إعطاء التخدير العام</li>
                                        <li>التخدير الموضعي والنصفي (المنطقي والعمودي)</li>
                                        <li>تخدير موضعي للإجراءات البسيطة</li>
                                        <li>التهدئة أثناء الإجراءات التشخيصية والعلاجية</li>
                                        <li>التحكم في الألم والرعاية بعد العملية</li>
                                        <li>تخدير العمليات الطارئة ومرتفعة الخطورة</li>
                                        <li>مراقبة العلامات الحيوية أثناء الجراحة</li>
                                        <li>سلامة المريض وإدارة مجرى التنفس</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <div id="home-care" class="tab-content">
                    <section id="home-care" class="section topz">
                        <div class="ent-department">
                            <div class="ent-card">
                                <div class="ent-header">
                                    <h2>الرعاية المنزلية</h2>
                                    <p>
                                        في قسم الرعاية الصحية المنزلية بمستشفى الدكتور خالد الرحيمي، يسعدنا أن نقدم
                                        أعلى مستويات الرعاية الصحية مباشرة في منزلكم. يقدم فريقنا المتخصص مجموعة
                                        متنوعة من الخدمات لتلبية احتياجاتكم الصحية، مع الحرص على راحتكم، والحفاظ على
                                        خصوصيتكم، وتوفير وقتكم.<br>
                                        للحجوزات والاستفسارات مع منسق الرعاية المنزلية: <strong>0539188994</strong>
                                    </p>
                                    <section class="department-gallery">
                                        <div class="gallery-grid">
                                            <div class="gallery-img img1">
                                                <img src="{{ asset('/frontend_v2/assets/sections/ho1.jpg') }}" alt="خدمة الرعاية المنزلية 1">
                                            </div>
                                            <div class="gallery-img img2">
                                                <img src="{{ asset('/frontend_v2/assets/sections/ho2.jpg') }}" alt="خدمة الرعاية المنزلية 2">
                                            </div>
                                            <div class="gallery-img img3">
                                                <img src="{{ asset('/frontend_v2/assets/sections/ho3.jpg') }}" alt="خدمة الرعاية المنزلية 3">
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <div class="ent-body">
                                    <h3>الخدمات المقدمة:</h3>
                                    <ul class="ent-services">
                                        <li>المساعدة في العناية الشخصية والنظافة</li>
                                        <li>إدارة الأدوية وتقديمها</li>
                                        <li>العناية بالجروح وتغيير الضمادات</li>
                                        <li>العلاج الطبيعي وإعادة التأهيل</li>
                                        <li>إدارة الأمراض المزمنة</li>
                                        <li>الرعاية والمراقبة بعد العمليات</li>
                                        <li>التثقيف الصحي والاستشارات</li>
                                        <li>دعم طارئ على مدار الساعة</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <div id="emergency" class="tab-content">
                    <section id="emergency" class="section topz">
                        <div class="ent-department">
                            <div class="ent-card">
                                <div class="ent-header">
                                    <h2>الطوارئ 24/7</h2>
                                    <p>
                                        يتميز قسم الطوارئ بفريق طبي متخصص وذو خبرة، مما يمكنه من الاستجابة الفورية
                                        لأي حالة طارئة في أي وقت. يحتوي القسم على أحدث التقنيات الطبية المصممة
                                        لتسريع وقت الاستجابة وتقديم الرعاية اللازمة للمرضى من جميع الأعمار.
                                    </p>
                                    <section class="department-gallery">
                                        <div class="gallery-grid">
                                            <div class="gallery-img img1">
                                                <img src="{{ asset('/frontend_v2/assets/sections/em1.jpg') }}" alt="غرفة الطوارئ">
                                            </div>
                                            <div class="gallery-img img2">
                                                <img src="{{ asset('/frontend_v2/assets/sections/em2.jpg') }}" alt="فريق الطوارئ الطبي">
                                            </div>
                                            <div class="gallery-img img3">
                                                <img src="{{ asset('/frontend_v2/assets/sections/em3.jpg') }}" alt="رعاية الطوارئ">
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <div class="ent-body">
                                    <h3>الخدمات المقدمة:</h3>
                                    <ul class="ent-services">
                                        <li>استجابة فورية للطوارئ</li>
                                        <li>رعاية متقدمة للحالات الحرجة</li>
                                        <li>حالات الطوارئ القلبية</li>
                                        <li>إدارة السكتات الدماغية</li>
                                        <li>خدمات الإسعاف على مدار الساعة</li>
                                        <li>تثبيت الحالات الحرجة</li>
                                        <li>تصوير تشخيصي متقدم</li>
                                        <li>جراحات الطوارئ</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>


                <div id="laboratory" class="tab-content">
                    <section id="laboratory" class="section topz">
                        <div class="ent-department">
                            <div class="ent-card">
                                <div class="ent-header">
                                    <h2>المختبر</h2>
                                    <p>
                                        في مستشفى الدكتور خالد الرحيمي، نقدم جميع خدمات المختبر، مع ضمان تسليم نتائج
                                        التحاليل المهمة في الوقت المناسب. يساهم دمج التكنولوجيا المتقدمة مع فريق من
                                        أطباء الأمراض ذوي الخبرة بشكل كبير في رعاية المرضى. يستقبل المختبر المرضى
                                        سواء عبر الحجز أو من الحالات الطارئة، ويقوم فريق فنيين مؤهلين بإجراء تحاليل
                                        الدم مع ضمان صدور النتائج خلال 24 ساعة.
                                    </p>
                                    <section class="department-gallery">
                                        <div class="gallery-grid">
                                            <div class="gallery-img img1">
                                                <img src="{{ asset('/frontend_v2/assets/sections/la1.jpg') }}" alt="صورة المختبر 1">
                                            </div>
                                            <div class="gallery-img img2">
                                                <img src="{{ asset('/frontend_v2/assets/sections/la2.jpg') }}" alt="صورة المختبر 2">
                                            </div>
                                            <div class="gallery-img img3">
                                                <img src="{{ asset('/frontend_v2/assets/sections/la3.jpg') }}" alt="صورة المختبر 3">
                                            </div>
                                        </div>
                                    </section>
                                </div>

                                <div class="ent-body">
                                    <h3>الخدمات المقدمة:</h3>
                                    <ul class="ent-services">
                                        <li>تحاليل واختبارات الدم</li>
                                        <li>تحاليل البول</li>
                                        <li>زراعة الميكروبات</li>
                                        <li>علم الأنسجة المرضية</li>
                                        <li>التحاليل الكيميائية الحيوية</li>
                                        <li>علم المناعة والمصول</li>
                                        <li>اختبارات تشخيصية سريعة</li>
                                        <li>التحاليل عن طريق الحجز أو بدون موعد</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

            </div>

        </div>

    </div>
    </div>
</section>

<section class="cta-section" dir="rtl">
    <div class="cta-container">
        <h2 class="cta-title">اتصل بنا</h2>
        <h3 class="cta-subtitle">
            لا تنتظر أكثر، صحتك وجمالك في أيدٍ أمينة.
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