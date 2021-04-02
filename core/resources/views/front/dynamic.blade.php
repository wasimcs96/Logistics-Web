@extends("front.$version.layout")

@section('pagename')
 - {{convertUtf8($page->name)}}
@endsection

@section('meta-keywords', "$page->meta_keywords")
@section('meta-description', "$page->meta_description")

@section('content')
    <!--   breadcrumb area start   -->
    <div class="breadcrumb-area" style="background-image: url('{{asset('assets/front/img/' . $bs->breadcrumb)}}');background-size:cover;">
        <div class="ctr">
            <div class="breadcrumb-txt" style="
padding: 5px;
">
            <div class="rw">
                <div class="col-xl-7 col-lg-8 col-sm-10">
                    <!-- <span>{{convertUtf8($page->title)}}</span>
                    <h1>{{convertUtf8($page->subtitle)}}</h1> -->
                    <ul class="breadcumb" style="
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
    <div class="about-company-section pt-115 pb-80">
        <div class="ctr">
            <div class="rw">
            <div class="col-lg-12">
                {!! replaceBaseUrl(convertUtf8($page->body)) !!}
            </div>
            </div>
        </div>
    </div>
    <!--   about company section end   -->

<section class="metro-cta section-padding">
<script>console.log("hello please run none");</script>
<section class="cta-banner">
<div class="container">
<div class="row">
<div class="col-12 col-xl-10 offset-xl-1 cta-banner-area">
<div class="row">
<div class="col-12 col-lg-5 cta-banner-blue text-white text-uppercase text-center">
<h3 class="font-oswald mb-0" style="color: white;">ARE YOU READY TO MOVE?</h3>
<h2 class="font-oswald mb-0" style="color: white;">GET YOUR <span class="underline" style="color: white;"> <a href="{{route('front.quote')}}" style="color: white;">FREE QUOTE</a> </span></h2>
</div>
<div class="col-12 col-lg-7 cta-banner-green py-md-4 py-lg-0">
<div class="row align-items-center h-100">
<div class="col-12 col-md-6 text-center mb-5 pb-5 mb-md-0 pb-md-0">
<a href="{{ route('front.contact') }}">
<button class="btn btn-round-white font-oswald text-uppercase font-weight-bold">Submit Your Request <span class="fas fa-chevron-right ml-1"></span></button>
</a>
</div>
<div class="col-12 col-md-6 text-center">
<a href="tel:+14377717791"><button class="btn btn-round-white font-oswald text-uppercase font-weight-bold">Call Us: +14377717791 <span class="fas fa-chevron-right ml-1"></span></button></a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
</section>

    <section class="about-why-us section-padding outline-none" id="why-metropolitan-movers">
<div class="container">
<h2 class="section-title">Why Global Trust Movers?</h2>
<div class="row mt-3 mt-xl-5">
<div class="col-12 my-3 my-xl-0 col-md-6 col-xl-3 service-card-wrap">
<div class="card service-card">
<div class="card-icon">
<img src="{{asset('assets/front/img/09-expert-movers.svg')}}" alt="Caring And Expert Movers" class="img-fluid">
</div>
<div class="card-body">
<h3 class="card-title">Caring And Expert Movers</h3>
<p class="card-text text-373737">
Professionally equipped with knowledge and tools, our moving crew works to outperform your expectations. </p>
</div>
</div>
</div>
<div class="col-12 my-3 my-xl-0 col-md-6 col-xl-3 service-card-wrap">
<div class="card service-card">
<div class="card-icon">
<img src="{{asset('assets/front/img/10-trusted.svg')}}" alt="Trusted And Reliable" class="img-fluid">
</div>
<div class="card-body">
<h3 class="card-title">Trusted And Reliable</h3>
<p class="card-text text-373737">
Accredited by industry organisations like Canadian Association of Movers and American Moving and Storage Association, we operate according to the highest industry standar </p>
</div>
</div>
</div>
<div class="col-12 my-3 my-xl-0 col-md-6 col-xl-3 service-card-wrap">
<div class="card service-card">
<div class="card-icon">
<img src="{{asset('assets/front/img/11-successful-moves.svg')}}" alt="50,000+ Successful Moves" class="img-fluid">
</div>
<div class="card-body">
<h3 class="card-title">50,000+ Successful Moves</h3>
<p class="card-text text-373737">
With more than 10 years of experience and extensive national network, we pride ourselves to deliver exceptional service with every move </p>
</div>
</div>
</div>
<div class="col-12 my-3 my-xl-0 col-md-6 col-xl-3 service-card-wrap">
<div class="card service-card">
<div class="card-icon">
<img src="{{asset('assets/front/img/12-referral-rate.svg')}}" alt="94% Customer Referral Rate" class="img-fluid">
</div>
<div class="card-body">
<h3 class="card-title">94% Customer Referral Rate</h3>
<p class="card-text text-373737">
Working to achieve 100% customer satisfaction is in our DNA. We customise the move according to your needs. </p>
</div>
</div>
</div>
</div>
</div>
</section>


<!-- <section class="testimonials section-padding outline-none" id="customer-reviews">
        <div class="ctr">
        <h2 class="round-title text" style="margin-bottom: 100px; font-weight: 700; line-height: 1.2; font-size: 27px; text-transform: uppercase; font-family: oswald; text-align: center; position: relative; z-index: 1; color: rgb(19, 19, 19);">What People Say</h2>
            <div class="rw">
                <div class="ctr">
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
                                <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code, I don't know what will.This was the very best explanation of frameworks for brginners that I've ever seen.</p> <img src="{{asset('assets/front/img/QptVdsp.jpg')}}" class="img-flu">
                                <div id="image-caption">Cromption Greves</div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="carousel-caption">
                                <p>If Shai Reznik's TDD videos don't convince you to add automated testing your code, I don't know what will.This was the very best explanation of frameworks for brginners that I've ever seen.</p> <img src="{{asset('assets/front/img/jQWThIn.jpg')}}" class="img-flu">
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
</section> -->

    <!-- Start logistics_testimonial section -->
    @if ($bs->testimonial_section == 1)
    <section class="logistics_testimonial testimonial_v1 pt-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center">
                        <span>{{convertUtf8($bs->testimonial_title)}}</span>
                        <h2>{{convertUtf8($bs->testimonial_subtitle)}}</h2>
                    </div>
                </div>
            </div>
            <div class="testimonial_slide">
                @foreach ($testimonials as $key => $testimonial)
                    <div class="testimonial_box d-lg-flex align-items-lg-center">
                        <div class="logistics_img">
                            <img src="{{asset('assets/front/img/testimonials/'.$testimonial->image)}}" class="img-fluid" alt="" width="100%">
                        </div>
                        <div class="logistics_content">
                            <h4>{{convertUtf8($testimonial->name)}}</h4>
                            <h6>{{convertUtf8($testimonial->rank)}}</h6>
                            <p>{{convertUtf8($testimonial->comment)}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    @endif
    <!-- End logistics_testimonial section -->

    <section class="cta-section franchise-cta-section">
<div class="cotainer-fluid cta-white-blue">
<div class="container">
<div class="row">
<div class="col-12 col-lg-5 col-xl-4 py-lg-5 py-xl-2 white-half text-white">
<h3 class="cta-title font-oswald mb-3 text-center text-lg-left" style="
    color: #fff;
    font-size: 42px;
">Why Choose Us?</h3>
<div class="row cta-block align-items-center mb-3">
<div class="col-3">
<span class="cta-stats">94%</span>
</div>
<div class="col-9">
<div class="ml-lg-2">
<h4 class="cta-block-title">CUSTOMER REFERRAL RATE</h4>
<p class="text-left">94% of our clients feel confident to suggest our moving services to their friends and family.</p>
</div>
</div>
</div>
<div class="row cta-block align-items-center mb-3">
<div class="col-3">
<span class="cta-stats cta-stats-sm">50,000+</span>
</div>
<div class="col-9">
<div class="ml-lg-2">
<h4 class="cta-block-title">SUCCESSFUL MOVES</h4>
<p class="text-left">We helped to relocate over 50,000 Canadian families and businesses to their new homes and offices.</p>
</div>
</div>
</div>
<div class="row cta-block align-items-center mb-3 mb-lg-0">
<div class="col-3">
<span class="cta-stats">10+</span>
</div>
<div class="col-9">
<div class="ml-lg-2">
<h4 class="cta-block-title">YEARS OF EXPERIENCE</h4>
<p class="text-left">What does experience mean to you? For us, it is reliability, trust, professionalism, and confidence in every move.</p>
</div>
</div>
</div>
</div>
<div class="col-12 col-lg-6 offset-lg-1 col-xl-6 offset-xl-2 text-black cta-form">
<p class="mb-0  text-center  text-lg-left">We are one click away!</p>
<h3 class="text-uppercase font-weight-bold  text-center  text-lg-left mb-4">Request a free quote</h3>
<div role="form" class="wpcf7" id="wpcf7-f11-o2" lang="en-US" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
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
<div class="form-group"> <label for="name" class="sr-only">Name</label><span class="wpcf7-form-control-wrap Name"><input type="text" name="Name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" id="name" aria-required="true" aria-invalid="false" placeholder="Name"></span></div>
</div>
<div class="col-12 col-md-6">
<div class="form-group"> <label for="email" class="sr-only">Email</label><span class="wpcf7-form-control-wrap email_address"><input type="email" name="email_address" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" id="email" aria-required="true" aria-invalid="false" placeholder="Email Address"></span></div>
</div>
<div class="col-12 col-md-6">
<div class="form-group"> <label for="phone" class="sr-only">Phone Number</label><span class="wpcf7-form-control-wrap PhoneNumber"><input type="tel" name="PhoneNumber" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-required wpcf7-validates-as-tel form-control" id="phone" aria-required="true" aria-invalid="false" placeholder="Phone Number"></span></div>
</div>
<div class="col-12 col-md-6">
<div class="form-group"> <label for="date_of_moving" class="sr-only">Date of Moving (Optional)</label><span class="wpcf7-form-control-wrap DateofMoving"><input type="date" name="DateofMoving" value="" class="wpcf7-form-control wpcf7-date wpcf7-validates-as-date form-control" aria-invalid="false" placeholder="Date of Moving"></span></div>
</div>
<div class="col-12 col-md-6">
<div class="form-group"> <label for="moving_from" class="sr-only">Moving From (Optional)</label><span class="wpcf7-form-control-wrap MovingFrom"><input type="text" name="MovingFrom" value="" size="40" class="wpcf7-form-control wpcf7-text form-control" id="moving_from" aria-invalid="false" placeholder="Moving From (Optional)"></span></div>
</div>
<div class="col-12 col-md-6">
<div class="form-group"> <label for="moving_to" class="sr-only">Moving To (Optional)</label><span class="wpcf7-form-control-wrap MovingTo"><input type="text" name="MovingTo" value="" size="40" class="wpcf7-form-control wpcf7-text form-control" id="moving_to" aria-invalid="false" placeholder="Moving To (Optional)"></span></div>
</div>
<div class="col-12 pt-5">
<div class="d-flex justify-content-center justify-content-lg-end"><input type="submit" value="Submit Your Request" class="wpcf7-form-control wpcf7-submit btn btn-simple-blue btn-lg" id="btn_submit" aria-invalid="false" style="background: #0C4DA1;"><span class="ajax-loader"></span></div>
</div>
</div>
<div class="form-group"><span class="wpcf7-form-control-wrap other_campaign"><input type="hidden" name="other_campaign" value="none" size="40" class="wpcf7-form-control wpcf7dtx-dynamictext wpcf7-dynamichidden" id="other_campaign" aria-invalid="false"></span></div>
<div class="wpcf7-response-output" aria-hidden="true"></div></form></div> </div>
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

.section-padding {
    padding-top: 80px;
    padding-bottom: 80px;
}

.about-why-us {
    background-color: #0C4DA1;
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

.mt-3, .my-3 {
    margin-top: 1rem!important;
}

@media (min-width: 1200px){
.mt-xl-5, .my-xl-5 {
    margin-top: 3rem!important;
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
    font-family: 'Montserrat', sans-serif;
    color: #0C4DA1;
}

@media (min-width: 1200px){
.service-card .card-title  {
    padding-left: 35px;
    padding-right: 35px;
    text-transform: capitalize;
}
}

.text-373737 {
    color: #373737;
}

.card-text:last-child {
    margin-bottom: 0;
}

.service-card .card-text  {
    line-height: 28px;
    font-size: 14px;
}

.about-why-us .section-title {
    font-size: 46px;
    color: #fff;
    font-weight: 700;
    text-align: center;
    margin-bottom: 50px;
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
    background: #ED242F;
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

.cta-section {
    padding: 53px 0;
    position: relative;
}

@media (min-width: 1200px) {
.cta-white-blue:before {
    content: '';
    background: #0C4DA1;
    width: calc(50vw - 200px);
    height: 100%;
    box-shadow: 0 0 16px 0 rgb(0 0 0 / 20%);
    display: block;
    position: absolute;
    left: 0;
    top: 0;
    z-index: 0;
    border-radius: 0 6px 6px 0;
}
}

.cta-white-blue .container {
    position: relative;
    z-index: 2;
}

@media (min-width: 1300px) {
.container {
    max-width: 1160px;
}
}
.text-white {
    color: #fff!important;
}

@media (min-width: 1200px){
.pt-xl-2, .py-xl-2 {
    padding-top: .5rem!important;
}
}

@media (min-width: 1200px){
.pt-xl-2, .py-xl-2 {
    padding-bottom: .5rem!important;
}
}

@media (min-width: 1200px) {
.col-xl-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
}
}

@media (min-width: 1200px){
.cta-title {
    font-size: 54px;
}
}

@media (min-width: 992px){
.text-lg-left {
    text-align: left!important;
}
}

.mb-3, .my-3 {
    margin-bottom: 1rem!important;
}

.align-items-center {
    -ms-flex-align: center!important;
    align-items: center!important;
}

.col-3 {
    -ms-flex: 0 0 25%;
    flex: 0 0 25%;
    max-width: 25%;
}

.cta-section .cta-block:nth-of-type(1) .cta-stats {
    background-image: url('{{asset('assets/front/img/stats-4.svg')}}');
}

@media (min-width: 992px){
.cta-stats {
    width: 90px;
    height: 90px;
    font-size: 16px;
}
}

.col-9 {
    -ms-flex: 0 0 75%;
    flex: 0 0 75%;
    max-width: 75%;
}

.cta-section .cta-block:nth-of-type(2) .cta-stats {
    background-image: url('{{asset('assets/front/img/stats-2.svg')}}');
}

@media (min-width: 992px) {
.cta-stats-sm {
    font-size: 14px;
}
}

@media (min-width: 992px){
.ml-lg-2, .mx-lg-2 {
    margin-left: .5rem!important;
}
}

.cta-block-title {
    font-size: 16px;
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    text-transform: uppercase;
    color: #fff;
}

.cta-block p {
    font-size: 16px;
    margin-bottom: 0;
}

.text-left {
    text-align: left!important;
}

@media (min-width: 992px){
.mb-lg-0, .my-lg-0 {
    margin-bottom: 0!important;
}
}

.cta-section .cta-block:nth-of-type(3) .cta-stats {
    text-shadow: 0 0 5px rgb(0 0 0 / 20%);
    background-image: url('{{asset('assets/front/img/stats-3.svg')}}');
}

.cta-stats{
    width: 100px;
    height: 100px;
    background-image: url(../images/stats-3.svg);
    background-size: 100% 100%;
    background-position: top center;
    background-repeat: no-repeat;
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
}
}

@media (min-width: 992px){
.cta-stats {
    width: 90px;
    height: 90px;
    font-size: 16px;
}
}

.cta-form {
    padding-top: 65px;
    padding-bottom: 65px;
}

.text-black {
    color: #000;
}

@media (min-width: 1200px){
.offset-xl-2 {
    margin-left: 16.666667%;
}
}

@media (min-width: 1200px){
.col-xl-6 {
    -ms-flex: 0 0 50%;
    flex: 0 0 50%;
    max-width: 50%;
}
}

.wpcf7 .screen-reader-response {
    position: absolute;
    overflow: hidden;
    clip: rect(1px,1px,1px,1px);
    height: 1px;
    width: 1px;
    margin: 0;
    padding: 0;
    border: 0;
}

button, input {
    overflow: visible;
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
    background-image: url('{{asset('assets/front/img/arrow.png')}}');
    background-size: 200px 100%;
    z-index: 1;
}
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

.metro-cta .cta-banner{
    transform: none;
}

@media (min-width: 992px){
.cta-banner-area {
    background-color: #ED242F;
}
}

.cta-banner-area {
    box-shadow: 0 0 20px 0 rgb(0 0 0 / 38%);
}

@media (min-width: 768px){
.cta-banner .cta-banner-blue {
    padding: 40px;
}
}

.cta-banner .cta-banner-blue {
    background-color: #0C4DA1;
}

.col-lg-5{
    position: relative;
    width: 100%;
}

.cta-banner-blue h3 {
    font-size: 18px;
}

.font-oswald {
    font-family: oswald;
}

.mb-0, .my-0 {
    margin-bottom: 0!important;
}

h3{
    font-weight: 500;
    line-height: 1.2;
}

.cta-banner-blue h2 {
    font-size: 25px;
}

.cta-banner-blue .underline {
    border-bottom: 2px solid #fff;
}

span {
    font-size: larger;
    align-content: center;
}

@media (min-width: 992px){
.cta-banner-blue:after {
    content: '';
    width: 55px;
    height: 100%;
    position: absolute;
    top: 0;
    left: 100%;
    background-repeat: no-repeat;
    background-image: url('{{asset('assets/front/img/arrow.png')}}');
    background-size: 55px 100%;
    z-index: 1;
}
}

.cta-banner .cta-banner-green{
    padding-left: 55px;
}

@media (min-width: 992px){
.pb-lg-0, .py-lg-0 {
    padding-bottom: 0!important;
}
}

@media (min-width: 992px){
.pt-lg-0, .py-lg-0 {
    padding-top: 0!important;
}
}

@media (min-width: 992px){
.col-lg-7 {
    -ms-flex: 0 0 58.333333%;
    flex: 0 0 58.333333%;
    max-width: 58.333333%;
}
}

@media (min-width: 992px){
.cta-banner .cta-banner-green>.row {
    position: relative;
}
}

@media (min-width: 992px){
.cta-banner .cta-banner-green>.row:before {
    content: '';
    height: 100%;
    width: 1px;
    background-color: #fff;
    position: absolute;
    left: 50%;
    top: 0;
}
}

@media (max-width: 1499px){
.cta-banner .cta-banner-green>.row:after {
    font-size: 12px;
    height: 25px;
    width: 25px;
    line-height: 25px;
}
}

@media (min-width: 992px){
.cta-banner .cta-banner-green>.row:after {
    content: 'OR';
    height: 35px;
    width: 35px;
    border-radius: 100%;
    background-color: #fff;
    position: absolute;
    left: 50%;
    top: 50%;
    line-height: 35px;
    text-align: center;
    transform: translate(-50%,-50%);
    font-size: 14px;
    font-weight: 700;
}
}

.btn-round-white {
    background-color: #fff;
    border-radius: 50px;
    padding: 15px 15px;
    font-size: 14px;
}

.font-weight-bold {
    font-weight: 700!important;
}



</style>

@endsection



