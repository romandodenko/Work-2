<?php
include 'header.php';
?>
    <main>
      <section class="gero">
        <div class="container">
          <div class="gero__content">
            <div class="gero__body">
              <h1 class="gero__title">
                Najlepsze automaty do gier
              </h1>
              <p class="gero__text">
                Przeżyj ekscytujące gry już teraz na naszej stronie internetowej. Zanurz się w świat jasnej rozrywki i
                spędź wolny czas
              </p>
              <a class="gero__link" href="#games">
                Zagraj teraz
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="content">
        <div class="content__body">
          <div class="benefits" id="benefits">
            <div class="container">
              <ul class="benefits__list">
                <li class="benefits__item">
                  <h2 class="benefits__title">
                    Nowoczesna grafika
                  </h2>
                  <p class="benefits__text">
                    Jasna i nowoczesna grafika, ciesz się wizualną prezentacją.
                  </p>
                </li>
                <li class="benefits__item benefits__item_2">
                  <h2 class="benefits__title">
                    Rejestracja nie jest wymagana
                  </h2>
                  <p class="benefits__text">
                    Aby rozpocząć grę, nie musisz się rejestrować, po prostu znajdź odpowiednią grę
                  </p>
                </li>
                <li class="benefits__item">
                  <h2 class="benefits__title">
                    Wolne gniazda
                  </h2>
                  <p class="benefits__text">
                    Możesz spędzać godziny na naszej stronie, nie martwiąc się o swoje saldo
                  </p>
                </li>
              </ul>
            </div>
          </div>
          <div class="opt" id="about">
            <div class="container">
              <div class="opt__content">
                <div class="opt__descr">
                  <h2 class="opt__title">
                    Najlepsze automaty do gier i automaty
                  </h2>
                  <p class="opt__text">
                    Dokładnie wiemy, jak stworzyć niezapomnianą rozrywkę!
                    Utrzymanie nienagannej reputacji jest naszym najwyższym priorytetem. Misją naszej firmy jest
                    zagwarantowanie rzetelności i przejrzystości z każdym z naszych użytkowników. Wykazujemy maksymalną
                    lojalność w rozwiązywaniu wszelkich problemów!
                  </p>
                  <p class="opt__text">
                    Vegas jest w Twoich rękach! Z oszałamiającą grafiką i jednymi z najfajniejszych zwrotów akcji, nasze
                    automaty są jedynym w swoim rodzaju doświadczeniem! Od nostalgicznych klasyków po nowoczesne
                    oryginały, nasze gry na automatach gwarantują mnóstwo zabawy! I to nie tylko oferowane przez nas
                    automaty!
                  </p>
                </div>
                <div class="opt__image">
                  <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
                </div>
              </div>
            </div>
          </div>
          <div class="game" id="games">
            <div class="container">
              <ul class="game__list">
                <li class="game__item">
                  <div class="game__image">
                    <a href="game-1.php">
                      <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                    </a>
                  </div>
                  <div class="game__descr">
                    <a class="game__link" href="game-1.php">
                      Disco Diamonds
                    </a>
                    <a class="game__play" href="game-1.php">
                      <img src="./img/play.svg" alt="">
                    </a>
                  </div>
                </li>
                <li class="game__item">
                  <div class="game__image">
                    <a href="game-2.php">
                      <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                    </a>
                  </div>
                  <div class="game__descr">
                    <a class="game__link" href="game-2.php">
                      Fruit Disco
                    </a>
                    <a class="game__play" href="game-2.php">
                      <img src="./img/play.svg" alt="">
                    </a>
                  </div>
                </li>
                <li class="game__item game__item_3">
                  <div class="game__image">
                    <a href="game-3.php">
                      <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                    </a>
                  </div>
                  <div class="game__descr">
                    <a class="game__link" href="game-3.php">
                      Disco Danny
                    </a>
                    <a class="game__play" href="game-3.php">
                      <img src="./img/play.svg" alt="">
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>