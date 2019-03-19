@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
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
                </div>
            </div>
        </div>

        <div class="col-md-4 col-sm-12 col-xs-12">
            <h4 class="title mt-4">Available Logins</h4>
            <p>
                <small>
                    <em>Disclaimer: The password is assumed to be same as the username set by the 'creator', and
                    as such may necessarily not be the case.
                    </em>
            </small>
            </p>

            @foreach($users as $user)
                @if($loop->iteration > 1)
                    @break
                @endif

                <ul>
                    <li>Email: <strong>{{ $user->email }}</strong> <br/> Password: <strong>{{ $user->name }}</strong></li>
                </ul>
            
            @endforeach

        </div>

        @foreach($users as $user)
            @if($loop->iteration < 2)
                @continue
            @endif

            <div class="col-md-4 col-sm-6 col-xs-12">
                <ul>
                    <li>Email: <strong>{{ $user->email }}</strong> <br/> Password: <strong>{{ $user->name }}</strong></li>
                </ul>
            </div>  
        @endforeach
    </div>
</div>

@endsection
