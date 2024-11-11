<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <!-- title -->
    <title>Fruitkha</title>

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('frontend/assets/img/favicon.png') }}">
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <!-- fontawesome -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/all.min.css') }}">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/bootstrap/css/bootstrap.min.css') }}">
    <!-- owl carousel -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.css') }}">
    <!-- magnific popup -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
    <!-- mean menu css -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/meanmenu.min.css') }}">
    <!-- main style -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/main.css') }}">
    <!-- responsive -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/responsive.css') }}">
   
<style>

.pagination-wrap {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.pagination-wrap .pagination {
    list-style: none;
    padding: 0;
    display: flex;
    gap: 10px;
}

.pagination-wrap .pagination .page-item {
    display: inline-block;
}

.pagination-wrap .pagination .page-link {
    padding: 8px 12px;
    border: 1px solid #ddd;
    border-radius: 5px;
    color: #333;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.pagination-wrap .pagination .page-item.active .page-link {
    background-color: #ff6600; 
    color: #fff;
    border-color: #ff6600;
}

.pagination-wrap .pagination .page-link:hover {
    background-color: #f0f0f0;
    color: #333;
}

.pagination-wrap .pagination .page-item.disabled .page-link {
    color: #999;
    cursor: not-allowed;
    border-color: #ddd;
}

.product-lists .col-lg-4,
.product-lists .col-md-6 {
    display: flex;
}

.single-product-item {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    height: 100%;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 5px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    background-color: #fff;
}

.product-image img {
    width: 100%;
    height: 200px; 
    object-fit: cover; 
    border-radius: 5px;
}


.single-product-item h3 {
    font-size: 1.25em;
    font-weight: bold;
    margin-top: 10px;
    min-height: 50px;
}

.single-product-item span {
    flex-grow: 1;
    min-height: 40px; 
}

.product-price {
    font-size: 1.5em;
    color: #333;
    margin-top: 10px;
}

.cart-btn {
    margin-top: auto;
    padding: 10px;
    font-size: 0.9em;
    background-color: #ff6600;
    color: #fff;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.cart-btn:hover {
    background-color: #e65c00;
}
</style>


</head>

<body>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <!-- header -->
    <div class="top-header-area" id="sticker">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-sm-12 text-center">
                    <div class="main-menu-wrap">
                        <!-- logo -->
                        <div class="site-logo">
                            <a href="{{ asset('index.html') }}">
                                <img src="{{ asset('frontend/assets/img/logo.png') }}" alt="">
                            </a>
                        </div>
                        <!-- logo -->

                        <!-- menu start -->
                        <nav class="main-menu">
                            <ul>
                                <li class="current-list-item"><a href="#">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ asset('index.html') }}">Static Home</a></li>
                                        <li><a href="{{ asset('index_2.html') }}">Slider Home</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ asset('about.html') }}">About</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ asset('404.html') }}">404 page</a></li>
                                        <li><a href="{{ asset('about.html') }}">About</a></li>
                                        <li><a href="{{ asset('cart.html') }}">Cart</a></li>
                                        <li><a href="{{ asset('checkout.html') }}">Check Out</a></li>
                                        <li><a href="{{ asset('contact.html') }}">Contact</a></li>
                                        <li><a href="{{ asset('news.html') }}">News</a></li>
                                        <li><a href="{{ asset('shop.html') }}">Shop</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ asset('news.html') }}">News</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ asset('news.html') }}">News</a></li>
                                        <li><a href="{{ asset('single-news.html') }}">Single News</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ asset('contact.html') }}">Contact</a></li>
                                <li><a href="{{ asset('shop.html') }}">Shop</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ asset('shop.html') }}">Shop</a></li>
                                        <li><a href="{{ asset('checkout.html') }}">Check Out</a></li>
                                        <li><a href="{{ asset('single-product.html') }}">Single Product</a></li>
                                        <li><a href="{{ asset('cart.html') }}">Cart</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <div class="header-icons">
                                        <form action="{{ route('search') }}" method="GET" class="search-form">
                                            <input type="text" name="search" placeholder="ابحث عن المنتج أو التاغ" value="{{ request('search') }}">
                                            <button type="submit"><i class="fas fa-search"></i></button>
                                        </form>
                                        <a class="shopping-cart" href="{{ asset('cart.html') }}"><i class="fas fa-shopping-cart"></i></a>
                                    </div>
                                </li>

 
                                {{-- <li>
                                    <div class="header-icons">
                                        <a class="shopping-cart" href="{{ asset('cart.html') }}"><i class="fas fa-shopping-cart"></i></a>
                                        <a class="mobile-hide search-bar-icon"  onclick="toggleSearchForm(event);">
                                            <i class="fas fa-search"></i>
                                        </a>
                                        <form id="searchForm" action="{{ route('search') }}" method="GET" style="display: none;">
                                            <input type="text" name="search" placeholder="Keywords" required>
                                            <button type="submit"><i class="fas fa-search"></i> Search</button>
                                        </form>
                                    </div>
                                </li> --}}
                 
                        </nav>
                        <a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
                        <div class="mobile-menu"></div>
                        <!-- menu end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->

    <!-- search area -->
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For:</h3>
                            <input type="text" placeholder="Keywords">
                            <button type="submit">Search <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search area -->

    <!-- hero area -->
    <div class="hero-area hero-bg" style="background-image: url('{{ asset($banner->image_banner) }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 offset-lg-2 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">{{ $banner->short_title }}</p>
                            <h1>{{ $banner->long_title }}</h1>
                            <div class="hero-btns">
                                <a href="{{ $banner->left_btn_link }}"
                                    class="boxed-btn">{{ $banner->left_btn_title }}</a>
                                <a href="{{ $banner->right_btn_link }}"
                                    class="bordered-btn">{{ $banner->right_btn_title }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end hero area -->

    <!-- features list section -->
    <div class="list-section pt-80 pb-80">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="content">
                            <h3>Free Shipping</h3>
                            <p>When order over $75</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="content">
                            <h3>24/7 Support</h3>
                            <p>Get support all day</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="list-box d-flex justify-content-start align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-sync"></i>
                        </div>
                        <div class="content">
                            <h3>Refund</h3>
                            <p>Get refund within 3 days!</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- end features list section -->

    <!-- product section -->
    <div class="product-section mt-150 mb-150">
        <div class="container">
    
            <div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            @foreach ($categories as $item)
                                <li data-filter=".{{ $item->id }}">{{ $item->category_title }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
    
            <div class="row product-lists">
                @if($products->count())
                @foreach ($products as $product)
                    <div class="col-lg-4 col-md-6 text-center {{ strtolower($product->category_id) }}">
                        <div class="single-product-item">
                            <div class="product-image"> <a href="single-product.html"><img
                                        src="{{ asset($product->product_image) }}" alt=""></a> </div>
                            <h3>{{ $product->product_title }}</h3>
                            <p class="product-price"><span>Per Kg</span> {{ $product->product_price }}$ </p> <a
                                href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                        </div>
                    </div>
                @endforeach
                      @else
                      <p>No results found.</p>
                      @endif
            </div>
     

            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="pagination-wrap">
                        {{ $products->links('pagination.custom-pagination') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end product section -->

    <!-- cart banner section -->
    <section class="cart-banner pt-100 pb-100">
        <div class="container">
            <div class="row clearfix">
                <!--Image Column-->
                <div class="image-column col-lg-6">
                    <div class="image">
                        <div class="price-box">
                            <div class="inner-price">
                                <span class="price">
                                    <strong>30%</strong> <br> off per kg
                                </span>
                            </div>
                        </div>
                        <img src="{{ asset('frontend/assets/img/a.jpg') }}" alt="">
                    </div>
                </div>
                <!--Content Column-->
                <div class="content-column col-lg-6">
                    <h3><span class="orange-text">Deal</span> of the month</h3>
                    <h4>Hikan Strwaberry</h4>
                    <div class="text">Quisquam minus maiores repudiandae nobis, minima saepe id, fugit ullam
                        similique! Beatae, minima quisquam molestias facere ea. Perspiciatis unde omnis iste natus error
                        sit voluptatem accusant</div>
                    <!--Countdown Timer-->

                    <a href="{{ asset('cart.html') }}" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i>
                        Add to Cart</a>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->

    <!-- testimonail-section -->
    <div class="testimonail-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="testimonial-sliders">
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="{{ asset('frontend/assets/img/avaters/avatar1.png') }}" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Saira Hakim <span>Local shop owner</span></h3>
                                <p class="testimonial-body">
                                    " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto
                                    beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis
                                    iste natus error sit voluptatem accusantium "
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="{{ asset('frontend/assets/img/avaters/avatar2.png') }}" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>David Niph <span>Local shop owner</span></h3>
                                <p class="testimonial-body">
                                    " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto
                                    beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis
                                    iste natus error sit voluptatem accusantium "
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="{{ asset('frontend/assets/img/avaters/avatar3.png') }}" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Jacob Sikim <span>Local shop owner</span></h3>
                                <p class="testimonial-body">
                                    " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto
                                    beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis
                                    iste natus error sit voluptatem accusantium "
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end testimonail-section -->

    <!-- advertisement section -->
    <div class="abt-section mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="abt-bg">
                        <a href="https://www.youtube.com/watch?v=DBLlFWYcIGQ" class="video-play-btn popup-youtube"><i
                                class="fas fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="abt-text">
                        <p class="top-sub">Since Year 1999</p>
                        <h2>We are <span class="orange-text">Fruitkha</span></h2>
                        <p>Etiam vulputate ut augue vel sodales. In sollicitudin neque et massa porttitor vestibulum ac
                            vel nisi. Vestibulum placerat eget dolor sit amet posuere. In ut dolor aliquet, aliquet
                            sapien sed, interdum velit. Nam eu molestie lorem.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente facilis illo repellat
                            veritatis minus, et labore minima mollitia qui ducimus.</p>
                        <a href="{{ asset('about.html') }}" class="boxed-btn mt-4">know more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end advertisement section -->

    <!-- shop banner -->
    <section class="shop-banner">
        <div class="container">
            <h3>December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
            <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
            <a href="{{ asset('shop.html') }}" class="cart-btn btn-lg">Shop Now</a>
        </div>
    </section>
    <!-- end shop banner -->

    <!-- latest news -->
    <div class="latest-news pt-150 pb-150">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Our</span> News</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
                            beatae optio.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="{{ asset('single-news.html') }}">
                            <div class="latest-news-bg news-bg-1"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="{{ asset('single-news.html') }}">You will vainly look for fruit on it in
                                    autumn.</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                            </p>
                            <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                                Praesent vitae mattis nunc, egestas viverra eros.</p>
                            <a href="{{ asset('single-news.html') }}" class="read-more-btn">read more <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="{{ asset('single-news.html') }}">
                            <div class="latest-news-bg news-bg-2"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="{{ asset('single-news.html') }}">A man's worth has its season, like
                                    tomato.</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                            </p>
                            <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                                Praesent vitae mattis nunc, egestas viverra eros.</p>
                            <a href="{{ asset('single-news.html') }}" class="read-more-btn">read more <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="{{ asset('single-news.html') }}">
                            <div class="latest-news-bg news-bg-3"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="{{ asset('single-news.html') }}">As people can be divided into those who seek
                                    fruit and those who find it.</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                            </p>
                            <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                                Praesent vitae mattis nunc, egestas viverra eros.</p>
                            <a href="{{ asset('single-news.html') }}" class="read-more-btn">read more <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end latest news -->

    <!-- logo carousel -->
    <div class="logo-carousel-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner">
                        <div class="single-logo-item">
                            <img src="{{ asset('frontend/assets/img/company-logos/1.png') }}" alt="Company Logo 1">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{ asset('frontend/assets/img/company-logos/2.png') }}" alt="Company Logo 2">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{ asset('frontend/assets/img/company-logos/3.png') }}" alt="Company Logo 3">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{ asset('frontend/assets/img/company-logos/4.png') }}" alt="Company Logo 4">
                        </div>
                        <div class="single-logo-item">
                            <img src="{{ asset('frontend/assets/img/company-logos/5.png') }}" alt="Company Logo 5">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end logo carousel -->

    <!-- footer -->
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box about-widget">
                        <h2 class="widget-title">About Us</h2>
                        <p>نسعى لتقديم أفضل الخدمات في مجالنا، مع الالتزام بالجودة والابتكار.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box get-in-touch">
                        <h2 class="widget-title">Get in Touch</h2>
                        <ul>
                            <li>34/8, East Hukupara, Gifirtok, Sadan.</li>
                            <li><a href="mailto:support@fruitkha.com">support@fruitkha.com</a></li>
                            <li>+00 111 222 3333</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box pages">
                        <h2 class="widget-title">Pages</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="services.html">Shop</a></li>
                            <li><a href="news.html">News</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-box subscribe">
                        <h2 class="widget-title">Subscribe</h2>
                        <p>اشترك في قائمتنا البريدية لتلقي آخر التحديثات.</p>
                        <form action="index.html" method="post">
                            <input type="email" placeholder="Email" required>
                            <button type="submit"><i class="fas fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end footer -->

    <!-- copyright -->
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <p>حقوق الطبع والنشر &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>, جميع
                        الحقوق محفوظة.<br>
                        تم التوزيع بواسطة - <a href="https://themewagon.com/">Themewagon</a>
                    </p>
                </div>
                <div class="col-lg-6 text-right col-md-12">
                    <div class="social-icons">
                        <ul>
                            <li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
                            <li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end copyright -->

    <!-- jquery -->
    <script src="{{ asset('frontend/assets/js/jquery-1.11.3.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('frontend/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- count down -->
    <script src="{{ asset('frontend/assets/js/jquery.countdown.js') }}"></script>
    <!-- isotope -->
    <script src="{{ asset('frontend/assets/js/jquery.isotope-3.0.6.min.js') }}"></script>
    <!-- waypoints -->
    <script src="{{ asset('frontend/assets/js/waypoints.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- mean menu -->
    <script src="{{ asset('frontend/assets/js/jquery.meanmenu.min.js') }}"></script>
    <!-- sticker js -->
    <script src="{{ asset('frontend/assets/js/sticker.js') }}"></script>
    <!-- main js -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>


    <script>
    
        function handleFilterClick(url) {
            console.log("Navigating to:", url);
            window.location.href = url;
        }
    
        const filterItems = document.querySelectorAll('#filter-list li');
        filterItems.forEach(item => {
            item.addEventListener('click', function() {
                const url = this.getAttribute('data-url');
                handleFilterClick(url);
            });
        });

    </script>



</body>

</html>
