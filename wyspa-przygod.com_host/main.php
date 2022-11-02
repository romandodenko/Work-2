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
          <section class="main">
            <div class="container">
              <div class="main__content">
                <div class="main__body">
                  <h1 class="main__title">
                    Zagraj kasyna
                  </h1>
                  <p class="main__text">
                    Nasza strona oferuje jasną i ekscytującą rozrywkę, hazard przyniesie Ci wiele przyjemności.
                  </p>
                  <a class="main__link" href="#games">
                    Oglądaj gry
                  </a>
                </div>
              </div>
            </div>
          </section>
          <section class="gry" id="games">
            <div class="container">
              <h2 class="gry__title">
                Gry
              </h2>
              <ul class="gry__list">
                <li class="gry__item gry__item_1">
                  <a href="game-1.php">
                    <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Game"></picture>
                  </a>
                </li>
                <li class="gry__item gry__item_2">
                  <a href="game-2.php">
                    <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Game"></picture>
                  </a>
                </li>
                <li class="gry__item gry__item_3">
                  <a href="game-3.php">
                    <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Game"></picture>
                  </a>
                </li>
              </ul>
            </div>
          </section>
          <section class="nas" id="about">
            <div class="container">
              <h2 class="nas__title">
                O nas
              </h2>
              <div class="nas__content">
                <div class="nas__image" data-da=".nas__item, 991, first">
                  <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
                </div>
                <div class="nas__descr">
                  <p class="nas__text">
                    Wszystkie automaty hazardowe prezentowane na naszej stronie są certyfikowane i spełniają najwyższe wymagania i standardy dotyczące hazardu. Do testowania na wszystkich automatach dostępna jest darmowa gra. Możemy również śmiało powiedzieć, że wszystkie darmowe automaty do gier mają te same funkcje i szanse na wygraną, co ich płatne odpowiedniki. Tutaj zebrano najlepsze automaty do gier , które są obecne w prawie wszystkich nowoczesnych kasynach  w Internecie. Graj w nowe automaty do gier bez rejestracji i bez SMS-ów, a los może ci się spodobać.
                  </p>
                  <div class="nas__item">
                    <p class="nas__text">
                      Jeśli wyobrażasz sobie automaty do gier jako nic innego jak specjalne maszyny z dźwigniami i migoczącymi elektrycznymi światłami stojącymi w rzędach, Twoje informacje są nieaktualne. Dziś można w nie grać na wiele sposobów, w tym obstawiać zdalnie przez Internet.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </section>
          <section class="korjech" id="benefits">
            <div class="container">
              <h2 class="korjech__title">
                Korzyść
              </h2>
              <ul class="korjech__list">
                <li class="korjech__item">
                  <span class="korjech__icon">
                    <img src="./img/icon-1.svg" alt="Icon">
                  </span>
                  <h3 class="korjech__subtitle">
                    Automaty są całkowicie darmowe
                  </h3>
                  <p class="korjech__text">
                    Nie musisz wydawać pieniędzy na nasze gry
                  </p>
                </li>
                <li class="korjech__item korjech__item_2">
                  <span class="korjech__icon">
                    <img src="./img/icon-2.svg" alt="Icon">
                  </span>
                  <h3 class="korjech__subtitle">
                    Najbardziej kolorowe automaty
                  </h3>
                  <p class="korjech__text">
                    Tutaj znajdziesz najbardziej kolorowe automaty z różnymi postaciami i super grafiką
                  </p>
                </li>
                <li class="korjech__item">
                  <span class="korjech__icon">
                    <img src="./img/icon-3.svg" alt="Icon">
                  </span>
                  <h3 class="korjech__subtitle">
                    Bez rejestracji
                  </h3>
                  <p class="korjech__text">
                    Aby zagrać na naszej stronie nie musisz się rejestrować i tracić dodatkowego czasu. Wystarczy wejść na stronę i rozpocząć grę.
                  </p>
                </li>
              </ul>
            </div>
          </section>
        </main>
<?php
include 'footer.php';
?>