<?php

namespace WPS;

// check if the acf plugin if loaded
$length = get_field('wps_options_post_excerpt_length', 'option');
if ($length) {
	\WPS::excerpt_length(intval($length));
}
