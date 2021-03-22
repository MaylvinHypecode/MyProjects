@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="log-in">
                    <div class="titre-log-in">Please log-in</div>
                    <div class="body-log-in">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group-log-in form-group-log-in-1">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                                <div>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                    <span class="invalid-email" role="alert">
                                        <br>Incorrect login or password
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group-log-in form-group-log-in-2">
                                <label for="password">{{ __('Password') }}</label>

                                <div>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group-log-in form-group-log-in-3">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember me') }}
                                    </label>
                                </div>
                            </div>
                            <div class="form-group-log-in form-group-log-in-4">
                                <button type="submit" class="bouton-log-in">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            <div class="form-group-log-in form-group-log-in-5">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        <I>Forgot Password ?</I>
                                    </a>
                                @endif
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
