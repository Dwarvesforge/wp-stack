<?php

namespace WPS;

// check if the acf plugin if loaded
$GAId = get_field('wps_options_google_analytics_id', 'option');
if ($GAId) {
	\WPS::google_analytics($GAId);
}
