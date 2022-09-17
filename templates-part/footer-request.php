  <!-- FOOTER -->
  <footer class="footer">
    <div class="request">
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
    </div>

    <div class="main-footer">
      <div class="container">
        <div class="main-footer__content">
          <div class="main-footer__top footer-menu">

            <?php get_template_part('templates-part/footer', 'menu-list' )?>

          </div>

          <?php get_template_part('templates-part/footer', 'menu-bottom' )?>

        </div>
      </div>
    </div>
  </footer>

  <?php get_template_part('templates-part/footer', 'modal' )?>

  <?php wp_footer(); ?>
  </body>

  </html>