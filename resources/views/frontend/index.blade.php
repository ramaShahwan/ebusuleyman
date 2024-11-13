@extends('frontend.frontend_master')
@section('front')
@section('title_page')
@endsection


<!-- /.content-header -->

@section('tab_title')
    {{ $home_page->page_name }}
@endsection


@section('page_name')
    {{ $home_page->page_name }}
@endsection

@section('description')
    {{ $home_page->description }}
@endsection

@section('keywords')
    {{ $home_page->keywords }}
@endsection

@section('author')
    {{ $home_page->author }}
@endsection










@include('frontend.sections.bg_hero_home')
<!-- end hero area -->

<!-- features list section -->
@include('frontend.sections.feature_home')
<!-- end features list section -->

<!-- product section -->
@include('frontend.sections.product')
<!-- end product section -->

<!-- cart banner section -->
@include('frontend.sections.Deal_of_the_month')
<!-- end cart banner section -->

<!-- testimonail-section -->
@include('frontend.sections.slider_product')
<!-- end testimonail-section -->

<!-- advertisement section -->
@include('frontend.sections.we_are')
<!-- end advertisement section -->

<!-- shop banner -->
@include('frontend.sections.shop_banner')
<!-- end shop banner -->
@endsection
