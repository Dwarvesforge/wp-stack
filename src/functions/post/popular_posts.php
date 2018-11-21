<?php

namespace WPS;

/**
 * Retrieve some popular posts depending on the args passed.
 * The args are the same as the one passed to the `get_posts` wordpress function.
 *
 * This function need the use of the `WPS::count_post_views` one to count the times a post is viewed.
 * Simply call the `WPS:count_post_views()` inside your `functions.php`.
 *
 * @param    {Integer}    [$count=3]    The number of posts to get
 * @param    {Array}    [$args=[]]    The arguments used to query the posts
 * @return    {Array<WPS\Post>}    An array of WPS\Post objects
 *
 * @example    php
 * $posts = WPS::popular_posts(3);
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://codex.wordpress.org/Template_Tags/get_posts
 */
function popular_posts($count = 3, $args = []) {
    $args = \Thorin::extend([
        'posts_per_page'   => $count,
        'orderby'          => 'meta_value_num',
        'order'            => 'DESC',
        'meta_key'         => 'post_viewed',
    ], $args);
	// query the posts
	return \WPS::posts($args);
}
