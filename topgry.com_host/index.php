<?php
include 'header.php';
?>
    <main>
      <section class="horek">
        <div class="container">
          <div class="horek__content">
            <div class="horek__body">
              <h1 class="horek__title">
                Popularne gry
              </h1>
              <p class="horek__text">
                Najlepsze darmowe gry na naszej stronie, graj i poczuj falę emocji
              </p>
              <a class="horek__link" href="#games">
                Zagraj teraz
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="content">
        <div class="content__body">
          <div class="say" id="about">
            <div class="container">
              <h2 class="say__title">
                O naszej stronie i naszych darmowych grach
              </h2>
              <p class="say__text">
                Dziś każdy internauta może grać w wirtualne gry za darmo. Setki miejsc rozrywki oferują taką możliwość spędzenia wolnego czasu. Aby cieszyć się najlepszą grą bez ryzyka i strat, wystarczy wybrać niezawodny zasób i odebrać gry.
              </p>
              <div class="say__item">
                <p class="say__text">
                  Katalog zakładów zawiera różnorodne gry. Wszystkie wyposażone są w unikalne witryny, parametry techniczne. Filtry, pasek wyszukiwania, a także tytuły i kategorie są dostępne dla łatwego wyboru. Wdrożeniu Twojej ulubionej gry nie będzie towarzyszyć pobranie i instalacja dodatkowego oprogramowania, podanie danych osobowych oraz dokonanie płatności.
                </p>
                <div class="say__image">
                  <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="About"></picture>
                </div>
              </div>
            </div>
          </div>
          <div class="bez" id="benefits">
            <div class="container">
              <ul class="bez__list">
                <li class="bez__item">
                  <h3 class="bez__title">
                    Gra bez limitu
                  </h3>
                  <p class="bez__text">
                    Równowaga w grze może być nieskończona, graj i nie martw się o wynik
                  </p>
                </li>
                <li class="bez__item">
                  <h3 class="bez__title">
                    Zabawna rozrywka
                  </h3>
                  <p class="bez__text">
                    Nasza strona zawsze pomoże Ci w zabawie z najciekawszą rozrywką.
                  </p>
                </li>
                <li class="bez__item">
                  <h3 class="bez__title">
                    Nie wymagamy żadnych danych
                  </h3>
                  <p class="bez__text">
                    Pełna anonimowość na stronie nie prosimy o żadne Twoje dane.
                  </p>
                </li>
              </ul>
            </div>
          </div>
          <div class="games" id="games">
            <div class="container">
              <ul class="games__list">
                <li class="games__item">
                  <div class="games__image">
                    <a href="game-1.php">
                      <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                    </a>
                  </div>
                    <a class="games__link" href="game-1.php">
                      Disco Danny
                      <img src="./img/arrow.svg" alt="Arrow">
                    </a>
                </li>
                <li class="games__item">
                  <div class="games__image">
                    <a href="game-2.php">
                      <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                    </a>
                  </div>
                    <a class="games__link" href="game-2.php">
                      Fruit Disco 
                      <img src="./img/arrow.svg" alt="Arrow">
                    </a>
                </li>
                <li class="games__item">
                  <div class="games__image">
                    <a href="game-3.php">
                      <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                    </a>
                  </div>
                    <a class="games__link" href="game-3.php">
                      Disco Diamonds
                      <img src="./img/arrow.svg" alt="Arrow">
                    </a>
                </li>
              </ul>
            </div>
          </div>
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