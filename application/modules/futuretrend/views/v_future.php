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
            <h2 class="text-center mb-4">Our Product</h2>
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
    
    <!-- customize product -->
    <div class="custom spad">

    </div>
</div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>