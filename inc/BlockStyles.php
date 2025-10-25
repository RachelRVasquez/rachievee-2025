<?php
namespace RachieVee2025;

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
		register_block_style(
			'core/paragraph',
			[
				'name'  => 'button-fill',
				'label' => __( 'Link Button Style (Fill)', 'rachievee-2025' ),
			]
		);
		register_block_style(
			'core/paragraph',
			[
				'name'  => 'button-outline',
				'label' => __( 'Link Button Style (Outline)', 'rachievee-2025' ),
			]
		);
		register_block_style(
			'core/paragraph',
			[
				'name'  => 'arrow',
				'label' => __( 'Link Arrow Style', 'rachievee-2025' ),
			]
		);
	}
}