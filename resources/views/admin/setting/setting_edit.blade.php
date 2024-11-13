@extends('admin.admin_master')
@section('admin')


@section('title_page')
    Website Setting Edit
@endsection

@section('tab_title')
    Website Setting Edit
@endsection


<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Website Setting Edit</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{ route('admin_setting_update') }}" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $data->id }}">

                <div class="card-body row">
                    <div class="col-md-12 col-sm-6">
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="card-body row">
                                <div class="form-group mt-3 col-md-6">
                                    <label>About Us Description</label>
                                    <input type="text" name="footer_about_us_desc" class="form-control"
                                        value="{{ $data->footer_about_us_desc }}" placeholder="About Us Description">
                                    @error('footer_about_us_desc')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-3 col-md-6">
                                    <label>Address</label>
                                    <input type="text" name="address" class="form-control"
                                        value="{{ $data->address }}" placeholder="Address">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-3 col-md-6">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control"
                                        value="{{ $data->email }}" placeholder="Email">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-3 col-md-6">
                                    <label>First Phone Number</label>
                                    <input type="text" name="first_phone_number" class="form-control"
                                        value="{{ $data->first_phone_number }}" placeholder="First Phone Number">
                                    @error('first_phone_number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-3 col-md-6">
                                    <label>Second Phone Number</label>
                                    <input type="text" name="second_phone_number" class="form-control"
                                        value="{{ $data->second_phone_number }}" placeholder="Second Phone Number">
                                    @error('second_phone_number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-3 col-md-6">
                                    <label>Open Shop Hour</label>
                                    <input type="text" name="open_shop_hour" class="form-control"
                                        value="{{ $data->open_shop_hour }}" placeholder="Open Shop Hour">
                                    @error('open_shop_hour')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-3 col-md-6">
                                    <label>Close Shop Hour</label>
                                    <input type="text" name="close_shop_hour" class="form-control"
                                        value="{{ $data->close_shop_hour }}" placeholder="Close Shop Hour">
                                    @error('close_shop_hour')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-3 col-md-6">
                                    <label>Twitter Link</label>
                                    <input type="text" name="twitter" class="form-control"
                                        value="{{ $data->twitter }}" placeholder="Twitter Link">
                                    @error('twitter')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-3 col-md-6">
                                    <label>Map Link</label>
                                    <input type="text" name="map" class="form-control"
                                        value="{{ $data->map }}" placeholder="Map Link">
                                    @error('map')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-3 col-md-6">
                                    <label>footer subscribe desc</label>
                                    <input type="text" name="footer_subscribe_desc" class="form-control"
                                        value="{{ $data->footer_subscribe_desc }}"
                                        placeholder="تابع كل جديد عبر بريدك">
                                    @error('footer_subscribe_desc')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-3 col-md-6">
                                    <label>LinkedIn Link</label>
                                    <input type="text" name="linkedin" class="form-control"
                                        value="{{ $data->linkedin }}" placeholder="LinkedIn Link">
                                    @error('linkedin')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group mt-3 col-md-6">
                                    <label>Instagram Link</label>
                                    <input type="text" name="instagram" class="form-control"
                                        value="{{ $data->instagram }}" placeholder="Instagram Link">
                                    @error('instagram')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>




                                <div class="form-group mt-3 col-md-6">
                                    <label>Form Desc Contact</label>
                                    <input type="text" name="form_desc_contact" class="form-control"
                                        value="{{ $data->form_desc_contact }}" placeholder="Form Desc Contact">
                                    @error('form_desc_contact')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>







                                <div class="form-group mt-3 col-md-6">
                                    <label>Facebook Link</label>
                                    <input type="text" name="facebook" class="form-control"
                                        value="{{ $data->facebook }}" placeholder="Facebook Link">
                                    @error('facebook')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group mt-3 col-md-6">
                                    <label>Logo SEO</label>
                                    <input type="text" name="logo_seo" class="form-control"
                                        value="{{ $data->logo_seo }}" placeholder="Logo SEO">
                                    @error('logo_seo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="form-group mt-3 col-md-6">
                                    <label>About Image SEO</label>
                                    <input type="text" name="about_page_image_seo" class="form-control"
                                        value="{{ $data->about_page_image_seo }}" placeholder="Logo SEO">
                                    @error('about_page_image_seo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>







                                <div class="form-group mt-3 col-md-6">
                                    <label>img icon browser</label>
                                    <input type="file" name="img_icon_browser" class="form-control"
                                        accept="image/*" onChange="mainThamUrl(this, 'mainThmb')">
                                    <br>

                                    <img src="{{ asset($data->img_icon_browser ?? '') }}" id="mainThmb"
                                        style="height: 150px;width:200px;">



                                    @error('img_icon_browser')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>










                                <div class="form-group mt-3 col-md-6">
                                    <label>Logo</label>
                                    <input type="file" name="logo" class="form-control" accept="image/*"
                                        onChange="mainThamUrl(this, 'mainThmb1')">
                                    <br>
                                    <img src="{{ asset($data->logo ?? '') }}" id="mainThmb1"
                                        style="height: 150px; width:200px;">
                                    @error('logo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>


                                <div class="form-group mt-3 col-md-6">
                                    <label>about page image</label>
                                    <input type="file" name="about_page_image" class="form-control"
                                        accept="image/*" onChange="mainThamUrl(this, 'mainThmb2')">
                                    <br>
                                    <img src="{{ asset($data->about_page_image ?? '') }}" id="mainThmb2"
                                        style="height: 150px; width:200px;">
                                    @error('about_page_image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
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





@endsection
