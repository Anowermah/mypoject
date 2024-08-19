@extends('backend.layouts.master',['elementActive' => 'post'])

@section('title','Edit Post | Heeds World')

@section('main_content')
<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Post Edit Page</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Post Edit Page</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-10 offset-md-1">
                <!-- general form elements -->
                <div class="card card-info">
                    <div class="card-header">
                        <h3 class="card-title">Edit Post</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form role="form" method="post" action="{{route('post.update', $post->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <div class="card card-primary card-outline">
                                <div class="card-header">
                                    <h5 class="card-title m-0">Edit Post</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-12 col-md-6">
                                            <label for="title">Title<sup> *</sup></label>
                                            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" placeholder="Please enter title"  value="{{$post->title}}">

                                            @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-12 col-md-4">
                                            <label for="category_id">Category<sup> *</sup></label>
                                            <select class="form-control @error('category_id') is-invalid @enderror" id="category_id" name="category_id">
                                                <option value="" selected disabled>Please select a Category.</option>
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" @if($category->id==$post->category_id)selected @endif>{{ $category->category_name }}</option>
                                                @endforeach

                                            </select>

                                            @error('category_id')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-12 col-md-2">
                                            <label for="status">Status<sup> *</sup></label>
                                            <select class="form-control @error('status') is-invalid @enderror" name="status">
                                                <option value="" selected disabled>Please select Status.</option>
                                                <option value="1" @if($post->status==1)selected @endif>Active</option>
                                                <option value="0" @if($post->status==0)selected @endif>Inactive</option>
                                            </select>

                                            @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-12 col-md-6">
                                            <label for="short_description">Short Description<sup> *</sup></label>
                                            <textarea class="form-control @error('short_description') is-invalid @enderror" name="short_description" id="short_description" rows="6" placeholder="Please enter short description">{{$post->short_description}}</textarea>

                                            @error('short_description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="form-group col-12 col-md-3">
                                            <label for="post_img">Banner Image</label>
                                            <input type="file" class="form-control @error('post_img') is-invalid @enderror" onchange="readURL(this);" name="post_img">

                                            @error('post_img')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                        <div class="col-12 col-md-3">
                                            <img id="blah" src="{{asset('storage/posts/'.$post->post_img)}}" alt="your image" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-12">
                                            <label for="full_description">Full Description<sup> *</sup></label>
                                            <textarea class="form-control @error('full_description') is-invalid @enderror" name="full_description" id="full_description">{!! $post->full_description !!}</textarea>

                                            @error('full_description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                        <div class="form-group col-12">
                                            <label for="post_reference">Reference</label>
                                            <textarea class="form-control @error('post_reference') is-invalid @enderror" name="post_reference" id="post_reference">{!! $post->post_reference !!}</textarea>

                                            @error('post_reference')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="form-group col-12 col-md-12">
                                            <label>SEO Keywords<sup> *</sup></label>
                                            <textarea class="form-control @error('seo_keywords') is-invalid @enderror" id="seo_keywords" name="seo_keywords" rows="5" placeholder="Please write SEO Key using Comma ">{{$post->seo_keywords}}</textarea>
                                            @error('seo_keywords')
                                            <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-info">Update</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
            <!-- /.col-12 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content -->

@endsection

@push('css')
<style>
    sup {
        color: red;
        font-weight: bold;
        font-size: 1.2rem;
    }

    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }

    #blah {
        max-width: 180px;
        height: 180px;
    }
</style>
<!-- include summernote editor css -->
<link href="{{asset('backend/plugins/summernote/summernote-bs4.css')}}" rel="stylesheet">

@endpush

@push('scripts')
<script type='text/javascript'>
    $(document).ready(function() {
        // Remove dark mode
        $("body").removeClass("dark-mode");

    });

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>

<script src="{{asset('backend/plugins/summernote/summernote-bs4.min.js')}}"></script>

<script>
    $('#full_description').summernote({
        placeholder: 'Please write Full Description',
        tabsize: 2,
        height: 400,
        toolbar: [
            ['style', ['style']],
            ['fontsize', ['fontsize']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });

    $('#post_reference').summernote({
        placeholder: 'Please write References',
        tabsize: 2,
        height: 300,
        toolbar: [
            ['style', ['style']],
            ['fontsize', ['fontsize']],
            ['font', ['bold', 'italic', 'underline', 'clear']],
            ['fontname', ['fontname']],
            ['color', ['color']],
            ['para', ['ul', 'ol', 'paragraph']],
            ['table', ['table']],
            ['insert', ['link', 'picture']],
            ['view', ['fullscreen', 'codeview', 'help']]
        ]
    });
</script>

@endpush