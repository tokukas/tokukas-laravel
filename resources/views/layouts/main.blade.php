{{-- Use the base template --}}
@extends('layouts.base')

@section('custom-styles')
    <link rel="preload" href="styles/css/navbar.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="styles/css/navbar.css"></noscript>
    <link rel="preload" href="styles/css/footer.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="styles/css/footer.css"></noscript>
@endsection


@section('content')
    <header>
        {{-- top navbar --}}
        @include('components.navbar')
    </header>

    <main id="top">
        {{-- MAIN SECTION --}}
        @yield('main')
    </main>

    {{-- footer --}}
    @include('components.footer')
@endsection


@section('custom-scripts')
    <script src="scripts/js/navbar.js" defer></script>
@endsection
