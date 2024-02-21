<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDO BALI TOUR</title>
    <link rel="stylesheet" href="home/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>
      <header >
        <div id="menu-bar" class="fas fa-bars"></div>
        <div class="logo-img"><img src="home/img/indobalitour2.png" alt=""></div>

        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#tours">Tours</a>
            <a href="#blog-events">Blog & Events</a>
            <a href="#member">Member</a>
            <a href="#tour-experience">Tour Experience</a>
            <a href="#contact">Contact Us</a>
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
             <a href="" class="btn">Discover More</a>   
        </div>

            <div class="controls">
                <span class="vid-btn active" data-src="home/img/vidd-1 - rmv.mp4"></span>
                <span class="vid-btn" data-src="home/img/vid-3.mp4"></span>
                <span class="vid-btn" data-src="home/img/vid-2.mp4"></span>
                <span class="vid-btn" data-src="home/img/vidd.mp4"></span>
            </div>

            <div class="vid-container">
             <video src="home/img/vid-2.mp4" id="vid-slider" autoplay loop ></video>
      </section>
<!-- home section ends -->

<!-- book section  -->
<section class="book" id="book">
    <h1 class="heading" data-aos="fade-down-left" data-aos-duration="1000">
        <span>b</span>
        <span>o</span>
        <span>o</span>
        <span>k</span>
        <span>n</span>
        <span>o</span>
        <span>w</span>
    </h1>
    <div class="row">
        <div class="img" data-aos="fade-down-left" data-aos-duration="1000">
            <img src="home/img/travelling-2.png" alt="">
        </div>
        <form action="" data-aos="fade-down-left" data-aos-duration="1000">
            <div class="inputBox">
                <h3>Where To</h3>
                <input type="text" placeholder="place name">
            </div>
            <div class="inputBox">
                <h3>How Many </h3>
                <input type="number" placeholder="number of guests">
            </div>
            <div class="inputBox">
                <h3>Arrivals</h3>
                <input type="date">
            </div>
            <div class="inputBox">
                <h3>Leaving</h3>
                <input type="date">
            </div>
            <input type="submit" class="btn" value="book now">
        </form>
    </div>
</section>
<!-- book section ends -->

<!-- packages -->
    <section class="packages" id="packages">
        <h1 class="heading"  data-aos="fade-up" data-aos-duration="1000">
        <span>p</span>
        <span>a</span>
        <span>c</span>
        <span>k</span>
        <span>a</span>
        <span>g</span>
        <span>e</span>
        <span>s</span>
    </h1>
   <div class="btn-m">
    <button type="button" class="btn btn-primary btn-lg">More</button>
   </div>
    <div class="box-container">
        <div class="box" data-aos="fade-up" data-aos-duration="1000">
            <img src="home/img/pa-1.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i>  <a href=""> Packages 6 Days Tour</a></h3>
                <p>Make ur own trip for 6 days! Tap for more!</p>
                   <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                   </div>
                   <div class="price">USD $304/Person <span>$340.00</span></div>
                   <a href="" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box"  data-aos="fade-up" data-aos-duration="1000">
            <img src="home/img/pa-2.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i>  <a href=""> Packages 5 Days Tour</a></h3>
                <p>Let's Explore The New World! Tap for more!</p>
                   <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                   </div>
                   <div class="price">$238/Person <span>$300.00</span></div>
                   <a href="" class="btn">Book Now</a>
            </div>
        </div>
        <div class="box" data-aos="fade-up" data-aos-duration="1000">
            <img src="home/img/pa-3.jpg" alt="">
            <div class="content">
                <h3><i class="fas fa-map-marker-alt"></i>  <a href=""> Packages 3 Days Tour</a> </h3>
                <p>Make Your Journey! Now!</p>
                   <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                   </div>
                   <div class="price">148.00/Person <span>$165.00</span></div>
                   <a href="" class="btn">Book Now</a>
            </div>
        </div>
    </div>
</section>

<!-- DESTINATION PAGE -->
<section class="ibt-fun-destinations">
    <h1 class="heading">
        <span>d</span>
        <span>e</span>
        <span>s</span>
        <span>t</span>
        <span>i</span>
        <span>n</span>
        <span>a</span>
        <span>t</span>
        <span>i</span>
        <span>o</span>
        <span>n</span>
        <span>s</span>
    </h1>
    <div class="btn-m">
        <button type="button" class="btn btn-primary btn-lg">More</button>
       </div>
       <div class="swiper mySwiper4">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="home/img/des-1.jpeg" alt=""></div>
          <div class="swiper-slide"><img src="home/img/des-2.jpeg" alt=""></div>
          <div class="swiper-slide"><img src="home/img/des-3.jpeg" alt=""></div>
          <div class="swiper-slide"><img src="home/img/des-4.jpeg" alt=""></div>
          <div class="swiper-slide"><img src="home/img/des-1.jpeg" alt=""></div>
          <div class="swiper-slide"><img src="home/img/des-2.jpeg" alt=""></div>
          <div class="swiper-slide"><img src="home/img/des-3.jpeg" alt=""></div>
          <div class="swiper-slide"><img src="home/img/des-4.jpeg" alt=""></div>
        </div>
      </div>
</section>
<!-- DESTINATION PAGE -->

    <section class="promo">
        <h1 class="heading" data-aos="fade-up" data-aos-duration="1000">
            <span>P</span>
            <span>R</span>
            <span>O</span>
            <span>M</span>
            <span>O</span>
        </h1>
        <div class="btn-m">
            <button type="button" class="btn btn-primary btn-lg"><a href="promo.html">More</a></button>
        </div>
        <div class="box-container">
            <div class="box" data-aos="fade-up" data-aos-duration="1000">
                <img src="home/img/promo-card.avif" alt="">
                <div class="content">
                    <h3><a href=""> Promo Up To 50%!</a></h3>
                    <p>Make ur own trip for 6 days! Tap for more!</p>
                       <a href="" class="btn">Claim</a>
                </div>
            </div>
            <div class="box"  data-aos="fade-up" data-aos-duration="1000">
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
    </section>

    <section class="ibt-fun-activities">
        <h1 class="heading" data-aos="fade-down" data-aos-duration="1000">
            <br><br>
            <span> a</span>
            <span>c</span>
            <span>t</span>
            <span>i</span>
            <span>v</span>
            <span>i</span>
            <span>t</span>
            <span>i</span>
            <span>e</span>
            <span>s</span>
        </h1>
        <div class="btn-m">
            <button type="button" class="btn btn-primary btn-lg">More</button>
           </div>
       <div id="card-area">
        <div class="wrapper">
            <div class="box-area">
                <div class="box-f" data-aos="fade-down" data-aos-duration="1000">
                <img src="home/img/fun-1.jpg" alt="">
                    <div class="overlay">
                        <h3>BICYCLES</h3>
                        <a href="#">More</a>
                    </div>
                </div>
                <div class="box-f" data-aos="fade-down" data-aos-duration="1000">
                    <img src="home/img/fun-2.jpg" alt="">
                    <div class="overlay">
                        <h3>BICYCLES</h3>
                        <a href="#">More</a>
                    </div>
                </div>
                <div class="box-f" data-aos="fade-down" data-aos-duration="1000">
                    <img src="home/img/fun-3.jpg" alt="">
                    <div class="overlay">
                        <h3>BICYCLES</h3>
                        <a href="#">More</a>
                    </div>
                </div>
                <div class="box-f" data-aos="fade-down" data-aos-duration="1000">
                    <img src="home/img/fun-4.jpg" alt="">
                    <div class="overlay">
                        <h3>BICYCLES</h3>
                        <a href="#">More</a>
                    </div>
                </div>
                <div class="box-f" data-aos="fade-down" data-aos-duration="1000">
                    <img src="home/img/fun-5.jpg" alt="">
                    <div class="overlay">
                        <h3>BICYCLES</h3>
                        <a href="#">More</a>
                    </div>
                </div>
                <div class="box-f" data-aos="fade-down" data-aos-duration="1000">
                    <img src="home/img/fun-6.jpg" alt="">
                    <div class="overlay">
                        <h3>BICYCLES</h3>
                        <a href="#">More</a>
                    </div>
                </div>
                <div class="box-f" data-aos="fade-down" data-aos-duration="1000">
                    <img src="home/img/fun-7.jpg" alt="">
                    <div class="overlay">
                        <h3>BICYCLES</h3>
                        <a href="#">More</a>
                    </div>
                </div>
                <div class="box-f" data-aos="fade-down" data-aos-duration="1000">
                    <img src="home/img/fun-8.jpg" alt="">
                    <div class="overlay">
                        <h3>BICYCLES</h3>
                        <a href="#">More</a>
                    </div>
                </div>
            </div>
        </div>
       </div>
    </section>
  
<!-- packages end-->

<!-- IBT FUN ADVENTURES START -->
<section class="ibt-fun-adventures">
    <h1 class="heading">
        <span>a</span>
        <span>d</span>
        <span>v</span>
        <span>e</span>
        <span>n</span>
        <span>t</span>
        <span>u</span>
        <span>r</span>
        <span>e</span>
        <span>s</span>
    </h1>
    <div class="btn-m">
        <button type="button" class="btn btn-primary btn-lg">More</button>
       </div>
   <div id="card-area">
    <div class="wrapper">
        <div class="box-area">
            <div class="box-f">
            <img src="home/img/fun-1.jpg" alt="">
                <div class="overlay">
                    <h3>BICYCLES</h3>
                    <a href="#">More</a>
                </div>
            </div>
            <div class="box-f">
                <img src="home/img/fun-2.jpg" alt="">
                <div class="overlay">
                    <h3>BICYCLES</h3>
                    <a href="#">More</a>
                </div>
            </div>
            <div class="box-f">
                <img src="home/img/fun-3.jpg" alt="">
                <div class="overlay">
                    <h3>BICYCLES</h3>
                    <a href="#">More</a>
                </div>
            </div>
            <div class="box-f">
                <img src="home/img/fun-4.jpg" alt="">
                <div class="overlay">
                    <h3>BICYCLES</h3>
                    <a href="#">More</a>
                </div>
            </div>
          
        </div>
    </div>
   </div>
</section>

<!-- IBT FUN ADVENTURES ENDS -->

<!-- TRANSPORT START -->
<section class="transportations" id="transportations">
    <h1 class="heading"  data-aos="fade-up" data-aos-duration="1000">
    <span>T</span>
    <span>r</span>
    <span>a</span>
    <span>n</span>
    <span>s</span>
    <span>p</span>
    <span>o</span>
    <span>r</span>
    <span>t</span>
</h1>
<div class="btn-m">
<button type="button" class="btn btn-primary btn-lg"><a href="transport.html">More</a></button>
</div>
<div class="box-container">
    <div class="box" data-aos="fade-up" data-aos-duration="1000">
        <img src="home/img/avanza.png" alt="">
        <div class="content">
            <h3> <a href=""> Toyota Avanza</a></h3>
            <p>Accommodates : 6 person</p>
            <p>Include</p>
            <p>English Speaking Driver</p>
            <p>Petrol/Gazoline</p>
               <div class="price">USD $40/Day (10 Hours)</div>
               <a href="" class="btn">VIEW DETAILS</a>
        </div>
    </div>
    <div class="box"  data-aos="fade-up" data-aos-duration="1000">
        <img src="home/img/terrios.png" alt="">
        <div class="content">
            <h3> <a href=""> Daihatsu Terrios</a></h3>
            <p>Accommodates : 6 person</p>
            <p>Include</p>
            <p>English Speaking Driver</p>
            <p>Petrol/Gazoline</p>
               <div class="price">USD $47/Day (10 Hours)</div>
               <a href="" class="btn">VIEW DETAILS</a>
        </div>
    </div>
    <div class="box" data-aos="fade-up" data-aos-duration="1000">
        <img src="home/img/apv.png" alt="">
        <div class="content">
            <h3> <a href=""> Suzuki APV</a></h3>
            <p>Accommodates : 7 person</p>
            <p>Include</p>
            <p>English Speaking Driver</p>
            <p>Petrol/Gazoline</p>
               <div class="price">USD $43/Day (10 Hours)</div>
               <a href="" class="btn">VIEW DETAILS</a>
        </div>
    </div>
</div>
</section>
<!-- TRANSPORT ENDS -->
<!-- service section -->
<section class="services" id="services">
    <h1 class="heading" data-aos="zoom-in" data-aos-duration="1000" >
        <span>s</span>
        <span>e</span>
        <span>r</span>
        <span>v</span>
        <span>i</span>
        <span>c</span>
        <span>e</span>
        <span>s</span>
    </h1>
    <div class="box-container">
        <div class="box" data-aos="zoom-in" data-aos-duration="1000">
            <i class="fas fa-hotel"></i>
            <h3>Affordable Hotel</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas perferendis a dolor maxime molestias 
            fugiat ratione aperiam deleniti labore accusantium, vero quisquam beatae nostrum, quod delectus cum vitae dignissimos pariatur.</p>
        </div>
        <div class="box" data-aos="zoom-in" data-aos-duration="1000">
            <i class="fas fa-utensils"></i>
            <h3>Food & Drinks</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas perferendis a dolor maxime molestias 
            fugiat ratione aperiam deleniti labore accusantium, vero quisquam beatae nostrum, quod delectus cum vitae dignissimos pariatur.</p>
        </div>
        <div class="box" data-aos="zoom-in" data-aos-duration="1000">
            <i class="fas fa-bullhorn"></i>
            <h3>Safty Guide</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas perferendis a dolor maxime molestias 
            fugiat ratione aperiam deleniti labore accusantium, vero quisquam beatae nostrum, quod delectus cum vitae dignissimos pariatur.</p>
        </div>
        <div class="box" data-aos="zoom-in" data-aos-duration="1000">
            <i class="fas fa-globe-asia"></i>
            <h3>Around the world</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas perferendis a dolor maxime molestias 
            fugiat ratione aperiam deleniti labore accusantium, vero quisquam beatae nostrum, quod delectus cum vitae dignissimos pariatur.</p>
        </div>
        <div class="box" data-aos="zoom-in" data-aos-duration="1000">
            <i class="fas fa-plane"></i>
            <h3>Fastest Travel</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas perferendis a dolor maxime molestias 
            fugiat ratione aperiam deleniti labore accusantium, vero quisquam beatae nostrum, quod delectus cum vitae dignissimos pariatur.</p>
        </div>
        <div class="box" data-aos="zoom-in" data-aos-duration="1000">
            <i class="fas fa-hiking"></i>
            <h3>Adventure</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas perferendis a dolor maxime molestias 
            fugiat ratione aperiam deleniti labore accusantium, vero quisquam beatae nostrum, quod delectus cum vitae dignissimos pariatur.</p>
        </div>

    </div>
</section>
<!-- service section ends -->

<!-- gallery starts -->
    <section class="gallery" id="gallery">
        <h1 class="heading" data-aos="fade-left" data-aos-duration="1000">
            <span>g</span>
            <span>a</span>
            <span>l</span>
            <span>l</span>
            <span>e</span>
            <span>r</span>
            <span>y</span>
        </h1>
        <div class="btn-m">
            <button type="button" class="btn btn-primary btn-lg">More</button>
           </div>
        <div class="box-container">
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <img src="home/img/g-1.jpeg" alt="">
                <div class="content">
                    <h3>The New Place For New You</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quis earum atque ducimus vitae, tempora iure adipisci modi odio!</p>
                    <a href="" class="btn">More</a>
                </div>
            </div>
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <img src="home/img/gg - 2.jpeg" alt="">
                <div class="content">
                    <h3>The New Place For New You</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quis earum atque ducimus vitae, tempora iure adipisci modi odio!</p>
                    <a href="" class="btn">More</a>
                </div>
            </div>
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <img src="home/img/g-3.jpeg" alt="">
                <div class="content">
                    <h3>The New Place For New You</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quis earum atque ducimus vitae, tempora iure adipisci modi odio!</p>
                    <a href="" class="btn">More</a>
                </div>
            </div>
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <img src="home/img/g-4.jpeg" alt="">
                <div class="content">
                    <h3>The New Place For New You</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quis earum atque ducimus vitae, tempora iure adipisci modi odio!</p>
                    <a href="" class="btn">More</a>
                </div>
            </div>
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <img src="home/img/g-5.jpeg" alt="">
                <div class="content">
                    <h3>The New Place For New You</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quis earum atque ducimus vitae, tempora iure adipisci modi odio!</p>
                    <a href="" class="btn">More</a>
                </div>
            </div>
            <div class="box" data-aos="fade-left" data-aos-duration="1000">
                <img src="home/img/g-6.jpeg" alt="">
                <div class="content">
                    <h3>The New Place For New You</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quas quis earum atque ducimus vitae, tempora iure adipisci modi odio!</p>
                    <a href="" class="btn">More</a>
                </div>
            </div>
        </div>
    </section>
<!-- gallery ends -->
<!-- BLOG STARTS -->
<section class="blog-events-1" id="blog-events-1">
    <h1 class="heading">
        <span>B</span>
        <span>L</span>
        <span>O</span>
        <span>G</span>
        <br>
        <span>&</span>
        <br>
        <span>e</span>
        <span>v</span>
        <span>e</span>
        <span>n</span>
        <span>t</span>
        <span>s</span>
    </h1>
    <div class="btn-m">
        <button type="button" class="btn btn-primary btn-lg">More</button>
       </div>
       <div class="blog-events">
        <div class="blog-box-container">
            <div class="blog-box">
                <div class="blog-box-img"> 
                    <img src="home/img/g-1.jpeg" alt="">
                    <a href="#" class="blog-img-link">
                        <i class='bx bx-right-top-arrow-circle'></i>
                    </a>
                </div>
                    <div class="blog-box-text">
                        <strong>Bali</strong>
                        <a href="">Bali Is Wonderland, If You Know It</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate expedita possimus exercitationem deleniti dolorum fugit magnam reprehenderit consequuntur quis dolore, corporis inventore officiis quasi debitis nihil ea consequatur consectetur iste?</p>
                        <div class="blog-author">
                            <div class="blog-author-img">
                                <img src="home/img/re-3.jpg" alt="">
                            </div>
                            <div class="blog-author-text">
                                <strong>Alax</strong>
                                <span>Jan 12, 2024</span>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="blog-box">
                <div class="blog-box-img"> 
                    <img src="home/img/g-2.webp" alt="">
                    <a href="#" class="blog-img-link">
                        <i class='bx bx-right-top-arrow-circle'></i>
                    </a>
                </div>
                    <div class="blog-box-text">
                        <strong>Bali</strong>
                        <a href="">Bali Is Wonderland, If You Know It</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate expedita possimus exercitationem deleniti dolorum fugit magnam reprehenderit consequuntur quis dolore, corporis inventore officiis quasi debitis nihil ea consequatur consectetur iste?</p>
                        <div class="blog-author">
                            <div class="blog-author-img">
                                <img src="home/img/re-3.jpg" alt="">
                            </div>
                            <div class="blog-author-text">
                                <strong>Alax</strong>
                                <span>Jan 12, 2024</span>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="blog-box">
                <div class="blog-box-img"> 
                    <img src="home/img/g-4.jpeg" alt="">
                    <a href="#" class="blog-img-link">
                        <i class='bx bx-right-top-arrow-circle'></i>
                    </a>
                </div>
                    <div class="blog-box-text">
                        <strong>Bali</strong>
                        <a href="">Bali Is Wonderland, If You Know It</a>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate expedita possimus exercitationem deleniti dolorum fugit magnam reprehenderit consequuntur quis dolore, corporis inventore officiis quasi debitis nihil ea consequatur consectetur iste?</p>
                        <div class="blog-author">
                            <div class="blog-author-img">
                                <img src="home/img/re-3.jpg" alt="">
                            </div>
                            <div class="blog-author-text">
                                <strong>Alax</strong>
                                <span>Jan 12, 2024</span>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</section>
<!-- BLOG ENDS -->
<!-- FAQ STARTS -->
<section class="faq" id="faq">
    <h1 class="heading">
        <span>F</span>
        <span>A</span>
        <span>Q</span>
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
        <!-- <div class="question">
            <button>
                <span>Lorem ipsum dolor sit amet?</span>
                <span><i class="fas fa-chevron-down"></i></span>
            </button>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, quas.</p>
        </div>
        <div class="question">
            <button>
                <span>Lorem ipsum dolor sit amet?</span>
                <span><i class="fas fa-chevron-down"></i></span>
            </button>
            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Recusandae, quas.</p>
        </div> -->
    </div>


</section>
<!-- FAQ ENDS -->
<!-- AJAKAN STARTS -->
<section class="market">
    <div class="row">
        <div class="left">
            <img src="home/img/ad-market.jpg" alt="">
        </div>
        <div class="right">
            <div class="content">
                <h2><span>Udah Tau</span> <br>Mau Kemana?</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam maxime error recusandae consequatur, culpa aliquam officiis corrupti eos. Similique modi laboriosam possimus, error totam magni dolorum debitis mollitia perspiciatis quasi.</p>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam maxime error recusandae consequatur, culpa aliquam officiis corrupti eos. Similique modi laboriosam possimus, error totam magni dolorum debitis mollitia perspiciatis quasi.</p>
                <br>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam maxime error recusandae consequatur, culpa aliquam officiis corrupti eos. Similique modi laboriosam possimus, error totam magni dolorum debitis mollitia perspiciatis quasi.</p>

            </div>
        </div>
    </div>
</section>
<!-- AJAKAN ENDS -->
<!-- review starts -->
    <section class="review" id="review">
        <h1 class="heading" data-aos="fade-up-right" data-aos-duration="1000">
            <span>r</span>
            <span>e</span>
            <span>v</span>
            <span>i</span>
            <span>e</span>
            <span>w</span>
        </h1>
        <div class= "swiper review-slider">    

            <div class="swiper-wrapper">

                <div class="swiper-slide">
                    <div class="box"  data-aos="fade-up-right" data-aos-duration="1000">
                        <img src="home/img/re--1.jpg" alt="">
                        <h3>Kirana</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque magni neque eligendi suscipit laboriosam? Delectus dolore quae esse. Debitis laudantium rem minus beatae delectus nulla officiis, temporibus facere facilis iste.</p>
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
                    <div class="box"  data-aos="fade-up-right" data-aos-duration="1000">
                        <img src="home/img/re-2.jpg" alt="">
                        <h3>Jo</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque magni neque eligendi suscipit laboriosam? Delectus dolore quae esse. Debitis laudantium rem minus beatae delectus nulla officiis, temporibus facere facilis iste.</p>
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
                    <div class="box"  data-aos="fade-up-right" data-aos-duration="1000">
                        <img src="home/img/re-3.jpg" alt="">
                        <h3>Mitha</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque magni neque eligendi suscipit laboriosam? Delectus dolore quae esse. Debitis laudantium rem minus beatae delectus nulla officiis, temporibus facere facilis iste.</p>
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
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Itaque magni neque eligendi suscipit laboriosam? Delectus dolore quae esse. Debitis laudantium rem minus beatae delectus nulla officiis, temporibus facere facilis iste.</p>
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
<!-- contact section -->
<section class="contact" id="contact">
    <h1 class="heading" data-aos="fade-down-right" data-aos-duration="1000">
        <span>c</span>
        <span>o</span>
        <span>n</span>
        <span>t</span>
        <span>a</span>
        <span>c</span>
        <span>t</span>
    </h1>
   <div class="row">
    <div class="image" data-aos="fade-down-right" data-aos-duration="1000">
        <img src="home/img/contact-2.png" alt="">
    </div>
    <form action=""  data-aos="fade-down-right" data-aos-duration="1000">
        <div class="inputBox">
            <input type="text" placeholder="name">
            <input type="email" placeholder="email">
        </div>
        <div class="inputBox">
            <input type="number" placeholder="number">
            <input type="text" placeholder="subject">
        </div>
        <textarea placeholder="message" name="" id="" cols="30" rows="10"></textarea>
        <input type="submit" class="btn" value="Send">
    </form>
   </div>
</section>
<!-- contact section -->


 <!--======= Footer section design ========-->
 <footer class="Footer">
    <div class="Footer-content">
        <img src="home/img/Logo_IBT.png">

        <div class="icons">
            <br><h4>Folow Us</h4>
            <a href="tel:+6282144678456"><i class='bx bxs-phone'></i></a>
            <a href="https://wa.me/6282144678456"><i class='bx bxl-whatsapp-square'></i></a>
            <a href="mailto:enjoy@indobalitour.com"><i class='bx bxs-envelope'></i></a>
            <a href="https://www.youtube.com/@indobalitour2505"><i class='bx bxl-youtube'></i></a>
            <a href="#https://www.facebook.com/indobalitour"><i class='bx bxl-facebook-circle'></i></a>
            <a href="#https://www.instagram.com/indobalitourcom/"><i class='bx bxl-instagram-alt'></i></a>

            <div class="Footer-content payment-section">
                <br><h4>Payment</h4>
                <img src="home/img/Logo payment BRI_IBT (1).jpg" width="100" height="70" alt="Payment Logo">
            </div></br>
        </div></br>
    </div>

    <div class="Footer-content">
        <br><h4>About IBT</h4>
        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Tours</a></li>
            <li><a href="#">Blog & Events</a></li>
            <li><a href="#">Member</a></li>
            <li><a href="#">Tour Experience</a></li>
            <li><a href="#">Packages</a></li>
            <li><a href="#">Contact Us</a></li><br>
        </ul>

        <div class="Footer-content">
            <br><strong><h4>Excellent Review</h4></strong>
            <img src="home/img/Tripadvisor.jpg" alt="Tripadvisor Logo"></br>
        </div>
    </div>

    <div class="Footer-content">
        <br><h4>IBT Recommended Tour</h4>
        <ul>
            <li><a href="#">Promo</a></li>
            <li><a href="#">Adventures</a></li>
            <li><a href="#">Fun Activities</a></li>
            <li><a href="#">Transport Service</a></li>
            <li><a href="#">Airport Transfer</a></li><br>

            <div class="Footer-content G-maps">
                <h4><br>Our Location</h4> 
                <h5>Jln. Ganetri IV No. 4 Denpasar 80237 Bali</h5>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.553840585376!2d115.22995007450947!3d-8.638757491407803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f79d0b9c291%3A0x28fcef04fc4ddfb!2sJl.%20Ganetri%20IV%20No.4%2C%20Tonja%2C%20Kec.%20Denpasar%20Utara%2C%20Kota%20Denpasar%2C%20Bali%2080235!5e0!3m2!1sid!2sid!4v1707716498050!5m2!1sid!2sid" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </ul>
    </div>

    <div class="Footer-Bottom">
        <p>Copyright &copy;2024; Designed by <span class="designer">INDO APPS SOLUSINDO</span></p>
    </div>
    
        
</footer>

<!-- footer ends-->

<!-- <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script src="home/js/main.js"></script>
</body>
</html>