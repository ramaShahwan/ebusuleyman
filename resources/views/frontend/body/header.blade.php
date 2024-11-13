










<div class="top-header-area" id="sticker">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-sm-12 text-center">
                <div class="main-menu-wrap">
                    <!-- الشعار -->
                    <div class="site-logo">
                        <a href="{{ url('/') }}">
                            <img src="{{ asset($SiteSetting->logo) }}" alt="{{ asset($SiteSetting->logo_seo) }}">
                        </a>
                    </div>
                    <!-- الشعار -->

                    <!-- القائمة تبدأ -->
                    <nav class="main-menu">
                        <ul>
                            <li class="{{ Request::is('/') ? 'current-list-item' : '' }}">
                                <a href="{{ url('/') }}">الرئيسية</a>
                            </li>
                            <li class="{{ Request::is('about') ? 'current-list-item' : '' }}">
                                <a href="{{ route('about') }}">عن الشركة</a>
                            </li>
                            <li class="{{ Request::is('sea_shipping') ? 'current-list-item' : '' }}">
                                <a href="{{ route('sea_shipping') }}">الشحن البحري</a>
                            </li>
                            <li class="{{ Request::is('contact') ? 'current-list-item' : '' }}">
                                <a href="{{ route('contact') }}">اتصل بنا</a>
                            </li>
                            <li>
                                <div class="header-icons">
                                    <form action="{{ route('search') }}" method="GET" class="search-form">
                                        <input type="text" name="search" placeholder=" search " value="{{ request('search') }}" class="search-input">
                                        <button type="submit" class="search-button"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </li>



                        </ul>
                    </nav>
                    <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                    <div class="mobile-menu"></div>
                    <!-- القائمة تنتهي -->
                </div>
            </div>
        </div>
    </div>
</div>
<div class="search-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <span class="close-btn"><i class="fas fa-window-close"></i></span>
                <div class="search-bar">
                    <div class="search-bar-tablecell">
                        <h3>ابحث عن:</h3>
                        <input type="text" placeholder="الكلمات الرئيسية">
                        <button type="submit">بحث <i class="fas fa-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
