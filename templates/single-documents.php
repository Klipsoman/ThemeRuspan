<?php 
  get_header();
?>

<div class="page-inner">
  <div class="container">
    <h1 class="page-header"><?php the_title(); ?></h1>
  </div>
</div>

<div style='margin-bottom: 100px;'>
  <div class="catalog">
    <div class="container">
      <div class="catalog__body">
        <div class="catalog__link-box">
          <a href="<?= CFS()->get('doc_upload');?>" class="catalog__link" target="blank"><?php the_title();?></a>
        </div>
        <div class="catalog__type">
          <?php 
            $slag = wp_get_post_terms( get_the_ID(), 'documents_tax');

            if (!empty($slag))  {
              for($i = 0; $i < count($slag); $i++){
                echo $slag[$i]->name;
              }
            }
          ?>
        </div>
        <div class="catalog__download-box">
          <a href="<?= CFS()->get('doc_upload');?>" class="catalog__download-link" download>Скачать</a>
        </div>
      </div>
    </div>
  </div>
</div>
<?php 
get_footer();
?>