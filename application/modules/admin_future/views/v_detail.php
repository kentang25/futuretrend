<div class="container">
    
    

        
            <table class="table table-bordered">
                <tr>
                    <th>Nama Barang</th>
                    <th><?= $detail->nama_brg ?></th>
                </tr>
                <tr>
                    <th>Kategori</th>
                    <th><?= $detail->kategori ?></th>
                </tr>
                <tr>
                    <th>News</th>
                    <th><?= $detail->news ?></th>
                </tr>
                <tr>
                    <th>Stok</th>
                    <th><?= $detail->stok ?></th>
                </tr>
                <tr>
                    <th>Harga</th>
                    <th><?= $detail->harga ?></th>
                </tr>
            </table>
            <a href="<?= base_url('admin/data-barang') ?>"><button class="btn btn-sm btn-primary">Back</button></a>
        

    
</div>