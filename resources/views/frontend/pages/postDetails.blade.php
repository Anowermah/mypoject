@extends('frontend.layouts.master',['elementActive' => 'postDetails'])

@section('title',"$post->slug | ShubbanBD")

@section('main_content')
<div class="container-s mt-3 mb-3">
  <div class="row">
    <div class="col-lg-9 col--12">
      <div class="row">
        <div class="post_header">
          <h3 class="text-center">{{$post->title}}</h3>
          <!-- <div class="post_written_by">
            <span data-toggle="modal" data-target="#myModal">{{@$post->writer->writer_name}}</span>
          </div> -->
        </div>
        <div class="post_image mb-3">
          <img src="{{asset('storage/posts/'.$post->post_img)}}" alt="{{$post->post_img}}" />
        </div>

        <div class="full_post">
          {!!$post->full_description !!}
        </div>
        <div class="post_reference">
          {!!$post->post_reference !!}
        </div>


      </div>

    </div>
    <div class="col-lg-3 col-md-6">
      @include('frontend.partials.right_side_menu')
    </div>
  </div>
</div>


@endsection

@push('css')
<style>
  .post_header {
    margin: 14px 0px;
    border-bottom: 1px solid #dadada;
  }

  .post_header h3 {
    color: #026533;
  }
  .post_image img{
    width: 100%;
    height: 350px;
  }

  .full_post {
    padding-left: 10px;
    margin-bottom: 15px;
    border-bottom: 1px solid #dadada;
  }

  .post_reference {
    padding-left: 10px;
    /* margin-bottom: 15px; */
  }
</style>
@endpush

@push('scripts')
@endpush