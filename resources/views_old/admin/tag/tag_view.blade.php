@extends('admin.admin_master')
@section('admin')


@section('title_page')
    Tag List
@endsection

@section('tab_title')
    Tag List
@endsection

@section('custom_css')
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('backend/lte/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('backend/lte/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/lte/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/lte/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Theme style -->
@endsection

<!-- Google Font: Source Sans Pro -->


<div class="card">
    <div class="card-header">


        <a href="{{ route('admin_tag_create') }}">
            <button type="button" class="btn float-right bg-gradient-success">Create Tag </button>
        </a>

        <h3 class="card-title">Tag</h3>

    </div>
    <!-- /.card-header -->
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>

                    <th>Tag Title</th>

                    <th>Action</th>
                </tr>
            </thead>
            <tbody>




                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->tag_title }} </td>

                        <td>
                            <a class="btn btn-info btn-bg" href="{{ route('admin_tag_edit', $item->id) }}"
                                title="Edit">
                                <i class="fas fa-pencil-alt"></i>
                            </a>


                            <a class="btn btn-danger btn-bg" href="{{ route('admin_tag_delete', $item->id) }}"
                                id="delete" title="Delete">
                                <i class="fas fa-trash">
                                </i>


                            </a>

                        </td>
                    </tr>
                @endforeach



            </tbody>
            <tfoot>
                <tr>
                    <th>Tag Title</th>

                    <th>Action</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>
@section('custom_js')
    <script src="{{ asset('backend/lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- AdminLTE App -->

    <!-- AdminLTE for demo purposes -->
@endsection



@endsection
