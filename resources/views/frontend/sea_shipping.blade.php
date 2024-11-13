@extends('frontend.frontend_master')
@section('front')
@section('title_page')
@endsection
<!-- /.content-header -->

@section('tab_title')
{{ $see_shipping_page->page_name }}
@endsection



@section('page_name')
    {{ $see_shipping_page->page_name }}
@endsection

@section('description')
    {{ $see_shipping_page->description }}
@endsection

@section('keywords')
    {{ $see_shipping_page->keywords }}
@endsection

@section('author')
    {{ $see_shipping_page->author }}
@endsection









@section('custom_css')
@endsection






<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Read the Details</p>
                    <h1>Single Article</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- single article section -->
<div class="mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="single-article-section">
                    <div class="single-article-text">
                        <div
                          class="single-artcile-bg"
                          style="background-image: url('{{ $see_shipping->image }}');"
                          alt="{{ $see_shipping->image_seo }}"
                        ></div>

                        <h2>{{ $see_shipping->title }}</h2>
                        <p>{{ $see_shipping->desc }}</p>
                      </div>




                    <div class="comment-template mt-5">
                        <h4>اترك تعليقا او استفسارا</h4>
                        <p>{{ $siteSetting->form_desc_contact ?? 'إذا كان لديك تعليق، لا تتردد في إرسال رأيك إلينا.' }}
                        </p>
                        <form method="POST" action="{{ route('contact.store') }}">
                            @csrf

                            <p>
                          <input type="text" placeholder="الاسم" name="name" id="name" required>
                            <input type="email" placeholder="الايميل" name="email" id="email" required>
                            </p>
                            <p>
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="الرسالة" required></textarea>
                            </p>
                            <p><input type="submit" value="Submit"></p>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- end single article section -->

<!-- logo carousel -->

<!-- end logo carousel -->

<!-- footer -->

<!-- end copyright -->

@endsection
