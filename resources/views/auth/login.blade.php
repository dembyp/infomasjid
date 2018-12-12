@extends('layouts.template')

@section('contentWebsite')

<div class="well well-lg">
        <div class="container">
            <div class="row justify-content-center">
            <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                <h3 class="panel-title">{{ __('Login') }}</h3>
                </div>
                    <div class="panel-body">
                        <form  method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group ">
                                <label for="email">{{ __('Alamat E-Mail') }}</label>

                                
                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>

                            <div class="form-group ">
                                <label for="password" >{{ __('Password') }}</label>

                                
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif
                                
                            </div>

                                
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>



                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Lupa Password?') }}
                                        </a>
                                    @endif

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
