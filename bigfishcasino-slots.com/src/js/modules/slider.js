const gallerySwiperItem = document.querySelector(".gallery-slider");
if (gallerySwiperItem) {
  const gallerySwiper = new Swiper('.gallery-slider', {
    loop: true,
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: 3,
    spaceBetween: 0,
    centeredSlides: true, // активный слайд будет в центре
    direction: 'horizontal',
    navigation: {
      nextEl: '.gallery-slider-next',
      prevEl: '.gallery-slider-prev',
    },
  
  });
}