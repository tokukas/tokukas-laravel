{{-- Use main template --}}
@extends('layouts.main')


@section('custom-styles')
    @parent
    <link rel="preload" href="{{ url('/styles/css/home.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="{{ url('/styles/css/home.css') }}"></noscript>
@endsection


@section('main')
    <section class="container-fluid search-container">
        <form action="{{ url('/') }}" method="post" class="search-field">
            <label class="form-label h1 mb-3" for="floatingInput">Cari Buku Anda</label>
            <div class="search-box input-group">
                <input type="text" class="form-control" id="floatingInput" placeholder="Buku...">
                <button type="submit" class="btn btn-outline-light">
                    <i class="material-icons" translate="no">search</i>
                </button>
            </div>
        </form>
    </section>
    <section class="container-md py-5 px-4 text-center">
        <div class="mb-4">
            <p class="h1">Punya Pertanyaan?</p>
            <p class="h4">Temukan Jawabannya di Halaman <abbr data-bs-toggle="tooltip" data-bs-placement="top" title="Pertanyaan yang Sering Diajukan">FAQ</abbr> berikut.</p>
        </div>
        <a href="{{ url('/faq') }}" class="btn btn-primary btn-lg">
            <i class="material-icons" translate="no">quiz</i>
            <span>Lihat FAQ</span>
        </a>
    </section>
@endsection


@section('custom-scripts')

@endsection
