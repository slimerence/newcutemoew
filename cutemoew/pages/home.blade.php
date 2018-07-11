@extends(_get_frontend_layout_path('frontend'))

@section('content')
<section class="banner-outer banner-cata">

    <!-- /.banner -->
    <div class="container">
        <div class="row newbanner">
            <div class="col-md-6">
                <div class="animated wow zoomIn banner-container" data-wow-duration=".5s" data-wow-delay=".2s">
                    <a href="{{ url('/category/view/Sales') }}">
                    <img src="{{ asset('images/cutemoew/products/cata1.jpg') }}" alt="catact" />
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="row child-row">
                    <div class="child-col col-md-6">
                        <div class="animated wow zoomIn banner-container" data-wow-duration=".5s" data-wow-delay=".2s">
                            <a href="{{ url('/category/view/summer') }}">
                            <img src="{{ asset('images/cutemoew/products/cata2.jpg') }}" alt="catact1" />
                            <div class="banner-text">
                                <h4>Summer</h4>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="child-col col-md-6">
                        <div class="animated wow zoomIn banner-container" data-wow-duration=".5s" data-wow-delay=".2s">
                            <a href="{{ url('/category/view/winter') }}">
                            <img src="{{ asset('images/cutemoew/products/cata3.jpg') }}" alt="catact2" />
                            <div class="banner-text">
                                <h4>Winter</h4>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="child-col col-md-6">
                        <div class="animated wow zoomIn banner-container" data-wow-duration=".5s" data-wow-delay=".2s">
                            <a href="{{ url('/category/view/springautumn') }}">
                            <img src="{{ asset('images/cutemoew/products/cata4.jpg') }}" alt="catact3" />
                            <div class="banner-text">
                                <h4>Spring & Autumn</h4>
                            </div>
                            </a>
                        </div>
                    </div>
                    <div class="child-col col-md-6">
                        <div class="animated wow zoomIn banner-container" data-wow-duration=".5s" data-wow-delay=".2s">
                            <a href="{{ url('/category/view/Accessories') }}">
                            <img src="{{ asset('images/cutemoew/products/cata5.jpg') }}" alt="catact4" />
                            <div class="banner-text">
                                <h4>Accessories</h4>
                            </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@if($featureProducts)
<section class="new-arrivals">
    <!-- .new-arrivals -->
    <div class="container">
        <div class="tittle text-center">
            <h2>Feature Products</h2>
        </div>

        <div class="row animated wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s">
            @foreach($featureProducts as $featureProduct)
            <div class="col-md-3 col-sm-4 col-lg-3">
                <!-- .pro-text -->
                <div class="pro-text">
                    <!-- .pro-img -->
                    <div class="pro-img"> <a href="{{ url('catalog/product/'.$featureProduct->uri) }}"><img src="{{ $featureProduct->getProductDefaultImageUrl() }}" alt="{{ $featureProduct->name }}"></a>
                        <!-- .hover-img -->
{{--                        <div class="hover-img">
                            <ul>
                                <li><a href="{{ url('catalog/product/'.$featureProduct->uri) }}"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>--}}
                        <!--<div class="new tage"> <span class="new-text">NEW</span> <span class="pres-text">-15%</span> </div>-->
                        @if($featureProduct->special_price)
                            <div class="discount tage"> <span class="discount-text">SALE</span> </div>
                        @endif
                    <!-- /.hover-img -->
                    </div>
                    <!-- /.pro-img --><a href="{{ url('catalog/product/'.$featureProduct->uri) }}">{{ $featureProduct->name }}</a> <a href="{{ url('catalog/product/'.$featureProduct->uri) }}" class="addtocart">+ Add to cart</a>
                    <div class="price">
                        <span style="{{ $featureProduct->special_price ? 'text-decoration: line-through;' : 'text-decoration: none;' }}">${{ $featureProduct->getDefaultPriceGST() }}</span>
                        @if($featureProduct->special_price)
                            <span style="color: red;text-decoration: none;">${{ $featureProduct->getSpecialPriceGST() }}</span>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-12 text-center">
                <a href="{{ url('/category/view/Sales') }}" class="lbtn">load more</a>
            </div>
        </div>

    </div>
    <!-- /.new-arrivals -->
</section>
@endif
<section class="banner-outer banner-large">
    <div class="container">
    <div class="row">
    <!-- .banner-outer -->
    <div class="col-sm-6 col-md-6">
        <!-- .banner-img -->
        <div class="banner-img" style="background-image: url({{ 'images/cutemoew/banner1.jpg' }})">
            <div class="banner-text2">
                <h3>Best Sales Every Day</h3>
                <p></p>
                <a href="{{ url('/category/view/Sales') }}"><span>Discover now</span></a>
            </div>

        </div>
        <!-- /.banner-outer -->
    </div>

    <div class="col-sm-6 col-md-6">
        <!-- .banner-img -->
        <div class="banner-img"  style="background-image: url({{ 'images/cutemoew/banner2.jpg' }})">
            <div class="banner-text2">
                <h3>Baby Accessories</h3>
                <p></p>
                <a href="{{ url('category/view/Accessories') }}"><span>Discover now</span></a>
            </div>
        </div>
        <!-- /.banner-outer -->
    </div>
    <!-- /.banner -->
    </div>
    </div>
</section>
@if(isset($promotionProducts) && count($promotionProducts)>0)
<section class="new-arrivals">
    <!-- .new-arrivals -->
    <div class="container">
        <div class="tittle text-center">
            <h2>Promotion Products</h2>
        </div>
        <div class="row animated wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s">
            @foreach($promotionProducts as $promotionProduct)
            <div class="col-md-3">
                <!-- .pro-text -->
                <div class="pro-text">
                    <!-- .pro-img -->
                    <div class="pro-img"> <img src="{{ $promotionProduct->getProductDefaultImageUrl() }}" alt="{{ $promotionProduct->name }}" />
                        <!-- .hover-img -->
                        <div class="hover-img">
                            <ul>
                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                <li><a href="{{ url('catalog/product/'.$promotionProduct->uri) }}" ><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        @if($promotionProduct->special_price)
                            <div class="discount tage"> <span class="discount-text">SALE</span> </div>
                        @endif
                        <!-- /.hover-img -->
                    </div>
                    <!-- /.pro-img --><a href="{{ url('catalog/product/'.$promotionProduct->uri) }}">{{ $promotionProduct->name }}</a> <a href="{{ url('catalog/product/'.$promotionProduct->uri) }}" class="addtocart">+ Add to cart</a>
                    <div class="price">
                        <span style="{{ $promotionProduct->special_price ? 'text-decoration: line-through;' : 'text-decoration: none' }}">${{ $promotionProduct->getDefaultPriceGST() }}</span>
                        @if($promotionProduct->special_price)
                            <span style="color: red;text-decoration: none;">${{ $promotionProduct->getSpecialPriceGST() }}</span>
                        @endif
                    </div>
                </div>
                <!-- /.pro-text -->
            </div>
            @endforeach

        </div>
    </div>
    <!-- /.new-arrivals -->
</section>
@endif



<section class="section-padding">
    <!-- Latest News -->
    <div class="container">
        <div class="tittle text-center">
            <h2>Our Blog Posts</h2>
        </div>
        @foreach($posts as $key=>$post)
            @if($post->feature_image)
            <div class="col-sm-4 col-md-4 wow fadeIn" data-wow-duration=".2s" data-wow-delay=".1s">
                <div class="news-box">
                    <div class="news-img">
                        <img src="{{$post->feature_image}}" alt="{{ $post->title }}" />
                    </div>
                    <div class="news-text">
                        <a class="hnews-title" href="{{ url('/page'.$post->uri) }}">{{ $post->title }}</a>
                        <p>By <span>{{ $siteConfig->contact_person }}</span> / {{ $post->updated_at->format('F d, Y') }}</p>
                        <div class="news-text-content"> {!! $post->teasing !!}</div> <a href="{{ url('/page'.$post->uri) }}" class="readbtn">Read More</a> </div>
                </div>
            </div>
            @endif
        @endforeach
    </div>
    <!-- /Latest News -->
</section>


@endsection