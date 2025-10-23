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

// Load Composer autoloader
require_once get_template_directory() . '/vendor/autoload.php';

use X3P0\RoughDraft;

RoughDraft\theme();


// add_action( 'init', 'themeslug_register_pattern_categories' );

add_filter( 'should_load_remote_block_patterns', '__return_false' );

// function themeslug_register_pattern_categories() {
// 	register_block_pattern_category( 'themeslug', array(
// 		'label' => __( 'Theme Name', 'themeslug' )
// 	) );
// }

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

		wp_enqueue_style(
			'rachievee-2025-main',
			get_template_directory_uri() . '/assets/css/style.css',
			['rachievee-2025-style'], // make it load after the main one
			$version_string
		);
		
	}

endif;

add_action( 'wp_enqueue_scripts', 'rachievee_2025_styles' );

// EDITOR STYLES
if ( ! function_exists( 'rachievee_2025_editor_styles' ) ) :
	function rachievee_2025_editor_styles() {
		wp_enqueue_style(
			'rachievee-2025-editor',
			get_template_directory_uri() . '/assets/css/editor.css',
			[],
			wp_get_theme()->get( 'Version' ),
			'all'
		);
	}
endif;

add_action( 'enqueue_block_editor_assets', 'rachievee_2025_editor_styles' );
