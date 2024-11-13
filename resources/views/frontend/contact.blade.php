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









<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>Get 24/7 Support</p>
                    <h1>Contact us</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- contact form -->
<div class="contact-from-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="form-title">
                    <h2>هل لديك اي سؤال?</h2>
                    <p> {{ $SiteSetting->form_desc_contact ?? 'لا تتردد في التواصل معنا' }} </p>
                </div>
                <div id="form_status"></div>
                <div class="contact-form">
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <p>
                            <input type="text" placeholder="الاسم" name="name" id="name" required>
                            <input type="email" placeholder="الايميل" name="email" id="email" required>
                        </p>
                        <p>
                            <input type="tel" placeholder="رقم الهاتف" name="phone" id="phone">
                            <input type="text" placeholder="Subject" name="الموضوع" id="subject">
                        </p>
                        <p>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="الرسالة" required></textarea>
                        </p>
                        <p>
                            <input type="submit" value="Submit">
                        </p>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="contact-form-wrap">
                    <div class="contact-form-box">
                        <h4><i class="fas fa-map"></i> عنوان المتجر</h4>
                        <p>{{ $SiteSetting->address ?? 'عنوان المتجر غير متوفر' }}</p>
                    </div>
                    <div class="contact-form-box">
                        <h4><i class="far fa-clock"></i> ساعات العمل</h4>
                        <p>{{ $SiteSetting->open_shop_hour ?? 'ساعات العمل غير متوفرة' }} <br>
                            {{ $SiteSetting->close_shop_hour ?? 'ساعات العمل غير متوفرة' }}</p>
                    </div>
                    <div class="contact-form-box">
                        <h4><i class="fas fa-address-book"></i> الاتصال</h4>
                        <p>الهاتف: {{ $SiteSetting->first_phone_number ?? 'رقم الهاتف غير متوفر' }} <br>
                            البريد الإلكتروني: {{ $SiteSetting->email ?? 'البريد الإلكتروني غير متوفر' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end contact form -->

<!-- find our location -->
<div class="find-location blue-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <p> <i class="fas fa-map-marker-alt"></i> موقعنا على الخريطة</p>
            </div>
        </div>
    </div>
</div>
<!-- end find our location -->

<!-- google map section -->
<div class="embed-responsive embed-responsive-21by9">
    {!! $SiteSetting->map !!}
</div>

<!-- end google map section -->

@endsection
