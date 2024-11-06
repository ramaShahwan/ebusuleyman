@extends('admin.admin_master')
@section('admin')


@section('title_page')
    Tag Edit
@endsection

@section('tab_title')
    Tag Edit
@endsection


<div class="row">
    <!-- left column -->
    <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Tag Edit</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form method="post" action="{{ route('admin_tag_update') }}">
                @csrf
                <input type="hidden" value="{{ $data->id }}" name="id">
                <div class="card-body row">
                    <div class="col-md-12 col-sm-6">
                        <div class="card card-primary card-outline card-outline-tabs">
                            <div class="card-body row">



                                <div class="form-group mt-3 col-md-6">
                                    <label>Tag Title</label>
                                    <input value="{{ $data->tag_title }}" type="text" name="tag_title"
                                        class="form-control" placeholder="Tag Title">
                                    @error('tag_title')
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
            </form>

        </div>
        <!-- /.card -->


    </div>
    <!--/.col (left) -->

    <!--/.col (right) -->
</div>





@endsection
