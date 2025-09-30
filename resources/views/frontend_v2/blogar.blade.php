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
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        padding: 20px;
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

    @media (min-width: 300px) and (max-width: 600px) {
        .of2 {
            display: block !important;
        }

        .of1 {
            display: none !important;
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

    @media (min-width: 1000px) and (max-width: 1550px) {
        .branches-grid {
            grid-template-columns: repeat(2, 1fr) !important;
        }
    }

    @media (min-width: 600px) and (max-width: 1000px) {
        .branches-grid {
            grid-template-columns: repeat(2, 1fr) !important;
            width: unset !important;
            padding: 20px 10px;
        }

        .info-grid {
            grid-template-columns: 1fr !important;
        }

        .btn-group {
            flex-direction: column !important;
        }

        .br-cd {
            padding: unset !important;
        }
    }

    @media (min-width: 300px) and (max-width: 600px) {
        .hero-title {
            font-size: 15vw !important;
            padding: unset;
        }

        .sub-maintez {
            font-size: 25px !important;
            margin-bottom: 10px !important;
            padding: 0px 5px;
        }

        .branch-card h3 {
            font-size: 20px !important;
        }

        .branch-card p {
            font-size: 14px !important;
        }

        .branches-grid {
            grid-template-columns: repeat(1, 1fr) !important;
            width: unset !important;
            padding: 0px 10px;
        }

        .topz {
            margin-top: 50px !important;
        }

        .br-cd {
            padding: unset !important;
        }

        .info-grid {
            grid-template-columns: 1fr !important;
        }

        .btn-group {
            flex-direction: column !important;
        }
    }

    .site-header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background: white;
        z-index: 999;
        transition: top 0.3s ease-in-out;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    header {
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05) !important;
    }

    .manager-info {
        display: flex;
        align-items: flex-start;
        gap: 10px;
        margin-bottom: 8px;
    }

    .manager-info .emoji {
        font-size: 18px;
        line-height: 1.5;
    }

    .manager-info .text {
        font-size: 14px;
        color: #333;
        line-height: 1.4;
    }

    .info-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 8px 20px;
        padding: 0;
        list-style: none;
        margin-bottom: 20px;
    }

    .info-grid li {
        font-size: 14px;
        color: #333;
        line-height: 1.6;
    }

    .branch-card {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        transition: transform 0.4s ease, box-shadow 0.4s ease;
        display: flex;
        flex-direction: column;
        cursor: pointer;
        position: relative;
    }

    /* Hover Effect */
    .branch-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    /* Optional image zoom on hover */
    .branch-card img {
        width: 100%;
        height: 220px;
        object-fit: cover;
        transition: transform 0.4s ease;
    }

    .branch-card:hover img {
        transform: scale(1.05);
    }

    /* Inner content */
    .br-cd {
        padding: 20px;
        transition: all 0.3s ease;
    }

    .branch-card h3 {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
        color: #0a2440;
    }

    .branch-card p {
        font-size: 15px;
        color: #555;
        margin-bottom: 16px;
    }

    .branch-card ul {
        list-style: none;
        padding: 0;
        margin-bottom: 16px;
    }

    .branch-card ul li {
        font-size: 14px;
        color: #000000;
        margin-bottom: 5px;
        font-weight: 700;
    }

    .btn-group {
        display: flex;
        gap: 10px;
        margin-top: 10px;
    }

    .btn {
        padding: 10px 15px;
        border-radius: 50px;
        text-decoration: none;
        font-size: 14px;
        font-weight: 700;
        text-align: center;
        transition: background 0.3s ease, color 0.3s ease;
        flex: 1;
    }

    .btn:not(.outline) {
        background-color: #980a50;
        color: white;
    }

    .btn.outline {
        background-color: transparent;
        color: #980a50;
        border: 2px solid #980a50;
    }

    .btn:hover {
        opacity: 0.9;
    }

    .br-cd {
        padding: 20px;
    }

    .branches-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        /* 3 cards in one row */
        gap: 30px;
        width: 80%;
    }

    /* Responsive behavior for smaller screens */
    @media (max-width: 992px) {
        .branches-grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }

    @media (max-width: 600px) {
        .branches-grid {
            grid-template-columns: 1fr;
        }
    }

    .branch-card {
        background-color: #ffffff;
        border-radius: 12px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        overflow: hidden;
        padding: 20px;
        display: flex;
        flex-direction: column;
    }

    .branch-card img {
        width: 100%;
        height: 250px;
        /* object-fit: cover; */
        border-radius: 10px;
        margin-bottom: 15px;
    }

    .branch-card h3 {
        font-size: 25px;
        font-weight: 700;
        color: #0a2440;
        margin-bottom: 10px;
    }

    .branch-card p {
        font-size: 16px;
        font-weight: 500;
        color: #555;
        margin-bottom: 15px;
    }

    .branch-card ul {
        list-style: none;
        font-size: 14px;
        color: #333;
        margin-bottom: 40px;
        margin-top: 20px;
    }

    .branch-card ul li {
        margin-bottom: 5px;
    }

    .btn-group {
        display: flex;
        gap: 10px;
    }



    .btn:hover {
        opacity: 0.9;
    }
</style>

<section class="section" style="margin-top: 150px; margin-bottom: 0px;" dir="rtl">
    <div class="team-section">
        <div class="team-container">
            <div class="team-header">

                <h1 class="hero-title" style="text-align: center;">
                    <span class="headline-emphasis">مدونة الصحة والجمال – د. خالد الرحيمي</span>
                </h1>

                <p class="hed_des">
                    اكتشف نصائح الخبراء حول الصحة والجمال والعافية. ابقَ على اطلاع بآخر المستجدات الموثوقة. اقرأ
                    مدونتنا وتعرّف على المزيد اليوم.
                </p>


            </div>
        </div>
    </div>
</section>


<section class="section sectionzz" dir="rtl">
    <div class="medical-facility-showcase" style="background-color: #fff;">
        <div class="showcase-container" style="align-items: flex-start">

            <div class="blog-grid">
                @foreach ($articles as $item)
                <article class="blog-card">
                    <img src="{{asset('images').'/'.$item->image}}" alt="{{$item->title}}" class="blog-image" />
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

<section class="cta-section" dir="rtl">
    <div class="cta-container">
        <h2 class="cta-title">اتصل بنا</h2>
        <h3 class="cta-subtitle">
            هل لديك سؤال حول أحد هذه المقالات أو تريد معرفة أي خدمة تناسبك؟
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