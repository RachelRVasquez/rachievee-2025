<?php
/**
 * Current Date block binding as an example
 */
namespace RachieVee2025;

class BlockBindings
{
	public function boot()
	{
		add_action('init', [$this, 'register_block_binding_date']);
	}

	/**
	 * Bind to a source - a function that returns the current date
	 *
	 * @return void
	 */
	public function register_block_binding_date() : void
	{
		register_block_bindings_source(
			'rachievee-2025/current-date', //how we reference this source in the html template
			array(
				'label' => __( 'Current Date', 'rachievee-2025' ),
				'get_value_callback' => [$this, 'get_current_date_for_source'],
			)
		);
	}

	/**
	 * Return the current date with either the custom or a fallback format
	 *
	 * @param array $source_args
	 * @param $block_instance
	 * @return string
	 */
	function get_current_date_for_source( array $source_args = [], $block_instance = null ) : string {
		//Check if a format's been passed from the html template that calls the binding
		$format = $source_args['format'] ?? 'Y-m-d';

		if ( ! $block_instance || 'core/paragraph' !== $block_instance->parsed_block['blockName'] ) {
			return '';
		}

		return __( 'Today\'s date:', 'rachievee-2025' ) . ' ' . date( $format );
	}
}
