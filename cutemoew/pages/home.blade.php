@extends(_get_frontend_layout_path('frontend'))

@section('content')
<section class="banner-outer banner-cata">
    <!-- .banner-outer -->
    <div class="container">
        <!-- .banner-bg -->
        <div class="banner-bg">
            <div class="col-sm-4 col-md-4 imgct">
                <!-- .banner-img -->
                <div class="banner-img animated wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s"> <img src="images/cutemoew/products/cata1.png" alt="about-img1" />
                    <div class="banner-text">
                        <h3>British Made Pocket Knife - Oak</h3>
                        <p><a href="#">Discover Now</a></p>
                    </div>
                </div>
                <!-- /.banner-outer -->
            </div>
            <div class="col-sm-4 col-md-4 imgct">
                <!-- .banner-img -->
                <div class="banner-img animated wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s"> <img src="images/cutemoew/products/cata2.png" alt="about-img1" />
                    <div class="banner-text">
                        <h3>Chair Kimi No Isu Project</h3>
                        <p><a href="#">Discover Now</a></p>
                    </div>
                </div>
                <!-- /.banner-outer -->
            </div>
            <div class="col-sm-4 col-md-4 animated wow zoomIn imgct" data-wow-duration=".5s" data-wow-delay=".2s">
                <!-- .banner-img -->
                <div class="banner-img"> <img src="images/cutemoew/products/cata3.png" alt="about-img1" />
                    <div class="banner-text">
                        <h3>Merino Lambswool Scarf Moss</h3>
                        <p><a href="#">Discover Now</a></p>
                    </div>
                </div>
                <!-- /.banner-outer -->
            </div>
        </div>
        <!-- /.banner-bg -->
    </div>
    <!-- /.banner -->
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
                    <div class="pro-img"> <img src="{{ $featureProduct->getProductDefaultImageUrl() }}" alt="{{ $featureProduct->name }}">
                        <!-- .hover-img -->
                        <div class="hover-img">
                            <ul>
                                <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                <li><a href="{{ url('catalog/product/'.$featureProduct->uri) }}"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <!--<div class="new tage"> <span class="new-text">NEW</span> <span class="pres-text">-15%</span> </div>-->
                        @if($featureProduct->special_price)
                            <div class="discount tage"> <span class="discount-text">SALE</span> </div>
                        @endif
                    <!-- /.hover-img -->
                    </div>
                    <!-- /.pro-img --><a href="{{ url('catalog/product/'.$featureProduct->uri) }}">{{ $featureProduct->name }}</a> <a href="{{ url('catalog/product/'.$featureProduct->uri) }}" class="addtocart">+ Add to cart</a>
                    <div class="price">
                        <span style="{{ $featureProduct->special_price ? 'text-decoration: line-through;' : '' }}">${{ $featureProduct->getDefaultPriceGST() }}</span>
                        @if($featureProduct->special_price)
                            <span style="color: red;text-decoration: none;">${{ $featureProduct->getSpecialPriceGST() }}</span>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-md-12 text-center">
                <a href="#" class="lbtn">load more</a>
            </div>
        </div>

    </div>
    <!-- /.new-arrivals -->
</section>
@endif
<section class="banner-outer banner-large">
    <div class="row" style="margin: 0 2em">
    <!-- .banner-outer -->
    <div class="col-sm-6 col-md-6">
        <!-- .banner-img -->
        <div class="banner-img" style="background-image: url({{ 'images/cutemoew/b9.jpg' }})">
            <div class="banner-text2">
                <h4>Products Essentials</h4>
                <h3>Bottle With Wooden Cork</h3>
                <p>The Newtown sofa range is the first product Jonas Wagell has designed for Zaozuo, but one of the last to be finalized and launched.</p>
                <a href="#"><span>Discover now</span></a>
            </div>

        </div>
        <!-- /.banner-outer -->
    </div>

    <div class="col-sm-6 col-md-6">
        <!-- .banner-img -->
        <div class="banner-img"  style="background-image: url({{ 'images/cutemoew/b10.jpg' }})">
            <div class="banner-text2">
                <h4>Products Essentials</h4>
                <h3>Hauteville Plywood Chair</h3>
                <p>The Newtown sofa range is the first product Jonas Wagell has designed for Zaozuo, but one of the last to be finalized and launched.</p>
                <a href="#"><span>Discover now</span></a>
            </div>
        </div>
        <!-- /.banner-outer -->
    </div>
    <!-- /.banner -->
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
            <div class="col-5">
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
                        <span style="{{ $promotionProduct->special_price ? 'text-decoration: line-through;' : '' }}">${{ $promotionProduct->getDefaultPriceGST() }}</span>
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