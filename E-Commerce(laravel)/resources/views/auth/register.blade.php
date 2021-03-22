@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="register">
                    <div class="titre-register">Register</div>

                    <div class="body-register">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group-register form-group-register-1">
                                <label for="name">{{ __('Name') }}</label>

                                <div>
                                    <input id="name" type="text" placeholder="" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <br><strong>The name has already been taken.</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group-register form-group-register-2">
                                <label for="email">{{ __('Email') }}</label>

                                <div>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <br><strong>The email has already been taken.</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group-register form-group-register-3">
                                <label for="password">{{ __('Password') }}</label>

                                <div>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                       <br><strong>The password must be at least 8 characters.</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group-register form-group-register-4">
                                <label for="password-confirm" >{{ __('Password confirmation') }}</label>

                                <div >
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="form-group-register form-group-register-5">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="bouton-register">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <footer>
        <a href={{url("http://facebook.com")}} class="fa fa-facebook" ></a>
        <a href={{url("http://twitter.com")}} class="fa fa-twitter" ></a>
        <p class="p0">&copy;All rights reserved by BARGUE & LAFAYE</p>
    </footer>
@endsection
