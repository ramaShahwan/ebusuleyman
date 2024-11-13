@extends('frontend.frontend_master')
@section('front')
@section('title_page')
@endsection
<!-- /.content-header -->

@section('tab_title')
    {{ $about_page->page_name }}
@endsection



@section('page_name')
    {{ $contact_page->page_name }}
@endsection

@section('description')
    {{ $contact_page->description }}
@endsection

@section('keywords')
    {{ $contact_page->keywords }}
@endsection

@section('author')
    {{ $contact_page->author }}
@endsection


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







<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>تفاصيل المنتج</p>
                    <h1>{{ $product->product_title }}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->
<div class="single-product mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="single-product-img">
                    <img src="{{ asset($product->product_image) }}" alt="{{ $product->product_image_seo }}">
                </div>
            </div>
            <div class="col-md-7">
                <div class="single-product-content">
                    <h3>{{ $product->product_title }}</h3>
                    <p class="single-product-pricing">{{ $product->product_price }}</p>
                    <p>{{ $product->product_desc }}</p>
                    <div class="single-product-form">
                        <a href="{{ route('contact') }}" class="cart-btn"><i class="fas fa-shopping-cart"></i>
                            {{ $product->product_button_title ?? 'تواصل معنا' }}</a>
                        <p><strong>الفئة: </strong>{{ $product->category->category_title }}</p>
                    </div>
                    <h4>صفحاتنا:</h4>
                    <ul class="product-share">
                        <li><a href="{{ $SiteSetting->facebook }}"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{ $SiteSetting->twitter }}"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{ $SiteSetting->instagram }}"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="{{ $SiteSetting->linkedin }}"><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="more-products mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">مترابطة</span> منتجات</h3>
                    <p>تمتع اكثر معنا</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($allProducts as $product)
                <div class="col-lg-4 mt-3 col-md-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="{{ route('front_product_info', $product->product_slug) }}"><img
                                    src="{{ asset($product->product_image) }}"
                                    alt="{{ $product->product_image_seo }}">
                        </div>

                        <h3>{{ $product->product_title }}</h3>
                        <p class="product-price"> {{ $product->product_price }}</p>
                        <a href="{{ route('front_product_info', $product->product_slug) }}" class="cart-btn"><i class="fas fa-shopping-cart"></i>
                            {{ $product->product_button_title }}</a></a>
                    </div>
                </div>
            @endforeach

        </div>

        <!-- Pagination Links -->
        <div class="product-section mt-150 mb-150">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="pagination-wrap">
                            {!! $paginationLinks !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>






    </div>
</div>

<!-- end google map section -->


@endsection
