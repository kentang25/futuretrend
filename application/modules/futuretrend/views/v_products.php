<div class="hero">
    <div class="container">
        <h1>Carilah pernak pernik yang membuat barang barang mu bersinar.</h1>
        <p>Selamat berbelanja</p>
    </div>
</div>

<!-- trend section -->
<div class="container">
    <div class="trend-spad">
        <div class="row">
            <?php 
            $categories = [
                'Hot Trend' => $hot_trend,
                'Best Seller' => $best_seller,
                'Feature' => $feature
            ];
            foreach ($categories as $title => $items) : ?>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="trend_content">
                    <div class="section-title text-start">
                        <h4><?= $title; ?></h4>
                    </div>
                    <?php foreach ($items as $item) : ?>
                    <div class="trend_item">
                        <div class="trend_item_pic">
                            <a href="<?= base_url('products/detail/'. $item->id_barang)?>"><img src="<?= base_url() . 'assets/uploads/' . $item->gambar ?>"
                                class="img-fluid small-img mt-5 rounded-4 overflow-hidden gallery-img" alt="Gambar <?= $title; ?>"></a>
                        </div>
                        <div class="trend_item_text">
                            <h4><?= $item->nama_brg; ?></h4>
                            <h4 class="harga">Rp. <?= number_format($item->harga, 0, ',', '.'); ?></h4>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<div class="container">
    <div class="kategori-spad border mt-5 mb-5">
        <h4 class="title text-center">Products</h4>
        <ul class="list-unstyled text-center" id="kategori-list">
            <li class="list-inline-item active"><a href="#" data-kategori="all">All Kategori</a></li>
            <li class="list-inline-item"><a href="#" data-kategori="gelang">Gelang</a></li>
            <li class="list-inline-item"><a href="#" data-kategori="kalung">Kalung</a></li>
            <li class="list-inline-item"><a href="#" data-kategori="cincin">Cincin</a></li>
            <li class="list-inline-item"><a href="#" data-kategori="aksesoris">Aksesoris</a></li>
        </ul>

        <div class="row" id="produk-container">
            <?php foreach($all_produk as $key => $all_p) : ?>
                <div class="col-md-4 produk-item" data-kategori="<?= strtolower($all_p->kategori); ?>">
                    <a href="<?= base_url('products/detail/'. $all_p->id_barang); ?>"><img src="<?= base_url(). 'assets/uploads/'. $all_p->gambar ?>" class="img-fluid rounded-4 overflow-hidden gallery-img" alt="<?= $key ?>"></a>
                    <div class="kategori_item_text">
                        <h4><?= $all_p->nama_brg; ?></h4>
                        <h4 class="harga">Rp. <?= number_format($all_p->harga, 0, ',', '.'); ?></h4>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Tampilkan semua produk saat pertama kali dimuat
        $(".produk-item").fadeIn();

        $("#kategori-list li a").click(function (e) {
            e.preventDefault(); // Mencegah reload halaman
            let kategori = $(this).data("kategori"); // Ambil kategori dari atribut data-kategori
            
            // Hapus class active dari semua kategori dan tambahkan ke kategori yang diklik
            $("#kategori-list li").removeClass("active");
            $(this).parent().addClass("active");

            // Filter produk sesuai kategori
            if (kategori === "all") {
                $(".produk-item").fadeIn();
            } else {
                $(".produk-item").hide(); // Sembunyikan semua produk dulu
                $('.produk-item[data-kategori="' + kategori + '"]').fadeIn(); // Tampilkan yang sesuai kategori
            }
        });
    });
</script>
