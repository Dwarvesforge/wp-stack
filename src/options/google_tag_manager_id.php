<?php

namespace WPS;

// check if the acf plugin if loaded

$GTMId = get_field('wps_options_google_tag_manager_id', 'option');
if ($GTMId) {
	\WPS::google_tag_manager($GTMId);
}
