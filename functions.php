<?php

function theme_setup(){
    add_theme_support( 'title-tag' );

    register_nav_menus( array(
        'primary' => 'Primary Menu',
        'second_menu' => 'Second Menu',
        'pan' => 'パンくずリスト'
   ) );
}
add_action( 'after_setup_theme', 'theme_setup' );


function theme_scripts() {
    theme_styles();

    wp_enqueue_script( 'jquery-org', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    wp_enqueue_script( 'slideshow-js', get_template_directory_uri() . '/js/slideshow.js',array('jquery-org'),'1.0.0',false);
    wp_enqueue_script( 'movetop-js', get_template_directory_uri() . '/js/moveTopPage.js',array('jquery-org'),'1.0.0',false);
    wp_enqueue_script( 'dropdown-js', get_template_directory_uri() . '/js/dropDownMenu.js',array('jquery-org'),'1.0.0',false);
}
function theme_styles() {
    // WordPress Dash Icon.
    //wp_enqueue_style( 'dashicons' );
    // Theme stylesheet. ./style.css
    wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
    wp_enqueue_style( 'common-style', get_template_directory_uri() . '/css/common.css');
    wp_enqueue_style( 'responsive-style', get_template_directory_uri() . '/css/responsive.css','','','screen and (max-width:480px)');
    // Comment Reply.
//    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
//        wp_enqueue_script( 'comment-reply' );
//    }
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

$custom_header_defaults = array(
    'default-image'          => get_template_directory_uri() .'/images/logo.png"',
    'width'                  => 244,
    'height'                 => 76,
    'header-text'            => false,	//ヘッダー画像上にテキストをかぶせる
);
add_theme_support( 'custom-header', $custom_header_defaults );
