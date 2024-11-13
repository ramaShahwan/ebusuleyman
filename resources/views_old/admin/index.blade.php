@extends('admin.admin_master')
@section('admin')
@section('title_page')
@endsection
<!-- /.content-header -->

@section('tab_title')
    Dashboard
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
<!-- Main content -->

<!-- Small boxes (Stat box) -->
<div class="row">
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">


            <div class="inner">
                <h3>tg</h3>

                <p>Clients</p>
            </div>
            <div class="icon">
                <i class="ion ion-bag"></i>
            </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
            <div class="inner">
                <h3>tttt</h3>

                <p>importers</p>
            </div>
            <div class="icon">
                <i class="ion ion-stats-bars"></i>
            </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>ertwe</h3>

                <p>exporters</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
        </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>45</h3>

                <p>Jobs In Process</p>
            </div>
            <div class="icon">
                <i class="ion ion-pie-graph"></i>
            </div>
            {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
        </div>
    </div>
    <!-- ./col -->
</div>
<!-- /.row -->

<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Job In Process List</h3>
    </div>
    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Job Code</th>
                    <th>Client</th>
                    <th>Exporter</th>
                    <th>Importer</th>
                    <th>Job Type</th>
                    <th>Invoice NO</th>
                    <th>Beo No</th>
                </tr>
            </thead>
            <tbody>


                <tr>

                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                    <td>7 </td>

                </tr>

            </tbody>

        </table>
    </div>
</div>
<div id="notificaiton_modal" style="padding-right: 17px;" class="modal hide fade in" data-keyboard="false"
    data-backdrop="static">>
    <div class="modal-dialog">
        <div class="modal-content" id="education_fields">
            <div class="modal-header">
                <h4 class="modal-title">Containers deadline</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>


            <div class="modal-body">
                <p>
                    There Containers will expire soon!
                </p>
                <div class="text-center">
                    <a class="btn btn-success" href="">View details</a>
                </div>
            </div>
        </div>
    </div>
</div>
@section('custom_js')
    <script src="{{ asset('backend/lte/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('backend/lte/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>


    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-12:eq(0)');

        });
    </script>
@endsection
@endsection
