@extends('layouts.auth')

@section('content')

    <h4 class="title mt-5 text-center">{{ __('Login') }}</h4>
    <hr/>

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-6 offset-md-4">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                @endif
            </div>
        </div>
    </form>

    <p class="mt-5 text-center">
        Don't have an account yet? 
        <a class="btn btn-link" href="{{ route('register') }}">
            {{ __("Sign Up") }}
        </a>
    </p>

    <p class="d-sm-none text-center" class="animate__animated animate__heartBeat animate__infinite">
        <a href="#down">
            <i class="fa fa-long-arrow-down fa-2x"></i>
        </a>
    </p>

@endsection

@section('right')
    <div id="down">
        <h4 class="title mt-4 text-center">Available Logins</h4>
        <p>
            <small>
                <em>Disclaimer: The password is assumed to be same as the username set by the 'creator', and
                as such may necessarily not be the case.
                </em>
        </small>
        </p>

        <div class="container" style="height: 75vh; overflow-y: auto;">
            <div class="row">
                @foreach($users as $user)
                    <div class="col-xs-12 col-md-6">
                        <ul>
                            <li>Email: <strong>{{ $user->email }}</strong> <br/> Password: <strong>{{ $user->name }}</strong></li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>

    </div>

@endsection
