<?php
/**
 * Title: front-page
 * Slug: rachievee-2025/front-page
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"className":"is-home-intro","style":{"spacing":{"blockGap":"0rem","margin":{"top":"0px","bottom":"0px"},"padding":{"bottom":"var:preset|spacing|60","top":"var:preset|spacing|60"}}},"gradient":"header-gradient","layout":{"type":"constrained","wideSize":"1400px","contentSize":"75%","justifyContent":"center"}} -->
<div class="wp-block-group is-home-intro has-header-gradient-gradient-background has-background" style="margin-top:0px;margin-bottom:0px;padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","animationsForBlocks":{"animation":"fade","variation":"up","mirror":true,"once":false},"style":{"spacing":{"padding":{"bottom":"0px"},"margin":{"bottom":"0px"}}},"fontSize":"5-xl","fontFamily":"playfair-display"} -->
<h2 class="wp-block-heading has-text-align-center has-playfair-display-font-family has-5-xl-font-size" style="margin-bottom:0px;padding-bottom:0px" data-aos="fade-up" data-aos-mirror="true"><?php esc_html_e('Hello, I\'m Rachel!', 'rachievee-2025');?></h2>
<!-- /wp:heading -->

<!-- wp:image {"width":"200px","sizeSlug":"full","linkDestination":"none","animationsForBlocks":{"animation":"fade","variation":"up","delay":200,"mirror":true,"once":false},"align":"center"} -->
<figure class="wp-block-image aligncenter size-full is-resized" data-aos="fade-up" data-aos-delay="200" data-aos-mirror="true"><img src="http://rachievee-local.dvl.to/wp-content/themes/rachievee-2025/assets/images/aka-rachievee-1.png" alt="<?php esc_attr_e('aka RachieVee', 'rachievee-2025');?>" style="width:200px"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"align":"center","animationsForBlocks":{"animation":"fade","variation":"up","delay":600,"mirror":true,"once":false},"style":{"spacing":{"padding":{"top":"0px","bottom":"0px"},"margin":{"bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|text-primary"}}}},"textColor":"text-primary","fontSize":"2-xl","fontFamily":"playfair-display"} -->
<p class="has-text-align-center has-text-primary-color has-text-color has-link-color has-playfair-display-font-family has-2-xl-font-size" style="margin-bottom:0px;padding-top:0px;padding-bottom:0px" data-aos="fade-up" data-aos-delay="600" data-aos-mirror="true"><?php /* Translators: 1. is a 'br' HTML element */ 
echo sprintf( esc_html__( 'Senior Full-stack & WordPress Developer%1$sAccessibility Champion', 'rachievee-2025' ), '<br>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60","left":"var:preset|spacing|70","right":"var:preset|spacing|70"}}},"layout":{"type":"constrained","contentSize":"1400px"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--70)"><!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"top","width":"66.66%","animationsForBlocks":{"animation":"","variation":"fade"}} -->
<div class="wp-block-column is-vertically-aligned-top" style="flex-basis:66.66%"><!-- wp:heading {"animationsForBlocks":{"animation":"","variation":"up-right","mirror":false,"once":false},"style":{"typography":{"letterSpacing":"1px","fontWeight":"700","fontStyle":"normal"},"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}},"textColor":"text-primary","fontSize":"xl","fontFamily":"playfair-display"} -->
<h2 class="wp-block-heading has-text-primary-color has-text-color has-playfair-display-font-family has-xl-font-size" style="margin-bottom:var(--wp--preset--spacing--40);font-style:normal;font-weight:700;letter-spacing:1px"><?php esc_html_e('About Me', 'rachievee-2025');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"fontSize":"lg"} -->
<p class="has-lg-font-size"><?php /* Translators: 1. is the start of a 'em' HTML element, 2. is the end of a 'em' HTML element, 3. is the start of a 'em' HTML element, 4. is the end of a 'em' HTML element */ 
echo sprintf( esc_html__( 'I’ve been a web developer for 14+ years, which means I’ve seen %1$severy kind%2$s of fire. From legacy codebase tangles and stylesheet chaos to accessibility black holes and plugins older than the internet itself—I’ve jumped in, cleaned up, and made things work %3$sbeautifully%4$s.', 'rachievee-2025' ), '<em>', '</em>', '<em>', '</em>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"typography":{"fontStyle":"italic","fontWeight":"700"},"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"textColor":"heading-secondary","fontSize":"xl","fontFamily":"playfair-display"} -->
<p class="has-heading-secondary-color has-text-color has-playfair-display-font-family has-xl-font-size" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);font-style:italic;font-weight:700"><?php esc_html_e('I make broken things lean again. I make confusing things usable. I make slow things fast. And most importantly, I make it all accessible.', 'rachievee-2025');?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"fontSize":"lg"} -->
<p class="has-lg-font-size"><?php /* Translators: 1. is the start of a 'strong' HTML element, 2. is the end of a 'strong' HTML element */ 
echo sprintf( esc_html__( 'If your site’s a bit of a dumpster fire, I’m the one who shows up with a hose, a smile, and a pull request. %1$sCleaning up and preventing web fires is what I do.%2$s If that sounds like the kind of rescue your project needs—whether it’s reviving an old site or building something new that isn\'t flammable — get in touch!', 'rachievee-2025' ), '<strong>', '</strong>' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"className":"is-style-button-fill"} -->
<p class="is-style-button-fill"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sView Portfolio%2$s', 'rachievee-2025' ), '<a href="' . esc_url( '/portfolio' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"33.33%","animationsForBlocks":{"animation":"","variation":"fade","delay":300},"style":{"spacing":{"padding":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-left:var(--wp--preset--spacing--60);flex-basis:33.33%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","style":{"border":{"width":"0px","style":"none"}}} -->
<figure class="wp-block-image size-full has-custom-border"><img src="http://rachievee-local.dvl.to/wp-content/themes/rachievee-2025/assets/images/Error-3-2.png" alt="" style="border-style:none;border-width:0px"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"animationsForBlocks":{"animation":"","variation":"fade"},"style":{"spacing":{"margin":{"bottom":"0px"},"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|60"}}},"backgroundColor":"bg-header","layout":{"type":"constrained","contentSize":"1400px"}} -->
<div class="wp-block-group has-bg-header-background-color has-background" style="margin-bottom:0px;padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:group {"tagName":"main","animationsForBlocks":{"animation":"","variation":"up"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"},"padding":{"right":"0px","left":"0px"}}},"layout":{"type":"default"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--70);margin-bottom:var(--wp--preset--spacing--70);padding-right:0px;padding-left:0px"><!-- wp:group {"animationsForBlocks":{"animation":"fade","variation":"up"},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group" data-aos="fade-up"><!-- wp:heading {"align":"wide","style":{"spacing":{"margin":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|50"}},"elements":{"link":{"color":{"text":"var:preset|color|text-primary"}}}},"textColor":"text-primary","fontFamily":"playfair-display"} -->
<h2 class="wp-block-heading alignwide has-text-primary-color has-text-color has-link-color has-playfair-display-font-family" style="margin-top:var(--wp--preset--spacing--60);margin-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e('Latest from the RachieVee Blog', 'rachievee-2025');?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"is-style-arrow","style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-orange"}}}},"textColor":"accent-orange"} -->
<p class="is-style-arrow has-accent-orange-color has-text-color has-link-color"><?php /* Translators: 1. is the start of a 'a' HTML element, 2. is the end of a 'a' HTML element */ 
echo sprintf( esc_html__( '%1$sRead more blog posts%2$s', 'rachievee-2025' ), '<a href="' . esc_url( '/blog' ) . '">', '</a>' ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":0,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"animationsForBlocks":{"animation":"fade","variation":"up","delay":300},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide" data-aos="fade-up" data-aos-delay="300"><!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"15px"}},"backgroundColor":"body-bg","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-body-bg-background-color has-background" style="border-radius:15px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-date {"format":"F j, Y","isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-orange"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"accent-orange"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|post-title"}}},"typography":{"fontSize":"1.5rem","fontStyle":"normal","fontWeight":"400"}},"textColor":"post-title","fontFamily":"playfair-display"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></main>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->