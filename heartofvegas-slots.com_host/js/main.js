"use strict"

window.onload = function () {

  const menu = document.querySelector(".header__menu");

  document.addEventListener("click", function (e) {
    if (e.target.closest(".burger")) {
      menu.classList.add("menu-active")
      document.body.style.overflow = "hidden";
    }
    if (e.target.closest(".header__exit-menu")) {
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

  const block4SwiperItem = document.querySelector(".block-4-swiper");

  if (block4SwiperItem) {
    const block4SwiperThumb = new Swiper('.block-4-thumb', {
      loop: true,
      observer: true,
      observeParents: true,
      watchOverflow: true,
      direction: 'horizontal',
      breakpoints: {
        320: {
          slidesPerView: 5,
        },
        601: {
          slidesPerView: 6,
        },
        992: {
          slidesPerView: 8,
          spaceBetween: 10
        },
      }
    });
    const block4Swiper = new Swiper('.block-4-swiper', {
      loop: true,
      observer: true,
      observeParents: true,
      watchOverflow: true,
      slidesPerView: 3,
      direction: 'horizontal',
      thumbs: {
        swiper: block4SwiperThumb,
      },
      navigation: {
        nextEl: '.block-4-swiper-next',
        prevEl: '.block-4-swiper-prev',
      },
      breakpoints: {
        320: {
          spaceBetween: 10
        },
        601: {
          spaceBetween: 30
        },
        1220: {
          spaceBetween: 50
        },
      }
    });

  }



  document.addEventListener("click", function (e) {
    if (e.target.closest(".popup__exit")) {
      document.querySelector(".popup").classList.remove("popup-active")
    }
  })
}