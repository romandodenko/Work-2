<?php
include 'header.php';
?>
    <main>
      <section class="blocker">
        <div class="container">
          <div class="blocker__content">
            <div class="blocker__body">
              <h1 class="blocker__title">
                Ciekawa rozrywka z automatami do gry
              </h1>
              <p class="blocker__text">
                Uzyskaj żywe wrażenia i przyjemne emocje z darmowych gier na automatach, graj dla zabawy
              </p>
              <a class="blocker__link" href="#games">
                Nasze gry
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="skaji" id="about">
        <div class="container">
          <h2 class="skaji__title">
            O nas
          </h2>
          <div class="skaji__content">
            <div class="skaji__descr">
              <p class="skaji__text">
                Nowoczesny hazard od najlepszych dostawców jest dostępny dla każdego gościa naszej strony. Zapraszamy do
                darmowej gry na wirtualnych automatach. Aby aktywować wybraną grę, nie musisz przechodzić procedury
                rejestracji, doładowywać konta ani ryzykować własnymi finansami. Stabilny internet to wszystko, czego
                potrzebujesz, aby dobrze się bawić. Ta strona zawiera automaty do gier napisane przez znanych
                programistów. Wybierz z obszernej listy swoich ulubionych automatów online, rozpocznij proces i baw się
                dobrze.
              </p>
              <p class="skaji__text">
                Czeka na Ciebie bogata kolekcja automatów do gier, składająca się ze sprawdzonych klasyków automatów i
                najnowszych innowacji naszych czasów - wybierz automat i stwórz niezapomniany czas wolny!
              </p>
            </div>
            <div class="skaji__image">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="poigraem" id="games">
        <div class="container">
          <ul class="poigraem__list">
            <li class="poigraem__item">
              <a href="game-1.php">
                <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Image"></picture>
              </a>
            </li>
            <li class="poigraem__item">
              <a href="game-2.php">
                <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Image"></picture>
              </a>
            </li>
            <li class="poigraem__item">
              <a href="game-3.php">
                <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.jpg" alt="Image"></picture>
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="ben" id="benefits">
        <div class="container">
          <ul class="ben__list">
            <li class="ben__item">
              <span class="ben__icon">
                <img src="./img/icon.svg" alt="Icon">
              </span>
              <h2 class="ben__title">
                Świetna grafika
              </h2>
              <p class="ben__text">
                Na naszej stronie znajdziesz automaty o najwyższej jakości i nowej grafice.
              </p>
            </li>
            <li class="ben__item">
              <span class="ben__icon">
                <img src="./img/icon.svg" alt="Icon">
              </span>
              <h2 class="ben__title">
                Nie wymaga pobierania
              </h2>
              <p class="ben__text">
                Nie komplikujemy Twojej rozgrywki, nie musisz niczego pobierać, aby grać.
              </p>
            </li>
            <li class="ben__item">
              <span class="ben__icon">
                <img src="./img/icon.svg" alt="Icon">
              </span>
              <h2 class="ben__title">
                Gra nie wymaga inwestycji
              </h2>
              <p class="ben__text">
                Nie ryzykuj swoich pieniędzy, graj dla zabawy
              </p>
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