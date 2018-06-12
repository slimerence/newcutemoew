<!DOCTYPE html>
<html>
@include(_get_frontend_layout_path('frontend._head'))
<body>
<!--  Preloader  -->
<div id="preloader">
    <div id="loading"> </div>
</div>
<header>
    @include(_get_frontend_layout_path('frontend._nav'))
    @yield('topbar')
</header>
@yield('content')
@include(_get_frontend_layout_path('frontend._footer'))
@include(_get_frontend_layout_path('frontend.js'))

</body>
</html>
