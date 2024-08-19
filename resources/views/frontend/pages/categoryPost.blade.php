@extends('frontend.layouts.master',['elementActive' => 'newsGallery'])

@section('title','News Gallery | ShubbanBD')

@section('main_content')
<div class="container-s mt-3 mb-3">
  <div class="row">
    <div class="col-lg-9 col--12">
      <div class="row">
        <h3 class="text-uppercase fw-bold">{{ $category->category_name }}</h3>
        @foreach ($posts as $key=>$post)
        <figure class="news_cart">
          <img src="{{asset('storage/posts/'.$post->post_img)}}" alt="sample66" />
          <div class="date"><span class="day">{{$post->created_at->format('d')}}</span><span class="month">{{$post->created_at->format('M')}}</span></div><i class="ion-film-marker"></i>
          <figcaption>
            <h3>{{$post->title}}</h3>
            <p>{{$post->short_description}}</p>
            <button>Read More</button>
          </figcaption><a href="{{route('postDetails',$post->id)}}"></a>
        </figure>
        @endforeach

      </div><hr>
      <!-- Gallery Div -->
      <div class="row">
        <h3 class="text-center text-uppercase fw-bold">Shubban Gallery</h3>
        <div class="main-img">
          <img src="{{asset('frontend/images/nws_glry_img/img1.jpg')}}" id="current">
        </div>

        <div class="imgs">
          <img src="{{asset('frontend/images/nws_glry_img/img1.jpg')}}">
          <img src="{{asset('frontend/images/nws_glry_img/img2.jpg')}}">
          <img src="{{asset('frontend/images/nws_glry_img/img3.jpg')}}">
          <img src="{{asset('frontend/images/nws_glry_img/img4.jpg')}}">
          <img src="{{asset('frontend/images/nws_glry_img/img5.jpg')}}">
          <img src="{{asset('frontend/images/nws_glry_img/img6.jpg')}}">
          <img src="{{asset('frontend/images/nws_glry_img/img7.jpg')}}">
          <img src="{{asset('frontend/images/nws_glry_img/img8.jpg')}}">
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
  @import url(https://fonts.googleapis.com/css?family=Raleway:400,600,700,800);
  @import url(https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css);

  figure.news_cart {
    font-family: 'Raleway', Arial, sans-serif;
    color: #fff;
    position: relative;
    overflow: hidden;
    margin: 10px;
    min-width: 220px;
    max-width: 310px;
    width: 100%;
    background-color: #ffffff;
    color: #000000;
    text-align: left;
    font-size: 16px;
  }

  figure.news_cart * {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-transition: all 0.2s ease;
    transition: all 0.2s ease;
  }

  figure.news_cart img {
    max-width: 100%;
    vertical-align: top;
    -webkit-transform-origin: 50% 100%;
    transform-origin: 50% 100%;
    -webkit-transition: all 0.4s ease;
    transition: all 0.4s ease;
  }

  figure.news_cart figcaption {
    padding: 25px 0px;
    position: relative;
  }

  figure.news_cart .date,
  figure.news_cart i {
    background-color: #1abc9c;
    top: 25px;
    color: #fff;
    left: 25px;
    min-height: 60px;
    min-width: 60px;
    position: absolute;
    text-align: center;
  }

  figure.news_cart .date {
    -webkit-transition-delay: 0.2s;
    transition-delay: 0.2s;
    font-size: 22px;
    font-weight: 700;
    text-transform: uppercase;
  }

  figure.news_cart .date span {
    display: block;
    line-height: 30px;
  }

  figure.news_cart .date .month {
    font-size: 16px;
    background-color: rgba(0, 0, 0, 0.1);
  }

  figure.news_cart i {
    line-height: 60px;
    font-size: 30px;
    -webkit-transform: rotateY(-90deg);
    transform: rotateY(-90deg);
    -webkit-transition-delay: 0s;
    transition-delay: 0s;
  }

  figure.news_cart h3,
  figure.news_cart p {
    margin: 0;
    padding: 0;
  }

  figure.news_cart h3 {
    margin-bottom: 10px;
    display: inline-block;
    font-weight: 600;
    color: #333333;
    text-transform: uppercase;
  }

  figure.news_cart p {
    font-size: 0.8em;
    margin-bottom: 20px;
    line-height: 1.6em;
  }

  figure.news_cart button {
    border: medium none;
    padding: 10px 20px;
    background-color: #1abc9c;
    font-weight: 800;
    color: #ffffff;
    letter-spacing: 2px;
    text-transform: uppercase;
    font-size: 0.8em;
  }

  figure.news_cart a {
    left: 0;
    right: 0;
    top: 0;
    bottom: 0;
    position: absolute;
    z-index: 1;
  }

  figure.news_cart:hover img,
  figure.news_cart.hover img {
    -webkit-transform: scale(1.1);
    transform: scale(1.1);
  }

  figure.news_cart:hover .date,
  figure.news_cart.hover .date {
    -webkit-transform: rotateY(90deg);
    transform: rotateY(90deg);
    -webkit-transition-delay: 0s;
    transition-delay: 0s;
  }

  figure.news_cart:hover i,
  figure.news_cart.hover i {
    -webkit-transform: rotateY(0);
    transform: rotateY(0);
    -webkit-transition-delay: 0.2s;
    transition-delay: 0.2s;
  }

  figure.news_cart:hover button,
  figure.news_cart.hover button {
    background-color: #117964;
  }
</style>
<style>
  .main-img img,
  .imgs img {
    width: 100%;
  }

  .imgs {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    grid-gap: 5px;
  }

  .imgs img {
    cursor: pointer;
  }

  /* Fade in animation */
  @keyframes fadeIn {
    to {
      opacity: 1;
    }
  }

  .fade-in {
    opacity: 0;
    animation: fadeIn var(--fade-time) ease-in 1 forwards;
  }

  /* Media Queries */
  @media(max-width: 600px) {
    .imgs {
      grid-template-columns: repeat(2, 1fr);
    }
  }
</style>
@endpush

@push('scripts')
<script>
  /* Demo purposes only */
  $(".hover").mouseleave(
    function() {
      $(this).removeClass("hover");
    }
  );
</script>
<script>
  const current = document.querySelector('#current');
  const imgs = document.querySelector('.imgs');
  const img = document.querySelectorAll('.imgs img');
  const opacity = 0.6;

  // Set first img opacity
  img[0].style.opacity = opacity;

  imgs.addEventListener('click', imgClick);

  function imgClick(e) {
    // Reset the opacity
    img.forEach(img => (img.style.opacity = 1));

    // Change current image to src of clicked image
    current.src = e.target.src;

    // Add fade in class
    current.classList.add('fade-in');

    // Remove fade-in class after .5 seconds
    setTimeout(() => current.classList.remove('fade-in'), 500);

    // Change the opacity to opacity var
    e.target.style.opacity = opacity;
  }
</script>

@endpush