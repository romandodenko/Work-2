// const swiper = new Swiper('.hero__swiper', {
//   loop: true,
//   // loopAdditionalSlides: 3, // Добавляет количество слайдов которые будут склонированы после создания цикла
//   // centeredSlides: true, // центрирует активный слайд по центру а не слева
//   observer: true,
//   observeParents: true,
//   watchOverflow: true,
//   slidesPerView: 1,
//   spaceBetween: 32,
//   // slidesPerGroup: 1, 
//   // centeredSlides: true, // активный слайд будет в центре
//   // autoHeight: true,
//   direction: 'horizontal',
//   // speed: 500, // Автовоспроизведение
//   // autoplay: {
//   // delay: 5000,
//   // disableOnInteraction: false,
//   // },
//   // thumbs: { // Читаем ниже что даёт эта настройка
//   //   swiper: thumbsSwiper,
//   // },
//   pagination: {
//     el: '.hero__pagination',
//     clickable: true,
//     // dynamicBullets: true, // Если много кружков пагинации
//     // dynamicMainBullets: 3, // Показывает количество отображаемых кружков пагинаии при включеном dynamicBullets
//   },
//   navigation: {
//     nextEl: '.hero__button-next',
//     prevEl: '.hero__button-prev',
//   },
//   // scrollbar: {
//   //   el: '.hero__scrollbar',
//   //   draggable: true, // позволяет сделать полосу прокрутки перетаскиваемой
//   // },
//   // breakpoints: {
//   //   320: {
//   //     slidesPerView: 2,
//   //     spaceBetween: 20
//   //   },
//   //   480: {
//   //     slidesPerView: 3,
//   //     spaceBetween: 30
//   //   },
//   //   640: {
//   //     slidesPerView: 4,
//   //     spaceBetween: 40
//   //   }
//   // }
// });
const block4SwiperItem = document.querySelector(".block-4-swiper");

if(block4SwiperItem) {
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
    thumbs: { // Читаем ниже что даёт эта настройка
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

