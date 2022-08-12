<?php
/**
 * Single post template file.
 *
 * @package Aquila
 *
 */

get_header();

?>
<div id="primary" class="container">
    <main id="main" class="site-main mt-4" role="main">
        <div class="row">
            <!-- single page main content  -->
            <div class="col-md-8">
                <?php
    if (have_posts()) {
        ?>
                <div class="container">
                    <div class="post-wrap">
                        <div class="row">
                            <?php
                 while (have_posts()) {
                     get_template_part('template-parts/content');
                     the_post();
                 } ?>
                            <p class="lead"> Go your favorite page </p>
                            <?php aquila_pagination(); ?>
                        </div>
                    </div>
                </div>
                <?php
    } else {
        ?>
                <div class="contant-none border-left border-width-4 bg-warning p-5 rounded border-danger">
                    <?php get_template_part('template-parts/content-none') ?>
                </div>
                <?php
    }
    echo do_shortcode('[single_post_listings]');
?>
            </div>
            <!-- single page side bar content  -->
            <div class="col-md-4">
                <?php get_sidebar() ?>
            </div>
        </div>
    </main>
</div>
<?php

get_footer();
