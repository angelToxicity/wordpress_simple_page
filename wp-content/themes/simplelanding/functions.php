<?php

function bootstrap_scripts() {
	wp_enqueue_style( 'mytheme-css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'mytheme-bootstrap', get_template_directory_uri() . '/bootstrap/dist/css/bootstrap.min.css' );
	wp_enqueue_script('mytheme-bootstrapjs', get_template_directory_uri().'/bootstrap/dist/js/bootstrap.min.js', array('jquery-3.3.1', 'popperjs') );
}
add_action( 'wp_enqueue_scripts', 'bootstrap_scripts' );

function js_scripts() {
	wp_enqueue_script('jquery-3.3.1', get_template_directory_uri().'/js/jquery-3.3.1.min.js', array() );
	wp_enqueue_script('popperjs', get_template_directory_uri().'/js/popper.min.js', array('jquery-3.3.1') );
	wp_enqueue_script('sweetalert', get_template_directory_uri().'/js/sweetalert.min.js', array('jquery-3.3.1') );
}
add_action( 'wp_enqueue_scripts', 'js_scripts' );

?>