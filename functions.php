<?php
require_once(__DIR__ . '/includes/acf.php');
require_once(__DIR__ . '/includes/thumbnails.php');
require_once(__DIR__ . '/includes/seo.php');
require_once(__DIR__ . '/includes/custom-post-types.php');
require_once(__DIR__ . '/includes/ajax.php');

add_action('after_setup_theme', function() {
  register_nav_menus([
    'main' => 'Основное меню'
  ]);
});

add_post_type_support('page', 'excerpt');

function template_part ($atts, $content = null) {
  $tp_atts = shortcode_atts(['path' =>  null], $atts);
  ob_start();
  get_template_part($tp_atts['path']);
  $ret = ob_get_contents();
  ob_end_clean();
  return $ret;
}
add_shortcode('template_part', 'template_part');

add_filter('navigation_markup_template', 'navigation_template', 10, 2);
function navigation_template ($template, $class) {
  return '<nav class="%1$s" role="navigation"><div class="nav-links">%3$s</div></nav>';
}

function new_excerpt_length ($length){
  return 10;
}
add_filter('excerpt_length', 'new_excerpt_length');

function is_new_year()
{
  if (date('m') === '12' && date('d') >= '20') {
    return true;
  }
  if (date('m') === '01' && date('d') <= '10') {
    return true;
  }
  return false;
}
