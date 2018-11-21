<?php

namespace WPS;

/**
 * Retrieve a specific post in \WPS\Post format
 * @param    {Integer}    [$id=null]    The post id to retrieve. If not specified, will take the current post id as input.
 * @return    {WPS\Post}    The post in WPS\Post format
 *
 * @example    php
 * $post = WPS::post(10);
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://developer.wordpress.org/reference/functions/get_post/
 */
function post($id = null) {
	if (!$id) {
		$id = get_the_ID();
	}
    $post = \get_post($id);
    // wrap it into a WPS_Post instance
    $post = new \WPS\Post($post);
    // return the WPS_Post
    return $post;
}
