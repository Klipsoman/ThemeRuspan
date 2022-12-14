<?php 
  get_header();
?>

<div class="page404">

  <!-- Error 404 banner -->
  <div class="error404">
    <div class="container">
      <div class="error404__content">
        <h1 class="error404__header page-header">Ошибка 404</h1>
        <p class="error404__message description">Страница, которую вы запрашиваете, не существует. Возможно она была
          удалена или вы набрали неверный адрес.</p>
        <div class="error404__buttons">
          <a class="error404__btn btn btn-gold" href="<?= get_home_url()?>">На главную</a>
          <button class="error404__btn btn btn-grey">Задать вопрос </button>
        </div>
      </div>
    </div>
  </div>

</div>

<?php get_footer();?>