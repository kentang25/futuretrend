<div class="container py-5">
    <div class="row">
        <!-- Gambar Produk -->
        <div class="col-md-4 d-flex justify-content-center align-items-start">
            <img 
                src="<?= base_url() . 'assets/uploads/' . $detail_products->gambar ?>" 
                class="img-fluid rounded shadow-sm" 
                style="max-height: 250px; object-fit: cover;" 
                alt="Gambar Produk">
        </div>

        <!-- Detail Produk -->
        <div class="col-md-8 mt-4 mt-md-0">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="mb-4">Detail Produk</h4>
                    <table class="table table-bordered mb-4">
                        <tr>
                            <th width="30%">Nama Barang</th>
                            <td><?= $detail_products->nama_brg ?></td>
                        </tr>
                        <tr>
                            <th>Kategori</th>
                            <td><?= $detail_products->kategori ?></td>
                        </tr>
                        <tr>
                            <th>News</th>
                            <td><?= $detail_products->news ?></td>
                        </tr>
                        <tr>
                            <th>Stok</th>
                            <td>
                                <form method="post" action="<?= base_url().'addCart/'.$detail_products->id_barang ?>">
                                    <input 
                                        type="number" 
                                        class="form-control"
                                        id="<?= $detail_products->id_barang ?>"
                                        name="qty"
                                        value="1" 
                                        min="1"
                                        max="<?= $detail_products->stok ?>">
                                </form>
                            </td>
                        </tr>
                        <tr>
                            <th>Harga</th>
                            <td>Rp <?= number_format($detail_products->harga, 0, ',', '.') ?></td>
                        </tr>
                    </table>

                    <!-- Tombol Aksi -->
                    <div class="d-flex justify-content-end gap-2">
                        <a href="<?= base_url('products') ?>" class="btn btn-outline-primary">Back</a>
                        <button type="submit"><a href="<?= base_url('addCart/'.$detail_products->id_barang) ?>" class="btn btn-outline-info">Add to cart</a></button>
                        <a href="<?= base_url('admin/data-barang') ?>" class="btn btn-outline-success">Checkout</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
