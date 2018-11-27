<?php

namespace WPS;

// check if the acf plugin if loaded
if (is_admin()) {
	// handling try guttenberg patten
	$tryGuttenbergPanel = get_field('wps_options_remove_try_guttenberg_panel', 'option');
	if ($tryGuttenbergPanel) {
		\WPS::remove_try_guttenberg_panel();
	}
}
