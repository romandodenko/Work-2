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
    // scrollbar: {
    //   el: '.hero__scrollbar',
    //   draggable: true, // позволяет сделать полосу прокрутки перетаскиваемой
    // },
    // breakpoints: {
    //   320: {
    //     slidesPerView: 2,
    //     spaceBetween: 20
    //   },
    //   480: {
    //     slidesPerView: 3,
    //     spaceBetween: 30
    //   },
    //   640: {
    //     slidesPerView: 4,
    //     spaceBetween: 40
    //   }
    // }
  });
}

const commentSwiperItem = document.querySelector('.comment-swiper');

if(commentSwiperItem) {
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