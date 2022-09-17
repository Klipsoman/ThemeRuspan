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
          <?php echo do_shortcode('[contact-form-7 id="335" title="Контактная форма (Главная модальное окно, главная футер, страницы сайта)"]');?>
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

<div class="modal-form-thanks" id="modal-form-thanks">
  <div class="modal-form-thanks__body">
    <div class="modal-form-thanks__content">
      <div class="modal-form-thanks__title">Спасибо за заявку!</div>
      <div class="modal-form-thanks__descr description-secondary">Наш менеджер свяжется с вами в ближайшее время
      </div>
    </div>
    <button class="modal-form-thanks__close modal-form__close">
      <span></span>
      <span></span>
    </button>
  </div>
</div>

<div class="modal-form-thanks" id="modal-form-thanks">
  <div class="modal-form-thanks__body">
    <div class="modal-form-thanks__content">
      <div class="modal-form-thanks__title">Спасибо за заявку!</div>
      <div class="modal-form-thanks__descr description-secondary">Наш менеджер свяжется с вами в ближайшее время
      </div>
    </div>
    <button class="modal-form-thanks__close modal-form__close">
      <span></span>
      <span></span>
    </button>
  </div>
</div>

<div class="modal-form-thanks" id="modal-form-thanks-subscribe">
  <div class="modal-form-thanks__body">
    <div class="modal-form-thanks__content">
      <div class="modal-form-thanks__title">Спасибо за подписку</div>
    </div>
    <button class="modal-form-thanks__close modal-form__close">
      <span></span>
      <span></span>
    </button>
  </div>
</div>