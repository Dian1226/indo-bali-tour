<?= $this->extend('layout/footer'); ?>

<?= $this->section('content'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BLOG & EVENTS</title>
    <link rel="stylesheet" href="/blogsevents/css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- <link rel="stylesheet" href="/style.css"> -->
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
            <img src="/blogsevents/img/bg-blog.avif" alt="">
            <div class="heading">
                <h1>Apa Yang <br>Anda Cari?</h1>
                <p>Baca Blog Harian Kami!</p>
            </div>
        </div>
    </header>
    <!-- HEADER ENDS -->

    <section class="blog-events-1" id="blog-events-1">
        <h1 class="heading-1">BLOG & EVENTS</h1>
        <hr>
        <div class="blog-events">
            <div class="blog-box-container">
                <?php foreach ($blogs as $blog) : ?>
                    <div class="blog-box">
                        <div class="blog-box-img">
                            <img src="/backoffice/blog/<?= $blog['image']; ?>" alt="">
                            <a href="/blogsevents/<?= $blog['slug']; ?>" class="blog-img-link">
                                <i class='bx bx-right-top-arrow-circle'></i>
                            </a>
                        </div>
                        <div class="blog-box-text">
                            <strong></strong>
                            <a href="/blogsevents/<?= $blog['slug']; ?>"><?= $blog['title']; ?></a>
                            <p><?= $blog['content']; ?></p>
                            <div class="blog-author">
                                <div class="blog-author-img">
                                    <img src="/blogsevents/img/blog-2.avif" alt="">
                                </div>
                                <div class="blog-author-text">
                                    <strong><?= $blog['caption_image']; ?></strong>
                                    <span><?= $blog['created_at']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="container-t">
                <div class="content-t">
                    <div class="title-t">
                        <h2>TOPICS</h2>
                    </div>
                    <div class="list-t">
                        <ul>
                            <?php foreach ($category as $category) : ?>
                                <li class="topics"><a href="/category/<?= $category['slug']; ?>"><?= $category['title']; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- PAGINATIONS STARTS  -->

    </section>

    <script src="blogsevents/js/script.js"></script>
    <?= $this->endSection('content'); ?>