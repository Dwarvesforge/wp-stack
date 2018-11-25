<?php

namespace WPS;

// check if the acf plugin if loaded
if (function_exists('get_field')) {
	$disable = get_field('wps_options_disable_admin_bar', 'option');
	if ($disable) {
		\WPS::disable_admin_bar();
	}
}
