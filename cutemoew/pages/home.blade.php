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
            <h2>Trending Products</h2>
            <p>Mirum est notare quam littera gothica quam nunc putamus parum claram!</p>
        </div>

        <div class="row animated wow zoomIn" data-wow-duration=".5s" data-wow-delay=".2s">
            @foreach($featureProducts as $featureProduct)
            <div class="col-md-3">
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
<section class="banner-outer">
    <!-- .banner-outer -->
    <div class="col-sm-6 col-md-6">
        <!-- .banner-img -->
        <div class="banner-img">
            <img src="images/cutemoew/bg-banner.jpg" alt="about-img1" />
            <div class="banner-text2">
                <h4>Products Essentials</h4>
                <h3>Bottle With Wooden Cork</h3>
                <p>The Newtown sofa range is the first product Jonas Wagell has designed for Zaozuo, but one of the last to be finalized and launched.</p>
                <p><a href="#">Buy now / <span>$196.98</span></a></p>
            </div>
        </div>
        <!-- /.banner-outer -->
    </div>

    <div class="col-sm-6 col-md-6">
        <!-- .banner-img -->
        <div class="banner-img">
            <img src="images/cutemoew/bg-banner2.jpg" alt="about-img1" />
            <div class="banner-text2">
                <h4>Products Essentials</h4>
                <h3>Hauteville Plywood Chair</h3>
                <p>The Newtown sofa range is the first product Jonas Wagell has designed for Zaozuo, but one of the last to be finalized and launched.</p>
                <p><a href="#">Buy now / <span>$196.98</span></a></p>
            </div>
        </div>
        <!-- /.banner-outer -->
    </div>
    <!-- /.banner -->
</section>
@if(isset($promotionProducts) && count($promotionProducts)>0)
<section class="new-arrivals">
    <!-- .new-arrivals -->
    <div class="container">
        <div class="tittle text-center">
            <h2>Sale Off</h2>
            <p>Mirum est notare quam littera gothica quam nunc putamus parum claram!</p>
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
<section class="client-icon">
    <div class="container">
        <ul>
            <li>
                <a href="#"><img src="{{ asset('images/client-logo1.png') }}" alt="client-logo1" /></a>
            </li>
            <li>
                <a href="#"><img src="{{ asset('images/client-logo2.png') }}" alt="client-logo2" /></a>
            </li>
            <li>
                <a href="#" class="active"><img src="{{ asset('images/client-logo3.png') }}" alt="client-logo3" /></a>
            </li>
            <li>
                <a href="#"><img src="{{ asset('images/client-logo4.png') }}" alt="client-logo4" /></a>
            </li>
            <li>
                <a href="#"><img src="{{ asset('images/client-logo5.png') }}" alt="client-logo4" /></a>
            </li>
        </ul>
    </div>
</section>

<section class="section-padding">
    <!-- Latest News -->
    <div class="container">
        <div class="tittle text-center">
            <h2>Our Blog Posts</h2>
            <p>Mirum est notare quam littera gothica quam nunc putamus parum claram!</p>
        </div>
        <div class="col-sm-4 col-md-4 wow fadeIn" data-wow-duration=".2s" data-wow-delay=".1s">
            <div class="news-box">
                <div class="news-img">
                    <img src="{{ asset('images/blog-img1.jpg') }}" alt="news-img1" />
                </div>
                <div class="news-text"> <a href="#">Anteposuerit litterarum formas.</a>
                    <p>By <span>Zcubedesign</span> / September 11, 2017</p>
                    <div class="news-text-content"> Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum. </div> <a href="#" class="readbtn">Read More</a> </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 wow fadeIn" data-wow-duration=".2s" data-wow-delay=".1s">
            <div class="news-box">
                <div class="news-img">
                    <img src="{{ asset('images/blog-img2.jpg') }}" alt="news-img1" />
                </div>
                <div class="news-text"> <a href="#">Anteposuerit litterarum formas.</a>
                    <p>By <span>Zcubedesign</span> / September 11, 2017</p>
                    <div class="news-text-content"> Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum. </div> <a href="#" class="readbtn">Read More</a> </div>
            </div>
        </div>
        <div class="col-sm-4 col-md-4 wow fadeIn" data-wow-duration=".4s" data-wow-delay=".3s">
            <div class="news-box">
                <div class="news-img">
                    <img src="{{ asset('images/blog-img3.jpg') }}" alt="news-img1" />
                </div>
                <div class="news-text"> <a href="#">Anteposuerit litterarum formas.</a>
                    <p>By <span>Zcubedesign</span> / September 11, 2017</p>
                    <div class="news-text-content"> Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum. </div> <a href="#" class="readbtn">Read More</a> </div>
            </div>
        </div>
    </div>
    <!-- /Latest News -->
</section>


@endsection