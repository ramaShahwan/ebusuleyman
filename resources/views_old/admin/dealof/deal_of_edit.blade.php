@extends('admin.admin_master')
@section('admin')
@section('title_page')
    Deal Of Edit
@endsection

@section('tab_title')
    Deal Of Edit
@endsection


<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Deal Of Edit</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{ route('admin_deal_of_home_update') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $data->id }}">

                <div class="card-body row">
                    <div class="col-md-12 col-sm-6">
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="">
                                <div id="" aria-labelledby="home-tab">
                                    <div class="card-body row">










                                        <div class="form-group mt-3 col-md-6">
                                            <label>Deal of Month Title Circle</label>
                                            <input type="text" value="{{ $data->deal_of_month_title_circle }}"
                                                name="deal_of_month_title_circle" class="form-control"
                                                placeholder="Deal of Month Title Circle">
                                            @error('deal_of_month_title_circle')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mt-3 col-md-6">
                                            <label>Deal of the Month Title</label>
                                            <input type="text" value="{{ $data->deal_of_the_month_title }}"
                                                name="deal_of_the_month_title" class="form-control"
                                                placeholder="Deal of the Month Title">
                                            @error('deal_of_the_month_title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mt-3 col-md-6">
                                            <label>Short Title</label>
                                            <input type="text" value="{{ $data->short_title }}" name="short_title"
                                                class="form-control" placeholder="Short Title">
                                            @error('short_title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mt-3 col-md-6">
                                            <label>Long Description</label>
                                            <input type="text" value="{{ $data->logn_desc }}" name="logn_desc"
                                                class="form-control" placeholder="Long Description">
                                            @error('logn_desc')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mt-3 col-md-6">
                                            <label>Button Title</label>
                                            <input type="text" value="{{ $data->btn_title }}" name="btn_title"
                                                class="form-control" placeholder="Button Title">
                                            @error('btn_title')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="form-group mt-3 col-md-6">
                                            <label>Button Link</label>
                                            <input type="text" value="{{ $data->btn_link }}" name="btn_link"
                                                class="form-control" placeholder="Button Link">
                                            @error('btn_link')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>





                                        <div class="form-group mt-3  col-md-6">
                                            <label class="form-label">Image Deal of Month <span class="text-danger">(650 x
                                                496)</span></label>
                                            <div class="input-group">
                                                <div>
                                                    <input type="file" name="image_deal_of_month" class="form-control"
                                                        onChange="mainThamUrl(this,'mainThmb')">
                                                    @error('image_deal_of_month')
                                                        <span class="text-danger">{{ $message }}</span>
                                                    @enderror
                                                    <br>
                                                    <img width="150px" height="150px"
                                                        src="{{ asset($data->image_deal_of_month) }}">
                                                    <br> <br>
                                                    <img src="" id="mainThmb">
                                                </div>
                                            </div>
                                            <small class="form-text text-muted">Please upload an image of the
                                                recommended size.</small>
                                        </div>


                                        <div class="form-group mt-3 col-md-6">
                                            <label>Image Deal of Month SEO</label>
                                            <input type="text" value="{{ $data->image_deal_of_month_seo }}"
                                                name="image_deal_of_month_seo" class="form-control"
                                                placeholder="Image Deal of Month SEO">
                                            @error('image_deal_of_month_seo')
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
                </div>
            </form>


        </div>
        <!-- /.card -->


    </div>
    <!--/.col (left) -->

    <!--/.col (right) -->
</div>
@endsection
