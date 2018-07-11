<div class="box content">
    <div class="content-title-line">
        <h3>I am a Wholesaler</h3>
    </div>
    <div class="content-detail-wrap">
        <form method="post" action="{{ url('frontend/customers/login') }}">
            {{ csrf_field() }}
            <input type="hidden" name="the_referer" value="{{ $the_referer }}">
            <div class="field">
                <label class="label">Account #</label>
                <div class="control">
                    <input type="text" class="input w-100" name="email" placeholder="Account #">
                </div>
                @if ($errors->has('email'))
                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class="field">
                <label class="label">Password</label>
                <div class="control">
                    <input type="password" class="input w-100" name="password" placeholder="Password">
                </div>
                @if ($errors->has('password'))
                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                @endif
            </div>
            <div class="row mt">
                <div class="col-md-6">
                    <a class="customer-btn cancel text-center" href="{{ url('frontend/customers/forget-password') }}">Forget Password</a>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="customer-btn confirm">Wholesaler Log In</button>
                </div>
            </div>
            <div class="clearfix"></div>
        </form>
    </div>
</div>