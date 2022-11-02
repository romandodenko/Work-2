<?php
include 'header.php';
?>
    <main>
      <section class="slark">
        <div class="container">
          <div class="slark__content">
            <div class="slark__body">
              <h1 class="slark__title">
                10 najlepszych gier tutaj
              </h1>
              <p class="slark__text">
                Zagraj teraz, aby uzyskać najwyższą rozrywkę w grach
              </p>
              <a class="slark__link" href="#games">
                Zagraj teraz
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="benefits" id="benefits">
        <div class="benefits__container container">
          <ul class="benefits__list">
            <li class="benefits__item">
              <h3 class="benefits__title">
                Szanujemy graczy
              </h3>
              <p class="benefits__text">
                Traktujemy wszystkich graczy z szacunkiem i staramy się, aby każdy, grając na automatach, czerpał maksymalną przyjemność i zanurzył się w świat gier.
              </p>
            </li>
            <li class="benefits__item">
              <h3 class="benefits__title">
                Łatwy dostęp
              </h3>
              <p class="benefits__text">
                Wszystkie nowe gry są dostępne na naszej stronie internetowej i możesz grać w gry społecznościowe za darmo o każdej porze dnia bez rejestracji.
              </p>
            </li>
            <li class="benefits__item">
              <h3 class="benefits__title">
                Bez pobierania
              </h3>
              <p class="benefits__text">
                Ciesz się grą tu i teraz i nie pobieraj niczego, po prostu zacznij grać
              </p>
            </li>
          </ul>
          <div class="benefits__image">
            <picture><source srcset="./img/benefits.webp"type="image/webp"><img src="./img/benefits.png" alt="Image"></picture>
          </div>
        </div>
      </section>
      <section class="about" id="about">
        <div class="about__container container">
          <div class="about__column">
            <h2 class="about__title">
              O naszej stronie
            </h2>
            <p class="about__text">
              Wystarczy zebrać na ekranie trzy siódemki, a równowaga znacząco wzrośnie. Wersja próbna zawiera te same bonusy, rundy nagród, rundy ryzyka i mnożniki, co wersja główna. Jedyną różnicą jest to, że otrzymane monety pozostają na ekranie i nie można ich wypłacić.
            </p>
            <p class="about__text">
              Tylko wirtualne gry pozwalają doświadczyć ostrych emocji bez ryzyka dla zdrowia i portfela. Uruchamiając  w trybie anonimowym, dane osobowe i środki klienta są bezpieczne.
            </p>
          </div>
          <div class="about__column">
            <p class="about__text">
              Aby grać za darmo i bez rejestracji, od klienta nic nie jest wymagane. Nie musisz się rejestrować ani wpłacać osobistych pieniędzy na konto klienta. Wystarczy wybrać model i kliknąć na jego zdjęcie. Gra uruchomi się automatycznie w przeglądarce urządzenia. Kasyno przekaże środki upominkowe na saldo użytkownika, za pomocą których zostaną wypłacone spiny.
            </p>
            <p class="about__text">
              Darmowa gra nie jest ograniczona czasowo ani środkami. Po zresetowaniu konta klient będzie musiał tylko ponownie załadować stronę w gra i kontynuować proces. Możesz bawić się przez całą dobę.
            </p>
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
              <div class="games__descr">
                <a class="games__link" href="game-1.php">
                  Taste of China
                </a>
                <a class="games__play" href="game-1.php">
                  Bawić się
                </a>
              </div>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <div class="games__descr">
                <a class="games__link" href="game-2.php">
                  Bamboo Rush
                </a>
                <a class="games__play" href="game-2.php">
                  Bawić się
                </a>
              </div>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.jpg" alt="Image"></picture>
                </a>
              </div>
              <div class="games__descr">
                <a class="games__link" href="game-3.php">
                  Fruit Party
                </a>
                <a class="games__play" href="game-3.php">
                  Bawić się
                </a>
              </div>
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