<?php
register_nav_menus(array(
    'menu'=>'principal'
));
// afficher image à la une
add_theme_support( 'post-thumbnails' );
// fin
function monstyle() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    }
    add_action( 'wp_enqueue_scripts', 'monstyle' );
/* Disable WordPress Admin Bar for all users */
add_filter( 'show_admin_bar', '__return_false' );