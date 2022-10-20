<?php 
 /*
 Template Name: Design
 */
  get_header();
?>

<main>
  <!-- Page Inner -->
  <div class="page-inner">
    <div class="container">
      <h1 class="page-header">Проектирование, техническая поддержка, шеф&nbsp;-&nbsp;монтаж</h1>
    </div>
  </div>

  <!-- Page photo description -->
  <div class="page-photo-description">
    <div class="container">
      <div class="page-photo-description__content">
        <div class="page-photo-description__left">
          <div class="page-photo-description__photo-box">
            <img class="page-photo-description__photo" src="<?= get_template_directory_uri()?>/assets/images/man1.jpg;"
              alt="">
          </div>
        </div>
        <div class="page-photo-description__right">
          <p class="description"><?= CFS()->get('design_main-text') ?></p>
          <p class="description-secondary"><?= CFS()->get('design_sub-text') ?></p>
        </div>
      </div>
    </div>
  </div>
  <!-- Abouts -->
  <div class="abouts">
    <div class="container">
      <div class="abouts__content">
        <div class="abouts__item">
          <h3 class="abouts__title description"><?= CFS()->get('design_block1-header') ?></h3>
          <p class="abouts__descr description-secondary"><?= CFS()->get('design_block1-text') ?></p>
        </div>
        <div class="abouts__item">
          <h3 class="abouts__title description"><?= CFS()->get('design_block2-header') ?></h3>
          <p class="abouts__descr description-secondary"><?= CFS()->get('design_block2-text') ?></p>
        </div>
        <div class="abouts__item">
          <h3 class="abouts__title description"><?= CFS()->get('design_block3-header') ?></h3>
          <p class="abouts__descr description-secondary"><?= CFS()->get('design_block3-text') ?></p>
        </div>
      </div>
    </div>
  </div>

</main>
<?php get_footer();?>