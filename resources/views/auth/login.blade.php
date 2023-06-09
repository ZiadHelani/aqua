@extends('layouts.app')

@section('content')
<style>
    /* Importing fonts from Google */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');

/* Reseting */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    background: #ecf0f3;
}

.wrapper {
    max-width: 350px;
    min-height: 500px;
    margin: 80px auto;
    padding: 40px 30px 30px 30px;
    background-color: #ecf0f3;
    border-radius: 15px;
    box-shadow: 13px 13px 20px #cbced1, -13px -13px 20px #fff;
}

.logo {
    width: 80px;
    margin: auto;
}

.logo img {
    width: 100%;
    height: 80px;
    object-fit: cover;
    border-radius: 50%;
    box-shadow: 0px 0px 3px #5f5f5f,
        0px 0px 0px 5px #ecf0f3,
        8px 8px 15px #a7aaa7,
        -8px -8px 15px #fff;
}

.wrapper .name {
    font-weight: 600;
    font-size: 1.4rem;
    letter-spacing: 1.3px;
    padding-left: 10px;
    color: #555;
}

.wrapper .form-field input {
    width: 100%;
    display: block;
    border: none;
    outline: none;
    background: none;
    font-size: 1.2rem;
    color: #666;
    padding: 10px 15px 10px 10px;
    /* border: 1px solid red; */
}

.wrapper .form-field {
    padding-left: 10px;
    margin-bottom: 20px;
    border-radius: 20px;
    box-shadow: inset 8px 8px 8px #cbced1, inset -8px -8px 8px #fff;
}

.wrapper .form-field .fas {
    color: #555;
}

.wrapper .btn {
    box-shadow: none;
    width: 100%;
    height: 40px;
    background-color: #03A9F4;
    color: #fff;
    border-radius: 25px;
    box-shadow: 3px 3px 3px #b1b1b1,
        -3px -3px 3px #fff;
    letter-spacing: 1.3px;
}

.wrapper .btn:hover {
    background-color: #039BE5;
}

.wrapper a {
    text-decoration: none;
    font-size: 0.8rem;
    color: #03A9F4;
}

.wrapper a:hover {
    color: #039BE5;
}
.form-control:focus {
    box-shadow:none;
}

@media(max-width: 380px) {
    .wrapper {
        margin: 30px 20px;
        padding: 40px 15px 15px 15px;
    }
}
</style>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="wrapper">
                <div class="logo">
                    <img src="{{asset('images/aqua-logo.png')}}" alt="">
                </div>
                <div class="text-center mt-4 name">
                    Aqua Care
                </div>
                <form class="p-3 mt-3" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-field d-flex align-items-center">
                        <span class="far fa-user"></span>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus>
                        @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="form-field d-flex align-items-center">
                        <span class="fas fa-key"></span>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                        @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="row mb-3">
                        <div class="d-flex align-items-start">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <button class="btn mt-3">Login</button>
                </form>
                @if (Route::has('password.request'))
                    <a class="" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>





            <!--<div class="card">-->
            <!--    <div class="card-header">{{ __('Login') }}</div>-->

            <!--    <div class="card-body">-->
            <!--        <form method="POST" action="{{ route('login') }}">-->
            <!--            @csrf-->
            <!--            <div class="row mb-3">-->
            <!--                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>-->

            <!--                <div class="col-md-6">-->
            <!--                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>-->

            <!--                    @error('email')-->
            <!--                        <span class="invalid-feedback" role="alert">-->
            <!--                            <strong>{{ $message }}</strong>-->
            <!--                        </span>-->
            <!--                    @enderror-->
            <!--                </div>-->
            <!--            </div>-->

            <!--            <div class="row mb-3">-->
            <!--                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>-->

            <!--                <div class="col-md-6">-->
            <!--                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">-->

            <!--                    @error('password')-->
            <!--                        <span class="invalid-feedback" role="alert">-->
            <!--                            <strong>{{ $message }}</strong>-->
            <!--                        </span>-->
            <!--                    @enderror-->
            <!--                </div>-->
            <!--            </div>-->

            <!--            <div class="row mb-3">-->
            <!--                <div class="col-md-6 offset-md-4">-->
            <!--                    <div class="form-check">-->
            <!--                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>-->

            <!--                        <label class="form-check-label" for="remember">-->
            <!--                            {{ __('Remember Me') }}-->
            <!--                        </label>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->

            <!--            <div class="row mb-0">-->
            <!--                <div class="col-md-8 offset-md-4">-->
            <!--                    <button type="submit" class="btn btn-primary">-->
            <!--                        {{ __('Login') }}-->
            <!--                    </button>-->

            <!--                    @if (Route::has('password.request'))-->
            <!--                        <a class="btn btn-link" href="{{ route('password.request') }}">-->
            <!--                            {{ __('Forgot Your Password?') }}-->
            <!--                        </a>-->
            <!--                    @endif-->
            <!--                </div>-->
            <!--            </div>-->
            <!--        </form>-->
            <!--    </div>-->
            <!--</div>-->
        </div>
    </div>
</div>
@endsection
