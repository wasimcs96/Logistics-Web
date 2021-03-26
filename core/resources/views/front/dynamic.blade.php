@extends("front.$version.layout")

@section('pagename')
 - {{convertUtf8($page->name)}}
@endsection

@section('meta-keywords', "$page->meta_keywords")
@section('meta-description', "$page->meta_description")

@section('content')
  <!--   breadcrumb area start   -->
  <div class="breadcrumb-area" style="background-image: url('{{asset('assets/front/img/' . $bs->breadcrumb)}}');background-size:cover;">
     <div class="container">
        <div class="breadcrumb-txt"style="
        padding: 5px;
    ">
           <div class="row">
              <div class="col-xl-7 col-lg-8 col-sm-10">
                 {{-- <span>{{convertUtf8($page->title)}}</span>
                 <h1>{{convertUtf8($page->subtitle)}}</h1> --}}
                 <ul class="breadcumb"style="
                 padding: 10px;
                 margin-top: 0;
             ">
                    <li><a href="{{route('front.index')}}">{{__('Home')}}</a></li>
                    <li>{{convertUtf8($page->name)}}</li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
     <div class="breadcrumb-area-overlay" style="background-color: #{{$be->breadcrumb_overlay_color}};opacity: {{$be->breadcrumb_overlay_opacity}};"></div>
  </div>
  <!--   breadcrumb area end    -->


  <!--   about company section start   -->
  <div class="about-company-section">
     <div class="container">
        <div class="row">
           <div class="col-lg-12">
             {!! replaceBaseUrl(convertUtf8($page->body)) !!}
           </div>
        </div>
     </div>
  </div>
  <!--   about company section end   -->

  


<section class="about-why-us section-padding outline-none" id="why-metropolitan-movers">
  <div class="container">
    <h2 class="section-title">
      Why Global Trust Movers?
    </h2>
    <div class="row mt-3 mt-xl-5">
      <div class="col-12 my-3 my-xl-0 col-md-6 col-xl-3 service-card-wrap">
        <div class="card service-card">
          <div class="card-icon">
            <img src="{{asset('assets/front/img/09-expert-movers.svg')}}" alt="Caring And Expert Movers" class="img-fluid">
          </div>
          <div class="card-body">
            <h3 class="card-title">
              Caring And Expert Movers
            </h3>
            <p class="card-text text-373737">
              Professionally equipped with knowledge and tools, our moving crew works to outperform your expectations. 
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 my-3 my-xl-0 col-md-6 col-xl-3 service-card-wrap">
        <div class="card service-card">
          <div class="card-icon">
            <img src="{{asset('assets/front/img/10-trusted.svg')}}" alt="Trusted And Reliable" class="img-fluid">
          </div>
          <div class="card-body">
            <h3 class="card-title">
              Trusted And Reliable
            </h3>
            <p class="card-text text-373737">
              Accredited by industry organisations like Canadian Association of Movers and American Moving and Storage Association, we operate according to the highest industry standar 
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 my-3 my-xl-0 col-md-6 col-xl-3 service-card-wrap">
        <div class="card service-card">
          <div class="card-icon">
            <img src="{{asset('assets/front/img/11-successful-moves.svg')}}" alt="50,000+ Successful Moves" class="img-fluid">
          </div>
          <div class="card-body">
            <h3 class="card-title">
              50,000+ Successful Moves
            </h3>
            <p class="card-text text-373737">
              With more than 10 years of experience and extensive national network, we pride ourselves to deliver exceptional service with every move 
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 my-3 my-xl-0 col-md-6 col-xl-3 service-card-wrap">
        <div class="card service-card">
          <div class="card-icon">
            <img src="{{asset('assets/front/img/12-referral-rate.svg')}}" alt="94% Customer Referral Rate" class="img-fluid">
          </div>
          <div class="card-body">
            <h3 class="card-title">
              94% Customer Referral Rate
            </h3>
            <p class="card-text text-373737">
              Working to achieve 100% customer satisfaction is in our DNA. We customise the move according to your needs. 
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="testimonials section-padding outline-none" id="customer-reviews">
    <div class="container">
    <h3 class="round-title text">What People say</h3>
    <div class="row">
    <div class="container">
        <div id="demo" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="carousel-caption">
                        <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code, I don't know what will.This was the very best explanation of frameworks for brginners that I've ever seen. </p> <img src="{{asset('assets/front/img/lE89Aey.jpg')}}">
                        <div id="image-caption">Nick Doe</div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption">
                        <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code, I don't know what will.This was the very best explanation of frameworks for brginners that I've ever seen.</p> <img src="{{asset('assets/front/img/QptVdsp.jpg')}}" class="img-fluid">
                        <div id="image-caption">Cromption Greves</div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-caption">
                        <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code, I don't know what will.This was the very best explanation of frameworks for brginners that I've ever seen.</p> <img src="{{asset('assets/front/img/jQWThIn.jpg')}}" class="img-fluid">
                        <div id="image-caption">Harry Mon</div>
                    </div>
                </div>
            </div> <a class="carousel-control-prev" href="#demo" data-slide="prev"> <i class='fas fa-arrow-left' style="background-color: #0C4DA1;
        padding: 1.4rem;"></i> </a> <a class="carousel-control-next" href="#demo" data-slide="next"> <i class='fas fa-arrow-right' style="background-color: #0C4DA1;
        padding: 1.4rem;"></i> </a>
        </div>
    </div>

    </div>
    </div>
    </div></div>
    </div>
    </div>
    </div>
</section>


<section class="cta-section franchise-cta-section XXsnipcss_extracted_selector_selectionXX">
  <div class="cotainer-fluid cta-white-blue">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-5 col-xl-4 py-lg-5 py-xl-2 white-half text-white">
          <h3 class="cta-title font-oswald mb-3 text-center text-lg-left">
            Why Choose Us?
          </h3>
          <div class="row cta-block align-items-center mb-3">
            <div class="col-3">
              <span class="cta-stats">
                94%
              </span>
            </div>
            <div class="col-9">
              <div class="ml-lg-2">
                <h4 class="cta-block-title">
                  CUSTOMER REFERRAL RATE
                </h4>
                <p class="text-left">
                  94% of our clients feel confident to suggest our moving services to their friends and family.
                </p>
              </div>
            </div>
          </div>
          <div class="row cta-block align-items-center mb-3">
            <div class="col-3">
              <span class="cta-stats cta-stats-sm">
                50,000+
              </span>
            </div>
            <div class="col-9">
              <div class="ml-lg-2">
                <h4 class="cta-block-title">
                  SUCCESSFUL MOVES
                </h4>
                <p class="text-left">
                  We helped to relocate over 50,000 Canadian families and businesses to their new homes and offices.
                </p>
              </div>
            </div>
          </div>
          <div class="row cta-block align-items-center mb-3 mb-lg-0">
            <div class="col-3">
              <span class="cta-stats">
                10+
              </span>
            </div>
            <div class="col-9">
              <div class="ml-lg-2">
                <h4 class="cta-block-title">
                  YEARS OF EXPERIENCE
                </h4>
                <p class="text-left">
                  What does experience mean to you? For us, it is reliability, trust, professionalism, and confidence in every move.
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 offset-lg-1 col-xl-6 offset-xl-2 text-black cta-form">
          <p class="mb-0  text-center  text-lg-left">
            We are one click away!
          </p>
          <h3 class="text-uppercase font-weight-bold  text-center  text-lg-left mb-4">
            Request a free quote
          </h3>
          <div role="form" class="wpcf7" id="wpcf7-f11-o2" lang="en-US" dir="ltr">
            <div class="screen-reader-response">
              <p role="status" aria-live="polite" aria-atomic="true">
              </p>
              <ul>
              </ul>
            </div>
            <form action="/long-distance-moving#wpcf7-f11-o2" method="post" class="wpcf7-form underline-input-form init" novalidate="novalidate" data-status="init" id="underline-input-form">
              <div style="display: none;">
                <input type="hidden" name="_wpcf7" value="11">
                <input type="hidden" name="_wpcf7_version" value="5.4">
                <input type="hidden" name="_wpcf7_locale" value="en_US">
                <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f11-o2">
                <input type="hidden" name="_wpcf7_container_post" value="0">
                <input type="hidden" name="_wpcf7_posted_data_hash" value="">
              </div>
              <div class="row">
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="name" class="sr-only">
                      Name
                    </label>
                    <span class="wpcf7-form-control-wrap Name">
                      <input type="text" name="Name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="name" aria-required="true" aria-invalid="false" placeholder="Name">
                    </span>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="email" class="sr-only">
                      Email
                    </label>
                    <span class="wpcf7-form-control-wrap email_address">
                      <input type="email" name="email_address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" id="email" aria-required="true" aria-invalid="false" placeholder="Email Address">
                    </span>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="phone" class="sr-only">
                      Phone Number
                    </label>
                    <span class="wpcf7-form-control-wrap PhoneNumber">
                      <input type="tel" name="PhoneNumber" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control" id="phone" aria-required="true" aria-invalid="false" placeholder="Phone Number">
                    </span>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="date_of_moving" class="sr-only">
                      Date of Moving (Optional)
                    </label>
                    <span class="wpcf7-form-control-wrap DateofMoving">
                      <input type="date" name="DateofMoving" value="" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-date form-control" aria-invalid="false" placeholder="Date of Moving">
                    </span>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="moving_from" class="sr-only">
                      Moving From (Optional)
                    </label>
                    <span class="wpcf7-form-control-wrap MovingFrom">
                      <input type="text" name="MovingFrom" value="" size="40" class="wpcf7-form-control wpcf7-text form-control" id="moving_from" aria-invalid="false" placeholder="Moving From (Optional)">
                    </span>
                  </div>
                </div>
                <div class="col-12 col-md-6">
                  <div class="form-group">
                    <label for="moving_to" class="sr-only">
                      Moving To (Optional)
                    </label>
                    <span class="wpcf7-form-control-wrap MovingTo">
                      <input type="text" name="MovingTo" value="" size="40" class="wpcf7-form-control wpcf7-text form-control" id="moving_to" aria-invalid="false" placeholder="Moving To (Optional)">
                    </span>
                  </div>
                </div>
                <div class="col-12 pt-5">
                  <div class="d-flex justify-content-center justify-content-lg-end">
                    <input type="submit" value="Submit Your Request" class="wpcf7-form-control wpcf7-submit btn btn-simple-blue btn-lg" id="btn_submit" aria-invalid="false" style="
    background-color: #0A3041;
    border: 1px solid #0A3041;
">
                    <span class="ajax-loader">
                    </span>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <span class="wpcf7-form-control-wrap other_campaign">
                  <input type="hidden" name="other_campaign" value="none" size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden" id="other_campaign" aria-invalid="false">
                </span>
              </div>
              <div class="wpcf7-response-output" aria-hidden="true">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Start logistics_partner section -->
@if ($bs->partner_section == 1)
<section class="logistics_partner partner_v1 pt-125 pb-125">
<div class="container">
<div class="partner_slide">
@foreach ($partners as $key => $partner)
<div class="single_partner">
<a href="{{$partner->url}}"><img src="{{asset('assets/front/img/partners/'.$partner->image)}}" class="img-fluid" alt=""></a>
</div>
@endforeach
</div>
</div>
</section>
@endif
<!-- End logistics_partner section -->


@endsection

@section('styles')

<style>

<link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css'>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
<link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
<link href='https://use.fontawesome.com/releases/v5.7.2/css/all.css'>

@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:100;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOiCnqEu92Fr1Mu51QrEz0dL_nz.woff2) format('woff2');
unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:100;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOiCnqEu92Fr1Mu51QrEzQdL_nz.woff2) format('woff2');
unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:100;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOiCnqEu92Fr1Mu51QrEzwdL_nz.woff2) format('woff2');
unicode-range:U+1F00-1FFF;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:100;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOiCnqEu92Fr1Mu51QrEzMdL_nz.woff2) format('woff2');
unicode-range:U+0370-03FF;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:100;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOiCnqEu92Fr1Mu51QrEz8dL_nz.woff2) format('woff2');
unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:100;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOiCnqEu92Fr1Mu51QrEz4dL_nz.woff2) format('woff2');
unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:100;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOiCnqEu92Fr1Mu51QrEzAdLw.woff2) format('woff2');
unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:300;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TjASc3CsTKlA.woff2) format('woff2');
unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:300;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TjASc-CsTKlA.woff2) format('woff2');
unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:300;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TjASc2CsTKlA.woff2) format('woff2');
unicode-range:U+1F00-1FFF;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:300;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TjASc5CsTKlA.woff2) format('woff2');
unicode-range:U+0370-03FF;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:300;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TjASc1CsTKlA.woff2) format('woff2');
unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:300;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TjASc0CsTKlA.woff2) format('woff2');
unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:300;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TjASc6CsQ.woff2) format('woff2');
unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:400;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1Mu51xFIzIFKw.woff2) format('woff2');
unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:400;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1Mu51xMIzIFKw.woff2) format('woff2');
unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:400;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1Mu51xEIzIFKw.woff2) format('woff2');
unicode-range:U+1F00-1FFF;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:400;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1Mu51xLIzIFKw.woff2) format('woff2');
unicode-range:U+0370-03FF;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:400;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1Mu51xHIzIFKw.woff2) format('woff2');
unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:400;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1Mu51xGIzIFKw.woff2) format('woff2');
unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:400;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1Mu51xIIzI.woff2) format('woff2');
unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:500;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51S7ACc3CsTKlA.woff2) format('woff2');
unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:500;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51S7ACc-CsTKlA.woff2) format('woff2');
unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:500;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51S7ACc2CsTKlA.woff2) format('woff2');
unicode-range:U+1F00-1FFF;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:500;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51S7ACc5CsTKlA.woff2) format('woff2');
unicode-range:U+0370-03FF;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:500;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51S7ACc1CsTKlA.woff2) format('woff2');
unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:500;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51S7ACc0CsTKlA.woff2) format('woff2');
unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:500;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51S7ACc6CsQ.woff2) format('woff2');
unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:700;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic3CsTKlA.woff2) format('woff2');
unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:700;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic-CsTKlA.woff2) format('woff2');
unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:700;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic2CsTKlA.woff2) format('woff2');
unicode-range:U+1F00-1FFF;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:700;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic5CsTKlA.woff2) format('woff2');
unicode-range:U+0370-03FF;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:700;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic1CsTKlA.woff2) format('woff2');
unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:700;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic0CsTKlA.woff2) format('woff2');
unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:700;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TzBic6CsQ.woff2) format('woff2');
unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:900;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TLBCc3CsTKlA.woff2) format('woff2');
unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:900;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TLBCc-CsTKlA.woff2) format('woff2');
unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:900;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TLBCc2CsTKlA.woff2) format('woff2');
unicode-range:U+1F00-1FFF;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:900;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TLBCc5CsTKlA.woff2) format('woff2');
unicode-range:U+0370-03FF;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:900;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TLBCc1CsTKlA.woff2) format('woff2');
unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:900;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TLBCc0CsTKlA.woff2) format('woff2');
unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
} 
@font-face { 
font-family:'Roboto';
font-style:italic;
font-weight:900;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOjCnqEu92Fr1Mu51TLBCc6CsQ.woff2) format('woff2');
unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:100;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1MmgVxFIzIFKw.woff2) format('woff2');
unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:100;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1MmgVxMIzIFKw.woff2) format('woff2');
unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:100;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1MmgVxEIzIFKw.woff2) format('woff2');
unicode-range:U+1F00-1FFF;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:100;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1MmgVxLIzIFKw.woff2) format('woff2');
unicode-range:U+0370-03FF;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:100;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1MmgVxHIzIFKw.woff2) format('woff2');
unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:100;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1MmgVxGIzIFKw.woff2) format('woff2');
unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:100;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOkCnqEu92Fr1MmgVxIIzI.woff2) format('woff2');
unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:300;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fCRc4EsA.woff2) format('woff2');
unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:300;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fABc4EsA.woff2) format('woff2');
unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:300;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fCBc4EsA.woff2) format('woff2');
unicode-range:U+1F00-1FFF;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:300;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fBxc4EsA.woff2) format('woff2');
unicode-range:U+0370-03FF;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:300;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fCxc4EsA.woff2) format('woff2');
unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:300;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fChc4EsA.woff2) format('woff2');
unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:300;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmSU5fBBc4.woff2) format('woff2');
unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:400;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu72xKOzY.woff2) format('woff2');
unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:400;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu5mxKOzY.woff2) format('woff2');
unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:400;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7mxKOzY.woff2) format('woff2');
unicode-range:U+1F00-1FFF;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:400;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu4WxKOzY.woff2) format('woff2');
unicode-range:U+0370-03FF;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:400;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7WxKOzY.woff2) format('woff2');
unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:400;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu7GxKOzY.woff2) format('woff2');
unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:400;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOmCnqEu92Fr1Mu4mxK.woff2) format('woff2');
unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:500;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmEU9fCRc4EsA.woff2) format('woff2');
unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:500;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmEU9fABc4EsA.woff2) format('woff2');
unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:500;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmEU9fCBc4EsA.woff2) format('woff2');
unicode-range:U+1F00-1FFF;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:500;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmEU9fBxc4EsA.woff2) format('woff2');
unicode-range:U+0370-03FF;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:500;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmEU9fCxc4EsA.woff2) format('woff2');
unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:500;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmEU9fChc4EsA.woff2) format('woff2');
unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:500;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmEU9fBBc4.woff2) format('woff2');
unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:700;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCRc4EsA.woff2) format('woff2');
unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:700;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfABc4EsA.woff2) format('woff2');
unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:700;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCBc4EsA.woff2) format('woff2');
unicode-range:U+1F00-1FFF;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:700;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfBxc4EsA.woff2) format('woff2');
unicode-range:U+0370-03FF;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:700;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfCxc4EsA.woff2) format('woff2');
unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:700;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfChc4EsA.woff2) format('woff2');
unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:700;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmWUlfBBc4.woff2) format('woff2');
unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:900;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmYUtfCRc4EsA.woff2) format('woff2');
unicode-range:U+0460-052F, U+1C80-1C88, U+20B4, U+2DE0-2DFF, U+A640-A69F, U+FE2E-FE2F;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:900;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmYUtfABc4EsA.woff2) format('woff2');
unicode-range:U+0400-045F, U+0490-0491, U+04B0-04B1, U+2116;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:900;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmYUtfCBc4EsA.woff2) format('woff2');
unicode-range:U+1F00-1FFF;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:900;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmYUtfBxc4EsA.woff2) format('woff2');
unicode-range:U+0370-03FF;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:900;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmYUtfCxc4EsA.woff2) format('woff2');
unicode-range:U+0102-0103, U+0110-0111, U+0128-0129, U+0168-0169, U+01A0-01A1, U+01AF-01B0, U+1EA0-1EF9, U+20AB;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:900;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmYUtfChc4EsA.woff2) format('woff2');
unicode-range:U+0100-024F, U+0259, U+1E00-1EFF, U+2020, U+20A0-20AB, U+20AD-20CF, U+2113, U+2C60-2C7F, U+A720-A7FF;
} 
@font-face { 
font-family:'Roboto';
font-style:normal;
font-weight:900;
font-display:swap;
src:url(https://fonts.gstatic.com/s/roboto/v20/KFOlCnqEu92Fr1MmYUtfBBc4.woff2) format('woff2');
unicode-range:U+0000-00FF, U+0131, U+0152-0153, U+02BB-02BC, U+02C6, U+02DA, U+02DC, U+2000-206F, U+2074, U+20AC, U+2122, U+2191, U+2193, U+2212, U+2215, U+FEFF, U+FFFD;
} 
*, :after, :before { 
    box-sizing: border-box;
} 

body { 
    margin: 0; 
    font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"; 
    font-size: 1rem; 
    font-weight: 400; 
    line-height: 1.5; 
    color: #212529; 
    text-align: left; 
    background-color: #fff; 
    margin-top: 0px; 
    margin-right: 0px; 
    margin-bottom: 0px; 
    margin-left: 0px;
} 

body { 
    font-family: montserrat; 
    overflow-x: hidden; 
    font-size: 16px;
} 

@media all{     
.elementor-kit-4601 { 
    --e-global-color-primary: #6EC1E4; 
    --e-global-color-secondary: #54595F; 
    --e-global-color-text: #7A7A7A; 
    --e-global-color-accent: #61CE70; 
    --e-global-color-51f11ddf: #4054B2; 
    --e-global-color-44fa91de: #23A455; 
    --e-global-color-1abe944a: #000; 
    --e-global-color-55e8712c: #FFF; 
    --e-global-color-78d3eb84: #0C4DA1; 
    --e-global-color-93c8a57: #85DC65; 
    --e-global-typography-primary-font-family: "Roboto"; 
    --e-global-typography-primary-font-weight: 600; 
    --e-global-typography-secondary-font-family: "Roboto Slab"; 
    --e-global-typography-secondary-font-weight: 400; 
    --e-global-typography-text-font-family: "Roboto"; 
    --e-global-typography-text-font-weight: 400; 
    --e-global-typography-accent-font-family: "Roboto"; 
    --e-global-typography-accent-font-weight: 500;
} 
}     

html { 
    font-family: sans-serif; 
    line-height: 1.15; 
    -webkit-text-size-adjust: 100%; 
    -webkit-tap-highlight-color: transparent; 
    text-size-adjust: 100%;
} 

@media all{     
:root { 
    --wp-admin-theme-color: #007cba; 
    --wp-admin-theme-color-darker-10: #006ba1; 
    --wp-admin-theme-color-darker-20: #005a87;
} 
}     

:root { 
    --blue: #007bff; 
    --indigo: #6610f2; 
    --purple: #6f42c1; 
    --pink: #e83e8c; 
    --red: #dc3545; 
    --orange: #fd7e14; 
    --yellow: #ffc107; 
    --green: #28a745; 
    --teal: #20c997; 
    --cyan: #17a2b8; 
    --white: #fff; 
    --gray: #6c757d; 
    --gray-dark: #343a40; 
    --primary: #007bff; 
    --secondary: #6c757d; 
    --success: #28a745; 
    --info: #17a2b8; 
    --warning: #ffc107; 
    --danger: #dc3545; 
    --light: #f8f9fa; 
    --dark: #343a40; 
    --breakpoint-xs: 0; 
    --breakpoint-sm: 576px; 
    --breakpoint-md: 768px; 
    --breakpoint-lg: 992px; 
    --breakpoint-xl: 1200px; 
    --font-family-sans-serif: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji"; 
    --font-family-monospace: SFMono-Regular,Menlo,Monaco,Consolas,"Liberation Mono","Courier New",monospace;
} 

:root { 
    --swiper-theme-color: #007aff;
} 

:root { 
    --swiper-navigation-size: 44px;
} 

@media all{     
:root { 
    --page-title-display: block;
} 
}     

article, aside, figcaption, figure, footer, header, hgroup, main, nav, section { 
    display: block;
} 

.section-padding { 
    padding-top: 80px; 
    padding-bottom: 80px;
} 

.about-why-us { 
    background-color: #0C4DA1;
} 

:selection { 
    background: #85dc65; 
    color: #fff; 
    background-image: initial; 
    background-position-x: initial; 
    background-position-y: initial; 
    background-size: initial; 
    background-repeat-x: initial; 
    background-repeat-y: initial; 
    background-attachment: initial; 
    background-origin: initial; 
    background-clip: initial; 
    background-color: rgb(133, 220, 101);
} 

.container { 
    width: 100%; 
    padding-right: 15px; 
    padding-left: 15px; 
    margin-right: auto; 
    margin-left: auto;
} 

@media (min-width: 576px){     
.container { 
    max-width: 540px;
} 
}     

@media (min-width: 768px){     
.container { 
    max-width: 720px;
} 
}     

@media (min-width: 992px){     
.container { 
    max-width: 960px;
} 
}     

@media (min-width: 1200px){     
.container { 
    max-width: 1140px;
} 
}     

@media (min-width: 576px){     
.container, .container-sm { 
    max-width: 540px;
} 
}     

@media (min-width: 768px){     
.container, .container-md, .container-sm { 
    max-width: 720px;
} 
}     

@media (min-width: 992px){     
.container, .container-lg, .container-md, .container-sm { 
    max-width: 960px;
} 
}     

@media (min-width: 1200px){     
.container, .container-lg, .container-md, .container-sm, .container-xl { 
    max-width: 1140px;
} 
}     

@media (min-width: 1300px){     
.container { 
    max-width: 1160px;
} 
}     

h1, h2, h3, h4, h5, h6 { 
    margin-top: 0; 
    margin-bottom: .5rem;
} 

.h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 { 
    margin-bottom: .5rem; 
    font-weight: 500; 
    line-height: 1.2;
} 

.h2, h2 { 
    font-size: 2rem;
} 

.section-title  { 
    font-size: 46px; 
    color: #fff; 
    font-weight: 700; 
    text-align: center; 
    margin-bottom: 50px;
} 

.row { 
    display: -ms-flexbox; 
    display: flex; 
    -ms-flex-wrap: wrap; 
    flex-wrap: wrap; 
    margin-right: -15px; 
    margin-left: -15px;
} 

.mt-3, .my-3 { 
    margin-top: 1rem!important;
} 

@media (min-width: 1200px){     
.mt-xl-5, .my-xl-5 { 
    margin-top: 3rem!important;
} 
}     

.col, .col-1, .col-10, .col-11, .col-12, .col-2, .col-3, .col-4, .col-5, .col-6, .col-7, .col-8, .col-9, .col-auto, .col-lg, .col-lg-1, .col-lg-10, .col-lg-11, .col-lg-12, .col-lg-2, .col-lg-3, .col-lg-4, .col-lg-5, .col-lg-6, .col-lg-7, .col-lg-8, .col-lg-9, .col-lg-auto, .col-md, .col-md-1, .col-md-10, .col-md-11, .col-md-12, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-auto, .col-sm, .col-sm-1, .col-sm-10, .col-sm-11, .col-sm-12, .col-sm-2, .col-sm-3, .col-sm-4, .col-sm-5, .col-sm-6, .col-sm-7, .col-sm-8, .col-sm-9, .col-sm-auto, .col-xl, .col-xl-1, .col-xl-10, .col-xl-11, .col-xl-12, .col-xl-2, .col-xl-3, .col-xl-4, .col-xl-5, .col-xl-6, .col-xl-7, .col-xl-8, .col-xl-9, .col-xl-auto { 
    position: relative; 
    width: 100%; 
    padding-right: 15px; 
    padding-left: 15px;
} 

.col-12 { 
    -ms-flex: 0 0 100%; 
    flex: 0 0 100%; 
    max-width: 100%; 
    flex-grow: 0; 
    flex-shrink: 0; 
    flex-basis: 100%;
} 

@media (min-width: 768px){     
.col-md-6 { 
    -ms-flex: 0 0 50%; 
    flex: 0 0 50%; 
    max-width: 50%; 
    flex-grow: 0; 
    flex-shrink: 0; 
    flex-basis: 50%;
} 
}     

@media (min-width: 1200px){     
.col-xl-3 { 
    -ms-flex: 0 0 25%; 
    flex: 0 0 25%; 
    max-width: 25%; 
    flex-grow: 0; 
    flex-shrink: 0; 
    flex-basis: 25%;
} 
}     

.mb-3, .my-3 { 
    margin-bottom: 1rem!important;
} 

@media (min-width: 1200px){     
.mt-xl-0, .my-xl-0 { 
    margin-top: 0!important;
} 
}     

@media (min-width: 1200px){     
.mb-xl-0, .my-xl-0 { 
    margin-bottom: 0!important;
} 
}     

.service-card-wrap { 
    padding-top: 60px;
} 

.card { 
    position: relative; 
    display: -ms-flexbox; 
    display: flex; 
    -ms-flex-direction: column; 
    flex-direction: column; 
    min-width: 0; 
    word-wrap: break-word; 
    background-color: #fff; 
    background-clip: border-box; 
    border: 1px solid rgba(0,0,0,.125); 
    border-radius: .25rem; 
    overflow-wrap: break-word; 
    border-top-width: 1px; 
    border-right-width: 1px; 
    border-bottom-width: 1px; 
    border-left-width: 1px; 
    border-top-style: solid; 
    border-right-style: solid; 
    border-bottom-style: solid; 
    border-left-style: solid; 
    border-top-color: rgba(0, 0, 0, 0.125); 
    border-right-color: rgba(0, 0, 0, 0.125); 
    border-bottom-color: rgba(0, 0, 0, 0.125); 
    border-left-color: rgba(0, 0, 0, 0.125); 
    border-image-source: initial; 
    border-image-slice: initial; 
    border-image-width: initial; 
    border-image-outset: initial; 
    border-image-repeat: initial; 
    border-top-left-radius: 0.25rem; 
    border-top-right-radius: 0.25rem; 
    border-bottom-right-radius: 0.25rem; 
    border-bottom-left-radius: 0.25rem;
} 

.service-card { 
    border: 3px solid transparent; 
    box-shadow: 0 0 6px 0 rgba(0,0,0,.16); 
    text-align: center; 
    transition: all ease .3s; 
    border-radius: 0; 
    height: 100%; 
    border-top-width: 3px; 
    border-right-width: 3px; 
    border-bottom-width: 3px; 
    border-left-width: 3px; 
    border-top-style: solid; 
    border-right-style: solid; 
    border-bottom-style: solid; 
    border-left-style: solid; 
    border-top-color: transparent; 
    border-right-color: transparent; 
    border-bottom-color: transparent; 
    border-left-color: transparent; 
    border-image-source: initial; 
    border-image-slice: initial; 
    border-image-width: initial; 
    border-image-outset: initial; 
    border-image-repeat: initial; 
    transition-duration: 0.3s; 
    transition-timing-function: ease; 
    transition-delay: 0s; 
    transition-property: all; 
    border-top-left-radius: 0px; 
    border-top-right-radius: 0px; 
    border-bottom-right-radius: 0px; 
    border-bottom-left-radius: 0px;
} 

.service-card , .service-card .card-icon , .service-card:hover , .service-card:hover .card-icon  { 
    border: none; 
    border-top-width: initial; 
    border-right-width: initial; 
    border-bottom-width: initial; 
    border-left-width: initial; 
    border-top-style: none; 
    border-right-style: none; 
    border-bottom-style: none; 
    border-left-style: none; 
    border-top-color: initial; 
    border-right-color: initial; 
    border-bottom-color: initial; 
    border-left-color: initial; 
    border-image-source: initial; 
    border-image-slice: initial; 
    border-image-width: initial; 
    border-image-outset: initial; 
    border-image-repeat: initial;
} 

.service-card .card-icon  { 
    border: 3px solid transparent; 
    height: 90px; 
    width: 90px; 
    border-radius: 100%; 
    padding: 18px; 
    background: #fff; 
    box-shadow: 0 0 6px 0 rgba(0,0,0,.14); 
    position: relative; 
    top: -45px; 
    left: 50%; 
    transform: translateX(-50%); 
    display: -webkit-flex; 
    display: -moz-flex; 
    display: -ms-flex; 
    display: -o-flex; 
    display: flex; 
    align-items: center; 
    justify-content: center; 
    transition: all ease .3s; 
    border-top-width: 3px; 
    border-right-width: 3px; 
    border-bottom-width: 3px; 
    border-left-width: 3px; 
    border-top-style: solid; 
    border-right-style: solid; 
    border-bottom-style: solid; 
    border-left-style: solid; 
    border-top-color: transparent; 
    border-right-color: transparent; 
    border-bottom-color: transparent; 
    border-left-color: transparent; 
    border-image-source: initial; 
    border-image-slice: initial; 
    border-image-width: initial; 
    border-image-outset: initial; 
    border-image-repeat: initial; 
    border-top-left-radius: 100%; 
    border-top-right-radius: 100%; 
    border-bottom-right-radius: 100%; 
    border-bottom-left-radius: 100%; 
    padding-top: 18px; 
    padding-right: 18px; 
    padding-bottom: 18px; 
    padding-left: 18px; 
    background-image: initial; 
    background-position-x: initial; 
    background-position-y: initial; 
    background-size: initial; 
    background-repeat-x: initial; 
    background-repeat-y: initial; 
    background-attachment: initial; 
    background-origin: initial; 
    background-clip: initial; 
    background-color: rgb(255, 255, 255); 
    transition-duration: 0.3s; 
    transition-timing-function: ease; 
    transition-delay: 0s; 
    transition-property: all;
} 

@media (max-width: 1599px){     
.service-card .card-icon  { 
    margin-bottom: -30px;
} 
}     

.card-body { 
    -ms-flex: 1 1 auto; 
    flex: 1 1 auto; 
    min-height: 1px; 
    padding: 1.25rem; 
    flex-grow: 1; 
    flex-shrink: 1; 
    flex-basis: auto; 
    padding-top: 1.25rem; 
    padding-right: 1.25rem; 
    padding-bottom: 1.25rem; 
    padding-left: 1.25rem;
} 

.service-card .card-body  { 
    padding: 30px 2px; 
    padding-top: 30px; 
    padding-right: 2px; 
    padding-bottom: 30px; 
    padding-left: 2px;
} 

.service-card .card-body  { 
    margin-top: -30px; 
    padding-bottom: 30px;
} 

img { 
    vertical-align: middle; 
    border-style: none; 
    border-top-style: none; 
    border-right-style: none; 
    border-bottom-style: none; 
    border-left-style: none;
} 

.img-fluid { 
    max-width: 100%; 
    height: auto;
} 

.h3, h3 { 
    font-size: 1.75rem;
} 

.card-title { 
    margin-bottom: .75rem;
} 

.service-card .card-title  { 
    font-size: 20px; 
    font-weight: 700; 
    text-align: center; 
    color: #000; 
    text-transform: uppercase;
} 

.service-card .card-title  { 
    font-size: 26px; 
    font-family: oswald; 
    color: #0C4DA1;
} 

@media (min-width: 1200px){     
.service-card .card-title  { 
    padding-left: 35px; 
    padding-right: 35px; 
    text-transform: capitalize;
} 
}     

p { 
    margin-top: 0; 
    margin-bottom: 1rem;
} 

p { 
    line-height: 30px;
} 

.text-373737 { 
    color: #373737;
} 

@media all{     
.container p  { 
    text-align: justify;
} 
}     

@media all{     
p  { 
    text-align: center!important;
} 
}     

.card-text:last-child { 
    margin-bottom: 0;
} 

.service-card .card-text  { 
    line-height: 28px; 
    font-size: 14px;
} 

.round-title { 
    text-transform: uppercase; 
    font-family: oswald; 
    font-size: 27px; 
    font-weight: 700; 
    text-align: center; 
    position: relative; 
    z-index: 1; 
    margin-top: 100px!important; 
    margin-bottom: 130px; 
    color: #131313;
} 

.round-title:before { 
    content: ''; 
    width: 140px; 
    height: 140px; 
    background: rgba(61,103,175,.1); 
    border-radius: 100%; 
    position: absolute; 
    left: 50%; 
    top: 50%; 
    transform: translate(-50%,-50%); 
    z-index: -1; 
    background-image: initial; 
    background-position-x: initial; 
    background-position-y: initial; 
    background-size: initial; 
    background-repeat-x: initial; 
    background-repeat-y: initial; 
    background-attachment: initial; 
    background-origin: initial; 
    background-clip: initial; 
    background-color: rgba(61, 103, 175, 0.1); 
    border-top-left-radius: 100%; 
    border-top-right-radius: 100%; 
    border-bottom-right-radius: 100%; 
    border-bottom-left-radius: 100%;
} 

.round-title:after { 
    content: ''; 
    background: #85dc65; 
    width: 68px; 
    height: 3px; 
    position: absolute; 
    bottom: -13px; 
    left: 50%; 
    transform: translateX(-50%); 
    background-image: initial; 
    background-position-x: initial; 
    background-position-y: initial; 
    background-size: initial; 
    background-repeat-x: initial; 
    background-repeat-y: initial; 
    background-attachment: initial; 
    background-origin: initial; 
    background-clip: initial; 
    background-color: #ED242F;
} 

.swiper-container { 
    margin-left: auto; 
    margin-right: auto; 
    position: relative; 
    overflow: hidden; 
    list-style: none; 
    padding: 0; 
    z-index: 1; 
    overflow-x: hidden; 
    overflow-y: hidden; 
    list-style-position: initial; 
    list-style-image: initial; 
    list-style-type: none; 
    padding-top: 0px; 
    padding-right: 0px; 
    padding-bottom: 0px; 
    padding-left: 0px;
} 

.testimonial-slider { 
    max-width: 95%; 
    margin: 0 auto; 
    margin-top: 0px; 
    margin-right: auto; 
    margin-bottom: 0px; 
    margin-left: auto;
} 

@media all{     
.swiper-container { 
    margin-left: auto; 
    margin-right: auto; 
    position: relative; 
    overflow: hidden; 
    z-index: 1; 
    overflow-x: hidden; 
    overflow-y: hidden;
} 
}     

.swiper-button-next, .swiper-button-prev { 
    position: absolute; 
    top: 50%; 
    width: calc(var(--swiper-navigation-size)/ 44 * 27); 
    height: var(--swiper-navigation-size); 
    margin-top: calc(-1 * var(--swiper-navigation-size)/ 2); 
    z-index: 10; 
    cursor: pointer; 
    display: flex; 
    align-items: center; 
    justify-content: center; 
    color: var(--swiper-navigation-color,var(--swiper-theme-color));
} 

.swiper-button-next, .swiper-button-prev  { 
    right: 10px; 
    left: auto;
} 

@media all{     
.swiper-button-next, .swiper-button-prev { 
    position: absolute; 
    top: 50%; 
    width: 27px; 
    height: 44px; 
    margin-top: -22px; 
    z-index: 10; 
    cursor: pointer; 
    -webkit-background-size: 27px 44px; 
    background-size: 27px 44px; 
    background: no-repeat 50%; 
    background-image: initial; 
    background-position-x: 50%; 
    background-position-y: center; 
    background-repeat-x: no-repeat; 
    background-repeat-y: no-repeat; 
    background-attachment: initial; 
    background-origin: initial; 
    background-clip: initial; 
    background-color: initial;
} 
}     

@media all{     
.swiper-button-next, .swiper-button-prev  { 
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 27 44'%3E%3Cpath d='M27 22L5 44l-2.1-2.1L22.8 22 2.9 2.1 5 0l22 22z' fill='%23007aff'/%3E%3C/svg%3E"); 
    right: 10px; 
    left: auto;
} 
}     

.swiper-button-next:after, .swiper-button-prev:after { 
    font-family: swiper-icons; 
    font-size: var(--swiper-navigation-size); 
    text-transform: none!important; 
    letter-spacing: 0; 
    text-transform: none; 
    font-variant: initial; 
    font-variant-ligatures: initial; 
    font-variant-caps: initial; 
    font-variant-numeric: initial; 
    font-variant-east-asian: initial;
} 

.swiper-button-next:after, .swiper-button-prev:after  { 
    content: 'next';
} 

.swiper-button-next:after, .swiper-button-prev:after { 
    color: #0C4DA1;
} 

.swiper-button-prev, .swiper-button-next  { 
    left: 10px; 
    right: auto;
} 

@media all{     
.swiper-button-prev, .swiper-button-next  { 
    background-image: url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 27 44'%3E%3Cpath d='M0 22L22 0l2.1 2.1L4.2 22l19.9 19.9L22 44 0 22z' fill='%23007aff'/%3E%3C/svg%3E"); 
    left: 10px; 
    right: auto;
} 
}     

.swiper-button-prev:after, .swiper-button-next:after  { 
    content: 'prev';
} 

.swiper-wrapper { 
    position: relative; 
    width: 100%; 
    height: 100%; 
    z-index: 1; 
    display: flex; 
    transition-property: transform; 
    box-sizing: content-box;
} 

.swiper-slide , .swiper-wrapper { 
    transform: translate3d(0px,0,0);
} 

@media all{     
.swiper-wrapper { 
    position: relative; 
    width: 100%; 
    height: 100%; 
    z-index: 1; 
    display: -webkit-box; 
    display: -ms-flexbox; 
    display: flex; 
    -webkit-transition-property: -webkit-transform; 
    transition-property: -webkit-transform; 
    -o-transition-property: transform; 
    transition-property: transform; 
    transition-property: transform,-webkit-transform; 
    -webkit-box-sizing: content-box; 
    box-sizing: content-box;
} 
}     

@media all{     
.swiper-slide , .swiper-wrapper { 
    -webkit-transform: translateZ(0); 
    transform: translateZ(0);
} 
}     

.swiper-pagination { 
    position: absolute; 
    text-align: center; 
    transition: .3s opacity; 
    transform: translate3d(0,0,0); 
    z-index: 10; 
    transition-duration: 0.3s; 
    transition-timing-function: ease; 
    transition-delay: 0s; 
    transition-property: opacity;
} 

@media all{     
.swiper-pagination { 
    position: absolute; 
    text-align: center; 
    -webkit-transition: .3s; 
    -o-transition: .3s; 
    transition: .3s; 
    -webkit-transform: translateZ(0); 
    transform: translateZ(0); 
    z-index: 10; 
    transition-duration: 0.3s; 
    transition-timing-function: ease; 
    transition-delay: 0s; 
    transition-property: all;
} 
}     

@media all{     
.swiper-pagination-bullets { 
    color: #fff; 
    cursor: default;
} 
}     

.swiper-container-horizontal > .swiper-pagination-bullets , .swiper-pagination-custom, .swiper-pagination-fraction { 
    bottom: 10px; 
    left: 0; 
    width: 100%;
} 

@media all{     
.swiper-container-horizontal > .swiper-pagination-bullets , .swiper-pagination-custom, .swiper-pagination-fraction { 
    bottom: 5px; 
    left: 0; 
    width: 100%;
} 
}     

span { 
    font-size: larger; 
    align-content: center;
} 

.swiper-container .swiper-notification  { 
    position: absolute; 
    left: 0; 
    top: 0; 
    pointer-events: none; 
    opacity: 0; 
    z-index: -1000;
} 

@media all{     
.swiper-container .swiper-notification  { 
    position: absolute; 
    left: 0; 
    top: 0; 
    pointer-events: none; 
    opacity: 0; 
    z-index: -1000;
} 
}     

.swiper-slide { 
    flex-shrink: 0; 
    width: 100%; 
    height: 100%; 
    position: relative; 
    transition-property: transform;
} 

@media all{     
.swiper-slide { 
    -ms-flex-negative: 0; 
    flex-shrink: 0; 
    width: 100%; 
    height: 100%; 
    position: relative;
} 
}     

@media all{     
.swiper-slide { 
    border-style: solid; 
    border-width: 0; 
    -webkit-transition-duration: .5s; 
    -o-transition-duration: .5s; 
    transition-duration: .5s; 
    -webkit-transition-property: border,background,-webkit-transform; 
    transition-property: border,background,-webkit-transform; 
    -o-transition-property: border,background,transform; 
    transition-property: border,background,transform; 
    transition-property: border,background,transform,-webkit-transform; 
    overflow: hidden; 
    border-top-style: solid; 
    border-right-style: solid; 
    border-bottom-style: solid; 
    border-left-style: solid; 
    border-top-width: 0px; 
    border-right-width: 0px; 
    border-bottom-width: 0px; 
    border-left-width: 0px; 
    overflow-x: hidden; 
    overflow-y: hidden;
} 
}     

.swiper-slide  { 
    padding: 36px 0; 
    padding-top: 36px; 
    padding-right: 0px; 
    padding-bottom: 36px; 
    padding-left: 0px;
} 

.swiper-pagination-bullet { 
    width: 8px; 
    height: 8px; 
    display: inline-block; 
    border-radius: 100%; 
    background: #000; 
    opacity: .2; 
    border-top-left-radius: 100%; 
    border-top-right-radius: 100%; 
    border-bottom-right-radius: 100%; 
    border-bottom-left-radius: 100%; 
    background-image: initial; 
    background-position-x: initial; 
    background-position-y: initial; 
    background-size: initial; 
    background-repeat-x: initial; 
    background-repeat-y: initial; 
    background-attachment: initial; 
    background-origin: initial; 
    background-clip: initial; 
    background-color: rgb(0, 0, 0);
} 

@media all{     
.swiper-pagination-bullet { 
    width: 6px; 
    height: 6px; 
    display: inline-block; 
    -webkit-border-radius: 50%; 
    border-radius: 50%; 
    background: #000; 
    opacity: .2; 
    border-top-left-radius: 50%; 
    border-top-right-radius: 50%; 
    border-bottom-right-radius: 50%; 
    border-bottom-left-radius: 50%; 
    background-image: initial; 
    background-position-x: initial; 
    background-position-y: initial; 
    background-size: initial; 
    background-repeat-x: initial; 
    background-repeat-y: initial; 
    background-attachment: initial; 
    background-origin: initial; 
    background-clip: initial; 
    background-color: rgb(0, 0, 0);
} 
}     

.swiper-pagination-clickable .swiper-pagination-bullet  { 
    cursor: pointer;
} 

@media all{     
.swiper-pagination-clickable .swiper-pagination-bullet  { 
    cursor: pointer;
} 
}     

.swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet  { 
    margin: 0 4px; 
    margin-top: 0px; 
    margin-right: 4px; 
    margin-bottom: 0px; 
    margin-left: 4px;
} 

@media all{     
.swiper-container-horizontal > .swiper-pagination-bullets .swiper-pagination-bullet  { 
    margin: 0 6px; 
    margin-top: 0px; 
    margin-right: 6px; 
    margin-bottom: 0px; 
    margin-left: 6px;
} 
}     

.swiper-pagination-bullet-active { 
    opacity: 1; 
    background: var(--swiper-pagination-color,var(--swiper-theme-color));
} 

@media all{     
.swiper-pagination-bullet-active { 
    opacity: 1;
} 
}     

.swiper-pagination-bullet-active , .swiper-pagination-bullet.swiper-pagination-bullet-active { 
    background-color: #0C4DA1;
} 

.testimonial-card { 
    padding: 10px; 
    padding-top: 10px; 
    padding-right: 10px; 
    padding-bottom: 10px; 
    padding-left: 10px;
} 

.testimonial-bubble { 
    position: relative; 
    background: #fff; 
    border-radius: .4em; 
    min-height: 200px; 
    box-shadow: 0 0 26px 0 rgba(0,0,0,.16); 
    font-size: 16px; 
    color: #757575; 
    padding: 25px; 
    letter-spacing: normal; 
    border-radius: 20px; 
    margin-bottom: 35px; 
    background-image: initial; 
    background-position-x: initial; 
    background-position-y: initial; 
    background-size: initial; 
    background-repeat-x: initial; 
    background-repeat-y: initial; 
    background-attachment: initial; 
    background-origin: initial; 
    background-clip: initial; 
    background-color: rgb(255, 255, 255); 
    padding-top: 25px; 
    padding-right: 25px; 
    padding-bottom: 25px; 
    padding-left: 25px; 
    border-top-left-radius: 20px; 
    border-top-right-radius: 20px; 
    border-bottom-right-radius: 20px; 
    border-bottom-left-radius: 20px;
} 

.testimonial-bubble:before { 
    content: ''; 
    position: absolute; 
    bottom: 0; 
    left: 60px; 
    width: 0; 
    height: 0; 
    border: 35px solid transparent; 
    border-top-color: #fff; 
    border-bottom: 0; 
    border-left: 0; 
    margin-left: -13px; 
    z-index: 1; 
    margin-bottom: -35px; 
    border-right: 25px solid transparent; 
    border-top-width: 35px; 
    border-top-style: solid; 
    border-image-source: initial; 
    border-image-slice: initial; 
    border-image-width: initial; 
    border-image-outset: initial; 
    border-image-repeat: initial; 
    border-bottom-width: 0px; 
    border-bottom-style: initial; 
    border-bottom-color: initial; 
    border-left-width: 0px; 
    border-left-style: initial; 
    border-left-color: initial; 
    border-right-width: 25px; 
    border-right-style: solid; 
    border-right-color: transparent;
} 

.testimonial-bubble:after { 
    content: ''; 
    position: absolute; 
    bottom: 0; 
    left: 60px; 
    width: 0; 
    height: 0; 
    border: 35px solid transparent; 
    border-right: 25px solid transparent; 
    border-top-color: rgba(0,0,0,.05); 
    border-bottom: 0; 
    border-left: 0; 
    margin-left: -13px; 
    margin-bottom: -35px; 
    filter: blur(10px); 
    z-index: 1; 
    border-top-width: 35px; 
    border-top-style: solid; 
    border-image-source: initial; 
    border-image-slice: initial; 
    border-image-width: initial; 
    border-image-outset: initial; 
    border-image-repeat: initial; 
    border-right-width: 25px; 
    border-right-style: solid; 
    border-right-color: transparent; 
    border-bottom-width: 0px; 
    border-bottom-style: initial; 
    border-bottom-color: initial; 
    border-left-width: 0px; 
    border-left-style: initial; 
    border-left-color: initial;
} 

.media { 
    display: -ms-flexbox; 
    display: flex; 
    -ms-flex-align: start; 
    align-items: flex-start;
} 

.align-items-center { 
    -ms-flex-align: center!important; 
    align-items: center!important;
} 

@media all{     
.reviewdesc { 
    min-height: 140px;
} 
}     

@media all{     
p  { 
    text-align: justify;
} 
}     

.d-flex { 
    display: -ms-flexbox!important; 
    display: flex!important;
} 

.justify-content-between { 
    -ms-flex-pack: justify!important; 
    justify-content: space-between!important;
} 

.mr-4, .mx-4 { 
    margin-right: 1.5rem!important;
} 

.testimonial-client img  { 
    min-width: 70px; 
    max-width: 70px; 
    border-radius: 50%; 
    border-top-left-radius: 50%; 
    border-top-right-radius: 50%; 
    border-bottom-right-radius: 50%; 
    border-bottom-left-radius: 50%;
} 

.media-body { 
    -ms-flex: 1; 
    flex: 1; 
    flex-grow: 1; 
    flex-shrink: 1; 
    flex-basis: 0%;
} 

.mt-0, .my-0 { 
    margin-top: 0!important;
} 

.text-uppercase { 
    text-transform: uppercase!important;
} 

.font-weight-bold { 
    font-weight: 700!important;
} 

.font-oswald { 
    font-family: oswald;
} 

.testimonial-client h3  { 
    font-size: 18px;
} 

.text-757575 { 
    color: #757575;
} 

.testimonial-logo { 
    max-width: 50px;
} 

.testimonial-rating { 
    color: #fec000;
} 

a { 
    color: #007bff; 
    text-decoration: none; 
    background-color: transparent; 
    text-decoration-line: none; 
    text-decoration-thickness: initial; 
    text-decoration-style: initial; 
    text-decoration-color: initial;
} 

@media all{     
.swiper-slide a  { 
    display: inline;
} 
}     

.fa, .fas, .far, .fal, .fad, .fab { 
    -moz-osx-font-smoothing: grayscale; 
    -webkit-font-smoothing: antialiased; 
    display: inline-block; 
    font-style: normal; 
    font-variant: normal; 
    text-rendering: auto; 
    line-height: 1; 
    font-variant-ligatures: normal; 
    font-variant-caps: normal; 
    font-variant-numeric: normal; 
    font-variant-east-asian: normal;
} 

.fa, .fas { 
    font-family: 'font awesome 5 free'; 
    font-weight: 900;
} 

@media all{     
.fa, .fab, .fad, .fal, .far, .fas { 
    -moz-osx-font-smoothing: grayscale; 
    -webkit-font-smoothing: antialiased; 
    display: inline-block; 
    font-style: normal; 
    font-variant: normal; 
    text-rendering: auto; 
    line-height: 1; 
    font-variant-ligatures: normal; 
    font-variant-caps: normal; 
    font-variant-numeric: normal; 
    font-variant-east-asian: normal;
} 
}     

@media all{     
.fa, .fas { 
    font-family: "Font Awesome 5 Free"; 
    font-weight: 900;
} 
}     

@media all{     
.fa-star:before { 
    content: "\f005";
} 
}     

.fa-star:before { 
    content: "\f005";
} 

button { 
    border-radius: 0; 
    border-top-left-radius: 0px; 
    border-top-right-radius: 0px; 
    border-bottom-right-radius: 0px; 
    border-bottom-left-radius: 0px;
} 

button, input, optgroup, select, textarea { 
    margin: 0; 
    font-family: inherit; 
    font-size: inherit; 
    line-height: inherit; 
    margin-top: 0px; 
    margin-right: 0px; 
    margin-bottom: 0px; 
    margin-left: 0px;
} 

button, input { 
    overflow: visible; 
    overflow-x: visible; 
    overflow-y: visible;
} 

button, select { 
    text-transform: none;
} 

[type="button"], [type="reset"], [type="submit"], button { 
    -webkit-appearance: button; 
    appearance: button;
} 

.btn { 
    display: inline-block; 
    font-weight: 400; 
    color: #212529; 
    text-align: center; 
    vertical-align: middle; 
    cursor: pointer; 
    -webkit-user-select: none; 
    -moz-user-select: none; 
    -ms-user-select: none; 
    user-select: none; 
    background-color: transparent; 
    border: 1px solid transparent; 
    padding: .375rem .75rem; 
    font-size: 1rem; 
    line-height: 1.5; 
    border-radius: .25rem; 
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out; 
    border-top-width: 1px; 
    border-right-width: 1px; 
    border-bottom-width: 1px; 
    border-left-width: 1px; 
    border-top-style: solid; 
    border-right-style: solid; 
    border-bottom-style: solid; 
    border-left-style: solid; 
    border-top-color: transparent; 
    border-right-color: transparent; 
    border-bottom-color: transparent; 
    border-left-color: transparent; 
    border-image-source: initial; 
    border-image-slice: initial; 
    border-image-width: initial; 
    border-image-outset: initial; 
    border-image-repeat: initial; 
    padding-top: 0.375rem; 
    padding-right: 0.75rem; 
    padding-bottom: 0.375rem; 
    padding-left: 0.75rem; 
    border-top-left-radius: 0.25rem; 
    border-top-right-radius: 0.25rem; 
    border-bottom-right-radius: 0.25rem; 
    border-bottom-left-radius: 0.25rem; 
    transition-duration: 0.15s, 0.15s, 0.15s, 0.15s; 
    transition-timing-function: ease-in-out, ease-in-out, ease-in-out, ease-in-out; 
    transition-delay: 0s, 0s, 0s, 0s; 
    transition-property: color, background-color, border-color, box-shadow;
} 

.btn-link { 
    font-weight: 400; 
    color: #007bff; 
    text-decoration: none; 
    text-decoration-line: none; 
    text-decoration-thickness: initial; 
    text-decoration-style: initial; 
    text-decoration-color: initial;
} 

.btn , .btn-sm { 
    padding: .25rem .5rem; 
    font-size: .875rem; 
    line-height: 1.5; 
    border-radius: .2rem; 
    padding-top: 0.25rem; 
    padding-right: 0.5rem; 
    padding-bottom: 0.25rem; 
    padding-left: 0.5rem; 
    border-top-left-radius: 0.2rem; 
    border-top-right-radius: 0.2rem; 
    border-bottom-right-radius: 0.2rem; 
    border-bottom-left-radius: 0.2rem;
} 

.btn-link { 
    color: #000;
} 

[type="button"]:not(:disabled), [type="reset"]:not(:disabled), [type="submit"]:not(:disabled), button:not(:disabled) { 
    cursor: pointer;
} 

.ml-1, .mx-1 { 
    margin-left: .25rem!important;
} 

.view-more .fas  { 
    display: inline-flex; 
    align-items: center; 
    justify-content: center; 
    width: 27px; 
    height: 27px; 
    font-size: 12px; 
    background-color: #0C4DA1; 
    border-radius: 100%; 
    color: #fff; 
    border-top-left-radius: 100%; 
    border-top-right-radius: 100%; 
    border-bottom-right-radius: 100%; 
    border-bottom-left-radius: 100%;
} 

@media all{     
.fa-chevron-right:before { 
    content: "\f054";
} 
}     

.fa-chevron-right:before { 
    content: "\f054";
} 

.cta-section { 
    padding: 53px 0; 
    position: relative; 
    padding-top: 53px; 
    padding-right: 0px; 
    padding-bottom: 53px; 
    padding-left: 0px;
} 

.cta-white-blue { 
    background: #7ecd61; 
    background: -moz-linear-gradient(left,rgba(126,205,97,1) 0%,rgba(133,220,101,1) 100%); 
    background: -webkit-gradient(left top,right top,color-stop(0%,rgba(126,205,97,1)),color-stop(100%,rgba(133,220,101,1))); 
    background: -webkit-linear-gradient(left,rgba(126,205,97,1) 0%,rgba(133,220,101,1) 100%); 
    background: -o-linear-gradient(left,rgba(126,205,97,1) 0%,rgba(133,220,101,1) 100%); 
    background: -ms-linear-gradient(left,rgba(126,205,97,1) 0%,rgba(133,220,101,1) 100%); 
    background: linear-gradient(to right,#ED242F 0%, #ED242F 100%); 
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#7ecd61',endColorstr='#85dc65',GradientType=1 ); 
    background-position: 25vw; 
    background-image: linear-gradient(to right, rgb(237,36,47) 0%, rgb(237,36,47) 100%); 
    background-size: initial; 
    background-repeat-x: initial; 
    background-repeat-y: initial; 
    background-attachment: initial; 
    background-origin: initial; 
    background-clip: initial; 
    background-color: initial; 
    background-position-x: 25vw; 
    background-position-y: center;
} 

@media (min-width: 992px){     
.cta-white-blue:before { 
    content: ''; 
    background: #fff; 
    width: calc(50vw - 100px); 
    height: 100%; 
    box-shadow: 0 0 16px 0 rgba(0,0,0,.2); 
    display: block; 
    position: absolute; 
    left: 0; 
    top: 0; 
    z-index: 0; 
    border-radius: 0 6px 6px 0; 
    background-image: initial; 
    background-position-x: initial; 
    background-position-y: initial; 
    background-size: initial; 
    background-repeat-x: initial; 
    background-repeat-y: initial; 
    background-attachment: initial; 
    background-origin: initial; 
    background-clip: initial; 
    background-color: rgb(255, 255, 255); 
    border-top-left-radius: 0px; 
    border-top-right-radius: 6px; 
    border-bottom-right-radius: 6px; 
    border-bottom-left-radius: 0px;
} 
}     

@media (min-width: 1200px){     
.cta-white-blue:before { 
    content: ''; 
    background: #0C4DA1; 
    width: calc(50vw - 200px); 
    height: 100%; 
    box-shadow: 0 0 16px 0 rgba(0,0,0,.2); 
    display: block; 
    position: absolute; 
    left: 0; 
    top: 0; 
    z-index: 0; 
    border-radius: 0 6px 6px 0; 
    background-image: initial; 
    background-position-x: initial; 
    background-position-y: initial; 
    background-size: initial; 
    background-repeat-x: initial; 
    background-repeat-y: initial; 
    background-attachment: initial; 
    background-origin: initial; 
    background-clip: initial; 
    background-color: #0C4DA1; 
    border-top-left-radius: 0px; 
    border-top-right-radius: 6px; 
    border-bottom-right-radius: 6px; 
    border-bottom-left-radius: 0px;
} 
}     

@media (min-width: 992px){     
.cta-white-blue:after { 
    content: ''; 
    width: 100px; 
    height: 100%; 
    position: absolute; 
    top: 0; 
    left: calc(50vw - 103px); 
    background-repeat: no-repeat; 
    background-image:{{asset('assets/front/img/arrow.png')}}; 
    background-size: 100px 100%; 
    z-index: 1; 
    background-repeat-x: no-repeat; 
    background-repeat-y: no-repeat;
} 
}     

@media (min-width: 1200px){     
.cta-white-blue:after { 
    content: ''; 
    width: 200px; 
    height: 100%; 
    position: absolute; 
    top: 0; 
    left: calc(50vw - 203px); 
    background-repeat: no-repeat; 
    background-image: url("{{asset('assets/front/img/arrow.png')}}");
    background-size: 200px 100%; 
    z-index: 1; 
    background-repeat-x: no-repeat; 
    background-repeat-y: no-repeat;
} 
}     

.cta-white-blue .container  { 
    position: relative; 
    z-index: 2;
} 

@media (min-width: 992px){     
.col-lg-5 { 
    -ms-flex: 0 0 41.666667%; 
    flex: 0 0 41.666667%; 
    max-width: 41.666667%; 
    flex-grow: 0; 
    flex-shrink: 0; 
    flex-basis: 41.6667%;
} 
}     

@media (min-width: 1200px){     
.col-xl-4 { 
    -ms-flex: 0 0 33.333333%; 
    flex: 0 0 33.333333%; 
    max-width: 33.333333%; 
    flex-grow: 0; 
    flex-shrink: 0; 
    flex-basis: 33.3333%;
} 
}     

@media (min-width: 992px){     
.pt-lg-5, .py-lg-5 { 
    padding-top: 3rem!important;
} 
}     

@media (min-width: 992px){     
.pb-lg-5, .py-lg-5 { 
    padding-bottom: 3rem!important;
} 
}     

@media (min-width: 1200px){     
.pt-xl-2, .py-xl-2 { 
    padding-top: .5rem!important;
} 
}     

@media (min-width: 1200px){     
.pb-xl-2, .py-xl-2 { 
    padding-bottom: .5rem!important;
} 
}     

.text-white { 
    color: #fff!important;
} 

@media (min-width: 992px){     
.col-lg-6 { 
    -ms-flex: 0 0 50%; 
    flex: 0 0 50%; 
    max-width: 50%; 
    flex-grow: 0; 
    flex-shrink: 0; 
    flex-basis: 50%;
} 
}     

@media (min-width: 992px){     
.offset-lg-1 { 
    margin-left: 8.333333%;
} 
}     

@media (min-width: 1200px){     
.col-xl-6 { 
    -ms-flex: 0 0 50%; 
    flex: 0 0 50%; 
    max-width: 50%; 
    flex-grow: 0; 
    flex-shrink: 0; 
    flex-basis: 50%;
} 
}     

@media (min-width: 1200px){     
.offset-xl-2 { 
    margin-left: 16.666667%;
} 
}     

.text-black { 
    color: #000;
} 

.cta-form { 
    padding-top: 65px; 
    padding-bottom: 65px;
} 

.text-center { 
    text-align: center!important;
} 

@media (min-width: 992px){     
.text-lg-left { 
    text-align: left!important;
} 
}     

.cta-title { 
    font-size: 42px;
} 

@media (min-width: 992px){     
.cta-title { 
    font-size: 40px;
} 
}     

@media (min-width: 1200px){     
.cta-title { 
    font-size: 54px;
} 
}     

@media (min-width: 992px){     
.mb-lg-0, .my-lg-0 { 
    margin-bottom: 0!important;
} 
}     

.mb-0, .my-0 { 
    margin-bottom: 0!important;
} 

.col-3 { 
    -ms-flex: 0 0 25%; 
    flex: 0 0 25%; 
    max-width: 25%; 
    flex-grow: 0; 
    flex-shrink: 0; 
    flex-basis: 25%;
} 

.col-9 { 
    -ms-flex: 0 0 75%; 
    flex: 0 0 75%; 
    max-width: 75%; 
    flex-grow: 0; 
    flex-shrink: 0; 
    flex-basis: 75%;
} 

@media all{     
.wpcf7 .screen-reader-response  { 
    position: absolute; 
    overflow: hidden; 
    clip: rect(1px,1px,1px,1px); 
    height: 1px; 
    width: 1px; 
    margin: 0; 
    padding: 0; 
    border: 0; 
    overflow-x: hidden; 
    overflow-y: hidden; 
    margin-top: 0px; 
    margin-right: 0px; 
    margin-bottom: 0px; 
    margin-left: 0px; 
    padding-top: 0px; 
    padding-right: 0px; 
    padding-bottom: 0px; 
    padding-left: 0px; 
    border-top-width: 0px; 
    border-right-width: 0px; 
    border-bottom-width: 0px; 
    border-left-width: 0px; 
    border-top-style: initial; 
    border-right-style: initial; 
    border-bottom-style: initial; 
    border-left-style: initial; 
    border-top-color: initial; 
    border-right-color: initial; 
    border-bottom-color: initial; 
    border-left-color: initial; 
    border-image-source: initial; 
    border-image-slice: initial; 
    border-image-width: initial; 
    border-image-outset: initial; 
    border-image-repeat: initial;
} 
}     

.cta-stats { 
    width: 100px; 
    height: 100px; 
    background-image: url(http://logistic.demolinks.tech/assets/front/img/stats-3.svg); 
    background-size: 100% 100%; 
    background-position: top center; 
    background-repeat: no-repeat; 
    font-size: 35px; 
    font-weight: 700; 
    color: #fff; 
    display: -webkit-flex; 
    display: -moz-flex; 
    display: -ms-flex; 
    display: -o-flex; 
    display: flex; 
    align-items: center; 
    justify-content: center; 
    margin-left: auto; 
    background-position-x: center; 
    background-position-y: top; 
    background-repeat-x: no-repeat; 
    background-repeat-y: no-repeat;
} 

@media (min-width: 992px){     
.cta-stats { 
    width: 90px; 
    height: 90px; 
    font-size: 16px;
} 
}     

.cta-block:nth-of-type(1) .cta-stats  { 
    background-image: url({{asset('assets/front/img/stats-4.svg')}});
} 

@media (min-width: 992px){     
.ml-lg-2, .mx-lg-2 { 
    margin-left: .5rem!important;
} 
}     

.cta-stats-sm { 
    font-size: 20px;
} 

@media (min-width: 992px){     
.cta-stats-sm { 
    font-size: 14px;
} 
}     

.cta-block:nth-of-type(2) .cta-stats  { 
    background-image: url({{asset('assets/front/img/stats-2.svg')}});
} 

.cta-block:nth-of-type(3) .cta-stats  { 
    text-shadow: 0 0 5px rgba(0,0,0,.2); 
    background-image: url({{asset('assets/front/img/stats-3.svg')}});
} 

dl, ol, ul { 
    margin-top: 0; 
    margin-bottom: 1rem;
} 

.form-group { 
    margin-bottom: 1rem;
} 

.underline-input-form .form-group  { 
    margin-bottom: 1rem;
} 

@media all{     
.wpcf7 form .wpcf7-response-output  { 
    margin: 2em .5em 1em; 
    padding: .2em 1em; 
    border: 2px solid #00a0d2; 
    margin-top: 2em; 
    margin-right: 0.5em; 
    margin-bottom: 1em; 
    margin-left: 0.5em; 
    padding-top: 0.2em; 
    padding-right: 1em; 
    padding-bottom: 0.2em; 
    padding-left: 1em; 
    border-top-width: 2px; 
    border-right-width: 2px; 
    border-bottom-width: 2px; 
    border-left-width: 2px; 
    border-top-style: solid; 
    border-right-style: solid; 
    border-bottom-style: solid; 
    border-left-style: solid; 
    border-top-color: rgb(0, 160, 210); 
    border-right-color: rgb(0, 160, 210); 
    border-bottom-color: rgb(0, 160, 210); 
    border-left-color: rgb(0, 160, 210); 
    border-image-source: initial; 
    border-image-slice: initial; 
    border-image-width: initial; 
    border-image-outset: initial; 
    border-image-repeat: initial;
} 
}     

@media all{     
.wpcf7 form.init .wpcf7-response-output , .wpcf7-response-output , .wpcf7-response-output  { 
    display: none;
} 
}     

.h4, h4 { 
    font-size: 1.5rem;
} 

.cta-block-title { 
    font-size: 16px; 
    font-family: oswald; 
    font-weight: 700; 
    text-transform: uppercase;
} 

.text-left { 
    text-align: left!important;
} 

.cta-block p  { 
    font-size: 16px; 
    margin-bottom: 0;
} 

.pt-5, .py-5 { 
    padding-top: 3rem!important;
} 

@media all{     
.wpcf7-form-control-wrap { 
    position: relative;
} 
}     

.justify-content-center { 
    -ms-flex-pack: center!important; 
    justify-content: center!important;
} 

@media (min-width: 992px){     
.justify-content-lg-end { 
    -ms-flex-pack: end!important; 
    justify-content: flex-end!important;
} 
}     

.wpcf7-form-control-wrap input:before  { 
    content: "Moving Date"; 
    margin-right: 10px;
} 

label { 
    display: inline-block; 
    margin-bottom: .5rem;
} 

.sr-only { 
    position: absolute; 
    width: 1px; 
    height: 1px; 
    padding: 0; 
    margin: -1px; 
    overflow: hidden; 
    clip: rect(0,0,0,0); 
    white-space: nowrap; 
    border: 0; 
    padding-top: 0px; 
    padding-right: 0px; 
    padding-bottom: 0px; 
    padding-left: 0px; 
    margin-top: -1px; 
    margin-right: -1px; 
    margin-bottom: -1px; 
    margin-left: -1px; 
    overflow-x: hidden; 
    overflow-y: hidden; 
    border-top-width: 0px; 
    border-right-width: 0px; 
    border-bottom-width: 0px; 
    border-left-width: 0px; 
    border-top-style: initial; 
    border-right-style: initial; 
    border-bottom-style: initial; 
    border-left-style: initial; 
    border-top-color: initial; 
    border-right-color: initial; 
    border-bottom-color: initial; 
    border-left-color: initial; 
    border-image-source: initial; 
    border-image-slice: initial; 
    border-image-width: initial; 
    border-image-outset: initial; 
    border-image-repeat: initial;
} 

.sr-only { 
    border: 0; 
    clip: rect(0,0,0,0); 
    height: 1px; 
    margin: -1px; 
    overflow: hidden; 
    padding: 0; 
    position: absolute; 
    width: 1px; 
    border-top-width: 0px; 
    border-right-width: 0px; 
    border-bottom-width: 0px; 
    border-left-width: 0px; 
    border-top-style: initial; 
    border-right-style: initial; 
    border-bottom-style: initial; 
    border-left-style: initial; 
    border-top-color: initial; 
    border-right-color: initial; 
    border-bottom-color: initial; 
    border-left-color: initial; 
    border-image-source: initial; 
    border-image-slice: initial; 
    border-image-width: initial; 
    border-image-outset: initial; 
    border-image-repeat: initial; 
    margin-top: -1px; 
    margin-right: -1px; 
    margin-bottom: -1px; 
    margin-left: -1px; 
    overflow-x: hidden; 
    overflow-y: hidden; 
    padding-top: 0px; 
    padding-right: 0px; 
    padding-bottom: 0px; 
    padding-left: 0px;
} 

@media all{     
.sr-only { 
    border: 0; 
    clip: rect(0,0,0,0); 
    height: 1px; 
    margin: -1px; 
    overflow: hidden; 
    padding: 0; 
    position: absolute; 
    width: 1px; 
    border-top-width: 0px; 
    border-right-width: 0px; 
    border-bottom-width: 0px; 
    border-left-width: 0px; 
    border-top-style: initial; 
    border-right-style: initial; 
    border-bottom-style: initial; 
    border-left-style: initial; 
    border-top-color: initial; 
    border-right-color: initial; 
    border-bottom-color: initial; 
    border-left-color: initial; 
    border-image-source: initial; 
    border-image-slice: initial; 
    border-image-width: initial; 
    border-image-outset: initial; 
    border-image-repeat: initial; 
    margin-top: -1px; 
    margin-right: -1px; 
    margin-bottom: -1px; 
    margin-left: -1px; 
    overflow-x: hidden; 
    overflow-y: hidden; 
    padding-top: 0px; 
    padding-right: 0px; 
    padding-bottom: 0px; 
    padding-left: 0px;
} 
}     

.btn , .btn-lg { 
    padding: .5rem 1rem; 
    font-size: 1.25rem; 
    line-height: 1.5; 
    border-radius: .3rem; 
    padding-top: 0.5rem; 
    padding-right: 1rem; 
    padding-bottom: 0.5rem; 
    padding-left: 1rem; 
    border-top-left-radius: 0.3rem; 
    border-top-right-radius: 0.3rem; 
    border-bottom-right-radius: 0.3rem; 
    border-bottom-left-radius: 0.3rem;
} 

.btn-simple-blue { 
    background-color: #0C4DA1; 
    border-radius: 0; 
    font-size: 14px; 
    padding: 6px 13px; 
    color: #fff; 
    font-weight: 700; 
    text-transform: uppercase; 
    transition: all ease .3s; 
    min-height: fit-content; 
    border-top-left-radius: 0px; 
    border-top-right-radius: 0px; 
    border-bottom-right-radius: 0px; 
    border-bottom-left-radius: 0px; 
    padding-top: 6px; 
    padding-right: 13px; 
    padding-bottom: 6px; 
    padding-left: 13px; 
    transition-duration: 0.3s; 
    transition-timing-function: ease; 
    transition-delay: 0s; 
    transition-property: all;
} 

@media all{     
.wpcf7 .ajax-loader  { 
    visibility: hidden; 
    display: inline-block; 
    background-color: #23282d; 
    opacity: .75; 
    width: 24px; 
    height: 24px; 
    border: none; 
    border-radius: 100%; 
    padding: 0; 
    margin: 0 24px; 
    position: relative; 
    border-top-width: initial; 
    border-right-width: initial; 
    border-bottom-width: initial; 
    border-left-width: initial; 
    border-top-style: none; 
    border-right-style: none; 
    border-bottom-style: none; 
    border-left-style: none; 
    border-top-color: initial; 
    border-right-color: initial; 
    border-bottom-color: initial; 
    border-left-color: initial; 
    border-image-source: initial; 
    border-image-slice: initial; 
    border-image-width: initial; 
    border-image-outset: initial; 
    border-image-repeat: initial; 
    border-top-left-radius: 100%; 
    border-top-right-radius: 100%; 
    border-bottom-right-radius: 100%; 
    border-bottom-left-radius: 100%; 
    padding-top: 0px; 
    padding-right: 0px; 
    padding-bottom: 0px; 
    padding-left: 0px; 
    margin-top: 0px; 
    margin-right: 24px; 
    margin-bottom: 0px; 
    margin-left: 24px;
} 
}     

@media all{     
.wpcf7 .ajax-loader:before  { 
    content: ''; 
    position: absolute; 
    background-color: #fbfbfc; 
    top: 4px; 
    left: 4px; 
    width: 6px; 
    height: 6px; 
    border: none; 
    border-radius: 100%; 
    transform-origin: 8px 8px; 
    animation-name: spin; 
    animation-duration: 1000ms; 
    animation-timing-function: linear; 
    animation-iteration-count: infinite; 
    border-top-width: initial; 
    border-right-width: initial; 
    border-bottom-width: initial; 
    border-left-width: initial; 
    border-top-style: none; 
    border-right-style: none; 
    border-bottom-style: none; 
    border-left-style: none; 
    border-top-color: initial; 
    border-right-color: initial; 
    border-bottom-color: initial; 
    border-left-color: initial; 
    border-image-source: initial; 
    border-image-slice: initial; 
    border-image-width: initial; 
    border-image-outset: initial; 
    border-image-repeat: initial; 
    border-top-left-radius: 100%; 
    border-top-right-radius: 100%; 
    border-bottom-right-radius: 100%; 
    border-bottom-left-radius: 100%;
} 
}     

.form-control { 
    display: block; 
    width: 100%; 
    height: calc(1.5em + .75rem + 2px); 
    padding: .375rem .75rem; 
    font-size: 1rem; 
    font-weight: 400; 
    line-height: 1.5; 
    color: #495057; 
    background-color: #fff; 
    background-clip: padding-box; 
    border: 1px solid #ced4da; 
    border-radius: .25rem; 
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out; 
    padding-top: 0.375rem; 
    padding-right: 0.75rem; 
    padding-bottom: 0.375rem; 
    padding-left: 0.75rem; 
    border-top-width: 1px; 
    border-right-width: 1px; 
    border-bottom-width: 1px; 
    border-left-width: 1px; 
    border-top-style: solid; 
    border-right-style: solid; 
    border-bottom-style: solid; 
    border-left-style: solid; 
    border-top-color: rgb(206, 212, 218); 
    border-right-color: rgb(206, 212, 218); 
    border-bottom-color: rgb(206, 212, 218); 
    border-left-color: rgb(206, 212, 218); 
    border-image-source: initial; 
    border-image-slice: initial; 
    border-image-width: initial; 
    border-image-outset: initial; 
    border-image-repeat: initial; 
    border-top-left-radius: 0.25rem; 
    border-top-right-radius: 0.25rem; 
    border-bottom-right-radius: 0.25rem; 
    border-bottom-left-radius: 0.25rem; 
    transition-duration: 0.15s, 0.15s; 
    transition-timing-function: ease-in-out, ease-in-out; 
    transition-delay: 0s, 0s; 
    transition-property: border-color, box-shadow;
} 

.cta-form .form-control  { 
    font-size: 18px;
} 

.underline-input-form .form-group .form-control  { 
    background: #fff; 
    border-radius: 0; 
    border: 1px solid #fff; 
    color: #000; 
    font-size: 14px; 
    padding: 20px 10px; 
    background-image: initial; 
    background-position-x: initial; 
    background-position-y: initial; 
    background-size: initial; 
    background-repeat-x: initial; 
    background-repeat-y: initial; 
    background-attachment: initial; 
    background-origin: initial; 
    background-clip: initial; 
    background-color: rgb(255, 255, 255); 
    border-top-left-radius: 0px; 
    border-top-right-radius: 0px; 
    border-bottom-right-radius: 0px; 
    border-bottom-left-radius: 0px; 
    border-top-width: 1px; 
    border-right-width: 1px; 
    border-bottom-width: 1px; 
    border-left-width: 1px; 
    border-top-style: solid; 
    border-right-style: solid; 
    border-bottom-style: solid; 
    border-left-style: solid; 
    border-top-color: rgb(255, 255, 255); 
    border-right-color: rgb(255, 255, 255); 
    border-bottom-color: rgb(255, 255, 255); 
    border-left-color: rgb(255, 255, 255); 
    border-image-source: initial; 
    border-image-slice: initial; 
    border-image-width: initial; 
    border-image-outset: initial; 
    border-image-repeat: initial; 
    padding-top: 20px; 
    padding-right: 10px; 
    padding-bottom: 20px; 
    padding-left: 10px;
} 

@media all{     
input[type="url"] , .wpcf7 input[type="email"] , .wpcf7 input[type="tel"]  { 
    direction: ltr;
} 
}     

input[type="date"], input[type="datetime-local"], input[type="month"], input[type="time"] { 
    -webkit-appearance: listbox; 
    appearance: listbox;
} 

.awards { 
    background: #f1f1f1; 
    padding-top: 70px; 
    padding-bottom: 150px; 
    background-image: initial; 
    background-position-x: initial; 
    background-position-y: initial; 
    background-size: initial; 
    background-repeat-x: initial; 
    background-repeat-y: initial; 
    background-attachment: initial; 
    background-origin: initial; 
    background-clip: initial; 
    background-color: rgb(241, 241, 241);
} 

.award-slider-container { 
    position: relative;
} 

.swiper-container.award-slider { 
    max-width: 95%; 
    margin: 0 auto; 
    margin-top: 0px; 
    margin-right: auto; 
    margin-bottom: 0px; 
    margin-left: auto;
} 

@media (min-width: 992px){     
.align-items-lg-center { 
    -ms-flex-align: center!important; 
    align-items: center!important;
} 
}     

.award-slider .swiper-pagination-bullets  { 
    position: initial;
} 


#demo {
    background: linear-gradient(112deg, #ffffff 50%, #ED242F 50%);
    max-width: 900px;
    margin: auto
}

.carousel-caption {
    position: initial;
    z-index: 10;
    padding: 5rem 8rem;
    color: black;
    text-align: center;
    font-size: 1.2rem;
    font-style: italic;
    font-weight: bold;
    line-height: 2rem
}

@media(max-width:767px) {
    .carousel-caption {
        position: initial;
        z-index: 10;
        padding: 3rem 2rem;
        color: black;
        text-align: center;
        font-size: 0.7rem;
        font-style: italic;
        font-weight: bold;
        line-height: 1.5rem
    }
}

.carousel-caption img {
    width: 6rem;
    border-radius: 5rem;
    margin-top: 2rem
}

@media(max-width:767px) {
    .carousel-caption img {
        width: 4rem;
        border-radius: 4rem;
        margin-top: 1rem
    }
}

#image-caption {
    font-style: normal;
    font-size: 1rem;
    margin-top: 0.5rem
}

@media(max-width:767px) {
    #image-caption {
        font-style: normal;
        font-size: 0.6rem;
        margin-top: 0.5rem
    }
}

@media(max-width:767px) {
    i {
        padding: 0.8rem
    }
}

.carousel-control-prev {
    justify-content: flex-start
}

.carousel-control-next {
    justify-content: flex-end
}

.carousel-control-prev,
.carousel-control-next {
    transition: none;
    opacity: unset
}

</style>

@endsection
  


