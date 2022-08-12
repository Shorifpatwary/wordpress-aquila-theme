<?php
/**
 * post casousel
 *
 * @package Aquila
 */
$args = [
    'posts_per_page' => 5,
    'post_type' => 'post',
    'update_post_meta_cache' => false,
    'update_post_term_cache' => false,
];
$post_query = new \WP_Query($args);
?>
<div class="posts-carousel">
    <div>
        <h2 class="h2 text-center text-black"> Heading One </h2>
    </div>
    <?php
    if ($post_query->have_posts()) {
        while ($post_query->have_posts()) {
            $post_query->the_post(); ?>
    <div class="card">
        <?php
            if (has_post_thumbnail()) {
                the_post_custom_thumbnail(
                    get_the_ID(),
                    'featured-thumbnail',
                    [
                        'sizes' => '(max-width:350px) 350px , 253px ',
                        'class' => 'w-100'
                    ]
                );
            } else {
                ?>
        <img src="https://via.placeholder.com/600" alt="">
        <?php
            } ?>
        <div class="card-body">
            <h2 class="card-title"> <?php the_title() ?>
            </h2>
            <p class="lead"><?php aquila_the_excerpt(); ?>
            </p>
            <a href="<?php esc_url(get_the_permalink()) ?>"
                class="link">
                <?php __('View More', 'aquila') ?>
            </a>
        </div>
    </div>
    <?php
        }
    }
?>
</div>

<!-- check WP_Query , wp_reset_postdate()   -->