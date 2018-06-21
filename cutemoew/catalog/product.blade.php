@extends(_get_frontend_layout_path('catalog'))
@section('topbar')
    <div class="inner-header" style="background: url({{ asset('images/cutemoew/slideshow_1.jpg') }});">
        <h2>Shop Categories</h2>
        <div class="bdr">
            <ul>
                <li>Home</li>
                <li>/</li>
                <li><span>Product Details</span></li>
            </ul>
        </div>
    </div>
    @endsection
@section('content')
    <section class="grid-shop" id="product-view-manager-app">
        <!-- product-bg -->
        <div class="product-detail-bg">
            <div class="container">
                <div class="bdr">
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>/</li>
                        <li><a href="javascript:history.back()">Shop </a></li>
                        <li>/</li>
                        <li><span>{{ $product->getProductName() }}</span></li>
                    </ul>
                </div>
                <div class="row">
                    <!-- left side -->
                    <div class="col-sm-6 col-md-6">
                        <!-- product gallery -->
                        <div id="home-slider3" class="carousel fadein carousel-fade" data-ride="carousel">
                            <!-- .home-slider -->
                            <div class="carousel-inner">
                                @foreach($product_images as $key=>$media)
                                <div class="item col-md-12 {{ $key==0 ? 'active' : null }}">
                                    <div class="caption zoomimg">
                                        <img src="{{ asset($media->url) }}" alt="{{ $product->name }}">
                                    </div>
                                </div>
                                @endforeach
                                <ul class="carousel-indicators col-md-12">
                                    @foreach($product_images as $key=>$media)
                                    <li data-target="#home-slider3" data-slide-to="{{ $key }}" class="{{ $key==0 ? 'active' : null }}"> <img src="{{ asset($media->url) }}" alt="{{ $product->name }}"></li>
                                    @endforeach
                                </ul>
                            </div>
                            <!-- /.home-slider -->
                        </div>

                        <!-- / product gallery -->
                        @if($product->is_group_product)
                            @include(_get_frontend_theme_path('catalog.elements.sections.grouped_products'))
                        @endif
                    </div>
                    <!-- left side -->
                    <!-- right side -->
                    <div class="col-sm-6 col-md-6">
                        <!-- .pro-text -->
                        <div class="pro-text product-detail">
                            <!-- /.pro-img -->
                                <h4>{{ $product->getProductName() }}&nbsp;
                                    @if($product->manage_stock && $product->stock<$product->min_quantity)
                                        <span class="badge badge-pill badge-danger">Out of Stock</span>
                                    @endif</h4>
                            <!--
                            <div class="star2">
                                <ul>
                                    <li class="red-color"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="red-color"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li class="red-color"><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><i class="fa fa-star" aria-hidden="true"></i></li>
                                    <li><a href="#">10 review(s)</a></li>
                                    <li><a href="#"> Add your review</a></li>
                                </ul>
                            </div>-->
                            <p class="sku-txt">SKU: {{ $product->sku }}</p>
                            @if($product->special_price)
                                <p class="price-detail">${{ $product->getSpecialPriceGST() }}<span>${{ $product->getDefaultPriceGST() }}</span></p>
                            @else <p>${{ $product->getDefaultPriceGST() }}</p>
                            @endif
                            @include(_get_frontend_theme_path('catalog.elements.sections.short_description'))
                            <form id="add-to-cart-form">
                                {{ csrf_field() }}
                                <input type="hidden" name="product_id" value="{{ $product->uuid }}">
                                <input type="hidden" name="user_id" value="{{ session('user_data.uuid') }}">

                                @if(count($product_colours)>0)
                                    @include(_get_frontend_theme_path('catalog.elements.sections._options.colour'))
                                @endif

                                @if(count($product_options)>0)
                                    @include(_get_frontend_theme_path('catalog.elements.sections.options'))
                                @endif
                                <div class="add-to-cart-form-wrap">
                                    <div class="field">
                                        <p>Quantity
                                            @if(!empty($product->unit_text))
                                                <span class="has-text-danger is-size-7">(Unit: {{ $product->unit_text }})</span>
                                            @endif
                                        </p>
                                        <div class="control quantity-input-wrap">
                                            <input
                                                    data-name="quantity"
                                                    name="quantity"
                                                    type="number"
                                                    class="input quantity-input"
                                                    placeholder="Quantity"
                                                    value="{{ $product->min_quantity }}"
                                                    min="{{ $product->min_quantity }}"
                                            >
                                        </div>
                                        <small id="emailHelp" class="form-text text-muted">
                                            Notice: Minimum quantity is <span>{{ $product->min_quantity }}{{ !empty($product->unit_text)?' '.$product->unit_text:null }}</span> per order.
                                        </small>
                                    </div>
                                    @if(!$product->manage_stock)
                                        <button v-on:click="addToCartAction($event)" id="add-to-cart-btn" type="submit" class="addtocart2">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Add to Cart
                                        </button>
                                        <a href="{{ url('/frontend/place_order_checkout') }}" id="shortcut-checkout-btn" class="addtocart2">
                                            <i class="fa fa-credit-card" aria-hidden="true"></i>&nbsp;Checkout Now!
                                        </a>
                                    @else
                                        @if($product->stock<$product->min_quantity)
                                            <button id="send-enquiry-for-shopping-btn" type="submit" class="addtocart2">Send Enquiry</button>
                                        @else
                                            <button id="add-to-cart-btn" type="submit" class="addtocart2">Add to Cart</button>
                                        @endif
                                    @endif
                                </div>
                            <a href="#" class="hart"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            <a href="#" class="hart"><i class="fa fa-sliders" aria-hidden="true"></i></a>
                            </form>
                            <!--tag area-->
                            <div class="tag">
                                <p>Categories: <span>Bags, Blazers, Boots, Jackets, Pants, Shirts.</span></p>
                                <p>Tag: <span>outerwear.</span></p>
                            </div>
                            <div class="share">
                                <ul>
                                    <li>Share:</li>
                                    @if(!empty($siteConfig->facebook))
                                        <li><a href="{{ $siteConfig->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    @endif
                                    @if(!empty($siteConfig->twitter))
                                        <li><a href="{{ $siteConfig->twitter }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    @endif
                                    @if(!empty($siteConfig->linked_in))
                                        <li><a href="{{ $siteConfig->linked_in }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                                    @endif
                                </ul>
                            </div>

                        </div>
                        <!-- /.pro-text -->
                    </div>
                </div>
            </div>

        </div>
        <!-- / product-bg -->
        <!-- .grid-shop -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="tab-bg">
                            <ul>
                                <li class="active"><a data-toggle="tab" href="#home">Description</a></li>
                                @foreach($product_attributes as $key=>$product_attribute)
                                    @if($product_attribute->location == \App\Models\Utils\OptionTool::$LOCATION_ADDITIONAL)
                                        <li><a data-toggle="tab" class="{{ $key==0&&empty($product->description) ? 'active' : null }}" href="#tab-content-{{$key}}">{{ $product_attribute->name }}</a></li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                        <div class="tab-content product-detail-full">
                            @if(!empty($product->description))
                            <div id="home" class="tab-pane fade in active">
                                @if(count($productDescriptionTop) > 0)
                                    @foreach($productDescriptionTop as $b)
                                        <ul class="list-group media-list media-list-stream">
                                            {!! $b->content !!}
                                        </ul>
                                    @endforeach
                                @endif
                                {!! $product->description !!}
                                @if(count($productDescriptionBottom) > 0)
                                    <div class="is-clearfix"></div>
                                    @foreach($productDescriptionBottom as $b)
                                        <ul class="list-group media-list media-list-stream">
                                            {!! $b->content !!}
                                        </ul>
                                    @endforeach
                                @endif
                            </div>
                            @endif
                            @foreach($product_attributes as $key=>$product_attribute)
                                @if($product_attribute->location == \App\Models\Utils\OptionTool::$LOCATION_ADDITIONAL)
                            <div id="tab-content-{{$key}}" class="tab-pane fade {{ $key==0&&empty($product->description) ? 'active' : ' ' }}">
                                <?php
                                $productAttributeValue = $product_attribute->valuesOf($product);
                                // {!! $productAttributeValue->value !!}
                                if(count($productAttributeValue)>0){
                                    echo $productAttributeValue[0]->value;
                                }
                                ?>
                            </div>
                                    @endif
                            @endforeach

                        </div>
                    </div>
                </div>
                <!-- right side -->
            </div>
        </div>
        <!-- /.grid-shop -->
    </section>
    <?php
    $relatedProducts = $product->loadRelatedProducts();
    ?>
    @if(count($relatedProducts))
    <section>
        <!-- .Related Products -->
        <div class="container">
            <div class="tittle text-center">
                <h2>Related Products</h2>
            </div>
            <div class="row">
                <div class="row wow zoomIn  animated" data-wow-duration=".5s" data-wow-delay=".2s">
                    @foreach($relatedProducts as $rp)
                    <div class="col-md-3">
                        <!-- .pro-text -->
                        <div class="pro-text">
                            <!-- .pro-img -->
                            <div class="pro-img"> <img src="{{ $rp->getProductDefaultImageUrl() }}" alt="{{ $rp->getProductName() }}">
                                <!-- .hover-img -->
                                <div class="hover-img">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                        <li><a href="#"><i class="fa fa-sliders" aria-hidden="true"></i></a></li>
                                        <li><a href="{{ url('catalog/product/'.$rp->uri) }}"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /.hover-img -->
                            </div>
                            <!-- /.pro-img --><a href="{{ url('catalog/product/'.$rp->uri) }}">{{ $rp->getProductName() }}</a> <a href="#" class="addtocart">+ Add to cart</a>
                            <div class="price">
                                <span style="{{ $rp->special_price ? 'text-decoration: line-through;' : '' }}">${{ $rp->getDefaultPriceGST() }}</span>
                                @if($product->special_price)
                                    <span style="color: red;text-decoration: none;">${{ $rp->getSpecialPriceGST() }}</span>
                                @endif
                            </div>
                        </div>
                        <!-- /.pro-text -->
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- /.Related Products -->
    </section>
    @endif
@endsection