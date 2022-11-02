<?php
include 'header.php';
?>
    <main>
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__body">
              <span class="hero__span">
                Spend time with fun games
              </span>
              <h1 class="hero__title">
                Top Australia games
              </h1>
              <p class="hero__text">
                Free entertainment is waiting for you on our website, you can always come and spend time here.
              </p>
              <a class="hero__link" href="#games">
                Play now
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="leqter" id="benefits">
          <div class="container">
            <ul class="leqter__list">
              <li class="leqter__item">
                <span class="leqter__icon">
                  <img src="./img/icon-1.svg" alt="Icon">
                </span>
                <h3 class="leqter__title">
                  No limit game
                </h3>
                <p class="leqter__text">
                  You no longer need to set yourself a deposit limit. Play for your pleasure as long as you want.
                </p>
              </li>
              <li class="leqter__item">
                <span class="leqter__icon">
                  <img src="./img/icon-2.svg" alt="Icon">
                </span>
                <h3 class="leqter__title">
                  Safe game 
                </h3>
                <p class="leqter__text">
                  Play without risking your own money, the games are for entertainment purposes only.
                </p>
              </li>
              <li class="leqter__item">
                <span class="leqter__icon">
                  <img src="./img/icon-3.svg" alt="Icon">
                </span>
                <h3 class="leqter__title">
                  Convenient interface
                </h3>
                <p class="leqter__text">
                  With a user-friendly interface and exciting design, playing games is much more fun.
                </p>
              </li>
            </ul>
          </div>
      </section>
      <section class="slots" id="games">
        <div class="container">
          <ul class="slots__list">
            <li class="slots__item">
              <div class="slots__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Image"></picture>
                </a>
              </div>
              <a class="slots__link" href="game-1.php">
                Voodoo Magic
              </a>
              <a class="slots__play" href="game-1.php">
                Play
                <img src="./img/play.svg" alt="Play">
              </a>
            </li>
            <li class="slots__item">
              <div class="slots__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <a class="slots__link" href="game-2.php">
        6 tokens of gold
              </a>
              <a class="slots__play" href="game-2.php">
                Play
                <img src="./img/play.svg" alt="Play">
              </a>
            </li>
            <li class="slots__item">
              <div class="slots__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <a class="slots__link" href="game-3.php">
               Gold volcano
              </a>
              <a class="slots__play" href="game-3.php">
                Play
                <img src="./img/play.svg" alt="Play">
              </a>
            </li>
          </ul>
        </div>
      </section>
      <section class="about" id="about">
        <div class="container">
          <div class="about__content">
            <div class="about__image" data-da=".about__item, 991, first">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="About"></picture>
            </div>
            <div class="about__descr">
              <h2 class="about__title">
                About our site
              </h2>
              <div class="about__item">
                <p class="about__text">
                  Each guest of the site has absolutely free access to all gambling presented on the site. Any game can be launched in trial mode to get acquainted with its technical characteristics, bonus games and storyline. Despite the fact that the demo format of the game will not allow you to make a profit, it will help each player to learn the main features of the device, including appreciating the generosity of the selected virtual machine.
                </p>
              </div>
              <p class="about__text">
                It is important to note the fact that for full access to all the functions of a gambling establishment, you do not need to go through the registration procedure on the site. To protect the club's customers, the casino management uses modern security systems that guarantee the anonymity of visiting the site.
              </p>
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