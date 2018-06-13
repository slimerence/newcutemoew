<script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/bootstrap-dropdownhover.min.js') }}"></script>
<!-- Plugin JavaScript -->
<script src="{{ asset('js/jquery.easing.min.js') }}"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<!--  Custom Theme JavaScript  -->
<script src="{{ asset('js/custom.js') }}"></script>
<!-- owl carousel -->
<script src="{{ asset('js/owl-carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('js/filter-price.js') }}"></script>
<script src="{{ asset('js/all.js') }}"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js"></script>
@if(isset($vuejs_libs_required))
    @foreach($vuejs_libs_required as $lib)
        @include('frontend.vuejs.'.$lib)
    @endforeach
@endif