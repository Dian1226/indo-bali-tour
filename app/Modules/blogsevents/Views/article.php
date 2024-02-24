<?= $this->extend('layout/footer'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artikel</title>
    <link rel="stylesheet" href="/blogsevents/css/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
</head>

<body>
    <!-- HEADER -->
    <header>
        <nav>
            <div class="navbar">
                <div class="logo"><a href="#">BLOG & EVENTS</a></div>
                <div class="nav-links">
                </div>
            </div>
        </nav>
        <div class="background">
            <img src="img/bg-blog.avif" alt="">
            <div class="heading">
                <h1>Apa Yang <br>Anda Cari?</h1>
                <p>Baca Blog Harian Kami!</p>
            </div>
        </div>
    </header>
    <!-- HEADER ENDS -->

    <section class="article">

        <div class="container-b">

            <div class="title-b">
                <h1><?= $blog['title']; ?></h1>
                <p><i class='bx bxs-calendar'></i><?= $blog['created_at']; ?></p>
            </div>

            <div class="author-b">
                <img src="img/blog-2.avif" alt="">
                <p><?= $blog['caption_image']; ?></p>
            </div>

            <div class="social-media">
                <i class='bx bxl-instagram-alt'></i>
                <i class='bx bxl-facebook-circle'></i>
                <i class='bx bxs-envelope'></i>
                <i class='bx bxl-youtube'></i>
            </div>

            <div class="img-b">
                <img src="/backoffice/blog/<?= $blog['image']; ?>" alt="">
            </div>

            <div class="text-b">
                <p><?= $blog['content']; ?></p>
            </div>

        </div>
    </section>
    <div class="footer-b">
        <a href="/index.php/blogsevents"><i class='bx bxs-left-arrow-circle'></i></a>
        <h3>Share This Article</h3>
    </div>

    <?= $this->endSection('content'); ?>