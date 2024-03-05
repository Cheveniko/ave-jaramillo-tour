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

function aveTour_simplify_checkout_virtual( $fields ) {
    
	unset($fields['billing']['billing_company']);
	unset($fields['billing']['billing_address_1']);
	unset($fields['billing']['billing_address_2']);
	unset($fields['billing']['billing_city']);
	unset($fields['billing']['billing_postcode']);
	unset($fields['billing']['billing_country']);
	unset($fields['billing']['billing_state']);
	unset($fields['billing']['billing_phone']);

	add_filter( 'woocommerce_enable_order_notes_field', '__return_false' );
	return $fields;
}

add_filter( 'woocommerce_checkout_fields' , 'aveTour_simplify_checkout_virtual' );

function aveTour_bacs_labels($translation, $text, $domain) {
	if ($domain == 'woocommerce') {
		switch ($text) {
			case 'Sort code':
				$translation = 'Tipo de cuenta';
				break;
			case 'IBAN':
				$translation = 'Titular de la cuenta';
				break;
			case 'BIC / Swift':
				$translation = 'RUC';
				break;
		}
	}

	return $translation;
}

add_filter('gettext', 'aveTour_bacs_labels', 10, 3);