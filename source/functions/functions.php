<?php

add_action( 'wp_enqueue_scripts', 'montage_enqueue_scripts' );

if ( ! function_exists( 'montage_enqueue_scripts' ) ) :

/**
* Add theme styles and scripts here
*/
function montage_enqueue_scripts() {

	if ( ! is_admin() ) {
		wp_enqueue_style(
			'montage-style',
			get_bloginfo( 'stylesheet_url' )
		);
	}

}

endif; // montage_enqueue_scripts

add_action( 'after_setup_theme', 'montage_setup' );

if ( ! function_exists( 'montage_setup' ) ) :

/**
* Set up your theme here
*/
function montage_setup() {
	add_theme_support( 'post-thumbnails' );
}

endif; // montage_setup
