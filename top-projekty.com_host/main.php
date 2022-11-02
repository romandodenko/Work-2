<?php
include 'header.php';
?>
    <main>
      <section class="copy">
        <div class="container">
          <div class="copy__content">
            <div class="copy__body">
              <span class="copy__span">
                Darmowe gry
              </span>
              <h1 class="copy__title">
                Gry oryginalne
              </h1>
              <p class="copy__text">
                Pozbądź się wszystkich zmartwień i zanurz się w świecie gier fantasy
              </p>
              <a class="copy__link" href="#games">
                Zagraj teraz
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="jarek" id="benefits">
        <div class="jarek__container container">
          <ul class="jarek__list">
            <li class="jarek__item">
              <h3 class="jarek__title">
                Najlepsza drużyna
              </h3>
              <p class="jarek__text">
                Jeśli masz jakiekolwiek trudności lub pytania, nasz zespół specjalistów jest gotów Ci pomóc
              </p>
            </li>
            <li class="jarek__item">
              <h3 class="jarek__title">
                Gry z różnymi fabułami
              </h3>
              <p class="jarek__text">
                Gry z naszymi słowami na pewno się nie znudzą, są znacznie lepsze niż te klasyczne.
              </p>
            </li>
            <li class="jarek__item">
              <h3 class="jarek__title">
                Graj w gry za darmo
              </h3>
              <p class="jarek__text">
                Gry nie wymagają wpłaty, Twoje saldo będzie zawsze uzupełniane automatycznie wraz z postępem w grze
              </p>
            </li>
          </ul>
          <div class="jarek__image">
            <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
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
                <a class="games__name" href="game-1.php">
                  Beowulf
                </a>
                <a class="games__play" href="game-1.php">
                  Zagraj teraz
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
                <a class="games__name" href="game-2.php">
                  Feline Fury
                </a>
                <a class="games__play" href="game-2.php">
                  Zagraj teraz
                </a>
              </div>
            </li>
            <li class="games__item">
              <div class="games__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <div class="games__descr">
                <a class="games__name" href="game-3.php">
                  Knights
                </a>
                <a class="games__play" href="game-3.php">
                  Zagraj teraz
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="grach" id="about">
        <div class="container">
          <h2 class="grach__title">
            O naszych darmowych grach
          </h2>
          <p class="grach__text">
            Aby rozpocząć grę, nie musisz płacić pieniędzy. Gdy tylko uruchomisz wybrany przez siebie automat do gry, na Twoje konto zostanie dodanych tysiąc kredytów, a w niektórych przypadkach nawet więcej. Kredyty są wirtualną walutą w grze i są liczone dla Twoich zainteresowań. W każdej chwili możesz ponownie uruchomić automat do gier, a na Twoim koncie ponownie pojawi się początkowa kwota wirtualnych pieniędzy. Bez względu na to, jak długo i w które automaty online grasz, nie są wymagane żadne płatności. Możesz grać w gry za darmo sam lub zapraszać znajomych, siedzieć z nimi na różnych komputerach i rywalizować w liczbie zwycięskich kombinacji.
          </p>
          <p class="grach__text">
            Na dowolnym automacie prezentowanym na naszej stronie możesz grać za darmo bez rejestracji. Nie możemy przegrać. Gra jest rozgrywana wyłącznie dla Twojej przyjemności, nie używa się prawdziwych pieniędzy.
          </p>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>