<?php

namespace WPS;

// check if the acf plugin if loaded
if (function_exists('get_field')) {
	$quality = get_field('wps_options_images_jpg_quality', 'option');
	if ($quality) {
		\WPS::jpg_quality(intval($quality));
	}
}
