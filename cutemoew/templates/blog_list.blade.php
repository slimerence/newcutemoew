@extends(_get_frontend_layout_path('catalog'))
@section('topbar')
    <div class="inner-header" style="background: url({{ asset('images/cutemoew/slideshow_1.jpg') }});">
        <h2>News & Blog</h2>
        <div class="bdr">
            <ul>
                <li>Home</li>
                <li>/</li>
                <li><span>Contact Info</span></li>
            </ul>
        </div>
    </div>
@endsection
@section('content')
    <section class="blog">
        <!-- .blog -->
        <div class="container">
            <!-- Filter Controls - Simple Mode -->
            <div class="row">
                <!-- A basic setup of simple mode filter controls, all you have to do is use data-filter="all"
                     for an unfiltered gallery and then the values of your categories to filter between them -->
                <div class="col-sm-9 col-md-9">
                    <div class="row">
                        @foreach($posts as $key=>$post)
                        <div class="col-sm-12">
                            <div class="blog-img">
                                <img class="img-responsive" src="{{ asset($post->feature_image) }}" alt="{{ $post->title }}">
                                <div class="blog-img-hover"><a href="{{ url('/page'.$post->uri) }}"><i class="fa fa-paperclip" aria-hidden="true"></i></a></div>
                            </div>
                            <p class="hank"><a href="{{ url('/page'.$post->uri) }}">{!! 'cn'==app()->getLocale() ? $post->title_cn : $post->title !!}</a></p>
                            <p class="time">September 14, 2017</p>
                            <p>{!! $post->teasing !!}</p>
                            <a href="{{ url('/page'.$post->uri) }}" class="readbtn">Read More</a>
                        </div>
                            
                        @endforeach
                    </div>
                </div>
                <div class="col-sm-3 col-md-3">
                    <div class="weight">
                        <div class="title">
                            <h2>Product Categories</h2>
                        </div>
                        <div class="panel-group" id="accordion">
                            @include(_get_frontend_layout_path('frontend.elements.categorymenu'))
                        </div>
                    </div>
                    
                </div>
            </div>

            <div class="pagetions">
                <!-- .pagetions -->
                <div class="col-md-12">
                    {{ $posts->links() }}
                </div>
                <!-- /.pagetions -->
            </div>
        </div>
        <!-- /.blog -->
    </section>
@endsection