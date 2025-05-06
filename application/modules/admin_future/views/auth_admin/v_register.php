<section class="section-auth">
<div class="login-container">
        <!-- Left Side -->
        <div class="login-left">
            <h2>Admin Futuretrend</h2>
            <!-- <p>Please log in using your personal information to stay connected with us.</p> -->
            <!-- <img src="assets/img/products/model_4.webp"> -->
        </div>

        <!-- Right Side -->
        <div class="login-right">
            <h2>REGISTER</h2>
            <form method="POST" action="<?= base_url('admin/register') ?>">
                <label for="username">Username</label>
                <input type="username" id="username" name="username" placeholder="Enter username" required>

                <label for="password">Password</label>
                <div class="password-wrapper">
                    <input type="password" id="password" name="password" placeholder="Enter password" required>
                    <!-- <span class="toggle-password" onclick="togglePassword()">👁️</span> -->
                </div>

                <!-- <div class="forgot">
                    <a href="#">Forgot password?</a>
                </div> -->

                <button type="submit" class="btn-login">Register</button>
            </form>

            <!-- <p class="signup-text">Don’t have an account? <a href="#">Signup</a></p> -->
        </div>
    </div>

    <!-- <script>
        function togglePassword() {
            const passwordInput = document.getElementById("password");
            if (passwordInput.type === "password") {
                passwordInput.type = "text";
            } else {
                passwordInput.type = "password";
            }
        }
    </script> -->

</section>    