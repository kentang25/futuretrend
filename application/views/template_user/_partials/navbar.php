<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('index') ?>">FutureTrend</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav gap-3">
                <li class="nav-item">
                    <a class="nav-link fw-semibold text-dark px-3 py-2 rounded-pill"
                        href="<?= base_url('futuretrend') ?>">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold text-dark px-3 py-2 rounded-pill"
                        href="<?= base_url('products') ?>">Produk</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark px-3 py-2 rounded-pill" id="navbarDropdown"
                        data-bs-toggle="dropdown" href="#" role="button" araia-expanded="false">Dropdown</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a href="#" class="dropdown-item text-dark px-3 py-2 rounded-pill">Galeri</a></li>
                        <li><a href="#" class="dropdown-item text-dark px-3 py-2 rounded-pill">Karya</a></li>
                        <li><a href="#" class="dropdown-item text-dark px-3 py-2 rounded-pill">Event</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold text-dark px-3 py-2 rounded-pill" href="#">Kontak</a>
                </li>
            </ul>
        </div>

    </div>
</nav>