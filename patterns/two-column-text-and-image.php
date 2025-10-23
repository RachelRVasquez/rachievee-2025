<?php
/**
 * Title: Two-Column Text and Image
 * Slug: rachievee-2025/two-column-text-and-image
 * Description: A two column layout meant to have a block of text and CTA on the left, and an image on the right.
 * Categories: columns, call-to-action
 * Keywords: about-me, two-column, columns, cta
 * Viewport Width: 1400
 * Block Types: 
 * Post Types: 
 * Inserter: true
 */
?>
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"1400px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--70)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","width":"66.66%"} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:66.66%"><!-- wp:heading {"style":{"typography":{"letterSpacing":"1px","fontWeight":"700","fontStyle":"normal"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"text-primary","fontSize":"xl","fontFamily":"playfair-display"} -->
<h2 class="wp-block-heading has-text-primary-color has-text-color has-playfair-display-font-family has-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:700;letter-spacing:1px">About Me</h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"lg"} -->
<p class="has-lg-font-size">I’ve been a web developer for 14+ years, which means I’ve seen <em>every kind</em> of fire. From legacy codebase tangles and stylesheet chaos to accessibility black holes and plugins older than the internet itself—I’ve jumped in, cleaned up, and made things work <em>beautifully</em>.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"textColor":"post-title","fontSize":"xl","fontFamily":"playfair-display"} -->
<p class="has-post-title-color has-text-color has-playfair-display-font-family has-xl-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);font-style:italic;font-weight:700">I make broken things lean again. I make confusing things usable. I make slow things fast. And most importantly, I make it all accessible.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"lg"} -->
<p class="has-lg-font-size">If your site’s a bit of a dumpster fire, I’m the one who shows up with a hose, a smile, and a pull request. <strong>Cleaning up and preventing web fires is what I do.</strong> If that sounds like the kind of rescue your project needs—whether it’s reviving an old site or building something new and not flammable — get in touch!</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-button-fill"} -->
<p class="is-style-button-fill"><a href="/portfolio">View Portfolio</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%","style":{"spacing":{"padding":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-left:var(--wp--preset--spacing--60);flex-basis:33.33%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"0px","style":"none"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/patterns/images/Error-3-2.png" alt="" style="border-style:none;border-width:0px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
