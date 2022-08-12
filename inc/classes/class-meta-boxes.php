<?php
/**
 * Ragister Menus
 * @package Aquila
 *
 */
namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Meta_boxes
{
    use Singleton;
    protected function __construct()
    {
        // load class.
        $this->setup_hooks();
    }
    
    protected function setup_hooks()
    {
        /**
         * Action.
         */
        add_action('add_meta_boxes', [$this,'add_custom_meta_box']);
        add_action('save_post', [$this,'save_post_meta_data']);
    }
    public function add_custom_meta_box()
    {
        // write some to add custom meta box .
        $screens = [ 'post', 'wporg_cpt' ];
        foreach ($screens as $screen) {
            add_meta_box(
                '_hide_page_title',                 // Unique ID
                __('Hide page title ', 'aquila'),   // Box title
                [$this,'custom_mta_box_html'],      // Content callback, must be of type callable
                $screen,
                'side'                              // Post type
            );
        }
    }
    // method for hide page title meta box html content .
    public function custom_mta_box_html($post)
    {
        /**
         *  use none for varification
         */
        wp_nonce_field(plugin_basename(__file__), "hide_title_meta_box_nonce_name");
        $value = get_post_meta($post->ID, '_hide_page_title', true); ?>

<label for="aquila-filed"><?php esc_html_e('Hide the page title ', 'aquila') ?></label>
<select name="aquila_hide_title_filed" id="aquila-filed" class="postbox">
    <option value="" disabled><?php esc_html_e('Select', 'aquila') ?>
    </option>
    <option value="yes" <?php selected($value, 'yes') ?>><?php esc_html_e('Yes', 'aquila') ?>
    </option>
    <option value="no" <?php selected($value, 'no') ?>><?php esc_html_e('No', 'aquila') ?>
    </option>
</select>
<?php
    }
    // save post meta hook callback function .
    public function save_post_meta_data($post_id)
    {
        /**
         * When the post is saved or updated we get $_post available
         * Check is current user is authorized
         */
        if (! current_user_can('edit_post', $post_id)) {
            return ;
        }
        /**
         * Check if the nonce value we recieved is the same we created .
         */
        if (! isset($_POST['hide_title_meta_box_nonce_name']) || ! wp_verify_nonce($_POST['hide_title_meta_box_nonce_name'], plugin_basename(__FILE__))) {
            return;
        }

        // write code to save meta data
        if (array_key_exists('aquila_hide_title_filed', $_POST)) {
            update_post_meta(
                $post_id,
                '_hide_page_title',
                $_POST['aquila_hide_title_filed']
            );
        }
    }
}
