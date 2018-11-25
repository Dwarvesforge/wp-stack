<?php

namespace WPS;

// check if the acf plugin if loaded
if (function_exists('get_field') && is_admin()) {
	$stylesheet = get_field('wps_options_wysiwyg_stylesheet', 'option');
	if (@$stylesheet) {
		\WPS::add_wysiwyg_stylesheet($stylesheet);
	}
}
