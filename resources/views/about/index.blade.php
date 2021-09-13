{{-- Use base template --}}
@extends('layouts.base')


{{-- CUSTOM STYLES SECTION --}}
@section('custom-styles')
    <link rel="preload" href="styles/css/footer.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="styles/css/footer.css"></noscript>

    <link rel="preload" href="styles/css/about.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="styles/css/about.css"></noscript>
@endsection


{{-- CONTENT SECTION --}}
@section('content')
    <div class="jumbotron">
        <img class="brand-logo" src="assets/brand-white.svg" alt="logo" height="100" width="180" role="img">
        <h1 class="brand-name">Toko Buku Bekas</h1>
        <span class="slogan">Yang Bekas Pasti Lebih Murah!</span>
    </div>
    <nav class="menus">
        <ul>
            <li class="sticky"><a href="/">Beranda</a></li>
            <li><a href="login">Masuk</a></li>
            <li><a href="register">Daftar</a></li>
        </ul>
    </nav>
    <section class="">
        <article class="content">
            <h1>Tentang <span translate="no">TOKUKAS</span></h1>
            <hr>
            <p><b><span class="tokukas" title="Toko Buku Bekas" translate="no">TOKUKAS</span></b> adalah sebuah toko yang menawarkan buku-buku bekas dengan harga yang terjangkau.</p>
            <p>Buku-buku bekas yang dijual oleh <b><span class="tokukas" title="Toko Buku Bekas" translate="no">TOKUKAS</span></b> didapat dari hasil kerjasama dengan toko buku yang menjual buku bekas secara langsung di toko (luring/<i>offline</i>), dan juga didapat dengan membeli dari masyarakat yang memiliki buku-buku bekas yang ditawarkan kepada toko secara daring melalui formulir yang disediakan oleh toko.</p>
            <p>Selain dapat diakses dari website, <b><span class="tokukas" title="Toko Buku Bekas" translate="no">TOKUKAS</span></b> juga hadir di beberapa platform <i>e-commerce</i> populer di Indonesia, seperti <a href="https://shopee.co.id/tokukas" rel="noreferrer" target="_blank" translate="no">Shopee</a> dan <a href="https://www.tokopedia.com/tokukas" target="_blank" rel="noreferrer" translate="no">Tokopedia</a>.</p>
        </article>
    </section>

    {{-- import footer --}}
    @include('components.footer')
@endsection


{{-- CUSTOM SCRIPTS SECTION --}}
@section('custom-scripts')

@endsection
