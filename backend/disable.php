<?php

// Disable rel='shortlink' and shortlink HTTP header
add_filter('after_setup_theme', 'bblt_remove_shortlink');
function bblt_remove_shortlink() {
	remove_action('wp_head', 'wp_shortlink_wp_head', 10);
	remove_action( 'template_redirect', 'wp_shortlink_header', 11);
}


// Disable embeds
add_action('init', 'bblt_remove_embeds');
function bblt_remove_embeds() {
	remove_action( 'wp_head', 'wp_oembed_add_discovery_links' );
}


// Disable emojis
add_action( 'init', 'bblt_disable_emojis' );
function bblt_disable_emojis() {
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_action( 'admin_print_styles', 'print_emoji_styles' ); 
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' ); 
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	add_filter( 'tiny_mce_plugins', 'bblt_disable_emojis_tinymce' );
	add_filter( 'wp_resource_hints', 'bblt_disable_emojis_remove_dns_prefetch', 10, 2 );
}
   
function bblt_disable_emojis_tinymce( $plugins ) {
	if ( is_array( $plugins ) ) {
		return array_diff( $plugins, array( 'wpemoji' ) );
	} else {
		return array();
	}
}
   
function bblt_disable_emojis_remove_dns_prefetch( $urls, $relation_type ) {
	if ( 'dns-prefetch' == $relation_type ) {
		$emoji_svg_url = apply_filters( 'emoji_svg_url', 'https://s.w.org/images/core/emoji/2/svg/' );
		$urls = array_diff( $urls, array( $emoji_svg_url ) );
	}

	return $urls;
}


// Disable jQuery Migrate
add_action( 'wp_default_scripts', 'bblt_dequeue_jquery_migrate' );
function bblt_dequeue_jquery_migrate( $scripts ) {
	if ( ! is_admin() && ! empty( $scripts->registered['jquery'] ) ) {
		$scripts->registered['jquery']->deps = array_diff(
			$scripts->registered['jquery']->deps,
			[ 'jquery-migrate' ]
		);
	}
}


// Disable embeds
add_action( 'wp_footer', 'bblt_disable_embeds' );
function bblt_disable_embeds(){
	wp_dequeue_script( 'wp-embed' );
}


// Remove jQuery fallback from BB
remove_action( 'wp_footer', 'FLBuilder::include_jquery' );


// Remove RSD rel link tag
remove_action ('wp_head', 'rsd_link');


// Remove Windows Live Writer tag
remove_action( 'wp_head', 'wlwmanifest_link');


// Remove WP Generator tag
remove_action('wp_head', 'wp_generator');
