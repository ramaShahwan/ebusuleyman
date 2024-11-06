@extends('admin.admin_master')
@section('admin')


@section('title_page')
    Slider Home Product Create
@endsection

@section('tab_title')
    Slider Home Product Create
@endsection










@section('custom_css')
    <link rel="stylesheet" href="{{ asset('backend/plugins/fontawesome-free/css/all.min.css') }}" />
    <!-- daterange picker -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/daterangepicker/daterangepicker.css') }}" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}" />
    <!-- Bootstrap Color Picker -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css') }}" />
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}" />
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/select2/css/select2.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('backend/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}" />
    <!-- Bootstrap4 Duallistbox -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css') }}" />
    <!-- BS Stepper -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/bs-stepper/css/bs-stepper.min.css') }}" />
    <!-- dropzonejs -->
    <link rel="stylesheet" href="{{ asset('backend/plugins/dropzone/min/dropzone.min.css') }}" />
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('backend/dist/css/adminlte.min.css') }}" />
@endsection














<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Slider Home Product Create</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{ route('admin_slider_home_product_store') }}" enctype="multipart/form-data">
                @csrf

                <div class="card-body row">
                    <div class="col-md-12 col-sm-6">
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="card-body row">



                                <!-- Slider Title -->
                                <div class="form-group mt-3 col-md-6">
                                    <label>Slider Title</label>
                                    <input type="text" value="{{ old('title_slider_product_home') }}"
                                        name="title_slider_product_home" class="form-control" placeholder="Slider Title"
                                        required>
                                    @error('title_slider_product_home')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Slider Description -->
                                <div class="form-group mt-3 col-md-6">
                                    <label>Slider Description</label>
                                    <input type="text" value="{{ old('desc_slider_product_home') }}"
                                        name="desc_slider_product_home" class="form-control"
                                        placeholder="Slider Description">
                                    @error('desc_slider_product_home')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Slider Image SEO -->
                                <div class="form-group mt-3 col-md-6">
                                    <label>Slider Image SEO</label>
                                    <input type="text" value="{{ old('image_slider_product_home_seo') }}"
                                        name="image_slider_product_home_seo" class="form-control"
                                        placeholder="Slider Image SEO">
                                    @error('image_slider_product_home_seo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Slider Image Upload -->
                                <div class="form-group mt-3 col-md-6">
                                    <label>Slider Image</label>
                                    <input type="file" name="image_slider_product_home" class="form-control"
                                        accept="image/*" onChange="mainThamUrl(this, 'mainThmb')">
                                    <br>
                                    <img src="" id="mainThmb">
                                    @error('image_slider_product_home')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <!-- Submit Button -->
                                <div class="form-group col-md-12 mt-3">
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>


                                    </div>
                                    <!-- /.card -->


                                </div>
                                <!--/.col (left) -->

                                <!--/.col (right) -->
                            </div>





                            @section('custom_js')
                                <!-- jQuery -->
                                <script src="{{ asset('backend/plugins/jquery/jquery.min.js') }}"></script>
                                <!-- Bootstrap 4 -->
                                <script src="{{ asset('backend/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                                <!-- Select2 -->
                                <script src="{{ asset('backend/plugins/select2/js/select2.full.min.js') }}"></script>
                                <!-- Bootstrap4 Duallistbox -->

                                <!-- Page specific script -->
                                <script>
                                    $(function() {
                                        //Initialize Select2 Elements
                                        $(".select2").select2();



                                    });
                                </script>
                            @endsection





                        @endsection
