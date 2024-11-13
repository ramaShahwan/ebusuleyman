@extends('admin.admin_master')
@section('admin')


@section('title_page')
    See Shipping Edit
@endsection

@section('tab_title')
    See Shipping Edit
@endsection


<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">See Shipping Edit</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{ route('admin_see_shipping_update') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $data->id }}" name="id">
                <div class="card-body row">
                    <div class="col-md-12 col-sm-6">
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="">
                                <div class="card-body row">
                                    <div class="form-group mt-3 col-md-6">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control"
                                               placeholder="Title" value="{{ $data->title ?? '' }}">
                                        @error('title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-3 col-md-6">
                                        <label>Description</label>
                                        <textarea name="desc" class="form-control" placeholder="Description">{{ $data->desc ?? '' }}</textarea>
                                        @error('desc')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-3 col-md-6">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control"
                                               onChange="mainThamUrl(this, 'mainThmb')">
                                        <br>
                                        <img src="{{ asset($data->image) }}" id="mainThmb"
                                             style="width: 100px; height: auto;" alt="Current Image">

                                        @error('image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-3 col-md-6">
                                        <label>Image SEO</label>
                                        <input type="text" name="image_seo" class="form-control"
                                               placeholder="Image SEO" value="{{ $data->image_seo ?? '' }}">
                                        @error('image_seo')
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
