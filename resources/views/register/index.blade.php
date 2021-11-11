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
                        <section class="container mb-3 d-flex justify-content-between align-items-center">
                            <h1 class="title">Daftar</h1>
                            <a href="{{ url('/') }}" class="icon-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Ke Beranda" tabindex="6">
                                <i class="material-icons">close</i>
                            </a>
                        </section>
                        <section class="container">
                            <form action="{{ url('/register') }}" method="post" data-form-loading="true">
                                @csrf

                                {{-- Email --}}
                                <div class="field">
                                    <label for="email" class="form-label d-inline-flex gap-1 align-items-center">
                                        <span>Email</span>
                                        <i class="material-icons" style="font-size: 1rem; width: 1rem; height: 1rem;" data-bs-toggle="tooltip" data-bs-placement="right" title="Kode verifikasi akan dikirimkan ke email Anda.">information</i>
                                    </label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <div class="d-flex">
                                                <i class="material-icons">email</i>
                                            </div>
                                        </div>
                                        <input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" value="{{-- <?= old('email') ?: '' ?> --}}" required autofocus tabindex="1">
                                        {{-- <?php if ($validation->hasError('email')) : ?>
                                            <div class="invalid-feedback"><?= $validation->getError('email'); ?></div>
                                        <?php endif; ?> --}}
                                    </div>
                                </div>
                                <div class="field agreement">
                                    <p class="form-text text-dark">Dengan mendaftar, anda menyetujui <br> <a href="{{ url('/terms') }}" tabindex="3">Syarat Penggunaan</a> dan <a href="{{ url('/privacy') }}" tabindex="4">Kebijakan Privasi</a>.</p>
                                </div>

                                {{-- Register button --}}
                                <div class="field d-flex">
                                    <button type="submit" class="btn btn-spinner btn-primary flex-fill" tabindex="2">
                                        <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                        <span class="btn-name" data-loading-name="Harap Tunggu ..."><strong>Daftar</strong></span>
                                    </button>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>

            {{-- Login box --}}
            <div class="card">
                <div class="card-body align-self-center">
                    <p class="mb-0">Sudah punya akun? <a href="{{ url('/login') }}" tabindex="5">Masuk</a></p>
                </div>
            </div>
        </div>
    </div>

@endsection


{{-- CUSTOM SCRIPTS SECTION --}}
@section('custom-scripts')
    <script src="{{ url('/scripts/js/form.js') }}" defer></script>
@endsection
