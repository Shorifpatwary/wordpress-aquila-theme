<?php
/**
 * Block Pattarns
 *
 * @package Aquila
 */
namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Block_Patterns
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
         * setup action hooks with block patterns related functions .
         */

        add_action('init', [$this , 'register_block_patterns']);
        /**
         * register block pattern categories
         */
        add_action('init', [$this , 'register_block_pattern_categories']);
    }
    public function register_block_patterns()
    {
        /**
         * Cover pattern
         */

        $cover_content = $this->get_pattern_content('template-parts/patterns/cover');
        
        if (function_exists('register_block_pattern')) {
            register_block_pattern(
                'aquila/block_cover',
                [
                "title" => __("Aquila Cover", 'aquila'),
                "description" => __("Aquila Cover Block with image and text ", "aquila"),
                "categories" => ['cover' , 'Head Section' ],
                "content" => $cover_content ,
                ]
            );
        }

        /**
         * Two column pattern
         */
        $two_columns_content = $this->get_pattern_content('template-parts/patterns/two-columns');
        
        if (function_exists('register_block_pattern')) {
            register_block_pattern(
                'aquila/two-columns',
                [
                "title" => __("Two Columns", 'aquila'),
                "description" => __("Aquila Two Columns  with heading and text  ", "aquila"),
                "categories" => ['Columns' , 'Head Section' ],
                "content" => $two_columns_content ,
                ]
            );
        }
    }
    /**
     * get pattern content method .
     */

    public function get_pattern_content($template_pattern)
    {
        ob_start();
        
        get_template_part($template_pattern);

        $pattern_content = ob_get_contents();
        ob_end_clean();
        
        return $pattern_content ;
    }

    public function register_block_pattern_categories()
    {
        /**
         * defied categories in a variable
         */
        $pattern_categories = [
            'Cover' => __('Cover', 'aquila'),
            'Button' => __("Button", 'aquila'),
            "Carousel" => __("Carousel", "aquila"),
            "Card" => __("Card", "aquila"),
            "Head Section" => __("Head Section", "aquila"),
            "Footer Section" => __("Footer", "aquila"),
            "Columns" => __("Columns", "aquila"),
        ];

        if (!empty($pattern_categories) && is_array($pattern_categories)) {
            foreach ($pattern_categories as $pattern_category => $pattern_category_label) {
                register_block_pattern_category($pattern_category, [ "label" => $pattern_category_label ]);
            }
        }
    }
}
