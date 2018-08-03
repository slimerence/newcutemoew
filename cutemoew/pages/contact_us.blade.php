@extends(_get_frontend_layout_path('catalog'))
@section('topbar')
    <div class="inner-header" style="background: url({{ asset('images/cutemoew/slideshow_1.jpg') }});">
        <h2>Contact Us</h2>
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
    <section>
        <!-- .contact form -->
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-form">
                        <div class="contact-title">
                            <h2>
                                Contact Info
                            </h2>
                        </div>
                    </div>
                    <div class="col-md-12 contact-info">
                        <ul>
                            <li>
                                <div class="img-icon">
                                    <img src="{{ asset('images/contact-icon1.jpg') }}" alt="phone-icon">
                                </div>
                                <strong>Our Address</strong>
                                <br/> {{ $siteConfig->contact_address }}
                            </li>
                            <li>
                                <div class="img-icon">
                                    <img src="{{ asset('images/contact-icon2.jpg') }}" alt="phone-icon">
                                </div>
                                <strong>Phone</strong>
                                <br/> {{ $siteConfig->contact_phone }}
                            </li>
                            <li>
                                <div class="img-icon">
                                    <img src="{{ asset('images/contact-icon3.jpg') }}" alt="phone-icon">
                                </div>
                                <strong>Email  </strong>
                                <br/> {{ $siteConfig->contact_email }}
                            </li>
                        </ul>
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
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="contact-form">
                        <div class="contact-title">
                            <h2>
                                Contact From
                            </h2>
                        </div>
                        <form action="{{ url('contact-us') }}" method="post" id="commentform" class=contact-us-form">
                            {{ csrf_field() }}
                            <input type="hidden" name="user" value="{{ session('user_data.uuid') }}">
                            <div class="col-md-6">
                                <p>Name <span>*</span></p>
                                <p class="comment-form-author">
                                    <input class="input" name="name" type="text" placeholder="Your Name" id="input-name" required>
                                </p>
                            </div>
                            <div class="col-md-6">
                                <p>Phone <span>*</span></p>
                                <p class="comment-form-email">
                                    <input class="input" name="mobile" type="text" placeholder="Your Phone #" id="input-phone" required>
                                </p>
                            </div>
                            <div class="col-md-12">
                                <p>Email <span>*</span></p>
                                <p class="comment-form-email">
                                    <input class="input" type="email" placeholder="Your Email" name="email" id="input-email" required>
                                </p>
                            </div>
                            <div class="col-md-12">
                                <p>Comments <span>*</span></p>
                                <p class="comment-form-comment">
                                    <textarea rows="6" class="textarea" placeholder="Say Something ..." id="input-message" name="message"></textarea>
                                </p>
                            </div>
                            <div class="col-md-12">
                                <div class="control">
                                    <label class="checkbox">
                                        <input type="checkbox" checked>
                                        I agree to the <a href="{{ url('/term') }}">terms and conditions</a>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="control">
                                    <button class="button is-link" id="submit-contact-us-btn">Submit</button>
                                </div>
                            </div>
                        </form>
                        <div class="notification is-primary" style="display: none;margin-top: 10px;" id="txt-on-success">
                            Your enquiry form has been saved, we will contact you very soon!
                        </div>
                        <div class="notification is-danger" style="display: none;margin-top: 10px;" id="txt-on-fail">
                            System is busy, please try again later!
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.contact form  -->
    </section>
    <section>
        @if($config->embed_map_code)
            <hr>
            {!! $config->embed_map_code !!}
        @endif
    </section>

@endsection