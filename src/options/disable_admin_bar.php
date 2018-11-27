<?php

namespace WPS;

// check if the acf plugin if loaded
$disable = get_field('wps_options_disable_admin_bar', 'option');
if ($disable) {
	\WPS::disable_admin_bar();
}
