@extends('admin.admin_master')
@section('admin')


@section('title_page')
    Page Seo Edit
@endsection

@section('tab_title')
    Page Seo Edit
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
            <form method="post" action="{{ route('admin_page_seo_update') }}" enctype="multipart/form-data">
                @csrf

                <input type="hidden" name="id" value="{{ $data->id }}">

                <div class="card-body row">
                    <div class="col-md-12 col-sm-6">
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="">
                                <div id="" aria-labelledby="home-tab">
                                    <div class="card-body row">








                                        <!-- Page Name -->
                                        <div class="form-group mt-3 col-md-6">
                                            <label>Page Name</label>
                                            <input readonly type="text" value="{{ $data->page_name }}"
                                                name="page_name" class="form-control" placeholder="Page Name">
                                            @error('page_name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>





                                        <!-- Author -->
                                        <div class="form-group mt-3 col-md-6">
                                            <label>Author</label>
                                            <input type="text" value="{{ $data->author }}" name="author"
                                                class="form-control" placeholder="Author">
                                            @error('author')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <!-- Keywords -->
                                        <div class="form-group mt-3 col-md-6">
                                            <label>Keywords</label>
                                            <input type="text" value="{{ $data->keywords }}" name="keywords"
                                                class="form-control" placeholder="Keywords">
                                            @error('keywords')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>


                                        <!-- Description -->
                                        <div class="form-group mt-3 col-md-6">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control" rows="4" placeholder="Description">{{ $data->description }}</textarea>
                                            @error('description')
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
