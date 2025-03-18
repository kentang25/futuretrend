<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<footer class="main-footer text-center py-3 mt-5">
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
