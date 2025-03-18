 <!-- Hero Section -->
    <div class="hero">
        <div class="container">
            <h1>Pernak-Pernik Cantik untuk Setiap Gaya</h1>
            <p>Temukan aksesoris unik yang membuat harimu lebih bersinar.</p>
            <a href="#" class="btn-shop">Belanja Sekarang</a>
        </div>
    </div>


<!-- out product -->
<div class="container">
    <div class="main-content px-4 text-center">
    
        <div class="container py-5">
            <h2 class="text-center mb-4 text-primary">Our Product</h2>
            <div class="row justify-content-center">
              <?php foreach($barang as $ket => $brg) : ?>
                <div class="col-md-4 mb-3">
                    <div class="border p-3 text-center">
                        <img src="<?= base_url(). 'assets/uploads/'. $brg->gambar ?>" class="img-fluid" alt="Product Image">
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
            <!-- <a href="shop"><button>Shipping</button></a> -->
        </div>
    </div>
</div>

<!-- Customize Product Section -->
<div class="custom-spad p-5 text-center bg-light">
    <div class="row justify-content-center align-items-center">
        <!-- Customize Product Description -->
        <div class="col-md-4 shadow-lg rounded p-4 bg-white">
            <h2 class="text-primary">Customize Product</h2>
            <p class="text-muted">
                Kamu bisa berkreasi sendiri dengan idemu sendiri saat FutureTrend live crafting.<br>
                Buat barang-barang kamu berkilau dengan kreasi mu sendiri.
            </p>
            <button class="btn btn-sm btn-info rounded"><a href="#" class="text-white">Lihat Karya</a></button>
        </div>
        
        <!-- Showcase Image Section -->
        <div class="col-md-8 p-4">
            <h2 class="text-secondary mb-4">Dari Karya Mereka</h2>
            <div class="row g-3 justify-content-center">
                <?php foreach($karya as $key => $kry) : ?>
                    <div class="col-md-2 shadow-sm rounded p-2 bg-white">
                        <img src="<?= base_url(). 'assets/uploads/'. $kry->gambar ?>" class="img-fluid rounded" alt="Product Image">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>

<!-- galeri section -->

<div class="container">
    <div class="galeri-spad text-center mt-5">
        <h2 class="mb-4 fw-bold text-primary">Galeri FutureTrend</h2>
        <div class="row row-cols-md-3 row-cols-1 g-4">
            <?php foreach($galeri as $key => $glr) : ?>
                <div class="col">
                    <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                        <img src="<?= base_url(). 'assets/uploads/'. $glr->gambar ?>" class="img-fluid rounded-4 gallery-img" alt="Product Image">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- Tombol Show All Gallery -->
        <div class="d-flex justify-content-center mt-5">
            <a href="">Show all Gallery</a>
        </div>
    </div>
</div>



    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>