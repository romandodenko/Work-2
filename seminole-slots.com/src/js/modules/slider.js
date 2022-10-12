const gallerySwiperItem = document.querySelector(".gallery-swiper");
if (gallerySwiperItem) {
  const gallerySwiper = new Swiper('.gallery-swiper', {
    loop: true,
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: "auto",
    spaceBetween: 20,
    direction: 'horizontal',
    navigation: {
      nextEl: '.gallery-swiper-next',
      prevEl: '.gallery-swiper-prev',
    },
  
  });
  
}