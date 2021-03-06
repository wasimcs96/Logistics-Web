@extends('front.cleaning.layout')

@section('pagename','- All Rss')

@section('meta-keywords', "$be->blogs_meta_keywords")
@section('meta-description', "$be->blogs_meta_description")

@section('content')
  <!--   hero area start   -->
  <div class="breadcrumb-area" style="background-image: url('{{asset('assets/front/img/' . $bs->breadcrumb)}}');background-size:cover;">
     <div class="container">
        <div class="breadcrumb-txt"style="
        padding: 5px;
    ">
           <div class="row">
              <div class="col-xl-7 col-lg-8 col-sm-10">
                {{-- <span>{{__('RSS')}}</span>
                 <h1>{{__('RSS Feeds')}}</h1> --}}
                 <ul class="breadcumb"style="
                 padding: 10px;
                 margin-top: 0;
             ">
                    <li><a href="{{route('front.index')}}">{{__('Home')}}</a></li>
                    <li>{{__('Latest rss')}}</li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
     <div class="breadcrumb-area-overlay" style="background-color: #{{$be->breadcrumb_overlay_color}};opacity: {{$be->breadcrumb_overlay_opacity}};"></div>
  </div>
  <!--   hero area end    -->


  <!--    blog lists start   -->
  <div class="blog-lists pt-115 pb-60">
     <div class="container">
        <div class="row">
           <div class="col-lg-8">
              <div class="row">
                @if (count($posts) == 0)
                  <div class="col-md-12">
                    <div class="bg-light py-5">
                      <h3 class="text-center">{{__('NO FEED FOUND')}}</h3>
                    </div>
                  </div>
                @else
                  @foreach ($posts as $key => $post)
                    <div class="col-md-6">
                        <div class="single-blog-item mx-0 mt-0 mb-5">
                            <div class="single-blog-img">
                                <img src="{{$post->photo}}" alt="">
                            </div>
                            <div class="single-blog-details rss">
                                @php
                                    if (!empty($currentLang)) {
                                        $postDate = \Carbon\Carbon::parse($post->created_at)->locale("$currentLang->code");
                                    } else {
                                        $postDate = \Carbon\Carbon::parse($post->created_at)->locale("en");
                                    }

                                    $postDate = $postDate->translatedFormat('d M. Y');
                                @endphp
                                <span><i class="fa fa-arrow-right"></i>{{__('By')}} {{$post->category->feed_name}}</span>
                                <span><i class="fa fa-arrow-right"></i>{{$postDate}}</span>
                                <h4>{{strlen(convertUtf8($post->title)) > 40 ? substr(convertUtf8($post->title), 0, 40) . '...' : convertUtf8($post->title)}}</h4>
                                <p>{!! (strlen(strip_tags(convertUtf8($post->description))) > 100) ? substr(strip_tags(convertUtf8($post->description)), 0, 100) . '...' : strip_tags(convertUtf8($post->description)) !!}</p>
                                <a href="{{route('front.rssdetails', [$post->slug, $post->id])}}" class="blog-btn">{{__('Read More')}} <i class="fa fa-arrow-right"></i></a>
                            </div>

                        </div>
                    </div>
                  @endforeach
                @endif
              </div>
              @if ($posts->total() > 4)
                <div class="row">
                   <div class="col-md-12">
                      <nav class="pagination-nav {{$posts->total() > 6 ? 'mb-4' : ''}}">
                        {{$posts->links()}}
                      </nav>
                   </div>
                </div>
              @endif
           </div>
           <!--    blog sidebar section start   -->
           <div class="col-lg-4">
              <div class="sidebar">
                 <div class="blog-sidebar-widgets category-widget">
                    <div class="category-lists job">
                       <h4>{{__('Categories')}}</h4>
                       <ul>
                          @foreach ($categories as $key => $rcat)
                           <li class="single-category @if($cat_id == $rcat->id) active @endif"><a href="{{route('front.rcatpost',$rcat->id)}}">{{convertUtf8($rcat->feed_name)}}</a></li>
                          @endforeach
                       </ul>
                    </div>
                 </div>
                 <div class="subscribe-section">
                    <span>{{__('SUBSCRIBE')}}</span>
                    <h3>{{__('SUBSCRIBE FOR NEWSLETTER')}}</h3>
                    <form id="subscribeForm" class="subscribe-form" action="{{route('front.subscribe')}}" method="POST">
                       @csrf
                       <div class="form-element"><input name="email" type="email" placeholder="{{__('Email')}}"></div>
                       <p id="erremail" class="text-danger mb-3 err-email"></p>
                       <div class="form-element"><input type="submit" value="{{__('Subscribe')}}"></div>
                    </form>
                 </div>
              </div>
           </div>
           <!--    blog sidebar section end   -->
        </div>
     </div>
  </div>
  <!--    blog lists end   -->
@endsection
