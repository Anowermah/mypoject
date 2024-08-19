@extends('backend.layouts.master',['elementActive' => 'module_operationContrtol'])

@section('title','Module Operation | myStarterLaravel')

@section('main_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">{{ucwords($module_info->name) }} - Module Operations</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <a class="btn btn-light float-sm-right" href="#" data-toggle="modal" data-target="#createModal" role="button"><i class="fa fa-plus-square"></i> Create Module Operation</a>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{ucwords($module_info->name) }} - Module Operations</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>Module</th>
                            <th>User Role</th>
                            <th>Route</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($module_operations as $key=>$module_operation)
                          <tr>
                              <td>{{$key + 1}}</td>
                              <td>{{$module_operation->module->name}}</td>
                              <td>{{$module_operation->operation}}</td>
                              <td>{{$module_operation->route}}</td>
                              <td>{{$module_operation->created_at->format('d-M-Y')}}</td>
                              <td>
                                <a href="" class="btn btn-success"  title="Edit" id="editRole" data-toggle="modal" data-target='#editModal' data-id="{{ $module_operation->id }}"><i class="fas fa-edit"></i></a>
                                <a href="{{route('module.operationDelete', [$module_id,$module_operation->id])}}" class="btn btn-danger delete" title="Delete"><i class="fas fa-trash"></i></a>
                              </td>
                          </tr>
                          @endforeach
                        </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>




      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

    <!-- Create modal -->
    <div class="modal fade" id="createModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Operation Create</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- form start -->
            <form class="p-2" role="form" method="post" action="{{route('module.operationAdd', $module_id)}}">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="operation" class="col-sm-2 col-form-label">Operation Name : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="operation" name="operation" placeholder="Enter Operation name here">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="route" class="col-sm-2 col-form-label">Route : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="route" name="route" placeholder="Enter Route here">
                        </div>
                    </div>

                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->

      <!-- Edit modal -->
      <div class="modal fade" id="editModal">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Operation Edit</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- form start -->
            <form class="p-2" role="form" method="post" action="{{route('module.operationUpdate', $module_id)}}">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label for="operation" class="col-sm-2 col-form-label">Operation Name : </label>
                        <div class="col-sm-10">
                            <input type="hidden" id="id" name="id" value="">
                            <input type="text" class="form-control" id="operation_name" name="operation" placeholder="Enter Operation Name here">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="route" class="col-sm-2 col-form-label">Route : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="route_name" name="route" placeholder="Enter Route here">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->


@endsection

@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">

<link rel="stylesheet" href="{{asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

<link rel="stylesheet" href="{{asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">



@endpush

@push('scripts')
<!-- DataTables  & Plugins -->
<script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>

<script src="{{asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

<script src="{{asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>

<script src="{{asset('backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

<script src="{{asset('backend/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>

<script src="{{asset('backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>

<script src="{{asset('backend/plugins/jszip/jszip.min.js')}}"></script>

<script src="{{asset('backend/plugins/pdfmake/pdfmake.min.js')}}"></script>

<script src="{{asset('backend/plugins/pdfmake/vfs_fonts.js')}}"></script>

<script src="{{asset('backend/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>

<script src="{{asset('backend/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>

<script src="{{asset('backend/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
  });
</script>

<script>
  $(document).ready(function () {
    //////////
    $('body').on('click', '#editRole', function (event) {
        event.preventDefault();
        var id = $(this).data('id');

        let routeLink = "{{ URL::route('module.operationEdit', ':id') }}";
        routeLink = routeLink.replace(':id', id);

        // AJAX request start
        $.ajax({
            url: routeLink,
            type: 'get',
            dataType: 'json',
            success: function(res) {
              $('#editModal').modal('show');
              $('#id').val(res.data.id);
              $('#operation_name').val(res.data.operation);
              $('#route_name').val(res.data.route);
            }
        });// AJAX request End

    });
    /////////

    $('.delete').click(function (e) {
        e.preventDefault(); // Prevent the href from redirecting directly
        let linkURL = $(this).attr("href");
        Swal.fire({
            title: 'Sure want to delete?',
            text: "If you click 'Yes, delete it!' file will be deleted",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                window.location.href = linkURL;
            }else{
                Swal.fire(
                    'Cancelled',
                    'Your imaginary file is safe :)',
                    'error'
                )
            }
        })
    });

  });
     

        
</script>




@endpush
