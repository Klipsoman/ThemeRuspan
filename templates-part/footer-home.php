  <!-- FOOTER -->
  <footer class="footer">
    <section class="request">
      <div class="container">
        <div class="request__content">
          <div class="request__left">
            <h2 class="request__header section-header">Оставьте заявку</h2>
            <p class="request__descr">
              Наши менеджеры ответят на ваши вопросы, рассчитают стоимость услуг и подготовят индивидуальное
              коммерческое
              предложение
            </p>
          </div>
          <div class="request__right">
            <?php echo do_shortcode('[contact-form-7 id="335" title="Контактная форма (Главная модальное окно, главная футер, страницы сайта)"]');?>
            <div class="request__policy">
              Нажимая на кнопку «Оставить заявку», вы соглашаетесь с
              <a class="request__policy-link" href="<?php the_permalink(32) ?>">Политикой конфиденциальности</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contacts -->

    <section class="contacts">
      <div class="container">
        <div class="contacts__content">
          <div class="contacts__left">
            <div class="contacts__header-block">
              <h2 class="contacts__header section-header">Контакты</h2>
            </div>
            <div class="contacts__telmail">
              <div class="contacts__tel">
                <a class="telephone__desktop description">+7 800 250-07-65</a>
                <a class="telephone__mobile description" href="tel:+78002500765">+7 800 250-07-65</a>
              </div>
              <div class="contacts__tel">
                <a class="telephone__desktop description">+7 812 602-29-40</a>
                <a class="telephone__mobile description" href="tel:+78126022940">+7 812 602-29-40</a>
              </div>  
              <div class="contacts__mail"><a class="link" href="mailto:info@ruspan.su">info@ruspan.su</a></div>
            </div>
          </div>

          <div class="contacts__right">
            <div class="contacts__item">
              <div class="contacts__title">офис</div>
              <div class="contacts__descr">
                196158, Россия, Санкт-Петербург, Пулковское шоссе, дом 28, литера А, офис 804
              </div>
            </div>

            <div class="contacts__item">
              <div class="contacts__title">Мы в соцсетях</div>
              <div class="contacts__descr">
                <a class="contacts__link link link-arrow" href="https://vk.com/ruspan_russia">Вконтакте</a>
              </div>
            </div>

            <div class="contacts__item">
              <div class="contacts__title">Завод на Северо-Западе</div>
              <div class="contacts__descr">
                188302, Ленинградская обл., д. Малые Колпаны Гатчинского района, ул. Кооперативная, д. 1а
              </div>
            </div>

            <div class="contacts__item">
              <div class="contacts__title">Завод на Юге</div>
              <div class="contacts__descr">357107, Невинномысск, ул. Низяева, д. 1В</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- News -->

    <section class="news">
      <div class="container">
        <h2 class="news__header section-header">Новости Ruspan</h2>

        <div class="news__content">

        <?php 
          $my_posts = get_posts( array(
            'numberposts' => 2,
            'category_name' => 'news',
            'category'    => 5,
            'orderby'     => 'date',
            'order'       => 'DESC',
            'include'     => array(),
            'exclude'     => array(),
            'meta_key'    => '',
            'meta_value'  =>'',
            'post_type'   => 'post',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
          ) );

          global $post;

          foreach( $my_posts as $post ){
            setup_postdata( $post );      
          ?>

          <article class="news__item">
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
              <div class="news__title">
                <?= wp_trim_words( get_the_title(), 25, '...' );?>
              </div>
              <div class="news__more">
                <a class="news__link link link-border" href="<?= the_permalink()?>">Читать далее</a>
              </div>
            </div>
          </article>

         <?php 
        } 
        wp_reset_postdata();
        ?>

        </div>
        <div class="news__all">
          <a class="link link-arrow" href="<?= get_permalink(17); ?>">Все новости</a>
        </div>
      </div>
    </section>

    <section class="main-footer">
      <div class="container">
        <div class="main-footer__content">
          <div class="main-footer__top footer-menu">

            <?php get_template_part('templates-part/footer', 'menu-list' )?>

          </div>

          <?php get_template_part('templates-part/footer', 'menu-bottom' )?>

        </div>
      </div>
    </section>
  </footer>

  <?php get_template_part('templates-part/footer', 'modal' )?>

  <?php wp_footer(); ?>
  </body>

  </html>