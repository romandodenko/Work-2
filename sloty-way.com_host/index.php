<?php
include 'header.php';
?>
    <main>
      <section class="apping">
        <div class="container">
          <div class="apping__content">
            <div class="apping__body">
              <h1 class="apping__title">
                <span>Top 10</span> najlepszych gier
              </h1>
              <p class="apping__text">
                Graj i ciesz się niezapomnianą przyjemnością
              </p>
              <a class="apping__link" href="#games">
                Zagraj teraz
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="trapping" id="about">
        <div class="container">
          <div class="trapping__content">
            <div class="trapping__descr">
              <h2 class="trapping__title">
                Darmowe gry na naszej stronie
              </h2>
              <p class="trapping__text">
                Większość programistów udostępnia swoim grom tryb próbny, dzięki któremu użytkownicy mają możliwość wypróbowania gier za darmo. Tryb treningowy nie wymaga rejestracji i uzupełniania konta, ponieważ zakłady są dokonywane w kredytach warunkowych. Dlatego wersje demonstracyjne gier są przeznaczone dla graczy, którzy wolą wstępnie ocenić grę i zrozumieć zasady. Ta sama możliwość jest dostępna dla odwiedzających naszą stronę. Ta strona zawiera darmowe automaty do gry na komputerze lub smartfonie wyłącznie w celach informacyjnych.
              </p>
            </div>
            <div class="trapping__image">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="playening" id="games">
        <div class="container">
          <ul class="playening__list">
            <li class="playening__item">
              <div class="playening__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Image"></picture>
                </a>
              </div>
              <a class="playening__link" href="game-1.php">
                Bawić się
              </a>
            </li>
            <li class="playening__item">
              <div class="playening__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <a class="playening__link" href="game-2.php">
                Bawić się
              </a>
            </li>
            <li class="playening__item">
              <div class="playening__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.jpg" alt="Image"></picture>
                </a>
              </div>
              <a class="playening__link" href="game-3.php">
                Bawić się
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="elemet" id="benefits">
        <div class="container">
          <ul class="elemet__list">
            <li class="elemet__item">
              <span class="elemet__icon">
                <img src="./img/icon-1.svg" alt="Icon">
              </span>
              <h2 class="elemet__title">
                Rejestracja w serwisie wymaga czasu
              </h2>
              <p class="elemet__text">
                Nie zabieraj cennego czasu, który możesz poświęcić na grę, dołącz do gry już teraz bez rejestracji
              </p>
            </li>
            <li class="elemet__item">
              <span class="elemet__icon">
                <img src="./img/icon-2.svg" alt="Icon">
              </span>
              <h2 class="elemet__title">
                Nowoczesne gry
              </h2>
              <p class="elemet__text">
                Jeśli jesteś zmęczony przestarzałą grafiką i klasycznymi grami, nasza strona jest tym, czego potrzebujesz
              </p>
            </li>
            <li class="elemet__item">
              <span class="elemet__icon">
                <img src="./img/icon-3.svg" alt="Icon">
              </span>
              <h2 class="elemet__title">
                Twoje środki nie zostały wydane
              </h2>
              <p class="elemet__text">
                Wszystkie gry są darmowe i nie wymagają żadnych inwestycji.
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