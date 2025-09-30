@extends('frontend_v2.layouts.FrontendLayout')
@section('content')

    <style>
        /* 404 Error Page Styles */
        .error-page {
            min-height: 80vh;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #fff;
            padding: 50px 20px;
            text-align: center;
        }

        .error-container {
            max-width: 700px;
        }

        .error-title {
            font-size: 10rem;
            font-weight: 900;
            color: #980a50;
            /* hospital theme pink */
            margin: 0;
            line-height: 1;
        }

        .error-subtitle {
            font-size: 2rem;
            font-weight: 700;
            margin: 10px 0 20px;
            color: #000;
        }

        .error-message {
            font-size: 1.1rem;
            line-height: 1.6;
            color: #444;
            margin-bottom: 30px;
        }

        .error-actions {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .error-btn {
            padding: 12px 25px;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .home-btn {
            background-color: #980a50;
            color: #fff;
        }

        .home-btn:hover {
            background-color: #75053d;
        }

        .contact-btn {
            background-color: #f8f8f8;
            border: 1px solid #980a50;
            color: #980a50;
        }

        .contact-btn:hover {
            background-color: #980a50;
            color: #fff;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .error-title {
                font-size: 6rem;
            }

            .error-subtitle {
                font-size: 1.5rem;
            }

            .error-message {
                font-size: 1rem;
            }
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

    <!-- 404 Error Section -->
    <section class="error-page">
        <div class="error-container">
            <h1 class="error-title">404</h1>
            <h2 class="error-subtitle">Oops! Page Not Found</h2>
            <p class="error-message">
                The page you are looking for might have been removed, had its name changed,
                or is temporarily unavailable.
            </p>

            <div class="error-actions">
                <a href="{{ route('home') }}" class="error-btn home-btn">Go to Homepage</a>
                <a href="{{ route('contact_us') }}" class="error-btn contact-btn">Contact Support</a>
            </div>
        </div>
    </section>

@endsection