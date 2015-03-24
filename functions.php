<?php
/**
 * akrigline functions and definitions
 *
 * @package akrigline
 */

/**
* Allows SVG to be uploaded to Wordpress Media
*/
function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


if ( ! function_exists( 'akrigline_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function akrigline_setup() {

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
	 */
	add_theme_support( 'post-thumbnails' );
}

endif; // akrigline_setup
add_action( 'after_setup_theme', 'akrigline_setup' );

/**
 * Enqueue scripts and styles.
 */
function akrigline_scripts() {
	wp_enqueue_style( 'akrigline-style', get_stylesheet_uri() );

	wp_enqueue_script( 'akrigline-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20130115', true );
}
add_action( 'wp_enqueue_scripts', 'akrigline_scripts' );

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';