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
                            <h1 class="title">Daftar</h1>
                        </section>

                        <section class="container">
                            <form action="{{ url('/register/new') }}" method="post" data-form-loading="true">
                                @csrf
                                {{-- TODO: set verification id --}}
                                {{-- <input type="hidden" name="id" value="<?= $verificator['id']; ?>"> --}}

                                {{-- Email field --}}
                                <div class="field">
                                    <label for="email" class="form-label">Email</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <label for="email" class="d-flex">
                                                <i class="material-icons">email</i>
                                            </label>
                                        </div>
                                        <input type="email" id="email" class="form-control" value="{{-- <?=$verificator['email'];?> --}}" disabled>
                                        <a href="{{ url('/register') }}" class="btn btn-outline-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Ubah Email">
                                            <i class="material-icons">edit</i>
                                        </a>
                                    </div>
                                </div>

                                {{-- Fullname field --}}
                                <div class="field">
                                    <label for="fullname" class="form-label">Nama Lengkap</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <label for="fullname" class="d-flex">
                                                <i class="material-icons">badge</i>
                                            </label>
                                        </div>
                                        <input type="text" name="fullname" id="fullname" class="form-control @error('fullname') is-invalid @enderror" value="{{ old('fullname') }}" required>
                                        @error('fullname')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Password field --}}
                                <div class="field password-field">
                                    <label for="password" class="form-label">Kata Sandi</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <label for="password" class="d-flex">
                                                <i class="material-icons">lock</i>
                                            </label>
                                        </div>
                                        <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" required>
                                        <button type="button" class="input-group-text btn show-password-toggle">
                                            <i class="material-icons">visibility_off</i>
                                        </button>
                                        @error('password')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Confirm password field --}}
                                <div class="field password-field">
                                    <label for="cpassword" class="form-label">Konfirmasi Kata Sandi</label>
                                    <div class="input-group">
                                        <div class="input-group-text">
                                            <label for="cpassword" class="d-flex">
                                                <i class="material-icons">vpn_key</i>
                                            </label>
                                        </div>
                                        <input type="password" name="cpassword" id="cpassword" class="form-control @error('cpassword') is-invalid @enderror" required>
                                        <button type="button" class="input-group-text btn show-password-toggle">
                                            <i class="material-icons">visibility_off</i>
                                        </button>
                                        @error ('cpassword')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Register button --}}
                                <div class="field d-flex">
                                    <button type="submit" class="btn btn-spinner btn-primary flex-fill">
                                        <span class="spinner-border spinner-border-sm d-none" role="status" aria-hidden="true"></span>
                                        <span class="btn-name" data-loading-name="Mendaftarkan Akun ..."><strong>Daftar</strong></span>
                                    </button>
                                </div>
                            </form>
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
