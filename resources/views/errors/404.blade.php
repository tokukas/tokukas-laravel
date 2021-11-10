{{-- Set the value of the variable required by the template --}}
<?php $title = 'Error 404 | TOKUKAS'; ?>


{{-- Use base template --}}
@extends('layouts.base')


{{-- CUSTOM STYLES SECTION --}}
@section('custom-styles')
    <link rel="preload" href="styles/css/error-404.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="styles/css/error-404.css"></noscript>
@endsection


{{-- CONTENT SECTION --}}
@section('content')
    <picture>
        <source media="(min-width: 1080px)" srcset="assets/brand-square-360w.jpg">
        <source media="(min-width: 640px)" srcset="assets/brand-square-120w.jpg">
        <img class="brand-mark" src="assets/brand-square-60w.jpg" alt="Brand" width="400" height="auto">
    </picture>
    <div class="centering-box">
        <h1>404 | Not Found</h1>
        <p class="text-center">Maaf, halaman yang Anda tuju tidak ditemukan.</p>
        <button id="backBtn" class="btn btn-primary">
            <i class="material-icons">arrow_back</i>
            <span>Kembali</span>
        </button>
    </div>
@endsection


{{-- CUSTOM SCRIPTS SECTION --}}
@section('custom-scripts')
    <script src="scripts/js/error-404.js" defer></script>
@endsection
