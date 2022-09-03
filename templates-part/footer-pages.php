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

    <!-- Contacts -->

    <div class="contacts">
      <div class="container">
        <div class="contacts__content">
          <div class="contacts__left">
            <div class="contacts__header-block">
              <h2 class="contacts__header section-header">Контакты</h2>
            </div>
            <div class="contacts__telmail">
              <div class="contacts__tel">+7 800 250-07-65</div>
              <div class="contacts__tel">+7 800 250-07-65</div>
              <div class="contacts__mail"><a class="link" href="mailto:info@ruspan.su">info@ruspan.su</a></div>
            </div>
          </div>

          <div class="contacts__right">
            <div class="contacts__item">
              <div class="contacts__title">офис</div>
              <div class="contacts__descr">
                196158, Россия, Санкт-Петербург, Пулковское шоссе, дом 28, литера А, офис 1403
              </div>
            </div>

            <div class="contacts__item">
              <div class="contacts__title">Мы в соцсетях</div>
              <div class="contacts__descr">
                <a class="contacts__link link link-arrow" href="">Вконтакте</a>
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