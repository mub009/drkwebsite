<style>
    .nav-column h2 {
        color: white !important;
        border-bottom: none;
        margin-top: 0;
    }
</style>
<footer class="hospital-footer topz">
    <section class="about-section">
        <div class="about-container">
            <h2 class="about-title">
                {{ __('footer.about_title') }}
                <span class="hospital-name">DRK</span>
</h2>
            <p class="hospital-credentials">
                {{ __('footer.hospital_credentials') }}
            </p>
            <p class="hospital-description">
                {{ __('footer.hospital_description') }}
            </p>

        </div>
    </section>

    <section class="main-footer">
        <div class="footer-background-text" aria-hidden="true">DRK</div>

        <div class="footer-content">
            <div class="hospital-info">
                <div class="logo-container">
                    <div class="logo-wrapper">
                        <img src="{{ asset('frontend_v2/assets/Icons/drk.png') }}" alt="{{ __('imagealt.footer_logo') }}" class="hospital-logoz" />
                    </div>
                </div>
                <address class="hospital-address">
                    <p class="address-line">
                        {{ __('footer.address_line') }}
                    </p>
                    <p class="contact-phone">{{ __('footer.contact_phone') }}</p>
                    <p class="contact-email">{{ __('footer.contact_email') }}</p>
                </address>
            </div>

            <nav class="footer-navigation" aria-label="{{ __('footer.navigation') }}">
                <div class="nav-column">
                    <h2 class="nav-title">{{ __('footer.nav_title_quick') }}</h2>
                    <ul class="nav-list">
                        <li><a href="{{ route('home') }}" class="nav-linkz">{{ __('footer.foot_nav_home') }}</a></li>
                        <li><a href="{{ route('about') }}" class="nav-linkz">{{ __('footer.foot_nav_about') }}</a></li>
                        <li><a href="{{ route('services') }}" class="nav-linkz">{{ __('footer.foot_nav_doctors') }}</a></li>
                    </ul>
                </div>
                <div class="nav-column">
                    <h2 class="nav-title">{{ __('footer.nav_title_services') }}</h2>
                    <ul class="nav-list">
                        <li><a href="#" class="nav-linkz">{{ __('footer.foot_nav_sections') }}</a></li>
                        <li><a href="#" class="nav-linkz">{{ __('footer.foot_nav_branches') }}</a></li>
                        <li><a href="#" class="nav-linkz">{{ __('footer.foot_nav_offers') }}</a></li>
                    </ul>
                </div>
                <div class="nav-column">
                    <h2 class="nav-title">{{ __('footer.nav_title_contact') }}</h2>
                    <ul class="nav-list">
                        <li><a href="#" class="nav-linkz">{{ __('footer.foot_nav_send_message') }}</a></li>
                        <li><a href="#" class="nav-linkz">{{ __('footer.foot_nav_book_appointment') }}</a></li>
                        <li><a href="#" class="nav-linkz">{{ __('footer.foot_nav_schedule_call') }}</a></li>
                    </ul>
                </div>
                <div class="nav-column">
                    <h2 class="nav-title">{{ __('footer.nav_title_legal') }}</h2>
                    <ul class="nav-list">
                        <li><a href="{{ route('privacy_policy') }}" class="nav-linkz">{{ __('footer.foot_nav_privacy_policy') }}</a></li>
                        <li><a href="{{ route('privacy_policy') }}" class="nav-linkz">{{ __('footer.foot_nav_terms_conditions') }}</a></li>
                        <li><a href="{{ route('privacy_policy') }}" class="nav-linkz">{{ __('footer.foot_nav_cookies_policy') }}</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="footer-bottom">
            <div class="social-media" aria-label="روابط التواصل الاجتماعي">
                <a href="https://www.instagram.com/dr.kalruhaimi?igsh=MWdzaDBlNXZwNHV2OA==" target="__blank" class="social-link" aria-label="{{ __('footer.social_instagram') }}">
                    <img src="{{ asset('frontend_v2/assets/Icons/instagram.png') }}" class="social-icon" alt="{{ __('imagealt.social_instagram') }}" />
                </a>
                <a href="https://www.snapchat.com/@drkalruhaimi?locale=ar" target="__blank" class="social-link" aria-label="{{ __('footer.social_snapchat') }}">
                    <img src="{{ asset('frontend_v2/assets/Icons/snapchat.png') }}" class="social-icon" alt="{{ __('imagealt.social_snapchat') }}" />
                </a>
                <a href="https://www.youtube.com/channel/UCnBY2OI12i89tYyJcSA8Oog" target="__blank" class="social-link" aria-label="{{ __('footer.social_youtube') }}">
                    <img src="{{ asset('frontend_v2/assets/Icons/youtube.png') }}" class="social-icon" alt="{{ __('imagealt.social_youtube') }}" />
                </a>
                <a href="https://www.tiktok.com/@drkhalidalruhaimi?lang=ar" target="__blank" class="social-link" aria-label="{{ __('footer.social_tiktok') }}">
                    <img src="{{ asset('frontend_v2/assets/Icons/tiktok.png') }}" class="social-icon" alt="{{ __('imagealt.social_tiktok') }}" />
                </a>
                <a href="https://x.com/drkalruhaimi?lang=ar" target="__blank" class="social-link" aria-label="{{ __('footer.social_twitter') }}">
                    <img src="{{ asset('frontend_v2/assets/Icons/twitter.png') }}" class="social-icon" alt="{{ __('imagealt.social_twitter') }}" />
                </a>
            </div>

            <div class="footer-divider"></div>

            <p class="copyright">
                {{ __('footer.copyright') }}
            </p>
        </div>
    </section>
</footer>


<!-- <script>
    window.addEventListener("load", function() {
        setTimeout(function() {
            document.querySelector('.loader-screen').style.display = 'none';
            document.querySelector('.main-content', 'sectionii').style.display = 'block';
        }, 5000);
    });
</script> -->
@stack('scripts')

</body>

</html>