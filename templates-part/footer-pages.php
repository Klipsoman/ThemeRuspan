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

    <!-- Contacts -->

    <div class="contacts">
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
              <div class="contacts__tel">
                <a class="telephone__desktop description">+7 865 544-56-02</a>
                <a class="telephone__mobile description" href="tel:+78655445602">+7 865 544-56-02</a>
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