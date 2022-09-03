 <?php 
  if (is_front_page()){
    return get_template_part('templates-part/footer', 'home');
  } 
  if (is_404() || is_search() || is_page('privacy')) {
    return get_template_part('templates-part/footer', 'menu');
  }
  if (is_page('contacts')) {
    return get_template_part('templates-part/footer', 'request');
  }
  if (is_page('career') || is_page('collaboration')) {
    return get_template_part('templates-part/footer', 'contact');
  }
  get_template_part('templates-part/footer', 'pages');
?>