let searchBtn = document.querySelector('#search-btn');
let searchBar = document.querySelector('.search-bar-container');
let formBtn = document.querySelector('#login-btn');
let popupBtn = document.querySelector('#popup-btn');
let loginForm = document.querySelector('.login-form-container');
let popupForm = document.querySelector('.popup-form-container');
let formClose = document.querySelector('#form-close');
let popupClose = document.querySelector('#popup-close');
let menu = document.querySelector('#menu-bar');
let navbar = document.querySelector('.navbar');
let videoBtn = document.querySelectorAll('.vid-btn');

window.onscroll = () =>{
    searchBtn.classList.remove('fa-times');
    searchBar.classList.remove('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
    popupForm.classList.remove('active');
    loginForm.classList.remove('active');
}

menu.addEventListener('click', () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
});

searchBtn.addEventListener('click', () =>{
    searchBtn.classList.toggle('fa-times');
    searchBar.classList.toggle('active');
});

formBtn.addEventListener('click', () =>{
    console.log("test form btn");
    loginForm.classList.add('active');
});

formClose.addEventListener('click', () =>{
    loginForm.classList.remove('active');
});

popupBtn.addEventListener('click', () =>{
  popupForm.classList.add('active');
});

popupClose.addEventListener('click', () =>{
  popupForm.classList.remove('active');
});

videoBtn.forEach(btn =>{
    btn.addEventListener('click', ()=>{
        document.querySelector('.controls .active').classList.remove('active');
        btn.classList.add('active');
        let src = btn.getAttribute('data-src');
        document.querySelector('#video-slider').src = src;
    });
});

var swiper = new Swiper(".review-slider", {
    spaceBetween: 20,
    loop:true,
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

var swiper = new Swiper(".brand-slider", {
    spaceBetween: 20,
    loop:true,
    autoplay: {
        delay: 2500,
        disableOnInteraction: false,
    },
    breakpoints: {
        450: {
          slidesPerView: 2,
        },
        768: {
          slidesPerView: 3,
        },
        991: {
          slidesPerView: 4,
        },
        1200: {
          slidesPerView: 5,
        },
      },
});

function change(namapaket) {
  document.getElementById("paket").value= namapaket;
}

function detailed(namapaket,details) {
  popupForm.classList.add('active');
  document.getElementById("pop_up_nama_hotel").innerHTML= namapaket;
  document.getElementById("pop_up_desc").innerHTML = details;
}