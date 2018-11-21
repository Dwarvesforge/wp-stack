<?php

namespace WPS;

/**
 * Retrieve some popular posts depending on the args passed.
 * The args are the same as the one passed to the `get_posts` wordpress function.
 *
 * This function need the use of the `WPS::count_post_visits` one to count the times a post is viewed.
 * Simply call the `WPS:count_post_visits()` inside your `functions.php`.
 *
 * @param    {Array}    [$args=[]]    The arguments used to query the posts
 * @return    {Array<WPS_Post>}    An array of WPS_Post objects
 *
 * @example    php
 * $posts = WPS::posts();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://codex.wordpress.org/Template_Tags/get_posts
 */
function popular_posts($args = []) {
    $args = \Thorin::extend([
        'posts_per_page'   => 3,
        'orderby'          => 'meta_value_num',
        'order'            => 'DESC',
        'meta_key'         => 'post_visits',
    ], $args);
	// query the posts
	return \WPS::posts($args);
}
