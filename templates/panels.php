<?php 
 /*
    Template Name: Panels
 */
  get_header();
?>
<main>
  <!-- Page Inner -->
  <div class="page-inner">
    <div class="container">
      <h1 class="page-header"><?php the_title();?></h1>
    </div>
  </div>

  <!-- docs-page -->
  <div class="sandvich-panels-page">

    <div class="sandvich-panels-inner">
      <div class="container">
        <div class="sandvich-panels-inner__content sandvich-panels-inner__column">
          <div class="sandvich-panels-inner__left">
            <p class="sandvich-panels-inner__descr description-secondary"><?= CFS()->get('panels_subheader') ?></p>
          </div>
          <div class="sandvich-panels-inner__middle sandvich-panels-inner__column">
            <div class="sandvich-panels-inner__info">
              <p class="sandvich-panels-inner__title description"><?= CFS()->get('panels_prop1') ?></p>
              <p class="sandvich-panels-inner__property description-secondary"><?= CFS()->get('panels_prop1-text') ?></p>
            </div>
            <div class="sandvich-panels-inner__info">
              <p class="sandvich-panels-inner__title description"><?= CFS()->get('panels_prop2') ?></p>
              <p class="sandvich-panels-inner__property description-secondary"><?= CFS()->get('panels_prop2-text') ?></p>
            </div>
          </div>
          <div class="sandvich-panels-inner__right sandvich-panels-inner__column">
            <div class="sandvich-panels-inner__info">
              <p class="sandvich-panels-inner__title description"><?= CFS()->get('panels_prop3') ?></p>
              <p class="sandvich-panels-inner__property description-secondary"><?= CFS()->get('panels_prop3-text') ?></p>
            </div>
            <div class="sandvich-panels-inner__info">
              <p class="sandvich-panels-inner__title description"><?= CFS()->get('panels_prop4') ?></p>
              <p class="sandvich-panels-inner__property description-secondary"><?= CFS()->get('panels_prop4-text') ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="sandvich-panels-table">
      <div class="container">

        <?php      
            $terms = get_terms( 'panels_types', [
              'hide_empty' => false,
              ] );
              
              for ($i = 0; $i < count($terms); $i++){
                $term_slug = $terms[$i]->slug;
                $term_name = $terms[$i]->name;?>

        <div class="sandvich-panels-table__content">
          <div class="sandvich-panels-table__left">
            <div class="sandvich-panels-table__name description"><?= $term_name; ?></div>
          </div>
          <div class="sandvich-panels-table__right">
            <div class="sandvich-panels-table__list">

              <?php
                    $query_arr = [ 
                      'post_type'      => 'panels',
                      'taxonomy'       => 'panels_types',
                      'posts_per_page' => -1,
                      'panels_types'   => $term_slug
                    ];
                    
                    $query_projects = new WP_Query( $query_arr );
                    
                    if ($query_projects->have_posts()) {
                      
                      while( $query_projects->have_posts() ) {
                        $query_projects->the_post();?>

              <a class="sandvich-panels-table__item sandvich-panel" href="<?php the_permalink(); ?>">
                <div class="sandvich-panel__image-box">
                  <?php 
                      if (has_post_thumbnail()) {
                        the_post_thumbnail();
                      } else {
                        ?>
                  <img class="sandvich-panel__image"
                    src="https://www.pinecliffs.com/static/images/cms/default_image.png" alt="" />
                  <?php } ?>
                </div>
                <?php
                  $panel_features = [
                    "panel_lock" => CFS()->get('panel_lock'),
                    "panel_joint" => CFS()->get('panel_joint')
                  ];
                  $panel_features_name = [
                    "Тип замка" => "panel_lock",
                    "Тип стыка" => "panel_joint"
                  ];
                ?>
                <div class="sandvich-panel__info">
                  <div class="sandvich-panel__title description"><?= the_title();?></div>
                  <div class="sandvich-panel__list description-secondary">
                  <?php
                    foreach ( $panel_features as $key => $feature ) {
                    if(!empty($feature)){
                      $title = array_search($key, $panel_features_name);
                    ?>
                    <div class="sandvich-panel__item">
                      <div class="sandvich-panel__key"><?= $title;?>:</div>
                      <div class="sandvich-panel__value"><?= $feature;?></div>
                    </div>
                    <?php
                    } }?>
                  </div>
                </div>
                <div class="sandvich-panel__tags">
                  <div class="tags">
                    <div class="tag tag-gold"><?= CFS()->get('panel_tag1_name');?></div>
                    <div class="tag tag-blue"><?= CFS()->get('panel_tag2_name');?></div>
                  </div>
                </div>
              </a>
              <?php } } 
               wp_reset_postdata();
               ?>

            </div>

          </div>
        </div>
        <?php }  ?>
      </div>
    </div>

    <!-- catalog -->
    <div class="catalog">
      <div class="container">
        <div class="catalog__body">
          <div class="catalog__link-box">
            <a href="<?= CFS()->get('panels_doc_link'); ?>"
              class="catalog__link"><?= CFS()->get('panels_doc_name');?></a>
          </div>
          <div class="catalog__download-box">
            <a href="<?= CFS()->get('panels_doc_link'); ?>" class="catalog__download-link" download>Скачать</a>
          </div>
        </div>
      </div>
    </div>

    <div class="sandvich-panels-footer">
      <div class="container">
        <div class="sandvich-panels-footer__content">
          <div class="sandvich-panels-footer__column">
            <div class="sandvich-panels-footer__info">
              <p class="sandvich-panels-footer__title description">Отличные теплоизоляционные свойства</p>
              <p class="sandvich-panels-footer__property description-secondary">Коэффициент теплопроводности материала
                PIR
                — λ=0,021 Вт/(м•К).</p>
            </div>
            <div class="sandvich-panels-footer__info">
              <p class="sandvich-panels-footer__title description">Высокая огнестойкость</p>
              <p class="sandvich-panels-footer__property description-secondary">Вся продукция Ruspan имеет высокие
                свойства пожарной безопасности, подтвержденные необходимыми сертификатами.</p>
            </div>
          </div>
          <div class="sandvich-panels-footer__column">
            <div class="sandvich-panels-footer__info">
              <p class="sandvich-panels-footer__title description">Прочность и долговечность</p>
              <p class="sandvich-panels-footer__property description-secondary">Для внутренней и наружной частей
                используется оцинкованный металл толщиной 0,5–0,7 мм с полимерным покрытием.</p>
            </div>
            <div class="sandvich-panels-footer__info">
              <p class="sandvich-panels-footer__title description">Качество</p>
              <p class="sandvich-panels-footer__property description-secondary">Материалы от лидеров отрасли. Гарантия
                на
                металл до 25 лет.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>
<?php get_footer();?>