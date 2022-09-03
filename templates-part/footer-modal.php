<div class="modal-form" id="modal-form">
  <div class="modal-form__body">
    <div class="request">
      <div class="container">
        <div class="request__content">
          <div class="request__left">
            <h2 class="request__header section-header">Оставьте заявку</h2>
            <p class="request__descr">
              Наши менеджеры ответят на ваши вопросы, рассчитают стоимость услуг и подготовят индивидуальное
              коммерческое предложение
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
              <a class="request__policy-link" href="
              <?php 
              // получение ссылки на страницу с политикой конфиденциальности
              echo get_permalink(32); 
              ?>">
              Политикой конфиденциальности</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <button class="modal-form__close">
      <span></span>
      <span></span>
    </button>
  </div>
</div>