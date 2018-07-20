<div class="box content">
    <div class="content-title-line">
        <h3>I Already Have an Account</h3>
    </div>
    <div class="content-detail-wrap">
        <form method="post" action="{{ url('/frontend/customers/login') }}">
            {{ csrf_field() }}
            <input type="hidden" name="the_referer" value="{{ $the_referer }}">
            <div class="field mt">
                <label for="staticEmail" class="label">Email</label>
                <div class="control">
                    <input type="text" class="input w-100" id="staticEmail" name="email" placeholder="email@example.com">
                </div>
                @if ($errors->has('email'))
                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class="field mt">
                <label for="inputPassword" class="label">Password</label>
                <div class="control">
                    <input type="password" class="input w-100" id="inputPassword" name="password" placeholder="Password">
                </div>
                @if ($errors->has('password'))
                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                @endif
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="col-md-6">
                    <a class="customer-btn cancel text-center" href="{{ url('frontend/customers/forget-password') }}">Forget Password</a>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="customer-btn confirm">Log Me In</button>
                </div>
            </div>
        </form>
    </div>
</div>