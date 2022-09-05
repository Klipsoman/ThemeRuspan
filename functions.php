<?php   
  add_filter( 'show_admin_bar', '__return_false' );
  add_action( 'wp_enqueue_scripts', 'add_styles_and_sctipts' );
  add_action( 'after_setup_theme', 'add_logo' );
  add_action( 'after_setup_theme', 'add_menus' );
  add_action( 'after_setup_theme', 'add_thumbnails' );
  add_action( 'pre_get_posts', 'search_filter' );
  add_theme_support( 'html5', ['search-form'] );
  add_action('init', 'my_pagination_rewrite');
 
  function my_pagination_rewrite() {
    add_rewrite_rule('blog/page/?([0-9]{1,})/?$', 'index.php?category_name=blog&paged=$matches[1]', 'top');
  }
 
  function add_styles_and_sctipts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'index', get_template_directory_uri() .'/assets/js/index.js', [], null, true );
    wp_enqueue_script( 'custom', get_template_directory_uri() .'/assets/js/custom.js', [], null, false );
  }

  function add_logo(){
    add_theme_support( 'custom-logo', [
      'height'      => 40,
      'width'       => 165,
      'flex-width'  => false,
      'flex-height' => false,
      'header-text' => 'ruspan',
      'unlink-homepage-logo' => false, // WP 5.5
    ]);
  }

  function add_menus(){
    register_nav_menu( 'header', 'Верхнее меню' );
    register_nav_menu( 'footer', 'Нижнее меню' );
  }

  function add_thumbnails(){
    add_theme_support( 'post-thumbnails' );
  }

  function search_filter($query) {
    if ( !is_admin() && $query->is_main_query() ) {
    // if ( !is_admin() ) {
      if ($query->is_search) {
        $posts_per_page = $query->posts_per_page;
        $query->set('paged', ( get_query_var('paged') ) ? get_query_var('paged') : 1 );
        $query->set('posts_per_page', $posts_per_page);
      }
    }
  }

?>