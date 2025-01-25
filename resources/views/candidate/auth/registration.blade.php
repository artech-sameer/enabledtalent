@extends('common.layouts.master')
@push('links')
@endpush

@section('main')

<div class="login-area py-120">
    <div class="container">
        <div class="col-md-8 col-lg-7 col-xl-5 mx-auto">
            <div class="login-form">
                <div class="login-header">
                    {{-- <img src="{{ asset('assets/img/logo/logo.png') }}" alt=""> --}}
                    <p>Create Candidate Account</p>
                </div>

                {{ html()->form('POST', route('candidate.registration.post'))->attribute('enctype', 'multipart/form-data')->id('storeForm')->open() }}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    {{ html()->label('Name', 'name') }}
                    {{ html()->text('name')->class('form-control')->placeholder('Name')->attribute('autocomplete', 'name') }}
                    <small class="text-danger">{{ $errors->first('name') }}</small>
                </div>

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

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    {{ html()->label('Confirm Password', 'password_confirmation') }}
                    {{ html()->password('password_confirmation')->class('form-control')->placeholder('Password Confirm')->attribute('autocomplete', 'new-password') }}
                    <small class="text-danger">{{ $errors->first('password_confirmation') }}</small>
                </div>

                <div class="form-check form-group">
                    <input class="form-check-input" type="checkbox" value="" id="agree" />
                    <label class="form-check-label" for="agree">
                        I agree with the <a href="#">Terms Of Service.</a>
                    </label>
                </div>

                {{ html()->button('Submit &amp; Register')->type('button')->class('theme-btn')->attribute('onclick', 'store(this)') }}

                {{ html()->form()->close() }}




                <div class="login-footer">
                    <div class="login-divider"><span>Or</span></div>
                    <div class="social-login">
                        <a href="#" class="btn-fb"><i class="fab fa-facebook"></i> Login With Facebook</a>
                        <a href="{{ route('candidate.auth.google') }}" class="btn-gl"><i class="fab fa-google"></i> Login With Google</a>
                    </div>
                    <p>Already have an account? <a href="{{ route('candidate.login.form') }}">Sign In.</a></p>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection