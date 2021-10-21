<?php
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
