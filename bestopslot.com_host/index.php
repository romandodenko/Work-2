<?php
include 'header.php';
?>
    <main>
      <section class="black">
        <div class="container">
          <div class="black__content">
            <div class="black__body">
              <span class="black__span">
                Bezmaksas spēles
              </span>
              <h1 class="black__title">
                Azartspēles
              </h1>
              <p class="black__text">
                Apmeklējiet mūsu vietni un spēlējiet bezmaksas jautras spēles
              </p>
              <a class="black__link" href="#games">
                Spēlēt
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="speles" id="games">
        <div class="container">
          <h2 class="speles__title">
            Spēles
          </h2>
          <ul class="speles__list">
            <li class="speles__item">
              <div class="speles__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Image"></picture>
                </a>
              </div>
              <div class="speles__descr">
                <a class="speles__play" href="game-1.php">
                  Spēlēt
                </a>
                <a class="speles__link" href="game-1.php">
                  Wild Wild Riches
                </a>
              </div>
            </li>
            <li class="speles__item">
              <div class="speles__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.jpg" alt="Image"></picture>
                </a>
              </div>
              <div class="speles__descr">
                <a class="speles__play" href="game-2.php">
                  Spēlēt
                </a>
                <a class="speles__link" href="game-2.php">
                  Star Bounty
                </a>
              </div>
            </li>
            <li class="speles__item">
              <div class="speles__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <div class="speles__descr">
                <a class="speles__play" href="game-3.php">
                  Spēlēt
                </a>
                <a class="speles__link" href="game-3.php">
                  Ali Baba
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="spelu" id="about">
        <div class="container">
          <h2 class="spelu__title">
            Bezmaksas spēļu iespējas
          </h2>
          <p class="spelu__text">
            Viena no šādas spēles iezīmēm ir anonimitāte. Tā kā to palaišanai reģistrācija nav nepieciešama, klienti
            nebaidās, ka viņu dati, piemēram, e-pasts, pilns vārds, tālruņa numurs un cita personiskā informācija,
            nonāks trešajās personām. Lai gan kazino darbojas saskaņā ar licenci, daži vietnes apmeklētāji, īpaši tie,
            kuri iepriekš nav spēlējuši, var šaubīties par personas datu konfidencialitāti šādos projektos.
          </p>
          <p class="spelu__text">
            Vēl viena iezīme ir tāda, ka lietotājam pat nav jāpapildina konts. Likmēm bezmaksas spēlēs ir virtuālās
            monētas, kuru daudzumu (un dažreiz pat vērtību) var pielāgot pirms grieziena uzsākšanas. Ja kluba klients ir
            pazaudējis visas monētas, jums ir jāpārlādē lapa - un līdzsvars tiks atjaunots. Vienīgā atšķirība ir tā, ka
            laimests, spēlējot spēļu automātus bez maksas, būs virtuāls, kā arī monētas derībām. Laimesti netiek
            ieskaitīti spēlētāja bilancē
          </p>
          <ul class="spelu__list">
            <li class="spelu__item spelu__item_1">
              <picture><source srcset="./img/image.webp"type="image/webp"><img src="./img/image.png" alt="Image"></picture>
            </li>
            <li class="spelu__item spelu__item_2">
              <picture><source srcset="./img/image-2.webp"type="image/webp"><img src="./img/image-2.png" alt="Image"></picture>
            </li>
            <li class="spelu__item spelu__item_3">
              <picture><source srcset="./img/image-3.webp"type="image/webp"><img src="./img/image-3.png" alt="Image"></picture>
            </li>
          </ul>
        </div>
      </section>
      <section class="maksas" id="benefits">
        <div class="container">
          <h2 class="maksas__title">
            Priekšrocības
          </h2>
          <ul class="maksas__list">
            <li class="maksas__item">
              <span class="maksas__icon">
                <img src="./img/icon-1.svg" alt="Icon">
              </span>
              <h3 class="maksas__subtitle">
                Bez maksas
              </h3>
            </li>
            <li class="maksas__item">
              <span class="maksas__icon">
                <img src="./img/icon-2.svg" alt="Icon">
              </span>
              <h3 class="maksas__subtitle">
                Spēlējiet jebkurā ierīcē
              </h3>
            </li>
            <li class="maksas__item">
              <span class="maksas__icon">
                <img src="./img/icon-3.svg" alt="Icon">
              </span>
              <h3 class="maksas__subtitle">
                Pilnīga anonimitāte
              </h3>
            </li>
            <li class="maksas__item">
              <span class="maksas__icon">
                <img src="./img/icon-4.svg" alt="Icon">
              </span>
              <h3 class="maksas__subtitle">
                Nav nepieciešamas lejupielādes
              </h3>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <div class="popup">
      <div class="popup__close"></div>
      <div class="popup__body">
        <form class="popup__form" action="/">
            <div class="popup__image">
              <picture><source srcset="./img/popup.webp"type="image/webp"><img src="./img/popup.png" alt="Pic"></picture>
            </div>
          <p class="popup__text">Mūsu spēles ir paredzētas PIEAUGUŠAJAI auditorijai no 18 gadu vecuma. Noklikšķinot uz
            pogu, lai apstiprinātu savu vecumu.</p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <div class="popup__form-bottom">
            <a class="popup__button" href="main.php">Piekrītu</a>
          </div>
        </form>
      </div>
      </div>
      <?php
      include 'footer.php';
      ?>