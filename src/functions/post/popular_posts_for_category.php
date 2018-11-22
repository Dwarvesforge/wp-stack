<?php

namespace WPS;

/**
 * Retrieve some popular posts for a given category depending on the args passed.
 * The args are the same as the one passed to the `get_posts` wordpress function.
 *
 * This function need the use of the `WPS::count_post_views` one to count the times a post is viewed.
 * Simply call the `WPS:count_post_views()` inside your `functions.php`.
 *
 * @param    {Integer}    $category     The category to take the posts from
 * @param    {Integer}    [$count=3]    The number of posts to get
 * @param    {Array}    [$args=[]]    The arguments used to query the posts
 * @return    {Array<WPS\Post>}    An array of WPS\Post objects
 *
 * @example    php
 * $posts = WPS::popular_posts_for_category(2, 3);
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://codex.wordpress.org/Template_Tags/get_posts
 */
function popular_posts_for_category($category, $count = 3, $args = []) {
    $args = \Thorin::extend([
		'cat'              => $category
    ], $args);
	// query the posts
	return \WPS::popular_posts($count, $args);
}
