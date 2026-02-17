@extends('frontend_v2.layouts.FrontendLayout')
@section('content')
<style>
    .blog-detail-container {
        max-width: 1200px;
        margin: auto;
        padding: 20px;
    }

    .blog-detail-header {
        text-align: center;
        margin-bottom: 30px;
    }

    .blog-detail-header h2 {
        font-size: 50px;
        color: #0a2440;
        margin-bottom: 10px;
        line-height: 1.4;
    }

    .blog-meta {
        color: #777;
        font-size: 14px;
    }

    .blog-featured-image {
        width: 100%;
        height: 450px;
        object-fit: cover;
        border-radius: 14px;
        margin: 25px 0;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
    }

    .blog-contentz {
        font-size: 18px;
        line-height: 1.8;
        color: #333;
    }

    .blog-contentz h2 {
        font-size: 24px;
        margin: 25px 0 15px;
        color: #980a50;
    }

    .blog-contentz p,
    .blog-contentz ul {
        margin-bottom: 20px;
    }

    .highlight-box {
        background: #f9f4f6;
        border-left: 5px solid #980a50;
        padding: 20px;
        margin: 30px 0;
        border-radius: 8px;
        font-style: italic;
    }

    .tags {
        margin-top: 40px;
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .tag {
        background: #f2f2f2;
        padding: 8px 14px;
        border-radius: 20px;
        font-size: 14px;
        color: #333;
    }

    .author-box {
        display: flex;
        align-items: center;
        gap: 20px;
        margin: 50px 0;
        padding: 20px;
        background: #fdfdfd;
        border: 1px solid #eee;
        border-radius: 12px;
    }

    .author-box img {
        width: 80px;
        height: 80px;
        border-radius: 50%;
        object-fit: cover;
    }

    .author-box h4 {
        margin-bottom: 8px;
        font-size: 18px;
        color: #0a2440;
    }

    .related-posts {
        margin-top: 60px;
    }

    .related-posts h3 {
        font-size: 26px;
        margin-bottom: 20px;
        color: #0a2440;
    }

    .related-grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    @media (min-width: 300px) and (max-width: 750px) {

        .related-grid {
            display: grid;
            grid-template-columns: unset !important;
            gap: 20px;
        }

    }

    .related-card {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s;
    }

    .related-card:hover {
        transform: translateY(-6px);
    }

    .related-card img {
        width: 100%;
        height: 180px;
        object-fit: cover;
    }

    .related-card h4 {
        padding: 15px;
        font-size: 17px;
        color: #0a2440;
    }
</style>




<section class="section" style="margin-top: 120px; margin-bottom: 40px;">
    <main>
        <div class="blog-detail-container">
            <!-- Header -->
            <div class="blog-detail-header">
                <h2>{{ app()->getLocale() === 'ar' ? $article->title_ar : $article->title_en }}</h2>
                @php
                $date = $article->created_at->locale(app()->getLocale())->translatedFormat('d F Y');
                if (app()->getLocale() === 'ar') {
                $western = ['0','1','2','3','4','5','6','7','8','9'];
                $eastern = ['٠','١','٢','٣','٤','٥','٦','٧','٨','٩'];
                $date = str_replace($western, $eastern, $date);
                }
                @endphp
                <p class="blog-meta">{{ $date }}</p>
                <!-- <p class="blog-meta">By Dr. Khalid Al-Ruhaimi | April 15, 2025 | 6 min read</p> -->
            </div>

            <!-- Featured Image -->
            <img src="{{asset('images').'/'.$article->image}}" alt="{{ app()->getLocale() === 'ar' ? $article->title_ar : $article->title_en }}" class="blog-featured-image" />

            <!-- Blog Content -->
            <div class="blog-contentz">
                {!! html_entity_decode(app()->getLocale() === 'ar' ? $article->article_ar : $article->article_en) !!}
            </div>

            <!-- Tags -->

            <!-- <div class="tags">
                <span class="tag">#Appendicitis</span>
                <span class="tag">#GeneralSurgery</span>
                <span class="tag">#HealthTips</span>
                <span class="tag">#EmergencyCare</span>
            </div> -->

            <!-- Author Box -->

            <!-- <div class="author-box">
                <img src="{{ asset('frontend_v2/assets/images/d20.png') }}" alt="Dr. Khalid Al-Ruhaimi">
                <div>
                    <h4>About the Author</h4>
                    <p>Dr. Khalid Al-Ruhaimi is a leading general surgeon with expertise in abdominal and emergency care. He has treated thousands of patients with advanced surgical techniques.</p>
                </div>
            </div> -->

            <!-- Related Posts -->
            <section class="related-posts">
                <h3>Related Posts</h3>
                <div class="related-grid">
                    @foreach ($articles as $item)
                    <a href="{{route('articleDetails', ['surl' => $item->slug])}}">
                        <div class="related-card">
                            <img src="{{asset('images').'/'.$item->image}}" alt="{{ app()->getLocale() === 'ar' ? $item->title_ar : $item->title_en }}">
                            <h4>{{ app()->getLocale() === 'ar' ? $item->title_ar : $item->title_en }}</h4>
                        </div>
                    </a>
                    @endforeach
                </div>
            </section>
        </div>
    </main>
</section>
@endsection