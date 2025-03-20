<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!-- Instagram Begin -->
<div class="instagram">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?= base_url() ?>assets/img/galeri/insta_1.jpg">
                    <div class="instagram__text">
                        <i class="fa-brands fa-instagram"></i>
                        <a href="#">@Futuretrend</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?= base_url() ?>assets/img/galeri/insta_2.jpg">
                    <div class="instagram__text">
                        <i class="fa-brands fa-instagram"></i>
                        <a href="#">@Futuretrend</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?= base_url() ?>assets/img/galeri/insta_3.jpg">
                    <div class="instagram__text">
                        <i class="fa-brands fa-instagram"></i>
                        <a href="#">@Futuretrend</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?= base_url() ?>assets/img/galeri/insta_4.jpg">
                    <div class="instagram__text">
                        <i class="fa-brands fa-instagram"></i>
                        <a href="#">@Futuretrend</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?= base_url() ?>assets/img/galeri/insta_5.jpg">
                    <div class="instagram__text">
                        <i class="fa-brands fa-instagram"></i>
                        <a href="#">@Futuretrend</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-2 col-md-4 col-sm-4 p-0">
                <div class="instagram__item set-bg" data-setbg="<?= base_url() ?>assets/img/galeri/insta_6.jpg">
                    <div class="instagram__text">
                        <i class="fa-brands fa-instagram"></i>
                        <a href="#">@Futuretrend</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Instagram End -->
<footer class="main-footer text-center py-3">
    <div class="container">
        <div class="footer-left">
            <span>&copy; 2025 <span class="bullet">•</span> FutureTrend</span>
        </div>
        <div class="footer-right">
            <span>Powered by FutureTrend Team</span>
        </div>
    </div>
</footer>

</div> <!-- Closing main container -->
</div> <!-- Closing wrapper -->

<?php $this->load->view('template_user/_partials/js'); ?>

</body>
</html>



<style>
    .main-footer {
        background: #ffb6c1;
        color: black;
        font-size: 14px;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
    }

    .bullet {
        color: #e74c3c;
        font-weight: bold;
        margin: 0 5px;
    }

    .footer-left, .footer-right {
        display: inline-block;
        padding: 5px 10px;
    }

    .footer-right {
        float: right;
    }
</style>
