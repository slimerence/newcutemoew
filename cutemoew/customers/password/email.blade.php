@extends(_get_frontend_layout_path('catalog'))
@section('topbar')
    <div class="inner-header" style="background: url({{ asset('images/cutemoew/slideshow_1.jpg') }});">
        <h2>Customer Service</h2>
        <div class="bdr">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>/</li>
                <li><span>Reset Password</span></li>
            </ul>
        </div>
    </div>
@endsection
@section('content')
    <div class="container">
        <div class="row mt">
            <div class="col-md-3"></div>
            <div class="col-md-6 col-sm-12">
                <div class="box content">
                    <div class="content-title-line">
                        <h3>Reset Password</h3>
                    </div>
                    <div class="content-detail-wrap">
                        @if (session('status'))
                            <div class="notification is-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="post" action="{{ route('password.email') }}">
                            {{ csrf_field() }}
                            <div class="field">
                                <label for="staticEmail" class="label">Email</label>
                                <div class="control">
                                    <input type="text" class="input w-100" id="staticEmail" name="email" value="{{ old('email') }}" placeholder="email@example.com">
                                </div>
                                @if ($errors->has('email'))
                                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <button type="submit" class="customer-btn confirm mt">Send Password Reset Link</button>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
