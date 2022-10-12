"use strict"

window.onload = function () {

  const menu = document.querySelector(".heading__menu");

  document.addEventListener("click", function (e) {
    if (e.target.closest(".burger")) {
      menu.classList.add("menu-active")
      document.body.style.overflow = "hidden";
    }
    if (e.target.closest(".heading__exit-menu")) {
      menu.classList.remove("menu-active")
      document.body.style.overflow = "";
    }
    if (e.target.closest(".nav__link")) {
      menu.classList.remove("menu-active")
      document.body.style.overflow = "";
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

  var scroll = new SmoothScroll('a[href*="#"]', {
    speed: 1000,
    speedAsDuration: true
  });

  const galleriaSwiperItem = document.querySelector(".galleria-swiper");

  if (galleriaSwiperItem) {
    const galleriaSwiper = new Swiper('.galleria-swiper', {
      loop: true,
      observer: true,
      observeParents: true,
      watchOverflow: true,
      direction: 'horizontal',
      navigation: {
        nextEl: '.galleria-swiper-next',
        prevEl: '.galleria-swiper-prev',
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
          spaceBetween: 10
        },
        601: {
          slidesPerView: 2,
          spaceBetween: 15
        },
        992: {
          slidesPerView: 3,
          spaceBetween: 25
        }
      }
    });
  }

  document.addEventListener("click", function (e) {
    if (e.target.closest(".popup__exit")) {
      document.querySelector(".popup").classList.remove("popup-active")
    }
  })
}