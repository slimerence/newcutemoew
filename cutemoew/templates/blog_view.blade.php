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
    <div class="page-title-wrap">
        <h1 class="is-size-1-desktop is-size-1-mobile">{{ $blog->title }}</h1>
    </div>
    <div class="page-content-wrap mb-20">
            <div class="columns">
                <div class="column">
                    <div class="content">
                        {!! $blog->content !!}
                    </div>
                </div>
            </div>
        <hr>
    </div>
@endsection