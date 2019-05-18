<?php

// Dequeue styles
add_action( 'wp_enqueue_styles', 'bblt_deregister_styles', 9999 );
add_action( 'wp_print_styles', 'bblt_deregister_styles', 9999 );
function bblt_deregister_styles() {
	wp_dequeue_style( 'fl-builder-google-fonts' );
	wp_dequeue_style( 'open-sans-css' );
	wp_dequeue_style( 'font-awesome' );

	if ( ! is_admin() ) {
		wp_dequeue_style( 'yoast-seo-adminbar' );
	}
}


// Dequeue scripts
add_action( 'wp_print_scripts', 'bblt_dequeue_scripts', 9999 );
function bblt_dequeue_scripts() {
	wp_dequeue_script( 'responsive-menu-pro-font-awesome' );
}
