@extends('common.layouts.master')
@push('links')
@endpush

@section('main')


<!-- login area -->
<div class="login-area py-120">
    <div class="container">
        <div class="col-md-8 col-lg-7 col-xl-5 mx-auto">
            <div class="login-form">
                <div class="login-header">
                    {{-- <img src="assets/img/logo/logo.png" alt=""> --}}
                    <p>Login with your candidate account</p>
                </div>

                {{ html()->form('POST', route('candidate.login.post'))->attribute('enctype', 'multipart/form-data')->id('storeForm')->open() }}

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    {{ html()->label('Email', 'email') }}
                    {{ html()->email('email')->class('form-control')->placeholder('Email')->attribute('autocomplete', 'email') }}
                    <small class="text-danger">{{ $errors->first('email') }}</small>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    {{ html()->label('Password', 'password') }}
                    {{ html()->password('password')->class('form-control')->placeholder('Password')->attribute('autocomplete', 'new-password') }}
                    <small class="text-danger">{{ $errors->first('password') }}</small>
                </div>

                <div class="d-flex justify-content-between mb-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember_me" id="remember">
                        <label class="form-check-label" for="remember">
                            Remember Me
                        </label>
                    </div>
                    <a href="forgot-password.html" class="forgot-pass">Forgot Password?</a>
                </div>

                {{ html()->button('Login')->type('button')->class('theme-btn')->attribute('onclick = store(this)') }}

                <div class="text-muted text-center">
                    Don't have an Account? <a href="{{ route('candidate.registration.form') }}">Sign up</a>
                </div>

                {{ html()->form()->close() }}




                <div class="login-footer">
                    <div class="login-divider"><span>Or</span></div>
                    <div class="social-login">
                        <a href="#" class="btn-fb"><i class="fab fa-facebook"></i> Login With Facebook</a>
                        <a href="{{ route('candidate.auth.google') }}" class="btn-gl"><i class="fab fa-google"></i> Login With Google</a>
                    </div>
                    <p>Don't have an account? <a href="{{ route('candidate.registration.form') }}">Sign Up.</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login area end -->

@endsection