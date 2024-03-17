<?= $this->extend('layout/tourNav'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Promo</title>
    <link rel="stylesheet" href="/home/css/transport.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <!-- HEADER -->
    <header>
        <div class="background">
            <img src="/home/img/bg-yy.webp" alt="">
            <div class="heading">
                <h1>Pilih <br>Transportasimu!</h1>
                <p>Pastikan Anda Nyaman.</p>
            </div>
        </div>
    </header>
    <!-- HEADER ENDS -->

    <!-- TRANSPORT START -->
    <section class="transportations" id="transportations">
        <div class="box-container">
            <div class="box">
                <img src="/home/img/avanza.png" alt="">
                <div class="content">
                    <h3> <a href=""> Toyota Avanza</a></h3>
                    <p>Accommodates : 6 person</p>
                    <p>Include</p>
                    <p>English Speaking Driver</p>
                    <p>Petrol/Gazoline</p>
                    <div class="price">USD $40/Day (10 Hours)</div>
                </div>
            </div>
            <div class="box">
                <img src="/home/img/terrios.png" alt="">
                <div class="content">
                    <h3> <a href=""> Daihatsu Terrios</a></h3>
                    <p>Accommodates : 6 person</p>
                    <p>Include</p>
                    <p>English Speaking Driver</p>
                    <p>Petrol/Gazoline</p>
                    <div class="price">USD $47/Day (10 Hours)</div>

                </div>
            </div>
            <div class="box">
                <img src="/home/img/apv.png" alt="">
                <div class="content">
                    <h3> <a href=""> Suzuki APV</a></h3>
                    <p>Accommodates : 7 person</p>
                    <p>Include</p>
                    <p>English Speaking Driver</p>
                    <p>Petrol/Gazoline</p>
                    <div class="price">USD $43/Day (10 Hours)</div>
                </div>
            </div>
            <div class="box">
                <img src="/home/img/apv.png" alt="">
                <div class="content">
                    <h3> <a href=""> Suzuki APV</a></h3>
                    <p>Accommodates : 7 person</p>
                    <p>Include</p>
                    <p>English Speaking Driver</p>
                    <p>Petrol/Gazoline</p>
                    <div class="price">USD $43/Day (10 Hours)</div>
                </div>
            </div>
            <div class="box">
                <img src="/home/img/apv.png" alt="">
                <div class="content">
                    <h3> <a href=""> Suzuki APV</a></h3>
                    <p>Accommodates : 7 person</p>
                    <p>Include</p>
                    <p>English Speaking Driver</p>
                    <p>Petrol/Gazoline</p>
                    <div class="price">USD $43/Day (10 Hours)</div>
                </div>
            </div>
            <div class="box">
                <img src="/home/img/apv.png" alt="">
                <div class="content">
                    <h3> <a href=""> Suzuki APV</a></h3>
                    <p>Accommodates : 7 person</p>
                    <p>Include</p>
                    <p>English Speaking Driver</p>
                    <p>Petrol/Gazoline</p>
                    <div class="price">USD $43/Day (10 Hours)</div>
                </div>
            </div>
        </div>
        <div class="ex-box">
            <div class="ex-text">
                <h4><i class='bx bx-error-circle'></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis nesciunt est illo neque? Excepturi ad illo placeat eveniet, facilis ipsam.</h4>
            </div>
        </div>
    </section>
</body>

</html>
<!-- TRANSPORT ENDS -->
<?= $this->endSection('content'); ?>