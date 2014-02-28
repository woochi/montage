<?php

add_action( 'wp_enqueue_scripts', 'montage_enqueue_scripts' );

if ( ! function_exists( 'montage_enqueue_scripts' ) ) :

/**
* Add theme styles and scripts here
*/
function montage_enqueue_scripts() {
	if ( ! is_admin() ) {
		//wp_enqueue_style('montage-style', get_bloginfo( 'stylesheet_url' ));
		//wp_enqueue_script( "montage", get_template_directory_uri() . '/javascripts/theme.js');
    wp_enqueue_style( "montage", get_stylesheet_uri());
	}
}

endif; // montage_enqueue_scripts

add_action( 'after_setup_theme', 'montage_setup' );

if ( ! function_exists( 'montage_setup' ) ) :

function custom_excerpt_length( $length ) {
	return 20;
}

function my_wpcf7_form_elements($html) {
    $text = 'Opiskelupaikka...';
    $html = str_replace('<option value="">---</option>', '<option value="">' . $text . '</option>', $html);
    return $html;
}

function featurette($attrs, $content = null) {
   extract(shortcode_atts(array('columns' => '8'), $attrs));
   $html = "<article class='featurette'><div class='row'>" .
            "<div class='column medium-".$columns." medium-centered'>" .
            do_shortcode($content) .
            "</div></div></article>";
   return $html;
}

function create_shortcodes() {
  add_shortcode('featurette', 'featurette');
}

/**
* Set up your theme here
*/
function montage_setup() {
  add_filter('wpcf7_form_elements', 'my_wpcf7_form_elements');
  add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	add_theme_support( 'post-thumbnails' );

	// Switches default core markup for search form, comment form, and comments
	// to output valid HTML5.
	add_theme_support( 'html5', array(
	  'search-form',
	  'comment-form',
	  'comment-list' ));

	// Support different post types, specifically video types for movie posts.
	add_theme_support( 'post-formats', array( 'video' ) );

  // Register default navigation menus
  register_nav_menu('header-menu',__( 'Header Menu' ));
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
  register_nav_menu('mobile-menu',__( 'Mobile Menu' ));

  // Custom post type for posting events
  register_post_type( 'event',
		array(
			'labels' => array(
				'name' => __( 'Tapahtumat' ),
				'singular_name' => __( 'Tapahtuma' )
			),
  		'public' => true,
  		'has_archive' => true,
  		'supports' => array('title', 'editor', 'excerpt')
		)
	);

  // Create featurette shortcodes
	create_shortcodes();
}

endif; // montage_setup
