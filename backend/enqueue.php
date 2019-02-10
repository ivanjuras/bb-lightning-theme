<?php

// Enqueue styles
add_action( 'wp_enqueue_scripts', 'bblt_enqueue_styles', 10000 );
function bblt_enqueue_styles() {
	wp_enqueue_style(
		'bblt-child-theme',
		get_stylesheet_directory_uri() . '/style.css',
		array(),
		null
	);
}


// Enqueue scripts
add_action( 'wp_enqueue_scripts', 'bblt_enqueue_scripts' );
function bblt_enqueue_scripts() {
	wp_enqueue_script(
		'bblt-main-script',
		get_stylesheet_directory_uri() . '/frontend/bblt-scripts.js',
		array( 'jquery' ),
		null,
		true
	);
}
