<?php 
/* 
  Template Name: Homepage
*/
get_header(); 
?>
<main>
  <section class="inner">
    <div class="container container-relative container-h100">
      <div class="inner__tape">
        <h1 class="inner__header">
          <?= CFS()->get('homepage_main-header') ?>
        </h1>
        <button class="btn inner__btn">Оставить заявку</button>
      </div>
    </div>
  </section>

  <!-- PRODUCE -->

  <section class="produce">
    <div class="container">
      <div class="produce__content">
        <h2 class="produce__header section-header">Мы производим</h2>
        <div class="produce__list">
          <div class="produce__item produce__item--first">
            <div class="produce__image-block">
              <img class="produce__image" src="<?= get_template_directory_uri()?>/assets/images/panel.svg" alt="" />
            </div>
            <div class="produce__about-block">
              <h3 class="produce__title">Сэндвич-панели</h3>
              <p class="produce__descr">
              <?= CFS()->get('homepage_sandvich-text') ?>
              </p>
              <a class="produce__link link-hl link-arrow-hl" href="<?php the_permalink( 295 )?>">Подробнее</a>
            </div>
          </div>
          <div class="produce__item produce__item--second">
            <div class="produce__image-block">
              <img class="produce__image" src="<?= get_template_directory_uri()?>/assets/images/building.svg" alt="" />
            </div>
            <div class="produce__about-block">
              <h3 class="produce__title">Быстровозводимые здания и прогонные системы</h3>
              <p class="produce__descr">
              <?= CFS()->get('homepage_bvz-text') ?>
              </p>
              <a class="produce__link link-hl link-arrow-hl" href="<?php the_permalink( 26 )?>">Подробнее </a>
            </div>
          </div>
          <div class="produce__item produce__item--third">
            <div class="produce__about-block">
              <h3 class="produce__title">Проектирование и техническая поддержка на всех этапах строительства</h3>
              <a class="produce__link link-hy link-arrow-hy" href="<?php the_permalink( 58 )?>">Подробнее</a>
            </div>
            <div class="produce__image-block">
              <img class="produce__image" src="<?= get_template_directory_uri()?>/assets/images/illustration.svg" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- BENEFITS -->

  <section class="benefits">
    <div class="container">
      <h2 class="benefits__header section-header">Преимущества работы с&nbsp;Ruspan</h2>
      <div class="benefits__list">
        <div class="benefits__item">
          <img class="benefits__icon" src="<?= get_template_directory_uri()?>/assets/images/quality-logo.svg" alt="" />
          <h3 class="benefits__title">Подтверждённое качество</h3>
          <p class="benefits__descr">
            Надёжность технических решений подтверждена натурными испытаниями и сертификатами. Мы используем сырьё и
            материалы от топовых поставщиков, жёстко контролируем допуски и стандарты качества на всех этапах
            производства.
          </p>
        </div>

        <div class="benefits__item">
          <img class="benefits__icon" src="<?= get_template_directory_uri()?>/assets/images/team-logo.svg" alt="" />
          <h3 class="benefits__title">Команда экспертов</h3>
          <p class="benefits__descr">
            Мы успешно работаем с 2008 г. в России и с 1965 г. в мире. Наша команда переняла лучшее из европейского
            и российского опыта. Наши сотрудники — это профессионалы с многолетним опытом работы в строительной
            отрасли.
          </p>
        </div>

        <div class="benefits__item">
          <img class="benefits__icon" src="<?= get_template_directory_uri()?>/assets/images/union-logo.svg" alt="" />
          <h3 class="benefits__title">Комплексный подход</h3>
          <p class="benefits__descr">
            Мы оказываем проектную поддержку на всех стадиях от проектирования до сдачи объектов в эксплуатацию. Это
            позволяет оптимизировать выбор материалов, снизить риски некомплектных поставок и исключить ошибки
            реализации проекта.
          </p>
        </div>

        <div class="benefits__item">
          <img class="benefits__icon" src="<?= get_template_directory_uri()?>/assets/images/key-logo.svg" alt="" />
          <h3 class="benefits__title">Объекты под ключ по всей России и&nbsp;СНГ</h3>
          <p class="benefits__descr">
            Обширная сеть партнеров позволяет реализовать объекты любой сложности во всех регионах. Наши партнеры
            предоставляют услуги по генеральному проектированию, строительно-монтажным работам, поставляют
            сопутствующие материалы.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTOR -->

  <section class="sector">
    <div class="container">
      <div class="sector__content">
        <div class="sector__left">
          <h1 class="sector__header section-header">Секторы рынка</h1>
          <div class="sector__image-block">
            <img class="sector__image" src="<?= get_template_directory_uri()?>/assets/images/sector1.jpg" alt=""
              data-visible="visible" data-num="1" />
            <img class="sector__image" src="<?= get_template_directory_uri()?>/assets/images/sector2.jpg" alt=""
              data-visible="" data-num="2" />
            <img class="sector__image" src="<?= get_template_directory_uri()?>/assets/images/sector3.jpg" alt=""
              data-visible="" data-num="3" />
            <img class="sector__image" src="<?= get_template_directory_uri()?>/assets/images/sector4.jpg" alt=""
              data-visible="" data-num="4" />
            <img class="sector__image" src="<?= get_template_directory_uri()?>/assets/images/sector5.jpg" alt=""
              data-visible="" data-num="5" />
            <img class="sector__image" src="<?= get_template_directory_uri()?>/assets/images/sector6.jpg" alt=""
              data-visible="" data-num="6" />
            <img class="sector__image" src="<?= get_template_directory_uri()?>/assets/images/sector7.jpg" alt=""
              data-visible="" data-num="7" />
            <img class="sector__image" src="<?= get_template_directory_uri()?>/assets/images/sector8.jpg" alt=""
              data-visible="" data-num="8" />
          </div>
        </div>
        <div class="sector__right">
          <ul class="sector__list">
            <li class="sector__item" data-num="1">
              <a class="sector__link" href="#">Торговые здания</a>
            </li>
            <li class="sector__item" data-num="2">
              <a class="sector__link" href="#">Логистические здания и склады</a>
            </li>
            <li class="sector__item" data-num="3">
              <a class="sector__link" href="#">Производственные здания</a>
            </li>
            <li class="sector__item" data-num="4">
              <a class="sector__link" href="#">Административные и общественные здания</a>
            </li>
            <li class="sector__item" data-num="5">
              <a class="sector__link" href="#">Сельскохозяйственные здания</a>
            </li>
            <li class="sector__item" data-num="6">
              <a class="sector__link" href="#">Спортивные сооружения</a>
            </li>
            <li class="sector__item" data-num="7">
              <a class="sector__link" href="#">Холодильные здания и комплексы</a>
            </li>
            <li class="sector__item" data-num="8">
              <a class="sector__link" href="#">Пищевые производства</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="sector-mobile">
    <div class="container">
      <h1 class="sector-mobile__header section-header">Секторы рынка</h1>

      <!-- Slider main container -->
      <div class="swiper" id="sector__swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
          <!-- Slides -->
          <div class="swiper-slide">
            <div class="sector-mobile__image-block">
              <img class="sector-mobile__image" src="<?= get_template_directory_uri()?>/assets/images/sector1.jpg"
                alt="" />
            </div>
            <span class="sector-mobile__title">Торговые здания</span>
          </div>

          <div class="swiper-slide">
            <div class="sector-mobile__image-block">
              <img class="sector-mobile__image" src="<?= get_template_directory_uri()?>/assets/images/sector2.jpg"
                alt="" />
            </div>
            <span class="sector-mobile__title">Логистические здания и склады</span>
          </div>

          <div class="swiper-slide">
            <div class="sector-mobile__image-block">
              <img class="sector-mobile__image" src="<?= get_template_directory_uri()?>/assets/images/sector3.jpg"
                alt="" />
            </div>
            <span class="sector-mobile__title">Производственные здания</span>
          </div>

          <div class="swiper-slide">
            <div class="sector-mobile__image-block">
              <img class="sector-mobile__image" src="<?= get_template_directory_uri()?>/assets/images/sector4.jpg"
                alt="" />
            </div>
            <span class="sector-mobile__title">Административные и общественные здания</span>
          </div>

          <div class="swiper-slide">
            <div class="sector-mobile__image-block">
              <img class="sector-mobile__image" src="<?= get_template_directory_uri()?>/assets/images/sector5.jpg"
                alt="" />
            </div>
            <span class="sector-mobile__title">Сельскохозяйственные здания</span>
          </div>

          <div class="swiper-slide">
            <div class="sector-mobile__image-block">
              <img class="sector-mobile__image" src="<?= get_template_directory_uri()?>/assets/images/sector6.jpg"
                alt="" />
            </div>
            <span class="sector-mobile__title">Спортивные сооружения</span>
          </div>

          <div class="swiper-slide">
            <div class="sector-mobile__image-block">
              <img class="sector-mobile__image" src="<?= get_template_directory_uri()?>/assets/images/sector7.jpg"
                alt="" />
            </div>
            <span class="sector-mobile__title">Холодильные здания и комплексы</span>
          </div>

          <div class="swiper-slide">
            <div class="sector-mobile__image-block">
              <img class="sector-mobile__image" src="<?= get_template_directory_uri()?>/assets/images/sector8.jpg"
                alt="" />
            </div>
            <span class="sector-mobile__title">Пищевые производства</span>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- PROJECTS -->

  <section class="projects">
    <div class="container">
      <h2 class="projects__header section-header">Выполненные проекты</h2>
      <div class="projects__content">
        <!-- Swiper -->
        <div class="swiper" id="projects__swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <?php     
     
          $query_arr = [ 
            'post_type'     => 'projects',
            'posts_per_page'   => 9
          ];

          $query_projects = new WP_Query( $query_arr );
            if ($query_projects->have_posts()) {

            while( $query_projects->have_posts() ) {
              $query_projects->the_post();
              $id = get_the_ID();
          ?>

            <div class="swiper-slide">
              <a href="<?php the_permalink(); ?>">
                <div class="swiper__image-block">
                  <?php 
                  if (has_post_thumbnail()) {
                    the_post_thumbnail();
                  } else {
                    ?>
                  <img class="slider-img" src="https://www.pinecliffs.com/static/images/cms/default_image.png" alt="" />
                  <?php } ?>
                </div>
                <div class="projects__info swiper-slide__info">
                  <div class="swiper-slide__item">
                    Клиент
                    <div class="swiper-slide__title"><?= CFS()->get('project_client'); ?></div>
                  </div>
                  <div class="swiper-slide__item">
                    Проект
                    <div class="swiper-slide__title"><?php the_title();?></div>
                  </div>
                </div>
              </a>
            </div>

            <?php } } 
          wp_reset_postdata();
          ?>

          </div>
        </div>
        <div class="projects__keys">
          <div class="projects__arrows-btns">
            <div class="custom-arrow swiper-button-prev">
              <span class="custom-arrow__line custom-arrow__midline"></span>
              <span class="custom-arrow__line custom-arrow__upline-prev"></span>
              <span class="custom-arrow__line custom-arrow__downline-prev"></span>
            </div>
            <div class="custom-arrow swiper-button-next">
              <span class="custom-arrow__line custom-arrow__midline"></span>
              <span class="custom-arrow__line custom-arrow__upline-next"></span>
              <span class="custom-arrow__line custom-arrow__downline-next"></span>
            </div>
          </div>
          <div class="projects__more">
            <a href="<?php the_permalink( 266 )?>" class="link link-arrow">Все проекты</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ABOUT -->

  <section class="about">
    <div class="container">
      <h2 class="about__header about__header-mobile section-header">О компании</h2>
      <div class="about__content">
        <div class="about__left">
          <h2 class="about__header section-header">О компании</h2>
          <p class="about__descr">
          <?= CFS()->get('homepage_about-text') ?>
          </p>
          <ul class="about__stats">
            <li>
              <span class="about__number">>750</span><span class="about__info">строительных проектов <br />
                в России и СНГ в год</span>
            </li>
            <li>
              <span class="about__number">2</span><span class="about__info">производственные <br />
                площадки</span>
            </li>
            <li><span class="about__number">180</span><span class="about__info">сотрудников</span></li>
          </ul>
          <div class="about__link">
            <a href="<?php the_permalink( 22 )?>" class="link link-arrow">Подробнее о компании</a>
          </div>
        </div>
        <div class="about__right">
          <div class="about__image-block">
            <img class="about__image about__image--large"
              src="<?= get_template_directory_uri()?>/assets/images/about.jpg" alt="" />
            <img class="about__image about__image--big"
              src="<?= get_template_directory_uri()?>/assets/images/about-big.jpg" alt="" />
            <img class="about__image about__image--small"
              src="<?= get_template_directory_uri()?>/assets/images/about-small.jpg" alt="" />
          </div>
        </div>
      </div>
      <ul class="about__stats-mobile">
        <li>
          <span class="about__number">>750</span><span class="about__info">строительных проектов <br />
            в России и СНГ в год</span>
        </li>
        <li>
          <span class="about__number">2</span><span class="about__info">производственные <br />
            площадки</span>
        </li>
        <li><span class="about__number">180</span><span class="about__info">сотрудников</span></li>
      </ul>
      <div class="about__link-mobile">
        <a href="" class="link link-arrow">Подробнее о компании</a>
      </div>
    </div>
  </section>

  <!-- REVIEWS -->

  <!-- <section class="reviews">
    <div class="container">
      <h2 class="reviews__header section-header">Отзывы</h2>
      <div class="reviews__content">
        <div class="reviews__left">
          <div class="reviewer">
            <div class="reviewer__avatar">
              <img src="<?= get_template_directory_uri()?>/assets/images/reviewer.jpg" alt="" />
            </div>
            <div class="reviewer__info">
              <div class="reviewer__name">Ардаков Игорь Герасимович</div>
              <div class="reviewer__position">Генеральный директор компании</div>
            </div>
          </div>
        </div>
        <div class="reviews__right">
          <div class="reviews__review">
            «Повседневная практика показывает, что реализация намеченных плановых заданий, а также свежий взгляд
            на привычные вещи — безусловно открывает новые горизонты для глубокомысленных рассуждений. Имеется
            спорная точка зрения, гласящая примерно следующее: базовые сценарии поведения пользователей освещают
            чрезвычайно интересные особенности картины в целом, однако конкретные выводы, разумеется, превращены
            в посмешище, хотя само их существование приносит несомненную пользу.»
          </div>
          <div class="reviews__arrows">
            <div class="custom-arrow custom-arrow-disabled reviews__arrows-prev">
              <span class="custom-arrow__line custom-arrow__midline"></span>
              <span class="custom-arrow__line custom-arrow__upline-prev"></span>
              <span class="custom-arrow__line custom-arrow__downline-prev"></span>
            </div>
            <div class="custom-arrow reviews__arrows-next">
              <span class="custom-arrow__line custom-arrow__midline"></span>
              <span class="custom-arrow__line custom-arrow__upline-next"></span>
              <span class="custom-arrow__line custom-arrow__downline-next"></span>
            </div>
          </div>
          <div class="reviews__more-reviews">
            <a class="link link-arrow" href="">Больше отзывов</a>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <!-- CLIENTS -->

  <!-- <section class="clients">
    <div class="container">
      <h2 class="clients__header section-header">Наши клиенты</h2>
      <div class="clients__list">
        <div class="clients__item">
          <img src="<?= get_template_directory_uri()?>/assets/images/clients1.svg" alt="" />
        </div>
        <div class="clients__item">
          <img src="<?= get_template_directory_uri()?>/assets/images/clients2.svg" alt="" />
        </div>
        <div class="clients__item">
          <img src="<?= get_template_directory_uri()?>/assets/images/clients3.svg" alt="" />
        </div>
        <div class="clients__item">
          <img src="<?= get_template_directory_uri()?>/assets/images/clients4.svg" alt="" />
        </div>
        <div class="clients__item">
          <img src="<?= get_template_directory_uri()?>/assets/images/clients5.svg" alt="" />
        </div>
        <div class="clients__item">
          <img src="<?= get_template_directory_uri()?>/assets/images/clients6.svg" alt="" />
        </div>
      </div>
    </div>
  </section> -->
</main>
<?php  get_footer();?>