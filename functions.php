<?php   
  add_filter( 'show_admin_bar', '__return_false' );
  add_action( 'wp_enqueue_scripts', 'ruspan_add_styles_and_sctipts' );
  add_action( 'after_setup_theme', 'ruspan_add_logo' );
  add_action( 'after_setup_theme', 'ruspan_add_menus' );
  add_action( 'after_setup_theme', 'ruspan_add_thumbnails' );
  add_action( 'pre_get_posts', 'ruspan_search_filter' );
  add_action('init', 'ruspan_my_pagination_rewrite');
  add_action('init', 'ruspan_add_post_type_and_taxonomy');
  
  add_theme_support( 'html5', ['search-form'] );
 
  function ruspan_my_pagination_rewrite() {
    add_rewrite_rule('blog/page/?([0-9]{1,})/?$', 'index.php?category_name=blog&paged=$matches[1]', 'top');
  }
 
  function ruspan_add_styles_and_sctipts() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'index', get_template_directory_uri() .'/assets/js/index.js', [], null, true );
    wp_enqueue_script( 'custom', get_template_directory_uri() .'/assets/js/custom.js', [], null, false );
  }

  function ruspan_add_logo(){
    add_theme_support( 'custom-logo', [
      'height'      => 40,
      'width'       => 165,
      'flex-width'  => false,
      'flex-height' => false,
      'header-text' => 'ruspan',
      'unlink-homepage-logo' => false, // WP 5.5
    ]);
  }

  function ruspan_add_menus(){
    register_nav_menu( 'header', 'Верхнее меню' );
    register_nav_menu( 'footer', 'Нижнее меню' );
  }

  function ruspan_add_thumbnails(){
    add_theme_support( 'post-thumbnails' );
  }

  function ruspan_search_filter($query) {
    if ( !is_admin() && $query->is_main_query() ) {
    // if ( !is_admin() ) {
      if ($query->is_search) {
        $posts_per_page = $query->posts_per_page;
        $query->set('paged', ( get_query_var('paged') ) ? get_query_var('paged') : 1 );
        $query->set('posts_per_page', $posts_per_page);
      }
    }
  }

  function ruspan_add_post_type_and_taxonomy() {
    register_taxonomy( 'docss', 'documents', [
      'label'                 => '', // определяется параметром $labels->name
      'labels'                => [
        'name'              => 'Добавить тип документа',
        'singular_name'     => 'Документ',
        'search_items'      => 'Поиск Документов и сертификатов',
        'all_items'         => 'Все документы и сертификаты',
        'view_item '        => 'Просмотр',
        'parent_item'       => 'Parent Genre',
        'parent_item_colon' => 'Parent Genre:',
        'edit_item'         => 'Редактировать',
        'update_item'       => 'Обновить',
        'add_new_item'      => 'Добавить новый тип',
        'new_item_name'     => 'Введите наименование',
        'menu_name'         => 'Добавить тип документа',
        'back_to_items'     => '← Назад',
      ],
      'description'           => '', // описание таксономии
      'public'                => true,
      // 'publicly_queryable'    => null, // равен аргументу public
      // 'show_in_nav_menus'     => true, // равен аргументу public
      // 'show_ui'               => true, // равен аргументу public
      // 'show_in_menu'          => true, // равен аргументу show_ui
      // 'show_tagcloud'         => true, // равен аргументу show_ui
      // 'show_in_quick_edit'    => null, // равен аргументу show_ui
      'hierarchical'          => false,
      'rewrite'               => true,
      //'query_var'             => $taxonomy, // название параметра запроса
      'capabilities'          => array(),
      'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
      'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
      'show_in_rest'          => null, // добавить в REST API
      'rest_base'             => null, // $taxonomy
      // '_builtin'              => false,
      //'update_count_callback' => '_update_post_term_count',
    ] );

    register_post_type( 'documents', [
      'label'  => null,
      'labels' => [
        'name'               => 'Документ', // основное название для типа записи
        'singular_name'      => 'Документ', // название для одной записи этого типа
        'add_new'            => 'Добавить документ', // для добавления новой записи
        'add_new_item'       => 'Добавление Документа', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item'          => 'Редактирование Документа', // для редактирования типа записи
        'new_item'           => 'Новое Документ', // текст новой записи
        'view_item'          => 'Смотреть Документ', // для просмотра записи этого типа.
        'search_items'       => 'Искать Документ', // для поиска по этим типам записи
        'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
        'parent_item_colon'  => '', // для родителей (у древовидных типов)
        'menu_name'          => 'Документы и сертификаты', // название меню
      ],
      'description'         => '',
      'public'              => true,
      // 'publicly_queryable'  => null, // зависит от public
      // 'exclude_from_search' => null, // зависит от public
      // 'show_ui'             => null, // зависит от public
      // 'show_in_nav_menus'   => null, // зависит от public
      'show_in_menu'        => true, // показывать ли в меню адмнки
      // 'show_in_admin_bar'   => null, // зависит от show_in_menu
      'show_in_rest'        => null, // добавить в REST API. C WP 4.7
      'rest_base'           => null, // $post_type. C WP 4.7
      'menu_position'       => null,
      'menu_icon'           => null,
      //'capability_type'   => 'post',
      //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
      //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
      'hierarchical'        => false,
      'supports'            => [ 'title', 'editor' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
      'taxonomies'          => [],
      'has_archive'         => false,
      'rewrite'             => true,
      'query_var'           => true,
    ] );
  }

?>