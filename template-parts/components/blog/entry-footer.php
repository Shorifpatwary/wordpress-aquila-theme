<?php
/**
 * Template for entry footer
 * @package aquila
 *
 */
global $post;
$the_post_id = get_the_ID();
$article_terms = wp_get_post_terms($the_post_id, ['category' , 'post_tag']);

if (empty($article_terms) || ! is_array($article_terms)) {
    return;
}

?>
<div class="entry-footer mt-4">
    <?php
    foreach ($article_terms as $key => $article_term) {
        ?>
    <a href="<?php echo esc_url(get_term_link($article_term))  ?>"
        class="entry-footer-link  text-black-50">
        <button class="btn border border-secondary mb-2 mr-2">
            <?php echo esc_html__($article_term->name, 'aquila') ?>
        </button>
    </a>
    <?php
    }
    ?>
</div>