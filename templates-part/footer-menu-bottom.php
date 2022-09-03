<div class="main-footer__bottom">
  <a class="main-footer__logo" href="">
    <img src="<?= get_template_directory_uri()?>/assets/images/footer-logo.svg" alt="footer-logo" />
  </a>
  <div class="main-footer__rights">
    <span>© Ruspan, 2022. Все права защищены.</span>
  </div>
  <div class="main-footer__privacy">
    <a class="main-footer__link link link-border" href="
    <?php 
    // получение ссылки на страницу с политикой конфиденциальности
    echo get_permalink(32); 
    ?>">Политика конфиденциальности и Cookies</a>
  </div>
  <div class="main-footer__development">
    <a class="main-footer__link link link-border" href="">Разработка сайта — <span
        class="main-footer__developer">агентство D-ROI</span></a>
  </div>
</div>