<footer>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-6">
                <!-- f-weghit -->
                <div class="f-weghit">
                    <img src="{{ asset('images/cutemoew/logo.png') }}" alt="logo">
                    <p>If you are looking for fabulous baby clothing  or onesies in Australia, Cutemoew is the BEST place.</p>
                    <ul>
                        <li><i class="icon-location-pin icons" aria-hidden="true"></i> <strong>Add:</strong> {{ $siteConfig->contact_address }}</li>
                        <li><i class="icon-envelope-letter icons"></i> <strong>Email:</strong> {{ $siteConfig->contact_email }}</li>
                        <li><i class="icon-call-in icons"></i> <strong>Phone Number:</strong> {{ $siteConfig->contact_phone }}</li>
                    </ul>
                </div>
                <!-- /f-weghit -->
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <!-- f-weghit2 -->
                <div class="f-weghit2">
                    <h4>Information</h4>
                    <ul>
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about-us') }}">About Us</a></li>
                        <li><a href="{{ url('/contact-us') }}">Contact </a></li>
                        <li><a href="{{ url('/page/blog') }}">Blog</a></li>
                    </ul>
                </div>
                <!-- /f-weghit2 -->
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3">
                <!-- f-weghit2 -->
                <div class="f-weghit2">
                    <div class="qrcode">
                        <img src="{{ asset('images/qr.jpg') }}" alt="qrcode">
                    </div>
                    <p style="text-align: center;">Scan QR code to get our help!</p>
                </div>
                <!-- /f-weghit2 -->
            </div>

        </div>
    </div>
    <!-- copayright -->
    <div class="copayright cwhite">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6">
                    Copyright &copy; <a href="{{ url('/') }}">Cutemoew</a> all rights reserved. Powered by <a href="https://www.webmelbourne.com/">Webmelbourne</a>
                </div>
                <div class="text-right col-xs-12 col-sm-6 col-md-6">
                    @if(isset($siteConfig))
                    <div class="f-sicon2">
                        <ul>
                            @if(!empty($siteConfig->facebook))
                                <li><a href="{{ $siteConfig->facebook }}"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            @endif
                            @if(!empty($siteConfig->twitter))
                                 <li><a href="{{ $siteConfig->twitter }}"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            @endif
                            @if(!empty($siteConfig->google_plus))
                               <li><a href="{{ $siteConfig->google_plus }}"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            @endif
                            @if(!empty($siteConfig->linked_in))
                                 <li><a href="{{ $siteConfig->linked_in }}"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            @endif
                            @if(!empty($siteConfig->instagram))
                                 <li><a href="{{ $siteConfig->instagram }}"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            @endif
                        </ul>
                    </div>
                        @endif
                </div>
            </div>
        </div>
    </div>
    <!-- /copayright -->
</footer>
<!--  /main  -->
