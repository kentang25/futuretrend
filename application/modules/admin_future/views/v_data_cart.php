<div class="container">
    <div class="table-resposive d-md-flex">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Jumalah</th>
                    <th>ID User</th>
                    <th>ID Barang</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 0;
                    foreach($data_cart as $key => $d_cart) :
                ?>
                    <tr>
                        <td><?= $no +=1 ?></td>
                        <td><?= $d_cart->nama_barang ?></td>
                        <td>Rp. <?= number_format($d_cart->harga) ?></td>
                        <td><?= $d_cart->jumlah ?></td>
                        <td><?= $d_cart->id_user ?></td>
                        <td><?= $d_cart->id_barang ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>