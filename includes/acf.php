<?php

if (function_exists('acf_add_options_page')) {
  acf_add_options_page([
    'page_title' => 'Параметры',
    'menu_title' => 'Параметры',
    'menu_slug' => 'acf-options',
    'capability' => 'edit_posts',
    'redirect' => false
  ]);
	// acf_add_options_page([
	// 	'page_title' 	=> 'Блоки содержимого',
	// 	'menu_title'	=> 'Блоки содержимого',
	// 	'menu_slug' 	=> 'acf-content-blocks',
	// 	'capability'	=> 'edit_posts',
	// 	'redirect'		=> false
	// ]);
}

function be_register_blocks() {
  if(!function_exists('acf_register_block')) return;
  
  acf_register_block([
      'name' => 'accordion',
      'title' => 'Аккордеон',
      'render_template' => 'blocks/accordion.php',
      'category' => 'formatting',
      'icon' => 'editor-ul',
      'mode' => 'edit'
  ]);
}
add_action('acf/init', 'be_register_blocks');
