@extends(_get_frontend_layout_path('catalog'))

@section('topbar')
    <div class="inner-header" style="background: url({{ asset('images/cutemoew/slideshow_1.jpg') }});">
        <h2>About Us</h2>
        <div class="bdr">
            <ul>
                <li>Home</li>
                <li>/</li>
                <li><span>About Us</span></li>
            </ul>
        </div>
    </div>
@endsection
@section('content')
    <section class="blog blog-deatils">
        <!-- .blog -->
        <div class="container">
            <div class="col-sm-12 col-md-12 blog-deatails">
                <p class="hank text-center"><a href="{{ url('/') }}">Baby Clothing | Baby Girl Clothes | Baby Boy Clothes | Expert Baby Clothing Expert</a></p>

                <div class="blogimg-cov"><img class="blog-img2" src="{{ asset('images/cutemoew/slider3.jpg') }}" alt="gallery1" /></div>
                <div class="row">
                    <div class="col-lg-2"></div>
                    <div class="col-lg-8 text-center about-us">
                        <p>Cutemoew is an Australian owned Baby Clothing online Shop, we have been in the baby clothing manufacturing industry for more than 6 years. We have our own factory and designer to produce the high quality Baby Girl Clothes, Baby Boy Clothes and Newborn Baby Clothes. If you are looking for fabulous baby clothing  or onesies in Australia, Cutemoew is the BEST place.</p>
                        <h3>Made By BEST Quality Cotton</h3>
                        <p> Please trust us, We know what baby's need and what is mommy's worrying.
                            All the baby clothes are choose the best quality cotton and the softly cloth to make. We use the finest design to protect Baby's delicate skin. Each of items in my shop is made with care.
                        </p>
                        <h3>Every Baby is Worth the BEST</h3>
                        <p> Let every baby girl and baby boy wear comfortable, high quality and childlike clothes that are our goals. Every baby is worth the best. Wish all the best wishes for your family.<br/> - All staff presents respectfully</p>

                    </div>
                    <div class="col-lg-2"></div>
                </div>
                @if(isset($siteConfig))
                    <div class="blog-tags-social row">
                        <div class="blog-social col-md-6"> <strong>Share to friends:</strong>
                            <ul class="social-list">
                                @if(!empty($siteConfig->facebook))
                                    <li class="box"><a href="{{ url($siteConfig->facebook) }}"><i class="fa fa-facebook"></i></a></li>
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