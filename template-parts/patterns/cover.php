<?php
/**
 * Aquila theme cover template pattern
 *
 * @package aquila
 */
?>

<!-- wp:paragraph -->
<p></p>
<!-- /wp:paragraph -->

<!-- wp:cover {"url":"<?php echo esc_url(AQUILA_BUILD_IMG_URI . 'patterns/background-image-jsldkjwoei.jpg') ?>","id":102,"dimRatio":70,"align":"full"}
-->
<div class="wp-block-cover alignfull"><span aria-hidden="true"
        class="wp-block-cover__background has-background-dim-70 has-background-dim"></span><img
        class="wp-block-cover__image-background wp-image-102" alt=""
        src="<?php echo esc_url(AQUILA_BUILD_IMG_URI . 'patterns/background-image-jsldkjwoei.jpg') ?>"
        data-object-fit="cover" />
    <div class="wp-block-cover__inner-container">
        <!-- wp:heading {"fontSize":"large"} -->
        <h2 class="has-large-font-size">Cover Heading Title . </h2>
        <!-- /wp:heading -->

        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons">
            <!-- wp:button {"backgroundColor":"vivid-red"} -->
            <div class="wp-block-button"><a
                    class="wp-block-button__link has-vivid-red-background-color has-background">Cover Button</a></div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
</div>
<!-- /wp:cover -->