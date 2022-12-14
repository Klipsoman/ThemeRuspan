<?php 
 /*
 Template Name: About
 */
  get_header();
?>
<main>
  <!-- Page Inner -->
  <div class="page-inner">
    <div class="container">
      <h1 class="page-header">О Ruspan</h1>
    </div>
  </div>

  <!-- about-page -->
  <div class="about-page">
    <!-- about-inner -->
    <div class="about-inner">
      <div class="container">
        <div class="about-inner__content">
          <div class="about-inner__left">
            <p class="about-inner__descr description">
            <?= CFS()->get('about_main-text') ?>
            </p>
          </div>
          <div class="about-inner__right">
            <div class="about-inner__image-box">
              <img src="<?= get_template_directory_uri()?>/./assets/images/about-inner.jpg" alt=""
                class="about-inner__image" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- stats -->
    <div class="stats">
      <div class="container">
        <div class="stats__grid">
          <div class="stats__area">
            <div class="stats__number"><?= CFS()->get('about_number1') ?></div>
            <div class="stats__descr description-secondary">
            <?= CFS()->get('about_number1-text') ?>
            </div>
          </div>
          <div class="stats__area">
            <div class="stats__number"><?= CFS()->get('about_number2') ?></div>
            <div class="stats__descr description-secondary">
            <?= CFS()->get('about_number2-text') ?>
            </div>
          </div>
          <div class="stats__area">
            <div class="stats__number"><?= CFS()->get('about_number3') ?></div>
            <div class="stats__descr description-secondary"><?= CFS()->get('about_number3-text') ?></div>
          </div>
          <div class="stats__area">
            <div class="stats__number"><?= CFS()->get('about_number4') ?></div>
            <div class="stats__descr description-secondary">
            <?= CFS()->get('about_number4-text') ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- more-about -->
    <div class="more-about">
      <div class="container">
        <div class="more-about__content">
          <div class="more-about__left">
            <div class="more-about__title description">Заводы</div>
            <p class="more-about__descr description-secondary">
              Офис компании располагается в Санкт-Петербурге, заводы
              в г. Гатчине Ленинградской области и г. Невинномысске
              Ставропольского края.
            </p>
            <a class="more-about__link link link-arrow" href="<?php the_permalink( 53 )?>">Подробнее о производстве</a>
          </div>
          <div class="more-about__right">
            <div class="more-about__title description">Продукция</div>
            <p class="more-about__descr description-secondary">
              На предприятиях компании производятся стеновые и кровельные
              <a class="text-blue" href="<?php the_permalink( 295 )?>">сэндвич-панели </a> с сердечником
              из минеральной ваты и пенополиизоцианурата (PIR), <span class="text-blue">фасонные и доборные элементы</span>,
              <a class="text-blue" href="<?php the_permalink( 26 )?>"> быстровозводимые здания,
                прогонные системы</a>
              и <span class="text-blue">оцинкованные профили.</span>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- mission -->
    <div class="mission">
      <div class="container">
        <div class="mission__content">
          <h3 class="mission__header section-header">Наша миссия</h3>
          <div class="mission__left">
            <h3 class="mission__header section-header">Наша миссия</h3>
            <div class="mission__image-box">
              <img src="<?= get_template_directory_uri()?>/./assets/images/about-mission.svg" alt=""
                class="mission__image" />
            </div>
          </div>
          <div class="mission__right">
            <div class="mission__part">
              <p class="mission__descr">
              <?= CFS()->get('about_mission-block1') ?>
              </p>
              <p class="mission__descr">
              <?= CFS()->get('about_mission-block2') ?>
              </p>
            </div>
            <div class="mission__part">
              <p class="mission__descr">
              <?= CFS()->get('about_mission-block3') ?>
              </p>
              <p class="mission__descr">
              <?= CFS()->get('about_mission-block4') ?>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- values -->
    <div class="values">
      <div class="container">
        <h2 class="values__header section-header">Наши ценности</h2>
        <div class="values__content">
          <div class="values__item">
            <h3 class="values__title description"><?= CFS()->get('about_values-header1') ?></h3>
            <p class="values__descr description-secondary description-secondary--black">
              <?= CFS()->get('about_values-text1') ?>
            </p>
          </div>
          <div class="values__item">
            <h3 class="values__title description"><?= CFS()->get('about_values-header2') ?></h3>
            <p class="values__descr description-secondary description-secondary--black">
              <?= CFS()->get('about_values-text2')?>
            </p>
          </div>
          <div class="values__item">
            <h3 class="values__title description"><?= CFS()->get('about_values-header3') ?></h3>
            <p class="values__descr description-secondary description-secondary--black">
              <?= CFS()->get('about_values-text3') ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- benefits -->
    <section class="benefits">
      <div class="container">
        <h2 class="benefits__header section-header">Преимущества работы с&nbsp;Ruspan</h2>
        <div class="benefits__list">
          <div class="benefits__item">
            <img class="benefits__icon" src="<?= get_template_directory_uri()?>/./assets/images/quality-logo.svg"
              alt="" />
            <h3 class="benefits__title">Подтверждённое качество</h3>
            <p class="benefits__descr">
              Надёжность технических решений подтверждена натурными испытаниями и сертификатами. Мы используем сырьё и
              материалы от топовых поставщиков, жёстко контролируем допуски и стандарты качества на всех этапах
              производства.
            </p>
          </div>

          <div class="benefits__item">
            <img class="benefits__icon" src="<?= get_template_directory_uri()?>/./assets/images/team-logo.svg" alt="" />
            <h3 class="benefits__title">Команда экспертов</h3>
            <p class="benefits__descr">
              Мы успешно работаем с 2008 г. в России и с 1965 г. в мире. Наша команда переняла лучшее из европейского и
              российского опыта. Наши сотрудники — это профессионалы с многолетним опытом работы в строительной отрасли.
            </p>
          </div>

          <div class="benefits__item">
            <img class="benefits__icon" src="<?= get_template_directory_uri()?>/./assets/images/union-logo.svg"
              alt="" />
            <h3 class="benefits__title">Комплексный подход</h3>
            <p class="benefits__descr">
              Мы оказываем проектную поддержку на всех стадиях от проектирования до сдачи объектов в эксплуатацию. Это
              позволяет оптимизировать выбор материалов, снизить риски некомплектных поставок и исключить ошибки
              реализации проекта.
            </p>
          </div>

          <div class="benefits__item">
            <img class="benefits__icon" src="<?= get_template_directory_uri()?>/./assets/images/key-logo.svg" alt="" />
            <h3 class="benefits__title">Объекты под ключ по всей России и&nbsp;СНГ</h3>
            <p class="benefits__descr">
              Обширная сеть партнеров позволяет реализовать объекты любой сложности во всех регионах. Наши партнеры
              предоставляют услуги по генеральному проектированию, строительно-монтажным работам, поставляют
              сопутствующие
              материалы.
            </p>
          </div>

          <div class="benefits__item">
            <img class="benefits__icon" src="<?= get_template_directory_uri()?>/./assets/images/discipline.svg"
              alt="" />
            <h3 class="benefits__title">Дисциплина поставок</h3>
            <p class="benefits__descr">
              Обеспечиваем оптимальные сроки производства и контроль готовности заказа в течение всего цикла работ.
              Постоянно находимся на связи с клиентом и готовы подстроиться под его график.
            </p>
          </div>

          <div class="benefits__item">
            <img class="benefits__icon" src="<?= get_template_directory_uri()?>/./assets/images/short-time.svg"
              alt="" />
            <h3 class="benefits__title">Короткие сроки проектирования</h3>
            <p class="benefits__descr">
              Помогаем сократить срок разработки всего объекта благодаря короткому сроку проектирования КМ, КМД,
              ограждающих конструкций с использованием современных систем автоматизированного проектирования и
              моделирования.
            </p>
          </div>

          <div class="benefits__item">
            <img class="benefits__icon" src="<?= get_template_directory_uri()?>/./assets/images/individual.svg"
              alt="" />
            <h3 class="benefits__title">Индивидуальное обслуживание</h3>
            <p class="benefits__descr">
              Понимаем важность индивидуального подхода к каждому клиенту и готовы на реализацию проектов любой
              сложности
              в зависимости от задач. Знаем, как делать и небольшие стандартные здания, и масштабные строительные
              проекты.
            </p>
          </div>

          <div class="benefits__item">
            <img class="benefits__icon" src="<?= get_template_directory_uri()?>/./assets/images/guarantee.svg" alt="" />
            <h3 class="benefits__title">Гарантия</h3>
            <p class="benefits__descr">
              Ruspan предоставляет расширенную гарантию на выпускаемую продукцию.
            </p>
          </div>

        </div>
      </div>
    </section>

    <!-- page-links -->
    <div class="page-links">
      <div class="container">
        <ul class="page-links__list">
          <li class="page-links__item">
            <a href="<?php the_permalink( 42 )?>" class="bvz-links__link page-links__link link link-arrow">Наша
              история</a>
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