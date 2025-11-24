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

RachieVee2025\theme();


add_filter( 'should_load_remote_block_patterns', '__return_false' );


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
			get_template_directory_uri() . '/build/css/style.css',
			['rachievee-2025-style'], // make it load after the main one
			$version_string
		);

	}

endif;

	add_action( 'wp_enqueue_scripts', 'rachievee_2025_styles' );

// Enqueue header scroll script
if ( ! function_exists( 'rachievee_2025_scripts' ) ) :
	function rachievee_2025_scripts() {
		$theme_version = wp_get_theme()->get( 'Version' );
		$version_string = is_string( $theme_version ) ? $theme_version : false;

		wp_enqueue_script(
			'rachievee-2025-header-scroll',
			get_template_directory_uri() . '/build/js/header-scroll.js',
			array(),
			$version_string,
			true
		);

		wp_enqueue_script(
			'rachievee-2025-reduced-motion',
			get_template_directory_uri() . '/build/js/reduced-motion.js',
			array(),
			$version_string,
			true
		);
	}
endif;

add_action( 'wp_enqueue_scripts', 'rachievee_2025_scripts' );

// EDITOR STYLES
if ( ! function_exists( 'rachievee_2025_editor_styles' ) ) :
	function rachievee_2025_editor_styles() {
		wp_enqueue_style(
			'rachievee-2025-editor',
			get_template_directory_uri() . '/build/css/editor.css',
			[],
			wp_get_theme()->get( 'Version' ),
			'all'
		);
	}
endif;

add_action( 'enqueue_block_editor_assets', 'rachievee_2025_editor_styles' );
function rachievee_register_custom_blocks() {
	$custom_blocks = array (
		'wave-divider',
	);

	foreach ( $custom_blocks as $block ) {
		register_block_type( __DIR__ . '/build/blocks/' . $block );
	}
}
add_action( 'init', 'rachievee_register_custom_blocks' );

function rachievee_allowed_block_types( $allowed_blocks, $editor_context ) {

	return array(
		'core/accordion',
		'core/accordion-heading',
		'core/accordion-item',
		'core/accordion-panel',
		'core/archives',
//		'core/audio',
//		'core/avatar',
		'core/block',
		'core/breadcrumbs',
		'core/button',
		'core/buttons',
//		'core/calendar',
		'core/categories',
		'core/code',
		'core/column',
		'core/columns',
		'core/comment-author-avatar',
		'core/comment-author-name',
		'core/comment-content',
		'core/comment-date',
		'core/comment-edit-link',
		'core/comment-reply-link',
		'core/comment-template',
		'core/comments',
		'core/comments-pagination',
		'core/comments-pagination-next',
		'core/comments-pagination-numbers',
		'core/comments-pagination-previous',
		'core/comments-title',
		'core/cover',
//		'core/details',
		'core/embed',
		'core/file',
//		'core/footnotes',
//		'core/form',
//		'core/form-input',
//		'core/form-submission-notification',
//		'core/form-submit-button',
//		'core/freeform',
		'core/gallery',
		'core/group',
		'core/heading',
		'core/home-link',
		'core/html',
		'core/image',
		'core/latest-comments',
		'core/latest-posts',
		'core/list',
		'core/list-item',
//		'core/loginout',
//		'core/math',
		'core/media-text',
		'core/missing',
		'core/more',
		'core/navigation',
		'core/navigation-link',
		'core/navigation-submenu',
		'core/nextpage',
		'core/page-list',
		'core/page-list-item',
		'core/paragraph',
		'core/pattern',
//		'core/post-author',
//		'core/post-author-biography',
//		'core/post-author-name',
		'core/post-comment',
		'core/post-comments-count',
		'core/post-comments-form',
		'core/post-comments-link',
		'core/post-content',
		'core/post-date',
		'core/post-excerpt',
		'core/post-featured-image',
		'core/post-navigation-link',
		'core/post-template',
		'core/post-terms',
		'core/post-time-to-read',
		'core/post-title',
		'core/preformatted',
		'core/pullquote',
		'core/query',
		'core/query-no-results',
		'core/query-pagination',
		'core/query-pagination-next',
		'core/query-pagination-numbers',
		'core/query-pagination-previous',
		'core/query-title',
		'core/query-total',
		'core/quote',
		'core/read-more',
//		'core/rss',
		'core/search',
		'core/separator',
//		'core/shortcode',
//		'core/site-logo',
//		'core/site-tagline',
//		'core/site-title',
		'core/social-link',
		'core/social-links',
		'core/spacer',
		'core/tab',
		'core/table',
		'core/table-of-contents',
		'core/tabs',
		'core/tag-cloud',
		'core/term-count',
		'core/term-description',
		'core/term-name',
		'core/term-template',
		'core/terms-query',
		'core/text-columns',
//		'core/verse',
		'core/video',
	);
}

add_filter( 'allowed_block_types_all', 'rachievee_allowed_block_types', 25, 2 );


