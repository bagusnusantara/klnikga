@extends('layouts.mains')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Verifikasi Alamat Email Anda') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Link verifikasi email baru telah terkirim ke alamat email Anda.') }}
                        </div>
                    @endif

                    {{ __('Sebelum melanjutkan, silahkan cek email verifikasi Anda.') }}
                    {{ __('Jika Anda tidak menerima email') }}, <a href="{{ route('verification.resend') }}">{{ __('klik di sini untuk mengirim ulang kode verifikasi') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
