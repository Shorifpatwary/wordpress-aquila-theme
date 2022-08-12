<?php
/**
 * Main template file.
 *
 * @package Aquila
 *
 */
get_header();
?>
<div id="primary" class="container">
    <main id="main" class="site-main mt-4" role="main">
        <?php
    if (have_posts()) {
        ?>
        <div class="container">
            <div class="row">
                <?php
        while (have_posts()) {
            ?>
                <div class=" col-lg-4 col-md-6 col-sm-12">
                    <?php  get_template_part('template-parts/content'); ?>
                </div>
                <?php
                the_post();
        };


        aquila_pagination(); ?>
            </div>
        </div>
        <?php
        echo "<h1> Template parts Content none example </h1>";
        get_template_part('template-parts/content-none');
    } else {
        get_template_part('template-parts/content-none');
    }
    ?>
    </main>
</div>
<?php
get_footer();
