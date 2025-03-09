
    <nav class="navbar">
        <div class="logo">Pernak Pernik</div>
        <ul class="nav-links">
            <li><a href="#">Beranda</a></li>
            <li><a href="#">Produk</a></li>
            <li><a href="#">Promo</a></li>
            <li><a href="#">Tentang Kami</a></li>
            <li><a href="#">Kontak</a></li>
        </ul>
        <div class="menu-toggle">
        <i class="fa-solid fa-bars"></i>
        </div>
    </nav>
    
    <script>
        const menuToggle = document.querySelector('.menu-toggle');
        const navLinks = document.querySelector('.nav-links');
        menuToggle.addEventListener('click', () => {
            navLinks.classList.toggle('active');
        });
    </script>
