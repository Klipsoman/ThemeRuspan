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
            <form class="request__form form" action="">
              <div class="form__item">
                <input class="form__input" type="text" placeholder="Имя*" />
              </div>
              <div class="form__item">
                <input class="form__input" type="text" placeholder="Телефон*" />
              </div>
              <div class="form__item">
                <input class="form__input" type="email" placeholder="E-mail*" />
              </div>
              <div class="form__item">
                <textarea class="form__textarea" cols="30" rows="10" placeholder="Сообщение"></textarea>
              </div>
              <button class="form__btn" type="submit">Оставить заявку</button>
            </form>
            <div class="request__policy">
              Нажимая на кнопку «Оставить заявку», вы соглашаетесь с
              <a class="request__policy-link" href="">Политикой конфиденциальности</a>
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