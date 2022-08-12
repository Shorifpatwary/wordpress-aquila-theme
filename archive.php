<?php
/**
 * Archive page template file .
 *
 * @package Aquila
 *
 */
get_header();
?>
<div class="primary">
    <main id="main" class="site-main my5" role="main">
        <div class="container">
            <header class="page-header">
                <?php
                // showing title if it exist
                if (!empty(single_term_title('', false))) {
                    printf(
                        "<h1 class='page_title'> %s </h1>",
                        single_term_title('', false)
                    );
                }
                if (!empty(get_the_archive_description())) {
                    ?>
                <div class="archive-description"> <?php the_archive_description(); ?>
                </div>
                <?php
                }
?>
            </header><!-- .page-header end  -->
            <div class="site-content">
                <div class="row">
                    <?php
                        if (have_posts()) :
                            while (have_posts()) : the_post();
                                get_template_part('template-parts/content', '', [ 'container_classes' => 'col-lg-4 col-md-6 col-sm-12 pb-4' ]);
                            endwhile;
                        else :
                            get_template_part('template-parts/content-none');
                        endif;
?>
                </div>
                <div>
                    <?php aquila_pagination(); ?>
                </div>
            </div>
        </div>
    </main>
</div>