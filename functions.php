<?php
require_once(__DIR__ . '/includes/acf.php');
require_once(__DIR__ . '/includes/thumbnails.php');
require_once(__DIR__ . '/includes/seo.php');
require_once(__DIR__ . '/includes/custom-post-types.php');
require_once(__DIR__ . '/includes/shortcodes.php');

add_action('after_setup_theme', function() {
  register_nav_menus([
    'main' => 'Основное меню',
    // 'sitemap' => 'Карта сайта'
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

function add_cors_http_header () {
    header("Access-Control-Allow-Origin: *");
}
add_action('init', 'add_cors_http_header');

if (wp_doing_ajax()) {
  add_action('wp_ajax_project', 'ajax_project');
  add_action('wp_ajax_nopriv_project', 'ajax_project');
  function ajax_project () {
    check_ajax_referer('cds-wp-theme-nonce', 'nonce');

    global $post;

    $id = intval($_POST['id']);
    $post = get_post($id);
    
    // $thumb = [];
    // $thumb_id = get_post_thumbnail_id($id);
    // $args = [
    //   'post_type' => 'attachment',
    //   'include' => $thumb_id
    // ];
    // $thumbs = get_posts($args);
    // if ($thumbs) {
    //     $thumb['title'] = $thumbs[0]->post_title;
    //     $thumb['description'] = $thumbs[0]->post_content;
    //     $thumb['caption'] = $thumbs[0]->post_excerpt;
    //     $thumb['alt'] = get_post_meta($thumb_id, '_wp_attachment_image_alt', true);
    //     $thumb['sizes'] = [
    //       'full' => wp_get_attachment_image_src($thumb_id, 'full', false)
    //     ];
    //     foreach (get_intermediate_image_sizes() as $size) {
    //       $thumb['sizes'][$size] = wp_get_attachment_image_src($thumb_id, $size, false);
    //     }
    // }

    echo json_encode([
      'post' => $post,
      'gallery' => get_field('gallery', $id),
      'thumbnail' => get_the_post_thumbnail_url($id, 'full'),
      'previous' => get_previous_post(),
      'next' => get_next_post()
    ]);

    wp_die();
  }
}

add_action('wp_enqueue_scripts', 'theme_scripts');
function theme_scripts () {
	wp_register_script('cds-wp-theme', get_template_directory_uri() . '/design/dist/js/app.js');
	wp_localize_script('cds-wp-theme', 'CdsWpThemeAjax', [
    'ajax_url' => admin_url('admin-ajax.php'),
    'nonce' => wp_create_nonce('cds-wp-theme-nonce'),
    'is_user_logged_in' => is_user_logged_in()
  ]);
}
