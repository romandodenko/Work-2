<?php
include 'header.php';
?>
    <main>
      <section class="mainer">
        <div class="container">
          <div class="mainer__content">
            <div class="mainer__body">
              <h1 class="mainer__title">
                Darmowe gry dla szerokiej gamy graczy
              </h1>
              <p class="mainer__text">
                Ekscytująca rozrywka tu i teraz, nie powinieneś tracić czasu, wejdź na naszą stronę i graj
              </p>
              <a class="mainer__link" href="#games">
                Bawić się
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="gaming" id="games">
        <div class="container">
          <ul class="gaming__list">
            <li class="gaming__item">
              <div class="gaming__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </div>
              <div class="gaming__descr">
                <a class="gaming__play" href="game-1.php">
                  Bawić się
                </a>
                <a class="gaming__link" href="game-1.php">
                  Twin Spin
                </a>
              </div>
            </li>
            <li class="gaming__item">
              <div class="gaming__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Image"></picture>
                </a>
              </div>
              <div class="gaming__descr">
                <a class="gaming__play" href="game-2.php">
                  Bawić się
                </a>
                <a class="gaming__link" href="game-2.php">
                  Fruit Party
                </a>
              </div>
            </li>
            <li class="gaming__item">
              <div class="gaming__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <div class="gaming__descr">
                <a class="gaming__play" href="game-3.php">
                  Bawić się
                </a>
                <a class="gaming__link" href="game-3.php">
                  Hot to Burn
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="satting" id="about">
        <div class="container">
          <h2 class="satting__title">
            O nas
          </h2>
          <p class="satting__text">
            Dołącz i graj w darmowe automaty społecznościowe opracowane przez profesjonalistów z branży gier. Gry są zawsze aktualizowane o nowe automaty do gry co tydzień! Poczuj dreszczyk emocji związanych z wieloma niesamowitymi, codziennymi darmowymi monetami, zdobywaj niesamowite nagrody i ogromne nagrody, obracając swoje ulubione automaty!
            Wygrywaj darmowe spiny każdego dnia! Spróbuj szczęścia na codziennym kole każdego dnia!
          </p>
          <p class="satting__text">
            Zagraj teraz i zostań graczem VIP, aby być jednym z pierwszych graczy w tym wysokiej jakości kasynie społecznościowym. Co miesiąc wypuszczany będzie nowy automat do gry! Coś łatwego do dodania do swojej kolekcji. Ten produkt jest przeznaczony wyłącznie do użytku rozrywkowego przez osoby powyżej 18 roku życia. Praktyka lub sukces w grach społecznościowych w kasynach nie oznacza przyszłego sukcesu w grach hazardowych na prawdziwe pieniądze.
          </p>
          <ul class="satting__list">
            <li class="satting__item satting__item_1">
              <picture><source srcset="./img/image-1.webp"type="image/webp"><img src="./img/image-1.png" alt="Image"></picture>
            </li>
            <li class="satting__item satting__item_2">
              <picture><source srcset="./img/image-2.webp"type="image/webp"><img src="./img/image-2.png" alt="Image"></picture>
            </li>
            <li class="satting__item satting__item_3">
              <picture><source srcset="./img/image-3.webp"type="image/webp"><img src="./img/image-3.png" alt="Image"></picture>
            </li>
          </ul>
        </div>
      </section>
      <section class="list" id="benefits">
        <div class="container">
            <ul class="list__list">
              <li class="list__item">
                <span class="list__icon">
                  <img src="./img/icon-1.svg" alt="Icon">
                </span>
                <p class="list__text">
                  Urządzenie mobilne i stabilne połączenie internetowe to wszystko, czego potrzebujesz, aby grać w nasze gry na automatach
                </p>
              </li>
              <li class="list__item">
                <span class="list__icon">
                  <img src="./img/icon-2.svg" alt="Icon">
                </span>
                <p class="list__text">
                  Otrzymujesz darmowe monety na zakłady z aplikacji. A Ty uzupełniasz swój budżet, grając często.
                </p>
              </li>
              <li class="list__item">
                <span class="list__icon">
                  <img src="./img/icon-3.svg" alt="Icon">
                </span>
                <p class="list__text">
                  Witryna jest otwarta do zwiedzania w dogodnym czasie, dzięki czemu możesz korzystać z jej usług 24/7
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