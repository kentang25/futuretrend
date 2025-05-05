<div class="container">
    <div class="table resposive d-md-flex">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Metode pembayaran</th>
                    <th>Status pembayaran</th>
                    <th>ID_order</th>
                    <th>Created_at</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 0;
                    foreach($data_transaksi as $key => $d_trans) :
                ?>
                <tr>
                    <td><?= $no +=1 ?></td>
                    <td><?= $d_trans->metode_pembayaran ?></td>
                    <td><?= $d_trans->status_pembayaran ?></td>
                    <td><?= $d_trans->id_order ?></td>
                    <td><?= $d_trans->created_at ?></td>
                </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>