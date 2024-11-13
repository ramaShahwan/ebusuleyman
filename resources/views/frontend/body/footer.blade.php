<div class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="footer-box about-widget">
                    <h2 class="widget-title">معلومات عنا</h2>
                    <p>{{ $SiteSetting->footer_about_us_desc ?? 'نسعى لتقديم أفضل الخدمات في مجالنا، مع الالتزام بالجودة والابتكار.' }}</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box get-in-touch">
                    <h2 class="widget-title">تواصل معنا</h2>
                    <ul>
                        <li>{{ $SiteSetting->address ?? 'العنوان غير متوفر' }}</li>
                        <li><a href="mailto:{{ $SiteSetting->email }}">{{ $SiteSetting->email ?? 'support@example.com' }}</a></li>
                        <li>{{ $SiteSetting->first_phone_number ?? '+00 111 222 3333' }}</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box pages">
                    <h2 class="widget-title">الصفحات</h2>
                    <ul>
                        <li class="{{ Request::is('/') ? 'current-list-item' : '' }}">
                            <a href="{{ url('/') }}">الرئيسية</a>
                        </li>
                        <li class="{{ Request::is('about') ? 'current-list-item' : '' }}">
                            <a href="{{ route('about') }}">معلومات عنا</a>
                        </li>
                        <li class="{{ Request::is('sea_shipping') ? 'current-list-item' : '' }}">
                            <a href="{{ route('sea_shipping') }}">الشحن البحري</a>
                        </li>
                        <li class="{{ Request::is('contact') ? 'current-list-item' : '' }}">
                            <a href="{{ route('contact') }}">اتصل بنا</a>
                        </li>
                        <li>
                            <div class="header-icons">
                                <a class="mobile-hide search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="footer-box subscribe">
                    <h2 class="widget-title">اشترك</h2>
                    <p>{{ $SiteSetting->footer_subscribe_desc ?? 'اشترك في قائمتنا البريدية لتلقي آخر التحديثات.' }}</p>
                    <form method="POST" action="{{ route('contact.store') }}">
                        @csrf
                        <input type="email" placeholder="البريد الإلكتروني" required>
                        <button type="submit"><i class="fas fa-paper-plane"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- حقوق الطبع والنشر -->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <p>حقوق الطبع والنشر &copy; {{ date('Y') }} - <a href="https://yourwebsite.com/">ALAA ELDIN ALHALLAK</a>, جميع الحقوق محفوظة.</p>
            </div>
            <div class="col-lg-6 text-right col-md-12">
                <div class="social-icons">
                    <ul>
                        <li><a href="{{ $SiteSetting->facebook ?? '#' }}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{ $SiteSetting->twitter ?? '#' }}" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{ $SiteSetting->instagram ?? '#' }}" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="{{ $SiteSetting->linkedin ?? '#' }}" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
