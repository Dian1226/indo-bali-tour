<?= $this->extend('layout/footer'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Apa Yang Kita Punya!</title>

    <!-- -------carousel------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- ----------icon---------- -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- -----------AOS------- -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <link rel="stylesheet" href="/tours/css/tour.css">
</head>

<body>
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
    <div>
        <h1 class="desk4" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="300"><?= $tour['title']; ?></h1>
        <hr class="garis1" data-aos="zoom-in" data-aos-duration="2000" data-aos-offset="200">
        <h3 class="desk5" data-aos="fade-up" data-aos-duration="2000"><?= $tour['description']; ?></h3>
    </div>

    <div class="see1">
        <img class="see-image" data-aos="fade-right" data-aos-duration="2000" src="/backoffice/tours/<?= $tour['image']; ?>">
        <h3 class="see-desk" data-aos="fade-left" data-aos-duration="2000">
            <?= $tour['content']; ?>
        </h3>
    </div>

    <div data-aos="zoom-in-right" data-aos-duration="1000">
        <h1 class="desk6">saran untuk anda</h1>
    </div>

    <div class="container-sar-pack">
        <?php foreach ($tours as $tour) : ?>
            <a href="/tours/<?= $tour['slug']; ?>" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="150">
                <img class="saran-img" src="/backoffice/tours/<?= $tour['image']; ?>">
                <h6 class="desk-sar-pack"><?= $tour['title']; ?></h6>
                <div class="desk-sar-packet">
                    <?php $i = 5 - $tour['stars'] ?>
                    <div class="stars">
                        <?php for ($j = 0; $j < $tour['stars']; $j++) : ?>
                            <i class="fas fa-star"></i>
                        <?php endfor; ?>
                        <?php $k = 0; ?>
                        <?php for ($k; $k < $i; $k++) : ?>
                            <i class="far fa-star"></i>
                        <?php endfor; ?>
                    </div>
                    <!-- <h6 class="desk-sar-packs"></h6>-->
                    <h6 class="desk-sar-packs"> USD $<?= $tour['price']; ?></h6>
                </div>
            </a>
        <?php endforeach; ?>
        <!-- <a href="#" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
            <img class="saran-img" src="image/image1.jpg">
            <h6 class="desk-sar-pack">pura ulun danu</h6>
            <div class="desk-sar-packet">
                <h6 class="desk-sar-packs">contoh</h6>
                <h6 class="desk-sar-packs">contoh</h6>
            </div>
        </a>
        <a href="#" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" data-aos-offset="250">
            <img class="saran-img" src="image/image1.jpg">
            <h6 class="desk-sar-pack">pura ulun danu</h6>
            <div class="desk-sar-packet">
                <h6 class="desk-sar-packs">contoh</h6>
                <h6 class="desk-sar-packs">contoh</h6>
            </div>
        </a>
    </div>
    <div class="container-sar-pack">
        <a href="#" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="150">
            <img class="saran-img" src="image/image1.jpg">
            <h6 class="desk-sar-pack">pura ulun danu</h6>
            <div class="desk-sar-packet">
                <h6 class="desk-sar-packs">contoh</h6>
                <h6 class="desk-sar-packs">contoh</h6>
            </div>
        </a>
        <a href="#" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
            <img class="saran-img" src="image/image1.jpg">
            <h6 class="desk-sar-pack">pura ulun danu</h6>
            <div class="desk-sar-packet">
                <h6 class="desk-sar-packs">contoh</h6>
                <h6 class="desk-sar-packs">contoh</h6>
            </div>
        </a>
        <a href="#" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" data-aos-offset="250">
            <img class="saran-img" src="image/image1.jpg">
            <h6 class="desk-sar-pack">pura ulun danu</h6>
            <div class="desk-sar-packet">
                <h6 class="desk-sar-packs">contoh</h6>
                <h6 class="desk-sar-packs">contoh</h6>
            </div>
        </a> -->
    </div>


    <div data-aos="zoom-in-right" data-aos-duration="1000">
        <h1 class="desk6">paket khusus untukmu!</h1>
    </div>

    <div class="container-sar-packs">
        <a href="#" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="150">
            <img class="saran-img" src="image/image1.jpg">
            <h6 class="desk-sar-pack">pura ulun danu</h6>
            <div class="desk-sar-packet">
                <h6 class="desk-sar-packs">contoh</h6>
                <h6 class="desk-sar-packs">contoh</h6>
            </div>
        </a>
        <a href="#" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200">
            <img class="saran-img" src="image/image1.jpg">
            <h6 class="desk-sar-pack">pura ulun danu</h6>
            <div class="desk-sar-packet">
                <h6 class="desk-sar-packs">contoh</h6>
                <h6 class="desk-sar-packs">contoh</h6>
            </div>
        </a>
    </div>

    <!-- -------AOS----- -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="/tours/css/tour.js"></script>
    <?= $this->endSection('content'); ?>