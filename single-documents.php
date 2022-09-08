<?php 
get_header();
?>
<div style='margin: 100px 0;'>
  <div class="container">
    <div class="catalog">
      <div class="container">
        <div class="catalog__body">
          <div class="catalog__link-box">
            <a href="" class="catalog__link" download><?php the_title();?></a>
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
            <a href="<?= CFS()->get('doc_upload');?>" class="catalog__download-link" download>Скачать
              <?php the_title();?></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php 
get_footer();
?>