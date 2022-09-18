<?php
$post = $wp_query->post;
if ( in_category( 'news' ) ) { //слаг категории
    include( TEMPLATEPATH.'/templates/single-news.php' );
} 
if ( is_singular( 'panels' ) ) { //слаг категории
    include( TEMPLATEPATH.'/templates/single-panels.php' );
} 
if ( is_singular( 'projects' ) ) { //слаг категории
    include( TEMPLATEPATH.'/templates/single-projects.php' );
} 
?>