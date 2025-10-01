<footer class="hospital-footer topz">
    <section class="about-section">
        <div class="about-container">
            <h1 class="about-title">
                عن
                <span class="hospital-name">DRK</span>
            </h1>
            <p class="hospital-credentials">
                معتمد من CBAHI | أكثر من 150 ألف مريض راضٍ | طوارئ 24/7
            </p>
            <p class="hospital-description">
                يلتزم مستشفى الدكتور خالد الرحيمي بتقديم رعاية صحية عالمية المستوى
                باستخدام أحدث التقنيات وأمهر الأطباء والخدمات الرحيمة.
            </p>

        </div>
    </section>

    <section class="main-footer">
        <div class="footer-background-text" aria-hidden="true">DRK</div>

        <div class="footer-content">
            <div class="hospital-info">
                <div class="logo-container">
                    <div class="logo-wrapper">
                        <img src="{{ asset('frontend_v2/assets/Icons/drk.png') }}" alt="شعار مستشفى الدكتور خالد الرحيمي" class="hospital-logoz" />
                    </div>
                </div>
                <address class="hospital-address">
                    <p class="address-line">
                        مستشفى الدكتور خالد الرحيمي، شارع الأمير محمد بن فهد، الخبر،
                        المملكة العربية السعودية
                    </p>
                    <p class="contact-phone">الهاتف: +966 13 895 5555</p>
                    <p class="contact-email">البريد الإلكتروني: info@dralruhaimi.com</p>
                </address>
            </div>

            <nav class="footer-navigation" aria-label="روابط الفوتر">
                <div class="nav-column">
                    <h2 class="nav-title">روابط سريعة</h2>
                    <ul class="nav-list">
                        <li><a href="#" class="nav-linkz">الرئيسية</a></li>
                        <li><a href="#" class="nav-linkz">من نحن</a></li>
                        <li><a href="#" class="nav-linkz">الأطباء</a></li>
                    </ul>
                </div>
                <div class="nav-column">
                    <h2 class="nav-title">الخدمات</h2>
                    <ul class="nav-list">
                        <li><a href="#" class="nav-linkz">الأقسام</a></li>
                        <li><a href="#" class="nav-linkz">الفروع</a></li>
                        <li><a href="#" class="nav-linkz">العروض</a></li>
                    </ul>
                </div>
                <div class="nav-column">
                    <h2 class="nav-title">تواصل معنا</h2>
                    <ul class="nav-list">
                        <li><a href="#" class="nav-linkz">إرسال رسالة</a></li>
                        <li><a href="#" class="nav-linkz">حجز موعد</a></li>
                        <li><a href="#" class="nav-linkz">جدولة اتصال</a></li>
                    </ul>
                </div>
                <div class="nav-column">
                    <h2 class="nav-title">قانوني</h2>
                    <ul class="nav-list">
                        <li><a href="#" class="nav-linkz">سياسة الخصوصية</a></li>
                        <li><a href="#" class="nav-linkz">الشروط والأحكام</a></li>
                        <li><a href="#" class="nav-linkz">سياسة ملفات تعريف الارتباط</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="footer-bottom">
            <div class="social-media" aria-label="روابط التواصل الاجتماعي">
                <a href="#" class="social-link" aria-label="انستجرام">
                    <img src="{{ asset('frontend_v2/assets/Icons/instagram.png') }}" class="social-icon" alt="" />
                </a>
                <a href="#" class="social-link" aria-label="سناب شات">
                    <img src="{{ asset('frontend_v2/assets/Icons/snapchat.png') }}" class="social-icon" alt="" />
                </a>
                <a href="#" class="social-link" aria-label="يوتيوب">
                    <img src="{{ asset('frontend_v2/assets/Icons/youtube.png') }}" class="social-icon" alt="" />
                </a>
                <a href="#" class="social-link" aria-label="تيك توك">
                    <img src="{{ asset('frontend_v2/assets/Icons/tiktok.png') }}" class="social-icon" alt="" />
                </a>
                <a href="#" class="social-link" aria-label="تويتر">
                    <img src="{{ asset('frontend_v2/assets/Icons/twitter.png') }}" class="social-icon" alt="" />
                </a>
            </div>

            <div class="footer-divider"></div>

            <p class="copyright">
                © 2025 مستشفى الدكتور خالد الرحيمي. جميع الحقوق محفوظة.
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