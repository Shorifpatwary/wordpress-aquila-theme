<?php
/**
 * Bootstraps the Theme.
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME
{
    use Singleton;

    protected function __construct()
    {
        // Load class.
        Assets::get_instance();
        Menus::get_instance();

        Meta_boxes::get_instance();
        Block_Patterns::get_instance();
        Blocks::get_instance();
        Sidebars::get_instance();
        Clock_Widget::get_instance();
        Loadmore_Posts::get_instance();
        Loadmore_Single::get_instance();
        Register_Post_Types::get_instance();
        Register_Taxonomies::get_instance();
        Archive_Settings::get_instance();


        $this->setup_hooks();
    }

    protected function setup_hooks()
    {
        /**
         * Action.
         */
        add_action('after_setup_theme', [ $this , 'setup_theme']);
        // showing massage in wordpress dashbord
        // admin notices and all admin notices are same
        add_action('admin_notices', [$this , 'sample_admin_notice__success']);
    }
    // admin notices hook call back function
    public function sample_admin_notice__success()
    {
        $class = 'notice notice-success is-dismissible';
        $message = __('This is a admin notice massage ', 'aquila');

        printf('<div class="%1$s"><p>%2$s</p></div>', esc_attr($class), esc_html($message));
    }
    // after setup theme hook call back function
    public function setup_theme()
    {
        add_theme_support('title-tag');
        add_theme_support('custom-logo', [
            'header-text' => ['site-title', 'site-description'],
            'height'	 => 100,
            'width'		 => 400,
            'flex-height' => true,
            'flex-width'  => true,
            'unlink-homepage-logo' => true,
        ]);
        add_theme_support('custom-background', [
            'default-color' => '#fff',
            'default-position-x' => 'right',
            'default-position-y' => 'top',
            'default-repeat'     => 'cover',
        ]);
        add_theme_support('post-thumbnails');
        // ragister image size for aquia theme
        add_image_size('thumbnail', 350, 233, true);
        // customize selective refresh widgets
        add_theme_support('customize-selective-refresh-widgets');
        add_theme_support("automatic-feed-links");
        add_theme_support(
            'html5',
            [
                'comment-list',
                'comment-form',
                'search-form',
                'gallery',
                'caption',
                'style',
                'script'
            ]
        );
        add_theme_support('editor-styles');
        /**
         * Add editor style for backend editor style .
         */
        add_editor_style('assets/build/css/editor.css');

        add_theme_support('wp-block-styles');
        add_theme_support('align-wide');

        add_theme_support('widgets');
        // post format support
        add_theme_support('post-formats', [
            'aside',
            'gallery',
            'link',
            'image',
            'qoute',
            'status',
            'video',
            'audio',
            'chat'
        ]);
        /**
         * Remove Theme Support
         * remove default theme pattern from wordpress
         */
        remove_theme_support('core-block-patterns');

        // content width with global content width variable .
        global $content_width;
        if (!isset($content_width)) {
            $content_width = 1245;
        }
    }
}
/**
* Essential theme supports
* */
// function theme_setup(){
// /** automatic feed link*/
// add_theme_support( 'automatic-feed-links' );

// /** tag-title **/
// add_theme_support( 'title-tag' );

// /** post formats */
// $post_formats = array('aside','image','gallery','video','audio','link','quote','status');
// add_theme_support( 'post-formats', $post_formats);

// /** post thumbnail **/
// add_theme_support( 'post-thumbnails' );

// /** HTML5 support **/
// add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

// /** refresh widgest **/
// add_theme_support( 'customize-selective-refresh-widgets' );

// /** custom background **/
// $bg_defaults = array(
// 'default-image' => '',
// 'default-preset' => 'default',
// 'default-size' => 'cover',
// 'default-repeat' => 'no-repeat',
// 'default-attachment' => 'scroll',
// );
// add_theme_support( 'custom-background', $bg_defaults );

// /** custom header **/
// $header_defaults = array(
// 'default-image' => '',
// 'width' => 300,
// 'height' => 60,
// 'flex-height' => true,
// 'flex-width' => true,
// 'default-text-color' => '',
// 'header-text' => true,
// 'uploads' => true,
// );
// add_theme_support( 'custom-header', $header_defaults );

// /** custom log **/
// add_theme_support( 'custom-logo', array(
// 'height' => 60,
// 'width' => 400,
// 'flex-height' => true,
// 'flex-width' => true,
// 'header-text' => array( 'site-title', 'site-description' ),
// ) );



// }
