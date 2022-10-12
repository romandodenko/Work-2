<?php
include 'header.php';
?>
    <main>
      <section class="sector">
        <div class="container">
          <div class="sector__content">
            <div class="sector__body">
              <span class="sector__span">
                Experience the joy of exciting games on our website
              </span>
              <h1 class="sector__title">
                Casino with free social games
              </h1>
              <a class="sector__link" href="#games">
                Play
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="zero" id="games">
        <div class="container">
          <h2 class="zero__title">
            Our games
          </h2>
          <ul class="zero__list">
            <li class="zero__item">
              <div class="zero__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </div>
              <div class="zero__descr">
                <a class="zero__link" href="game-1.php">
                  Super Sweets
                </a>
                <a class="zero__play" href="game-1.php">
                  Play
                </a>
              </div>
            </li>
            <li class="zero__item">
              <div class="zero__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <div class="zero__descr">
                <a class="zero__link" href="game-2.php">
                  Sweet Bonanza
                </a>
                <a class="zero__play" href="game-2.php">
                  Play
                </a>
              </div>
            </li>
            <li class="zero__item">
              <div class="zero__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.jpg" alt="Image"></picture>
                </a>
              </div>
              <div class="zero__descr">
                <a class="zero__link" href="game-3.php">
                  Honey Rush
                </a>
                <a class="zero__play" href="game-3.php">
                  Play
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="aboit" id="about">
        <div class="container">
          <div class="aboit__content">
            <div class="aboit__descr">
              <h2 class="aboit__title">
                About Us
              </h2>
              <p class="aboit__text">
                Social casinos, or casinos hosted on social networks, are a cross between classic casinos and games. The
                fundamental difference between social casinos and traditional ones is that the main goal of a player is
                not to win money, but to interact with other players. It is believed that due to the absence of a risk
                factor - the fear of losing money, social casinos have a relaxing effect. Social casinos are
                entertainment available on our platform and promote socialization.
              </p>
              <p class="aboit__text">
                Another key feature of social casinos is that it is free entertainment. The mechanics of the game
                involve the user, however, the time allotted for games is limited, so if the user wishes to continue the
                session, he can take it additionally.
              </p>
            </div>
            <div class="aboit__image">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="pluwki" id="benefits">
        <div class="container">
          <ul class="pluwki__list">
            <li class="pluwki__item">
              <span class="pluwki__icon">
                <img src="./img/icon-1.svg" alt="Icon">
              </span>
              <h2 class="pluwki__title">
                Responsive site versions
              </h2>
              <p class="pluwki__text">
                Play on any device, anywhere
              </p>
            </li>
            <li class="pluwki__item">
              <span class="pluwki__icon">
                <img src="./img/icon-2.svg" alt="Icon">
              </span>
              <h2 class="pluwki__title">
                No need to download
              </h2>
              <p class="pluwki__text">
                Play right here and now, no download required
              </p>
            </li>
            <li class="pluwki__item">
              <span class="pluwki__icon">
                <img src="./img/icon-3.svg" alt="Icon">
              </span>
              <h2 class="pluwki__title">
                Easy entry into the game
              </h2>
              <p class="pluwki__text">
                A good internet connection is enough to play.
              </p>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>