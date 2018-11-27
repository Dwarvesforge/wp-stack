<?php

namespace WPS;

// check if the acf plugin if loaded
$remove = get_field('wps_options_remove_wordpress_version', 'option');
if ($remove) {
	\WPS::remove_version();
}
