@extends('frontend.layouts.master',['elementActive' => 'archives'])

@section('title','Archives | ShubbanBD')

@section('main_content')
<div class="container-s mt-3 mb-3">
  <div class="row">
    <div class="col-lg-9 col--12">
      <div class="row">
        <div class="col-lg-10 float-end">
          <img src="{{asset('frontend/images/archieve_img/01.jpg')}}" class="py-5 img-fluid" alt="01.jpg">
          <img src="{{asset('frontend/images/archieve_img/02.jpg')}}" class="img-fluid" alt="02.jpg">
          <img src="{{asset('frontend/images/archieve_img/Ashura-Leaflet-Archive-1280x1000.jpg')}}" class="py-5 img-fluid" alt="asura.jpg">
          <div class="thirty mb-5">
            <img src="{{asset('frontend/images/archieve_img/thirty.jpg')}}" class="img-fluid " alt="">
          </div>
        </div>
      </div><hr>




      <div class="row mt-3">
        <div class="col-12 col-lg-6 mt-1 mb-3">
          <img src="{{asset('frontend/images/archieve_img/Songbordhona-Banner-300x113.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-lg-6 mt-1 mb-3">

          <img src="{{asset('frontend/images/archieve_img/Iftar-Bolla-300x120.jpg')}}" class="img-fluid" alt="">

        </div>
      </div><hr>

      <div class="row pt-3">
        <div class="col-12 col-md-3 col-lg-3 mb-4">
          <img src="{{asset('frontend/images/archieve_img/Tree-Plantation-2018-300x225.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-md-3 col-lg-3 mb-4">
          <img src="{{asset('frontend/images/archieve_img/Tree-Plantation-2018-300x225.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-md-3 col-lg-3 mb-4">
          <img src="{{asset('frontend/images/archieve_img/Tree-Plantation-2018-300x225.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-md-3 col-lg-3 mb-4">
          <img src="{{asset('frontend/images/archieve_img/Tree-Plantation-2018-300x225.jpg')}}" class="img-fluid" alt="">
        </div>

        <div class="col-12 col-md-3 col-lg-3 mb-4">
          <img src="{{asset('frontend/images/archieve_img/Tree-Plantation-2018-300x225.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-md-3 col-lg-3 mb-4">
          <img src="{{asset('frontend/images/archieve_img/Tree-Plantation-2018-300x225.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-md-3 col-lg-3 mb-4">
          <img src="{{asset('frontend/images/archieve_img/Tree-Plantation-2018-300x225.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-md-3 col-lg-3 mb-4">
          <img src="{{asset('frontend/images/archieve_img/Tree-Plantation-2018-300x225.jpg')}}" class="img-fluid" alt="">
        </div>

        <div class="col-12 col-md-3 col-lg-3 mb-4">
          <img src="{{asset('frontend/images/archieve_img/Tree-Plantation-2018-300x225.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-md-3 col-lg-3 mb-4">
          <img src="{{asset('frontend/images/archieve_img/Tree-Plantation-2018-300x225.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-md-3 col-lg-3 mb-4">
          <img src="{{asset('frontend/images/archieve_img/Tree-Plantation-2018-300x225.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-md-3 col-lg-3 mb-4">
          <img src="{{asset('frontend/images/archieve_img/Tree-Plantation-2018-300x225.jpg')}}" class="img-fluid" alt="">
        </div>

        <div class="col-12 col-md-3 col-lg-3 mb-4">
          <img src="{{asset('frontend/images/archieve_img/Tree-Plantation-2018-300x225.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-md-3 col-lg-3 mb-4">
          <img src="{{asset('frontend/images/archieve_img/Tree-Plantation-2018-300x225.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-md-3 col-lg-3 mb-4">
          <img src="{{asset('frontend/images/archieve_img/Tree-Plantation-2018-300x225.jpg')}}" class="img-fluid" alt="">
        </div>
        <div class="col-12 col-md-3 col-lg-3 mb-4">
          <img src="{{asset('frontend/images/archieve_img/Tree-Plantation-2018-300x225.jpg')}}" class="img-fluid" alt="">
        </div>

      </div>

      <div class="row">
        <img src="{{asset('frontend/images/archieve_img/77.jpg')}}" class="img-fluid" alt="">
      </div>

      <div class="row">
        <img src="{{asset('frontend/images/archieve_img/diarypage.jpg')}}" class="img-fluid" alt="">
      </div>

      <div class="row my-3">
        <img src="{{asset('frontend/images/archieve_img/Shubban-Poster-4-Donation.jpg')}}" class="img-fluid" alt="">
      </div>


    </div>
    <div class="col-lg-3 col-md-6">
      @include('frontend.partials.right_side_menu')
    </div>
  </div>
</div>


@endsection

@push('css')
@endpush

@push('scripts')

@endpush