<?php
/**
 * Enqueue theme CSS & JS
 */

add_action('wp_enqueue_scripts', 'theme_enqueue_assets');

function theme_enqueue_assets() {

    // ✅ Cargar CSS global del theme
    wp_enqueue_style(
        'theme-style',
        get_template_directory_uri() . '/style.css',
        [],
        filemtime(get_template_directory() . '/style.css'),
        'all'
    );

    // ✅ Cargar archivo JS principal (si existe)
    wp_enqueue_script(
        'theme-main',
        get_template_directory_uri() . '/assets/js/main.js',
        ['jquery'],
        filemtime(get_template_directory() . '/assets/js/main.js'),
        true // se carga al final del <body>
    );
}
