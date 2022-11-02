<?php
include 'header.php';
?>
    <main>
      <section class="io">
        <div class="container">
          <div class="io__content">
            <div class="io__body">
              <span class="io__span">
                Giochi gratis per te solo sul nostro sito!
              </span>
              <h1 class="io__title">
                Giocare ai migliori giochi
              </h1>
              <p class="io__text">
                Prenditi una pausa dal mondo esterno e immergiti nel mondo dell'intrattenimento vibrante e del gioco
                d'azzardo.
              </p>
              <a class="io__link" href="#games">
                Riproduci ora
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="tinker" id="benefits">
        <div class="container">
          <ul class="tinker__list">
            <li class="tinker__item">
              <div class="tinker__wrapper-icon">
                <span class="tinker__icon">
                  <img src="./img/icon-1.svg" alt="Icon">
                </span>
              </div>
              <h3 class="tinker__title">
                Versioni reattive del sito
              </h3>
              <p class="tinker__text">
                Concediti il ​​gioco fuori casa, vai sul sito da qualsiasi comodo dispositivo e gioca!
              </p>
            </li>
            <li class="tinker__item">
              <div class="tinker__wrapper-icon">
                <span class="tinker__icon">
                  <img src="./img/icon-2.svg" alt="Icon">
                </span>
              </div>
              <h3 class="tinker__title">
                Grafica eccellente
              </h3>
              <p class="tinker__text">
                Personaggi emozionanti in tutti i giochi, disegno dettagliato di tutti gli elementi e immagini colorate
                e luminose
              </p>
            </li>
            <li class="tinker__item">
              <div class="tinker__wrapper-icon">
                <span class="tinker__icon">
                  <img src="./img/icon-3.svg" alt="Icon">
                </span>
              </div>
              <h3 class="tinker__title">
                Accompagnamento sonoro
              </h3>
              <p class="tinker__text">
                Immergiti completamente nel gioco, tutti i giochi hanno effetti sonori epici in sottofondo
              </p>
            </li>
          </ul>
        </div>
      </section>
      <section class="axe" id="about">
        <div class="container">
          <h2 class="axe__title">
            Chi siamo
          </h2>
          <div class="axe__content">
            <div class="axe__descr">
              <p class="axe__text">
                Ogni minuto, decine di giocatori cercano giochi virtuali con denaro non realistico. La necessità di
                risorse gratuite è spiegata da molte sfumature: anonimato, disponibilità universale, alte possibilità di
                vincita. Giochi per soldi irreali senza registrazione richiedono la scoperta dei tuoi dispositivi
                preferiti da sviluppatori mondiali. Bonus attraenti, servizio di prima classe, velocità di trasferimento
                del materiale sono disponibili per i giocatori.
              </p>
              <div class="axe__item">
                <p class="axe__text">
                  I giocatori sono alla ricerca di giochi senza download e non c'è da stupirsi che ce ne siano così
                  tanti. I giochi senza registrazione possono essere aperti dai tuoi dispositivi preferiti da
                  sviluppatori mondiali. Bonus attraenti, servizio di prima classe, velocità di trasferimento del
                  materiale sono disponibili per i giocatori.
                </p>
              </div>
            </div>
            <div class="axe__image" data-da=".axe__item, 991, last">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="ursa" id="games">
        <div class="container">
          <ul class="ursa__list">
            <li class="ursa__item">
              <div class="ursa__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                </a>
              </div>
              <a class="ursa__link" href="game-1.php">
                Giocare a
              </a>
            </li>
            <li class="ursa__item">
              <div class="ursa__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <a class="ursa__link" href="game-2.php">
                Giocare a
              </a>
            </li>
            <li class="ursa__item">
              <div class="ursa__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                </a>
              </div>
              <a class="ursa__link" href="game-3.php">
                Giocare a
              </a>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>