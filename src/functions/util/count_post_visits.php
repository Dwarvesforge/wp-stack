<?php

namespace WPS;

/**
 * Count the number of visits on each posts (pages, etc...).
 * This function will add and maintain a post meta value called `post_visits` that you can use later for to make queries.
 *
 * @example    php
 * WPS::count_post_visits();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function count_post_visits() {
	// start session
	\WPS\session_start();
	// add a hook to count visits
	add_action('wp_head', 'WPS\_wps_count_post_visits');
}
function _wps_count_post_visits() {
    if( is_single() ) {
        global $post;

		if (!isset($_SESSION['WPS_count_post_visits'])) {
			$_SESSION['WPS_count_post_visits'] = [];
		}

		// check if the post is already in the session array
		if (in_array($post->ID, $_SESSION['WPS_count_post_visits']) != false)
			return;

		// add the post if to the count_post_visits stack in session
		array_push($_SESSION['WPS_count_post_visits'], $post->ID);

		// update the visits count
		$views = get_post_meta( $post->ID, 'post_visits', true );
        if( $views == '' ) {
            update_post_meta( $post->ID, 'post_visits', '1' );
        } else {
            $views_no = intval( $views );
            update_post_meta( $post->ID, 'post_visits', ++$views_no );
        }
    }
}
