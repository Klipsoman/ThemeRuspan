<?php
$post = $wp_query->post;
if ( in_category( 'news' ) ) { //слаг категории (для стандартных типов вп)
    include( TEMPLATEPATH.'/templates/single-news.php' );
} 
if ( is_singular( 'panels' ) ) { //слаг типа поста
    include( TEMPLATEPATH.'/templates/single-panels.php' );
} 
if ( is_singular( 'projects' ) ) { //слаг типа поста
    include( TEMPLATEPATH.'/templates/single-projects.php' );
} 
if ( is_singular( 'documents' ) ) { //слаг типа поста
    include( TEMPLATEPATH.'/templates/single-documents.php' );
} 
?>