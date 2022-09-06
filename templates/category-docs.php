<?php 
 /*
 Template Name: Documents and sertificates
 */
  get_header();
?>

<!-- Page Inner -->
<div class="page-inner">
  <div class="container">
    <h1 class="page-header">Документы и сертификаты</h1>
  </div>
</div>
<form action="" method="get" id="docs-main-form">
  <!-- docs-page -->
  <div class="docs-page">
    <?php

global $wp_query;
  if (isset($_REQUEST['filter']['countperpage']) ) { 
   $post_per_page = $_REQUEST['filter']['countperpage'][0];  
  } else {
    $post_per_page = 24;
  }
        
        if (isset($_REQUEST['filter'])) {

          $query = [
            'tax_query' => [
              'relation' => 'AND',     
            ]
            ];
            
            if ( isset($_REQUEST['filter']['category']) && is_array($_REQUEST['filter']['category'])) {
              $categories = Array();
              
              foreach($_REQUEST['filter']['category'] as $category) 
                $categories[] = intval($category);
                
                $query['tax_query'][] = [
                  'taxonomy' => 'category',
                  'field'    => 'term_id',
                  'terms'    => $categories
                ];
                  unset($categories);
                }
                }
        ?>

    <div class="docs-options">
      <div class="container">

        <div class="docs-options__content">

          <div class="docs-options__left">

            <div class="docs-options__select custom-select" id="documents-and-sertificates-type" method="get">

              <div class="custom-select__title description-secondary">Тип документа</div>
              <div class="custom-select__body">

                <ul class="custom-select__list">

                  <?php
                $term_id = 6; 

                $sub_cats = get_categories( array(
                  'child_of' => $term_id,
                  'hide_empty' => 0
                ) );

                if( $sub_cats ){
                  foreach( $sub_cats as $cat ){
                ?>

                  <li class="custom-select__item">
                    <div class="custom-select__checkbox">
                      <input type="checkbox" name="filter[category][]" id="category_<?= $cat->term_id;?>"
                        value="<?= $cat->term_id ;?>"
                        <?= checked( isset($_GET['filter']['category']) && in_array($cat->term_id, $_GET['filter']['category'])); ?>>
                    </div>
                    <div class="custom-select__label">
                      <label for="category_<?= $cat->term_id;?>"><?= $cat->name;?></label>
                    </div>
                  </li>

                  <?php  } }  ?>
                </ul>

                <input class="custom-select__btn btn btn-grey" type="submit" value="Применить">

              </div>
            </div>

          </div>

          <div class="docs-options__right">
            <div class="docs-options__search" action="">
              <input class="docs-options__input" type="text" name="search" id="" />
              <input class="docs-options__btn btn btn-grey" type="submit" value="Поиск">
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="docs">
      <div class="container">
        <div class="docs__list">

          <?php 

        $current = absint(
          max(
            1,
            get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' )
          )
        );

        $query_arr = [ 
          'cat'     => isset($_GET['filter']['category']) ? $_GET['filter']['category'] : [6],
          'posts_per_page'   => isset($_GET['filter']['countperpage']) ? $_GET['filter']['countperpage'][0] : $post_per_page,
          'paged'            => $current
        ];

        if (!empty($_GET['search'])) {
          $search_query = $_GET['search'];
          $query_arr['s'] = strtolower($search_query);
        }

          $query_docs = new WP_Query( $query_arr );

          if ($query_docs->have_posts()) {

            while( $query_docs->have_posts() ) {
              $query_docs->the_post();
              $id = get_the_ID();
          ?>

          <div class="docs__item">
            <div class="catalog">
              <div class="catalog__body">
                <div class="catalog__link-box">
                  <a href="<?php the_field('document_link', $id); ?>" class="catalog__link"><?php the_title(); ?></a>
                </div>
                <div class="catalog__type">
                  <?php 
                      $cat = get_the_category();
                      $cat_name = $cat[0]->name;

                      for($i = 0; $i < count($cat); $i++){
                        $parent_id = $cat[$i]->parent;
                        if ($parent_id !== 0) {
                          $cat_name = $cat[$i]->name;
                        }
                      }

                      echo $cat_name;
                      ?>
                </div>
                <div class="catalog__download-box">
                  <a href="<?php the_field('document_link', $id); ?>" class="catalog__download-link">Скачать</a>
                </div>
              </div>
            </div>
          </div>


          <?php }
          } else {
            echo '<div class="catalog__body">Ничего не найдено</div>';
          }
          wp_reset_postdata();
        ?>

        </div>

        <div class="docs__bottom-options">

          <div class="docs__bottom-options-content">

            <div class="news__pagination pagination">
              <div class="pagination__items">
                <?php 
                echo wp_kses_post(
                  paginate_links(
                    [
                      'total'   => $query_docs->max_num_pages,
                      'current' => $current,
                      'prev_text' => __('←'),
                      'next_text' => __('→'),
                    ]
                  )
                );
              ?>
              </div>
            </div>

            <div class="amount" id="documents-and-sertificates-amount">
                  <?php 
                  $title_count = isset($_GET['filter']['countperpage']) ? $_GET['filter']['countperpage'][0] : $post_per_page;      
                ?>
              <div class="amount__body" method="get">
                <div class="amount__title description-secondary" data-mount="">
                  <?= $title_count; ?>
                </div>
                <ul class="amount__list">
                  <li class="amount__item">
                    <label for="" data-mount="1">24
                      <input type="radio" value="24" name="filter[countperpage][]"
                        <?= checked( isset($_GET['filter']['countperpage']) && $_GET['filter']['countperpage'][0] && $_GET['filter']['countperpage'][0] == '24'); ?>
                      >
                    </label>
                  </li>
                  <li class="amount__item">
                    <label for="" data-mount="2">48
                      <input type="radio" value="48" name="filter[countperpage][]"
                        <?= checked( isset($_GET['filter']['countperpage']) && $_GET['filter']['countperpage'][0] && $_GET['filter']['countperpage'][0] == '48'); ?>
                      >
                    </label>
                  </li>
                  <li class="amount__item">
                    <label for="" data-mount="3">96
                      <input type="radio" value="96" name="filter[countperpage][]"
                        <?= checked( isset($_GET['filter']['countperpage']) && $_GET['filter']['countperpage'][0] && $_GET['filter']['countperpage'][0] == '96'); ?>
                      >
                    </label>
                  </li>
                </ul>
              </div>
            </div>

          </div>

        </div>

      </div>
    </div>

  </div>
</form>

<?php get_footer();?>