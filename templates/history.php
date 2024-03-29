<?php 
 /*
 Template Name: History
 */
  get_header();
?>
<main>
  <!-- Page Inner -->
  <div class="page-inner">
    <div class="container">
      <h1 class="page-header">Наша история</h1>
    </div>
  </div>

  <!-- history-page  -->
  <div class="history-page">
    <!-- inner -->
    <div class="history-inner">
      <div class="container">
        <div class="history-inner__content">
          <div class="history-inner__image-box">
            <img src="<?= get_template_directory_uri()?>/./assets/images/history.jpg" alt=""
              class="history-inner__image" />
          </div>
          <div class="history-inner__descr description-secondary">
            Ruspan работает в России с 2008 г.
          </div>
        </div>
      </div>
    </div>

    <!-- timeline -->

    <div class="timeline-block">
      <div class="container">
        <div class="item">
          <div class="timeline">
            <div>
              <section class="year">
                <h3>Ноябрь 2008</h3>
                <section>
                  <ul>
                    <li class="description-secondary">
                      Первая поставка сэндвич-панелей международной Группы
                      Kingspan в Россию из Польши для производителя мороженого
                      Инмарко в Туле.
                    </li>
                  </ul>
                </section>
              </section>
              <section class="year">
                <h3>2009</h3>
                <section>
                  <ul>
                    <li class="description-secondary">Образование ООО «Кингспан».</li>
                    <li class="description-secondary">
                      Первый крупный клиент — таможенный терминал «Стерх».
                    </li>
                  </ul>
                </section>
              </section>
              <section class="year">
                <h3>2009</h3>
                <section>
                  <ul>
                    <li class="description-secondary">
                      Сертификация сэндвич-панелей IPN. Компания Kingspan
                      сертифицировала IPN в России первыми на рынке.
                    </li>
                  </ul>
                </section>
              </section>
              <section class="year">
                <h3>2010-2015</h3>
                <section>
                  <ul>
                    <li class="description-secondary">
                      Активное развитие компании, поставки импортных
                      сэндвич-панелей Kingspan по всей России.
                    </li>
                  </ul>
                </section>
              </section>
              <section class="year">
                <h3>2015</h3>
                <section>
                  <ul>
                    <li class="description-secondary">
                      Объединение Kingspan и Joris Ide (Йорис Иде). В России
                      Joris Ide представлена заводом в Гатчине Ленинградской
                      обл.: производство сэндвич-панелей и металлоконструкций
                      с 2006 г.
                    </li>
                  </ul>
                </section>
              </section>
              <section class="year">
                <h3>2017</h3>
                <section>
                  <ul>
                    <li class="description-secondary">
                      Модернизация оборудования для увеличения
                      производительности.
                    </li>
                    <li class="description-secondary">
                      Полный переход объединённых компаний на единый бренд
                      Kingspan.
                    </li>
                  </ul>
                </section>
              </section>
              <section class="year">
                <h3>2021</h3>
                <section>
                  <ul>
                    <li class="description-secondary">
                      Открытие завода в Невинномысске, Ставропольский край:
                      начало производства сэндвич-панелей PIR.
                    </li>
                  </ul>
                </section>
              </section>
              <section class="year">
                <h3>2022</h3>
                <section>
                  <ul>
                    <li>
                      <img src="<?= get_template_directory_uri()?>/./assets/images/timeline-logo3.jpg" alt="" />
                    </li>
                    <li class="description-secondary">
                      Активы переданы российскому менеджменту, ребрендинг,
                      переименование в Ruspan.
                    </li>
                  </ul>
                </section>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- page-links -->
    <div class="page-links">
      <div class="container">
        <ul class="page-links__list">
          <li class="page-links__item">
            <a href="<?php the_permalink( 22 )?>" class="bvz-links__link page-links__link link link-arrow">О Ruspan</a>
          </li>
          <li class="page-links__item">
            <a href="<?php the_permalink( 53 )?>" class="page-links__link link link-arrow">Наше производство</a>
          </li>
          <li class="page-links__item">
            <a href="<?php the_permalink( 244 )?>" class="page-links__link link link-arrow">Документы и сертификаты</a>
          </li>
          <li class="page-links__item">
            <a href="<?php the_permalink( 48 )?>" class="page-links__link link link-arrow">Сотрудничество</a>
          </li>
          <li class="page-links__item">
            <a href="<?php the_permalink( 45 )?>" class="page-links__link link link-arrow">Карьера</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
  
</main>
<?php get_footer();?>