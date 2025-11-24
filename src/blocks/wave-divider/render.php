<?php
/**
 * PHP file to use when rendering the block type on the server to show on the front end.
 *
 * The following variables are exposed to the file:
 *     $attributes (array): The block attributes.
 *     $content (string): The block default content.
 *     $block (WP_Block): The block instance.
 *
 * @see https://github.com/WordPress/gutenberg/blob/trunk/docs/reference-guides/block-api/block-metadata.md#render
 */

$flip = ! empty( $attributes['flip'] );

$style = $flip ? 'transform: scaleY(-1);' : '';
?>
<div <?php echo get_block_wrapper_attributes(); ?> class="wp-block-rachievee-2025-wave-divider" style="<?php echo esc_attr( $style ); ?>">
	<svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1400 140" preserveAspectRatio="none" version="1.1" class="exclude-reduced-motion" width="1400" height="140"><path d="M0 0v54.005c55.755 25.9 120.855 37.532 184.333 32.667 82.087 -6.265 159.052 -38.862 241.267 -43.75 86.147 -5.087 172.13 19.693 254.567 41.137 80.815 21 161.35 29.027 244.3 15.26 42.175 -7 81.492 -20.813 121.858 -34.23C1154.405 29.167 1298.5 -16.672 1400 61.215V0Z" opacity=".25" class="shape-fill"/><path d="M0 0v18.445c15.167 24.628 32.247 47.892 55.638 65.613C115.978 129.815 192.5 129.5 262.01 106.843c36.342 -11.842 70.105 -30.415 104.615 -46.433 47.74 -22.167 98.852 -53.667 152.635 -57.948 42.303 -3.325 82.717 10.99 115.033 36.82 37.065 29.622 72.707 72.333 120.902 85.167 47.18 12.588 94.908 -7.805 138.985 -28.327s87.687 -45.5 136.407 -50.225c69.685 -6.825 132.16 26.693 197.05 45.313 35.233 10.103 68.833 7.198 101.605 -8.75 26.168 -12.705 56 -31.418 70.758 -57.447V0Z" opacity=".5" class="shape-fill"/><path d="M0 0v6.568C174.918 68.833 366.438 83.207 555.135 49.665c50.167 -8.913 98.268 -23.473 148.878 -30.87 68.833 -10.068 131.227 14.28 193.153 41.3C965.918 90.09 1033.667 111.113 1109.733 105c100.952 -8.167 201.203 -53.328 290.267 -98.945V0Z" class="shape-fill"/></svg>
</div>
