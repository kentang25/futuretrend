<div class="container px-3 my-5 clearfix">
    <!-- Shopping cart table -->
    <div class="card">
        <div class="card-header">
            <h2>Shopping Cart</h2>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered m-0">
                    <thead>
                        <tr>
                            <!-- Set columns width -->
                            <th class="text-center py-3 px-4" style="min-width: 400px;">Product Name &amp; Details</th>
                            <th class="text-right py-3 px-4" style="width: 100px;">Price</th>
                            <th class="text-center py-3 px-4" style="width: 120px;">Quantity</th>
                            <th class="text-right py-3 px-4" style="width: 100px;">Total</th>
                            <th class="text-center align-middle py-3 px-0" style="width: 40px;"><a href="#"
                                    class="shop-tooltip float-none text-light" title=""
                                    data-original-title="Clear cart"><i class="ino ion-md-trash"></i></a></th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                    $total = 0;
                    foreach($cart as $key => $crt) :
                    $subtotal = $crt->harga * $crt->jumlah;
                    
                ?>
                        <tr>
                            <td class="p-4">
                                <div class="media align-items-center">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                        class="d-block ui-w-40 ui-bordered mr-4" alt="">
                                    <div class="media-body">
                                        <a href="#" class="d-block text-dark"><?= $crt->nama_barang ?></a>
                                    </div>
                                </div>
                            </td>
                            <td class="text-right font-weight-semibold align-middle p-4">
                                Rp.<?= number_format($crt->harga) ?></td>
                            <td class="align-middle p-4" data-id-barang="<?= $crt->id_barang ?>">
                                <input type="number" class="qty-input form-control text-center" value="<?= $crt->jumlah ?>"
                                    data-id-barang="<?= $crt->id_barang ?>" data-harga="<?= $crt->harga ?>">
                            </td>
                            <td class="text-right font-weight-semibold align-middle p-4" id="total-harga-barang<?= $crt->id_barang ?>">
                                Rp.<?= number_format($subtotal) ?></td>
                            <td class="text-center align-middle px-0"><a href="#"
                                    class="shop-tooltip close float-none text-danger" title=""
                                    data-original-title="Remove">×</a></td>
                        </tr>
                        <?php
                    $total += $subtotal;
                    endforeach; 
                  ?>

                    </tbody>
                </table>
            </div>
            <!-- / Shopping cart table -->

            <div class="all-total d-flex flex-wrap justify-content-end align-items-center pb-4">
                <div class="d-flex">
                    <div class="all-list text-right mt-4">
                        <label class="text-muted font-weight-normal m-0">Total price</label>
                        <div class="total-harga text-large"><span class="total-span"><strong>Rp. <?= number_format($total); ?></strong></span></div>
                    </div>
                </div>
            </div>

            <div class="float-end">
                <button type="button" class="btn btn-lg btn-default md-btn-flat mt-2 mr-3">Back to shopping</button>
                <button type="button" class="btn btn-lg btn-primary mt-2">Checkout</button>
            </div>

        </div>
    </div>
</div>

<script>
  $(document).ready(function(){
    $('.qty-input').on('change',function(){
      let inputElement  = $(this);
      let idBarang      = inputElement.data('id-barang');
      let hargaSatuan   = inputElement.data('harga');
      let jumlahBaru    = parseInt(inputElement.val());

      if (isNaN(jumlahBaru) || jumlahBaru < 1) {
        alert('Jumlah tidak valid');
        inputElement.val(1);
        jumlahBaru = 1;
      }

      let totalHarga = hargaSatuan * jumlahBaru;

      let datasend = {
        id_barang : idBarang,
        jumlah    : jumlahBaru,
        harga     : totalHarga
      };

      $.ajax({
          url : '<?= base_url('cart/update-qty') ?>',
          type : 'POST',
          dataType : 'json',
          data : datasend,
          success:function(response){
            if(response.status === 'success'){
              console.log('kuantitas berhasil diperbarui');

              // update subtotal
              $('#total-harga-barang' + idBarang).text('Rp ' + totalHarga.toLocaleString('id-ID'));

              // hitung ulang total keseluruhan
              let totalKeseluruhan = 0;
              $('td[id^="total-harga-barang"]').each(function(){
                let val = parseInt($(this).text().replace(/[^0-9]/g, ''));
                totalKeseluruhan += val;
              });

              $('.total-span').html('<strong>Rp ' + totalKeseluruhan.toLocaleString('id-ID') + '</strong>');
            } else {
              console.error('gagal memperbarui kuantitas');
            }
          },
          error:function(xhr,status,error){
            console.error('Kesalahan saat mengirim data:', error);
          }
      });
    });
  });
</script>
