@extends("front.logistic.layout")

@section('pagename','- All Rss')

@section('meta-keywords', "$be->rss_meta_keywords")
@section('meta-description', "$be->rss_meta_description")

@section('content')
  <!--   hero area start   -->
  <div class="breadcrumb-area" style="background-image: url('{{asset('assets/front/img/' . $bs->breadcrumb)}}');background-size:cover;">
     <div class="container">
        <div class="breadcrumb-txt" style="
        padding: 5px;
    ">
           <div class="row">
              <div class="col-xl-7 col-lg-8 col-sm-10">
                {{-- <span>{{$be->rss_title}}</span>
                 <h1>{{$be->rss_subtitle}}</h1> --}}
                 <ul class="breadcumb" style="
                 padding: 10px;
                 margin-top: 0;
             ">
                    <li><a href="{{route('front.index')}}">{{__('Home')}}</a></li>
                    <li>{{__('Latest RSS Feeds')}}</li>
                 </ul>
              </div>
           </div>
        </div>
     </div>
     <div class="breadcrumb-area-overlay" style="background-color: #{{$be->breadcrumb_overlay_color}};opacity: {{$be->breadcrumb_overlay_opacity}};"></div>
  </div>
  <!--   hero area end    -->


  <!--    blog lists start   -->
  <div class="logistics_blog blog_v1 pt-125 pb-100">
     <div class="container">
        <div class="row">
           <div class="col-lg-8">
              <div class="blog_slide mx-3">
                  <div class="row">
                    @if (count($rss_posts) == 0)
                        <div class="col-md-12">
                            <div class="bg-light py-5">
                            <h3 class="text-center">{{__('NO FEED FOUND')}}</h3>
                            </div>
                        </div>
                    @else
                        @foreach ($rss_posts as $key => $post)
                            <div class="col-md-6 mb-5">
                                <div class="grid_item mx-0">
                                    <div class="grid_inner_item">
                                        <div class="logistics_img">
                                            <a href="{{route('front.rssdetails', [$post->slug, $post->id])}}"><img src="{{$post->photo}}" class="img-fluid" alt=""></a>
                                        </div>
                                        <div class="logistics_content">
                                            <div class="post_meta">
                                                @php
                                                    if (!empty($currentLang)) {
                                                        $postDate = \Carbon\Carbon::parse($post->created_at)->locale("$currentLang->code");
                                                    } else {
                                                        $postDate = \Carbon\Carbon::parse($post->created_at)->locale("en");
                                                    }

                                                    $postDate = $postDate->translatedFormat('d M. Y');
                                                @endphp
                                                <span><i class="far fa-user"></i><a href="#">{{__('By')}} {{$post->category->feed_name}}</a></span>
                                                <span><i class="far fa-calendar-alt"></i><a href="#">{{$postDate}}</a></span>
                                            </div>
                                            <h3 class="post_title"><a href="{{route('front.rssdetails', [$post->slug, $post->id])}}">{{strlen(convertUtf8($post->title)) > 40 ? substr(convertUtf8($post->title), 0, 40) . '...' : convertUtf8($post->title)}}</a></h3>
                                            <a href="{{route('front.rssdetails', [$post->slug, $post->id])}}" class="btn_link">{{__('Read More')}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                  </div>
              </div>
              @if ($rss_posts->total() > 4)
                <div class="row">
                   <div class="col-md-12">
                      <nav class="pagination-nav {{$rss_posts->total() > 6 ? 'mb-4 mt-2' : ''}}">
                        {{$rss_posts->links()}}
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
                           <li class="single-category"><a href="{{route('front.rcatpost',$rcat->id)}}">{{convertUtf8($rcat->feed_name)}}</a></li>
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
