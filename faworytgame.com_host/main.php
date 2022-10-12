<?php
include 'header.php';
?>
    <main>
      <section class="polskie">
        <div class="container">
          <div class="polskie__content">
            <div class="polskie__descr">
              <h1 class="polskie__title">
                Najlepsze polskie gry
              </h1>
              <p class="polskie__text">
                Na naszej stronie mamy bardzo przyzwoity wybór gier, wybierz najlepszą i zagraj
              </p>
              <a class="polskie__link" href="#games">
                Oglądaj gry
              </a>
            </div>
            <div class="polskie__image">
              <picture><source srcset="./img/hero.webp"type="image/webp"><img src="./img/hero.png" alt="Image"></picture>
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
              <div class="gry__descr">
                <a class="gry__link" href="game-1.php">
                  Giza Infinity Reels
                </a>
                <a class="gry__play" href="game-1.php">
                  Bawić się
                </a>
              </div>
            </li>
            <li class="gry__item gry__item_2">
              <div class="gry__descr">
                <a class="gry__link" href="game-2.php">
                  Ocean Bood
                </a>
                <a class="gry__play" href="game-2.php">
                  Bawić się
                </a>
              </div>
            </li>
            <li class="gry__item gry__item_3">
              <div class="gry__descr">
                <a class="gry__link" href="game-3.php">
                  Moley Moolah
                </a>
                <a class="gry__play" href="game-3.php">
                  Bawić się
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="zalety" id="benefits">
        <div class="container">
          <h2 class="zalety__title">
            Zalety
          </h2>
          <div class="zalety__content">
            <ul class="zalety__list">
              <li class="zalety__item">
                <h3 class="zalety__subtitle">
                  Maksymalna dostępność
                </h3>
                <p class="zalety__text">
                  Graj w nasze gry, korzystając wyłącznie z Internetu i naszej strony internetowej. Nie wymaga pobierania
                </p>
              </li>
              <li class="zalety__item">
                <h3 class="zalety__subtitle">
                  Nie wypełniaj formularzy
                </h3>
                <p class="zalety__text">
                  Rejestracja nie jest wymagana, graj prosto i bez zbędnych działań, wybierz dowolny 
                </p>
              </li>
              <li class="zalety__item">
                <h3 class="zalety__subtitle">
                  Nie wymaga inwestycji
                </h3>
                <p class="zalety__text">
                  Twoje środki są bezpieczne, gdy grasz z nami, baw się bez dodatkowych kosztów 
                </p>
              </li>
            </ul>
            <div class="zalety__image">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="nas" id="about">
        <div class="container">
          <h2 class="nas__title">
            O nas
          </h2>
          <div class="nas__content">
            <div class="nas__column">
                <p class="nas__text">
                  Darmowe gry dają doskonałą okazję do relaksu, odprężenia i spędzenia wieczoru bez myślenia o niczym. Ale w tym wszystkim brakuje najważniejszej rzeczy: gra dostarczy Ci prawdziwych wrażeń za darmo i poczujesz prawdziwe podekscytowanie. Dlatego wiele osób woli grać na automatach, nie ryzykując prawdziwymi pieniędzmi. Większość początkujących graczy ma trudności z natychmiastowym wyborem odpowiedniego. W tym przypadku możesz zaufać rekomendacjom profesjonalistów lub wybrać sprawdzone gry i zagrać w nie. Ale tak naprawdę nie ma znaczenia, którą grę lubisz: każdy emulator może być fajny.
                </p>
            </div>
            <div class="nas__column">
              <p class="nas__text">
                Spróbuj rozpalić płomień ekscytującej gry, a darmowe gry pomogą Ci to zrobić w każdej chwili. Aby zagrać w trybie swobodnym, wystarczy kliknąć przycisk „Graj” w przeglądarce automatów. Nie wymaga rejestracji, wysyłania płatnych wiadomości ani instalowania dodatkowych aplikacji. Na naszej stronie gracz gra wirtualną walutą, przy pełnym wykorzystaniu której uruchomienie należy powtórzyć. 
              </p>
          </div>
          </div>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>