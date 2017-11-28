@extends('layouts.master')

@section('loading')
    @include('include.website-loading')
@endsection

@section('header')
    {{--@include('include.header')--}}
@endsection

@section('banner')
    {{--@include('include.banner')--}}
@endsection

@section('content')
    <div id="content-wrap">
        <div class="box-appointment-form">
            <h2>Register New</h2>
            <form id="appointment-form">
                <div class="af-notifications">
                    <div class="af-notifications-cont"></div>
                </div><!-- end Contact Form Submit Message -->
                <div class="form-group">
                    <input type="text" name="afName" id="afName" class="form-control" placeholder="Your Name">
                </div><!-- .form-group end -->
                <div class="form-group">
                    <input type="text" name="afEmail" id="afEmail" class="form-control" placeholder="Your Email">
                </div><!-- .form-group end -->
                <div class="form-group">
                    <input type="text" name="afPhoneNum" id="afPhoneNum" class="form-control"
                           placeholder="Phone Number">
                </div><!-- .form-group end -->
                <div class="form-group">
                    <input type="submit" class="form-control" value="Sign Up">
                    {{--<img src="images/general-elements/cta-arrow-right.png" alt="">
                    <h6>Call Us: +201093515252</h6>--}}
                </div><!-- .form-group end -->
            </form><!-- #appointment-form end -->
            <a class="btn small colorful hover-dark rounded" target="_blank" href="{{route('show_sign_in')}}">
                Sign In
            </a>
        </div><!-- .box-appointment-form end -->
    </div>
@endsection

@section('footer')
    @include('include.footer')
@endsection

{{--
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
--}}
