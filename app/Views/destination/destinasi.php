<?= $this->extend('layout/footer'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRENDING DESTINASION</title>

    <!-- =======box ion====== -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="/destination/css/destinasi.css">
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
                    <li><a href="#">PROMO</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- ========================================================================================================= -->

    <div class="container-adv">
        <img src="/destination/image projek PKL/goa-gajah-bali[1].jpg">
        <h1 class="desk-adv">Destination</h1>
        <ul class="adv-links">
            <li class="link-adv"><a href="#">home ></a></li>
            <li class="link-adv"><a href="#">category ></a></li>
            <li class="link-adv"><a href="#">destinasion ></a></li>
        </ul>
    </div>

    <!-- =====================================================================================================     -->
    <div class="bg-desk">
        <h1 class="desk1">sedang trending!</h1>
    </div>

    <div class="container-destinasi">
        <?php foreach ($tours as $tour) : ?>
            <div class="card">
                <div class="face front">
                    <img src="/backoffice/tours/<?= $tour['image']; ?>" alt="">
                    <h3><?= $tour['title']; ?></h3>
                </div>
                <div class="face back">
                    <h3><?= $tour['title']; ?></h3>
                    <p><?= $tour['description']; ?></p>
                    <div class="detail">
                        <a href="/tours/<?= $tour['slug']; ?>">Details</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <?= $this->endSection('content'); ?>