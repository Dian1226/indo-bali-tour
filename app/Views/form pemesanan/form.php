<?= $this->extend('layout/footer'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM PEMESANAN</title>

    <!-- =======box ion====== -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <link rel="stylesheet" href="/form pemesanan/css/form.css">
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
                        <a>RECOMENDATION</a>
                        <i class='bx bxs-chevron-down arrow html-arrow'></i>
                        <ul class="html-submenu sub-menu">
                            <li><a href="#">Adventures</a></li>
                            <li><a href="#">Fun Activities</a></li>
                            <li><a href="#">Transport Service</a></li>
                            <li><a href="#">Airport Service</a></li>
                        </ul>
                    </li>
                    <li>
                        <a>TRENDING</a>
                        <i class='bx bxs-chevron-down arrow js-arrow'></i>
                        <ul class="js-submenu sub-menu">
                            <li><a href="#">Destinasion</a></li>
                            <li><a href="#">Package</a></li>
                        </ul>
                    </li>
                    <li><a href="#">PROMO</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- ================================================================================================================ -->

    <div class="main-bg">
        <div class="form">
            <div class="form-text">
                <h1><span>Book Now</span></h1>
                <hr>
                <p>Tertarik dengan rekomendasi kami? Yuk Booking Sekarang!</p>
            </div>
            <div class="main-form">
                <form action="index.php" method="get">
                    <div>
                        <span>Your full name</span>
                        <input type="text" name="name" id="name" placeholder="Write your name here..." required>
                    </div>
                    <div>
                        <span>Your email address</span>
                        <input type="email" name="name" id="name" placeholder="Write your email here..." required>
                    </div>
                    <div>
                        <!-- this is the select option -->
                        <span>Package</span>
                        <select name="people" id="people" required>
                            <?php foreach ($packages as $package) : ?>
                                <option value="<?= $package['title']; ?>"><?= $package['title']; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <!-- this is the select option -->
                    </div>
                    <div>
                        <span>Time</span>
                        <input type="text" name="time" id="time" placeholder="Time" required>
                    </div>
                    <div>
                        <span>What is the date?</span>
                        <input type="date" name="name" id="date" placeholder="date">
                    </div>
                    <div>
                        <span>Your phone number</span>
                        <input type="number" name="name" id="number" placeholder="Write your number here..." required>
                    </div>

                    <div id="submit">
                        <input type="submit" value="Submit" id="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="/form pemesanan/js/form.js"></script>
<?= $this->endSection('content'); ?>