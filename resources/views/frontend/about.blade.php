@extends('frontend.frontend_master')
@section('front')
@section('title_page')
@endsection
<!-- /.content-header -->

@section('tab_title')
{{ $about_page->page_name }}
@endsection


@section('page_name')
    {{ $about_page->page_name }}
@endsection

@section('description')
    {{ $about_page->description }}
@endsection

@section('keywords')
    {{ $about_page->keywords }}
@endsection

@section('author')
    {{ $about_page->author }}
@endsection






@section('custom_css')
    <style>
        .feature-bg::after {

            background-image: url('{{ $SiteSetting->about_page_image }}');

            position: absolute;
            right: 0;
            top: 0;
            width: 40%;
            height: 100%;
            content: "";
            background-size: cover;
            background-position: center;
            border-top-left-radius: 5px;
            -webkit-box-shadow: 0 0 20px #cacaca;
            box-shadow: 0 0 20px #cacaca;
            border-bottom-left-radius: 5px;
        }
    </style>
@endsection





<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>نحن نبيع الغذائيات الطازجة</p>
                    <h1>عن الشركة</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- featured section -->
<div class="feature-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="featured-text">
                    <h2 class="pb-3">لماذا <span class="orange-text">ابو سليمان للغذائيات</span></h2>                    <div class="row">

                        @foreach ($why_ebu_about as $item)
                            <div class="col-lg-6 col-md-6 mb-4 mb-md-5">
                                <div class="list-box d-flex">
                                    <div class="list-icon">

                                        <i class="{{ $item->icon_feature_home }}"></i>
                                    </div>
                                    <div class="content">
                                        <h3>{{ $item->short_title }}</h3>
                                        <p>{{ $item->long_title }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end featured section -->

<!-- shop banner -->


@include('frontend.sections.Deal_of_the_month')
<!-- end shop banner -->


<!-- testimonail-section -->
@include('frontend.sections.slider_product')


<!-- end testimonail-section -->





<!-- jquery -->
@endsection
