<nav class="navbar navbar-expand-lg navbar-light container-fluid">
    <div class="container-md">
        <a class="navbar-brand" href="/">
            <img src="assets/brand.svg" alt="brand" height="32" width="100%">
            <div class="text-brand">
                <span class="primary" translate="no">TOKUKAS</span>
                <span class="secondary">Toko Buku Bekas</span>
            </div>
        </a>

        <button class="hamburger-menu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <div class="line line1"></div>
            <div class="line line2"></div>
            <div class="line line3"></div>
        </button>

        <div class="collapse navbar-collapse justify-content-between" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 10rem;">
                <li class="nav-item">
                    <a class="nav-link" href="about">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sell">Jual Buku</a>
                </li>
                <li class="nav-item dropdown d-none">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown link
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </li>
            </ul>
            <hr class="my-sm-2">

            @if (empty($loginSession))
                <div class="button-group d-flex gap-2">
                    <a href="login" class="btn btn-outline-primary">Masuk</a>
                    <a href="register" class="btn btn-primary">Daftar</a>
                </div>
            @else
                <div class="dropdown">
                    <button class="dropdown-toggle btn btn-outline-primary my-sm-2" id="profileDropdownMenuLink" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="material-icons" translate="no">account_circle</i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-lg-end profile-menus" aria-labelledby="profileDropdownMenuLink">
                        <li>
                            <a class="dropdown-item btn btn-primary" href="account">
                                <i class="material-icons" translate="no">account_circle</i>
                                <span translate="no"><strong><?= $loginSession['name']; ?></strong></span>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item btn" href="settings">
                                <i class="material-icons" translate="no">settings</i>
                                <span>Pengaturan</span>
                            </a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <button type="button" class="dropdown-item btn btn-danger" data-bs-toggle="modal" data-bs-target="#logoutModal">
                                <i class="material-icons" translate="no">logout</i>
                                <span>Keluar</span>
                            </button>
                        </li>
                    </ul>
                </div>
            @endif
        </div>
    </div>
</nav>

<!-- Logout confirm dialog -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="logoutModalConfirmation" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutModalConfirmation">Konfirmasi Keluar</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <span>Anda yakin ingin keluar?</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                    <i class="material-icons" translate="no">close</i>
                    <span>Batalkan</span>
                </button>
                <a href="logout" class="btn btn-outline-danger">
                    <i class="material-icons" translate="no">logout</i>
                    <span>Keluar</span>
                </a>
            </div>
        </div>
    </div>
</div>
