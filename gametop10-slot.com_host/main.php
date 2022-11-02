<?php
include 'header.php';
?>
    <main>
      <section class="losimo">
        <div class="container">
          <div class="losimo__content">
            <div class="losimo__body">
              <span class="losimo__span">
                Izbaudiet aizraujošu spēļu prieku mūsu vietnē
              </span>
              <h1 class="losimo__title">
                Lošimo automatas žaisti dabar
              </h1>
              <a class="losimo__link" href="#games">
                Spēlēt
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="musu" id="games">
        <div class="container">
          <h2 class="musu__title">
            Mūsu spēles
          </h2>
          <ul class="musu__list">
            <li class="musu__item">
              <div class="musu__image">
                <a href="game-1.php">
                  <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.jpg" alt="Image"></picture>
                </a>
              </div>
              <div class="musu__descr">
                <a class="musu__link" href="game-1.php">
                  Wild Wild Riches
                </a>
                <a class="musu__play" href="game-1.php">
                  Spēlēt
                </a>
              </div>
            </li>
            <li class="musu__item">
              <div class="musu__image">
                <a href="game-2.php">
                  <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                </a>
              </div>
              <div class="musu__descr">
                <a class="musu__link" href="game-2.php">
                  Atlanrean Treasure
                </a>
                <a class="musu__play" href="game-2.php">
                  Spēlēt
                </a>
              </div>
            </li>
            <li class="musu__item">
              <div class="musu__image">
                <a href="game-3.php">
                  <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.jpg" alt="Image"></picture>
                </a>
              </div>
              <div class="musu__descr">
                <a class="musu__link" href="game-3.php">
                  Star Bounty
                </a>
                <a class="musu__play" href="game-3.php">
                  Spēlēt
                </a>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <section class="mums" id="about">
        <div class="container">
          <h2 class="mums__title">
            Par mums
          </h2>
          <div class="mums__content">
            <div class="mums__descr">
              <p class="mums__text">
                Azartspēļu spēles ir flash spēles azartiskākās izklaides cienītājiem! Azartspēļu zibatmiņas spēles ir labākā izklaide, jo jūs riskējat ar pilnīgi neko! Jūs varat pilnveidot savas prasmes ruletē un visa veida pokerā un pat spēļu automātos. Mūsu azartspēļu flash spēļu sadaļā varat atrast labākās spēles, kas spēj apmierināt jebkuru, pat eksotiskāko gaumi!
              </p>
              <div class="mums__item">
                <p class="mums__text">
                  Līdz šim mūsu vietnē ir simtiem dažādu spēļu! Tikai šeit jūs varat atrast parasto azartspēļu labākās portētās versijas!
                  Azartspēļu flash spēles ir jūsu labākais sabiedrotais jebkurā brīdī! bezmaksas spēlēm nav nepieciešama instalēšana, nesamaziniet ātrumu un sver ļoti maz! Jūs varat pavadīt laiku, spēlējot savu iecienītāko flash spēli jebkurā laikā - mājās, darbā un pat ceļā! Daudzās azartspēļu zibatmiņas spēlēs ir pilnvērtīgs tīkla režīms – tas nozīmē, ka varat tiešsaistē sacensties ar konkurentiem un draugiem par savu iecienītāko flash spēli!
                </p>
              </div>
            </div>
            <div class="mums__image" data-da=".mums__item, 991, last">
              <picture><source srcset="./img/about.webp"type="image/webp"><img src="./img/about.png" alt="Image"></picture>
            </div>
          </div>
        </div>
      </section>
      <section class="listys" id="benefits">
        <div class="container">
          <ul class="listys__list">
            <li class="listys__item">
              <h3 class="listys__title">
                Adaptīvās vietnes versijas
              </h3>
              <p class="listys__text">
                Spēlējiet jebkurā ierīcē un jebkurā vietā
              </p>
            </li>
            <li class="listys__item">
              <h3 class="listys__title">
                Mūsdienu grafika
              </h3>
              <p class="listys__text">
                Spilgta un moderna grafika, izbaudiet vizuālo prezentāciju.
              </p>
            </li>
            <li class="listys__item">
              <h3 class="listys__title">
                Viegla iekļūšana spēlē
              </h3>
              <p class="listys__text">
                Lai spēlētu, pietiek ar labu interneta savienojumu. 
              </p>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>