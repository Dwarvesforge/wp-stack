<?php

namespace WPS;

/**
 * Get back the requested menu in object format. Each item is a WPS_Menu_Item object
 * that can contains the sub-item depending on the menu structure.
 * This function is very usefull to create simple as well as complexe menu without the
 * weird wordpress menu functions. Here you have the raw menu structured
 * in an array of objects that you can use to generate your menu easily.
 * @param    {String}    $name    The menu name to retrieve
 *
 * @example    php
 * $menu = WPS::menu('primary');
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://developer.wordpress.org/reference/functions/wp_get_nav_menu_items/
 */
function menu($name) {
    $items = \wp_get_nav_menu_items($name);
    if ( ! count($items)) return [];
    $menu = [];
    foreach ($items as $item) {
        if ($item->menu_item_parent) {
            $foundItem = _wps_recursive_find($menu, $item->menu_item_parent);
            if ($foundItem) {
                $foundItem->items[$item->ID] = new \WPS\Menu_Item($item);
            }
        } else {
            $menu[$item->ID] = new \WPS\Menu_Item($item);
        }
    }
    // return the menu
    return $menu;
}

function _wps_recursive_find(array $haystack, $needle)
{
    $iterator  = new \RecursiveArrayIterator($haystack);
    $recursive = new \RecursiveIteratorIterator(
        $iterator,
        \RecursiveIteratorIterator::SELF_FIRST
    );
    foreach ($recursive as $key => $value) {
        if ($key == $needle) {
            return $value;
        }
    }
}
