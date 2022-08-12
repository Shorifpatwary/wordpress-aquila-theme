<?php
/**
 * Blocks
 * @package Aquila
 *
 */
namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Blocks
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
        // this hook is already deprecated . I'm testing this right now . is it or not ?
        add_action('block_categories_all', [$this , 'add_block_categories']);
    }

    public function add_block_categories($categories)
    {
        // using array column function to get column value . you can use wordpress function wp_list_pluck() function instead .
        $category_slugs = array_column($categories, 'slug');
        // Check if this category already exist ?
        if (in_array('aquila', $categories, true)) {
            return $categories ;
        }
        // Add new arrays to register as a block category
        $categories += array_merge($categories, [
            [
                'slug' => 'aquila' ,
                'title' => __('Aquila Blcoks ', 'aquila'),
                'icon' => 'table-row-after',
                ]
            ]);
        // return merge array .
        return $categories ;
    }
}
