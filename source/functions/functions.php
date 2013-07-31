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
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
  register_post_type( 'event',
		array(
			'labels' => array(
				'name' => __( 'Events' ),
				'singular_name' => __( 'Event' )
			),
  		'public' => true,
  		'has_archive' => true,
  		'supports' => array('title', 'editor')
		)
	);
}

endif; // montage_setup
