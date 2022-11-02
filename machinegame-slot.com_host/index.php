<?php
include 'header.php';
?>
    <main>
      <section class="giochi">
        <div class="container">
          <div class="giochi__content">
            <div class="giochi__descr">
              <h1 class="giochi__title">
                I migliori giochi d'Italia
              </h1>
              <p class="giochi__text">
                La community offre a tutti l'opportunità di divertirsi con fantastici giochi gratuiti.
              </p>
              <a class="giochi__link" href="#games" data-da=".giochi__content, 991, last">
                Riproduci ora
              </a>
            </div>
            <div class="giochi__image">
              <picture><source srcset="./img/hero.webp"type="image/webp"><img src="./img/hero.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="content">
        <div class="vantaggi" id="benefits">
          <div class="vantaggi__container container">
            <h2 class="vantaggi__title">
              Vantaggi
            </h2>
            <ul class="vantaggi__list">
              <li class="vantaggi__item vantaggi__item_1">
                <strong class="vantaggi__strong">
                  Nessun download richiesto
                </strong>
              </li>
              <li class="vantaggi__item vantaggi__item_2">
                <strong class="vantaggi__strong">
                  Nessun download richiesto
                </strong>
              </li>
              <li class="vantaggi__item vantaggi__item_3">
                <strong class="vantaggi__strong">
                  Il gioco è gratuito
                </strong>
              </li>
              <li class="vantaggi__item vantaggi__item_4">
                <strong class="vantaggi__strong">
                  Giochi moderni
                </strong>
              </li>
            </ul>
          </div>
        </div>
        <div class="nostri" id="games">
          <div class="nostri__container container">
            <h2 class="nostri__title">
              I nostri giochi
            </h2>
            <ul class="nostri__list">
              <li class="nostri__item">
                <div class="nostri__image">
                  <a href="game-1.php">
                    <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                  </a>
                </div>
                <a class="nostri__link" href="game-1.php">
                  Wild Blood 2
                </a>
                <a class="nostri__play" href="game-1.php">
                  Gioco
                </a>
              </li>
              <li class="nostri__item">
                <div class="nostri__image">
                  <a href="game-2.php">
                    <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                  </a>
                </div>
                <a class="nostri__link" href="game-2.php">
                  Star Bounty
                </a>
                <a class="nostri__play" href="game-2.php">
                  Gioco
                </a>
              </li>
              <li class="nostri__item">
                <div class="nostri__image">
                  <a href="game-3.php">
                    <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                  </a>
                </div>
                <a class="nostri__link" href="game-3.php">
                  The Dog House Megaways
                </a>
                <a class="nostri__play" href="game-3.php">
                  Gioco
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="rolunk" id="about">
          <div class="rolunk__container container">
            <h2 class="rolunk__title">
              Rólunk
            </h2>
            <h3 class="rolunk__subtitle">
              Solo sul nostro sito tutti i tuoi giochi preferiti
            </h3>
            <div class="rolunk__content">
              <div class="rolunk__column">
                <p class="rolunk__text">
                  I giochi gratuiti sono un modo sicuro e protetto per divertirti con i tuoi giochi preferiti in
                  qualsiasi momento. Con centinaia di giochi tra cui scegliere, offriamo qualcosa per tutti! Tutto
                  l'intrattenimento del giochi può essere trovato qui. Non c'è bisogno di lasciare la comodità della
                  propria casa quando si può provare tutta questa eccitazione dalla comodità della propria sedia o
                  divano. Nel nostro sito troverai tutto ciò che rende grandi i giochi: grafica e audio di alta qualità.
                </p>
              </div>
              <div class="rolunk__column">
                <p class="rolunk__text">
                  Sei arrivato! Benvenuto nel sito dove ogni giorno sono disponibili giochi di alta qualità. Se vuoi
                  giocare gratis, non cercare oltre il tuo sito preferito: qui ti aspettano ore di divertimento e
                  intrattenimento. Ti offriamo tutto questo in un ambiente di gioco dove il divertimento è tutto! In
                  effetti, tutto ciò che conosci e ami dei giochi è ora disponibile sul nostro sito.
                </p>
              </div>
            </div>
          </div>
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
          <p class="popup__text">I nostri giochi sono destinati a un pubblico ADULTO dai 18 anni in su. Cliccando sul
            pulsante confermi la tua età.</p>
          <label>
            <input type="checkbox" name="number">
          </label>
          <label>
            <input type="text" name="years-old">
          </label>
          <div class="popup__form-bottom">
            <a class="popup__button" href="main.php">Concordare</a>
          </div>
        </form>
      </div>
    </div>
    <?php
    include 'footer.php';
    ?>