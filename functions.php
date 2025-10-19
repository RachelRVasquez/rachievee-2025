<?php
/**
 * Twenty Twenty-Three functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Three
 * @since Twenty Twenty-Three 1.0
 */

add_action( 'init', 'themeslug_register_pattern_categories' );

add_filter( 'should_load_remote_block_patterns', '__return_false' );

function themeslug_register_pattern_categories() {
	register_block_pattern_category( 'themeslug', array(
		'label' => __( 'Theme Name', 'themeslug' )
	) );
}

if ( ! function_exists( 'rachievee_2025_support' ) ) :

	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * @since Twenty Twenty-Three 1.0
	 *
	 * @return void
	 */
	function rachievee_2025_support() {

		// Enqueue editor styles.
		add_editor_style( get_stylesheet_uri() );

	}

endif;

add_action( 'after_setup_theme', 'rachievee_2025_support' );

if ( ! function_exists( 'rachievee_2025_styles' ) ) :

	/**
	 * Enqueue styles.
	 *
	 * @since Twenty Twenty-Three 1.0
	 *
	 * @return void
	 */
	function rachievee_2025_styles() {
		// Register theme stylesheet.
		$theme_version = wp_get_theme()->get( 'Version' );

		$version_string = is_string( $theme_version ) ? $theme_version : false;
		wp_register_style(
			'rachievee-2025-style',
			get_template_directory_uri() . '/style.css',
			array(),
			$version_string
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'rachievee-2025-style' );

	}

endif;

add_action( 'wp_enqueue_scripts', 'rachievee_2025_styles' );
