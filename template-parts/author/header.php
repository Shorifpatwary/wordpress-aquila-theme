<?php
/**
 * Author Header Template Part.
 *
 * @package Aquila
 */



$author_email = get_the_author_meta('user_email');
$has_avatar   = aquila_has_gravatar($author_email);
$avatar       = get_avatar($author_email, 240, '', '', [ 'class'   => 'rounded-circle', 'default' => '404' ]);

$author_firstName_first_charecter  = substr(esc_html(get_the_author_meta('first_name')), 0, 1);
$author_lastName_first_charecter  = substr(esc_html(get_the_author_meta('last_name')), 0, 1);
?>
<header class="page-header row mb-4">
    <div class="author-col-one col-lg-3 col-sm-12">
        <div id="author-avatar" class=" d-flex align-items-start">
            <?php
            if (!empty($has_avatar)) {
                echo wp_kses_post($avatar);
            } else {
                printf(
                    '<div id="author-profile-img" style="width: 230px; height: 230px;" class="rounded-circle bg-secondary d-flex justify-content-center align-items-center"><span class=" display-1 text-white inset-center text-capitalize"><span id="author-firstname" class="">%1$s</span><span id="author-lastname" class="">%2$s</span></span></div>',
                    $author_firstName_first_charecter,
                    $author_lastName_first_charecter
                ) ;
            }
?>
        </div>
    </div>
    <div class="author-col-two text-left col-lg-9 col-md-9 col-sm-12 ml-0 pl-3">
        <?php
        if (! empty(get_the_author_meta('display_name'))) {
            printf(
                '<h1 class="inline-block uppercase text-26px leading-30px mt-0 mb-3">%s</h1>',
                get_the_author_meta('display_name')
            );
        }
        // If a user has filled out their description, show a bio on their entries.
        if (get_the_author_meta('description')) : ?>
        <div id="author-info">
            <div id="author-description">
                <p class="text-left md:text-left"><?php echo get_the_author_meta('description'); ?>
                </p>
            </div>
        </div>
        <?php endif; ?>
    </div>
</header>
<!-- lksjdflksdf -->