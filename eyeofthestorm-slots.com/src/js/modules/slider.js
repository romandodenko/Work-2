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
