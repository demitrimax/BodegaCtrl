@extends('layouts.app')
@section('body-class','login-page')
@section('page-header') filter-color="orange" @endsection
@section('content')
        <div class="page-header-image" style="background-image:url(nowuikit/img/login.jpg)"></div>
        <div class="container">
            <div class="col-md-4 content-center">
                <div class="card card-login card-plain">
                    <form class="form" method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf
                        <div class="header header-primary text-center">
                            <div class="logo-container">
                                <img src="nowuikit/img/now-logo.png" alt="">
                            </div>
                        </div>
                        <div class="content">
                                    @if ($errors->has('email'))
                                    <div class="alert alert-danger" role="alert">
                                        <div class="container">
                                            <div class="alert-icon">
                                                <i class="now-ui-icons objects_support-17"></i>
                                            </div>
                                            <strong>ERROR!</strong> {{ $errors->first('email') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">
                                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                @endif
                                @if ($errors->has('password'))
                                    <div class="alert alert-danger" role="alert">
                                        <div class="container">
                                            <div class="alert-icon">
                                                <i class="now-ui-icons objects_support-17"></i>
                                            </div>
                                            <strong>ERROR!</strong> {{ $errors->first('password') }}
                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">
                                                    <i class="now-ui-icons ui-1_simple-remove"></i>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                @endif
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons users_circle-08"></i>
                                </span>
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus placeholder="{{ __('E-Mail Address') }}">
                            </div>
                            <div class="input-group form-group-no-border input-lg">
                                <span class="input-group-addon">
                                    <i class="now-ui-icons text_caps-small"></i>
                                </span>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required placeholder="{{ __('Password') }}"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="checkbox">
                                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label>
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="footer text-center">
                            <button type="submit" class="btn btn-primary tn-round btn-lg btn-block">
                                {{ __('Login') }}
                            </button>
                        <div class="pull-left">
                            <h6>
                                <a href="{{ route('password.request') }}" class="link">{{ __('Forgot Your Password?') }}</a>
                            </h6>
                        </div>
                        <div class="pull-right">
                            <h6>
                                <a href="#pablo" class="link">Necesita ayuda?</a>
                            </h6>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection