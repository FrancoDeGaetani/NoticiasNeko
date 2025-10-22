<?php
/**
 * Funciones personalizadas del tema
 */

// ✅ Activar soporte de funcionalidades básicas
function theme_custom_supports() {
    // Imágenes destacadas (thumbnails)
    add_theme_support('post-thumbnails');

    // Título dinámico en <title>
    add_theme_support('title-tag');

    // Logo personalizable desde el panel de WordPress
    add_theme_support('custom-logo', [
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
    ]);

    // Soporte para HTML5 en bloques modernos
    add_theme_support('html5', ['search-form', 'comment-form', 'comment-list', 'gallery', 'caption']);

    // Soporte para widgets y menús
    register_nav_menus([
        'header_menu' => __('Menú Principal', 'theme'),
        'footer_menu' => __('Menú Footer', 'theme'),
    ]);
}
add_action('after_setup_theme', 'theme_custom_supports');



// ✅ Registrar una zona de widgets (sidebar o footer)
function theme_register_sidebars() {
    register_sidebar([
        'name'          => __('Sidebar principal', 'theme'),
        'id'            => 'main_sidebar',
        'description'   => __('Agrega widgets para la barra lateral', 'theme'),
        'before_widget' => '<div class="widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);
}
add_action('widgets_init', 'theme_register_sidebars');



// ✅ (Opcional) Registrar un Custom Post Type — Noticias
function theme_register_custom_post_types() {
    $labels = [
        'name'               => 'Noticias',
        'singular_name'      => 'Noticia',
        'menu_name'          => 'Noticias',
        'add_new'            => 'Añadir nueva',
        'add_new_item'       => 'Añadir nueva noticia',
        'edit_item'          => 'Editar noticia',
        'new_item'           => 'Nueva noticia',
        'view_item'          => 'Ver noticia',
        'search_items'       => 'Buscar noticias',
        'not_found'          => 'No se encontraron noticias',
        'not_found_in_trash' => 'No hay noticias en la papelera',
    ];

    $args = [
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'menu_icon'          => 'dashicons-media-document',
        'supports'           => ['title', 'editor', 'thumbnail', 'excerpt', 'comments'],
        'rewrite'            => ['slug' => 'noticias'],
    ];

    register_post_type('noticias', $args);
}
add_action('init', 'theme_register_custom_post_types');

/*
Función	Descripción
theme_custom_supports()	Activa funciones básicas (logo, menús, título, thumbnails)
theme_register_sidebars()	Crea una zona de widgets (opcional)
theme_register_custom_post_types()	Agrega un tipo de contenido “Noticias” (ideal para tu proyecto de anime/manga)
*/