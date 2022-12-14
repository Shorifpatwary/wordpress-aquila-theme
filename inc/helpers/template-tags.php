<?php

function get_the_post_custom_thumbnail($post_id, $size = 'featured-thumbnail', $additional_attributes = [])
{
    $custom_thumbnail = '';

    if (null === $post_id) {
        $post_id = get_the_ID();
    }

    if (has_post_thumbnail($post_id)) {
        $default_attributes = [
            'loading' => 'lazy'
        ];

        $attributes = array_merge($additional_attributes, $default_attributes);

        $custom_thumbnail = wp_get_attachment_image(
            get_post_thumbnail_id($post_id),
            $size,
            false,
            $attributes
        );
    }

    return $custom_thumbnail;
}

/**
 * Renders Custom Thumbnail with Lazy Load.
 *
 * @param int    $post_id               Post ID.
 * @param string $size                  The registered image size.
 * @param array  $additional_attributes Additional attributes.
 */
function the_post_custom_thumbnail($post_id, $size = 'featured-thumbnail', $additional_attributes = [])
{
    echo get_the_post_custom_thumbnail($post_id, $size, $additional_attributes);
}

// posted on function for showing post meta information .

function aquia_posted_on()
{
    $year    = get_the_date('Y');
    $month   = get_the_date('n');
    $day     = get_the_date('j');
    $post_date_archive_permalink  = get_day_link($year, $month, $day);

    $time_string =  '<time class="entry-date published updated" datetime="%1$s">
	%2$s
	</time>';
    // you can pass php date format to the get the time function . or wordPress formate like 'U' 'G' etc .
    if (get_the_time(DATE_W3C) !== get_the_modified_time(DATE_W3C)) {
        $time_string =  '<time class="entry-date published " datetime="%1$s">
		%2$s
		</time> 
		<time class="updated" datetime="%3$s">%4$s</time>';
    }
    $time_string = sprintf(
        $time_string,
        get_the_date(DATE_W3C),
        get_the_date(),
        get_the_modified_date(DATE_W3C),
        get_the_modified_date(),
    );
    $posted_on = sprintf(
        esc_html_x('Posted on %s', 'Post date', 'aquila'),
        '<a href="'. esc_url($post_date_archive_permalink).'" rel="bookmark" >'. $time_string .'</a>'
    );
    echo "<span class='posted__on text_secondery'> ".$posted_on."</span>";
}

// author info showing function

function aquila_posted_by()
{
    $byline = sprintf(esc_html_x(' By %s', 'post author', 'aquila'), '<span class="author vcard "><a href="'. esc_url(get_author_posts_url(get_the_author_meta('ID'))) .'"> '. esc_html(get_the_author()) .' </a></span>');

    echo '<span class="byline text-secondary"> ' . $byline . ' </span>';
}
// there are nothing error in this fiile . eslint is shoing wrong massage .
// post excerpt showing function
function aquila_the_excerpt($trim_character_count = 0)
{
    if (! has_excerpt() || $trim_character_count === 0) {
        the_excerpt();
        return ;
    }
    $excerpt = wp_strip_all_tags(get_the_excerpt(get_the_ID()));
    $excerpt = substr($excerpt, 0, $trim_character_count);
    // striping uncomplete charecter from the last
    $excerpt = substr($excerpt, 0, strrpos($excerpt, ' '));
    // concatinate excerpt text with '[...]' this
    $excerpt .= ' [...]';
    // print this
    echo $excerpt;
}

// post Read more button function
function aquila_excerpt_more($button_text = "Read More")
{
    // do not show this on the single page .
    if (! is_single()) {
        $more = sprintf(
            ' <a class="aquila-read-more text-white" href="%1$s"> <button class="btn btn-info my-2"> %2$s </button> </a> ',
            get_permalink(get_the_ID()),
            __("$button_text", 'aquila')
        );
    }
    return $more;
}

// aquila pagination function .
function aquila_pagination()
{
    // 9-21 time
    $allowed_tag = [
        'span' => [
            'class' => []
        ],
        'a' => [
            'class' => [],
            'href' => []
        ]
    ];
    $args = [
        'before_page_number' => '<span class="btn border border-secondary mr-2 mb-2">',
        'after_page_number' => '</span>'
    ];
    printf('<nav class="aquila-pagination clearfix">%s</nav>', wp_kses(paginate_links($args), $allowed_tag, ));
}

/**
 * Checks to see if the specified user id has a uploaded the image via wp_admin.
 *
 * @return bool  Whether or not the user has a gravatar
 */
function aquila_is_uploaded_via_wp_admin($gravatar_url)
{
    $parsed_url = wp_parse_url($gravatar_url);

    $query_args = ! empty($parsed_url['query']) ? $parsed_url['query'] : '';

    // If query args is empty means, user has uploaded gravatar.
    return empty($query_args);
}

/**
 * If the gravatar is uploaded returns true.
 *
 * There are two things we need to check, If user has uploaded the gravatar:
 * 1. from WP Dashboard, or
 * 2. or gravatar site.
 *
 * If any of the above condition is true, user has valid gravatar,
 * and the function will return true.
 *
 * 1. For Scenario 1: Upload from WP Dashboard:
 * We check if the query args is present or not.
 *
 * 2. For Scenario 2: Upload on Gravatar site:
 * When constructing the URL, use the parameter d=404.
 * This will cause Gravatar to return a 404 error rather than an image if the user hasn't set a picture.
 *
 * @param $user_email
 *
 * @return bool
 */
function aquila_has_gravatar($user_email)
{
    $gravatar_url = get_avatar_url($user_email);

    if (aquila_is_uploaded_via_wp_admin($gravatar_url)) {
        return true;
    }

    $gravatar_url = sprintf('%s&d=404', $gravatar_url);

    // Make a request to $gravatar_url and get the header
    $headers = @get_headers($gravatar_url);

    // If request status is 200, which means user has uploaded the avatar on gravatar site
    return preg_match("|200|", $headers[0]);
}

/**
 * Display Post pagination with prev next, first last, to, from
 *
 * @param $current_page_no
 * @param $posts_per_page
 * @param $article_query
 * @param $first_page_url
 * @param $last_page_url
 * @param bool $is_query_param_structure
 */

function aquila_the_post_pagination($current_page_no, $posts_per_page, $article_query, $first_page_url, $last_page_url, bool $is_query_param_structure)
{
    $prev_posts = ($current_page_no - 1) * $posts_per_page;
    $from       = 1 + $prev_posts;
    $to         = count($article_query->posts) + $prev_posts;
    $of         = $article_query->found_posts;
    $total_pages = $article_query->max_num_pages;

    $base = ! empty($is_query_param_structure) ? add_query_arg('page', '%#%') : get_pagenum_link(1) . '%_%';
    $format = ! empty($is_query_param_structure) ? '?page=%#%' : 'page/%#%'; ?>
<div class="mt-0 md:mt-10 mb-10 lg:my-5 flex items-center justify-end posts-navigation">

    <?php
        if (1 < $total_pages && !empty($first_page_url)) {
            printf(
                '<span class="mr-2">Showing %1$s - %2$s Of %3$s</span>',
                $from,
                $to,
                $of
            );
        }

    // First Page
    if (1 !== $current_page_no && ! empty($first_page_url)) {
        printf('<a class="first-pagination-link btn border border-secondary mr-2" href="%1$s" title="first-pagination-link">%2$s</a>', esc_url($first_page_url), __('First', 'aquila'));
    }

    echo paginate_links([
            'base'      => $base,
            'format'    => $format,
            'current'   => $current_page_no,
            'total'     => $total_pages,
            'prev_text' => __('Prev', 'aquila'),
            'next_text' => __('Next', 'aquila'),
        ]);

    // Last Page
    if ($current_page_no < $total_pages && !empty($last_page_url)) {
        printf('<a class="last-pagination-link btn border border-secondary ml-2" href="%1$s" title="last-pagination-link">%2$s</a>', esc_url($last_page_url), __('Last', 'aquila'));
    } ?>

</div>

<?php
}
