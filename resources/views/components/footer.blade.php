<footer class="footer">
    <div class="container-md">
        <div class="row">
            <div class="left-col col-lg-4">
                <section class="mb-3">
                    <a class="brand" href="{{ url('/') }}">
                        <img src="{{ url('/assets/brand-white.svg') }}" alt="brand" height="32" width="100%">
                        <div class="text-brand">
                            <span class="primary" translate="no">TOKUKAS</span>
                            <span class="secondary">Toko Buku Bekas</span>
                        </div>
                    </a>
                </section>
                <section class="mb-4">
                    <a href="https://www.google.com/maps/search/tokukas" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat Lokasi" aria-label="Lihat Lokasi TOKUKAS">
                        <p translate="no">Jalan Pabean Kencana Raya No. 32, Desa Pabean Udik, Kec. Indramayu, Kab. Indramayu, Jawa Barat 45219, Indonesia.</p>
                    </a>
                </section>
                <section class="icon-bar mb-3">
                    <a href="https://www.instagram.com/tokukas_id" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="@tokukas_id" aria-label="Instagram TOKUKAS">
                        <div class="icon-box">
                            <i translate="no" class="fab fa-instagram fa-lg"></i>
                        </div>
                    </a>
                    <a href="https://twitter.com/tokukas_id" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="@tokukas_id" aria-label="Twitter TOKUKAS">
                        <div class="icon-box">
                            <i translate="no" class="fab fa-twitter fa-lg"></i>
                        </div>
                    </a>
                    <a href="mailto:cs@tokukas.com" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="cs@tokukas.com" aria-label="Email ke cs@tokukas.com">
                        <div class="icon-box">
                            <i translate="no" class="fas fa-envelope fa-lg"></i>
                        </div>
                    </a>
                    <a href="https://wa.me/+6285315360808" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="+6285315360808" aria-label="Whatsapp ke +6285315360808">
                        <div class="icon-box">
                            <i translate="no" class="fab fa-whatsapp fa-lg"></i>
                        </div>
                    </a>
                    <a href="https://t.me/tokukas" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="@tokukas" aria-label="Gabung ke Channel Telegram">
                        <div class="icon-box">
                            <i translate="no" class="fab fa-telegram fa-lg"></i>
                        </div>
                    </a>
                    <a href="https://signal.group/#CjQKIBOOTbfokZmxTuuAEuS-y-v0frkY6A3yjxdMJLh9f2OYEhDQWSDd7K8InBIEp7m1kYuY" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Signal TOKUKAS" aria-label="Gabung ke Channel Signal">
                        <div class="icon-box">
                            <img src="{{ url('/assets/signal-app-icon-white.svg') }}" alt="linktree icon" height="22" width="22">
                        </div>
                    </a>
                    <a href="https://linktr.ee/tokukas" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="Linktree TOKUKAS" aria-label="Linktree TOKUKAS">
                        <div class="icon-box">
                            <img src="{{ url('/assets/linktree-icon-white.svg') }}" alt="linktree icon" height="22" width="22">
                        </div>
                    </a>
                </section>
            </div>
            <div class="right-col col-lg-4">
                <section class="mb-3">
                    <p class="h3">Yang Bekas Pasti Lebih Murah!</p>
                </section>
                <section>
                    <div class="footer-menus">
                        <a href="{{ url('/about') }}" class="menu">
                            <i class="material-icons" translate="no">chevron_right</i>
                            <span>Tentang Kami</span>
                        </a>
                        <a href="{{ url('/sell') }}" class="menu">
                            <i class="material-icons" translate="no">chevron_right</i>
                            <span>Jual Buku</span>
                        </a>
                    </div>
                </section>
            </div>
            <div class="col-lg-4">
                <section class="mb-3 text-center">
                    <p><b>Kunjungi Toko Kami di :</b></p>
                </section>
                <section class="d-flex gap-3 justify-content-center mb-3">
                    <a href="https://www.tokopedia.com/tokukas" target="_blank" rel="noreferrer" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat di Tokopedia" translate="no">
                        <picture>
                            <source media="(min-width: 1080px)" srcset="{{ url('/assets/tokopedia-360w.png') }}">
                            <source media="(min-width: 720px)" srcset="{{ url('/assets/tokopedia-120w.png') }}">
                            <img class="shop-icon" src="{{ url('/assets/tokopedia-60w.png') }}" alt="Logo Tokopedia" height="60" width="100%">
                        </picture>
                    </a>
                    <a href="https://shopee.co.id/tokukas" target="_blank" rel="noreferrer" data-bs-toggle="tooltip" data-bs-placement="top" title="Lihat di Shopee" translate="no">
                        <picture>
                            <source media="(min-width: 1080px)" srcset="{{ url('/assets/shopee-360w.png') }}">
                            <source media="(min-width: 640px)" srcset="{{ url('/assets/shopee-120w.png') }}">
                            <img class="shop-icon" src="{{ url('/assets/shopee-60w.png') }}" alt="Logo Shopee" height="60" width="100%">
                        </picture>
                    </a>
                </section>
            </div>
        </div>
    </div>
    <div class="container-fluid bottom">
        <div class="container-md">
            <section>
                <span translate="no">&copy; 2021 - TOKUKAS</span>
            </section>
            <section class="d-inline-flex gap-2 text-center">
                <a href="{{ url('/terms') }}">Syarat Penggunaan</a>
                <div class="vr"></div>
                <a href="{{ url('/privacy') }}">Kebijakan Privasi</a>
            </section>
        </div>
    </div>
</footer>
