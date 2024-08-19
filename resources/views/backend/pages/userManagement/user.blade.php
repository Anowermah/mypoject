@extends('backend.layouts.master',['elementActive' => 'userControl'])

@section('title','User | myStarterLaravel')

@section('main_content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <a class="btn btn-light float-sm-right" href="#" data-toggle="modal" data-target="#createModal" role="button"><i class="fa fa-plus-square"></i> Create User</a>
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
                        <h3 class="card-title">User List</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>SL</th>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($users as $key=>$user)
                          <tr>
                              <td>{{$key + 1}}</td>
                              <td>{{$user->name}}</td>
                              <td>{{$user->email}}</td>
                              <td>{{$user->role->name}}</td>
                              <td>{{$user->created_at->format('d-M-Y')}}</td>
                              <td>
                                <a href="" class="btn btn-success"  title="Edit" id="editUser" data-toggle="modal" data-target='#editModal' data-id="{{ $user->id }}"><i class="fas fa-edit"></i></a>
                                <a href="{{route('user.delete', $user->id)}}" class="btn btn-danger delete" title="Delete"><i class="fas fa-trash"></i></a>
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
              <h4 class="modal-title">User Create</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- form start -->
            <form class="p-2" role="form" method="post" action="{{route('user.store')}}"  enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Name : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="name" placeholder="Enter user name here">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email : </label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" placeholder="Enter user email here">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Password : </label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" placeholder="Enter user Password here">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Phone : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="phone" placeholder="Enter user phone number here">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Role : </label>
                        <div class="col-sm-10">
                            <select class="form-control @error('role_id') is-invalid @enderror" name="role_id">
                                <option value="" selected disabled>Please select a Role.</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Address : </label>
                        <div class="col-sm-10">
                          <textarea name="address" class="form-control" rows="5" placeholder="Enter user address here"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Profile Photo : </label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="profile_photo" placeholder="Enter user phone number here">
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
              <h4 class="modal-title">User Edit</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <!-- form start -->
            <form class="p-2" role="form" method="post" action="{{route('user.update')}}" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Name : </label>
                        <div class="col-sm-10">
                            <input type="hidden" id="id" name="id" value="">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter user name here">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email : </label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Enter user email here">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Password : </label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control" name="password" placeholder="Enter user Password here">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Phone : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter user phone number here">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Role : </label>
                        <div class="col-sm-10">
                            <select class="form-control @error('role_id') is-invalid @enderror" name="role_id">
                                <option value=""disabled>Please select a Role.</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->id }}" class="roleOption" id="role_{{ $role->id }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Address : </label>
                        <div class="col-sm-10">
                          <textarea name="address" id="address" class="form-control" rows="5" placeholder="Enter user address here"></textarea>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Profile Photo : </label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" name="profile_photo" placeholder="Enter user phone number here">
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
    $('body').on('click', '#editUser', function (event) {
        event.preventDefault();
        var id = $(this).data('id');

        let routeLink = "{{ URL::route('user.edit', ':id') }}";
        routeLink = routeLink.replace(':id', id);

        $('.roleOption').removeAttr('selected');

        // AJAX request start
        $.ajax({
            url: routeLink,
            type: 'get',
            dataType: 'json',
            success: function(res) {
              $('#editModal').modal('show');
              $('#id').val(res.data.id);
              $('#name').val(res.data.name);
              $('#email').val(res.data.email);
              $('#phone').val(res.data.phone);
              $('#address').val(res.data.address);

              $('#role_'+res.data.role_id).attr("selected","selected");

            }
        });// AJAX request End

    });
    /////////

    $('.delete').click(function (e) {
        e.preventDefault(); // Prevent the href from redirecting directly
        let linkURL = $(this).attr("href");
        Swal.fire({
            title: 'Sure want to delete?',
            text: "If you click 'OK' file will be deleted",
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
