<section class="checkout spad">
    <div class="container">
        
        <!-- <div class="row justify-content-center mb-4">
            <div class="col-lg-10 text-center">
                <h6 class="coupon__link">
                    <span class="icon_tag_alt"></span> 
                    <a href="#">Have a coupon?</a> Click here to enter your code.
                </h6>
            </div>
        </div> -->

        <?php foreach($order_items as $key => $o_item) : ?>
            <form action="<?= site_url('futuretrend/pembayaran/transaksi/'. $o_item->id_user) ?>" class="checkout__form">
        <?php endforeach; ?>

            <div class="row mt-5">
                <!-- Billing Details -->
                <div class="col-lg-8 mb-5">
                    <div class="p-4 border rounded shadow-sm">
                        <h5 class="mb-4">Billing Details</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <div class="checkout__form__input">
                                    <label>First Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="checkout__form__input">
                                    <label>Last Name <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>

                            <div class="col-12 mb-3">
                                <div class="checkout__form__input">
                                    <label>Country <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Country">
                                </div>
                            </div>

                            <div class="col-12 mb-3">
                                <div class="checkout__form__input">
                                    <label>Address <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Street Address">
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="checkout__form__input">
                                    <label>Town/City <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Town/City">
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="checkout__form__input">
                                    <label>Country/State <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Country/State">
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="checkout__form__input">
                                    <label>Phone <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="col-md-6 mb-3">
                                <div class="checkout__form__input">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" placeholder="Email Address">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Summary -->
                <div class="col-lg-4">
                    <div class="checkout__order p-4 border rounded shadow-sm">
                        <h5 class="mb-4">Your Order</h5>

                        <div class="checkout__order__product mb-3">
                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between mb-2">
                                    <strong>Product</strong>
                                    <strong>Total</strong>
                                </li>
                                <?php 
                                $total = 0;
                                foreach($order_items as $key => $o_item) :
                                    $subtotal = $o_item->harga * $o_item->jumlah;
                                    $total += $subtotal;
                                ?>
                                <li class="d-flex justify-content-between">
                                    <?= $o_item->nama_barang ?>
                                    <span>Rp. <?= number_format($subtotal, 0, ',', '.') ?></span>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <div class="checkout__order__total mb-4">
                            <ul class="list-unstyled">
                                <li class="d-flex justify-content-between">
                                    Subtotal 
                                    <span>Rp. <?= number_format($total, 0, ',', '.') ?></span>
                                </li>
                                <li class="d-flex justify-content-between">
                                    <strong>Total</strong> 
                                    <strong>Rp. <?= number_format($total, 0, ',', '.') ?></strong>
                                </li>
                            </ul>
                        </div>

                        <button type="submit" class="site-btn btn btn-primary w-100">Place Order</button>
                    </div>
                </div>
            </div>

        </form>
    </div>
</section>
