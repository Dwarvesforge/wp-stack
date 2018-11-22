<?php

namespace WPS;

/**
 * Get some recent comments depending on the arguments you've passed.
 * The arguments are the same as the one of `get_comments` wordpress function.
 * This function return an array of WPS_Comment objects.
 * @param    {Array}    [$args=[]]   The arguments to pass to the `get_comments` wordpress function
 * @return    {Array<WPS_Comment>}    Array of WPS\Comment objects
 *
 * @example    php
 * $comments = WPS::recent_comments([
 *   'number' => 3
 * ]);
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 * @see    https://codex.wordpress.org/Function_Reference/get_comments
 */
function recent_comments($args = []) {
	return \WPS::comments(\Thorin::extend([
		'number' => 3,
		'orderby' => 'comment_date',
		'order' => 'DESC',
		'status' => 'approve',
		'count' => false
	], $args));
}
