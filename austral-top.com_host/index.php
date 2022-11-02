<?php
include 'header.php';
?>
    <main>
      <section class="gero">
        <div class="container">
          <div class="gero__content">
            <div class="gero__body">
              <h1 class="gero__title">
                Legal Games Australia
              </h1>
              <p class="gero__text">
                Get an unforgettable experience from our free games right now
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
            <div class="vantages">
              <div class="container">
                <h2 class="vantages__title">
                  Advantages
                </h2>
                <div class="vantages__content">
                  <ul class="vantages__list">
                    <li class="vantages__item">
                      <h3 class="vantages__subtitle">
                        Thematic games
                      </h3>
                      <p class="vantages__text">
                        Modern game presentation, now you can admire new characters that are completely different from the old classic games. Brand new graphics will surprise you
                      </p>
                    </li>
                    <li class="vantages__item">
                      <h3 class="vantages__subtitle">
                        Play risk-free for your wallet
                      </h3>
                      <p class="vantages__text">
                        By playing our games you do not risk your funds, the account is updated automatically.
                      </p>
                    </li>
                    <li class="vantages__item">
                      <h3 class="vantages__subtitle">
                        Play anytime
                      </h3>
                      <p class="vantages__text">
                        You can play anytime, anywhere, the site is responsive to any device. To play, you only need access to the Internet and any of your gadgets.
                      </p>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="uout">
              <div class="container">
                <h2 class="uout__title">
                  The best free games
                </h2>
                <div class="uout__content">
                  <div class="uout__column">
                    <p class="uout__text">
                      By running the game, the user can play games for free without money. It does not require real bets. Payment for the rotation is made by conditional credits, which are credited to the balance upon loading. If this amount is spent, it will be possible to return to the game after it is restarted. In this mode, the same symbols and prize functions are available to the visitor, but guarantees of their complete match are possible only if a licensed demo is used.
                    </p>
                  </div>
                  <div class="uout__column">
                    <p class="uout__text">
                      The goal of the project is to provide users with the opportunity to play their favorite games, while experiencing a certain amount of excitement, but not losing money. Indirectly, you can win more with us than in any, because you can not lose. After all, any gambling for money inevitably leads to their loss and entails many problems.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="play">
              <div class="container">
                <h2 class="play__title">
                  Games
                </h2>
                <ul class="play__list">
                  <li class="play__item">
                    <div class="play__image">
                      <a href="game-1.php">
                        <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                      </a>
                    </div>
                    <div class="play__descr">
                      <a class="play__link" href="game-1.php">
                        Monkey Jackpot
                      </a>
                      <a class="play__play" href="game-1.php">
                        Play
                      </a>
                    </div>
                  </li>
                  <li class="play__item">
                    <div class="play__image">
                      <a href="game-2.php">
                        <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                      </a>
                    </div>
                    <div class="play__descr">
                      <a class="play__link" href="game-2.php">
                        Tiki Mania
                      </a>
                      <a class="play__play" href="game-2.php">
                        Play
                      </a>
                    </div>
                  </li>
                  <li class="play__item">
                    <div class="play__image">
                      <a href="game-3.php">
                        <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                      </a>
                    </div>
                    <div class="play__descr">
                      <a class="play__link" href="game-3.php">
                        Tropical Wilds
                      </a>
                      <a class="play__play" href="game-3.php">
                        Play
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
          <p class="popup__text">Our games are intended for an ADULT audience of 18 years and older. By clicking on the
            button you confirm your age.</p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <div class="popup__form-bottom">
            <a class="popup__button" href="main.php">Agree</a>
          </div>
        </form>
      </div>
    </div>
    <?php
    include 'footer.php';
    ?>