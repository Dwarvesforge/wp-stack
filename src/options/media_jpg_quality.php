<?php

namespace WPS;

// check if the acf plugin if loaded
$quality = get_field('wps_options_media_jpg_quality', 'option');
if ($quality) {
	\WPS::jpg_quality(intval($quality));
}
