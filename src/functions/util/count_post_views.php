<?php

namespace WPS;

/**
 * Count the number of views on each posts (pages, etc...) only for real visitors and not for connected administrators, authors, etc...
 * This function will add and maintain a post meta value called `post_viewed` that you can use later for to make queries.
 *
 * @example    php
 * WPS::count_post_views();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function count_post_views() {
	// stop here if the user is not a visitor
	// cause we don't want to track connected "admins"
	if (!\WPS::is_visitor()) return;

	// start session
	\WPS\session_start();
	// add a hook to count views
	\add_action('wp_head', function() {
		if( \is_single() ) {
			global $post;

			if (!isset($_SESSION['WPS_count_post_views'])) {
				$_SESSION['WPS_count_post_views'] = [];
			}

			// check if the post is already in the session array
			if (\in_array($post->ID, $_SESSION['WPS_count_post_views']) != false)
				return;

			// add the post if to the count_post_views stack in session
			\array_push($_SESSION['WPS_count_post_views'], $post->ID);

			// update the views count
			$views = \get_post_meta( $post->ID, 'post_viewed', true );
			if( $views == '' ) {
				\update_post_meta( $post->ID, 'post_viewed', '1' );
			} else {
				$views_no = \intval( $views );
				\update_post_meta( $post->ID, 'post_viewed', ++$views_no );
			}
		}
	});
}
