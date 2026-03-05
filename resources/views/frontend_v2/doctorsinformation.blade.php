@extends('frontend_v2.layouts.FrontendLayout')
@section('content')

<style>
    /* Premium Doctor Details Styles */
    .doctor-details-wrapper {
        max-width: 1200px;
        margin: 150px auto 60px;
        padding: 0 20px;
        font-family: 'Inter', sans-serif;
        color: #333;
    }

    .doctor-profile-header {
        display: flex;
        flex-wrap: wrap;
        background: #fff;
        border-radius: 20px;
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.05);
        overflow: hidden;
        margin-bottom: 40px;
        position: relative;
    }

    .doctor-profile-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 120px;
        background: linear-gradient(135deg, #7a0840, #980a50);
        z-index: 1;
    }

    .doctor-image-container {
        padding: 40px;
        z-index: 2;
        position: relative;
        text-align: center;
        flex: 1 1 300px;
        max-width: 350px;
    }

    .doctor-image-container img {
        width: 220px;
        height: 220px;
        border-radius: 50%;
        border: 6px solid #fff;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        object-fit: cover;
        background: #f4f7f6;
    }

    .doctor-header-content {
        padding: 140px 40px 40px 20px;
        z-index: 2;
        position: relative;
        flex: 2 1 500px;
    }

    .doctor-header-content h1 {
        font-size: 32px;
        font-weight: 700;
        color: #7a0840;
        margin-bottom: 5px;
    }

    .doctor-header-content h2 {
        font-size: 20px;
        color: #6c757d;
        font-weight: 500;
        margin-bottom: 15px;
        font-family: 'Cairo', sans-serif;
    }

    .specialty-badge {
        background: #fce8f0;
        color: #980a50;
        padding: 8px 16px;
        border-radius: 50px;
        font-size: 14px;
        font-weight: 600;
        display: inline-block;
        margin-bottom: 20px;
    }

    .doctor-quick-info {
        display: flex;
        gap: 30px;
        flex-wrap: wrap;
        margin-top: 30px;
    }

    .info-item {
        display: flex;
        align-items: center;
        gap: 10px;
        font-size: 15px;
        color: #555;
    }

    .info-item i {
        color: #980a50;
        font-size: 18px;
        background: #fdf1f5;
        width: 35px;
        height: 35px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
    }

    .doctor-main-grid {
        display: grid;
        grid-template-columns: 2fr 1fr;
        gap: 30px;
    }

    @media (max-width: 991px) {
        .doctor-main-grid {
            grid-template-columns: 1fr;
        }

        .doctor-header-content {
            padding: 20px 40px 40px 40px;
            text-align: center;
        }

        .doctor-quick-info {
            justify-content: center;
        }
    }

    @media (max-width: 768px) {
        .education-awards-grid {
            grid-template-columns: 1fr !important;
        }

        .services-list {
            grid-template-columns: 1fr !important;
        }
    }

    .detail-card {
        background: #fff;
        border-radius: 16px;
        padding: 30px;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.03);
        margin-bottom: 30px;
        border: 1px solid #f0f0f0;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .detail-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 15px 35px rgba(0, 0, 0, 0.08);
    }

    .card-title {
        font-size: 20px;
        font-weight: 700;
        color: #7a0840;
        margin-bottom: 25px;
        display: flex;
        align-items: center;
        gap: 12px;
        border-bottom: 2px solid #fdf1f5;
        padding-bottom: 15px;
    }

    .card-title i {
        color: #980a50;
    }

    .bio-text {
        line-height: 1.8;
        color: #555;
        font-size: 16px;
    }

    .services-list {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 15px;
        list-style: none;
        padding: 0;
    }

    .services-list li {
        background: #f8fafc;
        padding: 12px 18px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        gap: 10px;
        font-weight: 500;
        color: #333;
        transition: all 0.3s ease;
    }

    .services-list li:hover {
        background: #fce8f0;
        color: #980a50;
    }

    .services-list li i {
        color: #980a50;
    }

    .timeline {
        position: relative;
        padding-left: 30px;
    }

    .timeline::before {
        content: '';
        position: absolute;
        left: 3px;
        top: 5px;
        bottom: 0;
        width: 2px;
        background: #e2e8f0;
    }

    .timeline-item {
        position: relative;
        margin-bottom: 25px;
    }

    .timeline-item::before {
        content: '';
        position: absolute;
        left: -35px;
        top: 5px;
        width: 12px;
        height: 12px;
        border-radius: 50%;
        background: #980a50;
        border: 3px solid #fce8f0;
    }

    .timeline-title {
        font-weight: 600;
        font-size: 16px;
        color: #333;
        margin-bottom: 5px;
    }

    .timeline-subtitle {
        font-size: 14px;
        color: #777;
    }

    .contact-info-list {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .contact-info-list li {
        display: flex;
        align-items: flex-start;
        gap: 15px;
        margin-bottom: 20px;
        padding-bottom: 20px;
        border-bottom: 1px solid #f0f0f0;
    }

    .contact-info-list li:last-child {
        border-bottom: none;
        margin-bottom: 0;
        padding-bottom: 0;
    }

    .ci-icon {
        background: #fce8f0;
        width: 45px;
        height: 45px;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #980a50;
        font-size: 20px;
        flex-shrink: 0;
    }

    .ci-details span {
        display: block;
        font-size: 13px;
        color: #888;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        font-weight: 600;
        margin-bottom: 4px;
    }

    .ci-details strong {
        font-size: 16px;
        color: #333;
        font-weight: 600;
    }

    .action-btns {
        display: flex;
        flex-direction: column;
        gap: 15px;
        margin-top: 30px;
    }

    .btn-primary {
        background: #980a50;
        color: #fff;
        padding: 15px 20px;
        border-radius: 10px;
        text-align: center;
        font-weight: 600;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        transition: all 0.3s ease;
        border: none;
        cursor: pointer;
        font-size: 16px;
    }

    .btn-primary:hover {
        background: #7a0840;
        transform: translateY(-2px);
        box-shadow: 0 8px 20px rgba(152, 10, 80, 0.2);
        color: #fff;
    }

    .btn-outline {
        background: transparent;
        color: #980a50;
        padding: 15px 20px;
        border-radius: 10px;
        text-align: center;
        font-weight: 600;
        text-decoration: none;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 10px;
        transition: all 0.3s ease;
        border: 2px solid #980a50;
        cursor: pointer;
        font-size: 16px;
    }

    .btn-outline:hover {
        background: #fce8f0;
        color: #980a50;
    }

    .working-hours {
        background: #f8fafc;
        border-radius: 10px;
        padding: 20px;
    }

    .wh-day {
        display: flex;
        justify-content: space-between;
        margin-bottom: 12px;
        padding-bottom: 12px;
        border-bottom: 1px dashed #e2e8f0;
        font-weight: 500;
    }

    .wh-day:last-child {
        margin-bottom: 0;
        padding-bottom: 0;
        border-bottom: none;
    }

    .wh-time {
        color: #980a50;
        font-weight: 600;
    }

    /* Animations */
    .fade-up {
        animation: fadeUp 0.8s ease forwards;
        opacity: 0;
        transform: translateY(20px);
    }

    @keyframes fadeUp {
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* Grid specific for Education and Awards */
    .education-awards-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px;
    }
    .doctor-main-grid {
    display: flex;
    gap: 20px;
    align-items: stretch; /* makes children same height */
}

.doctor-main-content,
.doctor-sidebar {
    flex: 1;
    display: flex;
}

.detail-card {
    flex: 1;
    display: flex;
    flex-direction: column;
}
@media (max-width: 768px) {
    .doctor-main-grid {
        flex-direction: column;
    }
}
</style>





<div class="doctor-details-wrapper">
    <!-- Header Profile -->
    <div class="doctor-profile-header fade-up" style="animation-delay: 0.1s;">
        <div class="doctor-image-container">
            <img src="{{ asset('images/'.$doctor->image) }}" alt="">
        </div>
        <div class="doctor-header-content">
            <h1> {{ app()->getLocale() === 'ar' ? $doctor->name_ar : $doctor->name_en }}</h1>

            <div class="doctor-quick-info">
                <div class="info-item">
                    <i class="fas fa-hospital"></i>
                    <div style="display: flex;">
                        <strong>{{ __('services.department') }} :</strong><br>
                        <span style="margin-left: 10px ;"> {{ app()->getLocale() === 'ar' ? $doctor->department_ar : $doctor->department_en }}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="doctor-main-grid">

    <!-- Main Content Left -->
    <div class="doctor-main-content">
        <div class="detail-card fade-up" style="animation-delay: 0.2s;">
            <h3 class="card-title">
                <i class="fas fa-user"></i>{{ __('services.about-doctor') }}
            </h3>
            <p class="bio-text">
                {{ $doctor->doctor_description }}
            </p>
        </div>
    </div>

    <!-- Sidebar Right -->
    <div class="doctor-sidebar">
        <div class="detail-card fade-up"
            style="animation-delay: 0.5s; background: linear-gradient(135deg, #7a0840, #980a50); color: white; border: none;">
            <h3 style="color: white; font-size: 18px; margin-bottom: 10px; font-weight: 600;">
                <i class="fas fa-building" style="margin-right: 8px;"></i>{{ __('services.medical-center') }}
            </h3>
            <p style="color: #fce8f0; font-size: 14px; line-height: 1.6;">
                {{ __('services.description') }}
            </p>
        </div>
    </div>

</div>
</div>


@endsection
