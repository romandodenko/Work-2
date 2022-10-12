<?php
include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__body">
              <span class="hero__span">
                Darmowe gry już na Ciebie czekają
              </span>
              <h1 class="hero__title">
                Zagraj w najlepsze gry
              </h1>
              <a class="hero__link" href="#games">
                Zagraj teraz
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="benefits" id="benefits">
        <div class="container">
          <ul class="benefits__list">
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-1.svg" alt="Icon">
              </span>
              <h2 class="benefits__title">
                Gry wysokiej jakości
              </h2>
              <p class="benefits__text">
                Wysoka jakość i szczegółowe renderowanie gier
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-2.svg" alt="Icon">
              </span>
              <h2 class="benefits__title">
                Ścieżka dźwiękowa
              </h2>
              <p class="benefits__text">
                Doskonałe efekty dźwiękowe i przyjemna melodia w tle
              </p>
            </li>
            <li class="benefits__item">
              <span class="benefits__icon">
                <img src="./img/icon-3.svg" alt="Icon">
              </span>
              <h2 class="benefits__title">
                Darmowe gry
              </h2>
              <p class="benefits__text">
                Główną zaletą jest to, że wszystkie gry są darmowe.
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title">
            O nas
          </h2>
          <div class="about__content">
            <div class="about__descr">
              <p class="about__text">
                Co minutę dziesiątki graczy szuka wirtualnych gier za nierealne pieniądze. Zapotrzebowanie na darmowe
                zasoby tłumaczy się wieloma niuansami: anonimowością, powszechną dostępnością, wysokimi szansami na
                zwycięstwo. Gry za nierealne pieniądze bez rejestracji wzywają do otwierania ulubionych urządzeń od
                światowych deweloperów. Atrakcyjne bonusy, pierwszorzędna obsługa, szybkość transferu materiałów są
                dostępne dla graczy. Po przyznaniu nagrody zarejestrowanym klientom, którzy osiągnęli pełnoletność,
                przelew na konto trwa kilka minut.
              </p>
              <div class="about__item">
                <p class="about__text">
                  Wersje demonstracyjne gier nie wiążą się z ryzykiem wydatków, ale klienci wybierają gry na wirtualne
                  pieniądze, ponieważ uważają, że doświadczenie posiadania symulatorów zasługuje na szczególną uwagę.
                </p>
              </div>
            </div>
            <div class="about__image" data-da=".about__item, 991, last">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="games" id="games">
        <div class="container">
          <ul class="games__list">
            <li class="games__item">
              <div class="games__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </div>
              <a class="games__link" href="game-1.php">
                Bawić się
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Image"></picture>
                </a>
              </div>
              <a class="games__link" href="game-2.php">
                Bawić się
              </a>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.jpg" alt="Image"></picture>
                </a>
              </div>
              <a class="games__link" href="game-3.php">
                Bawić się
              </a>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <div class="popup">
      <div class="popup__close"></div>
      <div class="popup__body">
        <form class="popup__form" action="/">
          <p class="popup__text">Nasze gry są przeznaczone dla DOROSŁYCH odbiorców w wieku 18 lat i starszych. Klikając na
            przycisk potwierdzasz swój wiek.</p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <div class="popup__form-bottom">
            <a class="popup__button" href="main.php">Zgodzić się</a>
          </div>
        </form>
      </div>
    </div>
    <?php
    include 'footer.php';
    ?>