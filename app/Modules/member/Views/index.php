<?= $this->extend('layout/footer'); ?>

<?= $this->section('content'); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Member For Indo Bali Tour</title>
    <link rel="stylesheet" type="text/css" href="/member/css/Member.css">
    <link rel="stylesheet" href="https:/unicons.iconsout.com/release/v4.0.0/css/line.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<!-- HEADER -->

<body>
    <header>
        <div class="background">
            <img src="/member/img/Member_Home (1).jpeg" alt="">
            <div class="heading">
                <h1>IBT MEMBER</h1>
                <p>Mari Bergabung dengan Kami!</p>
            </div>
        </div>
    </header>

    <nav>
        <div class="navbar">
            <div class="logo"><a href="#">MEMBER</a></div>
            <button class="menu-btn">&#9776;</button>
            <ul class="nav-links">
                <li><a href="/index.php/team">IBT Team</a></li>
                <li><a href="/index.php/member">IBT Member</a></li>
            </ul>
        </div>
    </nav>
    <div>
        <h1 class="desk1">
            MEMBER
        </h1>
        <hr class="h">
    </div>


    <!--==================MEMBER=======================-->
    <?php if (session('pesan')) : ?>
        <script>
            alert('<?= session('pesan'); ?>')
        </script>
    <?php endif; ?>
    <div class="container-m">
        <div class="row">
            <div class="left">
                <img src="/member/img/icon_Member.jpg">
            </div>
            <div class="right">
                <div class="content">
                    <h3>JOIN MEMBER NOW!</h3>
                    <p>Don't miss out on the incredible opportunity to enhance your Bali experience at a more favorable cost!

                        <br>By becoming a valued member of Indo Bali Tour, you unlock a host of benefits,
                        <br><strong>including discounts of up to 10%</strong> and exclusive services during your Bali vacation.
                        <br>Moreover, extend the invitation to your friends, and as they embark on a Bali getaway with Indo Bali Tour, enjoy <strong>discounts of up to 5%</strong> on selected vacation packages.

                        Being a member means more than just discounts it signifies being a part of a community that prioritizes creating unforgettable travel moments.
                        <br>So, what are you waiting for? Seize the opportunity to join us now and elevate your travel experience!
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="body-1" id="form">
        <section class="container">
            <div class="header1">Form Member Indo Bali Tour</div>
            <form action="/member/register" class="form" method="post" enctype="multipart/form-data">
                <div class="input-box">
                    <label for="name">Full name</label>
                    <input type="text" name="name" id="name" value="<?= old('name'); ?>" placeholder="Enter full name">
                    <?php if (session('validation')) :
                        if (session('validation')->getError('name')) : ?>
                            <p class="invalid"><?= session('validation')->getError('name'); ?></p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

                <div class="select-wrap">
                    <label for="nationality">Nationality</label>
                    <div class="select-box">
                        <select id="nationality" name="nationality">
                            <option>Select Country</option>
                            <option>United States</option>
                            <option>Indonesia</option>
                            <option>India</option>
                            <option>Italia</option>
                            <option>Japan</option>
                            <option>Germany</option>
                            <option>south Korea</option>
                            <option>Prancis</option>
                            <option>Kamboja</option>
                            <option>Malaysia</option>
                        </select>
                    </div>
                </div>

                <div class="input-box">
                    <label>Date of Birth</label>
                    <input type="date" name="date_birth" id="date_birth">
                </div>

                <div class="input-box">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Enter email" value="<?= old('email'); ?>">
                    <?php if (session('validation')) : ?>
                        <?php if (session('validation')->getError('email')) : ?>
                            <p class="invalid"><?= session('validation')->getError('email'); ?></p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

                <div class="input-box">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" value="<?= old('username'); ?>" placeholder="Enter username">
                    <?php if (session('validation')) : ?>
                        <?php if (session('validation')->getError('username')) : ?>
                            <p class="invalid"><?= session('validation')->getError('username'); ?></p>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>

                <div class="passwordfield">
                    <div class="input-box">
                        <label for="password">Password</label>
                        <input type="password" name="password1" id="password" placeholder="Enter password">
                        <p class="note">Must contain 8-12 character</p>
                        <?php if (session('validation')) : ?>
                            <?php if (session('validation')->getError('password1')) : ?>
                                <p class="invalid"><?= session('validation')->getError('password1'); ?></p>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                    <div class="input-box">
                        <label for="password2">Repeat Password</label>
                        <input type="password" name="password2" id="password2" placeholder="Enter password">
                        <?php if (session('validation')) : ?>
                            <?php if (session('validation')->getError('password2')) : ?>
                                <p class="invalid"><?= session('validation')->getError('password2'); ?></p>
                            <?php endif; ?>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="input-file">
                    <label>Upload Profile Photo</label>
                    <input type="file" class="form-control" name="img" accept=".jpg, .jpeg, .png" id="img">
                    <p class="note">note: max. 2MB</p>
                </div>
                <button>Send</button>
            </form>
        </section>
    </div>


    <!--==============================================-->


    <script src="/member/js/Member.js"></script>

    <?= $this->endSection('content'); ?>