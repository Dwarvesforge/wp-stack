<?php

namespace WPS;

/**
 * Reset the dashboard by removing all the meta boxes
 *
 * @example    php
 * WPS::reset_dashboard();
 *
 * @author    Olivier Bossel <olivier.bossel@gmail.com> (https://olivierbossel.com)
 */
function reset_dashboard() {
	add_action('wp_dashboard_setup', function() {
		$boxes = \WPS\get_meta_boxes( 'dashboard', 'normal' );
		foreach($boxes['core'] as $box) {
			\remove_meta_box($box['id'], 'dashboard', 'normal');
		}
		$boxes = \WPS\get_meta_boxes( 'dashboard', 'side' );
		foreach($boxes['core'] as $box) {
			\remove_meta_box($box['id'], 'dashboard', 'side');
		}
	});
}
