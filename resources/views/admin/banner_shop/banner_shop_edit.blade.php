@extends('admin.admin_master')
@section('admin')


@section('title_page')
    Banner Shop Edit
@endsection

@section('tab_title')
    Banner Shop Edit
@endsection


<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Banner Shop Edit</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{ route('admin_banner_shop_update') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $data->id }}" name="id">
                <div class="card-body row">
                    <div class="col-md-12 col-sm-6">
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="">
                                <div class="card-body row">
                                    <div class="form-group mt-3 col-md-6">
                                        <label>Sale Title</label>
                                        <input type="text" name="sale_title" class="form-control"
                                            placeholder="Sale Title" value="{{ $data->sale_title ?? '' }}">
                                        @error('sale_title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-3 col-md-6">
                                        <label>Sale Description</label>
                                        <textarea name="sale_desc" class="form-control" placeholder="Sale Description">{{ $data->sale_desc ?? '' }}</textarea>
                                        @error('sale_desc')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-3 col-md-6">
                                        <label>Sale Button</label>
                                        <input type="text" name="sale_button" class="form-control"
                                            placeholder="Sale Button" value="{{ $data->sale_button ?? '' }}">
                                        @error('sale_button')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-3 col-md-6">
                                        <label>Sale Button Link</label>
                                        <input type="url" name="sale_button_link" class="form-control"
                                            placeholder="Sale Button Link" value="{{ $data->sale_button_link ?? '' }}">
                                        @error('sale_button_link')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-3 col-md-6">
                                        <label>Sale Image</label>
                                        <input type="file" name="sale_image" class="form-control"
                                            onChange="mainThamUrl(this,'mainThmb')">
                                        <br>
                                        <img src="{{ asset($data->sale_image) }}" id="mainThmb"
                                            style="width: 100px; height: auto;" alt="Current Sale Image">

                                        @error('sale_image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-3 col-md-6">
                                        <label>Sale Image SEO</label>
                                        <input type="text" name="sale_image_seo" class="form-control"
                                            placeholder="Sale Image SEO" value="{{ $data->sale_image_seo ?? '' }}">
                                        @error('sale_image_seo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
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
                </div>
            </form>


        </div>
        <!-- /.card -->


    </div>
    <!--/.col (left) -->

    <!--/.col (right) -->
</div>





@endsection
