@extends(_get_frontend_layout_path('catalog'))
@section('topbar')
    <div class="inner-header" style="background: url({{ asset('images/cutemoew/slideshow_1.jpg') }});">
        <h2>Customer Service</h2>
        <div class="bdr">
            <ul>
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>/</li>
                <li><span>My Profile</span></li>
            </ul>
        </div>
    </div>
@endsection
@section('content')
    <div class="container " id="user-profile-manager-app">
        <h2 class="is-size-4">
            My Profile
        </h2>
        <hr>
        <div class="content">
            <div class="row">
                <div class="col-md-3">
                    <div class="content-title-line">
                        <h4 class="is-size-5 pl-10"><i class="fa fa-check-square"></i>&nbsp;My Shipping Details</h4>
                    </div>
                    <div class="content-title-line">
                        <h4 class="is-size-5 pl-10">
                            <a href="{{ url('frontend/my_orders/'.session('user_data.uuid')) }}">Orders History</a>
                        </h4>
                    </div>
                </div>

                <div class="col-md-9 box">
                    <div class="content-title-line">
                        <h4>Shipping Address</h4>
                    </div>

                    <div class="content-detail-wrap">
                        <div class="content-line">
                            <label><i class="fa fa-map-signs has-text-danger"></i></label>
                            <label class="value">{{ $user->addressText() }}</label>
                        </div>
                    </div>

                    <div class="content-title-line">
                        <h4>My Contact Detail</h4>
                    </div>
                    <div class="content-detail-wrap">
                        <form method="post" action="{{ url('frontend/my_profile') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $user->uuid }}">
                            <div class="form-field">
                                <label for="staticEmail" class="label">Email</label>
                                <div class="control">
                                    <input type="text" readonly class="input w-100" value="{{ $user->email }}">
                                </div>
                            </div>

                            <div class="form-field">
                                <label class="label">Name</label>
                                <div class="control">
                                    <input type="text" name="name" class="input w-100"  placeholder="Full name" value="{{ $user->name }}">
                                </div>
                            </div>

                            <div class="form-field">
                                <label class="label">Phone</label>
                                <div class="control">
                                    <input type="text" name="phone" class="input w-100"  placeholder="Phone" value="{{ $user->phone }}">
                                </div>
                            </div>
                            <div class="form-field">
                                <label class="label">Address</label>
                                <input type="text" name="address" class="input w-100" placeholder="1234 Main St" value="{{ $user->address }}">
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-field">
                                        <label class="label">City</label>
                                        <input type="text" class="input w-100" value="{{ $user->city }}"  name="city">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-field">
                                        <label for="inputZip" class="label">Postcode</label>
                                        <input type="text" name="postcode" class="input w-100" placeholder="Postcode" value="{{ $user->postcode }}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-field">
                                        <label class="label">State</label>
                                        <div class="select">
                                            <select name="state">
                                                @foreach(\App\Models\Utils\OptionTool::States() as $key=>$value)
                                                    <option value="{{ $key }}" {{ $key==$user->state ? 'select' : null }}>{{ $value }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="customer-btn confirm mt">Update Address</button>
                        </form>
                    </div>

                    <div class="is-clearfix"></div>
                    <hr>
                    <div class="content-title-line">
                        <h4>Manage Password</h4>
                    </div>
                    <div class="content-detail-wrap">
                        <form method="post" action="{{ url('frontend/update_password') }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="id" value="{{ $user->uuid }}">

                            <div class="form-field">
                                <label class="label">New Password</label>
                                <div class="control">
                                    <input type="password" class="input w-100" name="new_password"  placeholder="New Password" value="">
                                </div>
                            </div>
                            <div class="form-field">
                                <label class="label">Confirm Password</label>
                                <div class="control">
                                    <input type="password" class="input w-100" name="new_password_confirm" placeholder="Confirm Password" value="">
                                </div>
                            </div>

                            <button type="submit" class="customer-btn confirm mt">Update Password</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection