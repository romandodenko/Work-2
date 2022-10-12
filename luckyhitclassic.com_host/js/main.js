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

  const yikSwiperItem = document.querySelector('.yik-swiper');

  if (yikSwiperItem) {
    const yikSwiper = new Swiper('.yik-swiper', {
      loop: true,
      observer: true,
      observeParents: true,
      watchOverflow: true,
      slidesPerView: 3,
      spaceBetween: 15,
      direction: 'horizontal',
      centeredSlides: true,
      pagination: {
        el: '.yik-swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.yik-swiper-next',
        prevEl: '.yik-swiper-prev',
      },
    });
  }

  const commentSwiperItem = document.querySelector('.comment-swiper');

  if (commentSwiperItem) {
    const swiper = new Swiper('.comment-swiper', {
      observer: true,
      observeParents: true,
      watchOverflow: true,
      slidesPerView: "auto",
      spaceBetween: 20,
      direction: 'horizontal',
      pagination: {
        el: '.comment-swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.comment-swiper-next',
        prevEl: '.comment-swiper-prev',
      },
    });
  }

  document.addEventListener("click", function (e) {
    if (e.target.closest(".popup__exit")) {
      document.querySelector(".popup").classList.remove("popup-a")
    }
  })
}