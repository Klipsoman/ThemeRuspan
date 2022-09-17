<?php 
 /**
 * Template Name: Steel frames
 */
get_header(); 
?>


<!-- Page Inner -->
<div class="page-inner">
  <div class="container">
    <h1 class="page-header">Быстровозводимые здания на основе стальных каркасов</h1>
  </div>
</div>

<!-- &nbsp; -->
<!-- steel-frames -->
<div class="steel-frames">
  <!-- description inner -->
  <div class="description-inner">
    <div class="container">
      <div class="description-inner__block">
        <div class="description-inner__left description">
          Быстровозводимые здания Ruspan — оптимальное решение для
          строительства административных, коммерческих,
          сельскохозяйственных, складских и промышленных объектов. Они
          сочетают в себе баланс конструктивных решений, стоимости
          и скорости монтажа.
        </div>
        <div class="description-inner__right description-secondary">
          Конструкционные элементы зданий разработаны совместно с ведущими
          российскими НИИ в области металлических конструкций,
          а их надёжность подтверждается натурными испытаниями. Каждая
          типовая серия Ruspan зарегистрирована в Федеральном фонде
          документации и полностью соответствует требованиям к зданиям
          на основе ЛСТК. Специалисты компании сопровождают прохождение
          проектов в экспертизе.
        </div>
      </div>
    </div>
  </div>

  <!-- Buildings -->
  <div class="buildings">
    <div class="container">
      <div class="buildings__list">
        <div class="buildings__item build-card">
          <div class="build-card__body">
            <div class="build-card__top">
              <div class="build-card__image-box">
                <img src="<?= get_template_directory_uri()?>/assets/images/build-card1.png" alt="" class="build-card__image" />
              </div>
            </div>
            <div class="build-card__bottom">
              <div class="build-card__title description">
                <a class="build-card__link" href="">Стандартные здания Truss Build</a>
              </div>
              <ul class="build-card__list">
                <li class="build-card__item">Этажность: 1 этаж</li>
                <li class="build-card__item">Пролет: 15-24 м</li>
                <li class="build-card__item">Шаг колонн: 6 м</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="buildings__item build-card">
          <div class="build-card__body">
            <div class="build-card__top">
              <div class="build-card__image-box">
                <img src="<?= get_template_directory_uri()?>/assets/images/build-card2.png" alt="" class="build-card__image" />
              </div>
            </div>
            <div class="build-card__bottom">
              <div class="build-card__title description">
                <a class="build-card__link" href="">Стандартные здания Truss Build</a>
              </div>
              <ul class="build-card__list">
                <li class="build-card__item">Этажность: 1 этаж</li>
                <li class="build-card__item">Пролет: 15-24 м</li>
                <li class="build-card__item">Шаг колонн: 6 м</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="buildings__item build-card">
          <div class="build-card__body">
            <div class="build-card__top">
              <div class="build-card__image-box">
                <img src="<?= get_template_directory_uri()?>/assets/images/build-card3.png" alt="" class="build-card__image" />
              </div>
            </div>
            <div class="build-card__bottom">
              <div class="build-card__title description">
                <a class="build-card__link" href="">Стандартные здания Truss Build</a>
              </div>
              <ul class="build-card__list">
                <li class="build-card__item">Этажность: 1 этаж</li>
                <li class="build-card__item">Пролет: 15-24 м</li>
                <li class="build-card__item">Шаг колонн: 6 м</li>
              </ul>
            </div>
          </div>
        </div>

        <div class="buildings__item build-card">
          <div class="build-card__body">
            <div class="build-card__top">
              <div class="build-card__image-box">
                <img src="<?= get_template_directory_uri()?>/assets/images/build-card4.png" alt="" class="build-card__image" />
              </div>
            </div>
            <div class="build-card__bottom">
              <div class="build-card__title description">
                <a class="build-card__link" href="">Стандартные здания Truss Build</a>
              </div>
              <ul class="build-card__list">
                <li class="build-card__item">Этажность: 1 этаж</li>
                <li class="build-card__item">Пролет: 15-24 м</li>
                <li class="build-card__item">Шаг колонн: 6 м</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Catalog -->
  <div class="catalog">
    <div class="container">
      <div class="catalog__body">
        <div class="catalog__link-box">
          <a href="" class="catalog__link">Каталог «Быстровозводимые здания» (pdf)</a>
        </div>
        <div class="catalog__download-box">
          <a href="" class="catalog__download-link">Скачать</a>
        </div>
      </div>
    </div>
  </div>

  <!-- page-links -->
  <div class="page-links">
    <div class="container">
      <ul class="page-links__list">
        <li class="page-links__item">
          <a href="" class="bvz-links__link page-links__link link link-arrow">Прогонные системы</a>
        </li>
        <li class="page-links__item">
          <a href="" class="page-links__link link link-arrow">Оцинкованные профили</a>
        </li>
      </ul>
    </div>
  </div>

  <!-- Slider -->
  <div class="slider">
    <div class="container">
      <h2 class="slider__header page-title">Выполненные проекты</h2>
      <div class="swiper" id="steel-frames__swiper">
        <div class="swiper-wrapper">
        <?php     
     
        $query_arr = [ 
          'post_type'     => 'projects',
          'posts_per_page'   => 12
        ];

        $query_projects = new WP_Query( $query_arr );
          if ($query_projects->have_posts()) {

          while( $query_projects->have_posts() ) {
            $query_projects->the_post();
            $id = get_the_ID();
        ?>
           
          <div class="swiper-slide">
            <div class="swiper__image-block">
              <?php 
                if (has_post_thumbnail()) {
                  the_post_thumbnail();
                } else {
                  ?>
              <img class="slider-img" src="https://www.pinecliffs.com/static/images/cms/default_image.png"
                alt="" />
              <?php } ?>
            </div>
            <div class="swiper-slide__info projects__info">
              <div class="swiper-slide__item">
                Клиент
                <div class="swiper-slide__title">Х5 Group</div>
              </div>
              <div class="swiper-slide__item">
                Проект
                <div class="swiper-slide__title">
                  Распределительный центр «Пятерочка»
                </div>
              </div>
            </div>
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
          <a href="<?php the_permalink(266)?>" class="link link-arrow">Все проекты</a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end steel-frames -->

<?php get_footer();?>