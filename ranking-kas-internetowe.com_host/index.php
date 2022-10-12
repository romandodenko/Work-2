<?php
include 'header.php';
?>
      <div class="page__bottom">
        <main>
          <section class="logo">
            <div class="container">
              <a class="logo__logo" href="main.php">
                <img src="./img/logo.svg" alt="Logo">
              </a>
            </div>
          </section>
          <section class="block">
            <div class="container">
              <div class="block__content">
                <div class="block__body">
                  <span class="block__span">
                    Codzienna rozrywka
                  </span>
                  <h1 class="block__title">
                    Darmowe gry
                  </h1>
                  <p class="block__text">
                    Weź udział w najlepszych grach na naszej stronie i spędź z nami czas! Tutaj możesz poczuć przyjemność z różnorodnych gier i bardzo łatwo zabić czas
                  </p>
                  <a class="block__link" href="#games" data-da=".block__content, 991, last">
                    Bawić się
                  </a>
                </div>
                <div class="block__image">
                  <picture><source srcset="./img/hero.webp"type="image/webp"><img src="./img/hero.png" alt="Image"></picture>
                </div>
              </div>
            </div>
          </section>
          <section class="pomp" id="benefits">
            <div class="container">
              <ul class="pomp__list">
                <li class="pomp__item">
                  <div class="pomp__wrapper-icon">
                    <span class="pomp__icon">
                      <img src="./img/icon-1.svg" alt="Icon">
                    </span>
                  </div>
                  <h2 class="pomp__title">
                    Gry bez załączników
                  </h2>
                  <p class="pomp__text">
                    Możesz grać i nie martwić się o swoje środki, depozyt jest odnawiany po ponownym załadowaniu strony
                  </p>
                </li>
                <li class="pomp__item pomp__item_2">
                  <div class="pomp__wrapper-icon">
                    <span class="pomp__icon">
                      <img src="./img/icon-2.svg" alt="Icon">
                    </span>
                  </div>
                  <h2 class="pomp__title">
                    Najlepsza rozrywka
                  </h2>
                  <p class="pomp__text">
                    Na naszej stronie możesz cieszyć się grą z doskonałą grafiką i efektami dźwiękowymi.
                  </p>
                </li>
                <li class="pomp__item">
                  <div class="pomp__wrapper-icon">
                    <span class="pomp__icon">
                      <img src="./img/icon-3.svg" alt="Icon">
                    </span>
                  </div>
                  <h2 class="pomp__title">
                    Graj na dowolnym urządzeniu
                  </h2>
                  <p class="pomp__text">
                    Nasze gry są dostępne zawsze i wszędzie na Twoich gadżetach
                  </p>
                </li>
              </ul>
            </div>
          </section>
          <section class="plmn" id="games">
            <div class="container">
              <ul class="plmn__list">
                <li class="plmn__item">
                  <div class="plmn__image">
                    <a href="game-1.php">
                      <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="plmn__link" href="game-1.php">
                    Disco Diamonds
                  </a>
                </li>
                <li class="plmn__item">
                  <div class="plmn__image">
                    <a href="game-2.php">
                      <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="plmn__link" href="game-2.php">
                    Vegas Night Life
                  </a>
                </li>
                <li class="plmn__item">
                  <div class="plmn__image">
                    <a href="game-3.php">
                      <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="plmn__link" href="game-3.php">
                    Slot Vegas 
                  </a>
                </li>
              </ul>
            </div>
          </section>
          <section class="say" id="about">
            <div class="say__container container">
              <h2 class="say__title">
                O nas
              </h2>
              <p class="say__text">
                Graj w prawdziwe gry! Mamy wszystkie twoje ulubione gry.
              </p>
              <p class="say__text">
                Ale to nie wszystko - czekają na Ciebie również darmowe kredyty, codzienne promocje i wiele innych ekscytujących funkcji...
              </p>
              <p class="say__text">
                Graj we wszystkie swoje ulubione gry na telefonie lub komputerze. Wiernie odtworzyliśmy wszystkie obrazy i dźwięki, dzięki czemu możesz cieszyć się najlepszymi prawdziwymi grami kasynowymi o każdej porze dnia i w dowolnym miejscu.
              </p>
              <p class="say__text">
                Każdego dnia, w którym grasz, dajemy Ci darmowy bonus! Graj codziennie i obserwuj, jak rośnie Twój bonus! Graj ze znajomymi na naszych tablicach wyników, w których dajemy graczom jeszcze więcej nagród!
              </p>
              <p class="say__text">
                Zapewniamy całodobową obsługę klienta, jeśli kiedykolwiek będziesz potrzebować pomocy, skontaktuj się z naszym przyjaznym i oddanym zespołem serwisowym.
              </p>
            </div>
          </section>
        </main>
        <div class="popup">
          <div class="popup__close"></div>
          <div class="popup__body">
            <div class="popup__image">
              <picture><source srcset="./img/popup.webp"type="image/webp"><img src="./img/popup.png" alt="Image"></picture>
            </div>
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