<?php

namespace WPS;

// check if the acf plugin if loaded
if (function_exists('get_field')) {
	$length = get_field('wps_options_post_excerpt_length', 'option');
	if ($length) {
		\WPS::excerpt_length(intval($length));
	}
}
