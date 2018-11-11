<?php
/**
 * Retrieve some posts depending on the args passed.
 * The args are the same as the one passed to the `get_posts` wordpress function.
 * @param    {Array}    [$args=[]]    The arguments to query the posts
 * @return    {Array<WPS_Post>}    An array of WPS_Post objects
 * 
 * @example    php
 * $posts = WPS::posts();
 * 
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://codex.wordpress.org/Template_Tags/get_posts
 */
function wps_posts($args = []) {
    $args = Thorin::extend([
        'posts_per_page'   => 5,
        'offset'           => 0,
        'category'         => '',
        'category_name'    => '',
        'orderby'          => 'date',
        'order'            => 'DESC',
        'include'          => '',
        'exclude'          => '',
        'meta_key'         => '',
        'meta_value'       => '',
        'post_type'        => 'post',
        'post_mime_type'   => '',
        'post_parent'      => '',
        'author'	   => '',
        'author_name'	   => '',
        'post_status'      => 'publish',
        'suppress_filters' => true,
        'fields'           => '',
    ], $args);
    // query the posts
    $posts = get_posts($args);
    // transform each posts in a WPS_Post one
    $posts = array_map(function($post) {
        return new WPS_Post($post);
    }, $posts);
    // return the posts
    return $posts;
}