@extends('frontend.layouts.master',['elementActive' => 'home'])

@section('title','Home Page | ShubbanBD')

@section('main_content')
<div class="container-s">
  <div class="row">
    <div class="col-lg-12">
      <!-- Slider main container -->
      <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <img src="{{asset('frontend/images/slider_img/01-1024x461.jpg')}}" class="full-width" alt="slider_img">
          </div>
          <div class="swiper-slide">
            <img src="{{asset('frontend/images/slider_img/03-1024x461.jpg')}}" class="full-width" alt="slider_img">
          </div>
          <div class="swiper-slide">
            <img src="{{asset('frontend/images/slider_img/04-1024x461.jpg')}}" class="full-width" alt="slider_img">
          </div>
          <div class="swiper-slide">
            <img src="{{asset('frontend/images/slider_img/06-1024x461.jpg')}}" class="full-width" alt="slider_img">
          </div>
          <div class="swiper-slide">
            <img src="{{asset('frontend/images/slider_img/07-1024x461.jpg')}}" class="full-width" alt="slider_img">
          </div>
          <div class="swiper-slide">
            <img src="{{asset('frontend/images/slider_img/08-1024x461.jpg')}}" class="full-width" alt="slider_img">
          </div>
        </div>
        <!-- If we need pagination -->
      </div>

    </div>

  </div>
  <div class="d-flex border-top border-bottom my-2" id="had-position">
    <span class="btn btn-info">সাময়িক প্রসঙ্গ</span>
    <marquee onMouseOver="this.stop()" onMouseOut="this.start()">
      <a href="#1" class="text-decoration-none text-muted"> মাসিক আলোচনা সভা (২২শ পর্ব) অনুষ্ঠিত </a>
      <a href="#2" class="text-decoration-none text-muted"> ঈদে কুরবান বইয়ের মোড়ক উন্মোচন অনুষ্ঠিত </a>
      <a href="#3" class="text-decoration-none text-muted"> দেশের বিভিন্ন জেলায় জমঈয়ত ও শুব্বানের ত্রাণ � </a>
      <a href="#4" class="text-decoration-none text-muted"> কুরবানীর গোশত বিতরণ- ২০২২ </a>
      <a href="#4" class="text-decoration-none text-muted"> দেশব্যাপী বৃক্ষরোপণ কর্মসূচি -২০২২ </a>
    </marquee>
  </div>
</div>
<!-- carosel end -->
<div class="container-s">
  <div class="row">
    <div class="col-lg-9 col--12">
      <div class="row px-3 p-3 bg-light">
        <div class="col-lg-3">
          <img src="{{asset('frontend/images/kafi.jpg')}}" alt="">
        </div>
        <div class="col-lg-9 short_post">
          <h3>
            পরিচালক মহোদয়ের বাণী
            <p>শাইখ আবদু্ল্লাহিল কাফী মাদানী</p>
          </h3>
          <p>যাবতীয় প্রশংসা আল্লাহ তা’আলার জন্য। অবারিত সালাত ও সালাম বর্ষিত হোক মহামানব ও নবীসম্রাট মুহাম্মাদ সাল্লাল্লাহু আলাইহি ওয়া সাল্লাম এর উপর। তাওহীদি যুব কাফেলা শুব্বানে আহলে হাদীস, তাওহীদ ও সুন্নাহর শ্বাশত বাণী ছাত্র ও যুবসমাজসহ সর্বমহলে পৌঁছানোর মহান দায়িত্ব পালন করে যাচ্ছে। তারই অংশ হিসেবে আধুনিক তথ্য-প্রযুক্তির মাধ্যমে বিশ্বব্যাপী মানবজাতিকে ইসলামের চিরসুন্দর অনুপম আদর্শে আলোকিত করতে বর্তমান দায়িত্বশীলবৃন্দ শুব্বানের ওয়েবপেজটি নতুন আঙ্গিকে চালু করতে যাচ্ছে, যা একটি সময়োপযোগী পদক্ষেপ। কুরআন ও সুন্নাহর অমোঘ বাণী প্রচার ও প্রসারে তা গুরুত্বপূর্ণ ভূমিকা পালন করবে বলে ...</p>
          <button class="btn btn-secondary">See more</button>
          <!-- <div class="d-flex mb-3">
            <div class="but_border"><a class="" href="#"><i class="fa fa-facebook"></i><span> Facebook </span></a></div>
            <div class="but_border"><a class="" href="#"><i class="fa fa-whatsapp"></i><span> Whatsapp </span></a></div>
            <div class="but_border"><a class="" href="#"><i class="fa fa-linkedin"></i><span> Linkedin </span></a></div>
            <div class="but_border"><a class="" href="#"><i class="fa fa-instagram"></i><span> Instagram </span></a>
            </div>
          </div> -->
        </div>
      </div>

      <div class="row px-3 bg-light">
        <div class="col-lg-3">
          <img src="{{asset('frontend/images/faruk.jpg')}}" alt="">
        </div>
        <div class="col-lg-9 short_post">
          <h3>
            শুব্বান সভাপতির বাণী
            <p>মুহা. আব্দুল্লাহ আল-ফারুক</p>
          </h3>
          <p>সকল প্রশংসা আল্লাহ তা‘আলার জন্য যেরূপ তাঁর মহান সত্তার জন্য উপযুক্ত। অসংখ্য দরুদ ও সালাম বর্ষিত হোক সমগ্র মানবতার মুক্তিদূত রহমাতুল লিল আলামীন, মানবজাতির সর্বোত্তম আদর্শ, নবী মুহাম্মাদ সাল্লাল্লাহু আলাইহি ওয়া সাল্লাম এর উপর। সম্মানিত ভিজিটর, শুব্বানের নতুন এ ওয়েবপেইজে আপনাকে স্বাগতম। আহলান! ওয়া সাহলান! দীর্ঘ কয়েক যুগ অবধি প্রিয় মাতৃভূমি বাংলাদেশের সর্বস্তরে তাওহীদ ও সুন্নাহর শাশ্বত বাণী প্রচারসহ সমাজ সংস্কার ও আর্তমানবতার সেবা করছে আল্লামা আব্দুল্লাহেল কাফী আল-কোরায়শী (রহ.) প্রতিষ্ঠিত তাওহীদী কাফেলা বাংলাদেশ জমঈয়তে আহলে হাদীস...</p>
          <button class="btn btn-secondary">See more</button>
          <!-- <div class="d-flex mb-3">
            <div class="but_border"><a class="" href="#"><i class="fa fa-facebook"></i><span> Facebook </span></a></div>
            <div class="but_border"><a class="" href="#"><i class="fa fa-whatsapp"></i><span> Whatsapp </span></a></div>
            <div class="but_border"><a class="" href="#"><i class="fa fa-linkedin"></i><span> Linkedin </span></a></div>
            <div class="but_border"><a class="" href="#"><i class="fa fa-instagram"></i><span> Instagram </span></a>
            </div>
          </div> -->
        </div>

      </div>

      <!-- gool of shubban start -->
      <div class="row">
        <div class="col-lg-12" id="gool-s">
          <div><img class="mx-auto d-block" src="{{asset('frontend/images/vishion.png')}}" alt=""></div>
          <div>
            <h3 class="text-center">শুব্বানের লক্ষ্য ও উদ্দেশ ̈</h3>
            <p class="text-center">'কালেমা তাইয়েবা' لآ اِلَهَ اِلّا اللّهُ مُحَمَّدٌ رَسُوُل اللّهِ যথাযথ উপলব্ধি করতঃ
              জীবনের সর্বস্তরে কুরআন ও সুন্নাহ্‌র বিধান প্রতিষ্ঠার মাধ্যমে আল্লাহর সন্তষ্টি অর্জন।</p>
          </div>
        </div>
      </div>
      <!-- gool of shubban start -->
      <!-- Pillars start -->
      <div class="stape-islam">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="m-0">শুব্বানের পাঁচদফা কর্মসূচী</h2>
            <div class="empty-first">
              <div class="empty-second"></div>
            </div>
          </div>
        </div>
        <div class="col-lg-12 col-md-6 col-12">
          <div class="row align-item-center">
            <div class="col-lg-1 col-md-0"></div>
            <div class="col-lg-2 col-md-6 col-12 mb-2">
              <div class="card five-stape">
                <img class="card-image" src="{{asset('frontend/images/5_dofa_img/CR01_0_0.png')}}" alt="">
                <div class="card-body">
                  <p class="text-light">ইসলাহুল আকীদাহ্ বা আকীদাহ্ সংশোধন</p>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-12 mb-2">
              <div class="card five-stape">
                <img class="card-image" src="{{asset('frontend/images/5_dofa_img/CR02_0_0.png')}}" alt="">
                <div class="card-body">
                  <p class="text-light">আদ-দা’ওয়াহ্ ওয়াত্ তাবলীগ বা আহবান ও প্রচার</p>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-12 mb-2">
              <div class="card five-stape">
                <img class="card-image" src="{{asset('frontend/images/5_dofa_img/CR03_0_0.png')}}" alt="">
                <div class="card-body">
                  <p class="text-light">আত-তানযীম বা সংগঠন ও ব্যবস্থাপনা</p>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-12 mb-2">
              <div class="card five-stape">
                <img class="card-image" src="{{asset('frontend/images/5_dofa_img/CR04_0_0.png')}}" alt="">
                <div class="card-body">
                  <p class="text-light">আত্- তাদ্‌রীব ওয়াত্ তারবিয়াহ বা শিক্ষণ ও প্রশিক্ষণ </p>
                </div>
              </div>
            </div>
            <div class="col-lg-2 col-md-6 col-12 mb-2">
              <div class="card five-stape">
                <img class="card-image" src="{{asset('frontend/images/5_dofa_img/CR05_0_0.png')}}" alt="">
                <div class="card-body">
                  <p class="text-light">ইসলাহুল মুজতামা‘ বা সমাজ সংস্কার</p>
                </div>
              </div>
            </div>
            <div class="col-lg-1 col-md-0 col-0"></div>
          </div>
        </div>
        <div>
          <div class="row px-3 mt-5 bg-light">
            <div class="col-lg-8 short_post">
              <h3>
                বাংলাদেশ জমঈয়তে আহলে হাদীস এর বিবৃতি
              </h3>
              <p>বাংলাদেশ জমঈয়তে আহলে হাদীস একটি অরাজনৈতিক ঐতিহ্যবাহী দ্বীনি সংগঠন। সংগঠনটি দীর্ঘ ৭৬ বছর যাবত শির্ক ও বিদ’আতের বিরুদ্ধে বলিষ্ঠভাবে দা’ওয়াত ও তাবলীগের কাজ আঞ্জাম দিয়ে যাচ্ছে। যার ফলশ্রুতিতে আজ সংগঠনটি এদেশের আহলে হাদীসদের সর্ববৃহৎ ও সর্বপ্রাচীন সংগঠন হিসেবে পরিচিতি লাভ করেছে। দেশের সর্বস্তরের খ্যাতিমান ব্যক্তিবর্গ ধর্মীয় খেদমত হিসেবে জমঈয়তের দাওয়াত ও সংস্কারমূলক কার্যক্রমে আগ্রহের সাথে অংশ গ্রহণ করে থাকেন। এ পর্যায়ে আমরা দেশের আপামর জনগণের প্রতি উদাত্ত আহ্বান জানাই, আসুন! আমরা জমঈয়তের সাথে সম্পৃক্ত হয়ে দীনি দায়িত্ব পালন ও তাওহীদ প্রতিষ্ঠায় অগ্রণী ভূমিকা পালন করি।</p>
              <p>সার্বিক কল্যাণ কামনায়-<br>
                অধ্যাপক ড. আব্দুল্লাহ ফারুক, সভাপতি, বাংলাদেশ জমঈয়তে আহলে হাদীস।</p>
              <p>ড. মুহাম্মদ শহীদুল্লাহ খান মাদানী, সেক্রেটারী জেনারেল, বাংলাদেশ জমঈয়তে আহলে হাদীস।</p>
              <!-- <div class="d-flex mb-3">
                <div class="but_border"><a class="" href=""><i class="fa fa-facebook"></i><span>Facebook</span></a>
                </div>
                <div class="but_border"><a class="" href=""><i class="fa fa-whatsapp"></i><span>Whatsapp</span></a>
                </div>
                <div class="but_border"><a class="" href=""><i class="fa fa-linkedin"></i><span>Linkedin</span></a>
                </div>
                <div class="but_border"><a class="" href=""><i class="fa fa-instagram"></i><span>Instagram</span></a>
                </div>
              </div>
              <button class="btn btn-secondary">See more</button> -->
            </div>
            <div class="col-lg-4">
              <img class="Quran-i" src="{{asset('frontend/images/jamayat_img/about-us-image-150x150.jpg')}}" alt="Quran_image">
            </div>
          </div>
        </div>
        <div>
          <img class="my-5" src="images/Jamiyat-Banner.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="col-lg-3 col-md-6">
      @include('frontend.partials.right_side_menu')
    </div>
  </div>
</div>
<!-- Pillars start -->


@endsection

@push('css')
<style>
  .short_post h3 p {
    font-size: 17px;
    opacity: 0.9;
    margin: 10px 10px;
    border-bottom: 1px solid darkblue;
  }
</style>

@endpush

@push('scripts')

@endpush