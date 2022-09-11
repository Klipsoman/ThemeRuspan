<?php 
  get_header();
?>

<!-- Page Inner -->
<div class="page-inner product-page-inner">
  <div class="container">
    <h1 class="page-header"><?php the_title();?></h1>
    <div class="product-page-inner__tags">
      <div class="tags">
        <div class="tag tag-gold"><?= CFS()->get('panel_tag1_name')?></div>
        <div class="tag tag-bgc"><?= CFS()->get('panel_tag2_name')?></div>
      </div>
    </div>
  </div>
</div>

<!-- product-page -->
<div class="product-page">

  <div class="product">
    <div class="container">
      <div class="product__content">
        <div class="product__left">
          <div class="product__title description"><?= CFS()->get('panel_title');?></div>
          <div class="product__descr description-secondary"><?= CFS()->get('panel_descr');?></div>
          <div class="product__characteristic product-characteristic">

            <div class="product-characteristic__row">
              <div class="product-characteristic__key description-secondary">Тип</div>
              <div class="product-characteristic__value description-secondary"><?= CFS()->get('panel_type');?></div>
            </div>
            <div class="product-characteristic__row">
              <div class="product-characteristic__key description-secondary">Материал</div>
              <div class="product-characteristic__value description-secondary"><?= CFS()->get('panel_material');?></div>
            </div>
            <div class="product-characteristic__row">
              <div class="product-characteristic__key description-secondary">Ширина</div>
              <div class="product-characteristic__value description-secondary"><?= CFS()->get('panel_width');?></div>
            </div>
            <div class="product-characteristic__row">
              <div class="product-characteristic__key description-secondary">Толщина</div>
              <div class="product-characteristic__value description-secondary"><?= CFS()->get('panel_thick');?></div>
            </div>
            <div class="product-characteristic__row">
              <div class="product-characteristic__key description-secondary">Класс пожарной безопасности</div>
              <div class="product-characteristic__value description-secondary"><?= CFS()->get('panel_class');?></div>
            </div>
            <div class="product-characteristic__row">
              <div class="product-characteristic__key description-secondary">Тип замка</div>
              <div class="product-characteristic__value description-secondary"><?= CFS()->get('panel_lock');?></div>
            </div>
            <div class="product-characteristic__row">
              <div class="product-characteristic__key description-secondary">Тип стыка</div>
              <div class="product-characteristic__value description-secondary"><?= CFS()->get('panel_joint');?></div>
            </div>

          </div>

          <button class="product__btn btn btn-gold">Узнать стоимость</button>

        </div>
        <div class="product__right">
          <div class="product__image-box">
            <?php 
                  if (has_post_thumbnail()) {
                    the_post_thumbnail();
                  } else {
                    ?>
            <img class="product__image"
              src="https://www.pinecliffs.com/static/images/cms/default_image.png" alt="" />
            <?php } ?>
          </div>
        </div>
        <div class="product__laptop">
          <div class="product__characteristic product-characteristic">

            <div class="product-characteristic__row">
              <div class="product-characteristic__key description-secondary">Тип</div>
              <div class="product-characteristic__value description-secondary"><?= CFS()->get('panel_type');?></div>
            </div>
            <div class="product-characteristic__row">
              <div class="product-characteristic__key description-secondary">Материал</div>
              <div class="product-characteristic__value description-secondary"><?= CFS()->get('panel_material');?></div>
            </div>
            <div class="product-characteristic__row">
              <div class="product-characteristic__key description-secondary">Ширина</div>
              <div class="product-characteristic__value description-secondary"><?= CFS()->get('panel_width');?></div>
            </div>
            <div class="product-characteristic__row">
              <div class="product-characteristic__key description-secondary">Толщина</div>
              <div class="product-characteristic__value description-secondary"><?= CFS()->get('panel_thick');?></div>
            </div>
            <div class="product-characteristic__row">
              <div class="product-characteristic__key description-secondary">Класс пожарной безопасности</div>
              <div class="product-characteristic__value description-secondary"><?= CFS()->get('panel_class');?></div>
            </div>
            <div class="product-characteristic__row">
              <div class="product-characteristic__key description-secondary">Тип замка </div>
              <div class="product-characteristic__value description-secondary"><?= CFS()->get('panel_lock');?></div>
            </div>
            <div class="product-characteristic__row">
              <div class="product-characteristic__key description-secondary">Тип стыка</div>
              <div class="product-characteristic__value description-secondary"><?= CFS()->get('panel_joint');?></div>
            </div>

          </div>

          <button class="product__btn btn btn-gold">Узнать стоимость</button>
        </div>
      </div>
    </div>
  </div>

  <!-- catalog -->
  <div class="catalog">
    <div class="container">
      <div class="catalog__body">
        <div class="catalog__link-box">
          <a href="<?= CFS()->get('panel_doc_link');?>" class="catalog__link"><?= CFS()->get('panel_doc_name');?></a>
        </div>
        <div class="catalog__download-box">
          <a href="<?= CFS()->get('panel_doc_link');?>" class="catalog__download-link">Скачать</a>
        </div>
      </div>
    </div>
  </div>

  <!-- components -->
  <div class="components">
    <div class="container">
      <div class="components__content">
        <?php 
          $panel_select = CFS()->get('panel_select');

          if ( !empty($panel_select) ) {
            foreach ( $panel_select as $sel ) { 

              if ($sel === 'Замок Secret Fix') { ?>
        <div class="components__item">
          <div class="components__title description">Замок Secret Fix</div>
          <div class="components__descr description-secondary">Использование замкового соединения Secret Fix при
            вертикальной ориентации сэндвич-панелей позволяет скрыть все монтажные элементы внутри замка, и сделать
            внешний вид фасада здания более эстетичным и целостным.</div>
          <div class="components__image-box">
            <img src="<?= get_template_directory_uri()?>/assets/images/components1.jpg" alt=""
              class="components__image">
          </div>
        </div>
        <?php
              }
              if ($sel === 'Метод стыковки «Лабиринт»') { ?>
        <div class="components__item">
          <div class="components__title description">Метод стыковки «Лабиринт»</div>
          <div class="components__descr description-secondary">Использование стыковки панелей методом «Лабиринт»
            (шип-паз) сокращает теплопотери здания на 5%. Вы можете опционально выбрать данный вариант исполнения при
            спецификации заказа.</div>
          <div class="components__image-box">
            <img src="<?= get_template_directory_uri()?>/assets/images/components2.jpg" alt=""
              class="components__image">
          </div>
        </div>
        <?php
              }
              if ($sel === 'Метод стыковки прямой') { ?>
        <div class="components__item">
          <div class="components__title description">Метод стыковки прямой</div>
          <div class="components__descr description-secondary">Классический метод стыковки панелей, геометрия которого
            полностью отвечает требованиям ГОСТ в части обеспечения теплоизоляции.</div>
          <div class="components__image-box">
            <img src="<?= get_template_directory_uri()?>/assets/images/components3.jpg" alt=""
              class="components__image">
          </div>
        </div>
        <?php
              }
              if ($sel === 'Замок Standard') { ?>
        <div class="components__item">
          <div class="components__title description">Замок Standard</div>
          <div class="components__descr description-secondary">Использование замкового соединения "Стандарт" — это
            классический метод крепления сэндвич-панелей к металлическому каркасу здания. Для придания соединению
            эстетичного внешнего вида все детали крепежа в местах соединения закрываются фасонными элементами.</div>
          <div class="components__image-box">
            <img src="<?= get_template_directory_uri()?>/assets/images/components4.jpg" alt=""
              class="components__image">
          </div>
        </div>
        <?php
              }
        ?>
        <?php } } ?>
      </div>
    </div>
  </div>

  <!-- tech-info -->
  <div class="tech-info">
    <div class="container">
      <h3 class="tech-info__header description">Техническая информация
      </h3>
      <div class="tabs">

        <div class="tabs__item">
          <div class="tabs__up">
            <div class="tabs__title description-secondary">Технические данные</div>
            <div class="tabs__icon"></div>
          </div>
          <div class="tabs__down">
            <p class="tabs__descr description-secondary">Стандартные длины панелей серии FHz составляют от 2,0 до 13,50
              м. Если вы хотите заказать панели с индивидуальными параметрами длины, напишите нам по электронной почте
              info@ruspan.su. Соотношение толщины панели к ее весу на 1 м2 представлено в таблице ниже.</p>
          </div>
        </div>
        <div class="tabs__item">
          <div class="tabs__up">
            <div class="tabs__title description-secondary">Покрытия металла</div>
            <div class="tabs__icon"></div>
          </div>
          <div class="tabs__down">
            <p class="description">Polyester</p>
            <p class="tabs__descr description-secondary">Это универсальное полимерное покрытие, подходящее для внутреннего и внешнего применения, наиболее доступное по цене. Стандартная толщина покрытия для внешнего применения составляет 25 мкм, для внутреннего – 15 мкм. Покрытие металлических поверхностей полиэстером получило широкое распространение в стандартных решениях ограждающих конструкций.</p>
            <p class="description">PVDF</p>
            <p class="tabs__descr description-secondary">Данное покрытие непревзойденно сохраняет цвет и блеск, поскольку обладает исключительной сопротивляемостью ультрафиолетовому излучению. Стандартная толщина покрытия составляет 25 – 35 мкм и обладает хорошей коррозионной стойкостью. Покрытие PVDF можно использовать в условиях крайне высокого ультрафиолетового излучения в сочетании с экстремальными температурой и относительной влажностью. Стандартная гамма цветов включает в себя серебристый «металлик».</p>
            <p class="description">Spectrum</p>
            <p class="tabs__descr description-secondary">Полиуретановое покрытие с толщиной органического, упрочненного поверхностного слоя толщиной  60 мкм. Разработано для применения в жестких условиях эксплуатации . Покрытие характеризуется эстетическим блеском , гибкостью, устойчивостью к механическим повреждениям, коррозии и УФ-излучению. Имеет в стандарте широкий диапазон цветов.</p>
            <p class="description">Food Safe</p>
            <p class="tabs__descr description-secondary">ПВХ покрытие предназначенное для внутреннего применения на предприятиях пищевой промышленности, холодильниках и других помещениях, где есть контакт с пищевыми продуктами. Рабочая поверхность покрытия не токсична и устойчива к образованию плесени. Покрытие Food Safe является химически инертным и легко моется. Не предназначено для использования на улице, потому что не устойчиво к УФ-излучению. Толщина покрытия 120-150 мкм.</p>
          </div>
        </div>

        <?php 
          $panel_list = CFS()->get('panel_list');

          if ( !empty($panel_list) ) {
            foreach ( $panel_list as $list ) { 
              $list_header = $list['panel_list_header'];
              $list_block = $list['panel_list_block'];?>

        <div class="tabs__item">
          <div class="tabs__up">
            <div class="tabs__title description-secondary"><?= $list_header; ?></div>
            <div class="tabs__icon"></div>
          </div>
          <div class="tabs__down">
            <?php 
              if ( !empty($list_block) ) {
                foreach ( $list_block as $block ) { 
                  $block_title = $block['panel_list_title'];
                  $block_text = $block['panel_list_text'];
                  $block_image = $block['panel_list_image'];

                  if (!empty($block_title)) { ?>
                    <h4 class="description"><?= $block_title;?></h4>
                    <?php
                  }
                  if (!empty($block_text)) { ?>
                    <p class="tabs__descr description-secondary"><?= $block_text;?></p>
                    <?php
                  } 
                  if (!empty($block_image)) { ?>
                    <img src="<?= $block_image ?>" />
                    <?php
                  }                   
             } }?>
          </div>
        </div>

        <?php } } ?>

      </div>
    </div>
  </div>

  <!-- Use area -->
  <div class="use-areas">
    <div class="container">
      <div class="use-areas__content">
        <div class="use-areas__left">
          <div class="use-areas__top">
            <h3 class="use-areas__title description">Сферы применения</h3>
            <p class="use-areas__descr description-secondary"><?= CFS()->get('panel_use_area_descr');?></p>
          </div>
          <div class="use-areas__bottom">

            <div class="page-links">
              <ul class="page-links__list">
                <li class="page-links__item">
                  <a href="" class="bvz-links__link page-links__link link link-arrow">Торговые здания</a>
                </li>
                <li class="page-links__item">
                  <a href="" class="page-links__link link link-arrow">Спортивные сооружения</a>
                </li>
                <li class="page-links__item">
                  <a href="" class="page-links__link link link-arrow">Производственные здания</a>
                </li>
                <li class="page-links__item">
                  <a href="" class="page-links__link link link-arrow">Логистические здания и склады</a>
                </li>
              </ul>
            </div>

          </div>
        </div>
        <div class="use-areas__right">
          <div class="use-areas__slider">
            <div class="slider slider-use-areas">
              <?php 
                $panel_slider = CFS()->get('panel_slider');
              ?>
              <div class="swiper" id="slider-use-areas">
                <div class="swiper-wrapper">

                  <?php 
                    if( !empty($panel_slider) ){
                      foreach ( $panel_slider as $slide ) {            
                  ?>

                  <div class="swiper-slide">
                    <div class="swiper-slide__image-box">
                      <img src="<?= $slide['panel_slider_image'] ?>" alt="" />
                    </div>
                  </div>

                  <?php  } }?>

                </div>
              </div>
              <div class="projects__keys">
                <div class="projects__arrows-btns">
                  <div class="custom-arrow swiper-button-prev" id="use-areas-swiper-button-prev">
                    <span class="custom-arrow__line custom-arrow__midline"></span>
                    <span class="custom-arrow__line custom-arrow__upline-prev"></span>
                    <span class="custom-arrow__line custom-arrow__downline-prev"></span>
                  </div>
                  <div class="custom-arrow swiper-button-next" id="use-areas-swiper-button-next">
                    <span class="custom-arrow__line custom-arrow__midline"></span>
                    <span class="custom-arrow__line custom-arrow__upline-next"></span>
                    <span class="custom-arrow__line custom-arrow__downline-next"></span>
                  </div>
                </div>
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
      <div class="swiper" id="product-page__swiper">
        <div class="swiper-wrapper">
          <?php
            $query_arr = [ 
              'post_type'     => 'panels',
              'posts_per_page'   => 12,
            ];
            $query_projects = new WP_Query( $query_arr );
            if ($query_projects->have_posts()) {

            while( $query_projects->have_posts() ) {
              $query_projects->the_post();
          ?>

          <div class="swiper-slide">
            <a class="swiper-slide__body" href="<?php the_permalink();?>">
              <h3 class="description"><?php the_title();?></h3>
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