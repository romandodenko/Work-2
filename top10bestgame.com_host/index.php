<?php
include 'header.php';
?>
    <main>
      <section class="hex">
        <div class="container">
          <div class="hex__content">
            <div class="hex__body">
              <span class="hex__span">
                Spending time on our site is always easy, fun and interesting.
              </span>
              <h1 class="hex__title">
                Play Real Games
                Right Now
              </h1>
              <a class="hex__link" href="#games">
                Play Now
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="pet">
        <div class="container">
          <div class="pet__content">
            <ul class="pet__list">
              <li class="pet__item">
                <h2 class="pet__title">
                  The best games for free
                </h2>
                <p class="pet__text">
                  You do not need to spend anything to have fun and take a break from the daily routine.
                </p>
              </li>
              <li class="pet__item">
                <h2 class="pet__title">
                  Don't download anything
                </h2>
                <p class="pet__text">
                  All you need to enter the game is our website and internet access.
                </p>
              </li>
              <li class="pet__item">
                <h2 class="pet__title">
                  Amazing games
                </h2>
                <p class="pet__text">
                  Enjoy the best selection of games. Everything is wrapped in beautiful graphics accompanied by dynamic
                  animations, stunning sound effects and music.
                </p>
              </li>
            </ul>
            <div class="pet__image">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt=""></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="set" id="about">
        <div class="container">
          <h2 class="set__title">
            About our site
          </h2>
          <p class="set__text">
            On our site you can play free slot machines with exciting adventures and beautiful animals. The game is
            always free, you cannot bet real money and you cannot win money. However, the thrill and excitement you get
            is only yours. We offer you slots with all sorts of adventures, you choose which main character to join in
            their endeavors. Our website is the place where you can find games entertainment. Always a free game, always
            interesting. Get rid of the stresses of everyday life.
          </p>
          <p class="set__text">
            Our site has consists of many mini-games that allow you to play for free, without any risk and without the
            need to wager real money. In our site you can play free gamesOur site is a new way to enjoy gambling. It's
            free and doesn't require wagering. All this is transparent, without pitfalls, you get maximum pleasure along
            with invaluable experience. The benefits of free games are obvious. The very first thing that everyone gets
            is the saving of personal time, an indisputable argument.
          </p>
        </div>
      </section>
      <section class="gam" id="games">
        <div class="container">
          <ul class="gam__list">
            <li class="gam__item">
              <div class="gam__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </div>
              <a class="gam__link" href="game-1.php">
                Play
              </a>
            </li>
            <li class="gam__item">
              <div class="gam__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <a class="gam__link" href="game-2.php">
                Play
              </a>
            </li>
            <li class="gam__item">
              <div class="gam__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <a class="gam__link" href="game-3.php">
                Play
              </a>
            </li>
          </ul>
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