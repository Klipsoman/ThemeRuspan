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
    // Тип записи и таксономия для документов
    register_taxonomy( 'documents_tax', 'documents', [
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
      'hierarchical'          => false,
      'rewrite'               => true,
      'capabilities'          => array(),
      'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
      'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
      'show_in_rest'          => null, // добавить в REST API
      'rest_base'             => null, // $taxonomy
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
      'show_in_menu'        => true, // показывать ли в меню адмнки
      'show_in_rest'        => null, // добавить в REST API. C WP 4.7
      'rest_base'           => null, // $post_type. C WP 4.7
      'menu_position'       => null,
      'menu_icon'           => 'dashicons-media-default',
      'hierarchical'        => false,
      'supports'            => [ 'title' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
      'taxonomies'          => ['projects_tax'],
      'has_archive'         => false,
      'rewrite'             => true,
      'query_var'           => true,
    ] );

    // Тип записи и таксономии для проекта
    register_taxonomy( 'projects_sectors_tax', 'projects', [
      'label'                 => '', // определяется параметром $labels->name
      'labels'                => [
        'name'              => 'Секторы рынка',
        'singular_name'     => 'Секторы рынка',
        'search_items'      => 'Поиск секторов',
        'all_items'         => 'Все секторы',
        'view_item '        => 'Просмотр',
        'parent_item'       => 'Родительские секторы',
        'parent_item_colon' => 'Родительские секторы:',
        'edit_item'         => 'Редактировать',
        'update_item'       => 'Обновить',
        'add_new_item'      => 'Добавить новый сектор',
        'new_item_name'     => 'Введите наименование',
        'menu_name'         => 'Секторы рынка',
        'back_to_items'     => '← Назад',
      ],
      'description'           => '', // описание таксономии
      'public'                => true,
      'hierarchical'          => false,
      'rewrite'               => true,
      'capabilities'          => array(),
      'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
      'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
      'show_in_rest'          => null, // добавить в REST API
      'rest_base'             => null, // $taxonomy
    ] );

    register_post_type( 'projects', [
      'label'  => null,
      'labels' => [
        'name'               => 'Проекты', // основное название для типа записи
        'singular_name'      => 'Проект', // название для одной записи этого типа
        'add_new'            => 'Добавить проект', // для добавления новой записи
        'add_new_item'       => 'Добавление проекта', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item'          => 'Редактирование проекта', // для редактирования типа записи
        'new_item'           => 'Новый проект', // текст новой записи
        'view_item'          => 'Просмотр проекта', // для просмотра записи этого типа.
        'search_items'       => 'Искать проект', // для поиска по этим типам записи
        'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
        'parent_item_colon'  => '', // для родителей (у древовидных типов)
        'menu_name'          => 'Проекты', // название меню
      ],
      'description'         => '',
      'public'              => true,
      'show_in_menu'        => true, // показывать ли в меню адмнки
      'show_in_rest'        => null, // добавить в REST API. C WP 4.7Также влияет на работу блочного редактора Gutenberg: true - редактор Gutenberg включен для этого типа записи, false - будет использоваться обычный редактор.
      'rest_base'           => null, // $post_type. C WP 4.7
      'menu_position'       => null,
      'menu_icon'           => 'dashicons-hammer',
      'hierarchical'        => false,
      'supports'            => [ 'title', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
      'taxonomies'          => ['projects_sectors_tax'],
      'has_archive'         => false,
      'rewrite'             => true,
      'query_var'           => true,
    ] );

    // Тип записи и таксономии для сендвич панелей
    register_taxonomy( 'panels_types', 'panels', [
      'label'                 => '', // определяется параметром $labels->name
      'labels'                => [
        'name'              => 'Типы',
        'singular_name'     => 'Тип',
        'search_items'      => 'Поиск по типу',
        'all_items'         => 'Все типы',
        'view_item '        => 'Просмотр',
        'parent_item'       => 'Родительские типы',
        'parent_item_colon' => 'Родительские типы:',
        'edit_item'         => 'Редактировать',
        'update_item'       => 'Обновить',
        'add_new_item'      => 'Добавить новый тип',
        'new_item_name'     => 'Введите наименование',
        'menu_name'         => 'Типы панелей',
        'back_to_items'     => '← Назад',
      ],
      'description'           => '',
      'public'                => true,
      'hierarchical'          => false,
      'rewrite'               => true,
      'capabilities'          => array(),
      'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
      'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
      'show_in_rest'          => null, // добавить в REST API
      'rest_base'             => null, // $taxonomy
    ] );

    register_post_type( 'panels', [
      'label'  => null,
      'labels' => [
        'name'               => 'Сендвич-панели', // основное название для типа записи
        'singular_name'      => 'Сендвич-панель', // название для одной записи этого типа
        'add_new'            => 'Добавить Сендвич-панель', // для добавления новой записи
        'add_new_item'       => 'Добавление Сендвич-панели', // заголовка у вновь создаваемой записи в админ-панели.
        'edit_item'          => 'Редактирование Сендвич-панели', // для редактирования типа записи
        'new_item'           => 'Новая Сендвич-панель', // текст новой записи
        'view_item'          => 'Просмотр Сендвич-панели', // для просмотра записи этого типа.
        'search_items'       => 'Искать Сендвич-панель', // для поиска по этим типам записи
        'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
        'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
        'parent_item_colon'  => '', // для родителей (у древовидных типов)
        'menu_name'          => 'Сендвич-панели', // название меню
      ],
      'description'         => '',
      'public'              => true,
      'show_in_menu'        => true, // показывать ли в меню адмнки
      'show_in_rest'        => null, // добавить в REST API. C WP 4.7Также влияет на работу блочного редактора Gutenberg: true - редактор Gutenberg включен для этого типа записи, false - будет использоваться обычный редактор.
      'rest_base'           => null, // $post_type. C WP 4.7
      'menu_position'       => null,
      'menu_icon'           => 'dashicons-admin-multisite',
      'hierarchical'        => false,
      'supports'            => [ 'title', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
      'taxonomies'          => ['panels_types'],
      'has_archive'         => false,
      'rewrite'             => true,
      'query_var'           => true,
    ] );
  }

?>