<?= $this->extend('layout/footer'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo</title>
    <link rel="stylesheet" href="/home/css/promo.css">
    <link rel="stylesheet" href="/footer/css/tourNav.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- HEADER -->
    <header>
    <nav>
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
        <div class="background">
            <img src="/home/img/bg-xx.webp" alt="">
            <div class="heading">
                <h1>Promo <br>Menarik!</h1>
                <p>Ciptakan Kreasimu Bersama Kami.</p>
            </div>
        </div>
    </header>
    <!-- HEADER ENDS -->

    <!-- TITLE -->
    <section class="title" id="promo">
        <div class="title-box">
            <h1>PROMO MENARIK</h1>
        </div>
    </section>
    <!-- TITLE ENDS -->

    <!-- PROMO -->
    <section class="PROMO">
        <div id="card-area">
            <div class="wrapper">
                <h3> * Tap for CLAIM!</h3>
                <p>(Berlaku sampai 15 Juli 2024)</p>
                <div class="box-area">
                    <div class="box-f">
                        <a href="index.html"><img src="/home/img/promo-card.avif" alt=""></a>
                    </div>
                    <div class="box-f">
                        <a href="index.html"><img src="/home/img/promo-card.avif" alt=""></a>
                    </div>
                    <div class="box-f">
                        <a href="index.html"><img src="/home/img/promo-card.avif" alt=""></a>
                    </div>
                    <div class="box-f">
                        <a href="index.html"><img src="/home/img/promo-card.avif" alt=""></a>
                    </div>
                    <div class="box-f">
                        <a href="index.html"><img src="/home/img/promo-card.avif" alt=""></a>
                    </div>
                    <div class="box-f">
                        <a href="index.html"><img src="/home/img/promo-card.avif" alt=""></a>
                    </div>
                </div>
            </div>
            <div class="ex-box">
                <div class="ex-text">
                    <h4><i class='bx bx-error-circle'></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis nesciunt est illo neque? Excepturi ad illo placeat eveniet, facilis ipsam.</h4>
                </div>
            </div>
    </section>
    <!-- PROMO ENDS -->
    <?= $this->endSection('content'); ?>