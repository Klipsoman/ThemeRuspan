<?php 
 /*
 Template Name: Career
 */
  get_header();
?>

<main>
  <!-- Page Inner -->
  <div class="page-inner">
    <div class="container">
      <h1 class="page-header">Карьера</h1>
    </div>
  </div>

  <!-- career -->
  <div class="career-page">

    <div class="career-inner">
      <div class="container">
        <div class="career-inner__content">
          <div class="career-inner__left">	
            <p class="career-inner__descr description"><?= CFS()->get('career_blue-text-left') ?></p>
          </div>
          <div class="career-inner__right">
            <p class="career-inner__descr description-secondary"><?= CFS()->get('career_blue-text-right') ?></p>
          </div>
        </div>
      </div>
    </div>

    <!-- stats -->
    <div class="stats">
      <div class="container">
        <div class="stats__grid">
          <div class="stats__area">
            <div class="stats__number"><?= CFS()->get('career_values1') ?></div>
            <div class="stats__descr description-secondary">
             <?= CFS()->get('career_values1-text') ?>
            </div>
          </div>
          <div class="stats__area">
            <div class="stats__number"><?= CFS()->get('career_values2') ?></div>
            <div class="stats__descr description-secondary">
            <?= CFS()->get('career_values2-text') ?>
            </div>
          </div>
          <div class="stats__area">
            <div class="stats__number"><?= CFS()->get('career_values3') ?></div>
            <div class="stats__descr description-secondary"><?= CFS()->get('career_values3-text') ?></div>
          </div>
          <div class="stats__area">
            <div class="stats__number"><?= CFS()->get('career_values4') ?></div>
            <div class="stats__descr description-secondary">
             <?= CFS()->get('career_values4-text') ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- career-feature -->
    <div class="career-feature">
      <div class="container">
        <div class="career-feature__content">
          <h2 class="career-feature__title page-title"><?= CFS()->get('career_widget-header') ?></h2>
          <div class="career-feature__grid">
            <div class="career-feature__item">
              <p class="career-feature__descr description-secondary"><?= CFS()->get('career_text-block1') ?></p>
            </div>
            <div class="career-feature__item">
              <p class="career-feature__descr description-secondary"><?= CFS()->get('career_text-block2') ?></p>
            </div>
            <div class="career-feature__item">
              <p class="career-feature__descr description-secondary"><?= CFS()->get('career_text-block3') ?></p>
              <div class="career-feature__hh">
                <script class="hh-script" src="https://api.hh.ru/widgets/vacancies/employer?employer_id=246062&locale=RU&links_color=1560b2&border_color=1560b2"></script>
              </div>
            </div>
            <div class="career-feature__item">
              <p class="career-feature__descr description-secondary"><?= CFS()->get('career_text-block4') ?> <a class="career-feature__mail"
                  href="mailto:hr@ruspan.su">hr@ruspan.su.</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</main>
<?php get_footer();?>