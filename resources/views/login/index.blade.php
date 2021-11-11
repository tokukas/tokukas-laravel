{{-- Use base templates --}}
@extends('layouts.base')


{{-- CUSTOM STYLES SECTION --}}
@section('custom-styles')
    <link rel="preload" href="{{ url('/styles/css/login.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ url('/styles/css/login.css') }}"></noscript>
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

            {{-- Login box --}}
            <div class="login-box mb-3">
                <div class="card">
                    <div class="card-body">
                        <section class="container mb-3 d-flex justify-content-between align-items-center">
                            <h1 class="title">Masuk</h1>
                            <a href="{{ url('/') }}" class="icon-btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Ke Beranda" tabindex="7">
                                <i class="material-icons">close</i>
                            </a>
                        </section>

                        <section class="container">
                            <form action="{{ url('/login') }}" method="post">
                                {{-- <?= csrf_field(); ?> --}}

                                {{-- Email --}}
                                <div class="field">
                                    <label for="email" class="form-label">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <div class="d-flex">
                                                <i class="material-icons">email</i>
                                            </div>
                                        </div>
                                        <input type="email" name="email" id="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" class="form-control" required autofocus tabindex="1">
                                        {{-- <?php if ($validation->hasError('email')) : ?>
                                            <div class="invalid-feedback"><?= $validation->getError('email'); ?></div>
                                        <?php endif; ?> --}}
                                    </div>
                                </div>

                                {{-- Password --}}
                                <div class="field password-field">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <label for="password" class="form-label">Kata Sandi</label>
                                        <a class="forgot-password mb-2" href="#" tabindex="5">Lupa kata sandi?</a>
                                    </div>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <div class="d-flex">
                                                <i class="material-icons">vpn_key</i>
                                            </div>
                                        </div>
                                        <input type="password" name="password" id="password" class="form-control" required tabindex="2">
                                        <button type="button" class="input-group-text btn show-password-toggle">
                                            <i class="material-icons">visibility_off</i>
                                        </button>
                                        {{-- <?php if ($validation->hasError('password')) : ?>
                                            <div class="invalid-feedback"><?= $validation->getError('password'); ?></div>
                                        <?php endif; ?> --}}
                                    </div>
                                </div>

                                {{-- Remember me --}}
                                <div class="field">
                                    <div class="form-check">
                                        <input type="checkbox" name="remember_me" id="rememberMe" class="form-check-input" tabindex="3">
                                        <label for="rememberMe" class="form-check-label">Ingat saya</label>
                                    </div>
                                </div>

                                {{-- Login button --}}
                                <div class="field d-flex">
                                    <button type="submit" class="btn btn-primary flex-fill" tabindex="4"><strong>Masuk</strong></button>
                                </div>
                            </form>
                        </section>
                    </div>
                </div>
            </div>

            {{-- Register box --}}
            <div class="card">
                <div class="card-body align-self-center">
                    <p class="mb-0">Belum punya akun? <a href="{{ url('/register') }}" tabindex="6">Daftar</a></p>
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- CUSTOM SCRIPTS SECTION --}}
@section('custom-scripts')
    <script src="{{ url('/scripts/js/form.js') }}" defer></script>
@endsection
