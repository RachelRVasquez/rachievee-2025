<?php
/**
 * Title: Default Footer
 * Slug: rachievee-2025/footer-default
 * Categories: footer
 * Block Types: core/template-part/footer
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--40)"><!-- wp:site-title {"level":0} /-->

<!-- wp:paragraph {"align":"right"} -->
<p class="has-text-align-right">
<?php
printf(
	/* Translators: WordPress link. */
	esc_html__( 'Proudly powered by %s', 'rachievee-2025' ),
	'<a href="' . esc_url( __( 'https://wordpress.org', 'rachievee-2025' ) ) . '" rel="nofollow">WordPress</a>'
)
?>
</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
