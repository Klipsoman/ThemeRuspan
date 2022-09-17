<?php 
 /*
 Template Name: News
 */
  get_header();
?>

<!-- Page Inner -->
<div class="page-inner">
  <div class="container">
    <h1 class="page-header">Новости</h1>
  </div>
</div>

<!-- news-page -->
<div class="news-page">
  <div class="news">
    <div class="container">

      <div class="news__content">

        <?php 
        $current = absint(
          max(
            1,
            get_query_var( 'paged' ) ? get_query_var( 'paged' ) : get_query_var( 'page' )
          )
        );

        $query_news = new WP_Query( [ 
          'category_name'  => 'news',
          'posts_per_page' => 6,
          'paged'          => $current,
        ] );
        
        if ($query_news->have_posts()) {

          while( $query_news->have_posts() ){
            $query_news->the_post();
          ?>

        <div class="news__item">
          <div class="news__image-block">
            <?php 
                if (has_post_thumbnail()) {
                  the_post_thumbnail();
                } else {
                  ?>
            <img src="https://www.pinecliffs.com/static/images/cms/default_image.png" alt="" />

            <?php }?>

          </div>
          <div class="news__info">
            <div class="news__date"><?php echo get_the_date(); ?></div>
            <div class="news__title"><?= wp_trim_words( get_the_title(), 25, '...' ); ?></div>
            <div class="news__more">
              <a class="news__link link link-border" href="<?= the_permalink(); ?>">Читать далее</a>
            </div>
          </div>
        </div>

        <?php 
        } }
        wp_reset_postdata();
        ?>

      </div>

      <!-- pagination -->
      <div class="news__pagination pagination">
        <div class="container">
          <div class="pagination__items">
            <?php 
            echo wp_kses_post(
              paginate_links(
                [
                  'total'   => $query_news->max_num_pages,
                  'current' => $current,
                  'prev_text' => __('←'),
                  'next_text' => __('→'),
                ]
              )
            );
        ?>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Subscribe -->
  <div class="subscribe">
    <div class="container">
      <div class="subscribe__content">
        <div class="subscribe__left">
          <div class="subscribe__title description">Подписаться на новости Ruspan</div>
        </div>
        <div class="subscribe__right">
        <?php echo do_shortcode('[contact-form-7 id="341" title="Подписка"]'); ?>
        <!--           <form class="subscribe__form">
            <input class="subscribe__input" type="text" name="" id="" placeholder="E-mail" />
            <button class="subscribe__btn" type="submit">Подписаться</button>
          </form> -->
          <div class="subscribe__privacy">
            Нажимая на кнопку «Подписаться», вы соглашаетесь с
            <a href="<?php the_permalink(32) ?>" class="subscribe__privacy-link">Политикой конфиденциальности</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<?php get_footer();?>