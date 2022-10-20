<?php 
 /*
 Template Name: Collaboration
 */
  get_header();
?>
<main>
  <!-- Page Inner -->
  <div class="page-inner">
    <div class="container">
      <h1 class="page-header">Сотрудничество</h1>
    </div>
  </div>

  <!-- collaboration page -->
  <div class="collaboration-page">
    <!-- collaboration-inner -->
    <div class="collaboration">
      <div class="container">
        <div class="collaboration__content">
          <div class="collaboration__left">
            <p class="collaboration__descr description">
              <?= CFS()->get('collaboration_blue_left-text') ?>
            </p>
          </div>
          <div class="collaboration__right">
            <p class="collaboration__descr description-secondary">
              <?= CFS()->get('collaboration_blue_right-text') ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- information -->
    <div class="information">
      <div class="container">
        <div class="information__content">
          <div class="information__left">
            <p class="information__descr description-secondary">
              <?= CFS()->get('collaboration_img_text-up') ?>
            </p>
            <p class="information__descr description-secondary">
              <?= CFS()->get('collaboration_img_text-down') ?>
            </p>
          </div>
          <div class="information__right">
            <div class="information__image-box">
              <img src="<?= get_template_directory_uri()?>/./assets/images/collaboration.jpg" alt=""
                class="information__image" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- info-lists -->
    <div class="info-lists">
      <div class="container">
        <div class="info-lists__content">
          <div class="info-lists__left">
            <h3 class="info-lists__title description">
             <?= CFS()->get('collaboration_list-left-header') ?>
            </h3>
            <ul class="info-lists__list">
              <?php 
                $left_list = CFS()->get('collaboration_list-left-loop');
         
                for($i = 0; $i < count($left_list); $i++){
              ?>

              <li class="info-lists__item"><?= $left_list[$i]["collaboration_list-left-loop-li"]; ?></li>    

              <?php } ?>
            </ul>
          </div>
          <div class="info-lists__right">
            <h3 class="info-lists__title description">
              Сотрудничество с нами позволяет:
            </h3>
            <ul class="info-lists__list">
              <?php 
                $left_list = CFS()->get('collaboration_list-right-loop');
         
                for($i = 0; $i < count($left_list); $i++){
              ?>

              <li class="info-lists__item"><?= $left_list[$i]["collaboration_list-right-loop-li"]; ?></li>    
                        
              <?php } ?>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <!-- descriptions -->
    <div class="descriptions">
      <div class="container">
        <div class="descriptions__content">
          <div class="descriptions__left">
            <p class="descriptions__descr description">	
              <?= CFS()->get('collaboration_under_left_list_text') ?>
            </p>
          </div>
          <div class="descriptions__right">
            <p class="descriptions__descr description-secondary">
             <?= CFS()->get('collaboration_under_right_list_text-up') ?>
            </p>
            <p class="descriptions__descr description-secondary">
             <?= CFS()->get('collaboration_under_right_list_text-down') ?>
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- collaboration-form -->
    <div class="collaboration-form">
      <div class="container">
        <div class="collaboration-form__content request">
          <div class="request__content">
            <div class="request__left">
              <p class="request__descr description-secondary">
                Если по каким либо причинам, Вы не нашли на нашем сайте необходимую информацию, просим Вас связаться
                с нашим специалистом по работе с проектировщиками, который ответит на все ваши вопросы.
              </p>
            </div>
            <div class="request__right">
              <?php echo do_shortcode('[contact-form-7 id="373" title="Контактная форма (Сотрудничество)"]');?>
              <div class="request__policy">
                Нажимая на кнопку «Оставить заявку», вы соглашаетесь с
                <a class="request__policy-link" href="<?php the_permalink(32) ?>">Политикой конфиденциальности</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>
<?php get_footer();?>