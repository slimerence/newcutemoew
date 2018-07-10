@extends(_get_frontend_layout_path('catalog'))
@section('topbar')
    <div class="inner-header" style="background: url({{ asset('images/cutemoew/slideshow_1.jpg') }});">
        <h2>Customer</h2>
        <div class="bdr">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>/</li>
                <li><span>Login</span></li>
            </ul>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row" style="margin-top: 20px">
        @if(env('support_wholesale',false))
            <div class="col-md-6">
                @include(_get_frontend_theme_path('customers.elements.customer'))
            </div>
            <div class="col-md-6">
                @include(_get_frontend_theme_path('customers.elements.wholesale'))
            </div>
        @else
            <div class="col-md-3"></div>
            <div class="col-md-6">
                @include(_get_frontend_theme_path('customers.elements.customer'))
            </div>
            <div class="col-md-3"></div>
        @endif
        </div>
    </div>
@endsection