{{-- Use base template --}}
@extends('layouts.base')


{{-- CUSTOM STYLES SECTION --}}
@section('custom-styles')
    <link rel="preload" href="{{ url('/styles/css/register.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ url('/styles/css/register.css') }}"></noscript>
@endsection


{{-- CONTENT SECTION --}}
@section('content')
    <div class="centering-box">
        <div class="wrapper">
            {{-- Brand box --}}
            <div class="card mb-3">
                <div class="card-body align-self-center">
                    <a class="brand" href="{{ url('/') }}">
                        <img src="{{ url('/assets/brand.svg') }}" alt="brand" height="28" width="100%">
                        <div class="text-brand">
                            <span class="primary" translate="no">TOKUKAS</span>
                            <span class="secondary">Toko Buku Bekas</span>
                        </div>
                    </a>
                </div>
            </div>

            {{-- Register box --}}
            <div class="register-box mb-3">
                <div class="card">
                    <div class="card-body">
                        {{-- Header --}}
                        <section class="container mb-3 d-flex gap-3 justify-content-start align-items-center">
                            <a href="{{ url('/register') }}" class="icon-btn">
                                <i class="material-icons">arrow_back</i>
                            </a>
                            <h2 class="title">Masukkan Kode Verifikasi</h2>
                        </section>

                        {{-- Code verification field --}}
                        <section class="container mb-3">
                            <p class="text-center">Masukkan kode verifikasi yang sudah kami kirim ke email <strong>{{ $email }}</strong></p>
                            <form action="{{ url('/register/verify') }}" method="post" data-form-loading="true">
                                @csrf
                                {{-- TODO: set verification id --}}
                                {{-- <input type="hidden" name="verification_id" value="<?= $verificator['id']; ?>"> --}}

                                <div class="field">
                                    <label for="verificationCode" class="form-label">Kode Verifikasi</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <label for="verificationCode" class="d-flex">
                                                <i class="material-icons">pin</i>
                                            </label>
                                        </div>
                                        <input type="text" name="verification_code" id="verificationCode" class="form-control" required>
                                    </div>
                                </div>
                                <div class="field d-flex">
                                    <button type="submit" class="btn btn-spinner btn-primary flex-fill">
                                        <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                        <span class="btn-name" data-loading-name="Memverifikasi ..."><strong>Verifikasi</strong></span>
                                    </button>
                                </div>
                            </form>
                            <hr>

                            {{-- Resend code verification --}}
                            <div class="text-center">
                                <p class="m-0">Tidak menerima kode?</p>
                                <span class="form-text">Coba cek di folder spam atau sampah anda, atau</span>

                                <form action="{{ url('/register') }}" method="post" data-form-loading="true">
                                    @csrf

                                    {{-- TODO: set verification email --}}
                                    {{-- <input type="hidden" name="email" value="<?= $verificator['email']; ?>"> --}}

                                    <button type="submit" class="resend-otp btn btn-spinner btn-link btn-sm p-0" disabled>
                                        <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                        <span class="btn-name" data-loading-name="Mengirim ulang kode...">Kirim Ulang Kode</span>
                                    </button>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- CUSTOM SCRIPTS SECTION --}}
@section('custom-scripts')
    <script src="{{ url('/scripts/js/form.js') }}" defer></script>
@endsection
