<div class="container">
     <div class="galeri-spad text-center mt-5">
         <h2 class="mb-4 fw-bold text-primary">Galeri FutureTrend</h2>
         <div class="row row-cols-md-3 row-cols-1 g-4">
             <?php foreach($galeri as $key => $glr) : ?>
             <div class="col">
                 <div class="card shadow-lg border-0 rounded-4 overflow-hidden">
                     <img src="<?= base_url(). 'assets/uploads/'. $glr->gambar ?>"
                         class="img-fluid rounded-4 gallery-img" alt="Product Image">
                 </div>
             </div>
             <?php endforeach; ?>
         </div>
         <!-- Tombol Show All Gallery -->
         <!-- <div class="d-flex justify-content-center mt-5">
             <a href="">Show all Gallery</a>
         </div> -->
     </div>
 </div>