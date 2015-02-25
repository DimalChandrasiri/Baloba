<?php
/**
 * Baloba WordPress functions and definitions
 *
 * @package Baloba WordPress
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 640; /* pixels */
}

if ( ! function_exists( 'baloabwp_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function baloabwp_setup() {


	load_theme_textdomain( 'balobawp', get_template_directory() . '/languages' );


	add_theme_support( 'automatic-feed-links' );


	add_theme_support( 'title-tag' );


	register_nav_menus( array(
		'primary' => __( 'Main Menu', 'balobawp' ),
	) );


	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
	) );


	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link',
	) );

	add_theme_support( 'custom-background', apply_filters( 'baloabwp_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );
}
endif; 
add_action( 'after_setup_theme', 'baloabwp_setup' );

/**
* --------------------------------------
* 02. Theme Assets definitions
* --------------------------------------
*/
define('BALOBA_ROOT',get_stylesheet_directory_uri());
define('BALOBA_STYLES',BALOBA_ROOT.'/inc/css/');
define('BALOBA_JS',BALOBA_ROOT.'/inc/js/');
define('BALOBA_IMG',BALOBA_ROOT.'/inc/img/');

// Enquing Style and Scripts to theme

function enqueue_baloba_scripts(){

	
	wp_enqueue_style('queries',BALOBA_STYLES.'queries.css');
	wp_enqueue_style('bootstrap',BALOBA_STYLES.'bootstrap.min.css');
	wp_enqueue_style('animate',BALOBA_STYLES.'animate.css');
	wp_enqueue_style('master',BALOBA_STYLES.'styles.css' );
	wp_enqueue_style('style',BALOBA_ROOT.'/style.css' );
	wp_enqueue_style('flaticon',BALOBA_STYLES.'flaticon.css' );


	wp_enqueue_script( 'wow', BALOBA_JS . 'wow.min.js', array(), '1.0', true );
	wp_enqueue_script( 'jQuery', BALOBA_JS . 'jquery.js', array(), '1.1.11', true );
	wp_enqueue_script( 'retina', BALOBA_JS . 'retina.js', array(), '1.1.11', true );
	wp_enqueue_script('bootstrap',BALOBA_JS.'bootstrap.min.js',array(),'3.01',true );
	wp_enqueue_script('classi', BALOBA_JS.'classie.js',array(),'1.0',true );
	wp_enqueue_script('animatedHeader', BALOBA_JS.'animatedHeader.js',array(), '1.0',true );
	wp_enqueue_script('circle',BALOBA_JS.'jquery.circliful.min.js',array(),'1.0',true );


}
add_action('wp_enqueue_scripts','enqueue_baloba_scripts');

/**
* --------------------------------------
* 02. Theme Helper functions
* --------------------------------------
*/ 
include('inc/theme-core.php');
include('inc/session_manager/wp-session-manager.php');