<?php
function init_template(){
    add_theme_support( 'post-thumbnails');
    add_theme_support('title-tag');

    register_nav_menus(
        array(
            'top_menu' => 'Menú Principal'
        )
    );
}
add_action( 'after_setup_theme','init_template');

function assets(){
    wp_register_style( 'bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css','','5.1','all');
    wp_enqueue_style('style',get_stylesheet_uri(  ),array('bootstrap'),'1.0','all');

    wp_enqueue_script('scriptBootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js','','5.1.2',true);
}
add_action('wp_enqueue_scripts','assets');
