<?php
include 'header.php';
?>
      <div class="page__bottom">
        <main>
          <section class="hlopok">
            <div class="container">
              <div class="hlopok__content">
                <div class="hlopok__body">
                  <h1 class="hlopok__title">
                    Slot machine Australia
                  </h1>
                  <p class="hlopok__text">
                    Spędź dzień grając w zabawne automaty do gier dla zabawy, poczuj emocje z naszymi grami
                  </p>
                  <a class="hlopok__link" href="#games">
                    Slots
                  </a>
                </div>
                <p class="hlopok__descleimer">
                  The games offered on the site do not give users the opportunity to win real money.
                  The site does not provide users with skills that can be used in real gambling. Games are available to
                  users over 18 years of age.
                </p>
              </div>
            </div>
          </section>
          <section class="slots" id="games">
            <div class="container">
              <h2 class="slots__title">
                Games
              </h2>
              <ul class="slots__list">
                <li class="slots__item slots__item_1">
                  <a class="slots__link" href="game-1.php">
                    Mysterious Egypt
                  </a>
                </li>
                <li class="slots__item slots__item_2">
                  <a class="slots__link" href="game-2.php">
                    Bronco Spirit
                  </a>
                </li>
                <li class="slots__item slots__item_3">
                  <a class="slots__link" href="game-3.php">
                    Pyramid King
                  </a>
                </li>
              </ul>
            </div>
          </section>
          <section class="about" id="about">
            <div class="container">
              <h2 class="about__title">
                About Us
              </h2>
              <div class="about__content">
                <p class="about__text">
                  One of the most popular games on the internet is slot machines. They received excellent reviews from
                  users due to their colorfulness, interesting plots, good graphics and the ability to play for free
                  from the comfort of home. Each of them has its own atmosphere, and there are a variety of developments
                  - from the simplest and classic to the unusual, with an original theme.
                </p>
                <p class="about__text">
                  On the website of the Gaming Club, you can play slots for free, studying their characteristics,
                  symbols and parameters. This page contains the best demo games from software developers with full
                  descriptions. With the development of gambling, slot machines have become more and more popular. And
                  this is not surprising, because users did not need to look for offline devices to spin the reels and
                  collect a combination. It is enough just to launch such games on the Internet for free and without
                  registration in order to spend your leisure time brightly and with interest.
                </p>
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
                  <span class="advantages__icon">
                    <img src="./img/icon-1.svg" alt="Icon">
                  </span>
                  <h3 class="advantages__subtitle">
                    Availability
                  </h3>
                  <p class="advantages__text">
                    You can play them at any convenient time without leaving your home. Such games are available on the
                    Internet, and you can spin the reels from a computer, tablet or smartphone.
                  </p>
                </li>
                <li class="advantages__item">
                  <span class="advantages__icon">
                    <img src="./img/icon-2.svg" alt="Icon">
                  </span>
                  <h3 class="advantages__subtitle">
                    Free game
                  </h3>
                  <p class="advantages__text">
                    Users can play slots for free. All of them are available in demo mode, while the functionality of
                    the games is completely preserved, which allows you to enjoy a special atmosphere.
                  </p>
                </li>
                <li class="advantages__item">
                  <span class="advantages__icon">
                    <img src="./img/icon-3.svg" alt="Icon">
                  </span>
                  <h3 class="advantages__subtitle">
                    Musical accompaniment
                  </h3>
                  <p class="advantages__text">
                    High-quality musical accompaniment. It is carefully chosen, corresponds to the theme and does not
                    distract from the process of spinning the reels.
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