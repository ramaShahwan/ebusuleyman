@extends('admin.admin_master')
@section('admin')


@section('title_page')
    Product Create
@endsection

@section('tab_title')
    Product Create
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
                <h3 class="card-title">Product Create</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{ route('admin_product_store') }}" enctype="multipart/form-data">
                @csrf

                <div class="card-body row">
                    <div class="col-md-12 col-sm-6">
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="card-body row">



                                <div class="col-md-6 mt-3">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="category_id" class="form-control select2" style="width: 100%">

                                            @foreach ($category as $item)
                                                <option value="{{ $item->id }}">{{ $item->category_title }}
                                                </option>
                                            @endforeach


                                        </select>

                                        @error('category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div>


                                {{-- <div class="col-md-6 mt-3">
                                    <div class="form-group">
                                        <label>Tag</label>
                                        <select name="tag_id" class="form-control select2">

                                            @foreach ($tag as $item)
                                                <option value="{{ $item->id }}">{{ $item->tag_title }}
                                                </option>
                                            @endforeach


                                        </select>

                                        @error('tag_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <!-- /.form-group -->

                                    <!-- /.form-group -->
                                </div> --}}

                                <div class="col-md-6 mt-3">
                                    <div class="form-group">
                                      <label>Tag</label>
                                      <div class="select2-purple">
                                        <select class="select2" multiple="multiple" data-placeholder="Select a State" 
                                         name="tag_id[]" data-dropdown-css-class="select2-purple" style="width: 100%;">
                                         @foreach ($category as $item)
                                         <option value="{{ $item->id }}">{{ $item->category_title }}
                                         </option>
                                     @endforeach
                                        </select>
                                        @error('tag_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                      </div>
                                    </div>
                                    <!-- /.form-group -->
                                </div>

                                <div class="form-group mt-3 col-md-6">
                                    <label>Product Title</label>
                                    <input type="text" value="{{ old('product_title') }}" name="product_title"
                                        class="form-control" placeholder="Product Title" required>
                                    @error('product_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>



                                <div class="form-group mt-3 col-md-6">
                                    <label>Product Description</label>
                                    <input type="text" value="{{ old('product_desc') }}" name="product_desc"
                                        class="form-control" placeholder="Product Description">
                                    @error('product_desc')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-3 col-md-6">
                                    <label>Product Price</label>
                                    <input type="text" value="{{ old('product_price') }}" name="product_price"
                                        class="form-control" placeholder="Product Price">
                                    @error('product_price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>



                                <div class="form-group mt-3 col-md-6">
                                    <label>Product Image SEO</label>
                                    <input value="{{ old('product_image_seo') }}" type="text"
                                        name="product_image_seo" class="form-control" placeholder="Product Image SEO">
                                    @error('product_image_seo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="form-group mt-3 col-md-6">
                                    <label>Product Image</label>
                                    <input type="file" name="product_image" class="form-control" accept="image/*"
                                        onChange="mainThamUrl(this,'mainThmb')">
                                    <br>
                                    <img src="" id="mainThmb">
                                    @error('product_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mt-3 col-md-6">
                                    <label for="product-status" class="form-label">Product Status</label>
                                    <div class="form-check form-switch mt-2">
                                        <input value="1" type="checkbox" name="product_status"
                                            class="form-check-input" id="product-status">
                                        <label class="form-check-label" for="product-status">Active</label>
                                    </div>
                                </div>










                                <!-- Submit Button -->
                                <div class="form-group col-md-12 mt-3">
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

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
