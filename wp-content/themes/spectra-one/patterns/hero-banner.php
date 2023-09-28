<?php

/**
 * Title: Hero banner
 * Slug: spectra-one/hero-banner
 * Categories: featured
 * Keywords: hero Banner
 */

$get_url = trailingslashit(get_template_directory_uri());

$images = [
    $get_url . "assets/image/hero-gradient.svg",
    $get_url . "assets/image/hero-img.png"
];
?>

<!-- wp:cover {"url":"<?php echo esc_url( $images[0] ); ?>","id":900,"dimRatio":0,"focalPoint":{"x":0.66,"y":0.88},"contentPosition":"center center","isDark":false,"style":{"spacing":{"padding":{"top":"var:preset|spacing|xx-large","bottom":"var:preset|spacing|x-large","right":"0","left":"0"},"margin":{"top":"0","bottom":"0"}}}} -->
<div class="wp-block-cover is-light" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--xx-large);padding-right:0;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:0"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-900" alt="" src="<?php echo esc_url( $images[0] ); ?>" style="object-position:66% 88%" data-object-fit="cover" data-object-position="66% 88%"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|medium","left":"var:preset|spacing|medium"},"padding":{"top":"var:preset|spacing|large"}}}} -->
<div class="wp-block-columns alignwide" style="padding-top:var(--wp--preset--spacing--large)"><!-- wp:column {"style":{"spacing":{}}} -->
<div class="wp-block-column"><!-- wp:paragraph {"style":{"typography":{"textTransform":"uppercase","letterSpacing":"2px"}},"textColor":"neutral","fontSize":"x-small"} -->
<p class="has-neutral-color has-text-color has-x-small-font-size" style="letter-spacing:2px;text-transform:uppercase"><?php esc_html_e( 'New experience', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1,"style":{"typography":{"letterSpacing":"-1px"}},"textColor":"heading","className":"wp-block-heading"} -->
<h1 class="wp-block-heading has-heading-color has-text-color" style="letter-spacing:-1px"><?php esc_html_e( 'Build your website', 'spectra-one' ); ?></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"var:preset|spacing|x-large"}}},"textColor":"body"} -->
<p class="has-body-color has-text-color" style="padding-right:var(--wp--preset--spacing--x-large)"><?php esc_html_e( 'Create a functional and visually appealing website without having to write code.', 'spectra-one' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"margin":{"top":"var:preset|spacing|medium"}}}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--medium)"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button"><?php esc_html_e( 'Get Started', 'spectra-one' ); ?></a></div>
<!-- /wp:button -->

<!-- wp:button {"textColor":"secondary","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-secondary-color has-text-color wp-element-button"><?php esc_html_e( 'Learn More', 'spectra-one' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"id":882,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( $images[1] ); ?>" alt="" class="wp-image-882"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->