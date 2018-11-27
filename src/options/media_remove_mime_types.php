<?php

namespace WPS;

// check if the acf plugin if loaded
$types = get_field('wps_options_media_remove_mime_types', 'option');
if (@$types) {
	$types = \explode(',', $types);
	$types = array_map(function($item) {
		return trim($item);
	}, $types);
	\WPS::remove_mime_types($types);
}
