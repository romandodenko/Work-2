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
  document.addEventListener("click", function (e) {
    if (e.target.closest(".popup__exit")) {
      document.querySelector(".popup").classList.remove("popup-visible")
    }
  })
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
  const showItem = document.querySelector(".check-item-show");

  if (showItem) {
    function showCode(showBtn, itemsNum, collapseBtn, listItem, lists) {
      const show = document.querySelector(`.${showBtn}`); // кнопка показать ещё
      const collapse = document.querySelector(`.${collapseBtn}`); // кнопка скрывает показанные элементы
      const itemsList = document.querySelectorAll(`.${listItem}`);
      const list = document.querySelector(`.${lists}`);
      const productsLength = itemsList.length; // получаем количество карточек
      let items = itemsNum; // элементы которые изначально показаны на странице, у меня в примере 6 , если меняем здесь чисто то и меняем число в items ниже, где вешаем событие на collapse
      console.log(productsLength)
      if (productsLength > items) { // проверка, если элементов больше чем показано, то кнопка показать ещё появляется
        show.classList.add("is-visible")
        show.addEventListener("click", function () {
          items += 5; // число элементов которые будут добавляться при клике на кнопку показать ещё

          const array = Array.from(list.children); // собираем массив элементов в списке

          const visibleItems = array.slice(0, items) // видимые элементы

          visibleItems.forEach(function (visibleItems) {
            visibleItems.classList.add("is-visible")
          })

          if (items === productsLength) { // если элементов больше нет которые нужно показать кнопка скрывается
            show.classList.remove("is-visible")
            collapse.classList.add("is-visible")
          } else if (items > productsLength) {
            show.classList.remove("is-visible")
            collapse.classList.add("is-visible")
          }
        })
      }

      collapse.addEventListener("click", function () {
        itemsList.forEach(function (it) {
          it.classList.remove("is-visible")
        })
        items = itemsNum;
        show.classList.remove("is-hidden")
        collapse.classList.remove("is-visible")
        if (productsLength > items) {
          show.classList.add("is-visible")
        }
      })
    }
    showCode("reviews-show", 2, "reviews-collapse", "reviews__item", "reviews__list")

  }

  var scroll = new SmoothScroll('a[href*="#"]', {
    speed: 1000,
    speedAsDuration: true
  });
}