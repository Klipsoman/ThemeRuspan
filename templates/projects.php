<?php 
 /*
 Template Name: Projects
 */
get_header();
?>

<?php $filterreset = $_SERVER['REQUEST_URI'];
$filterreset = strtok($filterreset, '?'); ?>

<!-- Page Inner -->
<div class="page-inner">
  <div class="container">
    <h1 class="page-header"><?php the_title(); ?></h1>
  </div>
</div>

<?php

// global $wp_query;
  if (isset($_REQUEST['filter']['countperpage']) ) { 
   $post_per_page = $_REQUEST['filter']['countperpage'][0];  
  } else {
    $post_per_page = 12;
  }

//         if (isset($_REQUEST['filter'])) {

//           $query = [
//             'tax_query' => [
//               'relation' => 'AND',     
//             ]
//             ];
            
//             if ( isset($_REQUEST['filter']['category']) && is_array($_REQUEST['filter']['category'])) {
//               $categories = Array();
              
//               foreach($_REQUEST['filter']['category'] as $category) 
//                 $categories[] = intval($category);
                
//                 $query['tax_query'][] = [
//                   'taxonomy' => 'category',
//                   'field'    => 'term_id',
//                   'terms'    => $categories
//                 ];
//                   unset($categories);
//                 }
//         }
        ?>

<!-- projects-page -->
<div class="projects-page">
  <form method="get" id="projects-main-form">
    <div class="projects">
      <div class="container">
        <div class="projects__filters">

          <div class="projects__filter custom-select" id="projects-filter-sectors">
            <div class="custom-select__title description-secondary">Секторы</div>
            <div class="custom-select__body">
              <ul class="custom-select__list">

                <?php
                $sub_cats = get_terms( [
                  'taxonomy' => 'projects_sectors_tax',
                  'hide_empty' => false,
                  'order' => 'DESC'
                ] );

                if( $sub_cats ){
                  foreach( $sub_cats as $cat ){
                ?>

                <li class="custom-select__item">
                  <div class="custom-select__checkbox">
                    <input type="checkbox" name="filter[category][]" id="category_<?= $cat->term_id;?>"
                      value="<?= $cat->slug ;?>"
                      <?= checked( isset($_GET['filter']['category']) && in_array($cat->slug, $_GET['filter']['category'])); ?>>
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

          <div class="projects__filter custom-select disabled" id="projects-filter-products">
            <div class="custom-select__title description-secondary">Продукция</div>
            <div class="custom-select__body">
              <ul class="custom-select__list">
                <li class="custom-select__item">
                  <div class="custom-select__checkbox">
                    <input type="checkbox" name="name11" id="name11">
                  </div>
                  <div class="custom-select__label">
                    <label for="name11">Брошюры</label>
                  </div>
                </li>
                <li class="custom-select__item">
                  <div class="custom-select__checkbox">
                    <input type="checkbox" name="name22" id="name22">
                  </div>
                  <div class="custom-select__label">
                    <label for="name22">Сертификаты</label>
                  </div>
                </li>
              </ul>
              <input class="custom-select__btn btn btn-grey" type="submit" value="Применить">
            </div>
          </div>

          <?php 
            if (isset($_GET['filter']['category'])) { ?>
              <a href="<?php echo $filterreset; ?>" class="projects__reset">Сбросить фильтры x</a>
          <?php  }  ?>

        </div>
        <div class="projects__list">

          <?php 
             
             $current = absint(
               max(
                 1,
                 get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' )
               )
             );
     
             $query_arr = [ 
               'post_type'     => 'projects',
               'projects_sectors_tax' => isset($_GET['filter']['category']) ? $_GET['filter']['category'] : '',
               'posts_per_page'   => $post_per_page,
               'paged'            => $current,
             ];

             $query_projects = new WP_Query( $query_arr );

             if ($query_projects->have_posts()) {

             while( $query_projects->have_posts() ) {
                $query_projects->the_post();
                $id = get_the_ID();
          ?>

          <div class="projects__item">
            <a href="<?php the_permalink(); ?>" class="projects__link">
              <div class="projects__image-box">
                <?php 
                if (has_post_thumbnail()) {
                  the_post_thumbnail();
                } else {
                  ?>
                <img class="search-result__img" src="https://www.pinecliffs.com/static/images/cms/default_image.png"
                  alt="" />
                <?php } ?>
              </div>
              <div class="projects__info">
                <div class="projects__title-box">
                  Клиент
                  <div class="projects__title"><?= CFS()->get('project_client'); ?></div>
                </div>
                <div class="projects__title-box">
                  Проект
                  <div class="projects__title"><?php the_title(); ?></div>
                </div>
              </div>
            </a>
          </div>
          <?php	}	?>
          <?php } else { echo '<div>Ничего не найдено</div>'; }
          wp_reset_postdata();
          ?>

        </div>

        <div class="projects__options">
          <!-- pagination -->
          <div class="projects-page-pagination pagination">
            <div class="container">
              <div class="pagination__items">
                <?php 
                echo wp_kses_post(
                  paginate_links(
                    [
                      'total'   => $query_projects->max_num_pages,
                      'current' => $current,
                      'prev_text' => __('←'),
                      'next_text' => __('→'),
                    ]
                  )
                );
              ?>
                <!-- <div class="pagination__prev"></div>
                <div class="pagination__item current">1</div>
                <div class="pagination__item">2</div>
                <div class="pagination__item">3</div>
                <div class="pagination__next"></div> -->
              </div>
            </div>
          </div>
          <!-- !pagination -->
          <div class="amount" id="projects-and-sertificates-amount">
            <div class="amount__body">
              <div class="amount__title description-secondary" data-mount="12"><?php echo $post_per_page;?></div>
              <ul class="amount__list">
                <li class="amount__item">
                  <label for="" data-mount="12">
                    12
                    <input type="radio" value="12" name="filter[countperpage][]">
                  </label>
                </li>
                <li class="amount__item" data-mount="12">
                  <label for="" data-mount="24">
                    24
                    <input type="radio" value="24" name="filter[countperpage][]">
                  </label>
                </li>
                <li class="amount__item" data-mount="24">
                  <label for="" data-mount="48">
                    48
                    <input type="radio" value="48" data-mount="48" name="filter[countperpage][]">
                  </label>
                </li>
                <li class="amount__item" data-mount="96">
                  <label for="" data-mount="96">
                    96
                    <input type="radio" value="96" data-mount="96" name="filter[countperpage][]">
                  </label>
                </li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- catalog -->
    <div class="catalog">
      <div class="container">
        <div class="catalog__body">
          <div class="catalog__link-box">
            <a href="<?= CFS()->get('projects_doc_upload') ?>" class="catalog__link" download>Скачать
              <?= CFS()->get('projects_doc_name') ?></a>
          </div>
          <div class="catalog__download-box">
            <a href="<?= CFS()->get('projects_doc_upload') ?>" class="catalog__download-link" download>Скачать</a>
          </div>
        </div>
      </div>
    </div>

  </form>

</div>

<?php get_footer();?>