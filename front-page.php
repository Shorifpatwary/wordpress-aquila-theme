<?php
/**
 * Front page template
 * @package aquila
 */
get_header();

?>
<div id="primary" class="home-page-wrap">
    <main id="main" class="site-main mt-4" role="main">
        <div class="row">
            <?php
    if (have_posts()) {
        while (have_posts()) {
            get_template_part('template-parts/content', 'page');
            the_post();
        }
    } else {
        get_template_part('template-parts/content-none');
    }
get_template_part('template-parts/components/posts-carousel');
?>

        </div>
    </main>
</div>
<?php

get_footer();
