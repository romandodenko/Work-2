"use strict"

window.onload = function () {

  const menu = document.querySelector(".header__menu");

document.addEventListener("click", function (e) {
  if(e.target.closest(".burger")) {
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

    
const gallerySwiperItem = document.querySelector(".gallery-swiper");

if (gallerySwiperItem) {
  const gallerySwiper = new Swiper('.gallery-swiper', {
    loop: true,
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: "auto",
    centeredSlides: true, // активный слайд будет в центре
    direction: 'horizontal',
    pagination: {
      el: '.gallery-swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.gallery-swiper-next',
      prevEl: '.gallery-swiper-prev',
    },
    breakpoints: {
      320: {
        spaceBetween: 10
      },
      601: {
        spaceBetween: 50
      },
      740: {
        spaceBetween: 105
      },
      992: {
        spaceBetween: 50
      },
      1205: {
        spaceBetween: 105
      },
      1340: {
        spaceBetween: 140
      }
    }
  });
}
const reviewsSwiperItem = document.querySelector(".reviews-swiper");

if (reviewsSwiperItem) {
  const reviewsSwiper = new Swiper('.reviews-swiper', {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: "auto",
    direction: 'horizontal',
    navigation: {
      nextEl: '.reviews-swiper-next',
      prevEl: '.reviews-swiper-prev',
    },
    breakpoints: {
      320: {
        spaceBetween: 10
      },
      601: {
        spaceBetween: 30
      }
    }
  });
}

    document.addEventListener("click", function(e) {
  if(e.target.closest(".popup__exit")) {
    document.querySelector(".popup").classList.remove("popup-active")
  }
})
}