<?= $this->extend('layout/footer'); ?>

<?= $this->section('content'); ?>
<nav>
    <link rel="stylesheet" href="/footer/css/tourNav.css">
    <div class="navbar">
        <i class='bx bx-menu'></i>
        <div class="logo"><a href="#">TOURS</a></div>
        <div class="nav-links">
            <div class="sidebar-logo">
                <span class="logo-name">TOURS</span>
                <i class='bx bx-x '></i>
            </div>
            <ul class="links">
                <li>
                    <a href="#">RECOMENDATION</a>
                    <i class='bx bxs-chevron-down arrow html-arrow'></i>
                    <ul class="html-submenu sub-menu">
                        <li><a href="/index.php/adventures">Adventures</a></li>
                        <li><a href="/index.php/fun-activities">Fun Activities</a></li>
                        <li><a href="/index.php/transport">Transport Service</a></li>
                        <li><a href="/index.php/airport">Airport Service</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">TRENDING</a>
                    <i class='bx bxs-chevron-down arrow js-arrow'></i>
                    <ul class="js-submenu sub-menu">
                        <li><a href="/index.php/destination">Destination</a></li>
                        <li><a href="/index.php/package">Package</a></li>
                    </ul>
                </li>
                <li><a href="/index.php/promo">PROMO</a></li>
            </ul>
        </div>
    </div>
</nav>
<script src="/footer/js/script.js"></script>
<?= $this->renderSection('content'); ?>

<?= $this->endSection('content'); ?>