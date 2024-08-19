@extends('frontend.layouts.master',['elementActive' => 'contactUs'])

@section('title','Contact Us | ShubbanBD')

@section('main_content')

<!--Google map-->
<section-iframe class="positin-relative">
  <div class="container-s">
    <div class="row">
      <div class="col-12 mt-3">
        <div id="map-container-google-1" class="map-container">
        <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJy31tnF-5VTcRuGSJOpASkG8&key=AIzaSyDosC8W4SrK1WOnUyPy6Ly1NEv9Leyw7u8" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
  <section class="related_height">
    <div class="container position-absolute start-50 translate-middle shadow bg-light">
      <div class="row">
        <div class="col-12 p-5">
          <div class="contact-content-area">
            <div class="row">

              <div class="col-12 col-lg-6">
                <!--Alert Message -->

                <div class="contact-content">
                  <h4 class="mb-4">Contact US</h4>

                  <!-- Contact Form Area -->
                  <div class="contact-form-area">
                    <form action="https://www.weeklyarafat.com/user_contact_message" method="post">
                      <input type="hidden" name="_token" value="nUtTSnNvvOJ1v5iSIDUbFHV454aLxcW1OzK3wHOp">
                      <div class="mb-3 row">
                        <div class="col-12 col-lg-6">
                          <div class="form-group">
                            <input type="text" class="mb-3 form-control " name="name" placeholder="Names">

                          </div>
                        </div>
                        <div class="col-12 col-lg-6">
                          <div class="form-group">
                            <input type="email" class="form-control " name="email" placeholder="Email">
                          </div>
                        </div>
                        <div class="col-12">
                          <div class="mb-3 form-group">
                            <textarea class="form-control" name="message" rows="5" placeholder="Comment on your contact"></textarea>
                          </div>
                        </div>
                        <div class="col-12">
                          <button type="submit" class="btn btn-outline-info pl-3 pr-3">Send <i class="fa fa-arrow-circle-right" aria-hidden="true"></i></button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>

              <div class="col-12 col-lg-6">
                <div class="contact-content contact-information">
                  <div>
                    <h3 class="">Address</h3>
                  </div>
                  <h5 class=""><span class="fw-bold">Address :</span> 79/ka/3 North Jatrabari, Dhaka-1204</h5>
                  <h5 class=""><span class="fw-bold">Mobile :</span> +880 1765812261</h5>
                  <h5 class=" mb-3"><span class="fw-bold">Email :</span> info@shubbanbd.org</h5>


                  <!-- Contact Social Info -->
                  <div class="contact-social-info mt-50 ms-4">
                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fa fa-facebook-square ms-2"></i></a>
                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fa fa-twitter ms-2"></i></a>
                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Instagram"><i class="fa fa-instagram ms-2"></i></a>
                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Google Plus"><i class="fa fa-google-plus ms-2"></i></a>
                    <a href="javascript:void(0)" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest"><i class="fa fa-pinterest ms-2"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</section-iframe>

<!--Google Maps-->



@endsection

@push('css')
<style>
  /*==============
  contact css 
==============*/
  /* map cstm css end */
  .map-container {
    overflow: hidden;
    padding-bottom: 40.25%;
    position: relative;
    height: 0;
  }

  .map-container iframe {
    left: 0;
    top: 0;
    width: 100%;
    height: 90%;
    position: absolute;
  }

  /* map cstm css end */

  /* wikly arafat contact page */
  .related_height {
    height: 40vh;
  }
  .container.position-absolute.start-50.translate-middle.shadow.bg-light {
    border-radius: 10px;
  }
</style>

@endpush

@push('scripts')

@endpush