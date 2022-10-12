const swiper = new Swiper('.review-swiper', {
  loop: true,
  observer: true,
  observeParents: true,
  watchOverflow: true,
  slidesPerView: "auto",
  direction: 'horizontal',
  spaceBetween: 20,
  pagination: {
    el: '.hero__pagination',
    clickable: true,

  },
  navigation: {
    nextEl: '.review-swiper-next',
    prevEl: '.review-swiper-prev',
  },

});