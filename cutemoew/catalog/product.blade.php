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
                        <li>Home</li>
                        <li>/</li>
                        <li>Shop </li>
                        <li>/</li>
                        <li><span>Products Simple</span></li>
                    </ul>
                </div>
                <div class="row">
                    <!-- left side -->
                    <div class="col-sm-6 col-md-6">
                        <div class="fotorama" data-allowfullscreen="true" data-nav="thumbs" data-navposition="left" data-arrows="false" data-autoplay="true" data-height="350" data-maxheight="100%">
                            @foreach($product_images as $key=>$media)
                                <img src="{{ asset($media->url) }}">
                            @endforeach
                        </div>
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
                                <h4>{{ $product->name }}&nbsp;
                                    @if($product->manage_stock && $product->stock<$product->min_quantity)
                                        <span class="badge badge-pill badge-danger">Out of Stock</span>
                                    @endif</h4>
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
                            </div>
                            <p class="sku-txt">SKU: {{ $product->sku }}</p>
                            @if($product->special_price)
                                <p class="price-detail">${{ $product->getSpecialPriceGST() }}<span>${{ $product->getDefaultPriceGST() }}</span></p>
                            @else <p>${{ $product->getDefaultPriceGST() }}</p>
                            @endif
                            @include(_get_frontend_theme_path('catalog.elements.sections.short_description'))
                            <div class="size">
                                <p>Size *</p>
                                <div class="select-option">
                                    <select>
                                        <option value="28">28</option>
                                        <option value="32">32</option>
                                        <option value="34">34</option>
                                        <option value="36">36</option>
                                        <option value="Featured Pots">- Please select -</option>
                                    </select>
                                </div>
                            </div>
                            <div class="size">
                                <p>Color *</p>
                                <div class="select-option">
                                    <select>
                                        <option value="Black">Black</option>
                                        <option value="Red">Red</option>
                                        <option value="Featured Pots">- Please select -</option>
                                    </select>
                                </div>
                            </div>
                            <form id="add-to-cart-form">
                                {{ csrf_field() }}
                                <input type="hidden" name="product_id" value="{{ $product->uuid }}">
                                <input type="hidden" name="user_id" value="{{ session('user_data.uuid') }}">

                                @if(count($product_colours)>0)
                                    <div class="options-wrap">
                                        @include(_get_frontend_theme_path('catalog.elements.sections._options.colour'))
                                    </div>
                                @endif

                                @if(count($product_options)>0)
                                    <div class="options-wrap">
                                        @include(_get_frontend_theme_path('catalog.elements.sections.options'))
                                    </div>
                                @endif

                                <div class="add-to-cart-form-wrap">
                                    <div class="field mb-20">
                                        <label class="label">
                                            Quantity
                                            @if(!empty($product->unit_text))
                                                <span class="has-text-danger is-size-7">(Unit: {{ $product->unit_text }})</span>
                                            @endif
                                        </label>
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
                                            Notice: Minimum quantity is <strong>{{ $product->min_quantity }}{{ !empty($product->unit_text)?' '.$product->unit_text:null }}</strong> per order.
                                        </small>
                                    </div>
                                    @if(!$product->manage_stock)
                                        <button v-on:click="addToCartAction($event)" id="add-to-cart-btn" type="submit" class="button is-danger">
                                            <i class="fa fa-cart-plus" aria-hidden="true"></i>&nbsp;Add to Cart
                                        </button>
                                        <a href="{{ url('/frontend/place_order_checkout') }}" id="shortcut-checkout-btn" class="button is-link shortcut-checkout-btn is-invisible">
                                            <i class="fa fa-credit-card" aria-hidden="true"></i>&nbsp;Checkout Now!
                                        </a>
                                    @else
                                        @if($product->stock<$product->min_quantity)
                                            <button id="send-enquiry-for-shopping-btn" type="submit" class="button">Send Enquiry</button>
                                        @else
                                            <button id="add-to-cart-btn" type="submit" class="button add-to-cart-btn">Add to Cart</button>
                                        @endif
                                    @endif
                                </div>
                            </form>
                            <a href="#" class="addtocart2">Add to cart</a>
                            <a href="#" class="hart"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                            <a href="#" class="hart"><i class="fa fa-sliders" aria-hidden="true"></i></a>
                            <div class="tag">
                                <p>Categories: <span>Bags, Blazers, Boots, Jackets, Pants, Shirts.</span></p>
                                <p>Tag: <span>outerwear.</span></p>
                            </div>
                            <div class="share">
                                <ul>
                                    <li>Share:</li>
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
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
                        <div class="col-sm-3 col-md-3">
                            <div class="tab-bg2">
                                <ul>
                                    <li class="active"><a data-toggle="tab" href="#home">Description</a></li>
                                    <li><a data-toggle="tab" href="#menu1">ADDITIONAL INFORMATION</a></li>
                                    <li><a data-toggle="tab" href="#menu2">REVIEWS (4)</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content tab-content2">
                                <div id="home" class="tab-pane fade in active">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when anunknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages..</p>
                                    <ul>
                                        <li>Claritas est etiam processus dynamicus.</li>
                                        <li>Qui sequitur mutationem consuetudium lectorum. </li>
                                        <li>Claritas est etiam processus dynamicus.</li>
                                        <li>Qui sequitur mutationem consuetudium lectorum. </li>
                                        <li>Claritas est etiam processus dynamicus.</li>
                                        <li>Qui sequitur mutationem consuetudium lectorum. </li>
                                    </ul>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release.</p>
                                </div>
                                <div id="menu1" class="tab-pane fade">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when anunknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages..</p>
                                    <ul>
                                        <li>Claritas est etiam processus dynamicus.</li>
                                        <li>Qui sequitur mutationem consuetudium lectorum. </li>
                                        <li>Claritas est etiam processus dynamicus.</li>
                                        <li>Qui sequitur mutationem consuetudium lectorum. </li>
                                        <li>Claritas est etiam processus dynamicus.</li>
                                        <li>Qui sequitur mutationem consuetudium lectorum. </li>
                                    </ul>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release.</p>
                                </div>
                                <div id="menu2" class="tab-pane fade">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when anunknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages..</p>
                                    <ul>
                                        <li>Claritas est etiam processus dynamicus.</li>
                                        <li>Qui sequitur mutationem consuetudium lectorum. </li>
                                        <li>Claritas est etiam processus dynamicus.</li>
                                        <li>Qui sequitur mutationem consuetudium lectorum. </li>
                                        <li>Claritas est etiam processus dynamicus.</li>
                                        <li>Qui sequitur mutationem consuetudium lectorum. </li>
                                    </ul>
                                    <p>It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release.</p>
                                </div>
                            </div>
                        </div>
                        <!-- / right side -->
                    </div>
                </div>
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
                            <div class="pro-img"> <img src="{{ $rp->getProductDefaultImageUrl() }}" alt="{{ $rp->name }}">
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
                            <!-- /.pro-img --><a href="{{ url('catalog/product/'.$rp->uri) }}">{{ $rp->name }}</a> <a href="#" class="addtocart">+ Add to cart</a>
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