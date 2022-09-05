<?php
$post = $wp_query->post;
if ( is_category( 'docs_and_sert' ) ) { //слаг категории
  include( TEMPLATEPATH.'/templates/category-docs.php' );
} 
if ( is_category( 'projects' ) ) { //слаг категории
  include( TEMPLATEPATH.'/templates/category-projects.php' );
} 

?>