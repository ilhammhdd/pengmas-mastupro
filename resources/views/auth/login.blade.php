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
            <h2>Sign In</h2>
            <form id="appointment-form" method="post" action="{{route('sign_in')}}">
                {{csrf_field()}}
                <div class="af-notifications">
                    <div class="af-notifications-cont"></div>
                </div><!-- end Contact Form Submit Message -->
                <div class="form-group">
                    <input type="text" name="username-or-email" id="username-or-email" class="form-control"
                           placeholder="Username or Email">
                </div><!-- .form-group end -->
                <div class="form-group">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                </div><!-- .form-group end -->
                {{--<div class="form-group">--}}
                {{--<input type="text" name="afPhoneNum" id="afPhoneNum" class="form-control"--}}
                {{--placeholder="Phone Number">--}}
                {{--</div><!-- .form-group end -->--}}
                <div class="form-group">
                    <input type="submit" class="form-control" value="Sign In">
                    {{--<img src="images/general-elements/cta-arrow-right.png" alt="">
                    <h6>Call Us: +201093515252</h6>--}}
                </div><!-- .form-group end -->
            </form><!-- #appointment-form end -->
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
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

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
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
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
