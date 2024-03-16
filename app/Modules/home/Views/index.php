<?= $this->extend('layout/footer'); ?>

<?= $this->section('content'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDO BALI TOUR</title>
    <link rel="stylesheet" href="/home/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>
    <header>
        <div id="menu-bar" class="fas fa-bars"></div>
        <div class="logo-img"><img src="home/img/indobalitour2.png" alt=""></div>

        <nav class="navbar">
            <a href="/">Home</a>
            <a href="/index.php/about">About</a>
            <a href="/index.php/tours">Tours</a>
            <a href="/index.php/blogsevents">Blog & Events</a>
            <a href="/index.php/member">Member</a>
            <a href="/index.php/tour-experience">Tour Experience</a>
            <a href="/index.php/contact">Contact Us</a>
        </nav>
        <div class="icons">
            <i class="fas fa-search" id="search-btn"></i>
            <i class="fas fa-user" id="login-btn"></i>
        </div>
        <div id="google_translate_element"></div>
        <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

        <form action="" class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here...">
            <label for="search-bar" class="fas fa-search"></label>
        </form>
    </header>

    <!-- login form -->
    <div class="login-form-container">
        <i class="fas fa-times" id="form-close"></i>
        <form action="">
            <h3>Login/Register</h3>
            <input type="email" class="box" placeholder="Enter your email">
            <input type="password" class="box" placeholder="Enter your password">
            <input type="submit" value="login now" class="btn">
            <input type="checkbox" id="remember">
            <label for="remember">remember me</label>
            <p>forget password? <a href="#">Click Here</a></p>
        </form>

    </div>
    <!-- login form ends -->

    <!-- home section -->
    <section class="home" id="home">
        <div class="content">
            <h3>BALI.</h3>
            <img src="home/img/indobalitour2.png" alt="">
            <p>Dicover new places with us, adventure awaits</p>
            <!-- SAMBUNGKAN PADA HALAMAN TOURS -->
            <a href="/index.php/tours" class="btn">Discover More</a>
        </div>

        <div class="controls">
            <span class="vid-btn active" data-src="home/img/vidd-1 - rmv.mp4"></span>
            <span class="vid-btn" data-src="home/img/vid-3.mp4"></span>
            <span class="vid-btn" data-src="home/img/vid-2.mp4"></span>
            <span class="vid-btn" data-src="home/img/vidd.mp4"></span>
        </div>

        <div class="vid-container">
            <video src="/home/img/vidd-1 - rmv.mp4" id="vid-slider" autoplay loop muted></video>
        </div>
    </section>
    <!-- home section ends -->

    <!-- book section  -->
    <section class="book" id="book">
        <h1 class="heading" data-aos="fade-down-left" data-aos-duration="1000">
            <?php $sec = "booknow";
            $chars = str_split($sec);
            foreach ($chars as $char) : ?>
                <span><?= $char; ?></span>
            <?php endforeach; ?>
        </h1>
        <div class="row">
            <div class="img" data-aos="fade-down-left" data-aos-duration="1000">
                <img src="home/img/travelling-2.png" alt="">
            </div>
            <form action="/booking-form" data-aos="fade-down-left" data-aos-duration="1000" method="post">
                <div class="inputBox">
                    <h3>Where To</h3>
                    <input type="text" name="place" placeholder="place name">
                </div>
                <div class="inputBox">
                    <h3>How Many</h3>
                    <input type="number" name="guest" placeholder="number of guests">
                </div>
                <div class="inputBox">
                    <h3>Arrivals</h3>
                    <input type="date" name="dateArrival">
                </div>
                <div class="inputBox">
                    <h3>Leaving</h3>
                    <input type="date" name="dateLeaving">
                </div>
                <input type="submit" class="btn" value="book now">
            </form>
        </div>
    </section>
    <!-- book section ends -->

    <!-- packages -->
    <section class="packages" id="packages">
        <h1 class="heading" data-aos="fade-up" data-aos-duration="1000">
            <?php $sec = "packages";
            $chars = str_split($sec);
            foreach ($chars as $char) : ?>
                <span><?= $char; ?></span>
            <?php endforeach; ?>
        </h1>
        <div class="box-container">
            <?php foreach ($packages as $package) : ?>
                <div class="box" data-aos="fade-up" data-aos-duration="1000">
                    <form action="/booking-form" method="post">
                        <?php
                        $price = $package['price'];
                        $discount = $package['discount'];
                        $afterDiscount = $price * (100 - $discount) / 100;
                        ?>
                        <img src="/backoffice/package/<?= $package['image']; ?>" alt="">
                        <div class="content">
                            <h3><i class="fas fa-map-marker-alt"></i> <a href=""><?= $package['title']; ?></a></h3>
                            <p><?= $package['caption']; ?></p>
                            <?php $i = 5 - $package['stars']; ?>
                            <div class="stars">
                                <?php for ($j = 0; $j < $package['stars']; $j++) : ?>
                                    <i class="fas fa-star"></i>
                                <?php endfor; ?>
                                <?php for ($k = 0; $k < $i; $k++) : ?>
                                    <i class="far fa-star"></i>
                                <?php endfor; ?>
                            </div>
                            <div class="price">USD $<?= $afterDiscount; ?>/Person <span>$<?= $package['price']; ?></span></div>
                            <button class="btn" type="submit">Book Now</button>
                        </div>
                    </form>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- DESTINATION PAGE -->
    <section class="ibt-fun-destinations">
        <h1 class="heading" data-aos="fade-out" data-aos-duration="1000">
            <?php $sec = "destinations";
            $chars = str_split($sec);
            foreach ($chars as $char) : ?>
                <span><?= $char; ?></span>
            <?php endforeach; ?>
        </h1>
        <div class="btn-m" data-aos="fade-out" data-aos-duration="1000">
            <a href="/index.php/tours"><button type="button" class="btn btn-primary btn-lg">More</button></a>
        </div>
        <div class="swiper mySwiper4">
            <div class="swiper-wrapper" data-aos="fade-out" data-aos-duration="1000">
                <?php foreach ($tours as $tour) : ?>
                    <div class="swiper-slide"><a href="/tours/<?= $tour['slug']; ?>"><img src="/backoffice/tours/<?= $tour['image']; ?>" alt=""></a></div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- DESTINATION PAGE -->

    <section class="promo" id="promo">
        <h1 class="heading" data-aos="fade-up" data-aos-duration="1000">
            <?php $sec = "promo";
            $chars = str_split($sec);
            foreach ($chars as $char) : ?>
                <span><?= $char; ?></span>
            <?php endforeach; ?>
        </h1>

        <div class="promo">
            <div class="btn-m" data-aos="fade-up" data-aos-duration="1000">
                <a href="/index.php/promo"><button type="button" class="btn btn-primary btn-lg">More</button></a>
            </div>

            <div class="promo-1">
                <div class="box-container">
                    <div class="box" data-aos="fade-up" data-aos-duration="1000">
                        <img src="home/img/promo-card.avif" alt="">
                        <div class="content">
                            <h3><a href=""> Promo Up To 50%!</a></h3>
                            <p>Make ur own trip for 6 days! Tap for more!</p>
                            <a href="" class="btn">Claim</a>
                        </div>
                    </div>
                    <div class="box" data-aos="fade-up" data-aos-duration="1000">
                        <img src="home/img/promo-card.avif" alt="">
                        <div class="content">
                            <h3><a href=""> Promo Up To 50%!</a></h3>
                            <p>Make ur own trip for 6 days! Tap for more!</p>
                            <a href="" class="btn">Claim</a>
                        </div>
                    </div>
                    <div class="box" data-aos="fade-up" data-aos-duration="1000">
                        <img src="home/img/promo-card.avif" alt="">
                        <div class="content">
                            <h3><a href=""> Promo Up To 50%!</a></h3>
                            <p>Make ur own trip for 6 days! Tap for more!</p>
                            <a href="" class="btn">Claim</a>
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="ibt-fun-activities">
        <h1 class="heading" data-aos="fade-down" data-aos-duration="1000">
            <br><br>
            <?php $sec = "activities";
            $chars = str_split($sec);
            foreach ($chars as $char) : ?>
                <span><?= $char; ?></span>
            <?php endforeach; ?>
        </h1>
        <div class="btn-m">
            <a href="/fun-activities"><button type="button" class="btn btn-primary btn-lg">More</button></a>

        </div>
        <div id="card-area">
            <div class="wrapper">
                <div class="box-area">
                    <?php foreach ($fun as $fun) : ?>
                        <div class="box-f" data-aos="fade-down" data-aos-duration="1000">
                            <img src="/backoffice/activity/<?= $fun['image']; ?>" alt="">
                            <div class="overlay">
                                <h3><?= $fun['title']; ?></h3>
                                <a href="/activity/<?= $fun['slug']; ?>">More</a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- packages end-->

    <!-- IBT FUN ADVENTURES START -->

    <section class="ibt-fun-adventures" id="ibt-fun-adventures">
        <h1 class="heading" data-aos="fade-up-right" data-aos-duration="1000">
            <?php $sec = "adventures";
            $chars = str_split($sec);
            foreach ($chars as $char) : ?>
                <span><?= $char; ?></span>
            <?php endforeach; ?>
        </h1>
        <div class="container-v">
            <?php foreach ($adventures as $adventure) : ?>
                <div class="card-a" data-aos="fade-up-right" data-aos-duration="1000">
                    <div class="face front">
                        <img src="/backoffice/activity/<?= $adventure['image']; ?>" alt="">
                        <h3><?= $adventure['title']; ?></h3>
                    </div>
                    <div class="face back">
                        <h3><?= $adventure['title']; ?></h3>
                        <p><?= $adventure['description']; ?></p>
                        <div class="link-a">
                            <a href="/adventure/<?= $adventure['slug']; ?>">Detail</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- IBT FUN ADVENTURES ENDS -->

    <!-- TRANSPORT START -->
    <section class="transportations" id="transportations">
        <h1 class="heading" data-aos="fade-up" data-aos-duration="1000">
            <?php $sec = "transport";
            $chars = str_split($sec);
            foreach ($chars as $char) : ?>
                <span><?= $char; ?></span>
            <?php endforeach; ?>
        </h1>
        <div class="btn-m" data-aos="fade-up" data-aos-duration="1000">
            <a href="/transport"><button type="button" class="btn btn-primary btn-lg">More</button></a>
        </div>

        <div class="transportations-1">
            <div class="box-container">
                <?php foreach ($transport as $transport) : ?>
                    <div class="box" data-aos="fade-up" data-aos-duration="1000">
                        <img src="/backoffice/transportation/<?= $transport['image']; ?>" alt="">
                        <div class="content">
                            <h3> <a href=""><?= $transport['brand']; ?></a></h3>
                            <p>Accommodates : <?= $transport['capacity']; ?> person</p>
                            <p>Include</p>
                            <p><?= $transport['extra']; ?></p>
                            <div class="price">USD $<?= $transport['fee']; ?>/Day (10 Hours)</div>
                            <a href="" class="btn">VIEW DETAILS</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- TRANSPORT ENDS -->
    <!-- service section -->
    <section class="services" id="services">
        <h1 class="heading" data-aos="zoom-in" data-aos-duration="1000">
            <?php $sec = "services";
            $chars = str_split($sec);
            foreach ($chars as $char) : ?>
                <span><?= $char; ?></span>
            <?php endforeach; ?>
        </h1>
        <div class="box-container">
            <div class="box" data-aos="zoom-in" data-aos-duration="1000">
                <i class="fas fa-hotel"></i>
                <h3>Affordable Hotel</h3>
                <p>From luxurious boutique resorts to charming private villas, Indo Bali Tour offers a range of accommodation options tailored to your tastes and needs. Enjoy high-level comfort and complete facilities, along with breathtaking views right from your room.</p>
            </div>
            <div class="box" data-aos="zoom-in" data-aos-duration="1000">
                <i class="fas fa-utensils"></i>
                <h3>Food & Drinks</h3>
                <p>Immerse yourself in Bali's vibrant food culture with our immersive culinary experiences. Join us for a cooking class led by local chefs, where you'll learn to recreate classic Balinese recipes in your own kitchen.</p>
            </div>
            <div class="box" data-aos="zoom-in" data-aos-duration="1000">
                <i class="fas fa-bullhorn"></i>
                <h3>Safty Guide</h3>
                <p>We leave no stone unturned when it comes to your safety. From pre-trip safety briefings to on-site risk assessments, we implement comprehensive safety measures to mitigate any potential risks or hazards. Rest assured, we prioritize your well-being at every stage of your journey.</p>
            </div>
            <div class="box" data-aos="zoom-in" data-aos-duration="1000">
                <i class="fas fa-globe-asia"></i>
                <h3>Around the world</h3>
                <p>Our Service Trip package is designed to elevate your Bali experience to new heights. From the moment you arrive until your departure, our dedicated team will be by your side, ensuring that every aspect of your trip is taken care of with meticulous attention to detail. </p>
            </div>
            <div class="box" data-aos="zoom-in" data-aos-duration="1000">
                <i class="fas fa-plane"></i>
                <h3>Fastest Travel</h3>
                <p>With Indo Bali Tour, booking your travel has never been easier. Our user-friendly online platform allows you to browse, select, and confirm your travel arrangements in just a few clicks. Say goodbye to long waiting times and hello to instant confirmation!</p>
            </div>
            <div class="box" data-aos="zoom-in" data-aos-duration="1000">
                <i class="fas fa-hiking"></i>
                <h3>Adventure</h3>
                <p>Tailor your adventure to suit your preferences with our customizable packages. Whether you're seeking a day of high-octane thrills or a multi-day expedition through Bali's untouched wilderness, we'll create an itinerary that's perfect for you.</p>
            </div>

        </div>
    </section>
    <!-- service section ends -->

    <!-- gallery starts -->
    <section class="gallery" id="gallery">
        <h1 class="heading" data-aos="fade-left" data-aos-duration="1000">
            <?php $sec = "gallery";
            $chars = str_split($sec);
            foreach ($chars as $char) : ?>
                <span><?= $char; ?></span>
            <?php endforeach; ?>
        </h1>
        <div class="btn-m" data-aos="fade-left" data-aos-duration="1000">
            <a href="/index.php/tour-experience"><button type="button" class="btn btn-primary btn-lg">More</button></a>
        </div>
        <div class="box-container">
            <!-- maksimal 6 foto -->
            <?php foreach ($gallery as $g) : ?>
                <div class="box" data-aos="fade-left" data-aos-duration="1000">
                    <img src="/backoffice/gallery/<?= $g['image']; ?>" alt="">
                    <div class="content">
                        <h3><?= $g['title']; ?></h3>
                        <p><?= $g['description']; ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <!-- gallery ends -->
    <!-- BLOG STARTS -->
    <section class="blog-events-1" id="blog-events-1" data-aos="fade-right" data-aos-duration="1000">
        <h1 class="heading">
            <?php $sec = "blogs & events";
            $chars = str_split($sec);
            foreach ($chars as $char) : ?>
                <span><?= $char; ?></span>
            <?php endforeach; ?>
        </h1>
        <div class="btn-m" data-aos="fade-right" data-aos-duration="1000">
            <a href="/index.php/blogsevents"><button type="button" class="btn btn-primary btn-lg">More</button></a>
        </div>
        <div class="blog-events">
            <div class="blog-box-container">
                <?php foreach ($blogs as $blog) : ?>
                    <div class="blog-box" data-aos="fade-right" data-aos-duration="1000">
                        <div class="blog-box-img">
                            <img src="/backoffice/blog/<?= $blog['image']; ?>" alt="">
                            <a href="/blogsevents/<?= $blog['slug']; ?>" class="blog-img-link">
                                <i class='bx bx-right-top-arrow-circle'></a></i>
                            </a>
                        </div>
                        <div class="blog-box-text">
                            <strong><?= $blog['category']; ?></strong>
                            <a href="/blogsevents/<?= $blog['slug']; ?>"><?= $blog['title']; ?></a>
                            <p><?= $blog['content']; ?></p>
                            <div class="blog-author">
                                <div class="blog-author-img">
                                    <img src="" alt="">
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
        </div>
    </section>
    <!-- BLOG ENDS -->
    <!-- FAQ STARTS -->
    <section class="faq" id="faq">
        <h1 class="heading">
            <?php $sec = "faq";
            $chars = str_split($sec);
            foreach ($chars as $char) : ?>
                <span><?= $char; ?></span>
            <?php endforeach; ?>
        </h1>
        <div class="questions-container">
            <?php foreach ($faqs as $faq) : ?>
                <div class="question">
                    <button>
                        <span><?= $faq['question']; ?></span>
                        <span><i class="fas fa-chevron-down"></i></span>
                    </button>
                    <p><?= $faq['answer']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>


    </section>
    <!-- FAQ ENDS -->
    <!-- AJAKAN STARTS -->
    <section class="market">
        <div class="row">
            <div class="left" data-aos="zoom-out" data-aos-duration="1000">
                <img src="home/img/ad-market.jpg" alt="">
            </div>
            <div class="right" data-aos="zoom-out" data-aos-duration="1000">
                <div class="content">
                    <h2><span>COME ON!</span> <br>BALI IS WAITING!</h2>
                    <p>Visiting Bali is a dream for many people, and now it's time to make it a reality with Indo Bali Tour! We invite you to enjoy the beauty of tropical nature, rich culture, and unforgettable adventure experiences on the Island of the Gods. With our excellent services, you will feel endless comfort and satisfaction throughout your journey.</p>

                    <p>With Indo Bali Tour, every moment of your vacation in Bali will be filled with precious moments and captivating experiences. From exploring iconic tourist destinations like Tanah Lot and Ubud, to experiencing the warmth of local hospitality, we will provide you with unforgettable experiences. Enjoy carefree adventures with tour packages designed specifically to meet your needs and preferences.</p>


                </div>
            </div>
        </div>
    </section>
    <!-- AJAKAN ENDS -->
    <!-- review starts -->
    <section class="review" id="review">
        <h1 class="heading" data-aos="fade-up-right" data-aos-duration="1000">
            <?php $sec = "review";
            $chars = str_split($sec);
            foreach ($chars as $char) : ?>
                <span><?= $char; ?></span>
            <?php endforeach; ?>
        </h1>
        <div class="swiper review-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="box" data-aos="fade-up-right" data-aos-duration="1000">
                        <img src="home/img/re--1.jpg" alt="">
                        <h3>Kirana</h3>
                        <p>Selama perjalanan, saya sangat terkesan dengan profesionalisme dan keramahan tim Indo Bali Tour. Mereka tidak hanya mengatur segala sesuatunya dengan lancar, tetapi mereka juga memberikan informasi yang sangat berguna tentang tempat-tempat yang kami kunjungi, sejarah budaya, dan rekomendasi kuliner lokal yang tak terlupakan. </p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box" data-aos="fade-up-right" data-aos-duration="1000">
                        <img src="home/img/re-2.jpg" alt="">
                        <h3>Jo</h3>
                        <p>Paket wisata yang ditawarkan oleh Indo Bali Tour juga sangat beragam dan sesuai dengan kebutuhan setiap jenis wisatawan. Saya sangat menghargai fleksibilitas dalam memilih aktivitas dan destinasi, yang memungkinkan kami untuk menyesuaikan perjalanan sesuai dengan preferensi kami.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box" data-aos="fade-up-right" data-aos-duration="1000">
                        <img src="home/img/re-3.jpg" alt="">
                        <h3>Mitha</h3>
                        <p>Indo Bali Tour menawarkan nilai yang luar biasa dengan harga yang sangat terjangkau. Saya merasa bahwa setiap dolar yang saya habiskan untuk perjalanan ini sangatlah sepadan dengan pengalaman yang saya dapatkan. Saya tak sabar untuk kembali ke Bali dan menjelajahinya lagi bersama Indo Bali Tour. Terima kasih atas pengalaman yang luar biasa ini!</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="box" data-aos="fade-up-right" data-aos-duration="1000">
                        <img src="home/img/re-4.jpg" alt="">
                        <h3>Lorche</h3>
                        <p>Dari awal hingga akhir, perjalanan ini dilengkapi dengan pemandangan yang menakjubkan, pengalaman budaya yang kaya, dan layanan luar biasa yang membuat setiap momen berharga.</p>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="far fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>
    <!-- review ends-->

    <!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="/home/js/main.js"></script>

    <?= $this->endSection('content'); ?>