<?php

namespace WPS;

/**
 * Get meta boxes
 *
 * @param    {String}    $screen    The screen on which to get the metas boxes. Usualy "dashboard", "post", "page", "link", "attachment" or "custom_post_type" id
 * @param    {String}    $context    Used to provide the position of the custom meta on the display screen. Possible values are "normal", "advanced" and "side"
 * @return    {Array}    An array of meta boxes
 *
 * @example    php
 * $boxes = \WPS\internal\get_meta_boxes('dashboard', 'normal');
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://wordpress.stackexchange.com/questions/56104/get-list-of-registered-meta-boxes-and-removing-them
 */
function get_meta_boxes( $screen = null, $context = 'advanced' ) {
	global $wp_meta_boxes;
    if ( empty( $screen ) )
        $screen = get_current_screen();
    elseif ( is_string( $screen ) )
        $screen = convert_to_screen( $screen );
    $page = $screen->id;
    return $wp_meta_boxes[$page][$context];
}
