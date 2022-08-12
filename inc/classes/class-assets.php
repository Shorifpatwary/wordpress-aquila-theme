<?php
/**
 * Enqueue styles / script  / Assets
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Assets
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
        add_action('wp_enqueue_scripts', [ $this , 'ragister_styles']);
        add_action('wp_enqueue_scripts', [ $this , 'ragister_scripts']);
        // add sytle for block editor on the backend .
        add_action('enqueue_block_assets', [$this , 'enqueue_editor_assets']);
    }

    public function ragister_styles()
    {
        // register BUILD / CSS
        wp_register_style('main-css', AQUILA_BUILD_CSS_URI . '/main.css', ['bootstrap-css'], filemtime(AQUILA_BUILD_CSS_DIR_PATH . '/main.css'), 'all');

        // register slick css
        wp_register_style('slick-css', AQUILA_BUILD_LIB_URI . '/css/slick.css', [], false, 'all');
        wp_register_style('slick-theme-css', AQUILA_BUILD_LIB_URI . '/css/slick-theme.css', [], false, 'all');

        // Register Bootstrap css
        wp_register_style('bootstrap-css', AQUILA_DIR_URI . '/assets/src/library/css/bootstrap.css', [], false, 'all');

        // Enqueue Styles
        wp_enqueue_style('bootstrap-css');
        wp_enqueue_style('main-css');
        wp_enqueue_style('slick-css');
        wp_enqueue_style('slick-theme-css');
    }
    public function ragister_scripts()
    {
        // Register scripts.
        // slicke js file
        wp_register_script('slick-js', AQUILA_BUILD_LIB_URI . '/js/slick.js', ['jquery'], filemtime(AQUILA_BUILD_LIB_DIR_PATH . '/js/slick.js'), true);
        // bootstrap js file
        wp_register_script('bootstrap-js', AQUILA_DIR_URI . '/assets/src/library/js/bootstrap.min.js', ['jquery' ], false, true);
        // main js file
        wp_register_script('main-js', AQUILA_BUILD_JS_URI . '/main.js', ['jquery' , 'slick-js'], filemtime(AQUILA_BUILD_JS_DIR_PATH . '/main.js'), true);
        // single.js file
        wp_register_script('single-js', AQUILA_BUILD_JS_URI . '/single.js', ['jquery', 'slick-js'], filemtime(AQUILA_BUILD_JS_DIR_PATH . '/single.js'), true);

        // Enqueue Scripts.
        wp_enqueue_script('bootstrap-js');
        wp_enqueue_script('main-js');
        wp_enqueue_script('slick-js');
        // conditionaly enqueue single.js file
        if (is_single()) {
            wp_enqueue_script('single-js');
        }
        /**
         * wp localize script
         */
        wp_localize_script('main-js', 'siteConfig', [
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'ajax_nonce' => wp_create_nonce('loadmore_post_nonce'),
        ]);
    }
    //enqueue editor assets method
    public function enqueue_editor_assets()
    {
        $assets_config_file = sprintf('%s/assets.php', AQUILA_BUILD_PATH);

        if (! file_exists($assets_config_file)) {
            return ;
        }
        $assets_config = require_once($assets_config_file);

        if (empty($assets_config['js/editor.js'])) {
            return ;
        }
        $editor_assets = $assets_config['js/editor.js'];
        //editor js dependecies
        $js_dependencies = (! empty($editor_assets['dependencies'])) ? $editor_assets['dependencies'] : [] ;
        //editor js version number
        $version = (! empty($editor_assets['version'])) ? $editor_assets['version'] : filemtime($assets_config_file) ;

        // Theme Gutenberg block js
        if (is_admin()) {
            wp_enqueue_script(
                'aquila-block-js',
                AQUILA_BUILD_JS_URI . '/blocks.js',
                $js_dependencies,
                $version,
                true,
            );
        }
        // Theme Gutenberg block css

        $css_dependencies = [
            'wp-block-library-theme',
            'wp-block-library'
        ];

        wp_enqueue_style(
            'aquila-block-css',
            AQUILA_BUILD_CSS_URI . '/blocks.css',
            $css_dependencies,
            filemtime(AQUILA_BUILD_CSS_DIR_PATH . '/blocks.css'),
            'all'
        );
    }
}

// register and enque style and script old function  -> mehtod
// public function aquila_enqueue_scripts()
// {
    //     // Register styles.

    //     wp_register_style('bootstrap-css', get_template_directory_uri() . '//assets/src/library/css/bootstrap.min.css', [], false, 'all');

    //     // Register scripts.
    //     wp_register_script('main-js', get_template_directory_uri() . '//assets/main.js', [], filemtime(get_template_directory() . '//assets/src/js/main.js'), true);
    //     wp_register_script('bootstrap-js', get_template_directory_uri() . '//assets/src/library/js/bootstrap.min.js', [ 'jquery' ], false, true);

    //     // Enqueue Styles.
    //     wp_enqueue_style('bootstrap-css');
    //     wp_enqueue_style('fonts-css', get_template_directory_uri() . '/assets/src/library/css/fonts/font.css', [], false, 'all');

    //     // Enqueue Scripts.
//     wp_enqueue_script('bootstrap-js');
//     wp_enqueue_script('main-js');
// }
// add_action('wp_enqueue_scripts', [$this , 'aquila_enqueue_scripts']);
