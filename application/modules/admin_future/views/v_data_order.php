<div class="container">
    <div class="table-responsive d-md-flex">
        <table class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Status</th>
                    <th>Subtotal</th>
                    <th>Jumlah</th>
                    <th>ID_user</th>
                    <th>Created_at</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 0;
                    foreach($data_order as $key => $d_order) :
                ?>
                <tr>
                    <td><?= $no =+1 ?></td>
                    <td><?= $d_order->status ?></td>
                    <td><?= $d_order->subtotal ?></td>
                    <td><?= $d_order->jumlah ?></td>
                    <td><?= $d_order->id_user ?></td>
                    <td><?= $d_order->created_at ?></td>
                </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>