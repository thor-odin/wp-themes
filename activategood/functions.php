<?php
function activategood_scripts(){
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/bs-3.3.7/css/bootstrap.min.css', array(), '3.3.7' );
	wp_enqueue_style( 'activategood', get_template_directory_uri() . '/css/activategood.css' );
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/bs-3.3.7/js/bootstrap.min.js', array( 'jquery' ), '3.3.7', true );
}

add_action( 'wp_enqueue_scripts', 'activategood_scripts' );

add_theme_support( 'title-tag' );

add_theme_support( 'post-thumbnails' );