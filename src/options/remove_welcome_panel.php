<?php

namespace WPS;

// check if the acf plugin if loaded
if (is_admin()) {
	// handling try guttenberg patten
	$welcomePanel = get_field('wps_options_remove_welcome_panel', 'option');
	if ($welcomePanel) {
		\WPS::remove_welcome_panel();
	}
}
