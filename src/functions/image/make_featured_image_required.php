<?php

namespace WPS;

$wps_make_featured_image_required_post_types = [];
/**
 * Make the featured image required
 *
 * @param    {Array}    [$post_types=['post']]    The post types for which the featured image is required
 *
 * @example    php
 * WPS::make_featured_image_required(['post']);
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function make_featured_image_required($post_types = ['post']) {
	global $wps_make_featured_image_required_post_types;
	$wps_make_featured_image_required_post_types = $post_types;
	\add_action('save_post', 'WPS\_make_featured_image_required_check_thumbnail');
	\add_action('admin_notices', 'WPS\_make_featured_image_required_thumbnail_error');
}

function _make_featured_image_required_check_thumbnail($post_id) {
	global $wps_make_featured_image_required_post_types;
	$post_type = \get_post_type($post_id);

	if (\in_array($post_type, $wps_make_featured_image_required_post_types) != true)
		return;

    if ( !\has_post_thumbnail($post_id) && get_post_status($post_id) == 'publish' ) {

        // set a transient to show the users an admin message
        \set_transient( "has_post_thumbnail", "no" );
        // unhook this function so it doesn't loop infinitely
        \remove_action('save_post', 'WPS\_make_featured_image_required_check_thumbnail');
        // update the post set it to draft
        \wp_update_post(array('ID' => $post_id, 'post_status' => 'draft'));

        \add_action('save_post', 'WPS\_make_featured_image_required_check_thumbnail');
    } else {
        \delete_transient( "has_post_thumbnail" );
    }
}

function _make_featured_image_required_thumbnail_error()
{
    // check if the transient is set, and display the error message
    if ( \get_transient( "has_post_thumbnail" ) == "no" ) {
        echo '<div id="message" class="error"><p><strong>' . __('You must select Featured Image. Your Post is saved but it can not be published.') . '</strong></p></div>';
        \delete_transient( "has_post_thumbnail" );
    }
}
