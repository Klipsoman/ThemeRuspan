<?php 
 /**
 * Template Name: Search Page
 */
get_header(); 
?>

<!-- Page Inner -->
<div class="page-inner page-inner__search">
  <div class="container">
    <h1 class="page-header">Поиск</h1>
  </div>
</div>

<!-- search-page -->
<div class="search-page">
  <!-- search -->
  <div class="search">
    <div class="container">
      <div class="search__content">

        <?php get_search_form();?>

        <div class="search__right">
          <div class="page-links">
            <div class="container">
              <ul class="page-links__list">
                <li class="page-links__item">
                  <a href="<?= get_home_url()?>" class="bvz-links__link page-links__link link link-arrow">Вернуться на
                    главную</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- search-result -->
  <div class="search-result">
    <div class="container">
      <div class="search-result__query description-secondary">

        <?php 
          if (get_search_query()) {
        ?>
        Результат поиска “<?php the_search_query(); ?>”
        <?php } ?>

      </div>
      <ul class="search-result__list">

        <?php
          $s = get_search_query();
          $args = array(
            's'             => $s,
            'posts_per_page' => 10
          );

        // The Query
        $the_query = new WP_Query( $args );

        if (get_search_query()) {

        if ( $the_query->have_posts() ) {
              while ( $the_query->have_posts() ) {
                $the_query->the_post();
              ?>

        <li class="search-result__item">
          <div class="search-result__content">
            <div class="search-result__left">
              <div class="search-result__image-box">
                <?php 
                if (has_post_thumbnail()) {
                  the_post_thumbnail();
                } else {
                  ?>
                <img class="search-result__img" src="https://www.pinecliffs.com/static/images/cms/default_image.png"
                  alt="" />
                <?php } ?>
              </div>
            </div>
            <div class="search-result__right">
              <a class="search-result__title search-result__link description"
                href="<?php the_permalink(); ?>"><?php the_title(); ?></a>

              <p class="search-result__descr description-secondary">
                <?php the_content(); ?>          
              </p>
            </div>
          </div>
        </li>

        <?php
        }
       }else{
          ?>
        <li class="search-result__item search-result__item--none description">По вашему запросу ничего не найдено</li>
        <?php } ?>
      </ul>

      <!-- pagination -->
      <div class="search__pagination pagination">
        <div class="container">
          <div class="pagination__items">
            <?php 
            echo wp_kses_post(
              paginate_links(
                [
                  'total'   => $the_query->max_num_pages,
                  'prev_text' => __('←'),
                  'next_text' => __('→'),
                ]
              )
            );
          }
        ?>
          </div>
        </div>
      </div>

    </div>
  </div>

</div>

<?php get_footer();?>