<?php
/**
 * cannot part for displaying a massage that post cannot be found . 
 * 
 * @package Aquila 
 */

?>
<section class="no-result not-found">
    <header class="page-header">
        <h1 class="page-title"><?php esc_html_e('Nothing Found ', 'aquila') ?></h1>
    </header>
    <div class="page-content">
        <?php if( is_home() && current_user_can('publish_posts')){ ?>
        <p>
            <?php printf(wp_kses( __('Ready to publish your first post ? <a href="%s">Get Started Here </a> ', 'aquila' ),
                [
                    'a' => [
                        'href' => []
                    ]
                ]
                    ), esc_url(admin_url('post-new.php'))) ?>
        </p>
        <?php }else if( is_search() ) { ?>
        <p> <?php esc_html_e('Sorry but nothing matched your search item . Please try again some different keyword .  ','aquila') ?>
        </p>
        <?php get_search_form() ?>
        <?php
        }else{
            ?>
        <p> <?php esc_html_e(' lt Items that we cannot find what you are looking for . perhaps search can help you .  ','aquila') ?>
        </p>
        <?php get_search_form() ;
        }
        ?>
    </div>
</section>