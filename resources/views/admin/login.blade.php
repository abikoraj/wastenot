@extends('admin.layouts.auth')
@section('content')
    <p class="login-box-msg">Sign in to start your session</p>
    <div class="container">

    </div>
    <form method="POST" action="">
        @csrf
        <div class="input-group mb-3">
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" placeholder="Phone Number" required>
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-phone-alt"></span>
                </div>
            </div>
            @error('email')
                <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="input-group mb-3">
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password"
                placeholder="Password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
            </div>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong></span>
            @enderror
        </div>
        <div class="d-flex justify-content-between align-items-center">
            <div class="icheck-primary">
                <input type="checkbox" id="remember"> Remember Me
                {{-- <x-forms.label name="remember_me" :required="false" for="remember" /> --}}
            </div>

            <a href="">Forgot Password?</a>
            {{-- <a href="{{ route('admin.password.request') }}">{{ __('i_forgot_my_password') }}</a> --}}
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-4">
            Sign In &nbsp;
            <i class="fas fa-arrow-right"></i>
        </button>
    </form>
@endsection

