<?php 
/* 
  Template Name: Run system
*/
get_header(); 
?>

<main>
  <!-- Page inner -->
  <div class="page-inner">
    <div class="container">
      <h1 class="page-header">Прогонные системы</h1>
    </div>
  </div>

  <!-- Page photo description -->
  <div class="page-photo-description">
    <div class="container">
      <div class="page-photo-description__content">
        <div class="page-photo-description__left">
          <div class="page-photo-description__photo-box">
            <img class="page-photo-description__photo"
              src="<?= get_template_directory_uri()?>/assets/images/progonnye-sistemy1.jpg" alt="" />
          </div>
        </div>
        <div class="page-photo-description__right">
          <p class="description">
            <?= CFS()->get('runsystem_main-text') ?>
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Offers -->

  <div class="run-systems">
    <div class="container">
      <div class="offers">
        <!-- area -->
        <div class="area">
          <div class="area__left">
            <h2 class="area__header page-title">Область применения</h2>
            <div class="area__image-box">
              <img src="<?= get_template_directory_uri()?>/assets/images/run-sistem-area.jpg" alt="area"
                class="area__image" />
            </div>
            <div class="area__list-header description"><?= CFS()->get('runsystem_area-ul-name') ?>
            </div>
            <div class="area__list-box">
              <ul class="area__list description">
                <?php 
                  $area_list = CFS()->get('runsystem_area-loop');
                  
                  if(isset($area_list)){ 
                    foreach($area_list as $key => $value){
                      foreach($value as $val){ ?>
                  
                <li class="area__item description-secondary">
                  <?= $val; ?>
                </li>

                <?php } } } ?>                
              </ul>
            </div>
          </div>
          <div class="area__right">
            <div class="area__image-box">
              <img src="<?= get_template_directory_uri()?>/assets/images/run-sistem-area.jpg" alt="area"
                class="area__image" />
            </div>
            <ul class="area__list area__list-laptop">
                <?php 
                  $area_list_copy = CFS()->get('runsystem_area-loop');
                  if(isset($area_list_copy)){ 
                   $area_lenght = count($area_list);
                   $number_posts = $area_lenght - 3;

                    foreach(array_reverse($area_list_copy) as $key => $value){
                     if($number_posts === $area_lenght) break;
                     $number_posts++;                
                      foreach($value as $val){ ?>
                  
                <li class="area__item description-secondary">
                  <?= $val; ?>
                </li>

                <?php } } }?>   
            </ul>
          </div>
        </div>

        <!-- resist -->
        <div class="resist">
          <h2 class="resist__header page-title">
            Коррозийная<br class="resist__br" />
            стойкость
          </h2>	
          <div class="resist__descr-box">
            <p class="resist__descr description-secondary">
              <?= CFS()->get('runsystem_resist-text-left') ?>
            </p>
            <p class="resist__descr description-secondary">
              <?= CFS()->get('runsystem_resist-text-right') ?>
            </p>
          </div>
        </div>

        <!-- fireresist -->
        <div class="fireresist">
          <div class="fireresist__left">
            <h2 class="fireresist__header page-title">Огнестойкость</h2>
            <div class="fireresist__image-box">
              <img src="<?= get_template_directory_uri()?>/assets/images/run-sistem-fireresist.svg" alt=""
                class="fireresist__image" />
            </div>
            <p class="fireresist__descr description-secondary">
              <?= CFS()->get('runsystem_fireresist-text1') ?>
              <span class="fireresist__span-hide"><?= CFS()->get('runsystem_fireresist-text2') ?></span>
            </p>
          </div>
          <div class="fireresist__right">
            <div class="fireresist__image-box">
              <img src="<?= get_template_directory_uri()?>/assets/images/run-sistem-fireresist.svg" alt=""
                class="fireresist__image" />
            </div>
            <p class="fireresist__descr fireresist__descr-laptop description-secondary">
              <?= CFS()->get('runsystem_fireresist-text2') ?>
            </p>
          </div>
        </div>

        <!-- economy -->
        <div class="economy">
          <h2 class="economy__header page-title">Экономичность</h2>
          <div class="economy__descr-box">
            <p class="economy__descr description-secondary">
             <?= CFS()->get('runsystem_economy-text-left') ?>
            </p>
            <p class="economy__descr description-secondary">
             <?= CFS()->get('runsystem_economy-text-right') ?>
            </p>
          </div>
        </div>

        <!-- individual -->
        <div class="individual">
          <div class="individual__left">
            <div class="individual__image-box">
              <img src="<?= get_template_directory_uri()?>/assets/images/run-sistem-individual.jpg" alt=""
                class="individual__image" />
            </div>
          </div>
          <div class="individual__right">
            <h2 class="individual__header page-title">Индивидуальные здания на основе Frame&nbsp;Pro</h2>
            <div class="individual__image-box">
              <img src="<?= get_template_directory_uri()?>/assets/images/run-sistem-individual.jpg" alt=""
                class="individual__image" />
            </div>
            <p class="individual__descr description-secondary">
              <?= CFS()->get('runsystem_individual-text') ?>
            </p>
            <ul class="individual__list description-secondary">
              <?php 
                $individual_list = CFS()->get('runsystem_individual-loop');

                if(isset($individual_list)){ 
                  foreach($individual_list as $key => $value){
                    foreach($value as $val){ ?>
              
              <li class="individual__item">
                <?= $val;?>
              </li>

              <?php } } }?>  
            </ul>
          </div>
          <div class="individual__bottom">
            <div class="individual__bottom-left">
              <p class="individual__descr description-secondary">
                Здания выполненные по аналогичной схеме что и FRAME PRO, но имеющие большие геометрические размеры,
                увеличенные климатические нагрузки, полезные нагрузки, нагрузки от кранов опорного типа, а также
                учитывающие установку антресоли. Более высокие параметры здания достигается за счет введение
                конструктивных решений которые отсутствуют в серийном варианте:
              </p>
            </div>
            <div class="individual__bottom-right">
              <ul class="individual__list description-secondary">
                <?php 
                    $individual_list_copy = CFS()->get('runsystem_individual-loop');

                    if(isset($individual_list_copy)){ 
                      foreach($individual_list_copy as $key => $value){
                        foreach($value as $val){ ?>
       
                <li class="individual__item">
                   <?= $val;?>
                </li>

                <?php } } }?>  
              </ul>
            </div>
          </div>
        </div>

        <!-- roofs -->
        <div class="roofs">
          <div class="roofs__left">
            <div class="roofs__image-box">
              <img src="<?= get_template_directory_uri()?>/./assets/images/run-sistem-roof1.jpg" alt=""
                class="roofs__image" />
            </div>
            <h2 class="roofs__title description-secondary">Мягкая кровля</h2>
            <ul class="roofs__list description-secondary">
              <?= CFS()->get('runsystem_soft-ul-text') ?>
              <?php 
                $soft_list = CFS()->get('runsystem_soft-loop');

                if(isset($soft_list)){      
                foreach($soft_list as $key => $value){
                  foreach($value as $val){ ?>
                      
                <li class="roofs__item">
                  <?= $val; ?>
                </li>

              <?php } } }?> 
            </ul>
          </div>
          <div class="roofs__right">
            <div class="roofs__image-box">
              <img src="<?= get_template_directory_uri()?>/./assets/images/run-sistem-roof2.jpg" alt=""
                class="roofs__image" />
            </div>
            <h2 class="roofs__title description-secondary">X-DEK</h2>
            <ul class="roofs__list description-secondary">
              <?= CFS()->get('runsystem_xdek-ul-text') ?>
              <?php 
                $xdek_list = CFS()->get('runsystem_xdek-loop');

                if(isset($xdek_list)){
                  foreach($xdek_list as $key => $value){
                    foreach($value as $val){ ?>
                      <li class="roofs__item"><?= $val;?></li>
                   <?php }
                  ?>
              <?php } } ?> 
            </ul>
          </div>
        </div>
      </div>

      <div class="technical-info"></div>

      <div class="slider">
        <h2 class="slider__header page-title">Выполненные проекты</h2>
        <!-- Slider main container -->
        <div class="swiper" id="run-system__swiper">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <?php     
     
            $query_arr = [ 
              'post_type'     => 'projects',
              'posts_per_page'   => 12
            ];

            $query_projects = new WP_Query( $query_arr );
              if ($query_projects->have_posts()) {

              while( $query_projects->have_posts() ) {
                $query_projects->the_post();
                $id = get_the_ID();
            ?>

            <div class="swiper-slide">
              <a href="<?php the_permalink(); ?>">
                <div class="swiper__image-block">
                  <?php 
                  if (has_post_thumbnail()) {
                    the_post_thumbnail();
                  } else {
                    ?>
                  <img class="slider-img" src="https://www.pinecliffs.com/static/images/cms/default_image.png" alt="" />
                  <?php } ?>
                </div>
                <div class="projects__info swiper-slide__info">
                  <div class="swiper-slide__item">
                    Клиент
                    <div class="swiper-slide__title">Х5 Group</div>
                  </div>
                  <div class="swiper-slide__item">
                    Проект
                    <div class="swiper-slide__title">Распределительный центр «Пятерочка»</div>
                  </div>
                </div>
              </a>
            </div>

            <?php } } 
              wp_reset_postdata();
            ?>

          </div>
        </div>
        <!-- end run-system slider -->
        <div class="projects__keys">
          <div class="projects__arrows-btns">
            <div class="custom-arrow swiper-button-prev">
              <span class="custom-arrow__line custom-arrow__midline"></span>
              <span class="custom-arrow__line custom-arrow__upline-prev"></span>
              <span class="custom-arrow__line custom-arrow__downline-prev"></span>
            </div>
            <div class="custom-arrow swiper-button-next">
              <span class="custom-arrow__line custom-arrow__midline"></span>
              <span class="custom-arrow__line custom-arrow__upline-next"></span>
              <span class="custom-arrow__line custom-arrow__downline-next"></span>
            </div>
          </div>
          <div class="projects__more">
            <a href="<?php the_permalink(266)?>" class="link link-arrow">Все проекты</a>
          </div>
        </div>
      </div>
      
    </div>
  </div>

</main>
<?php get_footer();?>