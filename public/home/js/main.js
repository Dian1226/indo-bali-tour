let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
let formBtn = document.querySelector('#login-btn');
let loginForm = document.querySelector('.login-form-container');
let regisForm = document.querySelector('.register-form-container');
let formClose = document.querySelector('#form-close');
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
let vidBtn = document.querySelectorAll('.vid-btn');

window.onscroll = () => {
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    loginForm.classList.remove('active');

};


menu.addEventListener('click', () => {
   menu.classList.toggle('fa-times');
   navbar.classList.toggle('active');
}); 

searchBtn.addEventListener('click', () => {
   searchBtn.classList.toggle('fa-times');
   searchBar.classList.toggle('active');
}); 

formBtn.addEventListener('click', () => {
    loginForm.classList.add('active');
}); 

formClose.addEventListener('click', () => {
    loginForm.classList.remove('active');
}); 

vidBtn.forEach(btn => {
        btn.addEventListener('click', ()=> {
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#vid-slider').src = src;
    });
});

var swiper = new Swiper(".review-slider", {
    pagination: {
      el: ".swiper-pagination",
      dynamicBullets: true,
    },
    spaceBetween: 20,
    loop: true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        640: {
            slidesPerView: 1,
        },
        768: {
            slidesPerView: 2,
        },
        1024: {
            slidesPerView: 3,
        },
    },
  });

  
  AOS.init();

  function googleTranslateElementInit(){
    new google.translate.TranslateElement(
        {pageLanguage: 'en'},
        'google_translate_element'
    
    );
  }

  var swiper = new Swiper(".mySwiper4", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 100,
      modifier: 1,
      slideShadows: true,
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });

  const buttons = document.querySelectorAll('button');

  buttons.forEach( button => {
    button.addEventListener('click', ()=>{
      const faq = button.nextElementSibling;
      const icon = button.children[1];

      faq.classList.toggle('show');
      icon.classList.toggle('rotate');
    })
  })