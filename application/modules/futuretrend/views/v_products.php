<div class="hero">
    <div class="container">
        <h1>Carilah pernak pernik yang membuat barang barang mu bersinar.</h1>
        <p>Selamat berbelanja</p>
    </div>
</div>

<!-- trend section -->
<div class="container">
    <div class="trend spad">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="trend_content">
                    <div class="section-title">
                        <h4>Hot Trend</h4>
                    </div>
                    <?php foreach($hot_trend as $key => $h_trend) : ?>
                    <div class="trend_item">
                        <div class="trend_item_pic">
                            <img src="<?= base_url(). 'assets/uploads/'. $h_trend->gambar ?>" class="img-fluid" alt="Gambar Hot Trend">
                        </div>
                        <div class="trend_item_text">
                            <h4><?= $h_trend->nama_brg ?></h4>
                            <h4 class="harga"><?= $h_trend->harga ?></h4>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="trend_content">
                    <div class="section-title">
                        <h4>Best Seller</h4>
                    </div>
                    <?php foreach($best_seller as $key => $b_seller) :?>
                    <div class="trend_item">
                        <div class="trend_item_pic">
                            <img src="<?= base_url(). 'assets/uploads/'. $b_seller->gambar ?>" class="img-fluid" alt="Gambar Best Seller">
                        </div>
                        <div class="trend_item_text">
                            <h4><?= $b_seller->nama_brg ?></h4>
                            <h4 class="harga"><?= $b_seller->harga ?></h4>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="trend_content">
                    <div class="section-title">
                        <h4>Feature</h4>
                    </div>
                    <?php foreach($feature as $key => $ftr) : ?>
                    <div class="trend_item">
                        <div class="trend_item_pic">
                            <img src="<?= base_url(). 'assets/uploads/'. $ftr->gambar ?>" class="img-fluid" alt="Gambar Feature">
                        </div>
                        <div class="trend_item_text">
                            <h4><?= $ftr->nama_brg ?></h4>
                            <h4 class="harga"><?= $ftr->harga ?></h4>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>