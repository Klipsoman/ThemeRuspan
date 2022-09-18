<?php 
  get_header();
?>
<main>
  <!-- Page Inner p-->
  <div class="page-inner">
    <div class="container">
      <h1 class="page-header"><?php the_title(); ?></h1>
    </div>
  </div>

  <div class="page-template">
    <div class="container">
      <?php the_content(); ?>
    </div>
  </div>

</main>
<?php get_footer();?>