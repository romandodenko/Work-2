
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