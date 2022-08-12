<?php
/**
 * Ragister Menus
 * @package Aquila
 *
 */
namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Menus
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
        add_action('init', [$this , 'register_menus']);
    }
    public function register_menus()
    {
        register_nav_menus([
            'Aquila_Header_Menu' => esc_html__('Header Menu', 'aquila'),
            'Aquila_Footer_menu' => esc_html__('Footer Menu', 'aquila')
        ]);
    }

    public function get_menu_id($location)
    {
        // get all the locations.
        $locations = get_nav_menu_locations();

        // get Object id by location
        $menu_id = $locations[$location];

        // return the menu id conditionally
        return  ! empty($menu_id) ? $menu_id : null;
    }
    public function get_child_menu_items($menu_array, $parent_id)
    {
        $child_menus = [];
        if (! empty($menu_array) && is_array($menu_array)) {
            foreach ($menu_array as $menu) {
                if (intval($menu->menu_item_parent) === $parent_id) {
                    array_push($child_menus, $menu);
                }
            }
            return $child_menus;
        }
    }
}
