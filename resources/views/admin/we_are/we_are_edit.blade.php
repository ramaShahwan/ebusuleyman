@extends('admin.admin_master')
@section('admin')


@section('title_page')
    We Are Edit
@endsection

@section('tab_title')
    We Are Edit
@endsection


<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">We Are Edit</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{ route('admin_we_are_update') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $data->id }}" name="id">

                <div class="card-body row">
                    <div class="col-md-12 col-sm-6">
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="">
                                <div class="card-body row">
                                    <div class="form-group mt-3 col-md-6">
                                        <label>We Are Title</label>
                                        <input type="text" name="we_are_title" class="form-control" placeholder="We Are Title" value="{{ old('we_are_title', $data->we_are_title) }}">
                                        @error('we_are_title')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-3 col-md-6">
                                        <label>We Are Date</label>
                                        <input type="date" name="we_are_date" class="form-control" value="{{ old('we_are_date', $data->we_are_date) }}">
                                        @error('we_are_date')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-3 col-md-6">
                                        <label>We Are Button</label>
                                        <input type="text" name="we_are_button" class="form-control" placeholder="We Are Button" value="{{ old('we_are_button', $data->we_are_button) }}">
                                        @error('we_are_button')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-3 col-md-6">
                                        <label>We Are Button Link</label>
                                        <input type="url" name="we_are_button_link" class="form-control" placeholder="We Are Button Link" value="{{ old('we_are_button_link', $data->we_are_button_link) }}">
                                        @error('we_are_button_link')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-3 col-md-6">
                                        <label>We Are Description</label>
                                        <textarea name="we_are_desc" class="form-control" placeholder="We Are Description">{{ old('we_are_desc', $data->we_are_desc) }}</textarea>
                                        @error('we_are_desc')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-3 col-md-6">
                                        <label>We Are Image</label>
                                        <input type="file" name="we_are_image" class="form-control"  onChange="mainThamUrl(this,'mainThmb')">
                                        @if($data->we_are_image)
                                            <img src="{{ asset($data->we_are_image) }}"  width="100" class="mt-2">
                                        @endif

                                        <img src="" id="mainThmb">

                                        @error('we_are_image')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-3 col-md-6">
                                        <label>We Are Image SEO</label>
                                        <input type="text" name="we_are_image_seo" class="form-control" placeholder="We Are Image SEO" value="{{ old('we_are_image_seo', $data->we_are_image_seo) }}">
                                        @error('we_are_image_seo')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-3 col-md-6">
                                        <label>We Are Video Link</label>
                                        <input type="url" name="we_are_video_link" class="form-control" placeholder="We Are Video Link" value="{{ old('we_are_video_link', $data->we_are_video_link) }}">
                                        @error('we_are_video_link')
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
