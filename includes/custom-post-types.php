<?php
function law_post_type() {
    $labels = [
        'name' => 'Законы',
        'singular_name' => 'Закон',
        'menu_name' => 'Законы',
        'parent_item_colon' => 'Родительский',
        'all_items' => 'Все',
        'view_item' => 'Смотреть',
        'add_new_item' => 'Добавить',
        'add_new' => 'Добавить',
        'edit_item' => 'Редактировать',
        'update_item' => 'Обновить',
        'search_items' => 'Искать',
        'not_found' => 'Не найдено',
        'not_found_in_trash' => 'Корзина пуста',
    ];
    
    $args = [
        'label' => 'Законы',
        'description' => 'Законы',
        'labels' => $labels,
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 27,
        'menu_icon' => 'dashicons-hourglass',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
    ];
    
    register_post_type('law', $args);

}
add_action('init', 'law_post_type', 0);

function project_post_type() {
    $labels = [
        'name' => 'Проекты',
        'singular_name' => 'Проект',
        'menu_name' => 'Проекты',
        'parent_item_colon' => 'Родительский',
        'all_items' => 'Все',
        'view_item' => 'Смотреть',
        'add_new_item' => 'Добавить',
        'add_new' => 'Добавить',
        'edit_item' => 'Редактировать',
        'update_item' => 'Обновить',
        'search_items' => 'Искать',
        'not_found' => 'Не найдено',
        'not_found_in_trash' => 'Корзина пуста',
    ];
    
    $args = [
        'label' => 'Проекты',
        'description' => 'Проекты',
        'labels' => $labels,
        'supports' => ['title', 'editor', 'excerpt', 'thumbnail'],
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_nav_menus' => true,
        'show_in_admin_bar' => true,
        'menu_position' => 21,
        'menu_icon' => 'dashicons-format-gallery',
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capability_type' => 'post',
        'show_in_rest' => true,
    ];
    
    register_post_type('project', $args);
}
add_action('init', 'project_post_type', 0);
