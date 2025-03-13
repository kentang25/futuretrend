<div class="container">

    <?php foreach($edit_data as $key => $e_data) : ?>
        <form method="POST" action="<?= base_url(). 'admin_futuretrend/data_barang/edit/'. $e_data->id_barang?> ">
            <label>Nama Barang</label>
                <input type="text" name="nama_brg" class="form-control mb-3" value="<?= $e_data->nama_brg ?>">
            <label>Kateogri</label>
                <select name="katerogi" class="form-control mb-3">
                    <option><?= $e_data->kategori ?></option>
                    <option>Gelang</option>
                    <option>Kalung</option>
                    <option>Cincin</option>
                    <option>Aksesoris</option>
                </select>
            <label>Harga</label>
                <input type="text" name="harga" class="form-control mb-3" value="<?= $e_data->harga ?>">
            <label>Stok</label>
                <input type="text" name="stok" class="form-control mb-3" value="<?= $e_data->stok ?>">
                
            <button type="submit" class="btn btn-sm btn-primary">Simpan</button>
            <button type="reset" class="btn btn-sm btn-warning">Reset</button>
            <a href="<?= base_url('admin/data-barang') ?>"><button class="btn btn-info btn-sm">Back</button></a>
        </form>
    <?php endforeach; ?>

</div>