<?= $this->extend('layout/footer'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRENDING PACKAGE</title>

    <!-- =======box ion====== -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="/package/css/package.css">
</head>

<body>
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

    <div class="container-adv">
        <img src="/package/image projek PKL/package 3 day.jpg">
        <h1 class="desk-adv">Packages</h1>
        <ul class="adv-links">
            <li class="link-adv"><a href="#">home ></a></li>
            <li class="link-adv"><a href="#">category ></a></li>
            <li class="link-adv"><a href="#">package ></a></li>
        </ul>
    </div>

    <!-- =========================================================================     -->

    <div class="pack-desk">
        <h1>Packages 3 Day Tour</h1>
    </div>
    <div class="container-loc">
        <div class="lock">
            <img src="/package/image projek PKL/atv.jpg" alt="">
            <img src="/package/image projek PKL/tubing adventures.jpg" alt="">
            <img src="/package/image projek PKL/bali hai reef cruise.jpg" alt="">
            <img src="/package/image projek PKL/pantai karang sanur.jpg" alt="">
            <img src="/package/image projek PKL/jeep tour.jpg" alt="">
            <img src="/package/image projek PKL/bali sea walker.jpg" alt="">
            <img src="/package/image projek PKL/gwk.jpg" alt="">
            <img src="/package/image projek PKL/kecak.jpeg" alt="">
        </div>
    </div>

    <div class="container-coll">
        <div class="desk">
            <div class="desk-cont">
                <p>
                    After morning pick up from your hotel, first place will be Tegenungan Waterfall. You can admire the lush green surroundings and enjoy the splashing of the waterfalls while taking a dip in the pool below the falls.
                    The next spot is Friends Village. Friends village where we have seen the Bali
                    Coffee plantation, in this plantation you can see and take photos of the animal Luwak which is very popular in Bali for making the best coffee. Then try a presentation about agricultural products where visitors are free to drink coffee on the plantation.
                </p>
            </div>
        </div>

        <div class="container-transport">
            <div class="img-container">
                <img src="/package/image projek PKL/avvanza.png" alt="">
                <img src="/package/image projek PKL/toyota hiace.png" alt="">
                <img src="/package/image projek PKL/toyota.png" alt="">
                <img src="/package/image projek PKL/suzuki.png" alt="">
                <img src="/package/image projek PKL/daihatsu.png" alt="">
                <img src="/package/image projek PKL/innova.png" alt="">
            </div>
        </div>
    </div>

    <div class="desk-all">
        <h1>lihat paket menarik lainnya!</h1>
    </div>

    <div class="content-all">
        <div class="card">
            <div class="content">
                <a href="#"><img src="/package/image projek PKL/package 6 day.jpg" alt=""></a>
                <a href="#">
                    <h2>Packages 6 Day Tour</h2>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="content">
                <a href="#"><img src="/package/image projek PKL/package 5 day.jpg" alt=""></a>
                <a href="#">
                    <h2>Packages 5 Day Tour</h2>
                </a>
            </div>
        </div>
    </div>

    <script src="/package/js/package.js"></script>
    <?= $this->endSection('content'); ?>