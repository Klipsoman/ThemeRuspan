<?php 
 /*
 Template Name: Manufacture
 */
  get_header();
?>
<main>
  <!-- Page Inner -->
  <div class="page-inner">
    <div class="container">
      <h1 class="page-header">Наше производство</h1>
    </div>
  </div>

  <!-- manufacture page -->
  <div class="manufacture-page">
    <!-- inner -->
    <div class="manufacture-inner">
      <div class="container">
        <div class="manufacture-inner__content">
          <div class="manufacture-inner__top">
            <p class="manufacture-inner__descr description">
              <?= CFS()->get('manufacture_text1') ?>
            </p>
          </div>
          <div class="manufacture-inner__left">
            <p class="manufacture-inner__descr description">
             <?= CFS()->get('manufacture_text1') ?>
            </p>
            <p class="manufacture-inner__descr description-secondary">
             <?= CFS()->get('manufacture_text2') ?>
            </p>
            <p class="manufacture-inner__descr description-secondary">
             <?= CFS()->get('manufacture_text3') ?>
            </p>
          </div>
          <div class="manufacture-inner__right">
              <div class="manufacture-inner__image-box">
                <img src="<?= get_template_directory_uri()?>/assets/images/proizvodstvo.svg" alt="" class="manufacture-inner__image">
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- manufactures -->
    <div class="manufactures">
      <div class="container">
        <!-- manufacture -->
        <div class="manufacture" id="gatchina">
          <div class="manufacture__top">
            <div class="manufacture__title-box">
              <h3 class="manufacture__header page-title">Завод в Гатчине</h3>
              <p class="manufacture__descr description-secondary">
                <?= CFS()->get('manufacture_gatchina-text') ?>
              </p>
            </div>
            <div class="manufacture__descr-box">
              <p class="manufacture__descr description-secondary">
              <?= CFS()->get('manufacture_gatchina-text') ?>
              </p>
            </div>
            <div class="manufacture__image-box">
              <img src="<?= get_template_directory_uri()?>/assets/images/manufacture1.jpg" alt=""
                class="manufacture__image" />
            </div>
          </div>
          <div class="manufacture__middle">
            <div class="manufacture__values">
              <div class="manufacture__lists">
                <ul class="manufacture__list">
                  <li class="manufacture__li page-title"><?= CFS()->get('manufacture_gatchina_value1') ?></li>
                  <li class="manufacture__li description-secondary">
                    <?= CFS()->get('manufacture_gatchina_value1-text') ?>
                  </li>
                </ul>
                <ul class="manufacture__list">
                  <li class="manufacture__li page-title"><?= CFS()->get('manufacture_gatchina_value2') ?></li>
                  <li class="manufacture__li description-secondary"><?= CFS()->get('manufacture_gatchina_value2-text') ?></li>
                </ul>
                <div class="manufacture__round"></div>
              </div>
            </div>
          </div>

          <div class="manufacture__bottom">
            <div class="manufacture__info">
              <div class="manufacture__address description">Адрес завода</div>
              <div class="manufacture__address description-secondary">
                188302, Ленинградская обл., д. Малые Колпаны Гатчинского района, ул. Кооперативная, д. 1а
              </div>
              <div class="manufacture__address description-secondary">
                Координаты: <br />
                59.543846, 30.059669
              </div>
            </div>
            <div class="manufacture__map">
              <!-- script created map yandex -->
            </div>
          </div>
        </div>
        <!-- manufacture -->
        <div class="manufacture" id="nevinnomisk">
          <div class="manufacture__top">
            <div class="manufacture__title-box">
              <h3 class="manufacture__header page-title">Завод в <br>Невинномысске</h3>
              <p class="manufacture__descr description-secondary">
                <?= CFS()->get('manufacture_nevinnomisk-text') ?>
              </p>
            </div>
            <div class="manufacture__descr-box">
              <p class="manufacture__descr description-secondary">
                <?= CFS()->get('manufacture_nevinnomisk-text') ?>
              </p>
            </div>
            <div class="manufacture__image-box">
              <img src="<?= get_template_directory_uri()?>/./assets/images/manufacture1.jpg" alt=""
                class="manufacture__image" />
            </div>
          </div>
          <div class="manufacture__middle">
            <div class="manufacture__values">
              <div class="manufacture__lists">
                <ul class="manufacture__list">
                  <li class="manufacture__li page-title"><?= CFS()->get('manufacture_nevinnomisk_value') ?></li>
                  <li class="manufacture__li description-secondary"><?= CFS()->get('manufacture_nevinnomisk_value-text') ?></li>
                </ul>
                <div class="manufacture__round"></div>
              </div>
            </div>
          </div>

          <div class="manufacture__bottom">
            <div class="manufacture__info">
              <div class="manufacture__address description">Адрес завода</div>
              <div class="manufacture__address description-secondary">357107, Невинномысск, ул. Низяева, д. 1В</div>
              <div class="manufacture__address description-secondary">
                Координаты: <br />
                44.673693, 41.937103
              </div>
            </div>
            <div class="manufacture__map">
              <!-- script created map yandex -->
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
            <a href="<?php the_permalink( 42 )?>" class="page-links__link link link-arrow">Наша история</a>
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