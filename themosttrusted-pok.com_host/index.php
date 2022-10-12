<?php
include 'header.php';
?>
      <div class="page__bottom">
        <main>
          <section class="firm">
            <div class="container">
              <div class="firm__content">
                <div class="firm__body">
                  <h1 class="firm__title">
                    <span>Free</span> entertainment <span>games</span>
                  </h1>
                  <p class="firm__text">
                    Play now for the ultimate entertainment gaming experience
                  </p>
                  <a class="firm__link" href="#games">
                    Play now
                  </a>
                </div>
              </div>
            </div>
          </section>
          <section class="our" id="benefits">
            <div class="container">
              <h2 class="our__title">
                Our <span>advantages</span>
              </h2>
              <div class="our__content">
                <ul class="our__list">
                  <li class="our__item">
                    <span class="our__icon">
                      <img src="./img/icon-1.svg" alt="Icon">
                    </span>
                    <p class="our__text">
                      Playing games for free without registration is an opportunity to bet on virtual credits without
                      the risk of losing them. We can highlight the pros and cons of this mode.
                    </p>
                  </li>
                  <li class="our__item">
                    <span class="our__icon">
                      <img src="./img/icon-2.svg" alt="Icon">
                    </span>
                    <p class="our__text">
                      All new games are available on our website and you can play social games for free at any time of
                      the day without registration.
                    </p>
                  </li>
                  <li class="our__item">
                    <span class="our__icon">
                      <img src="./img/icon-3.svg" alt="Icon">
                    </span>
                    <p class="our__text">
                      Players can choose a suitable game based on a variety of criteria. All properties are important
                      enough, and the player has to decide for himself what he needs.
                    </p>
                  </li>
                </ul>
                <div class="our__image">
                  <picture><source srcset="./img/benefits.webp"type="image/webp"><img src="./img/benefits.png" alt="Image"></picture>
                </div>
              </div>
            </div>
          </section>
          <section class="oddensen" id="oddensen">
            <div class="container">
              <h2 class="oddensen__title">
                About our <span>games</span>
              </h2>
              <div class="oddensen__content">
                <div class="oddensen__column">
                  <p class="oddensen__text">
                    Welcome to our website! Here you can play any games and choose any difficulty level.
                    There are different games to choose from, which involve opponents with completely different levels
                    of play. The games are suitable for both beginners and experienced professionals. Play and invest in
                    your winnings.
                  </p>
                  <p class="oddensen__text">
                    Availability of all elements of a real game in one place for free. Our goal was to collect on one
                    platform the types of entertainment that players love and look for the most, to provide you with a
                    great time and create the atmosphere of a classic gambling hall, like in a good movie!
                  </p>
                </div>
                <div class="oddensen__column">
                  <p class="oddensen__text">
                    Your best way to spend time for your own pleasure in an interesting company! This is the best TOP-5
                    selection of the coolest games of our time! Free opportunities and daily bonuses, serious bets and
                    international connections with like-minded people from all over the world, playing on any device,
                    convenient orientation and wide customization options!
                  </p>
                </div>
              </div>
            </div>
          </section>
          <section class="games" id="games">
            <div class="container">
              <h2 class="games__title">
                Our <span>games</span>
              </h2>
              <ul class="games__list">
                <li class="games__item">
                  <div class="games__image">
                    <a href="game-1.php">
                      <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="games__link" href="game-1.php">
                    Play
                  </a>
                </li>
                <li class="games__item">
                  <div class="games__image">
                    <a href="game-2.php">
                      <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="games__link" href="game-2.php">
                    Play
                  </a>
                </li>
                <li class="games__item games__item_3">
                  <div class="games__image">
                    <a href="game-3.php">
                      <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                    </a>
                  </div>
                  <a class="games__link" href="game-3.php">
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
              <p class="popup__text">Our games are intended for an ADULT audience of 18 years and older. By clicking on
                the
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