@extends('layouts.auth')

@section('content')
    <h4 class="title mt-5 text-center">{{ __('Register') }}</h4>
    <hr/>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                @if ($errors->has('name'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>
    </form>

    <p class="mt-5 text-center">
        Already have an account? 
        <a class="btn btn-link" href="{{ route('login') }}">
            {{ __("Sign In") }}
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
        <h4 class="title mt-4 text-center">AceLords Socials</h4>
        
        <div class="container-fluid">
            <div class="row">
                @foreach(acelords_socials() as $item)
                    <div class="col-xs-12 col-md-6">
                        <ul>
                            <li>
                                <p>{{ $item['label'] }} : <strong><a href="{{ $item['link'] }}" target="_blank">{{ $item['link'] }}</a></strong></p>
                            </li>
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
        
        <h4 class="title mt-4 text-center">AceLords Products</h4>
        
        <ul>
            @foreach(acelords_links() as $item)
                <li>
                    <p>{{ $item['label'] }} : <strong><a href="{{ $item['link'] }}" target="_blank">{{ $item['link'] }}</a></strong></p>
                </li>
            @endforeach
        </ul>

    </div>
@endsection
