<?php

namespace WPS;

/**
 * Retrieve some random posts depending on the args passed.
 * The args are the same as the one passed to the `get_posts` wordpress function.
 * @param    {Array}    [$args=[]]    The arguments to query the posts
 * @return    {Array<WPS\Post>}    An array of WPS\Post objects
 *
 * @example    php
 * $posts = WPS::random_posts();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://codex.wordpress.org/Template_Tags/get_posts
 */
function random_posts($args = []) {
    $args = \Thorin::extend([
		'order'            => '',
        'orderby'          => 'rand'
    ], $args);
	// return posts
	return \WPS::posts($args);
}
