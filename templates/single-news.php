<?php 
 /**
 * Template Name: Single news
 * Template Post Type: post
 */
get_header(); 
?>

<!-- news page Inner -->
<div class="news-page-inner">
  <div class="container">
    <h1 class="news-page-inner__header news-page-header">
       <?php the_title(); ?>
       <?php 
        print_r(CFS()->get( '3' ));
       ?>
    </h1>
  </div>
</div>

<!-- single-news-page -->
<div class="single-news-page">
  <!-- single-news -->
  <div class="single-news">
    <div class="container">
      <div class="single-news__content">
        <div class="single-news__left">
          <div class="single-news__image-box">
            <?php
               if (has_post_thumbnail()) {
                the_post_thumbnail();
              } else {
                ?>
              <img class="single-news__image" src="https://www.pinecliffs.com/static/images/cms/default_image.png" alt="" />

              <?php }?>
            
          </div>
        </div>
        <div class="single-news__right">
          <div class="single-news__date">
            <time class="single-news__time"><?php echo get_the_date(); ?></time>
          </div>
          <h3 class="single-news__title description">
            <?php the_title(); ?>
          </h3>
          <p class="single-news__text description-secondary description-secondary--black">
          <?php the_content(); ?>
          </p>
          <!-- <p class="single-news__text description-secondary description-secondary--black">
            Международная компания Kingspan приняла решение передать свои активы в управление локальному
            менеджменту. Хотя решение о передаче было принято в начале марта, нам потребовалось несколько недель,
            чтобы соблюсти необходимые процедуры в интересах наших сотрудников, чьи безопасность и благополучие
            являются основными приоритетами для компании Kingspan.
          </p> -->
          <div class="single-news__link">
            <a href="<?php
            // ссылка на страницу новостей, id 17;
             echo get_permalink( 17 );
             ?>" class="single-news__link-item link link-arrow">Вернуться к списку новостей</a>
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
          <form class="subscribe__form">
            <input class="subscribe__input" type="text" name="" id="" placeholder="E-mail" />
            <button class="subscribe__btn" type="submit">Подписаться</button>
          </form>
          <div class="subscribe__privacy">
            Нажимая на кнопку «Подписаться», вы соглашаетесь с
            <a href="" class="subscribe__privacy-link">Политикой конфиденциальности</a>
          </div>
        </div>
      </div>
    </div>
  </div>


</div>

<?php get_footer();?>