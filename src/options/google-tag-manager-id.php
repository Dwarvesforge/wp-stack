<?php

namespace WPS;

// check if the acf plugin if loaded
if (function_exists('get_field')) {
	$GTMId = get_field('wps_options_google_tag_manager_id', 'option');
	if ($GTMId) {
		\WPS::google_tag_manager($GTMId);
	}
}
