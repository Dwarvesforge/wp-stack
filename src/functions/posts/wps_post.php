<?php

/**
 * Retrieve a specific post in WPS_Post format
 * @param    {Integer}    $id    The post id to retrieve
 * @return    {WPS_Post}    The post in WPS_Post format
 * 
 * @example    php
 * $post = WPS::post(10);
 * 
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://developer.wordpress.org/reference/functions/get_post/
 */
function wps_post($id) {
    $post = get_post($id);
    // wrap it into a WPS_Post instance
    $post = new WPS_Post($post);
    // return the WPS_Post
    return $post;
}