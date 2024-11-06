@extends('admin.admin_master')
@section('admin')


@section('title_page')
    Banner Home Edit
@endsection

@section('tab_title')
    Banner Home Edit
@endsection


<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Banner Edit</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{ route('admin_banner_home_update') }}" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{ $data->id }}">

                <div class="card-body row">
                    <div class="col-md-12 col-sm-6">
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="">
                                <div id="" aria-labelledby="home-tab">
                                    <div class="card-body row">








                                        <div class="form-group mt-3 col-md-6">
                                            <label>Banner Title</label>
                                            <input value="{{ $data->short_title }}" name="short_title" type="text"
                                                class="form-control" placeholder="Banner Title">
                                            @error('short_title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mt-3 col-md-6">
                                            <label>Second Title</label>
                                            <input type="text" value="{{ $data->long_title }}" name="long_title"
                                                class="form-control" placeholder="Second Title">
                                            @error('long_title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>



                                        <div class="form-group mt-3 col-md-6">
                                            <label>Left Button Title</label>
                                            <input type="text" value="{{ $data->left_btn_title }}"
                                                name="left_btn_title" class="form-control"
                                                placeholder="Left Button Title">
                                            @error('left_btn_title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mt-3 col-md-6">
                                            <label>Left Button Link</label>
                                            <input type="text" value="{{ $data->left_btn_link }}"
                                                name="left_btn_link" class="form-control"
                                                placeholder="Left Button Link">
                                            @error('left_btn_link')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mt-3 col-md-6">
                                            <label>Right Button Title</label>
                                            <input type="text" value="{{ $data->right_btn_title }}"
                                                name="right_btn_title" class="form-control"
                                                placeholder="Right Button Title">
                                            @error('right_btn_title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mt-3 col-md-6">
                                            <label>Right Button Link</label>
                                            <input type="text" value="{{ $data->right_btn_link }}"
                                                name="right_btn_link" class="form-control"
                                                placeholder="Right Button Link">
                                            @error('right_btn_link')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>



                                        <div class="form-group mt-3  col-md-6">
                                            <label class="form-label">Banner Image <span class="text-danger">(1920 x
                                                    1281)</span></label>
                                            <div class="input-group">
                                                <div>
                                                    <input type="file" name="image_banner" class="form-control"
                                                        onChange="mainThamUrl(this,'mainThmb')">
                                                    @error('image_banner')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <br>
                                                    <img width="150px" height="150px"
                                                        src="{{ asset($data->image_banner) }}">
                                                    <br> <br>
                                                    <img src="" id="mainThmb">
                                                </div>
                                            </div>
                                            <small class="form-text text-muted">Please upload an image of the
                                                recommended size.</small>
                                        </div>


                                        <div class="form-group mt-3 col-md-6">
                                            <label>SEO Image</label>
                                            <input type="text" value="{{ $data->image_banner_seo }}"
                                                name="image_banner_seo" class="form-control" placeholder="SEO Image">
                                            @error('image_banner_seo')
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
                            <!-- /.card -->
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
