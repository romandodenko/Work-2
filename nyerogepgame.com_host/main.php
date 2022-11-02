<?php
include 'header.php';
?>
    <main>
      <section class="main">
        <div class="container">
          <div class="main__content">
            <div class="main__body">
              <span class="main__span">
                slot játék
              </span>
              <h1 class="main__title">
                Játékgép játék most
              </h1>
              <p class="main__text">
                A legjobb ingyenes játékok szabadidő eltöltéséhez, játékhoz és több virtuális érmék megnyeréséhez
              </p>
              <a class="main__link" href="#games">
                Játékok
              </a>
            </div>
          </div>
        </div>
      </section>
      <section class="jatenok" id="games">
        <div class="container">
            <h2 class="jatenok__title">
              Játékok
            </h2>
              <ul class="jatenok__list">
                <li class="jatenok__item">
                  <div class="jatenok__image">
                    <a href="game-1.php">
                      <picture><source srcset="./img/game-1.webp"type="image/webp"><img src="./img/game-1.png" alt="Image"></picture>
                    </a>
                  </div>
                  <div class="jatenok__descr">
                    <a class="jatenok__play" href="game-1.php">
                      <img src="./img/play.svg" alt="Icon">
                    </a>
                    <div class="jatenok__texts">
                      <a class="jatenok__link" href="game-1.php">
                        Stacked
                      </a>
                      <span class="jatenok__span">
                        slot játék
                      </span>
                    </div>
                  </div>
                </li>
                <li class="jatenok__item">
                  <div class="jatenok__image">
                    <a href="game-2.php">
                      <picture><source srcset="./img/game-2.webp"type="image/webp"><img src="./img/game-2.png" alt="Image"></picture>
                    </a>
                  </div>
                  <div class="jatenok__descr">
                    <a class="jatenok__play" href="game-2.php">
                      <img src="./img/play.svg" alt="Icon">
                    </a>
                    <div class="jatenok__texts">
                      <a class="jatenok__link" href="game-2.php">
                        Madame Destiny
                      </a>
                      <span class="jatenok__span">
                        slot játék
                      </span>
                    </div>
                  </div>
                </li>
                <li class="jatenok__item">
                  <div class="jatenok__image">
                    <a href="game-3.php">
                      <picture><source srcset="./img/game-3.webp"type="image/webp"><img src="./img/game-3.png" alt="Image"></picture>
                    </a>
                  </div>
                  <div class="jatenok__descr">
                    <a class="jatenok__play" href="game-3.php">
                      <img src="./img/play.svg" alt="Icon">
                    </a>
                    <div class="jatenok__texts">
                      <a class="jatenok__link" href="game-3.php">
                        VooDoo Magic
                      </a>
                      <span class="jatenok__span">
                        slot játék
                      </span>
                    </div>
                  </div>
                </li>
              </ul>
          </div>
      </section>
      <section class="ingyenes" id="about">
        <div class="container">
          <h2 class="ingyenes__title">
            Ingyenes nyerőgépeinkről
          </h2>
          <p class="ingyenes__text">
            Nyerőgép, a szerencsejáték soha nem volt még elérhetőbb, mint ingyenes nyerőgépünkkel. Tudjuk, hogy milyennek kell lennie az ideális szolgáltatásnak a vevő szemszögéből, és igyekszünk ezt Önnek nyújtani. A játékok megfelelnek a modern oldal minden követelményének. Szerencsejáték-szolgáltatók, nyerőgépek és általában játékok legszélesebb választékát kínáljuk: weboldalunkon minden nyerőgépet megtalál. Ez nem egy fogadási platform, így nincs szükség valódi pénzre a befizetéshez
          </p>
          <p class="ingyenes__text">
            A számítógépen való játék mellett van egy mobil verzió is. A kaszinó webhelye alkalmas telefonokon és táblagépeken való kényelmes játékra. A játékosok bárhol játszhatnak, ahol van internet kapcsolat. A játékgépek azonos választékán kívül minden promóció és bónusz elérhető a játékos számára a kütyüben.
          </p>
          <p class="ingyenes__text">
            Az internet megváltoztatta az emberek szabadidejük eltöltését. Manapság mindenki a szórakozást és a szórakozást keresi. A modern közösségi kaszinó nagyszerű lehetőséget kínál arra, hogy barátaival vagy egyedül töltsön időt. Lehetőség van fogadás nélkül is játszani: tehát ha szórakozni szeretnél, de nem akarsz kockáztatni, játssz oldalunkkal.
          </p>
        </div>
      </section>
      <section class="list" id="benefits">
        <div class="container">
          <ul class="list__list">
            <li class="list__item">
              <span class="list__icon">
                <img src="./img/icon-1.svg" alt="Icon">
              </span>
              <h3 class="list__title">
                Adaptív változat
              </h3>
              <p class="list__text">
                Játsszon megállás nélkül bármely Önnek megfelelő eszközön, ez nagyon kényelmes, mert csak az internetre van szüksége a játékhoz.
              </p>
            </li>
            <li class="list__item">
              <span class="list__icon">
                <img src="./img/icon-2.svg" alt="Icon">
              </span>
              <h3 class="list__title">
                Játssz bárhol
              </h3>
              <p class="list__text">
                Az oldal éjjel-nappal elérhető, és nincs akadálya a játéknak, elég egy stabil internet.
              </p>
            </li>
            <li class="list__item">
              <span class="list__icon">
                <img src="./img/icon-3.svg" alt="Icon">
              </span>
              <h3 class="list__title">
                Lenyűgöző grafika
              </h3>
              <p class="list__text">
                Meg fog lepődni az összes karakter modern rajzán, ez eltér a klasszikus régi. 
              </p>
            </li>
          </ul>
        </div>
      </section>
    </main>
    <?php
    include 'footer.php';
    ?>