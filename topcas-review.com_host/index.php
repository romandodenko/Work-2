<?php
include 'header.php';
?>
    <main>
      <section class="eleven">
        <div class="container">
          <div class="eleven__content">
            <div class="eleven__body">
              <h1 class="eleven__title">
                We offer the best games! Have a great time with us
              </h1>
              <p class="eleven__text">
                Start playing the best games on our site right now and have a lot of fun
              </p>
              <a class="eleven__link" href="#games">
                Play
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="fun" id="about">
        <div class="container">
          <div class="fun__content">
            <div class="fun__descr">
              <h2 class="fun__title">
                Social games for fun
              </h2>
              <p class="fun__text">
                We have reviewed and researched most of the websites offering the best gaming sites.
              </p>
              <p class="fun__text">
                Usually they ask you to register and open an account to play, sometimes even you will need to pay real
                money. But here you can play as much as you like! All you have to do is choose which game to play. So
                stop straining your screen and start playing the best social game gambling and the best games.
              </p>
              <p class="fun__text">
                For those who love gambling but don't want to spend money, social gaming can be a great option. They
                appeared not so long ago and are now actively gaining momentum. Social gambling is turning into a big
                business that attracts more and more new investors.
              </p>
            </div>
            <div class="fun__image">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="advantages" id="benefits">
        <div class="container">
          <h2 class="advantages__title">
            Advantages
          </h2>
          <ul class="advantages__list">
            <li class="advantages__item">
              <h3 class="advantages__subtitle">
                Our best games
              </h3>
              <p class="advantages__text">
                If you are looking for exciting games - you have just found it! Our site boasts a full range of slots to entertain each and every one of our noble citizens.
              </p>
            </li>
            <li class="advantages__item">
              <h3 class="advantages__subtitle">
                Play slot machines for fun
              </h3>
              <p class="advantages__text">
                Social games will never force you to bet and risk your money. You can play to your heart's content forever, simply because it's fun.
              </p>
            </li>
            <li class="advantages__item">
              <h3 class="advantages__subtitle">
                New modern games
              </h3>
              <p class="advantages__text">
                Feel free to try new modern virtual games with a full selection of board games. These games have an incredible user experience with brand new graphics.
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="irling" id="games">
        <div class="container">
          <h2 class="irling__title">
            Games
          </h2>
          <ul class="irling__list">
            <li class="irling__item">
              <div class="irling__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </div>
              <a class="irling__play" href="game-1.php">
                Play
              </a>
            </li>
            <li class="irling__item">
              <div class="irling__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Image"></picture>
                </a>
              </div>
              <a class="irling__play" href="game-2.php">
                Play
              </a>
            </li>
            <li class="irling__item">
              <div class="irling__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <a class="irling__play" href="game-3.php">
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