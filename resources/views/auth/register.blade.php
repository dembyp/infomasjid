@extends('layouts.template')

@section('contentWebsite')
<div class="well well-lg">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                <h3 class="panel-title">{{ __('Daftar') }}</h3>
                </div>
                    <div class="panel-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="form-group ">
                                <label for="name" >{{ __('Nama') }}</label>

                           
                                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                    @endif
                               
                            </div>

                            <div class="form-group ">
                                <label for="email">{{ __('Alamat E-Mail') }}</label>

                                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

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

                            <div class="form-group ">
                                <label for="password-confirm" >{{ __('Konfirmasi Password') }}</label>
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                            </div>


                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Daftar') }}
                                    </button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
