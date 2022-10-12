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