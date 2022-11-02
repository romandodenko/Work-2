<?php
include 'header.php';
?>
    <main>
      <section class="jasip">
        <div class="container">
          <div class="jasip__content">
            <div class="jasip__body">
              <span class="jasip__span">
                Üdvözöljük oldalunkon ingyenes játékgépekkel. Élvezze kedvenc szerencsejátékait itt.
              </span>
              <h1 class="jasip__title">
                Játékok a nyerőgépen
              </h1>
              <a class="jasip__link" href="#games">
                Játssz most
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="content">
        <div class="content__body">
          <div class="egy" id="about">
            <div class="container">
              <div class="egy__content">
                <div class="egy__descr">
                  <h2 class="egy__title">
                    Egy kicsit rólunk
                  </h2>
                  <p class="egy__text">
                    Az ingyenes nyerőgépek olyan kaszinójátékok, amelyek évek óta népszerűek. Népszerűségének az az oka,
                    hogy nem kell semmilyen szoftvert letöltenie vagy regisztrálnia egy online kaszinóban a játékhoz. Ez
                    azt jelenti, hogy pénzköltés nélkül játszhatja kedvenc nyerőgépeit. Az ingyenes nyerőgépek
                    nagyszerűsége az elérhetőségük, ami azt jelenti, hogy bármikor, bárhol, egyetlen kattintással
                    elérhetők. Nincs más kaszinójáték, amely ilyen kényelmet és élvezetet kínál -
                  </p>
                  <div class="egy__item">
                    <p class="egy__text">
                      Ingyenes nyerőgépek hatalmas választéka – befizetés nem szükséges Bármilyen online nyerőgépet
                      kipróbálhatsz virtuális pénzért. Így megtudhatja, hogy tetszik-e a játékmenet, a téma és a
                      fogadási kínálat, és nagyszerű játékélményben lesz része pénzügyi kötelezettségvállalás nélkül.
                    </p>
                  </div>
                </div>
                <div class="egy__image" data-da=".egy__item, 991, 1">
                  <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
                </div>
              </div>
            </div>
          </div>
          <div class="vilag" id="benefits">
            <div class="container">
              <ul class="vilag__list">
                <li class="vilag__item">
                  <div class="vilag__wrapper-icon">
                    <span class="vilag__icon">
                      <img src="./img/icon-1.svg" alt="Icon">
                    </span>
                  </div>
                  <strong class="vilag__strong">
                    A világ legjobb demo és ingyenes online nyerőgép-választéka!
                  </strong>
                </li>
                <li class="vilag__item">
                  <div class="vilag__wrapper-icon">
                    <span class="vilag__icon">
                      <img src="./img/icon-2.svg" alt="Icon">
                    </span>
                  </div>
                  <strong class="vilag__strong">
                    Menjen az oldalra, és játsszon most regisztráció nélkül
                  </strong>
                </li>
                <li class="vilag__item">
                  <div class="vilag__wrapper-icon">
                    <span class="vilag__icon">
                      <img src="./img/icon-3.svg" alt="Icon">
                    </span>
                  </div>
                  <strong class="vilag__strong">
                    Nincs szükség további letöltésekre.
                  </strong>
                </li>
              </ul>
            </div>
          </div>
          <div class="az" id="games">
            <div class="container">
              <h2 class="az__title">
                Az automatáink
              </h2>
              <ul class="az__list">
                <li class="az__item">
                  <div class="az__image">
                    <a href="game-1.php">
                      <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                    </a>
                  </div>
                </li>
                <li class="az__item">
                  <div class="az__image">
                    <a href="game-2.php">
                      <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Image"></picture>
                    </a>
                  </div>
                </li>
                <li class="az__item">
                  <div class="az__image">
                    <a href="game-3.php">
                      <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                    </a>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
    </main>
    <div class="popup">
      <div class="popup__close"></div>
      <div class="popup__body">
        <form class="popup__form" action="/">
          <p class="popup__text">Játékainkat 18 év feletti FELNŐTT közönségnek szánjuk. A gombra kattintva
            gombbal megerősíti életkorát.</p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <div class="popup__form-bottom">
            <a class="popup__button" href="main.php">Egyetért</a>
          </div>
        </form>
      </div>
    </div>
    <?php
    include 'footer.php';
    ?>