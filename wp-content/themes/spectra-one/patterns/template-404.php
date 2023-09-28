<?php
/**
 * Title: Template 404
 * Slug: spectra-one/template-404
 * Categories: template
 * Inserter: false
 */
?>
<!-- wp:group {"tagName":"main","align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|large","padding":{"top":"var:preset|spacing|x-large","bottom":"var:preset|spacing|x-large"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group alignwide"
    style="padding-top:var(--wp--preset--spacing--x-large);padding-bottom:var(--wp--preset--spacing--x-large)">
    <!-- wp:heading {"textAlign":"left","level":1,"align":"wide","className":"wp-block-heading"} -->
    <h1 class="alignwide has-text-align-left wp-block-heading"><?php esc_html_e( 'Error 404', 'spectra-one' ); ?></h1>
    <!-- /wp:heading -->

    <!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:paragraph {"align":"left","className":"aligncenter","fontSize":"large"} -->
        <p class="has-text-align-left aligncenter has-large-font-size"><?php esc_html_e( 'Unfortunately, this page doesn\'t exist.', 'spectra-one' ); ?><br><?php esc_html_e( 'Maybe try a search?', 'spectra-one' ); ?></p>
        <!-- /wp:paragraph -->

        <!-- wp:search {"label":"<?php esc_html_e( 'Search', 'spectra-one' ); ?>","showLabel":false,"placeholder":"<?php esc_attr_e( 'Search...', 'spectra-one' ); ?>","width":300,"widthUnit":"px","buttonText":"<?php esc_html_e( 'Search', 'spectra-one' ); ?>","buttonPosition":"button-inside","buttonUseIcon":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|md"}}},"className":"is-style-swt-search-minimal"} /-->
    </div>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->