<?= $this->extend('layout/footer'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GALLERY | PHOTO</title>
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
        <!-- <div class="explain-g">
            <h1>BALI</h1>
            <p>Bali, known as the "Island of the Gods," is a tropical paradise located in Indonesia, renowned for its stunning landscapes, vibrant culture, and rich heritage. With its lush rice terraces, pristine beaches, and majestic volcanic mountains, Bali offers breathtaking natural beauty at every turn.</p>
            <p>Moreover, Bali is a haven for wellness enthusiasts, offering a wide range of yoga retreats, holistic spas, and organic eateries set amidst serene surroundings. Whether seeking spiritual rejuvenation, adventurous exploration, or simply relaxation, Bali captivates the hearts of all who visit with its enchanting charm and warm hospitality.</p>
        </div> -->
        <div class="heading-g" style="margin-top: 2rem;">
            <h1>PHOTO</h1>
        </div>
        <!-- <div class="button-m">
            <button type="button" value="text"><a href="">More</a></button>
        </div> -->
        <div class="box-container" style="display: grid; grid-template-columns: 1fr 1fr;">
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <img src="/tour-experience/img/gal-1.avif" alt="">
                <div class="content">
                    <h3>Temple</h3>
                    <p>Bali, known as the "Island of the Gods," is renowned for its numerous temples scattered across the landscape. These temples, known locally as "pura," hold immense significance in Balinese culture and spirituality</p>
                    <!-- <a href="" class="btn">More</a> -->
                </div>
            </div>
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <img src="/tour-experience/img/gal-2.avif" alt="">
                <div class="content">
                    <h3>Tirta Gangga</h3>
                    <p>Tirta Gangga is a breathtaking water palace nestled in the eastern part of Bali, Indonesia. Renowned for its serene beauty and cultural significance, this enchanting destination is a must-visit for travelers seeking tranquility and a glimpse into Bali's rich heritage.</p>
                    <!-- <a href="" class="btn">More</a> -->
                </div>
            </div>
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <img src="/tour-experience/img/gal-3.avif" alt="">
                <div class="content">
                    <h3>Nusa Penida</h3>
                    <p>Nusa Penida is also home to picturesque natural wonders like Angel's Billabong, a stunning natural infinity pool, and Broken Beach, a unique coastal formation with a natural archway over crystal-clear waters.</p>
                    <!-- <a href="" class="btn">More</a> -->
                </div>
            </div>
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <img src="/tour-experience/img/gal-6.avif" alt="">
                <div class="content">
                    <h3>Tirta Gangga</h3>
                    <p>Visitors to Tirta Gangga can wander through the expansive grounds, marveling at the intricate Balinese design elements and tranquil ambiance. The highlight of the palace is its series of tiered pools adorned with ornate statues and surrounded by verdant foliage.</p>
                    <!-- <a href="" class="btn">More</a> -->
                </div>
            </div>
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <img src="/tour-experience/img/gal-4.avif" alt="">
                <div class="content">
                    <h3>Lempuyang</h3>
                    <p>Lempuyang Temple, also known as Pura Lempuyang Luhur, is a sacred Hindu temple located in East Bali, Indonesia. Situated on the slopes of Mount Lempuyang, the temple is renowned for its iconic "Gates of Heaven" (Pura Penataran Agung Lempuyang). </p>
                    <!-- <a href="" class="btn">More</a> -->
                </div>
            </div>
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <img src="/tour-experience/img/gal-5.avif" alt="">
                <div class="content">
                    <h3>Nusa Dua</h3>
                    <p>The area boasts a collection of upscale hotels, resorts, and villas, each offering top-notch amenities and impeccable service. Apart from its picturesque coastline, Nusa Dua is also home to an 18-hole golf course, upscale shopping centers, and a range of water sports activities. </p>
                    <!-- <a href="" class="btn">More</a> -->
                </div>
            </div>
            <!-- <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <img src="/tour-experience/img/gal-6.avif" alt="">
                <div class="content">
                    <h3>The New Place For New You</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quis earum atque ducimus vitae, tempora iure adipisci modi odio!</p>
                    <a href="" class="btn">More</a>
                </div>
            </div> -->
        </div>
    </section>
    <!-- gallery ends -->










    <script src="script.js"></script>
<?= $this->endSection('content'); ?>