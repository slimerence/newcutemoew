@extends(_get_frontend_layout_path('catalog'))
@section('topbar')
    <div class="inner-header" style="background: url({{ asset('images/cutemoew/slideshow_1.jpg') }});">
        <h2>News & Blog</h2>
        <div class="bdr">
            <ul>
                <li>Home</li>
                <li>/</li>
                <li><span>Blog</span></li>
            </ul>
        </div>
    </div>
@endsection
@section('content')
    <section class="blog blog-deatils">
        <!-- .blog -->
        <div class="container">
            <div class="col-sm-12 col-md-12 blog-deatails">
                <p class="hank text-center"><a href="{{ url('/page'.$blog->uri) }}">{{ $blog->title }}</a></p>
                <p class="time text-center">September 14, 2017</p>
                <img class="blog-img2" src="{{$blog->feature_image}}" alt="gallery1" />
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8">
                        {!! $blog->content !!}
                    </div>
                    <div class="col-lg-2"></div>
                </div>
                @if(isset($siteConfig))
                <div class="blog-tags-social row">
                    <div class="blog-social col-md-6"> <strong>Share to friends:</strong>
                        <ul class="social-list">
                            @if(!empty($siteConfig->facebook))
                                <li class="box"><a href="{{ $siteConfig->facebook }}"><i class="fa fa-facebook"></i></a></li>
                            @endif
                            @if(!empty($siteConfig->twitter))
                                <li class="box"><a href="{{ $siteConfig->twitter }}"><i class="fa fa-twitter"></i></a></li>
                            @endif
                            @if(!empty($siteConfig->google_plus))
                                <li class="box"><a href="{{ $siteConfig->google_plus }}"><i class="fa fa-google-plus"></i></a></li>
                            @endif
                            @if(!empty($siteConfig->linked_in))
                                <li class="box"><a href="{{ $siteConfig->linked_in }}"><i class="fa fa-linkedin"></i></a></li>
                            @endif
                            @if(!empty($siteConfig->instagram))
                                <li class="box"><a href="{{ $siteConfig->instagram }}"><i class="fa fa-instagram"></i></a></li>
                            @endif
                        </ul>
                    </div>
                </div>
                @endif

            </div>
            <!-- /.blog -->
        </div>
    </section>
@endsection