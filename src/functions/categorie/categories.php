<?php

namespace WPS;

/**
 * Retrieve back the categories of your wordpress installation.
 * @param    {Array}    [$args=[]]    The argument that will be passed to the `get_categories` wordpress function.
 * @return    {Array<WPS_Category>}    An array of WPS_Category objects
 *
 * @example    php
 * $categories = WPS::categories();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://developer.wordpress.org/reference/functions/get_categories/
 */
function categories($args = []) {
    $cats = \get_categories($args);
    $cats = \array_map(function($cat) {
        return new \WPS\Category($cat);
    }, $cats);
    return $cats;
}
