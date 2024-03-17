<?= $this->extend('layout/tourNav'); ?>

<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADVENTURES</title>

    <!-- -------icon----- -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- --------AOS------ -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    <!-- --------CSS------ -->
    <link rel="stylesheet" href="/adventure/css/adventure.css">
</head>

<body>
    <!-- <nav>
        <div class="navbar">
            <i class='bx bx-menu'></i>
            <div class="logo"><a href="tours.html">Tours</a></div>
            <div class="nav-links">
                <div class="sidebar-logo">
                    <span class="logo_name">Tours</span>
                    <i class='bx bx-x'></i>
                </div>
                <ul class="links">
                    <li>
                        <a href="#">RECOMENDATIONS</a>
                        <i class='bx bxs-chevron-down arrow htmlcss-arrow'></i>
                        <ul class="htmlCss-sub-menu sub-menu">
                            <li><a href="#">Adventures</a></li>
                            <li><a href="#">Fun Activities</a></li>
                            <li><a href="#">Transport Service</a></li>
                            <li><a href="#">Airport Transfer</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">TRENDING</a>
                        <i class='bx bxs-chevron-down arrow js-arrow'></i>
                        <ul class="js-sub-menu sub-menu">
                            <li><a href="#">Destinations</a></li>
                            <li><a href="#">Package</a></li>
                        </ul>
                    </li>
                    <li><a href="#">PROMO</a></li>
                </ul>
            </div>
        </div>
    </nav> -->
    <div class="container-adv">
        <img src="/adventure/image projek PKL/UBUD.jpeg">
        <h1 class="desk-adv">Adventures</h1>
        <ul class="adv-links">
            <li class="link-adv"><a href="#">home ></a></li>
            <li class="link-adv"><a href="#">tours ></a></li>
            <li class="link-adv"><a href="#">Adventures ></a></li>
        </ul>
    </div>

    <div class="desk1">
        <h1 class="">petualangan yang seru!</h1>
    </div>

    <div class="adv-line">
        <?php foreach ($adventure as $a) : ?>
            <div class="adventure">
                <div class="card">
                    <div class="imgBx">
                        <img src="/backoffice/activity/<?= $a['image']; ?>">
                    </div>
                    <div class="content">
                        <h2><?= $a['title']; ?></h2>
                        <P><?= $a['description']; ?></P>
                        <!-- <a href="#">view detail</a> -->
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        <!-- <div class="adventure">
            <div class="card">
                <div class="imgBx">
                    <img src="/adventure/image projek PKL/Pantai Lovina.jpg">
                </div>
                <div class="content">
                    <h2>Ayung River Rafting</h2>
                    <P>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur, voluptatibus quo consequatur vel numquam consectetur nemo cum eveniet possimus! Eaque iste explicabo quasi rem ipsum magni sequi id est molestias!</P>
                    <a href="#">view detail</a>
                </div>
            </div>
        </div>
        <div class="adventure">
            <div class="card">
                <div class="imgBx">
                    <img src="/adventure/image projek PKL/Pantai Lovina.jpg">
                </div>
                <div class="content">
                    <h2>Atv Or Quad Bike Ride</h2>
                    <P>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Pariatur, voluptatibus quo consequatur vel numquam consectetur nemo cum eveniet possimus! Eaque iste explicabo quasi rem ipsum magni sequi id est molestias!</P>
                    <a href="#">view detail</a>
                </div>
            </div>
        </div> -->
    </div>


    <script src="adventure/js/adventure.js"></script>
</body>

</html>
<?= $this->endSection('content'); ?>