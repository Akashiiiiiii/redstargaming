<?php
/**
 * Title: Wide banner with button
 * Slug: spectra-one/wide-banner-with-button
 * Categories: call-to-action
 * Keywords: wide banner with button
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . "assets/image/banner-gradient.svg",
];

?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"surface","layout":{"type":"default"}} -->
<div class="wp-block-group has-surface-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:cover {"url":"<?php echo esc_url( $images[0] ); ?>","id":984,"dimRatio":0,"overlayColor":"surface","minHeight":316,"contentPosition":"center center","isDark":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|large","bottom":"var:preset|spacing|large","right":"0","left":"0"}}}} -->
<div class="wp-block-cover is-light" style="padding-top:var(--wp--preset--spacing--large);padding-right:0;padding-bottom:var(--wp--preset--spacing--large);padding-left:0;min-height:316px"><span aria-hidden="true" class="wp-block-cover__background has-surface-background-color has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-984" alt="" src="<?php echo esc_url( $images[0] ); ?>" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:heading {"textAlign":"center","style":{"typography":{"letterSpacing":"-1px"}},"textColor":"heading","className":"wp-block-heading"} -->
<h2 class="wp-block-heading has-text-align-center has-heading-color has-text-color" style="letter-spacing:-1px"><?php esc_html_e( 'Build your own website', 'spectra-one' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph {"align":"center","textColor":"body"} -->
<p class="has-text-align-center has-body-color has-text-color"><?php esc_html_e( 'Take your website to the next level!', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->
<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'spectra-one' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover --></div>
<!-- /wp:group -->