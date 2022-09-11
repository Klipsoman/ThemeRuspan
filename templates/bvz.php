<?php 
 /*
 Template Name: bvz
 */
  get_header();
?>

<!-- Page Inner -->
<div class="page-inner">
  <div class="container">
    <h1 class="page-header">Быстровозводимые здания и прогонные системы</h1>
  </div>
</div>

<!-- bvz быстро-возводимые здания -->
<div class="bvz">
  <div class="products">
    <div class="container">
      <div class="products__body">
        <div class="products__list">
          <div class="products__item">
            <div class="products__left">
              <div class="products__link-box">
                <a class="description products__link link link-arrow-hb" href="<?=
                // 74 - id страницы steel frames
                 get_permalink(74)
                 ?>">Быстровозводимые здания на основе
                  стальных каркасов</a>
              </div>
              <p class="products__descr description-secondary">
                Стандартные решения зданий на основе быстровозводимых
                конструкций из легкого стального тонкостенного каркаса.
              </p>
            </div>
            <div class="products__center">
              <p class="products__descr description-secondary">
                Стандартные решения зданий на основе быстровозводимых
                конструкций из легкого стального тонкостенного каркаса.
              </p>
            </div>
            <div class="products__right">
              <div class="products__image-box">
                <img class="products__image" src="<?= get_template_directory_uri()?>/assets/images/steel-frame.jpg"
                  alt="" />
              </div>
            </div>
          </div>

          <div class="products__item">
            <div class="products__left">
              <div class="products__link-box">
                <a class="description products__link link link-arrow-hb" href="<?=
                // 76 - id страницы run system
                 get_permalink(76)
                 ?>">Прогонные системы</a>
              </div>
              <p class="products__descr description-secondary">
                Прогонные системы кровли на основе оцинкованных профилей и
                соединительных элементов.
              </p>
            </div>
            <div class="products__center">
              <p class="products__descr description-secondary">
                Прогонные системы кровли на основе оцинкованных профилей и
                соединительных элементов.
              </p>
            </div>
            <div class="products__right">
              <div class="products__image-box">
                <img class="products__image" src="<?= get_template_directory_uri()?>/assets/images/run-sistem.jpg"
                  alt="" />
              </div>
            </div>
          </div>

          <div class="products__item">
            <div class="products__left">
              <div class="products__link-box">
                <a class="description products__link link link-arrow-hb" href="">Оцинкованные профили</a>
              </div>
              <p class="products__descr description-secondary">
                Производство стальных холоднокатанных оцинкованных профилей
                С, Z и Σ в Санкт-Петербурге.
              </p>
            </div>
            <div class="products__center">
              <p class="products__descr description-secondary">
                Производство стальных холоднокатанных оцинкованных профилей
                С, Z и Σ в Санкт-Петербурге.
              </p>
            </div>
            <div class="products__right">
              <div class="products__image-box">
                <img class="products__image" src="<?= get_template_directory_uri()?>/assets/images/galv-profile.jpg"
                  alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Slider -->
  <div class="slider slider-sandwich-panels">
    <div class="container">
      <h2 class="slider__header description">Другие продукты Ruspan</h2>
      <div class="swiper" id="bvz__swiper">
        <div class="swiper-wrapper">

          <?php
           $query_arr = [ 
            'post_type'      => 'panels',
            'taxonomy'       => 'panels_types',
            'posts_per_page' => 12,
          ];
                    
          $query_panels = new WP_Query( $query_arr );
                    
            if ($query_panels->have_posts()) {
                      
              while( $query_panels->have_posts() ) {
                $query_panels->the_post();?>

          <div class="swiper-slide">
            <a class="swiper-slide__body" href="<?php the_permalink(); ?>">
              <h3 class="description">Сэндвич-панели TF</h3>
              <ul>
                <li>Тип замка: <?= CFS()->get('panel_lock');?></li>
                <li>Соединение: <?= CFS()->get('panel_joint');?></li>
              </ul>
              <div class="tags">
                <div class="tag tag-blue"><?= CFS()->get('panel_tag1_name');?></div>
                <div class="tag tag-bgc"><?= CFS()->get('panel_tag2_name');?></div>
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
          <div class="custom-arrow swiper-button-prev" id="sandwich-panels-swiper-button-prev">
            <span class="custom-arrow__line custom-arrow__midline"></span>
            <span class="custom-arrow__line custom-arrow__upline-prev"></span>
            <span class="custom-arrow__line custom-arrow__downline-prev"></span>
          </div>
          <div class="custom-arrow swiper-button-next" id="sandwich-panels-swiper-button-next">
            <span class="custom-arrow__line custom-arrow__midline"></span>
            <span class="custom-arrow__line custom-arrow__upline-next"></span>
            <span class="custom-arrow__line custom-arrow__downline-next"></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer();?>