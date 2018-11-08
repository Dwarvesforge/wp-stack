<?php

/**
 * Get some recent posts depending on the arguments you've passed.
 * The arguments are the same as the one of `wp_get_recent_posts` wordpress function.
 * This function return an array of WPS_Post objects.
 * @param    {Array}    [$args=[]]   The arguments to pass to the `wp_get_recent_posts` wordpress function
 * @return    {Array<WPS_Post>}    Array of WPS_Post objects
 * 
 * @example    php
 * $posts = WPS::recent_posts([
 *   'numberposts' => 3
 * ]);
 * 
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://codex.wordpress.org/Function_Reference/wp_get_recent_posts
 */
function wps_recent_posts($args = []) {
    // extend the default args
    $args = Thorin::extend([
        'numberposts' => 10,
        'offset' => 0,
        'category' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'include' => '',
        'exclude' => '',
        'meta_key' => '',
        'meta_value' =>'',
        'post_type' => 'post',
        'post_status' => 'publish',
        'suppress_filters' => true
    ], $args);
    // get the recent posts
    $recent_posts = wp_get_recent_posts( $args, ARRAY_A );
    // create a WPS_Post instance for each posts
    $recent_posts = array_map(function($post) {
        return new WPS_Post($post);
    }, $recent_posts);
    // return the recent posts
    return $recent_posts;
}