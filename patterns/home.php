<?php
/**
 * Title: home
 * Slug: rachievee-2025/home
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|60","right":"var:preset|spacing|60"}}},"gradient":"header-gradient","layout":{"type":"constrained"}} -->
<main class="wp-block-group has-header-gradient-gradient-background has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--60)">
<!-- wp:heading {"textAlign":"left","level":1,"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|50"}}},"fontFamily":"playfair-display"} -->
<h1 class="wp-block-heading has-text-align-left has-playfair-display-font-family" style="padding-bottom:var(--wp--preset--spacing--50)"><?php esc_html_e('The RachieVee Blog', 'rachievee-2025');?></h1>
<!-- /wp:heading -->

<!-- wp:query {"queryId":4,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|60"}}}} -->
<!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|border","width":"1px"},"right":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"},"bottom":[]},"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--border);border-top-width:1px;border-right-style:none;border-right-width:0px;border-left-style:none;border-left-width:0px;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-orange"}}},"typography":{"fontStyle":"normal","fontWeight":"600"}},"textColor":"accent-orange","fontFamily":"open-sans"} /-->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|heading-secondary"}}}},"textColor":"heading-secondary","fontSize":"xl","fontFamily":"playfair-display"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"border":{"top":{"width":"0px","style":"none"},"right":{"width":"0px","style":"none"},"left":{"width":"0px","style":"none"}},"spacing":{"padding":{"top":"0","right":"var:preset|spacing|50","bottom":"0","left":"var:preset|spacing|50"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-top-style:none;border-top-width:0px;border-right-style:none;border-right-width:0px;border-left-style:none;border-left-width:0px;padding-top:0;padding-right:var(--wp--preset--spacing--50);padding-bottom:0;padding-left:var(--wp--preset--spacing--50)"><!-- wp:post-terms {"term":"category","textAlign":"left","separator":" ","style":{"layout":{"selfStretch":"fill","flexSize":null}}} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query --></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->
