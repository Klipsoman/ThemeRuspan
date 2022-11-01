<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    <?php
    if (is_404()) { 
     echo 'Ошибка 404';
    } else {
      the_title();
    }
  ?>
  </title>

  <?php wp_head(); ?>
</head>

<body>
  <!-- HEADER -->
  <header class="header" id="header">
    <div class="container">
      <div class="header__content">

        <?= get_custom_logo();?>

        <nav class="header__navigation">
          <?php 
            wp_nav_menu([
              'theme_location'  => 'header',
              'container'       => '',
              'container_class' => '',
              'container_id'    => '',
              'menu_class'      => '',
              'menu_id'         => '',
              'echo'            => true,
              'before'          => '',
              'after'           => '',
              'link_before'     => '',
              'link_after'      => '',
              'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth'           => 0,
              'walker'          => '',
            ])
          ?>

        </nav>
        <div class="header__additional-box">
          <div class="header__tel telephone">
            <a class="telephone__desktop">+7 800 250-07-65</a>
            <a class="telephone__mobile" href="tel:+78002500765">+7 800 250-07-65</a>
          </div>
          <div class="header__additional">
            <a class="header__email" href="mailto:info@ruspan.su">info@ruspan.su</a>
            <!-- <a class="header__locale" href="#">EN</a> -->
            <a class="header__search" href="<?php echo get_search_link() ?>">
              <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="7.5" cy="7.5" r="4.8033" transform="rotate(-45 7.5 7.5)" stroke="#9F9F9F" />
                <line x1="10.625" y1="10.6464" x2="14.7917" y2="14.8131" stroke="#9F9F9F" />
              </svg>
            </a>
          </div>
        </div>
        <div class="header__burger" id="burger-btn">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
  </header>