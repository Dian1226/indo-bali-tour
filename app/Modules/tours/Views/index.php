<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>TOUR INDO BALI TOUR</title>

    <!-- -----carousel------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- ---------icon----- -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- --------AOS------ -->
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
        <h1 class="desk1" data-aos="fade-right" data-aos-duration="2000" data-aos-offset="300">
            Lihat, apa yang kita punya!
        </h1>
        <hr class="h" data-aos="zoom-in" data-aos-duration="2000" data-aos-offset="200">
    </div>
    <div class="carousel" data-aos="fade-up" data-aos-duration="1000">
        <?php foreach ($tours as $tour) : ?>
            <a class="carousel-item" href="/tours/<?= $tour['slug']; ?>">
                <div class="testi">
                    <div class="img-area">
                        <img src="/backoffice/tours/<?= $tour['image']; ?>">
                    </div>
                </div>
            </a>
        <?php endforeach; ?>
        <div class="dots-container">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
    </div>

    <div data-aos="zoom-in-down" data-aos-duration="1000">
        <h1 class="desk2">promo minggu ini !</h1>
    </div>

    <div class="promo">
        <a href="#">
            <img class="promo-img" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="150" src="/home/img/promo-card.avif">
        </a>
        <a href="#">
            <img class="promo-img" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" src="/home/img/promo-card.avif">
        </a><a href="#">
            <img class="promo-img" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" data-aos-offset="250" src="/home/img/promo-card.avif">
        </a>
    </div>

    <div data-aos="zoom-in-up" data-aos-duration="1000">
        <h1 class="desk3">promo menarik !</h1>
    </div>

    <div data-aos="zoom-in-up" data-aos-duration="1500">
        <a href="/index.php/promo">
            <button class="button-LS">Lihat semua</button>
        </a>
    </div>

    <div class="promo">
        <a href="#">
            <img class="promo-img" data-aos="fade-up" data-aos-duration="1000" data-aos-offset="150" src="/home/img/promo-card.avif">
        </a>
        <a href="#">
            <img class="promo-img" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200" data-aos-offset="200" src="/home/img/promo-card.avif">
        </a>
        <a href="#">
            <img class="promo-img" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400" data-aos-offset="250" src="/home/img/promo-card.avif">
        </a>
    </div>






    <!-- ------carousel------- -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <!-- -------AOS----- -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

    <script src="/tours/js/tour.js"></script>