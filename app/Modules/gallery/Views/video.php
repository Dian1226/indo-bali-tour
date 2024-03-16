<?= $this->extend('layout/footer'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GALLERY | VIDEOS </title>
    <link rel="stylesheet" href="/tour-experience/css/style.css">
</head>

<body>
    <nav>
        <div class="navbar">
            <i class='bx bx-menu'></i>
            <div class="logo"><a href="index.html">Tours</a></div>
            <div class="nav-links">
                <div class="sidebar-logo">
                    <span class="logo_name">Tours</span>
                    <i class='bx bx-x'></i>
                </div>
                <ul class="links">
                    <li>
                        <a href="/tour-experience/photo">PHOTO</a>
                    <li>
                        <a href="/tour-experience/video">VIDEO</a>
                </ul>
            </div>
        </div>
    </nav>
    <div class="background">
        <img src="/tour-experience/img/bg-tour.avif" alt="">
        <div class="heading">
            <h1>Lihatlah!<br>Lembayung Bali!</h1>
            <p>Memukau Hati dan Mata Anda.</p>
        </div>
    </div>

    <section class="gallery">
        <div class="heading-g" style="margin-top: 2rem;">
            <h1>VIDEO</h1>
        </div>
        <!-- <div class="button-m">
            <button type="button" value="text"><a href="">More</a></button>
        </div> -->
        <div class="video-container" style="display: grid; grid-template-columns: 1fr; justify-content: center; margin-left: 11rem;">
            <div class="box-video">
                <iframe width="800" height="300" src="https://www.youtube.com/embed/sS5azOjvArw" title="31 Juli 2023" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div class="box-video">
                <iframe width="800" height="300" src="https://www.youtube.com/embed/hv0-jFKWf3M" title="@leke-leke waterfall" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </section>









    <script src="script.js"></script>
    <?= $this->endSection('content'); ?>