<?php

add_action( 'wp_enqueue_scripts', 'add_styles' );
add_action( 'wp_enqueue_scripts', 'add_scripts' );

function add_styles() {
    wp_enqueue_style('normalize', get_template_directory_uri().'/css/normalize.css');
    wp_enqueue_style('fancybox', get_template_directory_uri().'/css/jquery.fancybox.min.css');
    wp_enqueue_style('swiper', get_template_directory_uri().'/css/swiper.min.css');
    wp_enqueue_style('styles', get_template_directory_uri().'/css/styles.css', array(), rand(1111, 9999));
    wp_enqueue_style('responsive', get_template_directory_uri().'/css/responsive.css', array(), rand(1111, 9999));
    wp_enqueue_style( 'theme', get_stylesheet_uri() );

}


function add_scripts() {

    wp_enqueue_script( 'fancyboxjs', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array('jquery'), false, true);
    wp_enqueue_script( 'swiperjs', get_template_directory_uri() . '/js/swiper.js', array('jquery'), false, true);
    wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'), rand(1111, 9999), true);

}