<?php

namespace WPS;

/**
 * Remove some dashboard meta boxes by passing ther ids
 *
 * @param    {Array}    $ids    The metas boxes ids to remove
 *
 * @example    php
 * WPS::remove_dashboard_meta_boxes([
 * 	'dashboard_right_now', 'dashboard_activity'
 * ]);
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function remove_dashboard_meta_boxes($ids) {
	add_action('wp_dashboard_setup', function() use($ids) {
		$boxes = \WPS\get_meta_boxes( 'dashboard', 'normal' );
		foreach($boxes as $priority=>$boxes) {
			foreach($boxes as $box) {
				if (in_array($box['id'], $ids) != false) {
					\remove_meta_box($box['id'], 'dashboard', 'normal');
				}
			}
		}
		$boxes = \WPS\get_meta_boxes( 'dashboard', 'side' );
		foreach($boxes as $priority=>$boxes) {
			foreach($boxes as $box) {
				if (in_array($box['id'], $ids) != false) {
					\remove_meta_box($box['id'], 'dashboard', 'side');
				}
			}
		}
	});
}
