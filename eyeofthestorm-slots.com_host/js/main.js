"use strict"

window.onload = function () {

  const menu = document.querySelector(".head__menu");

document.addEventListener("click", function (e) {
  if(e.target.closest(".burger")) {
    menu.classList.add("menu-active")
    document.body.style.overflow = "hidden";
  }
  if (e.target.closest(".head__exit-menu")) {
    menu.classList.remove("menu-active")
    document.body.style.overflow = "";
  }
  if (e.target.closest(".nav__link")) {
    menu.classList.remove("menu-active")
    document.body.style.overflow = "";
  }
})
  document.addEventListener("click", function(e) {
  if(e.target.closest(".popup__exit")) {
    document.querySelector(".popup").classList.remove("popup-visible")
  }
})
    function testWebP(callback) {
  var webP = new Image();

  webP.onload = webP.onerror = function () {
    callback(webP.height == 2);
  };

  webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}

testWebP(function (support) {
  if (support == true) {
    document.querySelector('body').classList.add('webp');
  } else {
    document.querySelector('body').classList.add('no-webp');
  }
});
    const swiper = new Swiper('.recensioni-swiper', {
  loop: true,
  observer: true,
  observeParents: true,
  watchOverflow: true,
  slidesPerView: "auto",
  direction: 'horizontal',
  navigation: {
    nextEl: '.recensioni-swiper-next',
    prevEl: '.recensioni-swiper-prev',
  },
  breakpoints: {
    320: {
      spaceBetween: 10
    },
    601: {
      spaceBetween: 15
    },
    992: {
      spaceBetween: 20
    }
  }
});

    var scroll = new SmoothScroll('a[href*="#"]', {
  speed: 1000,
  speedAsDuration: true
});
}