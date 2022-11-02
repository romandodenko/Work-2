<?php
include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__body">
              <h1 class="hero__title">
                Gry dla Polski
              </h1>
              <p class="hero__text">
                Graj z nami swoją ulubioną rozrywką i wygraj najlepsze wirtualne nagrody.
              </p>
              <a class="hero__link" href="#games">
                Grać
              </a>
            </div>
            <p class="hero__descleimer">
              Gry oferowane na stronie nie dają użytkownikom możliwości wygrania prawdziwych pieniędzy.
              Witryna nie zapewnia użytkownikom umiejętności, które można wykorzystać w prawdziwym hazardzie. Gry są
              dostępne dla użytkowników powyżej 18 roku życia.
            </p>
          </div>
        </div>
      </section>
      <section class="gry" id="games">
        <div class="container">
          <h2 class="gry__title">
            Nasze gry
          </h2>
          <ul class="gry__list">
            <li class="gry__item">
              <div class="gry__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Game"></picture>
                </a>
              </div>
              <a class="gry__link" href="game-1.php">
                Spēlēt
              </a>
            </li>
            <li class="gry__item">
              <div class="gry__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Game"></picture>
                </a>
              </div>
              <a class="gry__link" href="game-2.php">
                Spēlēt
              </a>
            </li>
            <li class="gry__item">
              <div class="gry__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Game"></picture>
                </a>
              </div>
              <a class="gry__link" href="game-3.php">
                Spēlēt
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="nas" id="about">
        <div class="nas__container container">
          <div class="nas__descr">
            <h2 class="nas__title">
              O nas
            </h2>
            <p class="nas__text">
              Jeśli chcesz grać w gry za darmo i bez rejestracji - zapraszamy na naszą stronę. Tutaj możesz wspaniale
              odpocząć po pracy i uzyskać możliwość opanowania dowolnej gry, którą lubisz, nie płacąc za to ani grosza.
              Zasady w większości przypadków są bardzo proste: gracz musi postawić określoną kwotę (realną lub wyrażoną
              w konwencjonalnej walucie, jeśli chcesz grać „dla zabawy”), ustawić liczbę aktywnych linii i zakręcić
              bębnami. Dzięki możliwości grania w gry szybko nauczysz się podstawowych zasad ekscytującego procesu i
              spędzisz niezapomniane chwile podczas prawdziwej celebracji emocji.
            </p>
            <div class="nas__item">
              <p class="nas__text">
                Pomimo obfitości informacji o tym gatunku gier, zawsze lepiej oceniać je w bezpośrednim z nimi
                kontakcie. Każdy gracz ma indywidualne upodobania i tylko w trybie może korzystać z dowolnego automatu
                do gry, który mu się podoba, bez wpłacania prawdziwych pieniędzy. Wchodząc do darmowej wersji, aplikacja
                bez żadnych pytań zlicza określoną w regulaminie dla użytkownika liczbę kredytów demo, po których
                rozpoczyna się bezpośrednia gra na automatach bez rejestracji i dodatkowej weryfikacji tożsamości
                gracza. W ten sposób automaty do gier staną się Ci bliższe.
              </p>
            </div>
          </div>
          <div class="nas__image" data-da=".nas__item, 991, 1">
            <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
          </div>
        </div>
      </section>
      <section class="ben" id="benefits">
        <div class="container">
          <h2 class="ben__title">
            Korzyści dla graczy naszej strony
          </h2>
          <ul class="ben__list">
            <li class="ben__item">
              <h3 class="ben__subtitle">
                Zrelaksuj się bez wychodzenia z domu, wystarczy połączenie z Internetem.
              </h3>
            </li>
            <li class="ben__item">
              <h3 class="ben__subtitle">
                Zaoszczędź cenne minuty, grając bez rejestracji i SMS-ów.
              </h3>
            </li>
            <li class="ben__item">
              <h3 class="ben__subtitle">
                Wybierz swoją ulubioną grę dowolnego producenta;
              </h3>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <div class="popup">
      <div class="popup__close"></div>
      <div class="popup__body">
        <form class="popup__form" action="/">
          <div class="popup__image">
            <picture><source srcset="./img/popup.webp"type="image/webp"><img src="./img/popup.png" alt="Pic"></picture>
          </div>
          <p class="popup__text">Nasze gry są przeznaczone dla DOROSŁYCH odbiorców w wieku 18 lat i starszych. Klikając
            na
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