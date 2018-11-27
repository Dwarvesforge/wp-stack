<?php

namespace WPS;

// check if the acf plugin if loaded
if (is_admin()) {
	$classes = get_field('wps_options_wysiwyg_additional_classes', 'option');
	if (@$classes) {
		\WPS::add_wysiwyg_class($classes);
	}
}
