<?php
/**
 * Funciones del tema
 */

// ✅ Cargar estilos y scripts
require_once get_template_directory() . '/inc/queue.php';

// ✅ Activar imagen destacada, title tag y menú
function theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    register_nav_menus([
        'header_menu' => 'Menu Header',
        'footer_menu' => 'Menu Footer',
    ]);
}
add_action('after_setup_theme', 'theme_setup');
