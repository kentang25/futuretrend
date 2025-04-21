<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <!-- Brand / Logo -->
        <a class="navbar-brand" href="#">FutureTrend</a>

        <!-- Toggler Button (untuk layar kecil) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav gap-3">
                <li class="nav-item">
                    <a class="nav-link fw-semibold text-dark px-3 py-2 rounded-pill" href="<?= base_url('futuretrend') ?>">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold text-dark px-3 py-2 rounded-pill" href="<?= base_url('products')?>">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold text-dark px-3 py-2 rounded-pill" href="<?= base_url('cart')?>">Cart</a>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-dark px-3 py-2 rounded-pill" id="navbarDropdown"
                        data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Kategori</a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a href="<?= base_url('galeri') ?>" class="dropdown-item">Galeri</a></li>
                        <li><a href="<?= base_url('karya') ?>" class="dropdown-item">Karya</a></li>
                        <li><a href="#" class="dropdown-item">Event</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link fw-semibold text-dark px-3 py-2 rounded-pill" href="<?= base_url('kontak') ?>">Kontak</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

