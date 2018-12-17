@extends('layouts.template')

@section('contentWebsite')

<div class="well well-lg">
    <div class="container">
        <div class="row justify-content-center">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">
                <h3 class="panel-title">{{ __('Silahkan verifikasi Alamat Email Anda') }}</h3>
                </div>
                    <div class="panel-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Link verifikasi telah dikirimkan ke email Anda.') }}
                        </div>
                    @endif

                    {{ __('Silahkan verifikasi melalui link yang dikirimkan melalui email Anda.') }}
                    {{ __('Jika anda tidak menerima Email, silahkan ') }}, <a href="{{ route('verification.resend') }}">{{ __('klik disini untuk mengulang pengiriman link verifikasi') }}</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
