@extends(_get_frontend_layout_path('catalog'))
@section('content')
    <section class="grid-shop blog" id="category-view-manager">
        <!-- .grid-shop -->
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div class="weight">
                        <div class="title">
                            <h2>Product Categories</h2>
                        </div>
                        <div class="panel-group" id="accordion">
                            @foreach($categoriesTree as $item)
                                <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="{{ '#col'.$item->id }}">
                                            {{$item->name}}
                                        </a><i class="indicator fa fa-angle-right pull-right"></i>
                                    </h4>
                                </div>
                                <?php $sub= $item->loadForNav();
                                    $subchild = $sub['subs'];
                                ?>
                                @if(count($sub['subs'])>0 || count($sub['products']) > 0)
                                <div id="{{ 'col'.$item->id }}" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="product-categories">
                                            <ul>
                                            @foreach($subchild as $subnav)
                                            <li><a href="{{ url('category/view/'.$subnav['uri'] )}}">{{$subnav['name']}} ({{count($sub['products'])}})</a></li>
                                            @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>@endif
                            @endforeach

                        </div>
                    </div>
                    <div class="weight">
                        <div class="title">
                            <h2>filter by price</h2>
                        </div>
                        <!-- Bootstrap Pricing Slider by ZsharE -->
                        <div class="button-slider">
                            <div class="btn-group">
                                <div class="btn btn-default">
                                    <input id="bootstrap-slider" type="text" data-slider-min="1" data-slider-max="500" data-slider-step="1" data-slider-value="50" />
                                    <div class="valueLabelblck">Filter</div>
                                    <div class="valueLabel">$<span id="sliderValue">50</span></div>
                                    <div class="valueLabel">$<span id="sliderValue2">500</span></div>
                                </div>
                            </div>
                        </div>
                        <!-- End of Bootstrap Pricing Slider by ZsharE -->
                    </div>

                    @if(isset($promotionProducts) && count($promotionProducts)>0)
                        <div class="weight">
                            <div class="title">
                                <h2>BEST PRODUCTS</h2>
                            </div>
                            <div class="toprating-box">
                                <ul>
                                    @foreach($promotionProducts as $promotionProduct)
                                        <li>
                                            <div class="col-sm-3 col-md-3"><img src="{{ $promotionProduct->getProductDefaultImageUrl() }}" alt="{{ $promotionProduct->name }}"></div>
                                            <div class="col-sm-9 col-md-9">
                                                <div class="pro-text"> <a href="{{ url('catalog/product/'.$promotionProduct->uri) }}">{{ $promotionProduct->name }}</a>
                                                    @if($promotionProduct->special_price)
                                                    <strong>${{ $promotionProduct->getSpecialPriceGST() }}</strong> <span>${{ $promotionProduct->getDefaultPriceGST() }}</span>
                                                        @else <strong>${{ $promotionProduct->getDefaultPriceGST() }}</strong>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                @endif
                </div>
                <div class="col-sm-9 col-md-9">
                    <div class="grid-spr">
                        <div class="col-sm-5 col-md-5"> <span>Showing 1-12 of 30 relults</span> </div>
                        <div class="col-sm-7 col-md-7 text-right">

                            <a href="#" class="list-view-icon"><i class="fa fa-list" aria-hidden="true"></i></a>
                        </div>
                    </div>


                    <div class="row wow zoomIn animated" data-wow-duration=".5s" data-wow-delay=".2s">
                        <?php
                        $productsChunk = $products->chunk(4);
                        // 尝试加载产品的 Brand 的 Logo, 为了减少数据库的查询, 在这里做一个缓存
                        $imageLogoBuffer = [];

                        foreach ($productsChunk as $row) {
                        ?>
                            @foreach($row as $key=>$product)
                                <div class="col-md-4">
                            <!-- .pro-text -->
                            <div class="pro-text">
                                <!-- .pro-img -->
                                <div class="pro-img"> <img src="{{ $product->getProductDefaultImageUrl() }}" alt="{{ $product->name }}">
                                    <!-- .hover-img -->
                                    <div class="hover-img">
                                        <ul>
                                            <li><a href="#"><i class="fa fa-heart-o" aria-hidden="true"></i></a></li>
                                            <li><a href="{{ url('catalog/product/'.$product->uri) }}"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                    <!--<div class="new tage"> <span class="new-text">NEW</span> <span class="pres-text">-15%</span> </div>-->
                                    @if($product->special_price)
                                        <div class="discount tage"> <span class="discount-text">SALE</span> </div>
                                    @endif
                                    <!-- /.hover-img -->
                                </div>
                                <!-- /.pro-img --><a href="{{ url('catalog/product/'.$product->uri) }}">{{ $product->name }}</a> <a href="{{ url('catalog/product/'.$product->uri) }}" class="addtocart">+ Add to cart</a>
                                <div class="price">
                                        <span style="{{ $product->special_price ? 'text-decoration: line-through;' : '' }}">${{ $product->getDefaultPriceGST() }}</span>
                                    @if($product->special_price)
                                        <span style="color: red;text-decoration: none;">${{ $product->getSpecialPriceGST() }}</span>
                                    @endif
                                </div>
                            </div>
                            <!-- /.pro-text -->
                        </div>

                        @endforeach
                        <?php
                        }
                        ?>
                    </div>
                    <div class="pagetions">
                        <!-- .pagetions -->
                        <div class="col-md-6">
                            <ul>
                                <li><a href="#"class="active">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">...</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                        <div class="col-md-6 text-right"> <span>Showing 1-12 of 30 relults</span> </div>
                        <!-- /.pagetions -->

                    </div>
                </div>
            </div>
        </div>
        <!-- /.grid-shop -->
    </section>
@endsection