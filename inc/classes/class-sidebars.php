<?php
/**
 * Register sidebers
 *
 * @package Aquila
 *
 */
namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Sidebars
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
         * Register sidebar widget
         */
        add_action('widgets_init', [$this , 'register_sidebars']) ;
        /**
         * Register Clock widget
         */
        add_action('widgets_init', [$this , 'clock_widget']) ;
    }
    public function register_sidebars()
    {
        // register main sidebar
        register_sidebar([
            'id' => 'sidebar-1',
            // 'id' => 'main-sidebar-id',
            'name' => __('Aquila Sidebar ', 'aquila'),
            'discription' => __('Main sidebar', 'aquila'),
            'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after-title' => '</h3>'
        ]);
        /**
         * register footer sidebar
         */
        register_sidebar([
            'id' => 'sidebar-2',
            // 'id' => 'footer-sidebar-id',
            'name' => __('Aquila Footer', 'aquila'),
            'discription' => __('Footer sidebar', 'aquila'),
            'before_widget' => '<div id="%1$s" class="widget widget-footer cell column %2$s">',
            'after_widget' => '</div>',
            'before_title' => '<h3 class="widget-title">',
            'after-title' => '</h3>'
        ]);
    }
    /**
     * Clock widget register method
     */
    public function clock_widget()
    {
        /**
         *  pass a class to crate widget in the dashbord .
         * @param || pass a class to create a widget .
         */
        register_widget('AQUILA_THEME\Inc\Clock_Widget');
    }
}
