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
            <form method="POST" action="{{ route('admin_product_update') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $data->id }}" name="id">

                <div class="card-body row">
                    <div class="col-md-12 col-sm-6">
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="card-body row">
                                <div class="col-md-6 mt-3">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="category_id" class="form-control select2" style="width: 100%">
                                            @foreach ($category as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $data->category_id == $item->id ? 'selected' : '' }}>
                                                    {{ $item->category_title }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('category_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                {{-- <div class="col-md-6 mt-3">
                                    <div class="form-group">
                                        <label>Tag</label>
                                        <select name="tag_id[]" class="form-control select2" multiple>
                                            @foreach ($tag as $tag)
                                                <option value="{{ $tag->id }}"
                                                    {{ in_array($tag->id, $data->tags->pluck('id')->toArray()) ? 'selected' : '' }}>
                                                    {{ $tag->tag_title }}
                                                </option>
                                            @endforeach
                                        </select>
                                        @error('tag_id')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div> --}}

                                <div class="form-group mt-3 col-md-6">
                                    <label>Product Title</label>
                                    <input type="text" name="product_title" class="form-control"
                                        value="{{ old('product_title', $data->product_title) }}"
                                        placeholder="Product Title" required>
                                    @error('product_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-3 col-md-6">
                                    <label>Product Description</label>
                                    <input type="text" name="product_desc" class="form-control"
                                        value="{{ old('product_desc', $data->product_desc) }}"
                                        placeholder="Product Description">
                                    @error('product_desc')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>




                                <div class="form-group mt-3 col-md-6">
                                    <label>Button Title </label>
                                    <input type="text" value="{{ old('product_desc', $data->product_button_title) }}"
                                        name="product_button_title" class="form-control"
                                        placeholder="product button title">
                                    @error('product_button_title')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-3 col-md-6">
                                    <label>Button Link</label>
                                    <input type="text" value="{{ old('product_desc', $data->product_button_link) }}"
                                        name="product_button_link" class="form-control"
                                        placeholder="product button link">
                                    @error('product_button_link')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>









                                <div class="form-group mt-3 col-md-6">
                                    <label>Product Price</label>
                                    <input type="text" name="product_price" class="form-control"
                                        value="{{ old('product_price', $data->product_price) }}"
                                        placeholder="Product Price">
                                    @error('product_price')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>



                                <div class="form-group mt-3 col-md-6">
                                    <label>Product Image SEO</label>
                                    <input type="text" name="product_image_seo" class="form-control"
                                        value="{{ old('product_image_seo', $data->product_image_seo) }}"
                                        placeholder="Product Image SEO">
                                    @error('product_image_seo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>




                                <div class="form-group mt-3 col-md-6">
                                    <label>Product Image</label>
                                    <input type="file" name="product_image" class="form-control" accept="image/*">

                                    <br>
                                    <img width="100px" height="100px" src="{{ asset($data->product_image) }}">
                                    @error('product_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>






                                <div class="form-group mt-3 col-md-6">
                                    <label for="product-status" class="form-label">Product Status</label>
                                    <div class="form-check form-switch mt-2">
                                        <input type="checkbox" name="product_status" value="1"
                                            class="form-check-input" id="product-status"
                                            {{ $data->product_status == 1 ? 'checked' : '' }}>
                                        <label class="form-check-label" for="product-status">Active</label>
                                    </div>
                                </div>


                                <!-- Submit Button -->
                                <div class="form-group col-md-12 mt-3">
                                    <div class="d-flex justify-content-end">
                                        <button type="submit" class="btn btn-primary btn-lg">Update</button>
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
