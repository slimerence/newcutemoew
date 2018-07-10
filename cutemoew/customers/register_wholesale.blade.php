@extends(_get_frontend_layout_path('catalog'))
@section('topbar')
    <div class="inner-header" style="background: url({{ asset('images/cutemoew/slideshow_1.jpg') }});">
        <h2>Wholesale</h2>
        <div class="bdr">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>/</li>
                <li><span>Register</span></li>
            </ul>
        </div>
    </div>
@endsection
@section('content')
    <div class="container register-form">
        <div class="box mt">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="float-left">Create New Wholesaler Account</h3>
                </div>
                <div class="col-md-12">
                    <a class="cancel" href="{{ url('frontend/customers/register') }}" style="color: #004a80;">
                        <i class="fa fa-object-group"></i>&nbsp;Or Become a Customer
                    </a>
                </div>
            </div>
        </div>
        <div class="box">
            <form method="post" action="{{ url('frontend/wholesalers/register') }}" id="general-customer-register-form">
                {{ csrf_field() }}
                <input type="hidden" name="the_referer" value="{{ $the_referer }}">
                <div class="row">
                    <div class="field col-md-6">
                        <label for="inputName" class="label">Name&nbsp;<span class="has-text-danger">*</span></label>
                        <input required type="text" class="input {{ $errors->has('name') ? 'is-danger' : '' }}" id="inputName" value="{{ old('name') }}" name="name" placeholder="Full Name">
                        @if ($errors->has('name'))
                            <p class="help is-danger">
                                <span>{{ $errors->first('name') }}</span>
                            </p>
                        @endif
                    </div>
                    <div class="field col-md-6">
                        <label for="inputEmail" class="label">Email&nbsp;<span class="has-text-danger">*</span></label>
                        <input required type="email" class="input {{ $errors->has('email') ? 'is-danger' : '' }}"  value="{{ old('email') }}" id="inputEmail" name="email" placeholder="Email">
                        <div class="invalid-feedback has-text-danger" id="inputEmailErrorMessage"></div>
                        @if ($errors->has('email'))
                            <p class="help is-danger">
                                <span>{{ $errors->first('email') }}</span>
                            </p>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 {{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="inputPassword" class="label">Password&nbsp;<span class="has-text-danger">*</span></label>
                        <input required type="password" class="input {{ $errors->has('password') ? 'is-danger' : '' }}" value="{{ old('password') }}" id="inputPassword" name="password" placeholder="Password">
                        @if ($errors->has('password'))
                            <p class="help is-danger">
                                <span>{{ $errors->first('password') }}</span>
                            </p>
                        @endif
                    </div>
                    <div class="col-md-6">
                        <label for="inputPassword2" class="label">Re-enter Password&nbsp;<span class="has-text-danger">*</span></label>
                        <input required type="password" class="input" id="inputPassword2" name="password_confirmation" placeholder="To Confirm Your Password">
                    </div>
                </div>
                <hr>


                <div class="row">
                    <div class="col-md-12">
                        <div class="field {{ $errors->has('wholesale.company_name') ? ' has-error' : '' }}">
                            <label for="inputcompany_name" class="label">Business Name&nbsp;<span class="has-text-danger">*</span></label>
                            <input required type="text" class="input {{ $errors->has('wholesale.company_name') ? 'is-danger' : '' }}" id="inputcompany_name" value="{{ old('wholesale.company_name') }}" name="wholesale[company_name]" placeholder="Your Business Name: Required">
                            @if ($errors->has('wholesale.company_name'))
                                <p class="help is-danger">
                                    <span>{{ $errors->first('wholesale.company_name') }}</span>
                                </p>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4 {{ $errors->has('wholesale.accountant_name') ? ' has-error' : '' }}">
                        <label for="input_accountant_name" class="label">Accountant Name&nbsp;<span class="has-text-danger">*</span></label>
                        <input required type="text" class="input {{ $errors->has('wholesale.accountant_name') ? 'is-danger' : '' }}" id="input_accountant_name" value="{{ old('wholesale.accountant_name') }}" name="wholesale[accountant_name]" placeholder="Accountant Name: required">
                        @if ($errors->has('wholesale.accountant_name'))
                            <p class="help is-danger">
                                <span>{{ $errors->first('wholesale.accountant_name') }}</span>
                            </p>
                        @endif
                    </div>
                    <div class="col-md-4 {{ $errors->has('wholesale.accountant_email') ? ' has-error' : '' }}">
                        <label for="input_accountant_email" class="label">Accountant Email&nbsp;<span class="has-text-danger">*</span></label>
                        <input required type="email" class="input {{ $errors->has('wholesale.accountant_email') ? 'is-danger' : '' }}" value="{{ old('wholesale.accountant_email') }}" name="wholesale[accountant_email]" id="input_accountant_email" placeholder="Accountant Email: required">
                        @if ($errors->has('wholesale.accountant_email'))
                            <p class="help is-danger">
                                <span>{{ $errors->first('wholesale.accountant_email') }}</span>
                            </p>
                        @endif
                    </div>
                    <div class="col-md-4 {{ $errors->has('wholesale.accountant_phone') ? ' has-error' : '' }}">
                        <label for="input_accountant_phone" class="label">Accountant Phone&nbsp;<span class="has-text-danger">*</span></label>
                        <input required type="text" class="input {{ $errors->has('wholesale.accountant_phone') ? 'is-danger' : '' }}" value="{{ old('wholesale.accountant_phone') }}" name="wholesale[accountant_phone]" id="input_accountant_phone" placeholder="Accountant Phone: required">
                        @if ($errors->has('wholesale.accountant_phone'))
                            <p class="help is-danger">
                                <span>{{ $errors->first('wholesale.accountant_phone') }}</span>
                            </p>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 {{ $errors->has('ABN') ? ' has-error' : '' }}">
                        <label for="input_ABN" class="label">ABN</label>
                        <input type="text" class="input {{ $errors->has('ABN') ? 'is-danger' : '' }}" id="input_ABN" value="{{ old('ABN') }}" name="wholesale[ABN]" placeholder="ABN: Optional">
                        @if ($errors->has('ABN'))
                            <p class="help is-danger">
                                <span>{{ $errors->first('ABN') }}</span>
                            </p>
                        @endif
                    </div>
                    <div class="col-md-6 {{ $errors->has('ACN') ? ' has-error' : '' }}">
                        <label for="input_ACN" class="label">ACN</label>
                        <input required type="text" class="input {{ $errors->has('accountant_email') ? 'is-danger' : '' }}" value="{{ old('ACN') }}" name="wholesale[ACN]" id="input_ACN" placeholder="ACN: Optional">
                        @if ($errors->has('ACN'))
                            <p class="help is-danger">
                                <span>{{ $errors->first('ACN') }}</span>
                            </p>
                        @endif
                    </div>
                </div>

                <hr>

                <div class="field {{ $errors->has('address') ? ' has-error' : '' }}">
                    <div class="control">
                        <label for="inputAddress" class="label">Address for Shipment&nbsp;<span class="has-text-danger">*</span></label>
                        <input required type="text" class="input {{ $errors->has('address') ? 'is-danger' : '' }}" id="inputAddress" value="{{ old('address') }}" name="address" placeholder="Apartment, studio, or floor, 1234 Main St">
                        @if ($errors->has('address'))
                            <p class="help is-danger">
                                <span>{{ $errors->first('address') }}</span>
                            </p>
                        @endif
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-3 col-sm-6 {{ $errors->has('city') ? ' has-error' : '' }}">
                        <label for="inputCity" class="label">Suburb&nbsp;<span class="has-text-danger">*</span></label>
                        <input required type="text" class="input {{ $errors->has('city') ? 'is-danger' : '' }}" id="inputCity" value="{{ old('city') }}" name="city" placeholder="Suburb / City">
                        @if ($errors->has('city'))
                            <p class="help is-danger">
                                <span>{{ $errors->first('city') }}</span>
                            </p>
                        @endif
                    </div>
                    <div class="col-md-3 col-sm-6 {{ $errors->has('state') ? ' has-error' : '' }}">
                        <label for="inputState" class="label">State&nbsp;<span class="has-text-danger">*</span></label>
                        <input required type="text" class="input {{ $errors->has('state') ? 'is-danger' : '' }}" value="{{ old('state') }}" name="state" id="inputState" placeholder="State">
                        @if ($errors->has('state'))
                            <p class="help is-danger">
                                <span>{{ $errors->first('state') }}</span>
                            </p>
                        @endif
                    </div>
                    <div class="col-md-3 col-sm-6 {{ $errors->has('postcode') ? ' has-error' : '' }}">
                        <label for="inputZip" class="label">Postcode&nbsp;<span class="has-text-danger">*</span></label>
                        <input required type="text" class="input {{ $errors->has('postcode') ? 'is-danger' : '' }}" value="{{ old('postcode') }}" name="postcode" id="inputZip" placeholder="Postcode">
                        @if ($errors->has('postcode'))
                            <p class="help is-danger">
                                <span>{{ $errors->first('postcode') }}</span>
                            </p>
                        @endif
                    </div>
                    <div class="col-md-3 col-sm-6 {{ $errors->has('country') ? ' has-error' : '' }}">
                        <label for="inputCountry" class="label">Country</label>
                        <div class="select">
                            <select name="country">
                                <option value="Australia">Australia</option>
                                <option value="China">China</option>
                            </select>
                        </div>

                        @if ($errors->has('country'))
                            <p class="help is-danger">
                                <span>{{ $errors->first('country') }}</span>
                            </p>
                        @endif
                    </div>
                </div>
                <div class="field">
                    <div class="control">
                        <label class="checkbox">
                            <input type="checkbox" checked name="subscribe_me" style="width: auto;"> Subscribe {{ str_replace('_',' ',env('APP_NAME','Laravel')) }} Newsletter
                        </label>
                    </div>
                </div>

                <button type="submit" id="general-customer-register-btn" class="customer-btn confirm">
                    <i class="fa fa-spinner fa-spin fa-fw is-invisible" id="checkingEmailIcon"></i>Submit to Register&nbsp;&nbsp;&nbsp;&nbsp;
                </button>
            </form>
            <div class="content-line">
                <br>
                <p class="value text-center">Once you register, it means you agree with our <a target="_blank" href="{{ url('/frontend/content/view/terms') }}">Terms & Conditions</a></p>
            </div>
        </div>
    </div>

@endsection