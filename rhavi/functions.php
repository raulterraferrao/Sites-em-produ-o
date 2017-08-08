<?php

function rhavi_enqueue_styles() {

    $parent_style = 'storefront-style'; // This is 'twentyfifteen-style' for the Twenty Fifteen theme.

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'rhavi-style',
        get_stylesheet_directory_uri() . '/css/rhavi.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'rhavi_enqueue_styles' );


/*
function rhavi_script_enqueue(){

    wp_enqueue_style( 'customstyle', get_template_directory_uri() . '/css/rhavi.css', array(), '1.0.0', 'all');
    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/js/rhavi.js', array(), '1.0.0', true );
}
add_action( 'wp_enqueue_scripts', 'rhavi_script_enqueue');
*/

/*Ativa a criação de menus no dashboard na aba aparencias*/
function rhavi_theme_setup(){

    add_theme_support( 'menus' );

    register_nav_menu( 'primary', 'Menu de navegação primário' );
    register_nav_menu( 'secondary', 'Menu de navegação do rodapé');
}
add_action( 'init', 'rhavi_theme_setup');