<?php 
	
/**
 * 
 *
 * Sets up theme defaults and registers the various WordPress features that
 * Twenty Twelve supports.
 *
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_editor_style() To add a Visual Editor stylesheet.
 * @uses add_theme_support() To add support for post thumbnails, automatic feed links,
 * 	custom background, and post formats.
 * @uses register_nav_menu() To add support for navigation menus.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Twenty Twelve 1.0
 */
function kandywedding_setup() {
	
	/*
	 * This theme supports custom background color and image,
	 * and here we also set up the default background color.
	 */

	$args = array(
		'default-color' => 'f7f5e7',
		'default-image' => get_stylesheet_directory_uri().'/assets/img/bg.jpg',
		
	);
	add_theme_support( 'custom-background', $args );
	
	
	
}
add_action( 'after_setup_theme', 'kandywedding_setup' );

