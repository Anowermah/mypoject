@extends('backend.layouts.master',['elementActive' => 'post'])

@section('title','Post | Shubban BD')

@section('main_content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Post</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <a class="btn btn-light float-sm-right" href="{{route('post.create')}}"><i class="fa fa-plus-square"></i> Create Post</a>
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
                        <h3 class="card-title">Post</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>SN:</th>
                                    <th>Post Title</th>
                                    <th>Category</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posts as $key=>$post)
                                <tr>
                                    <td>{{$key + 1}}</td>
                                    <td>{{$post->title}}</td>
                                    <td>{{$post->category_name}}</td>
                                    <td>
                                        <img src="{{asset('storage/posts/'.$post->post_img)}}" width="100px" height="80px" class="show-small-img" title="{{$post->post_img}}"/>
                                    </td>
                                    <td>
                                        <a href="{{route('post.edit', $post->id)}}" class="btn btn-success" title="Edit"><i class="fas fa-edit"></i></a>
                                        <!-- <a href="{{route('setting.delete', $post->id)}}" class="btn btn-danger delete" title="Delete"><i class="fas fa-trash"></i></a> -->
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

@endsection

@push('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">

<link rel="stylesheet" href="{{asset('backend/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">

<link rel="stylesheet" href="{{asset('backend/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">

<style>
    img {
        max-width: 180px;
    }

    input[type=file] {
        padding: 10px;
        background: #2d2d2d;
    }
</style>



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
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    });
</script>

<script>
    $(document).ready(function() {
        $('.delete').click(function(e) {
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
                } else {
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