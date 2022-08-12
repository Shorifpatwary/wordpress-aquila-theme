<?php
/**
 * Custom Search form .
 */

?>
<form class="form-inline my-2 my-lg-0" method="get" role="search" action=<?php esc_url(home_url('/')) ?>>
    <span class="screen-reader-text"> <?php echo _x('Search for', 'label', 'aquila'); ?>
    </span>
    <input class="form-control mr-sm-2" type="search"
        placeholder="<?php echo  esc_attr_x('Search', 'placeholder', 'aquila')?>"
        value="<?php the_search_query()  ?>" name="s"
        aria-label="search">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> <?php echo esc_attr_x('Search', 'submit button', 'aquila') ?>
    </button>
</form>
<!-- time 5.00   -->