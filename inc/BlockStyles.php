<?php
namespace RachieVee2025\Setup;

class BlockStyles {
	public function boot() {
		add_action( 'init', [ $this, 'register_block_styles' ] );
	}

	public function register_block_styles() {
		register_block_style(
			'core/list',
			[
				'name'  => 'horizontal',
				'label' => __( 'Horizontal', 'rachievee-2025' ),
			]
		);
	}
}