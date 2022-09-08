<?php 
  get_header();
?>

<!-- Page Inner -->
<div class="page-inner">
  <div class="container">
    <h1 class="page-header"><?php the_title();?></h1>
  </div>
</div>

<!-- project-page -->
<div class="project-page">
  <!-- project -->
  <div class="project">
    <div class="project__content">
      <div class="project__left">
        <div class="project__image-box">
          <?php 
                if (has_post_thumbnail()) {
                  the_post_thumbnail();
                } else {
                  ?>
          <img class="project__image search-result__img"
            src="https://www.pinecliffs.com/static/images/cms/default_image.png" alt="" />
          <?php } ?>
        </div>
      </div>

      <div class="project__right">
        <div class="project__list">
          <div class="project__row">
            <div class="project__key">Год постройки</div>
            <div class="project__value"><?= CFS()->get('project_year');?></div>
          </div>
          <div class="project__row">
            <div class="project__key">Название</div>
            <div class="project__value"><?php the_title();?></div>
          </div>
          <div class="project__row">
            <div class="project__key">Локация</div>
            <div class="project__value"><?= CFS()->get('project_location');?></div>
          </div>
          <div class="project__row">
            <div class="project__key">Поставленный продукт</div>
            <div class="project__value">
              <?= CFS()->get('project_product_link');?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- about-project -->

  <div class="about-project">
    <div class="container">
      <h3 class="about-project__header page-title">Проект</h3>
      <p class="about-project__descr description-secondary"><?= CFS()->get('project_project_text');?></p>

      <!-- Slider -->
      <div class="slider">
        <?php 
        $slider = CFS()->get( 'project_slider' );
        // echo '<pre>';
        // print_r($slider);
        // echo '</pre>';
      ?>
        <div class="swiper" id="about-project__swiper">

          <div class="swiper-wrapper">

            <?php 
              if( !empty($slider) ){
                foreach ( $slider as $slide ) {            
            ?>

            <div class="swiper-slide">
              <div class="swiper__image-block">
                <img class="slider-img" src="<?= $slide['project_slider_img']; ?>" alt="" />
              </div>
            </div>

            <?php  } }?>

          </div>
        </div>

        <div class="projects__keys">
          <div class="projects__arrows-btns">
            <div class="custom-arrow swiper-button-prev" id="about-project-swiper-button-prev">
              <span class="custom-arrow__line custom-arrow__midline"></span>
              <span class="custom-arrow__line custom-arrow__upline-prev"></span>
              <span class="custom-arrow__line custom-arrow__downline-prev"></span>
            </div>
            <div class="custom-arrow swiper-button-next" id="about-project-swiper-button-next">
              <span class="custom-arrow__line custom-arrow__midline"></span>
              <span class="custom-arrow__line custom-arrow__upline-next"></span>
              <span class="custom-arrow__line custom-arrow__downline-next"></span>
            </div>
          </div>
        </div>
      </div>


      <div class="about-project__content">
        <div class="about-project__question">
          <div class="about-project__title description">В чем состояла задача?</div>
          <div class="about-project__text description-secondary"><?= CFS()->get('project_task');?></div>
        </div>
        <div class="about-project__answer">
          <div class="about-project__title description">Решение</div>
          <div class="about-project__text description-secondary"><?= CFS()->get('project_solution');?></div>
        </div>
        <div class="about-project__result">
          <div class="about-project__left">
            <div class="about-project__title description">Какой результат?</div>
            <div class="about-project__text description-secondary"><?= CFS()->get('project_result');?></div>
          </div>
          <div class="about-project__right">
            <div class="about-project__video-box">
              <iframe width="100%" height="100%" src="<?= CFS()->get('project_youtube');?>" title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- delivered products -->

  <div class="delivered-products">
    <div class="container">
      <div class="delivered-products__header page-title">Поставленные продукты</div>
      <div class="delivered-products__list">
        <?php
          $product_list_string = get_field('p_product_list'); 

          if( !empty($product_list_string) ) {
            $product_list_array = explode("=", $product_list_string);
            
          for($i = 0; $i < count($product_list_array); $i++){ 
            $product_info = json_decode( $product_list_array[$i] );

            $product_name = $product_info->name;
            $product_core = $product_info->core;
            $product_width = $product_info->width;
            $product_thick = $product_info->thick;
            $product_type = $product_info->type;
            $product_connection = $product_info->connection;
            $product_link = $product_info->link;
            $product_img = $product_info->img;
          ?>

        <div class="delivered-products__item delivered-card">
          <div class="delivered-card__top">
            <div class="delivered-card__info">
              <div class="delivered-card__title description"><?= $product_name; ?></div>

              <div class="delivered-card__list description-secondary">
                <div class="delivered-card__item">
                  <div class="delivered-card__key">Cердечник:</div>
                  <div class="delivered-card__value"><?= $product_core; ?></div>
                </div>
                <div class="delivered-card__item">
                  <div class="delivered-card__key">Ширина:</div>
                  <div class="delivered-card__value"><?= $product_width; ?></div>
                </div>
                <div class="delivered-card__item">
                  <div class="delivered-card__key">Толщина:</div>
                  <div class="delivered-card__value"><?= $product_thick;?></div>
                </div>
                <div class="delivered-card__item">
                  <div class="delivered-card__key">Тип замка:</div>
                  <div class="delivered-card__value"><?= $product_type;?></div>
                </div>
                <div class="delivered-card__item">
                  <div class="delivered-card__key">Соединение:</div>
                  <div class="delivered-card__value"><?= $product_connection;?></div>
                </div>
              </div>

            </div>
            <div class="delivered-card__image-box">
              <img src="<?= $product_img;?>" alt="" class="delivered-card__image">
            </div>
          </div>
          <div class="delivered-card__bottom">
            <div class="delivered-card__left">
              <a class="delivered-card__btn btn-gold btn" href="<?= $product_link; ?>">Подробнее</a>
            </div>
            <div class="delivered-card__right">
              <div class="tags">
                <?php 
                  $product_tags = $product_info->tags;
                  for($j = 0; $j < count($product_tags); $j++) {
                    $tag_title = $product_tags[$j]->title;
                    $tag_color = $product_tags[$j]->color; ?>
                <div class="tag <?= $tag_color; ?>"><?= $tag_title; ?></div>
                <?php  } ?>
              </div>
            </div>
          </div>
        </div>

        <?php } }?>

        <div class="delivered-products__item delivered-card">
          <div class="delivered-card__top">
            <div class="delivered-card__info">
              <div class="delivered-card__title description">Сэндвич-панели FR</div>

              <div class="delivered-card__list description-secondary">
                <div class="delivered-card__item">
                  <div class="delivered-card__key">Cердечник:</div>
                  <div class="delivered-card__value">Мин. вата</div>
                </div>
                <div class="delivered-card__item">
                  <div class="delivered-card__key">Ширина:</div>
                  <div class="delivered-card__value">1000/1190/1200 мм</div>
                </div>
                <div class="delivered-card__item">
                  <div class="delivered-card__key">Толщина:</div>
                  <div class="delivered-card__value">от 50 до 200 мм.</div>
                </div>
                <div class="delivered-card__item">
                  <div class="delivered-card__key">Тип замка:</div>
                  <div class="delivered-card__value">Standard</div>
                </div>
                <div class="delivered-card__item">
                  <div class="delivered-card__key">Соединение:</div>
                  <div class="delivered-card__value">«Лабиринт» и прямой</div>
                </div>
              </div>

            </div>
            <div class="delivered-card__image-box">
              <img src="./assets/images/delivered2.jpg" alt="" class="delivered-card__image">
            </div>
          </div>
          <div class="delivered-card__bottom">
            <div class="delivered-card__left">
              <button class="delivered-card__btn btn-gold btn">Подробнее</button>
            </div>
            <div class="delivered-card__right">
              <div class="tags">
                <div class="tag tag-gold">Минеральная вата</div>
                <div class="tag tag-blue">Стеновые</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Slider -->
  <div class="slider">
    <div class="container">
      <h2 class="slider__header page-title">Другие проекты</h2>
      <div class="swiper" id="project-page__swiper">
        <div class="swiper-wrapper">

          <?php     
          $current = absint(
            max(
              1,
              get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' )
            )
          );
     
          $query_arr = [ 
            'post_type'     => 'projects',
            'posts_per_page'   => 9,
            'paged'            => $current
          ];

          $query_projects = new WP_Query( $query_arr );
            if ($query_projects->have_posts()) {

            while( $query_projects->have_posts() ) {
              $query_projects->the_post();
              $id = get_the_ID();
          ?>

          <div class="swiper-slide">
            <a href="<?php the_permalink($id);?>">
              <div class="swiper__image-block">
                <?php 
                if (has_post_thumbnail()) {
                  the_post_thumbnail();
                } else {
                  ?>
                <img class="search-result__img" src="https://www.pinecliffs.com/static/images/cms/default_image.png"
                  alt="" />
                <?php } ?>
              </div>
              <div class="swiper-slide__info projects__info">
                <div class="swiper-slide__item">
                  Клиент
                  <div class="swiper-slide__title"><?php the_field('p_client'); ?></div>
                </div>
                <div class="swiper-slide__item">
                  Проект
                  <div class="swiper-slide__title">
                    <?php the_title(); ?>
                  </div>
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
          <div class="custom-arrow swiper-button-prev" id="project-swiper-button-prev">
            <span class="custom-arrow__line custom-arrow__midline"></span>
            <span class="custom-arrow__line custom-arrow__upline-prev"></span>
            <span class="custom-arrow__line custom-arrow__downline-prev"></span>
          </div>
          <div class="custom-arrow swiper-button-next" id="project-swiper-button-next">
            <span class="custom-arrow__line custom-arrow__midline"></span>
            <span class="custom-arrow__line custom-arrow__upline-next"></span>
            <span class="custom-arrow__line custom-arrow__downline-next"></span>
          </div>
        </div>
        <div class="projects__more">
          <a href="http://rp1/projects/" class="link link-arrow">Все проекты</a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer();?>