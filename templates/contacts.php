<?php 
 /*
 Template Name: Contacts
 */
  get_header();
?>
<main>
  <!-- Page Inner -->
  <div class="page-inner">
    <div class="container">
      <h1 class="page-header">Контакты</h1>
    </div>
  </div>

  <!-- contacts page -->
  <div class="contacts-page">

    <div class="location location--blue" id="office">
      <div class="container">
        <div class="location__content">
          <div class="location__left">
            <h3 class="location__header section-header">Офис</h3>
          </div>
          <div class="location__center">
            <div class="location__tel-box">
              <a class="location__tel telephone__desktop description">+7 800 250-07-65</a>
              <a class="location__tel telephone__mobile description" href="tel:+78002500765">+7 800 250-07-65</a>
            </div>
            <div class="location__tel-box">
              <a class="location__tel telephone__desktop description">+7 812 602-29-40</a>
              <a class="location__tel telephone__mobile description" href="tel:+78126022940">+7 812 602-29-40</a>
            </div>
            <div class="location__mail-box">
              <a class="location__mail description" href="mailto:info@ruspan.su">info@ruspan.su</a>
            </div>
            <address class="location__address description-secondary">
              196158, Россия, Санкт-Петербург, Пулковское шоссе, дом 28, литера А, офис 804
            </address>
            <div class="location__social-box">
              <a class="location__social link-bg-blue link-bg-blue--arrow link-fz-standart" href="https://vk.com/ruspan_russia">Вконтакте</a>
            </div>
          </div>
          <div class="location__right">
            <div class="location__map">
              <!--script created automatically-->
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="factory" id="west-factory">
      <div class="container">
        <div class="factory__content">
          <div class="factory__left">
            <h3 class="factory__header description">Завод на Северо-Западе</h3>
          </div>

          <div class="factory__center">
            <address class="factory__address description-secondary">188302, Ленинградская обл., д.&nbsp;Малые Колпаны
              Гатчинского&nbsp;района, ул.&nbsp;Кооперативная, д. 1а</address>
            <p class="factory__coords description-secondary">Координаты: 59.543846, 30.059669</p>
          </div>

          <div class="factory__right">
            <div class="factory__map">
              <!--script created automatically-->
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="factory" id="east-factory">
      <div class="container">
        <div class="factory__content">
          <div class="factory__left">
            <h3 class="factory__header description">Завод на Юге</h3>
          </div>

          <div class="factory__center">
            <address class="factory__address description-secondary"> 357107, Невинномысск, ул.&nbsp;Низяева, д. 1В
            </address>
            <p class="factory__coords description-secondary">Координаты: 44.673693, 41.937103</p>
          </div>

          <div class="factory__right">
            <div class="factory__map">
              <!--script created automatically-->
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="managers">
      <div class="container">
        <div class="managers__header description">Наши менеджеры</div>

        <!-- table -->
        <?php
      $tables = CFS()->get('table');

      for($i = 0; $i < count($tables); $i++) {

        $table_name = $tables[$i]['table_name'];
        ?>

        <div class="managers__table">

          <div class="managers__table-title description-secondary description-secondary--black">
            <!-- table name -->
            <?php echo $table_name; ?>
          </div>

          <?php 
            $areas = $tables[$i]['table_area'];

            for($j = 0; $j < count($areas); $j++) {
              
              $area_name = $areas[$j]['table_area_name'];
              
              ?>
          <div class="managers__row">

            <div class="managers__left">
              <div class="managers__location description-secondary"><?=  $area_name; ?></div>
            </div>

            <div class="managers__right">

              <?php 
              $empls = $areas[$j]['table_empls'];

              for($k = 0; $k < count($empls); $k++) {

                $empl_name = $empls[$k]['empl_name'];
                $empl_tel = $empls[$k]['empl_tel'];
                $empl_mail = $empls[$k]['empl_email'];
                
                ?>

              <div class="managers__item">
                <div class="managers__name-box">
                  <span
                    class="managers__name description-secondary description-secondary--black"><?= $empl_name;?></span>
                </div>
                <div class="managers__tel-box">
                  <span
                    class="managers__name description-secondary description-secondary--black"><?= $empl_tel;?></span>
                  <a class="managers__link description-secondary description-secondary--black"
                    href="tel:+<?= preg_replace('/\D/', '', $empl_tel);?>"><?= $empl_tel;?></a>
                </div>
                <div class="managers__mail-box">
                  <a href="mailto:<?= $empl_mail;?>" class="managers__mail description-secondary"><?= $empl_mail;?></a>
                </div>
              </div>

              <?php } ?>
            </div>

          </div>
          <?php } ?>
        </div>
        <?php } ?>



      </div>
    </div>

  </div>
</main>
<?php get_footer(); ?>