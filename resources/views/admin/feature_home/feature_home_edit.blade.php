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
            <form method="post" action="{{ route('admin_featrue_home_update') }}" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{ $data->id }}">

                <div class="card-body row">
                    <div class="col-md-12 col-sm-6">
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="">
                                <div id="" aria-labelledby="home-tab">
                                    <div class="card-body row">








                                        <div class="form-group mt-3 col-md-6">
                                            <label>Icon Feature Home <span class="text-danger">( <a target="_blank"
                                                        class="text-danger"
                                                        href="https://fontawesome.com/v5/icons/yin-yang?f=classic&s=solid">click
                                                        here to get an icon</a> )</span></label>

                                            <small class="form-text text-muted">Please put class icon like <span
                                                    class="text-warning"> fas fa-yin-yang.</span></small>
                                            <input value="{{ $data->icon_feature_home }}" name="icon_feature_home"
                                                type="text" class="form-control" placeholder="Icon Feature Home">
                                            @error('icon_feature_home')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mt-3 col-md-6">
                                            <label>Short Title</label>
                                            <input type="text" value="{{ $data->short_title }}" name="short_title"
                                                class="form-control mt-4" placeholder="Second Title">
                                            @error('short_title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>



                                        <div class="form-group mt-3 col-md-6">
                                            <label>Long Title</label>
                                            <input type="text" value="{{ $data->long_title }}" name="long_title"
                                                class="form-control" placeholder="Long Title">
                                            @error('long_title')
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