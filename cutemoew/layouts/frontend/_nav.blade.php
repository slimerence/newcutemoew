<!--  nav  -->
<nav id="mainNav" class="navbar navbar-inverse navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
            <a class="navbar-brand" href="#"><img src="{{ asset('images/cutemoew/LOGO.png') }}" alt="logo"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeIn fadeInLeft fadeInUp fadeInRight">
            <ul class="nav navbar-nav">
                <li> <a href="index.html" class="dropdown-toggle"><span>Home</span></a>
                </li>
                <!--<li class="dropdown"> <a href="list.html" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><span>Menu A</span></a>
                    <div class="dropdown-menu dropdownhover-bottom mega-menu" role="menu">
                        <div class="col-sm-8 col-md-8">
                            <ul>
                                <li><strong>summer</strong></li>
                                <li><a href="#">tops and bottom sets</a></li>
                                <li><a href="#">tops & T-shirt</a></li>
                                <li><a href="#">shorts & bottom</a></li>
                                <li><a href="#">sun protection</a></li>
                                <li><a href="#">Sidebar</a></li>
                                <li><a href="#">Pagination</a></li>
                                <li><a href="#">Shop Infinity</a></li>
                            </ul>
                            <ul>
                                <li><strong>winter</strong></li>
                                <li><a href="#">tops and bottom sets</a></li>
                                <li><a href="#">tops & T-shirt</a></li>
                                <li><a href="#">shorts & bottom</a></li>
                                <li><a href="#">sun protection</a></li>
                                <li><a href="#">Simple Product</a></li>
                                <li><a href="#">Variable Product</a></li>
                                <li><a href="#">External Product</a></li>
                            </ul>
                            <ul>
                                <li><strong>spring&autumn</strong></li>
                                <li><a href="#">Collection</a></li>
                                <li><a href="#">tops and bottom sets</a></li>
                                <li><a href="#">tops & T-shirt</a></li>
                                <li><a href="#">shorts & bottom</a></li>
                                <li><a href="#">sun protection</a></li>
                                <li><a href="#">Checkout</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-4"> <img src="{{ asset('images/cutemoew/products/cata5.png') }}" alt="Hover-menu-img"> </div>
                    </div>
                </li>-->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                     <span>Menu B</span>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        @foreach ($categoriesTree as $item)
                            <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="{{ url('category/view/'.$item->uri) }}">{{$item ->name}}</a>
                                <?php $sub= $item->loadForNav();
                                    $subchild = $sub['subs'];
                                ?>
                                @if(count($sub['subs'])>0 || count($sub['products']) > 0)
                                <ul class="dropdown-menu">
                                    @foreach($subchild as $subnav)
                                        <li><a class="dropdown-item" href="{{ url('category/view/'.$subnav['uri'] )}}">{{$subnav['name']}}</a></li>
                                    @endforeach
                                </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                </li>
                <li> <a href="#" class="dropdown-toggle"><span>About</span></a> </li>
                <li> <a href="contact.html"><span>Blog</span></a> </li>
                <li> <a href="contact.html"><span>Contact</span></a> </li>
            </ul>
            <!-- /.navbar-collapse -->
        </div>
    </div>
</nav>
<!--  /nav  -->