<?php
function aveTourEnqueueFiles() {
	wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/070ca72201.js', true );
	wp_enqueue_style( 'custom-style', get_stylesheet_uri() );
	// wp_enqueue_script( 'carousel', get_template_directory_uri() . '/js/carousel.js', array( 'jquery' ), '1.0.0', true );
	// wp_enqueue_script( 'navbar', get_template_directory_uri() . '/js/navbar.js', array( 'jquery' ), '1.0.0', true );
}
;
add_action( 'wp_enqueue_scripts', 'aveTourEnqueueFiles' );

function aveTourFeatures() {
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'aveTourFeatures' );

add_theme_support( 'woocommerce' );
