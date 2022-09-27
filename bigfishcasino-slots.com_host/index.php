<?php
include 'header.php';
?>
<main>
  <section class="hero">
    <div class="container">
      <div class="hero__content">
        <div class="hero__descr">
          <h1 class="hero__title">
            Aplikacja z najlepszymi grami na automatach
          </h1>
          <p class="hero__text">
            Darmowa rozrywka społecznościowa dla Ciebie. Ekscytujące legendarne gry czekają na Ciebie w jednej
            aplikacji.
          </p>
          <a class="hero__download" target="_blank"
            href="https://play.google.com/store/apps/details?id=com.grandegames.slots.dafu.casino&gl=IT">
            Zainstalować
          </a>
        </div>
        <div class="hero__image">
          <picture>
            <source srcset="./img/hero.webp" type="image/webp"><img src="./img/hero.png" alt="Image"></picture>
        </div>
      </div>
      <a class="hero__link" href="#about">
        <img src="./img/arrow.svg" alt="Arrow">
      </a>
    </div>
  </section>
  <section class="about" id="about">
    <div class="container">
      <div class="about__body">
        <h2 class="about__title">
          Wejdź i spróbuj szczęścia!
        </h2>
        <p class="about__text">
          Gra nie jest grą na prawdziwe pieniądze i nie oferuje możliwości wygrania prawdziwych pieniędzy ani nagród.
          Praktyka lub sukces w grach społecznościowych nie oznacza sukcesu w grach hazardowych.
        </p>
        <p class="about__text">
          W Big Fish Casino możesz wygrać wirtualne nagrody, grając na automatach, blackjacku, pokerze Texas Hold'em,
          ruletce i nie tylko! Graj z przyjaciółmi i przeżyj prawdziwe emocje! Usiądź wygodnie, zrelaksuj się i napij
          się orzeźwiającego drinka - a my damy Ci frytki. Wspaniałe gry i miliony przyjaznych użytkowników czekają na
          Ciebie za darmo! Pobierz aplikację już teraz!
        </p>
        <p class="about__text">
          Wygraj fortunę, uczestnicząc w OGROMNYCH jackpotach, codziennych nagrodach, mini grach na automatach i nie
          tylko! Nasze wyjątkowe automaty do gier zabiorą Cię w ekscytującą przygodę! Za każdym razem, gdy w grze
          wybuchnie wulkan, wszyscy gracze otrzymują darmowe żetony. Graj ze znajomymi (do 5 osób) i rywalizuj, aby
          zobaczyć, kto najszybciej dotrze do mety!
        </p>
        <a class="about__download" target="_blank"
          href="https://play.google.com/store/apps/details?id=com.grandegames.slots.dafu.casino&gl=IT">
          Zainstalować
        </a>
      </div>
    </div>
  </section>
  <section class="gallery" id="gallery">
    <div class="container">
      <div class="gallery__wrapper-slider">
        <button class="gallery__button gallery-slider-prev">
          <img src="./img/double-arrow.svg" alt="Arrow">
        </button>
        <div class="gallery__slider gallery-slider swiper">
          <div class="gallery-slider__wrapper swiper-wrapper">
            <div class="gallery-slider__slide swiper-slide">
              <picture>
                <source srcset="./img/galery-2.webp" type="image/webp"><img src="./img/galery-2.png" alt=""></picture>
            </div>
            <div class="gallery-slider__slide swiper-slide">
              <picture>
                <source srcset="./img/galery-1.webp" type="image/webp"><img src="./img/galery-1.png" alt=""></picture>
            </div>
            <div class="gallery-slider__slide swiper-slide">
              <picture>
                <source srcset="./img/galery-3.webp" type="image/webp"><img src="./img/galery-3.png" alt=""></picture>
            </div>
            <div class="gallery-slider__slide swiper-slide">
              <picture>
                <source srcset="./img/galery-2.webp" type="image/webp"><img src="./img/galery-2.png" alt=""></picture>
            </div>
            <div class="gallery-slider__slide swiper-slide">
              <picture>
                <source srcset="./img/galery-1.webp" type="image/webp"><img src="./img/galery-1.png" alt=""></picture>
            </div>
            <div class="gallery-slider__slide swiper-slide">
              <picture>
                <source srcset="./img/galery-3.webp" type="image/webp"><img src="./img/galery-3.png" alt=""></picture>
            </div>
          </div>
        </div>
        <button class="gallery__button gallery-slider-next">
          <img src="./img/double-arrow.svg" alt="Arrow">
        </button>
      </div>
    </div>
  </section>
  <section class="reviews">
    <div class="container">
      <ul class="reviews__list check-item-show">
        <li class="reviews__item">
          <span class="reviews__avatar">
            <picture>
              <source srcset="./img/avatar.webp" type="image/webp"><img src="./img/avatar.png" alt="Avatar"></picture>
          </span>
          <div class="reviews__descr">
            <div class="reviews__info">
              <div class="reviews__info-item">
                <p class="reviews__name">
                  Iwan Samsonow
                </p>
                <time class="reviews__time" datetime="Data i godzina">
                  13 listopada 2021
                </time>
              </div>
              <ul class="reviews__stars">
                <span class="reviews__star">
                  <img src="./img/star-fill.svg" alt="Star">
                </span>
                <span class="reviews__star">
                  <img src="./img/star-fill.svg" alt="Star">
                </span>
                <span class="reviews__star">
                  <img src="./img/star-fill.svg" alt="Star">
                </span>
                <span class="reviews__star">
                  <img src="./img/star-fill.svg" alt="Star">
                </span>
                <span class="reviews__star">
                  <img src="./img/star-fill-gray.svg" alt="Star">
                </span>
              </ul>
            </div>
            <p class="reviews__text">
              Gra jest niesamowita! Podczas gry głupio zapominasz o wszystkich problemach i cieszysz się procesem. To
              jedna z moich ulubionych aplikacji!
            </p>
          </div>
        </li>
        <li class="reviews__item">
          <span class="reviews__avatar">
            <picture>
              <source srcset="./img/avatar.webp" type="image/webp"><img src="./img/avatar.png" alt="Avatar"></picture>
          </span>
          <div class="reviews__descr">
            <div class="reviews__info">
              <div class="reviews__info-item">
                <p class="reviews__name">
                  Oksana Burtseva
                </p>
                <time class="reviews__time" datetime="Data i godzina">
                  31 października 2018
                </time>
              </div>
              <ul class="reviews__stars">
                <span class="reviews__star">
                  <img src="./img/star-fill.svg" alt="Star">
                </span>
                <span class="reviews__star">
                  <img src="./img/star-fill.svg" alt="Star">
                </span>
                <span class="reviews__star">
                  <img src="./img/star-fill.svg" alt="Star">
                </span>
                <span class="reviews__star">
                  <img src="./img/star-fill.svg" alt="Star">
                </span>
                <span class="reviews__star">
                  <img src="./img/star-fill-gray.svg" alt="Star">
                </span>
              </ul>
            </div>
            <p class="reviews__text">
              Dobra, miłego wieczoru. Jedno jest przygnębiające, tak interesujące, że nie wyjdziesz! ))
            </p>
          </div>
        </li>
        <li class="reviews__item">
          <span class="reviews__avatar">
            <picture>
              <source srcset="./img/avatar.webp" type="image/webp"><img src="./img/avatar.png" alt="Avatar"></picture>
          </span>
          <div class="reviews__descr">
            <div class="reviews__info">
              <div class="reviews__info-item">
                <p class="reviews__name">
                  Iwan Samsonow
                </p>
                <time class="reviews__time" datetime="Data i godzina">
                  13 listopada 2021
                </time>
              </div>
              <ul class="reviews__stars">
                <span class="reviews__star">
                  <img src="./img/star-fill.svg" alt="Star">
                </span>
                <span class="reviews__star">
                  <img src="./img/star-fill.svg" alt="Star">
                </span>
                <span class="reviews__star">
                  <img src="./img/star-fill.svg" alt="Star">
                </span>
                <span class="reviews__star">
                  <img src="./img/star-fill.svg" alt="Star">
                </span>
                <span class="reviews__star">
                  <img src="./img/star-fill-gray.svg" alt="Star">
                </span>
              </ul>
            </div>
            <p class="reviews__text">
              Gra jest niesamowita! Podczas gry głupio zapominasz o wszystkich problemach i cieszysz się procesem. To
              jedna z moich ulubionych aplikacji!
            </p>
          </div>
        </li>
        <li class="reviews__item">
          <span class="reviews__avatar">
            <picture>
              <source srcset="./img/avatar.webp" type="image/webp"><img src="./img/avatar.png" alt="Avatar"></picture>
          </span>
          <div class="reviews__descr">
            <div class="reviews__info">
              <div class="reviews__info-item">
                <p class="reviews__name">
                  Oksana Burtseva
                </p>
                <time class="reviews__time" datetime="Data i godzina">
                  31 października 2018
                </time>
              </div>
              <ul class="reviews__stars">
                <span class="reviews__star">
                  <img src="./img/star-fill.svg" alt="Star">
                </span>
                <span class="reviews__star">
                  <img src="./img/star-fill.svg" alt="Star">
                </span>
                <span class="reviews__star">
                  <img src="./img/star-fill.svg" alt="Star">
                </span>
                <span class="reviews__star">
                  <img src="./img/star-fill.svg" alt="Star">
                </span>
                <span class="reviews__star">
                  <img src="./img/star-fill-gray.svg" alt="Star">
                </span>
              </ul>
            </div>
            <p class="reviews__text">
              Dobra, miłego wieczoru. Jedno jest przygnębiające, tak interesujące, że nie wyjdziesz! ))
            </p>
          </div>
        </li>
      </ul>
      <div class="reviews__wrapper-button">
        <button class="reviews__button reviews-show">
          Zwiększać
          <span>
            <img src="./img/arrow.svg" alt="Arrow">
          </span>
        </button>
        <button class="reviews__button reviews-collapse">
          Upadek
        </button>
      </div>
    </div>

  </section>
</main>
<div class="popup popup-visible">
  <div class="popup__close"></div>
  <div class="popup__body">
    <p class="popup__text">
      Dokładamy wszelkich starań, aby zapewnić jak najlepsze wrażenia na naszej stronie internetowej.Dokładamy wszelkich
      starań, aby zapewnić jak najlepsze wrażenia na naszej stronie internetowej.
    </p>
    <button class="popup__exit">
      OK
    </button>
  </div>
</div>
<?php
include 'footer.php';
?>