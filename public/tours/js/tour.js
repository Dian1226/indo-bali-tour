let navbar = document.querySelector(".navbar");


// sidebar open close jd code
let menuOpenBtn = document.querySelector(".navbar .bx-menu");
let closeOpenBtn = document.querySelector(".nav-links .bx-x");
let navLinks = document.querySelector(".nav-links");

menuOpenBtn.addEventListener("click", ()=>{
    navLinks.style.left = "0";
});

closeOpenBtn.addEventListener("click", ()=>{
    navLinks.style.left = "-100%";
});

// sidebar sub menu open js code
let htmlcssArrow = document.querySelector(".htmlcss-arrow");
htmlcssArrow.addEventListener("click", ()=>{
    navLinks.classList.toggle("show1");
})

let jsArrow = document.querySelector(".js-arrow");
jsArrow.addEventListener("click", ()=>{
    navLinks.classList.toggle("show2");
})

$(document).ready(function(){
  var isHovered = false;

  // Mengatur pergerakan slide
  $('.carousel').carousel({
      padding: 200,
      onCycleTo: function(slide) {
          var index = $('.carousel-item').index(slide);
          $('.dots-container .dot').removeClass('active');
          $('.dots-container .dot').eq(index).addClass('active');
      }
  });

  // Mengatur fungsi saat kursor masuk ke dalam carousel
  $('.carousel').mouseenter(function() {
      isHovered = true;
  });

  // Mengatur fungsi saat kursor meninggalkan carousel
  $('.carousel').mouseleave(function() {
      isHovered = false;
  });

  // Fungsi autoplay akan dijalankan hanya jika tidak ada kursor di atas carousel
  autoplay();
  
  function autoplay() {
      if (!isHovered) {
          $('.carousel').carousel('next');
      }
      setTimeout(autoplay, 3000);
  }

  // Mengatur pergerakan slide saat dot diklik
  $('.dots-container .dot').click(function() {
      var index = $(this).index();
      $('.carousel').carousel('set', index);
  });
});