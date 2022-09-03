<?php
$post = $wp_query->post;
if ( in_category( 'news' ) ) { //слаг категории
    include( TEMPLATEPATH.'/templates/single-news.php' );
} else {
    
}
?>